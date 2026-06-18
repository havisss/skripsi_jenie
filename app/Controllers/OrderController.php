<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\PesananModel;
use App\Models\PesananDetailModel;
use App\Models\ProdukModel;

class OrderController extends BaseController
{
    public function processCheckout()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $id_pelanggan = $session->get('id_pelanggan');
        
        // Ambil data form
        $alamat_kirim = $this->request->getPost('alamat') . ', ' . $this->request->getPost('kota') . ', ' . $this->request->getPost('provinsi') . ' - Penerima: ' . $this->request->getPost('nama_penerima') . ' (' . $this->request->getPost('no_telp') . ')';
        $jasa_kirim = $this->request->getPost('jasa_kirim');
        
        $cartModel = new CartModel();
        $produkModel = new ProdukModel();
        
        $cartItems = $cartModel->getCartWithProducts($id_pelanggan);
        if (empty($cartItems)) {
            return redirect()->to('/catalog')->with('error', 'Keranjang belanja Anda kosong.');
        }

        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += ($item['harga'] * $item['jumlah']);
        }
        
        $tax = $subtotal * 0.10;
        $shipping = 22000;
        $total_harga = $subtotal + $tax + $shipping;

        // Simpan ke pesanan
        $pesananModel = new PesananModel();
        $id_pesan = $pesananModel->insert([
            'id_pelanggan' => $id_pelanggan,
            'tanggal_pesan' => date('Y-m-d H:i:s'),
            'total_harga' => $total_harga,
            'alamat_kirim' => $alamat_kirim,
            'metode_bayar' => 'Transfer Bank',
            'jasa_kirim' => $jasa_kirim,
            'status' => 'Pending'
        ]);

        // Simpan ke pesanan_detail
        $pesananDetailModel = new PesananDetailModel();
        foreach ($cartItems as $item) {
            $pesananDetailModel->insert([
                'id_pesan' => $id_pesan,
                'id_produk' => $item['id_produk'],
                'id_kustom' => $item['id_kustom'],
                'jumlah' => $item['jumlah'],
                'harga_satuan' => $item['harga']
            ]);
            
            // Kurangi stok
            $produkDb = $produkModel->find($item['id_produk']);
            $produkModel->update($item['id_produk'], ['jumlah' => $produkDb['jumlah'] - $item['jumlah']]);
        }

        // Hapus isi keranjang
        $cartModel->where('id_pelanggan', $id_pelanggan)->delete();

        $session->setFlashdata('checkout_success', 'Pemesanan Berhasil! Total tagihan: Rp ' . number_format($total_harga, 0, ',', '.'));
        return redirect()->to('/transaction-history');
    }
}

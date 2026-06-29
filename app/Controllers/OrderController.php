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
        
        $is_cart_checkout = $this->request->getPost('is_cart_checkout');
        $id_produk_arr = $this->request->getPost('id_produk');
        $id_kustom_arr = $this->request->getPost('id_kustom');
        $jumlah_arr = $this->request->getPost('jumlah');
        
        if (empty($id_produk_arr)) {
            return redirect()->to('/catalog')->with('error', 'Tidak ada produk untuk dicheckout.');
        }

        $produkModel = new ProdukModel();
        $order_items = [];
        $subtotal = 0;

        for ($i = 0; $i < count($id_produk_arr); $i++) {
            $id_p = $id_produk_arr[$i];
            $qty = $jumlah_arr[$i];
            $id_k = isset($id_kustom_arr[$i]) && !empty($id_kustom_arr[$i]) ? $id_kustom_arr[$i] : null;
            
            $produkDb = $produkModel->find($id_p);
            if ($produkDb) {
                $subtotal += ($produkDb['harga'] * $qty);
                $order_items[] = [
                    'id_produk' => $id_p,
                    'id_kustom' => $id_k,
                    'jumlah' => $qty,
                    'harga_satuan' => $produkDb['harga'],
                    'stok_lama' => $produkDb['jumlah']
                ];
            }
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

        // Simpan ke pesanan_detail dan kurangi stok
        $pesananDetailModel = new PesananDetailModel();
        foreach ($order_items as $item) {
            $pesananDetailModel->insert([
                'id_pesan' => $id_pesan,
                'id_produk' => $item['id_produk'],
                'id_kustom' => $item['id_kustom'],
                'jumlah' => $item['jumlah'],
                'harga_satuan' => $item['harga_satuan']
            ]);
            
            // Kurangi stok
            $produkModel->update($item['id_produk'], ['jumlah' => $item['stok_lama'] - $item['jumlah']]);
        }

        // Hapus isi keranjang JIKA pesanan berasal dari keranjang (bukan Beli Langsung)
        if ($is_cart_checkout == 1) {
            $cartModel = new CartModel();
            $cartModel->where('id_pelanggan', $id_pelanggan)->delete();
        }

        $session->setFlashdata('checkout_success', 'Pemesanan Berhasil! Total tagihan: Rp ' . number_format($total_harga, 0, ',', '.'));
        return redirect()->to('/transaction-history');
    }
}

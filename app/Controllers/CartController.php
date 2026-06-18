<?php

namespace App\Controllers;

use App\Models\CartModel;

class CartController extends BaseController
{
    public function add()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Anda harus login terlebih dahulu.']);
        }

        $id_pelanggan = $session->get('id_pelanggan');
        $pelangganModel = new \App\Models\PelangganModel();
        if (!$pelangganModel->find($id_pelanggan)) {
            $session->destroy();
            return $this->response->setJSON(['status' => 'error', 'message' => 'Sesi Anda tidak valid atau akun telah dihapus. Silakan login kembali.']);
        }

        $id_produk = $this->request->getPost('id_produk');
        $jumlah = $this->request->getPost('jumlah') ?: 1;

        $cartModel = new CartModel();
        
        // Cek apakah produk sudah ada di keranjang
        $existing = $cartModel->where('id_pelanggan', $id_pelanggan)->where('id_produk', $id_produk)->first();
        
        if ($existing) {
            $cartModel->update($existing['id_cart'], ['jumlah' => $existing['jumlah'] + $jumlah]);
        } else {
            $cartModel->insert([
                'id_pelanggan' => $id_pelanggan,
                'id_produk' => $id_produk,
                'jumlah' => $jumlah
            ]);
        }

        return $this->response->setJSON(['status' => 'success', 'message' => 'Produk ditambahkan ke keranjang.']);
    }

    public function update()
    {
        $session = session();
        if (!$session->get('logged_in')) return $this->response->setJSON(['status' => 'error']);

        $id_pelanggan = $session->get('id_pelanggan');
        $pelangganModel = new \App\Models\PelangganModel();
        if (!$pelangganModel->find($id_pelanggan)) {
            $session->destroy();
            return $this->response->setJSON(['status' => 'error', 'message' => 'Sesi Anda tidak valid atau akun telah dihapus. Silakan login kembali.']);
        }

        $id_cart = $this->request->getPost('id_cart');
        $jumlah = $this->request->getPost('jumlah');

        $cartModel = new CartModel();
        $cartModel->update($id_cart, ['jumlah' => $jumlah]);
        
        return $this->response->setJSON(['status' => 'success']);
    }

    public function remove()
    {
        $session = session();
        if (!$session->get('logged_in')) return $this->response->setJSON(['status' => 'error']);

        $id_pelanggan = $session->get('id_pelanggan');
        $pelangganModel = new \App\Models\PelangganModel();
        if (!$pelangganModel->find($id_pelanggan)) {
            $session->destroy();
            return $this->response->setJSON(['status' => 'error', 'message' => 'Sesi Anda tidak valid atau akun telah dihapus. Silakan login kembali.']);
        }

        $id_cart = $this->request->getPost('id_cart');
        
        $cartModel = new CartModel();
        $cartModel->delete($id_cart);
        
        return $this->response->setJSON(['status' => 'success']);
    }

    public function api_get()
    {
        $session = session();
        if (!$session->get('logged_in')) return $this->response->setJSON(['status' => 'error', 'message' => 'Not logged in']);

        $id_pelanggan = $session->get('id_pelanggan');
        $cartModel = new CartModel();
        $cartItems = $cartModel->getCartWithProducts($id_pelanggan);
        
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += ($item['harga'] * $item['jumlah']);
        }

        return $this->response->setJSON([
            'status' => 'success',
            'items' => $cartItems,
            'subtotal' => $subtotal
        ]);
    }
}

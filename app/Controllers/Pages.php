<?php

namespace App\Controllers;

class Pages extends BaseController
{
    /**
     * Menampilkan halaman Home
     */
    public function index()
    {
        $data = [
            'title' => 'Home | TropicalShop'
        ];
        return view('pages/home', $data);
    }

    /**
     * Menampilkan halaman Catalog
     */
    public function catalog()
    {
        $produkModel = new \App\Models\ProdukModel();
        $data = [
            'title' => 'Catalog | TropicalShop',
            'produk' => $produkModel->findAll()
        ];
        return view('pages/catalog', $data);
    }

    /**
     * Menampilkan halaman Custom Order
     */
    public function customOrder()
    {
        $data = [
            'title' => 'Custom Order | TropicalShop'
        ];
        return view('pages/custom_order', $data);
    }

    /**
     * Menampilkan halaman Company Info
     */
    public function companyInfo()
    {
        $data = [
            'title' => 'Company Info | TropicalShop'
        ];
        return view('pages/company_info', $data);
    }

    /**
     * Menampilkan halaman Login
     */
    public function login()
    {
        $data = [
            'title' => 'Login | TropicalShop'
        ];
        return view('pages/login', $data);
    }

    /**
     * Menampilkan halaman Register
     */
    public function register()
    {
        $data = [
            'title' => 'Daftar Akun | TropicalShop'
        ];
        return view('pages/register', $data);
    }

    /**
     * Menampilkan halaman Cart (Keranjang)
     */
    public function cart()
    {
        $cartModel = new \App\Models\CartModel();
        $id_pelanggan = session()->get('id_pelanggan');
        $cart_items = $cartModel->getCartWithProducts($id_pelanggan);

        $subtotal = 0;
        foreach($cart_items as $item) {
            $subtotal += ($item['harga'] * $item['jumlah']);
        }

        $data = [
            'title' => 'Keranjang Belanja | TropicalShop',
            'cart_items' => $cart_items,
            'subtotal' => $subtotal
        ];
        return view('pages/cart', $data);
    }

    /**
     * Menampilkan halaman Checkout & Pembayaran
     */
    public function checkout()
    {
        $cartModel = new \App\Models\CartModel();
        $id_pelanggan = session()->get('id_pelanggan');
        $cart_items = $cartModel->getCartWithProducts($id_pelanggan);

        if(empty($cart_items)) {
            return redirect()->to('/catalog');
        }

        $subtotal = 0;
        foreach($cart_items as $item) {
            $subtotal += ($item['harga'] * $item['jumlah']);
        }

        $data = [
            'title' => 'Checkout Pemesanan | TropicalShop',
            'hide_nav' => true,
            'subtotal' => $subtotal
        ];
        return view('pages/checkout', $data);
    }

    /**
     * Menampilkan halaman Konfirmasi Pembayaran
     */
    public function confirmPayment()
    {
        $data = [
            'title' => 'Konfirmasi Pembayaran | TropicalShop'
        ];
        return view('pages/confirm_payment', $data);
    }

    /**
     * Menampilkan halaman Lacak Pengiriman
     */
    public function shippingStatus()
    {
        $data = [
            'title' => 'Status Pengiriman | TropicalShop'
        ];
        return view('pages/shipping_status', $data);
    }

    /**
     * Menampilkan halaman Detail Produk
     */
    public function productDetail($id)
    {
        $produkModel = new \App\Models\ProdukModel();
        $data = [
            'title' => 'Detail Produk | TropicalShop',
            'product_id' => $id,
            'product' => $produkModel->find($id)
        ];
        return view('pages/product_detail', $data);
    }

    /**
     * Menampilkan halaman Riwayat Transaksi
     */
    public function transactionHistory()
    {
        $data = [
            'title' => 'Riwayat Transaksi | TropicalShop'
        ];
        return view('pages/transaction_history', $data);
    }
} 
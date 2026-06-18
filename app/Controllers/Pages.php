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
        // Keranjang sekarang menggunakan offcanvas, alihkan jika diakses langsung
        return redirect()->to('/catalog');
    }

    /**
     * Menampilkan halaman Checkout & Pembayaran
     */
    public function checkout()
    {
        $id_produk = $this->request->getGet('id_produk');
        $jumlah = $this->request->getGet('jumlah') ?: 1;
        $id_pelanggan = session()->get('id_pelanggan');

        $checkout_items = [];
        $subtotal = 0;
        $is_cart_checkout = 0;

        if ($id_produk) {
            // Jalur Beli Langsung
            $produkModel = new \App\Models\ProdukModel();
            $produk = $produkModel->find($id_produk);
            if (!$produk) return redirect()->to('/catalog');
            
            $checkout_items[] = [
                'id_cart' => null, // null berarti bukan dari keranjang
                'id_produk' => $produk['id_produk'],
                'nama_produk' => $produk['nama_produk'],
                'url_gambar' => $produk['url_gambar'],
                'harga' => $produk['harga'],
                'jumlah' => $jumlah
            ];
            $subtotal = $produk['harga'] * $jumlah;
            $is_cart_checkout = 0;
        } else {
            // Jalur Checkout Keranjang
            $cartModel = new \App\Models\CartModel();
            $checkout_items = $cartModel->getCartWithProducts($id_pelanggan);

            if(empty($checkout_items)) {
                return redirect()->to('/catalog');
            }

            foreach($checkout_items as $item) {
                $subtotal += ($item['harga'] * $item['jumlah']);
            }
            $is_cart_checkout = 1;
        }

        $data = [
            'title' => 'Checkout Pemesanan | TropicalShop',
            'hide_nav' => true,
            'subtotal' => $subtotal,
            'checkout_items' => $checkout_items,
            'is_cart_checkout' => $is_cart_checkout
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
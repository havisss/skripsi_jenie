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
        $data = [
            'title' => 'Catalog | TropicalShop'
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
        $data = [
            'title' => 'Keranjang Belanja | TropicalShop'
        ];
        return view('pages/cart', $data);
    }

    /**
     * Menampilkan halaman Checkout & Pembayaran
     */
    public function checkout()
    {
        $data = [
            'title' => 'Checkout Pemesanan | TropicalShop',
            'hide_nav' => true
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
        $data = [
            'title' => 'Detail Produk | TropicalShop',
            'product_id' => $id
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
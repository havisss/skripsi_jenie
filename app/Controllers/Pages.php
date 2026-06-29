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
    public function custom()
    {
        $produkModel = new \App\Models\ProdukModel();
        $data = [
            'title' => 'Custom Order | TropicalShop',
            'produk' => $produkModel->findAll()
        ];
        return view('pages/custom', $data);
    }

    /**
     * Memproses form Custom Order
     */
    public function processCustom()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $id_produk = $this->request->getPost('id_produk');
        $jumlah = $this->request->getPost('jumlah') ?: 1;
        $warna = $this->request->getPost('warna');
        $ukuran = $this->request->getPost('ukuran');

        $kustomModel = new \App\Models\KustomisasiModel();
        
        $kustomData = [
            'id_produk' => $id_produk,
            'warna' => $warna,
            'ukuran' => $ukuran,
            'jumlah' => $jumlah
        ];

        // Handling file upload for url_gambar if any
        $fileGambar = $this->request->getFile('gambar');
        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $newName = $fileGambar->getRandomName();
            $fileGambar->move('uploads/kustom', $newName);
            $kustomData['url_gambar'] = 'uploads/kustom/' . $newName;
        }

        $id_kustom = $kustomModel->insert($kustomData);

        return redirect()->to('/checkout?id_kustom=' . $id_kustom);
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
        $id_kustom = $this->request->getGet('id_kustom');
        $jumlah = $this->request->getGet('jumlah') ?: 1;
        $id_pelanggan = session()->get('id_pelanggan');

        $checkout_items = [];
        $subtotal = 0;
        $is_cart_checkout = 0;

        if ($id_kustom) {
            // Jalur Custom Order
            $kustomModel = new \App\Models\KustomisasiModel();
            $kustom = $kustomModel->select('kustomisasi.*, produk.nama_produk, produk.harga')
                                  ->join('produk', 'produk.id_produk = kustomisasi.id_produk')
                                  ->find($id_kustom);
            if (!$kustom) return redirect()->to('/catalog');

            $checkout_items[] = [
                'id_cart' => null,
                'id_produk' => $kustom['id_produk'],
                'id_kustom' => $kustom['id_kustom'],
                'nama_produk' => $kustom['nama_produk'] . ' (Custom: ' . esc($kustom['warna']) . ', ' . esc($kustom['ukuran']) . ')',
                'url_gambar' => $kustom['url_gambar'] ? $kustom['url_gambar'] : '',
                'harga' => $kustom['harga'],
                'jumlah' => $kustom['jumlah']
            ];
            $subtotal = $kustom['harga'] * $kustom['jumlah'];
            $is_cart_checkout = 0;
        } else if ($id_produk) {
            // Jalur Beli Langsung
            $produkModel = new \App\Models\ProdukModel();
            $produk = $produkModel->find($id_produk);
            if (!$produk) return redirect()->to('/catalog');
            
            $checkout_items[] = [
                'id_cart' => null, // null berarti bukan dari keranjang
                'id_produk' => $produk['id_produk'],
                'id_kustom' => null,
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
            $cart_items = $cartModel->getCartWithProducts($id_pelanggan);

            if(empty($cart_items)) {
                return redirect()->to('/catalog');
            }

            foreach($cart_items as $item) {
                $checkout_items[] = [
                    'id_cart' => $item['id_cart'],
                    'id_produk' => $item['id_produk'],
                    'id_kustom' => null,
                    'nama_produk' => $item['nama_produk'],
                    'url_gambar' => $item['url_gambar'],
                    'harga' => $item['harga'],
                    'jumlah' => $item['jumlah']
                ];
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
        $id_pelanggan = session()->get('id_pelanggan');
        
        $pesananModel = new \App\Models\PesananModel();
        $pesananDetailModel = new \App\Models\PesananDetailModel();
        
        $pesanan_list = $pesananModel->getPesananByPelanggan($id_pelanggan);
        
        // Untuk setiap pesanan, ambil detail item-nya
        foreach ($pesanan_list as &$pesanan) {
            $pesanan['details'] = $pesananDetailModel
                ->select('pesanan_detail.*, produk.nama_produk, produk.url_gambar')
                ->join('produk', 'produk.id_produk = pesanan_detail.id_produk', 'left')
                ->where('id_pesan', $pesanan['id_pesan'])
                ->findAll();
        }
        
        $data = [
            'title' => 'Riwayat Transaksi | TropicalShop',
            'pesanan_list' => $pesanan_list
        ];
        return view('pages/transaction_history', $data);
    }
} 
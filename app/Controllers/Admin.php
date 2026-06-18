<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;
use App\Models\KustomisasiModel;
use App\Models\PesananModel;
use App\Models\PembayaranModel;

class Admin extends BaseController
{
    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        
        // Cek session login admin
        if (!session()->get('admin_logged_in')) {
            header('Location: ' . base_url('/admin/login'));
            exit;
        }
    }

    public function dashboard()
    {
        $pesananModel = new PesananModel();
        $produkModel = new ProdukModel();
        
        $data = [
            'title' => 'Dashboard',
            'total_pesanan' => count($pesananModel->findAll()),
            'total_produk' => count($produkModel->findAll()),
            'pesanan_baru' => count($pesananModel->where('status', 'Pending')->findAll())
        ];
        
        return view('admin/dashboard', $data);
    }

    // --- MANAJEMEN PRODUK ---
    public function produk()
    {
        $produkModel = new ProdukModel();
        $data = [
            'title' => 'Manajemen Katalog Produk',
            'produk' => $produkModel->findAll()
        ];
        return view('admin/produk/index', $data);
    }

    public function produk_store()
    {
        $produkModel = new ProdukModel();
        
        // Handle upload image
        $file = $this->request->getFile('gambar');
        $namaGambar = '';
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaGambar = $file->getRandomName();
            $file->move('uploads/produk', $namaGambar);
        }

        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi_produk' => $this->request->getPost('deskripsi_produk'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
            'url_gambar' => $namaGambar ? 'uploads/produk/' . $namaGambar : ''
        ];
        $produkModel->insert($data);
        return redirect()->to('/admin/produk')->with('msg', 'Produk berhasil ditambahkan.');
    }

    public function produk_update($id)
    {
        $produkModel = new ProdukModel();
        
        $data = [
            'nama_produk' => $this->request->getPost('nama_produk'),
            'deskripsi_produk' => $this->request->getPost('deskripsi_produk'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
        ];
        
        $file = $this->request->getFile('gambar');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaGambar = $file->getRandomName();
            $file->move('uploads/produk', $namaGambar);
            $data['url_gambar'] = 'uploads/produk/' . $namaGambar;
        }
        
        $produkModel->update($id, $data);
        return redirect()->to('/admin/produk')->with('msg', 'Produk berhasil diperbarui.');
    }

    public function produk_delete($id)
    {
        $produkModel = new ProdukModel();
        $produkModel->delete($id);
        return redirect()->to('/admin/produk')->with('msg', 'Produk berhasil dihapus.');
    }

    // --- MANAJEMEN KUSTOMISASI ---
    public function kustomisasi()
    {
        $kustomModel = new KustomisasiModel();
        $data = [
            'title' => 'Manajemen Kustomisasi',
            'kustomisasi' => $kustomModel->getKustomisasiWithProduk()
        ];
        return view('admin/kustomisasi/index', $data);
    }
    
    public function kustomisasi_delete($id)
    {
        $kustomModel = new KustomisasiModel();
        $kustomModel->delete($id);
        return redirect()->to('/admin/kustomisasi')->with('msg', 'Kustomisasi berhasil dihapus.');
    }

    // --- MANAJEMEN PEMESANAN ---
    public function pesanan()
    {
        $pesananModel = new PesananModel();
        $data = [
            'title' => 'Manajemen Pemesanan',
            'pesanan' => $pesananModel->getPesananWithDetails()
        ];
        return view('admin/pesanan/index', $data);
    }

    public function pesanan_update_status($id)
    {
        $pesananModel = new PesananModel();
        $status = $this->request->getPost('status');
        $pesananModel->update($id, ['status' => $status]);
        return redirect()->to('/admin/pesanan')->with('msg', 'Status pesanan diperbarui.');
    }

    // --- MANAJEMEN PEMBAYARAN ---
    public function pembayaran()
    {
        $pembayaranModel = new PembayaranModel();
        $data = [
            'title' => 'Manajemen Pembayaran',
            'pembayaran' => $pembayaranModel->getPembayaranWithPesanan()
        ];
        return view('admin/pembayaran/index', $data);
    }

    // --- MANAJEMEN NOTIFIKASI ---
    public function notifikasi()
    {
        // Simple notification: just get the latest orders and payments
        $pesananModel = new PesananModel();
        $pembayaranModel = new PembayaranModel();
        
        $data = [
            'title' => 'Manajemen Notifikasi',
            'pesanan_baru' => $pesananModel->where('status', 'Pending')->orderBy('tanggal_pesan', 'DESC')->findAll(),
            'pembayaran_baru' => $pembayaranModel->orderBy('tanggal_bayar', 'DESC')->findAll(10) // last 10 payments
        ];
        return view('admin/notifikasi/index', $data);
    }
}

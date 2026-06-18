<?php

namespace App\Models;

use CodeIgniter\Model;

class KustomisasiModel extends Model
{
    protected $table            = 'kustomisasi';
    protected $primaryKey       = 'id_kustom';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_produk', 'url_gambar', 'warna', 'ukuran', 'jumlah'];

    // Dates
    protected $useTimestamps = false;

    public function getKustomisasiWithProduk()
    {
        return $this->select('kustomisasi.*, produk.nama_produk')
                    ->join('produk', 'produk.id_produk = kustomisasi.id_produk')
                    ->findAll();
    }
}

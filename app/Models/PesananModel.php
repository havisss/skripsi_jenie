<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table            = 'pesanan';
    protected $primaryKey       = 'id_pesan';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pelanggan', 'keterangan', 'tanggal_pesan', 'total_harga', 'alamat_kirim', 'metode_bayar', 'jasa_kirim', 'status'];

    // Dates
    protected $useTimestamps = false;

    public function getPesananWithDetails()
    {
        return $this->select('pesanan.*, pelanggan.nama_pelanggan')
                    ->join('pelanggan', 'pelanggan.id_pelanggan = pesanan.id_pelanggan')
                    ->orderBy('tanggal_pesan', 'DESC')
                    ->findAll();
    }
}

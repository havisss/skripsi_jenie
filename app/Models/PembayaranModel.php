<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table            = 'pembayaran';
    protected $primaryKey       = 'id_bayar';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_pesan', 'bukti_bayar', 'tanggal_bayar'];

    // Dates
    protected $useTimestamps = false;

    public function getPembayaranWithPesanan()
    {
        return $this->select('pembayaran.*, pesanan.total_harga, pesanan.status, pelanggan.nama_pelanggan')
                    ->join('pesanan', 'pesanan.id_pesan = pembayaran.id_pesan')
                    ->join('pelanggan', 'pelanggan.id_pelanggan = pesanan.id_pelanggan')
                    ->orderBy('tanggal_bayar', 'DESC')
                    ->findAll();
    }
}

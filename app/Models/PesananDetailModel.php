<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananDetailModel extends Model
{
    protected $table            = 'pesanan_detail';
    protected $primaryKey       = 'id_pesanan_detail';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_pesan', 'id_produk', 'id_kustom', 'jumlah', 'harga_satuan'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class KonfirmasiModel extends Model
{
    protected $table            = 'konfirmasi';
    protected $primaryKey       = 'id_konfirm';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_bayar', 'id_pesan', 'resi_kirim', 'struk_bayar'];

    // Dates
    protected $useTimestamps = false;
}

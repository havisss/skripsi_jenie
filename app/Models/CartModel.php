<?php

namespace App\Models;

use CodeIgniter\Model;

class CartModel extends Model
{
    protected $table            = 'cart';
    protected $primaryKey       = 'id_cart';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_pelanggan', 'id_produk', 'id_kustom', 'jumlah'];
    
    public function getCartWithProducts($id_pelanggan)
    {
        return $this->select('cart.*, produk.nama_produk, produk.harga, produk.url_gambar')
                    ->join('produk', 'produk.id_produk = cart.id_produk')
                    ->where('id_pelanggan', $id_pelanggan)
                    ->findAll();
    }
}

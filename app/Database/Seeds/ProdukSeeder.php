<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_produk'      => 'Kemeja Sutra Premium',
                'deskripsi_produk' => 'Kemeja sutra premium dengan bahan berkualitas tinggi, cocok untuk acara formal maupun santai.',
                'harga'            => 450000,
                'jumlah'           => 10,
                'url_gambar'       => 'images/product_1_1781628927264.png',
            ],
            [
                'nama_produk'      => 'Dress Pantai Crinkle',
                'deskripsi_produk' => 'Dress pantai nyaman berbahan crinkle yang ringan dan menyerap keringat.',
                'harga'            => 380000,
                'jumlah'           => 15,
                'url_gambar'       => 'images/product_2_1781628941576.png',
            ],
            [
                'nama_produk'      => 'Outer Lace Eksklusif',
                'deskripsi_produk' => 'Outer lace dengan desain eksklusif dan elegan.',
                'harga'            => 420000,
                'jumlah'           => 8,
                'url_gambar'       => 'images/product_3_1781629292748.png',
            ],
            [
                'nama_produk'      => 'Kain Batik Premium',
                'deskripsi_produk' => 'Kain batik cap premium dengan motif tradisional Bali yang indah.',
                'harga'            => 290000,
                'jumlah'           => 20,
                'url_gambar'       => 'images/product_4_1781629306089.png',
            ],
            [
                'nama_produk'      => 'Tropical Summer Dress',
                'deskripsi_produk' => 'Dress bernuansa tropis yang sangat cocok untuk musim panas.',
                'harga'            => 350000,
                'jumlah'           => 12,
                'url_gambar'       => 'images/product_5_1781629315810.png',
            ],
            [
                'nama_produk'      => 'Tas Rotan Artisan',
                'deskripsi_produk' => 'Tas rotan buatan tangan pengrajin lokal Bali.',
                'harga'            => 180000,
                'jumlah'           => 30,
                'url_gambar'       => 'images/product_6_1781629329107.png',
            ],
            [
                'nama_produk'      => 'Kain Motif Flora Bali',
                'deskripsi_produk' => 'Kain printing dengan motif flora khas pulau dewata.',
                'harga'            => 125000,
                'jumlah'           => 50,
                'url_gambar'       => 'https://images.unsplash.com/photo-1542838334-42cf3558a2d1?q=80&w=1974&auto=format&fit=crop',
            ],
            [
                'nama_produk'      => 'Setelan Piyama Rayon',
                'deskripsi_produk' => 'Piyama rayon yang sangat halus dan sejuk dipakai tidur.',
                'harga'            => 210000,
                'jumlah'           => 25,
                'url_gambar'       => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?q=80&w=1964&auto=format&fit=crop',
            ],
            [
                'nama_produk'      => 'Kain Pantai Sunset',
                'deskripsi_produk' => 'Kain pantai multifungsi dengan gradasi warna sunset.',
                'harga'            => 95000,
                'jumlah'           => 40,
                'url_gambar'       => 'https://images.unsplash.com/photo-1620799140408-edc6d5f9650d?q=80&w=1972&auto=format&fit=crop',
            ],
        ];

        // Using Query Builder
        $this->db->table('produk')->insertBatch($data);
    }
}

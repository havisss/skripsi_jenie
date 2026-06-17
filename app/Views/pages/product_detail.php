<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<?php
// Mock Data (In a real app, this would be fetched from database using $product_id)
$dummy_products = [
    1 => ['name' => 'Kemeja Sutra Premium', 'price' => 450000, 'img' => base_url('images/product_1_1781628927264.png'), 'desc' => 'Kemeja sutra murni dengan motif Bali kontemporer. Sangat nyaman dan elegan untuk acara formal maupun santai.'],
    2 => ['name' => 'Dress Pantai Crinkle', 'price' => 380000, 'img' => base_url('images/product_2_1781628941576.png'), 'desc' => 'Dress pantai berbahan rayon crinkle super adem. Cocok untuk menemani liburan musim panas Anda di Bali.'],
    3 => ['name' => 'Outer Lace Eksklusif', 'price' => 420000, 'img' => base_url('images/product_3_1781629292748.png'), 'desc' => 'Outer transparan dengan detail lace premium. Menambah kesan luxury pada paduan busana apapun.'],
    4 => ['name' => 'Kain Batik Premium', 'price' => 290000, 'img' => base_url('images/product_4_1781629306089.png'), 'desc' => 'Kain batik cap asli dengan pewarna alami. Cocok dijadikan bahan kemeja atau bawahan tradisional.'],
    5 => ['name' => 'Tropical Summer Dress', 'price' => 350000, 'img' => base_url('images/product_5_1781629315810.png'), 'desc' => 'Dress floral dengan warna-warna cerah khas daerah tropis.'],
    6 => ['name' => 'Tas Rotan Artisan', 'price' => 180000, 'img' => base_url('images/product_6_1781629329107.png'), 'desc' => 'Tas rotan anyaman tangan langsung dari pengrajin lokal Bali. Awet dan sangat estetik.'],
    7 => ['name' => 'Kain Motif Flora Bali', 'price' => 125000, 'img' => 'https://images.unsplash.com/photo-1542838334-42cf3558a2d1?q=80&w=1974&auto=format&fit=crop', 'desc' => 'Kain lembaran dengan motif flora eksotis Bali.'],
    8 => ['name' => 'Setelan Piyama Rayon', 'price' => 210000, 'img' => 'https://images.unsplash.com/photo-1617137968427-85924c800a22?q=80&w=1964&auto=format&fit=crop', 'desc' => 'Setelan piyama super nyaman untuk tidur atau sekadar bersantai di rumah.'],
    9 => ['name' => 'Kain Pantai Sunset', 'price' => 95000, 'img' => 'https://images.unsplash.com/photo-1620799140408-edc6d5f9650d?q=80&w=1972&auto=format&fit=crop', 'desc' => 'Kain pantai dengan gradasi warna matahari terbenam. Lembut dan menyerap air.'],
];

$product = $dummy_products[$product_id] ?? null;

if(!$product):
?>
    <div style="min-height: 50vh; display: flex; justify-content: center; align-items: center;">
        <h2>Produk Tidak Ditemukan</h2>
    </div>
<?php else: ?>

<div style="padding-top: 100px; max-width: 1200px; margin: 0 auto; padding-bottom: 4rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 4rem; padding: 2rem;">
        
        <!-- Product Image -->
        <div style="flex: 1; min-width: 300px;">
            <img src="<?= $product['img'] ?>" alt="<?= esc($product['name']) ?>" style="width: 100%; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        </div>

        <!-- Product Details -->
        <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column; justify-content: center;">
            <p style="text-transform: uppercase; letter-spacing: 2px; color: var(--primary-color); font-size: 0.8rem; font-weight: 600; margin-bottom: 0.5rem;">Koleksi Premium</p>
            <h1 style="font-family: var(--font-heading); font-size: 2.5rem; margin-bottom: 1rem; color: var(--text-color);"><?= esc($product['name']) ?></h1>
            <h2 style="font-size: 1.8rem; font-weight: 500; margin-bottom: 1.5rem;">Rp <?= number_format($product['price'], 0, ',', '.') ?></h2>
            
            <p style="color: var(--text-light); line-height: 1.8; margin-bottom: 2rem;">
                <?= esc($product['desc']) ?>
            </p>

            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="<?= base_url('/checkout') ?>" class="btn btn-primary" style="flex: 1; min-width: 200px; text-align: center; padding: 1rem; text-transform: uppercase; letter-spacing: 2px;">
                    Beli Langsung (Checkout)
                </a>
                <button onclick="openCart(<?= $product_id ?>, '<?= esc($product['name']) ?>', <?= $product['price'] ?>, '<?= $product['img'] ?>')" class="btn" style="flex: 1; min-width: 200px; text-align: center; padding: 1rem; background: transparent; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    Tambah ke Keranjang
                </button>
            </div>
        </div>

    </div>
</div>

<?php endif; ?>

<?= $this->endSection() ?>

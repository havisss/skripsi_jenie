<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="main-content">
    <!-- Catalog Hero Banner -->
    <section class="catalog-hero" style="background-image: url('<?= base_url('images/catalog_hero_premium.png') ?>'); background-size: cover; background-position: center;">
        <div class="catalog-hero-content reveal">
            <h1>Koleksi Kain & Pakaian</h1>
            <p>Telusuri ragam corak printing Bali modern dan tenun otentik buatan tangan perajin lokal berdedikasi tinggi.</p>
        </div>
    </section>

    <!-- Filters & Search -->
    <section class="filter-container reveal">
        <div class="search-bar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            <input type="text" placeholder="Cari nama produk atau motif...">
        </div>
        <div class="filter-options">
            <select name="category">
                <option value="all">Semua Kategori</option>
                <option value="kain">Kain Meteran</option>
                <option value="pakaian">Pakaian Jadi</option>
                <option value="pantai">Kain Pantai</option>
                <option value="tas">Tas & Aksesoris</option>
            </select>
            <select name="sort">
                <option value="latest">Terbaru</option>
                <option value="price-asc">Harga: Termurah</option>
                <option value="price-desc">Harga: Termahal</option>
            </select>
        </div>
    </section>

    <!-- Limited Access Banner -->
    <?php if(!session()->get('logged_in')): ?>
    <section class="limited-access-banner reveal">
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: text-bottom; margin-right: 4px;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> 
            Melihat 9 dari 30+ produk eksklusif. 
            <a href="<?= base_url('/login') ?>" style="color: var(--primary-color); font-weight: 600; text-decoration: underline;">Masuk</a> atau <a href="<?= base_url('/register') ?>" style="color: var(--primary-color); font-weight: 600; text-decoration: underline;">Daftar</a> untuk melihat semua koleksi.
        </p>
    </section>
    <?php endif; ?>

    <!-- Product Grid -->
    <section class="product-grid">
        <?php 
        $dummy_products = [
            ['id' => 1, 'name' => 'Kemeja Sutra Premium', 'price' => 450000, 'img' => base_url('images/product_1_1781628927264.png')],
            ['id' => 2, 'name' => 'Dress Pantai Crinkle', 'price' => 380000, 'img' => base_url('images/product_2_1781628941576.png')],
            ['id' => 3, 'name' => 'Outer Lace Eksklusif', 'price' => 420000, 'img' => base_url('images/product_3_1781629292748.png')],
            ['id' => 4, 'name' => 'Kain Batik Premium', 'price' => 290000, 'img' => base_url('images/product_4_1781629306089.png')],
            ['id' => 5, 'name' => 'Tropical Summer Dress', 'price' => 350000, 'img' => base_url('images/product_5_1781629315810.png')],
            ['id' => 6, 'name' => 'Tas Rotan Artisan', 'price' => 180000, 'img' => base_url('images/product_6_1781629329107.png')],
            ['id' => 7, 'name' => 'Kain Motif Flora Bali', 'price' => 125000, 'img' => base_url('images/product_7.png')],
            ['id' => 8, 'name' => 'Setelan Piyama Rayon', 'price' => 210000, 'img' => base_url('images/product_8.png')],
            ['id' => 9, 'name' => 'Kain Pantai Sunset', 'price' => 95000, 'img' => base_url('images/product_9.png')],
        ];
        foreach($dummy_products as $index => $prod): 
            $delay_class = '';
            if($index % 3 == 1) $delay_class = 'delay-1';
            if($index % 3 == 2) $delay_class = 'delay-2';
        ?>
        <div class="product-card reveal <?= $delay_class ?>">
            <div class="product-image-link">
                <img src="<?= $prod['img'] ?>" alt="<?= esc($prod['name']) ?>">
            </div>
            <div class="product-info">
                <h3><?= esc($prod['name']) ?></h3>
                <p class="product-price">Rp <?= number_format($prod['price'], 0, ',', '.') ?></p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="<?= base_url('/product-detail/' . $prod['id']) ?>" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <button type="button" onclick="openCart(<?= $prod['id'] ?>, '<?= esc($prod['name']) ?>', <?= $prod['price'] ?>, '<?= $prod['img'] ?>')" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center; cursor: pointer; background: transparent;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </button>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <!-- Pagination -->
    <nav class="pagination reveal">
        <ul>
            <li><a href="#">&laquo;</a></li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </nav>
</div>

<?= $this->endSection() ?>
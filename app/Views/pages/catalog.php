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
        // Data $produk sudah dikirim dari controller (Pages::catalog)
        // $produk berisi array produk yang asli dari database.

        foreach($produk as $index => $prod): 
            $delay_class = '';
            if($index % 3 == 1) $delay_class = 'delay-1';
            if($index % 3 == 2) $delay_class = 'delay-2';
        ?>
        <div class="product-card reveal <?= $delay_class ?>">
            <div class="product-image-link">
                <img src="<?= base_url($prod['url_gambar']) ?>" alt="<?= esc($prod['nama_produk']) ?>">
            </div>
            <div class="product-info">
                <h3><?= esc($prod['nama_produk']) ?></h3>
                <p class="product-price">Rp <?= number_format($prod['harga'], 0, ',', '.') ?></p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="<?= base_url('/product-detail/' . $prod['id_produk']) ?>" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <button type="button" onclick="openCart(<?= $prod['id_produk'] ?>, '<?= esc($prod['nama_produk']) ?>', <?= $prod['harga'] ?>, '<?= base_url($prod['url_gambar']) ?>')" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center; cursor: pointer; background: transparent;">
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
    <!-- Optional: Add CSRF Meta Tag if needed or handle it in fetch -->
</div>

<script>
async function openCart(id_produk, name, price, img) {
    // Check if user is logged in
    const isLoggedIn = <?= session()->get('logged_in') ? 'true' : 'false' ?>;
    
    if (!isLoggedIn) {
        alert("Silakan login terlebih dahulu untuk menambahkan barang ke keranjang.");
        window.location.href = "<?= base_url('/login') ?>";
        return;
    }

    try {
        const formData = new FormData();
        formData.append('id_produk', id_produk);
        formData.append('jumlah', 1);

        const response = await fetch('<?= base_url('cart/add') ?>', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        if (result.status === 'success') {
            alert(name + " berhasil ditambahkan ke keranjang!");
        } else {
            alert(result.message || "Gagal menambahkan ke keranjang.");
        }
    } catch (error) {
        console.error("Error:", error);
        alert("Terjadi kesalahan sistem.");
    }
}
</script>

<?= $this->endSection() ?>
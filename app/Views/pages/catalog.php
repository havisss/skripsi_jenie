<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="main-content">
    <section class="catalog-header">
        <h1>Koleksi Kain & Pakaian Bali</h1>
        <p>Temukan motif otentik dan desain modern yang terinspirasi dari keindahan Pulau Dewata. Setiap helai adalah
            sebuah karya seni.</p>
    </section>

    <section class="filter-container">
        <div class="search-bar">
            <input type="text" placeholder="Cari nama produk atau motif...">
        </div>
        <div class="filter-options">
            <select name="category">
                <option value="all">Semua Kategori</option>
                <option value="kain">Kain Meteran</option>
                <option value="pakaian">Pakaian Jadi</option>
                <option value="pantai">Kain Pantai</option>
                <option value="piyama">Piyama</option>
            </select>
            <select name="sort">
                <option value="latest">Terbaru</option>
                <option value="price-asc">Harga: Termurah</option>
                <option value="price-desc">Harga: Termahal</option>
                <option value="name-asc">Nama: A-Z</option>
            </select>
        </div>
    </section>

    <section class="limited-access-banner">
        <p>🔒 Anda melihat 12 dari 30+ produk. <a href="#">Masuk</a> atau <a href="#">Daftar</a> untuk melihat koleksi
            eksklusif kami!</p>
    </section>


    <section class="product-grid">
        <div class="product-card">
            <a href="#" class="product-image-link">
                <img src="https://images.unsplash.com/photo-1542838334-42cf3558a2d1?q=80&w=1974&auto=format&fit=crop"
                    alt="Nama Produk">
            </a>
            <div class="product-info">
                <h3 class="product-name">Kain Motif Flora Bali</h3>
                <p class="product-price">Rp 125.000</p>
                <div class="product-actions">
                    <a href="#" class="btn btn-detail">Lihat Detail</a>
                    <a href="#" class="btn btn-add-cart">🛒</a>
                </div>
            </div>
        </div>
        <div class="product-card">
            <a href="#" class="product-image-link">
                <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?q=80&w=1964&auto=format&fit=crop"
                    alt="Nama Produk">
            </a>
            <div class="product-info">
                <h3 class="product-name">Setelan Piyama Rayon</h3>
                <p class="product-price">Rp 210.000</p>
                <div class="product-actions">
                    <a href="#" class="btn btn-detail">Lihat Detail</a>
                    <a href="#" class="btn btn-add-cart">🛒</a>
                </div>
            </div>
        </div>
        <div class="product-card">
            <a href="#" class="product-image-link">
                <img src="https://images.unsplash.com/photo-1620799140408-edc6d5f9650d?q=80&w=1972&auto=format&fit=crop"
                    alt="Nama Produk">
            </a>
            <div class="product-info">
                <h3 class="product-name">Kain Pantai Sunset Dewata</h3>
                <p class="product-price">Rp 95.000</p>
                <div class="product-actions">
                    <a href="#" class="btn btn-detail">Lihat Detail</a>
                    <a href="#" class="btn btn-add-cart">🛒</a>
                </div>
            </div>
        </div>
        <div class="product-card">
            <a href="#" class="product-image-link">
                <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=1974&auto=format&fit=crop"
                    alt="Nama Produk">
            </a>
            <div class="product-info">
                <h3 class="product-name">Atasan Crinkle Modern</h3>
                <p class="product-price">Rp 175.000</p>
                <div class="product-actions">
                    <a href="#" class="btn btn-detail">Lihat Detail</a>
                    <a href="#" class="btn btn-add-cart">🛒</a>
                </div>
            </div>
        </div>
    </section>

    <nav class="pagination">
        <ul>
            <li><a href="#">«</a></li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
        </ul>
    </nav>

</div>

<?= $this->endSection() ?>
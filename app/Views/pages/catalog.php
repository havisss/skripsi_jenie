<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="main-content">
    <!-- Catalog Hero Banner -->
    <section class="catalog-hero" style="background-image: url('<?= base_url('images/catalog_hero_1781629280546.png') ?>'); background-size: cover; background-position: center;">
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
    <section class="limited-access-banner reveal">
        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: text-bottom; margin-right: 4px;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> 
            Melihat 9 dari 30+ produk eksklusif. 
            <a href="<?= base_url('/login') ?>" style="color: var(--primary-color); font-weight: 600; text-decoration: underline;">Masuk</a> atau <a href="<?= base_url('/login') ?>" style="color: var(--primary-color); font-weight: 600; text-decoration: underline;">Daftar</a> untuk melihat semua koleksi.
        </p>
    </section>

    <!-- Product Grid -->
    <section class="product-grid">
        
        <!-- Product 1 -->
        <div class="product-card reveal">
            <div class="product-image-link">
                <img src="<?= base_url('images/product_1_1781628927264.png') ?>" alt="Kemeja Sutra Premium">
            </div>
            <div class="product-info">
                <h3>Kemeja Sutra Premium</h3>
                <p class="product-price">Rp 450.000</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Product 2 -->
        <div class="product-card reveal delay-1">
            <div class="product-image-link">
                <img src="<?= base_url('images/product_2_1781628941576.png') ?>" alt="Dress Pantai Crinkle">
            </div>
            <div class="product-info">
                <h3>Dress Pantai Crinkle</h3>
                <p class="product-price">Rp 380.000</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card reveal delay-2">
            <div class="product-image-link">
                <img src="<?= base_url('images/product_3_1781629292748.png') ?>" alt="Outer Lace Eksklusif">
            </div>
            <div class="product-info">
                <h3>Outer Lace Eksklusif</h3>
                <p class="product-price">Rp 420.000</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card reveal">
            <div class="product-image-link">
                <img src="<?= base_url('images/product_4_1781629306089.png') ?>" alt="Kain Batik Premium">
            </div>
            <div class="product-info">
                <h3>Kain Batik Premium</h3>
                <p class="product-price">Rp 290.000 / m</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="product-card reveal delay-1">
            <div class="product-image-link">
                <img src="<?= base_url('images/product_5_1781629315810.png') ?>" alt="Tropical Summer Dress">
            </div>
            <div class="product-info">
                <h3>Tropical Summer Dress</h3>
                <p class="product-price">Rp 350.000</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="product-card reveal delay-2">
            <div class="product-image-link">
                <img src="<?= base_url('images/product_6_1781629329107.png') ?>" alt="Artisan Rattan Bag">
            </div>
            <div class="product-info">
                <h3>Tas Rotan Artisan</h3>
                <p class="product-price">Rp 180.000</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Product 7 -->
        <div class="product-card reveal">
            <div class="product-image-link">
                <img src="https://images.unsplash.com/photo-1542838334-42cf3558a2d1?q=80&w=1974&auto=format&fit=crop" alt="Kain Motif Flora Bali">
            </div>
            <div class="product-info">
                <h3>Kain Motif Flora Bali</h3>
                <p class="product-price">Rp 125.000</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product 8 -->
        <div class="product-card reveal delay-1">
            <div class="product-image-link">
                <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?q=80&w=1964&auto=format&fit=crop" alt="Setelan Piyama Rayon">
            </div>
            <div class="product-info">
                <h3>Setelan Piyama Rayon</h3>
                <p class="product-price">Rp 210.000</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Product 9 -->
        <div class="product-card reveal delay-2">
            <div class="product-image-link">
                <img src="https://images.unsplash.com/photo-1620799140408-edc6d5f9650d?q=80&w=1972&auto=format&fit=crop" alt="Kain Pantai Sunset">
            </div>
            <div class="product-info">
                <h3>Kain Pantai Sunset</h3>
                <p class="product-price">Rp 95.000</p>
                <div style="margin-top: 1.2rem; display: flex; gap: 0.8rem; justify-content: center;">
                    <a href="#" class="btn btn-primary" style="padding: 0.6rem 1.2rem; flex: 1; font-size: 0.75rem;">Detail</a>
                    <a href="#" class="btn" style="padding: 0.6rem 0.8rem; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    </a>
                </div>
            </div>
        </div>

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
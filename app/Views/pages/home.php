<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<section class="hero hero-premium">
    <div class="hero-bg-media" style="background-image: url('<?= base_url('images/hero_bali_premium.png') ?>');"></div>
    
    <div class="hero-content">
        <h1 class="reveal">Pusat Sablon Kain & Kebaya Bali</h1>
        <p class="reveal delay-1">Dikerjakan langsung dari workshop kami di Pemogan. Temukan koleksi kain print lokal, busana Bali berkualitas, atau wujudkan motif impian Anda.</p>
        <div class="hero-buttons reveal delay-2">
            <a href="<?= base_url('/catalog') ?>" class="btn btn-primary">Lihat Katalog</a>
            <a href="<?= base_url('/custom-order') ?>" class="btn">Pesanan Kustom</a>
        </div>
    </div>
</section>

<div class="main-content-home">

    <!-- Categories Section -->
    <section class="featured-categories premium-section">
        <div class="section-header reveal">
            <span class="subtitle">Koleksi Pilihan</span>
            <h2>Jelajahi Pilihan Terbaik</h2>
            <div class="luxury-divider">
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z"/></svg>
            </div>
        </div>
        
        <div class="category-grid premium-grid">
            <a href="<?= base_url('/catalog') ?>" class="category-card reveal">
                <div class="img-wrapper">
                    <img src="<?= base_url('images/product_4_1781629306089.png') ?>" alt="Kain Meteran Bali">
                </div>
                <div class="category-title">
                    <h3>Kain Meteran</h3>
                    <span class="explore-text">Jelajahi <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                </div>
            </a>
            <a href="<?= base_url('/catalog') ?>" class="category-card reveal delay-1">
                <div class="img-wrapper">
                    <img src="<?= base_url('images/product_5_1781629315810.png') ?>" alt="Setelan Piyama">
                </div>
                <div class="category-title">
                    <h3>Pakaian Jadi</h3>
                    <span class="explore-text">Jelajahi <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                </div>
            </a>
            <a href="<?= base_url('/catalog') ?>" class="category-card reveal delay-2">
                <div class="img-wrapper">
                    <img src="<?= base_url('images/product_6_1781629329107.png') ?>" alt="Tas Rotan Artisan">
                </div>
                <div class="category-title">
                    <h3>Tas & Aksesoris</h3>
                    <span class="explore-text">Jelajahi <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                </div>
            </a>
        </div>
    </section>

    <!-- Story Section -->
    <section class="story-section premium-section reveal">
        <div class="story-image">
            <img src="<?= base_url('images/story_bali_1781628901759.png') ?>" alt="Artisan Weaving Bali">
        </div>
        <div class="story-content">
            <span class="subtitle">Kisah Kami</span>
            <h2>Dikerjakan Langsung dari Workshop Kami</h2>
            <p>Di Bali Art House, kami memproduksi sendiri karya cetak sablon tekstil dan busana. Berawal dari workshop kecil di kawasan Pemogan, Denpasar, kami terus berupaya menyediakan kualitas produk lokal yang nyaman untuk keseharian Anda.</p>
            <p>Setiap goresan warna dan pola dirancang oleh para pekerja seni lokal Bali yang mendedikasikan keterampilannya di setiap pesanan yang masuk.</p>
            <a href="<?= base_url('/company-info') ?>" class="btn btn-primary" style="margin-top: 0.5rem;">Tentang Kami</a>
        </div>
    </section>

    <!-- Best Sellers Section -->
    <section class="best-sellers premium-section">
        <div class="section-header reveal">
            <span class="subtitle">Koleksi Terpopuler</span>
            <h2>Pilihan Pelanggan</h2>
            <div class="luxury-divider">
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z"/></svg>
            </div>
        </div>
        
        <div class="product-grid">
            <a href="<?= base_url('/catalog') ?>" class="product-card reveal">
                <div class="product-image-link">
                    <img src="<?= base_url('images/product_1_1781628927264.png') ?>" alt="Kemeja Sutra Premium">
                </div>
                <div class="product-info">
                    <h3>Kemeja Sutra Premium</h3>
                    <p class="product-price">Rp 450.000</p>
                </div>
            </a>
            <a href="<?= base_url('/catalog') ?>" class="product-card reveal delay-1">
                <div class="product-image-link">
                    <img src="<?= base_url('images/product_2_1781628941576.png') ?>" alt="Dress Pantai Crinkle">
                </div>
                <div class="product-info">
                    <h3>Dress Pantai Crinkle</h3>
                    <p class="product-price">Rp 380.000</p>
                </div>
            </a>
            <a href="<?= base_url('/catalog') ?>" class="product-card reveal delay-2">
                <div class="product-image-link">
                    <img src="<?= base_url('images/product_3_1781629292748.png') ?>" alt="Outer Lace Eksklusif">
                </div>
                <div class="product-info">
                    <h3>Outer Lace Eksklusif</h3>
                    <p class="product-price">Rp 250.000</p>
                </div>
            </a>
        </div>
    </section>

    <!-- Why Us Section -->
    <section class="why-us-section premium-section">
        <div class="section-header reveal">
            <span class="subtitle">Keunggulan Kami</span>
            <h2>Kualitas & Estetika Terbaik</h2>
            <div class="luxury-divider">
                <svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z"/></svg>
            </div>
        </div>
        
        <div class="features-grid">
            <div class="feature-item reveal">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                            <polyline points="2 17 12 22 22 17"/>
                            <polyline points="2 12 12 17 22 12"/>
                        </svg>
                    </div>
                </div>
                <h3>Desain Otentik Bali</h3>
                <p>Setiap motif terinspirasi langsung dari kekayaan budaya lokal Bali, dirancang orisinal oleh seniman berpengalaman.</p>
            </div>

            <div class="feature-item reveal delay-1">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                        </svg>
                    </div>
                </div>
                <h3>Bahan Alami Pilihan</h3>
                <p>Menggunakan serat kain rayon berkualitas yang berkarakteristik halus, jatuh, dan sejuk optimal saat dipakai.</p>
            </div>

            <div class="feature-item reveal delay-2">
                <div class="feature-icon-wrapper">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                </div>
                <h3>Kustomisasi Fleksibel</h3>
                <p>Kebebasan berkreasi. Unggah berkas gambar Anda untuk kami cetak pada aneka jenis pilihan bahan tekstil terbaik.</p>
            </div>
        </div>
    </section>
</div>

<!-- CTA Banner -->
<section class="cta-banner reveal" style="position: relative; background-image: url('<?= base_url('images/cta_banner_1781628914621.png') ?>'); background-size: cover; background-position: center; border-top: var(--border-gold); padding: 6rem 2rem; text-align: center; color: #ffffff;">
    <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.85) 100%); z-index: 1;"></div>
    <div class="cta-content" style="position: relative; z-index: 2; max-width: 700px; margin: 0 auto;">
        <h2 style="color: #ffffff; font-size: 2.2rem; margin-bottom: 1rem; font-family: var(--font-heading);">Ingin Custom Desain Sablon?</h2>
        <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.05rem; line-height: 1.6; margin-bottom: 2rem;">Gunakan layanan pesanan kustom untuk mencetak kain dengan corak dan motif buatan Anda sendiri. Dikerjakan langsung di workshop kami.</p>
        <a href="<?= base_url('/custom-order') ?>" class="btn btn-primary" style="padding: 1rem 2.5rem; font-size: 1rem; text-decoration: none;">Mulai Custom Order</a>
    </div>
</section>

<?= $this->endSection() ?>
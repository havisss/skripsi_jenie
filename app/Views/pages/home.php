<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="main-content-home">
    <section class="hero">
        <h1>Warna-Warni Khas Bali, Kini di Genggaman Anda.</h1>
        <p>Temukan koleksi eksklusif kain Bali dan pakaian jadi, atau ciptakan desain unik Anda sendiri.</p>
        <div class="hero-buttons">
            <a href="<?= base_url('/catalog') ?>" class="btn btn-primary">Lihat Katalog</a>
            <a href="<?= base_url('/custom-order') ?>" class="btn btn-secondary">Buat Pesanan Kustom</a>
        </div>
    </section>

    <section class="featured-categories">
        <h2>Jelajahi Koleksi Pilihan Kami</h2>
        <div class="category-grid">
            <a href="<?= base_url('/catalog') ?>" class="category-card">
                <img src="<?= base_url('images/kategori-kain.png') ?>" alt="Kain Meteran Bali">
                <div class="category-title">
                    <h3>Kain Meteran</h3>
                </div>
            </a>
            <a href="<?= base_url('/catalog') ?>" class="category-card">
                <img src="<?= base_url('images/kategori-piyama.png') ?>" alt="Setelan Piyama Khas Bali">
                <div class="category-title">
                    <h3>Setelan Piyama</h3>
                </div>
            </a>
            <a href="<?= base_url('/catalog') ?>" class="category-card">
                <img src="<?= base_url('images/kategori-mukena.png') ?>" alt="Mukena Bali">
                <div class="category-title">
                    <h3>Mukena Bali</h3>
                </div>
            </a>
        </div>
    </section>

    <section class="why-us-section">
        <h2>Kualitas dan Kreativitas Khas Pulau Dewata</h2>
        <div class="title-separator">🌺</div>
        <div class="features-grid">

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2l4.243 4.243a2 2 0 0 1 0 2.828L12 13.314l-4.243-4.243a2 2 0 0 1 0-2.828L12 2z" />
                        <path d="M2 12l4.243-4.243a2 2 0 0 1 2.828 0L13.314 12l-4.243 4.243a2 2 0 0 1-2.828 0L2 12z" />
                        <path
                            d="M10.686 12l4.243 4.243a2 2 0 0 1 0 2.828L12 22l-4.243-4.243a2 2 0 0 1 0-2.828L10.686 12z" />
                        <path
                            d="M22 12l-4.243 4.243a2 2 0 0 1-2.828 0L10.686 12l4.243-4.243a2 2 0 0 1 2.828 0L22 12z" />
                    </svg>
                </div>
                <h3>Desain Otentik Bali</h3>
                <p>Setiap motif terinspirasi dari kekayaan budaya dan alam Bali, dibuat langsung oleh pengrajin lokal.
                </p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                    </svg>
                </div>
                <h3>Bahan Premium Pilihan</h3>
                <p>Kami hanya menggunakan bahan berkualitas seperti rayon dan crinkle yang nyaman dan indah saat
                    dikenakan.</p>
            </div>

            <div class="feature-item">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a10 10 0 1 0 10 10" />
                        <path d="M12 2a10 10 0 0 0 10 10" />
                        <path d="M12 2a10 10 0 0 1-10 10" />
                        <path d="M12 2a10 10 0 1 1 10-10" />
                        <path d="M12 2l-2.5 5" />
                        <path d="M12 2l5 2.5" />
                        <path d="M12 2l2.5 5" />
                        <path d="M12 2l-5 2.5" />
                    </svg>
                </div>
                <h3>Kustomisasi Tanpa Batas</h3>
                <p>Wujudkan ide Anda. Unggah desain pribadi atau pilih dari template kami untuk produk yang unik.</p>
            </div>

        </div>
    </section>
</div>

<?= $this->endSection() ?>
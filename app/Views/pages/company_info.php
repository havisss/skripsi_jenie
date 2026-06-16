<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="main-content">
    <!-- Hero Banner -->
    <section class="company-hero">
        <div class="company-hero-content reveal">
            <h1>Tentang Bali Art House</h1>
            <p>Memadukan nilai seni tradisional dengan proses digital modern untuk melahirkan cetakan kain premium orisinal dari Bali.</p>
        </div>
    </section>

    <div class="ci-wrapper">
        
        <!-- Offerings Section -->
        <section class="ci-offerings reveal">
            <h2 class="ci-section-title">Layanan Kami</h2>
            <div class="ci-grid">
                
                <div class="ci-item">
                    <div class="ci-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7.01" y2="7"></line></svg>
                    </div>
                    <h3>Pakaian Adat & Kebaya</h3>
                    <p>Menyediakan aneka bahan batik sablon dan kebaya Bali berkualitas butik yang dikerjakan cermat.</p>
                </div>

                <div class="ci-item">
                    <div class="ci-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
                    </div>
                    <h3>Busana Pantai Eksklusif</h3>
                    <p>Gaun tidur crinkle, celana pantai kasual, dan piyama santai berdesain tropis yang modis.</p>
                </div>

                <div class="ci-item">
                    <div class="ci-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z"></path></svg>
                    </div>
                    <h3>Cetak Kain Custom</h3>
                    <p>Penerimaan cetak pesanan desain motif kustom pada kain katun rayon premium dengan pengerjaan aman.</p>
                </div>

            </div>
        </section>

        <!-- Milestones Section -->
        <section class="ci-timeline reveal" style="margin-bottom: 6rem; position: relative;">
            <h2 class="ci-section-title">Perjalanan Studio</h2>
            
            <div style="max-width: 800px; margin: 0 auto; padding-left: 2rem; border-left: 1.5px dashed var(--primary-color); position: relative;">
                
                <!-- Step 1 -->
                <div style="margin-bottom: 3rem; position: relative;">
                    <div style="position: absolute; left: -2.55rem; top: 0.3rem; width: 16px; height: 16px; border-radius: 50%; background: var(--primary-color);"></div>
                    <span style="font-family: var(--font-heading); font-size: 1.5rem; color: var(--primary-color); font-weight: 600; display: block; margin-bottom: 0.3rem;">2012 — Pendirian Workshop</span>
                    <p style="color: var(--text-light); line-height: 1.6; font-size: 0.95rem;">Kami mengawali langkah di Pemogan Denpasar dengan melayani jasa cetak sablon kain tradisional motif khas bunga bali.</p>
                </div>

                <!-- Step 2 -->
                <div style="margin-bottom: 3rem; position: relative;">
                    <div style="position: absolute; left: -2.55rem; top: 0.3rem; width: 16px; height: 16px; border-radius: 50%; background: var(--primary-color);"></div>
                    <span style="font-family: var(--font-heading); font-size: 1.5rem; color: var(--primary-color); font-weight: 600; display: block; margin-bottom: 0.3rem;">2018 — Pembukaan Toko Retail</span>
                    <p style="color: var(--text-light); line-height: 1.6; font-size: 0.95rem;">Membuka gerai butik fisik guna memasarkan langsung pakaian piyama rayon dan kebaya Bali ke pembeli retail.</p>
                </div>

                <!-- Step 3 -->
                <div style="position: relative;">
                    <div style="position: absolute; left: -2.55rem; top: 0.3rem; width: 16px; height: 16px; border-radius: 50%; background: var(--primary-color);"></div>
                    <span style="font-family: var(--font-heading); font-size: 1.5rem; color: var(--primary-color); font-weight: 600; display: block; margin-bottom: 0.3rem;">2026 — Sistem Custom Online</span>
                    <p style="color: var(--text-light); line-height: 1.6; font-size: 0.95rem;">Merilis integrasi sistem web terpadu untuk melayani pesanan kustomisasi corak printing secara digital.</p>
                </div>

            </div>
        </section>

        <!-- Contact Section & Map Grid -->
        <section class="ci-contact-section reveal">
            <div class="ci-contact-info">
                <h3>Hubungi Kami</h3>
                
                <ul class="ci-list">
                    <li>
                        <div class="ci-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <div class="ci-list-content">
                            <strong>Alamat Studio</strong>
                            <p>Jl. Raya Pemogan Gg. Timbul No.1A<br>Denpasar Selatan, Bali</p>
                        </div>
                    </li>
                    <li>
                        <div class="ci-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <div class="ci-list-content">
                            <strong>Telepon / WhatsApp</strong>
                            <a href="tel:+62361123456">+62 361 123 456</a>
                        </div>
                    </li>
                    <li>
                        <div class="ci-list-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </div>
                        <div class="ci-list-content">
                            <strong>E-mail</strong>
                            <a href="mailto:info@baliarthouseprint.com">info@baliarthouseprint.com</a>
                        </div>
                    </li>
                </ul>

                <h3>Jam Operasional</h3>
                <ul class="ci-hours">
                    <li><span>Senin - Jumat</span> <span>09:00 WITA - 18:00 WITA</span></li>
                    <li><span>Sabtu</span> <span>09:00 WITA - 16:00 WITA</span></li>
                    <li><span>Minggu / Hari Libur</span> <span>Tutup</span></li>
                </ul>

                <div class="ci-social">
                    <a href="#" aria-label="Facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                    </a>
                    <a href="#" aria-label="Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                </div>

            </div>

            <div class="ci-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.911874241035!2d115.2033333!3d-8.6975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24107a77abcc1%3A0x6285474f358d4855!2sJl.%20Raya%20Pemogan%20Gg.%20Timbul%2C%20Pemogan%2C%20Denpasar%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali!5e0!3m2!1sen!2sid!4v1727447214500!5m2!1sen!2sid"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

    </div>

</div>

<?= $this->endSection() ?>
<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="main-content">

    <section class="page-header">
        <h1>Tentang Bali Art House Print</h1>
        <p>Lebih dari sekadar produsen, kami adalah mitra kreatif Anda dalam mewujudkan kain dan pakaian khas Bali
            berkualitas tinggi. Pelajari lebih lanjut tentang layanan dan cara menghubungi kami.</p>
    </section>

    <section class="offerings-section">
        <h2>Layanan Unggulan Kami</h2>
        <div class="offerings-grid">
            <div class="offering-item">
                <div class="offering-icon icon-traditional">👘</div>
                <div class="offering-content">
                    <h3>Pakaian Tradisional Indonesia</h3>
                    <p>Menyediakan setelan batik otentik dan pakaian budaya yang kaya akan nilai seni tradisional.</p>
                </div>
            </div>
            <div class="offering-item">
                <div class="offering-icon icon-fashion">🌸</div>
                <div class="offering-content">
                    <h3>Fashion Tropis Modern</h3>
                    <p>Koleksi gaun modern, atasan, dan pakaian kasual dengan motif tropis yang segar dan elegan.</p>
                </div>
            </div>
            <div class="offering-item">
                <div class="offering-icon icon-fabric">🧵</div>
                <div class="offering-content">
                    <h3>Kain Premium Meteran</h3>
                    <p>Pilihan kain berkualitas tinggi seperti rayon dan crinkle, cocok untuk berbagai proyek kreatif
                        Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-map-section">
        <h2>Hubungi & Kunjungi Kami</h2>
        <div class="contact-map-grid">
            <div class="contact-details">
                <h3>Detail Kontak</h3>
                <ul class="contact-list">
                    <li>
                        <span class="contact-icon-small">📍</span>
                        <div>
                            <strong>Alamat:</strong>
                            <p>Jl. Raya Pemogan Gg. Timbul No.1A, Denpasar Selatan, Kota Denpasar, Bali</p>
                        </div>
                    </li>
                    <li>
                        <span class="contact-icon-small">📞</span>
                        <div>
                            <strong>Telepon:</strong>
                            <p><a href="tel:+622112345678">+62 21 1234 5678</a></p>
                        </div>
                    </li>
                    <li>
                        <span class="contact-icon-small">📧</span>
                        <div>
                            <strong>Email:</strong>
                            <p><a href="mailto:info@tropicalshop.com">info@tropicalshop.com</a></p>
                        </div>
                    </li>
                </ul>

                <h3>Jam Operasional</h3>
                <ul class="business-hours-list">
                    <li><span>Senin - Jumat</span> <span>09:00 - 18:00</span></li>
                    <li><span>Sabtu</span> <span>09:00 - 16:00</span></li>
                    <li><span>Minggu</span> <span>Tutup</span></li>
                </ul>

                <h3>Media Sosial</h3>
                <div class="social-links">
                    <a href="#" class="social-btn social-facebook">Facebook</a>
                    <a href="#" class="social-btn social-instagram">Instagram</a>
                    <a href="#" class="social-btn social-twitter">Twitter</a>
                </div>
            </div>

            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.911874241035!2d115.2033333!3d-8.6975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24107a77abcc1%3A0x6285474f358d4855!2sJl.%20Raya%20Pemogan%20Gg.%20Timbul%2C%20Pemogan%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali!5e0!3m2!1sen!2sid!4v1727447214500!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

</div>

<?= $this->endSection() ?>
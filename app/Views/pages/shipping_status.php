<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="cart-flat-wrapper" style="max-width: 1000px; margin: 0 auto; padding: 9rem 2rem 4rem 2rem;">
    <div class="cart-flat-header reveal" style="text-align: center; margin-bottom: 3.5rem;">
        <h1>Status Pengiriman</h1>
        <div class="luxury-divider">
            <svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z"/></svg>
        </div>
        <p style="font-family: var(--font-body); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-light);">Lacak proses produksi dan pengiriman pesanan Anda secara real-time</p>
    </div>

    <div class="cart-flat-container">
        
        <!-- Left Column: Shipping Tracking Timeline -->
        <div class="cart-flat-items reveal" style="background: var(--bg-card); border: var(--border-gold); padding: 2.5rem; display: flex; flex-direction: column; gap: 1rem;">
            <h2 style="font-family: var(--font-heading); font-size: 1.4rem; margin-bottom: 2rem; color: var(--text-color); border-bottom: 1px solid rgba(179,135,40,0.15); padding-bottom: 0.8rem; letter-spacing: 0.5px;">Linimasa Pengiriman</h2>

            <!-- Timeline Container -->
            <div style="position: relative; padding-left: 3.5rem;">
                
                <!-- Connector Line -->
                <div style="position: absolute; left: 1.25rem; top: 0.5rem; bottom: 0.5rem; width: 1.5px; background: linear-gradient(to bottom, var(--primary-color) 60%, rgba(179,135,40,0.15) 60%);"></div>

                <!-- Step 1: Completed -->
                <div style="position: relative; margin-bottom: 2.2rem;">
                    <!-- Dot Badge -->
                    <div style="position: absolute; left: -3.5rem; width: 2.6rem; height: 2.6rem; border-radius: 50%; background: var(--primary-color); border: 1.5px solid var(--primary-color); display: flex; align-items: center; justify-content: center; color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </div>
                    <div>
                        <h3 style="font-family: var(--font-heading); font-size: 1rem; color: var(--text-color); font-weight: 600; margin-bottom: 0.2rem;">Pemesanan Diterima</h3>
                        <p style="font-size: 0.8rem; color: var(--text-light); margin-bottom: 0.2rem;">Pesanan Anda telah disimpan dan masuk ke antrean sistem.</p>
                        <span style="font-size: 0.75rem; color: var(--primary-light); font-weight: 500; font-family: var(--font-body);">17 Jun 2026, 04:09 WITA</span>
                    </div>
                </div>

                <!-- Step 2: Completed -->
                <div style="position: relative; margin-bottom: 2.2rem;">
                    <!-- Dot Badge -->
                    <div style="position: absolute; left: -3.5rem; width: 2.6rem; height: 2.6rem; border-radius: 50%; background: var(--primary-color); border: 1.5px solid var(--primary-color); display: flex; align-items: center; justify-content: center; color: white;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    </div>
                    <div>
                        <h3 style="font-family: var(--font-heading); font-size: 1rem; color: var(--text-color); font-weight: 600; margin-bottom: 0.2rem;">Pembayaran Diverifikasi</h3>
                        <p style="font-size: 0.8rem; color: var(--text-light); margin-bottom: 0.2rem;">Bukti transfer Anda telah dikonfirmasi dan divalidasi oleh admin.</p>
                        <span style="font-size: 0.75rem; color: var(--primary-light); font-weight: 500; font-family: var(--font-body);">17 Jun 2026, 04:10 WITA</span>
                    </div>
                </div>

                <!-- Step 3: Active / Processing -->
                <div style="position: relative; margin-bottom: 2.2rem;">
                    <!-- Dot Badge with breathing pulse -->
                    <div style="position: absolute; left: -3.5rem; width: 2.6rem; height: 2.6rem; border-radius: 50%; background: #ffffff; border: 2.5px solid var(--primary-color); display: flex; align-items: center; justify-content: center; color: var(--primary-color); box-shadow: 0 0 0 4px rgba(179,135,40,0.15);">
                        <svg viewBox="0 0 24 24" style="width: 16; height: 16; fill: var(--primary-color);">
                            <path d="M12 0c-.8 2-1.7 4-2.8 5.7C7.3 3.6 5 2.5 2.5 2c.5 2.5 1.6 4.8 3.7 6.7C4 9.8 2 10.7 0 11.5c2 .8 4 1.7 5.7 2.8-2.1 1.9-3.2 4.2-3.7 6.7 2.5-.5 4.8-1.6 6.7-3.7.8 2 1.7 4 2.8 5.7.8-2 1.7-4 2.8-5.7 1.9 2.1 4.2 3.2 6.7 3.7-.5-2.5-1.6-4.8-3.7-6.7 2.2-1.1 4.2-2 6.2-2.8-2-.8-4-1.7-5.7-2.8 2.1-1.9 3.2-4.2 3.7-6.7-2.5.5-4.8 1.6-6.7 3.7-.8-2-1.7-4-2.8-5.7z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 style="font-family: var(--font-heading); font-size: 1rem; color: var(--primary-color); font-weight: 700; margin-bottom: 0.2rem;">Sedang Diproses (Produksi)</h3>
                        <p style="font-size: 0.8rem; color: var(--text-light); margin-bottom: 0.2rem;">Pesanan sedang dalam proses penjahitan dan pencetakan motif tradisional Bali.</p>
                        <span style="font-size: 0.75rem; color: var(--primary-color); font-weight: 600; font-family: var(--font-body);">Sedang Berjalan - 17 Jun 2026, 04:12 WITA</span>
                    </div>
                </div>

                <!-- Step 4: Pending -->
                <div style="position: relative; margin-bottom: 2.2rem; opacity: 0.5;">
                    <!-- Dot Badge -->
                    <div style="position: absolute; left: -3.5rem; width: 2.6rem; height: 2.6rem; border-radius: 50%; background: var(--bg-color); border: 1.5px dashed rgba(179,135,40,0.4); display: flex; align-items: center; justify-content: center; color: var(--text-light);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                    </div>
                    <div>
                        <h3 style="font-family: var(--font-heading); font-size: 1rem; color: var(--text-color); font-weight: 500; margin-bottom: 0.2rem;">Dalam Pengiriman</h3>
                        <p style="font-size: 0.8rem; color: var(--text-light); margin-bottom: 0.2rem;">Pesanan diserahkan ke kurir JNE dan siap dikirim ke alamat tujuan.</p>
                        <span style="font-size: 0.75rem; color: var(--text-light); font-family: var(--font-body);">Menunggu Kurir</span>
                    </div>
                </div>

                <!-- Step 5: Pending -->
                <div style="position: relative; opacity: 0.5;">
                    <!-- Dot Badge -->
                    <div style="position: absolute; left: -3.5rem; width: 2.6rem; height: 2.6rem; border-radius: 50%; background: var(--bg-color); border: 1.5px dashed rgba(179,135,40,0.4); display: flex; align-items: center; justify-content: center; color: var(--text-light);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </div>
                    <div>
                        <h3 style="font-family: var(--font-heading); font-size: 1rem; color: var(--text-color); font-weight: 500; margin-bottom: 0.2rem;">Telah Diterima</h3>
                        <p style="font-size: 0.8rem; color: var(--text-light); margin-bottom: 0.2rem;">Barang sampai di alamat tujuan dan diterima oleh pemesan.</p>
                        <span style="font-size: 0.75rem; color: var(--text-light); font-family: var(--font-body);">Menunggu Paket Tiba</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Right Column: Shipping & Package Metadata -->
        <div class="cart-flat-summary reveal delay-2">
            <div class="cf-summary-box" style="margin-bottom: 2rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.3rem; margin-bottom: 1.5rem; color: var(--text-color); border-bottom: 1px solid rgba(179,135,40,0.15); padding-bottom: 0.8rem; letter-spacing: 0.5px;">Detail Pengiriman</h2>
                
                <div style="font-size: 0.85rem; display: flex; flex-direction: column; gap: 1.2rem;">
                    <div>
                        <span style="display: block; font-size: 0.7rem; color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.2rem;">ID Pesanan / Invoice</span>
                        <strong style="font-size: 1.05rem; color: var(--text-color);">BAH-2026-0617</strong>
                    </div>

                    <div>
                        <span style="display: block; font-size: 0.7rem; color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.2rem;">Penerima & Kontak</span>
                        <strong>Paduka Blue</strong><br>
                        <span>0812-3456-7890</span>
                    </div>

                    <div>
                        <span style="display: block; font-size: 0.7rem; color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.2rem;">Alamat Pengiriman</span>
                        <span>Jalan Gatot Subroto No. 45, Denpasar, Kota Denpasar, Bali.</span>
                    </div>

                    <div style="border-top: 1px solid rgba(179,135,40,0.15); padding-top: 1.2rem;">
                        <span style="display: block; font-size: 0.7rem; color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.2rem;">Jasa Ekspedisi</span>
                        <strong>JNE Express (Layanan Reguler)</strong>
                    </div>

                    <div>
                        <span style="display: block; font-size: 0.7rem; color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.2rem;">Nomor Resi Pengiriman</span>
                        <strong style="font-family: monospace; font-size: 1.05rem; color: var(--primary-color);">BAH9872164501</strong>
                    </div>

                    <div>
                        <span style="display: block; font-size: 0.7rem; color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.2rem;">Estimasi Paket Tiba</span>
                        <strong>2 - 3 Hari Kerja</strong>
                    </div>
                </div>

                <div style="border-top: 1.5px solid var(--primary-color); padding-top: 1.5rem; margin-top: 1.5rem; text-align: center;">
                    <a href="<?= base_url('/catalog') ?>" class="btn btn-primary" style="width: 100%; font-size: 0.85rem; letter-spacing: 1.5px; padding: 0.8rem;">
                        Belanja Kembali
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>

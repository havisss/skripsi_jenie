<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="cart-flat-wrapper">
    <div class="cart-flat-header reveal">
        <h1>Checkout Pemesanan</h1>
        <div class="luxury-divider">
            <svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z"/></svg>
        </div>
        <p style="font-family: var(--font-body); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-light);">Lengkapi detail pengiriman dan selesaikan pembayaran Anda</p>
    </div>

    <div class="cart-flat-container">
        <!-- Left Column: Delivery Form -->
        <div class="cart-flat-items reveal">
            <div style="background: var(--bg-card); border: var(--border-gold); padding: 2.5rem; margin-bottom: 2rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.5rem; margin-bottom: 2rem; color: var(--text-color); border-bottom: 1px solid rgba(179,135,40,0.15); padding-bottom: 0.8rem; letter-spacing: 0.5px;">1. Detail Pengiriman (Pemesanan)</h2>
                
                <form id="checkout-form" onsubmit="handleCheckout(event)">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
                        <div class="input-group" style="margin-bottom: 0;">
                            <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Nama Penerima</label>
                            <input type="text" required placeholder="Nama lengkap penerima" style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color);">
                        </div>
                        <div class="input-group" style="margin-bottom: 0;">
                            <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Nomor Telepon</label>
                            <input type="tel" required placeholder="08XXXXXXXXXX" style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color);">
                        </div>
                    </div>

                    <div class="input-group" style="margin-bottom: 1.5rem;">
                        <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Alamat Lengkap</label>
                        <textarea required placeholder="Nama jalan, nomor rumah, RT/RW, Dusun" style="width: 100%; height: 100px; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-family: var(--font-body); font-size: 0.9rem; border-radius: 0; resize: none; color: var(--text-color); outline: none; transition: var(--transition-premium);"></textarea>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
                        <div class="input-group" style="margin-bottom: 0;">
                            <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Kota / Kabupaten</label>
                            <input type="text" required placeholder="Contoh: Denpasar" style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color);">
                        </div>
                        <div class="input-group" style="margin-bottom: 0;">
                            <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Provinsi</label>
                            <input type="text" required placeholder="Contoh: Bali" style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color);">
                        </div>
                    </div>

                    <div class="input-group" style="margin-bottom: 1.5rem;">
                        <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Jasa Kurir Pengiriman</label>
                        <select required style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color); outline: none;">
                            <option value="">Pilih kurir pengiriman</option>
                            <option value="JNE">JNE Express (Reguler) - Estimasi 2-3 Hari</option>
                            <option value="POS">POS Indonesia (Kilat) - Estimasi 3-4 Hari</option>
                            <option value="TIKI">TIKI (Regular) - Estimasi 2-3 Hari</option>
                        </select>
                    </div>
                </form>
            </div>
            
            <a href="<?= base_url('/catalog') ?>" class="cf-continue">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Kembali ke Katalog
            </a>
        </div>

        <!-- Right Column: Invoice Breakdown & Payment Transfer -->
        <div class="cart-flat-summary reveal delay-1">
            <div class="cf-summary-box" style="margin-bottom: 2rem;">
                <h2 style="font-family: var(--font-heading); font-size: 1.3rem; margin-bottom: 1.5rem; color: var(--text-color); border-bottom: 1px solid rgba(179,135,40,0.15); padding-bottom: 0.8rem; letter-spacing: 0.5px;">Ringkasan Belanja</h2>
                
                <div class="cf-summary-details">
                    <div class="cf-summary-row">
                        <span>Subtotal</span>
                        <span>Rp 560.000</span>
                    </div>
                    <div class="cf-summary-row">
                        <span>Pajak Layanan (10%)</span>
                        <span>Rp 56.000</span>
                    </div>
                    <div class="cf-summary-row">
                        <span>Ongkos Kirim (Flat)</span>
                        <span>Rp 22.000</span>
                    </div>
                </div>

                <div class="cf-summary-total" style="border-top: 1.5px solid var(--primary-color); padding-top: 1.2rem; margin-top: 1.2rem; margin-bottom: 2rem;">
                    <span>Total Bayar</span>
                    <span style="color: var(--primary-color); font-weight: 700; font-size: 1.25rem;">Rp 638.000</span>
                </div>

                <!-- 2. Transfer Bank (Pembayaran) -->
                <h3 style="font-family: var(--font-heading); font-size: 0.9rem; text-transform: uppercase; letter-spacing: 1px; color: var(--text-color); margin-bottom: 0.8rem;">2. Rekening Transfer Bank</h3>
                <div style="background: var(--bg-color); border: 1px solid rgba(179,135,40,0.15); padding: 1rem; margin-bottom: 2rem; font-size: 0.85rem;">
                    <div style="margin-bottom: 0.8rem;">
                        <strong>BANK BCA</strong><br>
                        No. Rek: <span style="font-family: monospace; font-size: 0.95rem; color: var(--primary-color); font-weight: bold;">145-0982-121</span><br>
                        a.n. Bali Art House Print
                    </div>
                    <div>
                        <strong>BANK MANDIRI</strong><br>
                        No. Rek: <span style="font-family: monospace; font-size: 0.95rem; color: var(--primary-color); font-weight: bold;">102-0091-8821</span><br>
                        a.n. Bali Art House Print
                    </div>
                </div>

                <button type="button" class="btn btn-primary cf-checkout-btn" onclick="document.getElementById('checkout-form').dispatchEvent(new Event('submit'))" style="width: 100%;">
                    Selesaikan & Bayar
                </button>
                
                <p class="cf-summary-note">
                    * Transfer bukti bayar pada halaman berikutnya untuk konfirmasi pengiriman.
                </p>
            </div>
        </div>
    </div>
</div>

<script>
function handleCheckout(event) {
    event.preventDefault();
    alert('Pemesanan Berhasil Disimpan!\n\nSilakan lakukan transfer sebesar Rp 638.000 ke salah satu rekening Bank Bali Art House tertera. Anda akan dialihkan ke halaman Riwayat Transaksi.');
    window.location.href = '<?= base_url('/transaction-history') ?>';
}
</script>

<?= $this->endSection() ?>

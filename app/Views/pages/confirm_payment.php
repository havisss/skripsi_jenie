<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="cart-flat-wrapper" style="display: flex; flex-direction: column; align-items: center;">
    <div class="cart-flat-header reveal" style="width: 100%; text-align: center;">
        <h1>Konfirmasi Pembayaran</h1>
        <div class="luxury-divider">
            <svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z"/></svg>
        </div>
        <p style="font-family: var(--font-body); font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-light);">Laporkan pembayaran transfer Anda untuk mempercepat verifikasi pesanan</p>
    </div>

    <!-- Confirmation Form Card -->
    <div class="reveal delay-1" style="background: var(--bg-card); border: var(--border-gold); padding: 3rem 2.5rem; max-width: 500px; width: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.02); margin-top: 1rem;">
        <form id="payment-confirm-form" onsubmit="handlePaymentConfirmation(event)">
            
            <div class="input-group" style="margin-bottom: 1.5rem;">
                <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Nomor Invoice / ID Pesanan</label>
                <input type="text" required placeholder="Contoh: BAH-2026-0617" style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color);">
            </div>

            <div class="input-group" style="margin-bottom: 1.5rem;">
                <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Nama Rekening Pengirim</label>
                <input type="text" required placeholder="Nama pemilik rekening pengirim" style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color);">
            </div>

            <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 1.2rem; margin-bottom: 1.5rem;">
                <div class="input-group" style="margin-bottom: 0;">
                    <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Bank Tujuan Transfer</label>
                    <select required style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color); outline: none;">
                        <option value="">Pilih Bank</option>
                        <option value="BCA">BCA (145-0982-121)</option>
                        <option value="MANDIRI">MANDIRI (102-0091-8821)</option>
                    </select>
                </div>
                <div class="input-group" style="margin-bottom: 0;">
                    <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Jumlah Transfer</label>
                    <input type="text" required placeholder="Rp 638.000" style="width: 100%; padding: 0.75rem 0.8rem; background: var(--bg-color); border: 1px solid rgba(0,0,0,0.12); font-size: 0.9rem; border-radius: 0; color: var(--text-color);">
                </div>
            </div>

            <!-- Upload Receipt Image (Custom dashed luxury zone) -->
            <div class="input-group" style="margin-bottom: 2.2rem;">
                <label style="display: block; color: var(--text-color); font-weight: 600; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Bukti Transfer (Gambar / PDF)</label>
                <div id="receipt-drop-zone" onclick="document.getElementById('receipt-file').click()" style="width: 100%; border: 1.5px dashed var(--primary-color); background: rgba(179,135,40,0.02); padding: 2.5rem 1.5rem; text-align: center; cursor: pointer; transition: var(--transition-premium); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 0.8rem;">
                    <svg viewBox="0 0 24 24" style="width: 38px; height: 38px; fill: none; stroke: var(--primary-color); stroke-width: 1.2;" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M17 8l-5-5-5 5M12 3v12" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div id="receipt-text" style="font-size: 0.85rem; color: var(--text-light); font-weight: 500;">Klik atau seret bukti transfer ke area ini</div>
                    <div style="font-size: 0.7rem; color: rgba(179,135,40,0.6); text-transform: uppercase; letter-spacing: 1px;">Maksimal Ukuran File: 5MB</div>
                    <input type="file" id="receipt-file" required accept="image/*,.pdf" style="display: none;" onchange="handleFileSelect(this)">
                </div>
            </div>

            <button type="submit" class="btn-submit" style="width: 100%; padding: 1rem; font-size: 0.95rem; font-weight: 600; border-radius: 0; border: 1px solid var(--primary-color); text-transform: uppercase; letter-spacing: 2px;">
                Kirim Konfirmasi
            </button>
        </form>
    </div>
</div>

<script>
function handleFileSelect(input) {
    const textEl = document.getElementById('receipt-text');
    const zoneEl = document.getElementById('receipt-drop-zone');
    if (input.files && input.files[0]) {
        textEl.textContent = `File Terpilih: ${input.files[0].name}`;
        textEl.style.color = 'var(--primary-color)';
        textEl.style.fontWeight = '600';
        zoneEl.style.background = 'rgba(179,135,40,0.06)';
        zoneEl.style.borderColor = 'var(--primary-light)';
    }
}

function handlePaymentConfirmation(event) {
    event.preventDefault();
    alert('Konfirmasi Pembayaran Diterima!\n\nBukti transfer telah berhasil diunggah. Admin Bali Art House akan melakukan verifikasi pembayaran dalam waktu maksimal 1x24 jam. Anda akan diarahkan ke halaman Status Pengiriman untuk memantau paket Anda.');
    window.location.href = '<?= base_url('/shipping-status') ?>';
}
</script>

<?= $this->endSection() ?>

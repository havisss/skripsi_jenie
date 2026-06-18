<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
/* Simplified Centered Layout for Custom Order */
.co-simple-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 4rem 1.5rem;
}

.co-step-card {
    background: var(--bg-card);
    border: var(--border-gold);
    padding: 3rem;
    margin-bottom: 2.5rem;
    box-shadow: 0 4px 20px rgba(0,0,0,0.02);
    border-radius: 4px;
}

.co-step-title {
    font-family: var(--font-heading);
    font-size: 1.5rem;
    color: var(--text-color);
    margin-bottom: 2rem;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.8rem;
}

.co-step-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background: var(--primary-color);
    color: #fff;
    border-radius: 50%;
    font-size: 1rem;
    font-family: var(--font-body);
    font-weight: 600;
}

.product-grid-simple {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}

.product-option-card {
    cursor: pointer;
    display: block;
    text-align: center;
}

.poc-content {
    border: 1px solid rgba(0,0,0,0.08);
    background: #fff;
    padding: 1rem;
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.poc-content img {
    width: 100%;
    height: 140px;
    object-fit: cover;
    margin-bottom: 1rem;
    border: 1px solid rgba(0,0,0,0.04);
}

.poc-content span {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--text-light);
    text-transform: uppercase;
    letter-spacing: 1px;
}

input[type="radio"]:checked + .poc-content {
    border-color: var(--primary-color);
    box-shadow: 0 4px 15px rgba(179,135,40,0.15);
}

input[type="radio"]:checked + .poc-content span {
    color: var(--primary-color);
}

.co-input-wrapper {
    margin-bottom: 1.5rem;
}

.co-label {
    display: block;
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-weight: 600;
    margin-bottom: 0.8rem;
    color: var(--text-color);
}

.co-input-simple {
    width: 100%;
    padding: 1rem;
    border: 1px solid rgba(0,0,0,0.15);
    background: #fff;
    font-size: 0.95rem;
    outline: none;
    transition: border-color 0.3s;
    font-family: var(--font-body);
}

.co-input-simple:focus {
    border-color: var(--primary-color);
}

.co-summary-box {
    background: rgba(179,135,40,0.03);
    border: 1px solid rgba(179,135,40,0.2);
    padding: 2rem;
    text-align: center;
    margin-top: 2rem;
}

.co-summary-list {
    list-style: none;
    margin: 1.5rem 0;
    padding: 0;
    font-size: 0.95rem;
    color: var(--text-light);
}

.co-summary-list li {
    margin-bottom: 0.8rem;
}

.co-summary-list strong {
    color: var(--text-color);
    font-weight: 600;
    margin-left: 0.5rem;
}

/* Mobile Adjustments for Simplicity & Center Alignment */
@media (max-width: 768px) {
    .co-simple-container {
        padding: 2rem 1rem;
    }
    .co-step-card {
        padding: 2rem 1.2rem;
        text-align: center; /* Center everything in card */
    }
    .product-grid-simple {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }
    .poc-content img {
        height: 100px;
    }
    .co-label {
        text-align: center;
    }
    .co-input-simple {
        text-align: center;
    }
    .input-flex-row {
        flex-direction: column;
    }
    .qty-wrapper {
        justify-content: center;
    }
}
</style>

<div class="main-content">
    <!-- Hero Banner -->
    <section class="custom-hero" style="background-image: url('<?= base_url('images/custom_hero_1781629681878.png') ?>');">
        <div class="custom-hero-content reveal">
            <h1>Desain Personal Anda</h1>
            <p>Wujudkan mahakarya eksklusif sesuai dengan preferensi motif dan ukuran Anda.</p>
        </div>
    </section>

    <div class="co-simple-container">
        <div class="reveal">
            
            <!-- Step 1: Product -->
            <div class="co-step-card">
                <h2 class="co-step-title">
                    <span class="co-step-number">1</span>
                    Pilih Kategori Produk
                </h2>
                
                <div class="product-grid-simple">
                    <label class="product-option-card">
                        <input type="radio" name="product_base" value="Kain Meteran" checked onchange="updateSummary()" style="display: none;">
                        <div class="poc-content">
                            <img src="<?= base_url('images/product_4_1781629306089.png') ?>" alt="Kain">
                            <span>Kain Meteran</span>
                        </div>
                    </label>
                    <label class="product-option-card">
                        <input type="radio" name="product_base" value="Pakaian Jadi" onchange="updateSummary()" style="display: none;">
                        <div class="poc-content">
                            <img src="<?= base_url('images/product_1_1781628927264.png') ?>" alt="Pakaian">
                            <span>Pakaian Jadi</span>
                        </div>
                    </label>
                    <label class="product-option-card">
                        <input type="radio" name="product_base" value="Dress & Mukena" onchange="updateSummary()" style="display: none;">
                        <div class="poc-content">
                            <img src="<?= base_url('images/product_5_1781629315810.png') ?>" alt="Dress">
                            <span>Dress & Mukena</span>
                        </div>
                    </label>
                    <label class="product-option-card">
                        <input type="radio" name="product_base" value="Tas & Aksesoris" onchange="updateSummary()" style="display: none;">
                        <div class="poc-content">
                            <img src="<?= base_url('images/product_6_1781629329107.png') ?>" alt="Tas">
                            <span>Tas & Aksesoris</span>
                        </div>
                    </label>
                </div>
            </div>

            <!-- Step 2: Details -->
            <div class="co-step-card delay-1">
                <h2 class="co-step-title">
                    <span class="co-step-number">2</span>
                    Detail Spesifikasi
                </h2>

                <div class="co-input-wrapper">
                    <label class="co-label">Warna Dominan</label>
                    <input type="text" id="warna_input" oninput="updateSummary()" class="co-input-simple" placeholder="Contoh: Merah Maroon, Cream, Navy">
                </div>

                <div class="co-input-wrapper">
                    <label class="co-label">Ukuran / Dimensi</label>
                    <div style="display: flex;" class="input-flex-row">
                        <input type="text" id="ukuran_input" oninput="updateSummary()" class="co-input-simple" placeholder="Misal: 100x150" style="flex: 1;">
                        <select id="satuan_input" onchange="updateSummary()" class="co-input-simple" style="width: 100px; background: #f9f9f9; border-left: none;">
                            <option value="cm">cm</option>
                            <option value="m">m</option>
                        </select>
                    </div>
                </div>

                <div class="co-input-wrapper" style="margin-top: 2.5rem;">
                    <label class="co-label">Unggah Desain Motif (Wajib)</label>
                    <div onclick="document.getElementById('file_upload').click()" style="border: 1.5px dashed var(--primary-color); background: rgba(179,135,40,0.03); padding: 3rem 1rem; text-align: center; cursor: pointer; transition: all 0.3s ease;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="width: 36px; height: 36px; margin-bottom: 1rem;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                        <p id="file_name_display" style="font-family: var(--font-heading); font-size: 1.2rem; color: var(--text-color); margin-bottom: 0.3rem;">Klik untuk mengunggah berkas</p>
                        <p style="font-size: 0.8rem; color: var(--text-light);">Format yang didukung: JPG, PNG, PDF (Maks 10MB)</p>
                        <input type="file" id="file_upload" style="display: none;" accept="image/*,.pdf" onchange="handleFileUpload(this)">
                    </div>
                </div>
            </div>

            <!-- Step 3: Summary & Submit -->
            <div class="co-step-card delay-2" style="margin-bottom: 0;">
                <h2 class="co-step-title">
                    <span class="co-step-number">3</span>
                    Konfirmasi Pesanan
                </h2>

                <div class="co-summary-box">
                    <h3 style="font-family: var(--font-heading); font-size: 1.2rem; margin-bottom: 1rem; color: var(--primary-color);">Ringkasan Permintaan</h3>
                    
                    <ul class="co-summary-list">
                        <li>Produk: <strong id="summ_prod">Kain Meteran</strong></li>
                        <li>Warna: <strong id="summ_color">-</strong></li>
                        <li>Dimensi: <strong id="summ_size">-</strong></li>
                        <li>Berkas: <strong id="summ_file" style="color: #e74c3c;">Belum dilampirkan</strong></li>
                    </ul>

                    <div class="qty-wrapper" style="display: flex; align-items: center; justify-content: center; gap: 1rem; margin: 2rem 0;">
                        <span style="font-size: 0.85rem; text-transform: uppercase; font-weight: 600; letter-spacing: 1px;">Kuantitas:</span>
                        <div style="display: flex; align-items: center; border: var(--border-gold); background: #fff;">
                            <button type="button" onclick="changeQty(-1)" style="width: 40px; height: 40px; border: none; background: transparent; cursor: pointer; color: var(--primary-color); font-weight: bold; font-size: 1.2rem;">-</button>
                            <input type="text" id="qty_input" value="1" readonly style="width: 50px; height: 40px; text-align: center; border: none; background: transparent; font-weight: 600; font-size: 1.1rem; color: var(--text-color);">
                            <button type="button" onclick="changeQty(1)" style="width: 40px; height: 40px; border: none; background: transparent; cursor: pointer; color: var(--primary-color); font-weight: bold; font-size: 1.2rem;">+</button>
                        </div>
                    </div>

                    <div style="margin: 2.5rem 0 1.5rem 0;">
                        <span style="display: block; font-size: 0.9rem; color: var(--text-light); text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Estimasi Total Harga</span>
                        <span id="summ_price" style="font-size: 2rem; font-weight: 600; color: var(--text-color);">Rp 125.000</span>
                    </div>

                    <button class="btn btn-primary" onclick="alert('Pesanan Kustom berhasil dibuat! Tim kami akan segera meninjau desain Anda.')" style="width: 100%; max-width: 400px; padding: 1.2rem; font-size: 1rem; font-weight: 600; letter-spacing: 2px;">
                        KIRIM PESANAN
                    </button>
                    <p style="font-size: 0.75rem; color: var(--text-light); margin-top: 1.2rem; line-height: 1.5;">*Harga ini adalah estimasi dasar. Harga final dapat berubah setelah peninjauan kerumitan motif dan jenis material.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
const basePrices = {
    'Kain Meteran': 125000,
    'Pakaian Jadi': 350000,
    'Dress & Mukena': 380000,
    'Tas & Aksesoris': 180000
};

function updateSummary() {
    // Get product
    const selectedProduct = document.querySelector('input[name="product_base"]:checked').value;
    document.getElementById('summ_prod').textContent = selectedProduct;
    
    // Get color
    const color = document.getElementById('warna_input').value.trim();
    document.getElementById('summ_color').textContent = color || '-';
    
    // Get size
    const size = document.getElementById('ukuran_input').value.trim();
    const unit = document.getElementById('satuan_input').value;
    document.getElementById('summ_size').textContent = size ? `${size} ${unit}` : '-';

    // Calculate Price
    const qty = parseInt(document.getElementById('qty_input').value) || 1;
    const price = basePrices[selectedProduct] * qty;
    
    document.getElementById('summ_price').textContent = new Intl.NumberFormat('id-ID', {
        style: 'currency', currency: 'IDR', minimumFractionDigits: 0
    }).format(price).replace('IDR', 'Rp');
}

function changeQty(delta) {
    const qtyInput = document.getElementById('qty_input');
    let current = parseInt(qtyInput.value) || 1;
    let next = current + delta;
    if (next < 1) next = 1;
    qtyInput.value = next;
    updateSummary();
}

function handleFileUpload(input) {
    if (input.files && input.files[0]) {
        const fileName = input.files[0].name;
        document.getElementById('file_name_display').textContent = fileName;
        document.getElementById('file_name_display').style.color = 'var(--primary-color)';
        
        const summFile = document.getElementById('summ_file');
        summFile.textContent = 'Terlampir';
        summFile.style.color = '#27ae60';
    }
}
</script>

<?= $this->endSection() ?>
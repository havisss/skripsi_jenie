<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="main-content">
    <!-- Hero Banner -->
    <section class="custom-hero" style="background-image: url('<?= base_url('images/custom_hero_1781629681878.png') ?>');">
        <div class="custom-hero-content reveal">
            <h1>Ciptakan Desain Anda Sendiri</h1>
            <p>Pilih produk dasar, tentukan ukuran pengerjaan, dan unggah berkas motif orisinal Anda untuk langsung diproses oleh tim kami.</p>
        </div>
    </section>

    <div style="max-width: 1200px; margin: 0 auto; padding: 2rem 0 4rem 0;">
        <div class="co-wrapper">
            
            <!-- Left Column: Form -->
            <div class="co-main">
                
                <!-- Step 1 -->
                <div class="co-section reveal">
                    <h2 class="co-section-title"><span>1</span> Pilih Produk Dasar</h2>
                    
                    <div class="co-products">
                        <div class="co-product-item active" data-product="Kain Meteran">
                            <img src="<?= base_url('images/product_4_1781629306089.png') ?>" alt="Kain Meteran">
                            <span>Kain Meteran</span>
                        </div>
                        <div class="co-product-item" data-product="Pakaian Jadi">
                            <img src="<?= base_url('images/product_1_1781628927264.png') ?>" alt="Pakaian Jadi">
                            <span>Pakaian Jadi</span>
                        </div>
                        <div class="co-product-item" data-product="Dress & Mukena">
                            <img src="<?= base_url('images/product_5_1781629315810.png') ?>" alt="Dress & Mukena">
                            <span>Dress & Mukena</span>
                        </div>
                        <div class="co-product-item" data-product="Tas & Aksesoris">
                            <img src="<?= base_url('images/product_6_1781629329107.png') ?>" alt="Tas & Aksesoris">
                            <span>Tas & Aksesoris</span>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="co-section reveal delay-1">
                    <h2 class="co-section-title"><span>2</span> Tentukan Detail</h2>
                    
                    <div class="co-form-row">
                        <div class="co-form-group">
                            <label>Warna Dominan</label>
                            <input type="text" class="co-input" id="co-color-input" placeholder="Contoh: Merah Maroon, Cream, Gold">
                        </div>
                        <div class="co-form-group">
                            <label>Ukuran / Dimensi</label>
                            <div class="co-input-group">
                                <input type="text" class="co-input" id="co-size-input" placeholder="Contoh: 100x150">
                                <select id="co-unit-select">
                                    <option value="cm">cm</option>
                                    <option value="m">m</option>
                                    <option value="pcs">pcs</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="co-form-group" style="margin-bottom: 2rem;">
                        <label>Unggah Motif Desain</label>
                        <div class="co-upload">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: var(--primary-color); margin-bottom: 0.5rem;"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                            <p style="font-family: var(--font-heading); font-size: 1.15rem; color: var(--text-color); margin-bottom: 0.2rem;">Klik untuk pilih berkas gambar</p>
                            <span style="color: var(--text-light); font-size: 0.8rem;">PNG, JPG, PDF (Maks 10MB)</span>
                        </div>
                    </div>

                    <div class="co-form-group">
                        <label>Instruksi Tambahan</label>
                        <input type="text" class="co-input" placeholder="Tuliskan catatan khusus pengerjaan Anda...">
                    </div>
                </div>

            </div>

            <!-- Right Column: Sidebar -->
            <div class="co-sidebar reveal delay-2">
                <h3>Estimasi Biaya</h3>
                
                <ul class="co-summary-list">
                    <li>Produk <span id="summary-product">Kain Meteran</span></li>
                    <li>Warna <span id="summary-color">-</span></li>
                    <li>Ukuran <span id="summary-size">-</span></li>
                    <li>Berkas Desain <span id="summary-file" style="color: #ff4d4d;">Belum ada</span></li>
                </ul>

                <div class="co-qty">
                    <button type="button" onclick="changeQty(-1)">-</button>
                    <input type="number" id="summary-qty" value="1" min="1" readonly>
                    <button type="button" onclick="changeQty(1)">+</button>
                </div>

                <div class="co-total">
                    <span>Estimasi Harga</span>
                    <strong id="summary-price">Rp 125.000</strong>
                </div>

                <button class="btn btn-primary" id="co-submit-btn" style="width: 100%; display: flex; align-items: center; justify-content: center; gap: 0.6rem; padding: 1rem; font-size: 0.95rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    Pesan Desain Kustom
                </button>
                <p style="text-align: center; font-size: 0.8rem; color: var(--text-light); margin-top: 1rem; line-height: 1.4;">* Harga final akan dikonfirmasi setelah proses review desain berkas.</p>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const productItems = document.querySelectorAll('.co-product-item');
        const summaryProduct = document.getElementById('summary-product');
        const colorInput = document.getElementById('co-color-input');
        const summaryColor = document.getElementById('summary-color');
        const sizeInput = document.getElementById('co-size-input');
        const unitSelect = document.getElementById('co-unit-select');
        const summarySize = document.getElementById('summary-size');
        const summaryPrice = document.getElementById('summary-price');
        const qtyInput = document.getElementById('summary-qty');
        
        let basePrices = {
            'Kain Meteran': 125000,
            'Pakaian Jadi': 350000,
            'Dress & Mukena': 380000,
            'Tas & Aksesoris': 180000
        };

        let activeProduct = 'Kain Meteran';

        function updateSummary() {
            summaryProduct.textContent = activeProduct;
            summaryColor.textContent = colorInput.value.trim() || '-';
            if (sizeInput.value.trim()) {
                summarySize.textContent = sizeInput.value.trim() + ' ' + unitSelect.value;
            } else {
                summarySize.textContent = '-';
            }
            let basePrice = basePrices[activeProduct] || 125000;
            let qty = parseInt(qtyInput.value) || 1;
            let formattedPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(basePrice * qty);
            summaryPrice.textContent = formattedPrice.replace('IDR', 'Rp');
        }

        productItems.forEach(item => {
            item.addEventListener('click', function() {
                productItems.forEach(p => p.classList.remove('active'));
                this.classList.add('active');
                activeProduct = this.getAttribute('data-product');
                updateSummary();
            });
        });

        colorInput.addEventListener('input', updateSummary);
        sizeInput.addEventListener('input', updateSummary);
        unitSelect.addEventListener('change', updateSummary);

        window.changeQty = function(change) {
            let val = parseInt(qtyInput.value) || 1;
            qtyInput.value = Math.max(1, val + change);
            updateSummary();
        };

        const uploadArea = document.querySelector('.co-upload');
        const summaryFile = document.getElementById('summary-file');
        
        uploadArea.addEventListener('click', function() {
            summaryFile.textContent = 'motif_bali.png';
            summaryFile.style.color = 'var(--primary-color)';
            alert('File desain ditambahkan.');
        });

        const submitBtn = document.getElementById('co-submit-btn');
        submitBtn.addEventListener('click', function() {
            alert('Pesanan kustom dikirim! Kami akan menghubungi Anda untuk konfirmasi harga.');
        });
    });
</script>

<?= $this->endSection() ?>
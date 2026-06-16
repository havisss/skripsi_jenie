<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="main-content">

    <section class="page-header">
        <h1>Wujudkan Kreasimu Sendiri</h1>
        <p>Ikuti 3 langkah mudah di bawah ini untuk mendesain kain atau pakaian sesuai imajinasi Anda. Mulai dari pilih
            bahan, tentukan warna, hingga unggah motif pribadi Anda.</p>
    </section>

    <div class="custom-order-container">

        <div class="custom-steps">
            <div class="step-card">
                <h2>Langkah 1: Pilih Produk Dasar</h2>
                <div class="product-choice-grid">
                    <div class="product-choice-item active">
                        <img src="https://images.unsplash.com/photo-1620799140408-edc6d5f9650d?q=80&w=300"
                            alt="Kain Meteran">
                        <span>Kain Meteran</span>
                    </div>
                    <div class="product-choice-item">
                        <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?q=80&w=300"
                            alt="Pakaian Jadi">
                        <span>Pakaian Jadi</span>
                    </div>
                    <div class="product-choice-item">
                        <img src="https://images.unsplash.com/photo-1617137968427-85924c800a22?q=80&w=300" alt="Piyama">
                        <span>Piyama</span>
                    </div>
                    <div class="product-choice-item">
                        <img src="https://plus.unsplash.com/premium_photo-1678297520015-b7473b62b166?q=80&w=300"
                            alt="Mukena">
                        <span>Mukena</span>
                    </div>
                </div>
            </div>

            <div class="step-card">
                <h2>Langkah 2: Tentukan Detail Desain</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label for="warna_kustom">Warna</label>
                        <input type="text" id="warna_kustom" name="warna_kustom"
                            placeholder="Contoh: Merah Maroon, Biru Navy">
                    </div>
                    <div class="form-group">
                        <label for="ukuran_kustom">Ukuran</label>
                        <div class="input-group">
                            <input type="text" id="ukuran_kustom" name="ukuran_kustom" placeholder="Contoh: 90x115">
                            <select name="satuan_ukuran" id="satuan_ukuran">
                                <option value="cm">cm</option>
                                <option value="mm">mm</option>
                                <option value="inch">inch</option>
                                <option value="yard">yard</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Unggah Motif/Gambar Anda</label>
                    <div class="upload-box">
                        <p>Tarik & Lepas file di sini, atau klik untuk memilih file.</p>
                        <span>Format: JPG, PNG. Maks: 5MB</span>
                        <input type="file" class="file-input">
                    </div>
                </div>
                <div class="form-group">
                    <label>Catatan Tambahan (Opsional)</label>
                    <textarea placeholder="Contoh: Tolong posisi gambar di tengah dada."></textarea>
                </div>
            </div>
        </div>

        <div class="summary-card">
            <h2>Langkah 3: Cek Kreasimu</h2>
            <div class="summary-preview">
                <img src="https://images.unsplash.com/photo-1620799140408-edc6d5f9650d?q=80&w=300" alt="Preview Produk">
            </div>
            <ul class="summary-details">
                <li><strong>Produk:</strong> <span>Kain Meteran</span></li>
                <li><strong>Warna:</strong> <span>Merah</span></li>
                <li><strong>Ukuran:</strong> <span>M</span></li>
                <li><strong>File Desain:</strong> <span>-</span></li>
            </ul>
            <div class="form-group">
                <label>Jumlah</label>
                <div class="quantity-control summary-quantity">
                    <button class="quantity-btn">-</button>
                    <input type="number" class="quantity-input" value="1" min="1">
                    <button class="quantity-btn">+</button>
                </div>
            </div>
            <div class="summary-price">
                <span>Estimasi Harga</span>
                <strong>Rp 125.000</strong>
            </div>
            <button class="btn btn-primary btn-full">🛒 Tambah ke Keranjang</button>
        </div>

    </div>

</div>

<?= $this->endSection() ?>
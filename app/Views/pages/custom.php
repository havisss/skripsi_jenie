<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<style>
    /* Styling khusus untuk product selection di custom order */
    .custom-product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-top: 1rem;
        margin-bottom: 2rem;
        max-height: 400px;
        overflow-y: auto;
        padding: 0.5rem;
    }
    .custom-product-card {
        background: var(--bg-card);
        border: 2px solid transparent;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        display: flex;
        flex-direction: column;
    }
    .custom-product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    .custom-product-card.selected {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 1px var(--primary-color), 0 10px 20px rgba(0,0,0,0.1);
        transform: translateY(-5px);
    }
    .custom-product-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }
    .custom-product-info {
        padding: 1rem;
        text-align: center;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .custom-product-info h3 {
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
        font-family: var(--font-heading);
        color: var(--text-color);
    }
    .custom-product-info p {
        font-weight: 600;
        color: var(--primary-color);
        font-size: 0.85rem;
    }
    
    /* Scrollbar styling for grid */
    .custom-product-grid::-webkit-scrollbar {
        width: 6px;
    }
    .custom-product-grid::-webkit-scrollbar-track {
        background: rgba(0,0,0,0.05);
        border-radius: 4px;
    }
    .custom-product-grid::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 4px;
    }
</style>

<div class="custom-wrapper" style="padding: 4rem 2rem; max-width: 900px; margin: 0 auto;">
    <div class="custom-header text-center" style="margin-bottom: 3rem;">
        <h1 style="font-family: var(--font-heading); font-size: 2.5rem; color: var(--text-color); margin-bottom: 1rem;">Custom Order</h1>
        <div class="luxury-divider" style="display: flex; align-items: center; justify-content: center; margin: 1rem 0;">
            <div style="flex: 1; height: 1px; background: rgba(179,135,40,0.3); max-width: 100px;"></div>
            <svg width="20" height="20" viewBox="0 0 24 24" style="margin: 0 15px; color: var(--primary-color);"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z" fill="currentColor"/></svg>
            <div style="flex: 1; height: 1px; background: rgba(179,135,40,0.3); max-width: 100px;"></div>
        </div>
        <p style="font-family: var(--font-body); color: var(--text-light); text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Sesuaikan pesanan Anda dengan spesifikasi khusus</p>
    </div>

    <div style="background: var(--bg-card); border: 1px solid rgba(179,135,40,0.2); padding: 3rem; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
        <form action="<?= base_url('/custom/process') ?>" method="POST" enctype="multipart/form-data" id="custom-form">
            <?= csrf_field() ?>
            
            <div class="form-group" style="margin-bottom: 2.5rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 1rem; text-transform: uppercase; font-size: 0.9rem; letter-spacing: 1px; text-align: center;">Pilih Produk Dasar <span style="color:red;">*</span></label>
                
                <input type="hidden" name="id_produk" id="selected_produk" required>
                
                <div class="custom-product-grid">
                    <?php foreach($produk as $p): ?>
                    <div class="custom-product-card" onclick="selectProduct(this, <?= $p['id_produk'] ?>)">
                        <img src="<?= base_url($p['url_gambar']) ?>" alt="<?= esc($p['nama_produk']) ?>">
                        <div class="custom-product-info">
                            <h3><?= esc($p['nama_produk']) ?></h3>
                            <p>Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div id="product-error" style="color: red; font-size: 0.8rem; text-align: center; display: none; margin-top: 1rem;">Silakan pilih satu produk dasar terlebih dahulu.</div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
                <div class="form-group">
                    <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Warna <span style="color:red;">*</span></label>
                    <input type="text" name="warna" required placeholder="Contoh: Merah, Hitam" style="width: 100%; padding: 0.8rem; border: 1px solid rgba(0,0,0,0.1); background: var(--bg-color); color: var(--text-color); outline: none;">
                </div>
                <div class="form-group">
                    <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Ukuran / Dimensi <span style="color:red;">*</span></label>
                    <input type="text" name="ukuran" required placeholder="Contoh: XL, 20x30cm" style="width: 100%; padding: 0.8rem; border: 1px solid rgba(0,0,0,0.1); background: var(--bg-color); color: var(--text-color); outline: none;">
                </div>
            </div>

            <div class="form-group" style="margin-bottom: 1.5rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Jumlah <span style="color:red;">*</span></label>
                <input type="number" name="jumlah" value="1" min="1" required style="width: 100%; padding: 0.8rem; border: 1px solid rgba(0,0,0,0.1); background: var(--bg-color); color: var(--text-color); outline: none;">
            </div>
            
            <div class="form-group" style="margin-bottom: 2rem;">
                <label style="display: block; font-weight: 600; margin-bottom: 0.5rem; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1px;">Gambar Referensi (Opsional)</label>
                <input type="file" name="gambar" accept="image/*" style="width: 100%; padding: 0.8rem; border: 1px dashed rgba(0,0,0,0.2); background: var(--bg-color); color: var(--text-color); outline: none; cursor: pointer;">
                <small style="color: var(--text-light); font-size: 0.8rem; display: block; margin-top: 0.5rem;">Unggah gambar desain atau referensi (maks. 2MB)</small>
            </div>

            <div class="text-center" style="margin-top: 3rem;">
                <button type="submit" style="background: var(--primary-color); color: white; padding: 1rem 3rem; border: none; font-size: 1rem; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; cursor: pointer; transition: all 0.3s ease;">
                    Checkout Custom Order
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function selectProduct(element, id) {
    // Hilangkan kelas selected dari semua card
    let cards = document.querySelectorAll('.custom-product-card');
    cards.forEach(card => card.classList.remove('selected'));
    
    // Tambahkan kelas selected ke card yang diklik
    element.classList.add('selected');
    
    // Set nilai pada hidden input
    document.getElementById('selected_produk').value = id;
    document.getElementById('product-error').style.display = 'none';
}

// Validasi saat form disubmit
document.getElementById('custom-form').addEventListener('submit', function(e) {
    let selectedId = document.getElementById('selected_produk').value;
    if (!selectedId) {
        e.preventDefault();
        document.getElementById('product-error').style.display = 'block';
        
        // Scroll ke atas agar user melihat errornya
        window.scrollTo({
            top: document.querySelector('.custom-product-grid').offsetTop - 100,
            behavior: 'smooth'
        });
    }
});
</script>

<?= $this->endSection() ?>

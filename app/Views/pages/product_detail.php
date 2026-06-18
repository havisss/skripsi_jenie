<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<?php
// Data $product sudah dikirim dari controller (Pages::productDetail)
// $product berisi data produk asli dari database (atau null jika tidak ada)

if(!$product):
?>
    <div style="min-height: 50vh; display: flex; justify-content: center; align-items: center;">
        <h2>Produk Tidak Ditemukan</h2>
    </div>
<?php else: ?>

<div style="padding-top: 100px; max-width: 1200px; margin: 0 auto; padding-bottom: 4rem;">
    <div style="display: flex; flex-wrap: wrap; gap: 4rem; padding: 2rem;">
        
        <!-- Product Image -->
        <div style="flex: 1; min-width: 300px;">
            <img src="<?= base_url($product['url_gambar']) ?>" alt="<?= esc($product['nama_produk']) ?>" style="width: 100%; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        </div>

        <!-- Product Details -->
        <div style="flex: 1; min-width: 300px; display: flex; flex-direction: column; justify-content: center;">
            <p style="text-transform: uppercase; letter-spacing: 2px; color: var(--primary-color); font-size: 0.8rem; font-weight: 600; margin-bottom: 0.5rem;">Koleksi Premium</p>
            <h1 style="font-family: var(--font-heading); font-size: 2.5rem; margin-bottom: 1rem; color: var(--text-color);"><?= esc($product['nama_produk']) ?></h1>
            <h2 style="font-size: 1.8rem; font-weight: 500; margin-bottom: 1.5rem;">Rp <?= number_format($product['harga'], 0, ',', '.') ?></h2>
            
            <p style="color: var(--text-light); line-height: 1.8; margin-bottom: 2rem;">
                <?= esc($product['deskripsi_produk']) ?>
            </p>

            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <button onclick="checkoutLangsung(<?= $product['harga'] ?>, '<?= esc($product['nama_produk']) ?>')" class="btn btn-primary" style="flex: 1; min-width: 200px; text-align: center; padding: 1rem; text-transform: uppercase; letter-spacing: 2px; border: none; cursor: pointer;">
                    Beli Langsung (Checkout)
                </button>
                <button onclick="openCart(<?= $product_id ?>, '<?= esc($product['nama_produk']) ?>', <?= $product['harga'] ?>, '<?= base_url($product['url_gambar']) ?>')" class="btn" style="flex: 1; min-width: 200px; text-align: center; padding: 1rem; background: transparent; border-color: var(--primary-color); display: flex; align-items: center; justify-content: center; gap: 0.5rem; cursor: pointer;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    Tambah ke Keranjang
                </button>
            </div>
        </div>

    </div>
</div>

<script>
function checkoutLangsung(price, name) {
    // Check if user is logged in
    const isLoggedIn = <?= session()->get('logged_in') ? 'true' : 'false' ?>;
    if (!isLoggedIn) {
        alert("Silakan login terlebih dahulu untuk checkout.");
        window.location.href = "<?= base_url('/login') ?>";
        return;
    }

    // Add to cart silently and redirect
    openCart(<?= $product_id ?>, name, price, '', false)
    .then(() => {
        window.location.href = '<?= base_url('/checkout') ?>';
    });
}

async function openCart(id_produk, name, price, img, showAlert = true) {
    const isLoggedIn = <?= session()->get('logged_in') ? 'true' : 'false' ?>;
    if (!isLoggedIn) {
        alert("Silakan login terlebih dahulu untuk menambahkan barang ke keranjang.");
        window.location.href = "<?= base_url('/login') ?>";
        return Promise.reject('Not logged in');
    }

    try {
        const formData = new FormData();
        formData.append('id_produk', id_produk);
        formData.append('jumlah', 1);

        const response = await fetch('<?= base_url('cart/add') ?>', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        if (result.status === 'success') {
            if (showAlert) {
                alert(name + " berhasil ditambahkan ke keranjang!");
            }
            return Promise.resolve();
        } else {
            alert(result.message || "Gagal menambahkan ke keranjang.");
            return Promise.reject();
        }
    } catch (error) {
        console.error("Error:", error);
        alert("Terjadi kesalahan sistem.");
        return Promise.reject(error);
    }
}
</script>

<?php endif; ?>

<?= $this->endSection() ?>

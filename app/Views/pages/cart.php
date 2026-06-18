<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="cart-flat-wrapper">
    
    <div class="cart-flat-header reveal">
        <h1>Keranjang Belanja</h1>
        <div class="luxury-divider">
            <svg width="16" height="16" viewBox="0 0 24 24"><path d="M12 2l3 7 7 1-5 5 1.5 7.5L12 19l-6.5 3.5L7 15l-5-5 7-1 3-7z"/></svg>
        </div>
    </div>

    <div class="cart-flat-container">
        
        <!-- Left Column: Item List -->
        <div class="cart-flat-items reveal">
            <div class="cart-flat-list">
                <?php if(empty($cart_items)): ?>
                    <div style="padding: 2rem; text-align: center; color: var(--text-light);">
                        Keranjang Anda masih kosong.
                    </div>
                <?php else: ?>
                    <?php foreach($cart_items as $item): ?>
                    <div class="cart-flat-item" id="cart-item-<?= $item['id_cart'] ?>">
                        <div class="cf-item-img">
                            <img src="<?= base_url($item['url_gambar']) ?>" alt="<?= esc($item['nama_produk']) ?>">
                        </div>
                        <div class="cf-item-details">
                            <div class="cf-header">
                                <h3><?= esc($item['nama_produk']) ?></h3>
                                <button class="cf-remove" title="Hapus item" onclick="removeCartItem(<?= $item['id_cart'] ?>)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                            <p class="cf-desc">Produk Standar</p>
                            
                            <div class="cf-footer">
                                <div class="cf-qty">
                                    <button type="button" class="cf-qty-btn" onclick="updateQty(<?= $item['id_cart'] ?>, -1)">-</button>
                                    <input type="number" id="qty-<?= $item['id_cart'] ?>" value="<?= $item['jumlah'] ?>" min="1" readonly>
                                    <button type="button" class="cf-qty-btn" onclick="updateQty(<?= $item['id_cart'] ?>, 1)">+</button>
                                </div>
                                <div class="cf-price">Rp <?= number_format($item['harga'] * $item['jumlah'], 0, ',', '.') ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
            
            <a href="<?= base_url('/catalog') ?>" class="cf-continue">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                Kembali ke Katalog
            </a>
        </div>

        <!-- Right Column: Summary Box -->
        <div class="cart-flat-summary reveal delay-1">
            <div class="cf-summary-box">
                <h2>Ringkasan Pesanan</h2>
                
                <div class="cf-summary-details">
                    <div class="cf-summary-row">
                        <span>Subtotal</span>
                        <span>Rp <?= number_format($subtotal, 0, ',', '.') ?></span>
                    </div>
                    <div class="cf-summary-row">
                        <span>Pajak Layanan (10%)</span>
                        <span>Rp <?= number_format($subtotal * 0.10, 0, ',', '.') ?></span>
                    </div>
                    <div class="cf-summary-row">
                        <span>Pengiriman</span>
                        <span>Dihitung saat checkout</span>
                    </div>
                </div>

                <div class="cf-summary-total">
                    <span>Total Estimasi</span>
                    <span>Rp <?= number_format($subtotal + ($subtotal * 0.10), 0, ',', '.') ?></span>
                </div>

                <?php if(!empty($cart_items)): ?>
                <button class="btn btn-primary cf-checkout-btn" onclick="window.location.href='<?= base_url('/checkout') ?>'">
                    Lanjut ke Checkout
                </button>
                <?php else: ?>
                <button class="btn cf-checkout-btn" style="background: #ccc; cursor: not-allowed;" disabled>
                    Keranjang Kosong
                </button>
                <?php endif; ?>
                
                <p class="cf-summary-note">
                    * Transaksi aman dilindungi enkripsi bank.
                </p>
            </div>
        </div>

    </div>
</div>

<script>
async function removeCartItem(id_cart) {
    if(!confirm("Hapus produk ini dari keranjang?")) return;
    try {
        const formData = new FormData();
        formData.append('id_cart', id_cart);
        formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');
        await fetch('<?= base_url('cart/remove') ?>', { method: 'POST', body: formData });
        window.location.reload();
    } catch (e) {
        alert("Gagal menghapus.");
    }
}

async function updateQty(id_cart, change) {
    const input = document.getElementById('qty-' + id_cart);
    let newQty = parseInt(input.value) + change;
    if(newQty < 1) return;
    
    try {
        const formData = new FormData();
        formData.append('id_cart', id_cart);
        formData.append('jumlah', newQty);
        formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');
        await fetch('<?= base_url('cart/update') ?>', { method: 'POST', body: formData });
        window.location.reload();
    } catch (e) {
        alert("Gagal memperbarui jumlah.");
    }
}
</script>

<?= $this->endSection() ?>

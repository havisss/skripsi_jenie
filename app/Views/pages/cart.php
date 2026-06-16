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
                
                <!-- Item 1 -->
                <div class="cart-flat-item">
                    <div class="cf-item-img">
                        <img src="<?= base_url('images/product_2_1781628941576.png') ?>" alt="Dress Pantai Crinkle">
                    </div>
                    <div class="cf-item-details">
                        <div class="cf-header">
                            <h3>Dress Pantai Crinkle</h3>
                            <button class="cf-remove" title="Hapus item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                        <p class="cf-desc">Ukuran: M, Warna: Sand Gold, Bahan: Rayon Crinkle</p>
                        
                        <div class="cf-footer">
                            <div class="cf-qty">
                                <button type="button" class="cf-qty-btn" onclick="this.nextElementSibling.value = Math.max(1, parseInt(this.nextElementSibling.value) - 1)">-</button>
                                <input type="number" value="1" min="1" readonly>
                                <button type="button" class="cf-qty-btn" onclick="this.previousElementSibling.value = parseInt(this.previousElementSibling.value) + 1">+</button>
                            </div>
                            <div class="cf-price">Rp 380.000</div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="cart-flat-item">
                    <div class="cf-item-img">
                        <img src="<?= base_url('images/product_6_1781629329107.png') ?>" alt="Tas Rotan Artisan">
                    </div>
                    <div class="cf-item-details">
                        <div class="cf-header">
                            <h3>Tas Rotan Artisan</h3>
                            <button class="cf-remove" title="Hapus item">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </button>
                        </div>
                        <p class="cf-desc">Anyaman Tradisional Bali, Tali Kulit Coklat</p>
                        
                        <div class="cf-footer">
                            <div class="cf-qty">
                                <button type="button" class="cf-qty-btn" onclick="this.nextElementSibling.value = Math.max(1, parseInt(this.nextElementSibling.value) - 1)">-</button>
                                <input type="number" value="1" min="1" readonly>
                                <button type="button" class="cf-qty-btn" onclick="this.previousElementSibling.value = parseInt(this.previousElementSibling.value) + 1">+</button>
                            </div>
                            <div class="cf-price">Rp 180.000</div>
                        </div>
                    </div>
                </div>

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
                        <span>Rp 560.000</span>
                    </div>
                    <div class="cf-summary-row">
                        <span>Pajak Layanan (10%)</span>
                        <span>Rp 56.000</span>
                    </div>
                    <div class="cf-summary-row">
                        <span>Pengiriman</span>
                        <span>Dihitung otomatis</span>
                    </div>
                </div>

                <div class="cf-summary-total">
                    <span>Total Tagihan</span>
                    <span>Rp 616.000</span>
                </div>

                <button class="btn btn-primary cf-checkout-btn" onclick="window.location.href='<?= base_url('/checkout') ?>'">
                    Proses Pembayaran
                </button>
                
                <p class="cf-summary-note">
                    * Transaksi aman dilindungi enkripsi bank.
                </p>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>

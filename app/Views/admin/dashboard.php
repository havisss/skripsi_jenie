<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="card-grid">
    <div class="stat-card">
        <h3>Total Pesanan</h3>
        <div class="value"><?= esc($total_pesanan) ?></div>
    </div>
    <div class="stat-card">
        <h3>Total Produk</h3>
        <div class="value"><?= esc($total_produk) ?></div>
    </div>
    <div class="stat-card" style="border-left-color: var(--danger);">
        <h3 style="color: var(--danger);">Pesanan Pending</h3>
        <div class="value"><?= esc($pesanan_baru) ?></div>
    </div>
</div>

<div class="card">
    <h2>Selamat Datang di Admin Dashboard</h2>
    <p style="margin-top: 16px; color: var(--text-muted); line-height: 1.6; font-size: 0.95rem;">
        Pilih menu di sidebar untuk mengelola data katalog produk, pesanan, kustomisasi produk, dan pembayaran. Semua fitur telah terintegrasi dengan gaya visual premium terbaru Bali Art House.
    </p>
</div>
<?= $this->endSection() ?>

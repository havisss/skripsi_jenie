<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="card-grid">
    <div class="stat-card">
        <h3>Total Pesanan</h3>
        <div class="value"><?= $total_pesanan ?></div>
    </div>
    <div class="stat-card" style="border-left-color: #10B981;">
        <h3>Total Produk</h3>
        <div class="value"><?= $total_produk ?></div>
    </div>
    <div class="stat-card" style="border-left-color: #F59E0B;">
        <h3>Pesanan Pending</h3>
        <div class="value"><?= $pesanan_baru ?></div>
    </div>
</div>

<div class="card">
    <h2>Selamat Datang di Admin Dashboard</h2>
    <p style="margin-top: 16px; color: var(--text-muted); line-height: 1.6;">
        Pilih menu di sidebar untuk mengelola data katalog produk, pesanan, kustomisasi produk, dan pembayaran.
    </p>
</div>
<?= $this->endSection() ?>

<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="card-grid">
    <div class="card" style="border-top: 4px solid var(--primary);">
        <h3>Pesanan Baru (Pending)</h3>
        <ul style="list-style: none; padding-top: 16px;">
            <?php foreach($pesanan_baru as $p): ?>
                <li style="padding: 12px 0; border-bottom: 1px solid var(--border);">
                    <a href="<?= base_url('admin/pesanan') ?>" style="text-decoration: none; color: var(--text-main);">
                        <strong>Pesanan #<?= $p['id_pesan'] ?></strong> - Rp <?= number_format($p['total_harga'], 0, ',', '.') ?>
                        <br>
                        <small style="color: var(--text-muted);"><?= date('d M Y H:i', strtotime($p['tanggal_pesan'])) ?></small>
                    </a>
                </li>
            <?php endforeach; ?>
            <?php if(empty($pesanan_baru)): ?>
                <li style="color: var(--text-muted);">Tidak ada pesanan baru.</li>
            <?php endif; ?>
        </ul>
    </div>

    <div class="card" style="border-top: 4px solid var(--success);">
        <h3>Pembayaran Terakhir</h3>
        <ul style="list-style: none; padding-top: 16px;">
            <?php foreach($pembayaran_baru as $p): ?>
                <li style="padding: 12px 0; border-bottom: 1px solid var(--border);">
                    <a href="<?= base_url('admin/pembayaran') ?>" style="text-decoration: none; color: var(--text-main);">
                        <strong>Pembayaran #<?= $p['id_bayar'] ?></strong> untuk Pesanan #<?= $p['id_pesan'] ?>
                        <br>
                        <small style="color: var(--text-muted);"><?= date('d M Y H:i', strtotime($p['tanggal_bayar'])) ?></small>
                    </a>
                </li>
            <?php endforeach; ?>
            <?php if(empty($pembayaran_baru)): ?>
                <li style="color: var(--text-muted);">Tidak ada pembayaran baru.</li>
            <?php endif; ?>
        </ul>
    </div>
</div>
<?= $this->endSection() ?>

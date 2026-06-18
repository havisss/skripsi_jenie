<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="card">
    <div style="margin-bottom: 24px;">
        <h2>Daftar Pembayaran</h2>
    </div>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>ID Bayar</th>
                    <th>Tanggal</th>
                    <th>ID Pesan</th>
                    <th>Pelanggan</th>
                    <th>Total Tagihan</th>
                    <th>Bukti Bayar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pembayaran as $p): ?>
                <tr>
                    <td><?= $p['id_bayar'] ?></td>
                    <td><?= date('d M Y H:i', strtotime($p['tanggal_bayar'])) ?></td>
                    <td><?= $p['id_pesan'] ?></td>
                    <td><?= $p['nama_pelanggan'] ?></td>
                    <td>Rp <?= number_format($p['total_harga'], 0, ',', '.') ?></td>
                    <td>
                        <?php if($p['bukti_bayar']): ?>
                            <a href="<?= base_url($p['bukti_bayar']) ?>" target="_blank" style="color: var(--primary);">Lihat Bukti</a>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($pembayaran)): ?>
                <tr><td colspan="6" style="text-align: center;">Belum ada pembayaran.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="card">
    <div style="margin-bottom: 24px;">
        <h2>Daftar Kustomisasi</h2>
    </div>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Produk</th>
                    <th>Gambar Kustom</th>
                    <th>Warna</th>
                    <th>Ukuran</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($kustomisasi as $k): ?>
                <tr>
                    <td><?= $k['id_kustom'] ?></td>
                    <td><?= $k['nama_produk'] ?></td>
                    <td>
                        <?php if($k['url_gambar']): ?>
                            <img src="<?= base_url($k['url_gambar']) ?>" alt="gambar" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td><?= $k['warna'] ?></td>
                    <td><?= $k['ukuran'] ?></td>
                    <td><?= $k['jumlah'] ?></td>
                    <td>
                        <a href="<?= base_url('admin/kustomisasi/delete/'.$k['id_kustom']) ?>" class="btn btn-danger" style="padding: 6px 10px; font-size: 12px;" onclick="return confirm('Yakin hapus kustomisasi ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($kustomisasi)): ?>
                <tr><td colspan="7" style="text-align: center;">Belum ada data kustomisasi.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>

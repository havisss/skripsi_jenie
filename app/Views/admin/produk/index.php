<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h2>Daftar Produk</h2>
        <button class="btn btn-primary" onclick="document.getElementById('modal-add').style.display='block'">+ Tambah Produk</button>
    </div>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gambar</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($produk as $p): ?>
                <tr>
                    <td><?= $p['id_produk'] ?></td>
                    <td>
                        <?php if($p['url_gambar']): ?>
                            <img src="<?= base_url($p['url_gambar']) ?>" alt="gambar" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px;">
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                    <td><?= $p['nama_produk'] ?></td>
                    <td>Rp <?= number_format($p['harga'], 0, ',', '.') ?></td>
                    <td><?= $p['jumlah'] ?></td>
                    <td>
                        <button class="btn btn-success" style="padding: 6px 10px; font-size: 12px;" onclick="editProduk(<?= htmlspecialchars(json_encode($p)) ?>)">Edit</button>
                        <a href="<?= base_url('admin/produk/delete/'.$p['id_produk']) ?>" class="btn btn-danger" style="padding: 6px 10px; font-size: 12px;" onclick="return confirm('Yakin hapus produk ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($produk)): ?>
                <tr><td colspan="6" style="text-align: center;">Belum ada produk.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Tambah -->
<div id="modal-add" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:100;">
    <div class="card" style="width: 400px; margin: 50px auto; max-height: 90vh; overflow-y: auto;">
        <h3>Tambah Produk</h3>
        <form action="<?= base_url('admin/produk/store') ?>" method="POST" enctype="multipart/form-data" style="margin-top: 16px;">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi_produk" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" required>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="jumlah" required>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" accept="image/*">
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 8px; margin-top: 24px;">
                <button type="button" class="btn" onclick="document.getElementById('modal-add').style.display='none'">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit -->
<div id="modal-edit" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:100;">
    <div class="card" style="width: 400px; margin: 50px auto; max-height: 90vh; overflow-y: auto;">
        <h3>Edit Produk</h3>
        <form id="form-edit" action="" method="POST" enctype="multipart/form-data" style="margin-top: 16px;">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" id="edit-nama" required>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi_produk" id="edit-desc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Harga (Rp)</label>
                <input type="number" name="harga" id="edit-harga" required>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="jumlah" id="edit-jumlah" required>
            </div>
            <div class="form-group">
                <label>Gambar Baru (opsional)</label>
                <input type="file" name="gambar" accept="image/*">
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 8px; margin-top: 24px;">
                <button type="button" class="btn" onclick="document.getElementById('modal-edit').style.display='none'">Batal</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

<script>
function editProduk(p) {
    document.getElementById('form-edit').action = '<?= base_url('admin/produk/update/') ?>' + p.id_produk;
    document.getElementById('edit-nama').value = p.nama_produk;
    document.getElementById('edit-desc').value = p.deskripsi_produk;
    document.getElementById('edit-harga').value = p.harga;
    document.getElementById('edit-jumlah').value = p.jumlah;
    document.getElementById('modal-edit').style.display = 'block';
}
</script>
<?= $this->endSection() ?>

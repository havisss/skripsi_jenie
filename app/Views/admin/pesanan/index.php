<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div class="card">
    <div style="margin-bottom: 24px;">
        <h2>Daftar Pemesanan</h2>
    </div>

    <div style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th>ID Pesan</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Total Harga</th>
                    <th>Metode Bayar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pesanan as $p): ?>
                <tr>
                    <td><?= $p['id_pesan'] ?></td>
                    <td><?= date('d M Y H:i', strtotime($p['tanggal_pesan'])) ?></td>
                    <td><?= $p['nama_pelanggan'] ?></td>
                    <td>Rp <?= number_format($p['total_harga'], 0, ',', '.') ?></td>
                    <td><?= $p['metode_bayar'] ?></td>
                    <td>
                        <span style="padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; 
                            <?= $p['status'] == 'Pending' ? 'background: #FEF3C7; color: #D97706;' : '' ?>
                            <?= $p['status'] == 'Menunggu Konfirmasi' ? 'background: #DBEAFE; color: #1D4ED8;' : '' ?>
                            <?= $p['status'] == 'Diproses' ? 'background: #E0E7FF; color: #4338CA;' : '' ?>
                            <?= $p['status'] == 'Dikirim' ? 'background: #D1FAE5; color: #059669;' : '' ?>
                            <?= $p['status'] == 'Selesai' ? 'background: #ECFDF5; color: #047857;' : '' ?>
                            <?= $p['status'] == 'Batal' ? 'background: #FEE2E2; color: #B91C1C;' : '' ?>
                        ">
                            <?= $p['status'] ?>
                        </span>
                    </td>
                    <td>
                        <button class="btn btn-primary" style="padding: 6px 10px; font-size: 12px;" onclick="updateStatus(<?= $p['id_pesan'] ?>, '<?= $p['status'] ?>')">Update Status</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php if(empty($pesanan)): ?>
                <tr><td colspan="7" style="text-align: center;">Belum ada pesanan.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Update Status -->
<div id="modal-status" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:100;">
    <div class="card" style="width: 400px; margin: 100px auto;">
        <h3>Update Status Pesanan</h3>
        <form id="form-status" action="" method="POST" style="margin-top: 16px;">
            <?= csrf_field() ?>
            <div class="form-group">
                <label>Status</label>
                <select name="status" id="select-status" required>
                    <option value="Pending">Pending</option>
                    <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                    <option value="Diproses">Diproses</option>
                    <option value="Dikirim">Dikirim</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Batal">Batal</option>
                </select>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 8px; margin-top: 24px;">
                <button type="button" class="btn" onclick="document.getElementById('modal-status').style.display='none'">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
function updateStatus(id, currentStatus) {
    document.getElementById('form-status').action = '<?= base_url('admin/pesanan/update_status/') ?>' + id;
    document.getElementById('select-status').value = currentStatus;
    document.getElementById('modal-status').style.display = 'block';
}
</script>
<?= $this->endSection() ?>

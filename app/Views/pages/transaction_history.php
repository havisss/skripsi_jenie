<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div style="padding-top: 100px; max-width: 1000px; margin: 0 auto; padding-bottom: 4rem; padding-inline: 1.5rem;">
    <h1 style="font-family: var(--font-heading); font-size: 2.2rem; text-align: center; margin-bottom: 2rem;">Riwayat Transaksi</h1>

    <?php if(session()->getFlashdata('checkout_success')): ?>
    <div style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 1rem 1.5rem; margin-bottom: 2rem; border-radius: 6px; font-size: 0.9rem;">
        <?= session()->getFlashdata('checkout_success') ?>
    </div>
    <?php endif; ?>

    <div style="background: var(--bg-card); border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); overflow: hidden;">
        
        <!-- Transaction Tabs -->
        <div style="display: flex; border-bottom: 1px solid rgba(0,0,0,0.05); background: #fdfdfd;" id="th-tabs">
            <button class="th-tab active" data-target="all" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 600; color: var(--primary-color); border-bottom: 2px solid var(--primary-color); cursor: pointer;">Semua</button>
            <button class="th-tab" data-target="Pending" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 500; color: var(--text-light); border-bottom: 2px solid transparent; cursor: pointer;">Pending</button>
            <button class="th-tab" data-target="Diproses" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 500; color: var(--text-light); border-bottom: 2px solid transparent; cursor: pointer;">Diproses</button>
            <button class="th-tab" data-target="Dikirim" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 500; color: var(--text-light); border-bottom: 2px solid transparent; cursor: pointer;">Dikirim</button>
            <button class="th-tab" data-target="Diterima" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 500; color: var(--text-light); border-bottom: 2px solid transparent; cursor: pointer;">Diterima</button>
        </div>

        <!-- Transaction List -->
        <div style="padding: 2rem;" id="th-list">
            
            <?php if(empty($pesanan_list)): ?>
            <div style="text-align: center; padding: 3rem 1rem; color: var(--text-light);">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" style="margin-bottom: 1rem; opacity: 0.4;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                <p style="font-size: 1rem; margin-bottom: 0.5rem;">Belum ada riwayat transaksi.</p>
                <p style="font-size: 0.85rem;">Pesanan Anda akan muncul di sini setelah checkout.</p>
            </div>
            <?php else: ?>

            <?php foreach($pesanan_list as $pesanan): 
                // Status badge colors
                $statusColors = [
                    'Pending'   => 'background:#fff3cd; color:#856404;',
                    'Diproses'  => 'background:#cce5ff; color:#004085;',
                    'Dikirim'   => 'background:#e3f2fd; color:#0d47a1;',
                    'Diterima'  => 'background:#d4edda; color:#155724;',
                    'Dibatalkan' => 'background:#f8d7da; color:#721c24;',
                ];
                $badgeStyle = $statusColors[$pesanan['status']] ?? 'background:#e2e3e5; color:#383d41;';
                $tanggal = date('d M Y, H:i', strtotime($pesanan['tanggal_pesan']));
            ?>
            <div class="th-item" data-status="<?= esc($pesanan['status']) ?>" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 6px; padding: 1.5rem; margin-bottom: 1.5rem;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(0,0,0,0.05);">
                    <div>
                        <span style="font-weight: 600; font-size: 0.9rem;">TRX-<?= str_pad($pesanan['id_pesan'], 7, '0', STR_PAD_LEFT) ?></span>
                        <span style="color: var(--text-light); font-size: 0.8rem; margin-left: 1rem;"><?= $tanggal ?></span>
                    </div>
                    <div>
                        <span style="<?= $badgeStyle ?> padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;"><?= esc($pesanan['status']) ?></span>
                    </div>
                </div>
                
                <?php if(!empty($pesanan['details'])): ?>
                    <?php foreach($pesanan['details'] as $detail): ?>
                    <div style="display: flex; gap: 1.5rem; margin-bottom: 0.8rem;">
                        <?php if(!empty($detail['url_gambar'])): ?>
                        <img src="<?= base_url($detail['url_gambar']) ?>" alt="<?= esc($detail['nama_produk'] ?? 'Produk') ?>" style="width: 70px; height: 70px; object-fit: cover; border-radius: 4px;">
                        <?php else: ?>
                        <div style="width: 70px; height: 70px; background: #f5f5f5; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: var(--text-light); font-size: 0.7rem; text-align: center;">No Image</div>
                        <?php endif; ?>
                        <div style="flex: 1;">
                            <h4 style="margin-bottom: 0.3rem; font-size: 0.9rem;"><?= esc($detail['nama_produk'] ?? 'Produk Dihapus') ?></h4>
                            <p style="color: var(--text-light); font-size: 0.85rem;"><?= $detail['jumlah'] ?> x Rp <?= number_format($detail['harga_satuan'], 0, ',', '.') ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div style="text-align: right; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 1rem; margin-top: 0.5rem;">
                    <span style="font-size: 0.8rem; color: var(--text-light);">Total Belanja: </span>
                    <strong style="color: var(--primary-color); font-size: 1rem;">Rp <?= number_format($pesanan['total_harga'], 0, ',', '.') ?></strong>
                </div>
            </div>
            <?php endforeach; ?>

            <?php endif; ?>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.th-tab');
    const items = document.querySelectorAll('.th-item');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            // Remove active state from all
            tabs.forEach(t => {
                t.classList.remove('active');
                t.style.fontWeight = '500';
                t.style.color = 'var(--text-light)';
                t.style.borderBottom = '2px solid transparent';
            });
            
            // Add active state to clicked
            this.classList.add('active');
            this.style.fontWeight = '600';
            this.style.color = 'var(--primary-color)';
            this.style.borderBottom = '2px solid var(--primary-color)';

            // Filter logic
            const target = this.getAttribute('data-target');
            items.forEach(item => {
                if (target === 'all' || item.getAttribute('data-status') === target) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?= $this->endSection() ?>

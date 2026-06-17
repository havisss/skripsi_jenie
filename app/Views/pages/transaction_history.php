<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div style="padding-top: 100px; max-width: 1000px; margin: 0 auto; padding-bottom: 4rem; padding-inline: 1.5rem;">
    <h1 style="font-family: var(--font-heading); font-size: 2.2rem; text-align: center; margin-bottom: 2rem;">Riwayat Transaksi</h1>

    <div style="background: var(--bg-card); border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); overflow: hidden;">
        
        <!-- Transaction Tabs -->
        <div style="display: flex; border-bottom: 1px solid rgba(0,0,0,0.05); background: #fdfdfd;" id="th-tabs">
            <button class="th-tab active" data-target="all" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 600; color: var(--primary-color); border-bottom: 2px solid var(--primary-color); cursor: pointer;">Semua</button>
            <button class="th-tab" data-target="belum bayar" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 500; color: var(--text-light); border-bottom: 2px solid transparent; cursor: pointer;">Belum Bayar</button>
            <button class="th-tab" data-target="pending" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 500; color: var(--text-light); border-bottom: 2px solid transparent; cursor: pointer;">Pending</button>
            <button class="th-tab" data-target="dikirim" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 500; color: var(--text-light); border-bottom: 2px solid transparent; cursor: pointer;">Dikirim</button>
            <button class="th-tab" data-target="diterima" style="flex: 1; padding: 1rem; border: none; background: transparent; font-weight: 500; color: var(--text-light); border-bottom: 2px solid transparent; cursor: pointer;">Diterima</button>
        </div>

        <!-- Transaction List -->
        <div style="padding: 2rem;">
            
            <!-- Mock Transaction 1 -->
            <div class="th-item" data-status="dikirim" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 6px; padding: 1.5rem; margin-bottom: 1.5rem;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(0,0,0,0.05);">
                    <div>
                        <span style="font-weight: 600; font-size: 0.9rem;">TRX-9827361</span>
                        <span style="color: var(--text-light); font-size: 0.8rem; margin-left: 1rem;">17 Jun 2026</span>
                    </div>
                    <div>
                        <span style="background: #e3f2fd; color: #0d47a1; padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Dikirim</span>
                    </div>
                </div>
                
                <div style="display: flex; gap: 1.5rem;">
                    <img src="<?= base_url('images/product_1_1781628927264.png') ?>" alt="Kemeja Sutra Premium" style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;">
                    <div style="flex: 1;">
                        <h4 style="margin-bottom: 0.5rem;">Kemeja Sutra Premium</h4>
                        <p style="color: var(--text-light); font-size: 0.85rem;">1 x Rp 450.000</p>
                    </div>
                    <div style="text-align: right; display: flex; flex-direction: column; justify-content: center;">
                        <p style="font-size: 0.8rem; color: var(--text-light); margin-bottom: 0.2rem;">Total Belanja</p>
                        <p style="font-weight: 600; color: var(--primary-color);">Rp 450.000</p>
                    </div>
                </div>
            </div>

            <!-- Mock Transaction 2 -->
            <div class="th-item" data-status="belum bayar" style="border: 1px solid rgba(0,0,0,0.08); border-radius: 6px; padding: 1.5rem;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(0,0,0,0.05);">
                    <div>
                        <span style="font-weight: 600; font-size: 0.9rem;">TRX-9827362</span>
                        <span style="color: var(--text-light); font-size: 0.8rem; margin-left: 1rem;">15 Jun 2026</span>
                    </div>
                    <div>
                        <span style="background: #fff3cd; color: #856404; padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.75rem; font-weight: 600;">Belum Bayar</span>
                    </div>
                </div>
                
                <div style="display: flex; gap: 1.5rem;">
                    <div style="width: 80px; height: 80px; background: #f5f5f5; border-radius: 4px; display: flex; align-items: center; justify-content: center; color: var(--text-light); font-size: 0.8rem; text-align: center;">Custom<br>Order</div>
                    <div style="flex: 1;">
                        <h4 style="margin-bottom: 0.5rem;">Pesanan Kustomisasi Pakaian</h4>
                        <p style="color: var(--text-light); font-size: 0.85rem;">1 x Rp 750.000</p>
                    </div>
                    <div style="text-align: right; display: flex; flex-direction: column; justify-content: center;">
                        <p style="font-size: 0.8rem; color: var(--text-light); margin-bottom: 0.2rem;">Total Belanja</p>
                        <p style="font-weight: 600; color: var(--primary-color);">Rp 750.000</p>
                    </div>
                </div>
                <div style="margin-top: 1rem; text-align: right;">
                    <a href="<?= base_url('/checkout') ?>" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.8rem;">Bayar Sekarang</a>
                </div>
            </div>

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

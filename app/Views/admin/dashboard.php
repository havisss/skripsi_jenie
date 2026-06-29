<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<!-- Include Chart.js via CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    /* premium utility variables and resets */
    :root {
        --card-radius: 8px;
        --shadow-subtle: 0 4px 20px rgba(0, 0, 0, 0.03);
        --shadow-hover: 0 10px 30px rgba(179, 135, 40, 0.08);
    }

    /* Grid of Stat Cards */
    .stat-grid-premium {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-bottom: 28px;
    }

    .stat-card-premium {
        background: var(--bg-card);
        border: var(--border-gold);
        border-radius: var(--card-radius);
        padding: 24px;
        box-shadow: var(--shadow-subtle);
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: var(--transition-smooth);
        position: relative;
        overflow: hidden;
    }

    .stat-card-premium:hover {
        transform: translateY(-3px);
        box-shadow: var(--shadow-hover);
        border-color: rgba(179, 135, 40, 0.4);
    }

    .stat-card-details {
        display: flex;
        flex-direction: column;
    }

    .stat-card-details h3 {
        font-family: var(--font-body);
        font-size: 0.75rem;
        color: var(--text-light);
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
        font-weight: 600;
    }

    .stat-card-details .value {
        font-family: var(--font-heading);
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--text-main);
        line-height: 1.2;
    }

    .stat-card-icon-wrapper {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: var(--transition-fast);
    }

    .stat-card-premium:hover .stat-card-icon-wrapper {
        transform: scale(1.1);
    }

    /* Clean 2-Column Split Layout */
    .dashboard-split-layout {
        display: grid;
        grid-template-columns: 1.6fr 1fr;
        gap: 28px;
        align-items: start;
        margin-bottom: 32px;
    }

    .left-column, .right-column {
        display: flex;
        flex-direction: column;
        gap: 28px;
    }

    /* Card customization overrides */
    .card-premium {
        background: var(--bg-card);
        border: var(--border-gold);
        border-radius: var(--card-radius);
        padding: 24px;
        box-shadow: var(--shadow-subtle);
    }

    .card-premium-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .card-premium-header h2 {
        font-size: 1.15rem;
        margin: 0;
        letter-spacing: 0.5px;
        color: var(--text-main);
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .btn-text-link {
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--primary-color);
        text-decoration: none;
        transition: var(--transition-fast);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-text-link:hover {
        color: var(--primary-dark);
        text-decoration: underline;
    }

    /* Quick Actions */
    .quick-actions-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
    }

    .quick-btn {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 18px 12px;
        background: #fafaf9;
        border: 1px solid rgba(0, 0, 0, 0.04);
        border-radius: 6px;
        color: var(--text-main);
        text-decoration: none;
        transition: var(--transition-fast);
        text-align: center;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .quick-btn:hover {
        border-color: var(--primary-color);
        background: rgba(179, 135, 40, 0.04);
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(179, 135, 40, 0.05);
    }

    .quick-btn svg {
        margin-bottom: 10px;
        color: var(--primary-color);
        transition: var(--transition-fast);
    }

    .quick-btn:hover svg {
        transform: scale(1.1);
    }

    /* Top Products */
    .top-products-list {
        display: flex;
        flex-direction: column;
        gap: 14px;
    }

    .top-product-item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 6px 0;
    }

    .top-product-img {
        width: 42px;
        height: 42px;
        border-radius: 6px;
        object-fit: cover;
        border: 1px solid var(--border-color);
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .top-product-info {
        flex: 1;
    }

    .top-product-name {
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 4px;
        color: var(--text-main);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 180px;
    }

    .top-product-bar-container {
        height: 5px;
        background: #e5e5e5;
        border-radius: 3px;
        overflow: hidden;
    }

    .top-product-bar {
        height: 100%;
        background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
        border-radius: 3px;
    }

    .top-product-sales {
        font-size: 0.8rem;
        color: var(--text-muted);
        font-weight: 500;
        text-align: right;
    }

    .top-product-sales strong {
        color: var(--text-main);
    }

    /* Alerts and Side Widgets */
    .widget-alert {
        background: #FFFBEB;
        border: 1px solid rgba(217, 119, 6, 0.15);
        border-radius: var(--card-radius);
        padding: 18px;
    }

    .widget-alert h3 {
        font-family: var(--font-body);
        font-size: 0.85rem;
        font-weight: 700;
        color: #B45309;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 6px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .widget-alert p {
        font-size: 0.8rem;
        line-height: 1.5;
        color: #92400E;
    }

    .widget-alert-ok {
        background: #ECFDF5;
        border: 1px solid rgba(16, 185, 129, 0.15);
        border-radius: var(--card-radius);
        padding: 18px;
    }

    .widget-alert-ok h3 {
        font-family: var(--font-body);
        font-size: 0.85rem;
        font-weight: 700;
        color: #047857;
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 6px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .widget-alert-ok p {
        font-size: 0.8rem;
        line-height: 1.5;
        color: #065F46;
    }

    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .dashboard-split-layout {
            grid-template-columns: 1fr;
            gap: 24px;
        }
    }
</style>

<!-- Stat Cards Grid -->
<div class="stat-grid-premium">
    <!-- Total Pendapatan -->
    <div class="stat-card-premium">
        <div class="stat-card-details">
            <h3>Total Pendapatan</h3>
            <div class="value">Rp <?= number_format($total_pendapatan, 0, ',', '.') ?></div>
        </div>
        <div class="stat-card-icon-wrapper" style="background: rgba(179, 135, 40, 0.1); color: var(--primary-color);">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"></path><path d="M4 6v12a2 2 0 0 0 2 2h14v-4"></path><path d="M18 12a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h4v-6z"></path></svg>
        </div>
    </div>

    <!-- Rata-rata Belanja -->
    <div class="stat-card-premium">
        <div class="stat-card-details">
            <h3>Rata-rata Belanja (AOV)</h3>
            <div class="value">Rp <?= number_format($rata_rata_belanja, 0, ',', '.') ?></div>
        </div>
        <div class="stat-card-icon-wrapper" style="background: rgba(59, 130, 246, 0.1); color: #3B82F6;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
        </div>
    </div>

    <!-- Pesanan Baru -->
    <div class="stat-card-premium">
        <div class="stat-card-details">
            <h3>Pesanan Baru</h3>
            <div class="value"><?= esc($pesanan_baru) ?> <span style="font-size: 0.95rem; font-weight: normal; color: var(--text-muted);">Antrian</span></div>
        </div>
        <div class="stat-card-icon-wrapper" style="background: rgba(217, 83, 79, 0.1); color: var(--danger);">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
        </div>
    </div>

    <!-- Total Produk -->
    <div class="stat-card-premium">
        <div class="stat-card-details">
            <h3>Total Produk</h3>
            <div class="value"><?= esc($total_produk) ?> <span style="font-size: 0.95rem; font-weight: normal; color: var(--text-muted);">Item</span></div>
        </div>
        <div class="stat-card-icon-wrapper" style="background: rgba(16, 185, 129, 0.1); color: #10B981;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
        </div>
    </div>
</div>

<!-- Main Split Layout -->
<div class="dashboard-split-layout">
    
    <!-- Left Column: Chart & Recent Orders Table -->
    <div class="left-column">
        <!-- Sales Trend Chart -->
        <div class="card-premium">
            <div class="card-premium-header">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="5" y2="21"></line><line x1="9" y1="9" x2="13" y2="13"></line><line x1="13" y1="13" x2="19" y2="5"></line></svg>
                    Tren Penjualan (7 Hari Terakhir)
                </h2>
            </div>
            <div style="position: relative; height: 320px; width: 100%;">
                <canvas id="salesChart"></canvas>
            </div>
        </div>

        <!-- Recent Orders Table -->
        <div class="card-premium">
            <div class="card-premium-header">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    5 Pesanan Terbaru
                </h2>
                <a href="<?= base_url('admin/pesanan') ?>" class="btn-text-link">Lihat Semua &rarr;</a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Pelanggan</th>
                            <th>Total</th>
                            <th>Metode</th>
                            <th>Status</th>
                            <th style="text-align: center;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($pesanan_terbaru as $p): ?>
                        <tr>
                            <td><strong>#<?= $p['id_pesan'] ?></strong></td>
                            <td><?= date('d M H:i', strtotime($p['tanggal_pesan'])) ?></td>
                            <td><?= esc($p['nama_pelanggan']) ?></td>
                            <td>Rp <?= number_format($p['total_harga'], 0, ',', '.') ?></td>
                            <td><span style="font-size: 11px; text-transform: uppercase; color: var(--text-muted);"><?= esc($p['metode_bayar']) ?></span></td>
                            <td>
                                <span style="padding: 4px 8px; border-radius: 4px; font-size: 10px; font-weight: bold; display: inline-block;
                                    <?= $p['status'] == 'Pending' ? 'background: #FEF3C7; color: #D97706;' : '' ?>
                                    <?= $p['status'] == 'Menunggu Konfirmasi' ? 'background: #DBEAFE; color: #1D4ED8;' : '' ?>
                                    <?= $p['status'] == 'Diproses' ? 'background: #E0E7FF; color: #4338CA;' : '' ?>
                                    <?= $p['status'] == 'Dikirim' ? 'background: #D1FAE5; color: #059669;' : '' ?>
                                    <?= $p['status'] == 'Selesai' ? 'background: #ECFDF5; color: #047857;' : '' ?>
                                    <?= $p['status'] == 'Batal' ? 'background: #FEE2E2; color: #B91C1C;' : '' ?>
                                ">
                                    <?= esc($p['status']) ?>
                                </span>
                            </td>
                            <td style="text-align: center;">
                                <a href="<?= base_url('admin/pesanan') ?>" class="btn btn-primary" style="padding: 6px 10px; font-size: 10px; line-height: 1;">Kelola</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <?php if(empty($pesanan_terbaru)): ?>
                        <tr><td colspan="7" style="text-align: center;">Belum ada pesanan masuk.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Right Column: Quick Actions, Top Products, Low Stock Alert Widget -->
    <div class="right-column">
        <!-- Quick Actions Panel -->
        <div class="card-premium">
            <div class="card-premium-header">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    Aksi Cepat
                </h2>
            </div>
            <div class="quick-actions-grid">
                <a href="<?= base_url('admin/produk') ?>" class="quick-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    Katalog Produk
                </a>
                <a href="<?= base_url('admin/pesanan') ?>" class="quick-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                    Kelola Pesanan
                </a>
                <a href="<?= base_url('admin/pembayaran') ?>" class="quick-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                    Verifikasi Bayar
                </a>
                <a href="<?= base_url('admin/notifikasi') ?>" class="quick-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    Notifikasi
                </a>
            </div>
        </div>

        <!-- Top Selling Products -->
        <div class="card-premium">
            <div class="card-premium-header">
                <h2>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                    Produk Terlaris
                </h2>
            </div>
            <div class="top-products-list">
                <?php 
                $max_sales = !empty($produk_terlaris) ? (int)$produk_terlaris[0]['total_terjual'] : 1;
                foreach($produk_terlaris as $item): 
                    $percent = ($item['total_terjual'] / $max_sales) * 100;
                ?>
                <div class="top-product-item">
                    <?php if(!empty($item['url_gambar'])): ?>
                        <img src="<?= base_url($item['url_gambar']) ?>" class="top-product-img" alt="<?= esc($item['nama_produk']) ?>">
                    <?php else: ?>
                        <div class="top-product-img" style="background: #e5e5e5; display: flex; align-items: center; justify-content: center; font-size: 8px;">No image</div>
                    <?php endif; ?>
                    <div class="top-product-info">
                        <div class="top-product-name"><?= esc($item['nama_produk']) ?></div>
                        <div class="top-product-bar-container">
                            <div class="top-product-bar" style="width: <?= $percent ?>%"></div>
                        </div>
                    </div>
                    <div class="top-product-sales">
                        <strong><?= $item['total_terjual'] ?></strong> <span style="font-size: 11px; color: var(--text-light);">terjual</span>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php if(empty($produk_terlaris)): ?>
                    <p style="color: var(--text-muted); font-size: 0.85rem; text-align: center; padding: 12px 0;">Belum ada data penjualan produk.</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Low Stock Alert Widget -->
        <?php if ($total_stok_tipis > 0): ?>
            <div class="widget-alert">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    Stok Menipis!
                </h3>
                <p>
                    Ada <strong><?= $total_stok_tipis ?> produk</strong> yang membutuhkan restock (stok < 5 pcs).
                </p>
                <div style="margin-top: 10px; font-size: 0.75rem; background: rgba(217, 119, 6, 0.05); padding: 8px; border-radius: 4px; border: 1px solid rgba(217, 119, 6, 0.1);">
                    <ul style="padding-left: 14px; color: #92400E;">
                        <?php foreach($stok_tipis as $stk): ?>
                            <li><?= esc($stk['nama_produk']) ?> (<strong><?= $stk['jumlah'] ?></strong> pcs)</li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div style="margin-top: 10px; text-align: right;">
                    <a href="<?= base_url('admin/produk') ?>" class="btn-text-link" style="color: #B45309; font-size: 0.75rem;">Kelola Stok &rarr;</a>
                </div>
            </div>
        <?php else: ?>
            <div class="widget-alert-ok">
                <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    Stok Produk Aman
                </h3>
                <p>Semua produk di katalog memiliki stok yang aman (minimal 5 pcs).</p>
            </div>
        <?php endif; ?>
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('salesChart').getContext('2d');
    
    // Gradient fill for line chart
    const gradient = ctx.createLinearGradient(0, 0, 0, 300);
    gradient.addColorStop(0, 'rgba(179, 135, 40, 0.35)');
    gradient.addColorStop(1, 'rgba(179, 135, 40, 0.01)');

    const chartLabels = <?= $chart_labels ?>;
    const chartData = <?= $chart_data ?>;

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: chartLabels,
            datasets: [{
                label: 'Total Pendapatan',
                data: chartData,
                borderColor: '#b38728',
                borderWidth: 2.5,
                backgroundColor: gradient,
                fill: true,
                tension: 0.35,
                pointBackgroundColor: '#b38728',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2,
                pointRadius: 4.5,
                pointHoverRadius: 6.5
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    padding: 12,
                    titleFont: {
                        family: 'Montserrat',
                        weight: '600'
                    },
                    bodyFont: {
                        family: 'Montserrat'
                    },
                    callbacks: {
                        label: function(context) {
                            let value = context.raw;
                            return ' Pendapatan: Rp ' + new Intl.NumberFormat('id-ID').format(value);
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.04)'
                    },
                    ticks: {
                        font: {
                            family: 'Montserrat',
                            size: 10
                        },
                        callback: function(value) {
                            if (value >= 1000000) {
                                return 'Rp ' + (value / 1000000) + 'jt';
                            } else if (value >= 1000) {
                                return 'Rp ' + (value / 1000) + 'rb';
                            }
                            return 'Rp ' + value;
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            family: 'Montserrat',
                            size: 10
                        }
                    }
                }
            }
        }
    });
});
</script>
<?= $this->endSection() ?>


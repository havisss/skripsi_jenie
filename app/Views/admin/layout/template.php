<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Admin Dashboard' ?> - Skripsi Jenie</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            Admin Panel
        </div>
        <ul class="sidebar-menu">
            <li><a href="<?= base_url('admin/dashboard') ?>" class="<?= url_is('admin/dashboard') ? 'active' : '' ?>">Dashboard</a></li>
            <li><a href="<?= base_url('admin/produk') ?>" class="<?= url_is('admin/produk*') ? 'active' : '' ?>">Katalog Produk</a></li>
            <li><a href="<?= base_url('admin/kustomisasi') ?>" class="<?= url_is('admin/kustomisasi*') ? 'active' : '' ?>">Kustomisasi</a></li>
            <li><a href="<?= base_url('admin/pesanan') ?>" class="<?= url_is('admin/pesanan*') ? 'active' : '' ?>">Pemesanan</a></li>
            <li><a href="<?= base_url('admin/pembayaran') ?>" class="<?= url_is('admin/pembayaran*') ? 'active' : '' ?>">Pembayaran</a></li>
            <li><a href="<?= base_url('admin/notifikasi') ?>" class="<?= url_is('admin/notifikasi*') ? 'active' : '' ?>">Notifikasi</a></li>
            <li style="margin-top: 32px;"><a href="<?= base_url('admin/logout') ?>" style="color: #FCA5A5;">Logout</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h1><?= $title ?? 'Dashboard' ?></h1>
            <div class="user-info">
                <span>Halo, <strong><?= session()->get('admin_username') ?></strong></span>
            </div>
        </div>

        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif; ?>

        <!-- Render Content -->
        <?= $this->renderSection('content') ?>

    </div>

</body>
</html>

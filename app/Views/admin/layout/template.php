<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Admin Dashboard') ?> - Bali Art House</title>
    
    <!-- Premium Fonts: Cinzel & Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>
<body>

    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header" style="display: flex; flex-direction: column; align-items: center; justify-content: center; padding: 30px 10px;">
            <div style="line-height: 1.2; text-align: center;">
                <span style="font-family: 'Cinzel', serif; font-size: 1.4rem; font-weight: 700; letter-spacing: 2px;">BALI</span><span style="font-family: 'Cinzel', serif; font-size: 1.4rem; font-weight: 400; letter-spacing: 2px;"> ART HOUSE</span><br>
                <span style="font-size: 0.6em; font-family: 'Montserrat', sans-serif; font-weight: 500; letter-spacing: 4px; color: var(--primary-color); display: block; margin-top: 8px; text-transform: uppercase;">Sablon & Kebaya Lokal</span>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="<?= base_url('admin/dashboard') ?>" class="<?= url_is('admin/dashboard') ? 'active' : '' ?>">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/produk') ?>" class="<?= url_is('admin/produk*') ? 'active' : '' ?>">
                    Katalog Produk
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/pesanan') ?>" class="<?= url_is('admin/pesanan*') ? 'active' : '' ?>">
                    Pemesanan
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/pembayaran') ?>" class="<?= url_is('admin/pembayaran*') ? 'active' : '' ?>">
                    Pembayaran
                </a>
            </li>
            <li>
                <a href="<?= base_url('admin/notifikasi') ?>" class="<?= url_is('admin/notifikasi*') ? 'active' : '' ?>">
                    Notifikasi
                </a>
            </li>
            <li style="margin-top: 32px;">
                <a href="<?= base_url('admin/logout') ?>" style="color: #EF4444;">
                    Logout
                </a>
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Header -->
        <header class="top-header">
            <div class="top-header-left">
                <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Sidebar">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                <h1 class="top-header-title"><?= esc($title ?? 'Dashboard') ?></h1>
            </div>
            <div class="user-info">
                <span>Halo, <strong><?= esc(session()->get('admin_username') ?? 'Admin') ?></strong></span>
            </div>
        </header>

        <!-- Dynamic Content Area -->
        <main class="content-wrapper">
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            <?php endif; ?>

            <!-- Render Specific View -->
            <?= $this->renderSection('content') ?>
        </main>
    </div>

    <!-- Sidebar Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('mobileToggle');
            const overlay = document.getElementById('sidebarOverlay');

            function toggleSidebar() {
                sidebar.classList.toggle('active');
                overlay.classList.toggle('active');
            }

            toggleBtn.addEventListener('click', toggleSidebar);
            overlay.addEventListener('click', toggleSidebar);
        });
    </script>
</body>
</html>

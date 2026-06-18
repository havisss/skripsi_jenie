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
        <div class="sidebar-header" style="display: flex; flex-direction: column; align-items: center; gap: 15px; padding: 30px 10px;">
            <div style="width: 50px; height: 50px;">
                <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-linecap="round" stroke-linejoin="round" style="width: 100%; height: 100%;">
                    <circle cx="12" cy="12" r="10" stroke-width="1" />
                    <circle cx="12" cy="12" r="7" stroke-width="0.5" stroke-dasharray="2 2" />
                    <path d="M12 3.5c.8 2 1.5 3.5 1.5 5S12.8 10 12 10s-1.5-1-1.5-1.5 1.5-3 1.5-5z" stroke-width="1" />
                    <path d="M12 20.5c.8-2 1.5-3.5 1.5-5s-.7-1.5-1.5-1.5-1.5 1-1.5 1.5 1.5 3 1.5 5z" stroke-width="1" />
                    <path d="M3.5 12c2 .8 3.5 1.5 5 1.5s1.5-.7 1.5-1.5-1-1.5-1.5-1.5-3 1.5-5 1.5z" stroke-width="1" />
                    <path d="M20.5 12c-2 .8-3.5 1.5-5 1.5s-1.5-.7-1.5-1.5 1-1.5 1.5-1.5 3 1.5 5 1.5z" stroke-width="1" />
                    <circle cx="12" cy="12" r="1.5" fill="var(--primary-color)" stroke="none" />
                </svg>
            </div>
            <div style="line-height: 1.2; text-align: center;">
                <span style="font-family: 'Cinzel', serif; font-size: 1.2rem; letter-spacing: 2px;">BALI</span><br>
                <span style="font-size: 0.6em; font-family: 'Montserrat', sans-serif; letter-spacing: 5px; color: var(--text-sidebar); display: block; margin-top: 6px;">ART HOUSE</span>
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

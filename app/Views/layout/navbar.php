<?php $uri = service('uri')->getSegment(1, ''); ?>
<header class="header" id="main-header">
    <div class="nav-container">
        <!-- LEFT: LOGO -->
        <div class="nav-left">
            <a href="<?= base_url('/') ?>" class="nav-brand">
                <div style="display: flex; align-items: baseline; gap: 6px;">
                    <span class="nav-brand-title">BALI</span>
                    <span class="nav-brand-title" style="font-weight: 400;">ART HOUSE</span>
                </div>
            </a>
        </div>

        <!-- CENTER: LINKS (Hidden on Mobile) -->
        <div class="nav-center">
            <ul class="nav-menu">
                <li><a href="<?= base_url('/') ?>" class="nav-item <?= ($uri == '' ? 'active' : '') ?>">Home</a></li>
                <li><a href="<?= base_url('/catalog') ?>" class="nav-item <?= ($uri == 'catalog' ? 'active' : '') ?>">Catalog</a></li>
                <li><a href="<?= base_url('/custom') ?>" class="nav-item <?= ($uri == 'custom' ? 'active' : '') ?>">Custom</a></li>

                <li><a href="<?= base_url('/company-info') ?>" class="nav-item <?= ($uri == 'company-info' ? 'active' : '') ?>">About Us</a></li>
            </ul>
        </div>

        <!-- RIGHT: ICONS & TOGGLE -->
        <div class="nav-right">
            <div class="nav-actions">
                <?php if(session()->get('logged_in')): ?>
                    <a href="<?= base_url('/transaction-history') ?>" class="action-btn <?= ($uri == 'transaction-history' ? 'active' : '') ?>" title="Riwayat">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </a>
                    <a href="<?= base_url('/logout') ?>" class="action-btn" title="Keluar">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    </a>
                <?php else: ?>
                    <a href="<?= base_url('/login') ?>" class="action-btn <?= ($uri == 'login' ? 'active' : '') ?>" title="Login">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </a>
                <?php endif; ?>
                <a href="#" class="action-btn" onclick="openOffcanvasCart(); return false;" title="Keranjang">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                </a>
            </div>
            
            <button class="mobile-toggle" onclick="toggleMobileMenu()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </button>
        </div>
    </div>

    <!-- MOBILE DROPDOWN -->
    <div class="mobile-menu" id="mobileMenu">
        <ul class="mobile-nav-menu">
            <li><a href="<?= base_url('/') ?>" class="mobile-nav-item <?= ($uri == '' ? 'active' : '') ?>">Home</a></li>
            <li><a href="<?= base_url('/catalog') ?>" class="mobile-nav-item <?= ($uri == 'catalog' ? 'active' : '') ?>">Catalog</a></li>
            <li><a href="<?= base_url('/custom') ?>" class="mobile-nav-item <?= ($uri == 'custom' ? 'active' : '') ?>">Custom</a></li>

            <li><a href="<?= base_url('/company-info') ?>" class="mobile-nav-item <?= ($uri == 'company-info' ? 'active' : '') ?>">About Us</a></li>
        </ul>
    </div>
</header>
<script>
function toggleMobileMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('active');
}
</script>
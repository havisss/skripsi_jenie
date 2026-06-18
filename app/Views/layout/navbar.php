<?php $uri = service('uri')->getSegment(1); ?>
<header class="header">
    <nav class="nav">
        <!-- Mobile Header (Logo & Toggle) -->
        <div class="nav-mobile-header">
            <!-- Elegant brand logo layout -->
            <a href="<?= base_url('/') ?>" class="logo-brand">
                <div class="logo-icon-wrapper">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="logo-icon-svg">
                        <circle cx="12" cy="12" r="10" class="icon-ring" />
                        <circle cx="12" cy="12" r="8.2" class="icon-ring-inner" stroke-dasharray="1.5 1.5" />
                        <path class="icon-petal" d="M12 3.5c.8 2 1.5 3.5 1.5 5S12.8 10 12 10s-1.5-1-1.5-1.5 1.5-3 1.5-5z" />
                        <path class="icon-petal" d="M12 20.5c.8-2 1.5-3.5 1.5-5s-.7-1.5-1.5-1.5-1.5 1-1.5 1.5 1.5 3 1.5 5z" />
                        <path class="icon-petal" d="M3.5 12c2 .8 3.5 1.5 5 1.5s1.5-.7 1.5-1.5-1-1.5-1.5-1.5-3 1.5-5 1.5z" />
                        <path class="icon-petal" d="M20.5 12c-2 .8-3.5 1.5-5 1.5s-1.5-.7-1.5-1.5 1-1.5 1.5-1.5 3 1.5 5 1.5z" />
                        <path class="icon-petal-diagonal" d="M6 6c1.2 1.2 2 2 2.8 1.6s.8-.8.8-1.2-1-1.2-2-2S6.5 5.2 6 6z" />
                        <path class="icon-petal-diagonal" d="M18 18c-1.2-1.2-2-2-2.8-1.6s-.8.8-.8 1.2 1 1.2 2 2 1.5-1.2 2-2z" />
                        <path class="icon-petal-diagonal" d="M18 6c-1.2 1.2-2 2-2.8 1.6s-.8-.8-.8-1.2 1-1.2 2-2 1.5 1.2 2 2z" />
                        <path class="icon-petal-diagonal" d="M6 18c1.2-1.2 2-2 2.8-1.6s.8.8.8 1.2-1 1.2-2-2-1.5-1.2-2 2z" />
                        <circle cx="12" cy="12" r="1.2" fill="currentColor" class="icon-center-dot" />
                    </svg>
                </div>
                <div class="logo-text-wrapper">
                    <span class="logo-text-main">BALI</span>
                    <span class="logo-text-sub">ART HOUSE</span>
                </div>
            </a>
            
            <button class="menu-toggle" aria-label="Toggle Menu">
                <svg class="hamburger-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>


        <!-- Hamburger Menu for Mobile -->
        <button class="mobile-menu-btn" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="nav-menu">
            <ul class="nav-links">
            <li><a href="<?= base_url('/') ?>" class="nav-link <?= ($uri == '' ? 'active' : '') ?>">Home</a></li>
            <li><a href="<?= base_url('/catalog') ?>" class="nav-link <?= ($uri == 'catalog' ? 'active' : '') ?>">Catalog</a></li>
            <li><a href="<?= base_url('/custom-order') ?>" class="nav-link <?= ($uri == 'custom-order' ? 'active' : '') ?>">Custom Order</a></li>
            <li><a href="<?= base_url('/company-info') ?>" class="nav-link <?= ($uri == 'company-info' ? 'active' : '') ?>">About Us</a></li>
        </ul>      <!-- Collapsible Menu -->
        <div class="nav-collapse">
            <ul class="nav-links">
                <li><a href="<?= base_url('/') ?>" class="nav-link <?= ($uri == '' ? 'active' : '') ?>">Home</a></li>
                <li><a href="<?= base_url('/catalog') ?>" class="nav-link <?= ($uri == 'catalog' ? 'active' : '') ?>">Catalog</a></li>
                <li><a href="<?= base_url('/custom-order') ?>" class="nav-link <?= ($uri == 'custom-order' ? 'active' : '') ?>">Custom Order</a></li>
                <li><a href="<?= base_url('/company-info') ?>" class="nav-link <?= ($uri == 'company-info' ? 'active' : '') ?>">About Us</a></li>
            </ul>


            <div class="nav-right">
                <?php if(session()->get('logged_in')): ?>
                    <a href="<?= base_url('/transaction-history') ?>" class="nav-icon-link <?= ($uri == 'transaction-history' ? 'active' : '') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <span>Riwayat</span>
                    </a>
                    <a href="<?= base_url('/logout') ?>" class="nav-icon-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span><?= esc(explode(' ', session()->get('nama_pelanggan'))[0]) ?> (Keluar)</span>
                    </a>
                <?php else: ?>
                    <a href="<?= base_url('/login') ?>" class="nav-icon-link <?= ($uri == 'login' ? 'active' : '') ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                        <span>Login</span>
                    </a>
                <?php endif; ?>
                <a href="javascript:void(0)" onclick="toggleCart()" class="nav-icon-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                    <span>Cart</span>
                </a>
            </div>
        </div>
        </div>
    </nav>
</header>
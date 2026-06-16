<?php $uri = service('uri')->getSegment(1); ?>
<header class="header">
    <nav class="nav">
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

        <ul class="nav-links">
            <li><a href="<?= base_url('/') ?>" class="nav-link <?= ($uri == '' ? 'active' : '') ?>">Home</a></li>
            <li><a href="<?= base_url('/catalog') ?>" class="nav-link <?= ($uri == 'catalog' ? 'active' : '') ?>">Catalog</a></li>
            <li><a href="<?= base_url('/custom-order') ?>" class="nav-link <?= ($uri == 'custom-order' ? 'active' : '') ?>">Custom Order</a></li>
            <li><a href="<?= base_url('/company-info') ?>" class="nav-link <?= ($uri == 'company-info' ? 'active' : '') ?>">About Us</a></li>
        </ul>

        <div class="nav-right">
            <a href="<?= base_url('/login') ?>" class="nav-icon-link <?= ($uri == 'login' ? 'active' : '') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span>Login</span>
            </a>
            <a href="<?= base_url('/cart') ?>" class="nav-icon-link <?= ($uri == 'cart' ? 'active' : '') ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                <span>Cart</span>
            </a>
        </div>
    </nav>
</header>
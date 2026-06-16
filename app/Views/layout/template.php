<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    
    <!-- Google Fonts: Cinzel (Headings) & Montserrat (Body) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

<body>
    <!-- Elegant Preloader -->
    <div class="preloader">
        <div class="preloader-content">
            <div class="preloader-logo-wrapper">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="preloader-logo-svg">
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
            <div class="preloader-brand">BALI</div>
            <div style="font-family: var(--font-body); font-size: 0.65rem; font-weight: 600; text-transform: uppercase; letter-spacing: 3px; color: var(--primary-color); margin-top: -0.2rem; margin-bottom: 0.8rem;">ART HOUSE</div>
            <div class="preloader-text">0%</div>
        </div>
    </div>

    <?= $this->include('layout/navbar') ?>

    <main class="page-wrapper">
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Luxury Footer -->
    <footer class="footer" style="position: relative; text-align: center; padding: 4rem 2rem;">
        <div style="margin-bottom: 1.2rem;">
            <!-- Symmetrical Floral Emblem -->
            <svg viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-linecap="round" stroke-linejoin="round" style="width: 30px; height: 30px; opacity: 0.8; display: inline-block;">
                <circle cx="12" cy="12" r="10" stroke-width="0.8" />
                <circle cx="12" cy="12" r="8.2" stroke-width="0.5" stroke-dasharray="1.5 1.5" />
                <path d="M12 3.5c.8 2 1.5 3.5 1.5 5S12.8 10 12 10s-1.5-1-1.5-1.5 1.5-3 1.5-5z" stroke-width="0.8" />
                <path d="M12 20.5c.8-2 1.5-3.5 1.5-5s-.7-1.5-1.5-1.5-1.5 1-1.5 1.5 1.5 3 1.5 5z" stroke-width="0.8" />
                <path d="M3.5 12c2 .8 3.5 1.5 5 1.5s1.5-.7 1.5-1.5-1-1.5-1.5-1.5-3 1.5-5 1.5z" stroke-width="0.8" />
                <path d="M20.5 12c-2 .8-3.5 1.5-5 1.5s-1.5-.7-1.5-1.5 1-1.5 1.5-1.5 3 1.5 5 1.5z" stroke-width="0.8" />
                <path d="M6 6c1.2 1.2 2 2 2.8 1.6s.8-.8.8-1.2-1-1.2-2-2S6.5 5.2 6 6z" stroke-width="0.6" opacity="0.7" />
                <path d="M18 18c-1.2-1.2-2-2-2.8-1.6s-.8.8-.8 1.2 1 1.2 2 2 1.5-1.2 2-2z" stroke-width="0.6" opacity="0.7" />
                <path d="M18 6c-1.2 1.2-2 2-2.8 1.6s-.8-.8-.8-1.2 1-1.2 2-2 1.5 1.2 2 2z" stroke-width="0.6" opacity="0.7" />
                <path d="M6 18c1.2-1.2 2-2 2.8-1.6s.8.8.8 1.2-1 1.2-2-2-1.5-1.2-2 2z" stroke-width="0.6" opacity="0.7" />
                <circle cx="12" cy="12" r="1.2" fill="var(--primary-color)" />
            </svg>
        </div>
        
        <!-- Footer Navigation Links -->
        <div class="footer-links-row" style="display: flex; justify-content: center; gap: 2rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
            <a href="<?= base_url('/') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Home</a>
            <a href="<?= base_url('/catalog') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Katalog</a>
            <a href="<?= base_url('/custom-order') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Kustomisasi</a>
            <a href="<?= base_url('/confirm-payment') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Konfirmasi Pembayaran</a>
            <a href="<?= base_url('/shipping-status') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Status Pengiriman</a>
        </div>

        <p style="text-transform: uppercase; letter-spacing: 3px; font-size: 0.8rem; color: var(--text-light);">&copy; 2026 Bali Art House Print</p>
        <p style="font-family: var(--font-heading); font-style: italic; color: var(--primary-color); font-size: 1.1rem; margin-top: 0.5rem;">Handcrafted in the Island of Gods, Bali</p>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- 1. Scroll Reveals ---
        const revealElements = document.querySelectorAll('.reveal');
        const revealOptions = {
            threshold: 0.05,
            rootMargin: "0px 0px -20px 0px"
        };

        const revealOnScroll = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            });
        }, revealOptions);

        revealElements.forEach(el => {
            revealOnScroll.observe(el);
        });

        // --- 2. Quantity Selectors ---
        window.changeQuantity = function(change) {
            const qtyInput = document.querySelector('.co-qty input, .cf-qty input');
            if (qtyInput) {
                let val = parseInt(qtyInput.value) || 1;
                qtyInput.value = Math.max(1, val + change);
                qtyInput.dispatchEvent(new Event('change'));
            }
        };
    });

    // --- 3. Navbar Scrolling ---
    const header = document.querySelector('.header');
    if (header) {
        const isHomePage = document.querySelector('.hero-premium') !== null;
        if (isHomePage) {
            header.classList.add('header-transparent');
        }

        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) {
                header.classList.add('scrolled');
                if (isHomePage) header.classList.remove('header-transparent');
            } else {
                header.classList.remove('scrolled');
                if (isHomePage) header.classList.add('header-transparent');
            }
        });
    }

    // --- 4. Preloader loading percentage ---
    let percent = 0;
    const percentEl = document.querySelector('.preloader-text');
    const preloader = document.querySelector('.preloader');
    
    let interval = setInterval(() => {
        percent += Math.floor(Math.random() * 15) + 5;
        if (percent >= 90) {
            percent = 90;
            clearInterval(interval);
        }
        if (percentEl) percentEl.textContent = percent + '%';
    }, 30);

    window.addEventListener('load', () => {
        clearInterval(interval);
        if (percentEl) percentEl.textContent = '100%';
        setTimeout(() => {
            if (preloader) preloader.classList.add('loaded');
        }, 150);
    });
    </script>
</body>
</html>
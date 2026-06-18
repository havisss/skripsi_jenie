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


    <?php if(!isset($hide_nav)): ?>
    <?= $this->include('layout/navbar') ?>
    <?php endif; ?>

    <main class="page-wrapper">
        <?= $this->renderSection('content') ?>
    </main>

    <?php if(!isset($hide_nav)): ?>
    <!-- Luxury Footer -->
    <footer class="footer" style="position: relative; text-align: center; padding: 4rem 2rem;">
        <div style="display: flex; flex-direction: column; align-items: center; margin-bottom: 2.5rem; gap: 5px;">
            <h3 style="font-family: var(--font-heading); font-size: 1.8rem; letter-spacing: 2px; margin: 0; line-height: 1; color: var(--text-color);">BALI <span style="font-weight: 400;">ART HOUSE</span></h3>
            <span style="font-size: 0.75rem; font-weight: 500; letter-spacing: 3px; color: var(--primary-color); margin-top: 4px; text-transform: uppercase;">Sablon Kain & Kebaya Lokal</span>
        </div>
        
        <!-- Footer Navigation Links -->
        <div class="footer-links-row" style="display: flex; justify-content: center; gap: 2rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
            <a href="<?= base_url('/') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Home</a>
            <a href="<?= base_url('/catalog') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Katalog</a>

            <a href="<?= base_url('/confirm-payment') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Konfirmasi Pembayaran</a>
            <a href="<?= base_url('/shipping-status') ?>" style="color: var(--text-light); text-decoration: none; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; transition: var(--transition-premium);">Status Pengiriman</a>
        </div>

        <p style="text-transform: uppercase; letter-spacing: 3px; font-size: 0.8rem; color: var(--text-light);">&copy; 2026 Bali Art House Print</p>
        <p style="font-family: var(--font-heading); font-style: italic; color: var(--primary-color); font-size: 1.1rem; margin-top: 0.5rem;">Handcrafted in the Island of Gods, Bali</p>
    </footer>
    <?php endif; ?>

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

        // --- 5. Mobile Menu Toggle ---
        const menuToggle = document.querySelector('.menu-toggle');
        const navCollapse = document.querySelector('.nav-collapse');
        const hamburgerIcon = document.querySelector('.hamburger-icon');
        const closeIcon = document.querySelector('.close-icon');

        if (menuToggle && navCollapse) {
            menuToggle.addEventListener('click', function() {
                navCollapse.classList.toggle('active');
                if (navCollapse.classList.contains('active')) {
                    hamburgerIcon.style.display = 'none';
                    closeIcon.style.display = 'block';
                } else {
                    hamburgerIcon.style.display = 'block';
                    closeIcon.style.display = 'none';
                }
            });
        }
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



    // --- Off-Canvas Cart Logic ---
    let cartData = JSON.parse(localStorage.getItem('tropical_cart') || '[]');

    function saveCart() {
        localStorage.setItem('tropical_cart', JSON.stringify(cartData));
        renderCart();
    }

    function renderCart() {
        const cartItems = document.getElementById('cart-items-container');
        const emptyState = document.getElementById('cart-empty-state');
        
        // Clear current items except empty state
        Array.from(cartItems.children).forEach(child => {
            if(child.id !== 'cart-empty-state') child.remove();
        });

        if(cartData.length === 0) {
            if(emptyState) emptyState.style.display = 'flex';
            return;
        }

        if(emptyState) emptyState.style.display = 'none';

        cartData.forEach(item => {
            const itemHtml = `
                <div class="cart-item" id="cart-item-${item.id}">
                    <img src="${item.img}" alt="${item.name}">
                    <div class="cart-item-details">
                        <h4>${item.name}</h4>
                        <p>Rp ${item.price.toLocaleString('id-ID')}</p>
                        <div class="cart-qty-control">
                            <button onclick="updateCartQty(${item.id}, -1)">-</button>
                            <input type="text" value="${item.qty}" readonly id="qty-${item.id}">
                            <button onclick="updateCartQty(${item.id}, 1)">+</button>
                        </div>
                    </div>
                    <button class="cart-item-remove" onclick="removeCartItem(${item.id})">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                    </button>
                </div>
            `;
            cartItems.insertAdjacentHTML('beforeend', itemHtml);
        });
    }

    function toggleCart() {
        document.getElementById('offcanvas-cart').classList.toggle('active');
        document.getElementById('offcanvas-overlay').classList.toggle('active');
    }

    function openCart(id, name, price, img) {
        let existing = cartData.find(item => item.id == id);
        if(existing) {
            existing.qty += 1;
        } else {
            cartData.push({ id, name, price, img, qty: 1 });
        }
        saveCart();
        toggleCart();
    }

    function updateCartQty(id, change) {
        let item = cartData.find(item => item.id == id);
        if(item) {
            item.qty += change;
            if(item.qty < 1) item.qty = 1;
            saveCart();
        }
    }

    function removeCartItem(id) {
        cartData = cartData.filter(item => item.id != id);
        saveCart();
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderCart();
    });
    </script>

    <!-- Off-Canvas Cart HTML -->
    <div class="offcanvas-overlay" id="offcanvas-overlay" onclick="toggleCart()"></div>
    <div class="offcanvas-cart" id="offcanvas-cart">
        <div class="cart-header">
            <h3>Keranjang Belanja</h3>
            <button class="cart-close" onclick="toggleCart()">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>
        <div class="cart-body" id="cart-items-container">
            <div id="cart-empty-state" style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%; color: var(--text-light); text-align: center;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="margin-bottom: 1rem; opacity: 0.5;"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                <p>Keranjang Anda kosong</p>
            </div>
        </div>
        <div class="cart-footer">
            <button onclick="checkoutCart()" class="btn btn-primary" style="width: 100%; text-align: center; display: block; border: none; cursor: pointer; padding: 1rem; font-size: 1rem;">Lanjut ke Checkout</button>
        </div>
    </div>
    
    <script>
    function checkoutCart() {
        let cartData = JSON.parse(localStorage.getItem('tropical_cart') || '[]');
        if(cartData.length === 0) {
            alert('Keranjang Anda kosong! Silakan tambahkan produk terlebih dahulu.');
            return;
        }
        // Ensure direct checkout data is wiped so the checkout page reads from the cart
        sessionStorage.removeItem('direct_checkout_price');
        sessionStorage.removeItem('direct_checkout_name');
        window.location.href = '<?= base_url('/checkout') ?>';
    }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            font-family: var(--font-body);
            background-color: var(--bg-color);
            overflow: hidden;
        }

        /* 50% Left: Clear Image Visual Panel */
        .login-visual-panel {
            flex: 1;
            position: relative;
            background-image: url('<?= base_url("images/login_hero_1781631706752.png") ?>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            border-right: var(--border-gold);
            overflow: hidden;
        }

        .login-visual-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%);
            z-index: 1;
        }

        .login-brand-wrapper {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 3rem 2.5rem;
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: var(--border-gold);
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
            max-width: 380px;
            width: 90%;
        }

        .login-brand-logo {
            width: 80px;
            height: 80px;
            fill: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .login-brand-wrapper h2 {
            font-family: var(--font-heading);
            font-size: 2.2rem;
            color: var(--text-color);
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 0.4rem;
        }

        .login-brand-wrapper h2 span {
            color: var(--primary-color);
        }

        .login-brand-wrapper p {
            color: var(--text-light);
            font-size: 0.95rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        /* 50% Right: Minimal Form */
        .login-content {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4rem;
            position: relative;
            background: var(--bg-card);
            z-index: 5;
        }

        .login-form-wrapper {
            width: 100%;
            max-width: 380px;
            position: relative;
        }

        .login-form-wrapper h1 {
            font-family: var(--font-heading);
            font-size: 2.4rem;
            margin-bottom: 0.6rem;
            color: var(--text-color);
        }

        .login-form-wrapper p.subtitle {
            color: var(--text-light);
            font-size: 0.95rem;
            margin-bottom: 2.5rem;
        }

        .input-group {
            margin-bottom: 2rem;
        }

        .input-group label {
            display: block;
            color: var(--text-color);
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 0.6rem;
        }

        .input-group input {
            width: 100%;
            padding: 0.75rem 0.5rem;
            background: var(--bg-color);
            border: 1px solid rgba(0,0,0,0.12);
            font-size: 1rem;
            color: var(--text-color);
            transition: var(--transition-premium);
            border-radius: 0;
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            background: #ffffff;
        }

        .login-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
            font-size: 0.9rem;
            color: var(--text-light);
        }

        .login-actions a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition-premium);
        }

        .login-actions a:hover {
            color: var(--primary-dark);
        }

        .btn-submit {
            width: 100%;
            padding: 1rem;
            font-size: 0.95rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: var(--primary-color);
            color: #ffffff;
            border: 1px solid var(--primary-color);
            cursor: pointer;
            transition: var(--transition-premium);
            font-weight: 600;
        }

        .btn-submit:hover {
            color: var(--primary-color);
            border-color: var(--primary-color);
            background: transparent;
        }

        .back-home {
            position: absolute;
            top: 2rem;
            right: 3rem;
            color: var(--text-light);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            font-size: 0.8rem;
            transition: var(--transition-premium);
            z-index: 10;
        }

        .back-home:hover {
            color: var(--text-color);
            transform: translateX(-2px);
        }

        @media (max-width: 992px) {
            body {
                flex-direction: column;
                overflow-y: auto;
            }
            .login-visual-panel {
                min-height: 300px;
                flex: none;
            }
            .login-content {
                padding: 3rem 1.5rem;
                flex: none;
            }
            .back-home {
                right: 1.5rem;
                top: 1.5rem;
            }
        }
    </style>
</head>
<body>

<!-- Left Side -->
<div class="login-visual-panel"></div>

<!-- Right Side -->
<div class="login-content">
    <a href="<?= base_url('/') ?>" class="back-home">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: text-bottom;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        Tutup
    </a>

    <div class="login-form-wrapper">
        <div style="text-align: center; margin-bottom: 2.2rem; display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <div class="logo-icon-wrapper" style="width: 50px; height: 50px; margin-bottom: 0.8rem; border-color: rgba(179, 135, 40, 0.25); background: rgba(179, 135, 40, 0.02); display: flex; align-items: center; justify-content: center; border-radius: 50%;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="logo-icon-svg" style="width: 32px; height: 32px;">
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
            <h2 style="font-family: var(--font-heading); font-size: 1.6rem; font-weight: 700; text-transform: uppercase; letter-spacing: 5px; color: var(--text-color); margin-bottom: 0.1rem; line-height: 1;">BALI</h2>
            <p style="font-family: var(--font-body); font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 3px; color: var(--primary-color); margin-bottom: 0.6rem;">ART HOUSE</p>
            <p style="font-family: var(--font-body); font-size: 0.7rem; text-transform: uppercase; letter-spacing: 1.5px; color: var(--text-light);">Cetak Kain & Busana Premium</p>
        </div>
        <h1 style="font-size: 2rem; margin-bottom: 1.5rem; text-align: center;">Masuk Akun</h1>

        <?php if(session()->getFlashdata('error')): ?>
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 1rem; border: 1px solid #f5c6cb; text-align: center; font-size: 0.9rem;">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('success')): ?>
            <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 1rem; border: 1px solid #c3e6cb; text-align: center; font-size: 0.9rem;">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('auth/processLogin') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="input-group">
                <label>Alamat E-mail</label>
                <input type="email" name="email" required placeholder="nama@email.com">
            </div>
            
            <div class="input-group">
                <label>Kata Sandi</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>

            <div class="login-actions">
                <label style="display:flex; align-items:center; gap:0.5rem; cursor:pointer;">
                    <input type="checkbox" style="width:16px; height:16px; accent-color: var(--primary-color);">
                    Ingat Saya
                </label>
                <a href="#">Lupa Sandi?</a>
            </div>

            <button type="submit" class="btn-submit">
                Masuk
            </button>
        </form>

        <div style="margin-top: 2rem; text-align: center; font-size: 0.85rem; color: var(--text-light);">
            Belum memiliki akun? <a href="<?= base_url('/register') ?>" style="color: var(--primary-color); text-decoration: none; font-weight: 600; transition: var(--transition-premium);">Daftar Sekarang</a>
        </div>
    </div>
</div>

<!-- Simple Loading Fade In -->
<script>
window.addEventListener('load', () => {
    // Simple loader dismiss
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.classList.add('loaded');
    }
});
</script>

</body>
</html>

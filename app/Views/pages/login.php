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
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
            font-family: var(--font-body);
            background-image: url('<?= base_url("images/login_hero_1781631706752.png") ?>');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
        }

        .login-content {
            position: relative;
            z-index: 5;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            overflow: hidden;
        }

        .login-form-wrapper {
            width: 100%;
            max-width: 440px;
            background: #ffffff;
            padding: 3.5rem 2.5rem;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border: 1px solid rgba(0,0,0,0.05);
        }

        .input-group {
            margin-bottom: 1.8rem;
        }

        .input-group label {
            display: block;
            color: var(--text-color);
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 0.5rem;
        }

        .input-group input {
            width: 100%;
            padding: 0.75rem 0.8rem;
            background: rgba(250, 250, 249, 0.9);
            border: 1px solid rgba(0,0,0,0.15);
            font-size: 0.95rem;
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
            margin-bottom: 2.2rem;
            font-size: 0.85rem;
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
            font-size: 0.9rem;
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
            position: fixed;
            top: 2rem;
            right: 3rem;
            color: rgba(255, 255, 255, 0.8);
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
            color: #ffffff;
            transform: translateX(-2px);
        }

        @media (max-width: 576px) {
            .login-form-wrapper {
                padding: 2.5rem 1.5rem;
            }
            .back-home {
                right: 1.5rem;
                top: 1.5rem;
            }
        }
    </style>
</head>
<body>

<a href="<?= base_url('/') ?>" class="back-home">
    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="vertical-align: text-bottom;"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    Tutup
</a>

<div class="login-content">
    <div class="login-form-wrapper">
        <div style="text-align: center; margin-bottom: 2.5rem; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px;">
            <h2 style="font-family: var(--font-heading); font-size: 2rem; font-weight: 700; letter-spacing: 2px; color: var(--text-color); margin: 0; line-height: 1;">BALI <span style="font-weight: 400;">ART HOUSE</span></h2>
            <p style="font-family: var(--font-body); font-size: 0.75rem; font-weight: 500; text-transform: uppercase; letter-spacing: 3px; color: var(--primary-color); margin: 0; margin-top: 5px;">Sablon Kain & Kebaya Lokal</p>
        </div>
        <h1 style="font-family: var(--font-heading); font-size: 1.6rem; font-weight: 500; margin-bottom: 1.5rem; text-align: center; letter-spacing: 1px;">Masuk Akun</h1>

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



</body>
</html>

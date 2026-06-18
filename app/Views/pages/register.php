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
            max-width: 500px;
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 1.5rem 2.5rem;
            border-radius: 4px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.3);
            border: 1px solid rgba(255,255,255,0.4);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 0.8rem;
        }

        @media (max-width: 600px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 1.2rem;
                margin-bottom: 0;
            }
            .form-row .input-group {
                margin-bottom: 1.2rem;
            }
        }

        .input-group {
            margin-bottom: 0.8rem;
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
            margin-bottom: 1.8rem;
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
        <div style="text-align: center; margin-bottom: 2rem; display: flex; flex-direction: column; align-items: center; justify-content: center;">
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

        <h1 style="font-family: var(--font-heading); font-size: 1.4rem; font-weight: 500; margin-bottom: 1rem; text-align: center; letter-spacing: 1px;">Daftar Akun</h1>

        <?php if(session()->getFlashdata('error_register')): ?>
            <div style="background-color: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 1rem; border: 1px solid #f5c6cb; text-align: left; font-size: 0.85rem;">
                <?= session()->getFlashdata('error_register') ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('auth/processRegister') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="input-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_pelanggan" required placeholder="Nama Lengkap Anda" value="<?= old('nama_pelanggan') ?>">
            </div>

            <div class="form-row">
                <div class="input-group" style="margin-bottom: 0;">
                    <label>Alamat E-mail</label>
                    <input type="email" name="email" required placeholder="nama@email.com" value="<?= old('email') ?>">
                </div>

                <div class="input-group" style="margin-bottom: 0;">
                    <label>Nomor Telepon</label>
                    <input type="tel" name="no_telpon" required placeholder="08XXXXXXXXXX" value="<?= old('no_telpon') ?>">
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group" style="margin-bottom: 0;">
                    <label>Kata Sandi</label>
                    <input type="password" name="password" required placeholder="••••••••">
                </div>

                <div class="input-group" style="margin-bottom: 0;">
                    <label>Konfirmasi Kata Sandi</label>
                    <input type="password" name="confirm_password" required placeholder="••••••••">
                </div>
            </div>

            <div class="login-actions" style="margin-top: 0.5rem;">
                <label style="display:flex; align-items:flex-start; gap:0.5rem; cursor:pointer; font-size: 0.8rem; line-height: 1.4;">
                    <input type="checkbox" required style="width:16px; height:16px; accent-color: var(--primary-color); margin-top: 2px;">
                    <span>Saya menyetujui <a href="#" style="display:inline; color:var(--primary-color); text-decoration:none; font-weight:600;">Syarat & Ketentuan</a> yang berlaku di Bali Art House.</span>
                </label>
            </div>

            <button type="submit" class="btn-submit">
                Daftar Sekarang
            </button>
        </form>

        <div style="margin-top: 2rem; text-align: center; font-size: 0.85rem; color: var(--text-light);">
            Sudah memiliki akun? <a href="<?= base_url('/login') ?>" style="color: var(--primary-color); text-decoration: none; font-weight: 600; transition: var(--transition-premium);">Masuk Sekarang</a>
        </div>
    </div>
</div>

<script>
window.addEventListener('load', () => {
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        preloader.classList.add('loaded');
    }
});
</script>

</body>
</html>

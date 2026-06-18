<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Bali Art House</title>
    
    <!-- Premium Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
    
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
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.8) 100%);
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
        }

        .login-form-wrapper {
            width: 100%;
            max-width: 440px;
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            padding: 3rem 2.5rem;
            border-radius: 4px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.4);
        }
        
        .logo-header {
            text-align: center;
            margin-bottom: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-header h2 {
            font-family: var(--font-heading);
            font-size: 1.6rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 5px;
            color: var(--text-main);
            margin-bottom: 0.1rem;
            line-height: 1;
        }

        .logo-header p {
            font-size: 0.7rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: var(--primary-color);
        }

        .admin-badge {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.3rem 0.8rem;
            background: var(--sidebar-bg);
            color: #fff;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 2px;
        }

        .input-group {
            margin-bottom: 1.5rem;
        }

        .input-group label {
            display: block;
            color: var(--text-main);
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 0.5rem;
        }

        .input-group input {
            width: 100%;
            padding: 0.8rem 1rem;
            background: rgba(250, 250, 249, 0.9);
            border: 1px solid rgba(0,0,0,0.15);
            font-size: 0.95rem;
            font-family: var(--font-body);
            color: var(--text-main);
            transition: var(--transition-fast);
            border-radius: 0;
        }

        .input-group input:focus {
            outline: none;
            border-color: var(--primary-color);
            background: #ffffff;
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
            transition: var(--transition-fast);
            font-weight: 600;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            color: var(--primary-color);
            border-color: var(--primary-color);
            background: transparent;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 12px;
            margin-bottom: 1.5rem;
            border: 1px solid #f5c6cb;
            text-align: center;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

<div class="login-content">
    <div class="login-form-wrapper">
        <div class="logo-header">
            <h2>BALI</h2>
            <p>ART HOUSE</p>
            <span class="admin-badge">Secure Admin Panel</span>
        </div>

        <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>

        <form action="<?= base_url('admin/login/submit') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" required placeholder="Masukkan username admin">
            </div>
            
            <div class="input-group">
                <label>Kata Sandi</label>
                <input type="password" name="password" required placeholder="••••••••">
            </div>

            <button type="submit" class="btn-submit">
                Masuk Sistem
            </button>
        </form>
    </div>
</div>

</body>
</html>

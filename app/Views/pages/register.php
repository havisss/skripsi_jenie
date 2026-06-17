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
            min-height: 100vh;
            font-family: var(--font-body);
            background-color: var(--bg-color);
            background-image: url('<?= base_url("images/login_hero_1781631706752.png") ?>');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.7) 100%);
            z-index: 1;
        }

        .auth-card {
            position: relative;
            z-index: 10;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: var(--border-gold);
            padding: 3rem 2.5rem;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            text-align: center;
            margin: 2rem 1rem;
        }

        .auth-logo {
            width: 50px;
            height: 50px;
            fill: var(--primary-color);
            margin-bottom: 1rem;
        }

        .auth-card h1 {
            font-family: var(--font-heading);
            font-size: 1.6rem;
            color: var(--text-color);
            margin-bottom: 0.5rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .auth-card p.subtitle {
            color: var(--text-light);
            font-size: 0.8rem;
            margin-bottom: 2rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        .auth-form {
            text-align: left;
        }

        .auth-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .auth-input-group {
            margin-bottom: 1.2rem;
            position: relative;
        }

        .auth-input-group.full {
            grid-column: 1 / -1;
        }

        .auth-input-group label {
            display: block;
            font-size: 0.75rem;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .auth-input-group input {
            width: 100%;
            padding: 0.8rem 1rem;
            padding-left: 2.8rem;
            border: 1px solid rgba(0,0,0,0.15);
            background: transparent;
            font-size: 0.95rem;
            font-family: var(--font-body);
            outline: none;
            transition: all 0.3s ease;
        }

        .auth-input-group input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 1px var(--primary-color);
        }

        .auth-input-icon {
            position: absolute;
            left: 1rem;
            top: 2.1rem;
            width: 16px;
            height: 16px;
            color: var(--text-light);
        }

        .btn-auth {
            width: 100%;
            padding: 1rem;
            font-size: 0.9rem;
            letter-spacing: 2px;
            margin-top: 1rem;
        }

        .auth-footer {
            margin-top: 1.5rem;
            font-size: 0.85rem;
            color: var(--text-light);
        }

        .auth-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }

        .back-home {
            position: absolute;
            top: 2rem;
            left: 2rem;
            z-index: 10;
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-weight: 500;
            transition: opacity 0.3s;
        }

        .back-home:hover {
            opacity: 0.8;
        }

        @media (max-width: 600px) {
            .auth-grid {
                grid-template-columns: 1fr;
                gap: 0;
            }
            .auth-card {
                padding: 2.5rem 1.5rem;
            }
            .back-home {
                top: 1rem;
                left: 1rem;
            }
        }
    </style>
</head>
<body>

    <a href="<?= base_url('/') ?>" class="back-home">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px;"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        Kembali
    </a>

    <div class="auth-card">
        <svg class="auth-logo" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="10" stroke-width="0.8" />
            <circle cx="12" cy="12" r="8.2" stroke-width="0.5" stroke-dasharray="1.5 1.5" />
            <path d="M12 3.5c.8 2 1.5 3.5 1.5 5S12.8 10 12 10s-1.5-1-1.5-1.5 1.5-3 1.5-5z" stroke-width="0.8" />
            <path d="M12 20.5c.8-2 1.5-3.5 1.5-5s-.7-1.5-1.5-1.5-1.5 1-1.5 1.5 1.5 3 1.5 5z" stroke-width="0.8" />
            <path d="M3.5 12c2 .8 3.5 1.5 5 1.5s1.5-.7 1.5-1.5-1-1.5-1.5-1.5-3 1.5-5 1.5z" stroke-width="0.8" />
            <path d="M20.5 12c-2 .8-3.5 1.5-5 1.5s-1.5-.7-1.5-1.5 1-1.5 1.5-1.5 3 1.5 5 1.5z" stroke-width="0.8" />
            <circle cx="12" cy="12" r="1.2" fill="currentColor" />
        </svg>

        <h1>Pendaftaran Baru</h1>
        <p class="subtitle">Bergabung untuk koleksi eksklusif</p>

        <form action="<?= base_url('/login') ?>" method="GET" class="auth-form">
            <div class="auth-grid">
                <div class="auth-input-group">
                    <label>Nama Depan</label>
                    <svg class="auth-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <input type="text" placeholder="John" required>
                </div>
                
                <div class="auth-input-group">
                    <label>Nama Belakang</label>
                    <svg class="auth-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    <input type="text" placeholder="Doe" required>
                </div>

                <div class="auth-input-group full">
                    <label>Email</label>
                    <svg class="auth-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <input type="email" placeholder="nama@email.com" required>
                </div>

                <div class="auth-input-group">
                    <label>Kata Sandi</label>
                    <svg class="auth-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    <input type="password" placeholder="••••••••" required>
                </div>

                <div class="auth-input-group">
                    <label>Ulangi Sandi</label>
                    <svg class="auth-input-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                    <input type="password" placeholder="••••••••" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-auth">BUAT AKUN SAYA</button>
        </form>

        <div class="auth-footer">
            Sudah punya akun? <a href="<?= base_url('/login') ?>">Masuk di sini</a>
        </div>
    </div>

</body>
</html>

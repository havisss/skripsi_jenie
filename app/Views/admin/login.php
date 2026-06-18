<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Skripsi Jenie</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <h2>Admin Panel</h2>
            <?php if(session()->getFlashdata('msg')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <form action="<?= base_url('admin/login/submit') ?>" method="POST">
                <?= csrf_field() ?>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" required placeholder="Masukkan username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required placeholder="Masukkan password">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 16px; padding: 12px; font-size: 16px;">Login</button>
            </form>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Request Password Reset</title>
</head>
<body>
    <h1>Request Password Reset</h1>
    <?php if (session()->get('error')): ?>
        <p style="color: red;"><?= session()->get('error') ?></p>
    <?php endif; ?>
    <?php if (session()->get('success')): ?>
        <p style="color: green;"><?= session()->get('success') ?></p>
    <?php endif; ?>
    
    <form action="<?= base_url('password/request') ?>" method="post">
        <?= csrf_field() ?>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <button type="submit">Kirim Link Reset Password</button>
    </form>
</body>
</html>

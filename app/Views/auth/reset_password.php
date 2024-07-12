<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <form action="<?= base_url('password/update') ?>" method="post">
    <?= csrf_field() ?>
        <input type="hidden" name="token" value="<?= $token ?>">
        <label for="password">Password Baru:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Reset Password</button>
    </form>
    <?= session()->getFlashdata('success') ?>
    <?= session()->getFlashdata('error') ?>
</body>
</html>

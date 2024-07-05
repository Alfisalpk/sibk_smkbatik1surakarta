<!-- reset_password.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>

    <form action="/password/update" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="token" value="<?= $token ?>"><br>

        <label for="password">New Password</label>
        <input type="password" name="password" required><br>

        <button type="submit">Reset Password</button>
    </form>
</body>
</html>

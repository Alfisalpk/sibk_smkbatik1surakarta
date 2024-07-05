<!-- request_reset.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Request Password Reset</title>
</head>
<body>
    <h1>Request Password Reset</h1>

    <?php if (session()->get('error')) : ?>
        <p style="color: red;"><?= session()->get('error') ?></p>
    <?php endif; ?>

    <?php if (session()->get('success')) : ?>
        <p style="color: green;"><?= session()->get('success') ?></p>
    <?php endif; ?>

    <form action="/password/request" method="post">
        <?= csrf_field() ?>
        <label for="email">Email</label>
        <input type="email" name="email" required><br>
        <button type="submit">Send Reset Link</button>
    </form>
</body>
</html>

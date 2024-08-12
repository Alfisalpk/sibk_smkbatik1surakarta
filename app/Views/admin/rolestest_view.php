<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <style>
        pre {
            background-color: #f8f9fa;
            padding: 15px;
            border: 1px solid #e1e1e1;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Categories</h1>
    <pre>
        <?php print_r($results); ?>
    </pre>

    <form action="<?= base_url('admin/storeGuru') ?>" method="post">
          <label for="role">Peran</label>
          <select id="role" name="role">
    <?php if (isset($results) && is_array($results)): ?>
            <?php foreach ($results as $role): ?>
                <option value="<?= $role['id']; ?>"><?= $role['role']; ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
        </select>
    <label for="username">Username</label>
    <input type="text" name="username" required>
    
    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <label for="full_name">Nama Lengkap</label>
    <input type="text" name="full_name" required>
    
    <label for="nip">NIP</label>
    <input type="text" name="nip">
    
    <label for="birth_place">Tempat Lahir</label>
    <input type="text" name="birth_place">

    <label for="birth_date">Tanggal Lahir</label>
    <input type="date" name="birth_date">

    <label for="phone">Telepon</label>
    <input type="text" name="phone">

    <label for="address">Alamat</label>
    <textarea name="address"></textarea>

    <label for="religion">Agama</label>
    <input type="text" name="religion">

    <label for="gender">Jenis Kelamin</label>
    <select name="gender">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>

    <label for="subject">Mata Pelajaran</label>
    <input type="text" name="subject">


    <button type="submit">Daftarkan Guru</button>
</form>
</body>
</html>

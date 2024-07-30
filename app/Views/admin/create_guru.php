

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftarkan Guru Baru</h1>

<form action="<?= base_url('admin/storeGuru') ?>" method="post">
    <label for="role">Peran</label>
    <select id="role" name="role">
            <?php if (!empty($data) && is_array($data)): ?>
                <?php foreach ($data as $role): ?>
                    <option value="<?= esc($role['id']); ?>">
                        <?= esc($role['role']); ?>
                    </option>
                <?php endforeach; ?>
            <?php else: ?>
                <option value="">No roles available</option>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Guru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Guru</h2>
        <form action="<?= base_url('admin/update_guru/' . $guru['id']) ?>" method="post">
            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="<?= $guru['role'] ?>" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $guru['username'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $guru['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password (kosongkan jika tidak diubah)</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" value="<?= $guru['nip'] ?>" required>
            </div>
            <div class="form-group">
                <label for="nama_panggilan">Nama Panggilan</label>
                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan" value="<?= $guru['nama_panggilan'] ?>" required>
            </div>
            <div class="form-group">
                <label for="jurusan_pengampu">Jurusan Pengampu</label>
                <input type="text" class="form-control" id="jurusan_pengampu" name="jurusan_pengampu" value="<?= $guru['jurusan_pengampu'] ?>" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $guru['tempat_lahir'] ?>" required>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $guru['tgl_lahir'] ?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-Laki" <?= $guru['jenis_kelamin'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
                    <option value="Perempuan" <?= $guru['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select class="form-control" id="agama" name="agama" required>
                    <option value="Islam" <?= $guru['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                    <option value="Kristen" <?= $guru['agama'] == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                    <option value="Katolik" <?= $guru['agama'] == 'Katolik' ? 'selected' : '' ?>>Katolik</option>
                    <option value="Hindu" <?= $guru['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                    <option value="Budha" <?= $guru['agama'] == 'Budha' ? 'selected' : '' ?>>Budha</option>
                    <option value="Konghucu" <?= $guru['agama'] == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="text" class="form-control" id="no_telepon" name="no_telepon" value="<?= $guru['no_telepon'] ?>" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required><?= $guru['alamat'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>

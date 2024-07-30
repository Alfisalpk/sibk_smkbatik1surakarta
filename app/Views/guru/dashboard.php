<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Guru</h1>
<a href="<?= base_url('guru/edit/'.$guruData['id']) ?>">Edit Data</a>

<table>
    <tr>
        <th>Nama Lengkap</th>
        <td><?= $guruData['full_name'] ?></td>
    </tr>
    <tr>
        <th>NIP</th>
        <td><?= $guruData['nip'] ?></td>
    </tr>
    <tr>
        <th>Tempat Lahir</th>
        <td><?= $guruData['birth_place'] ?></td>
    </tr>
    <tr>
        <th>Tanggal Lahir</th>
        <td><?= $guruData['birth_date'] ?></td>
    </tr>
    <tr>
        <th>Telepon</th>
        <td><?= $guruData['phone'] ?></td>
    </tr>
    <tr>
        <th>Alamat</th>
        <td><?= $guruData['address'] ?></td>
    </tr>
    <tr>
        <th>Agama</th>
        <td><?= $guruData['religion'] ?></td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td><?= $guruData['gender'] ?></td>
    </tr>
    <tr>
        <th>Mata Pelajaran</th>
        <td><?= $guruData['subject'] ?></td>
    </tr>
</table>
</body>
</html>
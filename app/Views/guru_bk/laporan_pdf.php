<!DOCTYPE html>  
<html lang="id">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Laporan Bimbingan Konseling</title>  
    <style>  
        @media print {  
            @page {  
                size: A4; /* Ukuran A4 */  
                margin: 20mm; /* Margin halaman */  
            }  
            body {  
                margin: 0; /* Menghilangkan margin default */  
            }  
        }  
  
        /* body {  
            font-family: Arial, sans-serif;  
        }   */
        body {  
            font-family: 'Times New Roman', Times, serif;  
        }  
  
        h2, h3, h4, h5 {  
            margin: 0;  
        }  
  
        .container {  
            width: 100%;  
            padding: 20px;  
        }  
  
        .header {  
            width: 100%;  
            display: table;  
            margin-bottom: 20px;  
        }  
  
        .header-left {  
            display: table-cell;  
            width: 20%;  
            vertical-align: top;  
        }  
  
        .header-center {  
            display: table-cell;  
            width: 70%;  
            text-align: center;  
            vertical-align: top;  
        }  
  
        .header-right {  
            display: table-cell;  
            width: 20%;  
            text-align: right;  
            vertical-align: top;  
        }  
  
        .header img {  
            width: 100px; /* Sesuaikan ukuran gambar */  
            height: auto;  
            margin-right: 1px; /* Jarak antara gambar dan teks */  
        }  
  
        .header-right img {  
            width: 130px; /* Sesuaikan ukuran gambar kanan */  
            height: auto;  
            margin-left: 1px; /* Jarak antara teks dan gambar kanan */  
        }  
  
        hr {  
            border: none; /* Menghilangkan border default */  
            height: 5px; /* Ketebalan garis */  
            background-color: black; /* Warna garis */  
            margin: 20px 0; /* Jarak atas dan bawah garis */  
        }  
  
        .table {  
            width: 100%;  
            border-collapse: collapse;  
            margin-top: 20px;  
        }  
  
        .table td {  
            vertical-align: middle;  
            padding: 10px;  
            border: 1px solid #000;  
        }  
  
        .signature {  
            width: 100%;  
            display: table;  
            margin-top: 10px;  
        }  
  
        .signature-left {  
            display: table-cell;  
            width: 20%;  
            vertical-align: top;  
        }  
  
        .signature-right {  
            display: table-cell;  
            width: 80%;  
            text-align: right;  
            vertical-align: top;  
        }  
  
        .signature-bottom {  
            width: 100%;  
            text-align: center;  
            margin-top: 10px;  
        }  
  
        .spacing {  
            margin-bottom: 75px; /* Jarak bawah untuk kelas ini */  
        }  
  
        .spacingalamat {  
            margin-bottom: auto; /* Jarak bawah untuk kelas ini */  
        }  
  
        .text-center {  
            text-align: center;  
        }  
  
        .mt-4 {  
            margin-top: 1.5rem;  
        }  
  
        .mb-3 {  
            margin-bottom: 1rem;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <?php foreach ($bimbingan as $row): ?>  
            <div class="header">  
                <div class="header-left">  
                <img src="data:image/png;base64,<?= base64_encode(file_get_contents(FCPATH . '/assets/img/ypb.jpg')) ?>" alt="Yayasan Pendidikan Batik">  
                </div>  
                <div class="header-center">  
                    <h3 class="text-center">YAYASAN PENDIDIKAN BATIK SURAKARTA</h3>  
                    <h3 class="text-center">SMK BATIK I SURAKARTA</h3>  
                    <h3 class="text-center">(TERAKREDITASI "A")</h3>  
                    <p class="text-center spacingalamat">Jl. Slamet Riyadi - Kleco Surakarta 51746</p>  
                    <p class="text-center">Telp/Fax (0271) 711325/729939</p>  
                </div>  
                <div class="header-right">  
                <img src="data:image/png;base64,<?= base64_encode(file_get_contents(FCPATH . '/assets/img/smkbatik1surakarta.png')) ?>" alt="Yayasan Pendidikan Batik">
                </div>  
            </div>  
            <hr>  
            <h4 class="text-center mt-4">LAPORAN PELAKSANAAN LAYANAN KONSELING INDIVIDU</h4>  
            <h4 class="text-center">TAHUN PELAJARAN 2025 / 2026</h4>  
  
            <table class="table table-bordered mt-4">  
                <tbody>  
                    <tr>  
                        <td>1. Nama Konseli</td>  
                        <td><?= esc($row['username']) ?></td>  
                    </tr>  
                    <tr>  
                        <td>2. Kelas / Jurusan</td>  
                        <td><?= esc($row['kelas']) . ' / ' . esc($row['jurusan']) ?></td>  
                    </tr>  
                    <tr>  
                        <td>3. Tanggal</td>  
                        <td><?= esc($row['tanggal']) ?></td>  
                    </tr>  
                    <tr>  
                        <td>4. Pertemuan Ke</td>  
                        <td><?= esc($row['pertemuan_ke']) ?></td>  
                    </tr>  
                    <tr>  
                        <td>5. Waktu</td>  
                        <td><?= esc($row['waktu']) ?></td>  
                    </tr>  
                    <tr>  
                        <td>6. Tempat</td>  
                        <td><?= esc($row['tempat']) ?></td>  
                    </tr>  
                    <tr>  
                        <td>7. Permasalahan</td>  
                        <td><?= esc($row['permasalahan']) ?></td>  
                    </tr>  
                    <tr>  
                        <td>8. Hasil Yang Dicapai</td>  
                        <td><?= esc($row['hasil']) ?></td>  
                    </tr>  
                </tbody>  
            </table>  
  
            <div class="signature">  
                <div class="signature-left">  
                    <p class="spacing">WKS Kesiswaan</p>  
                    <p>Nur Arijati, S. Pd., M. Pd</p>  
                    <p>NIK: 176 195 777</p>  
                </div>  
                <div class="signature-right">  
                    <p>Surakarta, <?= esc(date('d F Y')) ?></p>  
                    <p class="spacing">Guru BK/Konselor</p>  
                    <p>NIK/P: -</p>  
                </div>  
            </div>  
  
            <div class="signature-bottom">  
                <p class="spacing">Kepala SMK Batik 1 Surakarta</p>  
                <p>Dr. Pris Priyanto, S. Kom., M. Kom</p>  
                <p>NIP: 19730213 200501 1 005</p>  
            </div>  
  
            <?php if ($row !== end($bimbingan)): ?>  
                <div style="page-break-after: always;"></div>  
            <?php endif; ?>  
        <?php endforeach; ?>  
    </div>  
</body>  
</html>  

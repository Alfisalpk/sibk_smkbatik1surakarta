<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Siswa Terdaftar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Dasboard Admin Start -->
  <section class="content">
  <!-- Small Box (Stat card) -->
  <body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="text-center">Data Siswa</h4>
            </div>
            <div class="card-body">
                <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addSiswaModal">Tambah Siswa</button> -->
                <div class="table-responsiveku">
                <table id="example2" class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 50vh;">NISN</th>
                            <th scope="col" style="width: 100vh;">Nama Lengkap</th>
                            <th scope="col" style="width: 100vh;">Nama Orang Tua</th>
                            <th scope="col" style="width: 100vh;">Kelas</th>
                            <th scope="col" style="width: 10vh;">Jenis Kelamin</th>
                            <th scope="col" style="width: 10vh;">Agama</th>
                            <th scope="col" style="width: 100vh;">Nomor WA Siswa</th>
                            <th scope="col" style="width: 100vh;">Nomor WA Orang Tua</th>
                            <th scope="col" style="width: 100vh;">Tempat Tanggal Lahir</th>
                            <th scope="col" style="width: 100vh;">Alamat</th>
                            <th scope="col" style="width: 100vh;">Email</th>
                            <th scope="col" style="width: 100vh;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswa as $s): ?>
                        <tr>
                            <th scope="row"><?= $s['nisn'] ?></th>
                            <td><?= $s['username'] ?></td>
                            <td><?= $s['nama_orangtua'] ?></td>
                            <td><?= $s['kelas'] ?> <?= $s['jurusan'] ?></td>
                            <td><?= $s['jenis_kelamin'] ?></td>
                            <td><?= $s['agama'] ?></td>
                            <td><?= $s['nomor_wa'] ?></td>
                            <td><?= $s['nomor_wa_ortu'] ?></td>
                            <td><?= $s['tempat_lahir'] ?>, <?= $s['tgl_lahir'] ?></td>
                            <td><?= $s['alamat'] ?></td>
                            <td><?= $s['email'] ?></td>
                            <td>
                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#editSiswaModal" data-daftarnisnsiswa-id="<?= $s['id'] ?>" data-daftarnisnsiswa-nisn="<?= $s['nisn'] ?>" data-daftarnisnsiswa-nama_lengkap="<?= $s['nama_lengkap'] ?>" data-daftarnisnsiswa-kelas="<?= $s['kelas'] ?>" data-daftarnisnsiswa-jurusan="<?= $s['jurusan'] ?>" data-daftarnisnsiswa-nama_orangtua="<?= $s['nama_orangtua'] ?>" data-daftarnisnsiswa-jenis_kelamin="<?= $s['jenis_kelamin'] ?>" data-daftarnisnsiswa-agama="<?= $s['agama'] ?>" data-daftarnisnsiswa-nomor_wa="<?= $s['nomor_wa'] ?>" data-daftarnisnsiswa-nomor_wa_ortu="<?= $s['nomor_wa_ortu'] ?>" data-daftarnisnsiswa-tempat_lahir="<?= $s['tempat_lahir'] ?>" data-daftarnisnsiswa-tgl_lahir="<?= $s['tgl_lahir'] ?>" data-daftarnisnsiswa-alamat="<?= $s['alamat'] ?>" data-daftarnisnsiswa-email="<?= $s['email'] ?>">
                                    <i class="fas fa-pen-to-square"></i>
                                </button>
                                <button type="button" class="btn btn-outline-danger delete-btn" data-toggle="modal" data-target="#hapusSiswaModal" data-daftarnisnsiswa-id="<?= $s['id'] ?>">
                                    <i class="fas fa-trash-can"></i>
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Siswa -->
    <div class="modal fade" id="addSiswaModal" tabindex="-1" role="dialog" aria-labelledby="addSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSiswaModalLabel">Tambah Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="tambahSiswaForm" action="/admin/tambah_siswa" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="number" class="form-control" id="nisn" name="nisn" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_orangtua">Nama Orang Tua</label>
                            <input type="text" class="form-control" id="nama_orangtua" name="nama_orangtua" required>
                        </div>
                        <div class="form-group">
                        <select style="font-size: 13px" class="form-select form-select-sm form-control" aria-label="Small select example" id="kelas" name="kelas" required>
                                    <option value="" disabled selected>Jurusan</option>
                                        <option value="TKJ 1">TKJ 1</option>
                                        <option value="TKJ 2">TKJ 2</option>
                                        <option value="TKJ 3">TKJ 3</option>
                                        <option value="TKJ 4">TKJ 4</option>
                                        <option value="Farmasi">Farmasi</option>
                                        <option value="DKV 1">DKV 1</option>
                                        <option value="DKV 2">DKV 2</option>
                                        <option value="DKV 3">DKV 3</option>
                                        <option value="OTKP 1">OTKP 1</option>
                                        <option value="OTKP 2">OTKP 2</option>
                                        <option value="OTKP 3">OTKP 3</option>
                                        <option value="BDP 1">BDP 1</option>
                                        <option value="BDP 2">BDP 2</option>
                                        <option value="BDP 3">BDP 3</option>
                                        <option value="AKL 1">AKL 1</option>
                                        <option value="AKL 2">AKL 2</option>
                                        <option value="AKL 3">AKL 3</option>
                                        
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" class="form-control" id="agama" name="agama" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_wa">Nomor WA Siswa</label>
                            <input type="text" class="form-control" id="nomor_wa" name="nomor_wa" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_wa_ortu">Nomor WA Orang Tua</label>
                            <input type="text" class="form-control" id="nomor_wa_ortu" name="nomor_wa_ortu" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Siswa -->
    <div class="modal fade" id="editSiswaModal" tabindex="-1" role="dialog" aria-labelledby="editSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSiswaModalLabel">Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editSiswaForm" action="/admin/edit_siswa" method="post">
                    <input type="hidden" name="id" id="edit_id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_nisn">NISN</label>
                            <input type="number" class="form-control" id="edit_nisn" name="nisn" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="edit_nama_lengkap" name="nama_lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_nama_orangtua">Nama Orang Tua</label>
                            <input type="text" class="form-control" id="edit_nama_orangtua" name="nama_orangtua" required>
                        </div>
                        <div class="form-group">
                        <label for="edit_kelas">Jenis Kelamin</label>
                            <select class="form-control" id="edit_kelas" name="kelas" required>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_jurusan">Jurusan</label>
                            <select class="form-control" id="edit_jurusan" name="jurusan" required>
                                <option value="TKJ 1">TKJ 1</option>
                                <option value="TKJ 2">TKJ 2</option>
                                <option value="TKJ 3">TKJ 3</option>
                                <option value="TKJ 4">TKJ 4</option>
                                <option value="Farmasi">Farmasi</option>
                                <option value="DKV 1">DKV 1</option>
                                <option value="DKV 2">DKV 2</option>
                                <option value="DKV 3">DKV 3</option>
                                <option value="OTKP 1">OTKP 1</option>
                                <option value="OTKP 2">OTKP 2</option>
                                <option value="OTKP 3">OTKP 3</option>
                                <option value="BDP 1">BDP 1</option>
                                <option value="BDP 2">BDP 2</option>
                                <option value="BDP 3">BDP 3</option>
                                <option value="AKL 1">AKL 1</option>
                                <option value="AKL 2">AKL 2</option>
                                <option value="AKL 3">AKL 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="edit_jenis_kelamin" name="jenis_kelamin" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_agama">Agama</label>
                            <select class="form-control" id="edit_agama" name="agama" required>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_nomor_wa">Nomor WA Siswa</label>
                            <input type="number" class="form-control" id="edit_nomor_wa" name="nomor_wa" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_nomor_wa_ortu">Nomor WA Orang Tua</label>
                            <input type="number" class="form-control" id="edit_nomor_wa_ortu" name="nomor_wa_ortu" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="edit_tempat_lahir" name="tempat_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="edit_tgl_lahir" name="tgl_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_alamat">Alamat</label>
                            <textarea class="form-control" id="edit_alamat" name="alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="edit_email">Email</label>
                            <input type="email" class="form-control" id="edit_email" name="email" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Siswa -->
    <div class="modal fade" id="hapusSiswaModal" tabindex="-1" role="dialog" aria-labelledby="hapusSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hapusSiswaModalLabel">Hapus Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="hapusSiswaForm" action="/admin/hapus_siswa" method="post">
                    <input type="hidden" name="id" id="hapus_id">
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus siswa ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
</section>


  <?= $this->endSection(); ?>
  
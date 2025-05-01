<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bimbingan Konseling</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Dasboard Admin Start -->
  <section class="content">

  <body>
  <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="text-center">Data Bimbingan Konseling</h4>
            </div>
            <div class="card-body">
                <?php if (session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?= session('success') ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?= session('error') ?>
                    </div>
                <?php endif; ?>
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal">
            Tambah Bimbingan Konseling
        </button>

                <div class="table-responsiveku">
                <table id="example3" class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th style="width: 25vh;">Nama Siswa</th>
                    <th style="width: 5vh;">Kelas</th>
                    <th style="width: 5vh;">Jurusan</th>
                    <th style="width: 10vh;">Tanggal</th>
                    <th style="width: 5vh;">Waktu</th>
                    <th style="width: 10vh;">Tempat</th>
                    <th style="width: 5vh;">Pertemuan Ke</th>
                    <th style="width: 20vh;">Permasalahan</th>
                    <th style="width: 50vh;">Hasil</th>
                    <th style="width: 10vh;">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($bimbingan_konseling as $bimbingan): ?>
                    <tr>
                        <td><?= $bimbingan['username'] ?></td>
                        <td><?= $bimbingan['kelas'] ?></td>
                        <td><?= $bimbingan['jurusan'] ?></td>
                        <td><?= $bimbingan['tanggal'] ?></td>
                        <td><?= $bimbingan['waktu'] ?></td>
                        <td><?= $bimbingan['tempat'] ?></td>
                        <td><?= $bimbingan['pertemuan_ke'] ?></td>
                        <td><?= $bimbingan['permasalahan'] ?></td>
                        <td><?= $bimbingan['hasil'] ?></td>
                        <td>
                            <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#editModal" data-id="<?= $bimbingan['id_bimbingankonseling'] ?>" data-user-id="<?= $bimbingan['user_id'] ?>" data-tanggal="<?= $bimbingan['tanggal'] ?>" data-pertemuan-ke="<?= $bimbingan['pertemuan_ke'] ?>" data-waktu="<?= $bimbingan['waktu'] ?>" data-tempat="<?= $bimbingan['tempat'] ?>" data-permasalahan="<?= $bimbingan['permasalahan'] ?>" data-hasil="<?= $bimbingan['hasil'] ?>">
                            <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="BKdeleteBimbinganKonseling(<?= $bimbingan['id_bimbingankonseling'] ?>)">
                            <i class="fa-regular fa-trash-can"></i>
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

    <!-- The Modal for Adding Bimbingan Konseling -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Bimbingan Konseling</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="BKaddForm">
                        <div class="form-group">
                            <label for="user_id">Nama Siswa:</label>
                            <select name="user_id" id="user_id" class="form-control">
                                <?php foreach ($users as $user): ?>
                                    <option value="<?= $user['id'] ?>"><?= $user['username'] ?> (Kelas: <?= $user['kelas'] ?>, Jurusan: <?= $user['jurusan'] ?>)</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="pertemuan_ke">Pertemuan Ke:</label>
                            <input type="number" name="pertemuan_ke" id="pertemuan_ke" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu:</label>
                            <input type="time" name="waktu" id="waktu" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat:</label>
                            <input type="text" name="tempat" id="tempat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="permasalahan">Permasalahan:</label>
                            <textarea name="permasalahan" id="permasalahan" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="hasil">Hasil:</label>
                            <textarea name="hasil" id="hasil" class="form-control" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="BKaddBimbinganBtn">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- The Modal for Editing Bimbingan Konseling -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Bimbingan Konseling</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="BKeditForm">
                        <input type="hidden" name="id_bimbingankonseling" id="id_bimbingankonseling">
                        <div class="form-group">
                            <label for="user_id">Nama Siswa:</label>
                            <select name="user_id" id="edit_user_id" class="form-control">
                                <?php foreach ($users as $user): ?>
                                    <option value="<?= $user['id'] ?>"><?= $user['username'] ?> (Kelas: <?= $user['kelas'] ?>, Jurusan: <?= $user['jurusan'] ?>)</option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal:</label>
                            <input type="date" name="tanggal" id="edit_tanggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="pertemuan_ke">Pertemuan Ke:</label>
                            <input type="number" name="pertemuan_ke" id="edit_pertemuan_ke" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu:</label>
                            <input type="time" name="waktu" id="edit_waktu" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tempat">Tempat:</label>
                            <input type="text" name="tempat" id="edit_tempat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="permasalahan">Permasalahan:</label>
                            <textarea name="permasalahan" id="edit_permasalahan" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="hasil">Hasil:</label>
                            <textarea name="hasil" id="edit_hasil" class="form-control" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="BKeditBimbinganBtn">Simpan</button>
                </div>
            </div>
        </div>
    </div>



  </div>
</section>


  <?= $this->endSection(); ?>
  
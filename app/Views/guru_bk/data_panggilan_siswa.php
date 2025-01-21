<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Riwayat Panggilan Siswa</h1>
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
  <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="text-center">Data Panggilan Siswa</h4>
            </div>
            <div class="card-body">
            <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModalBKPanggilan">Tambah Panggilan Siswa</button>  
                <div class="table-responsiveku">
                <table id="example2" class="table table-hover table-bordered table-responsive">
                   <thead>  
                <tr>  
                    <th style="width: 5vh;">ID</th>  
                    <th style="width: 25vh;">Nama Siswa</th>  
                    <th style="width: 10vh;">Kelas</th>  
                    <th style="width: 10vh;">Jurusan</th>  
                    <th style="width: 15vh;">Tanggal</th>  
                    <th style="width: 10vh;">Jam Ke</th>  
                    <th style="width: 10vh;">Keperluan</th>  
                    <th style="width: 10vh;">Tempat</th>  
                    <th style="width: 50vh;">Hasil Panggilan</th>  
                    <th style="width: 10vh;">Aksi</th>  
                </tr>  
            </thead> 
            <tbody>  
                <?php foreach ($panggilan_siswa as $panggilan): ?>  
                    <tr>  
                        <td><?= $panggilan['id_panggilansiswa'] ?></td>  
                        <td><?= $panggilan['username'] ?></td>  
                        <td><?= $panggilan['kelas'] ?></td>  
                        <td><?= $panggilan['jurusan'] ?></td>  
                        <td><?= $panggilan['tanggal'] ?></td>  
                        <td><?= $panggilan['jam_ke'] ?></td>  
                        <td><?= $panggilan['keperluan'] ?></td>  
                        <td><?= $panggilan['tempat'] ?></td>  
                        <td><?= $panggilan['hasil_panggilan'] ?></td>  
                        <td>  
                            <button type="button" class="btn btn-outline-warning BKPanggilaneditBtn" data-id="<?= $panggilan['id_panggilansiswa'] ?>">
                            <i class="fas fa-pen-to-square"></i>
                            </button>  
                            <button type="button" class="btn btn-outline-danger BKPanggilandeleteBtn" data-id="<?= $panggilan['id_panggilansiswa'] ?>">
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
  
    <!-- Modal Tambah -->  
    <div class="modal fade" id="addModalBKPanggilan" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">  
        <div class="modal-dialog" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title" id="addModalLabel">Tambah Panggilan Siswa</h5>  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <form id="BKPanggilanaddForm">  
                    <div class="modal-body">  
                        <div class="form-group">  
                            <label for="user_id">Nama Siswa</label>  
                            <select class="form-control" id="user_id" name="user_id" required>  
                                <option value="">Pilih Siswa</option>  
                                <?php foreach ($users as $user): ?>  
                                    <option value="<?= $user['id'] ?>"><?= $user['username'] ?> (<?= $user['kelas'] ?> <?= $user['jurusan'] ?>)</option>  
                                <?php endforeach; ?>  
                            </select>  
                        </div>  
                        <div class="form-group">  
                            <label for="tanggal">Tanggal</label>  
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="jam_ke">Jam Ke</label>  
                            <input type="text" class="form-control" id="jam_ke" name="jam_ke" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="keperluan">Keperluan</label>  
                            <input type="text" class="form-control" id="keperluan" name="keperluan" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="tempat">Tempat</label>  
                            <input type="text" class="form-control" id="tempat" name="tempat" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="hasil_panggilan">Hasil Panggilan</label>  
                            <textarea class="form-control" id="hasil_panggilan" name="hasil_panggilan" rows="3"></textarea>  
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
  
    <!-- Modal Edit -->  
    <div class="modal fade" id="BKPanggilaneditModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">  
        <div class="modal-dialog modal-dialog-centered" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title" id="editModalLabel">Edit Panggilan Siswa</h5>  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <form id="BKPanggilaneditForm">  
                    <input type="hidden" id="edit_id_panggilansiswa" name="id_panggilansiswa">  
                    <div class="modal-body">  
                        <div class="form-group">  
                            <label for="edit_user_id">Nama Siswa</label>  
                            <select class="form-control" id="edit_user_id" name="user_id" required>  
                                <option value="">Pilih Siswa</option>  
                                <?php foreach ($users as $user): ?>  
                                    <option value="<?= $user['id'] ?>"><?= $user['username'] ?> (<?= $user['kelas'] ?> <?= $user['jurusan'] ?>)</option>  
                                <?php endforeach; ?>  
                            </select>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_tanggal">Tanggal</label>  
                            <input type="date" class="form-control" id="edit_tanggal" name="tanggal" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_jam_ke">Jam Ke</label>  
                            <input type="text" class="form-control" id="edit_jam_ke" name="jam_ke" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_keperluan">Keperluan</label>  
                            <input type="text" class="form-control" id="edit_keperluan" name="keperluan" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_tempat">Tempat</label>  
                            <input type="text" class="form-control" id="edit_tempat" name="tempat" required>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_hasil_panggilan">Hasil Panggilan</label>  
                            <textarea class="form-control" id="edit_hasil_panggilan" name="hasil_panggilan" rows="3"></textarea>  
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
  <!-- End Dashboard End -->  
    

  </div>
</section>
  <?= $this->endSection(); ?>

  
  
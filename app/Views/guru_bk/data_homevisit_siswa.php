<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Guru</h1>
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
                <h4 class="text-center">Data Siswa</h4>
            </div>
            <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#BKKunjungaaddModal">  
            Tambah Kunjungan Rumah  
        </button> 
                <div class="table-responsiveku">
                <table id="example2" class="table table-hover table-bordered">
                <thead>  
                <tr>  
                     
                    <th style="width: 60vh;">Nama Siswa</th>  
                    <th style="width: 10vh;">NISN</th>  
                    <th style="width: 10vh;">Kelas / Jurusan</th>  
                    <th style="width: 45vh;">Nama Orang Tua</th>  
                    <th style="width: 50vh;">Alamat</th>  
                    <th style="width: 80vh;">Permasalahan</th>  
                    <th style="width: 80vh;">Evaluasi</th>  
                    <th style="width: 10vh;">Petugas</th>
                    <th style="width: 20vh;">Aksi</th>  
                </tr>  
            </thead>  
            <tbody>  
                <?php foreach ($kunjungan_siswa as $kunjungan): ?>  
                <tr>  
                    
                <td><?= $kunjungan['username']; ?></td>  
                    <td><?= $kunjungan['nisn']; ?></td>  
                    <td><?= $kunjungan['kelas'] . ' / ' . $kunjungan['jurusan']; ?></td>  
                    <td><?= $kunjungan['nama_orangtua']; ?></td>  
                    <td><?= $kunjungan['alamat']; ?></td>   
                    <td><?= $kunjungan['permasalahan']; ?></td>  
                    <td><?= $kunjungan['evaluasi']; ?></td>  
                    <td><?= $kunjungan['yang_melaksanakan']; ?></td>  
                    
                    
                    <td>  
                    <!-- <button type="button" class="btn btn-info btn-sm BKVisitdetail-btn" data-id="<?= $kunjungan['id_kunjungan_siswa']; ?>"  data-id="<?= $kunjungan['id_siswa']; ?> ">Detail</button>   -->
                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#BKVisiteditModal" data-id="<?= $kunjungan['id_kunjungan_siswa']; ?>">  
                        <i class="fas fa-pen-to-square"></i>
                        </button>  
                        <a href="#" class="btn btn-outline-danger delete-btn" data-id="<?= $kunjungan['id_kunjungan_siswa']; ?>">
                        <i class="fas fa-trash-can"></i>
                        </a>  
                    </td>  
                </tr>  
                <?php endforeach; ?>  
            </tbody>  

                </table>
                </div>
            </div>
        </div>
    </div>
  
     <!-- Modal Detail -->  
<div class="modal fade" id="BKDetailModal" tabindex="-1" role="dialog" aria-labelledby="BKDetailModalLabel" aria-hidden="true">  
    <div class="modal-dialog modal-lg" role="document">  
        <div class="modal-content">  
            <div class="modal-header">  
                <h5 class="modal-title" id="BKDetailModalLabel">Detail Kunjungan Rumah</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                    <span aria-hidden="true">&times;</span>  
                </button>  
            </div>  
            <div class="modal-body">  
                <div class="form-group">  
                    <label for="BKDetail_id_siswa">Nama Siswa:</label>  
                    <input type="text" id="BKDetail_id_siswa" class="form-control" readonly>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_nisn">NISN:</label>  
                    <input type="text" id="BKDetail_nisn" class="form-control" readonly>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_kelas_jurusan">Kelas / Jurusan:</label>  
                    <input type="text" id="BKDetail_kelas_jurusan" class="form-control" readonly>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_nama_orangtua">Nama Orang Tua:</label>  
                    <input type="text" id="BKDetail_nama_orangtua" class="form-control" readonly>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_alamat">Alamat:</label>  
                    <textarea id="BKDetail_alamat" class="form-control" readonly></textarea>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_permasalahan">Permasalahan:</label>  
                    <textarea id="BKDetail_permasalahan" class="form-control" readonly></textarea>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_latar_belakang_sosial_ekonomi">Latar Belakang Sosial Ekonomi:</label>  
                    <textarea id="BKDetail_latar_belakang_sosial_ekonomi" class="form-control" readonly></textarea>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_faktor_dari_orangtua">Faktor dari Orang Tua:</label>  
                    <textarea id="BKDetail_faktor_dari_orangtua" class="form-control" readonly></textarea>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_kesan_petugas">Kesan Petugas:</label>  
                    <textarea id="BKDetail_kesan_petugas" class="form-control" readonly></textarea>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_rencana_penanganan">Rencana Penanganan:</label>  
                    <textarea id="BKDetail_rencana_penanganan" class="form-control" readonly></textarea>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_evaluasi">Evaluasi:</label>  
                    <textarea id="BKDetail_evaluasi" class="form-control" readonly></textarea>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_apabila_siswa_kost">Apabila Siswa Kost:</label>  
                    <textarea id="BKDetail_apabila_siswa_kost" class="form-control" readonly></textarea>  
                </div>  
                <div class="form-group">  
                    <label for="BKDetail_yang_melaksanakan">Yang Melaksanakan:</label>  
                    <input type="text" id="BKDetail_yang_melaksanakan" class="form-control" readonly>  
                </div>  
            </div>  
            <div class="modal-footer">  
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
            </div>  
        </div>  
    </div>  
</div>  


    <!-- Modal Tambah -->  
    <div class="modal fade" id="BKKunjungaaddModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">  
        <div class="modal-dialog" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title" id="addModalLabel">Tambah Kunjungan Rumah</h5>  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <form action="/guru_bk/homevisit/store" method="post">  
                    <div class="modal-body">  
                        <div class="form-group">  
                            <label for="id_siswa">Nama Siswa:</label>  
                            <select name="id_siswa" id="id_siswa" class="form-control" required>  
                                <option value="">Pilih Siswa</option>  
                                <?php foreach ($users as $user): ?>  
                                    <option value="<?= $user['id']; ?>"><?= $user['username']; ?> (<?= $user['kelas']; ?> <?= $user['jurusan']; ?>)</option>  
                                <?php endforeach; ?>  
                            </select>  
                        </div>  
                        <div class="form-group">  
                            <label for="permasalahan">Permasalahan:</label>  
                            <textarea name="permasalahan" id="permasalahan" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="latar_belakang_sosial_ekonomi">Latar Belakang Sosial Ekonomi:</label>  
                            <textarea name="latar_belakang_sosial_ekonomi" id="latar_belakang_sosial_ekonomi" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="faktor_dari_orangtua">Faktor dari Orang Tua:</label>  
                            <textarea name="faktor_dari_orangtua" id="faktor_dari_orangtua" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="kesan_petugas">Kesan Petugas:</label>  
                            <textarea name="kesan_petugas" id="kesan_petugas" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="rencana_penanganan">Rencana Penanganan:</label>  
                            <textarea name="rencana_penanganan" id="rencana_penanganan" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="evaluasi">Evaluasi:</label>  
                            <textarea name="evaluasi" id="evaluasi" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="apabila_siswa_kost">Apabila Siswa Kost:</label>  
                            <textarea name="apabila_siswa_kost" id="apabila_siswa_kost" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="yang_melaksanakan">Yang Melaksanakan:</label>  
                            <select name="yang_melaksanakan" id="yang_melaksanakan" class="form-control" required>  
                                <option value="Wali Kelas">Wali Kelas</option>  
                                <option value="Guru Pembimbing">Guru Pembimbing</option>  
                            </select>  
                        </div>  
                    </div>  
                    <div class="modal-footer">  
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                        <button type="submit" class="btn btn-primary">Simpan</button>  
                    </div>  
                </form>  
            </div>  
        </div>  
    </div>  
  
    <!-- Modal Edit -->  
    <div class="modal fade" id="BKVisiteditModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">  
        <div class="modal-dialog" role="document">  
            <div class="modal-content">  
                <div class="modal-header">  
                    <h5 class="modal-title" id="editModalLabel">Edit Kunjungan Rumah</h5>  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">  
                        <span aria-hidden="true">&times;</span>  
                    </button>  
                </div>  
                <form id="BKKunjunganeditForm" action="" method="post">  
                    <div class="modal-body">  
                        <input type="hidden" name="id_kunjungan_siswa" id="id_kunjungan_siswa">  
                        <div class="form-group">  
                            <label for="edit_id_siswa">Nama Siswa:</label>  
                            <select name="id_siswa" id="edit_id_siswa" class="form-control" required>  
                                <option value="">Pilih Siswa</option>  
                                <?php foreach ($users as $user): ?>  
                                    <option value="<?= $user['id']; ?>"><?= $user['username']; ?> (<?= $user['nisn']; ?>)</option>  
                                <?php endforeach; ?>  
                            </select>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_permasalahan">Permasalahan:</label>  
                            <textarea name="permasalahan" id="edit_permasalahan" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_latar_belakang_sosial_ekonomi">Latar Belakang Sosial Ekonomi:</label>  
                            <textarea name="latar_belakang_sosial_ekonomi" id="edit_latar_belakang_sosial_ekonomi" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_faktor_dari_orangtua">Faktor dari Orang Tua:</label>  
                            <textarea name="faktor_dari_orangtua" id="edit_faktor_dari_orangtua" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_kesan_petugas">Kesan Petugas:</label>  
                            <textarea name="kesan_petugas" id="edit_kesan_petugas" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_rencana_penanganan">Rencana Penanganan:</label>  
                            <textarea name="rencana_penanganan" id="edit_rencana_penanganan" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_evaluasi">Evaluasi:</label>  
                            <textarea name="evaluasi" id="edit_evaluasi" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_apabila_siswa_kost">Apabila Siswa Kost:</label>  
                            <textarea name="apabila_siswa_kost" id="edit_apabila_siswa_kost" class="form-control" required></textarea>  
                        </div>  
                        <div class="form-group">  
                            <label for="edit_yang_melaksanakan">Yang Melaksanakan:</label>  
                            <select name="yang_melaksanakan" id="edit_yang_melaksanakan" class="form-control" required>  
                                <option value="Wali Kelas">Wali Kelas</option>  
                                <option value="Guru Pembimbing">Guru Pembimbing</option>  
                            </select>  
                        </div>  
                    </div>  
                    <div class="modal-footer">  
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>  
                        <button type="submit" class="btn btn-primary">Update</button>  
                    </div>  
                </form>  
            </div>  
        </div>  
    </div>  
    

  


  </div>
</section>
  <?= $this->endSection(); ?>

  
  
 
 <?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
 <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- Profiles Dashboar Siswa -->
    <section style="background-color: #eee;">
  <div class="container py-1">
    <!-- <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
        </nav>
      </div>
    </div> -->
    
    <div class="row" >
      <div class="col-lg-4">
        <div class="card mb-4 shadow p-3 mb-5 bg-body rounded">
          <div class="card-body text-center">
            
            <img  src="<?= base_url(esc($user->foto)) ?>" style="width: 280px;">
            
            <h5 class="my-3"></h5>
            <p class="text-muted mb-0"><?= esc($user->username); ?></p>
            <p class="text-muted mb-0"><?= esc($user->kelas); ?> <?= esc($user->jurusan); ?></p>
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4 shadow p-3 mb-5 bg-body rounded">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">NISN Siswa</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->nisn); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nama Lengkap</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->username); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nama Orangtua</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->nama_orangtua); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alamat Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->email); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Kelas, Jurusan</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->kelas); ?> <?= esc($user->jurusan); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Jenis Kelamin</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->jenis_kelamin); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Agama</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->agama); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nomor WA Siswa</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->nomor_wa); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Nomor WA Orangtua</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->nomor_wa_ortu); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Tempat, Tanggal Lahir</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->tempat_lahir); ?>, <?= esc($user->tgl_lahir); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Alamat</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->alamat); ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Lulusan Tahun</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?= esc($user->lulusan_tahun); ?></p>
              </div>
            </div>
            <hr>

          </div>
          <button class="btn btn-primary" data-toggle="modal" data-target="#updateModal">Edit Data</button>
        </div>
        <!-- Info Data Siswa -->
      </div>
    </div>
  </div>
  <!-- END Profiles Dashboar Siswa -->
    <!-- Modal Update -->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Update Profil Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('/siswa/updateprofile') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="Nama Lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="username" name="username" required value="<?= esc($user->username); ?>">
                            </div>
                            <div class="form-group">
                                <label for="Nama Orangtua">Nama Orangtua</label>
                                <input type="text" class="form-control" id="username" name="nama_orangtua"  required value="<?= esc($user->nama_orangtua); ?>">
                            </div>
                            <label for="Nama Orangtua">Jenis Kelamin</label>
                            <select class="form-select mb-2" aria-label="Default select example" required name="jenis_kelamin">
                            <option selected disabled><?= esc($user->jenis_kelamin); ?></option>
                              <option value="Laki-Laki">Laki-Laki</option>
                              <option value="Perempuan">Perempuan</option>
                            </select>
                            <label for="Agama">Agama</label>
                            <select class="form-select mb-2" aria-label="Default select example" required name="agama">
                            <option selected disabled><?= esc($user->agama); ?></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            </select>
                            <div class="form-group">
                                <label for="Nomor WA Siswa">Nomor WA Siswa</label>
                                <input type="number" class="form-control" id="username" name="nomor_wa" required value="<?= esc($user->nomor_wa); ?>">
                            </div>
                            <div class="form-group">
                                <label for="Nomor WA Orangtua">Nomor WA Orangtua</label>
                                <input type="number" class="form-control" id="username" name="nomor_wa_ortu" required value="<?= esc($user->nomor_wa_ortu); ?>">
                              </div>
                              <div class="form-group">
                                  <label for="Tempat Lahir">Tempat Lahir</label>
                                  <input type="text" class="form-control" id="username" name="tempat_lahir" required value="<?= esc($user->tempat_lahir); ?>">
                              </div>
                            <div class="form-group">
                                <label for="Tanggal Lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="username" name="tgl_lahir" required value="<?= esc($user->tgl_lahir); ?>">
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" id="username" name="alamat" required value="<?= esc($user->alamat); ?>">
                            </div>
                            <div class="form-group">
                                <label for="Lulusan Tahun">Lulusan Tahun</label>
                                <input type="number" class="form-control" id="username" name="lulusan_tahun" required value="<?= esc($user->lulusan_tahun); ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password (Isi jika ingin mengganti)</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="foto">Ganti Foto Profil</label>
                                <input type="file" class="form-control-file" id="foto" required name="foto">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  
  





  <!-- Ada Di Notepad -->
  <!-- Tampilan Update Data -->
  <!-- Ada Di Notepad -->

  

</section>
    <!-- /.content -->
  </div>

  <?= $this->endSection();
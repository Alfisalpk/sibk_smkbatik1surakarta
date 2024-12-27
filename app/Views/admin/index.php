<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Dasboard Admin Start -->
  <section class="content">
  <!-- Small Box (Stat card) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>5</h3>

                <p>Data Siswa</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-user-graduate"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $jumlah_guru ?></h3>

                <p>Data Guru</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-chalkboard-user"></i>
              </div>
              <a href="<?= base_url('admin/data_guru') ?>" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>10</h3>

                <p>Data Kategori Pelanggaran</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-clipboard-user"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>4</h3>

                <p>Data Pelanggaran Siswa</p>
              </div>
              <div class="icon">
                <i class="fas fas fa-file"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          </section>

          <!-- testing tables -->
          <div class="container-fluid">
            
            <div class="card">
            <div class="card-header bg-danger">
              <h4>
              Pelanggaran Siswa
                </h4>
            </div>
            <div class="card-body">
              <table class="table table-hover text-nowrap table-bordered table-responsive">
              <thead>
                        <tr>
                            <th scope="col" style="width: 1vh;">ID</th>
                            <th scope="col" style="width: 10vh;">NISN</th>
                            <th scope="col" style="width: 50vh;">Nama Lengkap</th>
                            <th scope="col" style="width: 10vh;">Kelas</th>
                            <th scope="col" style="width: 10vh;">Tanggal</th>
                            <th scope="col" style="width: 100vh;">Jenis Pelanggaran</th>
                            <th scope="col" style="width: 10px;">Detail</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>230801</td>
                            <td>Alfisal Punjung Kurniawan</td>
                            <td>XI TKJ 1</td>
                            <td>Senin, 28-11-2024</td>
                            <td>Tidak Masuk Jam Pelajaran</td>
                            <td><button type="button" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </button></td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                            <td>230802</td>
                            <td>Nirina Khoirun Naja Musyafa</td>
                            <td>X DKV 1</td>
                            <td>Selasa, 29-11-2024</td>
                            <td>Terlambat Masuk Sekolah</td>
                            <td><button type="button" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </button></td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                            <td>230803</td>
                            <td>Maruf Nur Muhammad</td>
                            <td>XI TKJ 1</td>
                            <td>Selasa, 29-11-2024</td>
                            <td>Memakai Sandal Diluar Ketentuan</td>
                            <td><button type="button" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </button></td>
                        </tr>
                        <tr>
                        <th scope="row">4</th>
                            <td>230804</td>
                            <td>Rico Yoga Pradana</td>
                            <td>XI TKJ 1</td>
                            <td>Selasa, 29-11-2024</td>
                            <td>Memakai Kaos Kaki Tidak Sesuai</td>
                            <td><button type="button" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                            </button></td>
                        </tr>
                    </tbody>
                </table>
              
              
            </div>
          </div>
          </div>



<!-- Testing Table -->
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h4>Data Siswa</h4>
                <!-- Tombol untuk melihat daftar siswa -->
              
            </div>
            <div class="card-body">
                <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addSiswaModal">Tambah Siswa</button> -->
                <a href="<?= base_url('/admin/daftar_siswa'); ?>" class="btn btn-primary mb-3">Kelola Daftar Siswa</a>
                <table id="example2" class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10vh;">NISN</th>
                            <th scope="col" style="width: 70vh;">Nama Lengkap</th>
                            <th scope="col" style="width: 70vh;">Nama Orang Tua</th>
                            <th scope="col" style="width: 10vh;">Kelas</th>
                            <th scope="col" style="width: 10vh;">Jenis Kelamin</th>
                            <th scope="col" style="width: 10vh;">Agama</th>
                            <th scope="col" style="width: 10vh;">Nomor WA Siswa</th>
                            <th scope="col" style="width: 10vh;">Nomor WA Orang Tua</th>
                            <th scope="col" style="width: 100vh;">Tempat Tanggal Lahir</th>
                            <th scope="col" style="width: 100vh;">Alamat</th>
                            <th scope="col" style="width: vh;">Email</th>
                            <th scope="col" style="width: 10vh;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($siswadashboard as $s): ?>
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
                            <button type="button" class="btn btn-outline-secondary">
                            <i class="fa-solid fa-magnifying-glass-plus" ></i>
                            </button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


  <!-- End Dashboard End -->  
    

  </div>
</section>
  <?= $this->endSection(); ?>

  
  
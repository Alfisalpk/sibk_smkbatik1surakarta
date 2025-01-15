<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard Guru Bimbingan Kosneling</h1>
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
  <!-- Small Box (Stat card) -->
  <div class="row">
          <div class="col-md-4">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $jumlah_siswa ?></h3>

                <p>Data Siswa</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-user-graduate"></i>
              </div>
              <!-- <a href="<?= base_url('/guru_bk/daftar_siswa_bk') ?>" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
              </a> -->
            </div>
          </div>
          <!-- ./col -->
  
          <div class="col-md-4">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3> <?= $jumlah_kategori_pelanggaran ?> </h3>

                <p>Data Kategori Pelanggaran</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-clipboard-user"></i>
              </div>
              <!-- <a href="<?= base_url('/admin/kategori_pelanggaran') ?>" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
              </a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-md-4">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $jumlah_pelanggaran_siswa_model ?></h3>

                <p>Data Pelanggaran Siswa</p>
              </div>
              <div class="icon">
                <i class="fas fas fa-file"></i>
              </div>
              <!-- <a href="<?= base_url('/admin/pelanggaran_siswa') ?>" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
              </a> -->
            </div>
          </div>
          <!-- ./col -->
          </section>

          <!-- testing tables -->
          <body>
  <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-danger">
                <h4>Data Pelanggaran Siswa</h4>
            </div>
            <div class="card-body">
            <a href="<?= base_url('/admin/pelanggaran_siswa') ?>" class="btn btn-danger mb-3">Kelola Data Pelanggaran</a>
            <div class="table-responsivekudashboard">
                <table id="example2" class="table table-hover table-bordered table-responsive">
                <thead>
                    <tr>
                        <th  style="width: 5vh;">ID</th>
                        <th  style="width: 30vh;">Nama Siswa</th>
                        <th  style="width: 15vh;">Kategori</th>
                        <th  style="width: 80vh;">Pelanggaran</th>
                        <th  style="width: 15vh;">Tanggal</th>
                        <th  style="width: 100vh;">Deskripsi</th>
                       
                    </tr>
                </thead>
                <?php foreach ($pelanggaran_siswa as $ps): ?>
            <tr>
                <td><?= $ps['id_pelanggaran_siswa'] ?></td> <!-- Ubah menjadi id_pelanggaran_siswa -->
                <td><?= $ps['username_siswa'] ?></td>
                <td><?= $ps['nama_kategori'] ?></td>
                <td><?= $ps['nama_pelanggaran'] ?></td>
                <td><?= $ps['tanggal'] ?></td>
                <td><?= $ps['deskripsi'] ?></td>
            </tr>
        <?php endforeach; ?>

                </table>
        </div>
            </div>
        </div>
    </div>


<!-- Testing Table -->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h4>Data Siswa</h4>
                <!-- Tombol untuk melihat daftar siswa -->
              
            </div>
            <div class="card-body">
                <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addSiswaModal">Tambah Siswa</button> -->
                <a href="<?= base_url('/guru_bk/daftar_siswa_bk'); ?>" class="btn btn-primary mb-3">Kelola Daftar Siswa</a>
                <div class="table-responsivekudashboard">
                <table id="exampleku" class="table table-hover table-bordered table-responsive">
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
                            
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

  <!-- End Dashboard End -->  
    

  </div>
</section>
  <?= $this->endSection(); ?>

  
  
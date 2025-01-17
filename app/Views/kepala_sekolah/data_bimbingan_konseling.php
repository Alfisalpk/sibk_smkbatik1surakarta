<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Bimbingan Siswa</h1>
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
              

                <div class="table-responsiveku">
                <table id="example2" class="table table-hover table-bordered">
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
  
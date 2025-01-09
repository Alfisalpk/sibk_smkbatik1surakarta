<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Bimbingan Konseling</h1>
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
                <h4 class="text-center">Data Laporan Bimbingan Konseling</h4>
            </div>
            <div class="card-body">
            <a href="<?= base_url('admin/laporan/bimbingan/pdf?preview=1') ?>" class="btn btn-primary mb-3">Preview PDF</a>  
        <a href="<?= base_url('admin/laporan/bimbingan/pdf') ?>" class="btn btn-success mb-3">Download PDF</a>  

                <div class="table-responsiveku">
                <table id="example2" class="table table-bordered">  
            <thead>  
                <tr>  
                    <th>Nama Siswa</th>  
                    <th>Kelas</th>  
                    <th>Jurusan</th>  
                    <th>Tanggal</th>  
                    <th>Pertemuan Ke</th>  
                    <th>Waktu</th>  
                    <th>Tempat</th>  
                    <th>Permasalahan</th>  
                    <th>Hasil</th>  
                </tr>  
            </thead>  
            <tbody>  
                <?php foreach ($bimbingan as $row): ?>  
                    <tr>  
                        <td><?= esc($row['username']) ?></td>  
                        <td><?= esc($row['kelas']) ?></td>  
                        <td><?= esc($row['jurusan']) ?></td>  
                        <td><?= esc($row['tanggal']) ?></td>  
                        <td><?= esc($row['pertemuan_ke']) ?></td>  
                        <td><?= esc($row['waktu']) ?></td>  
                        <td><?= esc($row['tempat']) ?></td>  
                        <td><?= esc($row['permasalahan']) ?></td>  
                        <td><?= esc($row['hasil']) ?></td>  
                    </tr>  
                <?php endforeach; ?>  
            </tbody>  
        </table>  

            </div>
            </div>
        </div>
    </div>


  </div>
</section>


  <?= $this->endSection(); ?>
  
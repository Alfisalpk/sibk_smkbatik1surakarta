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
            
            <a href="<?= base_url('guru_bk/laporan/bimbingan/pdf?preview=1' . 
    (isset($start_date) ? '&start_date='.$start_date.'&end_date='.$end_date : '')) ?>" 
   class="btn btn-primary mb-3">Lihat Data</a>

<a href="<?= base_url('guru_bk/laporan/bimbingan/pdf' . 
    (isset($start_date) ? '?start_date='.$start_date.'&end_date='.$end_date : '')) ?>" 
   class="btn btn-success mb-3">Download Data</a>   

                  <!-- Tambahkan form filter di bawah card-header -->
    <div class="row mb-3">
        <div class="col-md-4">
            <form method="GET" action="<?= base_url('guru_bk/laporan_bimbingankonseling_siswafilter') ?>">
                <div class="input-group">
                    <input type="date" class="form-control" name="start_date" 
                        value="<?= isset($start_date) ? $start_date : '' ?>">
                    <input type="date" class="form-control" name="end_date" 
                        value="<?= isset($end_date) ? $end_date : '' ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">
                        <i class="fas fa-filter"></i> Filter Tanggal</button>
                        <a href="<?= base_url('guru_bk/laporan_bimbingankonseling_siswafilter') ?>" 
                           class="btn btn-outline-secondary">
                           <i class="fas fa-sync"></i> Reset</a>
                    </div>
                </div>
            </form>
        </div>
                <!-- END Tambahan Fitu Filter Pasca Sidang -->
  
                <div class="table-responsiveku">
                    <table id="example2" class="table table-bordered table-hover">  
                        <thead>  
                            <tr>  
                            <!-- <th style="display: none;">ID Bimbingan</th>      -->
                                <th style="width: 25vh;">Nama Siswa</th>  
                                <th>Kelas</th>  
                                <th>Jurusan</th>  
                                <th style="width: 10vh;">Tanggal</th>  
                                <th style="width: 5vh;">Pertemuan</th>  
                                <th style="width: 5vh;">Waktu</th>  
                                <th>Tempat</th>  
                                <th>Permasalahan</th>  
                                <th>Hasil</th>  
                                <th style="width: 18vh;">Aksi</th>  
                            </tr>  
                        </thead>  
                        <tbody>  
                            <?php foreach ($bimbingan as $row): ?>  
                                <tr>  
                                <!--  -->
                                    <td><?= esc($row['username']) ?></td>  
                                    <td><?= esc($row['kelas']) ?></td>  
                                    <td><?= esc($row['jurusan']) ?></td>  
                                    <td><?= esc($row['tanggal']) ?></td>  
                                    <td><?= esc($row['pertemuan_ke']) ?></td>  
                                    <td><?= esc($row['waktu']) ?></td>  
                                    <td><?= esc($row['tempat']) ?></td>  
                                    <td><?= esc($row['permasalahan']) ?></td>  
                                    <td><?= esc($row['hasil']) ?></td>  
                                    <td>  
                                        <a href="<?= base_url('guru_bk/laporan/bimbingan/pdf/' . $row['id_bimbingankonseling'] . '?preview=1') ?>" class="btn btn-outline-primary btn-sm mb-1">Preview
                                        <i class="fa-solid fa-file-pdf"></i>
                                        </a>  
                                        <a href="<?= base_url('guru_bk/laporan/bimbingan/pdf/' . $row['id_bimbingankonseling']) ?>" class="btn btn-outline-success btn-sm">Download
                                        <i class="fa-solid fa-download"></i>
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
    </div>  


  </div>
</section>


  <?= $this->endSection(); ?>
 

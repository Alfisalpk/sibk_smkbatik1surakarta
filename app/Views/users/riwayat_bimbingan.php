<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Riwayat Bimbingan Konseling</h1>
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
                <h4 class="text-center">Data Riwayat Pelanggaran</h4>
            </div>
            <div class="card-body">
            <div class="table-responsiveku">
                <table id="example2" class="table table-hover table-bordered table-responsive">
                <thead>  
                <tr>  
                    <th style="width: 25vh;">Nama Siswa</th>  
                    <th style="width: 10vh;">Kelas</th>  
                    <th style="width: 10vh;">Jurusan</th>  
                    <th style="width: 10vh;">Tanggal</th>  
                    <th style="width: 10vh;">Waktu</th>  
                    <th style="width: 10vh;">Pertemuan Ke</th>  
                    <th style="width: 50vh;">Permasalahan</th>  
                    <th style="width: 50vh;">Hasil</th>  
                </tr>  
            </thead> 
            <tbody>  
                <?php if (empty($riwayat_bimbingan)): ?>  
                    <tr>  
                        <td colspan="8">Tidak ada data bimbingan konseling</td>  
                    </tr>  
                <?php else: ?>  
                    <?php foreach ($riwayat_bimbingan as $bimbingan): ?>  
                        <tr>  
                            <td><?= esc($bimbingan['username']) ?></td>  
                            <td><?= esc($bimbingan['kelas']) ?></td>  
                            <td><?= esc($bimbingan['jurusan']) ?></td>  
                            <td><?= esc($bimbingan['tanggal']) ?></td>  
                            <td><?= esc($bimbingan['waktu']) ?></td>  
                            <td><?= esc($bimbingan['pertemuan_ke']) ?></td>  
                            <td><?= esc($bimbingan['permasalahan']) ?></td>  
                            <td><?= esc($bimbingan['hasil']) ?></td>  
                        </tr>  
                    <?php endforeach; ?>  
                <?php endif; ?>  
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
  
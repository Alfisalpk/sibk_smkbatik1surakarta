 <?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
 <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Riwayat Pelanggaran</h1>
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
    <section class="content">
    <body>
  <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-danger">
                <h4 class="text-center">Data Riwayat Pelanggaran</h4>
            </div>
            <div class="card-body">
            <div class="table-responsiveku">
                <table id="example2" class="table table-hover table-bordered table-responsive">
                <thead>  
                <tr>  
                    <th style="width: 25vh;">Nama Siswa</th>  
                    <th style="width: 20vh;">Kategori</th>  
                    <th style="width: 30vh;">Pelanggaran</th>  
                    <th style="width: 10vh;">Tanggal</th>  
                    <th style="width: 70vh;">Deskripsi</th>  
                </tr>  
            </thead>
            <tbody>  
                <?php if (empty($riwayat_pelanggaran)): ?>  
                    <tr>  
                        <td colspan="5">Tidak ada data pelanggaran</td>  
                    </tr>  
                <?php else: ?>  
                    <?php foreach ($riwayat_pelanggaran as $pelanggaran): ?>  
                        <tr>  
                            <td><?= esc($pelanggaran['username']) ?></td>  
                            <td><?= esc($pelanggaran['nama_kategori']) ?></td>  
                            <td><?= esc($pelanggaran['nama_pelanggaran']) ?></td>  
                            <td><?= esc($pelanggaran['tanggal']) ?></td>  
                            <td><?= esc($pelanggaran['deskripsi']) ?></td>  
                        </tr>  
                    <?php endforeach; ?>  
                <?php endif; ?>  
            </tbody> 

                </table>
        </div>
            </div>
        </div>
    </div>

</section>
    <!-- /.content -->
  </div>

  <?= $this->endSection();
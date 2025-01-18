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
  <!-- Small Box (Stat card) -->
  <div class="row">
   <div class="col-md-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= esc($jumlah_riwayat) ?></h3>

                <p>Data Pelanggaran Siswa</p>
              </div>
              <div class="icon">
                <i class="fas fas fa-file"></i>
              </div>
              <a href="#" class="small-box-footer">
                <!-- More info <i class="fas fa-arrow-circle-right"></i> -->
              </a>
            </div>
          </div>      
  

          <div class="col-md-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= esc($jumlah_riwayat_bimbingan) ?></h3>

                <p>Riwayat Bimbingan</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-user-graduate"></i>
              </div>
              <a href="#" class="small-box-footer">
                <!-- More info <i class="fas fa-arrow-circle-right"></i> -->
              </a>
            </div>
          </div>
          <!-- ./col -->
          
          
          <!-- ./col -->
         
          <!-- ./col -->
          </section>
  <!-- END Profiles Dashboar Siswa -->

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
          

  
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="text-center">Data Riwayat Bimbingan Konseling</h4>
            </div>
            <div class="card-body">
            <div class="table-responsiveku">
                <table id="example1" class="table table-hover table-bordered table-responsive">
                <thead>  
                <tr>  
                    <th style="width: 25vh;">Nama Siswa</th>  
                    <th style="width: 15vh;">Kelas</th>  
                    <th style="width: 15vh;">Jurusan</th>  
                    <th style="width: 20vh;">Tanggal</th>  
                    <th style="width: 15vh;">Waktu</th>  
                    <th style="width: 15vh;">Pertemuan Ke</th>  
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


          </div>
</section>
    <!-- /.content -->
  </div>

  <?= $this->endSection();
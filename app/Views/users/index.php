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
          
          
          <!-- ./col -->
          <div class="col-md-6">
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
  <!-- END Profiles Dashboar Siswa -->

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




</section>
    <!-- /.content -->
  </div>

  <?= $this->endSection();
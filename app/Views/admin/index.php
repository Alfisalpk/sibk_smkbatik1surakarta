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
                <h3>1</h3>

                <p>Data Guru</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-chalkboard-user"></i>
              </div>
              <a href="#" class="small-box-footer">
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
                            <th scope="col" style="width: 1vh;">NO</th>
                            <th scope="col" style="width: 10vh;">ID</th>
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
                            <td>2</td>
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
                            <td>3</td>
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
                            <td>4</td>
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
                            <td>5</td>
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




          <!-- Area Grafik Dashboard Admin -->
          <!-- <div class="col-12">
          <div class="card">
            <div class="card-header">
              Featured
            </div>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          </div> -->


          <!-- /.card-body -->
          <!-- <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 200px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              /.card-header
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th class="col-100">ID</th>
                      <th>User</th>
                      <th>Date</th>
                      <th>Status</th>
                      <th>Reason</th>
                      <th>Reason</th>
                      <th>Reason</th>
                      <th>Testing</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Testing 2</td>
                      <td>Testing 3</td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              /.card-body
            </div>
            /.card
          </div> -->
        </div>
                </div>

               </div>
          </div>
          
      </div>
      
      <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- /.row -->  
         
  <!-- End Dashboard End -->  
    

  </div>
</section>
  <?= $this->endSection(); ?>

  
  
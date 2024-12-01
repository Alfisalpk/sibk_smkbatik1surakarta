<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pelanggaran Siswa</h1>
          </div><!-- /.col -->
         <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
  <section class="content">
   
    <!-- Start Data Tables -->
          <div class="card">
            
              <div class="card-header bg-primary">
                <h5 class="card-header">Daftar Pelanggaran Siswa</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                
                <table id="example2" class="table table-bordered table-striped">
                  
                  <thead>
                  <div class="mb-3">
                    <!-- Button trigger modal -->
              <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Pelanggaran Siswa
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  ...
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
                  <!-- End Modal  -->

                  <tr>
                     <th scope="col" style="width: 1vh;">ID</th>
                            <th scope="col" style="width: 10vh;">NISN</th>
                            <th scope="col" style="width: 50vh;">Nama Lengkap</th>
                            <th scope="col" style="width: 10vh;">Kelas</th>
                            <th scope="col" style="width: 20vh;">Tanggal</th>
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
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        <!-- End Data Tables -->

  </div>
</section>


  <?= $this->endSection(); ?>
  
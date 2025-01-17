 <?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
 <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pelanggaran Siswa</h1>
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
                <h4 class="text-center">Data Pelanggaran Siswa</h4>
            </div>
            <div class="card-body">
            <!-- <a href="#" class="btn btn-danger mb-3" data-toggle="modal" data-target="#BKPelanggaranaddModal">Tambah Pelanggaran</a> -->
            <div class="table-responsiveku">
                <table id="example2" class="table table-hover table-bordered table-responsive">
                <thead>
                    <tr>
                        
                        <th  style="width: 30vh;">Siswa</th>
                        <th  style="width: 15vh;">Kategori</th>
                        <th  style="width: 50vh;">Pelanggaran</th>
                        <th  style="width: 15vh;">Tanggal</th>
                        <th  style="width: 100vh;">Deskripsi</th>
                        <th  style="width: 5vh;">Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($pelanggaran_siswa as $ps): ?>
            <tr>
                
                <td><?= $ps['username'] ?></td>
                <td><?= $ps['nama_kategori'] ?></td>
                <td><?= $ps['nama_pelanggaran'] ?></td>
                <td><?= $ps['tanggal'] ?></td>
                <td><?= $ps['deskripsi'] ?></td>
                <td>
                    <a href="#" class="btn btn-outline-primary detail-KepsekPelanggaranbtn" data-id="<?= $ps['siswa_id'] ?>">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

                </table>
        </div>
            </div>
        </div>
    </div>


<!-- Modal Detail Siswa -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="detailNis">NIS</label>
                    <input type="text" class="form-control" id="detailNis" readonly>
                </div>
                <div class="form-group">
                    <label for="detailNamaLengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="detailNamaLengkap" readonly>
                </div>
                <div class="form-group">
                    <label for="detailKelasJurusan">Kelas dan Jurusan</label>
                    <input type="text" class="form-control" id="detailKelasJurusan" readonly>
                </div>
                <div class="form-group">
                    <label for="detailJenis_Kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="detailJenis_Kelamin" readonly>
                </div>
                <div class="form-group">
                    <label for="detailAgama">Agama</label>
                    <input type="text" class="form-control" id="detailAgama" readonly>
                </div>
                <div class="form-group">
                    <label for="detailNomor_Wa">Nomor WA Siswa</label>
                    <input type="text" class="form-control" id="detailNomor_Wa" readonly>
                </div>
                <div class="form-group">
                    <label for="detailNomor_WA_Ortu">Nomor WA Ortu</label>
                    <input type="text" class="form-control" id="detailNomor_WA_Ortu" readonly>
                </div>
                <div class="form-group">
                    <label for="detailEmail">Email</label>
                    <input type="email" class="form-control" id="detailEmail" readonly>
                </div>
                <div class="form-group">
                    <label for="detailAlamat">Alamat Rumah</label>
                    <input type="text" class="form-control" id="detailAlamat" readonly>
                </div>
                <div class="form-group d-flex flex-column align-items-center justify-content-center">
                    <label for="detailFoto">Foto</label>
                    <img id="detailFoto" src="" alt="Foto Siswa" class="img-fluid" style="max-width: 200px;">
                </div>
                <!-- Tambahkan field lainnya sesuai kebutuhan -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>










    </div>
</section>
    <!-- /.content -->
  </div>

  <?= $this->endSection();
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
            
            <div class="card-header bg-danger">
                <h4 class="text-center">Data Pelanggaran Siswa</h4>
            </div>
            
            <div class="card-body">
                <!-- Form Filter -->
<div class="row mb-3">
    <div class="col-md-4">
        <form method="GET" action="<?= base_url('admin/pelanggaran_siswafilter') ?>">
            <div class="input-group">
                <input type="date" 
                       class="form-control" 
                       name="start_date" 
                       value="<?= !empty($start_date) ? $start_date : '' ?>">
                <input type="date" 
                       class="form-control" 
                       name="end_date" 
                       value="<?= !empty($end_date) ? $end_date : '' ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="submit">
                        <i class="fas fa-filter"></i> Filter Tanggal
                    </button>
                    <a href="<?= base_url('admin/pelanggaran_siswafilter') ?>" 
                       class="btn btn-outline-secondary">
                        <i class="fas fa-sync"></i> Reset
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
            <a href="#" class="btn btn-danger mb-3" data-toggle="modal" data-target="#addModal">Tambah Pelanggaran</a>

          

            

            <div class="table-responsiveku">
                <table id="example3" class="table table-hover table-bordered table-responsive">
                <thead>
                    <tr>
                        
                        <th  style="width: 5vh;">No. Pelanggaran</th>
                        <th  style="width: 30vh;">Siswa</th>
                        <th  style="width: 15vh;">Bentuk Pelanggaran</th>
                        <th  style="width: 50vh;">Pelanggaran</th>
                        <th  style="width: 15vh;">Tanggal</th>
                        <th  style="width: 50vh;">Deskripsi</th>
                        <th  style="width: 20vh;">Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($pelanggaran_siswa as $ps): ?>
            <tr>
                
                <td><?= $ps['id_pelanggaran_siswa'] ?></td>
                <td><?= $ps['username'] ?></td>
                <td><?= $ps['nama_kategori'] ?></td>
                <td><?= $ps['nama_pelanggaran'] ?></td>
                <td><?= $ps['tanggal'] ?></td>
                <td><?= $ps['deskripsi'] ?></td>
                <td>
                    <a href="#" class="btn btn-outline-primary detail-btn" data-id="<?= $ps['siswa_id'] ?>">
                    <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </a>
                    <a href="#" class="btn btn-outline-warning edit-btnpelanggaransiswa" data-toggle="modal" data-target="#editModal" data-id="<?= $ps['id_pelanggaran_siswa'] ?>" data-siswa_id="<?= $ps['siswa_id'] ?>" data-kategori_id="<?= $ps['kategori_id'] ?>" data-pelanggaran_id="<?= $ps['pelanggaran_id'] ?>" data-tanggal="<?= $ps['tanggal'] ?>" data-deskripsi="<?= $ps['deskripsi'] ?>">
                    <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <a href="#" class="btn btn-outline-danger delete-btnpelanggaransiswa" data-id="<?= $ps['id_pelanggaran_siswa'] ?>">
                    <i class="fa-regular fa-trash-can"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>

                </table>
        </div>
            </div>
        </div>
    </div>

   <!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Tambah Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addForm" action="/admin/pelanggaran_siswa/store" method="post">
                <div class="modal-body">
                    <div class="form-group1">
                        <label for="siswa_id">Siswa</label>
                        <select class="form-control" id="siswa_id" name="siswa_id">
                            <?php foreach ($users as $user): ?>
                                <option value="<?= $user['id'] ?>"><?= $user['username'] ?> (Kelas: <?= $user['kelas'] ?>, Jurusan: <?= $user['jurusan'] ?>)</option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kategori_id">Kategori Pelanggaran</label>
                        <select class="form-control" id="kategori_id" name="kategori_id">
                        <option disabled selected>Pilih Kategori Pelanggaran</option>    
                        <?php foreach ($kategori_pelanggaran as $kategori): ?>
                                <option value="<?= $kategori['id'] ?>"><?= $kategori['nama_kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pelanggaran_id">Pelanggaran</label>
                        <select class="form-control" id="pelanggaran_id" name="pelanggaran_id">
                            <!-- Pilihan pelanggaran akan diisi berdasarkan kategori yang dipilih -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="addSubmitBtn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Detail Siswa -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
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

  <!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Pelanggaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editForm" action="" method="post">
                <input type="hidden" id="id" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="siswa_id_edit">Siswa</label>
                        <select class="form-control" id="siswa_id_edit" name="siswa_id">
                            <?php foreach ($users as $user): ?>
                                <option value="<?= $user['id'] ?>"><?= $user['username'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kategori_id_edit">Kategori Pelanggaran</label>
                        <select class="form-control" id="kategori_id_edit" name="kategori_id">
                            <?php foreach ($kategori_pelanggaran as $kategori): ?>
                                <option value="<?= $kategori['id'] ?>"><?= $kategori['nama_kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pelanggaran_id_edit">Pelanggaran</label>
                        <select class="form-control" id="pelanggaran_id_edit" name="pelanggaran_id">
                            <!-- Pilihan pelanggaran akan diisi berdasarkan kategori yang dipilih -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_edit">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal_edit" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_edit">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi_edit" name="deskripsi"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="editSubmitBtn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

    
  </div>
</section>


  <?= $this->endSection(); ?>
  
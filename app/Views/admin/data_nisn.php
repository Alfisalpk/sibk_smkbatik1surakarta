<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data NISN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Dasboard Admin Start -->
  <section class="content">
  <!-- Small Box (Stat card) -->
  <body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h4 class="text-center">Data Siswa</h4>
            </div>
            <div class="card-body">
                <?php if (session()->has('success')): ?>
                    <div class="alert alert-success">
                        <?= session('success') ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->has('error')): ?>
                    <div class="alert alert-danger">
                        <?= session('error') ?>
                    </div>
                <?php endif; ?>
                <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addSiswaModal">Tambah Siswa</button>
                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#uploadExcelModal">Upload Excel</button>
                <table id="example2" class="table table-hover table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 100vh;">NISN</th>
                            <th scope="col" style="width: 100vh;">Nama Lengkap</th>
                            <th scope="col" style="width: 10 vh;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($siswa)): ?>
                            <?php foreach ($siswa as $s): ?>
                                <tr>
                                    <th scope="row"><?= $s['nisn'] ?></th>
                                    <td><?= $s['nama_lengkap'] ?></td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-outline-warning edit-btn" data-id="<?= $s['id'] ?>">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button> -->
                                        <button type="button" class="btn btn-outline-danger delete-btn" data-id="<?= $s['id'] ?>">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="text-center">Tidak ada data siswa.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Siswa -->
    <div class="modal fade" id="addSiswaModal" tabindex="-1" role="dialog" aria-labelledby="addSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSiswaModalLabel">Tambah Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addSiswaForm">
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="addSiswaBtnNISN">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Upload Excel -->
    <div class="modal fade" id="uploadExcelModal" tabindex="-1" role="dialog" aria-labelledby="uploadExcelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="uploadExcelModalLabel">Upload Excel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="uploadExcelForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="excel_file">Upload File Excel</label>
                            <input type="file" class="form-control" id="excel_file" name="excel_file" accept=".xls,.xlsx" required>
                            <small class="form-text text-muted">Format file: .xls atau .xlsx</small>
                            <a href="<?= base_url('public/template/template_siswa.xlsx') ?>" download="template_siswa.xlsx" class="btn btn-link">Unduh Template</a>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="uploadExcelBtn">Upload</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit Siswa -->
    <div class="modal fade" id="editSiswaModal" tabindex="-1" role="dialog" aria-labelledby="editSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSiswaModalLabel">Edit Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editSiswaForm">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="form-group">
                            <label for="edit_nisn">NISN</label>
                            <input type="text" class="form-control" id="edit_nisn" name="nisn" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="edit_nama_lengkap" name="nama_lengkap" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" id="editSiswaBtnNISN">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Siswa -->
    <div class="modal fade" id="deleteSiswaModal" tabindex="-1" role="dialog" aria-labelledby="deleteSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteSiswaModalLabel">Hapus Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus siswa ini?</p>
                    <input type="hidden" id="delete_id" name="id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-danger" id="deleteSiswaBtnNISN">Hapus</button>
                </div>
            </div>
        </div>
    </div>




</div>
</section>


  <?= $this->endSection(); ?>
  
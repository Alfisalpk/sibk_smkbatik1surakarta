<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kategori Pelanggaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard Admin</li>
            </ol>
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
                <h4 class="text-center">Data Kategori Pelanggaran</h4>
            </div>
            <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah Pelanggaran</button>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addKategoriModal">Tambah Kategori</button>
                <table id="example2" class="table table-hover table-bordered table-responsive">
                    <thead>
                    <tr>
                    <th style="width: 5vh;">ID</th>
                    <th style="width: 15vh;">Kategori</th>
                    <th style="width: 100vh;">Nama Pelanggaran</th>
                    <th style="width: 20vh;">Klasifikasi</th>
                    <th style="width: 25vh;">Petugas Penanganan</th>
                    <th style="width: 25vh;">Sanksi</th>
                    <th style="width: 20vh;">Aksi</th>
                </tr>
                    </thead>
                    <?php foreach ($pelanggaran as $p): ?>
                    <tr>
                        <td><?= $p['id_pelanggaran'] ?></td>
                        <td><?= $p['nama_kategori'] ?></td>
                        <td><?= $p['nama_pelanggaran'] ?></td>
                        <td><?= $p['klasifikasi'] ?></td>
                        <td><?= $p['petugas_penanganan'] ?></td>
                        <td><?= $p['sanksi'] ?></td>
                        <td>
                            <button type="button" class="btn btn-outline-warning editBtn" data-id="<?= $p['id_pelanggaran'] ?>" data-kategori_id="<?= $p['kategori_id'] ?>" data-nama_pelanggaran="<?= $p['nama_pelanggaran'] ?>" data-klasifikasi="<?= $p['klasifikasi'] ?>" data-petugas_penanganan="<?= $p['petugas_penanganan'] ?>" data-sanksi="<?= $p['sanksi'] ?>" data-toggle="modal" data-target="#editModal">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                            <a href="#" class="btn btn-outline-danger deleteBtn" data-id="<?= $p['id_pelanggaran'] ?>">
                            <i class="fa-regular fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="addKategoriModal" tabindex="-1" role="dialog" aria-labelledby="addKategoriModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog modal-dialog-centered-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addKategoriModalLabel">Tambah Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addKategoriForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Pelanggaran -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Pelanggaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addPelanggaranForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select class="form-control" id="kategori_id" name="kategori_id">
                                <?php foreach ($kategori as $k): ?>
                                    <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_pelanggaran">Nama Pelanggaran</label>
                            <input type="text" class="form-control" id="nama_pelanggaran" name="nama_pelanggaran" required>
                        </div>
                        <div class="form-group">
                            <label for="klasifikasi">Klasifikasi</label>
                            <input type="text" class="form-control" id="klasifikasi" name="klasifikasi" required>
                        </div>
                        <div class="form-group">
                            <label for="petugas_penanganan">Petugas Penanganan</label>
                            <input type="text" class="form-control" id="petugas_penanganan" name="petugas_penanganan" required>
                        </div>
                        <div class="form-group">
                            <label for="sanksi">Sanksi</label>
                            <input type="text" class="form-control" id="sanksi" name="sanksi" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
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
                <form id="editPelanggaranForm">
                    <input type="hidden" id="id_pelanggaran" name="id_pelanggaran">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit_kategori_id">Kategori</label>
                            <select class="form-control" id="edit_kategori_id" name="kategori_id">
                                <?php foreach ($kategori as $k): ?>
                                    <option value="<?= $k['id'] ?>"><?= $k['nama_kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit_nama_pelanggaran">Nama Pelanggaran</label>
                            <input type="text" class="form-control" id="edit_nama_pelanggaran" name="nama_pelanggaran" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_klasifikasi">Klasifikasi</label>
                            <input type="text" class="form-control" id="edit_klasifikasi" name="klasifikasi" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_petugas_penanganan">Petugas Penanganan</label>
                            <input type="text" class="form-control" id="edit_petugas_penanganan" name="petugas_penanganan" required>
                        </div>
                        <div class="form-group">
                            <label for="edit_sanksi">Sanksi</label>
                            <input type="text" class="form-control" id="edit_sanksi" name="sanksi" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

  </div>
</section>


  <?= $this->endSection(); ?>
  
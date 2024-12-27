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
    <div class="container mt-5">
        <h2>Tambah Data Pelanggaran</h2>
        <form action="<?= base_url('/admin/pelanggaran/store') ?>" method="post">
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id" required>
                    <option value="">Pilih Kategori</option>
                    <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['id']; ?>"><?= $k['nama_kategori']; ?></option>
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
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

  </div>
</section>


  <?= $this->endSection(); ?>
  
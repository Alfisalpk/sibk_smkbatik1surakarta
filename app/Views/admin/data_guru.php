<?= $this->extend('templates/index'); ?>
 <?= $this->section('page-content'); ?>
  <div class="content-wrapper">
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Master Data Guru</h1>
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
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

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
                <h3>53<sup style="font-size: 20px">%</sup></h3>

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
                <h3>44</h3>

                <p>Data Kelas</p>
              </div>
              <div class="icon">
                <i class="fas fa-solid fa-users-rectangle"></i>
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
                <h3>65</h3>

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
       <!-- Form Tambah Data Guru -->
        <div class="container-fluid">
        <div class="card">
          

        
  <h5 class="card-header bold">Daftar Guru</h5>
  <div class="card-body">
   
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
       <!-- END Form Tambah Data Guru -->





          <form action="<?= base_url('admin/storeGuru') ?>" method="post">
          <?= csrf_field() ?>
          <label for="role">Peran</label>
          <select id="role" name="role">
    <?php if (isset($roles) && is_array($roles)): ?>
            <?php foreach ($roles as $role): ?>
                <option value="<?= $role['id']; ?>"><?= $role['role']; ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
        </select>
    <label for="username">Username</label>
    <input type="text" name="username" required>
    
    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" required>

    <label for="full_name">Nama Lengkap</label>
    <input type="text" name="full_name" required>
    
    <label for="nip">NIP</label>
    <input type="text" name="nip">
    
    <label for="birth_place">Tempat Lahir</label>
    <input type="text" name="birth_place">

    <label for="birth_date">Tanggal Lahir</label>
    <input type="date" name="birth_date">

    <label for="phone">Telepon</label>
    <input type="text" name="phone">

    <label for="address">Alamat</label>
    <textarea name="address"></textarea>

    <label for="religion">Agama</label>
    <input type="text" name="religion">

    <label for="gender">Jenis Kelamin</label>
    <select name="gender">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select>

    <label for="subject">Mata Pelajaran</label>
    <input type="text" name="subject">


    <button type="submit">Daftarkan Guru</button>
</form>
          <!-- ./col -->
          </section>
        </div>
        <!-- /.row -->

  <!-- End Dashboard End -->


  </div>
</section>


  <?= $this->endSection(); ?>
  
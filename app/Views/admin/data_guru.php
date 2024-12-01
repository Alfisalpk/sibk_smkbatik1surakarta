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
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Dasboard Admin Start -->
  
       <!-- Form Tambah Data Guru -->
        <div class="container-fluid">
        <div class="card">        
  <h5 class="card-header bold bg-primary">Tambah Data Guru</h5>
  <form action="<?= base_url('admin/storeGuru') ?>" method="post">
          <?= csrf_field() ?>
  <div class="card-body">

    <!-- Start Card Form Guru -->
    <div class="card">
    <div class="row g-0">
        <!-- Bagian Kiri -->
        <div class="col-md-6">
        <div class="card-body">
            
                <div class="form-floating mb-2">
                  <select class="form-select border border-width-2" id="floatingSelect" aria-label="Floating label select example">
                    <option disabled selected>Pilih Role Guru</option>
                    <?php if (isset($roles) && is_array($roles)): ?>
                      <?php foreach ($roles as $role): ?>
                          <?php if ($role['id'] != 3): // Mengecualikan opsi dengan ID 3 ?>
                              <option value="<?= $role['id']; ?>"><?= $role['role']; ?></option>
                          <?php endif; ?>
                      <?php endforeach; ?>
                  <?php endif; ?>
                  </select>
                  <label for="floatingSelect">Role Guru</label>
                </div>
                <div class="form-floating mb-2">
                <input type="number" class="form-control form-control-border border-width-2" id="floatingPassword" placeholder="NIP" required>
                <label for="floatingPassword">NIP</label>
                </div>
                <div class="form-floating mb-2">
                <input type="email" class="form-control form-control-border border-width-2" id="floatingPassword" placeholder="Email Aktif" required>
                <label for="floatingPassword">Email Aktif</label>
                </div>
                <div class="form-floating mb-2">
                <input type="password" class="form-control form-control-border border-width-2" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Buat Password</label>
                </div>
                <div class="form-floating mb-2">
                <input type="text" class="form-control form-control-border border-width-2" id="floatingPassword" placeholder="Nama Lengkap" required>
                <label for="floatingPassword">Nama Lengkap</label>
                </div>
                <div class="form-floating mb-2">
                <input type="text" class="form-control form-control-border border-width-2" id="floatingPassword" placeholder="Nama Panggilan" required>
                <label for="floatingPassword">Nama Panggilan</label>
                </div>
                <div class="form-floating mb-2">
              <select class="form-select form-control-border border-width-2" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Pilih Jurusan Guru Pengampu</option>
                <option value="TKJ">TKJ</option>
                  <option value="Farmasi">Farmasi</option>
                  <option value="DKV">DKV</option>
                  <option value="OTKP">OTKP</option>
                  <option value="BDP">BDP</option>
                  <option value="AKL">AKL</option>
              </select>
              <label for="floatingSelect">Guru Jurusan</label>
            </div>
               
            </div>
        </div>
        <!-- Bagian Kanan -->
        <div class="col-md-6">
            <div class="card-body">
            
            <div class="form-floating mb-2">
                <input type="number" class="form-control form-control-border border-width-2" id="floatingInput" placeholder="Tempat Lahir" required>
                <label for="floatingInput">Tempat Lahir</label>
                </div>
                <div class="form-floating mb-2">
                <input type="date" class="form-control form-control-border border-width-2" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Tanggal Lahir</label>
            </div>
            <div class="form-floating mb-2">
              <select class="form-select form-control-border border-width-2" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Pilih Agama</option>
                <option value="Islam">Islam</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Konghucu">Konghucu</option>
              </select>
              <label for="floatingSelect">Agama</label>
            </div>
            <div class="form-floating mb-2">
              <select class="form-select form-control-border border-width-2" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              <label for="floatingSelect">Jenis Kelamin</label>
            </div>
            <div class="form-floating mb-2">
                <input type="number" class="form-control form-control-border border-width-2" id="floatingInput" placeholder="Nomor Telepon" required>
                <label for="floatingInput">Nomor Telepon</label>
                </div>

                <div class="form-floating mb-3">
                  <textarea class="form-control form-control-border border-width-2" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 70px"></textarea>
                  <label for="floatingTextarea2">Alamat</label>
                </div>
               


            </div>
        </div>
    </div>
</div>
        <!-- END Card Form Guru -->

        <button type="submit" class="btn btn-primary float-end">Simpan Data Guru</button>
        </form>
  </div>
</div>
        </div>
       <!-- END Form Tambah Data Guru -->

       <div class="container-fluid">
            
            <div class="card">
            <div class="card-header bg-primary">
              <h4>
              Data Guru
                </h4>
            </div>
            <div class="card-body">
              <table id="example2" class="table table-hover table-bordered table-responsive">
              <thead>
                        <tr>
                            <th scope="col" style="width: 10vh;">NIP</th>
                            <th scope="col" style="width: 10vh;">Role</th>
                            <th scope="col" style="width: 50vh;">Nama Lengkap</th>
                            <th scope="col" style="width: 10vh;">Nama Panggilan</th>
                            <th scope="col" style="width: 2px;">Guru Jurusan</th>
                            
                            <th scope="col" style="width: 100vh;">Tempat Lahir</th>
                            <th scope="col" style="width: 100vh;">Tanggal Lahir</th>
                            <th scope="col" style="width: 100vh;">Jenis Kelamin</th>
                            <th scope="col" style="width: 100vh;">No Telepon</th>
                            <th scope="col" style="width: 100vh;">Alamat</th>
                            <th scope="col" style="width: 10px;">Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">202030217</th>
                            <td>Admin</td>
                            <td>Alfisal Punjung Kurniawan</td>
                            <td>Punjung</td>
                            <td>TKJ</td>
                            <td>Sukoharjo</td>
                            <td>23/08/2001</td>
                            <td>Laki-Laki</td>
                            <td>081325659017</td>
                            <td>Jl. Apel, Kopen, Ngadirejo, Kartasura, Sukoharjo</td>
                            <td>
                              <button type="button" class="btn btn-outline-secondary btn-outline-warning">
                              <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                              <button type="button" class="btn btn-outline-secondary btn btn-outline-danger">
                              <i class="fa-regular fa-trash-can"></i>
                            </button>
                          </td>
                        </tr>
                        <tr>
                        <th scope="row">2001</th>
                            <td>Guru</td>
                            <td>Alfisal Punjung Kurniawan</td>
                            <td>Punjung</td>
                            <td>TKJ</td>
                            <td>Sukoharjo</td>
                            <td>23/08/2001</td>
                            <td>Laki-Laki</td>
                            <td>081325659017</td>
                            <td>Jl. Apel, Kopen, Ngadirejo, Kartasura, Sukoharjo</td>
                            <td>
                              <button type="button" class="btn btn-outline-secondary btn-outline-warning">
                              <i class="fa-regular fa-pen-to-square"></i>
                            </button>
                              <button type="button" class="btn btn-outline-secondary btn btn-outline-danger">
                              <i class="fa-regular fa-trash-can"></i>
                            </button>
                          </td>
                        </tr>
                       
                    </tbody>
                </table>
              
              
            </div>
          </div>
























          <!-- <form action="<?= base_url('admin/storeGuru') ?>" method="post">
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
</form> -->
          <!-- ./col -->
          </section>
        </div>
        <!-- /.row -->

  <!-- End Dashboard End -->


  </div>
</section>


  <?= $this->endSection(); ?>
  
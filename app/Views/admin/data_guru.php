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
        <form id="tambahGuruForm">
            <?= csrf_field() ?>
            <div class="card-body">

                <!-- Start Card Form Guru -->
                <div class="card">
                    <div class="row g-0">
                        <!-- Bagian Kiri -->
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-floating mb-2">
                                    <select class="form-select border border-width-2" id="floatingSelect" aria-label="Floating label select example" name="role" required>
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
                                    <input type="number" name="nip" class="form-control form-control-border border-width-2" id="floatingNip" placeholder="NIP" required>
                                    <label for="floatingNip">NIP</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="email" name="email" class="form-control form-control-border border-width-2" id="floatingEmail" placeholder="Email Aktif" required>
                                    <label for="floatingEmail">Email Aktif</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="password" name="password" class="form-control form-control-border border-width-2" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Buat Password</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" name="username" class="form-control form-control-border border-width-2" id="floatingUsername" placeholder="Nama Lengkap" required>
                                    <label for="floatingUsername">Nama Lengkap</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="text" name="nama_panggilan" class="form-control form-control-border border-width-2" id="floatingNamaPanggilan" placeholder="Nama Panggilan" required>
                                    <label for="floatingNamaPanggilan">Nama Panggilan</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <select class="form-select form-control-border border-width-2" name="jurusan_pengampu" id="floatingJurusan" aria-label="Floating label select example" required>
                                        <option selected disabled>Pilih Jurusan Guru Pengampu</option>
                                        <option value="TKJ">TKJ</option>
                                        <option value="Farmasi">Farmasi</option>
                                        <option value="DKV">DKV</option>
                                        <option value="OTKP">OTKP</option>
                                        <option value="BDP">BDP</option>
                                        <option value="AKL">AKL</option>
                                    </select>
                                    <label for="floatingJurusan">Guru Jurusan</label>
                                </div>
                            </div>
                        </div>
                        <!-- Bagian Kanan -->
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-floating mb-2">
                                    <input type="text" name="tempat_lahir" class="form-control form-control-border border-width-2" id="floatingTempatLahir" placeholder="Tempat Lahir" required>
                                    <label for="floatingTempatLahir">Tempat Lahir</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="date" name="tgl_lahir" class="form-control form-control-border border-width-2" id="floatingTglLahir" placeholder="Tanggal Lahir" required>
                                    <label for="floatingTglLahir">Tanggal Lahir</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <select class="form-select form-control-border border-width-2" name="agama" id="floatingAgama" aria-label="Floating label select example" required>
                                        <option selected disabled>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                    <label for="floatingAgama">Agama</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <select class="form-select form-control-border border-width-2" name="jenis_kelamin" id="floatingJenisKelamin" aria-label="Floating label select example" required>
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <label for="floatingJenisKelamin">Jenis Kelamin</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input type="number" name="no_telepon" class="form-control form-control-border border-width-2" id="floatingNoTelepon" placeholder="Nomor Telepon" required>
                                    <label for="floatingNoTelepon">Nomor Telepon</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control form-control-border border-width-2" name="alamat" placeholder="Alamat" id="floatingAlamat" style="height: 70px" required></textarea>
                                    <label for="floatingAlamat">Alamat</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Card Form Guru -->

                <button type="submit" class="btn btn-primary float-end">Simpan Data Guru</button>
            </div>
        </form>
    </div>
</div>
       <body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h4>Data Guru</h4>
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
                <table id="example2" class="table table-hover table-bordered table-responsive">
                    <thead>
                    <tr>
                            <th scope="col" style="width: 10vh;">NIP</th>
                            <th scope="col" style="width: 10vh;">Role</th>
                            <th scope="col" style="width: 50vh;">Nama Lengkap</th>
                            <th scope="col" style="width: 2px;">Guru Jurusan</th>
                            <th scope="col" style="width: 15vh;">Tempat Lahir</th>
                            <th scope="col" style="width: 15vh;">Tanggal Lahir</th>
                            <th scope="col" style="width: 15vh;">Jenis Kelamin</th>
                            <th scope="col" style="width: 15vh;">No Telepon</th>
                            <th scope="col" style="width: 25vh;">Email</th>
                            <th scope="col" style="width: 50vh;">Alamat</th>
                            <th scope="col" style="width: 15vh;">Aksi</th>
                        </tr>

                    </thead>
                    <tbody>
                    <?php if (!empty($gurus)): ?>
                            <?php foreach ($gurus as $guru): ?>
                                <tr>
                                    <th scope="row"><?= $guru['nip'] ?></th>
                                    <td>
                                        <?php 
                                        $role_id = $guru['role'];
                                        $role_name = '';
                                        foreach ($roles as $role) {
                                            if ($role['id'] == $role_id) {
                                                $role_name = $role['role'];
                                                break;
                                            }
                                        }
                                        echo $role_name;
                                        ?>
                                    </td>
                                    <td><?= $guru['username'] ?></td>                   
                                    <td><?= $guru['jurusan_pengampu'] ?></td>
                                    <td><?= $guru['tempat_lahir'] ?></td>
                                    <td><?= date('d/m/Y', strtotime($guru['tgl_lahir'])) ?></td>
                                    <td><?= $guru['jenis_kelamin'] ?></td>
                                    <td><?= $guru['no_telepon'] ?></td>
                                    <td><?= $guru['email'] ?></td>
                                    <td><?= $guru['alamat'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#editGuruModal" data-id="<?= $guru['id'] ?>">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteGuruModal" data-id="<?= $guru['id'] ?>">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="11" class="text-center">Tidak ada data guru.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   <!-- Modal Edit Guru -->
<div class="modal fade" id="editGuruModal" tabindex="-1" role="dialog" aria-labelledby="editGuruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editGuruModalLabel">Edit Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editGuruForm">
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    <div class="form-group">
                        <label for="editRole">Role</label>
                        <select class="form-control" id="editRole" name="role" required>
                            <?php foreach ($roles as $role): ?>
                                <option value="<?= $role['id'] ?>"><?= $role['role'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editUsername">Username</label>
                        <input type="text" class="form-control" id="editUsername" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="editEmail">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="editPassword">Password (kosongkan jika tidak diubah)</label>
                        <input type="password" class="form-control" id="editPassword" name="password">
                    </div>
                    <div class="form-group">
                        <label for="editNip">NIP</label>
                        <input type="text" class="form-control" id="editNip" name="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="editNamaPanggilan">Nama Panggilan</label>
                        <input type="text" class="form-control" id="editNamaPanggilan" name="nama_panggilan" required>
                    </div>
                    <div class="form-group">
                        <label for="editJurusanPengampu">Jurusan Pengampu</label>
                        <input type="text" class="form-control" id="editJurusanPengampu" name="jurusan_pengampu" required>
                    </div>
                    <div class="form-group">
                        <label for="editTempatLahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="editTempatLahir" name="tempat_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="editTglLahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="editTglLahir" name="tgl_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="editJenisKelamin">Jenis Kelamin</label>
                        <select class="form-control" id="editJenisKelamin" name="jenis_kelamin" required>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editAgama">Agama</label>
                        <select class="form-control" id="editAgama" name="agama" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editNoTelepon">No Telepon</label>
                        <input type="text" class="form-control" id="editNoTelepon" name="no_telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="editAlamat">Alamat</label>
                        <textarea class="form-control" id="editAlamat" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

     <!-- Modal Hapus Guru -->
     <div class="modal fade" id="deleteGuruModal" tabindex="-1" role="dialog" aria-labelledby="deleteGuruModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteGuruModalLabel">Hapus Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteGuruForm">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="deleteId">
                        <p>Apakah Anda yakin ingin menghapus guru ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
      
<!-- End Modal Hapus Guru -->






















         
  <!-- End Dashboard End -->


  </div>
</section>


  <?= $this->endSection(); ?>
  

  
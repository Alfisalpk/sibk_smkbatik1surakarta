<!-- <?= $this->extend('auth/templates/index'); ?> -->
<?= $this->section('content'); ?>

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5 overflow-auto" style="height: 700px;    ">
                    <div class="text-center">
                    <div>
                    <img src="<?= base_url() ?>/assets/img/logo_login.png" class="logo-persegi img-fluid" alt="Gambar Persegi">
                    </div>
                        <h1 class="h4 text-gray-900 mb-4">Buat Akun Bimbingan Konseling</h1>
                    </div>
                     <!-- Menampilkan pesan error -->
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>        
                    <!-- Menampilkan pesan sukses -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success" role="alert">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>
                    <!-- Menampilkan pesan sukses -->
                    <?php if (session()->getFlashdata('terdaftar')): ?>
                        <div class="alert alert-warning" role="alert">
                            <?= session()->getFlashdata('terdaftar') ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('register') ?>" method="post" class="user">
                    <?= csrf_field() ?>

                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="nisn"
                                placeholder="Masukan NISN" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="nama_lengkap"
                                placeholder="Nama Panggilan" value="<?= old('nama_lengkap')?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="username"
                                placeholder="Nama Lengkap" value="<?= old('username')?>" required>
                        </div>
                        <div class="form-group">
                            <input type="username" class="form-control form-control-user" name="nama_orangtua"
                                placeholder="Nama Orangtua" value="<?= old('nama_orangtua')?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email"
                                placeholder="Email Siswa Aktif" value="<?= old('email')?>" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Buat Password" autocomplete="off" value="<?= old('password')?>" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"
                                    name="confirm_password" placeholder="Ulangi Password" type="password" autocomplete="off" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <select style="font-size: 13px" class="form-select form-select-sm form-control" aria-label="Small select example" name="kelas" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                                <option value="X">Kelas X</option>
                                <option value="XI">Kelas XI</option>
                                <option value="XII">Kelas XII</option>
                                </select>
                            </div>
                                <div class="col-sm-6">
                                <select style="font-size: 13px" class="form-select form-select-sm form-control" aria-label="Small select example" name="jurusan" required>
                                    <option value="" disabled selected>Jurusan</option>
                                        <option value="TKJ 1">TKJ 1</option>
                                        <option value="TKJ 2">TKJ 2</option>
                                        <option value="TKJ 3">TKJ 3</option>
                                        <option value="TKJ 4">TKJ 4</option>
                                        <option value="Farmasi">Farmasi</option>
                                        <option value="DKV 1">DKV 1</option>
                                        <option value="DKV 2">DKV 2</option>
                                        <option value="DKV 3">DKV 3</option>
                                        <option value="OTKP 1">OTKP 1</option>
                                        <option value="OTKP 2">OTKP 2</option>
                                        <option value="OTKP 3">OTKP 3</option>
                                        <option value="BDP 1">BDP 1</option>
                                        <option value="BDP 2">BDP 2</option>
                                        <option value="BDP 3">BDP 3</option>
                                        <option value="AKL 1">AKL 1</option>
                                        <option value="AKL 2">AKL 2</option>
                                        <option value="AKL 3">AKL 3</option>
                                        
                                </select>
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                            <select style="font-size: 13px" class="form-select form-select-sm form-control" aria-label="Small select example" name="jenis_kelamin" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                                <div class="col-sm-6">
                                <select style="font-size: 13px" class="form-select form-select-sm form-control" aria-label="Small select example" name="agama" required>
                                    <option value="" disabled selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        
                                        
                                </select>
                                </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" name="nomor_wa" class="form-control form-control-user" placeholder="Nomor WA Siswa" autocomplete="off" value="<?= old('password')?>" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control form-control-user"
                                    name="nomor_wa_ortu" placeholder="Nomor WA Orangtua" type="password" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" name="tempat_lahir" class="form-control form-control-user" placeholder="Tempat Lahir, Contoh: Sukoharjo" autocomplete="off" value="<?= old('password')?>" required>
                            </div> 
                            <div class="col-sm-6">
                                <input type="date" class="form-control form-control-user"
                                    name="tgl_lahir" placeholder="Tanggal Lahir" type="date" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="alamat"
                                placeholder="Alamat Rumah" value="<?= old('alamat')?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="asal_sekolah"
                                placeholder="Lulusan Dari Sekolah, Contoh : SMPN 3 Kartasura" value="<?= old('asal_sekolah')?>" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="lulusan_tahun"
                                placeholder="Lulusan SMP Tahun" value="<?= old('lulusan_tahun')?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" name="hobby"
                                placeholder="Hobi Siswa" value="<?= old('hobby')?>" required>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-check" style="font-size: 15px">
                            <input class="form-check-input small" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Periksa Kembali Data Anda
                            </label>
                            <div class="invalid-feedback">
                                Centang Apabila Sudah Diperiksa.
                            </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                        Daftar Akun
                        </button>
                    </form>
                    <div class="text-center">
                     <p><a class="small" href="<?= base_url('/login') ?>">Sudah Memiliki Akun?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection('content'); ?>
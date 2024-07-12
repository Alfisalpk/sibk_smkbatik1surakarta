<!-- <?= $this->extend('auth/templates/index'); ?> -->
<?= $this->section('content'); ?>

<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
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
                            <input type="username" class="form-control form-control-user" name="username"
                                placeholder="Nama Lengkap" value="<?= old('nama_lengkap')?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user" name="email"
                                placeholder="Email" value="<?= old('email')?>" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" name="password" class="form-control form-control-user" placeholder="Password" autocomplete="off" value="<?= old('password')?>" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"
                                    name="confirm_password" placeholder="Ulangi Password" type="password" autocomplete="off" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                        Daftar Akun
                        </button>
                    </form>
                    <hr>
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
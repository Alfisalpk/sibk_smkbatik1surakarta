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
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= url_to('register') ?>" method="post" class="user">
                        <?= csrf_field() ?>

                        <div class="form-group">
                            <input type="username" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username"
                                placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email"
                                placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" placeholder="Password Baru">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="Ulangi Password">
                            </div>
                        </div>
                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </a>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="login.html">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?= $this->endSection('content'); ?>
<?= $this->extend('auth/templates/index'); ?>
<?= $this->section('content'); ?>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div>
                                        <img src="<?= base_url() ?>/assets/img/logo_login.png" class="logo-persegi img-fluid" alt="Gambar Persegi">
                                        </div>
                                        <h1 class="h4 text-gray-900 mb-4">Sistem Informasi Bimbingan Konseling</h1>
                                        <h1 class="h4 text-gray-900 mb-4">SMK BATIK 1 SURAKARTA</h1>
                                    </div>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                    
                                    <!-- Coopy Dari Login MyAuth -->
                                    <form class="user" action="<?= url_to('login') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <?php if ($config->validFields === ['email']): ?>


                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login" aria-describedby="emailHelp"
                                                placeholder="Username / Email">
                                                <div class="invalid-feedback">
								                    <?= session('errors.login') ?>
							                    </div>
                                        </div>
                                        <?php else: ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                                name="login"
                                                placeholder="Username / Email">
                                                <div class="invalid-feedback">
								                    <?= session('errors.login') ?>
							                    </div>
                                        </div>
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                name="password" placeholder="Password">
                                                <div class="invalid-feedback">
								                <?= session('errors.password') ?>
							                    </div>
                                        </div>
                                        
                                        <?php if ($config->allowRemembering): ?>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <?php endif; ?>


                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    
                                    <?php if ($config->activeResetter): ?>

                                    <div class="text-center">
                                        <p><a class="small" href="<?= url_to('forgot') ?>">Lupa Password?</a></p>
                                    </div>
                                    <?php endif; ?>

                                        <?php if ($config->allowRegistration) : ?>
                                    <div class="text-center">
                                        <p><a class="small" href="<?= url_to('register') ?>">Belum Punya Akun?</a></p>
                                        <?php endif; ?>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?= $this->endSection('content'); ?>

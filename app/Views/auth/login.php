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
                                    
                                    
                                    <!-- Coopy Dari Login MyAuth -->
                                     <?php if (session()->getFlashdata('success')): ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= session()->getFlashdata('success') ?>
                                        </div>
                                    <?php endif; ?> 
                                     <?php if (session()->getFlashdata('error')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    <?php endif; ?> 

                                    <form class="user" action="<?= base_url('login') ?>" method="post">
                                    <?= csrf_field() ?>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" value="<?= old('identity')?>"
                                                name="username_or_email" aria-describedby="emailHelp"
                                                placeholder="Email atau Username">
                                                <div class="invalid-feedback">
							                    </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password">
                                                <div class="invalid-feedback">
								               
							                    </div>
                                        </div>
                                     
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
                                    
                                  

                                    <div class="text-center">
                                        <p><a class="small" href="<?= base_url('password/request') ?>">Lupa Password?</a></p>
                                    </div>
                                    

                                        
                                    <div class="text-center">
                                        <p><a class="small" href="<?= base_url('register') ?>">Buat Akun SIBK (Siswa)</a></p>
                                           
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

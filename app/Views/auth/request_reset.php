<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lupa Password</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>/assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- <link href="<?= base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet"> -->

</head>

<body class="bg-gradient-light">


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Area Konten Reset Password -->
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image_reset"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div>
                                        <img src="<?= base_url() ?>/assets/img/logo_login.png" class="logo-persegi img-fluid" alt="Gambar Persegi">
                                        </div>
                                        <h1 class="h2 text-gray-900 mb-4">LUPA PASSWORD?</h1>
                                        <h6 class="h6 text-gray-900 mb-4">Masukkan alamat Email yang terdaftar di bawah ini dan sistem akan mengirimkan tautan via Email untuk mengatur ulang kata sandi Anda!</h6>
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

                                    <form class="user" action="<?= base_url('password/request') ?>" method="post">
                                    <?= csrf_field() ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="email" aria-describedby="emailHelp"
                                                placeholder="Masukan Email">
                                                <div class="invalid-feedback">
							                    </div>
                                        </div>
                                                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Kirim Via Email
                                        </button>
                                        <hr>
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    
                                  

                                    <!-- <div class="text-center">
                                        <p><a class="small" href="<?= base_url('password/request') ?>">Lupa Password?</a></p>
                                    </div> -->
                                    

                                        
                                    <div class="text-center">
                                        <p><a class="small" href="<?= base_url('register') ?>">Belum Punya Akun?</a></p>
                                           
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>





    <footer class="footer text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0 text-muted">Skripsi <?= date('Y') ?> SMK Batik 1 Surakarta Dev By Alfisal Punjung K</p>
        </div>
    </footer>
</body>

</html>
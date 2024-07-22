<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Buat Password Baru</title>

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
                                        <h1 class="h4 text-gray-900 mb-4">BUAT PASSWORD BARU</h1>
                                        <h6 class="h6 text-gray-900 mb-4">Buat Password Baru Anda, Setelah Dibuat Akan Diarahkan Ke Halaman Login.</h6>
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

                                    <form class="user" action="<?= base_url('password/update') ?>" method="post">
                                    <?= csrf_field() ?>
                                        <div class="form-group">
                                        <input type="hidden" name="token" value="<?= $token ?>">    
                                        <input type="password" class="form-control form-control-user" id="pw1"
                                                name="password" 
                                                placeholder="Password Baru">
                                                <div class="invalid-feedback">
							                    </div>
                                        </div>
                                        <div class="form-group">   
                                        <input type="password" class="form-control form-control-user"
                                                id="pw2"
                                                placeholder="Ulangi Password">
                                                <div class="invalid-feedback">
							                    </div>
                                        </div>
                                                                       
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Simpan Password Baru
                                        </button>
                                        <hr>
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                   

                                    <script type="text/javascript">
                                    window.onload = function () {
                                        document.getElementById("pw1").onchange = validatePassword;
                                        document.getElementById("pw2").onchange = validatePassword;
                                    }

                                    function validatePassword(){
                                    var pass2=document.getElementById("pw2").value;
                                    var pass1=document.getElementById("pw1").value;
                                    if(pass1!=pass2)
                                        document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                                    else
                                        document.getElementById("pw2").setCustomValidity('');
                                    }
                                </script>
                                  

                                    <!-- <div class="text-center">
                                        <p><a class="small" href="<?= base_url('password/request') ?>">Lupa Password?</a></p>
                                    </div> -->              
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
            <!-- <p class="mb-0 text-muted">Copyright © <?= date('Y') ?> SMK Batik 1 Surakarta</p> -->
        </div>
    </footer>
</body>

</html>
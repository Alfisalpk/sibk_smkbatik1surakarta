<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIBK SMK Batik 1 Surakarta</title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/fontawesomeku/css/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/styleku.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- SweetAlert -->
   <!-- SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">

  <!--Start Data Tabless -->
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!--End Data Tabless -->
  <!-- Link to Select2 CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url() ?>/assets/dist/img/2.png" alt="SMK Batik 1 Surakarta" height="230" width="300">
  </div>

  <!-- Navbar -->
  <?= $this->include('templates/v_navbar'); ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link text-center">
      <img src="<?= base_url() ?>/assets/dist/img/2.png" alt="SMK Batik Logo" width="140">
    </a>

    <!-- Sidebar -->
    <?= $this->include('templates/v_sidebar'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?= $this->renderSection('page-content'); ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?= date('Y') ?> </strong>
    SIBK Skripsi
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url() ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>/assets/plugins/moment/moment.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url() ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>/assets/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>/assets/dist/js/pages/dashboard.js"></script>

<!--Start Data Tabless -->
<!-- DataTables  & Plugins -->
<script src="<?= base_url() ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Sweet Alert -->
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
<!-- Link to Select2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!--End Data Tabless -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "paging": false,
      
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
       $('#example2').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //   "scrollY": "300px", // Atur tinggi scroll vertikal
    //   "scrollX": true, // Aktifkan scroll horizontal
   
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script>
  $(function () {
    $("#example1ku").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "paging": false,
      
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
       $('#example2ku').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //   "scrollY": "300px", // Atur tinggi scroll vertikal
    //   "scrollX": true, // Aktifkan scroll horizontal
   
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>




<script>
    $(document).ready(function() {
        // Submit Form Tambah Guru
        $('#tambahGuruForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: '<?= base_url('admin/storeGuru') ?>',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: response.message
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan',
                        text: 'Terjadi kesalahan saat menambahkan guru.'
                    });
                }
            });
        });

        // Edit Guru
        $('#editGuruModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');

            $.ajax({
                url: '<?= base_url('admin/edit_guru/') ?>' + id,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        var guru = response.data;
                        $('#editId').val(guru.id);
                        $('#editRole').val(guru.role); // Memilih nilai yang sesuai dari dropdown
                        $('#editUsername').val(guru.username);
                        $('#editEmail').val(guru.email);
                        $('#editNip').val(guru.nip);
                        $('#editNamaPanggilan').val(guru.nama_panggilan);
                        $('#editJurusanPengampu').val(guru.jurusan_pengampu);
                        $('#editTempatLahir').val(guru.tempat_lahir);
                        $('#editTglLahir').val(guru.tgl_lahir);
                        $('#editJenisKelamin').val(guru.jenis_kelamin);
                        $('#editAgama').val(guru.agama);
                        $('#editNoTelepon').val(guru.no_telepon);
                        $('#editAlamat').val(guru.alamat);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan',
                        text: 'Terjadi kesalahan saat mengambil data guru.'
                    });
                }
            });
        });

        // Hapus Guru
        $('#deleteGuruModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            $('#deleteId').val(id);
        });

        // Submit Form Edit Guru
        $('#editGuruForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: '<?= base_url('admin/perbarui_guru') ?>',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: response.message
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan',
                        text: 'Terjadi kesalahan saat memperbarui data guru.'
                    });
                }
            });
        });

        // Submit Form Hapus Guru
        $('#deleteGuruForm').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: '<?= base_url('admin/hapus_guru') ?>',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Sukses',
                            text: response.message
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.message
                        });
                    }
                },
                error: function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi kesalahan',
                        text: 'Terjadi kesalahan saat menghapus data guru.'
                    });
                }
            });
        });
    });
</script>

<!-- START AJAX Untuk Halaman Data_Guru -->
<script>
        $(document).ready(function() {
            // Tambah Siswa
            $('#addSiswaBtn').click(function() {
                var formData = $('#addSiswaForm').serialize();
                $.ajax({
                    url: '<?= base_url('admin/storeSiswa') ?>',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message
                            });
                            $('#addSiswaModal').modal('hide');
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat menambahkan data.'
                        });
                    }
                });
            });

            // Edit Siswa
            $('#siswaTable').on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: '<?= base_url('admin/editSiswa') ?>/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            var siswa = response.data;
                            $('#edit_id').val(siswa.id);
                            $('#edit_nisn').val(siswa.nisn);
                            $('#edit_nama_lengkap').val(siswa.nama_lengkap);
                            $('#editSiswaModal').modal('show');
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat mengambil data.'
                        });
                    }
                });
            });

            // Proses untuk memperbarui data siswa
            $('#editSiswaBtn').click(function() {
                var id = $('#edit_id').val();
                var formData = $('#editSiswaForm').serialize();
                $.ajax({
                    url: '<?= base_url('admin/perbaruiSiswa') ?>',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message
                            });
                            $('#editSiswaModal').modal('hide');
                            location.reload();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat memperbarui data.'
                        });
                    }
                });
            });

            // Hapus Siswa
            $('#siswaTable').on('click', '.delete-btn', function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '<?= base_url('admin/hapusSiswa') ?>',
                            type: 'POST',
                            data: { id: id },
                            dataType: 'json',
                            success: function(response) {
                                if (response.status === 'success') {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Berhasil',
                                        text: response.message
                                    });
                                    location.reload();
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal',
                                        text: response.message
                                    });
                                }
                            },
                            error: function(xhr) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: 'Terjadi kesalahan saat menghapus data.'
                                });
                            }
                        });
                    }
                });
            });
        });
    </script>
<!-- END AJAX Untuk Halaman Data_Guru -->

<!-- START AJAX Untuk Halaman Data_NISN -->
<script>
        $(document).ready(function() {
            // Tambah Siswa
            $('#addSiswaBtnNISN').click(function() {
                var formData = $('#addSiswaForm').serialize();
                $.ajax({
                    url: '<?= base_url('admin/storeSiswa') ?>',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message
                            }).then(() => {
                                location.reload(); // Reload halaman setelah menekan OK
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat menambahkan data.'
                        });
                    }
                });
            });

            // Upload Excel
            $('#uploadExcelBtn').click(function() {
                var formData = new FormData($('#uploadExcelForm')[0]); // Menggunakan FormData untuk upload file
                $.ajax({
                    url: '<?= base_url('admin/uploadExcel') ?>',
                    type: 'POST',
                    data: formData,
                    processData: false, // Jangan proses data
                    contentType: false, // Jangan set content type
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message
                            }).then(() => {
                                location.reload(); // Reload halaman setelah menekan OK
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat mengunggah file.'
                        });
                    }
                });
            });

            // Edit Siswa
            $('#example2').on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                $.ajax({
                    url: '<?= base_url('admin/editSiswa') ?>/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            var siswa = response.data;
                            $('#edit_id').val(siswa.id);
                            $('#edit_nisn').val(siswa.nisn);
                            $('#edit_nama_lengkap').val(siswa.nama_lengkap);
                            $('#editSiswaModal').modal('show');
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat mengambil data.'
                        });
                    }
                });
            });

            // Proses untuk memperbarui data siswa
            $('#editSiswaBtnNISN').click(function() {
                var id = $('#edit_id').val();
                var formData = $('#editSiswaForm').serialize();
                $.ajax({
                    url: '<?= base_url('admin/perbaruiSiswa') ?>',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message
                            }).then(() => {
                                location.reload(); // Reload halaman setelah menekan OK
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat memperbarui data.'
                        });
                    }
                });
            });

            // Hapus Siswa
            $('#example2').on('click', '.delete-btn', function() {
                var id = $(this).data('id');
                $('#delete_id').val(id);
                $('#deleteSiswaModal').modal('show');
            });

            $('#deleteSiswaBtnNISN').click(function() {
                var id = $('#delete_id').val();
                $.ajax({
                    url: '<?= base_url('admin/hapusSiswa') ?>',
                    type: 'POST',
                    data: { id: id },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.message
                            }).then(() => {
                                location.reload(); // Reload halaman setelah menekan OK
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: response.message
                            });
                        }
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: 'Terjadi kesalahan saat menghapus data.'
                        });
                    }
                });
            });
        });
    </script>


<!-- END AJAX Untuk Halaman Data_NISN -->



<!-- START AJAX Untuk Halaman Data SIswa -->
<script>
        $('#editSiswaModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('daftarnisnsiswa-id');
            var nisn = button.data('daftarnisnsiswa-nisn');
            var username = button.data('daftarnisnsiswa-username');
            var nama_orangtua = button.data('daftarnisnsiswa-nama_orangtua');
            var kelas = button.data('daftarnisnsiswa-kelas');
            var jurusan = button.data('daftarnisnsiswa-jurusan');
            var jenis_kelamin = button.data('daftarnisnsiswa-jenis_kelamin');
            var agama = button.data('daftarnisnsiswa-agama');
            var nomor_wa = button.data('daftarnisnsiswa-nomor_wa');
            var nomor_wa_ortu = button.data('daftarnisnsiswa-nomor_wa_ortu');
            var tempat_lahir = button.data('daftarnisnsiswa-tempat_lahir');
            var tgl_lahir = button.data('daftarnisnsiswa-tgl_lahir');
            var alamat = button.data('daftarnisnsiswa-alamat');
            var email = button.data('daftarnisnsiswa-email');

            var modal = $(this);
            modal.find('#edit_id').val(id);
            modal.find('#edit_nisn').val(nisn);
            modal.find('#edit_nama_lengkap').val(username);
            modal.find('#edit_nama_orangtua').val(nama_orangtua);
            modal.find('#edit_kelas').val(kelas);
            modal.find('#edit_jurusan').val(jurusan);
            modal.find('#edit_jenis_kelamin').val(jenis_kelamin);
            modal.find('#edit_agama').val(agama);
            modal.find('#edit_nomor_wa').val(nomor_wa);
            modal.find('#edit_nomor_wa_ortu').val(nomor_wa_ortu);
            modal.find('#edit_tempat_lahir').val(tempat_lahir);
            modal.find('#edit_tgl_lahir').val(tgl_lahir);
            modal.find('#edit_alamat').val(alamat);
            modal.find('#edit_email').val(email);
        });

        $('#hapusSiswaModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('daftarnisnsiswa-id');

            var modal = $(this);
            modal.find('#hapus_id').val(id);
        });

        // Handle form submissions with SweetAlert
        $('#tambahSiswaForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data siswa berhasil ditambahkan!',
                        didClose: () => {
                            location.reload();
                        }
                    });
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Terjadi kesalahan saat menambahkan data siswa.'
                    });
                }
            });
        });

        $('#editSiswaForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data siswa berhasil diperbarui!',
                        didClose: () => {
                            location.reload();
                        }
                    });
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Terjadi kesalahan saat memperbarui data siswa.'
                    });
                }
            });
        });

        $('#hapusSiswaForm').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: 'Data siswa berhasil dihapus!',
                        didClose: () => {
                            location.reload();
                        }
                    });
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Terjadi kesalahan saat menghapus data siswa.'
                    });
                }
            });
        });
    </script>
<!-- END AJAX Untuk Halaman Data SIswa -->




<!-- START AJAX Untuk Halaman Kategori Pelanggaran -->
<script>
        $(document).ready(function() {
            $('.editBtn').on('click', function() {
                $('#id_pelanggaran').val($(this).data('id'));
                $('#edit_kategori_id').val($(this).data('kategori_id'));
                $('#edit_nama_pelanggaran').val($(this).data('nama_pelanggaran'));
                $('#edit_klasifikasi').val($(this).data('klasifikasi'));
                $('#edit_petugas_penanganan').val($(this).data('petugas_penanganan'));
                $('#edit_sanksi').val($(this).data('sanksi'));
            });

            // Handle delete button click
            $('.deleteBtn').on('click', function(e) {
                e.preventDefault();
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/admin/pelanggaran/delete/' + id,
                            type: 'GET',
                            success: function(response) {
                                var data = JSON.parse(response);
                                if (data.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Success',
                                        text: data.message
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Error',
                                        text: data.message
                                    });
                                }
                            },
                            error: function() {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'An error occurred while deleting the record.'
                                });
                            }
                        });
                    }
                });
            });

            // Handle add kategori form submission
            $('#addKategoriForm').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '/admin/kategori/store',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: data.message
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: data.message
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred while adding the category.'
                        });
                    }
                });
            });

            // Handle add pelanggaran form submission
            $('#addPelanggaranForm').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '/admin/pelanggaran/store',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: data.message
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: data.message
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred while adding the violation.'
                        });
                    }
                });
            });

            // Handle edit pelanggaran form submission
            $('#editPelanggaranForm').on('submit', function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    url: '/admin/pelanggaran/update',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        var data = JSON.parse(response);
                        if (data.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: data.message
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: data.message
                            });
                        }
                    },
                    error: function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred while updating the violation.'
                        });
                    }
                });
            });
        });
    </script>
<!-- END AJAX Untuk Halaman Kategori Pelanggaran -->



<!-- START AJAX Untuk Halaman Pelanggaran Siswa -->
<script>
    $(document).ready(function() {
        // Menampilkan notifikasi SweetAlert berdasarkan session flash data
        <?php if (session()->getFlashdata('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '<?= session()->getFlashdata('success') ?>',
                showConfirmButton: true
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '<?= session()->getFlashdata('error') ?>',
                showConfirmButton: true
            });
        <?php endif; ?>

        $('#kategori_id').change(function() {
            var kategori_id = $(this).val();
            $.ajax({
                url: '/admin/pelanggaran_siswa/getPelanggaranByKategori',
                type: 'POST',
                data: { kategori_id: kategori_id },
                dataType: 'json', // Menentukan tipe data yang diharapkan
                success: function(response) {
                    console.log('Response:', response);
                    var options = '<option value="">Pilih Pelanggaran</option>';
                    $.each(response, function(index, value) {
                        options += '<option value="' + value.id_pelanggaran + '">' + value.nama_pelanggaran + '</option>';
                    });
                    $('#pelanggaran_id').html(options);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching pelanggaran:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                }
            });
        });

        $('#kategori_id_edit').change(function() {
            var kategori_id = $(this).val();
            $.ajax({
                url: '/admin/pelanggaran_siswa/getPelanggaranByKategori',
                type: 'POST',
                data: { kategori_id: kategori_id },
                dataType: 'json', // Menentukan tipe data yang diharapkan
                success: function(response) {
                    console.log('Response:', response);
                    var options = '<option value="">Pilih Pelanggaran</option>';
                    $.each(response, function(index, value) {
                        options += '<option value="' + value.id_pelanggaran + '">' + value.nama_pelanggaran + '</option>';
                    });
                    $('#pelanggaran_id_edit').html(options);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching pelanggaran:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                }
            });
        });

        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var siswa_id = button.data('siswa_id');
            var kategori_id = button.data('kategori_id');
            var pelanggaran_id = button.data('pelanggaran_id');
            var tanggal = button.data('tanggal');
            var deskripsi = button.data('deskripsi');

            var modal = $(this);
            modal.find('#id').val(id);
            modal.find('#siswa_id_edit').val(siswa_id);
            modal.find('#kategori_id_edit').val(kategori_id);
            modal.find('#pelanggaran_id_edit').val(pelanggaran_id);
            modal.find('#tanggal_edit').val(tanggal);
            modal.find('#deskripsi_edit').val(deskripsi);

            // Set action URL form dengan ID yang sesuai
            modal.find('#editForm').attr('action', '/admin/pelanggaran_siswa/update/' + id);

            // Load pelanggaran berdasarkan kategori saat modal ditampilkan
            $.ajax({
                url: '/admin/pelanggaran_siswa/getPelanggaranByKategori',
                type: 'POST',
                data: { kategori_id: kategori_id },
                dataType: 'json', // Menentukan tipe data yang diharapkan
                success: function(response) {
                    console.log('Response:', response);
                    var options = '<option value="">Pilih Pelanggaran</option>';
                    $.each(response, function(index, value) {
                        options += '<option value="' + value.id_pelanggaran + '">' + value.nama_pelanggaran + '</option>';
                    });
                    modal.find('#pelanggaran_id_edit').html(options);
                    modal.find('#pelanggaran_id_edit').val(pelanggaran_id);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching pelanggaran:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                }
            });
        });

        // Konfirmasi tambah data
        $('#addSubmitBtn').click(function() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan ditambahkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, tambah!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#addForm').submit();
                }
            });
        });

        // Konfirmasi edit data
        $('#editSubmitBtn').click(function() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan diperbarui!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, perbarui!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#editForm').submit();
                }
            });
        });

        // Konfirmasi hapus data
        $('.delete-btnpelanggaransiswa').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/pelanggaran_siswa/delete/' + id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message,
                                    showConfirmButton: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: response.message,
                                    showConfirmButton: true
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting data:', error);
                            console.error('Status:', status);
                            console.error('Response Text:', xhr.responseText);
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: 'Terjadi kesalahan saat menghapus data.',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });
        });

        // Menangani submit form tambah dengan SweetAlert
        $('#addForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                            showConfirmButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: response.message,
                            showConfirmButton: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error submitting form:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Admin - Terjadi kesalahan saat menambahkan data.',
                        showConfirmButton: true
                    });
                }
            });
        });

        // Menangani submit form edit dengan SweetAlert
        $('#editForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                            showConfirmButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: response.message,
                            showConfirmButton: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error submitting form:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Admin - Terjadi kesalahan saat memperbarui data.',
                        showConfirmButton: true
                    });
                }
            });
        });

        // Menangani klik tombol Detail
        $('.detail-btn').click(function(e) {
            e.preventDefault();
            var siswa_id = $(this).data('id');

            $.ajax({
                url: '/admin/pelanggaran_siswa/getUserById',
                type: 'POST',
                data: { id: siswa_id },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#detailNamaLengkap').val(response.user.username);
                        $('#detailEmail').val(response.user.email);
                        $('#detailNis').val(response.user.nisn);
                        // Menggabungkan Kelas dan Jurusan
                        var kelasJurusan = response.user.kelas + ' ' + response.user.jurusan;
                        $('#detailKelasJurusan').val(kelasJurusan);
                        $('#detailJenis_Kelamin').val(response.user.jenis_kelamin);
                        $('#detailAgama').val(response.user.agama);
                        $('#detailNomor_Wa').val(response.user.nomor_wa);
                        $('#detailNomor_WA_Ortu').val(response.user.nomor_wa_ortu);
                        $('#detailAlamat').val(response.user.alamat);
                          // Menampilkan gambar siswa
                          var fotoUrl = '/' + response.user.foto;
                        $('#detailFoto').attr('src', fotoUrl);
                        // Tambahkan field lainnya sesuai kebutuhan

                        $('#detailModal').modal('show');
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: response.message,
                            showConfirmButton: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching user data:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Admin - Terjadi kesalahan saat mengambil data siswa.',
                        showConfirmButton: true
                    });
                }
            });
        });
    });

</script>
<!-- END AJAX Untuk Halaman Pelanggaran Siswa -->



<!-- START AJAX Untuk Halaman Bimbingan Konseling -->
<script>
        $(document).ready(function() {
            $('#editModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id_bimbingankonseling = button.data('id');
                var user_id = button.data('user-id');
                var tanggal = button.data('tanggal');
                var pertemuan_ke = button.data('pertemuan-ke');
                var waktu = button.data('waktu');
                var tempat = button.data('tempat');
                var permasalahan = button.data('permasalahan');
                var hasil = button.data('hasil');

                var modal = $(this);
                modal.find('.modal-body #id_bimbingankonseling').val(id_bimbingankonseling);
                modal.find('.modal-body #edit_user_id').val(user_id);
                modal.find('.modal-body #edit_tanggal').val(tanggal);
                modal.find('.modal-body #edit_pertemuan_ke').val(pertemuan_ke);
                modal.find('.modal-body #edit_waktu').val(waktu);
                modal.find('.modal-body #edit_tempat').val(tempat);
                modal.find('.modal-body #edit_permasalahan').val(permasalahan);
                modal.find('.modal-body #edit_hasil').val(hasil);
            });

            $('#addBimbinganBtn').on('click', function() {
                $.ajax({
                    url: '/admin/bimbingan_konseling/store',
                    type: 'POST',
                    data: $('#addForm').serialize(),
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Sukses',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error',
                            text: 'Terjadi kesalahan saat menambahkan data.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });

            $('#editBimbinganBtn').on('click', function() {
                $.ajax({
                    url: '/admin/bimbingan_konseling/update',
                    type: 'POST',
                    data: $('#editForm').serialize(),
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Sukses',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error',
                            text: 'Terjadi kesalahan saat memperbarui data.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });

        function deleteBimbinganKonseling(id_bimbingankonseling) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/bimbingan_konseling/delete/' + id_bimbingankonseling,
                        type: 'GET',
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    title: 'Sukses',
                                    text: response.message,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error',
                                    text: response.message,
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
        }
    </script>
<!-- END AJAX Untuk Halaman Bimbingan Konseling -->



<!-- ------------------------Area Guru BK---------------------------------------------- -->
<!-- START AJAX Untuk Halaman Pelanggaran Siswa - GURU BK -->  

<script>
    $(document).ready(function() {
        // Menampilkan notifikasi SweetAlert berdasarkan session flash data
        <?php if (session()->getFlashdata('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '<?= session()->getFlashdata('success') ?>',
                showConfirmButton: true
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            });
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '<?= session()->getFlashdata('error') ?>',
                showConfirmButton: true
            });
        <?php endif; ?>

        $('#kategori_id').change(function() {
            var kategori_id = $(this).val();
            $.ajax({
                url: '/guru_bk/pelanggaran_siswa/getPelanggaranByKategori',
                type: 'POST',
                data: { kategori_id: kategori_id },
                dataType: 'json', // Menentukan tipe data yang diharapkan
                success: function(response) {
                    console.log('Response:', response);
                    var options = '<option value="">Pilih Pelanggaran</option>';
                    $.each(response, function(index, value) {
                        options += '<option value="' + value.id_pelanggaran + '">' + value.nama_pelanggaran + '</option>';
                    });
                    $('#pelanggaran_id').html(options);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching pelanggaran:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                }
            });
        });

        $('#kategori_id_edit').change(function() {
            var kategori_id = $(this).val();
            $.ajax({
                url: '/guru_bk/pelanggaran_siswa/getPelanggaranByKategori',
                type: 'POST',
                data: { kategori_id: kategori_id },
                dataType: 'json', // Menentukan tipe data yang diharapkan
                success: function(response) {
                    console.log('Response:', response);
                    var options = '<option value="">Pilih Pelanggaran</option>';
                    $.each(response, function(index, value) {
                        options += '<option value="' + value.id_pelanggaran + '">' + value.nama_pelanggaran + '</option>';
                    });
                    $('#pelanggaran_id_edit').html(options);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching pelanggaran:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                }
            });
        });

        $('#BKPelanggaraneditModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var siswa_id = button.data('siswa_id');
            var kategori_id = button.data('kategori_id');
            var pelanggaran_id = button.data('pelanggaran_id');
            var tanggal = button.data('tanggal');
            var deskripsi = button.data('deskripsi');

            var modal = $(this);
            modal.find('#id').val(id);
            modal.find('#siswa_id_edit').val(siswa_id);
            modal.find('#kategori_id_edit').val(kategori_id);
            modal.find('#pelanggaran_id_edit').val(pelanggaran_id);
            modal.find('#tanggal_edit').val(tanggal);
            modal.find('#deskripsi_edit').val(deskripsi);

            // Set action URL form dengan ID yang sesuai
            modal.find('#BKPelanggaraneditForm').attr('action', '/guru_bk/pelanggaran_siswa/update/' + id);

            // Load pelanggaran berdasarkan kategori saat modal ditampilkan
            $.ajax({
                url: '/guru_bk/pelanggaran_siswa/getPelanggaranByKategori',
                type: 'POST',
                data: { kategori_id: kategori_id },
                dataType: 'json', // Menentukan tipe data yang diharapkan
                success: function(response) {
                    console.log('Response:', response);
                    var options = '<option value="">Pilih Pelanggaran</option>';
                    $.each(response, function(index, value) {
                        options += '<option value="' + value.id_pelanggaran + '">' + value.nama_pelanggaran + '</option>';
                    });
                    modal.find('#pelanggaran_id_edit').html(options);
                    modal.find('#pelanggaran_id_edit').val(pelanggaran_id);
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching pelanggaran:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                }
            });
        });

        // Konfirmasi tambah data
        $('#BKPelanggaranaddSubmitBtn').click(function() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan ditambahkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, tambah!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#BKPelanggaranaddForm').submit();
                }
            });
        });

        // Konfirmasi edit data
        $('#BKPelanggaraneditSubmitBtn').click(function() {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan diperbarui!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, perbarui!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#BKPelanggaraneditForm').submit();
                }
            });
        });

        // Konfirmasi hapus data
        $('.delete-BKbtnpelanggaransiswa').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/guru_bk/pelanggaran_siswa/delete/' + id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.message,
                                    showConfirmButton: true
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Gagal',
                                    text: response.message,
                                    showConfirmButton: true
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error deleting data:', error);
                            console.error('Status:', status);
                            console.error('Response Text:', xhr.responseText);
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal',
                                text: 'Terjadi kesalahan saat menghapus data.',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });
        });

        // Menangani submit form tambah dengan SweetAlert
        $('#BKPelanggaranaddForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                            showConfirmButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: response.message,
                            showConfirmButton: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error submitting form:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Guru BK - Terjadi kesalahan saat menambahkan data.',
                        showConfirmButton: true
                    });
                }
            });
        });

        // Menangani submit form edit dengan SweetAlert
        $('#BKPelanggaraneditForm').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                            showConfirmButton: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: response.message,
                            showConfirmButton: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error submitting form:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Admin - Terjadi kesalahan saat memperbarui data.',
                        showConfirmButton: true
                    });
                }
            });
        });

        // Menangani klik tombol Detail
        $('.detail-BKPelanggaranbtn').click(function(e) {
            e.preventDefault();
            var siswa_id = $(this).data('id');

            $.ajax({
                url: '/guru_bk/pelanggaran_siswa/getUserById',
                type: 'POST',
                data: { id: siswa_id },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#detailNamaLengkap').val(response.user.username);
                        $('#detailEmail').val(response.user.email);
                        $('#detailNis').val(response.user.nisn);
                        // Menggabungkan Kelas dan Jurusan
                        var kelasJurusan = response.user.kelas + ' ' + response.user.jurusan;
                        $('#detailKelasJurusan').val(kelasJurusan);
                        $('#detailJenis_Kelamin').val(response.user.jenis_kelamin);
                        $('#detailAgama').val(response.user.agama);
                        $('#detailNomor_Wa').val(response.user.nomor_wa);
                        $('#detailNomor_WA_Ortu').val(response.user.nomor_wa_ortu);
                        $('#detailAlamat').val(response.user.alamat);
                          // Menampilkan gambar siswa
                          var fotoUrl = '/' + response.user.foto;
                        $('#detailFoto').attr('src', fotoUrl);
                        // Tambahkan field lainnya sesuai kebutuhan

                        $('#detailModal').modal('show');
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: response.message,
                            showConfirmButton: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching user data:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Admin - Terjadi kesalahan saat mengambil data siswa.',
                        showConfirmButton: true
                    });
                }
            });
        });
    });

</script>
<!-- END AJAX Untuk Halaman Pelanggaran Siswa - GURU BK -->  



<!-- START AJAX Untuk Halaman Bimbingan Konseling - GURU BK -->
<script>
        $(document).ready(function() {
            $('#BKPelanggaraneditModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var id_bimbingankonseling = button.data('id');
                var user_id = button.data('user-id');
                var tanggal = button.data('tanggal');
                var pertemuan_ke = button.data('pertemuan-ke');
                var waktu = button.data('waktu');
                var tempat = button.data('tempat');
                var permasalahan = button.data('permasalahan');
                var hasil = button.data('hasil');

                var modal = $(this);
                modal.find('.modal-body #id_bimbingankonseling').val(id_bimbingankonseling);
                modal.find('.modal-body #edit_user_id').val(user_id);
                modal.find('.modal-body #edit_tanggal').val(tanggal);
                modal.find('.modal-body #edit_pertemuan_ke').val(pertemuan_ke);
                modal.find('.modal-body #edit_waktu').val(waktu);
                modal.find('.modal-body #edit_tempat').val(tempat);
                modal.find('.modal-body #edit_permasalahan').val(permasalahan);
                modal.find('.modal-body #edit_hasil').val(hasil);
            });

            $('#BKaddBimbinganBtn').on('click', function() {
                $.ajax({
                    url: '/guru_bk/bimbingan_konseling/store',
                    type: 'POST',
                    data: $('#BKaddForm').serialize(),
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Sukses',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error',
                            text: 'Terjadi kesalahan saat menambahkan data.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });

            $('#BKeditBimbinganBtn').on('click', function() {
                $.ajax({
                    url: '/guru_bk/bimbingan_konseling/update',
                    type: 'POST',
                    data: $('#BKeditForm').serialize(),
                    success: function(response) {
                        if (response.status === 'success') {
                            Swal.fire({
                                title: 'Sukses',
                                text: response.message,
                                icon: 'success',
                                confirmButtonText: 'OK'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                title: 'Error',
                                text: response.message,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error',
                            text: 'Terjadi kesalahan saat memperbarui data.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });

        function BKdeleteBimbinganKonseling(id_bimbingankonseling) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/guru_bk/bimbingan_konseling/delete/' + id_bimbingankonseling,
                        type: 'GET',
                        success: function(response) {
                            if (response.status === 'success') {
                                Swal.fire({
                                    title: 'Sukses',
                                    text: response.message,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error',
                                    text: response.message,
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                title: 'Error',
                                text: 'Terjadi kesalahan saat menghapus data.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    });
                }
            });
        }
    </script>
<!-- END AJAX Untuk Halaman Bimbingan Konseling -->


<!-- START AJAX Untuk Halaman Panggilan Siswa - Guru BK -->
<script>  
        $(document).ready(function() {  
            // Tambah Data  
            $('#BKPanggilanaddForm').on('submit', function(e) {  
                e.preventDefault();  
                $.ajax({  
                    url: '/guru_bk/data_panggilan_siswa/store',  
                    type: 'POST',  
                    data: $(this).serialize(),  
                    dataType: 'json',  
                    success: function(response) {  
                        if (response.status === 'success') {  
                            Swal.fire({  
                                title: 'Sukses',  
                                text: response.message,  
                                icon: 'success',  
                                confirmButtonText: 'OK'  
                            }).then((result) => {  
                                if (result.isConfirmed) {  
                                    location.reload();  
                                }  
                            });  
                        } else {  
                            Swal.fire({  
                                title: 'Gagal',  
                                text: response.message,  
                                icon: 'error',  
                                confirmButtonText: 'OK'  
                            });  
                        }  
                    },  
                    error: function() {  
                        Swal.fire({  
                            title: 'Gagal',  
                            text: 'Terjadi kesalahan saat menambahkan data.',  
                            icon: 'error',  
                            confirmButtonText: 'OK'  
                        });  
                    }  
                });  
            });  
  
            // Edit Data  
            $('.BKPanggilaneditBtn').on('click', function() {  
                var id_panggilansiswa = $(this).data('id');  
                $.ajax({  
                    url: '/guru_bk/data_panggilan_siswa/edit/' + id_panggilansiswa,  
                    type: 'GET',  
                    dataType: 'json',  
                    success: function(response) {  
                        if (response.status === 'success') {  
                            var data = response.data;  
                            $('#edit_id_panggilansiswa').val(data.id_panggilansiswa);  
                            $('#edit_user_id').val(data.user_id);  
                            $('#edit_tanggal').val(data.tanggal);  
                            $('#edit_jam_ke').val(data.jam_ke);  
                            $('#edit_keperluan').val(data.keperluan);  
                            $('#edit_tempat').val(data.tempat);  
                            $('#edit_hasil_panggilan').val(data.hasil_panggilan);  
                            $('#BKPanggilaneditModal').modal('show');  
                        } else {  
                            Swal.fire({  
                                title: 'Gagal',  
                                text: response.message,  
                                icon: 'error',  
                                confirmButtonText: 'OK'  
                            });  
                        }  
                    },  
                    error: function() {  
                        Swal.fire({  
                            title: 'Gagal',  
                            text: 'Terjadi kesalahan saat mengambil data.',  
                            icon: 'error',  
                            confirmButtonText: 'OK'  
                        });  
                    }  
                });  
            });  
  
            // Simpan Edit Data  
            $('#BKPanggilaneditForm').on('submit', function(e) {  
                e.preventDefault();  
                $.ajax({  
                    url: '/guru_bk/data_panggilan_siswa/update/' + $('#edit_id_panggilansiswa').val(),  
                    type: 'POST',  
                    data: $(this).serialize(),  
                    dataType: 'json',  
                    success: function(response) {  
                        if (response.status === 'success') {  
                            Swal.fire({  
                                title: 'Sukses',  
                                text: response.message,  
                                icon: 'success',  
                                confirmButtonText: 'OK'  
                            }).then((result) => {  
                                if (result.isConfirmed) {  
                                    location.reload();  
                                }  
                            });  
                        } else {  
                            Swal.fire({  
                                title: 'Gagal',  
                                text: response.message,  
                                icon: 'error',  
                                confirmButtonText: 'OK'  
                            });  
                        }  
                    },  
                    error: function() {  
                        Swal.fire({  
                            title: 'Gagal',  
                            text: 'Terjadi kesalahan saat memperbarui data.',  
                            icon: 'error',  
                            confirmButtonText: 'OK'  
                        });  
                    }  
                });  
            });  
  
            // Hapus Data  
            $('.BKPanggilandeleteBtn').on('click', function() {  
                var id_panggilansiswa = $(this).data('id');  
                Swal.fire({  
                    title: 'Apakah Anda yakin?',  
                    text: "Anda tidak akan dapat mengembalikan data ini!",  
                    icon: 'warning',  
                    showCancelButton: true,  
                    confirmButtonColor: '#3085d6',  
                    cancelButtonColor: '#d33',  
                    confirmButtonText: 'Ya, hapus!'  
                }).then((result) => {  
                    if (result.isConfirmed) {  
                        $.ajax({  
                            url: '/guru_bk/data_panggilan_siswa/delete/' + id_panggilansiswa,  
                            type: 'GET',  
                            dataType: 'json',  
                            success: function(response) {  
                                if (response.status === 'success') {  
                                    Swal.fire({  
                                        title: 'Sukses',  
                                        text: response.message,  
                                        icon: 'success',  
                                        confirmButtonText: 'OK'  
                                    }).then((result) => {  
                                        if (result.isConfirmed) {  
                                            location.reload();  
                                        }  
                                    });  
                                } else {  
                                    Swal.fire({  
                                        title: 'Gagal',  
                                        text: response.message,  
                                        icon: 'error',  
                                        confirmButtonText: 'OK'  
                                    });  
                                }  
                            },  
                            error: function() {  
                                Swal.fire({  
                                    title: 'Gagal',  
                                    text: 'Terjadi kesalahan saat menghapus data.',  
                                    icon: 'error',  
                                    confirmButtonText: 'OK'  
                                });  
                            }  
                        });  
                    }  
                });  
            });  
        });  
    </script>  
<!-- END AJAX Untuk Halaman Data Panggilan Siswa-->



<!-- START AJAX Untuk Halaman Data Kunjungan Siswa-->
<script>  
    $(document).ready(function() {  
            // Modal Detail  
        $('.BKVisitdetail-btn').on('click', function(e) {  
            e.preventDefault();  
            var id_kunjungan_siswa = $(this).data('id');  
  
            $.ajax({  
                url: '/guru_bk/homevisit/detail',  
                type: 'POST',  
                data: { id_kunjungan_siswa: id_kunjungan_siswa },  
                dataType: 'json',  
                success: function(response) {  
                    if (response.success) {  
                        var data = response.data;  
                        if (data.users) {  
                            $('#BKDetail_id_siswa').val(data.users.nama_lengkap);  
                            $('#BKDetail_nisn').val(data.users.nisn);  
                            $('#BKDetail_kelas_jurusan').val(data.users.kelas + ' / ' + data.users.jurusan);  
                            $('#BKDetail_nama_orangtua').val(data.users.nama_orangtua);  
                            $('#BKDetail_alamat').val(data.users.alamat);  
                            $('#BKDetail_permasalahan').val(data.permasalahan);  
                            $('#BKDetail_latar_belakang_sosial_ekonomi').val(data.latar_belakang_sosial_ekonomi);  
                            $('#BKDetail_faktor_dari_orangtua').val(data.faktor_dari_orangtua);  
                            $('#BKDetail_kesan_petugas').val(data.kesan_petugas);  
                            $('#BKDetail_rencana_penanganan').val(data.rencana_penanganan);  
                            $('#BKDetail_evaluasi').val(data.evaluasi);  
                            $('#BKDetail_apabila_siswa_kost').val(data.apabila_siswa_kost);  
                            $('#BKDetail_yang_melaksanakan').val(data.yang_melaksanakan);  
                            $('#BKDetailModal').modal('show');  
                        } else {  
                            Swal.fire({  
                                icon: 'error',  
                                title: 'Gagal',  
                                text: 'Data siswa tidak ditemukan'  
                            });  
                        }  
                    } else {  
                        Swal.fire({  
                            icon: 'error',  
                            title: 'Gagal',  
                            text: response.message  
                        });  
                    }  
                },  
                error: function(xhr, status, error) {  
                    console.error('Error fetching user data:', error);  
                    console.error('Status:', status);  
                    console.error('Response Text:', xhr.responseText);  
                    Swal.fire({  
                        icon: 'error',  
                        title: 'Gagal',  
                        text: 'Terjadi kesalahan saat memuat data'  
                    });  
                }  
            });  
        });  
       

           
           
            // Modal Edit  
            $('#BKVisiteditModal').on('show.bs.modal', function (event) {  
                var button = $(event.relatedTarget);  
                var id_kunjungan_siswa = button.data('id');  
                var modal = $(this);  
  
                $.ajax({  
                    url: '/guru_bk/homevisit/edit/' + id_kunjungan_siswa,  
                    method: 'GET',  
                    dataType: 'json',  
                    success: function(data) {  
                        modal.find('#id_kunjungan_siswa').val(data.id_kunjungan_siswa);  
                        modal.find('#edit_id_siswa').val(data.id_siswa);  
                        modal.find('#edit_permasalahan').val(data.permasalahan);  
                        modal.find('#edit_latar_belakang_sosial_ekonomi').val(data.latar_belakang_sosial_ekonomi);  
                        modal.find('#edit_faktor_dari_orangtua').val(data.faktor_dari_orangtua);  
                        modal.find('#edit_kesan_petugas').val(data.kesan_petugas);  
                        modal.find('#edit_rencana_penanganan').val(data.rencana_penanganan);  
                        modal.find('#edit_evaluasi').val(data.evaluasi);  
                        modal.find('#edit_apabila_siswa_kost').val(data.apabila_siswa_kost);  
                        modal.find('#edit_yang_melaksanakan').val(data.yang_melaksanakan);  
                        modal.find('#BKKunjunganeditForm').attr('action', '/guru_bk/homevisit/update/' + data.id_kunjungan_siswa);  
                    }  
                });  
            });  
  
            // Form Tambah  
            $('#BKKunjungaaddModal form').on('submit', function(e) {  
                e.preventDefault();  
                var formData = $(this).serialize();  
  
                $.ajax({  
                    url: '/guru_bk/homevisit/store',  
                    method: 'POST',  
                    data: formData,  
                    success: function(response) {  
                        Swal.fire({  
                            icon: 'success',  
                            title: 'Berhasil',  
                            text: 'Data berhasil ditambahkan',  
                            didClose: () => {  
                                location.reload();  
                            }  
                        });  
                    },  
                    error: function(xhr, status, error) {  
                        Swal.fire({  
                            icon: 'error',  
                            title: 'Gagal',  
                            text: 'Terjadi kesalahan saat menambahkan data'  
                        });  
                    }  
                });  
            });  
  
            // Form Edit  
            $('#BKKunjunganeditForm').on('submit', function(e) {  
                e.preventDefault();  
                var formData = $(this).serialize();  
  
                $.ajax({  
                    url: $(this).attr('action'),  
                    method: 'POST',  
                    data: formData,  
                    success: function(response) {  
                        Swal.fire({  
                            icon: 'success',  
                            title: 'Berhasil',  
                            text: 'Data berhasil diperbarui',  
                            didClose: () => {  
                                location.reload();  
                            }  
                        });  
                    },  
                    error: function(xhr, status, error) {  
                        Swal.fire({  
                            icon: 'error',  
                            title: 'Gagal',  
                            text: 'Terjadi kesalahan saat memperbarui data'  
                        });  
                    }  
                });  
            });  
  
            // Hapus Data  
            $('.delete-btn').on('click', function(e) {  
                e.preventDefault();  
                var id_kunjungan_siswa = $(this).data('id');  
  
                Swal.fire({  
                    title: 'Apakah Anda yakin?',  
                    text: "Anda tidak akan dapat mengembalikan data ini!",  
                    icon: 'warning',  
                    showCancelButton: true,  
                    confirmButtonColor: '#3085d6',  
                    cancelButtonColor: '#d33',  
                    confirmButtonText: 'Ya, hapus!'  
                }).then((result) => {  
                    if (result.isConfirmed) {  
                        $.ajax({  
                            url: '/guru_bk/homevisit/delete/' + id_kunjungan_siswa,  
                            method: 'GET',  
                            success: function(response) {  
                                Swal.fire({  
                                    icon: 'success',  
                                    title: 'Berhasil',  
                                    text: 'Data berhasil dihapus',  
                                    didClose: () => {  
                                        location.reload();  
                                    }  
                                });  
                            },  
                            error: function(xhr, status, error) {  
                                Swal.fire({  
                                    icon: 'error',  
                                    title: 'Gagal',  
                                    text: 'Terjadi kesalahan saat menghapus data'  
                                });  
                            }  
                        });  
                    }  
                });  
            });  
        });  
    </script>  
<!-- END AJAX Untuk Halaman Data Kunjungan Siswa-->





<!-- ------------------------Area Guru BK---------------------------------------------- -->
<!-- START AJAX Untuk Data Halaman Pelanggaran Siswa - Kepala Sekolah -->
 
<script>
    $(document).ready(function() {
        
        // Menangani klik tombol Detail
        $('.detail-KepsekPelanggaranbtn').click(function(e) {
            e.preventDefault();
            var siswa_id = $(this).data('id');

            $.ajax({
                url: '/kepala_sekolah/data_pelanggaran_siswa/getUserById',
                type: 'POST',
                data: { id: siswa_id },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#detailNamaLengkap').val(response.user.username);
                        $('#detailEmail').val(response.user.email);
                        $('#detailNis').val(response.user.nisn);
                        // Menggabungkan Kelas dan Jurusan
                        var kelasJurusan = response.user.kelas + ' ' + response.user.jurusan;
                        $('#detailKelasJurusan').val(kelasJurusan);
                        $('#detailJenis_Kelamin').val(response.user.jenis_kelamin);
                        $('#detailAgama').val(response.user.agama);
                        $('#detailNomor_Wa').val(response.user.nomor_wa);
                        $('#detailNomor_WA_Ortu').val(response.user.nomor_wa_ortu);
                        $('#detailAlamat').val(response.user.alamat);
                          // Menampilkan gambar siswa
                          var fotoUrl = '/' + response.user.foto;
                        $('#detailFoto').attr('src', fotoUrl);
                        // Tambahkan field lainnya sesuai kebutuhan

                        $('#detailModal').modal('show');
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: response.message,
                            showConfirmButton: true
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching user data:', error);
                    console.error('Status:', status);
                    console.error('Response Text:', xhr.responseText);
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: 'Kepsek - Terjadi kesalahan saat mengambil data siswa.',
                        showConfirmButton: true
                    });
                }
            });
        });
    });

</script>
<!-- END AJAX Untuk Halaman Data Pelanggaran Siswa - Kepala Sekolah -->  






</body>
</html>

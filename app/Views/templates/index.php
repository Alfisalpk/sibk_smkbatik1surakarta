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

<!--End Data Tabless -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      "buttons": ["csv", "excel", "pdf"]
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
            var nama_lengkap = button.data('daftarnisnsiswa-nama_lengkap');
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
            modal.find('#edit_nama_lengkap').val(nama_lengkap);
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
</body>
<!-- END AJAX Untuk Halaman Kategori Pelanggaran -->





</body>
</html>

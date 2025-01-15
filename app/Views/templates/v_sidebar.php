<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <!-- <img src="<?= base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
      <a class="nav-link" href="#">
       
      Selamat Datang, <br>
        <?= session()->get('username') ?>
      </a>
    </div>
    <div class="info">
      <a href="#" class="d-block"></a>
    </div>
  </div>
  
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           
      <!-- Start Sidebar Admin -->
      <?php if (in_groups([1])): // Admin ?>
        <li class="nav-item">
          <a href="<?= base_url('/admin/dashboard') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        
        <li class="nav-item <?= $menu == 'master_data' ? 'menu-open' : '' ?>">
          <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-school"></i>
            <p>
              Master Data
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('/admin/data_guru') ?>" class="nav-link <?= $submenu == 'data_guru' ? 'active' : '' ?>">
                <i class="nav-icon fa-solid fa-chalkboard-user"></i>
                <p>
                  Data Guru
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('/admin/bimbingan_konseling') ?>" class="nav-link <?= $submenu == 'bimbingan_konseling' ? 'active' : '' ?>">
                <i class="nav-icon fa-solid fa-user-group"></i>
                <p>
                  Bimbingan Konseling
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('/admin/data_nisn') ?>" class="nav-link <?= $submenu == 'data_nisn' ? 'active' : '' ?>">
                <i class="nav-icon fa-solid fa-user-graduate"></i>
                <p>
                  Data NISN Siswa
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('/admin/pelanggaran_siswa') ?>" class="nav-link <?= $submenu == 'pelanggaran_siswa' ? 'active' : '' ?>">
                <i class="nav-icon fa-solid fa-person-chalkboard"></i>
                <p>
                  Pelanggaran Siswa
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('/admin/kategori_pelanggaran') ?>" class="nav-link <?= $submenu == 'kategori_pelanggaran' ? 'active' : '' ?>">
                <i class="nav-icon fa-solid fa-clipboard-user"></i>
                <p>
                  Kategori Pelanggaran
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('/admin/daftar_siswa') ?>" class="nav-link <?= $submenu == 'daftar_siswa' ? 'active' : '' ?>">
                <i class="nav-icon fa-solid fa-users"></i>
                <p>
                  Daftar Siswa
                </p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-header">Data Laporan</li>
        <li class="nav-item">
          <a href="<?= base_url('/admin/laporan_bimbingan_siswa') ?>" class="nav-link <?= $submenu == 'lap_bimbingan_konseling' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-file"></i>
            <p>Laporan Bimbingan Konseling</p>
          </a>
        </li>

        <!-- <li class="nav-header">Pengaturan Profile</li>
        <li class="nav-item">
          <a href="<?= base_url('/admin/test') ?>" class="nav-link <?= $menu == 'pengaturan_profile' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-regular fa-id-card"></i>
            <p>Pengaturan Profile</p>
          </a>
        </li> -->
      <?php endif; ?>
      
      <!-- End Sidebar Admin -->

      <!-- Area Sidebar Siswa -->
      <?php if (in_groups([3])): // Siswa ?>
        <li class="nav-item">
          <a href="<?= base_url('/siswa/dashboard') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-solid fa-user-clock"></i>
            <p>Dashboard</p>
          </a>
        </li>
       
        <li class="nav-item">
          <a href="<?= base_url('/siswa/pelanggaran_siswa') ?>" class="nav-link <?= $menu == 'pelanggaran_siswa' ? 'active' : '' ?>">
          <i class="nav-icon fa-solid fa-person-chalkboard"></i>
            <p>Riwayat Pelanggaran</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/siswa/riwayat_bimbingan_konseling') ?>" class="nav-link <?= $menu == 'riwayat_bimbingan' ? 'active' : '' ?>">
          <i class="nav-icon fa-solid fa-user-group"></i>
            <p>Riwayat Bimbingan Konseling</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('/siswa/pengaturan_profile_siswa') ?>" class="nav-link <?= $menu == 'pengaturan_profile_siswa' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-solid fa-sliders"></i>
            <p>Pengaturan Profile</p>
          </a>
        </li>
      <?php endif; ?>
        <!-- END Area Sidebar Siswa -->
        
        
        
        <!-- START Area Sidebar Guru BK -->
      <?php if (in_groups([4])): // Guru BK ?>
        <li class="nav-item">
          <a href="<?= base_url('/guru_bk/dashboard') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
            <i class="nav-icon fas fa-solid fa-user-clock"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/guru_bk/daftar_siswa_bk') ?>" class="nav-link <?= $menu == 'daftar_siswa' ? 'active' : '' ?>">
          <i class="nav-icon fa-solid fa-users"></i>
            <p>Daftar Siswa</p>
          </a>
        </li>
       
        <li class="nav-item">
          <a href="<?= base_url('/guru_bk/kelola_pelanggaran_bk') ?>" class="nav-link <?= $menu == 'pelanggaran_siswa' ? 'active' : '' ?>">
          <i class="nav-icon fa-solid fa-person-chalkboard"></i>
            <p>Pelanggaran Siswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/guru_bk/bimbingan_konseling_siswa') ?>" class="nav-link <?= $menu == 'bimbingan_konseling_siswa' ? 'active' : '' ?>">
          <i class="nav-icon  fa-solid fa-user-group"></i>
            <p>Bimbingan Konseling</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/guru_bk/data_panggilan_siswa') ?>" class="nav-link <?= $menu == 'data_panggilan_siswa' ? 'active' : '' ?>">
          <i class="nav-icon fa-solid fa-user-check"></i>
            <p>Data Panggilan Siswa</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/guru_bk/data_homevisit_siswa') ?>" class="nav-link <?= $menu == 'homevisit_siswa' ? 'active' : '' ?>">
          <i class="nav-icon fa-solid fa-house-flag"></i>
            <p>Data Home Visit</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('/guru_bk/laporan_bimbingankonseling_siswa') ?>" class="nav-link <?= $menu == 'laporan_bimbingankonseling_siswa' ? 'active' : '' ?>">
          <i class="nav-icon fas fa-file"></i>
            <p>Laporan Bimbingan Siswa</p>
          </a>
        </li>
      <?php endif; ?>
      <!-- END Area Sidebar Guru BK -->

      <!-- Semua ROLE ADA -->
      <li class="nav-item">
        <a href='<?= base_url('logout') ?>' class="nav-link">
          <i class="nav-icon fa-solid fa-right-from-bracket"></i>
          <p>Logout</p>
        </a>
      </li>
      <!-- END SEMUA ROLE ADA -->
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>

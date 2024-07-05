<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/assets/dist/img/" class="img-circle elevation-2" alt="User Image">
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
  

               <li class="nav-item">
            <a href="<?= base_url('/') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
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
            <a href="<?= base_url('master_data_guru') ?>" class="nav-link <?= $submenu == 'master_data_guru' ? 'active' : '' ?>">
              <i class="nav-icon fa-solid fa-chalkboard-user"></i>
              <p>
                Data Guru
                <span class="badge badge-info right">2</span>
              </p>
            </a>
            </li>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fa-solid fa-user-group"></i>
              <p>
                Data Guru Bk
                </p>
                </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('master_data_siswa') ?>" class="nav-link <?= $submenu == 'master_data_siswa' ? 'active' : '' ?>">
              <i class="nav-icon fa-solid fa-user-graduate"></i>
              <p>
                Data Siswa
                </p>
                </a>
          </li>
                <li class="nav-item">
                  <a href="<?= base_url('master_data_mapel') ?>" class="nav-link <?= $submenu == 'master_data_mapel' ? 'active' : '' ?>">
                    <i class="nav-icon fa-solid fa-person-chalkboard"></i>
                    <p>
                      Data Mata Pelajaran
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('master_data_kelas_jurusan') ?>" class="nav-link <?= $submenu == 'master_data_kelas_jurusan' ? 'active' : '' ?>">
                    <i class="nav-icon fa-solid fa-users-rectangle"></i>
                    <p>
                      Data Kelas dan Jurusan
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('master_kategori_pelanggaran') ?>" class="nav-link <?= $submenu == 'master_kategori_pelanggaran' ? 'active' : '' ?>">
                    <i class="nav-icon fa-solid fa-clipboard-user"></i>
                    <p>
                      Kategori Pelanggaran
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('master_data_user') ?>" class="nav-link <?= $submenu == 'master_data_user' ? 'active' : '' ?>">
                    <i class="nav-icon fa-solid fa-users"></i>
                    <p>
                      Data User
                    </p>
                  </a>
                </li>
            </ul>
          </li>

         
          <li class="nav-item">
            <li class="nav-header">Data Laporan</li>
            <li class="nav-item">
              </li>
              <a href="<?= base_url('laporan_pelanggaran_siswa') ?>" class="nav-link <?= $menu == 'lap_pelanggaran_siswa' ? 'active' : '' ?>">
                <i class="nav-icon fas fa-file"></i>
                <p>Pelanggaran Siswa</p>
              </a>
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
                <p>Pelanggaran Siswa</p>
              </a>
          </li>
          <li class="nav-header">Pengaturan</li>
          <li class="nav-item">
            <a href="<?= base_url('pengaturan_profile') ?>" class="nav-link <?= $menu == 'pengaturan_admin' ? 'active' : '' ?> ">
              <i class="nav-icon fas fa-regular fa-id-card"></i>
              <p>Pengaturan Profile</p>
            </a>
          </li>
          </li>

  
        <!-- End Sidebar Admin -->


      <!-- Area Sidebar Siswa -->
          <li class="nav-item">
            <a href='<?= base_url('logout') ?>' class="nav-link">
            <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
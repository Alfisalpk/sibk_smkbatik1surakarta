<!-- app/Views/v_sidebar.php -->
<?php
$role = session()->get('role_id');
switch ($role) {
    case 1: // Admin
        echo view('sidebar_admin');
        break;
    case 2: // Guru
        echo view('sidebar_guru');
        break;
    case 3: // Siswa
        echo view('sidebar_siswa');
        break;
    case 4: // Guru BK
        echo view('sidebar_guru_bk');
        break;
    case 5: // Kepala Sekolah
        echo view('sidebar_kepala_sekolah');
        break;
    default:
        echo "Role tidak dikenal.";
}
?>

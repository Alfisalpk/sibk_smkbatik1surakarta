-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2025 pada 17.19
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibk_smkbatik1surakarta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbingan_konseling`
--

CREATE TABLE `bimbingan_konseling` (
  `id_bimbingankonseling` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pertemuan_ke` int(11) NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `permasalahan` text NOT NULL,
  `hasil` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bimbingan_konseling`
--

INSERT INTO `bimbingan_konseling` (`id_bimbingankonseling`, `user_id`, `tanggal`, `pertemuan_ke`, `waktu`, `tempat`, `permasalahan`, `hasil`, `created_at`, `updated_at`) VALUES
(6, 20, '2025-01-01', 85, '16:40:00', 'Di Kelas', 'Semnagat Belajar', 'Tambahin Semnagat Belajar bisa CUMLOADE', '2025-01-03 16:38:24', '2025-01-10 11:35:35'),
(17, 18, '2025-01-21', 89, '19:44:00', 'Rumah', 'tAMBAH DARI GURU BK', 'EDIT GURU BK', '2025-01-11 16:44:58', '2025-01-11 16:45:10'),
(20, 20, '2025-01-02', 86, '20:57:00', 'Ruang Guru', 'qwerty', 'UBAH TERBARU', '2025-01-13 18:55:02', '2025-01-15 09:16:24'),
(21, 22, '2025-01-23', 1, '12:03:00', 'Ruang BK', 'Keuangan', 'Dengan Menabung atau Ubah BK', '2025-01-15 09:00:04', '2025-01-15 09:16:34'),
(22, 18, '2025-01-16', 90, '20:18:00', 'Ruang Guru', 'Kecewa Sama Pasangan', 'Tidak usah diteruskan dan fokus belajar', '2025-01-15 09:15:47', '2025-01-15 09:16:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_pelanggaran`
--

CREATE TABLE `kategori_pelanggaran` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_pelanggaran`
--

INSERT INTO `kategori_pelanggaran` (`id`, `nama_kategori`) VALUES
(4, 'Keterlambatan'),
(5, 'Kehadiran'),
(7, 'Kerapian atau Pakaian'),
(8, 'Ketertipan'),
(9, 'Merokok'),
(10, 'Berkelahi'),
(11, 'Lain-Lain'),
(12, 'Testing Benerin Bug'),
(13, 'Testing BUG'),
(14, 'Testing Sitem'),
(15, 'Testing Kategori');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(10, '2024-07-06-143803', 'App\\Database\\Migrations\\CreateUserGuruTable', 'default', 'App', 1720277043, 1),
(11, '2024-07-06-145909', 'App\\Database\\Migrations\\CreateResetPasswordTokensTable', 'default', 'App', 1720278006, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `nama_pelanggaran` varchar(255) NOT NULL,
  `klasifikasi` varchar(50) NOT NULL,
  `petugas_penanganan` varchar(255) NOT NULL,
  `sanksi` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggaran`
--

INSERT INTO `pelanggaran` (`id_pelanggaran`, `kategori_id`, `nama_pelanggaran`, `klasifikasi`, `petugas_penanganan`, `sanksi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 4, 'Terlambat Masuk Sekolah Lebih Dari 1 Menit', 'Ringan', 'Guru BK dan Kesiswaan', 'Dicatat Sistem', '2024-12-28 17:37:20', '2024-12-28 17:37:20', NULL),
(10, 5, 'Tidak Masuk Karena Sakit', 'Ringan', 'Wali Kelas', 'Klarifikasi Teguran', '2024-12-28 17:52:36', '2024-12-28 17:52:36', NULL),
(11, 5, 'Tidak Masuk Dengan Membuat Keterangan Palsu', 'Sedang', 'Wali Kelas dan BK', 'Bimbingan Wali Kelas', '2024-12-28 17:58:35', '2024-12-28 17:58:35', NULL),
(14, 5, 'Tidak Mengikuti Kegiatan Pembelajaran Life Skill, dan Piket di Unit Produksi B-One', 'Sedang', 'Wali Kelas, BK, dan Kesiswaan', 'Teguran, Bimbingan, Surat Perjanjian', '2024-12-28 18:08:32', '2024-12-28 18:08:32', NULL),
(15, 5, 'Tidak Masuk Tanpa Keterangan Lebih Dari 2 Hari', 'Sedang', 'Wali Kelas dan BK', 'Klarifikasi Ke Orang Tua', '2024-12-28 18:13:30', '2024-12-28 18:13:30', NULL),
(16, 7, 'Tidak Mengenakan Ikat Pinggang', 'Ringan', 'Guru, Wali Kelas', 'Teguran', '2024-12-28 18:14:40', '2024-12-28 18:14:40', NULL),
(17, 7, 'Berhias Berlebihan Bagi Putri', 'Ringan', 'Guru, Wali Kelas', 'Teguran', '2024-12-28 18:15:41', '2024-12-28 18:15:41', NULL),
(18, 7, 'Membawa Alat Make Up (Kecuali Dipakai Kegiatan Life Skill)', 'Ringan', 'Guru, Wali Kelas', 'Disita dan Tidak DIkembalikan', '2024-12-28 18:17:31', '2024-12-28 18:19:40', NULL),
(19, 7, 'Memakai Gelang, Kalung, Bagi Siswa Putra', 'Ringan', 'Guru, Wali Kelas', 'Disita dan Tidak Dikembalikan', '2024-12-28 18:19:20', '2024-12-28 18:19:20', NULL),
(21, 8, 'Membuang Sampah Didalam Kelas', 'Ringan', 'Guru Mapel dan Wali Kelas', 'Teguran dan Membersihakan Kelas', '2024-12-28 18:22:26', '2024-12-28 18:22:26', NULL),
(22, 8, 'Membuat Kegaduhan Didalam Kelas Pada Saat KBM', 'Sedang', 'Guru Mapel dan Wali Kelas', 'Teguran, Tugas Tambahan dari Guru Mapel, dan Pembinaan Wali Kelas', '2024-12-28 18:25:00', '2024-12-28 18:25:00', NULL),
(29, 4, 'Ubah', 'Ubah', 'Ubah', 'Bayari Makan', '2025-01-07 10:23:14', '2025-01-09 16:24:20', NULL),
(30, 11, 'TEsting LAIN LAIN', 'BERAT', 'KEPALA SEKOLAH', 'Testing Ubah', '2025-01-11 09:43:08', '2025-01-12 15:42:26', NULL),
(31, 14, 'Tambah Kategori Pelanggarn 120125', 'Testing', 'Testing', 'TEsting', '2025-01-12 15:43:59', '2025-01-12 15:54:30', '2025-01-12 15:54:30'),
(32, 14, 'Tesing Sistem', 'Berat', 'Guru Bk', 'Panggilan', '2025-01-12 15:55:50', '2025-01-12 15:58:27', '2025-01-12 15:58:27'),
(33, 14, 'Testing Game', 'Berat', 'Kepala Sekolah', 'Keluar Sekolah', '2025-01-12 15:56:36', '2025-01-15 09:31:10', '2025-01-15 09:31:10'),
(34, 9, 'Rokok Dilingkungan Sekolah Misalnya', 'Berat', 'Kepala Sekolah', 'SP 3 panggilan ORTU', '2025-01-15 09:30:00', '2025-01-15 09:30:31', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggaran_siswa`
--

CREATE TABLE `pelanggaran_siswa` (
  `id_pelanggaran_siswa` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `pelanggaran_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggaran_siswa`
--

INSERT INTO `pelanggaran_siswa` (`id_pelanggaran_siswa`, `siswa_id`, `kategori_id`, `pelanggaran_id`, `tanggal`, `deskripsi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(33, 18, 8, 21, '2025-01-15', 'Membuang Sampah Sembarangan Testing Ubah', '2025-01-03 20:46:24', '2025-01-12 15:40:25', NULL),
(36, 18, 11, 30, '2025-01-22', 'tetsing', '2025-01-11 10:30:37', '2025-01-11 10:30:37', NULL),
(38, 20, 4, 9, '2025-01-16', 'sdgfh', '2025-01-11 11:48:05', '2025-01-12 15:40:35', '2025-01-12 15:40:35'),
(39, 20, 5, 10, '2025-01-22', 'UBAH BK TERBARU 150125', '2025-01-11 12:13:07', '2025-01-15 08:56:45', NULL),
(43, 20, 5, 15, '2025-01-15', 'Pergi Kerumah Nenek Ubah Guru BK', '2025-01-12 15:41:07', '2025-01-13 18:52:57', '2025-01-13 18:52:57'),
(44, 18, 14, 31, '2025-01-08', 'Testing', '2025-01-12 15:44:37', '2025-01-12 15:44:37', NULL),
(45, 18, 14, 32, '2025-01-08', 'TEsting Ke Hapus', '2025-01-12 15:57:13', '2025-01-12 15:57:13', NULL),
(46, 18, 14, 32, '0000-00-00', 'Testing Hapus', '2025-01-12 15:57:35', '2025-01-12 15:57:35', NULL),
(47, 18, 8, 22, '2024-10-09', 'Ditambahkan Via Hp', '2025-01-12 23:07:03', '2025-01-13 13:43:37', NULL),
(48, 18, 5, 11, '2025-01-15', 'asdfsdfdsf', '2025-01-12 23:07:34', '2025-01-12 23:07:34', NULL),
(49, 20, 7, 16, '2025-01-08', 'UBAH ADMIN', '2025-01-12 23:09:44', '2025-01-13 17:59:14', '2025-01-13 17:59:14'),
(50, 20, 7, 16, '2025-01-08', 'ubah gurubk', '2025-01-12 23:09:54', '2025-01-13 13:45:46', '2025-01-13 13:45:46'),
(51, 20, 7, 16, '2025-01-08', 'tetsing', '2025-01-12 23:10:03', '2025-01-12 23:13:08', '2025-01-12 23:13:08'),
(52, 18, 5, 11, '2025-01-01', 'asdasadasdasd', '2025-01-13 14:20:58', '2025-01-13 14:38:19', '2025-01-13 14:38:19'),
(53, 20, 5, 11, '2025-01-13', 'dfghdfghdfgh', '2025-01-13 17:59:26', '2025-01-13 18:51:04', '2025-01-13 18:51:04'),
(54, 20, 5, 11, '2025-01-06', 'asdfasdfasdfsadf', '2025-01-13 18:40:01', '2025-01-13 18:51:09', '2025-01-13 18:51:09'),
(55, 20, 5, 11, '2025-01-06', 'asdfasdfasdfsadf', '2025-01-13 18:40:04', '2025-01-13 18:51:25', '2025-01-13 18:51:25'),
(56, 20, 5, 11, '2025-01-06', 'asdfasdfasdfsadf', '2025-01-13 18:41:56', '2025-01-13 18:51:44', '2025-01-13 18:51:44'),
(57, 20, 5, 11, '2025-01-06', 'asdfasdfasdfsadf', '2025-01-13 18:42:02', '2025-01-13 18:51:40', '2025-01-13 18:51:40'),
(58, 20, 5, 11, '2025-01-06', 'asdfasdfasdfsadf', '2025-01-13 18:42:06', '2025-01-13 18:51:37', '2025-01-13 18:51:37'),
(59, 20, 5, 11, '2025-01-06', 'asdfasdfasdfsadf', '2025-01-13 18:42:13', '2025-01-13 18:51:34', '2025-01-13 18:51:34'),
(60, 20, 7, 17, '2025-01-22', 'xghxfghcfghfdcghfxcghcfgh', '2025-01-13 18:46:25', '2025-01-13 18:51:30', '2025-01-13 18:51:30'),
(61, 20, 5, 14, '2025-01-24', 'Tambahkau', '2025-01-13 18:47:10', '2025-01-13 18:51:22', '2025-01-13 18:51:22'),
(62, 20, 7, 17, '0000-00-00', 'tambah baruku', '2025-01-13 18:50:48', '2025-01-13 18:51:01', '2025-01-13 18:51:01'),
(63, 22, 5, 11, '2025-01-06', 'dghdfghfhnmf', '2025-01-15 08:26:07', '2025-01-15 08:56:56', '2025-01-15 08:56:56'),
(64, 22, 5, 11, '2025-01-10', 'Tidakmasuk membuat keterangan palsu Admin', '2025-01-15 08:58:40', '2025-01-15 09:29:01', NULL),
(65, 22, 8, 21, '2025-01-08', 'Ubah ADMIN 1', '2025-01-15 09:26:07', '2025-01-15 09:28:46', '2025-01-15 09:28:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reset_password_tokens`
--

CREATE TABLE `reset_password_tokens` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expiry` datetime NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reset_password_tokens`
--

INSERT INTO `reset_password_tokens` (`id`, `email`, `token`, `expiry`, `created_at`, `updated_at`) VALUES
(21, 'punjungalfisal@gmail.com', 'e71e608bbe207494a53500830b9e7f301d474cdf0ebaa63a7d23a1b0e67e1d5d3ebdf8dc9e7f62ad24005c83d5289e817354', '2024-08-18 12:57:09', '2024-08-18 12:27:09', '2024-08-18 12:27:09'),
(25, 'punjungalfisal@gmail.com', '559565caa67f745028acef620f20b65cbc41e4daed8aedf8e5036bec093b0bd1079e0787eeb8d6917781679eefdc4aed86ce', '2024-11-21 17:11:57', '2024-11-21 16:41:57', '2024-11-21 16:41:57'),
(27, 'punjungalfisal@gmail.com', '3565ee3e17f46b1e51b7c5639968357d58d024043bc11c12822b29d1d2d2dc75d24946d28d6636e354b1f99223942792cfb1', '2024-12-19 04:30:12', '2024-12-19 04:00:12', '2024-12-19 04:00:12'),
(30, 'ninaaakawaii13@gmail.com', '3e1d83f97798ca8846e24a467532289a4723add5057c98bd3122182cfb1281548df15a188498ae24ebaa8d6d391577976ddc', '2024-12-21 02:06:33', '2024-12-21 01:36:33', '2024-12-21 01:36:33'),
(32, 'punjungalfisal@gmail.com', '391f9b8445cb7864b5d32b506b7ef1af36ee994b084e2f55a1d819afa9764536bcdde118e24624bfdc85bfdb4e620e05cb97', '2025-01-15 15:26:07', '2025-01-15 14:56:07', '2025-01-15 14:56:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Guru'),
(3, 'Siswa'),
(4, 'Guru BK'),
(5, 'Kepala Sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `user_guru_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `nama_panggilan` varchar(50) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `birth_place` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `gender` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `user_guru_id`, `full_name`, `nama_panggilan`, `nip`, `birth_place`, `birth_date`, `phone`, `address`, `religion`, `gender`, `subject`, `role`, `created_at`, `updated_at`) VALUES
(1, 4, 'Alfisal Punjung Guru', NULL, '200101003', 'Sukoharjo', '2001-08-23', '081325659017', 'Griya Kratonan 2, Pucangan, Kartasura', 'Islam', '', 'TKJ', 1, '2024-07-31 22:48:14', '2024-07-31 22:48:14'),
(2, 5, 'Asna Kharismanda Salam', NULL, '12345678', 'Surabaya', '2024-08-06', '081332615242', 'Griya Kratonan 2, Pucangan, Kartasura', 'Islam', '', 'Ipa', 2, '2024-07-31 22:59:12', '2024-07-31 22:59:12'),
(3, 6, 'Multimedia Batik', NULL, '123456', 'Kartasura', '2024-08-21', '081325659071', 'Griya Kratonan 2, Pucangan, Kartasura', 'Islam', '', 'Sejarah', 2, '2024-07-31 23:17:43', '2024-07-31 23:17:43'),
(4, 7, 'Punjung BK', NULL, '1234', 'Sukoharjo', '2024-11-12', '081325659017', 'Kartasura', 'Islam', '', 'TKJ', 4, '2024-11-04 18:54:54', '2024-11-04 18:54:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kunjungan_siswa`
--

CREATE TABLE `tb_kunjungan_siswa` (
  `id_kunjungan_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `kelas_jurusan` varchar(35) NOT NULL,
  `nama_orangtua` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `permasalahan` text NOT NULL,
  `latar_belakang_sosial_ekonomi` text NOT NULL,
  `faktor_dari_orangtua` text NOT NULL,
  `kesan_petugas` text NOT NULL,
  `rencana_penanganan` text NOT NULL,
  `evaluasi` text NOT NULL,
  `apabila_siswa_kost` text DEFAULT NULL,
  `yang_melaksanakan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kunjungan_siswa`
--

INSERT INTO `tb_kunjungan_siswa` (`id_kunjungan_siswa`, `id_siswa`, `nama_siswa`, `nisn`, `kelas_jurusan`, `nama_orangtua`, `alamat`, `permasalahan`, `latar_belakang_sosial_ekonomi`, `faktor_dari_orangtua`, `kesan_petugas`, `rencana_penanganan`, `evaluasi`, `apabila_siswa_kost`, `yang_melaksanakan`, `created_at`, `updated_at`) VALUES
(19, 20, '', '', '', '', '', 'kjjh', 'jhgikjh', 'jhg', 'jhgjh', 'dgfhdfghfhdghdfghdfghdf', 'TEsting UBAH', 'asdfasdfasdfasdf', 'Guru Pembimbing', '2025-01-13 22:13:16', '2025-01-14 16:44:12'),
(22, 18, '', '', '', '', '', 'Tidak Pernah Masuk', 'QWERTY', 'jh', 'bnb', 'nbbn', 'jhjh', '-', 'Guru Pembimbing', '2025-01-14 17:05:02', '2025-01-14 17:05:02'),
(23, 22, '', '', '', '', '', 'Tidak Pernah MAsuk', 'Kelas Atas', 'Jarang Dikasi Uang', 'Hehe', 'Diakawal samapi lulus', 'Bisa Membiasakjan', '-', 'Wali Kelas', '2025-01-15 09:05:39', '2025-01-15 09:05:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_panggilan_siswa`
--

CREATE TABLE `tb_panggilan_siswa` (
  `id_panggilansiswa` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_ke` varchar(10) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `hasil_panggilan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_panggilan_siswa`
--

INSERT INTO `tb_panggilan_siswa` (`id_panggilansiswa`, `user_id`, `tanggal`, `jam_ke`, `keperluan`, `tempat`, `hasil_panggilan`, `created_at`, `updated_at`) VALUES
(3, 20, '2025-01-22', 'Jam Ke 4', 'Konsultasi ', 'Ruang Guru', 'Berhasil Ubah Guru BK', '2025-01-11 20:14:38', '2025-01-13 13:47:42'),
(10, 20, '2025-01-16', '12', 'wewe', 'fsdfdsfxxcvxcv', 'Ubah Guru BK TERBARUUUUU', '2025-01-13 13:28:29', '2025-01-13 18:56:49'),
(12, 18, '2025-01-23', 'Setelah Is', 'qasdfasdf', 'Ruang BK', 'Menjadi Anak Baik', '2025-01-13 18:55:48', '2025-01-13 18:55:48'),
(13, 18, '2025-01-07', 'Jam Ke 1', 'Makan', 'Di KElas', 'Akan Diualangi LAgi UBAH BK', '2025-01-13 19:01:30', '2025-01-13 19:01:41'),
(14, 22, '2025-01-09', '2', 'Pemanggilan Siswa', 'Sekolah', 'Dilaksanakan dengan baik', '2025-01-15 09:02:02', '2025-01-15 09:02:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nomor_handphone` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `asal_sekolah` varchar(255) DEFAULT NULL,
  `lulusan_tahun` year(4) DEFAULT NULL,
  `nama_wali_murid` varchar(255) DEFAULT NULL,
  `nomor_wali_murid` varchar(15) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `kode_pelanggaran` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nisn`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `nomor_handphone`, `alamat`, `agama`, `jenis_kelamin`, `asal_sekolah`, `lulusan_tahun`, `nama_wali_murid`, `nomor_wali_murid`, `id_kelas`, `id_jurusan`, `kode_pelanggaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
(208, '23082001', 'Alfisal Punjung Kurniawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-01 20:09:38', '2025-01-01 20:09:38', NULL),
(209, '28112003', 'Nirina Khoirun Naja Musyafa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-01 20:09:53', '2025-01-01 20:09:53', NULL),
(279, '12345678', 'Testing Hapus READ Delete', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-09 22:11:08', '2025-01-10 11:43:25', '2025-01-10 11:43:25'),
(280, '2025', 'Mahasiswa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 07:54:58', '2025-01-15 07:54:58', NULL),
(281, '2026', 'Bintang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:18:14', '2025-01-15 09:18:14', NULL),
(282, '593777637', 'Citra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(283, '324637670', 'Dewi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(284, '521913796', 'Ika', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(285, '791740971', 'Budi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(286, '977302052', 'Gita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(287, '623705572', 'Siti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(288, '773436837', 'Gita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(289, '275441869', 'Joko', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(290, '831815554', 'Ahmad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(291, '657551321', 'Gita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(292, '548412734', 'Maya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(293, '369057942', 'Lina', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(294, '730701848', 'Siti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(295, '656784878', 'Omar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(296, '618853548', 'Gita', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(297, '781082276', 'Siti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL),
(298, '552791595', 'Joko', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-01-15 09:24:29', '2025-01-15 09:24:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nisn` varchar(15) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `nama_orangtua` varchar(30) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `kelas` varchar(5) DEFAULT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `nomor_wa` varchar(20) DEFAULT NULL,
  `nomor_wa_ortu` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `asal_sekolah` varchar(50) DEFAULT NULL,
  `lulusan_tahun` varchar(8) DEFAULT NULL,
  `hobby` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT '''default.jpg''',
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_expiry` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nisn`, `nama_lengkap`, `username`, `nama_orangtua`, `email`, `password`, `kelas`, `jurusan`, `jenis_kelamin`, `agama`, `nomor_wa`, `nomor_wa_ortu`, `tempat_lahir`, `tgl_lahir`, `alamat`, `asal_sekolah`, `lulusan_tahun`, `hobby`, `role`, `foto`, `reset_token`, `reset_expiry`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, '23082001', NULL, 'Alfisal Punjung Kurniawan', 'Nur Salam Ubah Guru BK 2', 'kiki@gmail.com', '$2y$10$LlklRLJojJ72k2a2zNOCMeGZoLyDusPLZALcyaOmQkn2bQNsT87pm', 'XII', 'TKJ 1', 'Laki-Laki', 'Islam', '081325659017', '081332615242', 'Sukoharjo', '2025-01-07', 'Griya Kratonan 2, Pucangan, Kartasura', 'SMPN 3 Kartasura', '2017', 'Muncak', 3, 'uploads/siswa/1736597510_9284958ddf10783c14d6.jpg', NULL, NULL, '2024-12-23 21:09:15', '2025-01-11 13:28:13', NULL),
(20, '2001', NULL, 'Nirina Khoirun Naja Musyafa', 'Musayafa Ubah Admin 1', 'ninaaakawaii13@gmail.com', '$2y$10$VtOGMtV.gKrMv3qDbxywm.3Xu6HI6C7H/x9btwrgvGouxYPXl7tgG', 'XII', 'DKV 1', 'Laki-Laki', 'Islam', '0813326154242', '081325659017', 'Kartasura', '2025-01-23', 'Banjarsari, Surakarta, Jawa Tengah', 'Home Schooling', '2018', 'Fotografi', 3, 'uploads/siswa/1735755307_bea1a1a21745d4e6960a.jpg', NULL, NULL, '2025-01-01 18:13:13', '2025-01-15 09:31:46', NULL),
(22, '2025', NULL, 'Mahasisw Lengkapku', 'TEsting UBAH GURU BK 3', 'mahasiswa@gmail.com', '$2y$10$LtTCNTo.v73HnJWfPnrTXe3Gu2xImFXDmMPA11dVPCp984TcxpH2K', 'XII', 'TKJ 1', 'Laki-Laki', 'Islam', '08151216046', '08121316482434', 'Sukoharjo', '2001-01-15', 'Griya Kratonan 2, Pucangan, Kartasura', 'Mahasiswa', '2018', 'Muncak', 3, 'uploads/siswa/1736929338_c45f94cff844645a9365.jpg', NULL, NULL, '2025-01-15 08:20:43', '2025-01-15 08:55:06', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_guru`
--

CREATE TABLE `user_guru` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nip` int(20) DEFAULT NULL,
  `nama_panggilan` varchar(50) DEFAULT NULL,
  `jurusan_pengampu` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Konghucu') DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user_guru`
--

INSERT INTO `user_guru` (`id`, `username`, `email`, `password`, `role`, `foto`, `nip`, `nama_panggilan`, `jurusan_pengampu`, `tempat_lahir`, `tgl_lahir`, `agama`, `jenis_kelamin`, `no_telepon`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Alfisal Punjung', 'punjungalfisal@gmail.com', '$2y$10$Ss909MKBOF902ggLD8BybeTnLKTzQYmgVa3AknhgnEZUVL2lcG1HG', 1, NULL, 202030217, 'Punjung', 'TKJ', 'Sukoharjo', '2001-08-23', 'Islam', 'Laki-Laki', '081325659017', 'Jl, Apel, Kopen, Ngadirejo, Kartasura, Sukoharjo', NULL, '2025-01-15 14:57:53', NULL),
(23, 'Asna Kharismanda Salam', 'asna@gmail.com', '$2y$10$NoCPV0nTjNTFW8XDpBlLreQkuE/SAjAcuCrZeHUEOVunCdupG2rzm', 1, NULL, 12345678, 'Asan', 'Farmasi', 'Surabaya', '2025-01-15', 'Islam', 'Perempuan', '081325659017', 'Griya Kratonan 2, Pucangan, Kartasura', '2025-01-04 03:41:39', '2025-01-10 02:05:49', NULL),
(24, 'Punjung Alfisal', 'punjung@gmail.com', '$2y$10$beFnzcnIn0ttw3XhgZfUtO4WQRpSPSM9nmEaIl6OB87ucIrcjk8Ee', 4, NULL, 23082001, 'Alfisal', 'Farmasi', 'Sukoharjo', '1997-12-24', 'Islam', 'Laki-Laki', '089999999999', 'Griya Kratonan 2, Pucangan, Kartasura', '2025-01-07 17:14:08', '2025-01-15 16:14:41', '2025-01-15 16:14:41'),
(25, 'Kazuma OI', 'kazuma@gmail.com', '$2y$10$rQFpzwQ5Qm43T2PDSRgWLeE/V4IxPxILROjqpnf4HlIKLhQsZq4k.', 4, NULL, 12345678, 'Kazumalah', 'DKV', 'Surabaya', '2025-01-07', 'Islam', 'Laki-Laki', '081556289777445', 'Griya Kratonan 2, Pucangan, Kartasura', '2025-01-10 02:07:04', '2025-01-10 02:07:04', NULL),
(26, 'Rudeus Nama Ubah Admin', 'rudeus@gmail.com', '$2y$10$fbtbjTvox/HnpQJ3jddo6eIKJNrniXGCSN4zCPu70rDC./J/KgFB.', 4, NULL, 12345678, 'Rudi', 'Farmasi', 'Sukoharjo', '1995-08-16', 'Islam', 'Laki-Laki', '08121254521542', 'Sukoharjo', '2025-01-15 16:12:58', '2025-01-15 16:14:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bimbingan_konseling`
--
ALTER TABLE `bimbingan_konseling`
  ADD PRIMARY KEY (`id_bimbingankonseling`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `kategori_pelanggaran`
--
ALTER TABLE `kategori_pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD PRIMARY KEY (`id_pelanggaran_siswa`),
  ADD KEY `siswa_id` (`siswa_id`),
  ADD KEY `pelanggaran_id` (`pelanggaran_id`),
  ADD KEY `pelanggaran_siswa_ibfk_3` (`kategori_id`);

--
-- Indeks untuk tabel `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kunjungan_siswa`
--
ALTER TABLE `tb_kunjungan_siswa`
  ADD PRIMARY KEY (`id_kunjungan_siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tb_panggilan_siswa`
--
ALTER TABLE `tb_panggilan_siswa`
  ADD PRIMARY KEY (`id_panggilansiswa`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_guru`
--
ALTER TABLE `user_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_guru_roles` (`role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bimbingan_konseling`
--
ALTER TABLE `bimbingan_konseling`
  MODIFY `id_bimbingankonseling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `kategori_pelanggaran`
--
ALTER TABLE `kategori_pelanggaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  MODIFY `id_pelanggaran_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kunjungan_siswa`
--
ALTER TABLE `tb_kunjungan_siswa`
  MODIFY `id_kunjungan_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_panggilan_siswa`
--
ALTER TABLE `tb_panggilan_siswa`
  MODIFY `id_panggilansiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_guru`
--
ALTER TABLE `user_guru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bimbingan_konseling`
--
ALTER TABLE `bimbingan_konseling`
  ADD CONSTRAINT `bimbingan_konseling_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD CONSTRAINT `pelanggaran_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_pelanggaran` (`id`);

--
-- Ketidakleluasaan untuk tabel `pelanggaran_siswa`
--
ALTER TABLE `pelanggaran_siswa`
  ADD CONSTRAINT `pelanggaran_siswa_ibfk_1` FOREIGN KEY (`siswa_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_siswa_ibfk_2` FOREIGN KEY (`pelanggaran_id`) REFERENCES `pelanggaran` (`id_pelanggaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pelanggaran_siswa_ibfk_3` FOREIGN KEY (`kategori_id`) REFERENCES `kategori_pelanggaran` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kunjungan_siswa`
--
ALTER TABLE `tb_kunjungan_siswa`
  ADD CONSTRAINT `tb_kunjungan_siswa_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_panggilan_siswa`
--
ALTER TABLE `tb_panggilan_siswa`
  ADD CONSTRAINT `tb_panggilan_siswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user_guru`
--
ALTER TABLE `user_guru`
  ADD CONSTRAINT `fk_user_guru_roles` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

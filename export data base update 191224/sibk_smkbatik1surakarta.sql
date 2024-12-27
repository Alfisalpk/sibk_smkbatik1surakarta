-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2024 pada 08.36
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
-- Struktur dari tabel `level_pelanggaran`
--

CREATE TABLE `level_pelanggaran` (
  `id_level_pelanggaran` int(11) NOT NULL,
  `jenis_pelanggaran` varchar(255) NOT NULL,
  `peraturan` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(30, 'ninaaakawaii13@gmail.com', '3e1d83f97798ca8846e24a467532289a4723add5057c98bd3122182cfb1281548df15a188498ae24ebaa8d6d391577976ddc', '2024-12-21 02:06:33', '2024-12-21 01:36:33', '2024-12-21 01:36:33');

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
-- Struktur dari tabel `tb_pelanggaran_siswa`
--

CREATE TABLE `tb_pelanggaran_siswa` (
  `kode_pelanggaran` int(11) NOT NULL,
  `keterangan_pelanggaran` varchar(255) NOT NULL,
  `evaluasi_pelanggaran` varchar(255) NOT NULL,
  `id_level_pelanggaran` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(53, '20010823', 'Alfisal Punjung Kurniawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-24 06:31:14', '2024-12-24 06:31:14', NULL),
(120, '654354', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-26 06:34:47', '2024-12-26 06:34:57', '2024-12-26 06:34:57'),
(121, '23082001', 'Alfisal Punjung Baru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-12-27 02:50:25', '2024-12-27 02:50:25', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suratpanggilan`
--

CREATE TABLE `tb_suratpanggilan` (
  `id_suratpanggilan` int(11) NOT NULL,
  `deskripsi_pelanggaran` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_siswa` bigint(20) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(17, '275441869', 'Joko', 'Joko Anwar', 'Anwar ', 'joko@gmail.com', '$2y$10$att66kRKD0sjxpwIUPACDeVtIlKTQVlhAxmnpdjhKCWQS3e.P.t2m', 'X', 'AKL 2', 'Laki-Laki', 'Islam', '081325659017', '081332615242', 'Jakarta', '2024-12-05', 'Griya Kratonan 2, Pucangan, Kartasura', 'SMPN 3 Kartasura', '2017', 'Motoran', 3, 'uploads/siswa/1735151752_378b48fdf9d9b6d806dc.jpg', NULL, NULL, '2024-12-23 18:34:29', '2024-12-25 19:26:34', NULL),
(18, '23082001', 'Alfisal Punjung', 'Alfisal Punjung Kurniawan', 'Alfianing Nur Batinah', 'kiki@gmail.com', '$2y$10$LlklRLJojJ72k2a2zNOCMeGZoLyDusPLZALcyaOmQkn2bQNsT87pm', 'X', 'TKJ 3', 'Laki-Laki', 'Islam', '081325659017', '081332615242', 'Kartasura', '2024-12-26', 'Griya Kratonan 2, Pucangan, Kartasura', 'SMPN 3 Kartasura', '2010', 'Muncak', 3, '\'default.jpg\'', NULL, NULL, '2024-12-23 21:09:15', '2024-12-23 21:09:15', NULL);

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
(10, 'Alfisal Punjung', 'punjungalfisal@gmail.com', '$2y$10$8AbPzz1iMmN.fuyu6DjysuSpFXCVP2hSDLFbPhs8Lrw1WT35TTqi2', 1, NULL, 202030217, 'Punjung', 'TKJ', 'Sukoharjo', '2001-08-23', 'Islam', 'Laki-Laki', '081325659017', 'Jl, Apel, Kopen, Ngadirejo, Kartasura, Sukoharjo', NULL, '2024-12-19 04:05:29', NULL),
(19, 'Punjung Kurniawan', 'punjung@gmail.com', '$2y$10$ySqTSAyzz8QmITeqTrqnW.fK4.qE4qY1uvxmp7m85Qkehav3BhwmG', 4, NULL, 1234, 'Punjung', 'Farmasi', 'Surabaya', '2024-12-04', 'Islam', 'Laki-Laki', '081556289777445', 'Ediiiititttttt', '2024-12-23 22:40:33', '2024-12-26 02:39:07', '2024-12-26 02:39:07'),
(20, 'Asna Guru BK', 'fifa@gmail.com', '$2y$10$fJwkC8E4E5ZMWVbaBN8yB.ULDglAB6wEZF.iP4IkLgEa/.zMnK1u6', 4, NULL, 12345678, 'Asna', 'Farmasi', 'Sukoharjo', '2024-12-02', 'Islam', 'Perempuan', '081556289777445', 'Griya Kratonan 2, Pucangan, Kartasura', '2024-12-24 05:16:42', '2024-12-24 05:16:42', NULL),
(21, 'Kurniawan Punjung', 'kurniawan@gmail.com', '$2y$10$h23WcNNzDQ4gnidFomAyl.KupMU4ytT8wbtdTLKDKt0hQKjR6DWYe', 2, NULL, 12345678, 'Kurniawan', 'DKV', 'Sukoharjo', '2024-12-10', 'Islam', 'Laki-Laki', '081325659017', 'Griya Kratonan 2, Pucangan, Kartasura', '2024-12-26 02:40:36', '2024-12-26 02:40:36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `level_pelanggaran`
--
ALTER TABLE `level_pelanggaran`
  ADD PRIMARY KEY (`id_level_pelanggaran`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indeks untuk tabel `tb_suratpanggilan`
--
ALTER TABLE `tb_suratpanggilan`
  ADD PRIMARY KEY (`id_suratpanggilan`);

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
-- AUTO_INCREMENT untuk tabel `level_pelanggaran`
--
ALTER TABLE `level_pelanggaran`
  MODIFY `id_level_pelanggaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `tb_suratpanggilan`
--
ALTER TABLE `tb_suratpanggilan`
  MODIFY `id_suratpanggilan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_guru`
--
ALTER TABLE `user_guru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user_guru`
--
ALTER TABLE `user_guru`
  ADD CONSTRAINT `fk_user_guru_roles` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2024 pada 20.20
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
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `birth_place` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nisn`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `nomor_handphone`, `alamat`, `agama`, `jenis_kelamin`, `asal_sekolah`, `lulusan_tahun`, `nama_wali_murid`, `nomor_wali_murid`, `id_kelas`, `id_jurusan`, `kode_pelanggaran`, `created_at`, `updated_at`) VALUES
(1, '230820001', 'Alfisal Test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-30 16:09:13', '2024-06-30 16:09:13'),
(3, '2001', 'Alfisal Punjung Kurniawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-06 17:34:00', '2024-07-06 17:34:00');

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
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `nomor_wa` varchar(20) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_expiry` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nisn`, `username`, `email`, `nama_lengkap`, `password`, `nomor_wa`, `alamat`, `foto`, `role`, `reset_token`, `reset_expiry`, `created_at`, `updated_at`) VALUES
(12, '2001', 'Alfisal Punjung Kurniawan', 'punjungkurniawan@gmail.com', NULL, '$2y$10$8FyJwMRHiAN/abdkiquSPOdP1W5nmvjEW19fzbzMeiFLCI61HKile', NULL, NULL, NULL, 3, NULL, NULL, '2024-07-07 14:55:40', '2024-07-22 14:37:55'),
(13, '230820001', 'Kurniawan', 'kurniawan@gmail.com', NULL, '$2y$10$hoQ6JrxTUzXScnUXJ/Khf.NEjfT8Epe7EtN40e4NQgOTW/.lmmCm2', NULL, NULL, NULL, 3, NULL, NULL, '2024-07-16 09:48:47', '2024-07-16 09:48:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_guru`
--

CREATE TABLE `user_guru` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `user_guru`
--

INSERT INTO `user_guru` (`id`, `username`, `email`, `password`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'admin Alfisal', 'punjungalfisal@gmail.com', '$2y$10$QCII27x7CfKD2dZBS6zMH.eZUYArO9XJmI0eVkxbqK6MmarcTj0n.', '1', '2024-07-09 06:57:56', '2024-07-09 06:57:56', NULL),
(12, 'guru Punjung', 'alfisalpunjungkurniawan@gmail.com', '$2y$10$g7UVJAdDL/MYf.sdQIiGiOS1ayJPkkQJeErN1DPOxglzCpk6hMpN2', '2', '2024-07-09 06:57:56', '2024-07-09 06:57:56', NULL);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nip` (`nip`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role`);

--
-- Indeks untuk tabel `user_guru`
--
ALTER TABLE `user_guru`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_suratpanggilan`
--
ALTER TABLE `tb_suratpanggilan`
  MODIFY `id_suratpanggilan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_guru`
--
ALTER TABLE `user_guru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

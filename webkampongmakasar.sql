-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2023 pada 10.09
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webkampongmakasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `excerp` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenduduks`
--

CREATE TABLE `datapenduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rt` bigint(20) UNSIGNED NOT NULL,
  `id_rw` bigint(20) UNSIGNED NOT NULL,
  `id_pendidikan` bigint(20) UNSIGNED NOT NULL,
  `id_pekerjaan` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nama_kepala_keluarga` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `hubungan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `golongan_darah` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `suku` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `datapenduduks`
--

INSERT INTO `datapenduduks` (`id`, `id_rt`, `id_rw`, `id_pendidikan`, `id_pekerjaan`, `alamat`, `no_kk`, `nama_kepala_keluarga`, `nik`, `nama`, `jenis_kelamin`, `hubungan`, `tempat_lahir`, `tanggal_lahir`, `usia`, `status`, `agama`, `golongan_darah`, `kewarganegaraan`, `suku`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 1, 2, 'Ternate', '8272010108080007', 'Wahyu', '8272016912690001', 'WAHYU JIHAD UMATERNATE', 'LAKI-LAKI', 'Anak Kandung', 'TERNATE', '2000-04-15', 1, 'Belum Kawin', 'ISLAM', 'O', 'indonesia', 'Ternate', NULL, '2023-07-11 23:57:40', '2023-07-12 00:08:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambaran_umum`
--

CREATE TABLE `gambaran_umum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pelayanan`
--

CREATE TABLE `jenis_pelayanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelayanan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_pelayanan`
--

INSERT INTO `jenis_pelayanan` (`id`, `nama_pelayanan`, `created_at`, `updated_at`) VALUES
(1, 'Surat Pengantar Keterangan Catatan Kepolisian', '2023-07-12 08:31:41', '2023-07-12 08:31:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakats`
--

CREATE TABLE `masyarakats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `masyarakats`
--

INSERT INTO `masyarakats` (`id`, `nama`, `nik`, `no_hp`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'WAHYU JIHAD UMATERNATE', '8272016912690001', '081242695750', 'wahyu@gmail.com', '$2y$10$yRSxDEYQz41dPl/yWpsUY.gcJYSmQXGMGFfqWkc5pOv5/cGe8aOn.', '2023-07-12 08:57:00', '2023-07-12 08:57:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_21_124438_create_beritas_table', 1),
(6, '2023_06_23_053522_create_sambutan_lurahs_table', 1),
(7, '2023_06_23_082623_create_visi_misis_table', 1),
(8, '2023_06_24_074542_create_sejarahs_table', 1),
(9, '2023_06_24_074610_create_gambaran_umums_table', 1),
(10, '2023_06_24_093115_create_struktur_organisasis_table', 1),
(11, '2023_07_01_060438_create_rts_table', 1),
(12, '2023_07_01_060446_create_rws_table', 1),
(13, '2023_07_01_060515_create_pendidikans_table', 1),
(14, '2023_07_01_060531_create_pekerjaans_table', 1),
(15, '2023_07_01_062335_datapenduduk', 1),
(16, '2023_07_04_051527_create_pengaduans_table', 1),
(17, '2023_07_04_160733_create_roles_table', 1),
(18, '2023_07_04_161442_add_role_id_to_users_table', 1),
(19, '2023_07_09_184204_create_petas_table', 1),
(20, '2023_07_11_062105_create_masyrakats_table', 1),
(21, '2023_07_11_142426_create_pelayanans_table', 1),
(22, '2023_07_11_142710_jenis_pelayanan', 1),
(23, '2023_07_11_144232_add_jenis_pelayanan_id_to_pelayanans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$p0er6LQHlwU7sPIpMcy2WOvFygSb3wi0FN0dbKicTOzKm0gfr7vBS', '2023-07-13 22:41:38'),
('Kelmakassarbaratte@gmail.com', '$2y$10$aEmTuqtWz0Zv4dzv3RfJqe6Qp8cxyP1gJWLprW8Cr84nhpQKGifwS', '2023-07-13 22:32:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pekerjaan` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama_pekerjaan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ibu Rumah Tangga', NULL, '2023-07-11 23:56:09', '2023-07-11 23:56:09'),
(2, 'Belum Bekerja', NULL, '2023-07-11 23:56:16', '2023-07-11 23:56:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanans`
--

CREATE TABLE `pelayanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fc_kk` varchar(255) NOT NULL,
  `fc_ktp` varchar(255) NOT NULL,
  `pengantar_rt_rw` varchar(255) NOT NULL,
  `surat_pernyataan` varchar(255) DEFAULT NULL,
  `masyarakat_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenis_pelayanan_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelayanans`
--

INSERT INTO `pelayanans` (`id`, `fc_kk`, `fc_ktp`, `pengantar_rt_rw`, `surat_pernyataan`, `masyarakat_id`, `created_at`, `updated_at`, `jenis_pelayanan_id`) VALUES
(1, 'pelyananFile/UZMXumoqTn2mF9wrERlbcGP6yLn0nJEfdqPOuryL.pdf', 'pelyananFile/dQQsPDnIVqr53UmxtHihpzUD41jTK5qthesuuDEE.pdf', 'pelyananFile/ac9hXu6W9cDUXk1Xd54JMiuJUCFhSUbPS3vEDWe5.pdf', NULL, 1, '2023-07-12 08:59:38', '2023-07-12 08:59:38', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pendidikan` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_pendidikan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tamat SD/sederajat', NULL, '2023-07-11 23:55:57', '2023-07-11 23:55:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_pengaduan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `aprove` tinyint(4) NOT NULL DEFAULT 0,
  `terkirim` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peta`
--

CREATE TABLE `peta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peta`
--

INSERT INTO `peta` (`id`, `nama_tempat`, `gambar`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(2, 'Kantor Lurah', 'Gambarpeta/ZlklJ6wLXQQnX14ujfCi2luCiTLR8PUbBA4Hn1JX.jpg', '0.7950641927042867', '127.38115686363335', '2023-07-11 23:47:43', '2023-07-11 23:47:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Lurah', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rt` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`id`, `nama_rt`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, '003', NULL, '2023-07-11 23:54:15', '2023-07-11 23:54:15'),
(4, '001', NULL, '2023-07-11 23:55:39', '2023-07-11 23:55:39'),
(5, '002', NULL, '2023-07-11 23:55:45', '2023-07-11 23:55:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw`
--

CREATE TABLE `rw` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_rw` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rw`
--

INSERT INTO `rw` (`id`, `nama_rw`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '001', NULL, '2023-07-11 23:55:14', '2023-07-11 23:55:14'),
(2, '002', NULL, '2023-07-11 23:55:20', '2023-07-11 23:55:20'),
(3, '003', NULL, '2023-07-11 23:55:27', '2023-07-11 23:55:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sambutan_lurah`
--

CREATE TABLE `sambutan_lurah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lurah` varchar(255) NOT NULL,
  `sambutan_lurah` text NOT NULL,
  `gambar_lurah` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'struktur_organisasiGambar/1UPj9iDOMcdZPu1ZYGrJxfNIRIyVYrY0idrR8uJn.png', '2023-07-11 22:47:22', '2023-07-11 23:49:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'Retmu', 'admin@gmail.com', '2023-07-11 22:32:54', '$2y$10$mJS79mAyYcYs0HTq3EAC3Owi6du.xgCz.Hra1Zhnzw2ZZ3gNUQlQe', 'OyxuGTlKnlAnZWrZMm30dkg3RQzDWzSTsOJJORZt9e3fMLgO9qwdjPjrYUsZ', '2023-07-11 22:32:54', '2023-07-13 21:45:00', 1),
(6, 'Lurah', 'Kelmakassarbaratte@gmail.com', NULL, '$2y$10$MUdSmK0ddrbFdbfEGCAIJuX.o7PLfVCvIFzLbWuceyBk796BOQmc2', NULL, '2023-07-13 22:04:13', '2023-07-13 22:04:13', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapenduduks`
--
ALTER TABLE `datapenduduks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `datapenduduks_id_rt_foreign` (`id_rt`),
  ADD KEY `datapenduduks_id_rw_foreign` (`id_rw`),
  ADD KEY `datapenduduks_id_pendidikan_foreign` (`id_pendidikan`),
  ADD KEY `datapenduduks_id_pekerjaan_foreign` (`id_pekerjaan`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gambaran_umum`
--
ALTER TABLE `gambaran_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masyarakats`
--
ALTER TABLE `masyarakats`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masyarakats_nik_unique` (`nik`),
  ADD UNIQUE KEY `masyarakats_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelayanans`
--
ALTER TABLE `pelayanans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelayanans_masyarakat_id_foreign` (`masyarakat_id`),
  ADD KEY `pelayanans_jenis_pelayanan_id_foreign` (`jenis_pelayanan_id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `peta`
--
ALTER TABLE `peta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sambutan_lurah`
--
ALTER TABLE `sambutan_lurah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `datapenduduks`
--
ALTER TABLE `datapenduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gambaran_umum`
--
ALTER TABLE `gambaran_umum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `masyarakats`
--
ALTER TABLE `masyarakats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelayanans`
--
ALTER TABLE `pelayanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peta`
--
ALTER TABLE `peta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `rw`
--
ALTER TABLE `rw`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sambutan_lurah`
--
ALTER TABLE `sambutan_lurah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datapenduduks`
--
ALTER TABLE `datapenduduks`
  ADD CONSTRAINT `datapenduduks_id_pekerjaan_foreign` FOREIGN KEY (`id_pekerjaan`) REFERENCES `pekerjaan` (`id`),
  ADD CONSTRAINT `datapenduduks_id_pendidikan_foreign` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id`),
  ADD CONSTRAINT `datapenduduks_id_rt_foreign` FOREIGN KEY (`id_rt`) REFERENCES `rt` (`id`),
  ADD CONSTRAINT `datapenduduks_id_rw_foreign` FOREIGN KEY (`id_rw`) REFERENCES `rw` (`id`);

--
-- Ketidakleluasaan untuk tabel `pelayanans`
--
ALTER TABLE `pelayanans`
  ADD CONSTRAINT `pelayanans_jenis_pelayanan_id_foreign` FOREIGN KEY (`jenis_pelayanan_id`) REFERENCES `jenis_pelayanan` (`id`),
  ADD CONSTRAINT `pelayanans_masyarakat_id_foreign` FOREIGN KEY (`masyarakat_id`) REFERENCES `masyarakats` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2024 pada 18.54
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bulans`
--

CREATE TABLE `bulans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bulans`
--

INSERT INTO `bulans` (`id`, `bulan`, `created_at`, `updated_at`) VALUES
(1, 'Januari', NULL, NULL),
(2, 'Februari', NULL, NULL),
(3, 'Maret', NULL, NULL),
(4, 'April', NULL, NULL),
(5, 'Mei', NULL, NULL),
(6, 'Juni', NULL, NULL),
(7, 'Juli', NULL, NULL),
(8, 'Agustus', NULL, NULL),
(9, 'September', NULL, NULL),
(10, 'Oktober', NULL, NULL),
(11, 'November', NULL, NULL),
(12, 'Desember', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `contents`
--

INSERT INTO `contents` (`id`, `id_kategori`, `judul`, `deskripsi`, `alamat`, `link_map`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 'Tabek Patah', 'Panorama Tabek Patah menjadi salah satu wisata yang wajib dikunjungi ketika datang ke Tanah Datar, Sumatera Barat. Anda akan disuguhi pemandangan alam y ang indah dengan pemandangan pohon pinus hijau dan spot foto cantik untuk menghias akun sosial media.', 'Tabek Patah', 'Tabek Patah', 'SaZWJLM29Efz17W0dh9GMwuVLQFYphNSxWIovBYz.jpg', '2024-05-20 03:43:24', '2024-05-21 01:00:52'),
(3, 2, 'Rumah Gadang Pagaruyuang', 'Jika mengunjungi Tanah Datar, akan terasa kurang lengkap apabila Anda tidak turut serta menyempatkan diri untuk mengintip keberadaan Istana Pagaruyung. Objek wisata yang populer karena pesona yang mengagumkan ini memang memiliki nilai sejarah tinggi, sebab dulu digunakan sebagai tempat istirahat keluarga kerajaan Pagaruyung.', 'Batusangkar', 'Rumah Gadang Pagaruyuang', 'ygoEYmRJa9mATJhIO81Ni5UtvpwJonhoUGL5Tc5q.jpg', '2024-05-19 18:45:15', '2024-05-21 01:26:13'),
(4, 1, 'Danau Singkarak', 'Danau Singkarak juga termasuk ke dalam daftar tempat yang sangat populer di kabupaten ini. Keindahannya yang menakjubkan sudah membius begitu banyak wisatawan, sehingga jumlah pengunjung yang datang setiap tahunnya akan selalu bertambah.', 'Tanah Datar', NULL, 'K8HPp9KnYj0Y2nwKSbutO3Tkb0gv89X0mKJj50eG.jpg', '2024-05-19 18:52:53', '2024-05-21 01:25:33'),
(5, 2, 'Batu Batikam', 'Cagar Budaya Batikan atau biasa disebut Batu yang tertusuk, merupakan lokasi bersejarah di Nagari Lima Kaum, tepatnya di Jurung Dusun Tuo Tanah Datar. Batu Batikan sendiri merupakan benda cagar budaya berupa batu dengan bekas tusukan ditengah, yang menurut sejarah merupakan bekas tusukan keris Datuak Parpatiah Nan Sabatang.\r\n\r\nBatu Batikan merupakan bukti adanya Kerajaan Minangkabau di zaman Neolitikum. Batu ini melambangkan pentingnya musyawarah dan perdamaian di Minangkabau. Lokasi cagar budaya ini memiliki luas 1.800 m, yang sebelumnya pada zaman dahulu digunakan sebagai tempat musyawarah kepala suku atau medan nan bapaneh.', 'Jurung Dusun Tuo Tanah Datar', NULL, 'I1dZMoFVeTFBDgywUVow8X4S4IMudewzrRhfQAOd.jpg', '2024-05-21 00:56:30', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_events`
--

CREATE TABLE `jadwal_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nm_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal_events`
--

INSERT INTO `jadwal_events` (`id`, `nm_event`, `deskripsi`, `tanggal`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'Main Layang-layang', 'main layang-layang', '2024-05-13', '05', '2024', NULL, '2024-05-19 23:55:05'),
(2, 'event1', 'event 1', '2024-01-10', '01', '2024', NULL, NULL),
(3, 'event2', 'event2', '2024-02-06', '02', '2024', NULL, '2024-05-21 02:27:23'),
(4, 'event1', 'event1', '2024-03-15', '03', '2024', NULL, '2024-05-21 02:27:44'),
(5, 'event1', 'event1', '2024-04-01', '04', '2024', NULL, '2024-05-21 02:28:18'),
(6, 'event1', 'event apa aja', '2024-05-16', '05', '2024', NULL, NULL),
(7, 'event2', 'event2', '2024-06-07', '06', '2024', NULL, '2024-05-21 02:29:07'),
(8, 'event4', 'event4', '2024-05-09', '05', '2024', NULL, '2024-05-21 02:28:29'),
(9, 'event5', 'event5', '2024-05-27', '05', '2024', NULL, '2024-05-21 02:28:56'),
(10, 'event6', 'event6', '2024-05-22', '05', '2024', NULL, '2024-05-21 02:28:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Alam', NULL, NULL),
(2, 'Cagar Budaya', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_05_17_065109_create_contents_table', 1),
(5, '2024_05_17_065801_create_kategoris_table', 1),
(6, '2024_05_18_044406_create_jadwal_events_table', 1),
(7, '2024_05_18_231141_create_sliders_table', 1),
(8, '2024_05_20_071842_create_bulans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sliders`
--

INSERT INTO `sliders` (`id`, `slider`, `deskripsi`, `file`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 'slider1', 'deskripsi slider', 'rGlFaQAy88aLJnNJML2mkCIiRImgPbovCsH5Miwq.jpg', 1, NULL, '2024-05-20 02:00:28'),
(3, 'slider2', 'Rumah Gadang', 'tSfBkilpd1Nm8T6HjjKu2GGKDFWuWXLQrUk5OBhR.jpg', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$10$x3QGQlNqpJGFl8eKzySSx.wYHlSOcCifOeH5tSeQ.xMG6h0JEtkaS', NULL, NULL, NULL),
(2, 'contoh', 'contoh@mail.com', NULL, '$2y$10$tTYINIScJJxWe.X8v1RQceFxpujMVg4QeHZ75Et4Bsnen9pb2TzsS', NULL, NULL, '2024-05-20 20:00:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bulans`
--
ALTER TABLE `bulans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal_events`
--
ALTER TABLE `jadwal_events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bulans`
--
ALTER TABLE `bulans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jadwal_events`
--
ALTER TABLE `jadwal_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

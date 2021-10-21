-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2021 pada 03.16
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onebus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `id_hometown_destination` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_brkt` date NOT NULL,
  `tgl_plg` date NOT NULL,
  `jam_brkt` time NOT NULL,
  `jam_plg` time NOT NULL,
  `harga` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bus`
--

INSERT INTO `bus` (`id`, `id_hometown_destination`, `nama`, `tgl_brkt`, `tgl_plg`, `jam_brkt`, `jam_plg`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Symphonie.', '2021-10-17', '2021-10-19', '09:05:05', '10:05:05', '150.000', NULL, NULL),
(2, 2, 'Blue Star.', '2021-10-17', '2021-10-19', '08:07:30', '11:07:30', '150.000', NULL, NULL),
(3, 3, 'Marissa Holiday Funny.', '2021-10-15', '2021-10-17', '11:07:30', '10:07:30', '150.000', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `terminal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `destinations`
--

INSERT INTO `destinations` (`id`, `nama`, `terminal`) VALUES
(1, 'Depok', 'Terminal Terpadu Depok'),
(2, 'Bogor', 'Terminal Baranangsiang '),
(3, 'Bandung', 'Terminal Leuwi Panjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hometowns`
--

CREATE TABLE `hometowns` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `terminal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hometowns`
--

INSERT INTO `hometowns` (`id`, `nama`, `terminal`) VALUES
(1, 'Depok', 'Terminal Terpadu Depok'),
(2, 'Bogor', 'Terminal Baranangsiang '),
(3, 'Bandung', 'Terminal Leuwi Panjang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hometown_destination`
--

CREATE TABLE `hometown_destination` (
  `id` int(11) NOT NULL,
  `id_kota_asal` int(11) NOT NULL,
  `id_kota_tujuan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hometown_destination`
--

INSERT INTO `hometown_destination` (`id`, `id_kota_asal`, `id_kota_tujuan`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 1, 3),
(4, 3, 1),
(5, 2, 3),
(6, 3, 2);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Struktur dari tabel `terminal_asal`
--

CREATE TABLE `terminal_asal` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `hometown_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `terminal_asal`
--

INSERT INTO `terminal_asal` (`id`, `nama`, `hometown_id`) VALUES
(1, 'Terminal Terpadu Depok', 1),
(2, 'Terminal Baranangsiang ', 2),
(3, 'Terminal Leuwi Panjang', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `terminal_tujuan`
--

CREATE TABLE `terminal_tujuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `id_destination` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `terminal_tujuan`
--

INSERT INTO `terminal_tujuan` (`id`, `nama`, `id_destination`) VALUES
(1, 'Terminal Terpadu Depok', 1),
(2, 'Terminal Baranangsiang ', 2),
(3, 'Terminal Leuwi Panjang', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aji Permana', 'ajipermana', 'ajisajalah1407@gmail.com', NULL, '$2y$10$OBwNS5E.5/dyxogueXO.KOknTkLpj8kkBxRiIoFq9FBHju8KNX6J.', NULL, '2021-10-11 10:47:19', '2021-10-11 10:47:19'),
(2, 'Bayu Pamungkas', 'bayupamungkas', 'bbyyu2135@gmail.com', NULL, '$2y$10$HvsbXzWwdz4ZxPpy5LDF/.SY82sfOzZ63lahW/.zq45NhcibYlFMi', NULL, '2021-10-11 19:17:22', '2021-10-11 19:17:22'),
(5, 'Adi Prasetio', 'adiprasetio', 'adiprasetio@gmail.com', NULL, '$2y$10$LxpOOMh7W9.txSpzJHHQ6.Ut4VN0tOWfcCxtmlQs/HN5jMIHoUZj.', NULL, '2021-10-12 12:27:00', '2021-10-12 12:27:00'),
(6, 'Ikhwan Hanif', 'ikhwanhanif', 'ikhwanhanif@gmail.com', NULL, '$2y$10$l56OzG.9cJG.NtNM7/Vm3uQRa5X46Ky18Lmst/thOGV18ZwMa9QwK', NULL, '2021-10-12 12:27:24', '2021-10-12 12:27:24'),
(8, 'Bayu Saputra', 'bayusaputra', 'baysap@gmail.com', NULL, '$2y$10$K1KkG5IeRu2BN2ozariWMe1mXhiQj2rbUOJn.mypLtBezMjeFNXIW', NULL, '2021-10-12 13:17:39', '2021-10-12 13:17:39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hometown_destination` (`id_hometown_destination`);

--
-- Indeks untuk tabel `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hometowns`
--
ALTER TABLE `hometowns`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hometown_destination`
--
ALTER TABLE `hometown_destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kota_asal` (`id_kota_asal`),
  ADD KEY `id_kota_tujuan` (`id_kota_tujuan`);

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
-- Indeks untuk tabel `terminal_asal`
--
ALTER TABLE `terminal_asal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hometown_id` (`hometown_id`);

--
-- Indeks untuk tabel `terminal_tujuan`
--
ALTER TABLE `terminal_tujuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_destination` (`id_destination`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hometowns`
--
ALTER TABLE `hometowns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `hometown_destination`
--
ALTER TABLE `hometown_destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `terminal_asal`
--
ALTER TABLE `terminal_asal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `terminal_tujuan`
--
ALTER TABLE `terminal_tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `bus_ibfk_1` FOREIGN KEY (`id_hometown_destination`) REFERENCES `hometown_destination` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hometown_destination`
--
ALTER TABLE `hometown_destination`
  ADD CONSTRAINT `hometown_destination_ibfk_1` FOREIGN KEY (`id_kota_asal`) REFERENCES `hometowns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hometown_destination_ibfk_2` FOREIGN KEY (`id_kota_tujuan`) REFERENCES `destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `terminal_asal`
--
ALTER TABLE `terminal_asal`
  ADD CONSTRAINT `terminal_asal_ibfk_1` FOREIGN KEY (`hometown_id`) REFERENCES `hometowns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `terminal_tujuan`
--
ALTER TABLE `terminal_tujuan`
  ADD CONSTRAINT `terminal_tujuan_ibfk_1` FOREIGN KEY (`id_destination`) REFERENCES `destinations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

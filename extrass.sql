-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2022 at 04:02 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extrass`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `nama`, `nohp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'nope', 'nope', '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(2, 'Anindya Jinan Risky', '086258798034', 'Jalan Kaiurang Km 5 Gang Mijil Catur Tunggal, Kec. Depok, Kab. Bondowoso, Jawa Timur', '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(3, 'Abdul Wahid Shomdany', '085938479098', 'Jalan Kaiurang Km 5 Gang Mijil Catur Tunggal, Kec. Depok, Kab. Bondowoso, Jawa Timur', '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(4, 'Afin Diyanti', '083093748918', 'Jalan Kaiurang Km 5 Gang Mijil Catur Tunggal, Kec. Depok, Kab. Bondowoso, Jawa Timur', '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(8, 'okan', '123543123', 'asdasdasd', '2022-08-25 22:49:15', '2022-08-25 22:49:15'),
(9, 'asdasd', '123345654', 'asdxcxzasdasdc', '2022-08-26 06:07:36', '2022-08-26 06:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_category`, `created_at`, `updated_at`) VALUES
(1, 'Olahraga', '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(2, 'Organisasi', '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(3, 'Seni', '2022-08-25 18:52:34', '2022-08-25 18:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `extrakulikulers`
--

CREATE TABLE `extrakulikulers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_extra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanggung_jawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extrakulikulers`
--

INSERT INTO `extrakulikulers` (`id`, `nama_extra`, `deskripsi`, `foto`, `penanggung_jawab`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Pramuka', ' Ekstrakurikuler pramuka merupakan suatu kegiatan kepramukaan yang dilaksanakan diluar jam pembelajaran di sekolah dan di luar lingkungan keluarga yang bertujuan mewadahi bakat, minat, dan potensi anak untuk dikembangkan secara terus-menerus.', 'pramuka.jpg', 'Ghandy Yuda', 2, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(2, 'Paskibra', 'Ekskul PASKIBRA mempunyai manfaat sangat banyak diantaranya bisa meningkatkan kedisiplinan siswa, membangkitkan jiwa nasionalisme pada anggotanya, sebagai wahana penyaluran bakat, memupuk rasa tanggung jawab dan membekali anggotanya dengan berbagai keterampilan untuk menyongsong masa depan.', 'paskibra.jpeg', 'Danang Sutyanto', 2, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(3, 'PMR', 'Palang merah remaja bertujuan untuk melatih dan membentuk jiwa kemanusiaan para anggotanya agar mereka bisa memiliki kepedulian yang tinggi terhadap kemanusiaan sejak usia dini.', 'pmr.jpeg', 'Nanang Tress', 2, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(4, 'Basket', 'Kegiatan ekstrakurikuler bola basket merupakan salah satu kegiatan di luar jam pelajaran sekolah dan sebagai wahana untuk menampung, menyalurkan dan membina minat, bakat serta kegemaran peserta didik dalam mengikuti kegiatan ekstrakurikuler.', 'basket.jpg', 'Alif Ramadhan', 1, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(5, 'Paduan Suara', 'Kegiatan ekstrakurikuler paduan suara adalah salah satu kegiatan di luar jam pelajaran sekolah untuk mengembangkan bakat, minat dan kreatifitas siswa di bidang olah vokal.', 'padus.jpg', 'Elinda Cyntia', 3, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(6, 'Sepak Bola', 'Kegiatan ekstrakurikuler sepakbola merupakan kegiatan sekolah yang dilakukan di luar jam pelajaran dengan tujuan untuk memperdalam dan memperluas pengetahuan, meningkatkan prestasi, menyalurkan minat, dan bakat serta melengkapi upaya pembinaan manusia seutuhnya.', 'sepakBola.jpg', 'Didik Cahyono', 1, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(7, 'Futsal', 'Ekstrakurikuler futsal merupakan salah satu kegiatan ekstrakurikuler SD BM Gunung Sahari. Setiap siswa yang mengikuti ekstrakurikuler futsal dilatih dan didik tentang metode permainan futsal. Peserta didik diajarkan bagaimana menendang, menahan, menggiring dan teknik mengoper bola.', 'futsal.jpg', 'Didik Cahyono', 1, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(8, 'Voli', 'Ekstrakurikuler bola voli merupakan media untuk mendorong prestasi non akademik, pertumbuhan fisik dan perkembangan psikis, meningkatkan kemampuan dan keterampilan dalam bermain bola voli supaya lebih baik, serta pembiasaan pola hidup sehat dengan berolahraga.', 'volly.jpg', 'Dwi Satya Dharma', 1, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(9, 'Teater Dan Kesenian', 'Teater sekolah atau lebih lazim disebut ekskul teater merupakan wadah yang sengaja dibentuk oleh pihak sekolah. Tujuannya untuk menjadi ajang pengembangan diri para siswanya melalui kegiatan seni pertunjukan drama.', 'teater.jpg', 'Arsy Dwi Riski', 3, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(10, 'Remaja Masjid', 'Ekstrakulikuler remas merupakan ekskul yang dapat meningkatkan jiwa rohani. Selain itu ekstrakulikuler remas juga mengajarkan baca Al-Qur’an,dan juga di ajarkan permainan alat musik dan tarian khas Islami.', 'hadra.png', 'Udin Abidin', 2, '2022-08-25 18:52:34', '2022-08-25 18:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2013_08_24_002733_create_biodatas_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_08_24_003520_create_categories_table', 1),
(7, '2022_08_24_003612_create_extrakulikulers_table', 1),
(8, '2022_08_24_004233_create_user_extras_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `biodata_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `biodata_id`, `username`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', '$2y$10$iXzdkouOzGe2lJoo90ZOD.ESJmE0B0kNuHrk1TOim7QQgwXECG0FC', 'admin', NULL, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(2, 2, 'anindya123', '$2y$10$uXx5OHqM/8lSKHH6fGXesuYiUHef36HmAMUqFvoAE.F6bsZ7/DP5O', 'user', NULL, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(3, 3, 'abdulwahid123', '$2y$10$k/dI4LNAxgE7cipjFrEsSOkIqZWRITCB.UF.ljKu9Lwi.1s3ShFxm', 'user', NULL, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(4, 4, 'afindiyanti123', '$2y$10$L4VhNqBukw1Jegp.RaL8E.u2tF2S3VzJjNuGp/a7DiJdWvgtgldxa', 'user', NULL, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(8, 8, 'okan123', '$2y$10$XX7sGqRqgLbE7UtR6WUNeOvQS2BVGrB7C9F31HsVGFHXEuYSF4cES', 'user', NULL, '2022-08-25 22:49:15', '2022-08-25 22:49:15'),
(9, 9, 'asdasd', '$2y$10$wq/s4w7MdfNsozJ1HXk./eLSzSjF098A3Kj.oT1YxdFoec1vvFi6y', 'user', NULL, '2022-08-26 06:07:37', '2022-08-26 06:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_extras`
--

CREATE TABLE `user_extras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `biodata_id` bigint(20) UNSIGNED NOT NULL,
  `extrakulikuler_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_extras`
--

INSERT INTO `user_extras` (`id`, `biodata_id`, `extrakulikuler_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(2, 2, 2, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(3, 2, 3, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(4, 2, 4, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(5, 3, 1, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(6, 3, 5, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(7, 3, 8, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(8, 4, 1, '2022-08-25 18:52:34', '2022-08-25 18:52:34'),
(9, 2, 6, '2022-08-26 08:56:00', '2022-08-26 08:56:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extrakulikulers`
--
ALTER TABLE `extrakulikulers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `extrakulikulers_category_id_foreign` (`category_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_biodata_id_foreign` (`biodata_id`);

--
-- Indexes for table `user_extras`
--
ALTER TABLE `user_extras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_extras_biodata_id_foreign` (`biodata_id`),
  ADD KEY `user_extras_extrakulikuler_id_foreign` (`extrakulikuler_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `extrakulikulers`
--
ALTER TABLE `extrakulikulers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_extras`
--
ALTER TABLE `user_extras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `extrakulikulers`
--
ALTER TABLE `extrakulikulers`
  ADD CONSTRAINT `extrakulikulers_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_biodata_id_foreign` FOREIGN KEY (`biodata_id`) REFERENCES `biodatas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_extras`
--
ALTER TABLE `user_extras`
  ADD CONSTRAINT `user_extras_biodata_id_foreign` FOREIGN KEY (`biodata_id`) REFERENCES `biodatas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_extras_extrakulikuler_id_foreign` FOREIGN KEY (`extrakulikuler_id`) REFERENCES `extrakulikulers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

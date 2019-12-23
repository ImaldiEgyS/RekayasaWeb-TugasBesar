-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 10:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clover`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_19_211032_logiin', 2);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `socket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `katalog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `merek`, `seri`, `socket`, `spek`, `gambar`, `harga`, `katalog`, `created_at`, `updated_at`) VALUES
(1, 'Asus ROG', 'Asus ROG Ryujin 360 Liquid Cooler', 'LGA 1150, LGA 1151, LGA 1152, LGA 1155, LGA 1156, LGA 1366, LGA 2011, LGA 2011-3, LGA 2066, AM4, TR4', 'ROG Ryujin 360 all-in-one liquid CPU cooler with LiveDash color OLED, Aura Sync RGB and 3x Noctua iPPC 2000 PWM 120mm radiator fans', 'Cooler ROG.png', 4350000, 'Cooler', '2019-12-16 01:05:54', NULL),
(2, 'Cooler Master', 'Cooler Master MasterLiquid ML360R RGB', 'LGA 2066, LGA 2011-v3, LGA 2011, LGA 1151, LGA 1150, LGA 1156, LGA 1366, LGA 775, AM4, AM3+, AM3, AM2+, AM2, FM2+, FM2, FM1', 'Dual Dissipation, 360mm Radiator, Addressable RGB LED, Sleeved FEP, Exclusive Wired ARGB Controller', 'Cooler Master.png', 1828000, 'Cooler', '2019-12-16 01:05:54', NULL),
(3, 'Corsair', 'Corsair Hydro Series H100i Platinum SE RGB Water Cooler', 'LGA 1150, LGA 1151, LGA 1155, LGA 1156, LGA 2011, LGA 2066, AM3, AM2, AM4, TR4', 'The CORSAIR Hydro Series H100i RGB PLATINUM SE is an all-in-one liquid CPU cooler with a 240mm radiator and vivid RGB lighting in brilliant white housing, built for extreme CPU cooling', 'Cooler Corsair.png', 1969000, 'Cooler', '2019-12-16 01:06:51', NULL),
(4, 'Intel', 'Intel Core i9-9900K', 'LGA 1151V2', 'Intel Core i9-9900K 3.6Ghz Up To 5.0Ghz - Cache 16MB [Box] Socket LGA 1151V2 - Coffeelake Series', 'Intel.png', 7979000, 'Processor', '2019-12-16 01:08:42', NULL),
(5, 'AMD', 'AMD Ryzen 9 3900X', 'AM4', 'AMD Ryzen 9 3900X 3.8Ghz Up To 4.6Ghz Cache 64MB 105W AM4 [Box] - 12 Core - 100-100000023BOX - With AMD Wraith Prism Cooler', 'AMD.png', 7769000, 'Processor', '2019-12-16 01:08:42', NULL),
(6, 'Corsair', 'Corsair Vengeance RGB Pro PC21000 16GB (2X8GB)', 'DDR4', 'Corsair DDR4 Vengeance RGB Pro PC21000 16GB (2X8GB) - CMW16GX4M2A2666C16W - White Heat-Spreader', 'Ram Corsair.png', 1360000, 'Memory RAM', '2019-12-16 01:10:44', NULL),
(7, 'Team', 'Team Delta TUF DDR4 RGB PC25600 3200Mhz Dual Channel 16GB (2x8GB)', 'DDR4', 'Team Delta TUF DDR4 RGB PC25600 3200Mhz Dual Channel 16GB (2x8GB) 16-18-18-38 - TF9D416G3200HC18HDC01 - Black Heatspreader', 'Ram Team.png', 1195000, 'Memory RAM', '2019-12-16 01:10:44', NULL),
(8, 'LG', 'LG 24 LED 24GL600', 'HDMI, DP', 'LG 24\" LED 24GL600 Gaming 144Hz - Response Time 1ms, 23.6 Class FHD, Radeon FreeSync™', 'Monitor LG.png', 2799000, 'Monitor', '2019-12-16 01:13:03', NULL),
(9, 'SAMSUNG', 'SAMSUNG 27 C27F397 CURVED', 'HDMI, DP', 'SAMSUNG 27\" C27F397 CURVED LED Wide Screen, 1920x1080, 250cd/m2, Contrast Ratio Static 3000:1, Response Time 5ms', 'Monitor Samsung.png', 3515000, 'Monitor', '2019-12-16 01:13:03', NULL),
(10, 'ASRock', 'ASRock Z390 Phantom Gaming 9', 'LGA 1151V2', 'ASRock Z390 Phantom Gaming 9 (LGA 1151V2, Z390, DDR4, USB3.1, SATA3)', 'Mobo Asrock.png', 4400000, 'Motherboard', '2019-12-16 01:15:35', NULL),
(11, 'Asus TUF', 'Asus TUF GAMING X570-PLUS (WI-FI)', 'AM4', 'Asus TUF GAMING X570-PLUS (WI-FI) (AM4, AMD Premium X570, DDR4, USB3.2, SATA3)', 'Mobo Asus.png', 4550000, 'Motherboard', '2019-12-16 01:15:35', NULL),
(12, 'Cooler Master', 'Cooler Master MWE 450 White v2 80+', 'AC/DC', '80 PLUS Standard Certified, 120 mm HDB Fan, DC-to-DC + LLC Circuit Design, Single +12V Rail, Silent Mode, Flat Black Cables', 'PSU MWE.png', 599000, 'PSU', '2019-12-16 01:19:10', NULL),
(13, 'Thermaltake', 'Thermaltake Smart BX1 RGB 550W 80+ Bronze', 'AC/DC', 'Thermaltake Smart BX1 550W 80 PLUS Bronze certified non-modular PSU with 256-color 10 LED RGB fan', 'PSU TT.png', 870000, 'PSU', '2019-12-16 01:19:10', NULL),
(14, 'Intel', 'Intel SSD 512GB 660P Series M.2', 'M.2 NVMe', '512GB, M.2 80mm PCIe* 3.0 x4, 3D2, QLC, 1500/1000 MB/s', 'SSD Intel.png', 1234000, 'Storage SSD', '2019-12-16 01:19:10', NULL),
(15, 'Samsung', 'Samsung SSD 860 EVO M.2 SATA 1TB', 'M.2 SATA', 'Innovative V-NAND Technology with Enhanced Read/Write Performance, 550/520 MB/s ', 'SSD Samsung.png', 2600000, 'Storage SSD', '2019-12-16 01:19:10', NULL),
(16, 'Gigabyte', 'Gigabyte GeForce RTX 2080 Ti 11GB DDR6 Gaming OC - GV-N208TGAMING OC-11GC', 'PCIe', 'WINDFORCE 3X Cooling System with alternate spinning fans, RGB Fusion 2.0 – synchronize with other AORUS devices, Metal Back Plate, Core Clock 1665 MHz in OC mode - 1650 MHz in Gaming mode', 'VGA Nvidia.png', 19960000, 'VGA', '2019-12-16 01:20:57', NULL),
(17, 'MSI', 'MSI Radeon RX 5700 XT 8GB DDR6 - Gaming X', 'PCIe', 'Memory Speed 1980 MHz - 14Gbps 8GB GDDR6, Steeper curved blade accelerating the airflow, Provides steady airflow to massive heat sink below, RGB Mystic Light', 'VGA AMD.png', 7199000, 'VGA', '2019-12-16 01:20:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `usertype`) VALUES
(9, 'Egy Imaldi Sulistyo', 'imaldiegi@gmail.com', NULL, '$2y$10$QNTyx9eSPFcI3tOalLkTUeihADmilRh7fTB18wZwNiDcaktrgWXoG', NULL, '2019-12-23 09:56:15', '2019-12-23 09:56:15', NULL),
(10, 'Admin', 'admin@gmail.com', NULL, '$2y$10$EnyskC3FpxqwD0T3.lj74eLc4ZnGi5QobcPgxEXfzLq5T/pDqYyZK', NULL, '2019-12-23 09:57:08', '2019-12-23 09:57:08', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

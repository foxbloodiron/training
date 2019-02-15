-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table laravel-polosan.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-polosan.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table laravel-polosan.notifikasi
CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL DEFAULT '0',
  `aksi_user` char(50) DEFAULT NULL,
  `menu` char(50) DEFAULT NULL,
  `data` char(50) DEFAULT NULL,
  `CREATED_AT` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel-polosan.notifikasi: ~28 rows (approximately)
/*!40000 ALTER TABLE `notifikasi` DISABLE KEYS */;
INSERT INTO `notifikasi` (`id`, `id_user`, `aksi_user`, `menu`, `data`, `CREATED_AT`) VALUES
	(1, 1, 'Simpan', 'Data Suplier', 'Delta', '2019-01-23 10:37:36'),
	(2, 1, 'Simpan', 'Data Suplier', 'ab', '2019-01-23 10:46:41'),
	(3, 1, 'Delete', 'Data Suplier', 'ab', '2019-01-23 10:47:47'),
	(4, 1, 'Delete', 'Data Suplier', 'ab', '2019-01-23 10:48:53'),
	(5, 1, 'Delete', 'Data Suplier', 'ab', '2019-01-23 10:50:48'),
	(6, 1, 'Delete', 'Data Suplier', 'ab', '2019-01-23 10:55:30'),
	(7, 1, 'Delete', 'Data Suplier', 'ab', '2019-01-23 10:57:35'),
	(8, 1, 'Delete', 'Data Suplier', 'ab', '2019-01-23 10:59:11'),
	(9, 1, 'Simpan', 'Data Suplier', 'Zulu', '2019-01-23 11:01:25'),
	(10, 1, 'Edit', 'Data Suplier', 'Alpha', '2019-01-23 11:02:55'),
	(11, 1, 'Edit', 'Data Suplier', 'Delta', '2019-01-23 11:05:09'),
	(12, 1, 'Edit', 'Data Suplier', 'Zulu', '2019-01-23 14:34:05'),
	(13, 1, 'Simpan', 'Data Suplier', 'X-ray', '2019-01-23 18:36:47'),
	(14, 1, 'Edit', 'Data Suplier', 'X-ray', '2019-01-23 18:38:38'),
	(15, 1, 'Edit', 'Data Suplier', 'Zulu', '2019-01-23 18:39:25'),
	(16, 1, 'Edit', 'Data Suplier', 'Alpha', '2019-01-23 18:40:04'),
	(17, 1, 'Edit', 'Data Suplier', 'Alpha', '2019-01-23 18:41:20'),
	(18, 1, 'Edit', 'Data Suplier', 'X-ray', '2019-01-23 18:42:03'),
	(19, 1, 'Edit', 'Data Suplier', 'Zulu', '2019-01-23 18:44:12'),
	(20, 1, 'Simpan', 'Data Suplier', 'Delta', '2019-01-23 18:44:45'),
	(21, 2, 'Edit', 'Data Suplier', 'Delta', '2019-01-23 18:46:05'),
	(22, 2, 'Simpan', 'Data Suplier', 'aaa', '2019-01-23 18:47:19'),
	(23, 1, 'Edit', 'Data Suplier', 'Mike', '2019-01-24 09:36:22'),
	(24, 1, 'Simpan', 'Data Suplier', 'gvd', '2019-01-24 10:37:23'),
	(25, 1, 'Edit', 'Data Suplier', 'gvd', '2019-01-24 11:25:50'),
	(26, 1, 'Edit', 'Data Suplier', 'gvd', '2019-01-24 15:07:43'),
	(27, 1, 'Edit', 'Data Suplier', 'X-ray', '2019-01-24 15:07:57'),
	(28, 1, 'Edit', 'Data Suplier', 'Alpha', '2019-01-24 15:55:23'),
	(29, 1, 'Edit', 'Data Suplier', 'Delta', '2019-01-24 15:55:44'),
	(30, 1, 'Edit', 'Data Suplier', 'Delta', '2019-01-24 15:56:18'),
	(31, 1, 'Edit', 'Data Suplier', 'gvd', '2019-01-24 15:58:58'),
	(32, 2, 'Edit', 'Data Suplier', 'Mike', '2019-01-24 16:00:42');
/*!40000 ALTER TABLE `notifikasi` ENABLE KEYS */;

-- Dumping structure for table laravel-polosan.suplier
CREATE TABLE IF NOT EXISTS `suplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` char(50) DEFAULT NULL,
  `nama_sup` char(50) DEFAULT NULL,
  `no_hp` char(15) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `fax` char(15) DEFAULT NULL,
  `alamat` text,
  `keterangan` text,
  `npwp` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Dumping data for table laravel-polosan.suplier: ~7 rows (approximately)
/*!40000 ALTER TABLE `suplier` DISABLE KEYS */;
INSERT INTO `suplier` (`id`, `nama_perusahaan`, `nama_sup`, `no_hp`, `email`, `fax`, `alamat`, `keterangan`, `npwp`) VALUES
	(10, 'PT.Alpha Surabaya', 'Alpha', '085331219757', NULL, '123456', 'Jl. Ngagel Dadi 1 no.32 surabaya 60245', '-', '111-222-333-444'),
	(11, 'PT. Delta', 'Delta', '085331219757', 'delta@delta.com', '11111', 'jl. delta Surabaya', '-', '10002'),
	(18, 'PT. Zulu Surabaya', 'Zulu', '085331219757', 'zulu@zulu.com', '1111', 'Jl. Ngagel Dadi 1 no.32 surabaya 60245', '-', '11223'),
	(19, 'PT. X-ray Surabaya', 'X-ray', '085331219757', 'xray@xray.com', '11111', 'Jl. Ngagel Dadi 1 no.32 surabaya', '----', '111-222-33-444'),
	(20, 'CV. Delta', 'Delta', '085331219757', 'delta@delta.com', '1111', 'Jl. Ngagel Dadi 1 no.32 Surabaya', '-', '11-22-33-44'),
	(21, 'PT. Mike Malang', 'Mike', '085331219757', 'mike@mike.com', '11111', 'jl. mike', '-', '11-22-33-44'),
	(22, 'CV. Golf Surabaya', 'gvd', '085331219757', 'golf@golf.com', '111', 'jl. golf', '-', '11-22-33-44');
/*!40000 ALTER TABLE `suplier` ENABLE KEYS */;

-- Dumping structure for table laravel-polosan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table laravel-polosan.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `username`) VALUES
	(1, 'admin', 'admin@admin.com', '$2y$10$knydf0gdv9B.c7mWEgjWNu8YUB07itu3CjaYkiY9FtNMBBsCevN32', 'pdFQVMYyFa34ryJhPzclSEijviOhe8kUMlm9ujsSCunpz0aAYoXWDaw6srhc', '2019-01-21 02:02:04', '2019-01-21 02:02:04', 'admin'),
	(2, 'lmao', 'lmao@gmail.com', '$2y$10$7H4wucgrf2WfG2RyVZJnFOJvS7i2S/nMJKuaMdZD2GSRnurNCsIiu', 'SuDzOg1T8FMB1a2uS55OHjjn8X1Fku4mrhJhLrZodYyTRc54QTYKb8i0yirf', '2019-01-22 07:25:25', '2019-01-22 07:25:25', 'lmao'),
	(3, 'Alpha', 'alpha@gmail.com', '$2y$10$8lXoUkSJQ6MBFc0LRTw4deR6wWZ3kks3EsoqT4kPKmAJsecrES35i', NULL, '2019-01-29 01:43:42', '2019-01-29 01:43:42', 'alpha'),
	(4, 'Developer', 'developer@developer.com', '$2y$10$hdvhagmDfrns38tQUT2C8.nPuOah75.FE5JRVFYXNvz0R9ODovFQ.', NULL, '2019-02-07 01:31:32', '2019-02-07 01:31:32', 'developer');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

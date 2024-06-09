-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.33 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk ppob
CREATE DATABASE IF NOT EXISTS `ppob` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ppob`;

-- membuang struktur untuk table ppob.kode_pulsa
CREATE TABLE IF NOT EXISTS `kode_pulsa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  `kode` varchar(10) NOT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel ppob.kode_pulsa: ~19 rows (lebih kurang)
/*!40000 ALTER TABLE `kode_pulsa` DISABLE KEYS */;
INSERT INTO `kode_pulsa` (`id`, `kategori`, `kode`, `deskripsi`, `harga`) VALUES
	(1, 'pulsa', 'T15', 'TRI 15000', 15028),
	(2, 'pulsa', 'T10', 'TRI 10000', 12000),
	(3, 'pulsa', 'T9', 'TRI 9000', NULL),
	(5, 'pulsa', 'AX5', 'AXIS 5K', 5975),
	(6, 'pln', 'PLN5', 'Token PLN 5000', 6675),
	(7, 'pulsa', 'T7', 'TRI 7000', NULL),
	(8, 'pulsa', 'T8', 'TRI 8000', NULL),
	(9, 'pln', 'PLN10', 'Token PLN 10000', 11675),
	(10, 'game', 'FF5', 'Free Fire 5 Diamond', 1089),
	(11, 'game', 'FF12', 'Free Fire 12 Diamond', 2170),
	(13, 'game', 'FF3640', 'Free Fire 3640 D', 479915),
	(14, 'pulsa', 'T20', 'TRI 20K', 19998),
	(15, 'pulsa', 'T1', 'TRI 1K', 1495),
	(16, 'pulsa', 'T2', 'TRI 2K', 2429),
	(17, 'game', 'PU35', 'PUBG Mobile 35 UC', 7975),
	(18, 'pulsa', 'S5', 'TELKOMSEL 5K', 5395),
	(19, 'pulsa', 'S10', 'TELKOMSEL 10K', 10395),
	(20, 'pln', 'PLN500', 'pln 500', 550000),
	(28, 'pulsa', 'AAG12', 'Aktivasi Axis AIGO 12GB 30HR', 68500);
/*!40000 ALTER TABLE `kode_pulsa` ENABLE KEYS */;

-- membuang struktur untuk table ppob.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- membuang struktur untuk table ppob.profil
CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel ppob.profil: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` (`id`, `nama_usaha`, `no_hp`, `tentang`, `email`, `alamat`, `facebook`, `instagram`) VALUES
	(1, 'tiket', '089531941653', 'tentang tiket', 'firlana89@gmail.com', '-', 'https://web.facebook.com/profile.phpid100014986094346', 'https://www.instagram.com/jasa_aplikasi471/');
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;

-- membuang struktur untuk table ppob.rekening
CREATE TABLE IF NOT EXISTS `rekening` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ppob.rekening: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `rekening` DISABLE KEYS */;
INSERT INTO `rekening` (`id`, `nama_bank`, `no_rek`) VALUES
	(1, 'BNI', '0');
/*!40000 ALTER TABLE `rekening` ENABLE KEYS */;

-- membuang struktur untuk table ppob.setting_website
CREATE TABLE IF NOT EXISTS `setting_website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_website` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `alamat` text,
  `portal_userid` varchar(50) DEFAULT NULL,
  `portal_key` text,
  `portal_secret` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel ppob.setting_website: ~1 rows (lebih kurang)
/*!40000 ALTER TABLE `setting_website` DISABLE KEYS */;
INSERT INTO `setting_website` (`id`, `nama_website`, `deskripsi`, `no_hp`, `email`, `alamat`, `portal_userid`, `portal_key`, `portal_secret`) VALUES
	(1, 'AJI ppob', 'pembelian tiket pesawat murah dan mudah secara online dan terpercaya', '089531941653', 'firlana89@gmail.com', 'JAMBI', 'portal-userid: P163966', 'portal-key: ed9ed3024c8d589c54bdb4c03c35e2b5', 'portal-secret: cff218abf8adaf112b80d694984464a667af9aad2a7ad3e3edf2b7811df85abe');
/*!40000 ALTER TABLE `setting_website` ENABLE KEYS */;

-- Membuang data untuk tabel ppob.tb_pesawat: ~31 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_pesawat` DISABLE KEYS */;

-- membuang struktur untuk table ppob.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ppob.tb_users: ~2 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` (`id`, `username`, `password`) VALUES
	(0, 'tes', 'tes');
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;

-- membuang struktur untuk table ppob.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `log` text,
  `tanggal` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel ppob.transaksi: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`id`, `kategori`, `no_hp`, `harga`, `log`, `tanggal`) VALUES
	(75, 'pulsa', '089531941653', '10395', NULL, '03-04-2024'),
	(76, 'pulsa', '089531941653', '1495', NULL, '03-04-2024'),
	(77, 'pln', '089531941653', '11675', NULL, NULL),
	(78, 'game', '089531941653', '7975', NULL, NULL),
	(79, 'pulsa', '089531941653', '1495', NULL, '03-04-2024'),
	(80, 'pln', '089531941653', '550000', NULL, NULL),
	(81, 'game', '089531941653', '7975', NULL, NULL),
	(82, 'pulsa', '089531941653', '1495', NULL, '06-04-2024');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

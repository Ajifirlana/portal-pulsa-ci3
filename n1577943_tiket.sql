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

-- Membuang data untuk tabel ppob.pengguna: ~4 rows (lebih kurang)
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` (`id`, `username`, `no_hp`, `email`, `password`) VALUES
	(5, 'user', NULL, '', '12dea96fec20593566ab75692c9949596833adc9'),
	(6, 'Bos', NULL, '', '601f1889667efaebb33b8c12572835da3f027f78'),
	(7, 'aji', '089531941653', 'firlana89@gmail.com', '4c331d67511b7d61a008c63601c1d420b2803849'),
	(8, 'Tes1', NULL, NULL, 'c8f36505c11f198e261255eb7545826024594274');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel ppob.setting_website: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `setting_website` DISABLE KEYS */;
INSERT INTO `setting_website` (`id`, `nama_website`, `deskripsi`, `no_hp`, `email`, `alamat`) VALUES
	(1, 'AJI ppob', 'pembelian tiket pesawat murah dan mudah secara online dan terpercaya', '089531941653', 'firlana89@gmail.com', 'JAMBI');
/*!40000 ALTER TABLE `setting_website` ENABLE KEYS */;

-- membuang struktur untuk table ppob.tb_pesawat
CREATE TABLE IF NOT EXISTS `tb_pesawat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pesawat` varchar(40) NOT NULL,
  `kode_pesawat` varchar(40) NOT NULL,
  `keberangkatan` varchar(40) NOT NULL,
  `tujuan` varchar(40) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `kelas_penerbangan` varchar(20) NOT NULL,
  `harga` float NOT NULL,
  `tersedia` tinyint(1) NOT NULL,
  `tanggal` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel ppob.tb_pesawat: ~31 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_pesawat` DISABLE KEYS */;
INSERT INTO `tb_pesawat` (`id`, `nama_pesawat`, `kode_pesawat`, `keberangkatan`, `tujuan`, `jam_keberangkatan`, `jam_tiba`, `kelas_penerbangan`, `harga`, `tersedia`, `tanggal`) VALUES
	(18, 'Lion Air', 'LN01', 'Jakarta', 'Bandung', '07:00:00', '07:30:00', 'Ekonomi', 800000, 1, NULL),
	(20, 'Sriwijaya Air', 'SWJ01', 'Surabaya', 'Jakarta', '07:00:00', '08:00:00', 'Ekonomi', 600000, 1, NULL),
	(21, 'Garuda', 'GD01', 'Jakarta', 'Bali', '16:00:00', '17:30:00', 'Ekonomi', 600000, 1, NULL),
	(22, 'Garuda', 'GD02', 'Bali', 'Jakarta', '12:30:00', '14:00:00', 'Ekonomi', 700000, 1, NULL),
	(23, 'Citilink', 'CT01', 'Jakarta', 'Surabaya', '09:00:00', '08:00:00', 'Ekonomi', 600000, 1, NULL),
	(24, 'Citilink', 'CT02', 'Surabaya', 'Lampung', '00:00:12', '13:45:00', 'Ekonomi', 800000, 1, NULL),
	(25, 'Lion Air', 'LN03', 'Surabaya', 'Jakarta', '08:00:00', '09:30:00', 'Ekonomi', 900000, 1, NULL),
	(26, 'Nam Air', 'NMA21', 'JogjaJakarta', 'Lombok', '15:00:00', '17:10:00', 'Bisnis', 864000, 1, NULL),
	(27, 'Lion Air', 'LN02', 'Jakarta', 'Bandung', '19:15:00', '19:50:00', 'Bisnis', 400000, 1, NULL),
	(28, 'Lion Air', 'LN03', 'Surabaya', 'Jakarta', '12:30:00', '13:45:00', 'Bisnis', 450000, 1, NULL),
	(29, 'Citilink', 'CT03', 'Surabaya', 'Makasar', '21:25:00', '23:10:00', 'Ekonomi', 680000, 1, NULL),
	(30, 'Citilink', 'CT04', 'Surabaya', 'Makasar', '17:30:00', '19:00:00', 'Bisnis', 900000, 1, NULL),
	(31, 'Citilink', 'CT05', 'Surabaya', 'Makasar', '19:25:00', '20:10:00', 'Bisnis', 870000, 1, NULL),
	(32, 'Lion Air', 'LN01', 'Surabaya', 'Makasar', '14:10:00', '16:00:00', 'Ekonomi', 600000, 1, NULL),
	(33, 'Garuda', 'GD03', 'Surabaya', 'Makasar', '05:00:00', '07:00:00', 'Bisnis', 900000, 1, NULL),
	(34, 'Citilink', 'CT01', 'Jakarta', 'Bandung', '08:00:00', '09:00:00', 'Ekonomi', 500000, 1, NULL),
	(35, 'Citilink', 'CT02', 'Jakarta', 'Bandung', '06:00:00', '07:00:00', 'Ekonomi', 400000, 1, NULL),
	(36, 'Garuda', 'GD01', 'Jakarta', 'Bandung', '10:00:00', '11:00:00', 'Ekonomi', 500000, 1, NULL),
	(37, 'Garuda', 'GD02', 'Jakarta', 'Bali', '09:00:00', '10:00:00', 'Bisnis', 800000, 1, NULL),
	(38, 'Citilink', 'CT03', 'Jakarta', 'Bali', '19:00:00', '21:00:00', 'Bisnis', 1500000, 1, NULL),
	(39, 'Aerocomercial Oriente Norte', 'AJ', '', '', '00:00:00', '00:00:00', '', 0, 0, NULL),
	(60, 'AccessRail', '9B', '', '', '00:00:00', '00:00:00', '', 0, 0, NULL),
	(63, 'Adam Sky Connection Air', 'KI', '', '', '00:00:00', '00:00:00', '', 0, 0, NULL),
	(64, 'Adria Airways', 'RE', 'jambi', 'jakarta', '00:00:00', '00:00:00', '', 0, 1, NULL),
	(65, 'Belum Update', 'Belum Update', 'DUS', 'TRZ', '00:00:00', '00:00:00', 'Ekonomi', 0, 0, NULL),
	(66, 'Belum Update', 'Belum Update', 'DJB', 'PLW', '00:00:00', '00:00:00', 'Select Class', 700000, 0, '24-06-2023'),
	(67, 'Belum Update', 'Belum Update', 'DUS', 'DUS', '00:00:00', '00:00:00', 'Ekonomi', 0, 0, '25-06-2023'),
	(68, 'Belum Update', 'Belum Update', 'Dari', 'Tujuan', '00:00:00', '00:00:00', 'Ekonomi', 0, 0, '28-06-2023'),
	(69, 'Belum Update', 'Belum Update', 'DUS', 'TRZ', '00:00:00', '00:00:00', 'Select Class', 0, 0, '03-07-2023'),
	(70, 'Belum Update', 'Belum Update', 'PHS', 'KWE', '00:00:00', '00:00:00', 'Bisnis', 0, 0, '09-07-2023'),
	(71, 'Belum Update', 'Belum Update', 'KNO', 'SOC', '00:00:00', '00:00:00', 'Select Class', 0, 0, '20-07-2023');
/*!40000 ALTER TABLE `tb_pesawat` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel ppob.transaksi: ~6 rows (lebih kurang)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`id`, `kategori`, `no_hp`, `harga`, `log`, `tanggal`) VALUES
	(75, 'pulsa', '089531941653', '10395', NULL, '03-04-2024'),
	(76, 'pulsa', '089531941653', '1495', NULL, '03-04-2024'),
	(77, 'pln', '089531941653', '11675', NULL, NULL),
	(78, 'game', '089531941653', '7975', NULL, NULL),
	(79, 'pulsa', '089531941653', '1495', NULL, '03-04-2024'),
	(80, 'pln', '089531941653', '550000', NULL, NULL),
	(81, 'game', '089531941653', '7975', NULL, NULL);
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

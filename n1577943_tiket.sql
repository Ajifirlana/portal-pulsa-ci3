-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2023 at 02:34 PM
-- Server version: 10.5.20-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n1577943_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_order_kereta`
--

CREATE TABLE `data_order_kereta` (
  `id` int(11) NOT NULL,
  `id_pembeli` int(50) DEFAULT NULL,
  `nama_pemesanan` varchar(50) DEFAULT NULL,
  `titel` varchar(5) DEFAULT NULL,
  `no_telpon` varchar(13) DEFAULT NULL,
  `total_bayar` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `bukti_bayar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_order_kereta`
--

INSERT INTO `data_order_kereta` (`id`, `id_pembeli`, `nama_pemesanan`, `titel`, `no_telpon`, `total_bayar`, `status`, `bukti_bayar`) VALUES
(8, 7, 'aji', 'Tuan', '089531941653', '52500', NULL, 'FB_IMG_16893156522915791.jpg'),
(9, 0, 'tes', 'Tuan', '089531941653', '207500', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_order_pesawat`
--

CREATE TABLE `data_order_pesawat` (
  `id` int(11) NOT NULL,
  `id_pembeli` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `kode_booking` varchar(50) DEFAULT NULL,
  `departuretime` varchar(50) DEFAULT NULL,
  `arrivaltime` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(50) DEFAULT NULL,
  `timelimit` varchar(50) DEFAULT NULL,
  `reservationdate` varchar(50) DEFAULT NULL,
  `no_telpon` varchar(50) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL,
  `tgl_berangkat` varchar(20) DEFAULT NULL,
  `nama_pesawat` varchar(50) DEFAULT NULL,
  `total_bayar` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `data_order_pesawat`
--

INSERT INTO `data_order_pesawat` (`id`, `id_pembeli`, `nama_lengkap`, `kode_booking`, `departuretime`, `arrivaltime`, `transaction_id`, `timelimit`, `reservationdate`, `no_telpon`, `class`, `tgl_berangkat`, `nama_pesawat`, `total_bayar`, `status`) VALUES
(3, '7', 'ADT;MR;budi awan ;3524221904900003|', 'IHSQXZ', '06:00', '07:15', '128789148', '28-Jul-2023 18:54', '28-Jul-2023', NULL, NULL, NULL, NULL, '886500', NULL),
(4, '7', 'ADT;MR;paris mulayadi;|', '5HBJLS', '11:00', '12:25', '128898104', '29-Jul-2023 03:50', '29-Jul-2023', NULL, NULL, NULL, NULL, '1541000', NULL),
(6, '7', 'ADT;MR;yogi uda;|', '5HIG8B', '11:00', '12:25', '128899585', '29-Jul-2023 04:34', '29-Jul-2023', NULL, NULL, NULL, NULL, '3348200', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kode_pulsa`
--

CREATE TABLE `kode_pulsa` (
  `id` int(10) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `kode` varchar(10) NOT NULL,
  `deskripsi` varchar(20) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kode_pulsa`
--

INSERT INTO `kode_pulsa` (`id`, `kategori`, `kode`, `deskripsi`, `harga`) VALUES
(1, 'pulsa', 'T15', 'TRI 15000', 15028),
(2, 'pulsa', 'T10', 'TRI 10000', 12000),
(3, 'pulsa', 'T9', 'TRI 9000', NULL),
(4, 'dana', 'DNA50', 'SALDO DANA 50K', 50000),
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
(21, 'rajabiller', 'T1H', 'Three Transfer 1K', 1600),
(22, 'rajabiller-ovo', 'OVO100H', 'saldo ovo 100K', 99500),
(23, 'rajabiller-pulsa', 'I5H', 'Isat Im3 / Mentari R', 5925),
(24, 'rajabiller-pulsa', 'T1H', 'Three Transfer 1K', 1600),
(25, 'rajabiller-ovo', 'OVO10H', 'Saldo Ovo 10K', 9500),
(26, 'rajabiller-ovo', 'OVO50H', 'Saldo Ovo 50K', 49500),
(27, 'rajabiller-pdam', 'WAJAMBI', 'PDAM MUARO JAMBI', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `no_hp`, `email`, `password`) VALUES
(5, 'user', NULL, '', '12dea96fec20593566ab75692c9949596833adc9'),
(6, 'Bos', NULL, '', '601f1889667efaebb33b8c12572835da3f027f78'),
(7, 'aji', '089531941653', 'firlana89@gmail.com', '4c331d67511b7d61a008c63601c1d420b2803849'),
(8, 'Tes1', NULL, NULL, 'c8f36505c11f198e261255eb7545826024594274');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama_usaha` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama_usaha`, `no_hp`, `tentang`, `email`, `alamat`, `facebook`, `instagram`) VALUES
(1, 'tiket', '089531941653', 'tentang tiket', 'firlana89@gmail.com', '-', 'https://web.facebook.com/profile.phpid100014986094346', 'https://www.instagram.com/jasa_aplikasi471/');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id` int(11) NOT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id`, `nama_bank`, `no_rek`) VALUES
(1, 'BNI', '2100900774');

-- --------------------------------------------------------

--
-- Table structure for table `setting_website`
--

CREATE TABLE `setting_website` (
  `id` int(11) NOT NULL,
  `nama_website` varchar(50) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_website`
--

INSERT INTO `setting_website` (`id`, `nama_website`, `deskripsi`, `no_hp`, `email`, `alamat`) VALUES
(1, 'queue.co.id', 'pembelian tiket pesawat murah dan mudah secara online dan terpercaya', ' 082382709777', 'Mulyadi_paris@yahoo.', 'KOMP JAYA PUTRA BLOK A NO 4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesawat`
--

CREATE TABLE `tb_pesawat` (
  `id` int(11) NOT NULL,
  `nama_pesawat` varchar(40) NOT NULL,
  `kode_pesawat` varchar(40) NOT NULL,
  `keberangkatan` varchar(40) NOT NULL,
  `tujuan` varchar(40) NOT NULL,
  `jam_keberangkatan` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `kelas_penerbangan` varchar(20) NOT NULL,
  `harga` float NOT NULL,
  `tersedia` tinyint(1) NOT NULL,
  `tanggal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pesawat`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`) VALUES
(0, 'tes', 'tes'),
(0, 'Paris', 'Projektiketq1');

-- --------------------------------------------------------

--
-- Table structure for table `token_rajabiller`
--

CREATE TABLE `token_rajabiller` (
  `id` int(11) NOT NULL,
  `token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `token_rajabiller`
--

INSERT INTO `token_rajabiller` (`id`, `token`) VALUES
(1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImp0aSI6IjhkNzNtbmc4OWVkIn0.eyJpc3MiOiJodHRwczpcL1wvdHJhdmVsLnJhamFiaWxsZXIuY29tIiwiYXVkIjoiUmFqYWJpbGxlciBUcmF2ZWwgQXBpIiwianRpIjoiOGQ3M21uZzg5ZWQiLCJpYXQiOjE2OTA1MjgyNjMsIm5iZiI6MTY5MDUyODMyMywiZXhwIjoxNjkwNTMxODYzLCJvdXRsZXRJZCI6IlNQMzEwOTIzIiwicGluIjoiMjI4MDc4Iiwia2V5IjoiRkFTVFBBWSJ9.5wihuSOX6anqLCt60qpuPYwC1b8BVdIw42aNQRvFxqU');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kategori` varchar(20) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `log` text DEFAULT NULL,
  `tanggal` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `kategori`, `no_hp`, `harga`, `log`, `tanggal`) VALUES
(54, NULL, NULL, NULL, 'KODE_PRODUK=T1H*WAKTU=20230721200639*NO_HP=089531941653*UID=SP310923*PIN=------*SN=*NOMINAL=*REF1=PLS-00138*REF2=*STATUS=11*KET=TRANSAKSI T1H KE NO HP 089531941653 SUDAH PERNAH SUKSES DENGAN REFID ANDA PLS-00138*SALDO_TERPOTONG=0*SISA_SALDO=', '21-07-2023'),
(55, NULL, NULL, NULL, 'KODE_PRODUK=I5H*WAKTU=20230721202311*NO_HP=085809663846*UID=SP310923*PIN=------*SN=*NOMINAL=*REF1=PLS-00138*REF2=*STATUS=11*KET=TRX pulsa I5H 085809663846 duplikat reff id, status akhir : !*SALDO_TERPOTONG=0*SISA_SALDO=', '21-07-2023'),
(56, NULL, NULL, NULL, 'KODE_PRODUK=I5H*WAKTU=20230721202941*NO_HP=085809663846*UID=SP310923*PIN=------*SN=*NOMINAL=5925*REF1=BD6JLOZ54IUR7XQNHCTGASWP839V1YFMEK2*REF2=125839257*STATUS=00*KET=Pengisian pulsa I5H Anda ke nomor 085809663846 sedang diproses*SALDO_TERPOTONG=5925*SISA_SALDO=973095', '21-07-2023'),
(57, NULL, NULL, NULL, 'Anda tidak punya hak akses', '21-07-2023'),
(58, NULL, NULL, NULL, 'Anda tidak punya hak akses', '21-07-2023'),
(59, NULL, NULL, NULL, 'KODE_PRODUK=T1H*WAKTU=20230721210210*NO_HP=089531941653*UID=SP310923*PIN=------*SN=*NOMINAL=*REF1=51ESYV7BRL8Q49ZACUFOWTGM2HXIKNJDP36*REF2=*STATUS=15*KET=TRX pulsa T1H 089531941653 duplikat transaksi status akhir : Order telah sukses SN=R230721.1606.220011.!*SALDO_TERPOTONG=0*SISA_SALDO=', '21-07-2023'),
(60, NULL, NULL, NULL, 'Anda tidak punya hak akses', '22-07-2023'),
(61, NULL, NULL, NULL, 'KODE_PRODUK=OVO10H*WAKTU=20230722132115*NO_HP=089531941653*UID=SP310923*PIN=------*SN=AJ169000687461544801143*NOMINAL=9500*REF1=3I716HA8S5DCVEGMBKYZJPTW9L4OR2NQXUF*REF2=126103551*STATUS=00*KET=Pembelian Voucher OVO10H BERHASIL. SN=AJ169000687461544801143. Harga=9500. Saldo=973095\"*SALDO_TERPOTONG=9500*SISA_SALDO=973095', '22-07-2023'),
(62, NULL, NULL, NULL, 'Anda tidak punya hak akses', '22-07-2023'),
(63, NULL, NULL, NULL, 'KODE_PRODUK=OVO50H*WAKTU=20230722132417*NO_HP=089531941653*UID=SP310923*PIN=------*SN=AJ169000705638761603507*NOMINAL=49500*REF1=CTBZU8LHWOADPQYJ423S19FVN57MIKXE6RG*REF2=126104771*STATUS=00*KET=Pembelian Voucher OVO50H BERHASIL. SN=AJ169000705638761603507. Harga=49500. Saldo=963595\"*SALDO_TERPOTONG=49500*SISA_SALDO=963595', '22-07-2023'),
(64, NULL, NULL, NULL, 'KODE_PRODUK=OVO50H*WAKTU=*NO_HP=089531941653*UID=SP310923*PIN=------*SN=*NOMINAL=0*REF1=JVCYO5UKB7M43TL2WG9FA86NZHS1QDIPEXR*REF2=*STATUS=XX*KET=Transaksi sudah pernah sukses sebelumnya. Silahkan cek di Report Transaksi di Aplikasi Desktop atau Web Report*SALDO_TERPOTONG=0*SISA_SALDO=', '22-07-2023'),
(65, NULL, NULL, NULL, 'Anda tidak punya hak akses', '22-07-2023'),
(66, NULL, NULL, NULL, 'error=data inquiry tidak ditemukan', '23-07-2023'),
(67, NULL, NULL, NULL, 'KODE_PRODUK=*WAKTU=*NO_HP=*UID=*PIN=------*SN=*NOMINAL=*REF1=N2UQMSVPIBJX4YGO7A6HZCD531KW9ELRT8F*REF2=*STATUS=00*KET=SEDANG DIPROSES*SALDO_TERPOTONG=0*SISA_SALDO=', '23-07-2023'),
(68, NULL, NULL, NULL, 'KODE_PRODUK=*WAKTU=*NO_HP=*UID=*PIN=------*SN=*NOMINAL=*REF1=FYGNE3ZTKSQXWU8PJ7R152ADH94IMO6LCVB*REF2=*STATUS=00*KET=SEDANG DIPROSES*SALDO_TERPOTONG=0*SISA_SALDO=', '23-07-2023'),
(69, NULL, NULL, NULL, 'KODE_PRODUK=T1H*WAKTU=20230723094629*NO_HP=089531941653*UID=SP310923*PIN=------*SN=*NOMINAL=1450*REF1=4I69K5MPFCTWDOJUGEZH7BRSV3YLX2NA1Q8*REF2=126406971*STATUS=00*KET=Pengisian pulsa T1H Anda ke nomor 089531941653 sedang diproses*SALDO_TERPOTONG=1450*SISA_SALDO=912645', '23-07-2023'),
(70, NULL, NULL, NULL, 'KODE_PRODUK=OVO50H*WAKTU=20230723132220*NO_HP=089531941653*UID=SP310923*PIN=------*SN=AJ169009334010799903659*NOMINAL=49500*REF1=XWM6VU32ECKPSF4NGO85TZJ9YQL7IBHDRA1*REF2=126473706*STATUS=00*KET=Pembelian Voucher OVO50H BERHASIL. SN=AJ169009334010799903659. Harga=49500. Saldo=912645\"*SALDO_TERPOTONG=49500*SISA_SALDO=912645', '23-07-2023'),
(71, NULL, NULL, NULL, 'KODE_PRODUK=OVO50H*WAKTU=20230724181915*NO_HP=089531941653*UID=SP310923*PIN=------*SN=AJ169019755419472603061*NOMINAL=49500*REF1=OZ1M98LI4XTCBUPQAN37DYGKRFW25EJSHV6*REF2=127027171*STATUS=00*KET=Pembelian Voucher OVO50H BERHASIL. SN=AJ169019755419472603061. Harga=49500. Saldo=863145\"*SALDO_TERPOTONG=49500*SISA_SALDO=863145', '24-07-2023'),
(72, NULL, NULL, NULL, 'error=missing parameter request', '25-07-2023'),
(73, NULL, NULL, NULL, 'error=missing parameter request', '25-07-2023'),
(74, NULL, NULL, NULL, 'kodeproduk:PLNPASCH/tanggal:20230725115008/idpel1:143500148063/idpel2:/idpel3:/nominal:138335/admin:3000/id_outlet:SP310923/pin:------/ref1:5IX7TQUO13RJGN6YDK8EWHA9PVSM4ZLFC2B/ref2:127315039/ref3:/status:00/keterangan:TRANSAKSI SUKSES/fee:-2800/saldo_terpotong:138535/sisa_saldo:675110/total_bayar:141335/jml_bulan:1/tarif:R1M/daya:900/ref:0BMS210Z08B6CF0615BACB8050D3D3DC/stanawal:28329/stanakhir:28420/infoteks:\"Informasi Hubungi Call Center 123 Atau Hub PLN Terdekat :\"/nama_pelanggan:N.MUHAMAD.AD/periode:202307/url_struk:https://struk.rajabiller.com/pdf/struk.php?id=SnML1DzwsZnQZTBSh9nWQS9O1kh%2FDNfaRWCrLdPSNJmL4JT%2FuLi6z8XETMPVjgtMcQwYKJKhvwNq%2B7eNfdt6Ag%3D%3D', '25-07-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_order_kereta`
--
ALTER TABLE `data_order_kereta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_order_pesawat`
--
ALTER TABLE `data_order_pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kode_pulsa`
--
ALTER TABLE `kode_pulsa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_website`
--
ALTER TABLE `setting_website`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token_rajabiller`
--
ALTER TABLE `token_rajabiller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_order_kereta`
--
ALTER TABLE `data_order_kereta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_order_pesawat`
--
ALTER TABLE `data_order_pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kode_pulsa`
--
ALTER TABLE `kode_pulsa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_website`
--
ALTER TABLE `setting_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `token_rajabiller`
--
ALTER TABLE `token_rajabiller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

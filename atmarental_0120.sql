-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 12:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atmarental_0120`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset_mobil`
--

CREATE TABLE `aset_mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_pemilik` int(11) DEFAULT NULL,
  `nama_pemilik` varchar(255) DEFAULT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `tipe_mobil` varchar(255) NOT NULL,
  `jenis_transmisi` varchar(255) NOT NULL,
  `jenis_bahan_bakar` varchar(255) NOT NULL,
  `volume_bahan_bakar` float NOT NULL,
  `warna_mobil` varchar(255) NOT NULL,
  `kapasitas_penumpang` int(11) NOT NULL,
  `fasilitas_mobil` varchar(255) NOT NULL,
  `plat_nomor` varchar(255) NOT NULL,
  `no_stnk` varchar(255) NOT NULL,
  `kategori_mobil` varchar(255) NOT NULL,
  `periode_kontrak_mulai` date DEFAULT NULL,
  `periode_kontrak_akhir` date DEFAULT NULL,
  `tanggal_terakhir_servis` date NOT NULL,
  `volume_bagasi` float NOT NULL,
  `harga_sewa` float NOT NULL,
  `status_ketersediaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aset_mobil`
--

INSERT INTO `aset_mobil` (`id_mobil`, `id_pemilik`, `nama_pemilik`, `nama_mobil`, `tipe_mobil`, `jenis_transmisi`, `jenis_bahan_bakar`, `volume_bahan_bakar`, `warna_mobil`, `kapasitas_penumpang`, `fasilitas_mobil`, `plat_nomor`, `no_stnk`, `kategori_mobil`, `periode_kontrak_mulai`, `periode_kontrak_akhir`, `tanggal_terakhir_servis`, `volume_bagasi`, `harga_sewa`, `status_ketersediaan`) VALUES
(5, 2, NULL, 'fortuner', 'city car', 'AT', 'pertamax turbo', 100, 'putih', 7, 'ac, air bag', 'ab9999ee', '123456785', 'mitra', '2022-03-01', '2023-03-01', '2022-03-01', 15, 200000, 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat_customer` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `email_customer` varchar(255) NOT NULL,
  `no_telp_customer` varchar(15) NOT NULL,
  `tanda_pengenal_customer` varchar(255) DEFAULT NULL,
  `sim_customer` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat_customer`, `tanggal_lahir`, `jenis_kelamin`, `email_customer`, `no_telp_customer`, `tanda_pengenal_customer`, `sim_customer`, `password`) VALUES
(1, 'Bagus', 'Yogyakarta', '2020-03-01', 'L', 'bagus@gmail.com', '08263728261', 'uajy.ac.id', 'uajy.ac.id', '20200301'),
(2, 'Adi', 'Yogyakarta', '2020-03-02', 'L', 'adi@gmail.com', '08263728262', 'uajy.ac.id', 'uajy.ac.id', '20200302'),
(3, 'Lidia', 'Klaten', '2020-03-03', 'P', 'lidia@gmail.com', '08263728263', 'uajy.ac.id', 'uajy.ac.id', '20200303'),
(4, 'Setiawan', 'Solo', '2020-03-04', 'L', 'setiawan@gmail.com', '08263728264', 'uajy.ac.id', 'uajy.ac.id', '20200304'),
(5, 'Bunga', 'Magelang', '2020-03-05', 'P', 'bunga@gmail.com', '08263728265', 'uajy.ac.id', 'uajy.ac.id', '20200305');

-- --------------------------------------------------------

--
-- Table structure for table `detail_jadwal`
--

CREATE TABLE `detail_jadwal` (
  `id_detail_jadwal` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id_driver` int(11) NOT NULL,
  `nama_driver` varchar(255) NOT NULL,
  `alamat_driver` varchar(255) NOT NULL,
  `tanggal_lahir_driver` date NOT NULL,
  `jenis_kelamin_driver` varchar(10) NOT NULL,
  `email_driver` varchar(255) NOT NULL,
  `no_telp_driver` varchar(15) NOT NULL,
  `password_driver` varchar(255) NOT NULL,
  `tarif_driver` float NOT NULL,
  `rerata_rating_driver` float NOT NULL,
  `sim_driver` varchar(255) NOT NULL,
  `bebas_napsa_driver` varchar(255) NOT NULL,
  `kesehatan_jiwa_driver` varchar(255) NOT NULL,
  `kesehatan_jasmani_driver` varchar(255) NOT NULL,
  `skck_driver` varchar(255) NOT NULL,
  `bahasa_driver` varchar(255) NOT NULL,
  `status_driver` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id_driver`, `nama_driver`, `alamat_driver`, `tanggal_lahir_driver`, `jenis_kelamin_driver`, `email_driver`, `no_telp_driver`, `password_driver`, `tarif_driver`, `rerata_rating_driver`, `sim_driver`, `bebas_napsa_driver`, `kesehatan_jiwa_driver`, `kesehatan_jasmani_driver`, `skck_driver`, `bahasa_driver`, `status_driver`) VALUES
(1, 'Setio', 'Yogyakarta', '2021-03-01', 'L', 'setio@gmail.com', '0846373537', '20210301', 100000, 4.5, '33820238681', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'indonesia', 'tersedia'),
(2, 'Santoso', 'Yogyakarta', '2021-03-02', 'L', 'santoso@gmail.com', '0846373538', '20210302', 110000, 4, '33820238682', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'indonesia', 'tersedia'),
(3, 'Aminah', 'Magelang', '2021-03-03', 'P', 'aminah@gmail.com', '0846373539', '20210303', 150000, 4.8, '33820238683', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'inggris', 'tidak tersedia'),
(4, 'Johan', 'Yogyakarta', '2021-03-04', 'L', 'johan@gmail.com', '0846373532', '20210304', 100000, 3, '33820238684', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'indonesia', 'tersedia'),
(5, 'Sinta', 'Magelang', '2022-03-05', 'P', 'sinta@gmail.com', '0846373535', '20210305', 100000, 4.3, '33820238685', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'uajy.ac.id', 'indonesia', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `hari` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `shift`, `hari`) VALUES
(1, 'shift 1', 'selasa'),
(2, 'shift 1', 'rabu'),
(3, 'shift 1', 'kamis'),
(4, 'shift 1', 'jumat'),
(5, 'shift 1', 'sabtu'),
(6, 'shift 1', 'minggu'),
(7, 'shift 2', 'selasa'),
(8, 'shift 2', 'rabu'),
(9, 'shift 2', 'kamis'),
(10, 'shift 2', 'jumat'),
(11, 'shift 2', 'sabtu'),
(12, 'shift 2', 'minggu');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `tanggal_lahir_pegawai` date DEFAULT NULL,
  `jenis_kelamin_pegawai` varchar(10) DEFAULT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `no_telp_pegawai` varchar(15) DEFAULT NULL,
  `alamat_pegawai` varchar(255) DEFAULT NULL,
  `foto_pegawai` varchar(255) DEFAULT NULL,
  `password_pegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_role`, `nama_pegawai`, `tanggal_lahir_pegawai`, `jenis_kelamin_pegawai`, `email_pegawai`, `no_telp_pegawai`, `alamat_pegawai`, `foto_pegawai`, `password_pegawai`) VALUES
(15, 2, 'Cyrillus Rama', '2012-02-01', 'L', 'aa@gmail.com', '08838363', 'jdjhd', 'fnknfk', '$2y$10$ouK2.Giehc8Gak633PDFce6CUPGhSP2y4wdKN7yImSqeSI9tYSMkm'),
(17, 2, NULL, NULL, NULL, 'cyrillusrama81@gmail.com', NULL, NULL, NULL, '$2y$10$yLfS21IYMjm9cBlEryjhyeOyWY3R5TtaZx8fhijHhVBf9gEizolUq'),
(18, 1, NULL, NULL, NULL, 'etraveluas@gmail.com', NULL, NULL, NULL, '$2y$10$lw8HrQHlEJIw6JMncuM0r.FVo5uMnWx81BzFan/L8gvscCUcnZQkK');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_aset`
--

CREATE TABLE `pemilik_aset` (
  `id_pemilik` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `no_ktp_pemilik` varchar(255) NOT NULL,
  `alamat_pemilik` varchar(255) NOT NULL,
  `no_telp_pemilik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik_aset`
--

INSERT INTO `pemilik_aset` (`id_pemilik`, `nama_pemilik`, `no_ktp_pemilik`, `alamat_pemilik`, `no_telp_pemilik`) VALUES
(1, 'Suyanto', '338202386', 'Magelang', '0853728129'),
(2, 'Suyanti', '338202387', 'Yogyakarta', '08363712827'),
(3, 'Jati', '338202388', 'Yogyakarta', '0836283456'),
(4, 'Jumiyah', '338202384', 'Klaten', '0873637283'),
(5, 'Rubiyanto', '338202383', 'Solo', '0846472372');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(11) NOT NULL,
  `kode_promo` varchar(255) NOT NULL,
  `jenis_promo` varchar(255) NOT NULL,
  `keterangan_promo` varchar(255) NOT NULL,
  `besar_diskon_promo` int(11) NOT NULL,
  `status_promo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'manager'),
(2, 'admin'),
(3, 'customer service');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_promo` int(11) DEFAULT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_driver` int(11) DEFAULT NULL,
  `id_customer` int(11) NOT NULL,
  `no_ktp_` varchar(255) NOT NULL,
  `no_sim` varchar(255) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `tanggal_mulai_sewa` date NOT NULL,
  `tanggal_selesai_sewa` date NOT NULL,
  `tanggal_waktu_pengembalian` date NOT NULL,
  `tarif_driver_transaksi` float DEFAULT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `jenis_transaksi` varchar(255) NOT NULL,
  `status_transaksi` varchar(255) NOT NULL,
  `rating_driver` int(11) DEFAULT NULL,
  `komentar_driver` varchar(255) DEFAULT NULL,
  `rating_rental` int(11) NOT NULL,
  `komentar_rental` varchar(255) NOT NULL,
  `sub_total_pembayaran` float NOT NULL,
  `diskon_promo` float DEFAULT NULL,
  `total_pembayaran` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset_mobil`
--
ALTER TABLE `aset_mobil`
  ADD PRIMARY KEY (`id_mobil`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  ADD PRIMARY KEY (`id_detail_jadwal`),
  ADD KEY `id_jadwal` (`id_jadwal`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `pemilik_aset`
--
ALTER TABLE `pemilik_aset`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_mobil` (`id_mobil`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_promo` (`id_promo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aset_mobil`
--
ALTER TABLE `aset_mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  MODIFY `id_detail_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pemilik_aset`
--
ALTER TABLE `pemilik_aset`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aset_mobil`
--
ALTER TABLE `aset_mobil`
  ADD CONSTRAINT `aset_mobil_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik_aset` (`id_pemilik`);

--
-- Constraints for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  ADD CONSTRAINT `detail_jadwal_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`),
  ADD CONSTRAINT `detail_jadwal_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_mobil`) REFERENCES `aset_mobil` (`id_mobil`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`id_promo`) REFERENCES `promo` (`id_promo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

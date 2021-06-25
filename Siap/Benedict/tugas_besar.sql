-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 01:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_besar`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `idTransaksi` int(11) DEFAULT NULL,
  `idTrack` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`idTransaksi`, `idTrack`) VALUES
(2, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jalan`
--

CREATE TABLE `jalan` (
  `status_akses` varchar(50) NOT NULL,
  `jarak_tempuh` float NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `status_selesai` varchar(50) DEFAULT NULL,
  `progress` int(11) NOT NULL DEFAULT 0,
  `idPerson` int(11) DEFAULT NULL,
  `idTrack` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jalan`
--

INSERT INTO `jalan` (`status_akses`, `jarak_tempuh`, `waktu_mulai`, `waktu_selesai`, `status_selesai`, `progress`, `idPerson`, `idTrack`) VALUES
('ya', 5, '2021-06-19 16:08:48', '2021-06-21 16:08:48', 'ya', 100, 14, 3),
('tidak', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '-', 0, 14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `medali`
--

CREATE TABLE `medali` (
  `idMedali` int(11) NOT NULL,
  `durasi_tempuh` int(11) NOT NULL,
  `status_kirim` varchar(50) NOT NULL,
  `tgl_perolehan` date DEFAULT NULL,
  `idPerson` int(11) DEFAULT NULL,
  `idTrack` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medali`
--

INSERT INTO `medali` (`idMedali`, `durasi_tempuh`, `status_kirim`, `tgl_perolehan`, `idPerson`, `idTrack`) VALUES
(2, 1, 'diterima', '2021-06-22', 14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `idPerson` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kontak` varchar(50) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`idPerson`, `nama`, `username`, `email`, `password`, `gender`, `alamat`, `kontak`, `tgl_lahir`, `role`) VALUES
(12, 'beeen', 'ben@admin', '6181901026@student.unpar.ac.id', '912ec803b2ce49e4a541068d495ab570', 'Laki-laki', 'jaaaalan', '12345678', '2021-06-02', 'Administrator'),
(13, 'catherine', 'catherine@pemilik', 'catherine@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'Perempuan', 'jalan', '08123457', '2021-06-01', 'Pemilik'),
(14, 'melikaa', 'melika', 'melikaa@gmail.com', '912ec803b2ce49e4a541068d495ab570', 'Perempuan', 'jaaalan', '23456789', '2021-05-31', 'Peserta');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `idTrack` int(11) NOT NULL,
  `tema` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `jarak_track` float NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`idTrack`, `tema`, `region`, `jarak_track`, `harga`, `gambar`) VALUES
(3, 'Gunung Fuji', 'Jepang', 5, 200000, ''),
(4, 'Piramida Giza', 'Mesir', 5, 200000, ''),
(5, 'Kiyomizu Dera', 'Jepang', 8.4, 200000, 'Kiyomizu_Dera.jpg'),
(6, 'Sungai Nil', 'Mesir', 10, 200000, 'Sungai_Nil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `bukti_transaksi` varchar(100) NOT NULL,
  `status_verifikasi` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `idPerson` int(11) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL,
  `tgl_verifikasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `tgl_transaksi`, `bukti_transaksi`, `status_verifikasi`, `keterangan`, `idPerson`, `idAdmin`, `tgl_verifikasi`) VALUES
(2, '2021-06-16', 'blablabla.jpg', 'valid', '', 14, 12, '2021-06-18'),
(3, '2021-06-17', 'bukti.jpg', 'tidak valid', 'transaksi fiktif', 14, 12, '2021-06-18'),
(4, '2021-06-18', 'struk.jpg', '', '', 14, 12, '2021-06-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD KEY `idTransaksi` (`idTransaksi`),
  ADD KEY `idTrack` (`idTrack`);

--
-- Indexes for table `jalan`
--
ALTER TABLE `jalan`
  ADD KEY `idPerson` (`idPerson`),
  ADD KEY `idTrack` (`idTrack`);

--
-- Indexes for table `medali`
--
ALTER TABLE `medali`
  ADD PRIMARY KEY (`idMedali`),
  ADD KEY `idPerson` (`idPerson`),
  ADD KEY `idTrack` (`idTrack`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`idPerson`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`idTrack`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `idPerson` (`idPerson`),
  ADD KEY `idAdmin` (`idAdmin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medali`
--
ALTER TABLE `medali`
  MODIFY `idMedali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `idPerson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `idTrack` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akses`
--
ALTER TABLE `akses`
  ADD CONSTRAINT `akses_ibfk_1` FOREIGN KEY (`idTransaksi`) REFERENCES `transaksi` (`idTransaksi`),
  ADD CONSTRAINT `akses_ibfk_2` FOREIGN KEY (`idTrack`) REFERENCES `track` (`idTrack`);

--
-- Constraints for table `jalan`
--
ALTER TABLE `jalan`
  ADD CONSTRAINT `jalan_ibfk_1` FOREIGN KEY (`idPerson`) REFERENCES `person` (`idPerson`),
  ADD CONSTRAINT `jalan_ibfk_2` FOREIGN KEY (`idTrack`) REFERENCES `track` (`idTrack`);

--
-- Constraints for table `medali`
--
ALTER TABLE `medali`
  ADD CONSTRAINT `medali_ibfk_1` FOREIGN KEY (`idPerson`) REFERENCES `person` (`idPerson`),
  ADD CONSTRAINT `medali_ibfk_2` FOREIGN KEY (`idTrack`) REFERENCES `track` (`idTrack`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idPerson`) REFERENCES `person` (`idPerson`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`idAdmin`) REFERENCES `person` (`idPerson`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

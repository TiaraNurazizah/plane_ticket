-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 10:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plane_ticketing`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `payment` (IN `id` INT(11), IN `nama` VARCHAR(100), IN `pembayaran` VARCHAR(100))  NO SQL
    DETERMINISTIC
INSERT INTO payment (id, nama, pembayaran) VALUES ('id', nama, pembayaran)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `kode_customer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `jenis_kelamin`, `alamat`, `username`, `password`, `level`, `phone`, `kode_customer`) VALUES
(1, 'Admin', 'Perempuan', 'Soreang', 'nurraz', '12345678', 'admin', '', ''),
(3, 'Nurhaliza Fata', 'Perempuan', 'Komp. GPI', 'Fata', '12345678', 'Pengguna', '081234567908', 'CUST001'),
(4, 'Sintia Nurkarimah', 'Perempuan', 'Kp Cipongporang', 'sintia', '12345678', 'pegawai', '089675432567', ''),
(12, 'Sahara Nurul', 'Perempuan', 'Kp. Cipongporang', 'sahara', '12345678', 'Pengguna', '089123456789', 'CUST002');

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `kode_customer` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `nama`, `pembayaran`) VALUES
(1, 'BNI', 'Transfer'),
(3, 'BRI', 'Kredit'),
(4, 'BRI', 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `plane`
--

CREATE TABLE `plane` (
  `id` int(11) NOT NULL,
  `maskapai_kelas` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plane`
--

INSERT INTO `plane` (`id`, `maskapai_kelas`, `kode`, `created_at`, `harga`) VALUES
(3, 'GARUDA INDONESIA-EKONOMI', 'GRD003', '2021-04-15 13:48:09', '150000'),
(4, 'AIR ASIA-EKSEKUTIF', 'ARS001', '0000-00-00 00:00:00', '350000'),
(5, 'MERPATI AIR-BISNIS', 'MRP002', '0000-00-00 00:00:00', '250000');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `kode_customer` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `maskapai_kelas` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `kode_customer`, `nama`, `destination`, `jumlah`, `maskapai_kelas`, `tanggal`, `jam`, `pembayaran`, `harga`, `total`) VALUES
(22, 'CUST002', 'Sahara Nurul', 'BANDUNG-BALI', 4, 'AIR ASIA-EKSEKUTIF', '2021-04-16', '12:59:00', 'Transfer', 350000, 1400000),
(24, 'CUST001', 'Nurhaliza Fata', 'JAKARTA-KALIMANTAN', 3, 'MERPATI AIR-BISNIS', '2021-04-16', '14:08:00', 'Cash', 250000, 750000),
(25, 'CUST001', 'Sintia Nurkarimah', 'BANDUNG-BANDA ACEH', 7, 'GARUDA INDONESIA-EKONOMI', '2021-04-16', '02:03:00', 'Kredit', 150000, 1050000),
(26, 'CUST002', 'Nisa Agustina', 'JAKARTA-KALIMANTAN', 4, 'AIR ASIA-EKSEKUTIF', '2021-04-16', '15:43:00', 'Kredit', 350000, 1400000),
(27, 'CUST002', 'Labib Mahdi', 'JAKARTA-KALIMANTAN', 3, 'MERPATI AIR-BISNIS', '2021-04-16', '15:45:00', 'Transfer', 250000, 750000);

--
-- Triggers `purchase`
--
DELIMITER $$
CREATE TRIGGER `beli` AFTER INSERT ON `purchase` FOR EACH ROW BEGIN 
	UPDATE ticket SET stok = stok - NEW.jumlah WHERE destination = NEW.destination;
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `pesawat` int(11) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `berangkat` datetime NOT NULL,
  `sampai` datetime NOT NULL,
  `harga` int(100) NOT NULL,
  `kapasitas` int(100) NOT NULL,
  `tersedia` int(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `destination`, `stok`) VALUES
(1, 'BANDUNG-BANDA ACEH', 91),
(3, 'BANDUNG-BALI', 96),
(4, 'JAKARTA-KALIMANTAN', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plane`
--
ALTER TABLE `plane`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maskapai_kelas` (`maskapai_kelas`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesawat` (`pesawat`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination` (`destination`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plane`
--
ALTER TABLE `plane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

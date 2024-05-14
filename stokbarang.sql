-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 11:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stokbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `datanama`
--

CREATE TABLE `datanama` (
  `idbarang` int(11) NOT NULL,
  `namabarang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datanama`
--

INSERT INTO `datanama` (`idbarang`, `namabarang`) VALUES
(1, 'Modem GSM wifi'),
(2, 'Terminal Listrik Outlet'),
(3, 'Inverter'),
(4, 'Inverter DC to AC'),
(5, 'Battery 70AH'),
(6, 'Cover Akrilik (Custom)'),
(7, 'Stabilizer 2000 VA'),
(8, 'UPS 700VA'),
(9, 'Kabel Battery NYAF'),
(10, 'SD Card 32 GB'),
(11, 'Adaptor Display'),
(12, 'LAN Arrester'),
(13, 'Switch Hub'),
(14, 'UPS 600 VA'),
(15, 'Stabilizer 1000 V'),
(16, 'Sensor Palert+ Model  PA50VE'),
(17, 'Cube Display'),
(18, 'Antena YAGI'),
(19, 'Antena Pig Tail'),
(20, 'Antena OMNI'),
(21, 'Meja Kerja'),
(22, 'Solar Panel 390Wp'),
(23, 'MPPT'),
(24, 'Battery Lithium 24V 100 Ah'),
(25, 'Display 55UH5J-H'),
(26, 'Mini PC'),
(27, 'UPS 1600 VA'),
(28, 'Box Panel'),
(29, 'Battery 75AH'),
(30, 'Titan Accelerometer'),
(31, 'Centaur Digitizer');

-- --------------------------------------------------------

--
-- Table structure for table `jenisnama`
--

CREATE TABLE `jenisnama` (
  `idjenis` int(11) NOT NULL,
  `jenisperalatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jenisnama`
--

INSERT INTO `jenisnama` (`idjenis`, `jenisperalatan`) VALUES
(0, 'ACC NC dan REIS'),
(0, 'Intensitymater Realshake'),
(0, 'Seismograph InaTEWS'),
(0, 'WRS-NG'),
(0, 'Intensitymater Rekayasa'),
(0, 'Sirine Utama'),
(0, 'Precursor Magnet Bumi');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `tanggal_keluar` datetime NOT NULL,
  `id_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_peralatan` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `asal_perolehan` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'masuk' COMMENT 'masuk,keluar',
  `lokasi` varchar(100) NOT NULL,
  `teknisi` varchar(100) NOT NULL,
  `foto` blob NOT NULL,
  `file` blob NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id`, `tanggal`, `tanggal_keluar`, `id_barang`, `nama_barang`, `jenis_peralatan`, `merk`, `sn`, `asal_perolehan`, `harga`, `status`, `lokasi`, `teknisi`, `foto`, `file`, `keterangan`) VALUES
(51, '2023-07-14 00:00:00', '2023-08-09 00:00:00', '20240513092110', 'Modem GSM wifi', 'ACC NC dan REIS', 'Robustal', '06971423080019', 'PT. Mindotama Avia Teknik', 3000000, 'keluar', 'KMJR', 'Bin Jali', 0x4d6f64656d2047534d203447205769666920322e6a7067, '', '-'),
(53, '2023-07-14 00:00:00', '2023-09-07 00:00:00', '20240513092309', 'Modem GSM wifi', 'ACC NC dan REIS', 'Robustal', '06971423030051', 'PT. Mindotama Avia Teknik', 3000000, 'keluar', 'WGJR', 'Sidik Pramono', 0x4d6f64656d2047534d203447205769666920322e6a7067, '', '- '),
(54, '2023-07-14 00:00:00', '0000-00-00 00:00:00', '20240513092417', 'Cover Akrilik (Custom)', 'ACC NC dan REIS', 'Custom', '-', 'PT. Mindotama Avia Teknik', 800000, 'masuk', '', '', 0x616b72696c696b2e6a7067, '', '(Incl Laminating Keterangan Skala MMI, Doubletic Stiker)'),
(56, '2023-07-14 00:00:00', '0000-00-00 00:00:00', '20240513092646', 'Terminal Listrik Outlet', 'ACC NC dan REIS', 'APC', '2Z2148P80109', 'PT. Mindotama Avia Teknik', 800000, 'masuk', '', '', 0x7465726d696e616c206c69737472696b2e6a7067, 0x5445524d494e414c204c49535452494b20284152524553544552292e706466, ''),
(57, '2023-07-14 00:00:00', '0000-00-00 00:00:00', '20240513092721', 'Terminal Listrik Outlet', 'ACC NC dan REIS', 'APC', '222148P80110', 'PT. Mindotama Avia Teknik', 800000, 'masuk', '', '', 0x7465726d696e616c206c69737472696b2e6a7067, 0x5445524d494e414c204c49535452494b20284152524553544552292e706466, ''),
(58, '2023-07-14 00:00:00', '2023-09-07 00:00:00', '20240513092914', 'Inverter', 'ACC NC dan REIS', 'Pascal', 'EHF80BC011', 'PT. Mindotama Avia Teknik', 1200000, 'keluar', 'WGJR', 'Sidik Pramono', 0x696e7665727465722070617363616c2e77656270, '', '- '),
(59, '2023-07-14 00:00:00', '0000-00-00 00:00:00', '20240513092957', 'Inverter', 'ACC NC dan REIS', 'Pascal', 'EHF8DBC013', 'PT. Mindotama Avia Teknik', 1200000, 'masuk', '', '', 0x696e7665727465722070617363616c2e77656270, '', ''),
(60, '2023-07-14 00:00:00', '2023-11-09 00:00:00', '20240513093039', 'Inverter DC to AC', 'ACC NC dan REIS', 'Pascal', 'EHF80BC014', 'PT. Mindotama Avia Teknik', 1800000, 'keluar', 'MBJN', 'Zamroni', 0x696d76657274657220646320746f2061632e6a7067, 0x494e56455254455220444320544f2041432e706466, '- ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datanama`
--
ALTER TABLE `datanama`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datanama`
--
ALTER TABLE `datanama`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

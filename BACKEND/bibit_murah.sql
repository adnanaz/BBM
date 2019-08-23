-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 08:38 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibit_murah`
--

-- --------------------------------------------------------

--
-- Table structure for table `benih`
--

CREATE TABLE `benih` (
  `benih_id` int(11) NOT NULL,
  `benih_nama` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `tips` text NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(50) NOT NULL,
  `isi` int(20) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benih`
--

INSERT INTO `benih` (`benih_id`, `benih_nama`, `deskripsi`, `tips`, `harga`, `stok`, `isi`, `foto`) VALUES
(1, 'Butter Daisy', 'Tanaman Butter Daisy berwarna kuning, dengan daun hijau. Kebanyakan tanaman butter daisy yang ada di Indonesia tumbuh tegak, yang ini bisa merambat sehingga sangat unik, serta menghasilkan bunga-bunga butter daisy kuning lembut yang indah\r\n\r\n', 'Dapat tumbuh baik di dataran rendah sampai dataran tinggi\r\n<li><p>Perlu sinar matahari penuh/sepanjang hari</p></li>\r\n<li><p>Siram sehari sekali</p></li>\r\n<li><p>Gunakan humus atau tanah biasa sebagai media tanam</p></li>', 15000, 10, 100, 'assets/products/butterdaisy.jpg'),
(2, 'Kenop', 'Bunga Kenop', 'belum tau', 18000, 10, 100, 'assets/products/kenop_putih.jpg'),
(3, 'Celosia Crystal', 'lorem ipsum dolores', 'ipsum lores', 20000, 10, 100, 'assets/products/celosia_crystal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register_user`
--

CREATE TABLE `register_user` (
  `register_user_id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_activation_code` varchar(250) NOT NULL,
  `user_email_status` enum('not verified','verified') NOT NULL,
  `user_token` varchar(15) NOT NULL,
  `user_alamat` text NOT NULL,
  `user_no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_user`
--

INSERT INTO `register_user` (`register_user_id`, `user_name`, `user_email`, `user_password`, `user_activation_code`, `user_email_status`, `user_token`, `user_alamat`, `user_no_telp`) VALUES
(4, 'addin saputra', 'akiyama.mio909@gmail.com', 'sasuke909', '656d0032751b3c035e0c2896455d403e', 'verified', 'iTOpbqD15eX8z9S', 'askjfksdhflsjlollj kasjdlsjdflsjfljlasj lajlj alsj ljsldjfljf', '087711870215');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `benih`
--
ALTER TABLE `benih`
  ADD PRIMARY KEY (`benih_id`);

--
-- Indexes for table `register_user`
--
ALTER TABLE `register_user`
  ADD PRIMARY KEY (`register_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_user`
--
ALTER TABLE `register_user`
  MODIFY `register_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

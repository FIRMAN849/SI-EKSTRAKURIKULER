-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 04:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_ekskul`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ekskul`
--

CREATE TABLE `daftar_ekskul` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `ekskul` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `rombongan` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alasan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_ekskul`
--

INSERT INTO `daftar_ekskul` (`id`, `nama`, `nisn`, `jenis_kelamin`, `no_hp`, `alamat`, `ekskul`, `kelas`, `rombongan`, `tgl_lahir`, `alasan`) VALUES
(8, 'rizal muaminin', 'E31201423', 'Laki-Laki', '089123054312', 'pajarakan', 'Sepak Bola', 'VIII', 'A', '2022-01-12', 'WKDSADWMAWDAE asdasdasda dadwdasda sda '),
(10, 'toni', 'E31201422', 'Laki-Laki', '088990805450', 'Kraksaan', 'Sepak Bola', 'VII', 'B', '2022-01-11', 'ADWPERADASDASD');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ekskul`
--

CREATE TABLE `tb_ekskul` (
  `id` int(11) NOT NULL,
  `nama_ekskul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ekskul`
--

INSERT INTO `tb_ekskul` (`id`, `nama_ekskul`) VALUES
(2, 'Futsal'),
(3, 'Pramuka'),
(4, 'Sepak Bola'),
(6, 'Bola Voly'),
(7, 'Pancak Silat'),
(8, 'Bola Basket'),
(9, 'PMR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nisn` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `rombongan` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nisn`, `email`, `image`, `alamat`, `tgl_lahir`, `kelas`, `rombongan`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(9, 'firman', 'E31201422', 'firmanrizky015@gmail.com', 'maxresdefault.jpg', 'Kraksaan - Bulu', '2021-11-10', 'VIII', 'A', '$2y$10$LosG/BSJO1zPaVteuGt5KOiN.yV1KzjyRIR4rK13ff0zFlIZPqC7G', 2, 1, 1638254030),
(10, 'Rizal', 'E31201423', 'rizal12@gmail.com', 'default.jpg', 'pajarakan', '2021-11-01', 'VIII', 'B', '$2y$10$x2G9NbxQIltcpp4AQwHLMetX5obNYgsTrsFq.3Eq10adtZAXKc9tC', 2, 1, 1638265609),
(13, 'admin', 'admin', 'firmanrizky015@gmail.com', 'default.jpg', 'Kraksaan - Bulu', '2022-01-01', 'VII', 'A', '$2y$10$S2LdC270S0KapO6/apko0.QpWO0QITiGO4nFNJE43DEo.8RscrvKW', 1, 1, 1641913924);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(10, 'firmanrizky015@gmail.com', '9UlVlE/WyQULoGUkoOgVkAXl1UVFfEBYooEY20vGU6E=', 1641795528),
(11, 'firmanrizky015@gmail.com', '1D1+NKa/VT1fgaIdkC5h1YPpjvUGMsmacHVX4jpwImI=', 1641795632),
(12, 'firmanrizky015@gmail.com', 'nZZChVYitTNqgyh4SXw6mx88CmEnvtDLNF+q5zzAIVQ=', 1641801859),
(13, 'firmanrizky015@gmail.com', 'SjIJQtF2/C34BwvH/XaTdryqP0wx/iVTupjQPOPWti0=', 1641801892);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_ekskul`
--
ALTER TABLE `daftar_ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_ekskul`
--
ALTER TABLE `daftar_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_ekskul`
--
ALTER TABLE `tb_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

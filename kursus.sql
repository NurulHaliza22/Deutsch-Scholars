-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 12:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `materi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama`, `tanggal`, `keterangan`, `materi`) VALUES
(1, 'Tania', '2024-05-30', 'Offline', 'Speaking'),
(3, 'Liza', '2024-05-30', 'Online', 'Reading'),
(9, 'dejan', '2024-05-06', 'Offline', 'Vocabullary'),
(10, 'Zenaya', '2024-06-14', 'Online', 'Speaking'),
(11, 'Kharisma', '2024-04-18', 'Offline', 'Reading'),
(12, 'Loudy', '2024-05-13', 'Hybrid', 'Speaking');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `paket` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`, `paket`) VALUES
(1, 'Faishal', 'admin', 'admin1', 'tutor', ''),
(2, 'Tania', 'user1', 'passuser1', 'peserta', ''),
(5, 'Liza', 'user2', 'passuser2', 'peserta', 'Paket Dua - Menyediakan video dan 4 pertemuan online');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link_youtube` varchar(255) NOT NULL,
  `penjelasan` varchar(255) NOT NULL,
  `upload` text NOT NULL,
  `id_peserta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `judul`, `link_youtube`, `penjelasan`, `upload`, `id_peserta`) VALUES
(9, 'Mesin Waktu', 'https://www.youtube.com/embed/AURkGj0jEx4?si=XQ9GUx5KQ08HLPzr', 'Budi Doremi - Mesin Waktu', '', NULL),
(13, 'Putus atau Terus', 'https://www.youtube.com/embed/47SpkXg_sYY?si=vG8K8WrSnGhq4yf0', 'Judika - Putus Atau Terus', '', NULL),
(14, 'Berpisah itu Mudah', 'https://www.youtube.com/embed/XzbSff3NY3M?si=SrSx8xCJfXqTlCSA', 'Rizky Febian - Berpisah itu mudah', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nama_peserta` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `paket` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama_peserta`, `email`, `no_telp`, `paket`, `pembayaran`) VALUES
(13, 'Liza', 'laliza@gmail.com', '08124850373', 'Paket Dua - menyediakan video dan 4 pertemuan offline', 'GOPAY'),
(15, 'tania', 'initania@gmail.com', '089987876567', 'Paket Tiga - menyediakan video dan 6 pertemuan, 3 offline dan 3 online', 'BNI'),
(16, 'naya', 'zenayanaya@gmail.com', '08765433456', 'Paket Satu - menyediakan video dan 4 pertemuan online', 'GOPAY'),
(17, 'risma', 'rismahmm@gmail.com', '088765642837', 'Paket Dua - menyediakan video dan 4 pertemuan offline', 'BCA'),
(20, 'Loudy', 'Surya@gmail.com', '0987654321', 'Paket Tiga - menyediakan video dan 6 pertemuan, 3 offline dan 3 online', 'BRI'),
(22, 'Dejan', 'Azul@gmail.com', '9875457899996', 'Paket Dua - menyediakan video dan 4 pertemuan offline', 'BRI'),
(23, 'Lutfhi', 'Ardinata@gmail.com', '09876545687', 'Paket Satu - menyediakan video dan 4 pertemuan online', 'GOPAY'),
(24, 'Fadli', 'ansyah@gmail.com', '09876567854', 'Paket Tiga - menyediakan video dan 6 pertemuan, 3 offline dan 3 online', 'INDOMARET'),
(33, 'lala', 'yeyelala@gmai.com', '08538103', 'Paket Tiga - menyediakan video dan 6 pertemuan hybrid', 'BCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD UNIQUE KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

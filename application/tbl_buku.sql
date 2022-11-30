-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 11:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ekatalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(11) NOT NULL,
  `isbn` char(13) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `jumlah_halaman` int(7) NOT NULL,
  `sinopsis` text NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tersedia` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `isbn`, `judul`, `pengarang`, `tanggal_rilis`, `jumlah_halaman`, `sinopsis`, `id_penerbit`, `gambar`, `tersedia`) VALUES
(1, '9786230036439', 'Mastering AutoCAD 3D Modeling', 'Hari Aria Soma', '2022-11-09', 240, 'Berisi kumpulan soal latihan dari berbagai model 3D termasuk langkah-langkah penyelesaiannya. Materi soal mencakup hampir semua perintah yang diperlukan, mulai dari pemodelan 3D (Extrude, Sweep, Presspull, Subtract, Union, Revolve, dan sebagainya), UCS, Dimensioning 3D, Profiling & Proyeksi, dan Layouting. Langkah-langkah penyelesaian yang diberikan di buku ini dapat menuntun Anda menghadapi kasus-kasus 3D serupa yang mungkin dijumpai dalam pekerjaan. Buku ini dibuat untuk memenuhi kebutuhan para pengguna yang sudah menguasai AutoCAD 2D dan ingin mengembangkan skill menjadi seorang 3D Modeler, juga bagi para desainer yang memiliki minat dalam modeling 3D. Buku ini juga bisa dipakai sebagai buku pegangan sekaligus latihan dan evaluasi di lembaga-lembaga pendidikan komputer yang membuka kelas AutoCAD Advance (3D Modeling). Sistematikanya disusun berdasarkan pengalaman penulis dalam mengajar AutoCAD di berbagai Lembaga Pendidikan Komputer dan perusahaan-perusahaan Manufaktur di Jakarta.', 1, 'autocad.jpg', 1),
(2, '9789790766549', 'Manajemen Evaluasi Program Pendidikan Konsep Prinsip dan Aplikasinya di Sekolah/Madrasah', 'Rusdiana', '2017-07-01', 246, 'afhieuwlgvrwylv', 1, 'gambar_20221129110906.jpg', 1),
(3, '1212121212122', 'Judul Buku', 'Budi', '2022-11-20', 70, 'ini sinopsis', 1, 'gambar_20221129110926.jpg', 1),
(6, '1209372104734', 'Rain Story', 'Maharani', '2022-11-29', 1, 'afhieuwlgvrwylv', 1, 'gambar_20221129111031.jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_isbn_unique` (`isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

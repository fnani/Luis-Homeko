-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2023 pada 07.40
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jual`
--

CREATE TABLE `tb_jual` (
  `id_rumah` int(11) NOT NULL,
  `nama_rumah` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `harga_diskon` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jual`
--

INSERT INTO `tb_jual` (`id_rumah`, `nama_rumah`, `alamat`, `harga`, `harga_diskon`, `gambar`) VALUES
(33, 'Rumah Sultan Andara', 'JL Surakarta, Jakut', '200.000.000', '199.000.000', 'gambar3.jpg'),
(34, 'Perumahan Ar-Rahman', 'Jl.Subroto No 30, Jaksel', '150.000.000', '149.000.000', 'gambar4.jpg'),
(35, 'Perumahan Hassanudin', 'Jl. Gatot Kaca No 29 ,Surabaya', '35.000.000', '29.000.000', 'gambar9.jpg'),
(36, 'Rumah Singgah', 'Kartoyono Medot Janji', '10.000.000', '9.900.000', 'gambar9.jpg'),
(37, 'Rumah Al-Barokah', 'Jl.Subekti, No 13 , Jakarta Pusat', '150.000.000', '139.000.000', 'gambar7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD PRIMARY KEY (`id_rumah`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jual`
--
ALTER TABLE `tb_jual`
  MODIFY `id_rumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

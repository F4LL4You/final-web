-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2024 pada 13.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_baju`
--

CREATE TABLE `tb_baju` (
  `id_baju` int(3) NOT NULL,
  `merek_baju` varchar(50) NOT NULL,
  `jenis_baju` varchar(50) NOT NULL,
  `ukuran_baju` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_baju`
--

INSERT INTO `tb_baju` (`id_baju`, `merek_baju`, `jenis_baju`, `ukuran_baju`) VALUES
(1, 'Setar Keros', 'Flanel', 'M'),
(2, 'Tengsin ', 'Rakbi', 'S'),
(3, 'insurjen', 'cardigan', 'L');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_baju`
--
ALTER TABLE `tb_baju`
  ADD PRIMARY KEY (`id_baju`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_baju`
--
ALTER TABLE `tb_baju`
  MODIFY `id_baju` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

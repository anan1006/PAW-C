-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Sep 2022 pada 16.40
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertemuan5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mhs` int(11) NOT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL,
  `nama_alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `id_prodi`, `nama_mhs`, `nama_alamat`) VALUES
(1, 1, 'Almira Rahma', 'Yogyakarta'),
(2, 1, 'Anandhari Alfitho Deanova', 'Malang'),
(3, 2, 'Azizi Assadel', 'Jakarta'),
(4, 2, 'Dewi Masyiffa', 'Malang'),
(5, 1, 'Yoriko Angelin', 'Yogyakarta'),
(7, 1, 'Christy Angelina', 'Surabaya'),
(8, 2, 'Adzana Shaliha', 'Banyuwangi'),
(9, 1, 'Fiony Siolina', 'Solo'),
(10, 1, 'Isyana Sarasvati', 'Mojokerto'),
(11, 1, 'Michelle Ziudith', 'Jombang'),
(12, 2, 'Ralline Syah', 'Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_prodi`
--

CREATE TABLE `tbl_prodi` (
  `id_prodi` int(11) NOT NULL,
  `nama_prodi` varchar(50) DEFAULT NULL,
  `ket_prodi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_prodi`
--

INSERT INTO `tbl_prodi` (`id_prodi`, `nama_prodi`, `ket_prodi`) VALUES
(1, 'Teknik Informatika', 'Aktif'),
(2, 'Sistem Informasi', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indeks untuk tabel `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_prodi`
--
ALTER TABLE `tbl_prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

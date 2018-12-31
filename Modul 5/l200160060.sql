-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2018 pada 10.16
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l200160060`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'naufal', '001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_nim`
--

CREATE TABLE `berita_nim` (
  `berita_id_L200160060` int(2) NOT NULL,
  `id_admin` int(2) NOT NULL,
  `judul_L200160060` varchar(255) NOT NULL,
  `tgl_terbit_L200160060` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita_nim`
--

INSERT INTO `berita_nim` (`berita_id_L200160060`, `id_admin`, `judul_L200160060`, `tgl_terbit_L200160060`, `content`) VALUES
(1, 2, 'kebakaan', '2018-12-03', 'qeqeqeqeqe'),
(3, 2, 'kebakaan', '2018-12-03', 'qeqeqeqeqe'),
(4, 5, 'HAHAHAHAHAH', '2018-12-06', 'asasadadasa'),
(6, 5, 'HAHAHAHAHAH', '2018-12-06', 'asasadadasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`nim`, `nama`, `kelas`, `alamat`) VALUES
('L200160060', 'Nama', 'A', 'Solo'),
('L200160061', 'Ayub', 'B', 'Sukoharjo');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita_nim`
--
ALTER TABLE `berita_nim`
  ADD PRIMARY KEY (`berita_id_L200160060`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita_nim`
--
ALTER TABLE `berita_nim`
  MODIFY `berita_id_L200160060` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

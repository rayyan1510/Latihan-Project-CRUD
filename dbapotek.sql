-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jan 2021 pada 13.17
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbapotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb-dokter`
--

CREATE TABLE `tb-dokter` (
  `kode_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `spesialis` varchar(255) NOT NULL,
  `kode_poli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb-dokter`
--

INSERT INTO `tb-dokter` (`kode_dokter`, `nama_dokter`, `alamat`, `telepon`, `spesialis`, `kode_poli`) VALUES
(1, 'Tirta Jaya', 'Jln. Kemayoran NO. 12 B', '08123456789', 'Ahli Bedah Jantung', 1),
(2, 'udin', 'Jln. Medan', '123', 'Dokter Hewan', 2),
(3, 'Raisa', 'Jl. Martubung', '2344', 'Dokter Kandungan', 3),
(4, 'Ali', 'Jln. Martubung', '1344', 'Ahli Mata', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb-dokter`
--
ALTER TABLE `tb-dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb-dokter`
--
ALTER TABLE `tb-dokter`
  MODIFY `kode_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

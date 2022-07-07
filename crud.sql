-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2022 pada 20.23
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datapesanan`
--

CREATE TABLE `tbl_datapesanan` (
  `nmrPesanan` int(11) NOT NULL,
  `jenisRestoran` varchar(50) NOT NULL,
  `makanan` varchar(50) NOT NULL,
  `harga` varchar(12) NOT NULL,
  `alamatPemesan` varchar(50) NOT NULL,
  `namaPemesan` varchar(50) NOT NULL,
  `telpPemesan` varchar(15) NOT NULL,
  `emailPemesan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_datapesanan`
--

INSERT INTO `tbl_datapesanan` (`nmrPesanan`, `jenisRestoran`, `makanan`, `harga`, `alamatPemesan`, `namaPemesan`, `telpPemesan`, `emailPemesan`) VALUES
(1, 'Soto Ayam Ndelik', 'Paket Nasi Soto Ayam Plus Mendoan', 'Rp 35.000', 'jl.pamulang 2 sawangan depok cinangka', 'aldooo', '01287823', 'admin@gmail.com'),
(2, 'Warteg Kharisma', 'Kentang Balado', 'Rp 30.000', 'jl.pamulang 2', 'aldo', '01287823', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `nmrAkun` int(3) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`nmrAkun`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Admin', 'e3afed0047b08059d0fada10f400c1e5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_restoran`
--

CREATE TABLE `tbl_restoran` (
  `nmrRestoran` int(5) NOT NULL,
  `namaRestoran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_restoran`
--

INSERT INTO `tbl_restoran` (`nmrRestoran`, `namaRestoran`) VALUES
(1, '--Pilih Restoran--'),
(2, 'Warteg Kharisma'),
(3, 'Restoran Padang Sederhana'),
(4, 'Soto Ayam Ndelik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_datapesanan`
--
ALTER TABLE `tbl_datapesanan`
  ADD PRIMARY KEY (`nmrPesanan`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`nmrAkun`);

--
-- Indeks untuk tabel `tbl_restoran`
--
ALTER TABLE `tbl_restoran`
  ADD PRIMARY KEY (`nmrRestoran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_datapesanan`
--
ALTER TABLE `tbl_datapesanan`
  MODIFY `nmrPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `nmrAkun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_restoran`
--
ALTER TABLE `tbl_restoran`
  MODIFY `nmrRestoran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

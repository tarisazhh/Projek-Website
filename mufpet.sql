-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2023 pada 02.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mufpet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status_admin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat`, `notelp`, `username`, `password`, `status_admin`) VALUES
(1, 'Tarisa', 'Krian', '085173038601', 'tarizhra', 'star', 'hidup'),
(2, 'Layla', 'Sukodono', '081515585211', 'baymax', 'maxy', 'mati');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(500) NOT NULL,
  `lulusan` varchar(500) NOT NULL,
  `alamat` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `lulusan`, `alamat`) VALUES
(1, 'Bagas', 'Universitas Indonesia ', 'Sidoarjo'),
(2, 'Putri ', 'Universitas Gadjah Mada', 'Malang'),
(3, 'Kinan', 'Universitas Airlangga', 'Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `grooming`
--

CREATE TABLE `grooming` (
  `id_grooming` int(11) NOT NULL,
  `nama_toko` varchar(500) DEFAULT NULL,
  `lokasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `grooming`
--

INSERT INTO `grooming` (`id_grooming`, `nama_toko`, `lokasi`) VALUES
(1, 'Grooming Bandung', 'Bandunng'),
(2, 'Tammy petshop and grooming', 'Surabaya'),
(3, 'BB Petshop and Grooming', 'Sidoarjo'),
(4, 'VDB Petshop Grooming 2', 'Malang'),
(5, 'Goldy', 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(11) NOT NULL,
  `nama_hewan` varchar(500) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `nama_hewan`, `keterangan`, `id_customer`) VALUES
(1, 'Koma', 'Bulu kuning', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klinik`
--

CREATE TABLE `klinik` (
  `id_klinik` int(11) NOT NULL,
  `nama_klinik` varchar(500) NOT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `klinik`
--

INSERT INTO `klinik` (`id_klinik`, `nama_klinik`, `alamat`, `id_dokter`) VALUES
(1, 'Pet Zone', 'Sidoarjo', 1),
(2, 'Healthy Tails', 'Malang', 3),
(3, 'Harmoni Pet Care', 'Surabaya', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `opsi`
--

CREATE TABLE `opsi` (
  `id_opsi` int(11) NOT NULL,
  `jenis_opsi` varchar(500) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `opsi`
--

INSERT INTO `opsi` (`id_opsi`, `jenis_opsi`, `harga`) VALUES
(900, 'konsultasi', 100),
(901, 'perawatan', 250),
(902, 'berobat', 150),
(903, 'operasi', 450);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `jenis_pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jenis_pembayaran`) VALUES
(1, 'cash'),
(2, 'BCA'),
(3, 'Mandiri'),
(4, 'BNI'),
(5, 'BRI'),
(6, 'Dana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petfeed`
--

CREATE TABLE `petfeed` (
  `id_petfeed` int(11) NOT NULL,
  `nama_toko` varchar(500) NOT NULL,
  `lokasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petfeed`
--

INSERT INTO `petfeed` (`id_petfeed`, `nama_toko`, `lokasi`) VALUES
(1, 'Queen Petshop', 'Kediri'),
(2, 'VDB Petshop Grooming 2', 'Malang'),
(3, 'Beepetmart Petshop', 'Makasar'),
(4, 'Bos Bulu Petshop', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_hewan` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_klinik` int(11) NOT NULL,
  `id_opsi` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `id_customer`, `id_hewan`, `id_dokter`, `id_klinik`, `id_opsi`, `id_pembayaran`) VALUES
(13, '2023-06-05', 2, 1, 1, 1, 900, 1),
(14, '2023-06-05', 2, 1, 1, 1, 900, 1),
(15, '2023-06-08', 2, 1, 2, 2, 902, 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indeks untuk tabel `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`id_grooming`);

--
-- Indeks untuk tabel `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indeks untuk tabel `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`id_klinik`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indeks untuk tabel `opsi`
--
ALTER TABLE `opsi`
  ADD PRIMARY KEY (`id_opsi`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `petfeed`
--
ALTER TABLE `petfeed`
  ADD PRIMARY KEY (`id_petfeed`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_hewan` (`id_hewan`),
  ADD KEY `id_klinik` (`id_klinik`),
  ADD KEY `id_opsi` (`id_opsi`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `grooming`
--
ALTER TABLE `grooming`
  MODIFY `id_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `klinik`
--
ALTER TABLE `klinik`
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `opsi`
--
ALTER TABLE `opsi`
  MODIFY `id_opsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=904;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `petfeed`
--
ALTER TABLE `petfeed`
  MODIFY `id_petfeed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hewan`
--
ALTER TABLE `hewan`
  ADD CONSTRAINT `hewan_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Ketidakleluasaan untuk tabel `klinik`
--
ALTER TABLE `klinik`
  ADD CONSTRAINT `klinik_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`id_klinik`) REFERENCES `klinik` (`id_klinik`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`id_opsi`) REFERENCES `opsi` (`id_opsi`),
  ADD CONSTRAINT `transaksi_ibfk_6` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

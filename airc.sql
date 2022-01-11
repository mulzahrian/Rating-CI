-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2019 pada 17.00
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ac_detail`
--

CREATE TABLE `ac_detail` (
  `detail_ac_id` int(11) NOT NULL,
  `kode_ac` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `pk` varchar(10) NOT NULL,
  `tahun_beli` varchar(10) NOT NULL,
  `asumsi_daya` varchar(11) NOT NULL,
  `port_nodemcu` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ac_detail`
--

INSERT INTO `ac_detail` (`detail_ac_id`, `kode_ac`, `merk`, `type`, `pk`, `tahun_beli`, `asumsi_daya`, `port_nodemcu`, `status`) VALUES
(1, 'kh11b', 'panasonic', 'AC Split', '1.5', '2010', '970', '5', '1'),
(2, 'jr12a', 'sharp', 'AC Split', '1', '2013', '970', '16', '1'),
(3, 'qwe123', 'panasonic', 'AC Split', '2', '2009', '320', '4', '1'),
(4, 'abcdefg', 'sharp', 'AC Split', '1', '2010', '220', '0', '1'),
(6, 'qwqwewqe', 'qweqwe', 'AC Split', '1', '123', '213', '2', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ac_pakai`
--

CREATE TABLE `ac_pakai` (
  `ac_pakai_id` int(11) NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `status_hidup` varchar(50) DEFAULT NULL,
  `detail_ac_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ac_pakai`
--

INSERT INTO `ac_pakai` (`ac_pakai_id`, `ruangan_id`, `status_hidup`, `detail_ac_id`, `status`) VALUES
(11, 4, '0', 2, '1'),
(19, 4, '0', 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `status_pakai` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `hari`, `ruangan_id`, `jam_mulai`, `jam_selesai`, `status_pakai`, `status`) VALUES
(6, 'Senin', 4, '13:50:00', '17:00:00', 'Pakai', '1'),
(7, 'Selasa', 4, '06:50:00', '13:00:00', 'Pakai', '1'),
(8, 'Selasa', 4, '13:50:00', '16:00:00', 'Pakai', '1'),
(9, 'Rabu', 4, '06:50:00', '13:00:00', 'Pakai', '1'),
(10, 'Rabu', 4, '13:50:00', '16:00:00', 'Pakai', '1'),
(11, 'Kamis', 4, '05:30:00', '13:00:00', 'Pakai', '1'),
(12, 'Kamis', 4, '13:50:00', '16:00:00', 'Pakai', '1'),
(13, 'Jumat', 4, '08:50:00', '11:00:00', 'Pakai', '1'),
(14, 'Jumat', 4, '13:20:00', '15:30:00', 'Pakai', '1'),
(15, 'Selasa', 16, '13:00:00', '16:00:00', 'Pakai', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_ac`
--

CREATE TABLE `log_ac` (
  `id_log` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `log_jam_mulai` time NOT NULL,
  `log_jam_selesai` time NOT NULL,
  `ruangan_id` int(11) NOT NULL,
  `detail_ac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log_ac`
--

INSERT INTO `log_ac` (`id_log`, `tgl`, `log_jam_mulai`, `log_jam_selesai`, `ruangan_id`, `detail_ac_id`) VALUES
(1, '2019-08-03', '22:33:43', '23:59:18', 4, 2),
(2, '2019-08-03', '22:33:45', '23:33:55', 4, 1),
(3, '2019-08-04', '10:07:35', '12:16:39', 4, 2),
(4, '2019-08-04', '10:17:17', '12:17:20', 4, 2),
(51, '2019-08-05', '11:34:29', '06:25:50', 4, 2),
(52, '2019-08-05', '11:34:29', '11:34:32', 4, 1),
(53, '2019-08-05', '11:34:30', '11:34:31', 16, 4),
(54, '2019-08-05', '13:02:11', '16:24:14', 4, 2),
(55, '2019-08-06', '07:00:29', '10:48:18', 4, 2),
(56, '2019-08-06', '10:49:01', '15:15:00', 4, 2),
(57, '2019-08-06', '06:50:00', '13:00:00', 4, 1),
(58, '2019-08-06', '20:37:30', '21:05:29', 4, 1),
(59, '2019-08-06', '21:05:34', '21:08:41', 4, 1),
(60, '2019-08-06', '21:08:41', '21:09:02', 4, 1),
(61, '2019-08-06', '21:09:03', '21:18:22', 4, 1),
(62, '2019-08-06', '21:26:26', '21:32:22', 4, 1),
(63, '2019-08-06', '21:26:29', '21:32:21', 4, 2),
(64, '2019-08-06', '21:33:27', '21:33:31', 4, 1),
(65, '2019-08-06', '22:38:10', '13:39:12', 4, 1),
(66, '2019-08-06', '22:38:11', '13:39:13', 4, 2),
(67, '2019-08-07', '14:49:12', '14:49:17', 4, 1),
(68, '2019-08-08', '04:10:28', '04:10:32', 4, 2),
(69, '2019-08-08', '04:10:30', '04:10:33', 4, 1),
(70, '2019-08-08', '04:15:58', '04:16:14', 4, 2),
(71, '2019-08-08', '04:16:00', '04:16:12', 4, 1),
(72, '2019-08-08', '04:28:03', '04:28:09', 4, 2),
(73, '2019-08-08', '04:28:13', '04:28:14', 4, 2),
(74, '2019-08-08', '04:28:18', '04:28:20', 4, 2),
(75, '2019-08-08', '04:28:45', '04:29:19', 4, 2),
(76, '2019-08-08', '04:28:52', '04:29:20', 4, 1),
(77, '2019-08-08', '04:32:48', '16:23:18', 4, 2),
(78, '2019-08-08', '04:32:50', '04:32:51', 4, 1),
(79, '2019-08-20', '19:11:04', '19:11:06', 4, 2),
(80, '2019-08-20', '19:11:08', '19:11:09', 4, 2),
(81, '2019-08-20', '19:16:33', '19:16:38', 4, 1),
(82, '2019-08-20', '19:17:09', '19:17:11', 4, 1),
(83, '2019-08-20', '19:17:13', '19:17:14', 4, 2),
(84, '2019-08-20', '19:31:37', '19:31:56', 5, 3),
(85, '2019-08-20', '19:31:45', '19:31:49', 4, 1),
(86, '2019-08-20', '19:31:51', '19:32:00', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hak_akses` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `nama`, `username`, `password`, `hak_akses`, `status`) VALUES
(7, 'Admin', 'admin', '$2y$10$y9kP5D3XALXzIzZenJBow.WEUfm5HZbZpK0p1Kss/JpX2CgM4yDWC', 'Admin', '1'),
(16, 'Security', 'security', '$2y$10$zJMJ8HhdV7ZOoKv5HjWHxOyrx9idSWaEKzGXugUdY.8YhrWd/AZBG', 'Security', '1'),
(17, 'bimo', 'bimo', '$2y$10$KqfluvEWVFF2HEVQzuTO1u6.QlbYTaNPkk1entaRSSOSpRwPP6W4S', 'Admin', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `ruangan_id` int(11) NOT NULL,
  `no_ruangan` varchar(10) NOT NULL,
  `gedung` varchar(50) NOT NULL,
  `lantai` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`ruangan_id`, `no_ruangan`, `gedung`, `lantai`, `status`) VALUES
(4, '124', 'Gedung lama', '1', '1'),
(5, '316', 'Gedung lama', '3', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ac_detail`
--
ALTER TABLE `ac_detail`
  ADD PRIMARY KEY (`detail_ac_id`);

--
-- Indeks untuk tabel `ac_pakai`
--
ALTER TABLE `ac_pakai`
  ADD PRIMARY KEY (`ac_pakai_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indeks untuk tabel `log_ac`
--
ALTER TABLE `log_ac`
  ADD PRIMARY KEY (`id_log`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`ruangan_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ac_detail`
--
ALTER TABLE `ac_detail`
  MODIFY `detail_ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ac_pakai`
--
ALTER TABLE `ac_pakai`
  MODIFY `ac_pakai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `log_ac`
--
ALTER TABLE `log_ac`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `ruangan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

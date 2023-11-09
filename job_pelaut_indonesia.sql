-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2023 pada 00.15
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_pelaut_indonesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `umur` int(11) DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `jenis_kapal` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `last_vessel_type` varchar(255) DEFAULT NULL,
  `grt` int(11) DEFAULT NULL,
  `trading_area` varchar(255) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `available_in_jakarta` tinyint(1) DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `skype_id` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `schengenPassport` varchar(255) DEFAULT NULL,
  `passportExpiryDate` date DEFAULT NULL,
  `seaman_book` varchar(255) DEFAULT NULL,
  `schengenSeamanBook` varchar(255) DEFAULT NULL,
  `seamanBookExpiryDate` date DEFAULT NULL,
  `panama_or_liberia_ceo` varchar(255) DEFAULT NULL,
  `schengenPanama` varchar(255) DEFAULT NULL,
  `panamaExpiryDate` date DEFAULT NULL,
  `visa` varchar(255) DEFAULT NULL,
  `schengenVisa` varchar(255) DEFAULT NULL,
  `visaExpiryDate` date DEFAULT NULL,
  `ijazah_endorsement_coc` varchar(255) DEFAULT NULL,
  `cop` varchar(255) DEFAULT NULL,
  `gmdss_endorsement` varchar(255) DEFAULT NULL,
  `goc_oru` varchar(255) DEFAULT NULL,
  `yellow_fever` varchar(255) DEFAULT NULL,
  `vaccine` varchar(255) DEFAULT NULL,
  `last_contract` date DEFAULT NULL,
  `last_appraisal` date DEFAULT NULL,
  `tgl_pembuatan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `umur`, `posisi`, `jenis_kapal`, `class`, `last_vessel_type`, `grt`, `trading_area`, `salary`, `available_in_jakarta`, `nomor_telepon`, `email_address`, `skype_id`, `cv`, `passport`, `schengenPassport`, `passportExpiryDate`, `seaman_book`, `schengenSeamanBook`, `seamanBookExpiryDate`, `panama_or_liberia_ceo`, `schengenPanama`, `panamaExpiryDate`, `visa`, `schengenVisa`, `visaExpiryDate`, `ijazah_endorsement_coc`, `cop`, `gmdss_endorsement`, `goc_oru`, `yellow_fever`, `vaccine`, `last_contract`, `last_appraisal`, `tgl_pembuatan`) VALUES
(1, 'ffdfdsccsqshhyxwx', 23, 'MASTER', 'Kapal Penumpang', '7WjhAgCo50', 'wsjdSE8IQX', 9993944, 'QV2HTc81xH', 1.00, 0, '92983899292', 'pewmp@nml5.com', 'QkoGGUNmwa', '', '', 'EBcc7t1Hkb', '2023-10-08', '', 'GihOxAprJ5', '2023-10-24', '', 'ijRsXaCLg9', '2023-10-08', '', 'e8JoguiFBE', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19'),
(2, 'ffdfdsccsqshhyxwxs', 23, 'MASTER', 'Kapal Penumpang', '7WjhAgCo50', 'wsjdSE8IQX', 9993944, 'QV2HTc81xH', 1.00, 0, '92983899292', 'pewmp@nml5.com', 'QkoGGUNmwa', '', '', 'EBcc7t1Hkb', '2023-10-08', '', 'GihOxAprJ5', '2023-10-24', '', 'ijRsXaCLg9', '2023-10-08', '', 'e8JoguiFBE', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19'),
(3, 'ffdfdsccsqshhy', 23, 'MASTER', 'Kapal Penumpang', 'K82ZjGk43H', 'KTJ7uvt5Qy', 9993944, 'XHVWp6DVnw', 0.00, 0, '92983899292', 'pjedk@qx6h.com', 'x3w4NYcwB8', '', '', 'VRjxwG2qwy', '2023-10-08', '', 'y0VdsaTAbs', '2023-10-24', '', 'a9nPM4R5B8', '2023-10-08', '', 'avpLaL1bKd', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19'),
(4, 'ffdfdsccsqshhymmmo', 23, 'MASTER', 'Kapal Penumpang', 'cPVAElB7Oe', 'AQAJ4e0DjP', 9993944, 'lbj7HPRaMp', 0.00, 0, '92983899292', 'vhj99@led2.com', 'KidPr3WpSq', '', '', '2IxmuaGwiX', '2023-10-08', '', '7y4oy4XICJ', '2023-10-24', '', '9UE0KwSs9R', '2023-10-08', '', 'iZczT6DGCc', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19'),
(5, 'ffdfdsccsqshhym', 23, 'MASTER', 'Kapal Penumpang', 'rpDmmor1Py', '9ttfrDZz1W', 9993944, 'coE7WHDPU3', 9.00, 0, '92983899292', '6ta4x@iv1w.com', 'bJMe7AyDvp', '', '', 'WMRAY89dRM', '2023-10-08', '', 'AgXaUG4PmK', '2023-10-24', '', 'kI8tDc7VX2', '2023-10-08', '', 'gWLNMKpWMg', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19'),
(6, 'ffdfdsccsqshhyw', 23, 'MASTER', 'Kapal Penumpang', 'qh64SUf3yg', 'kLmAwiQWCl', 9993944, 'Ez5W8wKYHX', 4.00, 2, '92983899292', 'a2qpm@8zq6.com', '1TilnIqmUK', '', '', 'lmhqVStRos', '2023-10-08', '', 'JOBBHrYEwF', '2023-10-24', '', 'z2hKMiHO86', '2023-10-08', '', 'QK0Sv7QxTI', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19'),
(7, 'ffdfdsccsqs', 23, 'MASTER', 'Kapal Penumpang', 'd158hn4q38', 'F0G7CoS2qK', 9993944, 'VT3RFpd8Cq', 0.00, 0, '92983899292', 'hdijr@xhln.com', 'xTqbhfoCy8', '', '', 'QrPtfc5q98', '2023-10-08', '', 'xKOmlcKhvI', '2023-10-24', '', 'daoXL3IwVh', '2023-10-08', '', 'WHSUt02YCQ', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19'),
(8, 'ffdfdsccsq', 23, 'MASTER', 'Kapal Penumpang', 'd158hn4q38', 'F0G7CoS2qK', 9993944, 'VT3RFpd8Cq', 0.00, 0, '92983899292', 'hdijr@xhln.com', 'xTqbhfoCy8', '', '', 'QrPtfc5q98', '2023-10-08', '', 'xKOmlcKhvI', '2023-10-24', '', 'daoXL3IwVh', '2023-10-08', '', 'WHSUt02YCQ', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19'),
(9, 'ffdfdsccs', 23, 'MASTER', 'Kapal Penumpang', 'd158hn4q38', 'F0G7CoS2qK', 9993944, 'VT3RFpd8Cq', 0.00, 0, '92983899292', 'hdijr@xhln.com', 'xTqbhfoCy8', '', '', 'QrPtfc5q98', '2023-10-08', '', 'xKOmlcKhvI', '2023-10-24', '', 'daoXL3IwVh', '2023-10-08', '', 'WHSUt02YCQ', '2023-10-20', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '2023-10-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongan_kerja`
--

CREATE TABLE `lowongan_kerja` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_publikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_karyawan`
--

CREATE TABLE `pesan_karyawan` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `email_pengirim` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `lowongan_id` int(11) NOT NULL,
  `waktu_pengiriman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan_karyawan`
--
ALTER TABLE `pesan_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `lowongan_kerja`
--
ALTER TABLE `lowongan_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_karyawan`
--
ALTER TABLE `pesan_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2020 pada 07.10
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `no_pendaftaran` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `file_ijazah` varchar(128) NOT NULL,
  `file_skhun` varchar(128) NOT NULL,
  `image_pembayaran` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id`, `no_pendaftaran`, `email`, `image`, `file_ijazah`, `file_skhun`, `image_pembayaran`) VALUES
(1, 'WK0220200001', 'kuro.mashiroe@gmail.com', 'Picture_0122.jpg', '9-17-1-SM.pdf', '38-126-1-PB.pdf', '1248228_1.jpg'),
(2, 'WK0220200002', 'asep.rahmawan@gmail.com', 'default.png', '', '', ''),
(3, 'WK0220200003', 'mutiara.sari@gmail.com', 'default.png', '', '', ''),
(4, 'WK0220200004', 'kuro.mashiroe1@gmail.com', 'default.png', '', '', ''),
(5, 'WK0220200005', 'kuro.mashiroe2@gmail.com', 'default.png', '', '', ''),
(6, 'WK0220200006', 'kuro.mashiroe3@gmail.com', 'default.png', '', '', ''),
(8, 'WK0220200008', 'kuro.mashiroe5@gmail.com', 'default.png', '', '', ''),
(9, 'WK0220200009', 'kuro.mashiroe6@gmail.com', 'default.png', '', '', ''),
(11, 'WK0220200011', 'kuro.mashiroe8@gmail.com', 'default.png', '', '', ''),
(13, 'WK0220200013', 'kuro.mashiroe0@gmail.com', 'default.png', '', '', ''),
(14, 'WK0220200014', 'kuro.mashiroe10@gmail.com', 'default.png', '', '', ''),
(15, 'WK0220200015', 'kuro.mashiroe11@gmail.com', 'default.png', '', '', ''),
(17, 'WK0220200017', 'kuro.mashiroe13@gmail.com', 'default.png', '', '', ''),
(18, 'WK0220200018', 'kuro@gmail.com', 'default.png', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pendaftaran` varchar(128) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `skhun` varchar(64) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `sekolah_asal` varchar(128) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `anak_ke` int(5) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(10) NOT NULL,
  `hp_ortu` varchar(50) NOT NULL,
  `tgl_pendaftaran` varchar(15) NOT NULL,
  `is_approval` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `nisn`, `skhun`, `nama`, `sekolah_asal`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `hp`, `email`, `agama`, `jurusan`, `status`, `anak_ke`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `kewarganegaraan`, `hp_ortu`, `tgl_pendaftaran`, `is_approval`) VALUES
('WK0220200001', '123141415237', 'D123456789', 'Rahmady Krisna', 'SMP Kasih Ibu', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.269, Kb. Lega, Kec. Bojongloa Kidul', '089123546789', 'kuro.mashiroe@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 1, 'Levi', 'Swasta', 'Juliet', 'Ibu Rumah Tangga', 'WNI', '088077007011', '15-08-2020', 1),
('WK0220200002', '123141415232', 'D32425233190', 'Asep Rahmawan', 'SMP Negeri 2 Bandung', 'Bandung', '30 Februari 1999', 'Laki-Laki', 'Jl. Soekarno Hatta No.269, Kb. Lega, Kec. Bojongloa Kidul', '089123546777', 'asep.rahmawan@gmail.com', 'Islam', 'Pemasaran', 'Anak', 2, 'Steven', 'Pegawai Negeri', 'Juliet', 'Ibu Rumah Tangga', 'WNI', '088077009324', '16-08-2020', 0),
('WK0220200003', '123141415239', 'D32425235287', 'Mutiara Sari Kurnia', 'SMP Negeri 10 Cimahi', 'Bandung', '01 Mei 1998', 'Perempuan', 'Perum Griya Permai Cikampek', '0812903148564', 'mutiara.sari@gmail.com', 'Islam', 'Farmasi Industri', 'Anak', 1, 'Kurniawan', 'Pegawai Negeri', 'Yuri', 'Ibu Rumah Tangga', 'WNI', '088077009324', '29-08-2020', 1),
('WK0220200004', '123141415231', 'D32425235235', 'Rizal', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe1@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200005', '123141415231', 'D32425235235', 'Bambang', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe2@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200006', '123141415231', 'D32425235235', 'Bams', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe3@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200008', '123141415231', 'D32425235235', 'Rizki', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe5@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200009', '123141415231', 'D32425235235', 'Regi', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe6@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200011', '123141415231', 'D32425235235', 'Rifaldi', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe8@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200013', '123141415231', 'D32425235235', 'Bambang A', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe0@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200014', '123141415231', 'D32425235235', 'Rockie', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe10@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200015', '123141415231', 'D32425235235', 'Naruto', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe11@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200017', '123141415231', 'D32425235235', 'Bambang', 'SMP Negeri 10 Cimahi', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '08987654321', 'kuro.mashiroe13@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 3, 'Steven', 'Pengusaha', 'Yuri', 'Ibu Rumah Tangga', 'WNA', '088077007074', '30-08-2020', 0),
('WK0220200018', '123141415244', 'D32425233190', 'Stevn', 'SMP Negeri 2 Bandung', 'Bandung', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.269, Kb. Lega, Kec. Bojongloa Kidul', '0812903148564', 'kuro@gmail.com', 'Islam', 'Farmasi Industri', 'Anak', 1, 'Steven', 'Pegawai Negeri', 'Yuri', 'Ibu Rumah Tangga', 'WNI', '088077007011', '31-08-2020', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_id`
--

INSERT INTO `role_id` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.jpg',
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`) VALUES
(1, 'Rahmady Krisna', 'kingsaga71@yahoo.com', 'default.png', '$2y$10$1whPBM8FyRTDbEQyQTc6R.V2OR73kAz/j9Zzw4uKuKn9V3YIvYWZC', 1, 1),
(20, 'Rahmady Krisna', 'kuro.mashiroe@gmail.com', 'Picture_0122.jpg', '$2y$10$Iy8Q7m1lVpin1uQ8Vc0AN.VZUG6cO18EeYUThoEMY9cVwe7ZTX3Dq', 2, 1),
(21, 'Asep Rahmawan', 'asep.rahmawan@gmail.com', 'default.png', '$2y$10$chprmxISCGqc7wAgg3HYZeI6YMwnRo/7Stb1a1k97FI/NS0WPPg1u', 2, 1),
(27, 'Mutiara Sari Kurnia', 'mutiara.sari@gmail.com', 'default.png', '$2y$10$nohgLJuh7nDHztJ8pWPSNuA8wOPBDeiWiXppEyYueObalLnpwGSTe', 2, 1),
(28, 'Rizal', 'kuro.mashiroe1@gmail.com', 'default.png', '$2y$10$p6d.FwGyLkrKed/2nr5BsuQUA8x4rH1.McHSQ6guCHZHV0Z4EqVDC', 2, 1),
(29, 'Bambang', 'kuro.mashiroe2@gmail.com', 'default.png', '$2y$10$5AKByrJxKJxuQa2wWqolkO7i5nRa38VhB0Qz52VV5KgZt/XhJMeP2', 2, 1),
(30, 'Bams', 'kuro.mashiroe3@gmail.com', 'default.png', '$2y$10$jGKdO2OCLTgpQFzvXwhJFuS64YZII2P7asB21efRGqC7pAtpOOz66', 2, 1),
(32, 'Rizki', 'kuro.mashiroe5@gmail.com', 'default.png', '$2y$10$mJ32dIAjR72VSuk5E1lphOhdAw0uJZbHSWjKm177tHEolXHh3jNvG', 2, 1),
(33, 'Regi', 'kuro.mashiroe6@gmail.com', 'default.png', '$2y$10$conyhOw1Y5y3/3YUYZbjmeGWZc.R3zukLPS.mURJu1Obp5ya36w5.', 2, 1),
(35, 'Rifaldi', 'kuro.mashiroe8@gmail.com', 'default.png', '$2y$10$WHB7552Y09.55Bi6HX6vieSAaEyBWcCesdXDkTmSKZoNdZ2v9Xavi', 2, 1),
(37, 'Bambang A', 'kuro.mashiroe0@gmail.com', 'default.png', '$2y$10$9Rdht1PqQKTOfCeJ7/SoLen.nNuN76Ytg7qVlgH61NcMxgm.aBGN.', 2, 1),
(38, 'Rockie', 'kuro.mashiroe10@gmail.com', 'default.png', '$2y$10$LnGtsoE9CSwB6Hza0bGdgOXSuD9pkCVeHnb77/D0qK69NBUmIlJAq', 2, 1),
(39, 'Naruto', 'kuro.mashiroe11@gmail.com', 'default.png', '$2y$10$f1G0iFv6GnOLDUNSwMAa7.wBKi06ACSW2ovvwqUNUDbncZTdyddN6', 2, 1),
(41, 'Bambang', 'kuro.mashiroe13@gmail.com', 'default.png', '$2y$10$ChAok6WSXeMFvtHgpJkE1OSvzavcjPAH1rD6n8CD3nfIrfSXPr5Ju', 2, 1),
(42, 'Rahmady Krisna', 'kuro.mashiroe20@gmail.com', 'default.png', '$2y$10$eo316opvehS89WriyLOIBOEFLz.hOVXDVaYg.AeL1hDEv6AEd7Kbq', 2, 1),
(45, 'Stevn', 'kuro@gmail.com', 'default.png', '$2y$10$GCi5JWPSwY8CJBorJ15lseebOnZVfgnvX/GXgEVrz3UuZ4MCWTEQe', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`no_pendaftaran`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `email_2` (`email`),
  ADD KEY `role_id_2` (`role_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

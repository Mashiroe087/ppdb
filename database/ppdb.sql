-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2020 pada 08.14
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL DEFAULT 'default.jpg',
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email`, `image`, `password`, `role_id`, `is_active`) VALUES
(1, 'Neng Widanengsih', 'widanengsih@gmail.com', 'default.jpg', 'neng1234', 1, 1);

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
  `tgl_pendaftaran` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `nisn`, `skhun`, `nama`, `sekolah_asal`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `hp`, `email`, `agama`, `jurusan`, `status`, `anak_ke`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `kewarganegaraan`, `hp_ortu`, `tgl_pendaftaran`) VALUES
('WK0220200001', '123141415231', 'D32425235235', 'Rahmady Krisna', 'SMP Kasih Ibu', 'Jakarta', '11 Juli 2020', 'Laki-Laki', 'Jl. Soekarno Hatta No.269, Kb. Lega, Kec. Bojongloa Kidul', '089123546789', 'kuro.mashiroe@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 1, 'Levi', 'Swasta', 'Juliet', 'Ibu Rumah Tangga', 'WNI', '088077007011', '15-08-2020'),
('WK0220200002', '123141415232', 'D32425233190', 'Asep Rahmawan', 'SMP Negeri 2 Bandung', 'Bandung', '30 Februari 1999', 'Laki-Laki', 'Jl. Soekarno Hatta No.269, Kb. Lega, Kec. Bojongloa Kidul', '089123546777', 'asep.rahmawan@gmail.com', 'Islam', 'Pemasaran', 'Anak', 2, 'Steven', 'Pegawai Negeri', 'Juliet', 'Ibu Rumah Tangga', 'WNI', '088077009324', '16-08-2020'),
('WK0220200003', '123141415231', '300319982020', 'Asep Rahmawan', 'SMP Negeri 2 Bandung', 'Tsm', '30031998', 'Laki-Laki', 'Jl. Soekarno Hatta No.378', '089123546789', 'arahmawwan@gmail.com', 'Islam', 'Administrasi Perkantoran', 'Anak', 1, 'My Father', 'Swasta', 'My Mother', 'Ibu Rumah Tangga', 'WNI', '088077007070', '17-08-2020');

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
(20, 'Rahmady Krisna', 'kuro.mashiroe@gmail.com', 'default.png', '$2y$10$Iy8Q7m1lVpin1uQ8Vc0AN.VZUG6cO18EeYUThoEMY9cVwe7ZTX3Dq', 2, 1),
(21, 'Asep Rahmawan', 'asep.rahmawan@gmail.com', 'default.png', '$2y$10$chprmxISCGqc7wAgg3HYZeI6YMwnRo/7Stb1a1k97FI/NS0WPPg1u', 2, 1),
(22, 'Asep Rahmawan', 'arahmawwan@gmail.com', 'default.png', '$2y$10$jfoMz6OiRveFhOtDwEo3sO5KqGoCKNSvRGOCY2F.3e1l6bbbKMk3e', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

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
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2020 pada 03.13
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipkubutambahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_balas_komentar`
--

CREATE TABLE `tb_balas_komentar` (
  `id_balas_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_komentar` int(11) NOT NULL,
  `deskripsi_balas_komentar` varchar(500) NOT NULL,
  `date_balas_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL,
  `judul_berita` varchar(300) CHARACTER SET latin1 NOT NULL,
  `deskripsi_berita` longtext NOT NULL,
  `date_berita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id_desa` int(11) NOT NULL,
  `nama_desa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `nama_desa`) VALUES
(1, 'Desa Bengkala'),
(2, 'Desa Bila'),
(3, 'Desa Bontihing'),
(4, 'Desa Bukti'),
(5, 'Desa Bulian'),
(6, 'Desa Depeha'),
(7, 'Desa Kubutambahan'),
(8, 'Desa Mengening'),
(9, 'Desa Pakisan'),
(10, 'Desa Tajun'),
(11, 'Desa Tambakan'),
(12, 'Desa Tamblang'),
(13, 'Desa Tunjung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `deskripsi_komentar` varchar(500) NOT NULL,
  `date_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ktwisata`
--

CREATE TABLE `tb_ktwisata` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_ktwisata`
--

INSERT INTO `tb_ktwisata` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Zona Air'),
(2, 'Zona Bukit'),
(3, 'Zona Pertanian'),
(4, 'Zona Kebudayaan'),
(5, 'Zona Suci'),
(6, 'Zona Piknik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengelola`
--

CREATE TABLE `tb_pengelola` (
  `id_pengelola` int(11) NOT NULL,
  `nama_pengelola` varchar(100) NOT NULL,
  `kontak_pengelola` bigint(20) NOT NULL,
  `alamat_pengelola` varchar(200) NOT NULL,
  `foto_pengelola` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengelola`
--

INSERT INTO `tb_pengelola` (`id_pengelola`, `nama_pengelola`, `kontak_pengelola`, `alamat_pengelola`, `foto_pengelola`) VALUES
(1, 'Gede Winda', 8165161615, 'Desa Tajun', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pramuwisata`
--

CREATE TABLE `tb_pramuwisata` (
  `id_pramuwisata` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL,
  `nama_pramuwisata` varchar(100) NOT NULL,
  `kontak_pramuwisata` bigint(20) NOT NULL,
  `alamat_pramuwisata` varchar(200) NOT NULL,
  `foto_pramuwisata` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tb_pramuwisata';

--
-- Dumping data untuk tabel `tb_pramuwisata`
--

INSERT INTO `tb_pramuwisata` (`id_pramuwisata`, `id_pengelola`, `nama_pramuwisata`, `kontak_pramuwisata`, `alamat_pramuwisata`, `foto_pramuwisata`) VALUES
(1, 1, 'Ketut Warsa', 821651654654, 'Desa Kubutambahan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `j_kelamin` tinyint(1) NOT NULL,
  `alamat` varchar(200) CHARACTER SET latin1 NOT NULL,
  `no_hp` int(12) NOT NULL,
  `image` varchar(200) CHARACTER SET latin1 NOT NULL,
  `date_created` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `email`, `password`, `j_kelamin`, `alamat`, `no_hp`, `image`, `date_created`, `role_id`, `is_active`) VALUES
(3, 'wis', 'wisnawa@gmail.com', '$2y$10$dCpGIAnxImJSXTCSgPCJguGl7g/Z8bDbTHTaEs4vBCPqgWsP6ddiC', 0, '', 0, 'default.PNG', 1605414006, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `deskripsi_wisata` mediumtext NOT NULL,
  `alamat_wisata` varchar(100) NOT NULL,
  `fasilitas_wisata` varchar(100) NOT NULL,
  `latitude_wisata` int(11) NOT NULL,
  `longitude_wisata` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(128) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Member'),
(3, 'Pengelola');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_balas_komentar`
--
ALTER TABLE `tb_balas_komentar`
  ADD PRIMARY KEY (`id_balas_komentar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_komentar` (`id_komentar`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_pengelola` (`id_pengelola`);

--
-- Indeks untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_ktwisata`
--
ALTER TABLE `tb_ktwisata`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indeks untuk tabel `tb_pramuwisata`
--
ALTER TABLE `tb_pramuwisata`
  ADD PRIMARY KEY (`id_pramuwisata`),
  ADD KEY `id_pengelola` (`id_pengelola`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_balas_komentar`
--
ALTER TABLE `tb_balas_komentar`
  MODIFY `id_balas_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ktwisata`
--
ALTER TABLE `tb_ktwisata`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_pengelola`
--
ALTER TABLE `tb_pengelola`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pramuwisata`
--
ALTER TABLE `tb_pramuwisata`
  MODIFY `id_pramuwisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_balas_komentar`
--
ALTER TABLE `tb_balas_komentar`
  ADD CONSTRAINT `tb_balas_komentar_ibfk_1` FOREIGN KEY (`id_komentar`) REFERENCES `tb_komentar` (`id_komentar`),
  ADD CONSTRAINT `tb_balas_komentar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD CONSTRAINT `tb_berita_ibfk_1` FOREIGN KEY (`id_pengelola`) REFERENCES `tb_pengelola` (`id_pengelola`);

--
-- Ketidakleluasaan untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_pramuwisata`
--
ALTER TABLE `tb_pramuwisata`
  ADD CONSTRAINT `tb_pramuwisata_ibfk_1` FOREIGN KEY (`id_pengelola`) REFERENCES `tb_pengelola` (`id_pengelola`);

--
-- Ketidakleluasaan untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tb_user_role` (`id_role`);

--
-- Ketidakleluasaan untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD CONSTRAINT `tb_wisata_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_ktwisata` (`id_kategori`),
  ADD CONSTRAINT `tb_wisata_ibfk_2` FOREIGN KEY (`id_desa`) REFERENCES `tb_desa` (`id_desa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

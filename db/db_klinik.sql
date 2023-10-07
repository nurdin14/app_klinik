-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2022 pada 07.20
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(8) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `umur` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alergi_obat` varchar(120) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `username`, `password`, `nama`, `umur`, `alamat`, `no_hp`, `alergi_obat`, `status`) VALUES
(14, '-', '-', 'Didi Supriadi', 35, '<p>Cirahayu<br></p>', '083150687527', 'ada(promaag)', ''),
(15, '-', '-', 'Nining', 24, '<p>Cirahayu<br></p>', '083150687527', 'ada', ''),
(16, '-', '-', 'Asep', 22, '<p>Apuy<br></p>', '083150687527', 'ada', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama`, `alamat`, `no_hp`, `username`, `password`) VALUES
(3, 'Mita Karmila', '<p>Talaga<br></p>', '083150687527', 'mita123', '1234'),
(5, 'Aldi', 'Talaga', '083150687527', 'aldi', 'aldi123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekam`
--

CREATE TABLE `tb_rekam` (
  `id_rekam` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `no_rekam_medik` int(11) NOT NULL,
  `anamnesa` text NOT NULL,
  `diagnosa` text NOT NULL,
  `terapi` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rekam`
--

INSERT INTO `tb_rekam` (`id_rekam`, `id_pasien`, `tanggal`, `no_rekam_medik`, `anamnesa`, `diagnosa`, `terapi`) VALUES
(16, 14, '2022-12-23', 8278, '<p>-<br></p>', '<p>-<br></p>', '<p>-<br></p>'),
(17, 15, '2022-12-23', 9689, '<p>ada<br></p>', '<p>ada<br></p>', '<p>ada<br></p>'),
(18, 16, '2022-12-23', 2189, '<p>ada<br></p>', '<p>ada<br></p>', '<p>ada<br></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_rekam` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pembayaran` double NOT NULL,
  `type` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_rekam`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_rekam` (
`id_pasien` int(11)
,`username` varchar(120)
,`nama` varchar(120)
,`umur` int(5)
,`alamat` text
,`no_hp` varchar(13)
,`alergi_obat` varchar(120)
,`tanggal` date
,`no_rekam_medik` int(11)
,`anamnesa` text
,`diagnosa` text
,`terapi` varchar(120)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_rekam`
--
DROP TABLE IF EXISTS `v_rekam`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_rekam`  AS SELECT `tb_pasien`.`id_pasien` AS `id_pasien`, `tb_pasien`.`username` AS `username`, `tb_pasien`.`nama` AS `nama`, `tb_pasien`.`umur` AS `umur`, `tb_pasien`.`alamat` AS `alamat`, `tb_pasien`.`no_hp` AS `no_hp`, `tb_pasien`.`alergi_obat` AS `alergi_obat`, `tb_rekam`.`tanggal` AS `tanggal`, `tb_rekam`.`no_rekam_medik` AS `no_rekam_medik`, `tb_rekam`.`anamnesa` AS `anamnesa`, `tb_rekam`.`diagnosa` AS `diagnosa`, `tb_rekam`.`terapi` AS `terapi` FROM (`tb_rekam` join `tb_pasien`) WHERE `tb_pasien`.`id_pasien` = `tb_rekam`.`id_pasien``id_pasien`  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tb_rekam`
--
ALTER TABLE `tb_rekam`
  ADD PRIMARY KEY (`id_rekam`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_rekam` (`id_rekam`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_rekam`
--
ALTER TABLE `tb_rekam`
  MODIFY `id_rekam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_rekam`
--
ALTER TABLE `tb_rekam`
  ADD CONSTRAINT `tb_rekam_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_rekam`) REFERENCES `tb_rekam` (`id_rekam`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

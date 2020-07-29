-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2020 pada 12.41
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_serverphb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_suhu`
--

CREATE TABLE `tb_suhu` (
  `id` int(11) NOT NULL,
  `suhu` varchar(11) NOT NULL,
  `kelembaban` varchar(11) NOT NULL,
  `waktu` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_suhu`
--

INSERT INTO `tb_suhu` (`id`, `suhu`, `kelembaban`, `waktu`) VALUES
(1, '30.50', '50', '2020-01-07 11:20:25.982966'),
(2, '23.90', '63.00', '2020-01-09 09:22:42.493567'),
(3, '23.90', '63.00', '2020-01-09 09:22:57.042528'),
(4, '23.90', '64.00', '2020-01-09 09:23:14.612394'),
(5, '23.90', '63.00', '2020-01-09 09:23:28.819247'),
(6, '23.70', '63.00', '2020-01-09 09:23:43.030098'),
(7, '23.80', '64.00', '2020-01-09 09:23:57.529623'),
(8, '23.80', '64.00', '2020-01-09 09:24:32.874856'),
(9, '23.80', '64.00', '2020-01-09 09:24:38.562728'),
(10, '24.10', '63.00', '2020-01-09 09:24:52.752084'),
(11, '24.20', '62.00', '2020-01-09 09:25:06.976761'),
(12, '24.20', '62.00', '2020-01-09 09:25:21.183338'),
(13, '24.10', '62.00', '2020-01-09 09:25:35.349799'),
(14, '24.10', '62.00', '2020-01-09 09:25:49.515161'),
(15, '24.10', '62.00', '2020-01-09 09:26:03.794107'),
(16, '24.20', '62.00', '2020-01-09 09:26:18.186448'),
(17, '24.20', '62.00', '2020-01-09 09:26:32.449970'),
(18, '24.10', '62.00', '2020-01-09 09:26:46.754721'),
(19, '24.10', '61.00', '2020-01-09 09:27:01.044138'),
(20, '24.00', '61.00', '2020-01-09 09:27:15.436625'),
(21, '24.00', '62.00', '2020-01-09 09:27:30.014980'),
(22, '24.00', '62.00', '2020-01-09 09:27:44.211938'),
(23, '24.00', '62.00', '2020-01-09 09:27:58.419795'),
(24, '24.00', '62.00', '2020-01-09 09:28:12.603987'),
(25, '24.00', '62.00', '2020-01-09 09:28:26.796847'),
(26, '24.10', '61.00', '2020-01-09 09:28:40.994685'),
(27, '24.20', '61.00', '2020-01-09 09:28:55.175142'),
(28, '23.90', '61.00', '2020-01-09 09:29:09.343269'),
(29, '24.00', '61.00', '2020-01-09 09:29:23.581304'),
(30, '24.00', '61.00', '2020-01-09 09:29:37.895806'),
(31, '23.90', '61.00', '2020-01-09 09:29:52.155242'),
(32, '23.80', '61.00', '2020-01-09 09:30:06.435723'),
(33, '23.80', '61.00', '2020-01-09 09:30:20.728239'),
(34, '23.60', '61.00', '2020-01-09 09:30:35.066892'),
(35, '23.50', '61.00', '2020-01-09 09:30:49.459251'),
(36, '23.60', '61.00', '2020-01-09 09:31:03.821924'),
(37, '23.60', '61.00', '2020-01-09 09:31:18.082941'),
(38, '23.60', '62.00', '2020-01-09 09:31:32.920231'),
(39, '23.50', '61.00', '2020-01-09 09:31:47.250570'),
(40, '23.50', '62.00', '2020-01-09 09:32:01.551384'),
(41, '23.50', '62.00', '2020-01-09 09:32:15.770604'),
(42, '23.50', '62.00', '2020-01-09 09:32:30.097730'),
(43, '23.50', '61.00', '2020-01-09 09:32:44.421540'),
(44, '23.50', '62.00', '2020-01-09 09:32:58.762419'),
(45, '23.50', '61.00', '2020-01-09 09:33:13.228271'),
(46, '23.40', '61.00', '2020-01-09 09:33:27.517847'),
(47, '23.40', '62.00', '2020-01-09 09:33:41.797556'),
(48, '23.30', '61.00', '2020-01-09 09:33:56.028165'),
(49, '23.40', '62.00', '2020-01-09 09:34:11.154989'),
(50, '23.30', '62.00', '2020-01-09 09:34:25.466818'),
(51, '23.40', '62.00', '2020-01-09 09:34:39.717884'),
(52, '23.30', '62.00', '2020-01-09 09:34:54.014662'),
(53, '23.30', '62.00', '2020-01-09 09:35:08.254958'),
(54, '23.30', '62.00', '2020-01-09 09:35:22.445029'),
(55, '23.30', '62.00', '2020-01-09 09:35:36.663950'),
(56, '23.30', '61.00', '2020-01-09 09:35:51.016168'),
(57, '23.30', '61.00', '2020-01-09 09:36:05.265967'),
(58, '23.20', '61.00', '2020-01-09 09:36:19.474396'),
(59, '23.20', '61.00', '2020-01-09 09:36:33.699143'),
(60, '23.30', '61.00', '2020-01-09 09:36:48.507187'),
(61, '23.30', '61.00', '2020-01-09 09:37:02.908959'),
(62, '23.30', '61.00', '2020-01-09 09:37:17.600258'),
(63, '23.30', '61.00', '2020-01-09 09:37:32.249973'),
(64, '23.30', '62.00', '2020-01-09 09:37:47.214492'),
(65, '23.30', '61.00', '2020-01-09 09:38:01.999539'),
(66, '23.40', '61.00', '2020-01-09 09:38:16.637500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unitkerja`
--

CREATE TABLE `tb_unitkerja` (
  `id_unit` int(11) NOT NULL,
  `nm_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_unitkerja`
--

INSERT INTO `tb_unitkerja` (`id_unit`, `nm_unit`) VALUES
(1, 'Sistem Informasi'),
(2, 'Laboratorium Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `Id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto_user` text NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`Id_user`, `username`, `password`, `nama`, `no_hp`, `foto_user`, `alamat`) VALUES
(1, 'admin', 'admin', 'Admin', '082314941337', '', 'Tegal'),
(2, 'aziz', 'b85dc795ba17cb243ab156f8c52124e1', 'Mohamad Abdul Aziz', '082314941337', '49c89f8f2d581d9b9fdfa29eec9804c9.jpg', 'Brebes'),
(3, 'abdil', 'd346a95b0f05fc044370d3b1d76172e0', 'Fauzi Abdillah Amron', '08815235890', '4c63eae144a165c2cd4a94cc612db46e.jpg', 'Tegal Wangi'),
(4, 'sintia', '08bf4186f0ba77b6734a3ecbb7cdfad2', 'Sintia Ade Safitri', '0812456789123', '7e0998a71119ff44c0123c7c93ed9285.JPG', 'Kalinyamat Wetan'),
(5, 'dodi', 'dc82a0e0107a31ba5d137a47ab09a26b', 'dodi', '08815235890', 'a5d0fbd09af3baaa426e748a5b87bed8.png', 'brebes'),
(6, 'abc', '900150983cd24fb0d6963f7d28e17f72', 'abc', '082314941337', '458fab2599120772028d7c3de7173836.jpg', 'bbbbb');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wajah`
--

CREATE TABLE `tb_wajah` (
  `Id` int(10) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `x` int(10) NOT NULL,
  `y` int(10) NOT NULL,
  `z` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wajah`
--

INSERT INTO `tb_wajah` (`Id`, `Id_user`, `nama`, `unit`, `tanggal`, `x`, `y`, `z`) VALUES
(1, 1, 'admin', 'sistem informasi', '06/11/2019', 14, 15, 16),
(2, 1, 'Mohamad Abdul Aziz', 'Labkom', '06/11/2019', 233, 123, 543),
(3, 1, 'Fauzi Abdillah Amron', 'IT', '06/11/2019', 233, 154, 543),
(4, 2, 'Sintia Ade Safitri', 'BAU', '06/11/2019', 233, 154, 543),
(8, 2, 'Abdil', 'IT D', '2019-12-14', 122, 342, 123),
(9, 3, 'dodi', 'IT', '2019-12-18', 133, 123, 566),
(10, 0, 'abc', 'IT', '2020-01-12', 133, 123, 543);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_suhu`
--
ALTER TABLE `tb_suhu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_unitkerja`
--
ALTER TABLE `tb_unitkerja`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`Id_user`);

--
-- Indeks untuk tabel `tb_wajah`
--
ALTER TABLE `tb_wajah`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_suhu`
--
ALTER TABLE `tb_suhu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `tb_unitkerja`
--
ALTER TABLE `tb_unitkerja`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `Id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_wajah`
--
ALTER TABLE `tb_wajah`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

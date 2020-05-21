-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2020 pada 09.35
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surveilans`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(2) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `apd`
--

CREATE TABLE `apd` (
  `id_instansi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `psbb` varchar(10) NOT NULL,
  `koordinasi` varchar(10) NOT NULL,
  `pelatihan` varchar(10) NOT NULL,
  `kasus` varchar(10) NOT NULL,
  `rapid` varchar(10) NOT NULL,
  `swab` varchar(10) NOT NULL,
  `isolasi` varchar(10) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `sanitizer` varchar(10) NOT NULL,
  `thermo` varchar(10) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `bantuan` varchar(10) NOT NULL,
  `kebutuhan` varchar(255) NOT NULL,
  `dokter` int(11) DEFAULT 0,
  `laboran` int(11) DEFAULT 0,
  `perawat` int(11) DEFAULT 0,
  `driver` int(11) DEFAULT 0,
  `cs` int(11) DEFAULT 0,
  `bedah` int(11) DEFAULT 0,
  `n95` int(11) DEFAULT 0,
  `faceshield` int(11) DEFAULT 0,
  `goggle` int(11) DEFAULT 0,
  `sarungtangan` int(11) DEFAULT 0,
  `hazmat` int(11) DEFAULT 0,
  `caps` int(11) DEFAULT 0,
  `cover` int(11) DEFAULT 0,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `dekon` int(11) NOT NULL DEFAULT 0,
  `headbox` int(11) NOT NULL DEFAULT 0,
  `security` int(11) NOT NULL DEFAULT 0,
  `bilik_swab` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apd`
--

INSERT INTO `apd` (`id_instansi`, `nama`, `jenis`, `alamat`, `kontak`, `daerah`, `psbb`, `koordinasi`, `pelatihan`, `kasus`, `rapid`, `swab`, `isolasi`, `kondisi`, `sanitizer`, `thermo`, `asal`, `bantuan`, `kebutuhan`, `dokter`, `laboran`, `perawat`, `driver`, `cs`, `bedah`, `n95`, `faceshield`, `goggle`, `sarungtangan`, `hazmat`, `caps`, `cover`, `date`, `dekon`, `headbox`, `security`, `bilik_swab`) VALUES
(4, 'Tangguh Tri Prasetyo', 'Faskes Tingkat 3', 'dwa', 'tangguh.astank@gmail.com', 'semarang', 'Tidak', 'Belum', 'Belum', 'Belum', 'Tidak', 'Tidak', 'Tidak', 'lumayan', 'Cukup', 'Tidak', 'Instansi / Mandiri', 'Belum', 'dwa', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-21', 0, 0, 0, 0),
(5, 'tes insttansi', 'Faskes Tingkat 3', 'ronggolawe', 'tangguhtp@student.ce.undip.ac.id', 'semarang', 'Tidak', 'Sudah', 'Tidak Tahu', 'Belum', 'Tidak', 'Ya', 'Tidak', 'lumayan', 'Kurang', 'Ya', 'Hibah Swasta', 'Pernah', 'dwa', 0, 0, 0, 0, 6, 5, 8, 5, 7, 9, 11, 0, 0, '2020-05-21', 0, 0, 0, 0),
(6, 'tangguh', 'Faskes Tingkat 2', 'ronggolawe', 'tangguhtp@student.ce.undip.ac.id', 'semarang', 'Tidak', 'Sudah', 'Sudah', 'Belum', 'Ya', 'Ya', 'Ya', 'lumayan', 'Cukup', 'Ya', 'Hibah Pemerintah', 'Belum', 'nganu', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-05-21', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `deteksi`
--

CREATE TABLE `deteksi` (
  `id_deteksi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hp` int(11) NOT NULL,
  `kerabat` int(11) NOT NULL,
  `tinggal` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `skor` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `deteksi`
--

INSERT INTO `deteksi` (`id_deteksi`, `nama`, `gender`, `ttl`, `email`, `hp`, `kerabat`, `tinggal`, `alamat`, `asal`, `pendidikan`, `pekerjaan`, `skor`, `date`) VALUES
(1, '', 'laki', 'dwad', 'tangguhtp@student.ce.undip.ac.id', 23243243, 2147483647, 'Kontrakan', 'ronggolawe', 'Dari Masjid', 'SMA', 'Dokter', 10, '2020-05-20'),
(2, '', 'laki', 'dwad', 'tangguhtp@student.ce.undip.ac.id', 23243243, 2147483647, 'Kontrakan', 'ronggolawe', 'Dari Masjid', 'SMA', 'Dokter', 9, '2020-05-20'),
(3, '', 'laki', 'dwad', 'tangguhtp@student.ce.undip.ac.id', 23243243, 2147483647, 'Kontrakan', 'ronggolawe', 'Dari Masjid', 'SMA', 'Dokter', 9, '2020-05-20'),
(4, '', 'laki', 'dwad', 'tangguhtp@student.ce.undip.ac.id', 23243243, 2147483647, 'Kontrakan', 'ronggolawe', 'Dari Masjid', 'SMA', 'Dokter', 13, '2020-05-20'),
(5, '', 'laki', 'dwad', 'tangguhtp@student.ce.undip.ac.id', 23243243, 2147483647, 'Kontrakan', 'ronggolawe', 'Dari Masjid', 'SMA', 'Dokter', 20, '2020-05-20'),
(6, 'tege', 'laki', 'dwad', 'tangguhtp@student.ce.undip.ac.id', 23243243, 2147483647, 'Kontrakan', 'ronggolawe', 'Dari Masjid', 'SMA', 'Dokter', 20, '2020-05-20'),
(7, 'Tangguh aja', 'laki', 'S1-Cyber Securiedit', 'tangguh.astank@gmail.com', 23243243, 2147483647, 'Rumah_Sendiri', 'jakarta', 'Dari Masjid', 'SMP', 'lainnya', 23, '2020-05-20'),
(8, 'Tangguh aja', 'laki', 'S1-Cyber Securiedit', 'tangguh.astank@gmail.com', 23243243, 2147483647, 'Rumah_Sendiri', 'jakarta', 'Dari Masjid', 'SMP', 'lainnya', 23, '2020-05-20'),
(9, 'Tangguh aja', 'laki', 'S1-Cyber Securiedit', 'tangguh.astank@gmail.com', 23243243, 2147483647, 'Rumah_Sendiri', 'jakarta', 'Dari Masjid', 'SMP', 'lainnya', 23, '2020-05-20'),
(10, 'Tangguh aja', 'laki', 'S1-Cyber Securiedit', 'tangguh.astank@gmail.com', 23243243, 2147483647, 'Rumah_Sendiri', 'jakarta', 'Dari Masjid', 'SMP', 'lainnya', 23, '2020-05-20'),
(11, 'tes dete', '', '', 'tangguhtp@student.ce.undip.ac.id', 0, 2147483647, '', '', '', '', '', 0, '2020-05-20'),
(12, 'tes dete', 'laki', 'S1-Cyber Securiedit', 'tangguhtp@student.ce.undip.ac.id', 23243243, 2147483647, 'Rumah_Sendiri', 'surabaya', 'Dari Masjid', 'SMA', 'Petani', 26, '2020-05-20'),
(13, 'tes insttansi', 'laki', 'S1-Cyber Securiedit', 'tangguhtp@student.ce.undip.ac.id', 23243243, 2147483647, 'Kontrakan', 'semarang', 'Dari Masjid', 'SD', 'Polisi', 24, '2020-05-20'),
(14, 'Tangguh Tri Prasetyo', 'laki', 'Semarang, 2 Mei 1998', 'tangguhtp@student.ce.undip.ac.id', 2147483647, 2147483647, '', '', 'Semarang', 'D1_D2_D3', 'Dosen', 24, '2020-05-20'),
(15, 'tes insttansi', 'perempuan', 'S1-Cyber Securiedit', 'tangguh.astank@gmail.com', 23243243, 2147483647, 'Rumah_Sendiri', 'jakarta', 'Dari Masjid', 'D1_D2_D3', 'BUMN', 22, '2020-05-20'),
(16, 'Tangguh Tri Prasetyo', 'laki', '1998-02-01', 'tangguhtp@student.ce.undip.ac.id', 2147483647, 2147483647, 'Lainnya', 'semarang', 'Semarang', 'S3', 'BUMN', 23, '2020-05-21'),
(17, 'Krismiatun', 'perempuan', '1970-01-22', 'krismiatunyoyok@gmail.com', 2147483647, 2147483647, 'Rumah_Sendiri', 'Bumi Wanamukti Blok J2/27', 'Semarang', 'D1_D2_D3', 'olshop', 21, '2020-05-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecemasan`
--

CREATE TABLE `kecemasan` (
  `id_kecemasan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `tempat_kerja` varchar(255) DEFAULT NULL,
  `wfh` varchar(255) NOT NULL,
  `kesulitan` varchar(255) NOT NULL,
  `skor` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecemasan`
--

INSERT INTO `kecemasan` (`id_kecemasan`, `nama`, `email`, `ttl`, `hp`, `posisi`, `wilayah`, `pekerjaan`, `tempat_kerja`, `wfh`, `kesulitan`, `skor`, `date`) VALUES
(37, 'Tangguh aja', 'tangguhtp@student.ce.undip.ac.id', '2', '082138273695', 'semarang', 'lockdown', 'Dosen', 'Semarang', 'Iya', 'kendala jaringan,sulit berkoordinasi,apaya', 14, '2020-05-21'),
(38, 'tes insttansi', 'tangguh.astank@gmail.com', '34', '085789746003', 'semarang', 'pkm', 'Mengurus Rumah Tangga', 'Semarang', 'Tidak', 'kendala jaringan,', 38, '2020-05-21'),
(39, 'roni', 'tangguhtp@student.ce.undip.ac.id', '1998-05-02', '082138273695', 'semarang', 'pkm', 'Mahasiswa', 'Semarang', 'Tidak', 'sulit menentukan,', 28, '2020-05-21'),
(40, 'krismiatun', 'krismiatunyoyok@gmail.com', '1970-01-22', '08221573621', 'semarang', 'psbb', 'Mengurus Rumah Tangga', 'Semarang', 'Iya', '', 39, '2020-05-21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `apd`
--
ALTER TABLE `apd`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indeks untuk tabel `deteksi`
--
ALTER TABLE `deteksi`
  ADD PRIMARY KEY (`id_deteksi`);

--
-- Indeks untuk tabel `kecemasan`
--
ALTER TABLE `kecemasan`
  ADD PRIMARY KEY (`id_kecemasan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `apd`
--
ALTER TABLE `apd`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `deteksi`
--
ALTER TABLE `deteksi`
  MODIFY `id_deteksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kecemasan`
--
ALTER TABLE `kecemasan`
  MODIFY `id_kecemasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mar 2023 pada 15.18
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_testing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) NOT NULL,
  `NRP` varchar(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Jurusan` varchar(25) NOT NULL,
  `Email_Student` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `No_HP` varchar(50) NOT NULL,
  `Asal_SMA` varchar(100) NOT NULL,
  `Matakuliahfav` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `NRP`, `Nama`, `Jenis_Kelamin`, `Jurusan`, `Email_Student`, `Alamat`, `No_HP`, `Asal_SMA`, `Matakuliahfav`) VALUES
(10, '3122500001', 'Ade Hafis Rabbani', 'Laki-laki', 'Teknik Informatika', 'hafis@it.student.pens.ac.id', 'Gresik', '085830556606', 'SMKN 1 Cerme', 'Basis Data'),
(11, '3122500002', 'Nadila Aulya Salsabila Mirdianti ', 'Perempuan', 'Teknik Informatika', 'nadila@it.student.pens.ac.id', 'Kediri', '082335995643', 'SMAN 1 Patianrowo', 'Algoritma dan Struktur Data'),
(12, '3122500003', 'Denti Widayanti', 'Perempuan', 'Teknik Informatika', 'denti@it.student.pens.ac.id', 'Sidoarjo', '089523304487', 'SMAN 3 Taruna Angkasa', 'Praktek Algoritma dan Struktur Data'),
(13, '3122500004', 'Zahrotul Hidayah', 'Perempuan', 'Teknik Informatika', 'zahro@it.student.pens.ac.id', 'Lamongan', '085790342735', 'SMA NEGERI 1 BABAT ', 'Workshop Pemrograman Web'),
(14, '3122500005', 'Gede Hari Yoga Nanda', 'Laki-laki', 'Teknik Informatika', 'gede@it.student.pens.ac.id', 'Tulungagung', '083135368657', 'SMAN 1 Boyolangu', 'Praktek Sistem Operasi'),
(15, '3122500006', 'Virgiawan Ivada Raksi Sekar Wibana', 'Laki-laki', 'Teknik Informatika', 'virgiawan@it.student.pens.ac.id', 'Tuban', '085236113808', 'SMAN JATIROGO', 'Praktek Basis Data'),
(16, '3122500007', 'Irfan Akmal Ardianto', 'Laki-laki', 'Teknik Informatika', 'irfan@it.student.pens.ac.id', 'Palembang', '081274340490', 'SMA Plus Negeri 17 Palembang', 'Matematika'),
(17, '3122500008', 'Arsyita Devanaya Arianto', 'Perempuan', 'Teknik Informatika', 'arsyita@it.student.pens.ac.id', 'Surabaya', '085171620044', 'SMAN 17 Surabaya', 'Agama'),
(18, '3122500009', 'Mirta Chadhirotin Nachlah', 'Perempuan', 'Teknik Informatika', 'mirta@it.student.pens.ac.id', 'Gresik', '089603443665', 'SMAN 1 Manyar', 'Kewarganegaraan'),
(19, '3122500010', 'Leody Zelvon Herliansa', 'Laki-laki', 'Teknik Informatika', 'leody@it.student.pens.ac.id', 'Tuban', '081331571335', 'SMAN 2 Tuban', 'Sistem Operasi\r\n'),
(20, '3122500011', 'Ali Azhar Pradana Braveian', 'Laki-laki', 'Teknik Informatika', 'ali@it.student.pens.ac.id', 'Surabaya', '0895360141561', 'SMAN 12 Surabaya ', 'Basis Data\r\n'),
(21, '3122500012', 'Awal Raya', 'Laki-laki', 'Teknik Informatika', 'awal@it.student.pens.ac.id', 'Kediri', '081359200521', 'SMAN 1 Kediri', 'ALgoritma dan Struktur Data'),
(22, '3122500013', 'Mahendra Khibrah Rabbani Sayyid', 'Laki-laki', 'Teknik Informatika', 'mahen@it.student.pens.ac.id', 'Surabaya', '08817934297', 'SMAN 5 Surabaya', 'Algoritma dan Struktur Data'),
(23, '3122500014', 'Muhammad Iqbal Rahmatullah', 'Laki-laki', 'Teknik Informatika', 'iqbal@it.student.pens.ac.id', 'Sidoarjo', '081231685459', 'SMA Muhammadiyah 3 Tulangan ', 'Praktek Algoritma dan Struktur Data'),
(24, '3122500015', 'Mayada Azizah', 'Perempuan', 'Teknik Informatika', 'mayada@it.student.pens.ac.id', 'Pasuruan', '081359049794', 'SMAN 1 Pandaan', 'Workshop Pemrograman Web'),
(25, '3122500016', 'Gandi Rukmaning Ayu', 'Perempuan', 'Teknik Informatika', 'gandi@it.student.pens.ac.id', 'Lumajang', '083857864688', 'SMAN 3 LUMAJANG', 'Praktek Sistem Operasi'),
(26, '3122500017', 'Handaru Dwiki Yuntara', 'Laki-laki', 'Teknik Informatika', 'handaru@it.student.pens.ac.id', 'Trenggalek', '083896168416', 'SMA Negeri 1 Trenggalek', 'Praktek Basis Data'),
(27, '3122500018', 'Adam Rasyid Nurmuhammad', 'Laki-laki', 'Teknik Informatika', 'adam@it.student.pens.ac.id', 'Surabaya', '08996086746', 'SMAN 1 SURABAYA', 'Matematika'),
(28, '3122500019', 'Akmal Zidani Fikri', 'Laki-laki', 'Teknik Informatika', 'akmal@it.student.pens.ac.id', 'Surabaya', '087703133145', 'SMA Negeri 2 Surabaya', 'Agama'),
(29, '3122500020', 'Adinda Zahra Qariru', 'Perempuan', 'Teknik Informatika', 'adinda@it.student.pens.ac.id', 'Malang', '081297901397', 'SMA Thursina IIBS', 'Kewarganegaraan'),
(30, '3122500021', 'Mohammad Ilham Ramadani', 'Laki-laki', 'Teknik Informatika', 'ilham@it.student.pens.ac.id', 'Surabaya', '089699609041', 'SMAN 10 Surabaya', 'Sistem Operasi'),
(31, '3122500022', 'Virginia Faiqoh', 'Perempuan', 'Teknik Informatika', 'virginia@it.student.pens.ac.id', 'Sidoarjo', '089515888419', 'SMKN 2 Buduran Sidoarjo ', 'Basis Data'),
(32, '3122500023', 'Masyitha Fahra Nabila', 'Perempuan', 'Teknik Informatika', 'masyitha@it.student.pens.ac.id', 'Tuban', '081216756463', 'SMAN 1 Tuban', 'Algoritma dan Struktur Data'),
(33, '3122500024', 'Muhamad Reza Muktasib', 'Laki-laki', 'Teknik Informatika', 'reza@it.student.pens.ac.id', 'Surabaya', '085649915406', 'SMAN 8 Surabaya', 'Praktek Algoritma dan Struktur Data'),
(34, '3122500025', 'Adira Callysta', 'Perempuan', 'Teknik Informatika', 'adira@it.student.pens.ac.id', 'Mojokerto', '085716039986', 'SMAN 3 Mojokerto', 'Workshop Pemrograman Web'),
(35, '3122500026', 'Shofira Izza Nurrohmah ', 'Perempuan', 'Teknik Informatika', 'shofira@it.student.pens.ac.id', 'Ngawi', '085608295984', 'MAN 2 Kota Madiun ', 'Praktek Sistem Operasi'),
(36, '3122500027', 'Rifqi Rayita Dhiyaulhaq', 'Laki-laki', 'Teknik Informatika', 'rifqi@it.student.pens.ac.id', 'Ponorogo', '085746335238', 'SMAN 1 Ponorogo', 'Praktek Basis Data'),
(37, '3122500028', 'Bagus Bimo Prakoso', 'Laki-laki', 'Teknik Informatika', 'bagus@it.student.pens.ac.id', 'Tulungagung', '085645494404', 'SMAN 1 Boyolangu', 'Matematika'),
(38, '3122500030', 'Muhammad Syahrul Ramadhan ', 'Laki-laki', 'Teknik Informatika', 'syahrul@it.student.pens.ac.id', 'Sidoarjo', '08986367472', 'SMA Muhammadiyah 3 Tulangan ', 'Agama');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

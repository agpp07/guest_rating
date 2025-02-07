-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2025 pada 09.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fujiyama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback_penilaian`
--

CREATE TABLE `feedback_penilaian` (
  `id` int(11) NOT NULL,
  `keramahan` enum('75','80','85','90','95') NOT NULL,
  `kebersihan_service` enum('75','80','85','90','95') NOT NULL,
  `ketepatan_waktu_pelayanan` enum('75','80','85','90','95') NOT NULL,
  `knowledge` enum('75','80','85','90','95') NOT NULL,
  `komentar_service` text DEFAULT NULL,
  `kebersihan_alat` enum('75','80','85','90','95') NOT NULL,
  `tampilan_makanan` enum('75','80','85','90','95') NOT NULL,
  `waktu_memasak` enum('75','80','85','90','95') NOT NULL,
  `cita_rasa` enum('75','80','85','90','95') NOT NULL,
  `teknik_memasak` enum('75','80','85','90','95') NOT NULL,
  `penyajian` enum('75','80','85','90','95') NOT NULL,
  `kekompakan_tim` enum('75','80','85','90','95') NOT NULL,
  `komentar_food` text DEFAULT NULL,
  `dekorasi` enum('75','80','85','90','95') NOT NULL,
  `hiburan` enum('75','80','85','90','95') NOT NULL,
  `acara` enum('75','80','85','90','95') NOT NULL,
  `komentar_mice` text DEFAULT NULL,
  `tampilan_aplikasi` enum('75','80','85','90','95') NOT NULL,
  `fungsi_sistem` enum('75','80','85','90','95') NOT NULL,
  `komentar_rpl` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `feedback_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `feedback_penilaian`
--

INSERT INTO `feedback_penilaian` (`id`, `keramahan`, `kebersihan_service`, `ketepatan_waktu_pelayanan`, `knowledge`, `komentar_service`, `kebersihan_alat`, `tampilan_makanan`, `waktu_memasak`, `cita_rasa`, `teknik_memasak`, `penyajian`, `kekompakan_tim`, `komentar_food`, `dekorasi`, `hiburan`, `acara`, `komentar_mice`, `tampilan_aplikasi`, `fungsi_sistem`, `komentar_rpl`, `created_at`, `feedback_data`) VALUES
(1, '85', '85', '80', '85', 'adaa', '75', '75', '75', '75', '75', '75', '75', NULL, '75', '75', '75', NULL, '75', '75', NULL, '2025-02-04 10:58:23', NULL),
(2, '85', '85', '80', '85', 'adaa', '75', '75', '75', '75', '75', '75', '75', NULL, '75', '75', '75', NULL, '75', '75', NULL, '2025-02-04 11:10:36', NULL),
(3, '85', '85', '80', '85', 'adaa', '75', '75', '75', '75', '75', '75', '75', NULL, '75', '75', '75', NULL, '75', '75', NULL, '2025-02-04 11:10:52', NULL),
(4, '85', '85', '85', '90', 'aaaaaaaaaaaaaaa', '75', '75', '75', '75', '75', '75', '75', NULL, '75', '75', '75', NULL, '75', '75', NULL, '2025-02-04 11:11:39', NULL),
(5, '85', '85', '85', '90', 'aaaaaaaaaaaaaaa', '75', '75', '75', '75', '75', '75', '75', NULL, '75', '75', '75', NULL, '75', '75', NULL, '2025-02-04 11:12:30', NULL),
(78, '95', '95', '95', '95', 'ok', '95', '95', '95', '95', '95', '95', '75', 'oke', '95', '95', '95', 'okee', '95', '95', 'okeeee', '2025-02-04 13:05:56', NULL),
(79, '95', '90', '90', '95', 'oke', '95', '90', '90', '95', '95', '95', '75', 'ok', '90', '95', '95', 'ok', '95', '95', 'ok', '2025-02-05 00:22:29', NULL),
(80, '75', '75', '75', '75', 'ok', '75', '75', '75', '75', '75', '75', '75', 'ok', '75', '75', '75', 'okk', '75', '75', 'okk', '2025-02-05 00:28:30', NULL),
(81, '75', '75', '75', '75', 'a', '75', '75', '75', '75', '75', '75', '75', 's', '75', '75', '75', 'd', '75', '75', 'f', '2025-02-05 00:29:11', NULL),
(82, '75', '75', '75', '75', '', '75', '75', '75', '75', '75', '75', '75', '', '75', '75', '75', '', '75', '75', '', '2025-02-05 00:32:45', NULL),
(83, '75', '75', '75', '75', '', '75', '75', '75', '75', '75', '75', '75', '', '75', '75', '75', '', '75', '75', '', '2025-02-05 01:07:35', NULL),
(84, '', '', '', '', '', '75', '75', '75', '75', '75', '75', '75', '', '75', '75', '75', '', '75', '75', '', '2025-02-05 01:10:33', NULL),
(85, '75', '75', '75', '75', '', '75', '75', '75', '75', '75', '75', '75', '', '75', '75', '75', '', '75', '75', '', '2025-02-05 02:10:36', NULL),
(86, '75', '75', '75', '75', '', '75', '75', '75', '75', '75', '75', '75', '', '75', '75', '75', '', '75', '75', '', '2025-02-05 02:39:53', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `attendance` enum('belum','hadir','tidak_hadir') NOT NULL DEFAULT 'belum',
  `konfirmasi_kehadiran` enum('belum','hadir') DEFAULT 'belum',
  `nama_lengkap` varchar(100) NOT NULL,
  `instansi` varchar(100) DEFAULT 'Tidak Diketahui'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`id`, `attendance`, `konfirmasi_kehadiran`, `nama_lengkap`, `instansi`) VALUES
(1, 'belum', 'belum', 'Bayu', 'PT G-Smart Solusion'),
(2, 'belum', 'belum', 'Direktur atau Manager', 'Finger Spot'),
(3, 'belum', 'belum', 'Bernard', 'PKS Komputer Surabaya'),
(4, 'belum', 'belum', 'Achmad Rizky', 'Hotel Grand Mercure Surabaya'),
(5, 'belum', 'belum', 'Sigit Purnomo', 'Unilever'),
(6, 'belum', 'belum', 'Orang Tua Firlia', 'Orang Tua kelas XII'),
(7, 'belum', 'belum', 'Hartono', 'Waringin'),
(8, 'belum', 'belum', 'Yunanto', 'G-Suites'),
(9, 'belum', 'belum', 'Nita', 'Alana Hotel'),
(10, 'belum', 'belum', 'Belum Ada 1', 'Tidak Diketahui'),
(11, 'belum', 'belum', 'Belum Ada 2', 'Tidak Diketahui'),
(12, 'belum', 'belum', 'Belum Ada 3', 'Tidak Diketahui'),
(13, 'belum', 'belum', 'Siswoyo', 'SMP Islam Maryam Surabaya'),
(14, 'belum', 'belum', 'Aisyah', 'SMP Islam Raden Paku'),
(15, 'belum', 'belum', 'Waka Humas', 'SMP Muhammadiyah 2'),
(16, 'belum', 'belum', 'Zaidahtul Aliyah', 'Kepala Sekolah SMP Daniswara'),
(17, 'belum', 'belum', 'Cantas Kartika', 'Kalab.PH'),
(18, 'belum', 'belum', 'Yunia Widiastuti', 'Kalab.TB'),
(19, 'belum', 'belum', 'Meita Istiqomah', 'Sekertaris Sekolah'),
(20, 'belum', 'belum', 'Abdullah Muhammad', 'Pembina OSIS'),
(100, 'hadir', 'belum', 'test', 'Tidak Diketahui'),
(102, 'belum', 'belum', 'Siswoyo', 'SMP Islam Maryam Surabaya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `feedback_penilaian`
--
ALTER TABLE `feedback_penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `feedback_penilaian`
--
ALTER TABLE `feedback_penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 02:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkmuara`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_agama`
--

CREATE TABLE `db_agama` (
  `id` int(11) NOT NULL,
  `agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_agama`
--

INSERT INTO `db_agama` (`id`, `agama`) VALUES
(1, 'Kristen'),
(2, 'Katholik'),
(3, 'Buddha'),
(4, 'Hindu'),
(5, 'Islam'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `db_document`
--

CREATE TABLE `db_document` (
  `id` int(11) NOT NULL,
  `naungan` text NOT NULL,
  `no_sk_pendirian` text NOT NULL,
  `tanggal_sk_pendirian` text NOT NULL,
  `no_sk_operasional` text NOT NULL,
  `tanggal_sk_operasional` text NOT NULL,
  `file_sk_operasional` text NOT NULL,
  `akreditasi` text NOT NULL,
  `no_sk_akreditas` text NOT NULL,
  `tanggal_sk_akreditas` text NOT NULL,
  `no_sertifikat_iso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_document`
--

INSERT INTO `db_document` (`id`, `naungan`, `no_sk_pendirian`, `tanggal_sk_pendirian`, `no_sk_operasional`, `tanggal_sk_operasional`, `file_sk_operasional`, `akreditasi`, `no_sk_akreditas`, `tanggal_sk_akreditas`, `no_sertifikat_iso`) VALUES
(1, 'Kementerian Pendidikan dan Kebudayaan', 'Kep.12/I01.A1/I/88', '1988-06-30', '7420/-1.851.78', '2014-06-26', '345590-831164-467784-131736725-1170028666.pdf', 'A', '906/BAN-SM/SK/2019', '2019-10-21', 'Belum Bersertifikat');

-- --------------------------------------------------------

--
-- Table structure for table `db_guru`
--

CREATE TABLE `db_guru` (
  `id` int(11) NOT NULL,
  `nama_guru` text NOT NULL,
  `matapelajaran` text NOT NULL,
  `kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_guru`
--

INSERT INTO `db_guru` (`id`, `nama_guru`, `matapelajaran`, `kelas`) VALUES
(1, 'Drs. Wawan Gunawan', 'Akuntansi Perusahaan Jasa', 'AKL'),
(2, 'Siti Zulfah, S.Pd', 'Akuntansi Perusahaan Dagang', 'AKL'),
(3, 'H. Moh. Hasyim, M.Pd', 'Pendidikan Agama Islam', 'AKL & OTKP'),
(4, 'Ana Mariati, S.Pd', 'Bahasa Inggris', 'AKL'),
(5, 'Srieheny Kania Dewi, S.Pd', 'Bahasa Inggris', 'OTKP'),
(6, 'Sri Utami, S.Pd', 'Matematika', 'AKL & OTKP'),
(7, 'Putri Melati, S.Pd', 'Bahasa Indonesia', 'AKL & OTKP'),
(8, 'H. Muhammad Rizal, S.Pd', 'Pendidikan Agama Islam', 'AKL & OTKP'),
(9, 'Fajar Sidiq Nur Setiawan, S.Pd', 'Penjasorkes', 'AKL & OTKP'),
(10, 'Tri Kusminingsih, S.Pd', 'IPA & Prakarya', 'AKL & OTKP'),
(11, 'Tutiek Lestari, S.Pd', 'Bahasa Indonesia', 'OTKP'),
(12, 'Suci Adiyani, S.Pd', 'Kearsipan', 'OTKP'),
(13, 'Sri Haryani, S.Pd', 'Matematika', 'OTKP'),
(14, 'Nurmantika, S.Pd', 'Orespondasi', 'OTKP'),
(15, 'Maulia Istiqomah, S.Pd', 'Ekonomi Dasar', 'OTKP'),
(16, 'Santi Purwati, S.Pd', 'Kepegawaian Perkantoran', 'OTKP'),
(17, 'Laras Surahmi, S.Pd', 'Bahasa Indonesia', 'AKL & OTKP');

-- --------------------------------------------------------

--
-- Table structure for table `db_isp`
--

CREATE TABLE `db_isp` (
  `id` int(11) NOT NULL,
  `namasekolah` text NOT NULL,
  `nspn` text NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kabupaten` text NOT NULL,
  `provinsi` text NOT NULL,
  `status_sekolah` text NOT NULL,
  `waktu_penyelenggaraan` text NOT NULL,
  `jenjang_pendidikan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_isp`
--

INSERT INTO `db_isp` (`id`, `namasekolah`, `nspn`, `alamat`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `status_sekolah`, `waktu_penyelenggaraan`, `jenjang_pendidikan`) VALUES
(1, 'SMK Muara Indonesia', '20103774', 'JL. CIPINANG MUARA 3 KAV PLN', '13420', 'Cipinang Muara', 'Kec. Jatinegara', 'Kota Jakarta Timur', 'Dki Jakarta', 'Swasta', '5 / Sehari Penuh hari', 'SMK');

-- --------------------------------------------------------

--
-- Table structure for table `db_jeniskelamin`
--

CREATE TABLE `db_jeniskelamin` (
  `id` int(11) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_jeniskelamin`
--

INSERT INTO `db_jeniskelamin` (`id`, `gender`) VALUES
(1, 'laki-laki'),
(2, 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `db_pekerjaan`
--

CREATE TABLE `db_pekerjaan` (
  `id` int(11) NOT NULL,
  `pekerjaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_pekerjaan`
--

INSERT INTO `db_pekerjaan` (`id`, `pekerjaan`) VALUES
(1, 'Arsitek'),
(2, 'Apoteker'),
(3, 'Akuntan'),
(4, 'Aktor'),
(5, 'Aktris'),
(6, 'Atlet'),
(7, 'Bidan'),
(8, 'Dokter'),
(9, 'Dosen'),
(10, 'Direktur'),
(11, 'Desainer'),
(12, 'Guru'),
(13, 'Hakim'),
(14, 'Jaksa'),
(15, 'Kasir'),
(16, 'Kondektur'),
(17, 'Chef'),
(18, 'Karyawan'),
(19, 'Masinis'),
(20, 'Model'),
(21, 'Nelayan'),
(22, 'Novelis'),
(23, 'Nahkoda'),
(24, 'Pegawai Negeri Sipil'),
(25, 'Penyanyi'),
(26, 'Pengacara'),
(27, 'Programmer'),
(28, 'Polisi'),
(29, 'Perawat'),
(30, 'Penerjemah'),
(31, 'Pilot'),
(32, 'Presiden'),
(33, 'Penari'),
(34, 'Pemadam Kebakaran'),
(35, 'Pelayan'),
(36, 'Petani'),
(37, 'Resepsionis'),
(38, 'Satpam'),
(39, 'Seniman'),
(40, 'Supir'),
(41, 'Sekretaris'),
(42, 'Tentara'),
(43, 'Video Editor'),
(44, 'Wartawan'),
(45, 'CEO'),
(46, 'Koordinator Pelayan Kesehatan'),
(47, 'Koordinator Manajemen Bakat'),
(48, 'Manajer Media Sosial'),
(49, 'User Experience Design'),
(50, 'Manajer Kampanye Politik Online'),
(51, 'Penulis Konten Web'),
(52, 'Konsultan Keberlanjutan'),
(53, 'Jurnalis Video'),
(54, 'Tukang Tambal Ban'),
(55, 'Pawang Hujan'),
(56, 'Tukang Tukar Duit'),
(57, 'Tukang Patri'),
(58, 'Tukang Parkir'),
(59, 'Tukang isi korek gas'),
(60, 'Joki 3 in 1'),
(61, 'Calo Tiket'),
(62, 'Jasa sol sepatu'),
(63, 'Penjual jamu gendong'),
(64, 'Pak ogah'),
(65, 'Ojek payung'),
(66, 'Jasa permak jins keliling'),
(67, 'Tukang urut'),
(68, 'Tukang Pangkas rambut'),
(69, 'Artifical Intelligence'),
(70, 'Self-Driving Car Engineer'),
(71, 'Data Scientist'),
(72, 'Cloud Architect'),
(73, 'Automation Engineer'),
(74, 'Mobile App Developer'),
(75, 'Social Media Officer'),
(76, 'Digital Strategist'),
(77, 'Community Manager'),
(78, 'Head of culture'),
(79, 'Podcast Producer'),
(80, 'Drone Operator'),
(81, 'Motion Graphic Designer'),
(82, 'Psychologist'),
(83, 'Generic Councelor'),
(84, 'Financial Techonology Analyst'),
(85, 'Copywriter'),
(86, 'Content Writer'),
(87, 'Ui/Ux Designer'),
(88, 'Selebgram'),
(89, 'Youtuber'),
(90, 'Blogger'),
(91, 'pramugari'),
(92, 'Pramusaji');

-- --------------------------------------------------------

--
-- Table structure for table `db_pendaftaran`
--

CREATE TABLE `db_pendaftaran` (
  `id` int(11) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nama_panggilan` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `agama` int(1) NOT NULL,
  `no_telepon` text NOT NULL,
  `nama_ayah` text NOT NULL,
  `ayah_bekerja_sebagai` text NOT NULL,
  `pendidikan_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `ibu_bekerja_sebagai` text NOT NULL,
  `pendidikan_ibu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `db_pendidikan`
--

CREATE TABLE `db_pendidikan` (
  `id` int(11) NOT NULL,
  `pendidikan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_pendidikan`
--

INSERT INTO `db_pendidikan` (`id`, `pendidikan`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'SMK'),
(5, 'D3'),
(6, 'S1'),
(7, 'S2'),
(8, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `db_provinsi`
--

CREATE TABLE `db_provinsi` (
  `id` int(11) NOT NULL,
  `daerah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_provinsi`
--

INSERT INTO `db_provinsi` (`id`, `daerah`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bengkulu'),
(8, 'Sumatra Selatan'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'Daerah Khusus Ibukota Jakarta'),
(13, 'Jawa Barat'),
(14, 'Jawa Tengah'),
(15, 'Daerah Istimewa Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Sulawesi Barat'),
(26, 'Sulawesi Selatan'),
(27, 'Sulawesi Tenggara'),
(28, 'Sulawesi Tengah'),
(29, 'Gorontalo'),
(30, 'Sulawesi Utara'),
(31, 'Maluku Utara'),
(32, 'Maluku'),
(33, 'Papua Barat'),
(34, 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `db_struktur`
--

CREATE TABLE `db_struktur` (
  `id` int(11) NOT NULL,
  `nama_anggota` text NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_struktur`
--

INSERT INTO `db_struktur` (`id`, `nama_anggota`, `jabatan`) VALUES
(1, 'H. Abidin Abdullah, SE', 'Ketua Yayasan'),
(2, 'Aryati W, S.Pd', 'Kepala Sekolah'),
(3, 'Hj. Eel Munawaroh, SE', 'Komite Sekolah'),
(4, 'Drs. Wawan Gunawan', 'Wakil Kepala Sekolah Bidang Akademik dan Hubungan Industri'),
(5, 'H. Moh. Hasyim, M.Pd', 'Wakil Kepala Sekolah Bidang Kesiswaan, Sarpras dan SDM'),
(6, 'Umi Nur Imamah, S.Sos', 'Kepala Tata usaha'),
(7, 'Siti Zulfah, S.Pd', 'Ketua Kompetensi Keahlian Akuntansi & Keuangan Lembaga'),
(8, 'Ana Mariati, S.Pd', 'Ketua Kompetensi Keahlian Otomatisasi & Tata Kelola Perkantoran'),
(9, 'Sri Utami, S.Pd', 'Koordinator Pembina OSIS'),
(10, 'Gami Arumhita, S.Psi', 'Koordinator BK dan BKK'),
(11, 'Eggy Nuraprilidhia, S.Pd', 'Kepala Perpustakaan'),
(12, 'Srieheny Kania Dewi, S.Pd', 'Kepala Lab Bahasa'),
(13, 'Rahayu Kencana Wati, S.Psi', 'Kepala Lab AKL'),
(14, 'Maulia Istiqomah, S.Pd', 'Kepala Lab OTKP');

-- --------------------------------------------------------

--
-- Table structure for table `r_admin`
--

CREATE TABLE `r_admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `r_admin`
--

INSERT INTO `r_admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_agama`
--
ALTER TABLE `db_agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_document`
--
ALTER TABLE `db_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_guru`
--
ALTER TABLE `db_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_isp`
--
ALTER TABLE `db_isp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_jeniskelamin`
--
ALTER TABLE `db_jeniskelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_pekerjaan`
--
ALTER TABLE `db_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_pendaftaran`
--
ALTER TABLE `db_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_pendidikan`
--
ALTER TABLE `db_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_provinsi`
--
ALTER TABLE `db_provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_struktur`
--
ALTER TABLE `db_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_admin`
--
ALTER TABLE `r_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_agama`
--
ALTER TABLE `db_agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `db_document`
--
ALTER TABLE `db_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_guru`
--
ALTER TABLE `db_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `db_isp`
--
ALTER TABLE `db_isp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_jeniskelamin`
--
ALTER TABLE `db_jeniskelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_pekerjaan`
--
ALTER TABLE `db_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `db_pendaftaran`
--
ALTER TABLE `db_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `db_pendidikan`
--
ALTER TABLE `db_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_provinsi`
--
ALTER TABLE `db_provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `db_struktur`
--
ALTER TABLE `db_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `r_admin`
--
ALTER TABLE `r_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

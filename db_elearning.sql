-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 03:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-11-03-083753', 'App\\Database\\Migrations\\CreateUser', 'default', 'App', 1699070179, 1),
(2, '2023-11-04-021221', 'App\\Database\\Migrations\\CreateSiswa', 'default', 'App', 1699070179, 1),
(3, '2023-11-04-022649', 'App\\Database\\Migrations\\CreateKelas', 'default', 'App', 1699070179, 1),
(4, '2023-11-04-023540', 'App\\Database\\Migrations\\CreateJurusan', 'default', 'App', 1699070179, 1),
(5, '2023-11-04-041404', 'App\\Database\\Migrations\\AddForeignKeys', 'default', 'App', 1699071426, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(10) NOT NULL,
  `nuptk` int(10) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mapel_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nuptk`, `nama_depan`, `nama_belakang`, `password`, `mapel_id`) VALUES
(3, 11223344, 'Fahri', 'Anggara S.pd', '321', 5),
(5, 111123, 'Sultan', 'Jordy Priadi', '321', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `nama_jurusan`) VALUES
(1, 'Rekayasa Perangkat Lunak'),
(2, 'Multimedia'),
(3, 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(10) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `artikel_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `nama_kegiatan`, `gambar`, `artikel_kegiatan`) VALUES
(1, 'Peringatan Hari guru', '1699873588_08d545f547b40bdbb200.jpg', '<p>Pada tanggal 11 November telah di laksanakan hari guru yang diperingati oleh para siswa sekolah generasi madani, kegiatan ini bertujuan untuk memberikan penghargaan kepada guru - gutu yang sudah mengajar mereka, banyak sekali acara seperti menyanyikan lagu guru, membarikan hadiah ke guru, lalu ber doa bersama</p>'),
(3, 'Tournament Futsal ', '1699949037_4e4855574f2a4cfe77a8.jpg', 'Telah di adakan turnamen futsal antar sekolah, bertempat di smk generasi madani pada tanggal 8 december 2023, beberapa sekolah tertarik untuk mengikuti turnamen ini karena hadiah yang cukup besar, ada sekitar 12sekolah yang sudah mendaftarkan team nya untuk berlaga pada turnamen ini.'),
(4, 'Seminar Python', '1699949310_7debb72f4c99f358e0be.jpg', 'Pada tanggal 9 november 2023, smk generasi madani menggelar seminar bahasa pemrograman python, dimana seminar tersebut berisi pengenalan python sejarah python dan cara penggunaan, seminar ini sangat penting bagi siswa yang mengambil jurusan Rekayasa Perangkat Lunak karena dengan seminar ini mereka akan ada gambaran bagaimana cara menggunakan bahasa pemrograman python yang baik dan benar.'),
(5, 'Workshop Python', '1699872779_06f14494cb6c7e6fb317.png', 'Sebelumnya sekolah kita telah mengadakan acara seminar python, selanjutnya pada tanggal 12 november 2023, kita akan mengadakan workshop python, dimana workshop tersebut akan memberikan pelajaran tentang bagaimana menginstall bahasa python, variable, syntax penulisan kode yang benar dan baik, dan setelah workshop selesai akan di berikan e-sertifikat, pendaftaraan hingga tanggal 11 november 2023, kontak 08954983928 untuk pendaftaran!!!');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jurusan_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `kelas`, `jurusan_id`) VALUES
(3, '10.A.', 1),
(4, '10.B.', 1),
(8, '10.C.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id` int(10) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id`, `nama_mapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Matematika'),
(3, 'Bahasa Inggris'),
(4, 'Struktur Data'),
(5, 'Bahasa Arab');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` int(10) NOT NULL,
  `siswa_id` int(10) NOT NULL,
  `mapel_id` int(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `siswa_id`, `mapel_id`, `nilai`) VALUES
(10, 7, 1, 80.9),
(14, 10, 5, 90),
(15, 6, 3, 10),
(16, 6, 1, 80),
(17, 6, 2, 70),
(18, 6, 4, 90),
(19, 6, 5, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(10) NOT NULL,
  `nis` varchar(255) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmpt_lahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kelas_id` int(10) UNSIGNED NOT NULL,
  `agama` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nis`, `nama_depan`, `nama_belakang`, `tgl_lahir`, `tmpt_lahir`, `alamat`, `kelas_id`, `agama`, `username`, `password`, `role`) VALUES
(6, '10220048', 'Ilham', 'Ramadan', '2023-11-11', 'Bogor', 'Dian Asri 2', 3, 'Islam', '10220044', '321', 'siswa'),
(7, '10220046', 'Fakhri', 'Akmal Fadillah', '2023-11-12', 'Bogor', 'Jl Cilodong Depok Aneh', 3, 'Buddha', '10220048', '123', 'siswa'),
(9, '10220004', 'Fahri', 'Anggara', '2023-11-12', 'Bogor', 'Jl Duren Sawangan', 3, 'Islam', '', 'siswa', ''),
(10, '10220040', 'Muhammad', 'Filah Fadillah', '2004-10-08', 'Bogor', 'Jl Citayem Macet Raya', 3, 'Islam', '', 'jipelpenyukabts', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama_depan`, `nama_belakang`, `username`, `password`, `email`, `role`) VALUES
(1, 'Ilham', 'Ramadan', 'ilham', '321', 'ilham@gmail.com', 'admin'),
(2, 'Mariska', 'Rahma', 'mariska', '321', 'mariska@gmail.com', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_id` (`mapel_id`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_kelas_ibfk_1` (`jurusan_id`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapel_id` (`mapel_id`),
  ADD KEY `siswa_id` (`siswa_id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_siswa_ibfk_1` (`kelas_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `tb_mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD CONSTRAINT `tb_kelas_ibfk_1` FOREIGN KEY (`jurusan_id`) REFERENCES `tb_jurusan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`mapel_id`) REFERENCES `tb_mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`siswa_id`) REFERENCES `tb_siswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD CONSTRAINT `tb_siswa_ibfk_1` FOREIGN KEY (`kelas_id`) REFERENCES `tb_kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

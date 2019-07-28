-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 09:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fascares`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dktr` int(11) NOT NULL,
  `nama_dktr` varchar(30) NOT NULL,
  `jk_dktr` varchar(15) NOT NULL,
  `id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dktr`, `nama_dktr`, `jk_dktr`, `id_fk`) VALUES
(1, 'Anastasya', 'Perempuan', 8),
(2, 'Rahman', 'Laki-Laki', 13),
(3, 'Ananta', 'Perempuan', 13),
(4, 'OKA', 'Perempuan', 10);

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id_fk` int(11) NOT NULL,
  `nama_fk` varchar(30) NOT NULL,
  `kategori_fk` varchar(30) NOT NULL,
  `telepon_fk` varchar(15) NOT NULL,
  `alamat_fk` varchar(40) NOT NULL,
  `kota_fk` varchar(20) NOT NULL,
  `longitude_fk` varchar(25) NOT NULL,
  `latitude_fk` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id_fk`, `nama_fk`, `kategori_fk`, `telepon_fk`, `alamat_fk`, `kota_fk`, `longitude_fk`, `latitude_fk`) VALUES
(7, 'Klinik Polres Bogor', 'Klinik Pratama', '021-87900167', 'Jl. Tegar Beriman', 'Kab Bogor', '106.8260555', '-6.4791363'),
(8, 'IF RS DR. H. MARZOEKI MAHDI', 'Apotek', '2518350658', 'JL. DR. SEMERU NO. 114', 'Bogor', '106.7786166', '-6.5816077'),
(9, 'IF RS MEDIKA DRAMAGA', 'Apotek', '2518308900', 'Jl. Raya Dramaga Km.7,3', 'Bogor', '106.7374761', '-6.571269'),
(10, 'Cisarua', 'Puskesmas', '0251-8254829', 'Jl. Raya Puncak KM 83 Desa TU', 'Kab Bogor', '106.9500163', '-6.6839261'),
(11, 'Sukamanah', 'Puskesmas', '0251-8240047', 'Jl. Raya Cikopo Selatan No. 29', 'Kab Bogor', '106.9171853', '-6.6838342'),
(12, 'Mulyaharja', 'Puskesmas', '0251-8416164', 'Jl. Cibereum No. 14', 'Bogor', '106.7785647', '-6.6466852'),
(13, 'Cipaku', 'Puskesmas', '0251-8348076', 'JL. Raya Cipaku No. 1', 'Bogor', '106.8088728', '-6.6306563'),
(14, 'drg. Magdalena Harahap', 'Dokter Gigi', '0812-8360', 'Jl. Kayu Manis No.17 Cirimekar Cibinong', 'Kab Bogor', '106.850198', '-6.471098'),
(15, 'Klinik Bogor Kidney Center', 'Klinik Utama', '0251-8321638', 'Jl. Raya Pajajaran No.41 Babakan Bogor T', 'Bogor', '106.8033542', '-6.5857228'),
(16, 'Klinik Mata Dr. Ainun Habibie', 'Klinik Utama', '0251-8321612', 'Jl. DR. Sumeru No.120A Menteng Bogor Bar', 'Bogor', '106.7767503', '-6.5804836'),
(17, 'dr. Marzuki', 'Dokter Praktik Perorangan', '0812-8877135', 'JL. Raya Cileungsi Jonggol KM 2', 'Kab Bogor', '106.7381889', '-6.4268281'),
(18, 'dr. Fayrus', 'Dokter Praktik Perorangan', '0859-20068006', 'JL Melati VII Blok C No. 92', 'Kab Bogor', '106.9621043', '-6.4084957'),
(19, 'dr Oki Kurniawan', 'Dokter Praktik Perorangan', '08153540787', 'JL. CIBURIAL INDAH NO. 3 BARAN', 'Bogor', '106.809369', '-6.6116128'),
(20, 'dr. Yurawisman', 'Dokter Praktik Perorangan', '08138814102', 'Tirtamas Residence Blok D/11', 'Bogor', '106.7814148', '-6.5626127'),
(21, 'drg. Yuniarto Budi Santosa', 'Dokter Gigi', '081380726161', 'Jl. Raya Cikaret II Pakansari Cibinong', 'Kab Bogor', '106.8599317', '-6.1674128'),
(22, 'Klinik Medika Prima', 'Klinik Pratama', '081370643042', 'Jl. Raya Ciomas No.290 Ciomas Rahayu', 'Kab Bogor', '106.7698443', '-6.6016949'),
(23, 'Klinik Chandra Medika', 'Klinik Pratama', '(021)8674685', 'Jl. Raya Narogong No.22 Tlajung Udik Klp', 'Kab Bogor', '106.9172579', '-6.4516046'),
(24, 'Kimia Farma Narogong', 'Apotek', '021 82483778', 'JL. Raya Narogong Pangkalan 8', 'Kab Bogor', '106.9065207', '-6.360765'),
(25, 'Apotek RSUD Cileungsi', 'Apotek', '(021)89934667', 'Jl.Raya Cileungsi-Jonggol Km10', 'Kab Bogor', '107.0463161', '-6.4335079'),
(26, 'Klinik Pertamedika Bogor', 'Klinik Pratama', '(0251)8363994', 'JL Pandawa Raya Blok A 1 No. 14 Wr Jambu', 'Bogor', '106.8111145', '-6.5698493'),
(27, 'Klinik Pratama Pakuan', 'Klinik Pratama', '(0251)8338806', 'Jl. Anggrek 1 Pakuan Bogor Selatan', 'Bogor', '106.8152715', '-6.6262779'),
(29, 'drg. Eka Wardana', 'Dokter Gigi', '082310046207', 'Jl. Ciomas Rimba Pasirmulya Bogor Baru', 'Bogor', '106.7752081', '-6.6012415');

--
-- Triggers `faskes`
--
DELIMITER $$
CREATE TRIGGER `deleteFaskesJadwal` BEFORE DELETE ON `faskes` FOR EACH ROW BEGIN
DELETE FROM jadwal_praktek
    WHERE id_fk = old.id_fk;
DELETE FROM dokter
WHERE id_fk=old.id_fk;
DELETE FROM jumlah_pegawai
WHERE id_fk=old.id_fk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_praktek`
--

CREATE TABLE `jadwal_praktek` (
  `id_jdwl` int(15) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam_buka` varchar(11) NOT NULL,
  `jam_tutup` varchar(11) NOT NULL,
  `id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_praktek`
--

INSERT INTO `jadwal_praktek` (`id_jdwl`, `hari`, `jam_buka`, `jam_tutup`, `id_fk`) VALUES
(3, 'Rabu', '08', '14', 7),
(4, 'Senin', '08', '14', 8),
(5, 'Senin', '08', '14', 13),
(6, 'Selasa', '08', '16', 13),
(7, 'Rabu', '08', '19', 13),
(8, 'Kamis', '08', '18', 13),
(9, 'Jumat', '08', '14', 13),
(10, 'Senin', '09', '16', 10);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelayanan`
--

CREATE TABLE `jenis_pelayanan` (
  `id_plyn` int(11) NOT NULL,
  `nama_plyn` varchar(50) NOT NULL,
  `id_rs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pelayanan`
--

INSERT INTO `jenis_pelayanan` (`id_plyn`, `nama_plyn`, `id_rs`) VALUES
(1, 'Pelayanan Medik Spesialis Penunjang Medik - Radiol', 1),
(2, 'Pelayanan Medik Spesiasdasdalis Penunjang Medik - ', 1),
(3, 'Pelayanan Medik Umum - Pelayanan Medik Dasar', 7),
(4, 'Pelayanan Medik Umum - Pelayanan Medik Gigi dan Mu', 7),
(5, 'Pelayanan Medik Spesialis Penunjang Medik - Rehabi', 7);

-- --------------------------------------------------------

--
-- Table structure for table `jumlah_pegawai`
--

CREATE TABLE `jumlah_pegawai` (
  `id_jml` int(11) NOT NULL,
  `profesi_pgw` varchar(25) NOT NULL,
  `jumlah_pgw` int(11) NOT NULL,
  `id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jumlah_pegawai`
--

INSERT INTO `jumlah_pegawai` (`id_jml`, `profesi_pgw`, `jumlah_pgw`, `id_fk`) VALUES
(1, 'Apoteker', 3, 8),
(2, 'Apoteker', 4, 13);

-- --------------------------------------------------------

--
-- Table structure for table `rumah_sakit`
--

CREATE TABLE `rumah_sakit` (
  `id_rs` int(11) NOT NULL,
  `nama_rs` varchar(30) NOT NULL,
  `kota_rs` varchar(20) NOT NULL,
  `alamat_rs` varchar(50) NOT NULL,
  `telepon_rs` varchar(15) NOT NULL,
  `longitude_rs` varchar(15) NOT NULL,
  `latitude_rs` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah_sakit`
--

INSERT INTO `rumah_sakit` (`id_rs`, `nama_rs`, `kota_rs`, `alamat_rs`, `telepon_rs`, `longitude_rs`, `latitude_rs`) VALUES
(1, 'RS Medika Dramaga', 'Bogor', 'Jalan Raya Dramaga No.KM 7,3 Margajaya Bogor Barat', '(0251) 8308900', '106.7374761', '-6.571269'),
(2, 'RS Melania', 'Bogor', 'Jl. Pahlawan No.95 Bondongan Bogor Selatan', '(0251) 8321196', '106.7981319', '-6.6114273'),
(3, 'RSUD Leuwiliang', 'Kab Bogor', 'Jl. Raya Leuwiliang - Bogor Cibeber I Leuwiliang', '(0251) 8643290', '106.6255321', '-6.5745733'),
(4, 'RS Citama', 'Kab Bogor', 'Jalan Raya Pabuaran No.52 Pabuaran Bojong Gede', '(021) 87985555', '106.7944217', '-6.4611527'),
(5, 'RS Islam Bogor', 'Bogor', 'Jalan Perdana Raya No.22 Kedung Badak Tanah Sereal', '(0251) 7558159', '106.7898822', '-6.5589487'),
(6, 'RSUD Cileungsi', 'Kab Bogor', 'Jl. Raya Jonggol - Cileungsi No.KM', '(021) 89934667', '106.8450752', '-6.4335079'),
(7, 'RS Azra Bogor', 'Bogor', 'Jl. Raya Pajajaran No.219 Bantarjati Bogor Utara', '(0251) 8318456', '106.8053118', '-6.5794651'),
(8, 'RSIA Assalam', 'Kab Bogor', 'Jalan Raya Bogor KM. 46,7 Nanggewer Mekar Cibinong', '(021) 8753724', '106,8412531', '-6,5001505');

--
-- Triggers `rumah_sakit`
--
DELIMITER $$
CREATE TRIGGER `deleteRSsarana` BEFORE DELETE ON `rumah_sakit` FOR EACH ROW BEGIN
DELETE FROM sarana_faskes
WHERE id_rs=old.id_rs;
DELETE FROM tempat_tidur
WHERE id_rs=old.id_rs;
DELETE FROM jenis_pelayanan
WHERE id_rs=old.id_rs;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sarana_faskes`
--

CREATE TABLE `sarana_faskes` (
  `id_srn` int(11) NOT NULL,
  `nama_srn` varchar(40) NOT NULL,
  `id_rs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sarana_faskes`
--

INSERT INTO `sarana_faskes` (`id_srn`, `nama_srn`, `id_rs`) VALUES
(1, 'Radiologi', 1),
(2, 'Rekam Medik', 7),
(3, 'Laboratorium', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `level`) VALUES
('manskuy', 'manskuy', 'asda', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_tidur`
--

CREATE TABLE `tempat_tidur` (
  `id_tmpt` int(11) NOT NULL,
  `kelas_tmpt` varchar(10) NOT NULL,
  `nama_tmpt` varchar(25) NOT NULL,
  `id_rs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_tidur`
--

INSERT INTO `tempat_tidur` (`id_tmpt`, `kelas_tmpt`, `nama_tmpt`, `id_rs`) VALUES
(6, 'VVIP', 'Mutiara VVIP', 1),
(7, 'VIP', 'Rahman VIP', 1),
(8, 'Kelas I', 'Ruang ruang', 1),
(9, 'Kelas II', 'Ruang hampa', 1),
(10, 'Kelas III', 'Anggrek', 1),
(11, 'VVIP', 'VVIP', 7),
(12, 'VIP', 'VIP', 7),
(13, 'Kelas II', 'Kelas II', 7),
(14, 'Kelas III', 'Kelas III', 7),
(15, 'Kelas III', 'Kelas III Kebidanan', 7),
(16, 'Kelas I', 'Anyelir (Anak)', 6),
(17, 'Kelas I', 'Gladiol (P.Dalam)', 6),
(18, 'Kelas I', 'Lily(Kebidanan)', 6),
(19, 'Kelas I', 'Tulip (Bedah)', 6),
(20, 'ICU', 'Edelweis', 6),
(21, 'ICU', 'Yasmin (Perinatologi)', 6),
(22, 'ICU', 'ICU', 6),
(23, 'VIP', 'Anyelir (Anak)', 6),
(24, 'VIP', 'Gladiol (P.Dalam)', 6),
(25, 'VIP', 'Lily (Kebidanan)', 6),
(26, 'VIP', 'Tulip (Bedah)', 6),
(27, 'Kelas II', 'Anyelir (Anak)', 6),
(28, 'Kelas III', 'Anyelir (Anak)', 6),
(29, 'Kelas I', 'Anggrek', 7),
(30, 'Kelas I', 'Mawar', 7),
(31, 'Kelas I', 'Mawar', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dktr`),
  ADD KEY `id_fk` (`id_fk`);

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id_fk`);

--
-- Indexes for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  ADD PRIMARY KEY (`id_jdwl`),
  ADD KEY `fk_id_faskes` (`id_fk`);

--
-- Indexes for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD PRIMARY KEY (`id_plyn`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `jumlah_pegawai`
--
ALTER TABLE `jumlah_pegawai`
  ADD PRIMARY KEY (`id_jml`),
  ADD KEY `id_fk` (`id_fk`);

--
-- Indexes for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `sarana_faskes`
--
ALTER TABLE `sarana_faskes`
  ADD PRIMARY KEY (`id_srn`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  ADD PRIMARY KEY (`id_tmpt`),
  ADD KEY `id_rs` (`id_rs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dktr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id_fk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  MODIFY `id_jdwl` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  MODIFY `id_plyn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jumlah_pegawai`
--
ALTER TABLE `jumlah_pegawai`
  MODIFY `id_jml` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rumah_sakit`
--
ALTER TABLE `rumah_sakit`
  MODIFY `id_rs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sarana_faskes`
--
ALTER TABLE `sarana_faskes`
  MODIFY `id_srn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  MODIFY `id_tmpt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `faskes` (`id_fk`);

--
-- Constraints for table `jadwal_praktek`
--
ALTER TABLE `jadwal_praktek`
  ADD CONSTRAINT `jadwal_praktek_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `faskes` (`id_fk`);

--
-- Constraints for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD CONSTRAINT `jenis_pelayanan_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `rumah_sakit` (`id_rs`);

--
-- Constraints for table `jumlah_pegawai`
--
ALTER TABLE `jumlah_pegawai`
  ADD CONSTRAINT `jumlah_pegawai_ibfk_1` FOREIGN KEY (`id_fk`) REFERENCES `faskes` (`id_fk`);

--
-- Constraints for table `sarana_faskes`
--
ALTER TABLE `sarana_faskes`
  ADD CONSTRAINT `sarana_faskes_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `rumah_sakit` (`id_rs`);

--
-- Constraints for table `tempat_tidur`
--
ALTER TABLE `tempat_tidur`
  ADD CONSTRAINT `tempat_tidur_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `rumah_sakit` (`id_rs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

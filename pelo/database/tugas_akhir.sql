-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 07:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `id_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `first`, `last`, `isi`, `tanggal`, `id_wisata`) VALUES
(9, 'uzi', 'srengenge', 'res1', '09-05-21', 23),
(10, 'uzi', 'srengenge', 'res1', '09-05-21', 23),
(11, 'uzi', 'ans', 'asjjsjbssszzzzz', '09-05-21', 27),
(12, 'uzi', 'zi', 'ewing oioi', '10-05-21', 29),
(13, 'uzi', 'sdc', 'aaa', '14-05-21', 31),
(14, 'Muhammad ', 'Nurfauzi', 'Tempatnya bagus', '15-05-21', 44);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `awal` varchar(100) NOT NULL,
  `akhir` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `awal`, `akhir`, `email`, `judul`, `isi`) VALUES
(1, 'ds', '', '', '', ''),
(2, 'uzi', 'srengenge', 'uzi@gmail.com', 'kosong', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `pulau`
--

CREATE TABLE `pulau` (
  `id_pulau` int(11) NOT NULL,
  `nama_pulau` varchar(100) NOT NULL,
  `foto_pulau` varchar(100) NOT NULL,
  `tentang_pulau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pulau`
--

INSERT INTO `pulau` (`id_pulau`, `nama_pulau`, `foto_pulau`, `tentang_pulau`) VALUES
(14, 'Pulau Kalimantam', 'tugas.jpg', 'Merupakan daerah ibu kota masa depan Indonesia yang menjanjikan karena keindahan alamnya yang indah dan menawan'),
(16, 'Pulau Bali', 'Tempat-Wisata-Unik-Di-Bali-Feature-Image.jpg', 'Pulau jawa dikenal dengan keindahan dan keberagaman budayanya yang membuatnya ramai dikunjungi turis dari berbagai negara.\r\n'),
(17, 'Pulau Papua', 'papua.jpg', 'Meskipun kerap dipandang sebelah mata, maluku & papua memiliki keindahan alam yang indah dan tidak ada duanya di Indonesia.'),
(18, 'Pulau Jawa', 'jawa.jpg', 'Pulau jawa dikenal dengan keindahan dan keberagaman budayanya yang membuatnya ramai dikunjungi turis dari berbagai negara.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(1, 'uzi@gmail.com', 'd2a6e194da50ab1478744b3a74e3e003');

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_pulau` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `foto_wisata` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `la` varchar(50) NOT NULL,
  `lo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `id_pulau`, `nama_wisata`, `foto_wisata`, `kategori`, `alamat`, `deskripsi`, `la`, `lo`) VALUES
(40, 16, 'Pantai Kuta', 'kuta-travel.jpg', 'Pantai', 'pantai kuta, Jalan Pantai Kuta, Tuban, Kuta, Bali, 80361, Indonesia', 'Pantai Kuta adalah sebuah tempat pariwisata yang terletak di kecamatan Kuta, sebelah selatan Kota Denpasar, Bali, Indonesia. Daerah ini merupakan sebuah tujuan wisata turis mancanegara dan telah menjadi objek wisata andalan Pulau Bali sejak awal tahun 1970-an. Pantai Kuta sering pula disebut sebagai pantai matahari terbenam (sunset beach) sebagai lawan dari pantai Sanur. Selain itu, Lapangan Udara I Gusti Ngurah Rai terletak tidak jauh dari Kuta.', '-8.72043670', '115.16942020'),
(42, 17, 'Raja Ampat  ', 'download.jpg', 'Pantai', 'Raja Ampat Island, West Papua, 98483, Indonesia', 'Kepulauan Raja Ampat merupakan rangkaian empat gugusan pulau yang berdekatan dan berlokasi di barat bagian Kepala Burung Pulau Papua. Secara administrasi, gugusan ini berada di bawah Kabupaten Raja Ampat, Provinsi Papua Barat.', '-1.1509774', '129.8274578'),
(43, 18, 'Candi Prambanan', 'jawa.jpg', 'candi', 'Taman Purbakala Candi Prambanan, Taman Martani, Tamanmartani, Kalasan, Sleman Regency, Special Region of Yogyakarta, Indonesia', 'Candi Prambanan atau Candi Roro Jonggrang adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wisnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah', '-7.8011945', '110.364917'),
(44, 18, 'Monumen Nasional', 'large-goodnewsfromindonesia-gnfi-monas-1719771b7d07223538a16716482bdd0d.jpg', 'Monumen', 'National Monument, Jalan Medan Merdeka Utara, RW 02, Gambir, Central Jakarta, Jakarta Special Capital Region, 10110, Indonesia', 'Monumen Nasional atau yang populer disingkat dengan Monas atau Tugu Monas adalah monumen peringatan setinggi 132 meter yang didirikan untuk mengenang perlawanan dan perjuangan rakyat Indonesia untuk merebut kemerdekaan dari pemerintahan kolonial Hindia Belanda', '-6.17539360', '106.82718602'),
(45, 18, 'Candi Borobudur', 'borobudur.jpg', 'candi', 'Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Magelang, Jawa Tengah', 'Borobudur adalah sebuah candi Buddha yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia. Candi ini terletak kurang lebih 100 km di sebelah barat daya Semarang, 86 km di sebelah barat Surakarta, dan 40 km di sebelah barat laut Yogyakarta.', '-7.60795830', '110.20382445');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pulau`
--
ALTER TABLE `pulau`
  ADD PRIMARY KEY (`id_pulau`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_pulau` (`id_pulau`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `id_pulau` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

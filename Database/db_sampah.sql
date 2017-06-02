-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 08:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `deskripsi`, `isi_berita`, `gambar`, `tgl_posting`, `id_admin`) VALUES
(1, 'Sampah Menumpuk di Sungai Kalibaru Bogor, Kades Bojonggede Cari Kambing Hitam', '\"Kesadaran masyarakat untuk menciptakan lingkungan bersih itu perlu digalakan, kalau masyarakatnya sendiri tidak sadar kebersihan lingkungan pengerukan sampah ini akan jadi sia-sia,\" tukasnya.', ' Kepala Desa Bojonggede, Dede Malvina menyalahkan warga Kota Bogor akibat menumpuknya sampah di Sungai Kalibaru.\r\n\r\nMenurutnya, sampah yang berada dialiran sungai itu merupakan sampah kiriman dari hulu sungai yang mengalir hingga ke wilayahnya.\r\n\r\n\"Ini bukan sampah yang dibuang oleh warga Bojonggede, tapi yang terkena dampak warga saya yang ada disini,\" keluhnya.\r\n\r\nPihaknya juga berharap pemerintah Kabupaten Bogor segera memasang jaring di perbatasan antara Kota dan Kabupaten Bogor.\r\n\r\nItu agar sampah yang mengalir dari hulu tidak terbawa dan menumpuk dibagian hilir sungai.\r\n\r\n\"Ini bukan pertamakalinya sampah disini itu dikeruk, tapi tidak lama ada lagi karena pas hujan sampah dari hulu sungai itu terbawa air sampai kesini,\" kata dia kepada TribunnewsBogor.com, Jumat (10/3/2017).\r\n\r\nDede berharap masyarakat lebih sadar akan kebersihan lingkungan dan tidak membuang sampah di aliran sungai.\r\n\r\n\"Kesadaran masyarakat untuk menciptakan lingkungan bersih itu perlu digalakan, kalau masyarakatnya sendiri tidak sadar kebersihan lingkungan pengerukan sampah ini akan jadi sia-sia,\" tukasnya.\r\n\r\nSebelumnya, Bupati Bogor Nurhayanti akan berkordinasi dengan Pemkot Bogor untuk menangani sampah di aliran sungai Kalibaru, Bojonggede.\r\n\r\nPersoalan sampah yang menumpuk di anak sungai Ciliwung ini, menurut Nurhayanti berasal dari Kota Bogor.\r\n\r\n\"Sampah ini asalnya dari hulu sungai, makannya kami akan mengajak Pemkot Bogor untuk menangani masalah sampah,\" kata Nurhayanti kepada TribunnewsBogor.com belum lama ini.', '_MG_3561.jpg', '2017-06-01 17:29:10', 1),
(2, 'Kebun Raya Bogor Butuh Mesin Pencacah Sampah', 'jumlah sampah plastik dan kaleng di Kebun Raya Bogor cukup signifikan, rata-rata terkumpul 10 ton sampah per tahun, trennya terus meningkat setiap tahunnya, bahkan bisa lebih dari 10 ton.', '<p>Kebun Raya Bogor-LIPI berupaya untuk mengolah sampah plastik, agar memiliki nilai ekonomis dan bermanfaat sekaligus meminimalisir jumlah sampah yang dibuang ke tempat pembuangan akhir (TPA).\r\n</p>\r\n<p>\"Selama ini Kebun Raya Bogor belum belum memiliki fasilitas pendaur ulang sampah plastik maupun sampah anorganik, kami bekerja sama dengan Pemerintah Kota Bogor untuk mengangkut sampah dari kebun raya ke TPA,\" kata Kepala Pusat Konservasi Tumbuhan (PKT) Kebun Raya-LIPI, Didik Widyatmoko, di Kebun Raya, Sabtu (25/2).\r\n</p>\r\n<p>Menurut Didik, jumlah sampah plastik dan kaleng di Kebun Raya Bogor cukup signifikan, rata-rata terkumpul 10 ton sampah per tahun, trennya terus meningkat setiap tahunnya, bahkan bisa lebih dari 10 ton.\r\n</p>\r\n<p>Ia mengatakan, sampah plastik dan kaleng tersebut berasal dari para pengujung Kebun Raya Bogor. Selama ini sampah dikumpulkan, ditampung dan dibuang ke TPA. Beberapa di antaranya diambil oleh pemulung.\r\n</p>\r\n<p>\"Kami ingin membuat sampah-sampah plastik ini jadi lebih bermanfaat dengan daur ulang. Ini juga bagian dari edukasi ke masyarakat, bahwa sampah juga bisa diolah dan dapat mendatangkan mata pencaharian,\" kata Didik.\r\n</p>\r\n<p>PKT Kebun Raya-LIPI berencana akan mengalokasikan anggaran khusus untuk menyediakan mesin pencacah sampah. Dan pengelolaan sampah tersebut akan melibatkan Pemerintah Kota Bogor.\r\n\r\n\"Kami juga menggandeng sejumlah komunitas peduli sampah. Diharapkan sampah yang didaur ulang dari Kebun Raya memiliki nilai ekonomi yang dapat meningkatkan pendapatan masyarakat,\" katanya.\r\n</p>\r\n<p>Menurut Didik, keberadaan sampah-sampah plastik di Kebun Raya Bogor cukup mengganggu estetika dan kebersihan di kebun raya peninggalan Belanda tersebut. Kesadaran masyarakat untuk membuang sampah pada tempatnya masih rendah.\r\n\r\n\"Kebun Raya Bogor memiliki misi untuk memberikan pendidikan lingkungan kepada masyarakat, untuk memiliki kesadaran malu membuang sampah sembarangan. Perlu pelajaran etika, dan kesadaran diberikan kepada anak usia dini, anak-anak tidak hanya didorong pintar akademik, tetapi mau belajar mengantri dan tidak buang sampah sembarangan,\" katanya.\r\n</p>\r\n<p>Plt Kepala Dinas Lingkungan Hidup Kota Bogor, Aulia Guntang mengatakan, Pemerintah Kota Bogor terus berupaya mensosialisasikan terkait pengelolaan sampah di tingkat masyarakat dengan membangun TPS 3R dan bank sampah.\r\n\r\n\"Saat ini sudah terbentuk 36 bank sampah di seluruh kelurahan, dan ada 26 TPS 3R yang beroperasi di Kota Bogor,\" katanya.\r\n\r\nMenurut Aula, persoalan sampah jika tidak segera ditangani dari sekarang akan menjadi ancaman bagi masyarakat di masa depan. Dampak yang ditimbulkan dapat berupa bencana alam, longsor maupun banjir. </p>', '_MG_3537.JPG', '2017-06-01 18:02:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(10) NOT NULL,
  `nama_pelapor` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `tgl_laporan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_selesai` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `id_admin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nama_pelapor`, `no_telp`, `tgl_laporan`, `deskripsi`, `lokasi`, `foto`, `status`, `tgl_selesai`, `id_admin`) VALUES
(1, 'Linda Luvita', '085779886576', '2017-02-28 17:00:00', 'ducchhhh.. banyak sampah, banyak lalat, bauk tolong ya sist segera diatasi', 'malabar bogor', 'satu.jpg', '1', '0000-00-00 00:00:00', 1),
(2, 'Erik setiawan', '085667665656', '2017-03-01 17:00:00', 'kemarin sempat bersih kotor lagi', 'lodaya bogor', 'dua.jpg', '', '2017-04-27 19:23:40', 1),
(4, 'Nop', '089624586448', '2017-04-27 15:48:03', 'duhai bau sampah ', 'Bantarjati', 'lapor2.jpg', '', '2017-04-27 19:23:40', 1),
(5, 'Noop', '089624386448', '2017-06-01 16:48:03', 'euh bau sampah', 'BantarJati', '_MG_35371.JPG', '0', '0000-00-00 00:00:00', 1),
(6, 'Fina', '089624386448', '2017-06-01 22:24:03', 'Sampah berserakan', 'Jalan Palayu Raya, Tegal Gundil, Bogor City, West Java, Indonesia', 'IMG_0349.jpg', '0', '0000-00-00 00:00:00', 1),
(7, 'Dwi Parma', '089624386448', '2017-06-02 06:00:58', 'sampah berserakan', 'Jl. Malabar, Tegallega, Bogor City, West Java, Indonesia', 'IMG_03491.jpg', '0', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

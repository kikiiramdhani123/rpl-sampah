/*
Navicat MySQL Data Transfer

Source Server         : LocalhostDhani
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : db_sampah

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2017-04-29 12:58:50
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin1', 'admin1');

-- ----------------------------
-- Table structure for `berita`
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl_posting` date NOT NULL,
  `id_admin` int(2) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES ('1', 'Sampah Menumpuk di Sungai Kalibaru Bogor, Kades Bojonggede Cari Kambing Hitam', ' Kepala Desa Bojonggede, Dede Malvina menyalahkan warga Kota Bogor akibat menumpuknya sampah di Sungai Kalibaru.\r\n\r\nMenurutnya, sampah yang berada dialiran sungai itu merupakan sampah kiriman dari hulu sungai yang mengalir hingga ke wilayahnya.\r\n\r\n\"Ini bukan sampah yang dibuang oleh warga Bojonggede, tapi yang terkena dampak warga saya yang ada disini,\" keluhnya.\r\n\r\nPihaknya juga berharap pemerintah Kabupaten Bogor segera memasang jaring di perbatasan antara Kota dan Kabupaten Bogor.\r\n\r\nItu agar sampah yang mengalir dari hulu tidak terbawa dan menumpuk dibagian hilir sungai.\r\n\r\n\"Ini bukan pertamakalinya sampah disini itu dikeruk, tapi tidak lama ada lagi karena pas hujan sampah dari hulu sungai itu terbawa air sampai kesini,\" kata dia kepada TribunnewsBogor.com, Jumat (10/3/2017).\r\n\r\nDede berharap masyarakat lebih sadar akan kebersihan lingkungan dan tidak membuang sampah di aliran sungai.\r\n\r\n\"Kesadaran masyarakat untuk menciptakan lingkungan bersih itu perlu digalakan, kalau masyarakatnya sendiri tidak sadar kebersihan lingkungan pengerukan sampah ini akan jadi sia-sia,\" tukasnya.\r\n\r\nSebelumnya, Bupati Bogor Nurhayanti akan berkordinasi dengan Pemkot Bogor untuk menangani sampah di aliran sungai Kalibaru, Bojonggede.\r\n\r\nPersoalan sampah yang menumpuk di anak sungai Ciliwung ini, menurut Nurhayanti berasal dari Kota Bogor.\r\n\r\n\"Sampah ini asalnya dari hulu sungai, makannya kami akan mengajak Pemkot Bogor untuk menangani masalah sampah,\" kata Nurhayanti kepada TribunnewsBogor.com belum lama ini.', 'berita1.jpg', '2017-03-17', '1');
INSERT INTO `berita` VALUES ('2', 'Kebun Raya Bogor Butuh Mesin Pencacah Sampah', 'Kebun Raya Bogor-LIPI berupaya untuk mengolah sampah plastik, agar memiliki nilai ekonomis dan bermanfaat sekaligus meminimalisir jumlah sampah yang dibuang ke tempat pembuangan akhir (TPA).\r\n\r\n\"Selama ini Kebun Raya Bogor belum belum memiliki fasilitas pendaur ulang sampah plastik maupun sampah anorganik, kami bekerja sama dengan Pemerintah Kota Bogor untuk mengangkut sampah dari kebun raya ke TPA,\" kata Kepala Pusat Konservasi Tumbuhan (PKT) Kebun Raya-LIPI, Didik Widyatmoko, di Kebun Raya, Sabtu (25/2).\r\n\r\nMenurut Didik, jumlah sampah plastik dan kaleng di Kebun Raya Bogor cukup signifikan, rata-rata terkumpul 10 ton sampah per tahun, trennya terus meningkat setiap tahunnya, bahkan bisa lebih dari 10 ton.\r\n\r\nIa mengatakan, sampah plastik dan kaleng tersebut berasal dari para pengujung Kebun Raya Bogor. Selama ini sampah dikumpulkan, ditampung dan dibuang ke TPA. Beberapa di antaranya diambil oleh pemulung.\r\n\r\n\"Kami ingin membuat sampah-sampah plastik ini jadi lebih bermanfaat dengan daur ulang. Ini juga bagian dari edukasi ke masyarakat, bahwa sampah juga bisa diolah dan dapat mendatangkan mata pencaharian,\" kata Didik.\r\n\r\nPKT Kebun Raya-LIPI berencana akan mengalokasikan anggaran khusus untuk menyediakan mesin pencacah sampah. Dan pengelolaan sampah tersebut akan melibatkan Pemerintah Kota Bogor.\r\n\r\n\"Kami juga menggandeng sejumlah komunitas peduli sampah. Diharapkan sampah yang didaur ulang dari Kebun Raya memiliki nilai ekonomi yang dapat meningkatkan pendapatan masyarakat,\" katanya.\r\n\r\nMenurut Didik, keberadaan sampah-sampah plastik di Kebun Raya Bogor cukup mengganggu estetika dan kebersihan di kebun raya peninggalan Belanda tersebut. Kesadaran masyarakat untuk membuang sampah pada tempatnya masih rendah.\r\n\r\n\"Kebun Raya Bogor memiliki misi untuk memberikan pendidikan lingkungan kepada masyarakat, untuk memiliki kesadaran malu membuang sampah sembarangan. Perlu pelajaran etika, dan kesadaran diberikan kepada anak usia dini, anak-anak tidak hanya didorong pintar akademik, tetapi mau belajar mengantri dan tidak buang sampah sembarangan,\" katanya.\r\n\r\nPlt Kepala Dinas Lingkungan Hidup Kota Bogor, Aulia Guntang mengatakan, Pemerintah Kota Bogor terus berupaya mensosialisasikan terkait pengelolaan sampah di tingkat masyarakat dengan membangun TPS 3R dan bank sampah.\r\n\r\n\"Saat ini sudah terbentuk 36 bank sampah di seluruh kelurahan, dan ada 26 TPS 3R yang beroperasi di Kota Bogor,\" katanya.\r\n\r\nMenurut Aula, persoalan sampah jika tidak segera ditangani dari sekarang akan menjadi ancaman bagi masyarakat di masa depan. Dampak yang ditimbulkan dapat berupa bencana alam, longsor maupun banjir. ', 'berita2.jpg', '2017-03-16', '1');

-- ----------------------------
-- Table structure for `laporan`
-- ----------------------------
DROP TABLE IF EXISTS `laporan`;
CREATE TABLE `laporan` (
  `id_laporan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pelapor` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `id_admin` int(2) NOT NULL,
  PRIMARY KEY (`id_laporan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of laporan
-- ----------------------------
INSERT INTO `laporan` VALUES ('1', 'Linda Luvita', '085779886576', '2017-03-01', 'ducchhhh.. banyak sampah, banyak lalat, bauk tolong ya sist segera diatasi', 'malabar bogor', 'satu.jpg', '2', '0000-00-00', '1');
INSERT INTO `laporan` VALUES ('2', 'Erik setiawan', '085667665656', '2017-03-02', 'kemarin sempat bersih kotor lagi', 'lodaya bogor', 'dua.jpg', '1', null, '1');

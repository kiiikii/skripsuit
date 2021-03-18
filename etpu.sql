-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 03:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etpu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idad` int(11) NOT NULL,
  `namauser` varchar(100) NOT NULL,
  `sandiuser` varchar(100) NOT NULL,
  `fotopro` varchar(100) NOT NULL,
  `edukasi` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `pengalaman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idad`, `namauser`, `sandiuser`, `fotopro`, `edukasi`, `lokasi`, `pengalaman`) VALUES
(1, 'admin', '12345', '', 'B.S. in Computer Science from the University of Tennessee at Knoxville', 'Malibu, California', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.');

-- --------------------------------------------------------

--
-- Table structure for table `jenazah`
--

CREATE TABLE `jenazah` (
  `idje` int(11) NOT NULL,
  `idkub` int(11) NOT NULL,
  `namaje` varchar(100) NOT NULL,
  `lahir` date NOT NULL,
  `mati` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenazah`
--

INSERT INTO `jenazah` (`idje`, `idkub`, `namaje`, `lahir`, `mati`) VALUES
(1, 1, 'adfasdfasdfasdf', '2009-01-05', '2020-03-13'),
(2, 2, 'asdfgfdsdf', '2008-07-10', '2020-03-13'),
(3, 3, 'adasd', '2020-04-24', '2020-04-24'),
(4, 2, 'dafsdfasdfasdf', '2020-04-25', '2020-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idkec` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gjkec` varchar(100) NOT NULL,
  `warkec` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`idkec`, `kode`, `nama`, `gjkec`, `warkec`) VALUES
(1, '33.72.05', 'Banjarsari', '22020420090231.geojson', '#80ff00'),
(2, '33.72.04', 'Jebres', '53310320022202.geojson', '#555555'),
(3, '33.72.01', 'Laweyan', '19310320022142.geojson', '#00ffff'),
(4, '33.72.03', 'Pasar Kliwon', '72310320022240.geojson', '#d63c3c'),
(5, '33.72.02', 'Serengan', '83010420085442.geojson', '#e0de48');

-- --------------------------------------------------------

--
-- Table structure for table `kuburan`
--

CREATE TABLE `kuburan` (
  `idkub` int(11) NOT NULL,
  `idkec` int(11) NOT NULL,
  `namakub` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `lat` float(9,6) NOT NULL,
  `lng` float(9,6) NOT NULL,
  `deskripsi` text NOT NULL,
  `marker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuburan`
--

INSERT INTO `kuburan` (`idkub`, `idkec`, `namakub`, `alamat`, `lat`, `lng`, `deskripsi`, `marker`) VALUES
(1, 1, 'TPU Bonoloyo', 'Jl. Sumpah Pemuda, Kadipiro, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57136', -7.538867, 110.824203, '<p>TPU Bonoloyo merupakan salah satu TPU terbesar di Surakarta yang lokasinya berada di Kadipiro berdekatan dengan Kampus UNISRI dan kantor Kecamatan Banjarsari</p>', '9240420032202.png'),
(2, 1, 'Astana Bibis Luhur', ' Jl. Walanda Maramis No.56, Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', -7.546671, 110.834114, '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Makam Kerabat Mangkunegara</span><br style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Makam Kyai Setroketu dan kerabat Mangkunegara lainnya.</span><br></p>', '51010520100903.png'),
(3, 1, 'Astana Oetara', 'Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', -7.547987, 110.823547, '<p><span style=\"color: rgb(34, 34, 34); font-size: 1rem;\">Astana Oetara, atau lebih dikenal dengan Pasarean Nayu ini adalah sebuah kompleks pemakaman Kanjeng Gusti Pangeran Adipati Aryo (KGPAA) Mangkunegoro VI beserta para kerabatnya, garwa padmi (permaisuri), garwo ampil (selir) dan para putranya. Sebelum menjadi makam, areal ini dulunya berupa sebuah bukit kecil sehingga ada juga yang menyebutnya dengan Pasarean Giri Yasa. Nama ini juga menggunakan bahasa Jawa, pasarean berasal dari kata dasar sare yang artinya tidur dan pasarean berarti tempat tidur panjang alias tempat membaringkan orang yang telah meninggal atau kuburan/makam. Sedangkan, giri artinya gunung atau bukit yang menyerupai gunung, dan yasa artinya pembuatan atau dibuat. Jadi, Pasarean Giri Yasa berarti makam yang dibuat atau lokasinya di atas bukit.</span><br></p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Menurut RM Haryanto, juru kunci makam yang juga buyut Mangkunegoro VI ini, menerangkan bahwa makam ini sudah ada sejak tahun 1928 ketika jenazah Mangkunegoro VI dibaringkan di pemakaman ini. Namun, membentuk kompleknya yang seperti saat ini tentunya berdasarkan tradisi Jawa adalah setelah seribu harinya, berarti selang tiga tahun setelah wafatnya. Pertanyaan yang sering muncul adalah kenapa penguasa Pura Mangkunegaran ini tidak dimakamkan di Astana Girilaya Mangadeg, seperti pada umumnya penguasa Mangkunegaran yang lainnya? Sang juru kunci akhirnya mengisahkan perjalanan hidup Mangkunegoro VI.</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">KGPAA Mangkunegoro VI lahir pada Jumat Pon, 17 Rejeb Wawu 1785 (13 Maret 1857) dengan nama Gusti Raden Mas (GRM) Soejitno. Beliau adalah putra keempat Mangkunegoro IV dengan permaisuri. Gelar Kanjeng Pangeran Aryo (KPA) Dhayaningrat disandangnya saat berusia 17 tahun, yaitu Sabtu Legi, 17 Rejeb Alip 1803 (29 Agustus 1874), dan naik tahta pada Sabtu Legi, 15 Jumadilakir Jimakir 1826 (21 November 1896).</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Sebenarnya beliau tidak berhak atas tahta Pura Mangkunegaran. Tapi karena Mangkunegoro V meninggal setelah mengalami kecelakaan di Wonogiri pada 2 Oktober 1896 dalam usia 41 tahun, kekosongan tahta ini dipegang oleh KPA Dhayaningrat, yang tak lain adalah adik kandung Mangkunegoro V atas persetujuan dan arahan dari ibundanya Gusti Raden Ayu (G.R.Ay.) Dunuk. Pertimbangannya bukan saja karena putra mahkota yang sesungguhnya masih kecil tapi juga karena mengemban tugas menyelamatkan keuangan kerajaan yang terjebak dalam hutang kepada Belanda. Kebetulan KPA Dhayaningrat piawai dalam bidang ekonomi. Setelah dikukuhkan sebagai punguasa Mangkunegaran untuk menggantikan kakaknya Mangkunegoro V, KPA Dhayaningrat menyandang gelar KGPAA Mangkunegoro VI, yang menurut tradisi kraton seharusnya jatuh kepada putra Mangkunegoro V.</p><div class=\"bsac bsac-clearfix bsac-post-middle bsac-float-center bsac-align-center bsac-column-1\" style=\"zoom: 1; margin-bottom: 12px; text-align: center; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;\"=\"\"><div id=\"bsac-28976-1358511838\" class=\"bsac-container bsac-type-custom_code \" itemscope=\"\" itemtype=\"https://schema.org/WPAdBlock\" data-adid=\"28976\" data-type=\"custom_code\" style=\"overflow: hidden; margin-bottom: 0px;\"><div id=\"chitikaAdBlock-0\"></div></div></div><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Dalam memegang tampuk Praja Mangkunegaran selama 19 tahun 8 bulan, beliau berhasil mengembalikan kebangkrutan ekonomi yang dialami oleh Pura Mangkunegaran pada masa Mangkunegoro V. Keberhasilannya ini dilakukan dengan upaya penghematan secara ekonomis di segala bidang dan ditujukan bagi keluarga serta seluruh Pangreh Praja Mangkunegaran. Selain itu, beliau juga menarik pajak tanah yang digunakan Nederlandsch Indische Spoorweg Maatschappij (perusahaan kereta api swasta Belanda) hingga ketika kolonial tidak mampu membayar kereta api jurusan Solo-Surabaya disita sebagai miliknya. Itu juga menjadi tengara mengenai sikapnya yang anti-Belanda.</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Kemudian, beliau juga melakukan perluasan areal perkebunan tebu untuk dua pabrik gula Tasikmadu dan Colomadu. Hal ini dilakukan untuk meningkatkan produksi gula yang selama ini menjadi primadona Pura Mangkunegaran. Begitu putra mahkota telah cukup usia, atas kehendak sendiri beliau turun tahta pada Selasa Kliwon, 3 Mulud Je 1846 (11 Januari 1916) . Pada saat turun tahta, hasil dari memimpin Pura Mangkunegaran ini, beliau berhasil meninggalkan efecten (warisan) 10 juta gulden. Jumlah itu dari upaya penghematannya selama memangku tahta. Setelah itu, beliau ambegawan sebagai Satria Pinandhita di Palmenlaan (sekarang Jalan Panglima Sudirman), Surabaya, hingga meninggal 24 Juni 1928.</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Karena jasa-jasa yang dilakukan oleh KGPAA Mangkunegoro VI, maka pada saat beliau meninggal, Pangreh Praja Mangkunegaran berikutnya, yaitu KGPAA Mangkunegoro VII, yang tak lain adalah keponakannya sendiri, memberikan tanah seluas 1 hektar untuk mengebumikan jasad KGPAA Mangkunegoro VI. Karena sebelum meninggal, beliau memang berkeinginan dimakamkan di daerah yang tak jauh dari Pura atau Istana Mangkunegaran sehingga dekat dengan kawulo atau rakyatnya.</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Pengunjung yang memasuki kompleks makam ini akan melewati gerbang yang di atasnya terdapat lengkungan besi berornamen, yang di tengah-tengahnya tertulis Astana Oetara. Setelah itu, pengunjung akan menjumpai patung anak kecil bergaya Eropa, dan dibelakangnya ada patung KGPAA Mangkunegoro VI. Di sebelah timur kedua patung tersebut terdapat pendopo besar sebagai tempat menerima tamu dan singgah sementara, sedangkan di sebelah barat patung adalah sebuah masjid. Di sepanjang jalan utama areal kompleks pemakaman ini begitu rindang dan asri karena berjajar pohon tanjung yang sudah berumur puluhan tahun menaungi jalan tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 17px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Melanjutkan langkah, pengunjung akan berjumpa dengan pintu gerbang berwarna kuning dan hijau yang dihiasi lengkungan pada ketiga pintunya. Pintu gerbang ini merupakan pintu gerbang untuk masuk ke dalam kompleks makam utama. Setelah masuk, pengunjung akan menemukan bangunan nisan KGPAA Mangkunegoro VI yang lokasinya berada di atas dengan ditandai cungkup yang didominasi warna hijau dengan pelisir kuning. Di situlah, KGPAA Mangkunegoro VI disemayamkan dengan tenang.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; color: rgb(34, 34, 34); font-family: Georgia, Times, \" times=\"\" new=\"\" roman\",=\"\" serif;=\"\" font-size:=\"\" 15px;=\"\" text-align:=\"\" justify;\"=\"\">Kini, kompleks Astana Oetara ini telah ditetapkan Pemerintah Kota Surakarta melalui Keputusan Kepala Dinas Tata Ruang Kota Nomor 646/40/I/2014 tentang Penetapa Bangunan-Bangunan yang Dianggap telah Memenuhi Kriteria sebagai Cagar Budaya sesuai Undang-Undang Republik Indonesia Nomor 11 Tahun 2010 tentang Cagar Budaya, dengan register No. 11/BJS/B.3/44.</p><p><br></p>', '21010520095813.png'),
(4, 5, 'TPU Mojo', 'asdfasdfasdfasdf', -7.538130, 110.831863, '<p>dsafasdfasdfasdf</p>', '69250420050426.png'),
(5, 3, 'qqwer', 'sadadfhfgjdfhkj', -7.538975, 110.820709, '<p>nothing</p>', '');

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `idlahan` int(11) NOT NULL,
  `idkub` int(11) NOT NULL,
  `luas` varchar(100) NOT NULL,
  `gbrlahan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`idlahan`, `idkub`, `luas`, `gbrlahan`) VALUES
(1, 1, '13241234 m2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idad`);

--
-- Indexes for table `jenazah`
--
ALTER TABLE `jenazah`
  ADD PRIMARY KEY (`idje`),
  ADD KEY `idkub` (`idkub`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idkec`);

--
-- Indexes for table `kuburan`
--
ALTER TABLE `kuburan`
  ADD PRIMARY KEY (`idkub`),
  ADD KEY `idkec` (`idkec`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`idlahan`),
  ADD KEY `idkub` (`idkub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenazah`
--
ALTER TABLE `jenazah`
  MODIFY `idje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `idkec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kuburan`
--
ALTER TABLE `kuburan`
  MODIFY `idkub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `idlahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenazah`
--
ALTER TABLE `jenazah`
  ADD CONSTRAINT `jenazah_ibfk_1` FOREIGN KEY (`idkub`) REFERENCES `kuburan` (`idkub`);

--
-- Constraints for table `kuburan`
--
ALTER TABLE `kuburan`
  ADD CONSTRAINT `kuburan_ibfk_1` FOREIGN KEY (`idkec`) REFERENCES `kecamatan` (`idkec`);

--
-- Constraints for table `lahan`
--
ALTER TABLE `lahan`
  ADD CONSTRAINT `lahan_ibfk_1` FOREIGN KEY (`idkub`) REFERENCES `kuburan` (`idkub`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

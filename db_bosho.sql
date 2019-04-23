-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 08:05 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bosho`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_sessions`
--

CREATE TABLE `company_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id_about` int(11) NOT NULL,
  `image` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id_about`, `image`, `keterangan`) VALUES
(1, '86a49ee5ffc6193c0f61cdf866c78bd320190412135404.jpg', 'jjhvkhbjb');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `thumbnail` text NOT NULL,
  `dt_artikel` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `judul`, `isi`, `thumbnail`, `dt_artikel`) VALUES
(1, 'asdad', '<p>sadasd adasds</p>\r\n', '420190419220303.jpg', '2019-04-19 22:03:03'),
(2, 'asda', '<p>aa</p>\r\n', 'wisuda_20190419220414.jpg', '2019-04-19 22:04:14'),
(3, 'dddd', '<p>dddd<img alt=\"\" src=\"http://localhost/bosho/assets/filemanager/source/1.jpeg\" style=\"height:67px; width:100px\" />sczs</p>\r\n', 'a734c32295675fcbfc2dcac5b2fa9b23_20190419220532.jpg', '2019-04-19 22:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id_faq`, `question`, `answer`) VALUES
(1, 'siapa saya?', 'pangeran'),
(2, 'siapa kamu?', 'kuda putih');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE `tbl_form` (
  `id_form` int(11) NOT NULL,
  `email_form` int(50) NOT NULL,
  `jdl_form` varchar(100) NOT NULL,
  `desc_form` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `image` text NOT NULL,
  `token` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `image`, `token`) VALUES
(1, 'trafalgar_law___heart_pirates_by_mufti89-d5936a7.jpg', '0.3311835110963648'),
(2, 'poring_love_by_bellacza-d2ya9k6.jpg', '0.46610882724299296'),
(3, 'cute-love-wallpaper-desktop-For-Desktop-Wallpaper.jpg', '0.3110319964210222'),
(4, '25-256788_cartoon-girl-chef-chef-cartoon-girl-clipart_png.jpg', '0.6226992662135691'),
(5, 'keep-calm-and-study-hard.jpg', '0.6871043461805649'),
(6, '86a49ee5ffc6193c0f61cdf866c78bd3.jpg', '0.253525573662162'),
(7, 'logo,_bkkbn.jpg', '0.5476541663717591'),
(8, 'FormatFactory39106968_1781737445255957_4663156644509646848_n.jpg', '0.25259623854486735'),
(9, 'Gong-xi-fa-cai-selamat-tahun-baru-imlek.jpg', '0.18124637264020493'),
(10, 'Blue-Wave-Abstract-Art-Background-Vector-Graphic.jpg', '0.05398542626484959'),
(11, 'hexagon-ragasco-vector-logo.jpg', '0.9590533146569225'),
(12, 'background-png-13194.png', '0.4021686940216511'),
(13, 'background-flat-blue-1.jpg', '0.805256702841055'),
(14, '1658358f37e9f8c.jpg', '0.5911014044250542'),
(15, 'Cover_CDi.jpg', '0.6306630307520873'),
(16, '3256657136926fa.jpg', '0.24731000198855468'),
(17, 'IMG-20190320-WA0034.jpg', '0.7609159269972957'),
(18, '580b57fcd9996e24bc43c543(1).png', '0.025262368692336556'),
(19, 'whatsapp_PNG15.png', '0.09878964249302757'),
(20, 'new-instagram-logo-png-transparent.png', '0.9898192566865831'),
(21, 'edit.jpg', '0.0686680767743173'),
(22, 'Kampus_Bekasi_2018_1.jpg', '0.0827774620074525'),
(25, 'FormatFactory39106968_1781737445255957_4663156644509646848_n1.jpg', '0.15170243891759416'),
(26, 'depan-ubj-2800X1300.jpg', '0.4623284155712868'),
(27, 'depan-ubj-2800X13001.jpg', '0.36055929838533407'),
(28, 'FormatFactory39106968_1781737445255957_4663156644509646848_n2.jpg', '0.12836674279311888'),
(29, '86a49ee5ffc6193c0f61cdf866c78bd31.jpg', '0.037400284145635676'),
(30, 'logo,_bkkbn1.jpg', '0.7797515283589064'),
(31, 'logo,_bkkbn2.jpg', '0.8296383054993484'),
(32, '86a49ee5ffc6193c0f61cdf866c78bd32.jpg', '0.11896553714446201'),
(33, '86a49ee5ffc6193c0f61cdf866c78bd33.jpg', '0.42049832834749823'),
(34, '86a49ee5ffc6193c0f61cdf866c78bd34.jpg', '0.06357496809845509'),
(35, 'logo,_bkkbn3.jpg', '0.21448317440874243'),
(36, 'keep-calm-and-study-hard1.jpg', '0.8389782996145887'),
(37, 'logo,_bkkbn4.jpg', '0.9812853042163572');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `jdl_alamat` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email_ktk` varchar(50) NOT NULL,
  `tlp_ktk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id_kontak`, `jdl_alamat`, `alamat`, `email_ktk`, `tlp_ktk`) VALUES
(1, 'asdas', 'asdfsadasd', 'prasetyo507@gmail.com', 'asdas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `url_menu` text NOT NULL,
  `urut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tlp` varchar(20) DEFAULT NULL,
  `unitbiro` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama`, `username`, `password`, `email`, `tlp`, `unitbiro`) VALUES
(1, 'admin', 'admin', '123', 'email@email.com', '082219126613', 2),
(2, 'adm', 'adm', '123', 'adm@adm.com', '082818120821', 1),
(3, 'asdas', 'asdas', 'sadas', 'setyawati.setyawati.irma@gmail.com', 'asdas', 20),
(4, 'dsf', 'afa', 'af', 'lkbh@ubharajaya.ac.id', '123123', 20),
(5, 'asdsa', 'asdsd', 'asdasd', 'prasetyo@ubharajaya.ac.id', 'addasd', 10),
(6, 'xx', 'xx', 'xxx', 'ubj.ubharajaya@gmail.com', 'xx', 30),
(7, 'sd', 'sd', 'sdsd', 'supriadi@ubharajaya.ac.id', 's', 20),
(8, 'sadas', 'asdas', 'dasdasd', 'prasetyo507@gmail.com', 'asd', 20),
(9, 'sds', 'dsd', 'sdsd', 'puskom@ubharajaya.ac.id', 'sd', 20),
(10, 'asdsad', 'asdsad', 'asdsa', '12@sca', 'sad', 40),
(11, 'sads', 'sdas', 'sda', 'prasetyo507@gmail.com', 'as', 40),
(28, 'qqqqq', 'qqqqqqqq', 'qqqqqqqqq', 'prasetyo507@gmail.com', 'qqq', 10),
(32, 'gh', 'fh', 'fghf', 'prasetyo@ubharajaya.ac.id', 'hg', 40),
(44, 'asdas', 'asdas', 'asdas', 'prasetyo@ubharajaya.ac.id', 'as', 50),
(45, 'asdas', 'asdas', 'asdas', 'prasetyo@ubharajaya.ac.id', 'as', 50),
(47, 'asa', '', 'as', 'prasetyo@ubharajaya.ac.id', '', 40),
(62, 'asa', 'jsu', '1', 'setyawati.setyawati.irma@gmail.com', 'asda', 40),
(63, 'xcvxc', 'qqasfas', '123', 'sdfsdf@sdf', 'asds', 40);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_price`
--

CREATE TABLE `tbl_price` (
  `id_price` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_price`
--

INSERT INTO `tbl_price` (`id_price`, `image`) VALUES
(1, 'cute-love-wallpaper-desktop-For-Desktop-Wallpaper20190412112456.jpg'),
(2, 'tnxXx20190412112509.jpg'),
(3, 'logo,bkkbn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signature`
--

CREATE TABLE `tbl_signature` (
  `id_c` int(11) NOT NULL,
  `nama_company` varchar(100) NOT NULL,
  `singkatan` varchar(50) NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_signature`
--

INSERT INTO `tbl_signature` (`id_c`, `nama_company`, `singkatan`, `logo`) VALUES
(1, 'aswarangga', 'aw', 'funny-happy-cute-smiling-banana-260nw-105573284920190405112717.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_sessions`
--
ALTER TABLE `company_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tbl_price`
--
ALTER TABLE `tbl_price`
  ADD PRIMARY KEY (`id_price`);

--
-- Indexes for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  ADD PRIMARY KEY (`id_c`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_form`
--
ALTER TABLE `tbl_form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_price`
--
ALTER TABLE `tbl_price`
  MODIFY `id_price` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_signature`
--
ALTER TABLE `tbl_signature`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

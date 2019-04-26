/*
Navicat MySQL Data Transfer

Source Server         : Localhost 3306
Source Server Version : 100130
Source Host           : localhost:3306
Source Database       : db_bosho

Target Server Type    : MYSQL
Target Server Version : 100130
File Encoding         : 65001

Date: 2019-04-26 14:02:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for company_sessions
-- ----------------------------
DROP TABLE IF EXISTS `company_sessions`;
CREATE TABLE `company_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of company_sessions
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_about
-- ----------------------------
DROP TABLE IF EXISTS `tbl_about`;
CREATE TABLE `tbl_about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_about
-- ----------------------------
INSERT INTO `tbl_about` VALUES ('1', '86a49ee5ffc6193c0f61cdf866c78bd320190412135404.jpg', 'jjhvkhbjb');

-- ----------------------------
-- Table structure for tbl_artikel
-- ----------------------------
DROP TABLE IF EXISTS `tbl_artikel`;
CREATE TABLE `tbl_artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `thumbnail` text NOT NULL,
  `dt_artikel` datetime NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_artikel
-- ----------------------------
INSERT INTO `tbl_artikel` VALUES ('2', 'asda', '<p>aa</p>\r\n', 'wisuda_20190419220414.jpg', '2019-04-19 22:04:14');

-- ----------------------------
-- Table structure for tbl_faq
-- ----------------------------
DROP TABLE IF EXISTS `tbl_faq`;
CREATE TABLE `tbl_faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_faq
-- ----------------------------
INSERT INTO `tbl_faq` VALUES ('1', 'siapa saya?', 'pangeran');
INSERT INTO `tbl_faq` VALUES ('2', 'siapa kamu?', 'kuda putih');

-- ----------------------------
-- Table structure for tbl_form
-- ----------------------------
DROP TABLE IF EXISTS `tbl_form`;
CREATE TABLE `tbl_form` (
  `id_form` int(11) NOT NULL AUTO_INCREMENT,
  `email_form` int(50) NOT NULL,
  `jdl_form` varchar(100) NOT NULL,
  `desc_form` text NOT NULL,
  PRIMARY KEY (`id_form`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_form
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_galeri
-- ----------------------------
DROP TABLE IF EXISTS `tbl_galeri`;
CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `token` varchar(100) NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_galeri
-- ----------------------------
INSERT INTO `tbl_galeri` VALUES ('1', 'trafalgar_law___heart_pirates_by_mufti89-d5936a7.jpg', '0.3311835110963648');
INSERT INTO `tbl_galeri` VALUES ('2', 'poring_love_by_bellacza-d2ya9k6.jpg', '0.46610882724299296');
INSERT INTO `tbl_galeri` VALUES ('3', 'cute-love-wallpaper-desktop-For-Desktop-Wallpaper.jpg', '0.3110319964210222');
INSERT INTO `tbl_galeri` VALUES ('4', '25-256788_cartoon-girl-chef-chef-cartoon-girl-clipart_png.jpg', '0.6226992662135691');
INSERT INTO `tbl_galeri` VALUES ('5', 'keep-calm-and-study-hard.jpg', '0.6871043461805649');
INSERT INTO `tbl_galeri` VALUES ('6', '86a49ee5ffc6193c0f61cdf866c78bd3.jpg', '0.253525573662162');
INSERT INTO `tbl_galeri` VALUES ('7', 'logo,_bkkbn.jpg', '0.5476541663717591');
INSERT INTO `tbl_galeri` VALUES ('8', 'FormatFactory39106968_1781737445255957_4663156644509646848_n.jpg', '0.25259623854486735');
INSERT INTO `tbl_galeri` VALUES ('9', 'Gong-xi-fa-cai-selamat-tahun-baru-imlek.jpg', '0.18124637264020493');
INSERT INTO `tbl_galeri` VALUES ('10', 'Blue-Wave-Abstract-Art-Background-Vector-Graphic.jpg', '0.05398542626484959');
INSERT INTO `tbl_galeri` VALUES ('11', 'hexagon-ragasco-vector-logo.jpg', '0.9590533146569225');
INSERT INTO `tbl_galeri` VALUES ('12', 'background-png-13194.png', '0.4021686940216511');
INSERT INTO `tbl_galeri` VALUES ('13', 'background-flat-blue-1.jpg', '0.805256702841055');
INSERT INTO `tbl_galeri` VALUES ('14', '1658358f37e9f8c.jpg', '0.5911014044250542');
INSERT INTO `tbl_galeri` VALUES ('15', 'Cover_CDi.jpg', '0.6306630307520873');
INSERT INTO `tbl_galeri` VALUES ('16', '3256657136926fa.jpg', '0.24731000198855468');
INSERT INTO `tbl_galeri` VALUES ('17', 'IMG-20190320-WA0034.jpg', '0.7609159269972957');
INSERT INTO `tbl_galeri` VALUES ('18', '580b57fcd9996e24bc43c543(1).png', '0.025262368692336556');
INSERT INTO `tbl_galeri` VALUES ('19', 'whatsapp_PNG15.png', '0.09878964249302757');
INSERT INTO `tbl_galeri` VALUES ('20', 'new-instagram-logo-png-transparent.png', '0.9898192566865831');
INSERT INTO `tbl_galeri` VALUES ('21', 'edit.jpg', '0.0686680767743173');
INSERT INTO `tbl_galeri` VALUES ('22', 'Kampus_Bekasi_2018_1.jpg', '0.0827774620074525');
INSERT INTO `tbl_galeri` VALUES ('25', 'FormatFactory39106968_1781737445255957_4663156644509646848_n1.jpg', '0.15170243891759416');
INSERT INTO `tbl_galeri` VALUES ('26', 'depan-ubj-2800X1300.jpg', '0.4623284155712868');
INSERT INTO `tbl_galeri` VALUES ('27', 'depan-ubj-2800X13001.jpg', '0.36055929838533407');
INSERT INTO `tbl_galeri` VALUES ('29', '86a49ee5ffc6193c0f61cdf866c78bd31.jpg', '0.037400284145635676');
INSERT INTO `tbl_galeri` VALUES ('33', '86a49ee5ffc6193c0f61cdf866c78bd33.jpg', '0.42049832834749823');
INSERT INTO `tbl_galeri` VALUES ('34', '86a49ee5ffc6193c0f61cdf866c78bd34.jpg', '0.06357496809845509');
INSERT INTO `tbl_galeri` VALUES ('36', 'keep-calm-and-study-hard1.jpg', '0.8389782996145887');
INSERT INTO `tbl_galeri` VALUES ('37', 'logo,_bkkbn4.jpg', '0.9812853042163572');
INSERT INTO `tbl_galeri` VALUES ('39', 'avatar2.png', '0.19476680138187197');
INSERT INTO `tbl_galeri` VALUES ('40', 'avatar.png', '0.2743873943399475');
INSERT INTO `tbl_galeri` VALUES ('41', 'avatar3.png', '0.37127377507848913');
INSERT INTO `tbl_galeri` VALUES ('42', 'avatar04.png', '0.5499019483424401');
INSERT INTO `tbl_galeri` VALUES ('43', 'photo1.png', '0.6356973993182355');
INSERT INTO `tbl_galeri` VALUES ('44', 'photo2.png', '0.06697927968809836');
INSERT INTO `tbl_galeri` VALUES ('45', 'photo3.jpg', '0.4271265113510281');
INSERT INTO `tbl_galeri` VALUES ('46', 'photo4.jpg', '0.6374083605199696');
INSERT INTO `tbl_galeri` VALUES ('47', 'user1-128x128.jpg', '0.8202490094097872');
INSERT INTO `tbl_galeri` VALUES ('48', 'user2-160x160.jpg', '0.8410361621251183');
INSERT INTO `tbl_galeri` VALUES ('49', 'user3-128x128.jpg', '0.8407833111732619');
INSERT INTO `tbl_galeri` VALUES ('50', 'user4-128x128.jpg', '0.6948287121849506');
INSERT INTO `tbl_galeri` VALUES ('51', 'avatar1.png', '0.9151438089571353');
INSERT INTO `tbl_galeri` VALUES ('52', 'avatar21.png', '0.28454152015856393');
INSERT INTO `tbl_galeri` VALUES ('53', 'avatar31.png', '0.8407606434433061');
INSERT INTO `tbl_galeri` VALUES ('54', 'avatar041.png', '0.5589081128118032');
INSERT INTO `tbl_galeri` VALUES ('55', 'user3-128x1281.jpg', '0.26293336162426373');
INSERT INTO `tbl_galeri` VALUES ('56', 'user3-128x1282.jpg', '0.0665459300154263');
INSERT INTO `tbl_galeri` VALUES ('57', 'user3-128x1283.jpg', '0.8652171281848455');
INSERT INTO `tbl_galeri` VALUES ('58', 'user1-128x1281.jpg', '0.44809185926640716');
INSERT INTO `tbl_galeri` VALUES ('59', 'avatar4.png', '0.205117130236109');
INSERT INTO `tbl_galeri` VALUES ('60', 'avatar042.png', '0.8316840386995339');

-- ----------------------------
-- Table structure for tbl_kontak
-- ----------------------------
DROP TABLE IF EXISTS `tbl_kontak`;
CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `jdl_alamat` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email_ktk` varchar(50) NOT NULL,
  `tlp_ktk` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_kontak
-- ----------------------------
INSERT INTO `tbl_kontak` VALUES ('1', 'test', 'testing', 'prasetyo507@gmail.com', 'asdas');

-- ----------------------------
-- Table structure for tbl_menu
-- ----------------------------
DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `url_menu` text NOT NULL,
  `urut` int(11) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_menu
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_pengguna
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pengguna`;
CREATE TABLE `tbl_pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tlp` varchar(20) DEFAULT NULL,
  `unitbiro` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_pengguna
-- ----------------------------
INSERT INTO `tbl_pengguna` VALUES ('1', 'admin', 'admin', '123', 'email@email.com', '082219126613', '2');
INSERT INTO `tbl_pengguna` VALUES ('3', 'asdas', 'asdas', 'sadas', 'setyawati.setyawati.irma@gmail.com', 'asdas', '20');
INSERT INTO `tbl_pengguna` VALUES ('4', 'dsf', 'afa', 'af', 'lkbh@ubharajaya.ac.id', '123123', '20');
INSERT INTO `tbl_pengguna` VALUES ('5', 'asdsa', 'asdsd', 'asdasd', 'prasetyo@ubharajaya.ac.id', 'addasd', '10');
INSERT INTO `tbl_pengguna` VALUES ('6', 'xx', 'xx', 'xxx', 'ubj.ubharajaya@gmail.com', 'xx', '30');
INSERT INTO `tbl_pengguna` VALUES ('7', 'sd', 'sd', 'sdsd', 'supriadi@ubharajaya.ac.id', 's', '20');
INSERT INTO `tbl_pengguna` VALUES ('8', 'sadas', 'asdas', 'dasdasd', 'prasetyo507@gmail.com', 'asd', '20');
INSERT INTO `tbl_pengguna` VALUES ('9', 'sds', 'dsd', 'sdsd', 'puskom@ubharajaya.ac.id', 'sd', '20');
INSERT INTO `tbl_pengguna` VALUES ('10', 'asdsad', 'asdsad', 'asdsa', '12@sca', 'sad', '40');
INSERT INTO `tbl_pengguna` VALUES ('11', 'sads', 'sdas', 'sda', 'prasetyo507@gmail.com', 'as', '40');
INSERT INTO `tbl_pengguna` VALUES ('28', 'qqqqq', 'qqqqqqqq', 'qqqqqqqqq', 'prasetyo507@gmail.com', 'qqq', '10');
INSERT INTO `tbl_pengguna` VALUES ('32', 'gh', 'fh', 'fghf', 'prasetyo@ubharajaya.ac.id', 'hg', '40');
INSERT INTO `tbl_pengguna` VALUES ('44', 'asdas', 'asdas', 'asdas', 'prasetyo@ubharajaya.ac.id', 'as', '50');
INSERT INTO `tbl_pengguna` VALUES ('45', 'asdas', 'asdas', 'asdas', 'prasetyo@ubharajaya.ac.id', 'as', '50');
INSERT INTO `tbl_pengguna` VALUES ('63', 'xcvxc', 'qqasfas', '123', 'sdfsdf@sdf', 'asds', '40');

-- ----------------------------
-- Table structure for tbl_portofolio
-- ----------------------------
DROP TABLE IF EXISTS `tbl_portofolio`;
CREATE TABLE `tbl_portofolio` (
  `id_portofolio` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `thumbnail` text NOT NULL,
  `dt_portofolio` datetime NOT NULL,
  PRIMARY KEY (`id_portofolio`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_portofolio
-- ----------------------------
INSERT INTO `tbl_portofolio` VALUES ('4', 'dflkgdfgjk', '<p>lkdfdglfkjg</p>\n', 'photo1_20190424134107.png', '2019-04-24 13:41:07');
INSERT INTO `tbl_portofolio` VALUES ('5', 'slkfmsl;dkfjgljk', '<p>sldjkfgslkdjfg</p>\n', 'user4-128x128_20190424163044.jpg', '2019-04-24 16:30:44');
INSERT INTO `tbl_portofolio` VALUES ('6', 'mdflghldfkhlkdsjgfns', '<p>lsdkjfgnlskjdfglsdjkfsgl</p>\n', 'boxed-bg_20190424163203.jpg', '2019-04-24 16:32:03');
INSERT INTO `tbl_portofolio` VALUES ('7', '', '', 'cashback-4_20190426111157.png', '2019-04-26 11:11:57');

-- ----------------------------
-- Table structure for tbl_price
-- ----------------------------
DROP TABLE IF EXISTS `tbl_price`;
CREATE TABLE `tbl_price` (
  `id_price` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  PRIMARY KEY (`id_price`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_price
-- ----------------------------
INSERT INTO `tbl_price` VALUES ('1', 'melbourne-city-river-tenant-leasing-group-HP-image-1920x93020190426133254.jpg');
INSERT INTO `tbl_price` VALUES ('2', 'tnxXx20190412112509.jpg');
INSERT INTO `tbl_price` VALUES ('3', 'logo,bkkbn.jpg');

-- ----------------------------
-- Table structure for tbl_signature
-- ----------------------------
DROP TABLE IF EXISTS `tbl_signature`;
CREATE TABLE `tbl_signature` (
  `id_c` int(11) NOT NULL AUTO_INCREMENT,
  `nama_company` varchar(100) NOT NULL,
  `singkatan` varchar(50) NOT NULL,
  `logo` text NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_signature
-- ----------------------------
INSERT INTO `tbl_signature` VALUES ('1', 'Aswarangga', 'asw', 'funny-happy-cute-smiling-banana-260nw-105573284920190405112717.jpg');

-- ----------------------------
-- Table structure for tbl_slider
-- ----------------------------
DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE `tbl_slider` (
  `id_slider` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_slider
-- ----------------------------
INSERT INTO `tbl_slider` VALUES ('1', 'melbourne-city-river-tenant-leasing-group-HP-image-1920x93020190426134043.jpg');
INSERT INTO `tbl_slider` VALUES ('2', 'photographer-smoke-camera20190426134153.jpeg');
INSERT INTO `tbl_slider` VALUES ('3', 'Fantastic_world_47115820190426134232.jpg');

-- ----------------------------
-- Table structure for tbl_thumbporto
-- ----------------------------
DROP TABLE IF EXISTS `tbl_thumbporto`;
CREATE TABLE `tbl_thumbporto` (
  `id_fpp` int(11) NOT NULL AUTO_INCREMENT,
  `id_pp` varchar(255) DEFAULT NULL,
  `foto` text,
  PRIMARY KEY (`id_fpp`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_thumbporto
-- ----------------------------
INSERT INTO `tbl_thumbporto` VALUES ('11', '5', '20190424163044_(1)_photo2.png');
INSERT INTO `tbl_thumbporto` VALUES ('12', '5', '20190424163044_(2)_photo3.jpg');
INSERT INTO `tbl_thumbporto` VALUES ('13', '5', '20190424163044_(3)_photo4.jpg');
INSERT INTO `tbl_thumbporto` VALUES ('14', '6', '20190424163203_(1)_avatar.png');
INSERT INTO `tbl_thumbporto` VALUES ('15', '6', '20190424163203_(2)_avatar2.png');
INSERT INTO `tbl_thumbporto` VALUES ('16', '6', '20190424163203_(3)_avatar3.png');
INSERT INTO `tbl_thumbporto` VALUES ('17', '7', '20190426104541_(1)_Black-iPhone-Wallpaper-HD.jpg');
INSERT INTO `tbl_thumbporto` VALUES ('18', null, '20190426111047_(1)_dndb1.PNG');
INSERT INTO `tbl_thumbporto` VALUES ('19', null, '20190426111047_(2)_dndb2.PNG');
INSERT INTO `tbl_thumbporto` VALUES ('20', '7', '20190426111157_(1)_dndb1.PNG');
INSERT INTO `tbl_thumbporto` VALUES ('21', '7', '20190426111157_(2)_dndb2.PNG');
SET FOREIGN_KEY_CHECKS=1;

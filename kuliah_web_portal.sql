-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2016 pada 10.46
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `kuliah_web_portal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id_banner` int(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_banner`),
  KEY `FK_banners_to_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `banners`
--

INSERT INTO `banners` (`id_banner`, `title`, `content`, `image`, `status`, `id_user`) VALUES
(1, 'We are a Creative Digital Agency', '', 'assets/uploads/slide/mac1.png', 1, 1),
(2, 'Portal Website Dinas Pendidikan Kota Yogyakarta', '', 'assets/uploads/slide/Dinas_Pendidikan_Kota_Yogyakarta1.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data untuk tabel `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(55, 1460563086, '::1', 'AGeZOodo'),
(56, 1460563317, '::1', 'xJtBuwxO'),
(57, 1464278596, '::1', 'IZZ0DvAY');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `no_telp` varchar(16) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `comment` text,
  `date_create` datetime DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `no_telp`, `email`, `comment`, `date_create`) VALUES
(1, 'Udin', '083657182238', 'udhien@yahoo.com', 'sdfasdfdfa\r\njhgjkg', '2015-01-01 11:42:52'),
(4, 'testing contact', NULL, 'asf@gmail.com', 'testing..', '2015-01-05 21:03:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `map`
--

CREATE TABLE IF NOT EXISTS `map` (
  `id_map` smallint(3) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `langitude` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_map`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `map`
--

INSERT INTO `map` (`id_map`, `title`, `name`, `content`, `latitude`, `langitude`) VALUES
(1, 'Kontak Kami', '', '<p>Alamat :&nbsp;Dukuh Karanggayam RT 01 RW 03&nbsp;Deresan sleman yogyakarta</p>\r\n\r\n<p>Email : <a href="mailto:amarudhien@gmail.com?subject=Wesite%20Contact">amarudhien@gmail.com</a></p>\r\n\r\n<p>No HP : 085643470045</p>\r\n', '-7.762834261027358', '110.38574337301634');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id_page` int(3) NOT NULL AUTO_INCREMENT,
  `id_category` smallint(4) DEFAULT NULL,
  `name` varchar(30) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `page_update` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL COMMENT 'path file',
  `id_user` int(3) NOT NULL,
  PRIMARY KEY (`id_page`),
  KEY `pages_fk_1` (`id_user`),
  KEY `pages_fk_2` (`id_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pages`
--

INSERT INTO `pages` (`id_page`, `id_category`, `name`, `title`, `content`, `page_update`, `image`, `id_user`) VALUES
(3, 0, 'about', 'TENTANG KAMI', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit</p>\r\n', '2015-01-19 12:48:33', 'assets/uploads/pages/main_image_development1.jpg', 1),
(4, 2, '', 'Jogloindah', '<p>Pembuatan website dengan wordpress untuk klien jogloindah jakarta</p>\r\n\r\n<p><a href="http://jogloindah.com" target="_blank">http://jogloindah.com</a></p>\r\n', '2015-01-18 08:15:45', 'assets/uploads/pages/Joglo_Indah_Furniture_Outdoor_Garden_Furniture.jpeg', 1),
(5, 1, '', 'Portal Website Dinas Pendidikan Kota Yogyakarta', '<p>&nbsp;</p>\r\n\r\n<p>Teknologi internet dan web dari tahun ke tahun berkembang sangat pesat dan terbukti<br />\r\nsangat besar manfaatnya bagi manusia di segala aspek kehidupan di berbagai penjuru dunia dan<br />\r\nkhususnya di Yogyakarta. Pemanfaatan teknologi ini salah satunya adalah Website sebagai wadah<br />\r\npersebaran informasi ke khalayak luas pengguna internet.<br />\r\nPemerintah Kota Yogyakarta, Bagian TIT melihat teknologi sebagai solusi kebutuhan<br />\r\noperasional kedinasan dalam hal ini khususnya adalah publikasi informasi, baik ke masyarakat<br />\r\nmaupun ke pihak internal.<br />\r\nSalah satu Dinas yang difasilitasi teknologi Web sebagai portal informasinya adalah Dinas<br />\r\nPendidikan Kota Yogyakarta. Berawal pada tahun 2008, portal web dinas pendidikan mulai<br />\r\ndikembangkan menggunakan CMS karya anak bangsa yang canggih pada waktu itu yaitu AuraCMS.<br />\r\nSetelah berhasil diluncurkan, terbukti solusi portal informasi web ini cukup efektif, dapat terlihat<br />\r\ndari grafik jumlah pengakses portal web dan interaksi yang terjadi didalamnya. Portal web Dinas<br />\r\nPendidikan tersebut masih digunakan sejak tahun 2008 hingga sekarang.<br />\r\nSeiring dengan berjalannya waktu, banyak hal yang perlu diperbarui demi mencapai <em>website</em><br />\r\nyang sesuai dengan kebutuhan. Untuk itu perlu dilakukan re-desain dengan menerapkan inovasiinovasi yang belum diimplementasikan pada <em>website </em>sehingga terwujud <em>website </em>yang lebih<br />\r\ninformatif dan responsif.</p>\r\n', NULL, 'assets/uploads/pages/Dinas_Pendidikan_Kota_Yogyakarta.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pages_category`
--

CREATE TABLE IF NOT EXISTS `pages_category` (
  `id_category` smallint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `id_user` int(3) NOT NULL,
  PRIMARY KEY (`id_category`),
  KEY `FK_pages_category_1` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pages_category`
--

INSERT INTO `pages_category` (`id_category`, `name`, `description`, `image`, `id_user`) VALUES
(1, 'Web Development', '<p>Lorem ipsum dolor sit amet, consectetur&nbsp;<br />\r\nadipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n', 'assets/uploads/pages/main_image_development.jpg', 1),
(2, 'Wordpress Customize', '<p>WordPress adalah sebuah aplikasi sumber terbuka (open source) yang sangat populer digunakan sebagai mesin blog (blog engine). WordPress dibangun dengan bahasa pemrograman PHP dan basis data (database) MySQL. PHP dan MySQL, keduanya merupakan perangkat ', 'assets/uploads/pages/unduhan.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int(6) NOT NULL AUTO_INCREMENT,
  `id_category` tinyint(3) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL COMMENT 'path file',
  `post_date` datetime NOT NULL,
  `post_update` datetime NOT NULL,
  `id_user` int(3) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1=aktif; 0=tidak',
  PRIMARY KEY (`id_post`),
  KEY `post category` (`id_category`),
  KEY `user posting` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id_post`, `id_category`, `title`, `content`, `image`, `post_date`, `post_update`, `id_user`, `status`) VALUES
(1, 4, 'Inikah Hardisk Ringan Tertipis di Dunia', '<p>Banyak jalan yang ditempuh oleh produsen hardisk untuk berinovasi. Salah satunya adalah yang dilakukan Seagate, dengan merilis hardisk eksternal yang diklaim sebagai hardisk 500GB yang katanya tertipis di dunia.<br />\r\nSeagate Seven, namanya. Sesuai dengan ketebalannya yang hanya 7mm, lebih tipis dibanding iPhone 6 Plus. Padahal di dalamnya ada kepingan-kepingan penyimpan data yang berputar secara mekanik.<br />\r\nTak cuma tipis, bobotnya pun terbilang ringan, yaitu 90 gram. Casingnya pun terlihat mewah karena terbuat dari logam.<br />\r\nUntuk konektivitas, Seagate Seven dibekali dengan port USB 3.0. Dikutip&nbsp;detikINET&nbsp;dari&nbsp;The Verge, Senin (5/1/2015), hardisk ini akan dibanderol dengan harga USD 99,99 atau sekitar Rp 1,2 juta (USD 1 = Rp 12.000).<br />\r\nPeluncuran hardisk ini dalam rangka memperingati 35 tahun Seagate sejak mulai memproduksi massal hardisk 5,25 inch untuk PC.<br />\r\nSayangnya, tipisnya hardisk ini juga membuat kapasitasnya mentok di 500 GB, dan tak tersedia varian kapasitas lain. Seagate Seven akan mulai tersedia pada pertengahan bulan Januari 2015 ini.</p>\r\n\r\n<p>\\r\\n</p>\r\n', 'assets/uploads/posts/seven_sketch_collage6.jpg', '2015-01-05 13:54:50', '2015-01-19 19:54:50', 1, 1),
(2, 4, 'Tegra X1, Prosesor Anyar nan Gahar dari Nvidia', '<p>Gelaran CES 2015 digunakan Nvidia untuk merilis prosesor mobile terbarunya, Tegra X1. Prosesor ini mempunyai GPU 256 inti dengan octa core CPU 64 bit, dengan performa dua kali lipat lebih tinggi dibanding pendahulunya, Tegra K1.</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>Dengan spek seperti itu, CEO Nvidia Jen-Hsun Huang mengklaim bahwa Tegra X1 adalah superchip mobile pertama di dunia. Chipset ini dibuat dengan arsitektur Maxwell, yang dikatakan merupakan kombinasi dari kecepatan dan efisiensi.&nbsp;</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>Maxwell adalah arsitektur yang juga digunakan dalam GPU PC papan atas GTX 980. Penggunaan arsitektur yang sama ini seharusnya akan mempermudah proses&nbsp;<em>porting</em>&nbsp;dari game PC ke game mobile.</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>Disitat&nbsp;<strong>detikINET&nbsp;</strong>dari&nbsp;<em>The Verge</em>, Senin (5/1/2015), Tegra X1 bisa menangani video 4K dengan refresh rate 60 Hz, dan chip mobile pertama yang mampu menghasilkan kekuatan komputasi di atas 1 teraflop.</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>Sekadar informasi, komputer pertama yang mampu melewati tingkat komputasi 1 teraflop pertama muncul pada tahun 2000. Komputer super itu membutuhkan listrik setidaknya 1 juta watt untuk bisa beroperasi.</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>Dalam waktu dekat, Tegra X1 akan digunakan menjadi otak dari Drive CX digital cockpit computer. Yaitu sebuah sistem yang akan menjalankan serangkaian layar di dalam mobil yang bisa menampilkan kecepatan, temperatur, dan juga hiburan.</p>\r\n\r\n<p>\\r\\n\\r\\n</p>\r\n\r\n<p>Dengan begitu, ke depannya kemungkinan Tegra X1 bisa saja digunakan dalam perangkat berbasis Android Auto atapun Car Play milik Apple.</p>\r\n\r\n<p>\\r\\n</p>\r\n', '', '2015-01-05 17:54:09', '2016-04-13 22:54:09', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_category`
--

CREATE TABLE IF NOT EXISTS `post_category` (
  `id_category` tinyint(6) NOT NULL AUTO_INCREMENT,
  `id_group` tinyint(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_category`),
  KEY `FK_post_category_1` (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `post_category`
--

INSERT INTO `post_category` (`id_category`, `id_group`, `name`) VALUES
(3, 1, 'Lorem Ipsum'),
(4, 1, 'Teknologi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post_group`
--

CREATE TABLE IF NOT EXISTS `post_group` (
  `id_group` tinyint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `post_group`
--

INSERT INTO `post_group` (`id_group`, `name`) VALUES
(1, 'Berita');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(35) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `id_group` smallint(3) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `user group` (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `username`, `password`, `last_login`, `id_group`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2016-05-26 16:03:42', 1),
(2, 'admin1', 'admin1', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
  `id_group` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user_group`
--

INSERT INTO `user_group` (`id_group`, `name`) VALUES
(1, 'Admin'),
(2, 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_track`
--

CREATE TABLE IF NOT EXISTS `user_track` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ip` varchar(16) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `FK_banners_to_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_fk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pages_category`
--
ALTER TABLE `pages_category`
  ADD CONSTRAINT `FK_pages_category_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post category` FOREIGN KEY (`id_category`) REFERENCES `post_category` (`id_category`),
  ADD CONSTRAINT `user posting` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `post_category`
--
ALTER TABLE `post_category`
  ADD CONSTRAINT `FK_post_category_1` FOREIGN KEY (`id_group`) REFERENCES `post_group` (`id_group`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user group` FOREIGN KEY (`id_group`) REFERENCES `user_group` (`id_group`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

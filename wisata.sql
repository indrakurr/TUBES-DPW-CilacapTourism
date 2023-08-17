-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2023 pada 17.12
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_telp` varchar(30) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Indra Kurniawan', 'admin', 'admin', '+628xxxxxxxxxx', 'indrakurniawan@gmail.com', 'Purwokerto');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(12, 'Pantai'),
(13, 'Gunung'),
(15, 'Pulau'),
(16, 'Tempat Bersejarah'),
(17, 'Hutan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(15, 15, 'Pulau Nusakambangan', 25000, '<p>Pulau Nusakambangan adalah pulau di lepas pantai Cilacap. Orang-orang mengenal pulau ini sebagai tempat keberadaan Lembaga Pemasyarakatan (Lapas) berkeamanan tinggi yang dihuni oleh tahanan kelas kakap berkasus berat. Tapi siapa yang menyangka jika sebetulnya pulau seluas 121 kilometer persegi ini juga menyimpan potensi wisata yang besar. Image seram akan napi kelas kakap yang dipenjara di pulau ini pun tak menjadi halangan bagi traveler untuk menjelajahi wilayahnya.</p>\r\n\r\n<p>Potensi besar yang dimiliki pulau Nusakambangan bisa dilihat dari status pulau tersebut yang mana selain sebagai tempat Lapas pulau ini juga menyandang status sebagai cagar alam yang menjadi habitat bagi pohon-pohon langka serta aneka satwa. Selain itu ada pula pantai-pantai yang indah serta gua dan bangunan peninggalan Belanda yang menarik untuk dijadikan obyek wisata. Tak heran jika sedikit demi sedikit banyak traveler yang tertarik berkunjung ke pulau ini. Berikut Travelingyuk rangkumkan 8 tempat menarik di Nusakambangan yang bisa traveler kunjungi.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'produk1690024828.jpg', 1, '2021-11-28 14:43:04'),
(17, 16, 'Benteng Pendem', 7500, '<p>Bernama asli&nbsp;<em>Kustbatterij Op De Landtong Te Tjilatjap</em>&nbsp;yang berarti suatu bangunan benteng yang menjorok ke arah laut di Cilacap. Penamaan tersebut menunjukkan letak Benteng Pendem yang berada di kawasan Teluk Penyu Cilacap. Lokasi ini sangat strategis karena dekat dengan laut. Benteng Pendem dibangun secara bertahap selama 18 tahun dari tahun 1861 sampai dengan 1879. Sejak berdiri Benteng Pendem digunakan oleh tentara Belanda sampai tahun 1942, setelah itu dikuasai oleh Jepang sampai tahun 1945. Seiring berakhirnya penjajahan Jepang di Indonesia, Benteng Pendem &nbsp;diambil alih oleh TNI sampai tahun 1965. Setelah itu benteng ini terbengkalai yang menjadikan hampir seluruh bangunan tertimbun tanah. Hal inilah yang kemudian oleh masyarakat dinamai Benteng Pendem. Namun, pada tahun 1986 Benteng Pendem mulai dikelola kembali hingga kini menjadi salah satu daya tarik wisata di Kabupaten Cilacap.</p>\r\n', 'produk1690025741.jpg', 1, '2023-07-22 11:35:41'),
(19, 13, 'Gunung Selok', 5000, '<p>Tempat wisata di Cilacap yang satu ini konon diduga menjadi tempat petilasan Ir. Soekarno, serta diduga menjadi tempat &ldquo;wahyu&rdquo; tentang Pancasila kepada Bung Karno.</p>\r\n\r\n<p>Dari dulu, memang Gunung Selok sangat identik dengan wisata alam yang memiliki tempat-tempat petilasan yang dikeramatkan.</p>\r\n\r\n<p>Namun, saat ini Gunung Selok bukan hanya sekedar tentang itu saja. Gunung Selok mampu menghadirkan nuansa wisata alam kekinian, dengan menyajikan spot selfie instagramable, dan salah-satu latarnya adalah Samudera Hindia.</p>\r\n\r\n<ul>\r\n	<li>Lokasi Gunung Selok berada di alamat Karangbenda, Adipala, Kabupaten Cilacap, Provinsi Jawa Tengah.</li>\r\n	<li>Harga tiket masuk Gunung Selok Rp. 5.000 per orang.</li>\r\n	<li>Jam buka mulai pukul 08.00 hingga 17.00</li>\r\n</ul>\r\n', 'produk1690025893.jpg', 1, '2023-07-22 11:38:13'),
(20, 17, 'Kemit Forest', 7000, '<p>Tempat wisata di Cilacap yang kekinian, memiliki ragam spot yang instagramable, dan cocok untuk semua usia, bernama Kemit Forest.</p>\r\n\r\n<p>Kemit Forest adalah sebuah kawasan hutan pinus, yang dilengkapi dengan berbagai macam wahana wisata, serta berbagai macam spot selfie yang instagramable.</p>\r\n\r\n<p>Wahana wisata di Kemit Forest juga beberapa di antaranya memiliki nilai edukatif. Oleh karena itu, Kemit Forest sangat layak dijadikan destinasi wisata keluarga di Cilacap yang hits.</p>\r\n\r\n<ul>\r\n	<li>Lokasi Kemit Forest berada di alamat Jalan Srikaya Karanggedang, Kecamatan Gandrungmangu, Kabupaten Cilacap, Provinsi Jawa Tengah.</li>\r\n	<li>Harga tiket masuk Kemit Forest Rp. 6.000,-</li>\r\n	<li>Jam buka: 09.00 hingga 17.15</li>\r\n</ul>\r\n', 'produk1690025984.jpg', 1, '2023-07-22 11:39:44'),
(22, 12, 'Pantai Teluk Penyu', 5000, '<p>Pantai Teluk Penyu terletak di Kelurahan Cilacap Kecamatan Cilacap Selatan. Pantai dengan deburan ombak yang relatif kecil aman bagi pengunjung&nbsp;untuk berenang, pasir yang bersih dan air laut yang jernih serta pemandangan pulau Nusakambangan yang terlihat begitu indah, ditambah rindangnya pohon-pohon ditepi pantai menambah kesejukan, serta perahu-perahu nelayan dan kapal-kapal besar yang hilir mudik ke pelabuhan serta panorama pantai pada saat terbit matahari.. Tersedia juga perahu wisata yang bisa mengantar wisatawan ke pulau Nusakambangan&nbsp;yang berpasir putih dan aneka souvenir yang terbuat dari kerang, pasar ikan dan berbagai masakan hasil laut.</p>\r\n', 'produk1690191281.jpg', 1, '2023-07-24 09:34:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

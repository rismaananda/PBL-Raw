-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 04:46 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_user`
--

CREATE TABLE `tbl_data_user` (
  `id_user` int(10) NOT NULL,
  `id_login` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `link_vendor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data_user`
--

INSERT INTO `tbl_data_user` (`id_user`, `id_login`, `nama`, `tanggal_lahir`, `alamat_user`, `no_hp`, `link_vendor`) VALUES
(1, 1, 'Vehement Capital Partners', '2001-05-18', 'tanjung buntung', '08888888', 'https://meganadelia.blogspot.com/'),
(2, 2, 'Massive Dynamic Pro', '2001-05-10', 'Tanjung Buntung Kav,  Kelurahan Tanjung Buntung', '085271772709', 'https://meganadelia.blogspot.com/'),
(3, 4, 'Umbrella Corporation', '2001-05-03', 'united kingdom wesetminister', '0912383132', ''),
(16, 17, 'Megan Corporation', '2021-07-07', 'New Zealand', '234324324324', 'https://meganadelia.blogspot.com/'),
(17, 19, 'Harby Corporation', '2021-07-21', 'Tanjung Buntung Kav,  Kelurahan Tanjung Buntung', '2434234', 'https://meganadelia.blogspot.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorite`
--

CREATE TABLE `tbl_favorite` (
  `id_fav` int(10) NOT NULL,
  `id_user_fav` int(10) NOT NULL,
  `id_product` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_favorite`
--

INSERT INTO `tbl_favorite` (`id_fav`, `id_user_fav`, `id_product`) VALUES
(2, 2, 58),
(9, 2, 45),
(14, 2, 40),
(16, 1, 46);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id_fb` int(11) NOT NULL,
  `nama_fb` varchar(255) NOT NULL,
  `subjek_fb` varchar(255) NOT NULL,
  `email_fb` varchar(100) NOT NULL,
  `nomor_fb` varchar(100) NOT NULL,
  `pesan_fb` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id_fb`, `nama_fb`, `subjek_fb`, `email_fb`, `nomor_fb`, `pesan_fb`) VALUES
(6, 'RIsma', 'Website', 'risma@gmail.com', '9093243', 'Kenapa ga mau logout'),
(7, 'ananda', 'profile', 'anada@gmail.com', '085271772709', 'kenapa profile belum siap\r\n'),
(8, 'sayaaaaa', 'Tentang website', 'example@gmail.com', '09878782', 'Why still problem'),
(9, 'dannnn', 'daamanas', 'asdasd@gmail.com', '123213213213', 'why why'),
(10, 'yooooo', 'asdsd', 'asdasd@gmail.com', '12323', 'dfsfdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(10) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `input_gambar` varchar(100) NOT NULL,
  `id_user` int(10) NOT NULL,
  `input_gambar_2` varchar(100) NOT NULL,
  `input_gambar_3` varchar(100) NOT NULL,
  `input_gambar_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `nama_product`, `harga`, `berat`, `alamat`, `deskripsi`, `input_gambar`, `id_user`, `input_gambar_2`, `input_gambar_3`, `input_gambar_4`) VALUES
(40, 'Kamera Canon', '150000', '2', 'Tanjung Buntung Kav,  Kelurahan Tanjung Buntung\r\nBlok A No09. RT 08 RW 02', 'Kamera sangat bagus untuk foto', '4.jpg', 1, 'kamera3_1.jpg', 'kamera2_1.jpg', '1626362722_84fa029afffff662a6ed.jpg'),
(41, 'Kamera Sony', '130000', '2', 'Batamindo Industrial Park, Jl. Rambutan Lot No.504-508A, Kabil, Kecamatan Nongsa, Kota Batam, Kepula', 'Sony alfa 6000', 'kamera3.jpg', 2, '4.jpg', 'kamera2.jpg', 'kamera1.jpg'),
(42, 'Kamera Fuji Film', '160000', '2', 'Kedoya Elok Plaza Bl DA/6, Dki Jakarta', 'Kamera Sangat jernih', 'kamera1.jpg', 3, 'image-2.jpg', 'kamera2.jpg', 'kamera3.jpg'),
(43, 'Kemeja Hitam', '50000', '1', 'Street:  Jl H Yahya 25 RT 002/09, Dki Jakarta\r\n\r\nCity:   Dki Jakarta\r\n\r\nState/province/area:    Jaka', 'Sangat nyaman dipakai', '3.jpg', 3, 'eo.jpg', 'b2.jpg', 'a1.jpg'),
(44, 'Blazer Abu-abu', '80000', '1', 'JL.Pejuang no.98, Jawa Barat', 'Tampil Modern', 'b1.jpg', 2, '3.jpg', 'b2.jpg', 'img-2.jpg'),
(45, 'Luxury Gorden', '2000000', '4', 'Jl Tebet Dlm III A 1, Dki Jakarta', 'Gorden sangat Mewah', '2.1.jpg', 1, 'a6.jpg', 'a3.jpg', 'a6.jpg'),
(46, 'Mic 1 Set', '30000', '3', 'JL.Rajawali No.4, Palu', 'Mic 1 set lengkap', '1.jpg', 2, 'a4.jpg', 'image-1.jpg', 'image-2.jpg'),
(47, 'Baju Badut', '50000', '3', 'Jl H Yahya 25 RT 002/09, Dki Jakarta', 'Kostum Badut', 'b2.jpg', 2, '4.jpg', 'a4.jpg', 'a6.jpg'),
(48, 'Black Luxury Gorden', '500000', '4', 'Jl Raden Patah 85 Semarang, Jawa Tengah', 'Warna sangat bagus dan mewah', 'a6.jpg', 2, '2.1.jpg', 'image-1.jpg', '2.jpg'),
(49, 'baru', '20', '3', 'Tanjung Buntung Kav,  Kelurahan Tanjung Buntung\r\nBlok A No09. RT 08 RW 02', 'bagus deh', '2.1.jpg', 2, '3.jpg', 'a6.jpg', 'b2.jpg'),
(54, 'Baju Boneka cantik', '70000', '5', 'Apartemen Tanjung Buntung Kav,  Kelurahan Tanjung Buntung\r\nBlok A No09. RT 08 RW 02', 'baju sangat diminati banyak orang banyak', '2.jpg', 1, '4_2.jpg', 'a6_2.jpg', 'a4_1.jpg'),
(58, 'Baju bagusss', '1120000', '12', 'AL Tanjung Buntung Kav,  Kelurahan Tanjung Buntung\r\nBlok A No09. RT 08 RW 02', 'Bajuu kerennnn Bangettt 2', '2.jpg', 3, '3.jpg', '1.jpg', 'a6.jpg'),
(60, 'Kemejaa keren be', '80000', '2', 'Tanjung Buntung Kav,  Kelurahan Tanjung Buntung\r\nBlok A No09. RT 08 RW 02', 'Kemeja bahan abgus', 'b1.jpg', 3, 'b2.jpg', 'b2.jpg', 'a3.jpg'),
(61, 'Baju Kemeja Keren banget', '80000', '3', 'Tanjung Buntung Kav,  Kelurahan Tanjung Buntung\r\nBlok A No09. RT 08 RW 02', 'Baju nyaman di pakai sekali', '3.jpg', 1, 'b1_1.jpg', 'a1_1.jpg', '3_1.jpg'),
(63, 'Barang baru', 'asds', 'sdasd', 'sdsasd', 'sadsad', '2.1_2.jpg', 1, 'a2_1.jpg', '4_1.jpg', 'a6_1.jpg'),
(77, 'Baru baru', '13', '1', 'Tanjung Buntung Kav,  Kelurahan Tanjung Buntung\r\nBlok A No09. RT 08 RW 02', 'asdsdas', '1626336527_6328516a257d3967af4a.png', 3, '1626336527_c6d1f365a7bc55038ec8.png', '1626336546_039204d3da1204a63826.png', '1626336527_9a044f68cc5eaa325968.png'),
(81, 'Harby first product', '12323', '2', 'New Zealand', 'adssdsad', '1626411171_69dd09e0a99383cf4405.jpg', 17, '1626411171_602b2d1487a06b6c602d.jpg', '1626411171_70631609ee006262c06b.jpg', '1626411185_1cae503896470f4fe6ac.jpg'),
(82, 'Vendor product', '1200000', '1', 'New Zealand', 'Barang dengan Kualitas terjamin', '1626625167_4b501389ffe8d66101c1.jpg', 2, '1626625167_243f550d30c1147f69f6.jpg', '1626625191_e8a6493b8cdd704fa409.jpg', '1626625167_717fdf2e2590195ab24c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_login` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_login`, `username`, `password`, `email`) VALUES
(1, 'risma', '12345', 'rismaananda18@yahoo.com'),
(2, 'Vendor', '12345', 'vendor@gmail.com'),
(3, 'admin', 'admin', 'admin.apbpa@gmail.com'),
(4, 'saya', 'saya', 'rismaananda11@gmail.com'),
(17, 'megan', 'megan', 'vendor@gmail.com'),
(19, 'harby', 'harby', 'harby@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `tbl_favorite`
--
ALTER TABLE `tbl_favorite`
  ADD PRIMARY KEY (`id_fav`),
  ADD KEY `id_user` (`id_user_fav`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id_fb`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_favorite`
--
ALTER TABLE `tbl_favorite`
  MODIFY `id_fav` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id_fb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_login` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_data_user`
--
ALTER TABLE `tbl_data_user`
  ADD CONSTRAINT `tbl_data_user_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `tbl_user` (`id_login`);

--
-- Constraints for table `tbl_favorite`
--
ALTER TABLE `tbl_favorite`
  ADD CONSTRAINT `tbl_favorite_ibfk_1` FOREIGN KEY (`id_user_fav`) REFERENCES `tbl_data_user` (`id_user`),
  ADD CONSTRAINT `tbl_favorite_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `tbl_product` (`id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_data_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

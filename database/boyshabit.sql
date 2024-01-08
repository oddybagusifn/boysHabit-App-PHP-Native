-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2024 pada 19.45
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boyshabit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_product`
--

CREATE TABLE `detail_product` (
  `id_transaksi` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `sub_total` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` varchar(225) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `ukuran` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `rating` float(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id_product`, `nama`, `stok`, `harga`, `image`, `deskripsi`, `ukuran`, `gender`, `rating`) VALUES
(1, 'Unisex Black Crewneck', 100, '500.000', 'https://cdn.discordapp.com/attachments/1176505133174095922/1192137781720399992/product1.jpg?ex=65a7fbd4&is=659586d4&hm=0107974728384c71040c37e348b0c6ed8003bb227d8fb29d48112bb8f2d18415&', 'Size ( Length x Chest )<br>\r\n1 ( 72 cm x 65 cm ) <br>\r\n2 ( 75cm x 68 cm ) <br>\r\n\r\nModel Man 177 cm 58 kg wearing size 2 \r\n\r\n100% Cotton <br>', 'S, M, L, XL, XXL', 'Unisex', 5),
(2, 'Unisex White T-Shirt', 100, '100.000', 'https://cdn.discordapp.com/attachments/843046027958288407/1192214394348765234/product2.jpg?ex=65a8432d&is=6595ce2d&hm=5aa095d43b703897427da9a37b84f8ef74b751da1d8a4843a1be92b9c5a83a2d&', 'Size ( Length x Chest x Shoulder )<br>\r\n1 ( 74 cm x 62 cm x 60 cm )<br>\r\n2 ( 78 cm x 69 cm x 67 cm )<br>\r\n\r\n100% Cotton<br>\r\n\r\nModel Man 177 cm 58 kg wearing size 2 <br>', 'XS, S, M, L, XL, XXL', 'Unisex', 5),
(3, 'Unisex Grey Hoodie', 50, '700.000', 'https://cdn.discordapp.com/attachments/843046027958288407/1192236647614517298/product3.jpg?ex=65a857e7&is=6595e2e7&hm=44f25e03f74853cf798b5ca395032c34a370aa5954d5c08ab05bf3e5081edce2&', 'Size ( Length x Chest x Sleeve )<br>\r\n1 ( 73cm x 68cm x 40cm )<br>\r\n2 ( 76cm x 71cm x 42cm )<br>\r\n\r\n100% Cotton<br>\r\n\r\nModel Man 177 cm 58 kg wearing size 2 <br>', 'S, M, L, XXL', 'Unisex', 5),
(4, 'Oversized Beige T-Shirt\r\n', 50, '150.000', 'https://cdn.discordapp.com/attachments/843046027958288407/1192724233630011473/blank_beige.jpg?ex=65aa1e01&is=6597a901&hm=b735fbc18db9b2231ea752af146fd988eaea7fc1515de678fbb75aef5a1ef54d&', 'Size ( Length x Chest x Shoulder )<br>\r\n1 ( 74cm x 60cm x 58cm )<br>\r\n2 ( 77cm x 62cm x 62cm )<br>\r\n\r\nModel Woman wearing size 2<br>', 'XS, S, M, L, XL, XXL', 'Unisex', 5),
(5, 'Oversized Black Hoodie', 50, '700.000', 'https://cdn.discordapp.com/attachments/843046027958288407/1192261893742674010/product4.jpg?ex=65a86f6a&is=6595fa6a&hm=3c3e6385392b189c66ce87170fd145bf8db7721e0a2e35a5bc2c5156a44cb2ad&', 'Size ( Length x Chest x Sleeve )\r\n1 ( 73cm x 68cm x 40cm )\r\n2 ( 76cm x 71cm x 42cm )\r\n\r\n100% Cotton\r\n\r\nModel Man 177 cm 58 kg wearing size 2 \r\n\r\nPlease allow 1-3 cm difference due to manual', 'S, M, L, XL', 'Unisex', 4),
(6, 'Black Shortpants', 100, '70.000', 'https://cdn.discordapp.com/attachments/843046027958288407/1192720493086789732/Shorts_-_Mockup_Bundle.jpeg?ex=65aa1a85&is=6597a585&hm=ca16b44aad2a978cd0cc4b666fdec14a65e4326522cbd41fef2defa762add23d&', 'Size (Length x Waist x Thigh)<br>\r\n1 ( 45cm x 52cm x 36cm )<br>\r\n2 ( 46cm x 54cm x 37cm )<br>\r\n\r\nModel Woman 170 cm 50 kg wearing size 2 <br>', '29, 30, 32, 34, 36', 'Male', 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_product`
--
ALTER TABLE `detail_product`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_product` (`id_product`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_product`
--
ALTER TABLE `detail_product`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_product`
--
ALTER TABLE `detail_product`
  ADD CONSTRAINT `detail_product_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

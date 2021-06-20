-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 06 Haz 2021, 23:36:18
-- Sunucu sürümü: 10.4.13-MariaDB
-- PHP Sürümü: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `phpdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_ids` text NOT NULL,
  `product_quantitys` text NOT NULL,
  `shipping_address` text NOT NULL,
  `country` varchar(200) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `payment_method` text NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_ids`, `product_quantitys`, `shipping_address`, `country`, `zip_code`, `city`, `payment_method`, `total`) VALUES
(1, 1, '29,1,4', '1,2,3', 'adres adres mah. sok.', 'türkiye', '07300', 'antalya', 'creditCard', 640),
(2, 1, '35', '1', '', '', '', '', '', 32),
(3, 25, '1,5,2,27', '1,1,2,1', 'mahalle sokakk', 'türkiye', '34565w', 'mugla', 'wireTransfer', 525),
(4, 1, '1,3,5,22,20', '3,1,3,1,1', 'adres sok mahalle blabla', 'türkiye', '07488', 'mugla', 'creditCard', 1013);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(70) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `image` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `description`, `category`, `gender`, `image`) VALUES
(1, 'Women\'s Blue Patterned Short Sleeve Dress', 200, 'There are less than 5 stocks to be sold at the campaign price.', 'dress', 'women', 'img/women/dress/w1.jpg'),
(2, 'Women\'s Poplin Dress Square Collar', 100, 'A maximum of 50 of this product can be ordered.', 'dress', 'women', 'img/women/dress/w2.jpg'),
(3, 'Women\'s Lace Dress Ruffled Guipure Cotton', 270, 'A product can be sold by more than one seller.', 'dress', 'women', 'img/women/dress/w3.jpg'),
(4, 'Polo Neck Slim Fit T-Shirt Without Pocket', 65, 'It is produced with special non-shrinkage yarns and knitting technique.', 'tshirt', 'men', 'img/men/tshirt/e1.jpg'),
(5, 'Girl\'s Red Printed Cotton T-Shirt', 15, 'More than 5 stocks were offered to be sold at the campaign price.', 'tshirt', 'kids', 'img/kids/tshirt/k1.jpg'),
(20, 'White Back Printed Oversized T-shirt', 50, 'Due to the studio lights, there may be a color difference.', 'tshirt', 'women', 'img/women/tshirt/w7.jpg'),
(22, 'Black Harry Potter Sweat', 48, 'Our t-shirts do not shrink in the fabric, fade in printing or come off.', 'sweat', 'men', 'img/men/sweat/e3.jpg'),
(23, 'Orange Hooded Winter Fleece Sweatshirt', 40, 'A maximum of 10 of this product can be ordered.', 'sweat', 'women', 'img/women/sweat/w9.jpg'),
(24, 'Black Printed Fleece Sweatshirt', 60, 'A maximum of 10 of this product can be ordered.', 'sweat', 'women', 'img/women/sweat/w8.jpg'),
(25, 'Red Oversize Unisex Sweatshirt With Pocket', 77, 'A product can be sold by more than one seller.', 'sweat', 'women', 'img/women/sweat/w10.jpg'),
(26, 'Navy High Waist Skinny Jeans', 200, 'Colors may vary due to light difference in studio shootings.', 'jean', 'women', 'img/women/jean/w11.jpg'),
(27, 'Black High Waist Skinny Jeans', 110, 'Colors may vary due to light difference in studio shootings.', 'jean', 'women', 'img/women/jean/w12.jpg'),
(29, 'Men Tapared Skinny Jeans', 45, 'Colors may vary due to light difference in concept shots.', 'jean', 'men', 'img/men/jean/e4.jpg'),
(30, 'Blue Men Skinny Jeans', 64, 'Colors may vary due to light difference in concept shots.', 'jean', 'men', 'img/men/jean/e5.jpg'),
(31, 'Black Mens Ripped Fray Skinny Jeans', 100, 'Colors may vary due to light difference in concept shots.', 'jean', 'men', 'img/men/jean/e6.jpg'),
(32, 'Polka Dot Chiffon Dress', 200, 'Colors may vary due to light difference in concept shots.', 'dress', 'kids', 'img/kids/dress/k2.jpg'),
(33, 'Girl Red Polka Dot Dress', 300, 'Polka dot dress made from woven poplin fabric. Red velvet buckle and gold belt gift.', 'dress', 'kids', 'img/kids/dress/k3.jpg'),
(34, 'Sunflower Patterned Flywheel Skirt Blue Suit', 250, 'Colors may vary due to light difference in concept shots.', 'dress', 'kids', 'img/kids/dress/k4.jpg'),
(35, 'Boys Printed Cotton Short Tshirt', 32, 'Colors may vary due to light difference in concept shots.', 'tshirt', 'kids', 'img/kids/tshirt/k2.jpg'),
(37, 'Palm Pattern Short Sleeve T-Shirt', 50, 'Colors may vary due to light difference in concept shots.', 'tshirt', 'kids', 'img/kids/tshirt/k5.jpeg'),
(42, 'Deren', 1234, 'abcdasasasa', 'dress', 'men', 'img/men/tshirt/e1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `lastname`, `email`, `phone`, `password`, `role`) VALUES
(1, '', 'Deren', 'toy', 'derentoy@gmail.com', 12345678, 'deren', 'customer'),
(2, '', 'Ayşe', 'Gezen', 'aysegezen@gmail.com', 2147483647, 'ayşe', 'customer'),
(3, '', 'Görkem', 'Savran', 'görkemsavran@gmail.com', 2322322, 'görkem', 'customer'),
(4, 'admin123', '', '', 'admin@gmail.com', 0, 'admin', 'admin'),
(5, '', 'Melis', 'Ersin', 'prensesmelis@hotmail.com', 533524544, 'melis', 'customer'),
(6, '', 'görkem', 'savran', 'gorkemsavran@posta.mu.edu.tr', 534565748, 'görkem', 'customer'),
(7, '', 'deneme', 'deneme', 'deneme@gmail.com', 11212121212, 'deneme', 'customer'),
(8, '', 'abc', 'abc', 'abc@gmail.com', 423232, 'abc', 'customer'),
(9, '', 'abcd', 'abcd', 'abcd@gmail.com', 123456778, 'abcd', 'customer'),
(11, '', 'Deren', 'toytoy', 'deren07@gmail.com', 12345678, 'derentoy', 'customer'),
(12, '', 'Deren', 'hello', 'hello@gmail.com', 1234567, 'deren', 'customer'),
(13, '', 'isim', 'soyisim', 'isim@gmail.com', 0, 'isim', 'customer'),
(14, 'admin1412', '', '', 'admin1412@gmail.com', 0, 'admin', 'admin'),
(15, 'admin111', '', '', 'admin111@gmail.com', NULL, 'admin', 'admin'),
(23, '', 'hell', 'hell', 'hell@gmail.com', 122423, 'hell', 'customer'),
(24, 'adminnew', '', '', 'adminnew@gmail.com', NULL, 'adminnew', 'admin'),
(25, '', 'yeniyi', 'yeniyim', 'yeniyim@gmail.com', 123456, 'yeni', 'customer'),
(26, '', 'deneme2', 'deneme2', 'deneme2@gmail.com', 1234, 'deneme', 'customer'),
(27, 'admin222', '', '', 'admin222@gmail.com', NULL, 'admin222', 'admin');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

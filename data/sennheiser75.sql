-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-16 10:23:22
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `sennheiser75`
--

-- --------------------------------------------------------

--
-- 資料表結構 `address_book`
--

CREATE TABLE `address_book` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `address_book`
--

INSERT INTO `address_book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES
(1, '廖金樺', '5781@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(2, '胡希卉', '546@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(5, '江姿誼', '5387@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(6, '呂有容', '5297@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(7, '徐孟君', '324@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(9, '李一明', '7673@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(10, '李二明', '1179@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(13, '王小玉', '2876@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(17, '李三明', '841@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(18, '李四明', '5580@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(19, '李五明', '5375@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(20, '李六明', '133@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(21, '李七明', '4544@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(22, '李八明', '2319@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(23, '李九明', '7962@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(24, '王蓮雪', '2854@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(25, '郭高雄', '383@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(26, '李高明', '3352@gmail.com', '0918111222', '1990-05-07', '台南市', '2020-04-06 16:31:02'),
(27, '方大同', '5613@gmail.com', '0918-222555', '1990-04-01', '新北市', '2020-04-08 11:50:22'),
(28, '王小五', '8007@gmail.com', '0918-222333', '0000-00-00', '高雄市', '2020-04-08 12:05:21'),
(29, '呂三安', '3196@gmail.com', '0918-222333', '2020-04-08', '新北市', '2020-04-09 14:56:05'),
(30, '林三大', '1959@gmail.com', '0918-222333', '2020-04-01', '高雄市', '2020-04-09 15:11:01'),
(33, '方大同', '206@gmail.com', '0918-222555', '2020-04-01', '新北市', '2020-04-09 16:31:09'),
(34, '林小白', '5155@gmail.com', '0999-123-456', '1995-05-05', '台北市', '2020-04-10 09:23:56'),
(36, '王小六', '5156@gmail.com', '0934-123654', '2020-04-09', '高雄市', '2020-04-10 10:12:09'),
(37, '林小王', '316@gmail.com', '0918-222333', '2020-04-01', '台北市', '2020-04-10 14:03:13'),
(40, '王小丸', 'nahoy@gmail.com', '0912346789', '2020-11-18', '高雄市', '2020-11-12 13:56:50'),
(46, '林小玉', '123@gmail.com', '0932165498', '2020-11-12', '新北市', '2020-11-12 14:03:30'),
(47, '林小山', '123@gmail.com', '0932165498', '2020-11-12', '台北市', '2020-11-12 14:36:29'),
(48, '莊玉山', '123@gmail.com', '0932165498', '2020-11-12', '高雄市', '2020-11-12 14:36:32');

-- --------------------------------------------------------

--
-- 資料表結構 `coupon`
--

CREATE TABLE `coupon` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `coupon_mumber` varchar(255) NOT NULL,
  `discountprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `coupon`
--

INSERT INTO `coupon` (`sid`, `member_sid`, `coupon_mumber`, `discountprice`) VALUES
(1, 11, 'QAZ123', 200),
(2, 1, 'HMG930', 100);

-- --------------------------------------------------------

--
-- 資料表結構 `delivery_fee`
--

CREATE TABLE `delivery_fee` (
  `sid` int(11) NOT NULL,
  `delivery` varchar(255) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `delivery_fee`
--

INSERT INTO `delivery_fee` (`sid`, `delivery`, `fee`) VALUES
(1, 'home', 0),
(2, 'store', 0),
(3, '711', 80);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `sid` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`sid`, `account`, `password`, `name`, `email`, `birthday`) VALUES
(1, '0900123456', '123456', '徐小姐', 'cccc930@gmail.com', ''),
(3, '0905015875', '12345', '廖金樺', 'pot09066@gmail.com', ''),
(5, '0953020108', '555', '廖金樺', 'stu880324@gmail.com', ''),
(7, '123', '123', '123', '123', '2020-12-25'),
(8, '1234', '123', '1234', '123', '2020-12-19'),
(9, '0928725714', '1234', 'vicky', 'vickyhuangnefer@gmail.com', '1992-11-22'),
(10, '0953', '111', 'Kim', '123@gmail.com', '1993-12-08'),
(11, '22223333', '222', 'ZIYI', '222@gmai.com', '2000-01-01'),
(12, '0912345678', '123', 'rrr', '1234@cc.com', '2020-12-16');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `coupon_number` varchar(255) NOT NULL,
  `receiver_name` text NOT NULL,
  `receiver_phone` text NOT NULL,
  `receiver_address` text NOT NULL,
  `pay` varchar(11) NOT NULL,
  `creditcard_number` text NOT NULL,
  `creditcard_name` text NOT NULL,
  `expiredMonth` varchar(255) NOT NULL,
  `expiredYear` varchar(255) NOT NULL,
  `creditcard_security` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`sid`, `member_sid`, `amount`, `order_date`, `coupon_number`, `receiver_name`, `receiver_phone`, `receiver_address`, `pay`, `creditcard_number`, `creditcard_name`, `expiredMonth`, `expiredYear`, `creditcard_security`) VALUES
(2, 3, 9900, '2020-11-17 15:13:00', '', '胡希卉', '0905110005', '台北市大安區', 'creditcard', '654321012345', '胡希卉', '3', '2023', 456),
(3, 4, 27800, '2020-11-15 12:29:00', '', '江姿誼', '0978050123', '新北市土城區', 'creditcard', '523321772366', '江姿誼', '5', '2024', 123),
(4, 2, 18190, '2020-11-20 15:13:00', '', '呂有容', '0919120034', '台北市萬華區', 'creditcard', '954321012326', '呂有容', '7', '2025', 567),
(5, 1, 9900, '2020-10-28 16:25:51', 'HMG930', '徐小姐', '0900123456', '高雄市三民區', 'creditcard', '202012180006', 'HsuMissMeng', '9', '2021', 888),
(43, 11, 41160, '2020-12-16', 'QAZ123', 'ZIYI', '22223333', '台北市信義區', 'creditcard', '1234 1234 1234 1234', 'ziyi', '01', '21', 222);

-- --------------------------------------------------------

--
-- 資料表結構 `order_detail`
--

CREATE TABLE `order_detail` (
  `sid` int(11) NOT NULL,
  `orders_sid` int(11) NOT NULL,
  `products_sid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `order_detail`
--

INSERT INTO `order_detail` (`sid`, `orders_sid`, `products_sid`, `quantity`) VALUES
(1, 1, 5, 2),
(2, 1, 21, 3),
(3, 4, 40, 1),
(4, 4, 1, 1),
(5, 3, 2, 2),
(6, 5, 26, 1),
(7, 24, 1, 1),
(8, 24, 26, 1),
(9, 25, 9, 1),
(10, 25, 1, 1),
(11, 25, 40, 1),
(12, 25, 33, 1),
(13, 26, 9, 1),
(14, 26, 40, 1),
(15, 27, 9, 1),
(16, 27, 2, 1),
(17, 28, 1, 1),
(18, 28, 2, 1),
(19, 29, 1, 1),
(20, 29, 2, 2),
(21, 30, 9, 2),
(22, 30, 2, 4),
(23, 30, 26, 6),
(24, 31, 9, 5),
(25, 31, 1, 3),
(26, 31, 2, 2),
(27, 31, 40, 1),
(28, 32, 33, 3),
(29, 32, 40, 2),
(30, 32, 10, 1),
(31, 33, 1, 2),
(32, 33, 2, 3),
(33, 33, 33, 2),
(34, 35, 1, 2),
(35, 35, 2, 1),
(36, 35, 33, 2),
(37, 36, 33, 2),
(38, 36, 1, 1),
(39, 36, 40, 2),
(40, 37, 9, 2),
(41, 37, 1, 2),
(42, 38, 1, 2),
(43, 38, 9, 1),
(44, 39, 1, 1),
(45, 39, 2, 2),
(46, 39, 33, 2),
(47, 40, 33, 2),
(48, 40, 40, 1),
(49, 40, 10, 1),
(50, 41, 2, 2),
(51, 42, 2, 3),
(52, 42, 33, 2),
(53, 42, 40, 1),
(54, 43, 33, 2),
(55, 43, 40, 2),
(56, 43, 8, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE `products` (
  `sid` int(11) NOT NULL,
  `chinese_name` varchar(255) NOT NULL,
  `english_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `wearing` varchar(255) NOT NULL,
  `bluetooth` int(1) NOT NULL,
  `noise-canceling` int(1) NOT NULL,
  `rotatable` int(1) NOT NULL,
  `water-proof` int(1) NOT NULL,
  `big-size` int(1) NOT NULL,
  `ultra-wideband` int(1) NOT NULL,
  `sporting` int(1) NOT NULL,
  `commuting` int(1) NOT NULL,
  `gaming` int(1) NOT NULL,
  `recording` int(1) NOT NULL,
  `meeting` int(1) NOT NULL,
  `product_detail_sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`sid`, `chinese_name`, `english_name`, `price`, `color`, `wearing`, `bluetooth`, `noise-canceling`, `rotatable`, `water-proof`, `big-size`, `ultra-wideband`, `sporting`, `commuting`, `gaming`, `recording`, `meeting`, `product_detail_sid`) VALUES
(1, '無線藍牙降噪耳機', 'MOMENTUM 3 Wireless', 13900, 'white', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 6),
(2, '無線藍牙降噪耳機', 'MOMENTUM 3 Wireless', 13900, 'black', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 6),
(3, '無線藍牙耳機', 'HD 350BT', 3990, 'white', 'circumaural', 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 4),
(4, '無線藍牙耳機', 'HD 350BT', 3990, 'black', 'circumaural', 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 1, 4),
(5, '無線藍牙降噪耳機', 'HD 450BT', 6990, 'white', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 6),
(6, '無線藍牙降噪耳機', 'HD 450BT', 6990, 'black', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 6),
(7, '旅行藍牙抗噪耳機', 'PXC 550-II Wireless', 10990, 'black', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 6),
(8, '經典開放式電競', 'GAME ONE', 9900, 'black', 'circumaural', 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 3),
(9, '經典開放式旗艦 75週年限量商品', 'HD 800 S Anniversary Edition', 50990, 'golden', 'circumaural', 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 5),
(10, '經典開放式旗艦', 'HD 800 S', 50990, 'black', 'circumaural', 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 1, 5),
(11, '旗艦封閉式耳罩', 'HD 820', 73900, '73900', 'circumaural', 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, 5),
(12, '經典封閉式電競', 'GAME ZERO', 11000, 'black', 'circumaural', 1, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 3),
(13, '優質入門電競款', 'GSP 300', 2990, 'black', 'circumaural', 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 3),
(14, '入門Dolby 7.1電競', 'GSP 350', 3990, 'black', 'circumaural', 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 3),
(15, '超長續航力無線電競耳機', 'GSP 370', 6990, 'black', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 3),
(16, '萬年不敗HiFi旗艦', 'HD 600', 10990, 'black', 'circumaural', 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 1, 5),
(17, '頂級開放式電競', 'GSP 500', 7490, 'black', 'circumaural', 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 3),
(18, '頂級封閉式電競', 'GSP 600', 8490, 'black', 'circumaural', 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 3),
(19, '頂級無線電競耳機', 'GSP 670', 10900, 'black', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 3),
(20, '超值藍芽耳罩', 'HD 4.40BT', 3690, 'black', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 6),
(21, '專業型監聽耳機', 'HD 200 PRO', 4000, 'black', 'circumaural', 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 4),
(22, '專業型監聽耳機', 'HD 280 PRO', 4500, 'black', 'circumaural', 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 4),
(23, '最新專業型監聽耳機', 'HD 300 PRO', 8900, 'black', 'circumaural', 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 4),
(24, '經典HiFi高階款', 'HD 660 S', 14900, 'black', 'circumaural', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 4),
(25, '經典大奧重生，超越旗艦靜電耳機', 'HE 1', 2080000, 'gray', 'circumaural', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 4),
(26, '旅行藍牙抗噪', 'PXC 550 Wireless', 10900, 'black', 'circumaural', 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 2),
(27, '週年限量商品', 'HD 25 Limited Edition 75th', 6900, 'black', 'supra-aural', 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 2),
(28, '經典款監聽耳機', 'HD 25', 6900, 'black', 'supra-aural', 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 0, 4),
(29, '輕量經典款監聽耳機', 'HD 25 LIGHT', 4500, 'black', 'supra-aural', 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 4),
(30, '專業型監聽耳機', 'HD 26 PRO', 12800, 'black', 'supra-aural', 0, 1, 1, 0, 0, 0, 0, 1, 0, 1, 0, 4),
(31, '入門電競耳麥', 'PC 8 USB', 1700, 'black', 'supra-aural', 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(32, '真無線藍牙耳機', 'CX 400BT True Wireless', 6490, 'white', 'in-ear', 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 1, 2),
(33, '真無線藍牙耳機', 'CX 400BT True Wireless', 6490, 'black', 'in-ear', 1, 1, 0, 0, 0, 1, 0, 1, 0, 0, 1, 2),
(34, '旗艦真無線藍牙耳機 2代', 'MOMENTUM True Wireless 2', 9900, 'white', 'in-ear', 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 2),
(35, '旗艦真無線藍牙耳機 2代', 'MOMENTUM True Wireless 2', 9900, 'black', 'in-ear', 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 2),
(36, '入耳式藍牙耳機', 'CX 150BT', 2490, 'white', 'in-ear', 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 2),
(37, '入耳式藍牙耳機', 'CX 150BT', 2490, 'black', 'in-ear', 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 2),
(38, '入耳式藍牙耳機', 'CX 350BT', 3290, 'white', 'in-ear', 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 2),
(39, '入耳式藍牙耳機', 'CX 350BT', 3290, 'black', 'in-ear', 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 2),
(40, '經典運動藍牙款', 'CX SPORT', 4290, 'yellow', 'in-ear', 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1),
(41, '錄音耳機', 'AMBEO SMART HEADSET ASMR', 9900, 'white', 'in-ear', 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 4),
(42, '全新入耳旗艦', 'IE 800 S', 29900, 'black', 'in-ear', 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 5),
(43, '高階HiFi入耳式', 'IE 80 S', 9900, 'black', 'in-ear', 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 6),
(44, '經典入耳HiFi藍牙款', 'IE 80 S BT', 15900, 'black', 'in-ear', 1, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 6),
(45, '新一代入耳監聽', 'IE 500 PRO', 19900, 'white', 'in-ear', 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 4),
(46, '新一代入耳監聽', 'IE 500 PRO', 19900, 'black', 'in-ear', 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 4),
(47, '頸掛式藍牙', 'CX 7.00BT', 5490, 'black', 'in-ear', 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 2),
(48, '最強入門監聽耳道', 'IE 40 PRO', 3900, 'white', 'in-ear', 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 4),
(49, '最強入門監聽耳道', 'IE 40 PRO', 3900, 'black', 'in-ear', 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 4),
(50, '新一代入耳監聽', 'IE 400 PRO', 11900, 'white', 'in-ear', 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 4),
(51, '新一代入耳監聽', 'IE 400 PRO', 11900, 'black', 'in-ear', 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 4),
(52, '經典入耳藍牙', 'MOMENTUM Free', 6990, 'black', 'in-ear', 1, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1, 2),
(53, '經典頸掛藍牙', 'MOMENTUM In-Ear Wireless', 7490, 'black', 'in-ear', 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 6),
(54, '旗艦真無線藍牙耳機', 'MOMENTUM True Wireless', 9900, 'black', 'in-ear', 1, 1, 0, 1, 0, 1, 1, 1, 0, 0, 1, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `product_detail`
--

CREATE TABLE `product_detail` (
  `sid` int(11) NOT NULL,
  `html` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `product_detail`
--

INSERT INTO `product_detail` (`sid`, `html`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, '');

-- --------------------------------------------------------

--
-- 資料表結構 `reservation`
--

CREATE TABLE `reservation` (
  `sid` int(11) NOT NULL,
  `member_sid` int(11) NOT NULL,
  `reservation_date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `reservation`
--

INSERT INTO `reservation` (`sid`, `member_sid`, `reservation_date`, `time`, `location`, `create_date`) VALUES
(1, 5, '2020-11-27', '11:00:00', '台北三創店', '2020-11-13'),
(2, 5, '2020-11-29', '16:00:00', '台中展示中心', '2020-11-13'),
(3, 5, '2020-12-05', '00:00:10', '台中展示中心', '2020-12-03'),
(4, 5, '2020-12-06', '16:00 - 18:00', '台中展示中心', '2020-12-03'),
(5, 5, '2020-12-07', '18:00 - 20:00', '高雄展示中心', '2020-12-03'),
(6, 5, '2020-12-08', '16:00 - 18:00', '高雄展示中心', '2020-12-03'),
(7, 5, '2020-12-09', '12:00 - 14:00', '台中展示中心', '2020-12-03'),
(8, 5, '2020-12-10', '18:00 - 20:00', '台中展示中心', '2020-12-04'),
(9, 5, '2020-12-15', '12:00 - 14:00', '台中展示中心', '2020-12-07'),
(10, 5, '2020-12-01', '12:00 - 14:00', '台北三創店', '2020-12-07'),
(46, 11, '2020-12-17', '14:00 - 16:00', '台中展示中心', '2020-12-16');

-- --------------------------------------------------------

--
-- 資料表結構 `test`
--

CREATE TABLE `test` (
  `test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `delivery_fee`
--
ALTER TABLE `delivery_fee`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`sid`);

--
-- 資料表索引 `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `address_book`
--
ALTER TABLE `address_book`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `coupon`
--
ALTER TABLE `coupon`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `delivery_fee`
--
ALTER TABLE `delivery_fee`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `products`
--
ALTER TABLE `products`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reservation`
--
ALTER TABLE `reservation`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

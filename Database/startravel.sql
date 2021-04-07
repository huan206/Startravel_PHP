-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 03:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_id` int(11) NOT NULL,
  `account_name` text COLLATE utf8_unicode_ci NOT NULL,
  `account_pass` text COLLATE utf8_unicode_ci NOT NULL,
  `account_email` text COLLATE utf8_unicode_ci NOT NULL,
  `account_status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_id`, `account_name`, `account_pass`, `account_email`, `account_status`) VALUES
(29, 'Ha Mong Khang', 'khangcute', 'hamongkhang@gmail.com', 'Being active'),
(30, 'Nguyen Hoang Huan', 'huancute', 'hamongkhang@gmail.com', 'Being active'),
(31, 'Ho Thi Hang', 'hangcute', 'hamongkhang@gmail.com', 'Being active');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(11) NOT NULL,
  `activity_name` text COLLATE utf8_unicode_ci NOT NULL,
  `activity_password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `activity_name`, `activity_password`) VALUES
(91, 'Ho Thi Hang', 'hangcute');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_user`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `img_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `author_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `time_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `title_blog` text COLLATE utf8_unicode_ci NOT NULL,
  `content_blog` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `img_blog`, `author_blog`, `time_blog`, `title_blog`, `content_blog`) VALUES
(1, 'vietnamIGHC.jpg', 'Khang Ha Mong', '29 April,2021', 'Travel Insuranve Benefits', 'Travel Insurance is the kind of insuarance pays the expenses and damages that concern the travels.'),
(2, '99-thuyen_hoa.jpg', 'Huan Nguyen', '11 April, 2021', 'Travel Guideline Agents', 'Please contact us for the most enjoyable experience. We will always stand by you on your journey.'),
(3, 'at_nhung-hinh-anh-du-lich-dep-me-hon-cua-vung-dat-tay-bac_019194d3614616680f8a580c1f6a964e.jpg', 'Hang  Nguyen', '11 April, 2021', 'Secure Travel Tips', 'Please contact us for the most enjoyable experience. We will always stand by you on your journey.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `id_tour` int(11) NOT NULL,
  `image_tour` text COLLATE utf8_unicode_ci NOT NULL,
  `name_tour` text COLLATE utf8_unicode_ci NOT NULL,
  `price_tour` decimal(10,0) NOT NULL,
  `from_to` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_account`, `id_tour`, `image_tour`, `name_tour`, `price_tour`, `from_to`) VALUES
(12, 29, 1, 'cam-nang-du-lich-ha-noi-mytour-1.jpg', 'Thuan Ninh', '12', 'Quang Tri'),
(20, 30, 16, 'sapa.jpg', 'Summer tour 2021', '99999', 'Tay Son-Binh Dinh'),
(21, 30, 3, 'hoiann.jpg', 'Hoi An  tour 2021', '99999', 'Da Nang- Viet Nam'),
(22, 30, 2, 'anh-1-160161747022091907963.jpg', 'Ocean tour 2021', '99999', 'Da Nang- Viet  Nam'),
(23, 30, 4, 'tour-nam-du-4-ngay-3-dem-2-800x500.jpg', 'Ocean tour 2021', '99999', 'Da Nang- Viet  Nam'),
(24, 29, 4, 'tour-nam-du-4-ngay-3-dem-2-800x500.jpg', 'Ocean tour 2021', '99999', 'Da Nang- Viet  Nam'),
(25, 31, 2, 'chua-mot-cot.jpg', 'Mot Cot Pagoda', '99999', 'Ha Noi- Viet Nam');

-- --------------------------------------------------------

--
-- Table structure for table `tour_capital`
--

CREATE TABLE `tour_capital` (
  `id_capital` int(11) NOT NULL,
  `name_capital` text COLLATE utf8_unicode_ci NOT NULL,
  `img_capital` text COLLATE utf8_unicode_ci NOT NULL,
  `price_capital` decimal(10,0) NOT NULL,
  `detail_capital` text COLLATE utf8_unicode_ci NOT NULL,
  `from_to_capital` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour_capital`
--

INSERT INTO `tour_capital` (`id_capital`, `name_capital`, `img_capital`, `price_capital`, `detail_capital`, `from_to_capital`) VALUES
(1, 'Quoc Tu Giam', 'kinh-nghiem-du-lich-ha-noi-tu-a-den-z-10.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'BinhDinh- Viet Nam'),
(2, 'Mot Cot Pagoda', 'chua-mot-cot.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Ha Noi- Viet Nam'),
(3, 'Hoang Kiem Lake', 'cam-nang-du-lich-ha-noi-mytour-1.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Ha Noi- Viet Nam');

-- --------------------------------------------------------

--
-- Table structure for table `tour_cruise`
--

CREATE TABLE `tour_cruise` (
  `id_cruise` int(11) NOT NULL,
  `name_cruise` text COLLATE utf8_unicode_ci NOT NULL,
  `img_cruise` text COLLATE utf8_unicode_ci NOT NULL,
  `price_cruise` decimal(10,0) NOT NULL,
  `detail_cruise` text COLLATE utf8_unicode_ci NOT NULL,
  `from_to_cruise` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour_cruise`
--

INSERT INTO `tour_cruise` (`id_cruise`, `name_cruise`, `img_cruise`, `price_cruise`, `detail_cruise`, `from_to_cruise`) VALUES
(2, 'Ocean tour 2021', 'anh-1-160161747022091907963.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Da Nang- Viet  Nam'),
(3, 'Ocean tour 2021', 'vịnh lan hạ.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Da Nang- Viet  Nam'),
(4, 'Ocean tour 2021', 'tour-nam-du-4-ngay-3-dem-2-800x500.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Da Nang- Viet  Nam'),
(5, 'Ocean tour 2021', 'du-thuyền.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Da Nang- Viet  Nam');

-- --------------------------------------------------------

--
-- Table structure for table `tour_hot`
--

CREATE TABLE `tour_hot` (
  `id_hot` int(11) NOT NULL,
  `name_hot` text COLLATE utf8_unicode_ci NOT NULL,
  `img_hot` text COLLATE utf8_unicode_ci NOT NULL,
  `price_hot` decimal(10,0) NOT NULL,
  `detail_hot` text COLLATE utf8_unicode_ci NOT NULL,
  `from_to_hot` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour_hot`
--

INSERT INTO `tour_hot` (`id_hot`, `name_hot`, `img_hot`, `price_hot`, `detail_hot`, `from_to_hot`) VALUES
(16, 'Summer tour 2021', 'sapa.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end hottest.', 'Tay Son-Binh Dinh'),
(17, 'Fall tour 2021', 'du-lich-phu-quoc-17.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting.', 'Tay Son-Binh Dinh'),
(18, 'Spring', 'DSCF7483-8260-1593164119.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting.', 'Tay Son-Binh Dinh'),
(19, 'Winter tour 2021', 'Vuon Thuong Uyen Bay Da Lat.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting.', 'Tay Son-Binh Dinh');

-- --------------------------------------------------------

--
-- Table structure for table `tour_offer`
--

CREATE TABLE `tour_offer` (
  `id_offer` int(11) NOT NULL,
  `name_offer` text COLLATE utf8_unicode_ci NOT NULL,
  `img_offer` text COLLATE utf8_unicode_ci NOT NULL,
  `price_offer` decimal(10,0) NOT NULL,
  `detail_offer` text COLLATE utf8_unicode_ci NOT NULL,
  `from_to_offer` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour_offer`
--

INSERT INTO `tour_offer` (`id_offer`, `name_offer`, `img_offer`, `price_offer`, `detail_offer`, `from_to_offer`) VALUES
(1, 'Thuan Ninh', 'cam-nang-du-lich-ha-noi-mytour-1.jpg', '12', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting.', 'Quang Tri'),
(3, 'Hoi An  tour 2021', 'hoiann.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting.', 'Da Nang- Viet Nam'),
(4, 'Hoi An  tour 2021', '11.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting.', 'Da Nang- Viet Nam'),
(5, 'Hoi An  tour 2021', 'kham-pha-cung-deo-hiem-tro-bac-nhat-viet-nam-12.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting.', 'Da Nang- Viet Nam');

-- --------------------------------------------------------

--
-- Table structure for table `tour_sport`
--

CREATE TABLE `tour_sport` (
  `id_sport` int(11) NOT NULL,
  `name_sport` text COLLATE utf8_unicode_ci NOT NULL,
  `img_sport` text COLLATE utf8_unicode_ci NOT NULL,
  `price_sport` decimal(10,0) NOT NULL,
  `detail_sport` text COLLATE utf8_unicode_ci NOT NULL,
  `from_to_sport` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tour_sport`
--

INSERT INTO `tour_sport` (`id_sport`, `name_sport`, `img_sport`, `price_sport`, `detail_sport`, `from_to_sport`) VALUES
(1, 'PHU QUOC, VIET NAM', 'trai-nghiem-lan-bien-1024x664.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Phu Quoc- Viet Nam'),
(2, 'Phu Quoc, Viet Nam', 'nhay-bungee-o-viet-nam.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Phu Quoc- Viet Nam'),
(3, 'PHU QUOC, VIET NAM', '7117_tran_tro_de_du_lich_mao_hiem_phat_trien.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Phu Quoc- Viet Nam'),
(4, 'PHU QUOC, VIET NAM', 'trai-nghiem-flyboard.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Phu Quoc- Viet Nam'),
(5, 'PHU QUOC, VIET NAM', 'kham-pha-Du_luon.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Phu Quoc- Viet Nam'),
(6, 'PHU QUOC, VIET NAM', 'trai-nghiem-Zipline.jpg', '99999', 'Summer is the most imaginative time for travel. You have to the select the summer should go du lich at the end of the Interesting', 'Phu Quoc- Viet Nam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tour_capital`
--
ALTER TABLE `tour_capital`
  ADD PRIMARY KEY (`id_capital`);

--
-- Indexes for table `tour_cruise`
--
ALTER TABLE `tour_cruise`
  ADD PRIMARY KEY (`id_cruise`);

--
-- Indexes for table `tour_hot`
--
ALTER TABLE `tour_hot`
  ADD PRIMARY KEY (`id_hot`);

--
-- Indexes for table `tour_offer`
--
ALTER TABLE `tour_offer`
  ADD PRIMARY KEY (`id_offer`);

--
-- Indexes for table `tour_sport`
--
ALTER TABLE `tour_sport`
  ADD PRIMARY KEY (`id_sport`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tour_capital`
--
ALTER TABLE `tour_capital`
  MODIFY `id_capital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_cruise`
--
ALTER TABLE `tour_cruise`
  MODIFY `id_cruise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_hot`
--
ALTER TABLE `tour_hot`
  MODIFY `id_hot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tour_offer`
--
ALTER TABLE `tour_offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour_sport`
--
ALTER TABLE `tour_sport`
  MODIFY `id_sport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

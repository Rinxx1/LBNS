-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2025 at 07:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbns_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs_tbl`
--

CREATE TABLE `blogs_tbl` (
  `Blog_ID` int(11) NOT NULL,
  `Blog_Name` varchar(80) NOT NULL,
  `Blog_Desc` varchar(80) NOT NULL,
  `Blog_Link` varchar(80) NOT NULL,
  `Blog_Image_Loc` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs_tbl`
--

INSERT INTO `blogs_tbl` (`Blog_ID`, `Blog_Name`, `Blog_Desc`, `Blog_Link`, `Blog_Image_Loc`) VALUES
(1, 'Health Benefits of Durian: More Than Just a Sweet Treat', 'Beyond its unique taste, durian offers surprising health advantages. Learn how t', 'https://sample.com', '680660c9192ae_Candy2.png'),
(3, 'Exploring the Rich Heritage of Durian Sweets', 'Take a closer look at how durian sweets have become a cultural symbol across gen', 'https://sample.com', '68066195d7181_Candy4.png'),
(4, 'Top 5 Must-Try Durian Products for First-Time Tasters', 'New to durian? Discover the best beginner-friendly durian products—from creamy c', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Preserved-Jam-Big', '680f9d8df35da_1.png'),
(5, 'Behind the Scenes: How Our Durian Delicacies Are Made', 'Step into our kitchen and explore the art and care behind crafting every Lola Ab', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Preserved-Jam-Big', '680f9da5c8ae6_Candy1.png'),
(6, 'Durian Innovations: How Traditional Flavors Meet Modern Tastes', 'Explore how classic durian recipes are being reimagined for today\'s market, blen', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Preserved-Jam-Big', '680f9e400226e_Yema3.png'),
(7, 'A Beginner’s Guide to Choosing the Best Durian Treats', 'Not sure where to start? This simple guide will help you pick the perfect durian', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Preserved-Jam-Big', '680f9e55aa668_durian3.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_tbl`
--

CREATE TABLE `product_category_tbl` (
  `Product_Category_ID` int(11) NOT NULL,
  `Product_Category_Name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category_tbl`
--

INSERT INTO `product_category_tbl` (`Product_Category_ID`, `Product_Category_Name`) VALUES
(1, 'Chewy Candy & Laces'),
(2, 'Lollipops & Hard Candy'),
(3, 'Marshmallows & Mochi Sweets'),
(4, 'Jam Marmalade'),
(5, 'Chocolate Multipacks & Sharing Bags');

-- --------------------------------------------------------

--
-- Table structure for table `product_img_tbl`
--

CREATE TABLE `product_img_tbl` (
  `Product_Image_ID` int(11) NOT NULL,
  `Product_Image_Loc` varchar(80) NOT NULL,
  `Product_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_img_tbl`
--

INSERT INTO `product_img_tbl` (`Product_Image_ID`, `Product_Image_Loc`, `Product_ID`) VALUES
(1, '68a3e4fd25ad0_1.jpg', 2),
(2, '68a3e4fd2631f_2.jpg', 2),
(3, '68a3e4fd26c21_3.jpg', 2),
(4, '68a3e5bbd1907_1.jpg', 3),
(5, '68a3e5bbd27dd_2.jpg', 3),
(6, '68a3e5bbd309c_3.jpg', 3),
(7, '68a3e6328127f_1.jpg', 4),
(8, '68a3e63281c17_2.jpg', 4),
(9, '68a3e632824d7_3.jpg', 4),
(10, '68a3e632830a2_4.jpg', 4),
(11, '68a3e6d338af4_1.jpg', 5),
(12, '68a3e6d339934_2.jpg', 5),
(13, '68a3e6d33a7be_3.jpg', 5),
(14, '68a3e6d33b02a_4.jpg', 5),
(15, '68a3e78b77216_1.jpg', 6),
(16, '68a3e78b77a9e_2.jpg', 6),
(17, '68a3e78b782c3_3.jpg', 6),
(18, '68a3e871b96fe_1.jpg', 7),
(19, '68a3e871ba437_2.jpg', 7),
(20, '68a3e871bb2dc_3.jpg', 7),
(21, '68a3e92cabcaf_1.jpg', 8),
(22, '68a3e92cac58c_2.jpg', 8),
(23, '68a3e92cad2fb_3.jpg', 8),
(24, '68a3e92cadb21_4.jpg', 8),
(25, '68a3eaa86d1d5_1.jpg', 9),
(26, '68a3eaa86dd8e_2.jpg', 9),
(27, '68a3eaa86ea9f_3.jpg', 9),
(28, '68a3eaa86f2c7_4.jpg', 9),
(29, '68a3ecb65199b_1.jpg', 10),
(30, '68a3ecb652756_2.jpg', 10),
(31, '68a3ecb653076_3.jpg', 10),
(32, '68a3ed5d3a01d_1.jpg', 11),
(33, '68a3ed5d3ab73_2.jpg', 11),
(34, '68a3ed5d3b51f_3.jpg', 11),
(35, '68a3edf0c0cc5_1.jpg', 12),
(36, '68a3edf0c1982_2.jpg', 12),
(37, '68a3edf0c2267_3.jpg', 12),
(38, '68a3edf0c2a61_4.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `product_index_tbl`
--

CREATE TABLE `product_index_tbl` (
  `Index_ID` int(11) NOT NULL,
  `Index_Description` varchar(80) NOT NULL,
  `Index_Image_Loc` varchar(80) NOT NULL,
  `Product_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_index_tbl`
--

INSERT INTO `product_index_tbl` (`Index_ID`, `Index_Description`, `Index_Image_Loc`, `Product_ID`) VALUES
(5, 'Mangosteen Yema blends the luscious, tangy-sweet flavor of mangosteen with the c', '68a3e78b78b79_1.jpg', 6),
(6, 'Durian Bar is a decadent treat crafted from the king of fruits—rich, velvety dur', '68a3e871bbb44_1.jpg', 7),
(7, 'Durian Tart is a luxurious pastry that pairs the bold, creamy flavor of durian w', '68a3e92cae352_1.jpg', 8),
(8, 'Durian Yema is a tropical twist on the beloved Filipino candy—melding the creamy', '68a3eaa86faff_1.jpg', 9),
(10, 'Durian Jam is a luscious spread made from ripe durian fruit, slow-cooked to perf', '68a3ed5d3c32c_1.jpg', 11),
(11, 'Durian Sticks—also known as durian candy sticks—are a beloved treat from Davao, ', '68a3edf0c32c6_1.jpg', 12),
(12, 'Durian Quezo Yema is a bold fusion of flavors—combining the creamy and sweetness', '68a3efee6e1b3_1.jpg', 5),
(13, 'A sweet and creamy candy blending the bold flavors of durian and coffee.', '68a3f098059b1_1.jpg', 10),
(14, 'A delightful mix of creamy yema candies in various flavors, perfect for sharing ', '68a3f0e3d857f_1.jpg', 4),
(15, 'A soft and creamy candy infused with the sweet, tropical flavor of marang fruit ', '68a3f13852fea_1.jpg', 2),
(16, 'Durian Cubes are bite-sized chewy treats packed with the rich, creamy flavor of ', '68a3f1923dd06_1.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(80) NOT NULL,
  `Product_Desc` varchar(80) NOT NULL,
  `Product_Ingredients` varchar(80) NOT NULL,
  `Product_Shelflife` varchar(80) NOT NULL,
  `Product_Weight` varchar(80) NOT NULL,
  `Product_Price` decimal(10,0) NOT NULL,
  `Product_Price_From` varchar(250) NOT NULL,
  `Product_ShopeeLink` varchar(400) NOT NULL,
  `Product_LazadaLink` varchar(400) NOT NULL,
  `Product_BestSeller` int(11) NOT NULL,
  `Product_Category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`Product_ID`, `Product_Name`, `Product_Desc`, `Product_Ingredients`, `Product_Shelflife`, `Product_Weight`, `Product_Price`, `Product_Price_From`, `Product_ShopeeLink`, `Product_LazadaLink`, `Product_BestSeller`, `Product_Category_ID`) VALUES
(2, 'Marang Yema', 'A soft and creamy candy infused with the sweet, tropical flavor of marang fruit ', 'Durian, Milk & Sugar', '12', '60', 80, '0', '', 'https://www.lazada.com.ph/products/pdp-i4957419447-s28933172094.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4957419447%253Bsrc%253AlazadaInShopSrp%253Brn%253A97018380d5e1a405dbac417b10c4531c%253Bregion%253Aph%253Bsku%253A4957419447_PH%253Bprice%253A80%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A0%253Butlog_bucket_id%253A4', 0, 1),
(3, 'Durian Cubes', 'Durian Cubes are bite-sized delights made from real durian, offering a rich, cre', 'Durian, Milk & Sugar', '24 Months', '70', 70, '80', '', 'https://www.lazada.com.ph/products/pdp-i4957264289-s28931988036.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4957264289%253Bsrc%253AlazadaInShopSrp%253Brn%253A97018380d5e1a405dbac417b10c4531c%253Bregion%253Aph%253Bsku%253A4957264289_PH%253Bprice%253A70%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A1%253Butlog_bucket_id%253A4', 0, 1),
(4, 'Assorted Yema', 'A delightful mix of creamy yema candies in various flavors, perfect for sharing ', 'Durian, Milk & Sugar', '24 Months', '300', 375, '390', '', 'https://www.lazada.com.ph/products/pdp-i4957424012-s28932818227.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4957424012%253Bsrc%253AlazadaInShopSrp%253Brn%253A97018380d5e1a405dbac417b10c4531c%253Bregion%253Aph%253Bsku%253A4957424012_PH%253Bprice%253A375%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A2%253Butlog_bucket_id%253A', 0, 1),
(5, 'Durian Quezo Yema', 'Durian Quezo Yema is a bold fusion of flavors—combining the creamy and sweetness', 'Durian, Milk & Sugar', '24 Months', '60', 80, '0', '', 'https://www.lazada.com.ph/products/pdp-i4945341195-s28929928166.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4945341195%253Bsrc%253AlazadaInShopSrp%253Brn%253A97018380d5e1a405dbac417b10c4531c%253Bregion%253Aph%253Bsku%253A4945341195_PH%253Bprice%253A80%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A3%253Butlog_bucket_id%253A4', 0, 1),
(6, 'Mangosteen Yema', 'Mangosteen Yema blends the luscious, tangy-sweet flavor of mangosteen with the c', 'Durian, Milk & Sugar', '24 Months', '60', 80, '90', '', 'https://www.lazada.com.ph/products/pdp-i4957347728-s28933569531.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4957347728%253Bsrc%253AlazadaInShopSrp%253Brn%253A97018380d5e1a405dbac417b10c4531c%253Bregion%253Aph%253Bsku%253A4957347728_PH%253Bprice%253A80%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A4%253Butlog_bucket_id%253A4', 0, 1),
(7, 'Durian Bar', 'Durian Bar is a decadent treat crafted from the king of fruits—rich, velvety dur', 'Durian, Milk & Sugar', '24 Months', '60', 70, '80', '', 'https://www.lazada.com.ph/products/pdp-i4935188175-s28756619493.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4935188175%253Bsrc%253AlazadaInShopSrp%253Brn%253Afb48225c1ffbfcbd5a8fdc035ed11f05%253Bregion%253Aph%253Bsku%253A4935188175_PH%253Bprice%253A70%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A0%253Butlog_bucket_id%253A4', 0, 2),
(8, 'Durian Tart', 'Durian Tart is a luxurious pastry that pairs the bold, creamy flavor of durian w', 'Durian, Milk & Sugar', '24 Months', '70', 80, '89', '', 'https://www.lazada.com.ph/products/pdp-i4935176144-s28756293990.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4935176144%253Bsrc%253AlazadaInShopSrp%253Brn%253Afb48225c1ffbfcbd5a8fdc035ed11f05%253Bregion%253Aph%253Bsku%253A4935176144_PH%253Bprice%253A80%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A1%253Butlog_bucket_id%253A4', 0, 2),
(9, 'Durian Yema', 'Durian Yema is a tropical twist on the beloved Filipino candy—melding the creamy', 'Durian, Milk & Sugar', '24 Months', '60', 80, '95', '', 'https://www.lazada.com.ph/products/pdp-i4935171264-s28756650032.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4935171264%253Bsrc%253AlazadaInShopSrp%253Brn%253Afb48225c1ffbfcbd5a8fdc035ed11f05%253Bregion%253Aph%253Bsku%253A4935171264_PH%253Bprice%253A80%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A2%253Butlog_bucket_id%253A4', 1, 2),
(10, 'Durian Coffee Yema', 'A sweet and creamy candy blending the bold flavors of durian and coffee.', 'Durian, Milk & Sugar', '24 Months', '60', 80, '90', '', 'https://www.lazada.com.ph/products/pdp-i4957325678-s28933057629.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4957325678%253Bsrc%253AlazadaInShopSrp%253Brn%253Af3b09023fb777b1760c63fe0dd2d8059%253Bregion%253Aph%253Bsku%253A4957325678_PH%253Bprice%253A80%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A0%253Butlog_bucket_id%253A4', 0, 3),
(11, 'Durian Jam', 'Durian Jam is a luscious spread made from ripe durian fruit, slow-cooked to perf', 'Durian, Milk & Sugar', '24 Months', '340', 250, '270', '', 'https://www.lazada.com.ph/products/pdp-i5008310966-s29282105734.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A5008310966%253Bsrc%253AlazadaInShopSrp%253Brn%253A6b5beac29941dacad1eb1361e5397770%253Bregion%253Aph%253Bsku%253A5008310966_PH%253Bprice%253A250%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A0%253Butlog_bucket_id%253A', 1, 4),
(12, 'Durian Sticks', 'Durian Sticks—also known as durian candy sticks—are a beloved treat from Davao, ', 'Durian, Milk & Sugar', '24 Months', '70', 70, '80', '', 'https://www.lazada.com.ph/products/pdp-i4935161227-s28756402743.html?c=&channelLpJumpArgs=&clickTrackInfo=query%253A%253Bnid%253A4935161227%253Bsrc%253AlazadaInShopSrp%253Brn%253A681550c6a3710a31ddb0f9bfd51e7c3a%253Bregion%253Aph%253Bsku%253A4935161227_PH%253Bprice%253A70%253Bclient%253Adesktop%253Bsupplier_id%253A501378672275%253Bbiz_source%253Ah5_internal%253Bslot%253A0%253Butlog_bucket_id%253A4', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `stores_tbl`
--

CREATE TABLE `stores_tbl` (
  `Store_ID` int(11) NOT NULL,
  `Store_City` varchar(80) NOT NULL,
  `Store_Location` varchar(600) NOT NULL,
  `Store_Email` varchar(80) NOT NULL,
  `Store_OpeningHours` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stores_tbl`
--

INSERT INTO `stores_tbl` (`Store_ID`, `Store_City`, `Store_Location`, `Store_Email`, `Store_OpeningHours`) VALUES
(1, 'Davao City', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3959.619363186883!2d125.60011058704073!3d7.053933409021366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1744379646011!5m2!1sen!2sph\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'matina@lola.com', 'Monday - Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `User_ID` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_ID`, `Username`, `Password`) VALUES
(1, 'admin', '$2y$10$qkbmLxcfApj4y5eOkSqeGeLQitpZZY47sojX4V28yEHCKZDrK5PDa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs_tbl`
--
ALTER TABLE `blogs_tbl`
  ADD PRIMARY KEY (`Blog_ID`);

--
-- Indexes for table `product_category_tbl`
--
ALTER TABLE `product_category_tbl`
  ADD PRIMARY KEY (`Product_Category_ID`);

--
-- Indexes for table `product_img_tbl`
--
ALTER TABLE `product_img_tbl`
  ADD PRIMARY KEY (`Product_Image_ID`);

--
-- Indexes for table `product_index_tbl`
--
ALTER TABLE `product_index_tbl`
  ADD PRIMARY KEY (`Index_ID`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `stores_tbl`
--
ALTER TABLE `stores_tbl`
  ADD PRIMARY KEY (`Store_ID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs_tbl`
--
ALTER TABLE `blogs_tbl`
  MODIFY `Blog_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_category_tbl`
--
ALTER TABLE `product_category_tbl`
  MODIFY `Product_Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_img_tbl`
--
ALTER TABLE `product_img_tbl`
  MODIFY `Product_Image_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_index_tbl`
--
ALTER TABLE `product_index_tbl`
  MODIFY `Index_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stores_tbl`
--
ALTER TABLE `stores_tbl`
  MODIFY `Store_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

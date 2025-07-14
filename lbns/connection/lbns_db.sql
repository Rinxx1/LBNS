-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2025 at 03:21 AM
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
(1, 'Duriann'),
(2, 'Yema'),
(3, 'Candies'),
(4, 'Jam Honey & Spreads'),
(5, 'Biscuit'),
(6, 'Coffee');

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
(22, '680659c14bc69_Candy.png', 6),
(23, '680659c14c7e6_Candy1.png', 6),
(24, '680659c14d106_Candy2.png', 6),
(25, '680659c14dd1b_Candy3.png', 6),
(26, '680659c14e684_Candy4.png', 6),
(27, '6806740c52bc1_Yema.png', 7),
(28, '6806740c53baf_Yema1.png', 7),
(29, '6806740c65ae0_Yema2.png', 7),
(30, '6806740c6686b_Yema3.png', 7),
(31, '6806740c671df_Yema4.png', 7),
(32, '680f902492805_durian.png', 8),
(33, '680f902492d66_durian2.png', 8),
(34, '680f90249312a_durian3.png', 8),
(35, '680f902493666_durian4.png', 8),
(36, '680f902493c13_durian5.png', 8),
(37, '680f910adc873_1.png', 9),
(38, '680f910adcf61_2.png', 9),
(39, '680f910add8c5_3.png', 9),
(40, '680f910adddd3_4.png', 9),
(41, '680f910ade3eb_5.png', 9),
(42, '680f91e909873_1.png', 10),
(43, '680f91e90a14a_2.png', 10),
(44, '680f91e90b0a5_3.png', 10),
(45, '680f91e90b6ee_4.png', 10),
(46, '680f91e90bbed_5.png', 10),
(47, '680f9309e0d87_1.png', 11),
(48, '680f9309e1454_2.png', 11),
(49, '680f9309e1a78_3.png', 11),
(50, '680f9309f34a8_4.png', 11),
(51, '680f9309f3a3a_5.png', 11);

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
(6, 'Durian delight is a soft and chewy sweet durian candy that melts in your mouth.', '680659c14f019_Candy.png', 6),
(7, 'Durian Bliss is a lusciously soft and chewy treat, bursting with the rich sweetn', '6806740c67a5e_Yema.png', 7),
(8, 'Soft and rich, Durian Delight brings the best of durian in every bite.', '680f902494034_durian.png', 8),
(9, 'Durian Delight is a chewy, sweet treat that melts in your mouth', '680f910ade969_1.png', 9),
(10, 'Durian Delight Biscuit: a crunchy treat infused with rich, creamy durian goodnes', '680f91e90c2eb_1.png', 10),
(11, 'Smooth, rich, and bursting with durian flavor—spread the delight on every bite.', '680f9309f3f31_1.png', 11);

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
  `Product_ShopeeLink` varchar(150) NOT NULL,
  `Product_LazadaLink` varchar(150) NOT NULL,
  `Product_BestSeller` int(11) NOT NULL,
  `Product_Category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`Product_ID`, `Product_Name`, `Product_Desc`, `Product_Ingredients`, `Product_Shelflife`, `Product_Weight`, `Product_Price`, `Product_Price_From`, `Product_ShopeeLink`, `Product_LazadaLink`, `Product_BestSeller`, `Product_Category_ID`) VALUES
(6, 'Special Durian Delight Yema Candy', 'The Original Lola Abons Davao | Durian delight is a soft and chewy sweet durian', 'Durian, Milk & Sugar', '24 Months', '210', 254, '', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Delight-Yema-Candy-36-pcs-210-grams-i.929668373.23015452824', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Delight-Yema-Candy-36-pcs-210-grams-i.929668373.23015452824', 1, 4),
(7, 'Special Durian Yema ', 'The Original Lola Abons Davao | Durian delight is a soft and chewy sweet durian', 'Durian, Milk & Sugar', '24 Months', '210', 200, '', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Delight-Yema-Candy-36-pcs-210-grams-i.929668373.23015452824', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Delight-Yema-Candy-36-pcs-210-grams-i.929668373.23015452824', 1, 2),
(8, 'Special Durian Cubes Candy', 'Soft and rich, Durian Delight brings the best of durian in every bite.', 'Durian, Milk & Sugar', '24 Months', '70', 95, '', 'https://shopee.ph/Lola-Abons-Davao-Special-Durian-Cubes-Candy-25pcs-70grams-i.929668373.24770342503?sp_atk=0f489ae0-ef38-40d5-a5cf-055d232c8874', 'https://shopee.ph/Lola-Abons-Davao-Special-Durian-Cubes-Candy-25pcs-70grams-i.929668373.24770342503?sp_atk=0f489ae0-ef38-40d5-a5cf-055d232c8874', 1, 1),
(9, 'Special Durian Special Tart', 'Durian Delight is a chewy, sweet treat that melts in your mouth', 'Durian, Milk & Sugar', '24 Months', '80', 101, '', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Durian-Special-Tart-5pcs-80-grams-i.929668373.22615452393', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Durian-Special-Tart-5pcs-80-grams-i.929668373.22615452393', 1, 1),
(10, 'Special Mangosteen Piaya Delicacies', 'Durian Delight Biscuit: a crunchy treat infused with rich, creamy durian goodnes', 'Durian, Milk & Sugar', '24 Months', '100', 193, '250', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Mangosteen-Piaya-Delicacies-8pcs-100grams-i.929668373.22615452449?sp_atk=b3e3d42b-5ec8-4737-83', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Mangosteen-Piaya-Delicacies-8pcs-100grams-i.929668373.22615452449?sp_atk=b3e3d42b-5ec8-4737-83', 1, 5),
(11, 'Special Durian Preserved Jam Small Bottle', 'Smooth, rich, and bursting with durian flavor—spread the delight on every bite.', 'Durian, Milk, Sugar', '24 Months', '430', 334, '', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Preserved-Jam-Small-Bottle-i.929668373.19970194143?sp_atk=8ed45679-0030-4014-a533-96ec5', 'https://shopee.ph/The-Original-Lola-Abons-Davao-Special-Durian-Preserved-Jam-Small-Bottle-i.929668373.19970194143?sp_atk=8ed45679-0030-4014-a533-96ec5', 1, 4);

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
  MODIFY `Product_Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_img_tbl`
--
ALTER TABLE `product_img_tbl`
  MODIFY `Product_Image_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `product_index_tbl`
--
ALTER TABLE `product_index_tbl`
  MODIFY `Index_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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

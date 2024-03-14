-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 08:50 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_teashop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_addcoffee`
--

CREATE TABLE `tb_addcoffee` (
  `id` int(11) NOT NULL,
  `coffeename` varchar(50) NOT NULL,
  `discription` mediumtext NOT NULL,
  `coffeeimage` varchar(500) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `discount` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_addcoffee`
--

INSERT INTO `tb_addcoffee` (`id`, `coffeename`, `discription`, `coffeeimage`, `price`, `discount`) VALUES
(10, 'cold coffee', 'Cold coffee is a delicious and refreshing beverage that can be enjoyed on a hot day or as a treat anytime. Cold coffee is made by blending coffee, sugar, milk and ice together until it becomes frothy and creamy. There are many variations of cold coffee, depending on the type of coffee, sweetener, milk and flavoring used. Here are some examples of how to make cold coffee at home:\r\n\r\nPerfect Iced Coffee: This recipe is quick, easy, budget-friendly, and tastes just like the gourmet coffee-shops, if not better! You just need 3 to 4 basic ingredients & 5 mins to whip up this super delicious, creamy & frothy Iced coffee1. To make this recipe, you need to brew some strong coffee and let it cool down. Then, in a blender, add some half and half (or more, to taste), sugar, water, vanilla extract and ice cubes. Blend until smooth and serve in a glass with some whipped cream if desired.\r\nCold Coffee Recipe | Iced Coffee 4 Ways: This recipe shows you how to make cold coffee in four different ways: classic, chocolate, caramel and oreo2. To make the classic version, you need to blend some instant coffee powder, sugar, milk and ice cubes together. To make the chocolate version, you need to add some cocoa powder and chocolate syrup to the classic mixture. To make the caramel version, you need to add some caramel syrup and salt to the classic mixture.', '53842591.jpg', '80', '10'),
(11, 'sugar free coffee', 'Sugar free coffee is a type of coffee that does not contain any added sugar or sweeteners. It is a healthier  carbohydrates, and sugar. Sugar free coffee can also benefit people who have diabetes, as it can help regulate blood sugar levels.\r\n\r\nThere are different ways to make sugar free coffee, depending on your preference and taste. Some of the common methods are:\r\n\r\nUsing a sugar substitute: You can use a natural or artificial sweetener to replace sugar in your coffee. Some of the popular options are stevia, monk fruit, erythritol, xylitol, allulose, sucralose, aspartame, and saccharin. These sweeteners have little or no calories and do not affect blood sugar levels. However, some of them may have a bitter aftertaste or cause digestive issues for some people. You can experiment with different sweeteners and find the one that suits you best.\r\nUsing a flavored syrup: You can add a sugar free flavored syrup to your coffee to give it some extra taste and aroma. Some of the common flavors are vanilla, caramel, hazelnut, mocha, and pumpkin spice. You can find sugar free syrups in grocery stores or online. You can also make your own sugar free syrup by boiling water, sweetener, and flavoring extract together until thickened.\r\nUsing a flavored creamer: You can use a sugar free creamer to add some creaminess and flavor to your coffee. Some of the options are almond milk, coconut milk, soy milk, oat milk, cashew milk, and hemp milk. ', 'banner.2.jpg', '35', '10'),
(12, 'cream coffee', 'Cream coffee is a type of coffee that is made with cream or a cream substitute. Cream coffee is usually richer, smoother, and creamier than regular coffee. Cream coffee can be enjoyed hot or cold, depending on the preference and the season.\r\n\r\nThere are many ways to make cream coffee, depending on the ingredients and the method used. Some of the common methods are:\r\n\r\nUsing whipped cream: Whipped cream is a dairy product that is made by beating heavy cream until it becomes light and fluffy. Whipped cream can be added to hot or cold coffee to create a frothy and decadent drink. Whipped cream can also be flavored with sugar, vanilla, or other extracts. Some examples of whipped cream coffee are Coffee Whipped Cream12 and Whipped Coffee Recipe3.\r\nUsing flavored syrup: Flavored syrup is a liquid sweetener that is infused with various flavors such as vanilla, caramel, hazelnut, mocha, and more. Flavored syrup can be added to hot or cold coffee to give it some extra taste and aroma. Flavored syrup can also be used to design the serving glass with some melted chocolate or other patterns. Some examples of flavored syrup coffee are Italian Coffee Cream4 and Cold Coffee Recipe5.\r\nUsing flavored creamer: Flavored creamer is a liquid or powdered product that is used to add some creaminess and flavor to coffee. Flavored creamer can be made with dairy or non-dairy ingredients such as almond milk, coconut milk, soy milk, oat milk, cashew milk, and hemp milk. ', 'banner2.jpg', '50', '10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contactinfo`
--

CREATE TABLE `tb_contactinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_contactinfo`
--

INSERT INTO `tb_contactinfo` (`id`, `name`, `email`, `message`) VALUES
(1, 'athira', 'athira123@gmail.com', 'hghghdhdgdzhgzugb');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `employee_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`employee_id`, `name`, `age`, `phoneno`, `gender`, `file`) VALUES
(22, 'vishal', '12', '757848399290', 'male', '4.jpg'),
(23, 'jaya', '15', '6267276322', 'female', '3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `email`, `password`) VALUES
(1, 'ajay123@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id` int(11) NOT NULL,
  `coffeename` varchar(5000) NOT NULL,
  `quantity` varchar(5000) NOT NULL,
  `cardnumber` varchar(500) NOT NULL,
  `ccv` varchar(100) NOT NULL,
  `price` varchar(3000) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_userlogin`
--

CREATE TABLE `tb_userlogin` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_userlogin`
--

INSERT INTO `tb_userlogin` (`id`, `name`, `email`, `password`) VALUES
(3, 'athira', 'athira123@gmail.com', '123'),
(4, 'vishal', 'shar123@gmai.com', '123'),
(5, 'nandhu', 'nandhu123@gmail.com', '123'),
(6, 'ajay', 'ajay123@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_addcoffee`
--
ALTER TABLE `tb_addcoffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contactinfo`
--
ALTER TABLE `tb_contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_userlogin`
--
ALTER TABLE `tb_userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_addcoffee`
--
ALTER TABLE `tb_addcoffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_contactinfo`
--
ALTER TABLE `tb_contactinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_employee`
--
ALTER TABLE `tb_employee`
  MODIFY `employee_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_userlogin`
--
ALTER TABLE `tb_userlogin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

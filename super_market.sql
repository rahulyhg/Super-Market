-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2018 at 12:08 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Pavanjain1996', 'action12@on');

-- --------------------------------------------------------

--
-- Table structure for table `cart_pavanjain1996`
--

CREATE TABLE `cart_pavanjain1996` (
  `pro_name` varchar(30) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_pavanjain1996`
--

INSERT INTO `cart_pavanjain1996` (`pro_name`, `qty`) VALUES
('Black Forest Cake white Icing', 1),
('Bottle', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `state` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `gender`, `mobile`, `email`, `address`, `city`, `pincode`, `state`, `username`, `password`) VALUES
('Pavan Jain', 'Male', '8349312393', '013pavanjain@gmail.com', 'Kalpana Nagar 434 ayodhya bypass', 'Bhopal', '462022', 'Madhya Pradesh', 'Pavanjain1996', 'action12@on');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL,
  `issue` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `rating`, `issue`) VALUES
('Hardik Pandya', 4, 'It is a good site for all the grocery and household things it is superb and very awesome to shop from this site. It''s a pleasure to shop from here.'),
('Pavan Jain', 5, 'It is a very good application for online shopping of households products. It gives a variety of products and a good quality. All the products are very fresh.'),
('Sunil Gupta', 5, 'Wow such an interesting application for a person to shop online for household things. Our family is very happy after this.'),
('Kartik Soni', 4, 'Very good site');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `username` varchar(30) NOT NULL,
  `cost` int(11) NOT NULL,
  `no_items` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`username`, `cost`, `no_items`, `date`) VALUES
('Pavanjain1996', 1634, 8, '2018-08-04'),
('Pavanjain1996', 850, 3, '2018-08-05'),
('Pavanjain1996', 980, 10, '2018-08-05'),
('Pavanjain1996', 5397, 7, '2018-08-05'),
('Pavanjain1996', 2650, 7, '2018-08-05'),
('Pavanjain1996', 1599, 2, '2018-08-05'),
('Pavanjain1996', 240, 4, '2018-08-05'),
('Pavanjain1996', 240, 4, '2018-08-05'),
('Pavanjain1996', 2622, 6, '2018-08-06'),
('Pavanjain1996', 1840, 7, '2018-08-06'),
('Pavanjain1996', 620, 6, '2018-08-07'),
('Pavanjain1996', 860, 9, '2018-08-07'),
('Pavanjain1996', 900, 2, '2018-08-08'),
('sonikritika105', 3543, 7, '2018-08-08'),
('Pavanjain1996', 900, 2, '2018-08-08'),
('Pavanjain1996', 1807, 6, '2018-08-08'),
('Pavanjain1996', 1647, 4, '2018-08-08'),
('Pavanjain1996', 80, 2, '2018-08-09'),
('Pavanjain1996', 1317, 6, '2018-08-09'),
('Pavanjain1996', 1050, 2, '2018-08-14');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `quantity`, `price`, `category`, `image`) VALUES
(1, 'Apple', '2 Kg', 80, 'fruitveg', 'apple.jpg'),
(2, 'Banana', '1 Dozen', 40, 'fruitveg', 'banana.jpg'),
(3, 'Mango', '1 Kg', 60, 'fruitveg', 'mango.jpg'),
(4, 'Grapes', '1 Kg', 60, 'fruitveg', 'grapes.jpg'),
(5, 'Strawberry', '12 Piece', 150, 'fruitveg', 'strawberry.jpg'),
(6, 'Chiku', '1 Kg', 40, 'fruitveg', 'chiku.jpg'),
(7, 'Orange', '1 Kg', 60, 'fruitveg', 'orange.jpg'),
(8, 'Pineapple', '1 Kg', 80, 'fruitveg', 'pineapple.jpg'),
(9, 'Pomegranate', '1 Kg', 150, 'fruitveg', 'pomegranate.jpg'),
(10, 'Guava', '1 Kg', 30, 'fruitveg', 'guava.jpg'),
(11, 'Papaya', '1 Kg', 40, 'fruitveg', 'papaya.jpg'),
(12, 'Water Melon', '1 Kg', 30, 'fruitveg', 'watermelon.jpg'),
(13, 'Sugar Apple', '1 Kg', 50, 'fruitveg', 'sugarapple.jpg'),
(14, 'Cheery', '12 Piece', 70, 'fruitveg', 'cheery.jpg'),
(15, 'Blueberries', '1 Kg', 80, 'fruitveg', 'blueberries.jpg'),
(16, 'Carpet', 'Set of 2', 399, 'household', 'carpet.jpg'),
(17, 'Table-Cloth', 'Combo of 2', 450, 'household', 'tablecloth.jpg'),
(18, 'Juicer', 'Pack of 2', 600, 'household', 'juicer.jpg'),
(19, 'Doormat', 'set of 3', 750, 'household', 'doormat.jpg'),
(20, 'Cushion', 'Combo of 3', 799, 'household', 'cushion.jpg'),
(21, 'Dust pan', 'Set of 2', 500, 'household', 'dustpan.jpg'),
(22, 'Bottle', 'set of 5', 450, 'household', 'bottle.jpg'),
(23, 'Curtains', 'Pack of 2', 799, 'household', 'curtains.jpg'),
(24, 'Flower vase', 'Combo of 3', 800, 'household', 'flowervase.jpg'),
(25, 'Trash Can', 'Set of 1', 499, 'household', 'trashcan.jpg'),
(26, 'Soap-case', 'combo of 3', 300, 'household', 'soapcase.jpg'),
(27, 'Screen-Protector', 'Pack of 2', 350, 'household', 'screen.jpg'),
(28, 'Tap', 'set of 2', 500, 'household', 'tap.jpg'),
(29, 'Fork', 'Pack of 3', 350, 'household', 'fork.jpg'),
(30, 'Festive Decor', 'Pack of 3', 400, 'household', 'festive.jpg'),
(31, 'Milk', '200 ml', 80, 'beverages', 'milk.jpg'),
(32, 'Tea', '50 ml', 45, 'beverages', 'tea.jpg'),
(33, 'Coffee', '50 ml', 60, 'beverages', 'coffee.jpg'),
(34, 'Soda or Pop', '100 ml', 75, 'beverages', 'soda.jpg'),
(35, 'Coca-cola', '1 Liters', 120, 'beverages', 'cocacola.jpg'),
(36, 'Sprite ', '1.5 Liters', 100, 'beverages', 'sprite.jpg'),
(37, 'Pepsi', '500 ml', 70, 'beverages', 'pepsi.jpg'),
(38, 'Orange Juice', '100 ml', 50, 'beverages', 'orangejuice.jpg'),
(39, 'Grapes Juice', '500 ml', 80, 'beverages', 'grapesjuice.jpg'),
(40, 'Smoothies', '400 ml', 150, 'beverages', 'smoothies.jpg'),
(41, 'Cocoa', '50 ml', 200, 'beverages', 'cocoa.jpg'),
(42, 'Tonic Water', '250 ml', 100, 'beverages', 'tonic.jpg'),
(43, 'Mocktails', '500 ml', 450, 'beverages', 'mocktail.jpg'),
(44, 'Milk Shakes', '230 ml', 120, 'beverages', 'milkshake.jpg'),
(45, 'Cocktail', '130 ml', 250, 'beverages', 'cocktail.jpg'),
(46, 'Cotton swabs', 'Pack of 2', 60, 'pcare', 'cottonswabs.jpg'),
(47, 'Denver Deo', '150 ml pack', 190, 'pcare', 'denver.jpg'),
(48, 'VWash', '200 ml', 259, 'pcare', 'vwash.jpg'),
(49, 'Beard Trimmer', 'Single', 1309, 'pcare', 'trimmer.jpg'),
(50, 'Nivea Whitening', '50 ml', 139, 'pcare', 'nivea.jpg'),
(51, 'Colgate Toothpaste', '300 g', 116, 'pcare', 'colgate.jpg'),
(52, 'Maybelline Baby Lips', '4 g', 122, 'pcare', 'babylips.jpg'),
(53, 'VLCC Pedicure', 'pack of 2', 250, 'pcare', 'vlcc.jpg'),
(54, 'Facial Tissue', 'Set of 2', 250, 'pcare', 'facial.jpg'),
(55, 'Dove white', '250 ml', 550, 'pcare', 'dove.jpg'),
(56, 'Ensure Drink', '1 kg', 945, 'pcare', 'ensure.jpg'),
(57, 'Head & Shoulders', '675 ml', 340, 'pcare', 'head.jpg'),
(58, 'Eye & Lip Liner', 'set of 2', 275, 'pcare', 'liner.jpg'),
(59, 'Pears', 'set of 4', 112, 'pcare', 'pears.jpg'),
(60, 'Yardley', '450 g', 225, 'pcare', 'yardley.jpg'),
(61, 'Black Forest Cake white Icing', '2 kg', 600, 'cakeflower', 'black.jpg'),
(62, 'Pineapple Eggless Cake', '500 gm', 420, 'cakeflower', 'pineapplecake.jpg'),
(63, 'Chocolate Cake', '500 gm', 621, 'cakeflower', 'choco.jpg'),
(64, 'Fresh Vanilla Cake', '1 Kg ', 790, 'cakeflower', 'vanilla.jpg'),
(65, 'Nutella Walnut Cake', '4 pieces', 338, 'cakeflower', 'nutella.jpg'),
(66, 'Kiwi Paan Cake', '500 gm', 459, 'cakeflower', 'Kiwi.jpg'),
(67, 'Black Forest Cake', '500 gm', 496, 'cakeflower', 'blackforest.jpg'),
(68, 'Rose and chocolate Cake', '1 Hamper', 995, 'cakeflower', 'fervor.jpg'),
(69, 'Pink Teddy and Roses', 'Teddy Flower', 849, 'cakeflower', 'pinkcombo.jpg'),
(70, 'Silk and Pink Flowers', '1 Hamper', 995, 'cakeflower', 'silk.jpg'),
(71, 'Elegant Adoration', '1 Hamper', 850, 'cakeflower', 'elegant.jpg'),
(72, 'Teddy and Flowers ', '1 Hamper', 890, 'cakeflower', 'teddytop.jpg'),
(73, 'Cake and Flowers', '1 Hamper', 845, 'cakeflower', 'explosion.jpg'),
(74, 'Teddy and Roses', '1 Hamper', 750, 'ckeflower', 'loveduel.jpg'),
(75, 'Celebration, Teddy and Roses', '1 Hamper', 700, 'cakeflower', 'celebration.jpg'),
(76, 'Atta-Whole Wheat', '10 Kg-Pouch', 365, 'grocery', 'atta.jpg'),
(77, 'Sugar', '5 Kg', 180, 'grocery', 'sugar.jpg'),
(78, 'Rice Surti Kolam', '10 Kg - Bag', 520, 'grocery', 'rice.jpg'),
(79, 'Moong Dal', '1 Kg', 129, 'grocery', 'moongdal.jpg'),
(80, 'Sooji', '1 Kg - Pouch', 40, 'grocery', 'sooji.jpg'),
(81, 'Pure Ghee', '1 ltr - Pouch', 383, 'grocery', 'ghee.jpg'),
(82, 'Raw Peanuts', '1 Kg', 149, 'grocery', 'peanuts.jpg'),
(83, 'Maida', '1 Kg - Pouch', 40, 'grocery', 'maida.jpg'),
(84, 'Olive Oil', '2 ltr - Bottle', 198, 'grocery', 'olive.jpg'),
(85, 'Basmati Rice', '5 Kg', 390, 'grocery', 'basmati.jpg'),
(86, 'Poha', '1 Kg', 50, 'grocery', 'poha.jpg'),
(87, 'Sabudana', '1 Kg - Pouch', 80, 'grocery', 'sabudana.jpg'),
(88, 'Brown Chana', '500 gm', 49, 'grocery', 'chana.jpg'),
(89, 'Rajma Chitra', '500 gm', 85, 'grocery', 'rajma.jpg'),
(90, 'Amchoor Powder', '50 gm', 25, 'grocery', 'amchoor.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

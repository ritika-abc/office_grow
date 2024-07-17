-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 17, 2024 at 12:50 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u496524825_export_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(100) NOT NULL,
  `buyer_name` varchar(200) NOT NULL,
  `buyer_email` varchar(200) NOT NULL,
  `buyer_phone` int(19) NOT NULL,
  `enquiry_for` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `buyer_name`, `buyer_email`, `buyer_phone`, `enquiry_for`) VALUES
(1, 'Rktika', 'abc@gmail.com', 15252525, '');

-- --------------------------------------------------------

--
-- Table structure for table `buyleads`
--

CREATE TABLE `buyleads` (
  `buyleads_id` int(100) NOT NULL,
  `buyer_name` varchar(200) NOT NULL,
  `queiry_for` varchar(255) NOT NULL,
  `number` varchar(200) NOT NULL,
  `accessed_at` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(100) NOT NULL,
  `buyer_email` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `buyer_location` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyleads`
--

INSERT INTO `buyleads` (`buyleads_id`, `buyer_name`, `queiry_for`, `number`, `accessed_at`, `user_id`, `buyer_email`, `date`, `buyer_location`, `quantity`, `product_name`, `country_name`, `state`) VALUES
(4, 'varun kumar', 'car', '3453453455', '2024-06-14', 0, 'varun@gmail.com', '2024-06-14', 'delhi', '', 'car', 'india', 'delhi'),
(5, 'shanu kumar', 'singing products', '45345345', '2024-06-14', 0, 'shanu@gmail.com', '2024-06-14', 'US', '', 'spices', '', ''),
(6, 'varun kumar', 'apple  mango juse', '23245345345', '2024-07-11', 0, 'abc@gmail.com', '2024-07-11', 'delhi', '', 'mango', '', ''),
(7, 'Arun', 'mango juice', '53534443', '2024-07-12', 0, 'arn@gmail.com', '2024-07-12', 'delhi , shyan kund 110031', '', '', 'india', 'goa'),
(8, 'deepak', 'toy car', '23245345345', '2024-07-12', 0, 'abc@gmail.com', '2024-07-12', 'delhi , shyan kund 110031', '', 'toy car', '', ''),
(9, 'Varun', 'Car Cleaning Cloth ', '23245345345', '2024-07-12', 0, 'abc@gmail.com', '2024-07-12', 'delhi , shyan kund 110031', '12kg', 'Car Cleaning  ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_long_image` varchar(255) NOT NULL,
  `cat_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `cat_long_image`, `cat_slug`) VALUES
(10, 'Agriculture', 'extra_image/Agriculture.jpg', 'extra_image/new.jpg', 'agri'),
(11, 'Apparel & Fashion ', 'extra_image/Apparel & Fashion.jpg', '', 'fasi'),
(12, 'Automobile ', 'extra_image/automobile.jpg', '', 'auto'),
(13, 'home decoration', 'extra_image/image-asset.jpg', 'extra_image/home_decor_long.jpg', 'home-decor'),
(14, 'Electronics', 'extra_image/Electronics.jpg', 'extra_image/electronics_long.jpg', 'electronics'),
(15, 'Fashion', 'extra_image/GettyImages-615595706-scaled.jpg', 'extra_image/fashion_long.jpg', 'fashion'),
(16, 'Food Products & Beverage ', 'extra_image/foodanddrink.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countries_id` int(100) NOT NULL,
  `country_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'Andorra'),
(5, 'Angola'),
(6, 'Antigua and Barbuda'),
(7, 'Argentina'),
(8, 'Armenia'),
(9, 'Australia'),
(10, 'Austria'),
(11, 'Azerbaijan'),
(12, 'Bahamas'),
(13, 'Bahrain'),
(14, 'Bangladesh'),
(15, 'Barbados'),
(16, 'Belarus'),
(17, 'Belgium'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bhutan'),
(21, 'Bolivia'),
(22, 'Bosnia and Herzegovina'),
(23, 'Botswana'),
(24, 'Brazil'),
(25, 'Brunei'),
(26, 'Bulgaria'),
(27, 'Burkina Faso'),
(28, 'Burundi'),
(29, 'Cabo Verde'),
(30, 'Cambodia'),
(31, 'Cameroon'),
(32, 'Canada'),
(33, 'Central African Republic'),
(34, 'Chad'),
(35, 'Chile'),
(36, 'China'),
(37, 'Colombia'),
(38, 'Comoros'),
(39, 'Congo'),
(40, 'Costa Rica'),
(41, 'Croatia'),
(42, 'Cuba'),
(43, 'Cyprus'),
(44, 'Czech Republic'),
(45, 'Denmark'),
(46, 'Djibouti'),
(47, 'Dominica'),
(48, 'Dominican Republic'),
(49, 'East Timor'),
(50, 'Ecuador'),
(51, 'Egypt'),
(52, 'El Salvador'),
(53, 'Equatorial Guinea'),
(54, 'Eritrea'),
(55, 'Estonia'),
(56, 'Eswatini'),
(57, 'Ethiopia'),
(58, 'Fiji'),
(59, 'Finland'),
(60, 'France'),
(61, 'Gabon'),
(62, 'Gambia'),
(63, 'Georgia'),
(64, 'Germany'),
(65, 'Ghana'),
(66, 'Greece'),
(67, 'Grenada'),
(68, 'Guatemala'),
(69, 'Guinea'),
(70, 'Guinea-Bissau'),
(71, 'Guyana'),
(72, 'Haiti'),
(73, 'Honduras'),
(74, 'Hungary'),
(75, 'Iceland'),
(76, 'India'),
(77, 'Indonesia'),
(78, 'Iran'),
(79, 'Iraq'),
(80, 'Ireland'),
(81, 'Israel'),
(82, 'Italy'),
(83, 'Jamaica'),
(84, 'Japan'),
(85, 'Jordan'),
(86, 'Kazakhstan'),
(87, 'Kenya'),
(88, 'Kiribati'),
(89, 'Korea, North'),
(90, 'Korea, South'),
(91, 'Kosovo'),
(92, 'Kuwait'),
(93, 'Kyrgyzstan'),
(94, 'Laos'),
(95, 'Latvia'),
(96, 'Lebanon'),
(97, 'Lesotho'),
(98, 'Liberia'),
(99, 'Libya'),
(100, 'Liechtenstein'),
(101, 'Lithuania'),
(102, 'Luxembourg'),
(103, 'Madagascar'),
(104, 'Malawi'),
(105, 'Malaysia'),
(106, 'Maldives'),
(107, 'Mali'),
(108, 'Malta'),
(109, 'Marshall Islands'),
(110, 'Mauritania'),
(111, 'Mauritius'),
(112, 'Mexico'),
(113, 'Micronesia'),
(114, 'Moldova'),
(115, 'Monaco'),
(116, 'Mongolia'),
(117, 'Montenegro'),
(118, 'Morocco'),
(119, 'Mozambique'),
(120, 'Myanmar'),
(121, 'Namibia'),
(122, 'Nauru'),
(123, 'Nepal'),
(124, 'Netherlands'),
(125, 'New Zealand'),
(126, 'Nicaragua'),
(127, 'Niger'),
(128, 'Nigeria'),
(129, 'North Macedonia'),
(130, 'Norway'),
(131, 'Oman'),
(132, 'Pakistan'),
(133, 'Palau'),
(134, 'Palestinian Territories'),
(135, 'Panama'),
(136, 'Papua New Guinea'),
(137, 'Paraguay'),
(138, 'Peru'),
(139, 'Philippines'),
(140, 'Poland'),
(141, 'Portugal'),
(142, 'Qatar'),
(143, 'Romania'),
(144, 'Russia'),
(145, 'Rwanda'),
(146, 'Saint Kitts and Nevis'),
(147, 'Saint Lucia'),
(148, 'Saint Vincent and the Grenadines'),
(149, 'Samoa'),
(150, 'San Marino'),
(151, 'Sao Tome and Principe'),
(152, 'Saudi Arabia'),
(153, 'Senegal'),
(154, 'Serbia'),
(155, 'Seychelles'),
(156, 'Sierra Leone'),
(157, 'Singapore'),
(158, 'Slovakia'),
(159, 'Slovenia'),
(160, 'Solomon Islands'),
(161, 'Somalia'),
(162, 'South Africa'),
(163, 'South Sudan'),
(164, 'Spain'),
(165, 'Sri Lanka'),
(166, 'Sudan'),
(167, 'Suriname'),
(168, 'Sweden'),
(169, 'Switzerland'),
(170, 'Syria'),
(171, 'Taiwan'),
(172, 'Tajikistan'),
(173, 'Tanzania'),
(174, 'Thailand'),
(175, 'Togo'),
(176, 'Tonga'),
(177, 'Trinidad and Tobago'),
(178, 'Tunisia'),
(179, 'Turkey'),
(180, 'Turkmenistan'),
(181, 'Tuvalu'),
(182, 'Uganda'),
(183, 'Ukraine'),
(184, 'United Arab Emirates'),
(185, 'United Kingdom'),
(186, 'United States'),
(187, 'Uruguay'),
(188, 'Uzbekistan'),
(189, 'Vanuatu'),
(190, 'Vatican City'),
(191, 'Venezuela'),
(192, 'Vietnam'),
(193, 'Yemen'),
(194, 'Zambia'),
(195, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `free-listing-product`
--

CREATE TABLE `free-listing-product` (
  `pro_id` int(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `inner_cat_id` int(100) NOT NULL,
  `micro_id` int(100) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `free-listing-product`
--

INSERT INTO `free-listing-product` (`pro_id`, `product_name`, `img1`, `img2`, `img3`, `company_name`, `company_logo`, `product_description`, `cat_id`, `sub_id`, `inner_cat_id`, `micro_id`, `location`) VALUES
(14, '', 'logo/logo.jpg', '', '', '', '', '', 0, 0, 0, 0, ''),
(15, 'cap', 'logo/logo.jpg', '', '', 'web2export', '', 'this is cap', 5, 6, 8, 4, ''),
(16, 'bts bags', 'logo/download.jfif', '', '', 'web2export', '', 'this is party bags', 5, 6, 6, 1, ''),
(17, 'LED Lamp', 'extra_image/led_lamp.jpg', '', '', 'Tech Innovations', '', 'Energy-efficient LED lamp for home decor', 12, 15, 17, 22, 'New York'),
(18, 'Smart Thermostat', 'extra_image/smart_thermostat.jpg', '', '', 'Smart Living Solutions', '', 'WiFi-enabled smart thermostat for home automation', 12, 15, 18, 23, 'San Francisco'),
(19, 'Home Security Camera', 'extra_image/security_camera.jpg', '', '', 'Secure Home Solutions', '', 'HD security camera for indoor surveillance', 12, 15, 19, 24, 'Chicago'),
(20, 'Water Bottle ', 'logo/mbgwnyy18q3lb0wi22ie083fgghiq3bp.jpg', '', '', 'https://vistaraenterprise.com/', '', 'Water Bottle ', 16, 17, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(100) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `phone_number`, `message`) VALUES
(3, '0', 'demo mail '),
(4, '0', 'demo mail '),
(5, '', 'afsdfsdf'),
(6, '8287042772', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `inner_cat`
--

CREATE TABLE `inner_cat` (
  `inner_cat_id` int(100) NOT NULL,
  `inner_cat_name` varchar(256) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `inner_cat_image` varchar(255) NOT NULL,
  `cat_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inner_cat`
--

INSERT INTO `inner_cat` (`inner_cat_id`, `inner_cat_name`, `sub_id`, `inner_cat_image`, `cat_id`) VALUES
(11, 'Fruit Plants', 10, 'extra_image/303635-1-home.jpg', 0),
(12, 'Outdoor Plants', 10, 'extra_image/', 0),
(13, 'Natural Flowers', 10, 'extra_image/', 0),
(16, 'auto1', 14, 'extra_image/', 0),
(17, 'Bedroom Decor', 15, 'extra_image/bedroom_decor.jpg', 0),
(18, 'Living Room Decor', 15, 'extra_image/living_room_decor.jpg', 0),
(19, 'Kitchen Decor', 15, 'extra_image/kitchen_decor.jpg', 0),
(20, 'Garden Plant', 10, 'extra_image/', 0),
(25, 'Harvesters', 11, 'extra_image/', 0),
(26, 'Agricultural Irrigation Systems', 11, 'extra_image/', 0),
(27, 'Cultivators', 11, 'extra_image/', 0),
(28, 'Sprinkler Irrigation System', 11, 'extra_image/', 0),
(29, 'Leather Shoes', 13, 'extra_image/Leather Shoes.jpg', 0),
(30, 'Flat Slippers', 13, 'extra_image/Flat Slippers.jpg', 0),
(31, 'Ladies Shoes', 13, 'extra_image/Ladies Shoes.jpg', 0),
(32, 'Shoe Care Products', 13, 'extra_image/image-asset.jpg', 0),
(33, 'Whole Spices', 20, 'extra_image/vostochnie_pryanosti.jpg', 0),
(34, 'Flours', 19, 'extra_image/9872810c18d734006892108ce476d420.jpg', 0),
(35, 'Fresh Fruits', 18, 'extra_image/346356536.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `limit_buylead`
--

CREATE TABLE `limit_buylead` (
  `limit_id` int(100) NOT NULL,
  `user_id` int(200) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `buyleads_id` int(100) NOT NULL,
  `buyer_email` varchar(100) NOT NULL,
  `queiry_for` varchar(255) NOT NULL,
  `number` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `buyer_name` varchar(100) NOT NULL,
  `buyer_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `limit_buylead`
--

INSERT INTO `limit_buylead` (`limit_id`, `user_id`, `user_email`, `buyleads_id`, `buyer_email`, `queiry_for`, `number`, `date`, `buyer_name`, `buyer_location`) VALUES
(65, 53, 'ritika@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-06-15', 'varun kumar', ''),
(66, 53, 'ritika@gmail.com', 5, 'shanu@gmail.com', 'singing products', 45345345, '2024-06-15', 'shanu kumar', 'US'),
(67, 55, 'shyam@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-06-17', 'varun kumar', 'delhi'),
(68, 65, 'webritika555@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-07-06', 'varun kumar', 'delhi'),
(69, 61, 'githublive123@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-07-12', 'varun kumar', 'delhi'),
(70, 61, 'githublive123@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-07-12', 'varun kumar', 'delhi'),
(71, 68, 'anish@gmail.com', 8, 'abc@gmail.com', 'toy car', 2147483647, '2024-07-12', 'deepak', 'delhi , shyan kund 110031'),
(72, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-12', 'khan ', 'delhi , shyan kund 110031'),
(73, 61, 'githublive123@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-07-12', 'varun kumar', 'delhi'),
(74, 61, 'githublive123@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-07-13', 'varun kumar', 'delhi'),
(75, 68, 'anish@gmail.com', 0, '', '', 0, '2024-07-13', '', ''),
(76, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-13', 'Varun', 'delhi , shyan kund 110031'),
(77, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-13', 'Varun', 'delhi , shyan kund 110031'),
(78, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-17', 'Varun', 'delhi , shyan kund 110031'),
(79, 69, 'ritika@web2export.com', 0, '', '', 0, '2024-07-17', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `micro`
--

CREATE TABLE `micro` (
  `micro_id` int(100) NOT NULL,
  `micro_name` varchar(255) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `inner_cat_id` int(100) NOT NULL,
  `micro_cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro`
--

INSERT INTO `micro` (`micro_id`, `micro_name`, `cat_id`, `sub_id`, `inner_cat_id`, `micro_cat_image`) VALUES
(6, 'Mango Plants', 10, 10, 11, 'extra_image/303635-1-home.jpg'),
(7, 'Neem Tree', 10, 10, 12, 'extra_image/2.jpg'),
(8, 'Palm Trees', 10, 10, 12, 'extra_image/76806-1-home.jpg'),
(9, 'Banana Plants', 10, 10, 11, 'extra_image/banana.jpg'),
(10, 'Casual Shoes', 11, 13, 15, 'extra_image/'),
(11, 'auto2', 12, 14, 16, 'extra_image/'),
(12, 'Modern Lamps', 12, 15, 17, 'extra_image/modern_lamps.jpg'),
(13, 'Smart Home Devices', 12, 15, 18, 'extra_image/smart_home_devices.jpg'),
(14, 'Home Security Systems', 12, 15, 19, 'extra_image/home_security_systems.jpg'),
(15, 'Rose Flower', 10, 10, 13, 'extra_image/73805-1-home.jpg'),
(16, 'Jasmine Flowers', 10, 10, 13, 'extra_image/75343-1-home.jpg'),
(17, 'Herbal Plant', 10, 10, 20, 'extra_image/348709-1-home.jpg'),
(18, 'Dragon Fruit Plant', 10, 10, 11, 'extra_image/'),
(19, 'Harvesters', 10, 11, 21, 'extra_image/'),
(20, 'Combine Harvester', 10, 11, 25, 'extra_image/'),
(21, 'Power Reaper', 10, 11, 25, 'extra_image/'),
(22, 'Sprinkler Irrigation System', 10, 11, 26, 'extra_image/'),
(23, 'Men Leather Shoes', 11, 13, 29, 'extra_image/Leather Shoes.jpg'),
(24, 'Ladies Leather Shoes', 11, 13, 29, 'extra_image/'),
(25, 'Ladies Slippers', 11, 13, 30, 'extra_image/Ladies Slippers.jpg'),
(26, 'Turmeric ', 16, 20, 33, 'extra_image/pjimage-3-1592015169.jpg'),
(27, 'Wheat Flour', 16, 19, 34, 'extra_image/AARiRS9.jpg'),
(28, 'Gram Flour', 16, 19, 34, 'extra_image/healthy-besan-recipes-Main_g.jpg'),
(29, 'Organic Flour', 16, 19, 34, 'extra_image/white-quinoa-flour-1kg-660003.jpg'),
(30, 'Mango', 16, 18, 35, 'extra_image/23424.jpg'),
(31, 'Tropical Fruits', 16, 21, 35, 'extra_image/4534554.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `long_dec` varchar(255) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `company_experience` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `number` int(20) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `moq` varchar(255) NOT NULL,
  `packaging_type` varchar(255) NOT NULL,
  `product_life` varchar(255) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `company_description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `cat_id` int(100) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `micro_id` int(100) NOT NULL,
  `inner_cat_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `iec` varchar(200) NOT NULL,
  `gst` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `state_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `about_company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `product_name`, `long_dec`, `product_image1`, `product_image2`, `product_image3`, `title`, `price`, `company_experience`, `company_name`, `company_logo`, `product_description`, `city`, `state`, `country`, `number`, `client_name`, `business_type`, `moq`, `packaging_type`, `product_life`, `feature`, `company_description`, `date`, `cat_id`, `sub_id`, `micro_id`, `inner_cat_id`, `name`, `iec`, `gst`, `exp`, `website`, `state_name`, `company_address`, `about_company`) VALUES
(4, 'mango', '', '', '', '', '', '1200', '', '', '', 'The term mango refers to the plant Mangifera indica as well as to its fruit. The plant, which is a member of the family Anacardiaceae, is an evergreen tree. Its fruit varies in appearance and is one of the most important and widely cultivated fruits of the tropical world.The term mango refers to the plant Mangifera indica as well as to its fruit. The plant, which is a member of the family Anacardiaceae, is an evergreen tree. Its fruit varies in appearance and is one of the most important and widely cultivated fruits of the tropical world.The term mango refers to the plant Mangifera indica as well as to its fruit. The plant, which is a member of the family Anacardiaceae, is an evergreen tree. Its fruit varies in appearance and is one of the most important and widely cultivated fruits of the tropical world.The term mango refers to the plant Mangifera indica as well as to its fruit. The plant, which is a member of the family Anacardiaceae, is an evergreen tree. Its fruit varies in appearance and is one of the most important and widely cultivated fruits of the tropical world.The term mango refers to the plant Mangifera indica as well as to its fruit. The plant, which is a member of the family Anacardiaceae, is an evergreen tree. Its fruit varies in appearance and is one of the most important and widely cultivated fruits of the tropical world.\r\n                            ', '', '', '', 0, '', '', '12 pice', '2years', 'plastic', 'mango', '', '2024-06-17', 10, 10, 6, 11, '', '', '', '', '', '', '', ''),
(7, 'Synthetic Genuine Leather Men Casual Shoes', '', 'extra_image/', '', '', '', '1200', '', '', '', 'Rs 440 / Pair\r\n\r\nMOQ : 12 Pair\r\nPackaging : Carton\r\nAvailable Colors : Black\r\nSizes : 5 to 10\r\nUpper Material : Genuine Leather\r\nSupply Type : Manufacturer', '', '', '', 0, '', '', '2 pice', '2years', 'plastic', 'Synthetic Genuine Leather Men Casual Shoes', '', '2024-06-18', 11, 13, 10, 15, '', '', '', '', '', '', '', ''),
(8, 'LED Lamp', '', 'extra_image/led_lamp.jpg', '', '', '', '', '', 'Tech Innovations', '', 'Energy-efficient LED lamp for home decor', '', '', '', 0, '', '', '', '', '', '', '', '2024-06-19', 12, 15, 22, 17, '', '', '', '', '', '', '', ''),
(9, 'Smart Thermostat', '', 'extra_image/smart_thermostat.jpg', '', '', '', '', '', 'Smart Living Solutions', '', 'WiFi-enabled smart thermostat for home automation', '', '', '', 0, '', '', '', '', '', '', '', '2024-06-19', 12, 15, 23, 18, '', '', '', '', '', '', '', ''),
(10, 'Home Security Camera', '', 'extra_image/security_camera.jpg', '', '', '', '', '', 'Secure Home Solutions', '', 'HD security camera for indoor surveillance', '', '', '', 0, '', '', '', '', '', '', '', '2024-06-19', 12, 15, 24, 19, '', '', '', '', '', '', '', ''),
(11, 'Dragon Fruit Plant', '', 'extra_image/dragon-fruit-plant-1629971588-5959524.jpeg', '', '', '', 'Rs 70 - Rs 80 / Bag', '', '', '', '\r\nApplication : Planting\r\nCountry of Origin : India\r\nAgeing Period : 12 - 24 Month\r\n', '', '', '', 0, '', '', 'MOQ : 500 Bag', 'Ageing Period : 12 - 24 Month', 'Type : Dragon Fruit Plant', 'Dragon Fruit Plant', '', '2024-06-19', 10, 10, 18, 11, '', '', '', '', '', '', '', ''),
(12, 'mango', '', 'extra_image/mngo.jpg', '', '', '', '1200', '', '', '', 'mango 2 image \r\nvarun pri lmt\r\n                            ', '', '', '', 0, '', '', '12 pice', '2years', 'plastic', 'mango', '', '2024-06-19', 10, 10, 6, 11, '', '', '', '', '', '', '', ''),
(13, ' RUN+ Mens Leather Shoes, Style : FORMAL', '', 'product-image/blog-1.jpg', 'product-image/carousel-1.jpg', 'product-image/testimonial-1.jpg', 'fsdf', '12k', '12years', 'https://aumfoodexports.com/', 'product-image/73805-1-home.jpg', 'MOQ : 200 Pair\r\nSupply Type : Manufacturer\r\nModel Number : 98\r\nLining Material : LEATHER\r\nStyle : FORMAL\r\nUpper Material : LEATHER', 'delhi', '', '', 2147483647, '', '', '12m', '', '', ' RUN+ Mens Leather Shoes, Style : FORMAL', '', '2024-06-19', 11, 13, 23, 29, '', 'IECSHDGFHJSFGD765', 'GSTty47567', '', 'https://aumfoodexports.com/', 'Andhra Pradesh', 'd54 shyam vhihar new delhi', ''),
(14, 'mango slice', '<tr><th>Material</th>  <td>food</td></tr>\r\n<tr><th>Payment Terms</th>  <td>cash</td></tr>', 'extra_image/about1.jfif', '', '', '', '', 'kartic', 'kartic pri ltd', 'extra_image/logo.jpg', '<tr><th>Material</th>  <td>food</td></tr>\r\n<tr><th>Payment Terms</th>  <td>cash</td></tr>', '', '', '', 0, '', '', '', '', '', 'mango slice', '', '2024-07-03', 10, 10, 6, 11, '', 'IEC654654654', 'GST654654GF', '', 'https://web2export.com/', 'Bihar', '', ''),
(15, 'mango slice', '<tr><th>Material</th>  <td>food</td></tr>\r\n<tr><th>Payment Terms</th>  <td>cash</td></tr>', 'extra_image/about1.jfif', '', '', '', '', 'kartic', 'kartic pri ltd', 'extra_image/logo.jpg', '<tr><th>Material</th>  <td>food</td></tr>\r\n<tr><th>Payment Terms</th>  <td>cash</td></tr>', '', '', '', 0, '', '', '', '', '', 'mango slice', '', '2024-07-03', 10, 10, 6, 11, '', 'IEC654654654', 'GST654654GF', '', 'https://web2export.com/', 'Bihar', '', ''),
(16, 'mango slice', '<tr><th>Material</th>  <td>food</td></tr>\r\n<tr><th>Payment Terms</th>  <td>cash</td></tr>', 'extra_image/about1.jfif', '', '', '', '', 'kartic', 'kartic pri ltd', 'extra_image/logo.jpg', '<tr><th>Material</th>  <td>food</td></tr>\r\n<tr><th>Payment Terms</th>  <td>cash</td></tr>', '', '', '', 0, '', '', '', '', '', 'mango slice', '', '2024-07-03', 10, 10, 6, 11, '', 'IEC654654654', 'GST654654GF', '', 'https://web2export.com/', 'Bihar', '', ''),
(17, 'mango slice', '<tr><th>life</th>  <td>3 years</td></tr>\r\n<tr><th>moq</th>  <td>12kg</td></tr>\r\n<tr><th>unit</th>  <td>q</td></tr>', 'extra_image/spray-dried-cherry-powder.jpg', '', '', '', '', '', '', 'extra_image/', '<tr><th>wwwww </th>  <td>3 years</td></tr>\r\n<tr><th>moq</th>  <td>12kg</td></tr>\r\n<tr><th>unit</th>  <td>aaaa aa ton</td></tr>', '', '', '', 0, 'ritika', '', '', '', '', 'mango slice', '', '2024-07-03', 10, 10, 6, 11, '', '', '', '', '', 'Bihar', '', ''),
(18, '  Dasheri Mango, 1 kg', ' <tr><th>Price</th>  <td>MRP:₹142.47</td></tr>\r\n<tr><th>Country of origin</th><td> India</td></tr>\r\n<tr><th>Life</th><td> 2 months</td></tr>                                     \r\n<tr><th>packaging</th><td> Box</td></tr>\r\n ', 'extra_image/23424.jpg', '', '', 'Fresh Mango', '142.47', '12 years', 'Vistara', 'extra_image/logo_green.jpg', '<tr><th>Price</th>  <td>MRP:₹142.47</td></tr>\r\n<tr><th>Country of origin</th><td> India</td></tr>\r\n<tr><th>Life</th><td> 2 months</td></tr>                                     \r\n ', 'delhi', '', '', 0, 'Kartik Arun', '', '12   ', '', '', 'fresho! Dasheri Mango, 1 kg', '', '2024-07-17', 16, 21, 30, 35, '', 'IEC654654654', 'GST654654GF', '', 'https://vistaraenterprise.com/', 'Delhi', 'Vistara enterprise 7/3 Ayyanar kovil Road, Opposite to Thadco colony, Rajapalayam, Virudhunagar District, Tamilnadu -626117', 'ALALALALALA');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `name`, `number`, `email`, `pro_name`, `qty`, `unit`, `city`, `state`, `country`, `pin_code`, `product_type`) VALUES
(25, 'ritika', '23245345345', 'ritikamaheshonly@gmail.com', 'car', '40gm', '10', 'delhi', 'delhi', 'india', '234234', 're-selling'),
(26, 'preeti', '23245345345', 'preeti@gmail.com', 'computer', '1', '-', 'delhi', 'delhi', 'india', '110043', 'self use');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli and Daman and Diu'),
(9, 'Delhi'),
(10, 'Goa'),
(11, 'Gujarat'),
(12, 'Haryana'),
(13, 'Himachal Pradesh'),
(14, 'Jammu and Kashmir'),
(15, 'Jharkhand'),
(16, 'Karnataka'),
(17, 'Kerala'),
(18, 'Ladakh'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttar Pradesh'),
(35, 'Uttarakhand'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `sub_id` int(100) NOT NULL,
  `sub_cat_name` varchar(256) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `sub_cat_image` varchar(255) NOT NULL,
  `inner_cat_id` int(100) NOT NULL,
  `cat_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_id`, `sub_cat_name`, `cat_id`, `sub_cat_image`, `inner_cat_id`, `cat_slug`) VALUES
(10, 'Fresh Flowers and Plants', 10, 'extra_image/72bec92edf693df3d9cdcf4033e71edd.jpg', 0, ''),
(11, 'Irrigation Equipment & Systems', 10, 'extra_image/368206-984.jpg', 0, ''),
(12, 'PET and Farming Animals', 10, 'extra_image/bce845c46e920f036f4043c41e8c6b39.jpg', 0, ''),
(13, 'Men, Women & Kids Footwear', 11, 'extra_image/Men, Women & Kids Footwear.jpg', 0, ''),
(14, 'auto', 12, 'extra_image/auto.jpg', 0, ''),
(15, 'Industrial Clothing & Safety Wear', 11, 'extra_image/3948357.jpg', 0, ''),
(16, 'Womens Clothing', 11, 'extra_image/GettyImages-615595706-scaled.jpg', 0, ''),
(17, 'Tea & Coffee', 16, 'extra_image/image-1623852241.jpg', 0, ''),
(18, 'Dry Fruits & Nuts', 16, 'extra_image/Dry Fruits & Nuts.jpg', 0, ''),
(19, 'Food Grains, Cereals & Flour', 16, 'extra_image/Bags-of-grains.jpg', 0, ''),
(20, 'Cooking Spices and Masala', 16, 'extra_image/Dry Fruits & Nuts.jpg', 0, ''),
(21, 'Fresh, Preserved & Dried Fruits', 16, 'extra_image/erwer.jpg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_phone` varchar(19) NOT NULL,
  `company_name` varchar(256) NOT NULL,
  `plan` varchar(256) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `password` varchar(256) NOT NULL,
  `otp` int(100) NOT NULL,
  `expire` date NOT NULL DEFAULT current_timestamp(),
  `user_role` int(100) NOT NULL,
  `company_address` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `user_website` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `pincode` int(100) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `start_date` date NOT NULL DEFAULT current_timestamp(),
  `iec_code` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `company_name`, `plan`, `date`, `password`, `otp`, `expire`, `user_role`, `company_address`, `image`, `user_website`, `state`, `city`, `pincode`, `product_name`, `product_image`, `gst`, `start_date`, `iec_code`, `type`) VALUES
(61, 'ritika', 'githublive123@gmail.com', '45345345', 'web2export', '', '2024-06-24', '123', 987185, '2024-06-24', 0, 'nawada', 'logo/trust.JPG', 'https://vistaraenterprise.com/', 'Delhi', 'any city', 110043, 'APPLE', '', 'GST654654GF', '2024-06-24', '53453453IEC', 'supplier'),
(62, 'kartic', 'kartic@gmail.com', '45345345', 'kartic pri ltd', '', '2024-07-03', '123', 204334, '2024-07-03', 0, 'bihar 45 shyam kunj nagar', '', 'web2export.com', 'Arunachal Pradesh', 'any city', 0, 'rice', '', '', '2024-07-03', '', 'exporter'),
(63, 'shalini', 'chandroenterprises@gmail.com', '8564877654', 'chandro enterprises', '', '2024-07-05', '12345', 880352, '2024-07-05', 0, 'JANAKPURI', 'logo/icons8-trusted-64.png', 'https://vistaraenterprise.com/', 'Delhi', 'any city', 110043, 'Cat food', '', 'GST654654GF', '2024-07-05', '53453453IEC', 'supplier'),
(64, 'shalini', 'SHALINIWEB2EXPORT', '897650555', 'WEB2EXPORT', '', '2024-07-05', '12345', 374043, '2024-07-05', 0, 'FFTFT', '', '', '', '', 0, '', '', '', '2024-07-05', '', ''),
(65, 'ashu', 'webritika555@gmail.com', '45345345', 'web info pri ltd', '', '2024-07-05', '123', 181602, '2024-07-05', 0, 'nawada', 'logo/logo.png', 'https://web2export.com/', 'Delhi', '', 110043, 'mango', '', 'GST654654GF', '2024-07-05', '53453453IEC', 'exporter'),
(67, '', '', '', '', '', '2024-07-06', '', 296720, '2024-07-06', 0, '', '', '', '', '', 0, '', '', '', '2024-07-06', '', ''),
(68, 'anish', 'anish@gmail.com', '45345345', 'sithub.com', 'prime', '2024-07-12', '123', 273030, '2025-07-12', 0, 'goela dairy', 'logo/icons8-trusted-64.png', 'https://vistaraenterprise.com/', 'Delhi', 'delhi', 110043, 'car ', '', 'GST654654GF', '2024-07-13', '53453453IEC', 'exporter'),
(69, 'Harsh kumar', 'ritika@web2export.com', '25252555', 'Harsh pri ltd', '', '2024-07-17', '123', 654959, '2024-07-17', 0, 'Janakpuri west , Delhi , 110043', 'logo/17212172266251038591679022333065.jpg', 'https://web2export. com', 'Delhi', '', 110043, 'Computer repair bolts', '', 'GST rdrdtctv', '2024-07-17', 'Iecgtcyvubj', 'exporter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `buyleads`
--
ALTER TABLE `buyleads`
  ADD PRIMARY KEY (`buyleads_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countries_id`);

--
-- Indexes for table `free-listing-product`
--
ALTER TABLE `free-listing-product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inner_cat`
--
ALTER TABLE `inner_cat`
  ADD PRIMARY KEY (`inner_cat_id`);

--
-- Indexes for table `limit_buylead`
--
ALTER TABLE `limit_buylead`
  ADD PRIMARY KEY (`limit_id`);

--
-- Indexes for table `micro`
--
ALTER TABLE `micro`
  ADD PRIMARY KEY (`micro_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyleads`
--
ALTER TABLE `buyleads`
  MODIFY `buyleads_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `countries_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `free-listing-product`
--
ALTER TABLE `free-listing-product`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inner_cat`
--
ALTER TABLE `inner_cat`
  MODIFY `inner_cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `limit_buylead`
--
ALTER TABLE `limit_buylead`
  MODIFY `limit_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `micro`
--
ALTER TABLE `micro`
  MODIFY `micro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `sub_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

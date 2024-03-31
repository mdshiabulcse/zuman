-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 06:43 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuman`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `discrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `title`, `discrip`) VALUES
(5, ' Web Developer', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at.\"');

-- --------------------------------------------------------

--
-- Table structure for table `about_photo`
--

CREATE TABLE `about_photo` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_photo`
--

INSERT INTO `about_photo` (`id`, `photo`, `status`) VALUES
(2, '2.jpg', '1'),
(5, '5.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `photo` varchar(99) NOT NULL DEFAULT 'default.jpg',
  `password` varchar(30) NOT NULL,
  `role` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `photo`, `password`, `role`) VALUES
(5, 'shiabul islam', 'holybazar', 'shiabul@gmail.com', '5.jpg', '12345', 1),
(10, 'shiabul islam', 'holybazar', 'shiab@gmail.com', '10.jpg', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clint`
--

CREATE TABLE `clint` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clint`
--

INSERT INTO `clint` (`id`, `name`, `photo`) VALUES
(3, 'theamforest', '3.png'),
(4, 'videohive', '4.png'),
(5, 'codecaynone', '5.png'),
(6, 'audiojungle', '6.png'),
(7, 'graphirever', '7.png'),
(8, 'photodun', '8.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `phone`, `email`, `status`) VALUES
(19, '01780732866', 'shiabul@gmail.com', '1'),
(20, '01780732866', 'shiabul@gmail.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `text1` varchar(50) NOT NULL,
  `text2` varchar(50) NOT NULL,
  `text3` varchar(50) NOT NULL,
  `text4` varchar(50) NOT NULL,
  `text5` varchar(50) NOT NULL,
  `text6` varchar(50) NOT NULL,
  `text7` varchar(50) NOT NULL,
  `text8` varchar(50) NOT NULL,
  `text9` varchar(50) NOT NULL,
  `text10` varchar(50) NOT NULL,
  `text11` varchar(50) NOT NULL,
  `text12` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `text1`, `text2`, `text3`, `text4`, `text5`, `text6`, `text7`, `text8`, `text9`, `text10`, `text11`, `text12`, `status`) VALUES
(2, 'mbri-user', 'Happy Clients', '198', 'mbri-code', 'Project Done', '375', 'mbri-hot-cup', 'Coffee Cups', '2652', 'mbri-cust-feedback', 'Total Review', '350', '1');

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`id`, `name`, `icon`, `link`) VALUES
(1, 'facebook', 'ion-social-facebook', 'https://web.facebook.com/shiabulislam.shakib.14'),
(2, 'linkedin', 'ion-social-linkedin', 'https://www.linkedin.com/in/shiabul-islam-shakib-7bb487b6/'),
(4, 'instagram', 'ion-social-instagram-outline', 'https://www.instagram.com/shiabulislam/');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo`, `status`) VALUES
(8, '8.png', '1'),
(9, '9.png', '0'),
(10, '10.png', '0'),
(11, '11.jpg', '0'),
(12, '12.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu1` varchar(50) NOT NULL,
  `menu2` varchar(50) NOT NULL,
  `menu3` varchar(50) NOT NULL,
  `menu4` varchar(50) NOT NULL,
  `menu5` varchar(50) NOT NULL,
  `menu6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `menu6`) VALUES
(5, 'Home', 'About', 'Service', 'Works', 'Testimonial', 'contacts');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`) VALUES
(2, 'shiabul islam', 'shiabul@gmail.com', 'gatenhjy'),
(3, 'shiabul islam', 'shiab@gmail.com', 'svcdv');

-- --------------------------------------------------------

--
-- Table structure for table `navber`
--

CREATE TABLE `navber` (
  `id` int(11) NOT NULL,
  `content1` varchar(100) NOT NULL,
  `content2` varchar(300) NOT NULL,
  `content3` varchar(300) NOT NULL,
  `photo` varchar(100) DEFAULT 'default.jpg',
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navber`
--

INSERT INTO `navber` (`id`, `content1`, `content2`, `content3`, `photo`, `status`) VALUES
(12, 'hi there i am', 'Jack Barker', 'Jack Barker Ui/Ux Designer & Developer', '12.jpg', '0'),
(13, 'hi there i am', 'Jack Barker', 'Jack Barker Ui/Ux Designer & Developer', '13.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service` varchar(100) NOT NULL,
  `service1` varchar(70) NOT NULL,
  `service2` varchar(500) NOT NULL,
  `service3` varchar(100) NOT NULL,
  `service4` varchar(500) NOT NULL,
  `service5` varchar(70) NOT NULL,
  `service6` varchar(500) NOT NULL,
  `service7` varchar(70) NOT NULL,
  `service8` varchar(500) NOT NULL,
  `service9` varchar(70) NOT NULL,
  `service10` varchar(500) NOT NULL,
  `service11` varchar(70) NOT NULL,
  `service12` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service`, `service1`, `service2`, `service3`, `service4`, `service5`, `service6`, `service7`, `service8`, `service9`, `service10`, `service11`, `service12`) VALUES
(1, 'Services', 'Design', 'Molestiae vel eos atque alias recusandae citationem ad mollitia tecto possimus.', 'Development ', 'Ugit est deleniti at obcaecati ccusantium quam incidunt aborum voluptate.', 'Graphics', ' Lorem ipsum dolor sit amet conse ctetur adipisicing elit quos delectus ratione fugiat.', 'Branding ', 'Molestiae vel eos atque alias recusandae citationem ad mollitia tecto possimus.', 'Photography', ' Excepturi assumenda minima ea fugit laudantium dolores alias cum abore amet sint.', 'Support', ' consectetur adipisicing obcaecati ccusantium quam incidunt aborum voluptate.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `title` varchar(70) NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `title`, `about`, `photo`) VALUES
(2, 'shiabul islam', 'Web Developer', 'Ugit est deleniti at obcaecati ccusantium quam incidunt aborum voluptate.', '2.jpg'),
(3, 'Nayem', 'Asistant', 'Ugit est deleniti at obcaecati ccusantium quam incidunt aborum voluptate.', '3.jpg'),
(4, 'Jhon dio', 'Founder', 'Ugit est deleniti at obcaecati ccusantium quam incidunt aborum voluptate.', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `title1` varchar(300) NOT NULL,
  `content1` varchar(100) NOT NULL,
  `photo1` varchar(70) NOT NULL,
  `title2` varchar(70) NOT NULL,
  `content2` varchar(50) NOT NULL,
  `photo2` varchar(70) NOT NULL,
  `title3` varchar(100) NOT NULL,
  `content3` varchar(50) NOT NULL,
  `photo3` varchar(70) NOT NULL,
  `title4` varchar(100) NOT NULL,
  `content4` varchar(50) NOT NULL,
  `photo4` varchar(70) NOT NULL,
  `title5` varchar(100) NOT NULL,
  `content5` varchar(50) NOT NULL,
  `photo5` varchar(70) NOT NULL,
  `title6` varchar(100) NOT NULL,
  `content6` varchar(50) NOT NULL,
  `photo6` varchar(70) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `title1`, `content1`, `photo1`, `title2`, `content2`, `photo2`, `title3`, `content3`, `photo3`, `title4`, `content4`, `photo4`, `title5`, `content5`, `photo5`, `title6`, `content6`, `photo6`, `status`) VALUES
(9, 'text', 'Jack Barker', '9first.jpg', 'Jack Barker Ui/Ux Designer & Developer', 'etwwehw', '9second.jpg', 'tg4weyh', 'whesh', '9third.jpg', 'herte', 'ehrj5e', '9fourth.jpg', 'jht6js', 'jrtkdkmr6', '9fifth.jpg', 'rjdt5s', 'jjrtj', '9sixth.jpg', '0'),
(10, 'Black & White Shoe ', 'Upcoming', '10first.jpg', 'White Lamp in White Wall ', '05 Aug 2018', '10second.jpg', 'LED Torch Light ', '21 July 2018', '10third.gif', 'Green Lamp Holder ', '16 June 2018', '10fourth.jpg', 'Stainless Steel Chair', ' 19 April 2018', '10fifth.jpg', 'Black Chair', ' 27 Feb 2018', '10sixth.jpg', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_photo`
--
ALTER TABLE `about_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clint`
--
ALTER TABLE `clint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navber`
--
ALTER TABLE `navber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_photo`
--
ALTER TABLE `about_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `clint`
--
ALTER TABLE `clint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `navber`
--
ALTER TABLE `navber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

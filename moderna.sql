-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 02:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moderna`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutfacts`
--

CREATE TABLE `aboutfacts` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `count` int(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutfacts`
--

INSERT INTO `aboutfacts` (`id`, `title`, `count`, `status`) VALUES
(1, 'Clients', 240, 1),
(2, 'Projects', 521, 1),
(3, 'Hours Of Support', 1463, 1),
(4, 'Hard Workers', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `aboutsection`
--

CREATE TABLE `aboutsection` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `discription_one` text DEFAULT NULL,
  `list_one` varchar(200) DEFAULT NULL,
  `list_two` varchar(200) DEFAULT NULL,
  `list_three` varchar(200) DEFAULT NULL,
  `discription_two` text DEFAULT NULL,
  `photo` varchar(200) NOT NULL,
  `staus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aboutsection`
--

INSERT INTO `aboutsection` (`id`, `title`, `discription_one`, `list_one`, `list_two`, `list_three`, `discription_two`, `photo`, `staus`) VALUES
(1, 'Voluptatem dignissimos provident quasi corporis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Volup-.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `baners`
--

CREATE TABLE `baners` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `btntext` varchar(10) NOT NULL,
  `btnurl` varchar(20) NOT NULL,
  `photo` varchar(120) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baners`
--

INSERT INTO `baners` (`id`, `title`, `discription`, `btntext`, `btnurl`, `photo`, `status`) VALUES
(1, 'Hello World', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'Read More', 'http://localhost/myw', 'Hello World-.jpg', 1),
(3, 'Hello World', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam.', 'Click Hear', 'http://localhost/myw', 'Hello World-.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(50) NOT NULL,
  `discription_top` text DEFAULT NULL,
  `titile_one` varchar(100) DEFAULT NULL,
  `discription_one` text DEFAULT NULL,
  `list_one` varchar(100) DEFAULT NULL,
  `list_two` varchar(100) DEFAULT NULL,
  `discription_two` text DEFAULT NULL,
  `photo` varchar(200) NOT NULL,
  `staus` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `discription_top`, `titile_one`, `discription_one`, `list_one`, `list_two`, `discription_two`, `photo`, `staus`) VALUES
(1, 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Volup-.svg', 1),
(2, '', 'Corporis temporibus maiores provident', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Corpo-.svg', 1),
(3, '', 'Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas', 'Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Duis aute irure dolor in reprehenderit in voluptate velit.', '', 'Sunt -.svg', 1),
(4, '', 'Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '', '', 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Quas -.svg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sarvice`
--

CREATE TABLE `sarvice` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` text NOT NULL,
  `icon_class_name` varchar(100) NOT NULL,
  `box_class_name` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarvice`
--

INSERT INTO `sarvice` (`id`, `title`, `discription`, `icon_class_name`, `box_class_name`, `status`) VALUES
(1, 'Lorem Ipsum Dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore', 'bx bxl-dribbble', 'pink', 1),
(3, 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'bx bx-world', 'green', 1),
(4, 'Magni Dolores', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'bx bx-tachometer', 'blue', 1),
(9, 'Sed ut perspiciatis', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'bx bx-world', 'cyan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sarvice_details`
--

CREATE TABLE `sarvice_details` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` text NOT NULL,
  `btn_url` varchar(100) DEFAULT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarvice_details`
--

INSERT INTO `sarvice_details` (`id`, `title`, `discription`, `btn_url`, `photo`, `status`) VALUES
(1, 'Our Mission', 'Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'http://localhost/mywork/creative-it/Moderna/services.php', 'Our Mission-.JPG', 1),
(2, 'Our Plan', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo', 'http://localhost/mywork/creative-it/Moderna/services.php', 'Our Plan-.jpg', 1),
(3, 'Our Vision', 'Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet', 'http://localhost/mywork/creative-it/Moderna/services.php', 'Our Vision-.jpg', 1),
(4, 'Our Care', 'Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem. In molestiae earum ab sit esse voluptatem. Eos ipsam cumque ipsum officiis qui nihil aut incidunt aut', 'http://localhost/mywork/creative-it/Moderna/services.php', 'Our Care-.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sinup`
--

CREATE TABLE `sinup` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinup`
--

INSERT INTO `sinup` (`id`, `name`, `uname`, `email`, `password`, `status`) VALUES
(1, 'mahabub', 'alam', 'mdmahabub@gmail.com', 'Mahi@123', 1),
(2, 'mahabub', 'alam', 'mdmahabubalamtpi@gmail.com', 'Mahi@123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(50) NOT NULL,
  `title_top` varchar(50) NOT NULL,
  `discription` text NOT NULL,
  `title_one` varchar(50) DEFAULT NULL,
  `title_two` varchar(50) DEFAULT NULL,
  `title_three` varchar(50) DEFAULT NULL,
  `title_four` varchar(50) DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title_top`, `discription`, `title_one`, `title_two`, `title_three`, `title_four`, `status`) VALUES
(1, 'Our', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'HTML', 'CSS', 'JavaScript', 'Photoshop', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tetstimonals`
--

CREATE TABLE `tetstimonals` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `discription` text DEFAULT NULL,
  `photo` varchar(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tetstimonals`
--

INSERT INTO `tetstimonals` (`id`, `name`, `title`, `discription`, `photo`, `status`) VALUES
(1, 'mahabub alam', 'Web Developer', 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.', 'mahabub alam-.JPG', 2),
(2, 'Sara Wilsson', 'Designer', 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.', 'Sara Wilsson-.jpg', 1),
(3, 'Jena Karlis', 'Designer', 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.', 'Jena Karlis-.jpg', 1),
(4, 'Matt Brandon', 'Freelancer', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.', 'Matt Brandon-.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `why_us`
--

CREATE TABLE `why_us` (
  `id` int(50) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'photo.jpg',
  `video_url` varchar(200) DEFAULT NULL,
  `title_one` varchar(50) NOT NULL DEFAULT 'LOREM IPSUM',
  `discription_one` text DEFAULT NULL,
  `icon_one` varchar(50) DEFAULT NULL,
  `title_two` varchar(50) DEFAULT NULL,
  `discription_two` text DEFAULT NULL,
  `icon_two` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `why_us`
--

INSERT INTO `why_us` (`id`, `photo`, `video_url`, `title_one`, `discription_one`, `icon_one`, `title_two`, `discription_two`, `icon_two`) VALUES
(1, 'LOREM IPSUM-.jpg', 'https://youtu.be/mzFQYL5Rx5k', 'NEMO ENIM', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque', 'bx bx-fingerprint', 'LOREM IPSUM', 'Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', 'bx bx-fingerprint');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutfacts`
--
ALTER TABLE `aboutfacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutsection`
--
ALTER TABLE `aboutsection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baners`
--
ALTER TABLE `baners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarvice`
--
ALTER TABLE `sarvice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarvice_details`
--
ALTER TABLE `sarvice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinup`
--
ALTER TABLE `sinup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tetstimonals`
--
ALTER TABLE `tetstimonals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_us`
--
ALTER TABLE `why_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutfacts`
--
ALTER TABLE `aboutfacts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aboutsection`
--
ALTER TABLE `aboutsection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `baners`
--
ALTER TABLE `baners`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sarvice`
--
ALTER TABLE `sarvice`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sarvice_details`
--
ALTER TABLE `sarvice_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sinup`
--
ALTER TABLE `sinup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tetstimonals`
--
ALTER TABLE `tetstimonals`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `why_us`
--
ALTER TABLE `why_us`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

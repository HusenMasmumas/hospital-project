-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 06:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pana_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `ann_id` int(11) NOT NULL,
  `ann_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `ann_date` date DEFAULT NULL,
  `ann_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`ann_id`, `ann_topic`, `ann_date`, `ann_file`) VALUES
(1, 'uuu', '2020-06-23', '1592882246ววว.png'),
(2, '222', '2020-06-23', '1592882834ววว.png'),
(3, 'uuu', '2020-06-24', '1592968201rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `boo_id` int(11) NOT NULL COMMENT 'รหัสหนังสือเรียน / แนวทางการปฏิบัติ',
  `boo_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `boo_date` date DEFAULT NULL,
  `boo_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`boo_id`, `boo_topic`, `boo_date`, `boo_file`) VALUES
(2, 'aaa', '2020-06-24', '1592968301rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `commandments`
--

CREATE TABLE `commandments` (
  `com_id` int(11) NOT NULL COMMENT 'รหัสพระราขบัญญัติการจัดซื้อจัดจ้าง',
  `com_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `com_date` date DEFAULT NULL,
  `com_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `commandments`
--

INSERT INTO `commandments` (`com_id`, `com_topic`, `com_date`, `com_file`) VALUES
(1, 'aaa', '2020-06-24', '1592968771rao2010.pdf'),
(2, 'aaa', '2020-07-14', '15947405501212.txt');

-- --------------------------------------------------------

--
-- Table structure for table `conclude`
--

CREATE TABLE `conclude` (
  `con_id` int(11) NOT NULL COMMENT 'รหัสสรุปผลการจัดซื้อจัดจ้าง',
  `con_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `con_date` date DEFAULT NULL,
  `con_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `conclude`
--

INSERT INTO `conclude` (`con_id`, `con_topic`, `con_date`, `con_file`) VALUES
(1, 'aaa', '2020-06-24', '1592969178rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `inform`
--

CREATE TABLE `inform` (
  `inf_id` int(11) NOT NULL COMMENT 'รหัสประกาศ',
  `inf_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `inf_date` date DEFAULT NULL,
  `inf_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `inform`
--

INSERT INTO `inform` (`inf_id`, `inf_topic`, `inf_date`, `inf_file`) VALUES
(1, 'aa', '2020-06-24', '1592969756rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ita61`
--

CREATE TABLE `ita61` (
  `ITA61_id` int(11) NOT NULL,
  `ITA61_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `ITA61_date` date DEFAULT NULL,
  `ITA61_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `ita61`
--

INSERT INTO `ita61` (`ITA61_id`, `ITA61_topic`, `ITA61_date`, `ITA61_file`) VALUES
(2, 'aa', '2020-07-14', '15947330591212.txt');

-- --------------------------------------------------------

--
-- Table structure for table `ita62`
--

CREATE TABLE `ita62` (
  `ITA62_id` int(11) NOT NULL,
  `ITA62_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `ITA62_date` date DEFAULT NULL,
  `ITA62_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `ita62`
--

INSERT INTO `ita62` (`ITA62_id`, `ITA62_topic`, `ITA62_date`, `ITA62_file`) VALUES
(1, 'aa', '2020-07-14', '15947334211212.txt');

-- --------------------------------------------------------

--
-- Table structure for table `ita63`
--

CREATE TABLE `ita63` (
  `ITA63_id` int(11) NOT NULL,
  `ITA63_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `ITA63_date` date DEFAULT NULL,
  `ITA63_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `ita63`
--

INSERT INTO `ita63` (`ITA63_id`, `ITA63_topic`, `ITA63_date`, `ITA63_file`) VALUES
(1, 'aa', '2020-07-14', '15947334091212.txt');

-- --------------------------------------------------------

--
-- Table structure for table `middle_price`
--

CREATE TABLE `middle_price` (
  `mid_id` int(11) NOT NULL,
  `mid_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `mid_date` date DEFAULT NULL,
  `mid_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `middle_price`
--

INSERT INTO `middle_price` (`mid_id`, `mid_topic`, `mid_date`, `mid_file`) VALUES
(1, 'aaa', '2020-06-22', '1592710241rao2010.pdf'),
(2, 'sss', '2020-06-22', '1592710323rao2010.pdf'),
(3, 'ddd', '2020-06-23', '1592710356rao2010.pdf'),
(4, 'aaaaass', '2020-06-25', '1592715051rao2010.pdf'),
(7, 'aaa', '2020-07-14', '15947330861212.txt');

-- --------------------------------------------------------

--
-- Table structure for table `ministry_regulations`
--

CREATE TABLE `ministry_regulations` (
  `min_id` int(11) NOT NULL COMMENT 'รหัสระเบียบกระทรวงการคลัง',
  `min_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `min_date` date DEFAULT NULL,
  `min_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `ministry_regulations`
--

INSERT INTO `ministry_regulations` (`min_id`, `min_topic`, `min_date`, `min_file`) VALUES
(1, 'aaa', '2020-06-24', '1592970387rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `pla_id` int(11) NOT NULL COMMENT 'รหัสประกาศแผนการจัดซื้อจัดจ้าง',
  `pla_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `pla_date` date DEFAULT NULL,
  `pla_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`pla_id`, `pla_topic`, `pla_date`, `pla_file`) VALUES
(1, 'aaa', '2020-06-24', '1592970706rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `public_relations`
--

CREATE TABLE `public_relations` (
  `pu_id` int(11) NOT NULL,
  `pu_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `pu_image` varchar(255) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `pu_file` varchar(255) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `pu_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `public_relations`
--

INSERT INTO `public_relations` (`pu_id`, `pu_topic`, `pu_image`, `pu_file`, `pu_date`) VALUES
(1, 'ข้าราชการผู้มีผลการปฏิบัติราชการอยู่ในระดับดีเด่นและดีมาก', 'img-01.jpg', '1592968201rao2010.pdf', '2020-06-01'),
(2, 'test', '11.jpg', '1592968201rao2010.pdf', '2020-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `rec_id` int(11) NOT NULL,
  `rec_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `rec_date` date DEFAULT NULL,
  `rec_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `recruitment`
--

INSERT INTO `recruitment` (`rec_id`, `rec_topic`, `rec_date`, `rec_file`) VALUES
(1, 'aaa12', '2020-07-14', '15947442481212.txt');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `res_id` int(11) NOT NULL COMMENT 'รหัสผลการจัดซื้อจัดจ้าง',
  `res_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `res_date` date DEFAULT NULL,
  `res_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`res_id`, `res_topic`, `res_date`, `res_file`) VALUES
(1, 'aaa', '2020-06-24', '1592972522rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `rul_id` int(11) NOT NULL COMMENT 'รหัสกฏกระทรวง',
  `rul_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `rul_date` date DEFAULT NULL,
  `rul_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`rul_id`, `rul_topic`, `rul_date`, `rul_file`) VALUES
(1, 'aaa', '2020-06-24', '1592972072rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `structure`
--

CREATE TABLE `structure` (
  `str_id` int(11) NOT NULL COMMENT 'รหัสโครงสร้างผู้รับผิดชอบในการจัดซื้อจัดจ้างของ\r\n                                                สปสช.',
  `str_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `str_date` date DEFAULT NULL,
  `str_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `structure`
--

INSERT INTO `structure` (`str_id`, `str_topic`, `str_date`, `str_file`) VALUES
(1, 'aaa', '2020-06-24', '1592972930rao2010.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `the_agenda`
--

CREATE TABLE `the_agenda` (
  `the_id` int(11) NOT NULL,
  `the_topic` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `the_date` date DEFAULT NULL,
  `the_file` varchar(150) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `the_agenda`
--

INSERT INTO `the_agenda` (`the_id`, `the_topic`, `the_date`, `the_file`) VALUES
(1, 'aaa', '2020-07-14', '15947442351212.txt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `us_id` int(11) NOT NULL,
  `us_email` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL,
  `us_pass` varchar(50) COLLATE utf8_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_thai_520_w2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`us_id`, `us_email`, `us_pass`) VALUES
(1, 'admin', '11425'),
(2, 'admin', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`ann_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`boo_id`);

--
-- Indexes for table `commandments`
--
ALTER TABLE `commandments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `conclude`
--
ALTER TABLE `conclude`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `inform`
--
ALTER TABLE `inform`
  ADD PRIMARY KEY (`inf_id`);

--
-- Indexes for table `ita61`
--
ALTER TABLE `ita61`
  ADD PRIMARY KEY (`ITA61_id`);

--
-- Indexes for table `ita62`
--
ALTER TABLE `ita62`
  ADD PRIMARY KEY (`ITA62_id`);

--
-- Indexes for table `ita63`
--
ALTER TABLE `ita63`
  ADD PRIMARY KEY (`ITA63_id`);

--
-- Indexes for table `middle_price`
--
ALTER TABLE `middle_price`
  ADD PRIMARY KEY (`mid_id`);

--
-- Indexes for table `ministry_regulations`
--
ALTER TABLE `ministry_regulations`
  ADD PRIMARY KEY (`min_id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`pla_id`);

--
-- Indexes for table `public_relations`
--
ALTER TABLE `public_relations`
  ADD PRIMARY KEY (`pu_id`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`rul_id`);

--
-- Indexes for table `structure`
--
ALTER TABLE `structure`
  ADD PRIMARY KEY (`str_id`);

--
-- Indexes for table `the_agenda`
--
ALTER TABLE `the_agenda`
  ADD PRIMARY KEY (`the_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `ann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `boo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสหนังสือเรียน / แนวทางการปฏิบัติ', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commandments`
--
ALTER TABLE `commandments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสพระราขบัญญัติการจัดซื้อจัดจ้าง', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `conclude`
--
ALTER TABLE `conclude`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสรุปผลการจัดซื้อจัดจ้าง', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inform`
--
ALTER TABLE `inform`
  MODIFY `inf_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประกาศ', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ita61`
--
ALTER TABLE `ita61`
  MODIFY `ITA61_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ita62`
--
ALTER TABLE `ita62`
  MODIFY `ITA62_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ita63`
--
ALTER TABLE `ita63`
  MODIFY `ITA63_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `middle_price`
--
ALTER TABLE `middle_price`
  MODIFY `mid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ministry_regulations`
--
ALTER TABLE `ministry_regulations`
  MODIFY `min_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสระเบียบกระทรวงการคลัง', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `pla_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประกาศแผนการจัดซื้อจัดจ้าง', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `public_relations`
--
ALTER TABLE `public_relations`
  MODIFY `pu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผลการจัดซื้อจัดจ้าง', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `rul_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกฏกระทรวง', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `structure`
--
ALTER TABLE `structure`
  MODIFY `str_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสโครงสร้างผู้รับผิดชอบในการจัดซื้อจัดจ้างของ\r\n                                                สปสช.', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `the_agenda`
--
ALTER TABLE `the_agenda`
  MODIFY `the_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

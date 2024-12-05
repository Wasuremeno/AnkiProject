-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2024 at 11:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Anki`
--

-- --------------------------------------------------------

--
-- Table structure for table `japanese`
--

CREATE TABLE `japanese` (
  `id` int(255) NOT NULL,
  `furigana` varchar(255) NOT NULL,
  `kanji` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `memorized` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `japanese`
--

INSERT INTO `japanese` (`id`, `furigana`, `kanji`, `english`, `memorized`) VALUES
(1, 'あかい', '赤い', 'red', 1),
(2, 'なに', '何', 'what', 1),
(3, 'いう', '言う', 'to tell', 1),
(4, 'みる', '見る', 'to look', 1),
(5, 'いく', '行く', 'to go', 1),
(6, 'しる', '知る', 'to know', 1),
(7, 'くる', '来る', 'to come', 1),
(8, 'もつ', '持つ', 'to have', 1),
(9, 'でる', '出る', 'to go out, to leave', 1),
(10, 'だいじょうぶ', '大丈夫', 'all right, okay', 1),
(11, 'もどる', '戻る', 'to return', 1),
(12, 'わるい', ' 悪い', 'bad', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `japanese`
--
ALTER TABLE `japanese`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `japanese`
--
ALTER TABLE `japanese`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

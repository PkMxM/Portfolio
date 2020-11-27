-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-11-27 10:51:55
-- サーバのバージョン： 10.4.14-MariaDB
-- PHP のバージョン: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `portfolio_kred`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `booking`
--

CREATE TABLE `booking` (
  `booking_no` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `num_room` varchar(50) NOT NULL,
  `adult_count` varchar(50) NOT NULL,
  `child_count` varchar(50) NOT NULL,
  `infant_count` varchar(50) NOT NULL,
  `contact_number` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `request` text NOT NULL,
  `total_amount` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `booking`
--

INSERT INTO `booking` (`booking_no`, `full_name`, `room`, `num_room`, `adult_count`, `child_count`, `infant_count`, `contact_number`, `email`, `checkin`, `checkout`, `request`, `total_amount`) VALUES
(1, 'YUKIKO', 'POOL OVER OCEAN VILLA', '1', '2', '1', '1', 1234567, 'yuki@gmail.com', '2020-11-20', '2020-11-28', 'aiueo', ''),
(2, 'YUKIKO', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'yuki@gmail.com', '2020-11-20', '2020-11-27', 'aiueo', ''),
(3, 'YUKIKO', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'yuki@gmail.com', '2020-11-20', '2020-11-27', 'aiueo', ''),
(4, 'MIX MILK', 'POOL GARDEN VILLA', '', '2', '0', '0', 234567, 'm2@gmail.com', '2020-11-27', '2020-12-02', 'nya', ''),
(7, 'Test', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'test@test.com', '2020-11-25', '2020-11-28', 'aiueo', ''),
(8, 'Test', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'test@test.com', '2020-11-25', '2020-11-28', 'aiueo', ''),
(9, 'Test', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'test@test.com', '2020-11-25', '2020-11-28', 'aiueo', ''),
(10, 'Test', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'test@test.com', '2020-11-25', '2020-11-28', 'aiueo', ''),
(11, 'Test', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'test@test.com', '2020-11-25', '2020-11-28', 'aiueo', ''),
(12, 'Test', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'test@test.com', '2020-11-25', '2020-11-28', 'aiueo', ''),
(13, 'Test', 'POOL GARDEN OCEAN VILLA', '', '2', '1', '0', 1234567, 'test@test.com', '2020-11-25', '2020-11-28', 'aiueo', ''),
(14, 'Geroge Clooney', 'OVER OCEAN VILLA', '2', '2', '3', '1', 987654, 'geroge@gmail.com', '2020-11-26', '2020-11-30', 'abcdefg', ''),
(18, 'Test', 'POOL OVER OCEAN VILLA', '1', '2', '0', '0', 1234657, 'test@test.com', '2020-12-01', '2020-12-02', 'aaaaaaaaaaaaaaa', '1800'),
(20, 'Test5', 'POOL GARDEN VILLA', '2', '2', '1', '1', 123555, 'test5@gmail.com', '2020-12-02', '2020-12-05', 'testtesttesttest', '4800');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_no`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

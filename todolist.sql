-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021 年 02 月 05 日 07:14
-- 伺服器版本： 8.0.22
-- PHP 版本： 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `todolist`
--

-- --------------------------------------------------------

--
-- 資料表結構 `task`
--

CREATE TABLE `task` (
  `tID` int NOT NULL,
  `taskname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `flag` int NOT NULL DEFAULT '0',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `task`
--

INSERT INTO `task` (`tID`, `taskname`, `flag`, `time`) VALUES
(1, 'test0', 0, '2021-02-01 11:35:56'),
(2, 'test1', 1, '2021-02-01 14:19:20'),
(3, 'test2', 0, '2021-02-01 14:28:21'),
(4, 'test3', 0, '2021-02-01 14:38:40'),
(50, 'test4', 0, '2021-02-05 14:44:12');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`tID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `task`
--
ALTER TABLE `task`
  MODIFY `tID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

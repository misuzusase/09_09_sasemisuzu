-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 
-- サーバのバージョン： 10.4.6-MariaDB
-- PHP のバージョン: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacfd04_09`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `09_07_sasemisuzu`
--

CREATE TABLE `09_07_sasemisuzu` (
  `id` int(12) NOT NULL,
  `music` varchar(126) COLLATE utf8_unicode_ci NOT NULL,
  `singer` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre` varchar(126) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urll` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `09_07_sasemisuzu`
--

INSERT INTO `09_07_sasemisuzu` (`id`, `music`, `singer`, `genre`, `urll`, `indate`) VALUES
(1, 'catlife', 'none', 'サントラ', 'https://d.kuku.lu/f2864d0bbc', '2019-10-07 11:19:36'),
(2, '道', '宇多田ヒカル', NULL, NULL, '2019-10-10 23:07:46'),
(3, '裏垢', 'ミオヤマザキ', NULL, NULL, '2019-10-10 23:13:07'),
(4, 'パーフェクト生命', 'Eve', NULL, NULL, '2019-10-10 23:14:44'),
(5, 'シャルル', 'バルーン', NULL, NULL, '2019-10-10 23:16:52'),
(6, '道', '宇多田ヒカル', NULL, NULL, '2019-10-10 23:17:40'),
(7, 'キャットライフ', '', NULL, NULL, '2019-10-10 23:35:14'),
(9, 'bbb', 'ccc', NULL, '', '2019-10-19 17:09:48'),
(10, '道', '宇多田ヒカル', NULL, '', '2019-10-19 17:46:49'),
(11, 'a', '', NULL, '', '2019-10-19 17:52:01'),
(12, 'ai', '', NULL, '', '2019-10-19 17:52:06'),
(13, 'hu', '', NULL, '', '2019-10-19 17:53:12');

-- --------------------------------------------------------

--
-- テーブルの構造 `php02_table`
--

CREATE TABLE `php02_table` (
  `id` int(12) NOT NULL,
  `task` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `comment` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php02_table`
--

INSERT INTO `php02_table` (`id`, `task`, `deadline`, `comment`, `indate`) VALUES
(1, 'kadai1', '2019-09-06', 'test', '2019-10-05 15:50:03'),
(2, 'kadai2', '2019-10-01', 'testt', '2019-10-05 15:51:52'),
(3, 'kadai3', '2000-01-01', 'testdayo', '2019-10-05 15:53:38'),
(4, 'kadai4', '2018-08-17', 'testpien', '2019-10-05 15:56:15'),
(5, 'kadai5', '2019-11-11', 'testpien', '2019-10-05 15:57:09'),
(6, 'kadai6', '2019-12-01', 'testpien', '2019-10-05 15:57:37'),
(7, 'kadai4', '1900-03-03', 'testpien', '2019-10-05 15:58:00'),
(8, 'kadai7', '2000-02-20', 'testpien', '2019-10-05 15:58:24'),
(9, 'kadai14', '2010-10-10', 'testpien', '2019-10-05 15:58:43'),
(10, 'kadai8', '2000-09-06', 'testpien', '2019-10-05 15:59:05'),
(11, 'kadai9', '2001-01-01', 'testpien', '2019-10-05 15:59:26'),
(12, 'kadai10', '1995-08-15', 'testpien', '2019-10-05 15:59:47'),
(13, 'kadai11', '1999-09-09', 'testpien', '2019-10-05 16:00:10'),
(14, 'fdf', '2019-10-17', 'fda', '2019-10-05 16:54:35'),
(15, 'ごはん', '2019-10-09', 'あすなろ', '2019-10-05 17:20:16'),
(16, 'ふぁだ', '2019-10-09', 'ぴえん', '2019-10-05 17:21:17'),
(17, 'あい', '2019-10-09', 'あい', '2019-10-05 17:22:07');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, 'aaa', 'bbb', 'ccc', 1, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `09_07_sasemisuzu`
--
ALTER TABLE `09_07_sasemisuzu`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `php02_table`
--
ALTER TABLE `php02_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `09_07_sasemisuzu`
--
ALTER TABLE `09_07_sasemisuzu`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- テーブルのAUTO_INCREMENT `php02_table`
--
ALTER TABLE `php02_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- テーブルのAUTO_INCREMENT `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

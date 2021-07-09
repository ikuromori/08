-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: mysql1036.db.sakura.ne.jp
-- 生成日時: 2021 年 7 月 10 日 08:32
-- サーバのバージョン： 5.7.32-log
-- PHP のバージョン: 7.1.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `ikuromori_a_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `b_table`
--

CREATE TABLE `b_table` (
  `id` int(8) NOT NULL,
  `u_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `u_password` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `l_id` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `b_table`
--

INSERT INTO `b_table` (`id`, `u_name`, `u_password`, `l_name`, `l_id`) VALUES
(10, 'a', 'a', '', '0'),
(11, 'a', 'a', '', '0'),
(12, 'a', 'a', '', '0'),
(13, 'a', 'a', '', '0'),
(14, 'a', 'a', '', '0'),
(15, 'ad', 'ag', '', '0'),
(16, 'ikuro', 'test', '', '0'),
(17, 'ikuro3', 'test', '', '0'),
(18, 'ikuro4', 'test', '', '0'),
(19, 'ikuro5', 'test', '', '0'),
(20, 'ikuro6', 'test', '', '0'),
(21, 'ikuro7', 'test', '', '0'),
(22, 'ikuro8', 'test', '', '0'),
(23, 'ikuro9', 'test', '', '0'),
(24, 'ikuro11', 'test', '', '0'),
(25, 'ikuro12', 'test', '', '0'),
(26, 'ikuro13', 'test', '', '0'),
(28, 'ikuro15', 'test', '', '0'),
(29, 'ikuro16', 'test', '', '0'),
(30, 'ikuro17', 'test', '', '0'),
(31, 'ikuro17', 'test', '', '0'),
(32, '登録', 'ikuro17', '', '0'),
(33, 'ikuro17', 'test', '', '0'),
(34, 'ikuro17', 'test', '', '0'),
(35, 'ikuro18', 'test', '', '0'),
(36, 'ikuro19', 'test', '', '0'),
(37, 'ikuro20', 'test', '', '0'),
(38, 'ikuro21', 'test', '', '0'),
(39, 'ikuro22', 'test', '', '0'),
(40, 'ikuro22', 'test', '', '0'),
(41, 'ikuro25', 'test', '', '0'),
(42, 'ikuro26', 'test', '', '0'),
(43, 'l', 'l', '', '0'),
(44, 'ikuro26', 'test', '', '0'),
(47, 'あ', 'あ', '', '0'),
(48, 'あ', 'い', '', '0'),
(49, 'い', 'う', '', '0'),
(50, 'す', 'ふ', '', '0'),
(51, 'す', 'い', '', '0'),
(52, 'lkuro52', 'test', '', '0'),
(53, 'か', 'さ', '', '0'),
(54, 'さ', 'か', '', '0'),
(55, 'もり', 'test', '', '0'),
(56, 'もりい', 'test', '', '0'),
(57, 'あかそ', 'test', '', '0'),
(58, 'あ', 'か', '', '0'),
(59, 'はさ', 'test', '', '0'),
(60, 'あかさた', 'test', '', '0'),
(61, 'あな', 'test', '', '0'),
(62, 'な', 'ま', '', '0'),
(63, 'もりさ', 'test', '', '0'),
(64, 'あ', 'test', 'もり いくろう', '************************'),  ///**********には各ユーザーのLINEIDが入る


--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `b_table`
--
ALTER TABLE `b_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `b_table`
--
ALTER TABLE `b_table`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

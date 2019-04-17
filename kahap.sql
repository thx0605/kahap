-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 04 月 17 日 05:38
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `kahap`
--

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`id`, `name`, `gender`, `birthday`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Leopold Collier', 'Female', '1974-04-28', 'lamont.nitzsche@yahoo.com', '+1-240-720-0086', '7167 Hellen Plains\nWillmsland, DE 46644', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(2, 'Mrs. Maymie Bernhard', 'Female', '1981-07-08', 'roob.arnoldo@gmail.com', '+1.520.372.3519', '87272 Kian Parkways Apt. 345\nSouth Paulhaven, CT 82431-8121', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(3, 'Alexie Crona', 'Female', '1986-04-04', 'turcotte.edwardo@yahoo.com', '1-956-258-8835 x70030', '16524 Yolanda Motorway\nEast Giamouth, FL 35832', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(4, 'Alicia Grady', 'Male', '1995-04-05', 'sonny.kerluke@hotmail.com', '273.367.2535 x443', '1525 Cary Harbors Apt. 414\nNew Tyson, IL 58404', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(5, 'Carley Towne', 'Male', '1998-12-21', 'darren.hauck@gorczany.info', '(876) 697-6085 x52399', '239 Silas Walk Suite 839\nSouth Paula, DE 80973-9481', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(6, 'London Schiller', 'Female', '2015-10-29', 'greenholt.kyla@gerhold.biz', '+1-798-712-7424', '74903 Guy Bypass\nNew Tierra, ID 67454-8522', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(7, 'Lonnie Lockman', 'Female', '1998-03-19', 'champlin.beatrice@beier.com', '675-506-4979 x7611', '8125 Turcotte Hollow\nKarineberg, NE 73983-1734', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(8, 'Miss Cara Buckridge II', 'Male', '2009-05-11', 'arely76@yahoo.com', '+1 (439) 920-7802', '3678 Candida Trail Suite 622\nNew Melodyport, NJ 71372', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(9, 'Hallie Feil', 'Male', '1994-01-29', 'lilly26@hotmail.com', '+1-356-608-0379', '96936 Flatley Camp\nLake Tommiemouth, OK 76562', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(10, 'Mrs. Arianna Trantow III', 'Male', '1984-06-01', 'zboehm@kshlerin.com', '1-413-925-6552 x411', '9663 Rocky Passage\nNorth Clay, GA 81811', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(11, 'Emilia Ledner', 'Male', '1977-02-10', 'austyn.kerluke@gmail.com', '(309) 909-1174 x540', '8601 Verda Mountain Suite 328\nEliastown, NC 62259-1783', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(12, 'Amalia Mitchell', 'Male', '1971-03-25', 'kunze.cole@hotmail.com', '(929) 487-7908', '2603 Moore Land\nEdwinshire, WY 13119', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(13, 'Karianne King', 'Male', '2013-09-07', 'torp.mohammad@effertz.com', '216-461-4629 x905', '1811 Daugherty Valley Apt. 291\nNorth Eulaliatown, SD 47803-0678', '2019-04-16 19:36:25', '2019-04-16 19:36:25'),
(14, 'Taya Bechtelar', 'Female', '2017-08-14', 'gtoy@hotmail.com', '1-874-231-2153 x16168', '6433 Bennie Trace Suite 297\nDickensmouth, WI 46049', '2019-04-16 19:36:26', '2019-04-16 19:36:26'),
(15, 'Naomi VonRueden DDS', 'Male', '2009-10-21', 'demarcus73@lakin.com', '1-404-430-3627', '42548 Zemlak Rest Suite 618\nFaheybury, OR 69371-6669', '2019-04-16 19:36:26', '2019-04-16 19:36:26'),
(16, 'Dr. Luis O\'Kon', 'Male', '1995-08-20', 'mmorissette@ryan.org', '+14173311331', '585 Reanna Loaf\nWunschchester, DE 95752-7171', '2019-04-16 19:36:26', '2019-04-16 19:36:26'),
(17, 'Napoleon Wuckert', 'Male', '1986-01-23', 'lenore.kessler@hotmail.com', '1-582-982-5349', '71960 Phyllis Curve Suite 425\nNew Leoneland, NC 02663-0699', '2019-04-16 19:36:26', '2019-04-16 19:36:26'),
(18, 'Dr. Alanna Gibson DVM', 'Female', '2001-11-18', 'towne.florine@lakin.com', '1-229-997-1416 x832', '80063 Morissette Dale Suite 394\nWest Dallin, NH 52413-9599', '2019-04-16 19:36:26', '2019-04-16 19:36:26'),
(19, 'Dr. Chasity Dietrich', 'Female', '1999-04-07', 'jules23@hotmail.com', '+1-479-253-0308', '995 Raleigh Summit\nLake Lisandro, OR 98120-5403', '2019-04-16 19:36:26', '2019-04-16 19:36:26'),
(20, 'Prof. Jerry Wolf IV', 'Male', '1975-08-24', 'luettgen.carleton@wilkinson.com', '572-581-6246', '37942 Windler Pike\nNew Darrin, NH 86832', '2019-04-16 19:36:26', '2019-04-16 19:36:26');

-- --------------------------------------------------------

--
-- 資料表結構 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_04_16_032049_create_members_table', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動增長(AUTO_INCREMENT) `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

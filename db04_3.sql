-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-09-02 10:41:48
-- 伺服器版本: 10.1.31-MariaDB
-- PHP 版本： 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db04_3`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bot`
--

CREATE TABLE `bot` (
  `bot_seq` int(10) UNSIGNED NOT NULL,
  `bot_txt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `bot`
--

INSERT INTO `bot` (`bot_seq`, `bot_txt`) VALUES
(1, '123');

-- --------------------------------------------------------

--
-- 資料表結構 `buycar`
--

CREATE TABLE `buycar` (
  `buycar_seq` int(10) UNSIGNED NOT NULL,
  `buycar_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buycar_hm` int(10) NOT NULL,
  `buycar_i3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `buycar`
--

INSERT INTO `buycar` (`buycar_seq`, `buycar_acc`, `buycar_hm`, `buycar_i3`) VALUES
(1, '123', 3, 3),
(3, '123', 1, 6);

-- --------------------------------------------------------

--
-- 資料表結構 `buylog`
--

CREATE TABLE `buylog` (
  `buylog_seq` int(10) UNSIGNED NOT NULL,
  `buylog_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buylog_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `buylog_i3` int(10) NOT NULL,
  `buylog_hm` int(10) NOT NULL,
  `buylog_total` int(10) NOT NULL,
  `buylog_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `consumer`
--

CREATE TABLE `consumer` (
  `consumer_seq` int(10) UNSIGNED NOT NULL,
  `consumer_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_cel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_lo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `consumer_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `consumer`
--

INSERT INTO `consumer` (`consumer_seq`, `consumer_acc`, `consumer_pw`, `consumer_name`, `consumer_cel`, `consumer_lo`, `consumer_email`, `consumer_time`) VALUES
(2, '123', '123', '123', '123', '123', '123', '2018-09-01');

-- --------------------------------------------------------

--
-- 資料表結構 `item1`
--

CREATE TABLE `item1` (
  `item1_seq` int(10) UNSIGNED NOT NULL,
  `item1_txt` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item1`
--

INSERT INTO `item1` (`item1_seq`, `item1_txt`) VALUES
(1, '流行皮件'),
(2, '流行鞋區'),
(3, '流行飾品'),
(4, '背包');

-- --------------------------------------------------------

--
-- 資料表結構 `item2`
--

CREATE TABLE `item2` (
  `item2_seq` int(10) UNSIGNED NOT NULL,
  `item2_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item2_i1` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item2`
--

INSERT INTO `item2` (`item2_seq`, `item2_txt`, `item2_i1`) VALUES
(1, '男用皮件', 1),
(2, '女用皮件', 1),
(3, '少女鞋區', 2),
(4, '紳士流行鞋區', 2),
(5, '時尚手錶', 3),
(6, '時尚珠寶', 3),
(7, '背包', 4);

-- --------------------------------------------------------

--
-- 資料表結構 `item3`
--

CREATE TABLE `item3` (
  `item3_seq` int(10) UNSIGNED NOT NULL,
  `item3_txt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_price` int(10) NOT NULL,
  `item3_hm` int(10) NOT NULL,
  `item3_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_i1` int(10) NOT NULL,
  `item3_i2` int(10) NOT NULL,
  `item3_con` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item3_display` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `item3`
--

INSERT INTO `item3` (`item3_seq`, `item3_txt`, `item3_type`, `item3_price`, `item3_hm`, `item3_img`, `item3_i1`, `item3_i2`, `item3_con`, `item3_display`) VALUES
(2, '手工訂製長夾', '全牛皮', 1200, 2, '0403.jpg', 1, 1, '手工製作長夾卡片層6*2 鈔票層 *2 零錢拉鍊層 *1  採用愛馬仕相同的雙針縫法,皮件堅固耐用不脫線  材質:直革鞣(馬鞍皮)牛皮製作   手工染色 ', 1),
(3, '兩用式磁扣腰包', '中型', 685, 18, '0404.jpg', 1, 1, '材質:進口牛皮 顏色:黑色荔枝紋+黑色珠光面皮(黑色縫線) 尺寸:15cm*14cm(高)*6cm(前後) 產地:臺灣', 1),
(4, '超薄設計男士長款真皮', 'L號', 800, 61, '0405.jpg', 1, 1, '基本:編織皮革對摺長款零錢包 特色:最潮流最時尚的單品  顏色:黑色珠光面皮(黑色縫線) 形狀:黑白格編織皮革對摺 ', 1),
(5, '經典牛皮少女帆船鞋', 'S號', 1000, 6, '0406.jpg', 2, 3, '以傳統學院派風格聞名，創始近百年工藝製鞋精神 共用獨家專利氣墊技術，兼具紐約工藝精神，與舒適跑格靈魂', 1),
(6, '經典優雅時尚流行涼鞋', 'LL', 2650, 8, '0407.jpg', 2, 4, '優雅流線方型楦頭設計，結合簡潔線條綴飾， 獨特的弧度與曲線美，突顯年輕優雅品味， 是年輕上班族不可或缺的鞋款！ 全新美國運回，現貨附鞋盒', 1),
(7, '寵愛天然藍寶女戒', '1克拉', 28000, 1, '0408.jpg', 3, 6, '◎典雅設計品味款 ◎藍寶為珍貴天然寶石之一，具有保值收藏 ◎專人設計製造，以貴重珠寶精緻鑲工製造', 1),
(8, '反折式大容量手提肩背包', 'L號', 888, 15, '0409.jpg', 4, 7, '特色:反折式的包口設計,釘釦的裝飾,讓簡單的包型更增添趣味性 材質:棉布 顏色:藍色 尺寸:長50cm寬20cm高41cm 產地:日本', 1),
(9, '男單肩包男', '多功能', 650, 7, '0410.jpg', 4, 7, '特色:男單肩包/電腦包/公文包/雙肩背包多用途材質:帆不顏色:黑色尺寸:深11cm寬42cm高33cm產地:香港', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `member_seq` int(10) UNSIGNED NOT NULL,
  `member_acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_pw` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_lv1` int(2) NOT NULL,
  `member_lv2` int(2) NOT NULL,
  `member_lv3` int(2) NOT NULL,
  `member_lv4` int(2) NOT NULL,
  `member_lv5` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`member_seq`, `member_acc`, `member_pw`, `member_lv1`, `member_lv2`, `member_lv3`, `member_lv4`, `member_lv5`) VALUES
(1, 'admin', '1234', 1, 1, 1, 1, 1),
(3, 'dasd', 'dasd', 1, 0, 0, 1, 0),
(4, 'qqq', 'qqq', 0, 1, 0, 1, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bot`
--
ALTER TABLE `bot`
  ADD PRIMARY KEY (`bot_seq`);

--
-- 資料表索引 `buycar`
--
ALTER TABLE `buycar`
  ADD PRIMARY KEY (`buycar_seq`);

--
-- 資料表索引 `buylog`
--
ALTER TABLE `buylog`
  ADD PRIMARY KEY (`buylog_seq`);

--
-- 資料表索引 `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`consumer_seq`);

--
-- 資料表索引 `item1`
--
ALTER TABLE `item1`
  ADD PRIMARY KEY (`item1_seq`);

--
-- 資料表索引 `item2`
--
ALTER TABLE `item2`
  ADD PRIMARY KEY (`item2_seq`);

--
-- 資料表索引 `item3`
--
ALTER TABLE `item3`
  ADD PRIMARY KEY (`item3_seq`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_seq`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `bot`
--
ALTER TABLE `bot`
  MODIFY `bot_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表 AUTO_INCREMENT `buycar`
--
ALTER TABLE `buycar`
  MODIFY `buycar_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表 AUTO_INCREMENT `buylog`
--
ALTER TABLE `buylog`
  MODIFY `buylog_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表 AUTO_INCREMENT `consumer`
--
ALTER TABLE `consumer`
  MODIFY `consumer_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表 AUTO_INCREMENT `item1`
--
ALTER TABLE `item1`
  MODIFY `item1_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表 AUTO_INCREMENT `item2`
--
ALTER TABLE `item2`
  MODIFY `item2_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表 AUTO_INCREMENT `item3`
--
ALTER TABLE `item3`
  MODIFY `item3_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `member_seq` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

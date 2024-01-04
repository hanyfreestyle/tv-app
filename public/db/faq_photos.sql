-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2024 at 09:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apptv_20240102`
--

--
-- Dumping data for table `faq_photos`
--

INSERT INTO `faq_photos` (`id`, `faq_id`, `photo`, `photo_thum_1`, `photo_thum_2`, `file_extension`, `des_en`, `des_es`, `file_size`, `file_h`, `file_w`, `position`, `print_photo`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-D19MiSedaU.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-hgL5y68wEW.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:03', '2024-01-04 08:47:03'),
(2, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-CdH2gH08je.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-buFv4LIZVH.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:03', '2024-01-04 08:47:03'),
(3, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-8h4AhWePVa.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-LIXfutWwi2.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:03', '2024-01-04 08:47:03'),
(4, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-Dks06YJaU2.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-dTI0yxUggR.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:03', '2024-01-04 08:47:03'),
(5, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-ex1Tsqoo8V.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-Qs9LFXqIFd.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:03', '2024-01-04 08:47:03'),
(6, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-rt8E489Lu9.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-PgKj8ZA0ix.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:23', '2024-01-04 08:47:23'),
(7, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-10oWvlbgSa.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-VgmypOrN7p.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:23', '2024-01-04 08:47:23'),
(8, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-WpIeW2wJC7.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-gaMEsEWiQg.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:23', '2024-01-04 08:47:23'),
(9, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-irJgPZLJwk.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-qbe2KtAEUO.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:23', '2024-01-04 08:47:23'),
(10, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-8TFxJx3qWw.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-jH0Y1ebmYh.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:23', '2024-01-04 08:47:23'),
(11, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-9Jbt5Jicng.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-CoaJxgDcVz.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:41', '2024-01-04 08:47:41'),
(12, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-IyRL2V5zI9.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-4bQTgH6sKS.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:41', '2024-01-04 08:47:41'),
(13, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-j7FX7Lw8Xj.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-24IheLvuL1.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:41', '2024-01-04 08:47:41'),
(14, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-SdVL8CM7RL.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-klbPUAqxHT.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:41', '2024-01-04 08:47:41'),
(15, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-bONOzVfVys.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-xcx2kJaGUi.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:41', '2024-01-04 08:47:41'),
(16, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-tlRjVF88Me.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-RPiI1IPV0d.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:58', '2024-01-04 08:47:58'),
(17, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-pHQv3omMWg.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-kcAv9tdW5C.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:58', '2024-01-04 08:47:58'),
(18, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-vOV6wXVBPN.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-0UKyiRjyPl.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:58', '2024-01-04 08:47:58'),
(19, 8, 'images/faq/8/how-to-install-iptv-smarters-on-roku-Qd5EjIr4qq.webp', 'images/faq/8/how-to-install-iptv-smarters-on-roku-vLRcepKNvj.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, 0, '2024-01-04 08:47:58', '2024-01-04 08:47:58');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

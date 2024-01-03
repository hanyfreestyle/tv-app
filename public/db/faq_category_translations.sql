-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 04:04 PM
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
-- Dumping data for table `faq_category_translations`
--

INSERT INTO `faq_category_translations` (`id`, `category_id`, `locale`, `slug`, `name`, `des`, `g_title`, `g_des`) VALUES
(1, 1, 'en', 'da-web-player', 'DA WEB PLAYER', NULL, 'Page Title', 'Page Description'),
(2, 1, 'es', 'da-web-player', 'DA WEB PLAYER', NULL, 'Page Title', 'Page Description'),
(3, 2, 'en', 'category-2', 'Category 2', NULL, NULL, NULL),
(4, 2, 'es', 'category-2', 'Category 2', NULL, NULL, NULL),
(5, 3, 'en', 'category-3', 'Category 3', NULL, NULL, NULL),
(6, 3, 'es', 'category-3', 'Category 3', NULL, NULL, NULL),
(7, 4, 'en', 'category-4', 'Category 4', NULL, NULL, NULL),
(8, 4, 'es', 'category-4', 'Category 4', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

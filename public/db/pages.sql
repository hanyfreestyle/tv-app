-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 04:27 PM
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
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `cat_id`, `photo`, `photo_thum_1`, `is_active`, `postion`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'home', NULL, NULL, 1, 0, NULL, '2024-01-02 12:40:43', '2024-01-02 12:46:54'),
(2, 'ContactUs', NULL, NULL, 1, 0, NULL, '2024-01-02 15:09:09', '2024-01-02 15:09:09'),
(3, 'faq_page', NULL, NULL, 1, 0, NULL, '2024-01-02 15:27:38', '2024-01-02 15:27:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

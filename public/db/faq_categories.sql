-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 12:31 PM
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
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `photo`, `photo_thum_1`, `is_active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, NULL, '2024-01-02 14:39:29', '2024-01-02 14:39:29'),
(2, NULL, NULL, 1, NULL, '2024-01-02 14:40:40', '2024-01-02 14:40:40'),
(3, NULL, NULL, 1, NULL, '2024-01-02 14:40:53', '2024-01-02 14:40:53'),
(4, NULL, NULL, 1, NULL, '2024-01-02 14:41:09', '2024-01-02 14:41:09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

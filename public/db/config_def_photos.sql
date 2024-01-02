-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 04:28 PM
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
-- Dumping data for table `config_def_photos`
--

INSERT INTO `config_def_photos` (`id`, `cat_id`, `photo`, `photo_thum_1`, `photo_thum_2`, `postion`, `created_at`, `updated_at`) VALUES
(1, 'light-logo', 'images/def-photo/light-logo-AJG4FyEGq8.webp', NULL, NULL, 2, '2023-09-03 15:03:13', '2023-09-03 15:04:25'),
(2, 'dark-logo', 'images/def-photo/dark-logo-yHavtqPGm6.webp', NULL, NULL, 1, '2023-09-03 15:04:17', '2023-09-03 15:04:25'),
(6, 'contact-from', 'images/def-photo/contact-from-taOS5rT9SI.webp', NULL, NULL, 0, '2023-09-06 19:37:35', '2023-09-06 19:37:35'),
(14, 'form_login', 'images/def-photo/cust-login-5vzy5IZjUZ.webp', NULL, NULL, 0, '2023-09-29 00:45:03', '2023-09-29 03:16:32'),
(15, 'form_sign_up', 'images/def-photo/form-sign-up-AlQFSq2P80.webp', NULL, NULL, 0, '2023-09-29 03:17:07', '2023-09-29 03:33:50'),
(16, 'faq_def', 'images/def-photo/faq-def-9TpZuXA7wj.webp', 'images/def-photo/faq-def-QORHkGXyOo.webp', NULL, 0, '2024-01-02 15:24:52', '2024-01-02 15:24:52');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

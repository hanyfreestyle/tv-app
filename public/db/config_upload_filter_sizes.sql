-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 09:15 PM
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
-- Dumping data for table `config_upload_filter_sizes`
--

INSERT INTO `config_upload_filter_sizes` (`id`, `filter_id`, `type`, `new_w`, `new_h`, `canvas_back`, `get_more_option`, `get_add_text`, `get_watermark`) VALUES
(1, 2, 4, 500, 335, NULL, 0, 0, 0),
(2, 4, 2, 800, 400, '#FFFFFF', 0, 0, 0),
(3, 5, 4, 800, 600, '#ffffff', 0, 0, 0),
(4, 5, 4, 320, 240, '#ffffff', 0, 0, 0),
(8, 3, 4, 400, 400, '#FFFFFF', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

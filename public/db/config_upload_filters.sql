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
-- Dumping data for table `config_upload_filters`
--

INSERT INTO `config_upload_filters` (`id`, `name`, `type`, `convert_state`, `quality_val`, `new_w`, `new_h`, `canvas_back`, `greyscale`, `flip_state`, `flip_v`, `blur`, `blur_size`, `pixelate`, `pixelate_size`, `text_state`, `text_print`, `font_size`, `font_path`, `font_color`, `font_opacity`, `text_position`, `watermark_state`, `watermark_img`, `watermark_position`, `state`, `created_at`, `updated_at`) VALUES
(1, 'NoEdit', 1, 1, 85, 100, 100, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(2, 'DefPhoto', 4, 1, 85, 800, 420, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(3, 'FaqCategory', 4, 1, 85, 600, 600, '#FFFFFF', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2024-01-03 19:24:39'),
(4, 'FaqQuestion', 2, 1, 85, 1024, 700, '#FFFFFF', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2024-01-03 19:33:41'),
(5, 'PhotoGallery', 4, 1, 85, 1024, 768, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

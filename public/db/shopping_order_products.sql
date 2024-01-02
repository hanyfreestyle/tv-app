-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 12:49 PM
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
-- Database: `a_etman`
--

--
-- Dumping data for table `shopping_order_products`
--

INSERT INTO `shopping_order_products` (`id`, `order_id`, `product_ref`, `sku`, `name`, `price`, `sale_price`, `qty`) VALUES
(1, 1, 56, '43744223', 'مسدس شمع بسلك كهرباء من يوني-تي موديل EH430', 500.00, NULL, 1.00),
(2, 1, 57, '53492624', 'مسدس شمع ST-03 20W، حجم صغير - ازرق', 200.00, 175.00, 1.00),
(3, 1, 58, '35945023', 'مسدس شمع برو جلو من ستانلي GR100', 525.00, 450.00, 1.00),
(4, 1, 59, '28262230', 'مسدس شمع من عتمان جروب، متعدد الألوان', 300.00, 225.00, 1.00),
(5, 1, 60, '23307506', 'مسدس غراء احترافي 220 وات من توتال TT301116', 400.00, 350.00, 1.00),
(6, 2, 56, '43744223', 'مسدس شمع بسلك كهرباء من يوني-تي موديل EH430', 500.00, NULL, 2.00),
(7, 2, 57, '53492624', 'مسدس شمع ST-03 20W، حجم صغير - ازرق', 200.00, 175.00, 2.00),
(8, 2, 58, '35945023', 'مسدس شمع برو جلو من ستانلي GR100', 525.00, 450.00, 2.00),
(9, 2, 59, '28262230', 'مسدس شمع من عتمان جروب، متعدد الألوان', 300.00, 225.00, 2.00),
(10, 2, 60, '23307506', 'مسدس غراء احترافي 220 وات من توتال TT301116', 400.00, 350.00, 2.00),
(11, 3, 15, '27112927', 'الومنيوم فويل مستر فويل 50 جرام', 528.00, 461.00, 4.00),
(12, 3, 53, '60959804', 'الومنيوم فويل كينك', 308.00, 253.00, 4.00),
(13, 4, 13, '99892834', 'قابل للكسر', 549.00, 449.00, 1.00),
(14, 4, 7, '73571010', 'ذا بيست', 513.00, 450.00, 1.00),
(15, 4, 9, '77297683', 'جرين ماسك تيب', 569.00, 476.00, 1.00),
(16, 4, 10, '58919463', 'اى تى ماسك تيب', 450.00, 370.00, 1.00),
(17, 4, 12, '93203908', 'فريش', 407.00, 314.00, 1.00),
(18, 4, 1, '12590966', 'نار تيب', 200.00, 100.00, 1.00),
(19, 4, 2, '91103331', 'ذا بيست تيب', 500.00, NULL, 1.00),
(20, 4, 3, '42512152', 'كريستال تيب', 243.00, 150.00, 1.00),
(21, 4, 4, '73625246', 'جرين تيب', 236.00, 175.00, 1.00),
(22, 5, 50, '93276582', 'مستر فويل للارجيلة', 491.00, 394.00, 2.00),
(23, 5, 51, '25501127', 'غطاء بوتاجز مستر فويل', 338.00, 282.00, 1.00),
(24, 5, 52, '63421658', 'غطاء بوتاجز مستر فويل', 551.00, 491.00, 2.00),
(25, 6, 56, '43744223', 'مسدس شمع بسلك كهرباء من يوني-تي موديل EH430', 500.00, NULL, 1.00),
(26, 6, 57, '53492624', 'مسدس شمع ST-03 20W، حجم صغير - ازرق', 200.00, 175.00, 1.00),
(27, 6, 58, '35945023', 'مسدس شمع برو جلو من ستانلي GR100', 525.00, 450.00, 1.00),
(28, 6, 59, '28262230', 'مسدس شمع من عتمان جروب، متعدد الألوان', 300.00, 225.00, 1.00),
(29, 6, 60, '23307506', 'مسدس غراء احترافي 220 وات من توتال TT301116', 400.00, 350.00, 3.00),
(30, 7, 60, '23307506', 'مسدس غراء احترافي 220 وات من توتال TT301116', 400.00, 350.00, 2.00),
(31, 7, 59, '28262230', 'مسدس شمع من عتمان جروب، متعدد الألوان', 150.00, NULL, 2.00),
(32, 7, 58, '35945023', 'مسدس شمع برو جلو من ستانلي GR100', 525.00, 450.00, 3.00),
(33, 7, 57, '53492624', 'مسدس شمع ST-03 20W، حجم صغير - ازرق', 200.00, NULL, 3.00),
(34, 7, 56, '43744223', 'مسدس شمع بسلك كهرباء من يوني-تي موديل EH430', 500.00, NULL, 2.00),
(35, 7, 1, '12590966', 'نار تيب', 200.00, 100.00, 2.00),
(36, 7, 2, '91103331', 'ذا بيست تيب', 500.00, NULL, 2.00),
(37, 7, 3, '42512152', 'كريستال تيب', 243.00, 150.00, 2.00),
(38, 7, 4, '73625246', 'جرين تيب', 236.00, 175.00, 2.00),
(39, 7, 16, '64039482', 'شرائط الزينة ½ سم', 259.00, 196.00, 1.00),
(40, 7, 15, '27112927', 'الومنيوم فويل مستر فويل 50 جرام', 528.00, 461.00, 1.00),
(41, 7, 14, '46035437', 'شرائط العزل الكهربائي ET', 299.00, 232.00, 1.00),
(42, 7, 13, '99892834', 'قابل للكسر', 549.00, 449.00, 1.00),
(43, 7, 7, '73571010', 'ذا بيست', 513.00, 450.00, 1.00),
(44, 7, 9, '77297683', 'جرين ماسك تيب', 569.00, 476.00, 1.00),
(45, 7, 10, '58919463', 'اى تى ماسك تيب', 450.00, 370.00, 1.00),
(46, 7, 12, '93203908', 'فريش', 407.00, 314.00, 1.00),
(47, 8, 60, '23307506', 'مسدس غراء احترافي 220 وات من توتال TT301116', 400.00, 350.00, 2.00),
(48, 8, 59, '28262230', 'مسدس شمع من عتمان جروب، متعدد الألوان', 150.00, NULL, 2.00),
(49, 8, 58, '35945023', 'مسدس شمع برو جلو من ستانلي GR100', 525.00, 450.00, 2.00),
(50, 9, 57, '53492624', 'مسدس شمع ST-03 20W، حجم صغير - ازرق', 200.00, NULL, 1.00),
(51, 9, 56, '43744223', 'مسدس شمع بسلك كهرباء من يوني-تي موديل EH430', 500.00, NULL, 1.00),
(52, 9, 59, '28262230', 'مسدس شمع من عتمان جروب، متعدد الألوان', 150.00, NULL, 1.00),
(53, 9, 60, '23307506', 'مسدس غراء احترافي 220 وات من توتال TT301116', 400.00, 350.00, 1.00),
(54, 9, 58, '35945023', 'مسدس شمع برو جلو من ستانلي GR100', 525.00, 450.00, 1.00),
(55, 10, 1, '12590966', 'نار تيب', 200.00, 100.00, 2.00),
(56, 10, 2, '91103331', 'ذا بيست تيب', 500.00, NULL, 2.00),
(57, 10, 3, '42512152', 'كريستال تيب', 243.00, 150.00, 2.00),
(58, 10, 4, '73625246', 'جرين تيب', 236.00, 175.00, 3.00),
(59, 10, 7, '73571010', 'ذا بيست', 513.00, 450.00, 2.00),
(60, 10, 9, '77297683', 'جرين ماسك تيب', 569.00, 476.00, 1.00),
(61, 10, 10, '58919463', 'اى تى ماسك تيب', 450.00, 370.00, 1.00),
(62, 10, 12, '93203908', 'فريش', 407.00, 314.00, 1.00),
(63, 10, 13, '99892834', 'قابل للكسر', 549.00, 449.00, 1.00),
(64, 10, 14, '46035437', 'شرائط العزل الكهربائي ET', 299.00, 232.00, 1.00),
(65, 10, 15, '27112927', 'الومنيوم فويل مستر فويل 50 جرام', 528.00, 461.00, 1.00),
(66, 10, 16, '64039482', 'شرائط الزينة ½ سم', 259.00, 196.00, 2.00),
(67, 11, 59, '28262230', 'مسدس شمع من عتمان جروب، متعدد الألوان', 150.00, NULL, 1.00),
(68, 12, 60, '23307506', 'مسدس غراء احترافي 220 وات من توتال TT301116', 400.00, 350.00, 1.00),
(69, 12, 59, '28262230', 'مسدس شمع من عتمان جروب، متعدد الألوان', 150.00, NULL, 1.00),
(70, 12, 58, '35945023', 'مسدس شمع برو جلو من ستانلي GR100', 525.00, 450.00, 1.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2024 at 04:03 PM
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
-- Dumping data for table `faq_translations`
--

INSERT INTO `faq_translations` (`id`, `faq_id`, `locale`, `slug`, `name`, `des`, `other`, `g_title`, `g_des`) VALUES
(1, 1, 'en', 'what-is-da-web-player', 'What is \"DA WEB PLAYER\" ?', '<p><span style=\"font-size:20px\"><strong><span style=\"color:#e74c3c\">It is a web application to stream the service through your web browser without installing any additional apps.</span></strong></span></p>', NULL, 'What is \"DA WEB PLAYER\" ?', 'What is \"DA WEB PLAYER\" ?'),
(2, 1, 'es', 'what-is-da-web-player', 'What is \"DA WEB PLAYER\" ?', '<p>It is a web application to stream the service through your web browser without installing any additional apps.</p>', NULL, 'What is \"DA WEB PLAYER\" ?', 'What is \"DA WEB PLAYER\" ?'),
(3, 2, 'en', 'what-browsers-support-da-web-player', 'What browsers support \"DA WEB PLAYER\" ?', '<p>All web browsers such as Google Chrome, Safari, Microsoft Edge, Mozilla Firefox or any other web browser are supporting &quot;DA WEB PLAYER&quot;</p>', NULL, NULL, NULL),
(4, 2, 'es', 'what-browsers-support-da-web-player', 'What browsers support \"DA WEB PLAYER\" ?', '<p>All web browsers such as Google Chrome, Safari, Microsoft Edge, Mozilla Firefox or any other web browser are supporting &quot;DA WEB PLAYER&quot;</p>', NULL, NULL, NULL),
(5, 3, 'en', 'what-are-the-devices-which-support-da-web-player', 'What are the devices which support \"DA WEB PLAYER\" ?', '<p>All devices have a web browser are supporting &quot;DA WEB PLAYER&quot;. For example: Android phones and tablets iOS devices such as iPhones and iPads MAC computers Microsoft Windows computers PlayStation Xbox</p>', NULL, 'What are the devices which support \"DA WEB PLAYER\" ?', 'What are the devices which support \"DA WEB PLAYER\" ?'),
(6, 3, 'es', 'what-are-the-devices-which-support-da-web-player', 'What are the devices which support \"DA WEB PLAYER\" ?', '<p>All devices have a web browser are supporting &quot;DA WEB PLAYER&quot;. For example: Android phones and tablets iOS devices such as iPhones and iPads MAC computers Microsoft Windows computers PlayStation Xbox</p>', NULL, 'What are the devices which support \"DA WEB PLAYER\" ?', 'What are the devices which support \"DA WEB PLAYER\" ?'),
(7, 4, 'en', 'how-to-stream-the-service-using-da-web-player', 'How to stream the service using \"DA WEB PLAYER\" ?', '<p>It&#39;s pretty simple, just copy and paste in your web browser&gt;&gt;<br />\r\n<a href=\"http://dastreamz-player.xyz:8080/webplayer\">http://dastreamz-player.xyz:8080/webplayer</a><br />\r\nType any name from your choice in the &quot;Any Name&quot; field<br />\r\nEnter your service Username<br />\r\nEnter your service Password<br />\r\nHit &quot;ADD USER&quot;</p>\r\n\r\n<div class=\"simple-translate-system-theme\" id=\"simple-translate\">\r\n<div>\r\n<div class=\"isShow simple-translate-button\" style=\"background-image:url(&quot;moz-extension://1bc4d616-890e-449c-ac42-771e2a393ca2/icons/512.png&quot;); height:22px; left:-15px; top:29px; width:22px\">&nbsp;</div>\r\n\r\n<div class=\"simple-translate-panel\" style=\"font-size:13px; height:300px; left:0px; top:0px; width:600px\">\r\n<div class=\"simple-translate-result-wrapper\" style=\"overflow:hidden\">\r\n<div class=\"simple-translate-move\">&nbsp;</div>\r\n\r\n<div class=\"simple-translate-result-contents\">\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<p>It&#39;s pretty simple, just copy and paste in your web browser&gt;&gt;<br />\r\n<a href=\"http://dastreamz-player.xyz:8080/webplayer\">http://dastreamz-player.xyz:8080/webplayer</a><br />\r\nType any name from your choice in the &quot;Any Name&quot; field<br />\r\nEnter your service Username<br />\r\nEnter your service Password<br />\r\nHit &quot;ADD USER&quot;</p>\r\n\r\n<div class=\"simple-translate-system-theme\" id=\"simple-translate\">\r\n<div>\r\n<div class=\"isShow simple-translate-button\" style=\"background-image:url(&quot;moz-extension://1bc4d616-890e-449c-ac42-771e2a393ca2/icons/512.png&quot;); height:22px; left:8px; top:39px; width:22px\">&nbsp;</div>\r\n\r\n<div class=\"simple-translate-panel\" style=\"font-size:13px; height:300px; left:0px; top:0px; width:600px\">\r\n<div class=\"simple-translate-result-wrapper\" style=\"overflow:hidden\">\r\n<div class=\"simple-translate-move\">&nbsp;</div>\r\n\r\n<div class=\"simple-translate-result-contents\">\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', NULL, NULL),
(8, 4, 'es', 'how-to-stream-the-service-using-da-web-player', 'How to stream the service using \"DA WEB PLAYER\" ?', '<p>It&#39;s pretty simple, just copy and paste in your web browser&gt;&gt; http://dastreamz-player.xyz:8080/webplayer Type any name from your choice in the &quot;Any Name&quot; field Enter your service Username Enter your service Password Hit &quot;ADD USER&quot;</p>', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

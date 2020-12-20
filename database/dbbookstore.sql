-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 01:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbookstore`
--

-- --------------------------------------------------------

--
-- Structure for view `user_account_info`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_account_info`  AS SELECT DISTINCT `user_account`.`user_name` AS `user_name`, `user_detail`.`full_name` AS `full_name`, `user_account`.`password` AS `password`, `user_account`.`email` AS `email`, `user_detail`.`phone` AS `phone`, `user_detail`.`list_favorite` AS `list_favorite`, `user_detail`.`street` AS `street`, `user_detail`.`district` AS `district`, `user_detail`.`city` AS `city`, `user_detail`.`img` AS `img`, `user_account`.`level` AS `level`, `user_account`.`status` AS `status`, `user_account`.`user_id` AS `user_id`, `user_account`.`created` AS `created`, `user_account`.`modiffer` AS `modiffer` FROM (`user_account` left join `user_detail` on(`user_account`.`user_name` = `user_detail`.`user_name`)) WHERE `user_account`.`level` <> 'admin' ;

--
-- VIEW `user_account_info`
-- Data: None
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- Adminer 4.7.9 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `admin` (`user`, `password`) VALUES
('test',	'$2y$10$6lrKSV/oF2WEy4j/7NzeaesCiIeSs5E3f.0Fvr5zh.Ywrqm8Ct4ci');

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO `appointment` (`date`, `time`, `first_name`, `last_name`, `phone_number`, `email`, `remarks`) VALUES
('2024-01-09',	'12:00:00',	'Kaas',	'Menneke',	'0666666666',	'kaas@live.nl',	'Deez');

-- 2024-01-23 10:19:11

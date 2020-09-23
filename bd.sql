-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2020 at 03:49 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_images`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
                         `id` int(11) NOT NULL,
                         `name` varchar(200) NOT NULL,
                         `price` varchar(10) NOT NULL,
                         `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `price`, `info`) VALUES
(1, 'Товар 1', '100', 'Информация о товаре 1'),
(2, 'Товар 2', '100', 'Информация о товаре 2'),
(3, 'Товар 3', '200', 'Информация о товаре 3'),
(4, 'Товар 4', '3000', 'Информация о товаре 4'),
(5, 'Товар 5', '7500', 'Информация о товаре 5');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
                          `url` varchar(30) NOT NULL,
                          `name` varchar(30) NOT NULL,
                          `size` float NOT NULL,
                          `id` int(50) NOT NULL,
                          `views` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`url`, `name`, `size`, `id`, `views`) VALUES
('img/', '1.jpg', 0.1, 1, 0),
('img/', '2.jpg', 1, 2, 0),
('img/', '4.jpg', 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
                          `id` int(11) NOT NULL,
                          `user_id` int(11) NOT NULL,
                          `items` json NOT NULL,
                          `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `items`, `status`) VALUES
(1, 7, '{\"1\": {\"name\": \"Товар 1\", \"count\": 1, \"price\": \"100\"}, \"2\": {\"name\": \"Товар 2\", \"count\": 3, \"price\": \"100\"}}', 0),
(2, 7, '{\"1\": {\"name\": \"Товар 1\", \"count\": 1, \"price\": \"100\"}, \"2\": {\"name\": \"Товар 2\", \"count\": 2, \"price\": \"100\"}, \"4\": {\"name\": \"Товар 4\", \"count\": 1, \"price\": \"3000\"}, \"5\": {\"name\": \"Товар 5\", \"count\": 4, \"price\": \"7500\"}}', 0),
(3, 12, '{\"1\": {\"name\": \"Товар 1\", \"count\": 1, \"price\": \"100\"}, \"3\": {\"name\": \"Товар 3\", \"count\": 1, \"price\": \"200\"}, \"4\": {\"name\": \"Товар 4\", \"count\": 1, \"price\": \"3000\"}}', 0),
(4, 13, '{\"1\": {\"name\": \"Товар 1\", \"count\": 2, \"price\": \"100\"}, \"3\": {\"name\": \"Товар 3\", \"count\": 2, \"price\": \"200\"}, \"4\": {\"name\": \"Товар 4\", \"count\": 2, \"price\": \"3000\"}, \"5\": {\"name\": \"Товар 5\", \"count\": 2, \"price\": \"7500\"}}', 0),
(7, 7, '{\"1\": {\"name\": \"Товар 1\", \"count\": 1, \"price\": \"100\"}, \"2\": {\"name\": \"Товар 2\", \"count\": 1, \"price\": \"100\"}, \"3\": {\"name\": \"Товар 3\", \"count\": 2, \"price\": \"200\"}, \"4\": {\"name\": \"Товар 4\", \"count\": 1, \"price\": \"3000\"}}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `id` int(10) NOT NULL,
                         `login` varchar(30) NOT NULL,
                         `password` varchar(100) NOT NULL,
                         `name` varchar(30) NOT NULL,
                         `is_admin` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `is_admin`) VALUES
(1, 'max', '1234', 'Maxim', 0),
(2, 'igor', '123456', 'Igorka', 0),
(3, 'kat', '567', 'katya', 0),
(4, 'masha', '345', 'masha', 0),
(5, 'admin', '$2y$10$B09XXVkasnBnja5fX1liw.5vuNGUNNoO3HJX1/cR0ANVXfcJ2jjP.', 'admin', 1),
(6, 'pasha', '888888', 'pavel', 0),
(7, 'ivashka', '3434', 'ivan', 0),
(10, 'kol', '123', 'Коля', 0),
(11, 'bor', '1122', 'borya', 0),
(12, 'irka', '$2y$10$IJYIGgNyT8k8ENYH1FOiGe0pFuj4qat/LhVHvpefw9HRvXm/YT1jy', 'ira', 0),
(13, 'vas', '$2y$10$LGEeNPIc3BxnlrKtVrefHe87iqaUai/JoOmQ9i2VoSA8g12Xhi5ay', 'Вася', 0),
(14, 'Miha', '1234', 'Misha', 0),
(15, 'pavel', '12345', 'Павел', 0),
(16, 'igor', '123', 'Игорь', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
    MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

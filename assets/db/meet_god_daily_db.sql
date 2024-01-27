- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2024 at 12:55 PM
-- Server version: 5.7.40
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meet_god_daily_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `devotions`
--

DROP TABLE IF EXISTS `devotions`;
CREATE TABLE IF NOT EXISTS `devotions` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `bible_verse` varchar(200) NOT NULL,
  `bible_verse_message` varchar(2000) NOT NULL,
  `devotion_title` varchar(200) NOT NULL,
  `message_date` datetime NOT NULL,
  `devotion_message` varchar(5000) NOT NULL,
  `devotion_prayer` varchar(2000) NOT NULL,
  `devotion_writer` varchar(200) NOT NULL,
  `creation_date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devotions`
--

INSERT INTO `devotions` (`id`, `bible_verse`, `bible_verse_message`, `devotion_title`, `message_date`, `devotion_message`, `devotion_prayer`, `devotion_writer`, `creation_date`) VALUES
(3, 'Lorem ipsum dolor sit.', 'Lorem ipsum dolor sit amet consectetur adipiscing elit class cum ut himenaeos suspendisse curae urna taciti commodo suscipit vitae, tempor lobortis justo dictumst penatibus non viverra condimentum ante ', 'Lorem ipsum dolor sit.', '2024-01-21 10:01:03', 'Lorem ipsum dolor sit amet consectetur adipiscing elit class cum ut himenaeos suspendisse curae urna taciti commodo suscipit vitae, tempor lobortis justo dictumst penatibus non viverra condimentum ante imperdiet mattis aliquet litora cubilia a ridiculus. Nulla neque etiam vestibulum odio eros in aenean, bibendum nisi ut natoque orci mollis tincidunt, quisque iaculis pellentesque nascetur eleifend sed. Sagittis taciti sodales ac eros litora cursus quisque morbi commodo viverra, tristique fames magna rhoncus parturient iaculis himenaeos ornare ligula etiam pellentesque, enim justo vivamus vehicula nulla senectus elementum nunc ad. Vel nam fermentum bibendum blandit ullamcorper vitae a, in quis sapien tempor augue proin etiam nibh, at ornare praesent quisque porta dis. Ultrices nascetur cursus aenean nulla eros porttitor torquent feugiat dignissim, imperdiet vehicula pretium leo ante natoque euismod non molestie, arcu auctor vulputate in ridiculus sem platea eleifend. Tristique nulla penatibus facilisis scelerisque natoque posuere nascetur, himenaeos imperdiet augue malesuada dui felis netus, aenean pulvinar senectus mollis quisque placerat. Vitae litora torquent eleifend mattis potenti odio parturient, etiam eget lectus vel nulla blandit rhoncus, mi elementum tincidunt imperdiet consequat nec.\n\nLuctus odio volutpat malesuada conubia urna, eu netus metus purus porta, augue hac cum est. Scelerisque quisque erat nam auctor nisi malesuada porttitor urna, sodales ridiculus aptent taciti cursus hendrerit interdum commodo, ligula ullamcorper ultrices aliquam vitae parturient vel. Litora faucibus diam lacus duis eros netus pretium orci enim himenaeos risus nisl, dui aliquam nec eleifend eu semper tempor justo porta torquent. Aliquet montes velit venenatis nulla rutrum neque vivamus nam metus posuere, odio cum turpis eros mauris condimentum nibh pharetra vitae. Nascetur dis sed nibh sapien turpis nam dui eu aliquet orci, habitant nunc a facilisis parturient velit ullamcorper volutpat purus, enim arcu malesuada curabitur dictumst pellentesque phasellus torquent posuere. Mi commodo erat vitae dui mollis proin, platea suspendisse dictum vestibulum fermentum auctor, ullamcorper praesent euismod eget facilisi inceptos, aptent maecenas donec nostra odio. Tellus commodo erat taciti congue platea nec pretium fringilla, felis malesuada elementum magnis dictumst quis phasellus vel, cras eros mauris eget metus aptent habitasse.', 'Tellus commodo erat taciti congue platea nec pretium fringilla, felis malesuada elementum magnis dictumst quis phasellus vel, cras eros mauris eget metus aptent habitasse.', 'German Blick', '2024-01-21 12:17:07'),
(8, 'Vitae voluptatum voluptates eos fugiat vero similique beatae.', 'Dolores nisi laudantium quaerat.', 'Global Program Executive', '2023-06-26 22:39:00', 'Tenetur deleniti adipisci ad reprehenderit distinctio natus minus corrupti. Omnis illum fugiat illo sit. Ipsa ea odit modi quos accusamus distinctio.', 'Quam id maiores nobis iure odit placeat adipisci laborum.', 'Trinity Brakus', '2024-01-25 18:20:00'),
(9, 'Libero incidunt laboriosam perspiciatis nobis doloremque illo architecto.', 'Amet consectetur animi molestias dignissimos occaecati est. Quaerat labore quam id sunt odio. Dolorem esse fuga nobis veritatis explicabo veniam voluptatibus culpa.', 'Customer Tactics Manager', '2023-12-18 07:22:00', 'Ullam facilis aut temporibus quia maxime iste. Doloremque molestias molestiae veritatis. Cumque nihil ad sed reprehenderit tenetur tempore fugit doloremque magnam.', 'Adipisci ratione harum eius architecto doloribus alias voluptatum rerum.', 'Paris Reinger', '2024-01-26 14:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tx_ref` varchar(200) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `creation_date` timestamp NOT NULL,
  `completion_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_fk` (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `tx_ref`, `amount`, `status`, `creation_date`, `completion_date`) VALUES
(1, 7, 'BJUYU3998fcdsd4ds903', 2000, 'pending', '2024-01-10 02:14:32', '2024-01-26 18:04:18'),
(2, 7, 'BJUYU3998fcdsd4ds903', 2000, 'complete', '2024-01-10 02:23:13', NULL),
(3, 7, 'BJUYU3998fcdsd4ds9', 2000, 'complete', '2024-01-10 02:33:02', '2024-12-11 20:48:22'),
(4, 7, 'BJUYU3998fcdsd4ds9', 2000, 'pending', '2024-01-10 06:56:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `value` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'amount', '2000'),
(2, 'secret_key', 'FLWSECK_TEST-ef619bc1273084a11e2f8c970512729d-X'),
(3, 'bonus_days', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `user_type` varchar(10) DEFAULT 'user',
  `photo` varchar(300) NOT NULL,
  `creation_date` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `phone`, `email`, `password`, `user_type`, `photo`, `creation_date`) VALUES
(7, 'Tamnjong', '680162416', 'larrytabeh@gmail.com', '$2y$10$Hq7nGKRZ2kKPAUYekZsRTevOnklhjsbixpxguPC295Y3NbhLeVjdC', 'admin', 'profile.png', '2024-01-01 17:04:27'),
(35, 'Tamnjong Larry', '693536875', 'larrytamnjong@gmail.com', '$2y$10$pEs5SoqM37NYhm/nRbiBmuc1fMgJ9za4rnRtWKhoCQ4yQPeljaxaO', 'user', '', '2024-01-21 12:29:51'),
(36, 'Walker Beer', '088-007-1122', 'your.email+fakedata31794@gmail.com', '$2y$10$dx0cD/aVHoewlRsY91A2Q.ZkK0NEMwbJP8nOfTmgop6qxLbOkfjq.', 'user', '', '2024-01-25 18:47:57');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

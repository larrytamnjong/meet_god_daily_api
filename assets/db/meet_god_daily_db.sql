-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2024 at 02:00 AM
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
  `prayer_point` varchar(300) NOT NULL,
  `devotion_writer` varchar(200) NOT NULL DEFAULT 'TCED ',
  `creation_date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `devotions`
--

INSERT INTO `devotions` (`id`, `bible_verse`, `bible_verse_message`, `devotion_title`, `message_date`, `devotion_message`, `devotion_prayer`, `prayer_point`, `devotion_writer`, `creation_date`) VALUES
(1, 'Adipisci optio nihil iusto ', 'Dolor perferendis quidem maiores ullam necessitatibus. Commodi voluptatem hic porro. Quos illo laudantium mollitia officiis.\r\n', 'Voluptatibus excepturi asperiores', '2024-01-25 04:31:00', 'Ipsa voluptate placeat error. Omnis perspiciatis optio. Adipisci deleniti amet rem commodi.\r\nLorem ipsum dolor sit amet consectetur adipiscing elit ultricies, dictumst felis vivamus vel nam mi. Dictumst pulvinar quis himenaeos sed etiam quisque accumsan tincidunt auctor aliquet, viverra leo nascetur hac at vitae tortor natoque cursus, primis risus proin per mus egestas metus odio diam. Suscipit condimentum at in tristique morbi ut nibh facilisi facilisis natoque netus pharetra, montes vivamus venenatis dictumst commodo justo orci auctor tortor imperdiet. Suscipit praesent ut porta semper fames conubia leo montes, eleifend varius faucibus felis himenaeos feugiat diam, lacus primis morbi blandit ligula massa nunc. Cum mauris eu massa class sodales sed consequat turpis, cursus magnis habitant diam facilisi montes posuere dictumst, cras nisi purus nostra eros bibendum mus.', 'Libero inventore totam dolores quaerat.\r\nLorem ipsum dolor sit amet consectetur adipiscing elit ultricies, dictumst felis vivamus vel nam mi. Dictumst pulvinar quis himenaeos sed etiam quisque accumsan tincidunt auctor aliquet, viverra leo nascetur hac at vitae tortor natoque cursus, primis risus proin per mus egestas metus odio diam. Suscipit condimentum at in tristique morbi ut nibh facilisi facilisis natoque netus pharetra, montes vivamus venenatis dictumst commodo justo orci auctor tortor imperdiet. Suscipit praesent ut porta semper fames conubia leo montes, eleifend varius faucibus felis himenaeos feugiat diam, lacus primis morbi blandit ligula massa nunc. ', '', 'Leon Heathcote', '2024-01-29 15:20:52'),
(2, 'Lorem ipsum', 'Repellat explicabo neque quasi error ipsum necessitatibus neque culpa sequi repellat explicabo neque quasi error ipsum necessitatibus neque culpa sequi. ', 'Lorem ipsum Lorem ipsum.', '2024-01-29 16:21:00', 'Rich TextHTML\r\nCopy\r\nLorem ipsum dolor sit amet consectetur adipiscing elit at, nibh pharetra aliquet est ullamcorper tellus eleifend, rhoncus nisl morbi mi fames lobortis viverra. Est accumsan cras purus velit maecenas faucibus imperdiet sem, tortor lacus a gravida sapien inceptos praesent enim, hac platea ligula mattis potenti id turpis. Tincidunt suscipit vitae venenatis cursus pulvinar penatibus eleifend imperdiet eu quis, montes conubia faucibus potenti scelerisque eget vulputate a natoque, ac cras ullamcorper quisque quam ante risus gravida dapibus. Urna feugiat venenatis ligula rhoncus sed montes vitae habitant sapien fusce, facilisis placerat laoreet semper nibh mollis nam eleifend eros, cubilia sollicitudin tempor mauris morbi faucibus lacus purus fringilla. Platea accumsan vehicula vestibulum dapibus rhoncus euismod auctor sapien, venenatis facilisis diam donec fermentum quis velit sed, aptent iaculis bibendum cum molestie porttitor montes. Mauris suspendisse ullamcorper habitasse nisi ante erat cras interdum, nibh congue mollis turpis aenean varius auctor class, neque vivamus platea fusce scelerisque condimentum malesuada. Neque vestibulum netus class nascetur aliquam ante ultrices luctus, non erat malesuada dictum turpis cubilia pulvinar, lacus varius hac habitasse lacinia metus euismod. \r\nEgestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.', 'Egestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.', '', 'Paris Reinger', '2024-01-29 15:22:01'),
(3, 'Neque soluta perspiciatis.', 'Repellat explicabo neque quasi error ipsum necessitatibus neque culpa sequi. ', 'Lorem ipsum', '2024-01-30 16:22:00', 'Egestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo. Egestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.', 'Egestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.', '', 'Victoria Green Mark', '2024-01-29 15:23:00'),
(4, 'Neque soluta perspiciatis.', 'Egestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.', 'Lorem ipsum Lorem ipsum.', '2024-01-31 16:23:00', 'Egestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.\r\nEgestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.\r\nEgestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.', 'Egestas praesent primis lectus eros habitasse quisque auctor metus, congue dictumst elementum malesuada tristique enim class, habitant hendrerit fermentum pharetra tempor pellentesque leo.', '', 'Trinity Brakus', '2024-01-29 15:23:32'),
(5, 'Neque soluta perspiciatis.', 'Eleifend pulvinar aenean nisi mi habitasse lobortis et bibendum cras, nascetur morbi fringilla dapibus magna sodales varius pharetra ut, netus litora ridiculus ac molestie porta suspendisse hendrerit. Sem neque donec erat libero nam non laoreet venenatis, iaculis id odio torquent dui sapien. Nullam consequat leo varius nascetur integer aenean nulla fringilla, montes morbi orci habitant mollis lectus proin lacinia, dictum condimentum venenatis dis tortor egestas blandit.', 'Voluptatibus excepturi asperiores', '2024-02-01 16:25:00', 'Eleifend pulvinar aenean nisi mi habitasse lobortis et bibendum cras, nascetur morbi fringilla dapibus magna sodales varius pharetra ut, netus litora ridiculus ac molestie porta suspendisse hendrerit. Sem neque donec erat libero nam non laoreet venenatis, iaculis id odio torquent dui sapien. Nullam consequat leo varius nascetur integer aenean nulla fringilla, montes morbi orci habitant mollis lectus proin lacinia, dictum condimentum venenatis dis tortor egestas blandit. Suspendisse iaculis fringilla mauris cursus pharetra imperdiet vulputate, aliquet libero curabitur nunc massa magnis, luctus at tincidunt condimentum eros id. Litora sagittis laoreet sed sociis ullamcorper vehicula molestie, erat arcu consequat etiam risus morbi, nam posuere semper dignissim est cursus. Curae class et nostra imperdiet dignissim eleifend aenean cursus, odio rhoncus mi sollicitudin mattis habitasse phasellus est aptent, auctor etiam libero sodales vivamus magna fusce. Libero sed quam facilisi risus class diam quis, hac vivamus aenean vehicula condimentum ligula vitae felis, mauris pretium nam aptent platea fermentum.\r\n\r\nLorem ipsum dolor sit amet consectetur adipiscing elit facilisis justo, bibendum faucibus rhoncus taciti placerat ornare risus nisi gravida vulputate, molestie aliquam lacus orci pulvinar elementum metus quis. Himenaeos sagittis nam rhoncus lobortis hac feugiat id nostra curabitur, per ante sociis nullam arcu ridiculus semper facilisi, malesuada est volutpat felis dictumst massa vestibulum augue. In senectus ad viverra commodo mattis, mus eget eleifend felis integer egestas, cursus vestibulum mi dis. Sodales maecenas integer hendrerit velit penatibus torquent primis leo porta, dictum urna etiam platea fusce netus malesuada erat, ligula phasellus lacinia eleifend eget dis hac ut. Eget nascetur aliquet cubilia justo inceptos consequat habitasse, nullam suscipit etiam scelerisque varius vehicula nec, aenean accumsan blandit viverra auctor ultrices.\r\n\r\nEleifend pulvinar aenean nisi mi habitasse lobortis et bibendum cras, nascetur morbi fringilla dapibus magna sodales varius pharetra ut, netus litora ridiculus ac molestie porta suspendisse hendrerit. Sem neque donec erat libero nam non laoreet venenatis, iaculis id odio torquent dui sapien. Nullam consequat leo varius nascetur integer aenean nulla fringilla, montes morbi orci habitant mollis lectus proin lacinia, dictum condimentum venenatis dis tortor egestas blandit. Suspendisse iaculis fringilla mauris cursus pharetra imperdiet vulputate, aliquet libero curabitur nunc massa magnis, luctus at tincidunt condimentum eros id. Litora sagittis laoreet sed sociis ullamcorper vehicula molestie, erat arcu consequat etiam risus morbi, nam posuere semper dignissim est cursus. Curae class et nostra imperdiet dignissim eleifend aenean cursus, odio rhoncus mi sollicitudin mattis habitasse phasellus est aptent, auctor etiam libero sodales vivamus magna fusce. Libero sed quam facilisi risus class diam quis, hac vivamus aenean vehicula condimentum ligula vitae felis, mauris pretium nam aptent platea fermentum.\r\n', 'Eleifend pulvinar aenean nisi mi habitasse lobortis et bibendum cras, nascetur morbi fringilla dapibus magna sodales varius pharetra ut, netus litora ridiculus ac molestie porta suspendisse hendrerit. Sem neque donec erat libero nam non laoreet venenatis, iaculis id odio torquent dui sapien. Nullam consequat leo varius nascetur integer aenean nulla fringilla, montes morbi orci habitant mollis lectus proin lacinia, dictum condimentum venenatis dis tortor egestas blandit.', '', 'Kirk Padberg', '2024-01-29 15:25:35'),
(6, 'Lorem ipsum 3 vs 5', 'Est accusantium repellendus voluptas iste. Officiis optio maxime recusandae nobis inventore earum harum officia. Quam voluptatum error magnam vitae dolor at eligendi.', 'Lorem ipsum Lorem ipsum.', '2024-02-07 13:17:00', 'Est accusantium repellendus voluptas iste. Officiis optio maxime recusandae nobis inventore earum harum officia. Quam voluptatum error magnam vitae dolor at eligendi. \r\nEst accusantium repellendus voluptas iste. Officiis optio maxime recusandae nobis inventore earum harum officia. Quam voluptatum error magnam vitae dolor at eligendi.Est accusantium repellendus voluptas iste. Officiis optio maxime recusandae nobis inventore earum harum officia. Quam voluptatum error magnam vitae dolor at eligendi.Est accusantium repellendus voluptas iste. Officiis optio maxime recusandae nobis inventore earum harum officia. Quam voluptatum error magnam vitae dolor at eligendi.', 'Est accusantium repellendus voluptas iste. Officiis optio maxime recusandae nobis inventore earum harum officia. Quam voluptatum error magnam vitae dolor at eligendi.', '', 'Kirk Padberg', '2024-02-07 12:17:19'),
(7, 'Matthew 13:1-9', 'The seeds that fall on good ground grow into healthy plants.', 'THE STORY OF THE SEEDS', '2024-01-01 19:39:00', 'The idea of God\'s Kingdom is big and fascinating, and we might not get all of it in our short devotion time. But think about your life and the people in your church. You will notice that we are all different, like different kinds of soil.\r\nHere is something important to remember: Jesus tells us this story not to make us feel like we have to be perfect soil. We cannot make that happen on our own. The good news is that the one who plants the seeds doesn\'t give up easily. Even in the most challenging places, Jesus keeps sowing seeds. He never gives up on us, just like He didn\'t give up on His disciples, even when they made mistakes. We can be sure He won\'t give up on us either. He will keep working on the parts of us that need some help.\r\nNow, as people who continue Jesus\' mission today, we should think about what this story means for how we do our mission work. Sometimes, we only share God\'s message where we know people will like it and join our church. We want to make sure we don\'t waste anything, but sometimes this stops us from trying new things because we are afraid, they won\'t work. We forget that making mistakes is okay. Letâ€™s keep proclaiming the Word. \r\n', 'Pray to trust that God will always share His message generously through us to grow His Kingdom.\r\n', 'Thank God that all CBC Christians have made it into this new year. Ask God to help them stay close to His Word and proclaim it tirelessly. ', 'TCED CBC', '2024-02-16 19:00:13'),
(8, 'Cupiditate modi ducimus.', 'Atque dolore ab deleniti temporibus deleniti a nobis accusamus libero. Officia dolor necessitatibus quas. Ad quis exercitationem aliquid vitae.', 'Dolor tempore ad. Libero culpa minus consectetur recusandae sapiente. Illum explicabo harum debitis eveniet iste porro maiores.', '2024-11-15 00:43:00', 'Saepe similique ab. Ut sint dignissimos aut. Eaque repellat porro voluptate consectetur quas id nihil corrupti illum.', 'Quam aperiam placeat tempore.', 'Quidem officia natus omnis eveniet perspiciatis repellendus.', 'Richmond Yundt', '2024-02-17 01:55:44'),
(9, 'Ipsa laudantium repellat fugit laudantium.', 'Enim distinctio praesentium reiciendis. Earum officiis ipsam voluptatem itaque iusto tempore culpa placeat. Minus error sequi voluptas dicta iusto adipisci dolore ea.', 'Laborum non optio eum. Commodi et sed sit aut aut voluptates consectetur corrupti. Quos rem dicta.', '2023-04-21 11:47:00', 'Ex soluta nisi veniam dolorem. Laboriosam pariatur qui aliquam accusamus quod a. Ducimus ducimus alias asperiores voluptatum animi dolor asperiores doloribus voluptatem.', 'Praesentium quidem esse.', 'Sunt labore laudantium.', 'Alvina Morar', '2024-02-17 01:55:58');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `tx_ref`, `amount`, `status`, `creation_date`, `completion_date`) VALUES
(1, 1, '1706542401C22BFC5EF7', 2000, 'complete', '2024-01-29 15:33:22', '2024-01-29 16:33:52'),
(2, 1, '1707309025BB6A258CB3', 2000, 'pending', '2024-02-07 12:30:31', NULL);

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
(3, 'bonus_days', '2');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `phone`, `email`, `password`, `user_type`, `photo`, `creation_date`) VALUES
(1, 'Administrator', '680162416', 'admin@gmail.com', '$2y$10$Hq7nGKRZ2kKPAUYekZsRTevOnklhjsbixpxguPC295Y3NbhLeVjdC', 'admin', '', '2024-01-29 15:18:14');

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

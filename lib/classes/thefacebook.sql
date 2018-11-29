SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `member_since` varchar(255) DEFAULT NULL,
  `last_update` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `home_town` varchar(255) DEFAULT NULL,
  `high_school` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `screenname` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `looking_for` varchar(255) DEFAULT NULL,
  `interested_in` varchar(255) DEFAULT NULL,
  `relationship` varchar(255) DEFAULT NULL,
  `political_view` varchar(255) DEFAULT NULL,
  `interests` varchar(255) DEFAULT NULL,
  `favourite_music` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

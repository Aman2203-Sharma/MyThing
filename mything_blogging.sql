-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 08:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mything_blogging`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_contents`
--

CREATE TABLE `all_contents` (
  `content_id` int(255) NOT NULL,
  `author` varchar(30) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `picture` varchar(500) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `highlight` varchar(300) NOT NULL,
  `tags` varchar(300) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_contents`
--

INSERT INTO `all_contents` (`content_id`, `author`, `category`, `title`, `date`, `picture`, `content`, `highlight`, `tags`, `role`) VALUES
(1, 'Naruto Uzumaki', 'Design', 'Just a Normal Simple Blog Post.', '2024-11-15', 'images/thumbs/masonry/statue-600.jpg', 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#design', ''),
(2, 'Sasuke Uchiha', 'Lifestyle', 'Throwback To The Good Old Days.', '2024-11-05', 'images/thumbs/masonry/beetle-600.jpg', 'Ipsam odio corrupti et dolores odit aliquid quo. Dolore consectetur a sit modi quam debitis non omnis. Enim ullam voluptatem ipsum soluta sed debitis nihil quasi. Et et et sit. Lorem ipsum Sed eiusmod esse aliqua sed incididunt.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#lifestyle', 'slider3'),
(3, 'Naruto Uzumaki', 'Design', '5 Grayscale Coloring Techniques.', '2024-11-01', 'images/thumbs/masonry/grayscale-600.jpg', 'Quo saepe magni magnam expedita nobis. Rerum assumenda necessitatibus tempora dolorem. Harum animi tempora odio natus et et perferendis possimus. Aut quo mollitia libero molestiae aut molestiae voluptate tempore. Eius voluptatem eligendi .', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#design #image #lovegray #color', 'slider1'),
(4, 'Aman Sharma', 'Health', '15 Interesting Facts About Caffeine.', '2024-10-22', 'images/thumbs/masonry/tulips-600.jpg', 'Consequatur amet voluptatem aliquid fuga. Consequatur tempora eos earum deleniti repellendus ducimus. Qui ipsum voluptas sed et ad dignissimos explicabo maxime dolor. Rerum quia et. Suscipit similique et. Atque tenetur provident. Excepturi autem unde.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#health', ''),
(5, 'Shizu Nara', 'Lifestyle', 'What Minimalism Really Looks Like.', '2024-10-18', 'images/thumbs/masonry/woodcraft-600.jpg', 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#lifestyle', ''),
(6, 'Aman Sharma', 'Work', 'Red and Blue Photo Effects.', '2024-10-15', 'images/thumbs/masonry/red-and-blue-600.jpg', 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#work', ''),
(7, 'Sakura Haruno', 'Health', 'What Does Reading Do to Your Brain?', '2024-10-07', 'images/thumbs/masonry/books-600.jpg', 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#health', ''),
(8, 'Naruto Uzumaki', 'Work', '10 Practical Ways to Be Minimalist.', '2024-10-06', 'images/thumbs/masonry/white-lamp-600.jpg', 'Ratione qui voluptas reprehenderit facilis soluta ut nam. Distinctio cum excepturi et. Aperiam blanditiis voluptatem. A esse sunt nesciunt voluptate. Architecto voluptas id rerum placeat nostrum et optio. Placeat occaecati voluptas.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#work', ''),
(9, 'Shikamaru Narra', 'Photography', 'Symmetry In Modern Design.', '2024-10-02', 'images/thumbs/masonry/lamp-600.jpg', 'Praesentium vel similique laboriosam repudiandae mollitia error. Inventore numquam occaecati omnis beatae fugiat. Porro sed numquam doloribus dolores exercitationem recusandae culpa. Sint vel vel quia quis. Non velit eum ea tempora quas sapiente.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#photography', ''),
(10, 'Sasuke Uchiha', 'Lifestyle', '10 Tips for Managing Time Effectively.', '2024-09-29', 'images/thumbs/masonry/clock-600.jpg', 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in anim.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#lifestyle', ''),
(11, 'Fury Murphy', 'Inspiration', 'How to Optimize Your Keyboard for Better Typing Speed and Comfort', '2024-09-19', 'images/thumbs/masonry/phone-and-keyboard-600.jpg', 'Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in anim.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#inspiration', ''),
(12, 'Naruto Uzumaki', 'Photography', 'Black And White Photography Tips.', '2024-09-18', 'images/thumbs/masonry/wheel-600.jpg', 'Voluptatem maiores aut delectus accusamus et explicabo et. Enim sunt quo odio sit. Hic consequatur et quia voluptas saepe. Vel nostrum incidunt ab eum distinctio recusandae. Labore dolore consequatur occaecati iste ex consectetur et perferendis.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#photography', ''),
(13, 'Naruto Uzumaki', 'Inspiration', 'Understanding and Using Negative Space.', '2024-09-04', 'images/thumbs/featured/featured-01_2000.jpg', 'Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#inspiration', ''),
(14, 'Tom William', 'Health', '10 Reasons Why Being in Nature Is Good For You.', '2024-09-10', 'images/thumbs/featured/featured-02_2000.jpg', 'Voluptas harum sequi rerum quasi quisquam. Est tenetur ut doloribus in aliquid animi nostrum. Tempora quibusdam ad nulla. Quis autem possimus dolores est est fugiat saepe vel aut. Earum consequatur.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#health', 'slider2'),
(15, 'Kakashi Hatake', 'Lifestyle', 'Six Relaxation Techniques to Reduce Stress.', '2024-09-17', 'images/thumbs/featured/featured-03_2000.jpg', 'Quasi consequatur quia excepturi ullam velit. Repellat velit vel occaecati neque perspiciatis quibusdam nulla. Unde et earum. Nostrum nulla optio debitis odio modi. Quis autem possimus dolores est est fugiat saepe vel aut.', 'Eligendi quam at quis. Sit vel neque quam consequuntur expedita quisquam. Incidunt quae qui error. Rerum non facere mollitia ut magnam laboriosam. Quisquam neque quia ex eligendi repellat illum quibusdam aut. Architecto quam consequuntur totam ratione reprehenderit est praesentium impedit maiores in', '#lifestyle', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment_details`
--

CREATE TABLE `comment_details` (
  `comment_id` int(255) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `user` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `auth_id` int(255) NOT NULL,
  `content_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_details`
--

INSERT INTO `comment_details` (`comment_id`, `comment`, `user`, `email`, `date`, `auth_id`, `content_id`) VALUES
(1, 'Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate, facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.', 'Sasuke Uchiha', 'sasuke@gmail.com', '2024-11-01', 3, 3),
(3, 'Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et tantas semper delicatissimi.', 'Tom William', 'tom@gmail.com', '2024-08-14', 8, 15),
(4, 'Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.', 'Shikamaru Nara', 'shikamaru@gmail.com', '2024-08-13', 6, 12),
(5, 'Esse euismod urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et tantas semper delicatissimi.', 'Aman Sharma', 'aman@gmail.com', '2024-12-17', 1, 15),
(12, 'Are you guys like this post?', 'Kakashi Hatake', 'kakashiha@gmail.com', '2024-12-18', 9, 15),
(13, 'It is too good to think about the good old days.', 'Kakashi Hatake', 'kakashiha@gmail.com', '2024-12-18', 9, 2),
(14, 'Thank you so much for this post :)', 'Sasuke Uchiha', 'sasuke323@gmail.com', '2024-12-18', 3, 11),
(15, 'Nature is the most Beautiful thing in the world .', 'Sasuke Uchiha', 'sasuke323@gmail.com', '2024-12-18', 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `message_details`
--

CREATE TABLE `message_details` (
  `id` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_details`
--

INSERT INTO `message_details` (`id`, `name`, `email`, `message`) VALUES
(1, 'Aman', 'amansharma888930@gmail.com', 'I love the insightful and engaging content on this blogging site! The writing is clear, informative, and thought-provoking. It’s great to find a site that offers both depth and accessibility. Keep up the amazing work—looking forward to more posts that inspire and educate. Highly recommended!'),
(2, 'AMAN SHARMA', 'amansharma888930@gmail.com', 'Great content! Informative, engaging, and well-written. Always looking forward to new posts. Keep up the fantastic work!');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(255) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `profile` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `resettoken` varchar(255) DEFAULT NULL,
  `resettokenexpired` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `firstname`, `lastname`, `designation`, `profile`, `email`, `phone`, `uname`, `pswd`, `bio`, `resettoken`, `resettokenexpired`) VALUES
(1, 'Aman', 'Sharma', 'Web Developer', 'assets/img/avatar/avatar-1.png', 'amansharma888930@gmail.com', '8889308621', 'Aman', '316', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora aut explicabo non ex? Vero corporis dolorem labore provident suscipit, at quod sit? Architecto dolorem itaque molestias rerum consequatur quaerat, pariatur commodi magni exercitationem ad tempore dolore a? Sunt, commodi? Deleniti odio, sed illum corporis inventore ad commodi, eveniet tempora repellat labore incidunt expedita? Voluptatibus labore facilis dolore minima nobis quas obcaecati error! Natus magni eveniet fuga iusto ', NULL, NULL),
(2, 'Naruto', 'Uzumaki', 'Professional Blogger', 'assets/img/avatar/24-11-15-08-07-56user-06.jpg', 'narutojnp78@gmail.com', '8748798381', 'nauz', '321', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis reiciendis, quasi dolor, eos dolores odio aut rem dolorum aliquid sunt minus autem ex sequi! Molestiae minus temporibus assumenda repellat soluta rerum. Rerum, molestias laboriosam, delectus iure dignissimos, minus vel sint in magnam exercitationem veritatis impedit odio. Quisquam iure eum inventore.', NULL, NULL),
(3, 'Sasuke', 'Uchiha', 'Professional Blogger', 'assets/img/avatar/24-11-15-09-10-30user-04.jpg', 'sasuke323@gmail.com', '6363737355', 'sasu', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora aut explicabo non ex? Vero corporis dolorem labore provident suscipit, at quod sit? Architecto dolorem itaque molestias rerum consequatur quaerat, pariatur commodi magni exercitationem ad tempore dolore a? Sunt, commodi? Deleniti odio, sed illum corporis inventore ad commodi, eveniet tempora repellat labore incidunt expedita? Voluptatibus labore facilis dolore minima nobis quas obcaecati error! Natus magni eveniet fuga iusto.', NULL, NULL),
(4, 'Shizu', 'Nara', 'Professional Blogger', 'assets/img/avatar/24-11-15-09-16-27user-08.jpg', 'narashizu44@gmail.com', '6666654543', 'shinara', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora aut explicabo non ex? Vero corporis dolorem labore provident suscipit, at quod sit? Architecto dolorem itaque molestias rerum consequatur quaerat, pariatur commodi magni exercitationem ad tempore dolore a? Sunt, commodi? Deleniti odio, sed illum corporis inventore ad commodi, eveniet tempora repellat labore incidunt expedita? Voluptatibus labore facilis dolore minima nobis quas obcaecati error! Natus magni eveniet fuga iusto.', NULL, NULL),
(5, 'Sakura', 'Haruno', 'Professional Blogger', 'assets/img/avatar/24-11-15-09-19-15user-07.jpg', 'saku777@gmail.com', '8889978777', 'saku', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora aut explicabo non ex? Vero corporis dolorem labore provident suscipit, at quod sit? Architecto dolorem itaque molestias rerum consequatur quaerat, pariatur commodi magni exercitationem ad tempore dolore a? Sunt, commodi? Deleniti odio, sed illum corporis inventore ad commodi, eveniet tempora repellat labore incidunt expedita? Voluptatibus labore facilis dolore minima nobis quas obcaecati error! Natus magni eveniet fuga iusto.', NULL, NULL),
(6, 'Shikamaru', 'Narra', 'Professional Blogger', 'assets/img/avatar/24-11-15-09-20-21user-05.jpg', 'marunarra33@gmail.com', '7897775454', 'maru', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora aut explicabo non ex? Vero corporis dolorem labore provident suscipit, at quod sit? Architecto dolorem itaque molestias rerum consequatur quaerat, pariatur commodi magni exercitationem ad tempore dolore a? Sunt, commodi? Deleniti odio, sed illum corporis inventore ad commodi, eveniet tempora repellat labore incidunt expedita? Voluptatibus labore facilis dolore minima nobis quas obcaecati error! Natus magni eveniet fuga iusto.', NULL, NULL),
(7, 'Fury', 'Murphy', 'Professional Blogger', 'assets/img/avatar/24-11-15-09-21-28user-02.jpg', 'murphy316@gmail.om', '6756533321', 'fury', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora aut explicabo non ex? Vero corporis dolorem labore provident suscipit, at quod sit? Architecto dolorem itaque molestias rerum consequatur quaerat, pariatur commodi magni exercitationem ad tempore dolore a? Sunt, commodi? Deleniti odio, sed illum corporis inventore ad commodi, eveniet tempora repellat labore incidunt expedita? Voluptatibus labore facilis dolore minima nobis quas obcaecati error! Natus magni eveniet fuga iusto.', NULL, NULL),
(8, 'Tom', 'William', 'Web Designer', 'assets/img/avatar/24-11-15-09-24-08user-01.jpg', 'william222@gmail.com', '6525452226', 'tom', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora aut explicabo non ex? Vero corporis dolorem labore provident suscipit, at quod sit? Architecto dolorem itaque molestias rerum consequatur quaerat, pariatur commodi magni exercitationem ad tempore dolore a? Sunt, commodi? Deleniti odio, sed illum corporis inventore ad commodi, eveniet tempora repellat labore incidunt expedita? Voluptatibus labore facilis dolore minima nobis quas obcaecati error! Natus magni eveniet fuga iusto.', NULL, NULL),
(9, 'Kakashi', 'Hatake', 'Professional Blogger', 'assets/img/avatar/24-11-15-09-25-22user-03.jpg', 'kakashiha@gmail.com', '7867678555', 'kaka', '123', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tempora aut explicabo non ex? Vero corporis dolorem labore provident suscipit, at quod sit? Architecto dolorem itaque molestias rerum consequatur quaerat, pariatur commodi magni exercitationem ad tempore dolore a? Sunt, commodi? Deleniti odio, sed illum corporis inventore ad commodi, eveniet tempora repellat labore incidunt expedita? Voluptatibus labore facilis dolore minima nobis quas obcaecati error! Natus magni eveniet fuga iusto.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_contents`
--
ALTER TABLE `all_contents`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `comment_details`
--
ALTER TABLE `comment_details`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `message_details`
--
ALTER TABLE `message_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_contents`
--
ALTER TABLE `all_contents`
  MODIFY `content_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comment_details`
--
ALTER TABLE `comment_details`
  MODIFY `comment_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `message_details`
--
ALTER TABLE `message_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

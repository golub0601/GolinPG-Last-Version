-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 06:23 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golinpg`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `content` text NOT NULL,
  `img_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `content`, `img_source`) VALUES
(1, 'EXPLORERS', 'Aponsectetur adipisicing elit. Repellendus similique, nisi quisquam ullam est facilis perferendis optio esse temporibus, magni blanditiis totam voluptates minus fugit! Ipsa repellendus quaerat, debitis enim earum magnam, consequatur explicabo, rem esse nesciunt pariatur temporibus sunt, aperiam incidunt. Tempora totam, ea rerum sit. Cum, sequi, delectus? Perspiciatis voluptate sit repellendus architecto optio reprehenderit rem voluptatibus mollitia at cumque rerum voluptatem nesciunt aliquam, vero ad, repudiandae nisi quibusdam ex amet voluptates. Sed possimus maiores illum expedita doloribus ab pariatur accusamus eligendi quis veritatis ea et fuga reprehenderit dolores id quibusdam, optio itaque aut harum qui maxime sunt.', 'krug1.png'),
(2, 'CREATORS', 'Aa dpokmks Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique, nisi quisquam ullam est facilis perferendis optio esse temporibus, magni blanditiis totam voluptates minus fugit! Ipsa repellendus quaerat, debitis enim earum magnam, consequatur explicabo, rem esse nesciunt pariatur temporibus sunt, aperiam incidunt. Tempora totam, ea rerum sit. Cum, sequi, delectus? Perspiciatis voluptate sit repellendus architecto optio reprehenderit rem voluptatibus mollitia at cumque rerum voluptatem nesciunt aliquam, vero ad, repudiandae nisi quibusdam ex amet voluptates. Sed possimus maiores illum expedita doloribus ab pariatur accusamus eligendi quis veritatis ea et fuga reprehenderit dolores id quibusdam, optio itaque aut harum qui maxime sunt.', 'krug2.png'),
(3, 'CONNECTORS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique, nisi quisquam ullam est facilis perferendis optio esse temporibus, magni blanditiis totam voluptates minus fugit! Ipsa repellendus quaerat, debitis enim earum magnam, consequatur explicabo, rem esse nesciunt pariatur temporibus sunt, aperiam incidunt. Tempora totam, ea rerum sit. Cum, sequi, delectus? Perspiciatis voluptate sit repellendus architecto optio reprehenderit rem voluptatibus mollitia at cumque rerum voluptatem nesciunt aliquam, vero ad, repudiandae nisi quibusdam ex amet voluptates. Sed possimus maiores illum expedita doloribus ab pariatur accusamus eligendi quis veritatis ea et fuga reprehenderit dolores id quibusdam, optio itaque aut harum qui maxime sunt.', 'krug3.png'),
(4, 'CATALYST', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus similique, nisi quisquam ullam est facilis perferendis optio esse temporibus, magni blanditiis totam voluptates minus fugit! Ipsa repellendus quaerat, debitis enim earum magnam, consequatur explicabo, rem esse nesciunt pariatur temporibus sunt, aperiam incidunt. Tempora totam, ea rerum sit. Cum, sequi, delectus? Perspiciatis voluptate sit repellendus architecto optio reprehenderit rem voluptatibus mollitia at cumque rerum voluptatem nesciunt aliquam, vero ad, repudiandae nisi quibusdam ex amet voluptates. Sed possimus maiores illum expedita doloribus ab pariatur accusamus eligendi quis veritatis ea et fuga reprehenderit dolores id quibusdam, optio itaque aut harum qui maxime sunt.', 'krug4.png');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Boris Golubovic', 'golub0601@gmail.com', '$2y$12$AOu3LYL07UvYO/2NCpgsG.3GmOTIUpx8rDgz/mD7h1FsdRzzLEVgO', 'admin_1'),
(2, 'Aleksandar Golubovic', 'aleksandar11@gmail.com', '$2y$12$.4lAy4uBePYdsis6MxXrTu.u6Fls6HZb4dpiA1g2BiGvdLYasN03C', 'admin_2'),
(3, 'Amplitudo Company', 'amplitudoinfo@amplitudo.me', '$2y$12$mc0AEhZzrGuleyIaZwUbnuAL5LSZu8zkKUDCPNrW6mOVNNwjoxYty', 'admin_3');

-- --------------------------------------------------------

--
-- Table structure for table `clients_imgs`
--

CREATE TABLE `clients_imgs` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `image_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_imgs`
--

INSERT INTO `clients_imgs` (`id`, `company`, `image_source`) VALUES
(1, 'MCDONALD&#39;S: THE STROW', 'client1.png'),
(2, 'MCDONALD\'S: FRORK', 'client2.png'),
(3, 'GUNNIESS: MADE OF MORE ', 'client3.png'),
(4, 'MAGNUM: MAGNUM X MOCHINO', 'client4.png'),
(5, 'GULDEN\'S: #DEFENDTHEDOG', 'client5.png'),
(6, 'TOBLERONE:THE TOBLERONE TAKE', 'client6.png');

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE `imgs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`id`, `name`, `source`) VALUES
(1, 'background_for_meeting_section_index', 'img/fotka1.png'),
(4, 'background_clients_section_index', 'img/fotka4.png'),
(5, 'gif_index', 'img/go-all-in.gif'),
(6, 'background_about_us_section_index', 'img/fotka5.png');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(32) NOT NULL,
  `day` date NOT NULL,
  `time_of` time NOT NULL,
  `taken_by` varchar(255) NOT NULL DEFAULT 'It is not taken'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `name`, `company`, `email`, `phone_number`, `day`, `time_of`, `taken_by`) VALUES
(6, 'sgsfgsg sssg ', 'VozDizajn', 'djukadjukic03@gmail.com', '068/589-905', '2018-04-22', '02:03:00', 'Aleksandar Golubovic'),
(7, 'Golub sgsg ', 'NNCKFQW', 'golub0601@gmail.com', '068/589-905', '2018-07-22', '17:01:00', 'Boris Golubovic'),
(8, 'dfwsgsw fss', 'fwefwUU', 'sss@nsknfgs.com', '06812878477', '2018-07-23', '03:59:00', 'Aleksandar Golubovic'),
(9, 'jdnsckscc nasfds', 'fwefwUU', 'golub0601@gmail.com', '698415133', '2018-09-22', '12:13:00', 'Aleksandar Golubovic'),
(11, 'qdwqdwd', 'ddd', 'wdw@gmail.com', '068/589-905', '2018-07-22', '00:30:00', 'Aleksandar Golubovic'),
(13, 'Golub', 'VozDizajn', 'golub0601@gmail.com', '068/589-905', '2018-07-22', '03:03:00', 'Amplitudo Company'),
(20, 'Boris Golubovic', 'VozDizajn', 'golub0601@gmail.com', '068/589-905', '2018-09-22', '02:01:00', 'It is not taken'),
(21, 'Boris Golubovic', 'VozDizajn', 'djukadjukic03@gmail.com', '06812878477', '2018-07-16', '01:00:00', 'It is not taken'),
(22, '601U8', 'VozDizajn', 'aleksandar11@gmail.com', '068/589-905', '2018-07-22', '01:00:00', 'Amplitudo Company'),
(24, 'John Doe', 'fwefwUU', 'sss@nsknfgs.com', '06812878477', '2018-12-05', '14:56:00', 'It is not taken'),
(25, 'PHP', 'VozDizajn', 'golub0601@gmail.com', '068/589-905', '2019-05-31', '02:32:00', 'It is not taken'),
(26, 'Boris Golubovic', 'fwefwUU', 'djukadjukic03@gmail.com', '068/589-905', '2019-04-22', '02:21:00', 'It is not taken'),
(27, 'Golub sgsg ', 'fwefwUU', 'aleksandar11@gmail.com', '06812878477', '2018-11-22', '05:03:00', 'It is not taken');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `image_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `city`, `image_source`) VALUES
(1, 'BELGRADE', 'Belgrade.png'),
(2, 'BRUSSELS', 'brussels.jpg'),
(3, 'BUCHAREST', 'bucharest.jpg'),
(4, 'DUBAI', 'dubai.jpg'),
(5, 'HAMBURG', 'Hamburg.jpg'),
(6, 'ISTANBUL', 'Istanbul.jpg'),
(7, 'LONDON', 'london.jpg'),
(8, 'MADRID', 'madrid.jpg'),
(9, 'MILAN', 'Milan.jpg'),
(10, 'MOSCOW', 'moscow.jpg'),
(11, 'PARIS', 'paris.jpg'),
(12, 'PODGORICA', 'podgorica.png'),
(13, 'RIGA', 'riga.jpg'),
(14, 'STOCHOLM', 'stockholm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pr_and_em`
--

CREATE TABLE `pr_and_em` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_source` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pr_and_em`
--

INSERT INTO `pr_and_em` (`id`, `title`, `content`, `image_source`) VALUES
(1, 'PR AND COMUNICATIONS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sunt blanditiis quos optio accusantium nostrum sequi sapiente, dicta animi illo, tempore, vitae sit consequuntur. Consectetur fuga obcaecati debitis, maxime ratione! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem itaque fugit, est, laboriosam ipsum illum consequatur expedita officiis iste atque quia quaerat necessitatibus alias ex quidem eius facilis suscipit hic.', 'fotka3.png'),
(2, 'EVENT MANAGMENT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sunt blanditiis quos optio accusantium nostrum sequi sapiente, dicta animi illo, tempore, vitae sit consequuntur. Consectetur fuga obcaecati debitis, maxime ratione! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem itaque fugit, est, laboriosam ipsum illum consequatur expedita officiis iste atque quia quaerat necessitatibus alias ex quidem eius facilis suscipit hic.', 'fotka2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_imgs`
--
ALTER TABLE `clients_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pr_and_em`
--
ALTER TABLE `pr_and_em`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients_imgs`
--
ALTER TABLE `clients_imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pr_and_em`
--
ALTER TABLE `pr_and_em`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

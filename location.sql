-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 11:32 PM
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
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `loc_id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `latitude` longtext NOT NULL,
  `longitude` longtext NOT NULL,
  `color` text NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`loc_id`, `name`, `latitude`, `longitude`, `color`, `status`, `date`) VALUES
(1, 'Carmen\'s Garden Resto\r\n', '14.29892', '121.05506', 'green-dot.png', '2482 Altarez Rd, Carmona, Cavite', '2022-06-08'),
(2, 'Gyeonggi Samgyupsal ', '14.31049213', '121.0430512', 'green-dot.png', 'Cityland Subdivision, J.M. Loyola, Carmona, 4116 Cavite', '2022-06-10'),
(3, 'Samantha\'s Grill and Restaurant', '14.30930758\r\n', '121.0318352\r\n', 'green-dot.png', '9002 Governor\'s Dr, Carmona, 4116 Cavite\r\n', '2022-06-16'),
(4, 'Ben\'s Halo-Halo', '14.31020932\r\n', '121.0328494\r\n', 'green-dot.png', 'View Fort Event\'s Place, Carmona, Cavite\r\n', '2022-06-15'),
(5, 'Jolibee Carmona\r\n', '14.31147803\r\n', '121.040582\r\n', 'green-dot.png', 'Governor\'s GMA Carmona, Governor\'s Dr, Cavite, 1800\r\n', '2022-06-15'),
(6, 'Carmen\'s Garden Resto\r\n', '14.29892', '121.05506', 'green-dot.png', '2482 Altarez Rd, Carmona, Cavite', '2022-06-08'),
(7, 'Gyeonggi Samgyupsal ', '14.31049213', '121.0430512', 'green-dot.png', 'Cityland Subdivision, J.M. Loyola, Carmona, 4116 Cavite', '2022-06-10'),
(8, 'Samantha\'s Grill and Restaurant', '14.30930758\r\n', '121.0318352\r\n', 'green-dot.png', '9002 Governor\'s Dr, Carmona, 4116 Cavite\r\n', '2022-06-16'),
(9, 'Ben\'s Halo-Halo', '14.31020932\r\n', '121.0328494\r\n', 'green-dot.png', 'View Fort Event\'s Place, Carmona, Cavite\r\n', '2022-06-15'),
(10, 'Jolibee Carmona\r\n', '14.31147803\r\n', '121.040582\r\n', 'green-dot.png', 'Governor\'s GMA Carmona, Governor\'s Dr, Cavite, 1800\r\n', '2022-06-15'),
(11, 'sam', '14.285411', '121.0090022', 'red-dot.png', 'qqq', '0000-00-00'),
(12, 'Carmen\'s Garden Resto', '14.29892', '121.05506', 'red-dot.png', '2482 Altarez Rd, Carmona, Cavite', '0000-00-00'),
(13, 'Gyeonggi Samgyupsal', '14.31049213', '121.0430512', 'red-dot.png', 'Cityland Subdivision, J.M. Loyola, Carmona, 4116 Cavite', '0000-00-00'),
(14, 'Samantha\'s Grill and Restaurant', '14.30930758', '121.0318352', 'red-dot.png', '9002 Governor\'s Dr, Carmona, 4116 Cavite', '0000-00-00'),
(15, 'Ben\'s Halo-Halo', '14.31020932', '121.0328494', 'red-dot.png', 'View Fort Event\'s Place, Carmona, Cavite', '0000-00-00'),
(16, 'Jolibee Carmona', '14.31147803', '121.040582', 'red-dot.png', 'Governor\'s GMA Carmona, Governor\'s Dr, Cavite, 1800', '0000-00-00'),
(17, 'Kenny Roger\'s Carmona', '14.31330263', '121.0485961', 'red-dot.png', '827X+7C9, Carmona, Cavite', '0000-00-00'),
(18, 'Army Navy Carmona', '14.31330364', '121.0424678', 'red-dot.png', 'Verdant Strip, Carmona City', '0000-00-00'),
(19, 'KFC Carmona', '14.31180306', '121.0424678', 'red-dot.png', 'Lot 5, Block, Brgy, 62 Governor\'s Dr, Carmona, 4116 Cavite', '0000-00-00'),
(20, 'RSM Lutong Bahay', '14.3286268', '121.0679533', 'red-dot.png', '83H9+946, Governor\'s Dr, Maduya, Carmona, Cavite', '0000-00-00'),
(21, 'Samgyupsalamat - Carmona Cavite', '14.31329193', '121.0491464', 'red-dot.png', 'C1-201, Macaria Business Center, Governor\'s Dr, Carmona, 4116 Cavite', '0000-00-00'),
(22, 'Bec and Geri\'s', '14.31289223', '121.0485846', 'red-dot.png', 'Macaria Business Center, Governor\'s Dr, Carmona, 4116 Cavite', '0000-00-00'),
(23, 'Ehsu and Eving Dumpling House', '14.32546369', '121.06578', 'red-dot.png', 'Governor\'s Dr Unit 28, Paseo de Carmona Brgy, Maduya, Carmona, 4116 Cavite', '0000-00-00'),
(24, 'Pares Retiro', '14.31327', '121.04824', 'red-dot.png', 'G/F VERDANT STRIP\'S, Carmona, 4116 Cavite', '0000-00-00'),
(25, 'Yannah\'s Eatery', '14.29262', '121.04509', 'red-dot.png', '72RW+W2G, Carmona, Cavite', '0000-00-00'),
(26, 'Naren Sizzling', '14.31008', '121.05004', 'red-dot.png', 'Hebron St, Carmona, Cavite', '0000-00-00'),
(27, 'Explosive Burger', '14.3108', '121.05009', 'red-dot.png', '11396 C, Hebron St, Carmona, 4116 Cavite', '0000-00-00'),
(28, 'VJ Batangas Lomi House', '14.31468', '121.04837', 'red-dot.png', '826X+52G, Loyola St, Carmona, Cavite', '0000-00-00'),
(29, 'Thirsty Bull', '14.29267952', '121.0448797', 'red-dot.png', '72RV+XWQ, Carmona, Cavite', '0000-00-00'),
(30, 'Wings City and Tita Fey\'s', '14.31127', '121.04901', 'red-dot.png', '11116 Loyola St, Carmona, Cavite', '0000-00-00'),
(31, 'Zee\'s White Sauce', '14.31793', '121.06162', 'red-dot.png', 'Estrellita Bldg., Brgy. Maduya, Carmona, 4116 Cavite', '0000-00-00'),
(32, 'Piolo\'s Hang-Out', '14.3115', '121.04192', 'red-dot.png', 'Lot 3, Blk 62, Governor\'s Dr, Carmona, 4116 Cavite', '0000-00-00'),
(33, 'Kuta Balwarte', '14.30906', '121.05036', 'red-dot.png', 'Unit C JTLC Building, San Jose, Carmona, 4116', '0000-00-00'),
(34, 'PORE\'st VIEW', '14.28874052', '121.0363288', 'red-dot.png', 'n/a', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `locations2`
--

CREATE TABLE `locations2` (
  `loc_id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `latitude` longtext NOT NULL,
  `longitude` longtext NOT NULL,
  `color` text NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations2`
--

INSERT INTO `locations2` (`loc_id`, `name`, `latitude`, `longitude`, `color`, `status`, `date`) VALUES
(1, 'fffff', '14.314452833499896', '121.0536436993980', 'green-dot.png', 'employee', '2022-06-08'),
(2, 'fffff', '14.3141409353654', '121.04936365199', 'green-dot.png', 'employee', '2022-06-15'),
(3, 'fffff', '14.3141409610195', '121.04999107485199', 'red-dot.png', 'employee', '2022-06-15'),
(1, 'fffff', '14.314452833499896', '121.0536436993980', 'green-dot.png', 'employee', '2022-06-08'),
(2, 'fffff', '14.3141409353654', '121.04936365199', 'green-dot.png', 'employee', '2022-06-15'),
(3, 'fffff', '14.3141409610195', '121.04999107485199', 'red-dot.png', 'employee', '2022-06-15'),
(0, 'hotel13224', '14.31414', '121.049991', 'green-dot.png', 'twyuwuu', '0000-00-00'),
(0, '13', '14.31414252626', '121.049252626991', 'purple-dot.png', '13', '0000-00-00'),
(0, 'OK', '14.285411', '121.0090022', 'purple-dot.png', 'sasasas', '0000-00-00'),
(0, 'Monti Budget HotelMonti Budget Hotel', '14.32831994', '121.0676533', 'purple-dot.png', 'National Highway,Brgy, Maduya, Carmona, 4116 Cavite', '0000-00-00'),
(0, 'Asiatel Inn', '14.32883305', '121.0680177', 'purple-dot.png', '2 Governor\'s Dr, Maduya, Carmona, Cavite', '0000-00-00'),
(0, 'Manila Southwood Manor', '14.31943176', '121.0408692', 'purple-dot.png', '829R+H88, Southwoods Ave, Carmona, 4116 Cavite', '0000-00-00'),
(0, 'The RD Plaza Hotel', '14.28541132', '121.0090022', 'purple-dot.png', 'Governor\'s Dr, Carmona, Cavite', '0000-00-00'),
(0, 'Monti Budget Hotel', '14.32831994', '121.0676533', 'purple-dot.png', 'National Highway,Brgy, Maduya, Carmona, 4116 Cavite', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `locations3`
--

CREATE TABLE `locations3` (
  `loc_id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `latitude` longtext NOT NULL,
  `longitude` longtext NOT NULL,
  `color` text NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations3`
--

INSERT INTO `locations3` (`loc_id`, `name`, `latitude`, `longitude`, `color`, `status`, `date`) VALUES
(1, 'rqwr', '14.3096288534252\r\n', '121.066275860\r\n', 'orange.png', 'employee', '2022-06-08'),
(1, 'rqwr', '14.3096288534252\r\n', '121.066275860\r\n', 'orange.png', 'employee', '2022-06-08'),
(2, 'wrt', '14.30923387401391', '121.065910565540\r\n', 'green.png', 'employee', '2022-06-08'),
(5, 'sam', '14.285411', '121.0090022', 'green-dot.png', '121.0090022', '0000-00-00'),
(7, 'add', '14.309628', '121.0662860', 'green-dot.png', 'aaaa', '0000-00-00'),
(0, 'add', '14.309628', '121.0662860', 'green-dot.png', 'aaaa', '0000-00-00'),
(0, 'add', '14.309628', '121.0662860', 'green-dot.png', 'aaaa', '0000-00-00'),
(0, 'addfffff', '14.309628', '121.0662860', 'green.png', 'aaaa', '0000-00-00'),
(0, 'addfffff', '14.309628', '121.0662860', 'green-dot.png', 'aaaa', '0000-00-00'),
(0, 'ana', '14.285411', '121.0090022', 'green-dot.png', 'sassa', '0000-00-00'),
(0, 'ana', '14.285411', '121.0090022', 'green-dot.png', 'sassa', '0000-00-00'),
(0, 'ESSIE', '14.285411', '121.0032022', 'green-dot.png', 'sasasasasa', '0000-00-00'),
(0, 'RDshop101', '14.2851566177', '121.002662690022', 'green-dot.png', 'sas heueuhdeuiu', '0000-00-00'),
(0, 'YELOW', '14.285411', '121.0090022', 'yellow-dot.png', 'YEL', '0000-00-00'),
(0, 'Alfamart Maduya', '14.32737349', '121.0669293', 'yellow-dot.png', '83G8+RQP, Paraiso Building, 4116 Governor\'s Dr, Maduya, Carmona, 4116 Cavite', '0000-00-00'),
(0, 'Dali Everyday Grocery', '14.31391008', '121.0529952', 'yellow-dot.png', '8373+F58, Purificacion, Carmona, Cavite', '0000-00-00'),
(0, '7 - Eleven - Carmona Municipal', '14.31371509', '121.056872', 'yellow-dot.png', 'J.M. Loyola Street, Brgy. Poblacion, 4116, Carmona, Cavite', '0000-00-00'),
(0, 'Kinnari Mini Mart', '14.29359843', '121.0466015', 'yellow-dot.png', 'Lantic Commercial Center, Carmona, Cavite', '0000-00-00'),
(0, 'Fluidz', '14.29187233', '121.0464065', 'yellow-dot.png', 'Carmona Estates, B9 L37, Phase 2 Kinnari Main Road, BRGY, Carmona, Cavite', '0000-00-00'),
(0, 'Belda School Supplies & General Merchandise', '14.29138119', '121.0458923', 'yellow-dot.png', '72RW+H94, Carmona, Cavite', '0000-00-00'),
(0, 'Mac Bride Boutique', '14.29153187', '121.0460815', 'yellow-dot.png', 'Ground Floor, Waltermart, Governor\'s Dr, Carmona, Cavite', '0000-00-00'),
(0, 'Mac Bride Boutique', '14.29153187', '121.0460815', 'yellow-dot.png', 'Ground Floor, Waltermart, Governor\'s Dr, Carmona, Cavite', '0000-00-00'),
(0, 'Mac Bride Boutique', '14.29153187', '121.0460815', 'yellow-dot.png', 'Ground Floor, Waltermart, Governor\'s Dr, Carmona, Cavite', '0000-00-00'),
(0, 'Mac Bride Boutique', '14.29153187', '121.0460815', 'yellow-dot.png', 'Ground Floor, Waltermart, Governor\'s Dr, Carmona, Cavite', '0000-00-00'),
(0, 'Mitsubishi Carmona', '14.31027684', '121.0384186', 'yellow-dot.png', 'Mitsubishi, 4116 Governor\'s Dr, Carmona, Cavite', '0000-00-00'),
(0, 'Purrfectly Cute Pet Shop', '14.29197337', '121.0448839', 'yellow-dot.png', 'Brgy, Carmona Estates, Blk 12 Lot 01 Kinnari 2 Extension, Carmona, Cavite', '0000-00-00'),
(0, 'BIG K Korean Store', '14.29377258', '121.0429101', 'yellow-dot.png', 'B21 L02 Phase 6, Carmona, Cavite', '0000-00-00'),
(0, 'The Generics Pharmacy', '14.29452929', '121.0475416', 'yellow-dot.png', 'CHRISTINE PEROCAN PROP, 1322 BRGY, Carmona, 4116 Cavite', '0000-00-00'),
(0, 'Lady South Tint', '14.31048701', '121.0382719', 'yellow-dot.png', '11921 Governor\'s Dr, Carmona, 4116 Cavite', '0000-00-00'),
(0, 'Ingco Tools', '14.31347', '121.04875', 'yellow-dot.png', 'Unit G01, INGCO Tools, Verdant Square, Governor\'s Dr, Carmona, 4116 Cavite', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `locations4`
--

CREATE TABLE `locations4` (
  `loc_id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `latitude` longtext NOT NULL,
  `longitude` longtext NOT NULL,
  `color` text NOT NULL,
  `ustatus` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locations4`
--

INSERT INTO `locations4` (`loc_id`, `name`, `latitude`, `longitude`, `color`, `ustatus`, `date`) VALUES
(0, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `locations44`
--

CREATE TABLE `locations44` (
  `loc_id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `latitude` longtext NOT NULL,
  `longitude` longtext NOT NULL,
  `color` text NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations444`
--

CREATE TABLE `locations444` (
  `loc_id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `latitude` longtext NOT NULL,
  `longitude` longtext NOT NULL,
  `color` text NOT NULL,
  `status` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `reg_date`) VALUES
(10, '00100054', 'anamarie.fernandez0001@gmail.com', '$2y$10$Wj2UIDXAyFSDVOAsT4y.cuhgxSB3yJbFDj6M.2a5LBZ2ZXOb/wi4W', '2024-04-30 02:17:08'),
(11, 'mei', 'mei@deped.com.ph', '$2y$10$wZLYtM0DLptUKfaf1SLtjeN9J0hr08JlA5YquRGIauKG2SzPiSIF2', '2024-04-30 05:26:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `loc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

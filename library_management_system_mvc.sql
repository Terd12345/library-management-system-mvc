-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2025 at 09:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_management_system_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `background_image` varchar(122) NOT NULL,
  `isbn` varchar(122) NOT NULL,
  `book_title` varchar(122) NOT NULL,
  `author` varchar(122) NOT NULL,
  `publisher` varchar(122) NOT NULL,
  `publication_year` date NOT NULL,
  `genre` varchar(122) NOT NULL,
  `language` varchar(122) NOT NULL,
  `description` varchar(122) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `background_image`, `isbn`, `book_title`, `author`, `publisher`, `publication_year`, `genre`, `language`, `description`, `status`, `created_at`) VALUES
(14, '../uploads/book_68380c9756e905.45322530_Screenshot (2).png', 'may nigger', 'tables', 'Kevin Mitnick', 'ako', '2003-02-10', 'comedy', 'english, japanese, tagalog', 'pasidf piajdsfiaspfoijasdpofijapsodifjaposidj f', 'unavailable', '2025-06-20 11:48:21'),
(15, '../uploads/book_6842afef33f166.08636802_Screenshot 2024-11-22 084114.png', '23459847598798', 'cheese knot', 'Kevin Mitnick', 'doreamon', '2003-02-10', 'educational', 'english, japanese, tagalog', 'ppfiapdif poaijdsofijapsdijfp aijsdpof jpaosidjf ', 'unavailable', '2025-06-20 13:00:31'),
(16, '../uploads/book_6842b3f5de5836.78759887_Screenshot 2024-10-06 154701.png', '70928345098740', 'avatar', 'Romeo V. Eustaquio III', 'Greene Robert', '2003-02-10', 'comedy', 'english, japanese, tagalog', 'avatartar', 'unavailable', '2025-06-20 11:48:26'),
(17, '../uploads/book_68457892ab84e2.21033835_Screenshot 2024-10-06 154701.png', '9830948203832', 'kalbonatics', 'Romeo V. Eustaquio III', 'doreamon', '2003-02-10', 'comedy, action, hentai', 'english, japanese, tagalog', 'ao isdfpiasdpfoi aspodif apsoidhfpoasi dpoaisd poashif', 'available', '2025-06-26 01:34:23'),
(18, '../uploads/book_684578d23de124.32213067_Screenshot 2024-12-05 093124.png', '789239487239478', 'hagravald', 'jin kazamas', 'potato', '2003-04-02', 'comedy, drama', 'engslish, tagalog', 'aosdif paoisdpoias dpofi apsodifpoaisd poihasdfpoihasdpofi hasod if aposdihf', 'unavailable', '2025-06-30 06:48:25'),
(19, '../uploads/book_684d51c862b3d9.48284244_Screenshot 2024-10-04 092755.png', '2340298098234', 'piepiepie', 'Terd', 'Romeyow', '2003-02-10', 'comedy, action', 'Love', 'AHHAHAHHAHHHA🤣', 'available', '2025-06-30 07:05:11'),
(20, '../uploads/book_6855564b6796b5.96332759_Screenshot 2024-10-29 102515.png', '129439809834', 'Hypocrite', 'Kevin Mitnick', 'Greene Robert', '2003-02-10', 'comedy', 'English', 'aposdijf oaisjdpfoaij pdoija poijspoijf poiajspodijpoij ', 'unavailable', '2025-06-20 13:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_archive`
--

CREATE TABLE `borrow_archive` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `borrowed_at` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `returned_at` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow_archive`
--

INSERT INTO `borrow_archive` (`id`, `book_id`, `student_id`, `borrowed_at`, `due_date`, `returned_at`, `status`) VALUES
(19, 18, 9, '2025-06-20 10:12:03', '2025-07-04 10:12:03', '2025-06-20 10:12:20', 'returned'),
(20, 19, 9, '2025-06-20 10:13:22', '2025-07-04 10:13:22', '2025-06-20 14:31:57', 'returned'),
(21, 18, 6, '2025-06-20 11:48:46', '2025-07-04 11:48:46', '2025-06-26 03:36:14', 'returned'),
(22, 17, 15, '2025-06-20 12:40:10', '2025-07-04 12:40:10', '2025-06-20 13:48:10', 'returned'),
(25, 20, 9, '2025-06-20 14:39:59', '2025-07-04 14:39:59', '2025-06-20 14:59:52', 'returned'),
(27, 19, 9, '2025-06-20 15:00:37', '2025-07-04 15:00:37', '2025-06-30 09:05:11', 'returned'),
(29, 17, 9, '2025-06-20 15:04:49', '2025-07-04 15:04:49', '2025-06-20 15:05:25', 'returned'),
(30, 17, 13, '2025-06-23 11:42:23', '2025-07-07 11:42:23', '2025-06-23 11:42:51', 'returned'),
(31, 17, 10, '2025-06-23 13:14:55', '2025-07-07 13:14:55', '2025-06-26 03:34:23', 'returned');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_transactions`
--

CREATE TABLE `borrow_transactions` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `borrowed_at` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `returned_at` datetime DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `borrow_transactions`
--

INSERT INTO `borrow_transactions` (`id`, `book_id`, `student_id`, `borrowed_at`, `due_date`, `returned_at`, `status`) VALUES
(23, 14, 15, '2025-06-20 13:48:21', '2025-07-04 13:48:21', NULL, 'borrowed'),
(24, 16, 15, '2025-06-20 13:48:26', '2025-07-04 13:48:26', NULL, 'borrowed'),
(26, 15, 9, '2025-06-20 15:00:31', '2025-07-04 15:00:31', NULL, 'borrowed'),
(28, 20, 9, '2025-06-20 15:04:42', '2025-07-04 15:04:42', NULL, 'borrowed'),
(32, 18, 6, '2025-06-30 08:48:25', '2025-07-14 08:48:25', NULL, 'borrowed');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(11) NOT NULL,
  `librarian_id` varchar(122) NOT NULL,
  `username` varchar(122) NOT NULL,
  `full_name` varchar(122) NOT NULL,
  `password` varchar(122) NOT NULL,
  `sex` enum('Male','Female','','') NOT NULL,
  `dob` date NOT NULL,
  `contact_num` varchar(122) NOT NULL,
  `email` varchar(122) NOT NULL,
  `role` varchar(122) NOT NULL,
  `date_hired` date NOT NULL,
  `profile_photo` varchar(122) NOT NULL,
  `emergency_contact` varchar(122) NOT NULL,
  `emergency_number` varchar(122) NOT NULL,
  `education` varchar(122) NOT NULL,
  `certificates` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `librarian_id`, `username`, `full_name`, `password`, `sex`, `dob`, `contact_num`, `email`, `role`, `date_hired`, `profile_photo`, `emergency_contact`, `emergency_number`, `education`, `certificates`) VALUES
(3, 'lib001', 'terd', 'Terd Librarian', '$2y$10$4NljFoBDVtpmSkMbff2Rge4vH6gp2r2PBTQ6kSnwH4pzLIAdUO0S6', 'Male', '2025-05-15', '098239489234', 'terd@gmail.com', 'admin', '2025-05-21', 'melrose', 'Jane Doe', '098230985778', 'BSIS', 'wala');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `stud_id` varchar(250) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year_level` varchar(50) NOT NULL,
  `library_card` varchar(50) DEFAULT NULL,
  `valid_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `stud_id`, `username`, `password`, `full_name`, `dob`, `gender`, `contact`, `email`, `address`, `city`, `province`, `postal_code`, `student_id`, `department`, `year_level`, `library_card`, `valid_id`, `created_at`) VALUES
(6, '2025-0002', 'terd', '$2y$10$1BFrOOY6jKT9LhNk1wUSIebjifBEb6.JIRSQXjSKh/P1TTgOX6H4a', 'Romeo V. Eustaquio III', '2003-02-10', 'Male', '0928304982334', 'romeov.eustaquioiii@gmail.com', 'block 55 lot 15 bautista property', 'cavite', 'cavite', '4114', '12313', 'BSIS', '4th year', '', 'uploads/Screenshot 2024-09-27 155313.png', '2025-05-14 06:23:28'),
(9, '2025-0003', 'jeca', '$2y$10$jIo5nir7.5It3h6tnq8oHuxK0M8hpx2SgPwblOvhhs3w0hK1FORIK', 'Jerica Mae Salcedo', '2003-02-10', 'Female', '0928304982334', 'jeca@gmail.com', 'block 55 lot 15 bautista property', 'cavite', 'cavite', '4114', '12313', 'Tourism', '4th year', '09', 'uploads/Screenshot 2024-09-27 155313.png', '2025-05-19 03:24:42'),
(10, '2025-0004', 'banito', '$2y$10$EgupuaPbt5hhLpwt8VZ6q.2xJJVYWVp7VIMARzmNBjUA8zWiLOF/.', 'banitooo', '2003-02-10', 'Female', '0928309384234', 'coco@gmail.com', 'block 55 lot 15 bautista property', 'cavite', 'cavite', '4114', '12313', 'BSIS', '4th year', '09', 'uploads/Screenshot 2024-09-27 155313.png', '2025-05-19 03:30:33'),
(13, '2025-0007', 'chicitita', '$2y$10$a20VzC6pk/JCVhGYemihGO0cqY4AO6A7CusfbFswOZYAPvccDioDW', 'chikitita', '2003-02-10', 'Female', '0928304982334', 'chicitita@gmail.com', 'block 55 lot 15 bautista property', 'cavite', 'cavite', '4114', '1231312', 'BSIS', '4th year', '09', 'uploads/Screenshot 2024-09-27 153419.png', '2025-05-29 04:46:35'),
(14, '2025-0008', 'terd', '$2y$10$5sovIbRO5twaUhjO3oE/y.gJGEnf0O2h2hge.ntZufpO5P6OS5EZK', 'Romeo V. Eustaquio III', '2025-05-05', 'Male', '0928304982334', 'kalbo@gmail.com', 'block 55 lot 15 bautista property', 'cavite', 'cavite', '4114', '12313', 'BSIS', '4th year', '09', 'uploads/Screenshot 2024-09-27 153419.png', '2025-05-30 03:00:08'),
(15, '2025-0009', 'weewoo', '$2y$10$EdQvNRPP9bYTMvPL5Gbm8O/b1ooHdtNCD2zOq56Q7jcmT2KrW4mTm', 'eva elfie', '2003-02-10', 'Male', '0928304982334', 'eva@gmail.com', 'block 55 lot 15 bautista property', 'cavite', 'cavite', '4114', '12313', 'BSIS', '4th year', '09', 'uploads/3.jpg', '2025-06-08 08:57:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_archive`
--
ALTER TABLE `borrow_archive`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `borrow_transactions`
--
ALTER TABLE `borrow_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `borrow_archive`
--
ALTER TABLE `borrow_archive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `borrow_transactions`
--
ALTER TABLE `borrow_transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow_transactions`
--
ALTER TABLE `borrow_transactions`
  ADD CONSTRAINT `borrow_transactions_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `borrow_transactions_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `registrations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 03:48 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csejudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Dr. Md. Imdadul Islam', 'imdad@juniv.edu', '$2y$10$bkwuGmc2NGBOt0j0YO7Aru0.XlVmljI0AusquNY9qrmvsE1yBdnIW', NULL, '2018-07-09 11:34:23', '2018-07-09 11:34:23'),
(5, 'Dr. Jugal Krishna Das', 'jugal@juniv.edu', '$2y$10$DV4Pj8xBF8AwxP0moC7HUewiZ.WHzal1J.fr7XOwCw.6mUlKdXyU.', NULL, '2018-07-09 11:40:45', '2018-07-09 11:40:45'),
(6, 'Dr. Mohammad Hanif Ali', 'hanif_ju3@juniv.edu', '$2y$10$VoKayxyqmmjtFPh/hOuw0.1iGrHqzs1fTwWp4103eBmyUKyhGigby', NULL, '2018-07-09 11:43:57', '2018-07-09 11:43:57'),
(7, 'Dr. Mohammad Zahidur Rahman', 'rmzahid@juniv.edu', '$2y$10$Rf9yzD2aJ0gr0/sFWzcKZOHWLpfjOOvH0Xe/fLYRiI6h4Ms3GYoIa', NULL, '2018-07-12 22:24:16', '2018-07-12 22:24:16'),
(9, 'Liton jude Rozario', 'litonrozario@juniv.edu', '$2y$10$Vr.kCSAYcR/xoXc7yAcWXOXzKCA/0EIsLR7hcn6EuU3NoH8KrPUYi', NULL, '2018-07-12 22:29:34', '2018-07-12 22:29:34'),
(10, 'Md. Abul Kalam Azad', 'azad_ju3@juniv.edu', '$2y$10$p3GKZboFLg8ACrIWQhEo8Oh8WowmvucPzmNE4e1NVTGugX2z9CRJe', NULL, '2018-07-12 22:32:36', '2018-07-12 22:32:36'),
(11, 'Dr. Md. Humayun Kabir', 'hkabir@juniv.edu', '$2y$10$jFBQU7Wn1sUAq8xhb0ILb.eNPjMl0Ec.jUkEb1Qj/QYuLY2PqWqfa', NULL, '2018-07-12 22:34:18', '2018-07-12 22:34:18'),
(12, 'Dr. Mohammad Shorif Uddin', 'shorifuddin@juniv.edu', '$2y$10$FpAGiHWEc9CIZlQ1hygE/O1hjhOeTxWbqwKoeCzMwwKqlXoyPBwri', NULL, '2018-07-12 23:29:48', '2018-07-12 23:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `role_id`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-07-09 17:10:30', '2018-07-09 17:10:30'),
(3, 2, 5, NULL, NULL),
(4, 2, 6, NULL, NULL),
(5, 2, 7, NULL, NULL),
(6, 1, 4, NULL, NULL),
(7, 2, 8, NULL, NULL),
(8, 2, 9, NULL, NULL),
(9, 2, 10, NULL, NULL),
(10, 2, 11, NULL, NULL),
(11, 2, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `course_code`, `credit`, `year`, `semester`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Mathematics I (Calculus and Coordinate Geometry)', 'CSE101', 3, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:01:50', '2018-07-13 03:01:50'),
(2, 'Physics (Electricity, Magnetism and Optics)', 'CSE103', 3, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:02:16', '2018-07-13 03:02:16'),
(3, 'Electronics Devices and Circuits', 'CSE105', 3, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:02:43', '2018-07-13 03:02:43'),
(4, 'Computer Systems and Applications', 'CSE107', 3, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:03:05', '2018-07-13 03:03:05'),
(5, 'Electrical Circuits', 'CSE153', 3, '1st', '2nd', '1st Year 2nd Semester', '2018-07-13 03:03:36', '2018-07-13 03:03:36'),
(6, 'Communicative English', 'CSE 101', 3, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:04:01', '2018-07-13 03:04:01'),
(7, 'Viva-Voce', 'CSE100', 1, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:04:41', '2018-07-13 03:04:41'),
(8, 'Mathematics II (Matrix, Ordinary and Partial Differential Equations and Series Solutions)', 'CSE151', 3, '1st', '2nd', '1st Year 2nd Semester', '2018-07-13 03:05:09', '2018-07-13 03:05:09'),
(9, 'Economics', 'CSE 111', 2, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:06:36', '2018-07-13 03:06:36'),
(10, 'Electrical Circuits Laboratory', 'CSE108', 1, '1st', '2nd', '1st Year 2nd Semester', '2018-07-13 03:07:11', '2018-07-13 03:07:11'),
(11, 'Electronics Devices and Circuits Laboratory', 'CSE154', 1, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:08:01', '2018-07-13 03:08:01'),
(12, 'Engineering Drawing Laboratory', 'CSE114', 1, '1st', '1st', '1st Year 1st Semester', '2018-07-13 03:08:31', '2018-07-13 03:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `body`, `date`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'ACM ICPC', '<p>ACM ICPC</p>', '2018-07-14 06:00:00', 'public/teacher/c73SjHil6DTCKOO0yOLpIUaEP7GnGCGn6uhg1265.jpeg', '2018-07-11 14:15:01', '2018-07-11 14:15:01'),
(2, 'Bangladesh International Geographical Conference - 2018', '<p>Bangladesh National Geographical Association (BNGA) was found in a meeting in Shilpokala Building, Dhaka on 23 July in 1972 to spread the geographical knowledge and to enhance the professional status of geographers. In the same year the constitution of the association has been written where the aim of the association, membership, voting system, executive association, duties of member have been mentioned. This association began with only 33 executive members. At present lifetime member is 364.</p>\r\n\r\n<p>Bangladesh National Geographical Association continuously work for fulfilling its aim and objectives, mainly to help the fellow Geographers to develop geographic knowledge and build up relationship among the geographers and publishing Bengali and English journals from the research of national and international geographers. The first and second anniversary conference of this association was held at Jahangirnagar University where except the prominent geographers of the Indian sub-continent, 18 specialist geographers from all over the world attended of this conference. In this conference had a broad discussion on flood, green revolution and problems of teaching geography got prominence.</p>\r\n\r\n<p>The second conference was held at Rajshahi University in 1976. After completing this conference, an expedition was conducted under the leadership of Prof. M. I. Chowdhury to investigate the environment of Nijhum Island at Hatia. The third conference was held at Bangladesh University of Engineering and Technology (BUET) in 1981. The focal theme of the third conference was Environment and Development. The fourth conference was also held in Bangladesh University of Engineering and Technology (BUET). Then the fifth and sixth conferences were held at Rajshahi University and seventh and eight conferences were held at Jahangirnagar University. The 9th conference was held in Dhaka. The 10th conference was held at Bangladesh Rural Development Academy in Comilla with the focal theme on Land, Environment and Development. In 2005, the 11th conference of BNGA was held in Dhaka and the focal theme of this conference was Importance of Geographical Study and Knowledge for National Development. 12th Conference was held in Jahangirnagar University and the focal theme was Land Use and Environmental Change: Challenges Ahead. 13th Conference was held in Jahangirnagar University and the focal theme was Environment Degradation: Issues and Challenges in 17 April, 2010. The 14th conference was also held at Jahangirnagar University and the conference title was Geography and Environment: Challenges in 21st Century in 5th January, 2013.</p>\r\n\r\n<p>Besides completing the second anniversary, a daylong seminar was arranged in Khulna on Coastal Environment and Development which held on 31st May, 1990. To keep pace with the sequence of development a daylong seminar was held on Land Planning and Development at Pangsa on 26 January, 2002. A local conference was held in Chittagong in 2004. The theme of this conference was Different steps of Geographical Study in Bangladesh.</p>\r\n\r\n<p>On the occasion of International Environment day a daylong seminar on the Wetland of Bangladesh was arranged at Jagannath University in January, 2006.&nbsp; The title of this seminar was &ldquo;Filling wetland and threatened environment&rdquo;.&nbsp;<br />\r\nWith the cordial help of Shahjalal University of Science &amp; Technology 7th January 2008, Monday, a daylong seminar on &lsquo;Sylhet Region Hoar: Environment, Landscape, and Bio-diversity&rsquo; was arranged. 1-2 June, 2008 Monday in Jahangirnagar University seminar room, a two days national seminar on &lsquo;Climate Change: Adaptation and Mitigation,&rsquo; was jointly arranged by BARCIK and BNGA. A daylong seminar on Urban Sanitation: Issues and Challenges was held in 27th August 2016, at Pabna University of Science and Technology, with the help of Bangladesh National Geographical Association (BNGA).</p>\r\n\r\n<p><a href="http://www.juniv.edu/file/5486" rel="noopener" target="_blank"><em><strong>1.Click Here to view Conference Schedule</strong></em></a><br />\r\n<a href="http://www.juniv.edu/file/5487" rel="noopener" target="_blank"><em><strong>2.Click Here to Download Pre-Registration Form</strong></em></a><br />\r\n<a href="http://www.juniv.edu/file/5488"><em><strong><em><strong>3.Click Here to Download Membership Form</strong></em></strong></em></a></p>', '2018-07-28 06:00:00', 'public/teacher/Cl3t67mGuYBHxvOSJFlff6P7IsJOXFoAReueq9D7.jpeg', '2018-07-11 21:54:10', '2018-07-11 21:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`id`, `teacher_id`, `title`, `url`, `description`, `type`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Recovery of RGB Image from Its Halftoned Version based on DWT', 'https://sites.google.com/site/ijcsis/vol-16-no-4-apr-2018', '<p><strong>Tasnim Ahmed, Md. Imdadul Islam and Md. Habibur Rahman,&nbsp; International Journal of Computer Science and Information Security, vol. 16 no. 4,&nbsp;&nbsp; pp. 145-150, APR 2018</strong></p>', 4, 1, '2018-07-12 16:36:53', '2018-07-12 16:36:53'),
(3, 1, 'Human Face Detection Based on Combination of Logistic Regression, Distance of Facial Components and Principal Component Analysis', 'https://sites.google.com/site/ijcsis/vol-16-no-2-feb-2018', '<p>Anup Majumder,&nbsp; Md. Mezbahul Islam,&nbsp; Rahmina Rubaiat and&nbsp; Md. Imdadul Islam, International Journal of Computer Science and Information Security, vol. 16, &nbsp;no. 2, &nbsp;pp. 34-41, FEB 2018</p>', 4, 1, '2018-07-12 16:47:07', '2018-07-12 16:47:07'),
(4, 1, 'Optimum cell-Site Positioning Model for Cellular Network by Grid line Shifting Method', 'https://ieeexplore.ieee.org/stamp/stamp.jsp?arnumber=818332', '<p><strong>Md. Imdadul Islam&nbsp;</strong>and S. Hossain<strong>,&nbsp;</strong>&nbsp;IEEE Region 10 Conference&#39; TENCON&#39;, vol.1, pp.1-3, 1999</p>', 3, 1, '2018-07-12 16:48:43', '2018-07-12 16:48:43'),
(5, 1, 'Optimum Cell-site Positioning Model for Cellular Network by Linear Regression of Coverage Border', 'http://www.juniv.edu/teachers/imdad', '<p><strong>Md. Imdadul Islam&nbsp;</strong>and S. Hossain<strong>,&nbsp;</strong>&nbsp;TENCON&#39;2000, Kuala Lumpur, pp. 191-194,&nbsp; 25-27 Sept&#39;2000. 0-7803-6355-8/00/$10.00(C) 2000 IEEE</p>', 3, 1, '2018-07-12 16:50:42', '2018-07-12 16:50:42'),
(6, 1, 'Telecommunications Traffic and Network Planning', 'http://www.juniv.edu/teachers/imdad', '<p>Authors:<strong>&nbsp;Md. Imdadul Islam&nbsp;</strong>and Liton Jude Rozario</p>\r\n\r\n<p>Christian Communications Centre</p>\r\n\r\n<p>Pratibeshi Prokashani, ISBN: 984-300-002226-6, 2008</p>', 2, 1, '2018-07-12 16:52:15', '2018-07-12 16:53:45'),
(7, 1, 'Laboratory Works on Electronics and Communications', 'http://www.juniv.edu/teachers/imdad', '<p>Authors:<strong>&nbsp;Md. Imdadul Islam&nbsp;</strong>and M. Ruhul Amin Khandaker</p>\r\n\r\n<p>Edited by: Dr. Md. Habibur Rahman</p>\r\n\r\n<p>CBO Publications (pvt.) Ltd., ISBN: 984-70062-0008-6, July&rsquo; 2007</p>', 2, 1, '2018-07-12 16:54:45', '2018-07-12 16:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `journal_types`
--

CREATE TABLE `journal_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal_types`
--

INSERT INTO `journal_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Article', NULL, NULL),
(2, 'Book', NULL, NULL),
(3, 'Conference Paper', NULL, NULL),
(4, 'Journal', NULL, NULL),
(5, 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_24_150921_create_admins_table', 1),
(4, '2018_06_24_151044_create_teachers_table', 1),
(6, '2018_06_24_151157_create_staff_designations_table', 1),
(7, '2018_06_24_151225_create_teacher_designations_table', 1),
(8, '2018_06_24_151300_create_teacher_educations_table', 1),
(9, '2018_06_24_151330_create_teacher_experiences_table', 1),
(10, '2018_06_24_151452_create_courses_table', 1),
(11, '2018_06_24_151516_create_journals_table', 1),
(12, '2018_06_24_151539_create_notices_table', 1),
(13, '2018_06_24_151557_create_news_table', 1),
(15, '2018_06_30_142315_create_journal_types_table', 1),
(16, '2018_07_08_055242_create_roles_table', 1),
(17, '2018_07_09_163640_create_admin_roles_table', 1),
(19, '2018_06_24_151108_create_staff_table', 1),
(21, '2018_06_24_151620_create_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `url`, `created_at`, `updated_at`) VALUES
(2, 'Undergraduate Admission 2017-2018', 'https://ju-admission.org/?keyword=&type=NEWS', '2018-07-11 21:48:00', '2018-07-11 21:48:00'),
(3, 'Registered Graduate Online Registration', 'https://ju-regigraduate.org/apply?keyword=&type=NEWS', '2018-07-11 21:48:48', '2018-07-11 21:48:48');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `file_path`, `created_at`, `updated_at`) VALUES
(1, 'PMSCS Program Examination Notice Summer 2018', 'public/teacher/9NGQiqNqXqah3qgVIK48h9qfEAd3MGk4ZP7MqtpK.pdf', '2018-07-11 15:03:17', '2018-07-11 15:03:17'),
(2, 'PMSCS Research Project Defense Spring-2018 (For Intake Summer-2017)', 'public/teacher/XiMQS41AyyCTOvKUlw1gMcy6rKVcNTljCPsiTtUm.pdf', '2018-07-11 15:06:21', '2018-07-11 15:06:21'),
(3, 'PMSCS Program Retake Examination Schedule Spring 2018', 'public/teacher/0Vrnes6ixLLFb3oo1pLHilKs8SVjiSm8rcL7p9Lc.pdf', '2018-07-11 15:07:51', '2018-07-11 15:07:51'),
(4, 'PMSCS Program Notice Summer 2018', 'public/teacher/uf9IrnWiPgUGHtBLrIYO4DdpVcEExK67oGp4BsNq.pdf', '2018-07-11 15:08:41', '2018-07-11 15:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, NULL),
(2, 'Teacher', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `experience`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Mamun Rashid', 4, 1, 'public/teacher/tSKOzqqfvp0YCxe6ouL3zWCbknxQ84vh7KHht2a6.jpeg', '2018-07-10 21:37:59', '2018-07-11 14:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `staff_designations`
--

CREATE TABLE `staff_designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_designations`
--

INSERT INTO `staff_designations` (`id`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Office Assistant', NULL, NULL),
(2, 'Accountant', NULL, NULL),
(3, 'Librarian', NULL, NULL),
(4, 'Peon', NULL, NULL),
(5, 'Plumber', NULL, NULL),
(6, 'Electrician', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` int(11) DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `designation`, `mobile`, `phone`, `fax`, `email`, `interest`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Md. Imdadul Islam', 1, '+880-(0)1818729702', '+880(2) 7710750 Ext. 1571', '+880-2-7791052', 'imdad@juniv.edu', 'network traffic, wireless communications, wavelet transform, OFDMA, WCDMA, adaptive filter theory and array antenna system', 'public/teacher/CpejTLsv8IKscCuD80kxFzH723EcIiSWplxb0Kul.jpeg', '2018-07-09 11:34:23', '2018-07-10 19:59:28'),
(2, 'Dr. Jugal Krishna Das', 3, '01***********', '880-2-7791045-51', '+880-2-7791052', 'jugal@juniv.edu', 'Computer Networks, Natural Language Processing, Software Engineering.', 'public/teacher/5iUXDQ3BP6fzREp9tSWR2FLQlYIWVxVhL7sU0omT.jpeg', '2018-07-09 11:40:45', '2018-07-12 23:19:24'),
(3, 'Dr. Mohammad Hanif Ali', 3, '01***********', '880-2-7791045-51', '+880-2-7791052', 'hanif_ju3@juniv.edu', 'Simulation and Modeling, Neural Network, Computer Interfacing', 'public/teacher/0W5ooY1mrZDWZruTbAUrm485W4ogDJNtgOBGaCCq.jpeg', '2018-07-09 11:43:57', '2018-07-12 23:21:14'),
(5, 'Dr. Mohammad Zahidur Rahman', 3, '01***********', '880-2-7791045-51', '+880-2-7791052', 'rmzahid@juniv.edu', 'E-Commerce, Computer Security, E-Governance, Communication', 'public/teacher/huRpBE7MlJb0KhbG3djlLaqzRuWPFzifMJtfmbe5.jpeg', '2018-07-12 22:24:16', '2018-07-12 23:14:40'),
(7, 'Liton jude Rozario', 3, '01***********', '880-2-7791045-51', '+880-2-7791052', 'litonrozario@juniv.edu', 'Network traffic, Image processing, Machine Learning', 'public/teacher/8KsAaNGSlDFWeZXvMsnxsn1OC3gCLXggsHRYnrqf.jpeg', '2018-07-12 22:29:35', '2018-07-12 23:23:07'),
(8, 'Md. Abul Kalam Azad', 2, '01***********', '880-2-7791045-51', '+880-2-7791052', 'azad_ju3@juniv.edu', 'Computer Networks, Natural Language Processing, Software Engineering.', 'public/teacher/WPD4Oesg6xrlb6RDCnohTVgGIRDR8dKfcpN0lGSH.jpeg', '2018-07-12 22:32:36', '2018-07-12 23:15:50'),
(9, 'Dr. Md. Humayun Kabir', 3, '01***********', '880-2-7791045-51', '+880-2-7791052', 'hkabir@juniv.edu', 'Data Mining, Automatic Program Construction, Software Architecture, Program Transformation, Database Systems', 'public/teacher/EflfBwGW3DOfxzEQTunNkG0Bt474kMCNmKX7WYu3.jpeg', '2018-07-12 22:34:18', '2018-07-12 23:09:37'),
(10, 'Dr. Mohammad Shorif Uddin', 3, '01***********', '880-2-7791045-51', '+880-2-7791052', 'shorifuddin@juniv.edu', 'Image Analysis and Computer Vision, Image Velocimetry, Image Restoration and Reconstruction, Intell', 'public/teacher/XF7xj0LDmB1xK3Ig6GuoN2cIj80gS91gJySoytST.jpeg', '2018-07-12 23:29:48', '2018-07-12 23:31:03');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_designations`
--

CREATE TABLE `teacher_designations` (
  `id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_designations`
--

INSERT INTO `teacher_designations` (`id`, `designation`, `created_at`, `updated_at`) VALUES
(1, 'Chairman & Professor', NULL, NULL),
(2, 'Coordinate & Professor', NULL, NULL),
(3, 'Professor', NULL, NULL),
(4, 'Associate Professor', NULL, NULL),
(5, 'Assistant Professor', NULL, NULL),
(6, 'Lecturer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_educations`
--

CREATE TABLE `teacher_educations` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_educations`
--

INSERT INTO `teacher_educations` (`id`, `teacher_id`, `degree`, `institution`, `result`, `achievement`, `created_at`, `updated_at`) VALUES
(1, 1, 'B.Sc. Engg.', 'BUET', NULL, NULL, '2018-07-12 10:47:51', '2018-07-12 11:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_experiences`
--

CREATE TABLE `teacher_experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from` year(4) DEFAULT NULL,
  `to` year(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_experiences`
--

INSERT INTO `teacher_experiences` (`id`, `teacher_id`, `designation`, `organization`, `from`, `to`, `created_at`, `updated_at`) VALUES
(5, 1, 'Assistant Engineer', 'Sheba Telecom (Pvt.) LTD', 1994, 1996, '2018-07-12 14:39:34', '2018-07-12 14:39:34'),
(6, 1, 'Teacher', 'Jahangirnagar University', 1996, 2018, '2018-07-12 14:41:33', '2018-07-12 14:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `journals_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `journal_types`
--
ALTER TABLE `journal_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_designations`
--
ALTER TABLE `staff_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `teacher_designations`
--
ALTER TABLE `teacher_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_educations`
--
ALTER TABLE `teacher_educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_educations_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `teacher_experiences`
--
ALTER TABLE `teacher_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_experiences_teacher_id_foreign` (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `journal_types`
--
ALTER TABLE `journal_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff_designations`
--
ALTER TABLE `staff_designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `teacher_designations`
--
ALTER TABLE `teacher_designations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `teacher_educations`
--
ALTER TABLE `teacher_educations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `teacher_experiences`
--
ALTER TABLE `teacher_experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_educations`
--
ALTER TABLE `teacher_educations`
  ADD CONSTRAINT `teacher_educations_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_experiences`
--
ALTER TABLE `teacher_experiences`
  ADD CONSTRAINT `teacher_experiences_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

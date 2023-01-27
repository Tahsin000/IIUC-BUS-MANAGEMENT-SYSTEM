-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2023 at 05:25 AM
-- Server version: 10.5.18-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toitoi_iiucbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_password`, `created_at`, `updated_at`) VALUES
('ad-123', '202cb962ac59075b964b07152d234b70', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE `bus_info` (
  `bus_license` varchar(255) NOT NULL,
  `student_capacity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`bus_license`, `student_capacity`, `created_at`, `updated_at`) VALUES
('চট্টমেট্রো-ব ১৫-৭৫৩৮', '60', NULL, NULL),
('চট্টমেট্রো-ছ ১১-৭৫৩৯', '50', NULL, NULL),
('চট্টমেট্রো-ব ১৫-৭৫৪০', '40', NULL, NULL),
('চট্টমেট্রো-ব ১৪-৭৭৪১', '40', NULL, NULL),
('চট্টমেট্রো-ঝ ১৫-৭৫৪২', '50', NULL, NULL),
('চট্টমেট্রো-ব ১২-৩৪৭৫', '40', NULL, NULL),
('চট্টমেট্রো-ব ১৩-৭৫৪৪', '60', NULL, NULL),
('চট্টমেট্রো-ব ১৭-৭৫৪৬', '60', NULL, NULL),
('চট্টমেট্রো-ব ১১-৭৫৪৭', '50', NULL, NULL),
('চট্টমেট্রো-ব ১৫-৭৫৫০', '50', NULL, NULL),
('চট্টমেট্রো-ব ১৭-৭৫৫১', '40', NULL, NULL),
('চট্টমেট্রো-ব ১৫-২৫৫৭', '60', NULL, NULL),
('চট্টমেট্রো-ব ১৬-৭৫৫৩', '50', NULL, NULL),
('চট্টমেট্রো-ব ১৫-৭৫৫৪', '40', NULL, NULL),
('চট্টমেট্রো-ঝ ১০-৭৫৫৫', '50', NULL, NULL),
('চট্টমেট্রো-ব ১২-৬৫৫৭', '60', NULL, NULL),
('চট্টমেট্রো-ব ১৩-৭৫৫৭', '50', NULL, NULL),
('চট্টমেট্রো-ব ১৫-৭৫৫৮', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৫৯', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৪-০৬৫৭', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৬১', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৮-৭২৬৫', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৬৩', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৮-৭৫৬৪', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৬৫', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১১-৫৭৬৬', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৬৭', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৬৮', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১২-৭৫৯৬', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৭০', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৭১', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৪-৭৭২৭৫', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৭৩', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৭৪', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৭৫', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৭৬', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৯-৭৭৭৫', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৭৮', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৭৯', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১১-৮০৭৫', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৮১', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৮২', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৩-৩৮৫৭', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৮৪', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৬-৮৫৭৫', '60', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১৫-৭৫৮৬', '50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('চট্টমেট্রো-ব ১১-১১৮৭', '40', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `driver_info`
--

CREATE TABLE `driver_info` (
  `driver_id` int(10) UNSIGNED NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `driving_license` varchar(255) NOT NULL,
  `driver_phone` varchar(255) NOT NULL,
  `driver_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_info`
--

INSERT INTO `driver_info` (`driver_id`, `driver_name`, `driving_license`, `driver_phone`, `driver_picture`, `created_at`, `updated_at`) VALUES
(2, 'Abul kashem', 'CG0121788L00004', '8801157681654', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Karim abdullah', 'NK0001441C00007', '8801151766871', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Zafor', 'JS0013011C00001', '8801153144612', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Hakim Mia', 'DK0791161L00001', '8801158862458', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Abdullah mamun', 'NK0001441C00002', '8801151428045', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Shakil khan', 'CG0121788L00003', '8801152198430', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Mohammad Joshim', 'DK0791161L00004', '8801153488651', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Leakot hossain', 'CG012788L00006', '8801152914442', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Abdul Rahim', 'CG012788L00070', '8801153466073', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Mujaher islam', 'CG012878L00008', '8801152335355', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Idris mia', 'CG017288L00001', '8801153514578', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Mir kashem', 'CG012788L11007', '8801156024382', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Mohammad hanif', 'JS012788L00011', '8801151499165', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Babul chowdhury', 'CG012788L00017', '8801151198334', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Abdul hakim', 'CG012799N00013', '8801151454657', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Babul mia', 'DK012788L00041', '8801153791331', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Bulbul ahmed', 'CG012788L12315', '8801155688147', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Siddique akber', 'CG012788L00016', '8801158389362', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Ibrahim', 'NK012788L00071', '8801153718053', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Isak ahmed', 'CG012788L00018', '8801152955221', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Shafiul alam', 'CG072188L00091', '8801157298091', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, ' Muhammad Tahsin', 'CG012788L00020', '8801157739612', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Adnan mahmud', 'CG012788L01033', '8801158447181', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Shofiq abdullah', 'CG012788L00022', '8801153439241', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Shahriar mahian', 'JS012788L11132', '8801156331532', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Mostaq ahmed', 'CG012788L00024', '8801156002186', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Abdullah shobuj', 'CG012788L00052', '8801153332853', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Muhammad ali', 'DK012788L00026', '8801159351361', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Saiful azam', 'CG012788L00027', '8801159441289', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Liton chakraborti', 'CG012788L00028', '8801156073812', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Habib mia', 'CG012788L00092', '8801711029955', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Nurul islam', 'CG012788L00030', '8801711135165', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Amju mia', 'NK012788L000203', '8801711535065', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Showkot ali', 'CG012788L00032', '8801715105642', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Saddam hossain', 'CG072188L00003', '8801819242451', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Mohammad monsur', 'CG012788L00034', '8801711545007', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Hashem ali', 'CG012788L000353', '8801711127152', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Faruque islam', 'CG012788L00036', '8801717270447', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Forkanul islam', 'DK012788L01137', '8801711832418', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Asad munshi', 'JS012788L000983', '8801711842067', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Abdullah', 'CG012788L00039', '8801911340999', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Moshiur Rahman', 'CG012788L40000', '8801819501661', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Sabbir ahmed', 'CG012788K00410', '8801716115660', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Jowel', 'CG012788L00042', '8801711920920', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Amdadul haque', 'CG088127L00034', '8801711004897', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Tito', 'CG012788L00044', '8801711848699', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Emon shahriar', 'DK012788L45000', '8801711190206', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, ' Muhammad fahim', 'CG012788L00064', '8801731219756', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Anuwarul islam', 'NK012788S00074', '8801913951960', 'image/driver/user.png', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2022_12_01_071433_create_student_tbl_table', 2),
(24, '2022_12_20_094122_create_driver_info_tbl', 3),
(153, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(154, '2022_12_01_072303_create_student_tbl_table', 4),
(155, '2022_12_15_121419_create_admin_tbl_table', 4),
(156, '2022_12_20_094748_create_driver_info', 4),
(157, '2022_12_21_074940_create_student_list_tbl', 4),
(158, '2022_12_23_192434_create_bus_info', 4),
(159, '2022_12_24_195610_create_route_info', 4),
(160, '2022_12_24_195939_create_stops_info', 4),
(161, '2022_12_28_073000_create_schedule', 4),
(162, '2022_12_30_202108_create_stops_name', 4),
(163, '2022_12_31_174734_create_notice_info', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notice_info`
--

CREATE TABLE `notice_info` (
  `notice_id` int(10) UNSIGNED NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_thumbnail` varchar(255) NOT NULL,
  `notice_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_info`
--

INSERT INTO `notice_info` (`notice_id`, `notice_title`, `notice_thumbnail`, `notice_description`, `created_at`, `updated_at`) VALUES
(16, 'খুলশী রোডের শিক্ষার্থীদের উদ্দেশ্যে।', 'খুলশী অভিমুখে যাত্রাকারী বাসসমূহের শিক্ষার্থীদের উদ্দেশ্যে।', 'খুলশি রোড এর মেরামত কাজের কারণে আগামীকালের বাসসমূহ টাইগারপাস হয়ে যাত্রা করবে।', '2023-01-03 19:30:59', '2023-01-03 19:30:59'),
(17, 'চট্টেশ্বরী যাত্রীদের উদ্দেশ্যে।', 'আগামীকাল চট্টেশ্বরী হতে যাত্রাকারী বাস', 'আগামীকাল চট্টেশ্বরী হতে যাত্রাকারী বাস ৯.১০ এর বদলে ৯টায় ক্যাম্পাসের উদ্দেশ্যে ছেড়ে যাবে।', '2023-01-03 19:37:04', '2023-01-03 23:05:19'),
(18, 'আগামীকালের ছাত্র ছাত্রীদের দুপুরের বাস সিডিউল এ পরিবর্তন।', 'ল্যাব পরিক্ষার শিডিউল অনুযায়ী আগামীকালের', 'ল্যাব পরিক্ষার শিডিউল অনুযায়ী আগামীকালের ছেলেদের বাস দুপুর ১.২০ এ  ও মেয়েদের ১.৩০ এ ক্যাম্পাস হতে নিজ নিজ গন্তব্যস্থলে ফিরে যাবে।', '2023-01-03 19:44:33', '2023-01-03 19:44:33'),
(19, 'শাহ আমানত ব্রিজ', 'শাহ আমানত ব্রিজ হতে যাত্রাকারী শিক্ষার্থীদের উদ্দেশ্যে।', 'অনিবার্য কারণবশত আগামীকাল শাহ আমানত ব্রিজ হতে যাত্রাকারী বাস চলাচল বন্ধ থাকিবে।\r\nআপনার সাময়িক অসুবিধার জন্য আমরা আন্তরিকভাবে দুঃখিত।', '2023-01-03 19:50:30', '2023-01-03 19:50:30'),
(20, '০৪/০১/২০২৩ দুপুরের বাস সিডিউল।', '\'লিড\' কতৃক আয়োজিত বিশেষ সেমিনার ও ওয়ার্কশপের কারণে', 'লিড\' কতৃক আয়োজিত বিশেষ সেমিনার ও ওয়ার্কশপের কারণে উক্ত দিনে দুপুরের বাস ২.৩০ এ ক্যাম্পাস হতে নিজ নিজ গন্তব্যে যাত্রা করবে।', '2023-01-03 19:55:08', '2023-01-03 19:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route_info`
--

CREATE TABLE `route_info` (
  `route_id` int(11) NOT NULL,
  `route_name` varchar(255) NOT NULL,
  `start_point` varchar(255) NOT NULL,
  `end_point` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `route_info`
--

INSERT INTO `route_info` (`route_id`, `route_name`, `start_point`, `end_point`, `created_at`, `updated_at`) VALUES
(1, 'Hathazari', 'Hathazari', 'IIUC', '2023-01-01 20:42:30', '2023-01-01 20:42:30'),
(2, 'Baroyar hat', 'Baroyar hat', 'IIUC', '2023-01-01 20:45:16', '2023-01-01 20:45:16'),
(3, 'Shah Amanath Bridge', 'Shah Amanath Bridge', 'IIUC', '2023-01-01 20:46:45', '2023-01-01 20:46:45'),
(4, 'BaroDighir Par', 'BaroDighir Par', 'IIUC', '2023-01-01 20:48:38', '2023-01-01 20:48:38'),
(5, 'Miler matha', 'Miler matha', 'IIUC', '2023-01-01 20:49:10', '2023-01-01 20:49:10'),
(6, 'BOT', 'BOT', 'IIUC', '2023-01-01 20:49:43', '2023-01-01 20:49:43'),
(7, 'Mirsharai', 'Mirsharai', 'IIUC', '2023-01-01 20:50:42', '2023-01-01 20:50:42'),
(8, 'Chatteswari', 'Chatteswari', 'IIUC', '2023-01-01 20:52:43', '2023-01-01 20:52:43'),
(9, 'Kotowali', 'Kotowali', 'IIUC', '2023-01-01 20:53:27', '2023-01-01 20:53:27'),
(10, 'Lucky Plaza', 'Lucky Plaza', 'IIUC', '2023-01-01 20:54:36', '2023-01-01 20:54:36'),
(11, 'GEC circle', 'GEC circle', 'IIUC', '2023-01-01 20:55:04', '2023-01-01 20:55:04'),
(12, 'Oxygen Moor', 'Oxygen Moor', 'IIUC', '2023-01-01 20:55:39', '2023-01-01 20:55:39'),
(13, 'KoibolyoDham', 'KoibolyoDham', 'IIUC', '2023-01-01 20:56:28', '2023-01-01 20:56:28'),
(14, 'Mayor goli', 'Mayor goli', 'IIUC', '2023-01-01 20:57:03', '2023-01-01 20:57:03'),
(15, 'Noyabazar', 'Noyabazar', 'IIUC', '2023-01-01 20:57:57', '2023-01-01 20:57:57'),
(16, 'SherShah', 'SherShah', 'IIUC', '2023-01-01 20:58:37', '2023-01-01 20:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(10) UNSIGNED NOT NULL,
  `bus_license` varchar(255) NOT NULL,
  `route_id` varchar(255) NOT NULL,
  `driver_id` varchar(255) NOT NULL,
  `start_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `bus_license`, `route_id`, `driver_id`, `start_time`, `created_at`, `updated_at`) VALUES
(13, 'চট্টমেট্রো-ছ ১১-৭৫৩৯', '2', '3', '08:55:00', '2023-01-03 20:13:45', '2023-01-03 20:13:45'),
(14, 'চট্টমেট্রো-ব ১৫-৭৫৪০', '3', '4', '08:55:00', '2023-01-03 20:15:35', '2023-01-03 20:15:35'),
(15, 'চট্টমেট্রো-ব ১৪-৭৭৪১', '4', '5', '09:05:00', '2023-01-03 20:17:53', '2023-01-03 20:17:53'),
(16, 'চট্টমেট্রো-ঝ ১৫-৭৫৪২', '5', '6', '09:05:00', '2023-01-03 20:18:53', '2023-01-03 20:18:53'),
(17, 'চট্টমেট্রো-ব ১২-৩৪৭৫', '6', '7', '09:05:00', '2023-01-03 20:20:03', '2023-01-03 20:20:03'),
(18, 'চট্টমেট্রো-ব ১৩-৭৫৪৪', '7', '8', '09:05:00', '2023-01-03 20:21:44', '2023-01-03 20:21:44'),
(19, 'চট্টমেট্রো-ব ১৭-৭৫৪৬', '8', '9', '09:05:00', '2023-01-03 20:22:39', '2023-01-03 20:22:39'),
(20, 'চট্টমেট্রো-ব ১১-৭৫৪৭', '9', '10', '09:05:00', '2023-01-03 20:23:41', '2023-01-03 20:23:41'),
(21, 'চট্টমেট্রো-ব ১৫-৭৫৫০', '10', '11', '09:05:00', '2023-01-03 20:24:24', '2023-01-03 20:24:24'),
(22, 'চট্টমেট্রো-ব ১৭-৭৫৫১', '11', '12', '09:15:00', '2023-01-03 20:26:11', '2023-01-03 20:26:11'),
(23, 'চট্টমেট্রো-ব ১৫-২৫৫৭', '12', '13', '09:15:00', '2023-01-03 20:27:08', '2023-01-03 20:27:08'),
(24, 'চট্টমেট্রো-ব ১৬-৭৫৫৩', '13', '14', '09:35:00', '2023-01-03 20:28:25', '2023-01-03 20:28:25'),
(25, 'চট্টমেট্রো-ব ১৫-৭৫৫৪', '14', '15', '11:40:00', '2023-01-03 20:29:44', '2023-01-03 20:29:44'),
(26, 'চট্টমেট্রো-ঝ ১০-৭৫৫৫', '15', '16', '11:40:00', '2023-01-03 20:30:58', '2023-01-03 20:30:58'),
(27, 'চট্টমেট্রো-ব ১২-৬৫৫৭', '16', '17', '12:30:00', '2023-01-03 20:32:09', '2023-01-03 20:32:09'),
(28, 'চট্টমেট্রো-ব ১৩-৭৫৫৭', '1', '18', '08:50:00', '2023-01-03 22:33:25', '2023-01-03 22:33:25'),
(29, 'চট্টমেট্রো-ব ১৫-৭৫৫৮', '1', '19', '08:50:00', '2023-01-03 22:35:23', '2023-01-03 22:35:23'),
(30, 'চট্টমেট্রো-ব ১১-১১৮৭', '1', '2', '08:55:00', '2023-01-03 22:37:09', '2023-01-03 16:55:25'),
(31, 'চট্টমেট্রো-ব ১৫-৭৫৫৯', '2', '21', '08:55:00', '2023-01-03 22:39:25', '2023-01-03 22:39:25'),
(32, 'চট্টমেট্রো-ব ১৫-৭৫৬১', '3', '22', '08:55:00', '2023-01-03 22:41:32', '2023-01-03 22:41:32'),
(33, 'চট্টমেট্রো-ব ১৮-৭২৬৫', '4', '23', '09:05:00', '2023-01-03 22:42:57', '2023-01-03 22:42:57'),
(34, 'চট্টমেট্রো-ব ১৫-৭৫৬৩', '6', '24', '09:05:00', '2023-01-03 22:49:03', '2023-01-03 22:49:03'),
(35, 'চট্টমেট্রো-ব ১৮-৭৫৬৪', '6', '25', '09:05:00', '2023-01-03 22:53:02', '2023-01-03 22:53:02'),
(36, 'চট্টমেট্রো-ব ১৫-৭৫৬৫', '8', '26', '09:05:00', '2023-01-03 22:58:42', '2023-01-03 22:58:42'),
(37, 'চট্টমেট্রো-ব ১১-৫৭৬৬', '8', '27', '09:05:00', '2023-01-03 23:08:01', '2023-01-03 23:08:01'),
(38, 'চট্টমেট্রো-ব ১৫-৭৫৬৭', '9', '28', '09:05:00', '2023-01-03 23:09:29', '2023-01-03 23:09:29'),
(39, 'চট্টমেট্রো-ব ১৫-৭৫৬৮', '9', '29', '09:05:00', '2023-01-03 23:11:49', '2023-01-03 23:11:49'),
(40, 'চট্টমেট্রো-ব ১২-৭৫৯৬', '11', '30', '09:15:00', '2023-01-03 23:13:08', '2023-01-03 23:13:08'),
(41, 'চট্টমেট্রো-ব ১৫-৭৫৭০', '12', '31', '09:15:00', '2023-01-03 23:15:48', '2023-01-03 23:15:48'),
(42, 'চট্টমেট্রো-ব ১৪-৭৭২৭৫', '14', '32', '11:40:00', '2023-01-03 23:17:35', '2023-01-03 23:17:35'),
(43, 'চট্টমেট্রো-ব ১৫-৭৫৭৪', '14', '33', '11:40:00', '2023-01-03 23:25:15', '2023-01-03 23:25:15'),
(44, 'চট্টমেট্রো-ব ১৫-৭৫৩৮', '1', '47', '00:30:00', '2023-01-03 23:28:29', '2023-01-03 17:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `stops_info`
--

CREATE TABLE `stops_info` (
  `stop_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `stop_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stops_info`
--

INSERT INTO `stops_info` (`stop_id`, `route_id`, `stop_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hathhazari', '2023-01-01 23:28:32', '2023-01-01 17:46:22'),
(2, 1, 'Hathhazari College', '2023-01-01 23:30:08', '2023-01-01 17:46:49'),
(3, 1, 'BaroDighir Par', '2023-01-01 23:50:31', '2023-01-01 23:50:31'),
(4, 1, 'Baizid link Road', '2023-01-01 23:51:10', '2023-01-01 23:51:10'),
(5, 1, 'IIUC', '2023-01-01 23:52:06', '2023-01-01 23:52:06'),
(6, 2, 'BaroyarHat', '2023-01-01 23:53:12', '2023-01-01 23:53:12'),
(7, 2, 'Mirsharai', '2023-01-01 23:53:39', '2023-01-01 23:53:39'),
(8, 2, 'Borodarghahat', '2023-01-01 23:54:14', '2023-01-01 23:54:14'),
(9, 2, 'Sitakunda', '2023-01-01 23:54:48', '2023-01-01 23:54:48'),
(10, 2, 'IIUC', '2023-01-01 23:55:22', '2023-01-01 23:55:22'),
(11, 3, 'Shah Amanath Bridge', '2023-01-01 23:56:05', '2023-01-01 23:56:05'),
(12, 3, 'Bohoddarhat Flyover', '2023-01-01 23:56:28', '2023-01-01 23:56:28'),
(13, 3, 'Shulokbohor', '2023-01-01 23:56:46', '2023-01-01 23:56:46'),
(14, 3, 'Baizid link Road', '2023-01-01 23:57:23', '2023-01-01 23:57:23'),
(15, 3, 'IIUC', '2023-01-01 23:57:44', '2023-01-01 23:57:44'),
(16, 4, 'BaroDighir Par', '2023-01-01 23:58:39', '2023-01-01 23:58:39'),
(17, 4, 'Oxygen', '2023-01-01 23:59:13', '2023-01-01 23:59:13'),
(18, 4, 'Baizid link Road', '2023-01-01 23:59:31', '2023-01-01 23:59:31'),
(19, 4, 'IIUC', '2023-01-02 00:00:16', '2023-01-02 00:00:16'),
(20, 5, 'Miler matha', '2023-01-02 00:01:03', '2023-01-02 00:01:03'),
(21, 5, 'Port Market', '2023-01-02 00:01:44', '2023-01-02 00:01:44'),
(22, 5, 'Toll Road', '2023-01-02 00:02:14', '2023-01-02 00:02:14'),
(23, 5, 'Fouzder Hat', '2023-01-02 00:02:34', '2023-01-02 00:02:34'),
(24, 5, 'IIUC', '2023-01-02 00:02:57', '2023-01-02 00:02:57'),
(25, 6, 'BOT(Bahaddarhat)', '2023-01-02 00:03:31', '2023-01-02 00:03:31'),
(26, 6, 'Muradpur', '2023-01-02 00:04:11', '2023-01-02 00:04:11'),
(27, 6, '2no. gate', '2023-01-02 00:04:27', '2023-01-02 00:04:27'),
(28, 6, 'Baizid link Road', '2023-01-02 00:04:52', '2023-01-02 00:04:52'),
(29, 6, 'IIUC', '2023-01-02 00:05:12', '2023-01-02 00:05:12'),
(30, 7, 'Mirsharai', '2023-01-02 00:05:58', '2023-01-02 00:05:58'),
(32, 7, 'Borodarghahat', '2023-01-02 00:06:36', '2023-01-02 00:06:36'),
(33, 7, 'Sitakunda', '2023-01-02 00:07:02', '2023-01-02 00:07:02'),
(34, 7, 'IIUC', '2023-01-02 00:07:24', '2023-01-02 00:07:24'),
(35, 8, 'Chatteswari', '2023-01-02 00:11:33', '2023-01-02 00:11:33'),
(36, 8, 'Chatteswari Road', '2023-01-02 00:14:53', '2023-01-02 00:14:53'),
(37, 8, 'GEC', '2023-01-02 00:18:33', '2023-01-02 00:18:33'),
(38, 8, '2no. gate', '2023-01-02 00:19:27', '2023-01-02 00:19:27'),
(39, 8, 'Baizid link Road', '2023-01-02 00:19:49', '2023-01-02 00:19:49'),
(40, 8, 'IIUC', '2023-01-02 00:21:30', '2023-01-02 00:21:30'),
(41, 9, 'Kotowali', '2023-01-02 00:22:23', '2023-01-02 00:22:23'),
(42, 9, 'Kadamtali', '2023-01-02 00:23:44', '2023-01-02 00:23:44'),
(43, 9, 'Dewan Hat', '2023-01-02 00:24:21', '2023-01-02 00:24:21'),
(44, 9, 'Alanker', '2023-01-02 00:25:11', '2023-01-02 00:25:11'),
(45, 9, 'IIUC', '2023-01-02 00:25:54', '2023-01-02 00:25:54'),
(46, 10, 'Lucky Plaza', '2023-01-02 00:28:02', '2023-01-02 00:28:02'),
(47, 10, 'Agrabad', '2023-01-02 00:29:08', '2023-01-02 00:29:08'),
(48, 10, 'Boropool', '2023-01-02 00:30:00', '2023-01-02 00:30:00'),
(49, 10, 'Noyabazar', '2023-01-02 00:31:23', '2023-01-02 00:31:23'),
(50, 10, 'Ak Khan', '2023-01-02 00:31:49', '2023-01-02 00:31:49'),
(51, 10, 'IIUC', '2023-01-02 00:32:25', '2023-01-02 00:32:25'),
(52, 11, 'GEC circle', '2023-01-02 00:33:14', '2023-01-02 00:33:14'),
(53, 11, 'Wireless', '2023-01-02 00:34:27', '2023-01-02 00:34:27'),
(54, 11, 'Foy\'s lake', '2023-01-02 00:35:04', '2023-01-02 00:35:04'),
(55, 11, 'Ak Khan', '2023-01-02 00:35:20', '2023-01-02 00:35:20'),
(56, 11, 'IIUC', '2023-01-02 00:36:50', '2023-01-02 00:36:50'),
(57, 12, 'Oxygen Moor', '2023-01-02 00:38:33', '2023-01-02 00:38:33'),
(58, 12, 'Oxygen', '2023-01-02 00:39:07', '2023-01-02 00:39:07'),
(59, 12, 'Baizid link Road', '2023-01-02 00:39:32', '2023-01-02 00:39:32'),
(60, 12, 'IIUC', '2023-01-02 00:40:18', '2023-01-02 00:40:18'),
(61, 13, 'KoibolyoDham', '2023-01-02 00:40:50', '2023-01-02 00:40:50'),
(62, 13, 'IIUC', '2023-01-02 00:41:12', '2023-01-02 00:41:12'),
(63, 14, 'Mayor goli', '2023-01-02 00:42:10', '2023-01-02 00:42:10'),
(64, 14, 'Baizid link Road', '2023-01-02 00:43:20', '2023-01-02 00:43:20'),
(65, 14, 'Fouzder Hat', '2023-01-02 00:43:45', '2023-01-02 00:43:45'),
(66, 14, 'IIUC', '2023-01-02 00:44:12', '2023-01-02 00:44:12'),
(67, 15, 'Noyabazar', '2023-01-02 00:45:08', '2023-01-02 00:45:08'),
(68, 15, 'IIUC', '2023-01-02 00:45:34', '2023-01-02 00:45:34'),
(69, 16, 'SherShah', '2023-01-02 00:46:33', '2023-01-02 00:46:33'),
(70, 16, 'Baizid link Road', '2023-01-02 00:48:26', '2023-01-02 00:48:26'),
(71, 16, 'Fouzder Hat', '2023-01-02 00:48:54', '2023-01-02 00:48:54'),
(72, 16, 'IIUC', '2023-01-02 00:49:35', '2023-01-02 00:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `stops_name`
--

CREATE TABLE `stops_name` (
  `stop_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stops_name`
--

INSERT INTO `stops_name` (`stop_name`, `created_at`, `updated_at`) VALUES
('BaroDighir Par', '2023-01-01 20:17:15', '2023-01-01 20:17:15'),
('Oxygen', '2023-01-01 20:17:24', '2023-01-01 20:17:24'),
('Baizid link Road', '2023-01-01 20:17:33', '2023-01-01 20:17:33'),
('Fouzder Hat', '2023-01-01 20:17:41', '2023-01-01 20:17:41'),
('Hathhazari', '2023-01-01 21:04:21', '2023-01-01 21:04:21'),
('Hathhazari College', '2023-01-01 21:34:56', '2023-01-01 21:34:56'),
('BaroyarHat', '2023-01-01 21:35:39', '2023-01-01 21:35:39'),
('Mirsharai', '2023-01-01 21:35:53', '2023-01-01 21:35:53'),
('Borodarghahat', '2023-01-01 21:36:19', '2023-01-01 21:36:19'),
('Sitakunda', '2023-01-01 21:36:32', '2023-01-01 21:36:32'),
('Shah Amanath Bridge', '2023-01-01 21:36:51', '2023-01-01 21:36:51'),
('Bohoddarhat Flyover', '2023-01-01 21:37:18', '2023-01-01 21:37:18'),
('Shulokbohor', '2023-01-01 21:37:34', '2023-01-01 21:37:34'),
('Miler matha', '2023-01-01 21:37:50', '2023-01-01 21:37:50'),
('Port Market', '2023-01-01 21:38:05', '2023-01-01 21:38:05'),
('Toll Road', '2023-01-01 21:40:10', '2023-01-01 21:40:10'),
('BOT(Bahaddarhat)', '2023-01-01 21:41:36', '2023-01-01 21:41:36'),
('Muradpur', '2023-01-01 21:41:54', '2023-01-01 21:41:54'),
('2no. gate', '2023-01-01 21:42:28', '2023-01-01 21:42:28'),
('Chatteswari Road', '2023-01-01 21:42:48', '2023-01-01 21:42:48'),
('GEC', '2023-01-01 21:42:58', '2023-01-01 21:42:58'),
('Kotowali', '2023-01-01 21:43:11', '2023-01-01 21:43:11'),
('Kadamtali', '2023-01-01 21:43:25', '2023-01-01 21:43:25'),
('Dewan Hat', '2023-01-01 21:43:41', '2023-01-01 21:43:41'),
('Alanker', '2023-01-01 21:43:57', '2023-01-01 21:43:57'),
('Agrabad', '2023-01-01 21:44:13', '2023-01-01 21:44:13'),
('Boropool', '2023-01-01 21:44:42', '2023-01-01 21:44:42'),
('Noyabazar', '2023-01-01 21:44:58', '2023-01-01 21:44:58'),
('Ak Khan', '2023-01-01 21:45:16', '2023-01-01 21:45:16'),
('GEC circle', '2023-01-01 21:45:38', '2023-01-01 21:45:38'),
('Wireless', '2023-01-01 21:45:49', '2023-01-01 21:45:49'),
('Foy\'s lake', '2023-01-01 21:46:06', '2023-01-01 21:46:06'),
('KoibolyoDham', '2023-01-01 21:46:17', '2023-01-01 21:46:17'),
('Mayor goli', '2023-01-01 21:46:35', '2023-01-01 21:46:35'),
('Fouzdarhat', '2023-01-01 21:47:00', '2023-01-01 21:47:00'),
('SherShah', '2023-01-01 21:47:11', '2023-01-01 21:47:11'),
('IIUC', '2023-01-01 23:07:07', '2023-01-01 23:07:07'),
('Chatteswari', '2023-01-02 00:11:05', '2023-01-02 00:11:05'),
('Lucky Plaza', '2023-01-02 00:27:32', '2023-01-02 00:27:32'),
('Oxygen Moor', '2023-01-02 00:38:13', '2023-01-02 00:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `student_list_tbl`
--

CREATE TABLE `student_list_tbl` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_name` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `student_batch` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_department` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_name`, `student_id`, `student_batch`, `student_email`, `student_department`, `student_phone`, `student_password`, `created_at`, `updated_at`) VALUES
('Mohammad Sakib Chowdhury', 'C193055', '49', 'mdsakibchy071@gmail.com', '4', '01760886380', '2467d3744600858cc9026d5ac6005305', '2023-01-03 22:30:05', '2023-01-03 22:30:05'),
('Tahsin', 'C193084', '49', '123@gmail.com', '4', '01884759324', '202cb962ac59075b964b07152d234b70', '2023-01-03 22:31:15', '2023-01-03 22:31:15'),
('Mainuddin', 'C193070', '49', 'ar@gmail.com', '4', '017543325645', '134089ff03fe553893701129f7eade4e', '2023-01-03 22:32:30', '2023-01-03 22:32:30'),
('Asadujjaman Turag', 'C193078', '49', 'asadujjaman717@gmail.com', '4', '01846102444', '202cb962ac59075b964b07152d234b70', '2023-01-04 02:24:12', '2023-01-04 02:24:12'),
('RAkib', 'C193058', '49', 'c193058@ugrad.iiuc.ac.bd', '4', '02648374839', 'e10adc3949ba59abbe56e057f20f883e', '2023-01-04 08:16:01', '2023-01-04 08:16:01'),
('123', '123', '123', '123@gmail.com', '14', '123', '202cb962ac59075b964b07152d234b70', '2023-01-04 11:18:56', '2023-01-04 11:18:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_info`
--
ALTER TABLE `driver_info`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_info`
--
ALTER TABLE `notice_info`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `route_info`
--
ALTER TABLE `route_info`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `stops_info`
--
ALTER TABLE `stops_info`
  ADD PRIMARY KEY (`stop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver_info`
--
ALTER TABLE `driver_info`
  MODIFY `driver_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `notice_info`
--
ALTER TABLE `notice_info`
  MODIFY `notice_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

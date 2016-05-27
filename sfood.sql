-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 05:20 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `link`, `level`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Ăn Vặt/Vỉa Hè', '', 'an-vat-via-he', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Chè Hà Nội', '', 'che-ha-noi', 2, 1, '2016-05-05 21:35:17', '2016-05-05 21:35:17'),
(3, 'Quán ', '', '', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Nhà Hàng', '', 'nha-hang', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Nhà Hàng Nhật', '', 'nha-hang-nhat', 2, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Nhà Hàng Hàn', '', 'nha-hang-han', 2, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Nhà Hàng Hải Sản', '', 'nha-hang-hai-san', 2, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Quán Kem', '', 'quan-kem', 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Quán Bánh', '', 'quan-banh', 2, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Quán Chè', '', 'quan-che', 2, 3, '2016-05-05 23:01:39', '2016-05-05 23:01:39');

--
-- Triggers `category`
--
DELIMITER $$
CREATE TRIGGER `before_insert_category` BEFORE INSERT ON `category` FOR EACH ROW BEGIN
 DECLARE level_parent DOUBLE DEFAULT 0;
 select level into level_parent from category where id=New.parent_id limit 1;
 sET new.level=level_parent+1;
   
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `category_place`
--

CREATE TABLE `category_place` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `place_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_place`
--

INSERT INTO `category_place` (`id`, `category_id`, `place_id`, `created_at`, `updated_at`) VALUES
(3, 8, 4, '2016-05-05 23:04:18', '2016-05-05 23:04:18'),
(4, 3, 4, '2016-05-05 23:04:18', '2016-05-05 23:04:18'),
(5, 8, 5, '2016-05-05 23:05:42', '2016-05-05 23:05:42'),
(6, 3, 5, '2016-05-05 23:05:42', '2016-05-05 23:05:42'),
(7, 8, 6, '2016-05-05 23:06:53', '2016-05-05 23:06:53'),
(8, 3, 6, '2016-05-05 23:06:53', '2016-05-05 23:06:53'),
(9, 8, 7, '2016-05-05 23:07:59', '2016-05-05 23:07:59'),
(10, 3, 7, '2016-05-05 23:07:59', '2016-05-05 23:07:59'),
(13, 8, 9, '2016-05-05 23:10:17', '2016-05-05 23:10:17'),
(14, 3, 9, '2016-05-05 23:10:17', '2016-05-05 23:10:17'),
(15, 8, 10, '2016-05-05 23:11:06', '2016-05-05 23:11:06'),
(16, 3, 10, '2016-05-05 23:11:06', '2016-05-05 23:11:06'),
(17, 8, 11, '2016-05-05 23:12:09', '2016-05-05 23:12:09'),
(18, 3, 11, '2016-05-05 23:12:09', '2016-05-05 23:12:09'),
(19, 8, 12, '2016-05-05 23:13:32', '2016-05-05 23:13:32'),
(20, 3, 12, '2016-05-05 23:13:32', '2016-05-05 23:13:32'),
(21, 8, 13, '2016-05-05 23:14:42', '2016-05-05 23:14:42'),
(22, 3, 13, '2016-05-05 23:14:42', '2016-05-05 23:14:42'),
(23, 8, 14, '2016-05-05 23:15:45', '2016-05-05 23:15:45'),
(24, 3, 14, '2016-05-05 23:15:46', '2016-05-05 23:15:46'),
(25, 8, 15, '2016-05-05 23:16:45', '2016-05-05 23:16:45'),
(26, 3, 15, '2016-05-05 23:16:45', '2016-05-05 23:16:45'),
(29, 2, 17, '2016-05-05 23:23:53', '2016-05-05 23:23:53'),
(30, 1, 17, '2016-05-05 23:23:53', '2016-05-05 23:23:53'),
(31, 2, 18, '2016-05-05 23:24:51', '2016-05-05 23:24:51'),
(32, 1, 18, '2016-05-05 23:24:51', '2016-05-05 23:24:51'),
(33, 2, 19, '2016-05-05 23:25:57', '2016-05-05 23:25:57'),
(34, 1, 19, '2016-05-05 23:25:57', '2016-05-05 23:25:57'),
(38, 8, 22, '2016-05-06 18:12:45', '2016-05-06 18:12:45'),
(39, 3, 22, '2016-05-06 18:12:45', '2016-05-06 18:12:45'),
(40, 8, 23, '2016-05-07 19:46:52', '2016-05-07 19:46:52'),
(41, 3, 23, '2016-05-07 19:46:52', '2016-05-07 19:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `image_place`
--

CREATE TABLE `image_place` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `place_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_05_195304_create_users_table', 1),
('2016_05_05_195436_create_password_resets_table', 2),
('2016_05_05_195508_create_category_table', 3),
('2016_05_05_195551_create_place_table', 4),
('2016_05_05_195639_create_category_place_table', 5),
('2016_05_05_195744_create_image_place_table', 6),
('2016_05_05_195821_create_user_place_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kind` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timeopen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `address`, `video`, `link`, `phone`, `description`, `view`, `image`, `rate`, `kind`, `price`, `timeopen`, `created_at`, `updated_at`) VALUES
(4, 'Kem trái cây ', 'Số 40 Hàng Mành, Hoàn Kiếm, Hà Nội', '', 'kem-trai-cay-', '0', '<p>Kem tr&aacute;i c&acirc;y ngon gi&aacute; từ 30k</p>\r\n', 4, 'kem-trai-cay.jpg', '', '', '', '', '2016-05-05 23:04:18', '2016-05-05 23:04:18'),
(5, 'Kem cá Aboong', 'Số 45A Đào Duy Từ, Hoàn Kiếm, Hà Nội', '', 'kem-ca-aboong', '', '<p>Kem c&aacute; gi&aacute; từ 45k</p>\r\n', 0, 'kem-ca.jpg', '', '', '', '', '2016-05-05 23:05:42', '2016-05-05 23:05:42'),
(6, 'Kem cá trà xanh ', 'Số 157 Giảng Võ, Ba Đình, Hà Nội', '', 'kem-ca-tra-xanh-', '', '<p>Gi&aacute; từ 45k/chiếc</p>\r\n', 0, 'kem-ca-tra-xanh.jpg', '', '', '', '', '2016-05-05 23:06:53', '2016-05-05 23:06:53'),
(7, ' Kem Lick n Bite', 'Số 150A Ô Chợ Dừa, Đống Đa, Hà Nội', '', '-kem-lick-n-bite', '', '<p>Gi&aacute; từ 19-25k/chiếc</p>\r\n', 0, '12821416_1197549390291863_8739772859845635374_n.jpg', '', '', '', '', '2016-05-05 23:07:59', '2016-05-05 23:07:59'),
(9, 'Kem Baskin Robbins ', 'Số 25 Nhà Thờ, Hoàn Kiếm , Hà Nội', '', 'kem-baskin-robbins-', '', '<p>Kem ngon gi&aacute; từ 50k</p>\r\n', 0, '12813930_1197549436958525_4726314709284359164_n.jpg', '', '', '', '', '2016-05-05 23:10:17', '2016-05-05 23:10:17'),
(10, 'Kem Dairy Queen', 'Số 291 Bạch Mai, Hai Bà Trưng ', '', 'kem-dairy-queen', '', '<p>gi&aacute; từ 3k/chiếc</p>\r\n', 0, '12821339_1197549460291856_8273667331160018225_n.jpg', '', '', '', '', '2016-05-05 23:11:06', '2016-05-05 23:11:06'),
(11, 'Kem Gelato', 'Số 61 Lý Thái Tổ, Hoàn Kiếm ', '', 'kem-gelato', '', '', 0, '12718244_1197549473625188_8876558237946501183_n.jpg', '', '', '', '', '2016-05-05 23:12:09', '2016-05-05 23:12:09'),
(12, 'Kem dừa', 'Số 29 Hàng Than, Ba Đình', '', 'kem-dua', '', '', 0, '12802727_1197549486958520_7972037762199866882_n.jpg', '', '', '', '', '2016-05-05 23:13:32', '2016-05-05 23:13:32'),
(13, 'Kem dừa hạt lựu', 'Số 36 Nguyễn Chí Thanh, Đống Đa', '', 'kem-dua-hat-luu', '', '<p>Gi&aacute; từ&nbsp;35/quả</p>\r\n', 0, '535150_1197549516958517_7253086371897861810_n.jpg', '', '', '', '', '2016-05-05 23:14:42', '2016-05-05 23:14:42'),
(14, 'Kem cuộn', 'Mr.Rolly - Ngách 25 Ngõ 167 Tây Sơn, Khu TT ĐH Công Đoàn, Đống Đa', '', 'kem-cuon', '', '<p>15/suất</p>\r\n', 9, '12802994_1197549533625182_1587399444175273756_n.jpg', '', '', '', '', '2016-05-05 23:15:45', '2016-05-05 23:15:45'),
(15, 'Kem hoa quả ', 'Thai Taste - Số 25 Quang Trung, Hoàn Kiếm ', '', 'kem-hoa-qua-', '', '', 1, '12795301_1197549573625178_4296710961530629335_n.jpg', '', '', '', '', '2016-05-05 23:16:45', '2016-05-05 23:16:45'),
(17, 'Chè sen thạch trân châu', 'Chè Bốn Mùa (Sau 18h) - Số 4 Hàng Cân, Hoàn Kiếm ', '', 'che-sen-thach-tran-chau', '', '<p>17k/cốc</p>\r\n', 0, '13177510_1240653232648145_4362923545619387754_n.jpg', '', '', '', '', '2016-05-05 23:23:53', '2016-05-05 23:23:53'),
(18, 'Chè Singapore ', 'Số 57 Tô Hiến Thành, Hai Bà Trưng ', '', 'che-Singapore-', '', '', 2, '13139207_1240653205981481_5794214763939828570_n.jpg', '', '', '', '', '2016-05-05 23:24:51', '2016-05-05 23:24:51'),
(19, 'Chè thái chuối bưởi ', 'Chè Bà Mai - Số 93 Hàng Bạc ', '', 'che-thai-chuoi-buoi', '', '', 4, '13151995_1240653175981484_509954370365009801_n.jpg', '', '', '', '', '2016-05-05 23:25:57', '2016-05-05 23:25:57'),
(22, 'Quán Kem TY', '', '', 'quan-kem-ty', '', '', 7, '13139207_1240653205981481_5794214763939828570_n.jpg', '', '', '', '', '2016-05-06 18:12:45', '2016-05-06 18:12:45'),
(23, 'Kem hoa quả 4 mùa sương sa', 'Hà Nội', '', 'kem-hoa-qua-4-mua-suong-sa', '09232323', '', 0, '13139207_1240653205981481_5794214763939828570_n.jpg', '', '', '', '', '2016-05-07 19:46:52', '2016-05-07 19:46:52'),
(24, 'kem tràng tiền', 'tràng tiền-hà nội', '', 'kem-trang-tien', '98343234', 'kem ngon', 1, '', '', 'Thường', '', '8:00 AM-10:00 PM', '2016-05-11 07:17:30', '2016-05-11 07:17:30');

--
-- Triggers `place`
--
DELIMITER $$
CREATE TRIGGER `before_delete_place` BEFORE DELETE ON `place` FOR EACH ROW BEGIN
 delete from category_place 
  where place_id=old.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `key_active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Chưa kích hoạt',
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `facebook`, `phone`, `address`, `role_id`, `key_active`, `status`, `avatar`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ngô Văn Hiếu', 'ngohieuk57@gmail.com', '$2y$10$R5ED19xWKIQynR0V2qqYOOmaXBkA70e0Wbg9BRdUQKuncPiceARUK', '', '0962910894', 'Hà Nội', 1, '', 'Chưa kích hoạt', 'public/backend/images/users/nam.png', 'Nam', '7eejYH05TCpyaf410tqOUjBzesxSprs1FkaadadjPGeVxnCQCdER1DlCnHaI', '2016-05-05 13:08:00', '2016-05-09 00:18:12'),
(2, 'Hiếu đẹp trai', 'hieunv123@gmail.com', '$2y$10$ApFtFmTI.5IedhVIOt6R2.t30bRaggtZLVor.XkIC7i4MqHcmwTum', '', '', 'Hà Nội', 0, '', 'Chưa kích hoạt', 'public/backend/images/users/nu.png', 'Nam', 'YCCxiruQ8gfgTdeJ5FoyuBpQkcXEe5oE49TroqLSAcFEUvs2l8zNPcz8EVxQ', '2016-05-06 18:12:19', '2016-05-09 00:22:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_place`
--

CREATE TABLE `user_place` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `place_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_place`
--

INSERT INTO `user_place` (`id`, `user_id`, `place_id`, `created_at`, `updated_at`) VALUES
(2, 1, 4, '2016-05-05 23:04:18', '2016-05-05 23:04:18'),
(3, 1, 5, '2016-05-05 23:05:42', '2016-05-05 23:05:42'),
(4, 1, 6, '2016-05-05 23:06:53', '2016-05-05 23:06:53'),
(5, 1, 7, '2016-05-05 23:07:59', '2016-05-05 23:07:59'),
(7, 1, 9, '2016-05-05 23:10:17', '2016-05-05 23:10:17'),
(8, 1, 10, '2016-05-05 23:11:06', '2016-05-05 23:11:06'),
(9, 1, 11, '2016-05-05 23:12:09', '2016-05-05 23:12:09'),
(10, 1, 12, '2016-05-05 23:13:32', '2016-05-05 23:13:32'),
(11, 1, 13, '2016-05-05 23:14:42', '2016-05-05 23:14:42'),
(12, 1, 14, '2016-05-05 23:15:45', '2016-05-05 23:15:45'),
(13, 1, 15, '2016-05-05 23:16:45', '2016-05-05 23:16:45'),
(15, 1, 17, '2016-05-05 23:23:53', '2016-05-05 23:23:53'),
(16, 1, 18, '2016-05-05 23:24:51', '2016-05-05 23:24:51'),
(17, 1, 19, '2016-05-05 23:25:57', '2016-05-05 23:25:57'),
(20, 2, 22, '2016-05-06 18:12:45', '2016-05-06 18:12:45'),
(21, 1, 23, '2016-05-07 19:46:52', '2016-05-07 19:46:52'),
(22, 1, 24, '2016-05-11 07:17:30', '2016-05-11 07:17:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`),
  ADD UNIQUE KEY `category_link_unique` (`link`);

--
-- Indexes for table `category_place`
--
ALTER TABLE `category_place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_place_category_id_foreign` (`category_id`),
  ADD KEY `category_place_place_id_foreign` (`place_id`);

--
-- Indexes for table `image_place`
--
ALTER TABLE `image_place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_place_place_id_foreign` (`place_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_place`
--
ALTER TABLE `user_place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_place_user_id_foreign` (`user_id`),
  ADD KEY `user_place_place_id_foreign` (`place_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `category_place`
--
ALTER TABLE `category_place`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `image_place`
--
ALTER TABLE `image_place`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_place`
--
ALTER TABLE `user_place`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_place`
--
ALTER TABLE `category_place`
  ADD CONSTRAINT `category_place_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_place_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `image_place`
--
ALTER TABLE `image_place`
  ADD CONSTRAINT `image_place_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_place`
--
ALTER TABLE `user_place`
  ADD CONSTRAINT `user_place_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `place` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_place_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

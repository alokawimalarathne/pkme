-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2015 at 03:03 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pk`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(10) NOT NULL,
  `content` longtext,
  `date` int(11) NOT NULL,
  `published` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `category`, `content`, `date`, `published`) VALUES
(12, 'Introduction to PickMe', 'news', 'There will be introduction session about our newly launched PICKME me UCSC job portal.', 1421566195, 1),
(13, 'this is second news', 'news', 'this is out second news about our website', 1421567140, 1),
(14, 'our third article', 'news', 'This is our third article.', 1421577690, 1),
(15, 'aasA', 'news', 'AsAS', 1421696960, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_confirm`
--

CREATE TABLE IF NOT EXISTS `login_confirm` (
`id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_confirm`
--

INSERT INTO `login_confirm` (`id`, `data`, `username`, `email`, `key`, `type`) VALUES
(1, '', 'admin', 'admin@localhost.com', '4125920e8ff11f548d5992b6d02569c8', 'update_emailPw'),
(2, '', 'admin', 'admin@gmail.com', '52f717e640377741a984d13264c71fa7', 'update_emailPw');

-- --------------------------------------------------------

--
-- Table structure for table `login_integration`
--

CREATE TABLE IF NOT EXISTS `login_integration` (
  `user_id` int(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `yahoo` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_levels`
--

CREATE TABLE IF NOT EXISTS `login_levels` (
`id` int(11) NOT NULL,
  `level_name` varchar(255) NOT NULL,
  `level_level` int(1) NOT NULL,
  `level_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `redirect` varchar(255) DEFAULT NULL,
  `welcome_email` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_levels`
--

INSERT INTO `login_levels` (`id`, `level_name`, `level_level`, `level_disabled`, `redirect`, `welcome_email`) VALUES
(1, 'Admin', 1, 0, NULL, 0),
(2, 'Staff', 2, 0, NULL, 0),
(3, 'Student', 3, 0, NULL, 0),
(4, 'Company', 4, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_profiles`
--

CREATE TABLE IF NOT EXISTS `login_profiles` (
`p_id` bigint(20) unsigned NOT NULL,
  `pfield_id` int(255) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `profile_value` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_profile_fields`
--

CREATE TABLE IF NOT EXISTS `login_profile_fields` (
`id` int(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  `label` varchar(255) NOT NULL,
  `public` tinyint(4) NOT NULL,
  `signup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_settings`
--

CREATE TABLE IF NOT EXISTS `login_settings` (
`id` int(11) NOT NULL,
  `option_name` varchar(255) NOT NULL,
  `option_value` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_settings`
--

INSERT INTO `login_settings` (`id`, `option_name`, `option_value`) VALUES
(1, 'site_address', 'http://localhost/pickme/'),
(2, 'default_session', '0'),
(3, 'admin_email', 'admin@gmail.com'),
(4, 'block-msg-enable', '1'),
(5, 'block-msg', '&lt;h1&gt;Sorry !.&lt;/h1&gt;&lt;p&gt;We have detected that your user level does not entitle you to view the page requested.&lt;/p&gt;&lt;p&gt;Please contact the website administrator if you feel this is in error.&lt;/p&gt;&lt;h5&gt;What to do now?&lt;/h5&gt;&lt;p&gt;To see this page you must &lt;a href=''logout.php''&gt;logout&lt;/a&gt; and login with sufficiant privileges.&lt;/p&gt;'),
(6, 'block-msg-out', 'You need to login to do that.'),
(7, 'block-msg-out-enable', '1'),
(8, 'email-welcome-msg', 'Hello {{full_name}} !\r\n\r\nThanks for registering at {{site_address}}. Here are your account details:\r\n\r\nName: {{full_name}}\r\nUsername: {{username}}\r\nEmail: {{email}}\r\nPassword: *hidden*\r\n\r\nYou will first have to activate your account by clicking on the following link:\r\n\r\n{{activate}}'),
(9, 'email-activate-msg', 'Hi there {{full_name}} !\r\n\r\nYour account at {{site_address}} has been successfully activated :). \r\n\r\nFor your reference, your username is &lt;strong&gt;{{username}}&lt;/strong&gt;. \r\n\r\nSee you soon!'),
(10, 'email-activate-subj', 'You''ve activated your account at PickMe!'),
(11, 'email-activate-resend-subj', 'Here''s your activation link again for PickMe'),
(12, 'email-activate-resend-msg', 'Why hello, {{full_name}}. \r\n\r\nI believe you requested this:\r\n{{activate}}\r\n\r\nClick the link above to activate your account :)'),
(13, 'email-welcome-subj', 'Thanks for signing up with PickMe :)'),
(14, 'email-forgot-success-subj', 'Your password has been reset at PickMe'),
(15, 'email-forgot-success-msg', 'Welcome back, {{full_name}} !I''m just letting you know your password at {{site_address}} has been successfully changed. Hopefully you were the one that requested this password reset !Cheers'),
(16, 'email-forgot-subj', 'Lost your password at PickMe?'),
(17, 'email-forgot-msg', 'Hi {{full_name}},Your username is &lt;strong&gt;{{username}}&lt;/strong&gt;.To reset your password at PickMe, please click the following password reset link:{{reset}}See you soon!'),
(18, 'email-add-user-subj', 'You''re registered with PickMe !'),
(19, 'email-add-user-msg', 'Hello {{full_name}} !\r\n\r\nYou''re now registered at {{site_address}}. Here are your account details:\r\n\r\nName: {{full_name}}\r\nUsername: {{username}}\r\nEmail: {{email}}\r\nPassword: {{password}}'),
(20, 'pw-encrypt-force-enable', '0'),
(21, 'pw-encryption', 'MD5'),
(22, 'phplogin_db_version', '1206210'),
(23, 'email-acct-update-subj', 'Confirm your account changes'),
(24, 'email-acct-update-msg', 'Hi {{full_name}} !You ( {{username}} ) requested a change to update your password or email. Click the link below to confirm this change.{{confirm}}Thanks!{{site_address}}'),
(25, 'email-acct-update-success-subj', 'Your account has been updated'),
(26, 'email-acct-update-success-msg', 'Hello {{full_name}},\r\n\r\nYour account details at {{site_address}} has been updated. \r\n\r\nYour username: {{username}}\r\n\r\nSee you around!'),
(27, 'guest-redirect', 'http://localhost/pickme/'),
(28, 'signout-redirect-referrer-enable', '1'),
(29, 'signin-redirect-referrer-enable', '1'),
(30, 'default-level', 'a:1:{i:0;s:1:"3";}'),
(31, 'new-user-redirect', 'http://localhost/pickme/profile.php'),
(32, 'user-activation-enable', '1'),
(33, 'email-new-user-subj', 'A new user has registered !'),
(34, 'email-new-user-msg', 'Hello,\r\n\r\nThere''s been a new registration at &lt;a href=&quot;{{site_address}}&quot;&gt;your site&lt;/a&gt;.\r\n\r\nHere''s the user''s details:\r\n\r\nName: {{full_name}}\r\nUsername: {{username}}\r\nEmail: {{email}}'),
(35, 'signout-redirect-url', ''),
(36, 'signin-redirect-url', ''),
(37, 'general-options-form', '1'),
(38, 'notify-new-user-enable', '0'),
(39, 'disable-registrations-enable', '0'),
(40, 'denied-form', '1'),
(41, 'profile-timestamps-enable', '1'),
(42, 'profile-timestamps-admin-enable', '0'),
(43, 'user-profiles-form', '1'),
(44, 'profile-display-email-enable', '0'),
(45, 'profile-display-name-enable', '0'),
(46, 'profile-public-enable', '0'),
(47, 'profile-field_section', 'a:1:{i:1;s:2:"aa";}'),
(48, 'profile-field_type', 'a:1:{i:1;s:10:"text_input";}'),
(49, 'profile-field_name', 'a:1:{i:1;s:7:"aaaaaaa";}'),
(50, 'profile-field_signup', 'a:1:{i:1;s:7:"require";}'),
(51, 'profile-field_delete', 'a:1:{i:1;s:2:"on";}'),
(52, 'profile-field_public', 'a:1:{i:1;s:2:"on";}');

-- --------------------------------------------------------

--
-- Table structure for table `login_timestamps`
--

CREATE TABLE IF NOT EXISTS `login_timestamps` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_timestamps`
--

INSERT INTO `login_timestamps` (`id`, `user_id`, `ip`, `timestamp`) VALUES
(1, 4, '127.0.0.1', '2014-09-22 17:10:04'),
(2, 1, '127.0.0.1', '2014-09-22 17:11:11'),
(3, 1, '127.0.0.1', '2014-09-22 17:13:19'),
(4, 1, '127.0.0.1', '2014-09-22 17:13:47'),
(5, 1, '127.0.0.1', '2014-09-22 17:15:56'),
(6, 1, '127.0.0.1', '2014-09-22 17:17:17'),
(7, 1, '127.0.0.1', '2014-09-22 17:17:31'),
(8, 1, '127.0.0.1', '2014-09-22 17:18:08'),
(9, 1, '127.0.0.1', '2014-09-22 17:18:19'),
(10, 1, '127.0.0.1', '2014-09-22 17:30:09'),
(11, 11, '127.0.0.1', '2014-09-23 14:36:33'),
(12, 1, '127.0.0.1', '2014-09-23 14:38:10'),
(13, 1, '127.0.0.1', '2014-09-28 12:54:05'),
(14, 1, '127.0.0.1', '2014-10-25 16:19:17'),
(15, 1, '127.0.0.1', '2014-12-07 05:01:43'),
(16, 1, '127.0.0.1', '2014-12-07 09:29:30'),
(17, 1, '127.0.0.1', '2014-12-07 13:19:20'),
(18, 1, '127.0.0.1', '2014-12-07 13:24:26'),
(19, 1, '127.0.0.1', '2014-12-07 13:24:35'),
(20, 1, '127.0.0.1', '2014-12-07 13:25:42'),
(21, 1, '127.0.0.1', '2014-12-07 13:31:42'),
(22, 1, '127.0.0.1', '2014-12-07 13:32:50'),
(23, 1, '127.0.0.1', '2014-12-07 13:36:30'),
(24, 1, '127.0.0.1', '2014-12-07 15:42:29'),
(25, 1, '127.0.0.1', '2014-12-07 15:42:36'),
(26, 1, '127.0.0.1', '2014-12-08 13:51:54'),
(27, 1, '127.0.0.1', '2014-12-08 13:52:02'),
(28, 1, '127.0.0.1', '2014-12-08 16:41:25'),
(29, 1, '127.0.0.1', '2014-12-08 17:16:36'),
(30, 1, '127.0.0.1', '2014-12-08 17:16:55'),
(31, 1, '127.0.0.1', '2014-12-08 17:17:27'),
(32, 1, '127.0.0.1', '2015-01-12 06:01:31'),
(33, 1, '127.0.0.1', '2015-01-17 04:08:00'),
(34, 4, '127.0.0.1', '2015-01-17 07:34:53'),
(35, 4, '127.0.0.1', '2015-01-17 07:35:46'),
(36, 1, '127.0.0.1', '2015-01-17 07:51:12'),
(37, 4, '127.0.0.1', '2015-01-17 07:51:42'),
(38, 4, '127.0.0.1', '2015-01-17 07:53:36'),
(39, 4, '127.0.0.1', '2015-01-17 08:37:49'),
(40, 4, '127.0.0.1', '2015-01-17 09:01:34'),
(41, 4, '127.0.0.1', '2015-01-17 09:14:35'),
(42, 4, '127.0.0.1', '2015-01-17 09:23:46'),
(43, 4, '127.0.0.1', '2015-01-17 10:14:38'),
(44, 4, '127.0.0.1', '2015-01-17 11:48:04'),
(45, 4, '127.0.0.1', '2015-01-17 16:09:15'),
(46, 4, '127.0.0.1', '2015-01-18 02:13:22'),
(47, 1, '127.0.0.1', '2015-01-18 03:02:32'),
(48, 17, '127.0.0.1', '2015-01-18 03:03:19'),
(49, 1, '127.0.0.1', '2015-01-18 03:03:30'),
(50, 17, '127.0.0.1', '2015-01-18 03:03:47'),
(51, 17, '127.0.0.1', '2015-01-18 03:04:42'),
(52, 1, '127.0.0.1', '2015-01-18 03:33:45'),
(53, 17, '127.0.0.1', '2015-01-18 03:34:04'),
(54, 17, '127.0.0.1', '2015-01-18 04:02:12'),
(55, 17, '127.0.0.1', '2015-01-18 04:03:33'),
(56, 17, '127.0.0.1', '2015-01-18 04:04:05'),
(57, 17, '127.0.0.1', '2015-01-18 04:08:04'),
(58, 17, '127.0.0.1', '2015-01-18 04:08:16'),
(59, 17, '127.0.0.1', '2015-01-18 04:08:27'),
(60, 17, '127.0.0.1', '2015-01-18 04:14:46'),
(61, 17, '127.0.0.1', '2015-01-18 04:41:41'),
(62, 4, '127.0.0.1', '2015-01-18 04:45:56'),
(63, 1, '127.0.0.1', '2015-01-18 05:04:14'),
(64, 4, '127.0.0.1', '2015-01-18 05:22:02'),
(65, 1, '127.0.0.1', '2015-01-18 05:22:24'),
(66, 1, '127.0.0.1', '2015-01-18 05:25:04'),
(67, 18, '127.0.0.1', '2015-01-18 05:25:19'),
(68, 18, '127.0.0.1', '2015-01-18 06:51:31'),
(69, 1, '127.0.0.1', '2015-01-18 07:05:16'),
(70, 18, '127.0.0.1', '2015-01-18 07:05:34'),
(71, 18, '127.0.0.1', '2015-01-18 07:18:03'),
(72, 18, '127.0.0.1', '2015-01-18 07:21:00'),
(73, 1, '127.0.0.1', '2015-01-18 07:27:55'),
(74, 1, '127.0.0.1', '2015-01-18 07:32:00'),
(75, 1, '127.0.0.1', '2015-01-18 07:52:14'),
(76, 4, '127.0.0.1', '2015-01-18 07:52:32'),
(77, 17, '127.0.0.1', '2015-01-18 08:52:40'),
(78, 1, '127.0.0.1', '2015-01-18 08:53:47'),
(79, 1, '127.0.0.1', '2015-01-18 08:54:32'),
(80, 17, '127.0.0.1', '2015-01-18 08:54:39'),
(81, 18, '127.0.0.1', '2015-01-18 08:55:10'),
(82, 18, '127.0.0.1', '2015-01-18 10:39:58'),
(83, 1, '127.0.0.1', '2015-01-18 10:40:33'),
(84, 4, '127.0.0.1', '2015-01-18 12:54:59'),
(85, 4, '127.0.0.1', '2015-01-18 13:14:47'),
(86, 4, '127.0.0.1', '2015-01-18 14:17:09'),
(87, 4, '127.0.0.1', '2015-01-18 14:25:30'),
(88, 4, '127.0.0.1', '2015-01-18 14:28:54'),
(89, 21, '127.0.0.1', '2015-01-18 14:30:03'),
(90, 4, '127.0.0.1', '2015-01-18 14:31:45'),
(91, 4, '127.0.0.1', '2015-01-18 15:36:31'),
(92, 4, '127.0.0.1', '2015-01-18 15:37:58'),
(93, 1, '127.0.0.1', '2015-01-18 17:00:55'),
(94, 17, '127.0.0.1', '2015-01-18 17:04:14'),
(95, 4, '127.0.0.1', '2015-01-18 17:05:29'),
(96, 17, '127.0.0.1', '2015-01-18 17:07:26'),
(97, 4, '127.0.0.1', '2015-01-18 17:13:00'),
(98, 17, '127.0.0.1', '2015-01-18 17:13:09'),
(99, 18, '127.0.0.1', '2015-01-18 17:39:26'),
(100, 17, '127.0.0.1', '2015-01-18 17:45:41'),
(101, 4, '127.0.0.1', '2015-01-18 17:47:31'),
(102, 4, '127.0.0.1', '2015-01-18 17:49:20'),
(103, 18, '127.0.0.1', '2015-01-18 17:51:07'),
(104, 17, '127.0.0.1', '2015-01-18 17:51:25'),
(105, 4, '127.0.0.1', '2015-01-18 17:53:21'),
(106, 17, '127.0.0.1', '2015-01-18 17:54:37'),
(107, 18, '127.0.0.1', '2015-01-18 17:55:39'),
(108, 18, '127.0.0.1', '2015-01-18 18:01:01'),
(109, 18, '127.0.0.1', '2015-01-18 18:07:05'),
(110, 18, '127.0.0.1', '2015-01-19 10:44:12'),
(111, 4, '127.0.0.1', '2015-01-19 10:48:20'),
(112, 4, '127.0.0.1', '2015-01-19 10:48:26'),
(113, 22, '127.0.0.1', '2015-01-19 10:49:26'),
(114, 4, '127.0.0.1', '2015-01-19 14:39:30'),
(115, 1, '127.0.0.1', '2015-01-19 17:31:47'),
(116, 4, '127.0.0.1', '2015-01-19 17:55:20'),
(117, 18, '127.0.0.1', '2015-01-19 18:03:25'),
(118, 17, '127.0.0.1', '2015-01-19 18:04:52'),
(119, 1, '127.0.0.1', '2015-01-19 18:35:51'),
(120, 1, '127.0.0.1', '2015-01-19 19:15:04'),
(121, 1, '127.0.0.1', '2015-01-19 20:24:07'),
(122, 4, '127.0.0.1', '2015-01-19 20:51:50'),
(123, 1, '127.0.0.1', '2015-01-19 20:52:29'),
(124, 4, '127.0.0.1', '2015-01-19 21:02:51'),
(125, 4, '127.0.0.1', '2015-01-19 23:29:22'),
(126, 4, '127.0.0.1', '2015-01-19 23:37:33'),
(127, 4, '127.0.0.1', '2015-01-19 23:39:11'),
(128, 4, '127.0.0.1', '2015-01-19 23:52:24'),
(129, 4, '127.0.0.1', '2015-01-20 02:41:31'),
(130, 4, '127.0.0.1', '2015-01-20 02:44:40'),
(131, 4, '127.0.0.1', '2015-01-20 04:42:30');

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE IF NOT EXISTS `login_users` (
`user_id` int(8) NOT NULL,
  `registered_number` varchar(50) DEFAULT NULL,
  `user_level` longtext NOT NULL,
  `restricted` int(1) NOT NULL DEFAULT '0',
  `username` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) DEFAULT NULL,
  `password` varchar(128) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(30) DEFAULT NULL,
  `cv` varchar(25) DEFAULT NULL,
  `transcript` varchar(25) DEFAULT NULL,
  `qualification` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `field` varchar(200) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `description` longtext
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`user_id`, `registered_number`, `user_level`, `restricted`, `username`, `name`, `lname`, `email`, `mobile`, `password`, `timestamp`, `image`, `cv`, `transcript`, `qualification`, `position`, `field`, `type`, `city`, `sex`, `dob`, `description`) VALUES
(1, NULL, 'a:1:{i:0;s:1:"1";}', 0, 'admin', 'Demo Admin', '', 'admin@localhost.com', NULL, '21232f297a57a5a743894a0e4a801fc3', '2014-09-20 08:28:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'a:1:{i:0;s:1:"2";}', 1, 'special', 'Demo Special', '', 'test.special@mail.com', NULL, '0bd6506986ec42e732ffb866d33bb14e', '2014-09-20 08:28:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'user', 'Demo User', '', 'test.user@mail.com', NULL, 'ee11cbb19052e40b07aac0ca060c23ee', '2014-09-20 08:28:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'aloka', 'aloka', 'Wimalarathne', 'aloka.wimalarathne@gmail.com', 0, '3714fdc4dd2a94263753108dec3d4960', '2014-09-22 14:35:23', '1421569164_4.png', '1421721817_4.pdf', '1421721853_4.pdf', NULL, NULL, NULL, NULL, NULL, 'Female', '2015-01-07', NULL),
(8, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'aasdasd', 'asdas', '', '1231@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-09-22 15:29:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'asdasda', 'sadas', '', '1231a@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-09-22 15:31:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'asadsa', 'asdasq', 'asdasd', '1213@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-09-22 15:36:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'aloka2', 'aloka2', 'aloka2', '12312312@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-09-23 14:35:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'qweqwe', 'weqw', 'eqweqwe', 'dada@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-10-13 06:27:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'asdasdasd', 'adasd', 'asdasd', 'abc@mail.com', NULL, 'efe6398127928f1b2e9ef3207fb82663', '2014-12-08 15:19:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'sd21212', '11123123', 'sdadasda', 'asdasd@mail.com', NULL, 'efe6398127928f1b2e9ef3207fb82663', '2014-12-08 15:23:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'klansldnals', 'dasdasd', 'sdasdasda', 'adnasldad@mail.com', NULL, 'efe6398127928f1b2e9ef3207fb82663', '2014-12-08 15:32:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'isankast', 'isankast', 'isanka', 'isankadn@yahoo.com', NULL, 'efe6398127928f1b2e9ef3207fb82663', '2014-12-08 16:36:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'asanka', 'asanka', 'dada', 'asnak@mail.com', 0, '03810a2293e9e65125db68fb54967be2', '2014-12-08 17:18:13', '1421601694_17.jpg', NULL, NULL, 'YToxOntpOjA7czoxMzoiUHJvZmVzc29yc2hpcCI7fQ==', NULL, 'YTozOntpOjA7czoxMDoiTmV0d29ya2luZyI7aToxO3M6MTY6IldlYiBkZXZlbG9wbWVudHMiO2k6MjtzOjg6IkJ1c2luZXNzIjt9', NULL, NULL, 'Male', '2015-01-08', NULL),
(18, 'isankacom', 'a:1:{i:0;s:1:"4";}', 0, 'isankacom', 'isanka com', '', 'isankacom@mail.com', 112256145, '03810a2293e9e65125db68fb54967be2', '2014-12-08 17:38:43', '1421571335_18.jpg', NULL, NULL, NULL, NULL, 'YToyOntpOjA7czoxOToiU29mdHdhcmUgUHJvZ3JhbWluZyI7aToxO3M6MTY6IldlYiBkZXZlbG9wbWVudHMiO30=', 'Semi government', 'Kurunegala', NULL, '2015-01-06', 'This is my company description'),
(19, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'abc123', 'abac123', '', 'abcqwe@mail.com', NULL, '9a457976f74ec063120c79b89eed87d8', '2015-01-18 07:32:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'abc1234', 'abc123', 'abc123', 'aasda@mail.com', NULL, '2388d563676d07c101ce19164620d96a', '2015-01-18 07:34:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'isanka2', 'isanka', '2', 'isanka@mm.com', NULL, '03810a2293e9e65125db68fb54967be2', '2015-01-19 10:48:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdescription` longtext,
  `ptechnologies` varchar(100) DEFAULT NULL,
  `pclient` varchar(100) DEFAULT NULL,
  `pgroupmode` int(11) NOT NULL,
  `prole` varchar(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `uid`, `pname`, `pdescription`, `ptechnologies`, `pclient`, `pgroupmode`, `prole`) VALUES
(1, 4, 'First Project', 'This is description', 'ajbask dkjadklasd', 'asdadasdasd', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `skills_list`
--

CREATE TABLE IF NOT EXISTS `skills_list` (
`id` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills_list`
--

INSERT INTO `skills_list` (`id`, `cat`, `name`) VALUES
(1, 'Software Programing ', 'PHP'),
(3, 'Software Programing ', 'Java'),
(4, 'Software Programing ', '.NET'),
(5, 'Software Programing ', 'Python'),
(6, 'Software Programing ', 'C/C++'),
(7, 'Software Programing ', 'Objective-C'),
(8, 'Networking', 'Wireless'),
(9, 'Networking', 'Routing'),
(10, 'Networking', 'Switching'),
(11, 'Networking', 'TCP/IP'),
(12, 'Networking', 'Virtualization'),
(13, 'Networking', 'DHCP'),
(14, 'Networking', 'LDAP'),
(15, 'Networking', 'Unix/Linux servers'),
(16, 'Networking', 'Windows servers'),
(17, 'Web applications', 'PHP'),
(18, 'Web applications', 'Python'),
(19, 'Web applications', 'Ruby'),
(20, 'Web applications', 'SQL/MySql'),
(21, 'Web applications', 'Javascript'),
(22, 'Web applications', 'HTML4/HTML5'),
(23, 'Web applications', 'Joomla'),
(24, 'Web applications', 'Wordpress'),
(25, 'Web applications', 'Drupal'),
(26, 'Web applications', 'eCommerce'),
(27, 'Web applications', 'JSF'),
(28, 'Business', 'Business process MGT'),
(29, 'Business', 'Information systems '),
(30, 'Business', 'Marketing'),
(31, 'Business', 'Planning and monitor'),
(32, 'Business', 'Project MGT'),
(33, 'Business', 'Requirements analysi'),
(34, 'Professional', 'CIMA'),
(35, 'Professional', 'CIM'),
(36, 'Professional', 'Charted'),
(37, 'Professional', 'AAT'),
(38, 'Professional', 'CCNA'),
(39, 'Professional', 'CCNP'),
(40, 'Professional', 'Java certification'),
(41, 'Professional', 'Zend Certificate');

-- --------------------------------------------------------

--
-- Table structure for table `skills_user`
--

CREATE TABLE IF NOT EXISTS `skills_user` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `skills` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills_user`
--

INSERT INTO `skills_user` (`id`, `uid`, `cat`, `skills`) VALUES
(1, 4, 'softwareprograming', 'PHP, .NET, Python, C/C++, Objective-C'),
(2, 4, 'networking', 'Wireless, Routing, TCP/IP, Virtualization, DHCP, LDAP, Unix/Linux servers, Windows servers'),
(3, 4, 'webapplications', 'PHP, Ruby, SQL/MySql, Javascript, HTML4/HTML5, Joomla, Wordpress, Drupal, eCommerce, JSF'),
(4, 4, 'business', 'Business process MGT, Marketing, Planning and monitor, Project MGT, Requirements analysi'),
(5, 4, 'professional', 'CIMA, Charted, AAT, CCNA, CCNP, Java certification, Zend Certificate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_confirm`
--
ALTER TABLE `login_confirm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_integration`
--
ALTER TABLE `login_integration`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_levels`
--
ALTER TABLE `login_levels`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `level_level` (`level_level`);

--
-- Indexes for table `login_profiles`
--
ALTER TABLE `login_profiles`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `login_profile_fields`
--
ALTER TABLE `login_profile_fields`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_settings`
--
ALTER TABLE `login_settings`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `login_timestamps`
--
ALTER TABLE `login_timestamps`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_users`
--
ALTER TABLE `login_users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_id` (`user_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_list`
--
ALTER TABLE `skills_list`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills_user`
--
ALTER TABLE `skills_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `login_confirm`
--
ALTER TABLE `login_confirm`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `login_levels`
--
ALTER TABLE `login_levels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `login_profiles`
--
ALTER TABLE `login_profiles`
MODIFY `p_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_profile_fields`
--
ALTER TABLE `login_profile_fields`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_settings`
--
ALTER TABLE `login_settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `login_timestamps`
--
ALTER TABLE `login_timestamps`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skills_list`
--
ALTER TABLE `skills_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `skills_user`
--
ALTER TABLE `skills_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
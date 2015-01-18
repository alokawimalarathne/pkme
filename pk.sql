-- phpMyAdmin SQL Dump
-- version 4.2.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 04:24 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `category`, `content`, `date`, `published`) VALUES
(1, 'first', 'new', 'this is the first article', 1421467446, 1),
(2, 'sda', 'news', 'sdasd', 1421473675, 0),
(3, 'asdas', 'news', 'dasd', 1421473694, 0),
(4, 'asda', 'news', 'sdasdasd', 1421473758, 0),
(5, 'asdasd', '', 'asdasd', 1421473795, 0),
(6, 'asdas', 'resources', 'dasd', 1421473835, 0),
(7, 'asda', 'news', 'sdasd', 1421473951, 1),
(8, 'ada', 'news', 'sdasd', 1421473964, 0),
(9, 'asda', 'resources', 'asdasd', 1421474405, 0),
(10, 'ASAS', 'news', 'AS', 1421474414, 1),
(11, 'css', 'news', 'By default, browsers will treat all native form controls (&lt;input&gt;, &lt;select&gt; and &lt;button&gt; elements) inside a &lt;fieldset disabled&gt; as disabled, preventing both keyboard and mouse interactions on them. However, if your form also includes &lt;a ... class=&quot;btn btn-*&quot;&gt; elements, these will only be given a style of pointer-events: none. As noted in the section about disabled state for buttons (and specifically in the sub-section for anchor elements), this CSS property is not yet standardized and isn''t fully supported in Opera 18 and below, or in Internet Explorer 11, and won''t prevent keyboard users from being able to focus or activate these links. So to be safe, use custom JavaScript to disable such links.', 1421475240, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;

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
(72, 18, '127.0.0.1', '2015-01-18 07:21:00');

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
  `qualification` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `field` varchar(200) DEFAULT NULL,
  `type` varchar(2) DEFAULT NULL,
  `city` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`user_id`, `registered_number`, `user_level`, `restricted`, `username`, `name`, `lname`, `email`, `mobile`, `password`, `timestamp`, `image`, `qualification`, `position`, `field`, `type`, `city`) VALUES
(1, NULL, 'a:1:{i:0;s:1:"1";}', 0, 'admin', 'Demo Admin', '', 'admin@localhost.com', NULL, '21232f297a57a5a743894a0e4a801fc3', '2014-09-20 08:28:58', NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'a:2:{i:0;s:1:"2";i:1;s:1:"3";}', 0, 'special', 'Demo Special', '', 'test.special@mail.com', NULL, '0bd6506986ec42e732ffb866d33bb14e', '2014-09-20 08:28:58', NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'user', 'Demo User', '', 'test.user@mail.com', NULL, 'ee11cbb19052e40b07aac0ca060c23ee', '2014-09-20 08:28:58', NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'aloka', 'aloka', 'Wimalarathne', 'aloka.wimalarathne@gmail.com', 776124256, '3714fdc4dd2a94263753108dec3d4960', '2014-09-22 14:35:23', '1421550050_4.png', NULL, NULL, NULL, NULL, NULL),
(8, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'aasdasd', 'asdas', '', '1231@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-09-22 15:29:53', NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'asdasda', 'sadas', '', '1231a@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-09-22 15:31:06', NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'asadsa', 'asdasq', 'asdasd', '1213@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-09-22 15:36:58', NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'aloka2', 'aloka2', 'aloka2', '12312312@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-09-23 14:35:49', NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'qweqwe', 'weqw', 'eqweqwe', 'dada@mail.com', NULL, '4297f44b13955235245b2497399d7a93', '2014-10-13 06:27:54', NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'asdasdasd', 'adasd', 'asdasd', 'abc@mail.com', NULL, 'efe6398127928f1b2e9ef3207fb82663', '2014-12-08 15:19:36', NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'sd21212', '11123123', 'sdadasda', 'asdasd@mail.com', NULL, 'efe6398127928f1b2e9ef3207fb82663', '2014-12-08 15:23:07', NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'klansldnals', 'dasdasd', 'sdasdasda', 'adnasldad@mail.com', NULL, 'efe6398127928f1b2e9ef3207fb82663', '2014-12-08 15:32:51', NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'isankast', 'isankast', 'isanka', 'isankadn@yahoo.com', NULL, 'efe6398127928f1b2e9ef3207fb82663', '2014-12-08 16:36:45', NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'asanka', 'asanka', 'dada', 'asnak@mail.com', 0, '03810a2293e9e65125db68fb54967be2', '2014-12-08 17:18:13', '1421556180_17.png', 'YToxOntpOjA7czoxOiIzIjt9', NULL, 'YToyOntpOjA7czoxOiIxIjtpOjE7czoxOiIyIjt9', NULL, NULL),
(18, 'isankacom', 'a:1:{i:0;s:1:"4";}', 0, 'isankacom', 'isankacom', '', 'isankacom@mail.com', 0, '03810a2293e9e65125db68fb54967be2', '2014-12-08 17:38:43', NULL, NULL, NULL, 'YToxOntpOjA7czoxOiIyIjt9', '2', '3');

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
(1, 4, 'abcde dasdasd', 'abcadasda  ddsda', 'asakdalnsdlas asdasd', 'abc123', 1, 'adasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
`id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `programing` longtext,
  `networking` longtext,
  `webapplication` longtext,
  `business` longtext,
  `professional` longtext,
  `cv` varchar(30) DEFAULT NULL,
  `transcript` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `uid`, `programing`, `networking`, `webapplication`, `business`, `professional`, `cv`, `transcript`) VALUES
(2, 4, 'YTozOntpOjA7czoxOiIxIjtpOjE7czoxOiIyIjtpOjI7czoxOiIzIjt9', 'YTo5OntpOjA7czoxOiIxIjtpOjE7czoxOiIyIjtpOjI7czoxOiIzIjtpOjM7czoxOiI0IjtpOjQ7czoxOiI1IjtpOjU7czoxOiI2IjtpOjY7czoxOiI3IjtpOjc7czoxOiI4IjtpOjg7czoxOiI5Ijt9', 'YToxOntpOjA7czoxOiIxIjt9', 'YTo0OntpOjA7czoxOiIyIjtpOjE7czoxOiIzIjtpOjI7czoxOiIzIjtpOjM7czoxOiI2Ijt9', 'YToyOntpOjA7czoxOiIxIjtpOjE7czoxOiIzIjt9', '1421550050_4.pdf', '1421550050_4.pdf'),
(11, 17, '', '', '', '', '', NULL, NULL);

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
-- Indexes for table `skills`
--
ALTER TABLE `skills`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login_confirm`
--
ALTER TABLE `login_confirm`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `login_levels`
--
ALTER TABLE `login_levels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `login_users`
--
ALTER TABLE `login_users`
MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
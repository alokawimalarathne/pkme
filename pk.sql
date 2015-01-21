-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2015 at 01:01 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pk`
--
CREATE DATABASE IF NOT EXISTS `pk` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `pk`;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `category` varchar(10) NOT NULL,
  `content` longtext,
  `date` int(11) NOT NULL,
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `category`, `content`, `date`, `published`) VALUES
(19, 'Facebook clamps down on fake news stories', 'news', '(Reuters) - Facebook Inc said on Tuesday it has taken steps to clamp down on &quot;hoaxes&quot; and fake news stories that can spread like wildfire on its 1.35-billion member online social network.\r\n\r\nThe company said it had introduced an option to allow Facebook users to flag a story as &quot;purposefully fake or deceitful news&quot; to reduce the distribution of news stories reported as hoaxes.\r\n\r\nFacebook said it will not remove fake news stories from its website. Instead, the company''s algorithm, which determines how widely user posts are distributed, will take into account hoax reports.\r\n\r\n&quot;A post with a link to an article that many people have reported as a hoax or chose to delete will get reduced distribution in the News Feed,&quot; Facebook explained.\r\n\r\nFacebook has become an increasingly important source of news, with 30 percent of adults in the U.S. consuming news on the world''s largest social network, according to a 2013 study by the Pew Research Center in collaboration with the John S. and James L. Knight Foundation.\r\n\r\nFacebook cited stories about dinosaur sightings and research supposedly proving the existence of Santa Claus as examples of fake news stories.\r\n\r\nFacebook said &quot;satirical&quot; content, such as news stories &quot;intended to be humorous, or content that is clearly labeled as satire,&quot; should not be affected.\r\n\r\n(Reporting by Alexei Oreskovic; editing by Andrew Hay)', 1421786084, 1),
(20, 'Google sticks to EU only application of ''right to ', 'news', '(Reuters) - Google is only removing search results from European websites when individuals invoke their &quot;right to be forgotten&quot;, contrary to regulators'' guidelines, but will review that approach soon, the company''s chief legal officer said on Monday.\r\n\r\nThe issue of how far the so-called right to be forgotten should extend has concentrated the minds of Europe''s privacy regulators since the continent''s top court ruled in May that individuals could have &quot;inadequate, irrelevant or no longer relevant&quot; information removed from search results.\r\n\r\nGoogle has consistently argued that it believes the ruling should only apply to its European websites, such as Google.de in Germany or Google.fr in France.\r\n\r\nBut the group of privacy watchdogs from EU countries, the Article 29 Working Party, concluded in November that they want search engines to scrub results globally because of the ease of switching from a European domain to Google.com.\r\n\r\nDavid Drummond, Google''s Chief Legal Officer, said the Internet giant''s approach had not changed since November and it would review it when a group of experts publishes a report on last year''s court judgment towards the end of this month.\r\n\r\n&quot;We''ve had a basic approach, we''ve followed it, on this question we''ve made removals Europe-wide but not beyond,&quot; he said at an event in Brussels on Monday.\r\n\r\nBetween September and November, an advisory council, including a former German justice minister and Wikipedia founder Jimmy Wales, held public meetings across Europe to debate the balance between privacy and the free flow of information.\r\n\r\nIt is expected to publish a report with its conclusions at the end of January to help inform Google on its application of the ruling.\r\n\r\n&quot;We''ll take that (the report), along with the Article 29 input and other input and arrive at an approach,&quot; Drummond said.\r\n\r\n&quot;It''s our strong view that there needs to be some way of limiting the concept, because it is a European concept.&quot;\r\n\r\nSince the ruling in May, Google has received more than 200,000 requests from across Europe affecting over 700,000 URLs, according to its online transparency report.\r\n\r\nThe EU''s privacy chiefs adopted a set of non-binding guidelines in November to ensure the ruling is applied consistently across the bloc''s 28 member states.\r\n\r\nCitizens whose removal requests have been refused by a search engine can appeal to their national data protection regulator, who can then take action against the company.\r\n\r\nOn Friday, the Article 29 Working Party wrote to Microsoft, Yahoo and French search engine Qwant to remind them of the regulators'' view that results should be scrubbed across all relevant domains.\r\n\r\n(Editing by David Clarke)', 1421786141, 1),
(21, 'Sony''s ''The Interview'' surpasses $40 million in di', 'news', '(Reuters) - &quot;The Interview,&quot; the Sony Pictures comedy believed to have triggered a cyber attack on the studio, has racked up over $40 million in sales from 5.8 million digital downloads, the studio said on Tuesday.\r\n\r\nMichael Lynton, chief executive of Sony Corp''s entertainment arm, called the $40 million mark &quot;a significant milestone&quot; for the studio''s unprecedented online and pay television release, on platforms such as Google Inc''s Google Play, Apple Inc''s iTunes and Time Warner Cable.\r\n\r\nThe film''s digital release on Dec. 24 was cobbled together a week after Sony Pictures shelved a wide release when major theater chains refused to screen the movie due to unspecified threats of violence from hackers. President Barack Obama called the decision to scrap the theatrical release a &quot;mistake&quot; akin to self-censorship.\r\n\r\nThe film starring Seth Rogen and James Franco, which depicts the fictional assassination of North Korea leader Kim Jong Un, has also earned $6 million at the box office after independent theaters pushed for a limited release on Christmas Day.\r\n\r\nIt was unclear if Sony Pictures would recoup its investment in the comedy, which cost $44 million to make and tens of millions more to market.\r\n\r\nThe U.S. government has blamed North Korea for the most devastating cyber attack on a private company on U.S. soil. The North Korean government called &quot;The Interview&quot; an &quot;act of war,&quot; but denies it is behind the hacking.\r\n\r\n(Reporting by Mary Milliken; Editing by Richard Chang)', 1421786197, 1),
(22, 'Intel''s diversity drive should focus on internal c', 'news', '(Reuters) - When Intel Corp (INTC.O) said this month it would spend $300 million on increasing diversity in its workforce, Silicon Valley lauded its plan to improve the &quot;pipeline&quot; of candidates by helping more women and minorities study computer science and engineering.\r\n\r\nBut focusing too hard on the pipeline, a frequent tactic of technology firms seeking to change their workforce, will benefit the chipmaker less than working on what happens inside Intel, diversity advocates say.\r\n\r\nChief Executive Officer Brian Krzanich surprised a mostly male crowd at the Consumer Electronics Show in Las Vegas by unveiling a 2020 goal for Intel to employ more women and minorities.\r\n\r\nDiversity has become a major corporate issue in the United States as companies look to improve their images and for ways to boost productivity by tapping new groups of potential employees. Intel''s effort is one of the largest to date by cash spent.\r\n\r\nSilicon Valley has a dismal track record employing those groups, and Intel is no exception: just a quarter of its U.S. employees in 2013 were women and 12 percent were Hispanic or African American, it said. By comparison, about one-third of bachelor degrees granted in computers and math go to women, according to the National Science Foundation.\r\n\r\nKrzanich described plans for educational initiatives, an area where Intel already spends $100 million annually with an undisclosed but small portion focusing on women and minorities. He also broadly promised to improve hiring and retention.\r\n\r\nA shortfall of women and minorities receiving technology-oriented education is often seen as the leading barrier to a diverse workforce in Silicon Valley.\r\n\r\nAn opinion piece in the San Francisco Chronicle said Intel''s plans &quot;hinge on the available talent produced by a limited educational pipeline.&quot; Prominent venture capitalist Paul Graham told online publication the Information last year that the lack of women technology entrepreneurs and programmers was a problem &quot;10 years upstream of us.&quot;\r\n\r\nDiversity advocates say seizing on the supply issue can obscure other causes.\r\n\r\n&quot;They are blaming the pipeline for their own faults,&quot; said Vivek Wadhwa, author of &quot;Innovating Women,&quot; noting that many technology companies no longer consider degrees of any sort, including computer science (CS), a requirement for employment.\r\n\r\n&quot;If male flunkies can join (tech companies), why do women need to have CS degrees?&quot; he asked. &quot;This is an excuse.&quot;\r\n\r\nHe and others say technology companies should look inward, working on making themselves attractive to qualified women and minority candidates who avoid or abandon technology careers.\r\n\r\nOf all science and engineering graduates, only about 31 percent of males and 15 percent of females work in related occupations, according to the U.S. Census Bureau. Just 17 percent of African Americans with science and engineering degrees go on to work in related jobs.\r\n\r\nTo draw women and minorities, Intel should make managers accountable to specific diversity goals and measure progress through employee surveys, said Katherine Kimpel, a lawyer specializing in discrimination at Sanford Heisler Kimpel LLP.\r\n\r\nIntel CEO Krzanich said he would tie executive compensation to hitting diversity targets. The company also plans to factor diversity into year-end bonuses, a spokeswoman said.\r\n\r\nLori Nishiura Mackenzie, executive director of Stanford Universityâ€™s Clayman Institute for Gender Research, said Intel should spend the bulk of its cash on what she called â€œthe frozen middleâ€ just below the top executives.\r\n\r\nEBay has a workforce that is 42 percent female, compared with around 30 percent for most technology companies. A spokeswoman said women in leadership positions rose 30 percent annually after eBay launched a gender initiative, including mentorship of five women per senior executive, at the end of 2010.   \r\n\r\nTelle Whitney, chief executive officer of the Anita Borg Institute, which focuses on women and technology, said that the best return on investment is for companies to combat unconscious bias: unintentional discrimination that comes out in words and actions.\r\n\r\nMany technology companies now offer managers training in this area, including Google Inc (GOOGL.O) and Microsoft Corp (MSFT.O).\r\n\r\nIntel already has unconscious bias training and plans more, the spokeswoman said.\r\n\r\nAvivah Wittenberg-Cox, who runs a diversity consultancy called 20-First, said Intel should focus on improving diversity in its top three management layers, through steps such as encouraging different departments to compete on goals. Intel President Renee James is female, but the chipmaker has no Hispanics or blacks at its highest levels.\r\n\r\nSilicon Valley is still seen as a nerdy boys club that is not interested in diversity, Wittenberg-Cox said. &quot;Until that image and mindset changes, the numbers will not follow.&quot;\r\n\r\n(Reporting by Noel Randewich and Sarah McBride; Editing by Peter Henderson and Lisa Shumaker)', 1421786303, 1),
(23, 'Amazon doubles down on entertainment with ''indie''', 'news', '(Reuters) - Amazon.com Inc is making a high-stakes foray into the challenging realm of independent movies, the latest step in its attempt to move beyond simply distributing digital entertainment content to creating it.\r\n\r\nAmazon said on Monday it was aiming to produce close to 12 movies a year for theatrical release which would then be available on its Prime video service within two months, significantly faster than the roughly one-year wait it normally faces to stream Hollywood releases.\r\n\r\nAmazon expects to focus on &quot;indie&quot; movies with budgets of between $5 million and $25 million, spokeswoman Sally Fouts said. While modest compared with Hollywood blockbusters, the move will add to already hefty spending at Amazon, potentially unnerving investors concerned about the company''s lack of profitability.\r\n\r\nSuch films have proved challenging even for major Hollywood studios such as Paramount and Warner Brothers, which have bowed out of the business in recent years, said Jeff Bock, Box office analyst at Exhibitor Relations.\r\n\r\n&quot;It''s a tough, tough racket to play consistently,&quot; he said, pointing to the difficulty of getting good content and the competition for quality productions at festivals like Sundance.\r\n\r\nThe move shows Amazon''s growing ambitions in digital media, coming just days after the online retailer signed director Woody Allen to create a TV series and one of its existing series won a Golden Globe Award, a first for Internet TV services.\r\n\r\nUnlike rival Netflix Inc, a standalone Internet TV service, Amazon''s Prime video service comes bundled with the Internet retailer''s two-day delivery for items purchased on the site, which costs $99 a year, a key driver of revenue for the company.', 1421786444, 0),
(24, 'University Of Colombo School Of Computing Library', 'resources', 'The UCSC Library provides its service to the staff and students of the UCSC. There are more than 1,400 registered library members. The library hosts more than 10,000 books and has a comprehensive collection of computer science books supported by the latest editions and books related to Statistics. At the library members can refer to books, journals, theses, dissertations and other resources such as magazines, newspapers and CDs, while accessing the internet in order to gather and update knowledge. There is a high demand for the theses and dissertation collection in the library as many users are doing research. The library has a reference area with a seating capacity of 137 and it also provides an electronic catelogy.', 1421786682, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `salary` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `period` varchar(20) DEFAULT NULL,
  `email` int(11) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `date` int(11) NOT NULL,
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `description`, `salary`, `city`, `experience`, `period`, `email`, `mobile`, `date`, `published`) VALUES
(2, 'Short Term Engagement', 'An ideal short term opportunity (around 3-4 months from January to March/ April, 2015) is awaiting for two recent graduate students to obtain hands-on experience in a special assignment on Business Continuity Planning (BCP) Project related to Information Systems at a Bank organization in Colombo.\r\n\r\nthe Ideal candidate should posses at a minimum of the following qualification and skills:\r\n\r\n1. should have completed a degree in information technology, business administration, business information', '30000 LKR', 'Colombo', 0, 'January to March/Apr', 0, 112825177, 1421785673, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_confirm`
--

CREATE TABLE IF NOT EXISTS `login_confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login_levels`
--

CREATE TABLE IF NOT EXISTS `login_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(255) NOT NULL,
  `level_level` int(1) NOT NULL,
  `level_disabled` tinyint(1) NOT NULL DEFAULT '0',
  `redirect` varchar(255) DEFAULT NULL,
  `welcome_email` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `level_level` (`level_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
  `p_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pfield_id` int(255) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `profile_value` longtext,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_profile_fields`
--

CREATE TABLE IF NOT EXISTS `login_profile_fields` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `section` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  `label` varchar(255) NOT NULL,
  `public` tinyint(4) NOT NULL,
  `signup` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `login_settings`
--

CREATE TABLE IF NOT EXISTS `login_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) NOT NULL,
  `option_value` longtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

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
(32, 'user-activation-enable', '0'),
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=163 ;

--
-- Dumping data for table `login_timestamps`
--

INSERT INTO `login_timestamps` (`id`, `user_id`, `ip`, `timestamp`) VALUES
(151, 1, '127.0.0.1', '2015-01-20 17:33:40'),
(152, 1, '127.0.0.1', '2015-01-20 17:46:02'),
(153, 1, '127.0.0.1', '2015-01-20 19:58:41'),
(154, 1, '127.0.0.1', '2015-01-20 20:30:29'),
(155, 23, '127.0.0.1', '2015-01-20 20:41:02'),
(156, 1, '127.0.0.1', '2015-01-20 20:44:01'),
(157, 23, '127.0.0.1', '2015-01-20 20:45:33'),
(158, 41, '127.0.0.1', '2015-01-20 20:47:29'),
(159, 37, '127.0.0.1', '2015-01-20 20:48:04'),
(160, 1, '127.0.0.1', '2015-01-20 20:48:59'),
(161, 1, '127.0.0.1', '2015-01-20 20:49:55'),
(162, 31, '127.0.0.1', '2015-01-20 20:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `login_users`
--

CREATE TABLE IF NOT EXISTS `login_users` (
  `user_id` int(8) NOT NULL AUTO_INCREMENT,
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
  `description` longtext,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id` (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `login_users`
--

INSERT INTO `login_users` (`user_id`, `registered_number`, `user_level`, `restricted`, `username`, `name`, `lname`, `email`, `mobile`, `password`, `timestamp`, `image`, `cv`, `transcript`, `qualification`, `position`, `field`, `type`, `city`, `sex`, `dob`, `description`) VALUES
(1, NULL, 'a:1:{i:0;s:1:"1";}', 0, 'admin', 'Demo Admin', '', 'admin@localhost.com', NULL, '21232f297a57a5a743894a0e4a801fc3', '2014-09-20 08:28:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'aloka', 'Aloka', 'Wimalarathne', 'alokawimalarathne@gmail.com', 776790057, '3714fdc4dd2a94263753108dec3d4960', '2015-01-20 17:47:15', '1421776530_23.jpg', '1421776530_23.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Female', '1992-12-27', NULL),
(24, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'nimesh', 'Nimesh', 'Kaveendra', 'nimesh@gmail.com', 713457923, 'b786d5c5737fa6c3331eed0c71cf5f79', '2015-01-20 17:58:16', '1421777114_24.jpg', '1421777114_24.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Male', '1991-03-14', NULL),
(25, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'kasuni', 'Kasuni', 'Liyanage', 'kasuni@gmail.com', 717777107, 'f26fe4b9737c5f00f306c67195b2cc29', '2015-01-20 18:06:30', '1421777479_25.jpg', '1421777479_25.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Female', '1992-04-07', NULL),
(26, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'piyumi', 'Piyumi', 'Samaranayaka', 'piyumi@gmail.com', 712345698, 'dfa6fd8fa887ac377619297c74f0c71a', '2015-01-20 18:12:28', '1421777798_26.jpg', '1421777798_26.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Female', '1992-09-12', NULL),
(27, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'ranil', 'Ranil', 'Abhayarathna', 'ranil@gmail.com', 713343234, '2f8a4431b0ba44c819be3ff2afcb9e06', '2015-01-20 18:17:47', '1421778029_27.jpg', '1421778029_27.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Male', '1991-04-01', NULL),
(28, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'buddhika', 'Buddhika', 'Senevirathna', 'buddhika@gmail.com', 714578994, 'e030a5646be096dced64cfdd4dd9a28d', '2015-01-20 18:21:51', '1421778434_28.jpg', '1421778372_28.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Male', '1990-02-03', NULL),
(29, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'bhagya', 'Bhagya', 'Wijesuriya', 'bhagya@gmail.com', 712378564, 'f423bc6d404fc5de4f25761676cd68d1', '2015-01-20 18:29:06', '1421778858_29.jpg', '1421778858_29.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Female', '1990-12-27', NULL),
(30, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'shashini', 'Shashini', 'Rajaguru', 'shashini@gmail.com', 774587990, 'bba1fd98efd3487bbbdd4a62411e8ecb', '2015-01-20 18:36:22', '1421779275_30.jpg', '1421779275_30.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Female', '1992-03-04', NULL),
(31, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'thilina', 'Thilina', 'Disanayaka', 'thilina@gmail.com', 0, '6ddcd8662a816b460b96144c618c4f4c', '2015-01-20 18:43:14', '1421779533_31.jpg', '1421779533_31.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Male', '1991-04-23', NULL),
(32, NULL, 'a:1:{i:0;s:1:"3";}', 0, 'laksith', 'Laksith', 'Ekanayaka', 'laksith@gmail.com', 0, '3fa1c8d2d6d34430b9ec2d8c078769d3', '2015-01-20 18:48:34', '1421779835_32.jpg', '1421779835_32.docx', NULL, NULL, NULL, NULL, NULL, NULL, 'Male', '', NULL),
(33, NULL, 'a:1:{i:0;s:1:"4";}', 0, '99x', '99X Technology', '', '99x@mail.com', 114721194, 'dcd2326b541ba90a61f860499b4c99af', '2015-01-20 18:54:16', '1421780230_33.jpg', NULL, NULL, NULL, NULL, 'YToxOntpOjA7czoxOToiU29mdHdhcmUgUHJvZ3JhbWluZyI7fQ==', 'Private', 'Colombo', NULL, '', 'Our success is primarily because of our focus, competent people, good teamwork, close collaboration, and transparent and friendly environment that empowers the culture of openness. This is all enabled by a vibrant and innovative young workforce which ensures that we deliver excellence and value on every front, when dealing with our numerous stakeholders, both locally and globally. We are dedicated to being a responsible corporate citizen and reach out to various communities through our work.'),
(34, NULL, 'a:1:{i:0;s:1:"4";}', 0, 'ifs', 'IFS', '', 'ifs@mail.com', 0, '77df3f0ff097a87d972e0deeed1d5e83', '2015-01-20 18:58:47', '1421780410_34.jpg', NULL, NULL, NULL, NULL, 'YToyOntpOjA7czoxOToiU29mdHdhcmUgUHJvZ3JhbWluZyI7aToxO3M6MTY6IldlYiBkZXZlbG9wbWVudHMiO30=', 'Multi national', 'Colombo', NULL, '', 'IFS is a globally recognized leader in developing and delivering business software for enterprise resource planning (ERP), enterprise asset management (EAM) and enterprise service management (ESM). IFS brings customers in targeted sectors closer to their business, helps them be more agile and enables them to profit from change. IFS is a public company (XSTO: IFS) that was founded in 1983 and currently has over 2,600 employees. IFS supports more than 2,200 customers worldwide from local offices and through partners in more than 60 countries.'),
(35, NULL, 'a:1:{i:0;s:1:"4";}', 0, 'cms', 'CMS', '', 'cms@mail.com', 118923456, '2392b563201578e3b420394a577be334', '2015-01-20 19:01:30', '1421780739_35.jpg', NULL, NULL, NULL, NULL, 'YTozOntpOjA7czoxOToiU29mdHdhcmUgUHJvZ3JhbWluZyI7aToxO3M6MTY6IldlYiBkZXZlbG9wbWVudHMiO2k6MjtzOjg6IkJ1c2luZXNzIjt9', 'Government', 'Colombo', NULL, '', 'Since 1997,\r\nCMS is one of Sri Lankaâ€™s best established information technology solutions providers with a sound financial base derived from its affiliated partners.\r\nWe serve a large number of corporate customers in Europe and the US.\r\nWe have sales offices in Belgium and France.'),
(36, NULL, 'a:1:{i:0;s:1:"4";}', 0, 'slt', 'Sri Lanka Telecom', '', 'slt@slt.com', 112021000, '6e0d635290e2c91f7fd039c950f6d894', '2015-01-20 19:07:29', '1421781028_36.jpg', NULL, NULL, NULL, NULL, 'YToyOntpOjA7czoxMDoiTmV0d29ya2luZyI7aToxO3M6ODoiQnVzaW5lc3MiO30=', 'Government', 'Colombo', NULL, '', 'The SLT Group has a customer base of over six million including multinational corporations, large and small corporate, public sector, retail and domestic customers. SLT group provides full range of ICT facilities and services in the areas of voice, data, broadband, wholesale, enterprise, tv and mobile services'),
(37, NULL, 'a:1:{i:0;s:1:"4";}', 0, 'wso2', 'WSO2', '', 'wso2@mail.com', 112145345, '620dff52412773f9dcd5031483b9971c', '2015-01-20 19:11:57', '1421781204_37.jpg', NULL, NULL, NULL, NULL, 'YToyOntpOjA7czoxOToiU29mdHdhcmUgUHJvZ3JhbWluZyI7aToxO3M6MTY6IldlYiBkZXZlbG9wbWVudHMiO30=', 'Private', 'Colombo', NULL, '', 'In 2005 CEO Dr. Sanjiva Weerawarana and CTO Paul Fremantle set out to revolutionize enterprise IT as we know it by introducing lean, powerful and flexible solutions that address 21st century enterprise challenges. Though continents apart they founded WSO2 as a global company that continues to innovate not only on the technology front, but business models and work culture too. WSO2 currently has offices in the US (Mountain View, CA and Bloomington, IN), UK (London), and Sri Lanka (Colombo).'),
(38, NULL, 'a:1:{i:0;s:1:"4";}', 0, 'accsoft', 'AccSoft ERP', '', 'accsoft@mail.com', 777554225, '2280da5d1734d82cffbc456029746cc8', '2015-01-20 19:15:11', '1421781543_38.jpg', NULL, NULL, NULL, NULL, 'YTozOntpOjA7czoxOToiU29mdHdhcmUgUHJvZ3JhbWluZyI7aToxO3M6ODoiQnVzaW5lc3MiO2k6MjtzOjk6IkVkdWNhdGlvbiI7fQ==', 'Private', 'Colombo', NULL, '', 'AccSoft Solution (Pvt) Ltd is the leading Information and Communications Technology (ICT) Companies in Sri Lanka. From its humble beginnings way back in 1998 AccSoft has come a long way in the Sri Lanka ICT field. Today, AccSoft Solution (Pvt) Ltd is the premier enterprise solution providers for small and medium scale enterprises in Sri Lanka as well as a high profile training Organization for several state owned and private Educational Institutes'),
(39, NULL, 'a:1:{i:0;s:1:"4";}', 0, 'dialog', 'Dialog Axiata', '', 'dialog@mail.com', 0, '91c7ec8d1c8bb75e853f70fee324a43b', '2015-01-20 19:24:31', '1421781979_39.jpg', NULL, NULL, NULL, NULL, 'YToyOntpOjA7czoxMDoiTmV0d29ya2luZyI7aToxO3M6ODoiQnVzaW5lc3MiO30=', 'Private', 'Colombo', NULL, '', 'Dialog Broadband Networks (DBN), DBA Dialog, is Sri Lanka''s 3rd largest fixed phone operator with an island wide digital wireless network. The company uses technologies such as CDMA 2000 1x, DECT, E-1 R2/PRI, CorDECT etc., to connect thousands of residential customers and businesses. Dialog Axiata PLC acquired Suntel in 2012 under and now it is operated by its subsidiary Dialog Broadband Networks (Pvt) Ltd.'),
(40, NULL, 'a:1:{i:0;s:1:"4";}', 0, 'mit', 'Millennium IT', '', 'mit@mail.com', 0, 'a10a7583541fe1c77fc10c2b17934a79', '2015-01-20 19:28:04', '1421782292_40.gif', NULL, NULL, NULL, NULL, 'YTozOntpOjA7czoxOToiU29mdHdhcmUgUHJvZ3JhbWluZyI7aToxO3M6ODoiQnVzaW5lc3MiO2k6MjtzOjEwOiJBY2NvdW50aW5nIjt9', 'Private', 'Colombo', NULL, '', 'MillenniumIT is a leading innovative trading technology business. MillenniumITâ€™s systems are used by exchange businesses around the world including,London Stock Exchange, Borsa Italiana, Oslo BÃ¸rs,Turquoise, ICAP, the London Metal Exchange, Johannesburg Stock Exchange and a series of emerging market exchanges'),
(41, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'isuru', 'Isuru', 'Balasooriya', 'irb@ucsc.lk', 0, '3699c5bc277a4eeabe37ccf34ce491f2', '2015-01-20 19:33:51', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJNU2MgbGV2ZWwiO30=', NULL, 'YToxOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7fQ==', NULL, NULL, 'Male', '', NULL),
(42, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'noel', 'Noel', 'Fernando', 'noel@ucsc.lk', 0, 'd5d8bdcfcc8bae5fd560e60b7f01cc0e', '2015-01-20 19:39:40', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJEb2N0b3JhdGUiO30=', NULL, 'YToxOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7fQ==', NULL, NULL, 'Male', '', NULL),
(43, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'amitha', 'Amitha', 'Caldera', 'ac@ucsc.lk', 0, '0c4bd27c6a82cfb316aecc3014f0505b', '2015-01-20 19:41:27', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJEb2N0b3JhdGUiO30=', NULL, 'YToxOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7fQ==', NULL, NULL, 'Male', '', NULL),
(44, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'lakshman', 'Lakshman', 'Jayarathna', 'lj@ucsc.lk', 0, '601d30a958e6604df910330239ce7fcf', '2015-01-20 19:43:46', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJEb2N0b3JhdGUiO30=', NULL, 'YToxOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7fQ==', NULL, NULL, 'Male', '', NULL),
(45, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'udeni', 'Udeni', 'Jayasinghe', 'uj@ucsc.lk', 0, '66c199983f5eddfe02424b90dd65260f', '2015-01-20 19:46:16', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJCU2MgbGV2ZWwiO30=', NULL, 'YToxOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7fQ==', NULL, NULL, 'Female', '', NULL),
(46, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'viraj', 'Viraj', 'Welgama', 'vw@ucsc.lk', 0, '70dfbca685f7424fa7ff90845d0fa564', '2015-01-20 19:48:29', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJEb2N0b3JhdGUiO30=', NULL, 'YToxOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7fQ==', NULL, NULL, 'Male', '', NULL),
(47, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'kapila', 'Kapila', 'Dias', 'gkad@ucsc.lk', 0, '653235cf4e0bde7eefe0e6ac0e65a93b', '2015-01-20 19:50:35', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJEb2N0b3JhdGUiO30=', NULL, 'YToxOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7fQ==', NULL, NULL, 'Male', '', NULL),
(48, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'Hewagamage', 'KP', 'Hewagamage', 'kph@ucsc.lk', 0, '9dd4e5d1a10b7ddf9e4f9cf4cc7eb5eb', '2015-01-20 19:53:39', NULL, NULL, NULL, 'YToxOntpOjA7czoxMzoiUHJvZmVzc29yc2hpcCI7fQ==', NULL, 'YToxOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7fQ==', NULL, NULL, '', '', NULL),
(49, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'ruwan', 'Ruwan', 'Weerasinghe', 'rw@ucsc.lk', 0, '2ef6a0c4dca503f47cfc10fd74953abc', '2015-01-20 19:55:35', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJEb2N0b3JhdGUiO30=', NULL, 'YToyOntpOjA7czoxMDoiUHJvZ3JhbWluZyI7aToxO3M6MTY6IldlYiBkZXZlbG9wbWVudHMiO30=', NULL, NULL, 'Male', '', NULL),
(50, NULL, 'a:1:{i:0;s:1:"2";}', 0, 'samantha', 'Samatha', 'Mathara Arachchi', 'sma@ucsc.lk', 0, 'f01e0d7992a3b7748538d02291b0beae', '2015-01-20 19:58:00', NULL, NULL, NULL, 'YToxOntpOjA7czo5OiJEb2N0b3JhdGUiO30=', NULL, 'YToxOntpOjA7czoxNjoiV2ViIGRldmVsb3BtZW50cyI7fQ==', NULL, NULL, 'Male', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdescription` longtext,
  `ptechnologies` varchar(100) DEFAULT NULL,
  `pclient` varchar(100) DEFAULT NULL,
  `pgroupmode` int(11) NOT NULL,
  `prole` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `uid`, `pname`, `pdescription`, `ptechnologies`, `pclient`, `pgroupmode`, `prole`) VALUES
(2, 23, 'Pickme | UCSC Job Seekers'' Portal', 'This project named PickMe | UCSC Job-seekers Portal is a web based system for the University of Colombo School Of Computing. This projectâ€™s basic scope is act as a web platform to find job easily to UCSC fresh graduates.\r\nThere are so many web based systems which provide job opportunities. But there is no such a system which is limited for UCSC students. So we discussed with our client Professional Development Center (PDC) of UCSC and decided to develop our web based system as specify for UCSC students.', 'OOB ,PHP, HTML, Javascript, Jquery, CSS,', 'Professional Development Center, university of colombo School of Computing', 1, 'Leader'),
(3, 24, 'Pickme | UCSC Job Seekers'' Portal', 'This project named PickMe | UCSC Job-seekers Portal is a web based system for the University of Colombo School Of Computing. This projectâ€™s basic scope is act as a web platform to find job easily to UCSC fresh graduates.\r\nThere are so many web based systems which provide job opportunities. But there is no such a system which is limited for UCSC students. So we discussed with our client Professional Development Center (PDC) of UCSC and decided to develop our web based system as specify for UCSC students.', 'OOB, PHP, CSS, HTML, Javascript, Jquery', 'Professional Development Center, university of colombo School of Computing', 1, 'Deputy Lea'),
(4, 25, 'Pickme | UCSC Job Seekers'' Portal', 'This project named PickMe | UCSC Job-seekers Portal is a web based system for the University of Colombo School Of Computing. This projectâ€™s basic scope is act as a web platform to find job easily to UCSC fresh graduates.\r\nThere are so many web based systems which provide job opportunities. But there is no such a system which is limited for UCSC students. So we discussed with our client Professional Development Center (PDC) of UCSC and decided to develop our web based system as specify for UCSC students.', 'OOB, PHP, HTML, CSS, Javascript, Jquery', 'Professional Development Center, university of colombo School of Computing', 1, 'Developer'),
(5, 26, 'Pickme | UCSC Job Seekers'' Portal', 'This project named PickMe | UCSC Job-seekers Portal is a web based system for the University of Colombo School Of Computing. This projectâ€™s basic scope is act as a web platform to find job easily to UCSC fresh graduates.\r\nThere are so many web based systems which provide job opportunities. But there is no such a system which is limited for UCSC students. So we discussed with our client Professional Development Center (PDC) of UCSC and decided to develop our web based system as specify for UCSC students.', 'OOB, PHP, HTML, CSS, JavaScript, Jquery', 'Professional Development Center, university of colombo School of Computing', 1, 'QA'),
(6, 27, 'Pickme | UCSC Job Seekers'' Portal', 'This project named PickMe | UCSC Job-seekers Portal is a web based system for the University of Colombo School Of Computing. This projectâ€™s basic scope is act as a web platform to find job easily to UCSC fresh graduates.\r\nThere are so many web based systems which provide job opportunities. But there is no such a system which is limited for UCSC students. So we discussed with our client Professional Development Center (PDC) of UCSC and decided to develop our web based system as specify for UCSC students.', 'OOB, PHP, HTML, CSS, Javascript, Jquery', 'Professional Development Center, university of colombo School of Computing', 1, 'Developer'),
(7, 28, 'Pickme | UCSC Job Seekers'' Portal', 'This project named PickMe | UCSC Job-seekers Portal is a web based system for the University of Colombo School Of Computing. This projectâ€™s basic scope is act as a web platform to find job easily to UCSC fresh graduates.\r\nThere are so many web based systems which provide job opportunities. But there is no such a system which is limited for UCSC students. So we discussed with our client Professional Development Center (PDC) of UCSC and decided to develop our web based system as specify for UCSC students.', 'OOB ,PHP, HTML, Javascript, Jquery, CSS,', 'Professional Development Center, university of colombo School of Computing', 1, 'Leader'),
(8, 29, 'VaccinoAssist', '', '', 'Nawaloka Hospital', 1, 'Developer'),
(9, 30, '', '', '', '', 2, ''),
(10, 32, '', '', '', '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `skills_list`
--

CREATE TABLE IF NOT EXISTS `skills_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `cat` varchar(50) NOT NULL,
  `skills` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `skills_user`
--

INSERT INTO `skills_user` (`id`, `uid`, `cat`, `skills`) VALUES
(1, 4, 'softwareprograming', 'PHP'),
(2, 4, 'networking', 'Wireless'),
(3, 4, 'webapplications', 'PHP'),
(4, 4, 'business', 'Business process MGT'),
(5, 4, 'professional', 'CIMA'),
(6, 22, 'softwareprograming', 'Java, .NET, Python'),
(7, 22, 'networking', 'Wireless, Routing'),
(8, 22, 'webapplications', 'HTML4/HTML5'),
(9, 22, 'business', 'Business process MGT, Information systems'),
(10, 22, 'professional', 'CIMA, CIM, Charted'),
(11, 23, 'softwareprograming', 'PHP, Python'),
(12, 23, 'networking', 'Routing, Switching, TCP/IP, Unix/Linux servers, Windows servers'),
(13, 23, 'webapplications', 'PHP, Python, SQL/MySql, Javascript, HTML4/HTML5, Joomla, Drupal'),
(14, 23, 'business', 'Business process MGT, Information systems, Marketing, Project MGT, Requirements analysi'),
(15, 23, 'professional', ''),
(16, 24, 'softwareprograming', 'PHP, Java, Python, C/C++'),
(17, 24, 'networking', ''),
(18, 24, 'webapplications', 'PHP, Python, SQL/MySql, Javascript, HTML4/HTML5, Joomla'),
(19, 24, 'business', ''),
(20, 24, 'professional', 'Charted, Java certification'),
(21, 25, 'softwareprograming', 'PHP, Python'),
(22, 25, 'networking', 'Routing, Switching, TCP/IP'),
(23, 25, 'webapplications', 'SQL/MySql, Javascript, HTML4/HTML5, Joomla'),
(24, 25, 'business', 'Business process MGT, Information systems, Marketing'),
(25, 25, 'professional', ''),
(26, 26, 'softwareprograming', 'PHP'),
(27, 26, 'networking', 'Routing'),
(28, 26, 'webapplications', 'PHP, Python'),
(29, 26, 'business', 'Information systems, Marketing'),
(30, 26, 'professional', 'Charted'),
(31, 27, 'softwareprograming', 'Java'),
(32, 27, 'networking', ''),
(33, 27, 'webapplications', 'HTML4/HTML5, Joomla'),
(34, 27, 'business', ''),
(35, 27, 'professional', ''),
(36, 28, 'softwareprograming', 'Java'),
(37, 28, 'networking', ''),
(38, 28, 'webapplications', 'Joomla'),
(39, 28, 'business', ''),
(40, 28, 'professional', ''),
(41, 29, 'softwareprograming', ''),
(42, 29, 'networking', 'Routing'),
(43, 29, 'webapplications', 'Joomla'),
(44, 29, 'business', 'Information systems'),
(45, 29, 'professional', ''),
(46, 30, 'softwareprograming', 'PHP'),
(47, 30, 'networking', ''),
(48, 30, 'webapplications', 'Python'),
(49, 30, 'business', 'Information systems'),
(50, 30, 'professional', ''),
(51, 31, 'softwareprograming', 'Python'),
(52, 31, 'networking', 'Routing'),
(53, 31, 'webapplications', 'Python'),
(54, 31, 'business', 'Marketing'),
(55, 31, 'professional', 'Charted'),
(56, 32, 'softwareprograming', 'C/C++'),
(57, 32, 'networking', ''),
(58, 32, 'webapplications', 'Ruby, Wordpress'),
(59, 32, 'business', ''),
(60, 32, 'professional', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
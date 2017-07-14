-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 03:23 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `forcat`
--

CREATE TABLE `forcat` (
  `id` int(255) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forcat`
--

INSERT INTO `forcat` (`id`, `name`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'HTML'),
(4, 'CSS'),
(5, 'Wordpress'),
(6, 'sports'),
(7, 'Education'),
(8, 'Jani na'),
(9, 'vc');

-- --------------------------------------------------------

--
-- Table structure for table `forcontact`
--

CREATE TABLE `forcontact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(255) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `notification` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forcontact`
--

INSERT INTO `forcontact` (`id`, `firstname`, `lastname`, `email`, `body`, `status`, `date`, `notification`) VALUES
(4, 'Md Raqibul Hasan', 'Rumman', 'rumman142228@gmail.com', 'Here The Dummy content is going on.......', 0, '2016-10-31 06:26:18', 1),
(5, 'Farzan Yasmin', 'Mim', 'mim@gmail.com', 'this is mim,,,,', 0, '2016-10-31 06:26:47', 1),
(6, 'Md Rafiz', 'Hasan', 'rafiz@yahoo.com', 'this is rafiz....', 1, '2016-10-31 06:27:22', 1),
(9, 'hasan', 'sir', 'hasan@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has....', 1, '2016-10-31 12:38:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `forfooter`
--

CREATE TABLE `forfooter` (
  `id` int(11) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forfooter`
--

INSERT INTO `forfooter` (`id`, `copyright`) VALUES
(1, 'All Right Reserved By  @Rumman@');

-- --------------------------------------------------------

--
-- Table structure for table `forlogotitleslogan`
--

CREATE TABLE `forlogotitleslogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forlogotitleslogan`
--

INSERT INTO `forlogotitleslogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Rumman''s Platform', 'this is one kind of fight', 'images/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `forpage`
--

CREATE TABLE `forpage` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forpage`
--

INSERT INTO `forpage` (`id`, `title`, `body`) VALUES
(1, 'Privacy Policy', '<p><strong>&nbsp;Privacy Policy Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>'),
(4, 'About US', '<p><strong>About Us.....Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>\r\n<p><span><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></span></p>'),
(5, 'Our Loyality', '<p>Our loayality.......<strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>\r\n<p><span><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `forpost`
--

CREATE TABLE `forpost` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `author` varchar(300) NOT NULL,
  `tags` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userroleid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forpost`
--

INSERT INTO `forpost` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userroleid`) VALUES
(11, 2, 'This is PHP post', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>', 'images/5c5543af80.jpg', 'Rumman', 'php', '2016-10-28 16:44:57', 0),
(16, 6, 'This is sports post', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>', 'images/850e4b375c.jpg', 'Rumman', 'sports', '2016-10-28 16:49:37', 0),
(17, 1, 'This is another java post', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>', 'images/3ddfcf0b20.jpg', 'Shanta', 'java', '2016-10-28 16:50:12', 1),
(18, 4, 'This is one kind of post.......you know !!!!', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>', 'images/f30917261b.jpg', 'Shanta', 'css', '2016-11-02 06:05:36', 2),
(19, 5, 'This is first wordpress post', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>', 'images/8da6ee27cc.jpg', 'Rumman', 'wordpress', '2016-11-04 14:03:11', 0),
(20, 5, 'This is another wordpress post', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>\r\n<p><span><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></span></p>', 'images/5795700625.jpg', 'Rafiz', 'wordpress', '2016-11-04 14:05:36', 0),
(21, 6, 'Thsi is a sports page', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>\r\n<p><span><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></span></p>', 'images/1423284830.jpg', 'Rumman', 'sports', '2016-11-04 14:06:25', 0),
(22, 6, 'this is another sports post', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>', 'images/4317e24e0b.jpg', 'Rumman', 'sports', '2016-11-04 14:06:55', 0),
(23, 6, 'this is another sports post yaar', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'images/05981d58e5.jpg', 'Mim', 'sports', '2016-11-04 14:08:38', 0),
(24, 6, 'this is also a sports post', '<p><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>\r\n<p><span><span><strong>Lorem Ipsum</strong><span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></span></p>', 'images/1b9f01935b.jpg', 'Rumman', 'wordpress', '2016-11-04 14:12:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `forslider`
--

CREATE TABLE `forslider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forslider`
--

INSERT INTO `forslider` (`id`, `title`, `image`) VALUES
(1, 'This is the first slidersdfg s', 'images/sliderba611f6156.jpg'),
(2, 'This is second Slider', 'images/slider/14d893ae62.jpg'),
(3, 'This is third slider', 'images/slider/228db54a46.jpg'),
(5, 'This is forth slider', 'images/slider/5c288748b7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `forsocialmedia`
--

CREATE TABLE `forsocialmedia` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gplus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forsocialmedia`
--

INSERT INTO `forsocialmedia` (`id`, `fb`, `tw`, `ln`, `gplus`) VALUES
(1, 'http://www.facebook.com ', 'http://www.twiiter.com', 'http://www.linkedin.com ', 'http://www.google.com ');

-- --------------------------------------------------------

--
-- Table structure for table `fortheme`
--

CREATE TABLE `fortheme` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fortheme`
--

INSERT INTO `fortheme` (`id`, `theme`) VALUES
(1, 'default');

-- --------------------------------------------------------

--
-- Table structure for table `foruser`
--

CREATE TABLE `foruser` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foruser`
--

INSERT INTO `foruser` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(1, '', 'rumman', 'rumman57', 'rumman142228@gmail.com', '', 0),
(3, 'Yeamoon Nishi', 'nishi', 'yeamoon', 'nishi@gmail.com', '<p>Hi I am nishi.....Hi I am nishi.....Hi I am nishi.....</p>', 1),
(4, '', 'shanta', 'shanta', 'shanta@gmail.com', '', 2),
(5, '', 'mim', 'mim', 'mim@gmail.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpap105_admins`
--

CREATE TABLE `phpap105_admins` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `status` enum('main admin','admin') NOT NULL DEFAULT 'admin'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpap105_admins`
--

INSERT INTO `phpap105_admins` (`id`, `username`, `password`, `last_name`, `first_name`, `email`, `status`) VALUES
(1, 'rumman', '‘GúÂèk!éIk€ÌàÕf', 'John', 'Smith', 'admin@domain.com', 'main admin');

-- --------------------------------------------------------

--
-- Table structure for table `phpap105_menu`
--

CREATE TABLE `phpap105_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `page_name` varchar(30) NOT NULL DEFAULT '',
  `is_menu_group` tinyint(1) NOT NULL DEFAULT '0',
  `is_removable` tinyint(1) NOT NULL DEFAULT '0',
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order_index` tinyint(3) NOT NULL DEFAULT '0',
  `icon` varchar(30) DEFAULT NULL,
  `is_dashboard_icon` tinyint(1) DEFAULT '1',
  `is_menu_item` tinyint(1) NOT NULL DEFAULT '1',
  `file_type_id` tinyint(3) NOT NULL DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpap105_menu`
--

INSERT INTO `phpap105_menu` (`id`, `name`, `page_name`, `is_menu_group`, `is_removable`, `is_hidden`, `parent_id`, `order_index`, `icon`, `is_dashboard_icon`, `is_menu_item`, `file_type_id`) VALUES
(1, 'General', '', 1, 0, 0, 0, 0, '', 1, 1, 2),
(2, 'Account Manager', '', 1, 0, 0, 0, 5, '', 1, 1, 2),
(3, 'Emails & Events', '', 1, 0, 0, 0, 10, '', 1, 1, 2),
(4, 'Statistics', '', 1, 0, 0, 0, 15, '', 1, 1, 2),
(5, 'Menu Manager', 'pages/menu_manager.php', 0, 0, 0, 1, 10, 'menu_manager.png', 1, 1, 2),
(6, 'Main', 'home.php', 0, 0, 0, 1, 0, '', 0, 1, 2),
(7, 'My Account', 'pages/my_account.php', 0, 0, 0, 2, 0, 'my_account.png', 1, 1, 2),
(8, 'Admins', 'pages/admins.php', 0, 0, 0, 2, 0, 'admins.png', 1, 1, 2),
(9, 'Users', 'pages/users.php', 0, 0, 0, 2, 5, '', 1, 1, 2),
(10, 'News', 'pages/news.php', 0, 0, 0, 3, 0, '', 1, 1, 2),
(11, 'Mass Mail', 'pages/mass_mail.php', 0, 0, 0, 3, 5, '', 1, 1, 2),
(12, 'Events', 'pages/events.php', 0, 0, 0, 3, 10, '', 1, 1, 2),
(13, 'Logs', 'pages/logs.php', 0, 0, 0, 4, 0, '', 1, 1, 2),
(14, 'Statistics', 'pages/statistics.php', 0, 0, 0, 4, 5, '', 1, 1, 2),
(15, 'Pages', '', 1, 0, 0, 0, 7, NULL, 0, 1, 2),
(16, 'Static', 'pages/static_pages.php', 0, 0, 0, 15, 0, '', 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `phpap105_settings`
--

CREATE TABLE `phpap105_settings` (
  `id` tinyint(3) NOT NULL,
  `site_name` varchar(125) NOT NULL DEFAULT '',
  `site_address` varchar(125) NOT NULL DEFAULT '',
  `css_style` varchar(10) NOT NULL DEFAULT '',
  `header_text` varchar(125) NOT NULL DEFAULT '',
  `site_language` char(2) NOT NULL DEFAULT 'en',
  `datagrid_css_style` varchar(10) NOT NULL DEFAULT 'default',
  `menu_style` enum('left','top') NOT NULL DEFAULT 'left'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phpap105_settings`
--

INSERT INTO `phpap105_settings` (`id`, `site_name`, `site_address`, `css_style`, `header_text`, `site_language`, `datagrid_css_style`, `menu_style`) VALUES
(1, 'Admin Panel Development', 'domain.com', 'blue', 'Admin Panel', 'en', 'blue', 'top');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forcat`
--
ALTER TABLE `forcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forcontact`
--
ALTER TABLE `forcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forfooter`
--
ALTER TABLE `forfooter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forlogotitleslogan`
--
ALTER TABLE `forlogotitleslogan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forpage`
--
ALTER TABLE `forpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forpost`
--
ALTER TABLE `forpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forslider`
--
ALTER TABLE `forslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forsocialmedia`
--
ALTER TABLE `forsocialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fortheme`
--
ALTER TABLE `fortheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foruser`
--
ALTER TABLE `foruser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpap105_admins`
--
ALTER TABLE `phpap105_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phpap105_menu`
--
ALTER TABLE `phpap105_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `is_menu_name` (`is_menu_group`);

--
-- Indexes for table `phpap105_settings`
--
ALTER TABLE `phpap105_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forcat`
--
ALTER TABLE `forcat`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `forcontact`
--
ALTER TABLE `forcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `forfooter`
--
ALTER TABLE `forfooter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forlogotitleslogan`
--
ALTER TABLE `forlogotitleslogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forpage`
--
ALTER TABLE `forpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forpost`
--
ALTER TABLE `forpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `forslider`
--
ALTER TABLE `forslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forsocialmedia`
--
ALTER TABLE `forsocialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fortheme`
--
ALTER TABLE `fortheme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `foruser`
--
ALTER TABLE `foruser`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `phpap105_admins`
--
ALTER TABLE `phpap105_admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `phpap105_menu`
--
ALTER TABLE `phpap105_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `phpap105_settings`
--
ALTER TABLE `phpap105_settings`
  MODIFY `id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

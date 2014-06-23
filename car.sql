-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-06-23 17:53:15
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- 表的结构 `car_active`
--

CREATE TABLE IF NOT EXISTS `car_active` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '活动ID',
  `content` varchar(255) NOT NULL COMMENT '活动内容',
  `member_price` float NOT NULL COMMENT '会员价',
  `non_member_price` float NOT NULL COMMENT '非会员价',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_booking`
--

CREATE TABLE IF NOT EXISTS `car_booking` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '订单编号',
  `member_id` int(255) NOT NULL,
  `service_id` int(255) NOT NULL,
  `book_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='预约订单列表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_dl`
--

CREATE TABLE IF NOT EXISTS `car_dl` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '驾驶证ID',
  `name` varchar(20) NOT NULL COMMENT '持有人姓名',
  `id_num` int(20) NOT NULL COMMENT '持有人身份证',
  `valid_date_start` date NOT NULL COMMENT '有效期起始日期',
  `valid_date_end` date NOT NULL COMMENT '有效期结束日期',
  `dl_level` int(2) NOT NULL COMMENT '驾照类型',
  `gender` int(1) NOT NULL COMMENT '性别',
  `birthday` date NOT NULL COMMENT '生日',
  `address` varchar(200) NOT NULL COMMENT '住址',
  `nationality` varchar(20) NOT NULL COMMENT '国籍',
  `firsttime` date NOT NULL COMMENT '初次领证日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='驾驶证信息' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `car_dl`
--

INSERT INTO `car_dl` (`id`, `name`, `id_num`, `valid_date_start`, `valid_date_end`, `dl_level`, `gender`, `birthday`, `address`, `nationality`, `firsttime`) VALUES
(5, 'asdasd', 2147483647, '2014-05-29', '2014-06-19', 7, 1, '2014-06-17', '123', '123123', '2014-05-30');

-- --------------------------------------------------------

--
-- 表的结构 `car_dl_level`
--

CREATE TABLE IF NOT EXISTS `car_dl_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '驾照类型ID',
  `name` varchar(20) NOT NULL COMMENT '驾照类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='驾照类型' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `car_dl_level`
--

INSERT INTO `car_dl_level` (`id`, `name`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'B1'),
(5, 'B2'),
(6, 'C1'),
(7, 'C2'),
(8, 'C3'),
(9, 'C4'),
(10, 'C5'),
(11, 'D'),
(12, 'E'),
(13, 'F'),
(14, 'M'),
(15, 'N'),
(16, 'P');

-- --------------------------------------------------------

--
-- 表的结构 `car_employee`
--

CREATE TABLE IF NOT EXISTS `car_employee` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '员工id',
  `name` varchar(200) NOT NULL COMMENT '员工姓名',
  `store_id` int(20) NOT NULL COMMENT '门店ID',
  `phone` int(11) NOT NULL COMMENT '联系电话',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='员工信息' AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `car_employee`
--

INSERT INTO `car_employee` (`id`, `name`, `store_id`, `phone`) VALUES
(1, '132323', 1, 123123123),
(2, 'dwqdwd', 1, 123123123),
(3, 'dwdwd', 3, 1111111),
(4, '的无谓的', 7, 2147483647),
(6, '窦唯的', 7, 12212),
(7, 'dd', 9, 12131313),
(8, '13', 1, 123),
(10, '1313', 1, 313),
(16, '12', 1, 3),
(17, '123', 1, 22),
(18, '212', 1, 323);

-- --------------------------------------------------------

--
-- 表的结构 `car_member`
--

CREATE TABLE IF NOT EXISTS `car_member` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `member_num` varchar(20) NOT NULL COMMENT '会员卡号',
  `password` varchar(15) NOT NULL COMMENT '密码',
  `dl_id` int(255) NOT NULL COMMENT '驾驶证号',
  `origin_id` int(20) NOT NULL COMMENT '用户渠道',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='会员管理' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `car_member`
--

INSERT INTO `car_member` (`id`, `member_num`, `password`, `dl_id`, `origin_id`) VALUES
(1, 'qwe', 'qweqwe', 123, 123),
(2, 'asdasd', 'asdasd', 123123, 1),
(3, 'admin', 'admin', 112121, 1),
(4, 'admin', 'admin', 112121, 1),
(5, 'admin', 'admin', 112121, 1),
(6, 'admin', 'admin', 112121, 1),
(7, '3213', '33312', 123213, 1),
(8, '3213', '33312', 1233, 2),
(9, '3213', '33312', 4, 1),
(10, '3213', '33312', 5, 1);

-- --------------------------------------------------------

--
-- 表的结构 `car_member_origin`
--

CREATE TABLE IF NOT EXISTS `car_member_origin` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '渠道ID',
  `name` varchar(30) NOT NULL COMMENT '渠道名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='渠道分类' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `car_member_origin`
--

INSERT INTO `car_member_origin` (`id`, `name`) VALUES
(1, '第一家'),
(2, '第二家');

-- --------------------------------------------------------

--
-- 表的结构 `car_notice`
--

CREATE TABLE IF NOT EXISTS `car_notice` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '公告ID',
  `content` varchar(255) NOT NULL COMMENT '公告内容',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='公告表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_reservation`
--

CREATE TABLE IF NOT EXISTS `car_reservation` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '预约ID',
  `user_id` int(10) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='预约表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_store`
--

CREATE TABLE IF NOT EXISTS `car_store` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '门店ID',
  `address` text NOT NULL COMMENT '门店地址',
  `name` text NOT NULL COMMENT '门店名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `car_store`
--

INSERT INTO `car_store` (`id`, `address`, `name`) VALUES
(1, '123', 'asd'),
(2, 'asdasd', 'asddqwd'),
(3, 'dqwdqw', 'dqwdqwd'),
(4, '2222222ssssss大赚小', '123123123'),
(7, '阿斯达到底', '阿斯达'),
(9, '打豆豆', '窦唯的');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

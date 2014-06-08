-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-06-04 16:35:20
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
-- 表的结构 `car_dl`
--

CREATE TABLE IF NOT EXISTS `car_dl` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '驾驶证ID',
  `name` text NOT NULL COMMENT '持有人姓名',
  `id_num` int(20) NOT NULL COMMENT '持有人身份证',
  `valid_date` int(20) NOT NULL COMMENT '有效期',
  `level` int(2) NOT NULL COMMENT '驾照类型',
  `gender` int(1) NOT NULL COMMENT '性别',
  `birthday` int(20) NOT NULL COMMENT '生日',
  `s1` int(20) NOT NULL COMMENT '保留字段',
  `s2` int(20) NOT NULL COMMENT '保留字段',
  `s3` int(20) NOT NULL COMMENT '保留字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='驾驶证信息' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_dl_level`
--

CREATE TABLE IF NOT EXISTS `car_dl_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '驾照类型ID',
  `name` text NOT NULL COMMENT '驾照类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='驾照类型' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_employee`
--

CREATE TABLE IF NOT EXISTS `car_employee` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '员工id',
  `name` text NOT NULL COMMENT '员工姓名',
  `store_id` int(20) NOT NULL COMMENT '门店ID',
  `phone` int(11) NOT NULL COMMENT '联系电话',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='员工信息' AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_user`
--

CREATE TABLE IF NOT EXISTS `car_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `member_num` text NOT NULL COMMENT '用户会员卡',
  `password` text NOT NULL COMMENT '用户密码',
  `dl_id` int(255) NOT NULL COMMENT '驾驶证ID',
  `origin_id` int(20) NOT NULL COMMENT '用户渠道ID',
  `s2` int(20) NOT NULL COMMENT '保留字段',
  `s3` int(20) NOT NULL COMMENT '保留字段',
  `s4` int(20) NOT NULL COMMENT '保留字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `car_user_origin`
--

CREATE TABLE IF NOT EXISTS `car_user_origin` (
  `id` int(255) NOT NULL AUTO_INCREMENT COMMENT '渠道ID',
  `name` text NOT NULL COMMENT '渠道名称',
  `s1` int(20) NOT NULL COMMENT '保留字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='渠道分类' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

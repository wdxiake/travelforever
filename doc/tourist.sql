-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014-05-11 01:15:55
-- 服务器版本: 5.5.34-cll-lve
-- PHP 版本: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tourist`
--

-- --------------------------------------------------------

--
-- 表的结构 `travel_group`
--

CREATE TABLE IF NOT EXISTS `travel_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL COMMENT '产品名称',
  `product_type` varchar(64) NOT NULL COMMENT '产品类型',
  `duration` int(11) NOT NULL COMMENT '持续时间长短',
  `begin_time` int(11) NOT NULL COMMENT '开始时间',
  `end_time` int(11) NOT NULL COMMENT '结束时间',
  `market_price` float NOT NULL COMMENT '市场价格',
  `ticket_price` float NOT NULL COMMENT '市面价格',
  `discount` float NOT NULL COMMENT '折扣',
  `from_city` varchar(64) NOT NULL DEFAULT '0' COMMENT '出发城市',
  `to_city` varchar(64) NOT NULL DEFAULT '0' COMMENT '到达城市',
  `url` varchar(128) CHARACTER SET latin1 NOT NULL COMMENT 'url地址',
  `image_url` varchar(128) CHARACTER SET latin1 NOT NULL COMMENT '图片地址',
  `current_price` float DEFAULT NULL,
  `product_summary` varchar(255) DEFAULT NULL,
  `is_deleted` int(1) DEFAULT '0',
  `create_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `time` (`create_time`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `travel_group`
--

INSERT INTO `travel_group` (`id`, `product_name`, `product_type`, `duration`, `begin_time`, `end_time`, `market_price`, `ticket_price`, `discount`, `from_city`, `to_city`, `url`, `image_url`, `current_price`, `product_summary`, `is_deleted`, `create_time`) VALUES
(1, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(4, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(5, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(6, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(7, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(8, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(9, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(10, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(11, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(12, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(13, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(14, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(15, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(16, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(17, '回归纯朴自然', '跟团游', 604800000, 2147483647, 2147483647, 80, 80, 3, '北京', '南京', 'http://www.ly.com/zizhuyou/shanghai321/47365-xianlu/', 'http://img.17u.cn/ly/cn/img/admin/ziyouxing/2014/3/5/201403050525052111.jpg', 50, '，远离城市的喧嚣，来到上海太阳岛度假酒店度过一个静谧的假期！双人两日自由行，套餐内容丰富多彩，包含垂钓、采摘、喂养动物等，还能吃到泰生健康小火锅！', 0, 0),
(18, '', '', 0, 0, 0, 0, 0, 0, '北京', '南京', '', '', 0, '', 0, 0),
(19, '', '', 0, 0, 0, 0, 0, 0, '北京', '南京', '', '', 0, '', 0, 0),
(20, '', '', 0, 0, 0, 0, 0, 0, '北京', '南京', '', '', 0, '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

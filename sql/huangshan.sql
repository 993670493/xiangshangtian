-- --------------------------------------------------------
-- 主机:                           localhost
-- 服务器版本:                        5.5.53 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.5.0.5220
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- 导出 hs 的数据库结构
CREATE DATABASE IF NOT EXISTS `hs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hs`;

-- 导出  表 hs.admin 结构
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户表id',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `passwd` varchar(50) NOT NULL COMMENT '密码',
  `head` varchar(200) NOT NULL COMMENT '头像',
  `tel` int(11) NOT NULL COMMENT '电话',
  `nums` int(10) NOT NULL DEFAULT '0' COMMENT '登录次数',
  `important` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0普通用户1管理员',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1正常0删除',
  `logintimes` datetime NOT NULL COMMENT '最近登录时间',
  `addtime` datetime NOT NULL COMMENT '注册时间',
  `updatetime` datetime NOT NULL COMMENT '修改时间',
  `deletetime` datetime NOT NULL COMMENT '删除时间',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户表';

-- 正在导出表  hs.admin 的数据：0 rows
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- 导出  表 hs.comment 结构
CREATE TABLE IF NOT EXISTS `comment` (
  `pid` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论表id',
  `head` varchar(200) NOT NULL COMMENT '头像',
  `mid` int(11) NOT NULL COMMENT '图片编号',
  `text` text NOT NULL COMMENT '文本内容',
  `aid` int(2) NOT NULL COMMENT '用户编号',
  `tid` int(11) NOT NULL COMMENT '文章编号',
  `fid` int(11) NOT NULL COMMENT '分享编号',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '1正常0删除',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `deletetime` datetime NOT NULL COMMENT '删除时间',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='评论表';

-- 正在导出表  hs.comment 的数据：0 rows
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;

-- 导出  表 hs.img 结构
CREATE TABLE IF NOT EXISTS `img` (
  `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '图片id',
  `address` varchar(200) NOT NULL DEFAULT '0' COMMENT '图片地址',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='图片表';

-- 正在导出表  hs.img 的数据：0 rows
/*!40000 ALTER TABLE `img` DISABLE KEYS */;
/*!40000 ALTER TABLE `img` ENABLE KEYS */;

-- 导出  表 hs.share 结构
CREATE TABLE IF NOT EXISTS `share` (
  `fid` int(11) NOT NULL AUTO_INCREMENT COMMENT '分享表id',
  `head` varchar(50) NOT NULL COMMENT '头像',
  `mid` int(11) NOT NULL COMMENT '图片编号',
  `aid` int(11) NOT NULL COMMENT '用户编号',
  `texts` text NOT NULL COMMENT '文本内容',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `deletetime` datetime NOT NULL COMMENT '删除时间',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1正常0删除',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='分享表';

-- 正在导出表  hs.share 的数据：0 rows
/*!40000 ALTER TABLE `share` DISABLE KEYS */;
/*!40000 ALTER TABLE `share` ENABLE KEYS */;

-- 导出  表 hs.text 结构
CREATE TABLE IF NOT EXISTS `text` (
  `tid` int(11) NOT NULL AUTO_INCREMENT COMMENT '文章表id',
  `head` varchar(200) NOT NULL COMMENT '头像',
  `mid` int(11) NOT NULL COMMENT '图片编号',
  `title` varchar(200) NOT NULL COMMENT '标题',
  `texts` text NOT NULL COMMENT '文章内容',
  `aid` tinyint(4) NOT NULL DEFAULT '1' COMMENT '用户id',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `updatetime` datetime NOT NULL COMMENT '修改时间',
  `deletetime` datetime NOT NULL COMMENT '删除时间',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1正常0删除',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文章表';

-- 正在导出表  hs.text 的数据：0 rows
/*!40000 ALTER TABLE `text` DISABLE KEYS */;
/*!40000 ALTER TABLE `text` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

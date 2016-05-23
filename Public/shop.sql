-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-05-22 16:01:55
-- 服务器版本： 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `shop_admin`
--

CREATE TABLE `shop_admin` (
  `id` tinyint(3) UNSIGNED NOT NULL COMMENT '主键',
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员名称，唯一',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '管理员密码',
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮箱'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='管理员表';

--
-- 转存表中的数据 `shop_admin`
--

INSERT INTO `shop_admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '181444127@qq.com'),
(2, 'raven', '21232f297a57a5a743894a0e4a801fc3', '181444127@qq.com'),
(7, 'siya', '626ae87f72bb4da5f09f1bdb82c8c7c9', '181444127@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `shop_album`
--

CREATE TABLE `shop_album` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `Pid` int(10) UNSIGNED NOT NULL COMMENT '对应商品id',
  `albumPath` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品图片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='相册表';

-- --------------------------------------------------------

--
-- 表的结构 `shop_cate`
--

CREATE TABLE `shop_cate` (
  `id` int(11) NOT NULL COMMENT '主键',
  `cName` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '分类名称'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='分类表';

-- --------------------------------------------------------

--
-- 表的结构 `shop_item`
--

CREATE TABLE `shop_item` (
  `id` smallint(5) UNSIGNED NOT NULL COMMENT '主键',
  `pName` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品名称',
  `cId` int(10) UNSIGNED NOT NULL COMMENT '属性分类ID',
  `pSn` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品货号',
  `pNum` int(10) UNSIGNED NOT NULL COMMENT '商品库存',
  `mPrice` decimal(10,2) NOT NULL COMMENT '市场价',
  `iPrice` decimal(10,2) NOT NULL COMMENT '网站价',
  `pDesc` mediumtext COLLATE utf8_unicode_ci COMMENT '商品简介',
  `pImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '商品图片',
  `pubTime` int(11) NOT NULL COMMENT '商品上架时间',
  `isShow` tinyint(4) NOT NULL DEFAULT '1' COMMENT '商品是否上架',
  `isHot` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `shop_user`
--

CREATE TABLE `shop_user` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键',
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '会员名称',
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL COMMENT '密码',
  `sex` enum('男','女','保密','') COLLATE utf8_unicode_ci NOT NULL DEFAULT '保密' COMMENT '性别',
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '邮箱',
  `face` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '用户头像',
  `regTime` int(10) UNSIGNED NOT NULL COMMENT '注册时间',
  `activeFlag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shop_admin`
--
ALTER TABLE `shop_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `shop_album`
--
ALTER TABLE `shop_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_cate`
--
ALTER TABLE `shop_cate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_item`
--
ALTER TABLE `shop_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_user`
--
ALTER TABLE `shop_user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `shop_admin`
--
ALTER TABLE `shop_admin`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键', AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `shop_album`
--
ALTER TABLE `shop_album`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- 使用表AUTO_INCREMENT `shop_cate`
--
ALTER TABLE `shop_cate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- 使用表AUTO_INCREMENT `shop_item`
--
ALTER TABLE `shop_item`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';
--
-- 使用表AUTO_INCREMENT `shop_user`
--
ALTER TABLE `shop_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

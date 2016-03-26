/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.9 : Database - fcdrep
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fcdrep` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `fcdrep`;

/*Table structure for table `fcdrep_access_group` */

DROP TABLE IF EXISTS `fcdrep_access_group`;

CREATE TABLE `fcdrep_access_group` (
  `gid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `remark` varchar(255) NOT NULL DEFAULT '',
  `parentid` smallint(6) NOT NULL DEFAULT '0',
  `node_id` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_access_menu` */

DROP TABLE IF EXISTS `fcdrep_access_menu`;

CREATE TABLE `fcdrep_access_menu` (
  `id` smallint(6) unsigned NOT NULL,
  `parentid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `controller` char(20) NOT NULL DEFAULT '',
  `action` char(20) NOT NULL DEFAULT '',
  `data` char(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(6) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_access_node` */

DROP TABLE IF EXISTS `fcdrep_access_node`;

CREATE TABLE `fcdrep_access_node` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `remark` varchar(255) DEFAULT '',
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_access_role` */

DROP TABLE IF EXISTS `fcdrep_access_role`;

CREATE TABLE `fcdrep_access_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `remark` varchar(255) NOT NULL DEFAULT '',
  `listorder` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_access_role_user` */

DROP TABLE IF EXISTS `fcdrep_access_role_user`;

CREATE TABLE `fcdrep_access_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_area` */

DROP TABLE IF EXISTS `fcdrep_area`;

CREATE TABLE `fcdrep_area` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentid` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL DEFAULT '',
  `listorder` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_attachment` */

DROP TABLE IF EXISTS `fcdrep_attachment`;

CREATE TABLE `fcdrep_attachment` (
  `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(50) NOT NULL DEFAULT '',
  `file_path` varchar(80) NOT NULL DEFAULT '',
  `file_size` int(10) unsigned NOT NULL DEFAULT '0',
  `file_ext` char(10) NOT NULL DEFAULT '',
  `is_image` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_thumb` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0',
  `upload_ip` char(15) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_document` */

DROP TABLE IF EXISTS `fcdrep_document`;

CREATE TABLE `fcdrep_document` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `catid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `title` varchar(120) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `keywords` varchar(120) NOT NULL DEFAULT '',
  `description` mediumtext NOT NULL,
  `create_time` int(11) unsigned NOT NULL DEFAULT '0',
  `update_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_document_article` */

DROP TABLE IF EXISTS `fcdrep_document_article`;

CREATE TABLE `fcdrep_document_article` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `documentid` int(11) unsigned NOT NULL,
  `article_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_document_category` */

DROP TABLE IF EXISTS `fcdrep_document_category`;

CREATE TABLE `fcdrep_document_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `catname` varchar(30) NOT NULL DEFAULT '',
  `parentid` smallint(5) NOT NULL DEFAULT '0',
  `title` varchar(150) NOT NULL DEFAULT '',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_document_tags` */

DROP TABLE IF EXISTS `fcdrep_document_tags`;

CREATE TABLE `fcdrep_document_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `slug` varchar(100) NOT NULL DEFAULT '',
  `num` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_document_tags_data` */

DROP TABLE IF EXISTS `fcdrep_document_tags_data`;

CREATE TABLE `fcdrep_document_tags_data` (
  `id` int(10) unsigned NOT NULL DEFAULT '0',
  `tagid` int(10) unsigned NOT NULL DEFAULT '0',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`tagid`),
  KEY `tagid` (`tagid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_document_type` */

DROP TABLE IF EXISTS `fcdrep_document_type`;

CREATE TABLE `fcdrep_document_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `description` varchar(200) NOT NULL DEFAULT '',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`,`listorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_module` */

DROP TABLE IF EXISTS `fcdrep_module`;

CREATE TABLE `fcdrep_module` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_system` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_search` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listfields` varchar(255) NOT NULL DEFAULT '',
  `setup` mediumtext NOT NULL,
  `listorder` smallint(3) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `postgroup` varchar(100) NOT NULL DEFAULT '',
  `is_post` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_module_field` */

DROP TABLE IF EXISTS `fcdrep_module_field`;

CREATE TABLE `fcdrep_module_field` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `moduleid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `field` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `tips` varchar(150) NOT NULL DEFAULT '',
  `required` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `minlength` int(10) unsigned NOT NULL DEFAULT '0',
  `maxlength` int(10) unsigned NOT NULL DEFAULT '0',
  `pattern` varchar(255) NOT NULL DEFAULT '',
  `errormsg` varchar(255) NOT NULL DEFAULT '',
  `class` varchar(20) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  `setup` mediumtext NOT NULL,
  `ispost` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `unpostgroup` varchar(60) NOT NULL DEFAULT '',
  `listorder` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_system` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_site_config` */

DROP TABLE IF EXISTS `fcdrep_site_config`;

CREATE TABLE `fcdrep_site_config` (
  `varname` varchar(20) NOT NULL DEFAULT '',
  `info` varchar(100) NOT NULL DEFAULT '',
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_site_lang` */

DROP TABLE IF EXISTS `fcdrep_site_lang`;

CREATE TABLE `fcdrep_site_lang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `mark` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_site_log` */

DROP TABLE IF EXISTS `fcdrep_site_log`;

CREATE TABLE `fcdrep_site_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `error` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `note` varchar(50) NOT NULL DEFAULT '',
  `time` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_site_navigation` */

DROP TABLE IF EXISTS `fcdrep_site_navigation`;

CREATE TABLE `fcdrep_site_navigation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(150) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_site_theme` */

DROP TABLE IF EXISTS `fcdrep_site_theme`;

CREATE TABLE `fcdrep_site_theme` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `path` varchar(150) NOT NULL DEFAULT '',
  `is_default` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_site_urlrule` */

DROP TABLE IF EXISTS `fcdrep_site_urlrule`;

CREATE TABLE `fcdrep_site_urlrule` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `is_html` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `show_rule` varchar(255) NOT NULL DEFAULT '',
  `list_rule` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_user` */

DROP TABLE IF EXISTS `fcdrep_user`;

CREATE TABLE `fcdrep_user` (
  `uid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `email` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `mobile` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `regist_time` int(11) NOT NULL DEFAULT '0',
  `datetime` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_user_address` */

DROP TABLE IF EXISTS `fcdrep_user_address`;

CREATE TABLE `fcdrep_user_address` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `country` smallint(5) unsigned NOT NULL DEFAULT '0',
  `province` smallint(5) unsigned NOT NULL DEFAULT '0',
  `city` smallint(5) unsigned NOT NULL DEFAULT '0',
  `area` smallint(5) unsigned NOT NULL DEFAULT '0',
  `address` varchar(120) CHARACTER SET big5 NOT NULL DEFAULT '',
  `is_defalut` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_user_info` */

DROP TABLE IF EXISTS `fcdrep_user_info`;

CREATE TABLE `fcdrep_user_info` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `nickname` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `avatar` varchar(100) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `age` int(3) unsigned NOT NULL DEFAULT '0',
  `birthday` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_user_online` */

DROP TABLE IF EXISTS `fcdrep_user_online`;

CREATE TABLE `fcdrep_user_online` (
  `sessionid` char(32) NOT NULL,
  `userid` int(11) unsigned NOT NULL DEFAULT '0',
  `roleid` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `login_ip` char(15) NOT NULL,
  `last_visit` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`sessionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_view_block` */

DROP TABLE IF EXISTS `fcdrep_view_block`;

CREATE TABLE `fcdrep_view_block` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `position` char(30) NOT NULL DEFAULT '',
  `name` varchar(30) NOT NULL DEFAULT '',
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_view_page` */

DROP TABLE IF EXISTS `fcdrep_view_page`;

CREATE TABLE `fcdrep_view_page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `keywords` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL DEFAULT '',
  `content` mediumtext NOT NULL,
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `fcdrep_view_position` */

DROP TABLE IF EXISTS `fcdrep_view_position`;

CREATE TABLE `fcdrep_view_position` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `listorder` tinyint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

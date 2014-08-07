/*
SQLyog v10.2 
MySQL - 5.0.67-community-nt : Database - fantasyworld
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fantasyworld` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `fantasyworld`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `title` varchar(150) NOT NULL,
  `describe` varchar(250) default '',
  `type` tinyint(2) default '0',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `category` */

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `isuid` int(11) default '0' COMMENT '被评论人',
  `type` int(11) default '0' COMMENT '0装备1武器2草药3矿石4其他',
  `dataid` int(11) default '0' COMMENT '评论的数据',
  `content` varchar(250) default '',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论表';

/*Data for the table `comment` */

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `isuid` int(11) default '0' COMMENT '被评论人',
  `commentid` int(11) default '0' COMMENT '评论表ID',
  `content` varchar(250) default '',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论附表';

/*Data for the table `comments` */

/*Table structure for table `equip` */

DROP TABLE IF EXISTS `equip`;

CREATE TABLE `equip` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `cid` int(11) default '0' COMMENT '分类id',
  `position` tinyint(2) default '0' COMMENT '0其他,1套装,2头部...',
  `belong` tinyint(2) default '0' COMMENT '0其他,1游戏,2小说,3自创',
  `belongs` varchar(150) default '',
  `material` varchar(150) default '',
  `effect` varchar(150) default '' COMMENT '特效',
  `describe` varchar(250) default '',
  `state` tinyint(2) default '0' COMMENT '0未审核,1已审核,2未通过',
  `pic` varchar(250) default '',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='装备';

/*Data for the table `equip` */

/*Table structure for table `favorites` */

DROP TABLE IF EXISTS `favorites`;

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL auto_increment,
  `cuid` int(11) NOT NULL COMMENT '收藏人',
  `type` tinyint(2) default '0' COMMENT '0装备1武器2草药3矿石4其他',
  `pid` int(11) NOT NULL default '0',
  `puid` int(11) NOT NULL default '0' COMMENT '所属人',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `puid` (`puid`),
  KEY `cuid` (`cuid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `favorites` */

/*Table structure for table `gamesfiction` */

DROP TABLE IF EXISTS `gamesfiction`;

CREATE TABLE `gamesfiction` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) default '0',
  `name` varchar(150) default '',
  `type` tinyint(2) default '0' COMMENT '0其他1游戏2小说',
  `author` varchar(150) default '',
  `describe` varchar(250) default '',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='游戏小说表';

/*Data for the table `gamesfiction` */

/*Table structure for table `herbs` */

DROP TABLE IF EXISTS `herbs`;

CREATE TABLE `herbs` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `cid` int(11) default '0' COMMENT '分类id',
  `belong` tinyint(2) default '0' COMMENT '0其他,1游戏,2小说,3自创',
  `belongs` varchar(150) default '',
  `shape` varchar(150) default NULL COMMENT '外形',
  `efficacy` varchar(150) default NULL COMMENT '功效',
  `grow` varchar(150) default '' COMMENT '生长环境',
  `associated` varchar(150) default NULL COMMENT '伴生',
  `evolution` tinyint(2) default '0' COMMENT '0不可进化1可进化',
  `evolutionary` varchar(150) default '' COMMENT '进化物',
  `guardian` varchar(100) default '' COMMENT '守护兽',
  `action` varchar(150) default '' COMMENT '作用',
  `parameter` varchar(250) default '' COMMENT '参数',
  `level` tinyint(2) default '0' COMMENT '级别',
  `describe` varchar(250) default '',
  `state` tinyint(2) default '0' COMMENT '0未审核,1已审核,2未通过',
  `pic` varchar(250) default '',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='草药';

/*Data for the table `herbs` */

/*Table structure for table `label` */

DROP TABLE IF EXISTS `label`;

CREATE TABLE `label` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL default '0' COMMENT '0默认',
  `name` char(50) default '',
  `num` smallint(8) default '0' COMMENT '使用数',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='标签';

/*Data for the table `label` */

/*Table structure for table `ore` */

DROP TABLE IF EXISTS `ore`;

CREATE TABLE `ore` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `cid` int(11) default '0' COMMENT '分类id',
  `belong` tinyint(2) default '0' COMMENT '0其他,1游戏,2小说,3自创',
  `belongs` varchar(150) default '',
  `grow` varchar(150) default '' COMMENT '生长环境',
  `action` varchar(150) default '' COMMENT '作用',
  `level` tinyint(2) default '0' COMMENT '级别',
  `describe` varchar(250) default '',
  `state` tinyint(2) default '0' COMMENT '0未审核,1已审核,2未通过',
  `pic` varchar(250) default '',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='矿石';

/*Data for the table `ore` */

/*Table structure for table `scale` */

DROP TABLE IF EXISTS `scale`;

CREATE TABLE `scale` (
  `id` int(11) NOT NULL auto_increment,
  `suid` int(11) NOT NULL COMMENT '评分人',
  `score` tinyint(2) default '0',
  `type` tinyint(2) default '0' COMMENT '0装备1武器2草药3矿石4其他',
  `pid` int(11) NOT NULL default '0',
  `puid` int(11) NOT NULL default '0' COMMENT '所属人',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `puid` (`puid`),
  KEY `suid` (`suid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='等级评分';

/*Data for the table `scale` */

/*Table structure for table `score` */

DROP TABLE IF EXISTS `score`;

CREATE TABLE `score` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `type` int(11) default '0' COMMENT '0装备1武器2草药3矿石4其他',
  `dataid` int(11) default '0' COMMENT '数据ID',
  `score` smallint(8) default '0' COMMENT '积分',
  `isadd` tinyint(2) default '0' COMMENT '0增加1减少',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='积分';

/*Data for the table `score` */

/*Table structure for table `top` */

DROP TABLE IF EXISTS `top`;

CREATE TABLE `top` (
  `id` int(11) NOT NULL auto_increment,
  `tuid` int(11) NOT NULL COMMENT '置顶人',
  `type` tinyint(2) default '0' COMMENT '0装备1武器2草药3矿石4其他',
  `pid` int(11) NOT NULL default '0',
  `puid` int(11) NOT NULL default '0' COMMENT '所属人',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `puid` (`puid`),
  KEY `tuid` (`tuid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `top` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `uid` int(11) NOT NULL auto_increment,
  `username` varchar(100) default NULL,
  `nickname` varchar(150) default NULL,
  `email` varchar(150) NOT NULL,
  `password` char(100) NOT NULL,
  `state` tinyint(2) default '1' COMMENT '1正常,0关闭',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user` */

/*Table structure for table `user_expand` */

DROP TABLE IF EXISTS `user_expand`;

CREATE TABLE `user_expand` (
  `uid` int(11) NOT NULL,
  `photo` varchar(150) default '' COMMENT '头像',
  `isactive` tinyint(2) default '0' COMMENT '0未激活1激活',
  `isstr` char(20) default NULL COMMENT '激活字符串',
  `sex` tinyint(4) default '0' COMMENT '0女1男',
  `like` varchar(150) default '' COMMENT '爱好',
  `score` smallint(8) default '0' COMMENT '积分',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  UNIQUE KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user_expand` */

/*Table structure for table `watch` */

DROP TABLE IF EXISTS `watch`;

CREATE TABLE `watch` (
  `id` int(11) NOT NULL auto_increment,
  `wuid` int(11) NOT NULL COMMENT '关注人',
  `cuid` int(11) NOT NULL COMMENT '被关注人',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `wuid` (`wuid`),
  KEY `cuid` (`cuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='关注';

/*Data for the table `watch` */

/*Table structure for table `weapon` */

DROP TABLE IF EXISTS `weapon`;

CREATE TABLE `weapon` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `cid` int(11) default '0' COMMENT '分类id',
  `belong` tinyint(2) default '0' COMMENT '0其他,1游戏,2小说,3自创',
  `belongs` varchar(150) default '',
  `shape` varchar(150) default NULL COMMENT '外形',
  `usage` varchar(150) default NULL COMMENT '使用方式',
  `attack` varchar(150) default NULL COMMENT '攻击方式',
  `material` varchar(150) default '',
  `parameter` varchar(250) default NULL COMMENT '参数',
  `people` varchar(150) default NULL COMMENT '使用人',
  `consume` varchar(150) default NULL COMMENT '消耗',
  `effect` varchar(150) default '' COMMENT '特效',
  `describe` varchar(250) default '',
  `state` tinyint(2) default '0' COMMENT '0未审核,1已审核,2未通过',
  `pic` varchar(250) default '',
  `addtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='武器';

/*Data for the table `weapon` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

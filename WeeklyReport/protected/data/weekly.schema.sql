--
-- 表的结构 `tbl_lookup`
--

DROP TABLE IF EXISTS `tbl_lookup`;
CREATE TABLE IF NOT EXISTS `tbl_lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT '名称',
  `code` int(11) NOT NULL COMMENT '编码',
  `type` varchar(64) COLLATE utf8_bin NOT NULL COMMENT '类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='配置表' AUTO_INCREMENT=9 ;

--
-- 表的结构 `tbl_project`
--

DROP TABLE IF EXISTS `tbl_project`;
CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(128) NOT NULL COMMENT '项目名称',
  `version` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 表的结构 `tbl_task`
--

DROP TABLE IF EXISTS `tbl_task`;
CREATE TABLE IF NOT EXISTS `tbl_task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rtxid` varchar(32) NOT NULL,
  `task_name` varchar(128) NOT NULL,
  `project_id` int(11) NOT NULL,
  `complete` int(11) DEFAULT NULL,
  `cost` int(11) NOT NULL DEFAULT '0',
  `continue` int(11) NOT NULL DEFAULT '1' COMMENT '是否持续跟进？',
  `week_number` int(11) NOT NULL COMMENT '周次',
  `year` int(11) NOT NULL COMMENT '年',
  `start_time` datetime NOT NULL COMMENT '开始时间',
  `end_time` datetime NOT NULL COMMENT '终止时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 表的结构 `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL COMMENT '中文姓名',
  `rtxid` varchar(32) NOT NULL COMMENT 'RTX的ID',
  `password` varchar(64) NOT NULL COMMENT '密码',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '用户的状态，1-在职；2-离职；3-休假；4-返校；',
  `create_time` datetime NOT NULL,
  `last_login_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rtxname_UNIQUE` (`rtxid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='储存用户基本资料' AUTO_INCREMENT=1 ;


--
-- 转存表中的数据 `tbl_user`，初始用户admin，密码：123456
--

INSERT INTO `tbl_user` (`id`, `name`, `rtxid`, `password`, `status`, `create_time`, `last_login_time`) VALUES
(1, '管理员', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 0, '2011-05-04 19:02:14', NULL);
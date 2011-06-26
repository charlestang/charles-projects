CREATE  TABLE IF NOT EXISTS `user` (
  `id` VARCHAR(64) NOT NULL COMMENT '微博用户的id' ,
  `nick` VARCHAR(64) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL COMMENT '用户的昵称' ,
  `fans_num` INT ZEROFILL NULL COMMENT '粉丝数量' ,
  `idol_num` INT NULL ,
  `tweet_num` INT NULL ,
  `head` VARCHAR(64) NULL COMMENT '头像url的base' ,
  `isvip` TINYINT(1)  NULL ,
  `sex` TINYINT NULL ,
  `province` INT NULL ,
  `country` INT NULL DEFAULT 1 ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci
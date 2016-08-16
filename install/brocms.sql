-- --------------------------------------------------
-- 文件名: lampcms.sql 
-- LAMP_CMS 系统安装使用的SQL查询所在的文件
-- 作者： 高洛峰
-- --------------------------------------------------



# --------------------------------------------------------
# 表的结构 bro_album ,该表用于相册
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_album;
CREATE TABLE bro_album (
  id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  pid SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
  path VARCHAR(100) NOT NULL DEFAULT '',
  title VARCHAR(100) NOT NULL DEFAULT '',
  description VARCHAR(200) NOT NULL DEFAULT '',
  INDEX album_pid(pid),
  INDEX album_path(path),
  PRIMARY KEY  (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 bro_article,该表用于文章
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_article;
CREATE TABLE bro_article (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(50) NOT NULL DEFAULT '',
  summary VARCHAR(200) NOT NULL DEFAULT '',
  posttime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  uid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  comefrom VARCHAR(50) NOT NULL DEFAULT '',
  content TEXT NOT NULL,
  keyword VARCHAR(20) NOT NULL DEFAULT '',
  pid SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
  audit SMALLINT(1) UNSIGNED NOT NULL DEFAULT '0',
  recommend SMALLINT(1) UNSIGNED NOT NULL DEFAULT '0',
  allow SMALLINT(1) UNSIGNED NOT NULL DEFAULT '1',
  views SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY  (id),
  INDEX article_title(title),
  INDEX article_uid(uid),
  INDEX article_pid(pid),
  INDEX article_audit(audit),
  INDEX article_recommend(recommend),
  INDEX article_allow(allow),
  INDEX article_keyword(keyword)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 bro_comment,该表用于评论
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_comment;
CREATE TABLE bro_comment (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  uid INT(11) UNSIGNED NOT NULL DEFAULT '0',
  aid INT(11) UNSIGNED NOT NULL DEFAULT '0',
  ptime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  content TEXT NOT NULL,
  cmt SMALLINT(5) NOT NULL DEFAULT 0,
  PRIMARY KEY  (id),
  INDEX comment_uid(uid),
  INDEX comment_aid(aid)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


# --------------------------------------------------------
# 表的结构 bro_column,该表用于栏目
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_column;
CREATE TABLE bro_column (
  id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  pid SMALLINT(5) UNSIGNED NOT NULL DEFAUlT 0,
  path VARCHAR(100) NOT NULL DEFAULT '',
  title VARCHAR(100) NOT NULL DEFAULT '',
  description VARCHAR(200) NOT NULL default '',
  picid SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
  audit SMALLINT(1) UNSIGNED NOT NULL DEFAULT '1',
  ord SMALLINT(3) UNSIGNED NOT NULL DEFAULT 0,
  display SMALLINT(3) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY  (id),
  INDEX column_pid(pid),
  INDEX column_path(path),
  INDEX column_audit(audit),
  INDEX column_ord(ord),
  INDEX column_display(display),
  INDEX column_picid(picid)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 bro_image,该表用于图片
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_image;
CREATE TABLE bro_image (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  pid SMALLINT(4)  UNSIGNED NOT NULL DEFAULT 0,
  name CHAR(24) NOT NULL DEFAULT '',
  water TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY  (id),
  KEY image_pid (pid)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 bro_user,该表用于用户
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_user;
CREATE TABLE bro_user (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  gid SMALLINT(4)  UNSIGNED NOT NULL,
  username VARCHAR(20) NOT NULL DEFAULT '',
  userpwd VARCHAR(40) NOT NULL DEFAULT '',
  email VARCHAR(60) NOT NULL DEFAULT '',
  regtime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  sex SMALLINT(3)  NOT NULL DEFAULT 0,
  info VARCHAR(120) NOT NULL DEFAULT '',
  upic CHAR(24) NOT NULL DEFAULT '',
  disable SMALLINT(3) UNSIGNED NOT NULL DEFAULT 0,
  views SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY  (id),
  INDEX user_gid(gid),
  INDEX user_username(username),
  INDEX user_userpwd(userpwd),
  INDEX user_disable(disable)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 bro_group,该表用于用户
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_group;
CREATE TABLE bro_group (
  id SMALLINT(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  groupname VARCHAR(20) NOT NULL DEFAULT '',
  description VARCHAR(200) NOT NULL DEFAULT '',
  useradmin TINYINT(1) NOT NULL DEFAULT 0,
  webadmin TINYINT(1) NOT NULL DEFAULT 0,
  articleadmin TINYINT(1) NOT NULL DEFAULT 0,
  sendarticle TINYINT(1) NOT NULL DEFAULT 0,
  sendcomment TINYINT(1) NOT NULL DEFAULT 0,
  sendmessage TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY  (id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# --------------------------------------------------------
# 表的结构 bro_message,该表用于用户站内消息
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_message;
CREATE TABLE bro_message (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  title  VARCHAR(80) NOT NULL DEFAULT '',
  uid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  revicename VARCHAR(30) NOT NULL DEFAULT '',
  ptime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  content TEXT NOT NULL,
  stutas SMALLINT NOT NULL DEFAULT 0,
  PRIMARY KEY(id),
  INDEX message_uid(uid),
  INDEX message_revicename(revicename),
  INDEX message_stutas(stutas)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


# --------------------------------------------------------
# 表的结构 bro_flink,该表用于友情链接
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_flink;
CREATE TABLE bro_flink (
  id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  webname VARCHAR(30) NOT NULL DEFAULT '',
  url VARCHAR(60) NOT NULL DEFAULT '',
  logo VARCHAR(60) NOT NULL DEFAULT '',
  rname VARCHAR(30) NOT NULL DEFAULT '',
  email VARCHAR(50) NOT NULL DEFAULT '',
  dtime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  msg VARCHAR(200) NOT NULL DEFAULT '',
  list SMALLINT(1) UNSIGNED NOT NULL DEFAULT '0',
  audit SMALLINT(1) UNSIGNED NOT NULL DEFAULT 0,
  ord SMALLINT(3) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY  (id),
  INDEX flink_list(list),
  INDEX flink_audit(audit),
  INDEX flink_ord(ord)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


# --------------------------------------------------------
# 表的结构 bro_notice,该表用于公告
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_notice;
CREATE TABLE bro_notice (
  id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(80) NOT NULL DEFAULT '',
  color CHAR(6) NOT NULL DEFAULT '000000',
  starttime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  endtime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  content TEXT NOT NULL,
  display SMALLINT(1) UNSIGNED NOT NULL DEFAULT '1',
  ord SMALLINT(3) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY  (id),
  INDEX notice_starttime(starttime),
  INDEX notice_endtime(endtime),
  INDEX notice_display(display),
  INDEX notice_ord(ord)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;



# --------------------------------------------------------
# 表的结构 bro_play,该表用于幻灯播放
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_play;
CREATE TABLE bro_play (
  id SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  aid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  title VARCHAR(80) NOT NULL DEFAULT '',
  picid SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
  starttime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  endtime INT(10) UNSIGNED NOT NULL DEFAULT '0',
  display SMALLINT(1) UNSIGNED NOT NULL DEFAULT '1',
  ord SMALLINT(3) UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY  (id),
  INDEX play_aid(aid),
  INDEX play_picid(picid),
  INDEX play_starttime(starttime),
  INDEX play_endtime(endtime),
  INDEX play_ord(ord),
  INDEX play_display(display)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;


# --------------------------------------------------------
# 表的结构 bro_dynamic,该表用于用户的动态消息. 
# --------------------------------------------------------

DROP TABLE IF EXISTS bro_dynamic;
CREATE TABLE bro_dynamic (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  uid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  otype SMALLINT(1) UNSIGNED NOT NULL DEFAULT 0, 
  ptime INT(11) UNSIGNED NOT NULL DEFAULT 0,
  pid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  cid INT(11) UNSIGNED NOT NULL DEFAULT 0,
  title VARCHAR(100) NOT NULL DEFAULT '',
  PRIMARY KEY(id),
  INDEX dynamic_uid(uid),
  INDEX dynamic_otype(otype),
  INDEX dynamic_pid(pid),
  INDEX dynamic_cid(cid)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# 安装时插入两个默认组
INSERT INTO bro_group(id,groupname,description, useradmin, webadmin,articleadmin,sendarticle,sendcomment,sendmessage) VALUES('1','超级管理员','超级管理员用户组，该组的用户具有全部的权限','1', '1','1', '1','1', '1');

INSERT INTO bro_group(groupname,description, useradmin, webadmin,articleadmin,sendarticle,sendcomment,sendmessage) VALUES('普通会员','新注册用户默认属于该组，只具有发评论和短消息的权限','0', '0','0', '0','1', '1');

DROP DATABASE  IF EXISTS `php_db`;

CREATE DATABASE IF NOT EXISTS `php_db`;

USE `php_db`;

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL UNIQUE,
  `pass` char(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `user` (`uname`,  `email`,  `pass`) VALUES
	('shimaa', 'shimaa@gamil.com', 'shimaa123' ),
	('momica', 'momica@gamil.com', 'momica123' );
        
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL ,
  `pname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT  NULL,
   PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `product` (`pid` ,  `pname` ,  `fname`) VALUES
	('1', 'XYZ', 'file1' );

CREATE TABLE IF NOT EXISTS `token` (
  `tid` int(11) NOT NULL AUTO_INCREMENT ,
  `id` int(11) NOT NULL ,
  `rememberme` char(50) NOT NULL,
   PRIMARY KEY (`tid`),
   FOREIGN KEY (`id`) references user(uid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `token` (`id` ,`rememberme` )VALUES
	('1' ,'aaa111bbb222ccc3333' );

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(11) NOT NULL AUTO_INCREMENT ,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `count` int(11) NOT NULL,
  FOREIGN KEY (`userid`) references user(uid),
  FOREIGN KEY (`productid` ) references product (pid),
  PRIMARY KEY (`oid`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

INSERT INTO `orders` (`oid` ,  `userid` ,  `productid` , `date` ,`count`)VALUES
	('1', '1', '1' ,'2018-08-28 22:52:14', '1');
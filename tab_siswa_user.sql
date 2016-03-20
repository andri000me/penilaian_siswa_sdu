/*
Navicat MySQL Data Transfer

Source Server         : localhost_server_c
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : penilaian_siswa_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-03-20 17:01:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tab_siswa`
-- ----------------------------
DROP TABLE IF EXISTS `tab_siswa`;
CREATE TABLE `tab_siswa` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `nis` varchar(100) DEFAULT NULL,
  `nama_siswa` varchar(200) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text,
  `id_kelas` int(25) DEFAULT NULL,
  `telp` text,
  `foto` varchar(250) DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `date_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL,
  `user_delete` varchar(50) DEFAULT NULL,
  `date_delete` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_siswa
-- ----------------------------

-- ----------------------------
-- Table structure for `tab_user`
-- ----------------------------
DROP TABLE IF EXISTS `tab_user`;
CREATE TABLE `tab_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `user_insert` varchar(100) DEFAULT NULL,
  `date_insert` varchar(100) DEFAULT NULL,
  `user_update` varchar(100) DEFAULT NULL,
  `date_update` varchar(100) DEFAULT NULL,
  `user_delete` varchar(100) DEFAULT NULL,
  `date_delete` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tab_user
-- ----------------------------

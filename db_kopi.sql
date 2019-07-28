/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.20 : Database - db_kopi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kopi` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_kopi`;

/*Table structure for table `tb_kabupaten` */

DROP TABLE IF EXISTS `tb_kabupaten`;

CREATE TABLE `tb_kabupaten` (
  `id_kab` int(11) NOT NULL AUTO_INCREMENT,
  `kabupaten` varchar(50) DEFAULT NULL,
  `longitude` varchar(25) DEFAULT NULL,
  `latitude` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_kab`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kabupaten` */

insert  into `tb_kabupaten`(`id_kab`,`kabupaten`,`longitude`,`latitude`) values (35,'Lampung Barat','104.157533','-5.117320');

/*Table structure for table `tb_penghasilan` */

DROP TABLE IF EXISTS `tb_penghasilan`;

CREATE TABLE `tb_penghasilan` (
  `id_penghasilan` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` char(4) DEFAULT NULL,
  `tbm` float DEFAULT NULL,
  `tm` float DEFAULT NULL,
  `tr` float DEFAULT NULL,
  `jumlah` float DEFAULT NULL,
  `id_kab` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penghasilan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tb_penghasilan` */

insert  into `tb_penghasilan`(`id_penghasilan`,`tahun`,`tbm`,`tm`,`tr`,`jumlah`,`id_kab`) values (1,'2015',555,7667,7667,15889,35),(3,'2014',33,44,55,132,35);

/*Table structure for table `detail_penghasilan` */

DROP TABLE IF EXISTS `detail_penghasilan`;

/*!50001 DROP VIEW IF EXISTS `detail_penghasilan` */;
/*!50001 DROP TABLE IF EXISTS `detail_penghasilan` */;

/*!50001 CREATE TABLE  `detail_penghasilan`(
 `id_penghasilan` int(11) ,
 `tahun` char(4) ,
 `tbm` float ,
 `tm` float ,
 `tr` float ,
 `jumlah` float ,
 `id_kab` int(11) ,
 `kabupaten` varchar(50) ,
 `longitude` varchar(25) ,
 `latitude` varchar(25) 
)*/;

/*View structure for view detail_penghasilan */

/*!50001 DROP TABLE IF EXISTS `detail_penghasilan` */;
/*!50001 DROP VIEW IF EXISTS `detail_penghasilan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_penghasilan` AS select `tb_penghasilan`.`id_penghasilan` AS `id_penghasilan`,`tb_penghasilan`.`tahun` AS `tahun`,`tb_penghasilan`.`tbm` AS `tbm`,`tb_penghasilan`.`tm` AS `tm`,`tb_penghasilan`.`tr` AS `tr`,`tb_penghasilan`.`jumlah` AS `jumlah`,`tb_kabupaten`.`id_kab` AS `id_kab`,`tb_kabupaten`.`kabupaten` AS `kabupaten`,`tb_kabupaten`.`longitude` AS `longitude`,`tb_kabupaten`.`latitude` AS `latitude` from (`tb_penghasilan` join `tb_kabupaten` on((`tb_penghasilan`.`id_kab` = `tb_kabupaten`.`id_kab`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

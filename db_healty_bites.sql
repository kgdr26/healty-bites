/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.5.16-MariaDB : Database - db_healty_bites
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_healty_bites` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_healty_bites`;

/*Table structure for table `mst_category` */

DROP TABLE IF EXISTS `mst_category`;

CREATE TABLE `mst_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mst_category` */

insert  into `mst_category`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'LUNCH',1,1,'2023-04-20 16:49:13'),
(2,'Snack',1,1,'2023-04-20 16:51:17'),
(3,'salads',1,1,'2023-04-20 17:44:25');

/*Table structure for table `mst_contentlayanan` */

DROP TABLE IF EXISTS `mst_contentlayanan`;

CREATE TABLE `mst_contentlayanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_layanan` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mst_contentlayanan` */

insert  into `mst_contentlayanan`(`id`,`id_layanan`,`name`,`content`,`is_active`,`update_by`,`last_update`) values 
(1,1,'Tes dingin','Tesnnnmndsnsdncn skjd vcj xdscvm xvdvsdvdsvdfbhgf',1,1,'2023-05-10 14:43:46'),
(2,2,'ggggggg','dfgdfgdfbgdfbgdfbdfbfddfdfxdzsfvb',1,1,'2023-05-10 14:44:07');

/*Table structure for table `mst_layanan` */

DROP TABLE IF EXISTS `mst_layanan`;

CREATE TABLE `mst_layanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mst_layanan` */

insert  into `mst_layanan`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'food',1,1,'2023-05-07 16:58:38'),
(2,'Drink',1,1,'2023-05-07 16:58:55');

/*Table structure for table `mst_product` */

DROP TABLE IF EXISTS `mst_product`;

CREATE TABLE `mst_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mst_product` */

insert  into `mst_product`(`id`,`id_category`,`name`,`price`,`description`,`img`,`is_active`,`update_by`,`last_update`) values 
(1,1,'Bold Bulgogi',15000,'Lagi kebanyakan makan daging melulu dari kemarin, dan malam ini waktunya go green dulu ????\r\nSaya order “Bold Bulgogi” yg harganya 15k. Nikmat banget nih! Semangkuk full isi berbagai macam sayuran dengan potongan daging bulgogi khas korea. MUST!','contoh_1.png',1,1,'2023-05-03 19:06:59'),
(2,2,'Tes',30000,'bjkjkj','71493.png',1,1,'2023-05-10 15:29:35'),
(3,1,'Cobb',40000,'Makananan enak sehati bergizi murah pula harga nya','71493.png',1,1,'2023-05-07 09:53:04');

/*Table structure for table `mst_role` */

DROP TABLE IF EXISTS `mst_role`;

CREATE TABLE `mst_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mst_role` */

insert  into `mst_role`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'ADMINISTRATOR',1,1,'2023-04-14 14:09:18'),
(2,'CUSTOMER',1,1,'2023-04-15 19:29:52');

/*Table structure for table `mst_sett_home` */

DROP TABLE IF EXISTS `mst_sett_home`;

CREATE TABLE `mst_sett_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` mediumtext DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mst_sett_home` */

insert  into `mst_sett_home`(`id`,`text`,`update_by`,`last_update`) values 
(1,'Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting.',1,'2023-05-10 15:37:25'),
(2,'Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting.',1,'2023-05-10 15:38:09'),
(3,'Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. ',1,'2023-05-10 15:39:39');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`pass`,`role_id`,`name`,`email`,`foto`,`is_active`,`update_by`,`last_update`) values 
(1,'kgdr','$2y$10$XUvLMfGJPSkg5KzRGdc/t.f/Auw2xwQEPUburLlfInct9dDFCvm7q','1',1,'Kang Dru','kgdr@gmail.com','default.jpg',1,1,'2023-04-15 19:37:45'),
(2,'adm','$2y$10$XUvLMfGJPSkg5KzRGdc/t.f/Auw2xwQEPUburLlfInct9dDFCvm7q','1',1,'Admin','adm@gmail.com','default.jpg',1,1,'2023-04-15 19:37:52'),
(3,'usr','$2y$10$Kb5Cm.gR4mqcFsaKzmmWDOM0FbxIDjqCmNm4PhaQqyzUug8wLM5Va','1',2,'Tes usr','usr@gmail.com','80763.png',1,1,'2023-04-20 13:03:03'),
(4,'ts1','$2y$10$v2zW79n83Myb5b4FqnFwD.60mRvfMTkjs1NSd7BrW3dsJAjYAp0Xm','5',2,'fgfg','gfg','default.jpg',1,1,'2023-05-10 11:26:03'),
(5,'ts2','$2y$10$3LpQZJs3nxD0HOaTfSX81..lY0COorTPmQryCy25eyI2uos0mnnTO','1',2,'tes regis','dgfsdgdf','default.jpg',1,1,'2023-05-10 11:26:07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

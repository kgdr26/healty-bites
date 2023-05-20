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

/*Table structure for table `mst_bahan` */

DROP TABLE IF EXISTS `mst_bahan`;

CREATE TABLE `mst_bahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `serving` varchar(255) DEFAULT NULL,
  `energy` varchar(255) DEFAULT NULL,
  `protein` varchar(255) DEFAULT NULL,
  `fat` varchar(255) DEFAULT NULL,
  `carbohydrate` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `type_bahan` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `mst_bahan` */

insert  into `mst_bahan`(`id`,`name`,`serving`,`energy`,`protein`,`fat`,`carbohydrate`,`foto`,`type_bahan`,`price`,`is_active`,`update_by`,`last_update`) values 
(1,'Organic Romaine','120','20.0','1.0','0','4.0','42217.jpg',2,1000,1,1,'2023-05-13 06:59:24'),
(2,'Red & White Cabbage','150','37.0','2.0','0','9.0','57143.jpg',2,1000,1,1,'2023-05-13 06:59:00'),
(3,'Avocado','40','64.0','1.0','6.0','3.0','17536.jpg',3,5000,1,1,'2023-05-13 07:03:16'),
(4,'Honey Mustard','5','10.5','0','1.0','0.5','87182.jpg',4,5000,1,1,'2023-05-13 07:26:46'),
(5,'Cheddar','5','10.5','0','1.5','0.5','11268.jpg',3,5000,1,1,'2023-05-13 07:56:43'),
(6,'Tomato Wrap','100','14.0','4.0','3.0','23.0','59044.png',1,5000,1,1,'2023-05-20 09:00:35'),
(7,'Spinach Wrap','100','100.0','2.0','1.0','20.0','93360.png',1,5000,1,1,'2023-05-20 09:01:17'),
(8,'Regular Wrap','100','101.0','3.0','2.0','18.0','15868.jpg',1,5000,1,1,'2023-05-20 09:01:56');

/*Table structure for table `mst_category` */

DROP TABLE IF EXISTS `mst_category`;

CREATE TABLE `mst_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `mst_category` */

insert  into `mst_category`(`id`,`name`,`price`,`foto`,`is_active`,`update_by`,`last_update`) values 
(1,'salads',5000,'75815.jpg',1,1,'2023-05-12 23:19:55'),
(2,'WRAPS',5000,'18446.jpg',1,1,'2023-05-12 23:20:52'),
(3,'Warm Quinoa Bowls',10000,'59407.jpg',1,1,'2023-05-12 23:21:14');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mst_contentlayanan` */

/*Table structure for table `mst_layanan` */

DROP TABLE IF EXISTS `mst_layanan`;

CREATE TABLE `mst_layanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mst_layanan` */

/*Table structure for table `mst_product` */

DROP TABLE IF EXISTS `mst_product`;

CREATE TABLE `mst_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_category` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `bread` varchar(255) DEFAULT NULL,
  `greens` varchar(255) DEFAULT NULL,
  `toppings` varchar(255) DEFAULT NULL,
  `dressings` varchar(255) DEFAULT NULL,
  `wishlist` text DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mst_product` */

insert  into `mst_product`(`id`,`id_category`,`name`,`price`,`description`,`img`,`bread`,`greens`,`toppings`,`dressings`,`wishlist`,`is_active`,`update_by`,`last_update`) values 
(1,1,'Hail Caesar',45000,'Enak, Nikmat, & Bergizi , poko nya enak banget dah murah pula berkualitas','51073.png','[]','[\"1\",\"2\"]','[\"3\",\"5\"]','[\"4\"]','[\"1\",\"2\",\"6\"]',1,1,'2023-05-20 10:02:31'),
(2,2,'Tuna San',20000,'Nutritional information may vary depending on portioning.','58861.png','[\"7\"]','[\"1\"]','[\"3\"]','[\"4\"]','[]',1,1,'2023-05-20 09:54:10'),
(3,2,'Cobb',30000,'Enak pok nya enbak dah poko nya enak enak','28435.png','[\"8\"]','[\"2\"]','[\"5\"]','[\"4\"]','[]',1,1,'2023-05-20 12:23:08');

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

/*Table structure for table `mst_seat` */

DROP TABLE IF EXISTS `mst_seat`;

CREATE TABLE `mst_seat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

/*Data for the table `mst_seat` */

insert  into `mst_seat`(`id`,`name`,`status`,`is_active`,`update_by`,`last_update`) values 
(1,'Meja 1',0,1,1,'2023-05-14 07:51:38'),
(2,'Meja 2',0,1,1,'2023-05-14 07:54:15'),
(3,'Meja 3',0,1,1,'2023-05-14 07:54:16'),
(4,'Meja 4',1,1,1,'2023-05-14 09:54:33'),
(5,'Meja 5',0,1,1,'2023-05-14 07:54:19'),
(6,'Meja 6',0,1,1,'2023-05-14 07:54:20'),
(7,'Meja 7',0,1,1,'2023-05-14 07:54:22'),
(8,'Meja 8',1,1,1,'2023-05-14 10:10:01'),
(9,'Meja 9',0,1,1,'2023-05-14 07:54:24'),
(10,'Meja 10',0,1,1,'2023-05-14 07:54:25'),
(11,'Meja 11',0,1,1,'2023-05-14 07:54:26'),
(12,'Meja 12',0,1,1,'2023-05-14 07:54:27'),
(13,'Meja 13',0,1,1,'2023-05-14 07:54:29'),
(14,'Meja 14',0,1,1,'2023-05-14 07:54:30'),
(15,'Meja 15',0,1,1,'2023-05-14 07:54:31'),
(16,'Meja 16',0,1,1,'2023-05-14 07:54:32'),
(17,'Meja 17',0,1,1,'2023-05-14 08:05:28'),
(18,'Meja 18',0,1,1,'2023-05-14 07:54:35'),
(19,'MEja 19',0,1,1,'2023-05-14 07:54:36'),
(20,'MEja 20',0,1,1,'2023-05-14 07:54:38');

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

/*Table structure for table `mst_tahap_order` */

DROP TABLE IF EXISTS `mst_tahap_order`;

CREATE TABLE `mst_tahap_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `mst_tahap_order` */

insert  into `mst_tahap_order`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'Ordering',1,1,'2023-05-14 07:44:23'),
(2,'Cooked',1,1,'2023-05-14 07:45:28'),
(3,'Delivery',1,1,'2023-05-14 07:46:14'),
(4,'Waiting for payment',1,1,'2023-05-14 07:46:45'),
(5,'Accepted',1,1,'2023-05-14 07:47:03'),
(6,'Order Received',1,1,'2023-05-20 11:55:56'),
(7,'Waiting Approve Payment',1,1,'2023-05-20 11:24:42'),
(8,'Cancel',1,1,'2023-05-20 11:48:11');

/*Table structure for table `trx_order` */

DROP TABLE IF EXISTS `trx_order`;

CREATE TABLE `trx_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `jns_product` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `order_methode` int(11) DEFAULT NULL,
  `payment_methode` int(11) DEFAULT NULL,
  `id_meja` int(11) DEFAULT NULL,
  `id_tahap_order` int(11) DEFAULT NULL,
  `tgl_order` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `trx_order` */

insert  into `trx_order`(`id`,`kode`,`id_product`,`jns_product`,`qty`,`harga`,`order_methode`,`payment_methode`,`id_meja`,`id_tahap_order`,`tgl_order`,`id_user`,`bukti_pembayaran`) values 
(0,'ORD.2023.05.0001',1,1,5,225000,1,NULL,NULL,6,'2023-05-14 02:31:59',6,NULL),
(2,'ORD.2023.05.0002',1,1,5,225000,2,NULL,4,1,'2023-05-14 02:32:51',6,NULL),
(3,'ORD.2023.05.0003',1,1,10,450000,3,2,NULL,3,'2023-05-14 02:33:31',6,'52578.png'),
(4,'ORD.2023.05.0004',1,1,60,2700000,2,NULL,8,8,'2023-05-14 03:10:01',6,NULL),
(5,'ORD.2023.05.0005',2,1,100,2000000,3,2,NULL,4,'2023-05-20 04:30:19',6,NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`pass`,`role_id`,`name`,`email`,`foto`,`is_active`,`update_by`,`last_update`) values 
(1,'kgdr','$2y$10$XUvLMfGJPSkg5KzRGdc/t.f/Auw2xwQEPUburLlfInct9dDFCvm7q','1',1,'Kang Dru','kgdr@gmail.com','default.jpg',1,1,'2023-04-15 19:37:45'),
(2,'adm','$2y$10$XUvLMfGJPSkg5KzRGdc/t.f/Auw2xwQEPUburLlfInct9dDFCvm7q','1',1,'Admin','adm@gmail.com','default.jpg',1,1,'2023-04-15 19:37:52'),
(3,'usr','$2y$10$Kb5Cm.gR4mqcFsaKzmmWDOM0FbxIDjqCmNm4PhaQqyzUug8wLM5Va','1',2,'Tes usr','usr@gmail.com','80763.png',1,1,'2023-04-20 13:03:03'),
(4,'ts1','$2y$10$v2zW79n83Myb5b4FqnFwD.60mRvfMTkjs1NSd7BrW3dsJAjYAp0Xm','5',2,'fgfg','gfg','default.jpg',1,1,'2023-05-10 11:26:03'),
(5,'ts2','$2y$10$3LpQZJs3nxD0HOaTfSX81..lY0COorTPmQryCy25eyI2uos0mnnTO','1',2,'tes regis','dgfsdgdf','default.jpg',1,1,'2023-05-10 11:26:07'),
(6,'bdr','$2y$10$OFfH1ncrUZi8wa.YSHaVm.exU1SwUIzSWuvZC9yav5U5HtpBX/Jve','1',2,'bdr','bgd@gmail.com','default.jpg',1,1,'2023-05-13 11:54:11');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

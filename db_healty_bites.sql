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

/*Table structure for table `mst_artikel` */

DROP TABLE IF EXISTS `mst_artikel`;

CREATE TABLE `mst_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` mediumtext DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mst_artikel` */

insert  into `mst_artikel`(`id`,`content`) values 
(1,'<p>Semua orang pasti ingin selalu sehat dan terhindar dari berbagai penyakit. Sebab, dengan tubuh dan pikiran yang selalu sehat, kesejahteraan dan kualitas hidup tentunya juga dapat meningkat. Menjaga kesehatan pun nyatanya tidak sesulit yang dibayangkan, salah satunya adalah dengan menerapkan gaya hidup sehat setiap hari.</p>\n\n<p>Gaya hidup sehat adalah sebuah komitmen jangka panjang untuk menjaga atau melakukan beberapa hal agar mampu mendukung fungsi tubuh, sehingga berdampak baik bagi kesehatan. Agar dapat mewujudkannya, ada beberapa upaya yang bisa dilakukan untuk menerapkan pola hidup sehat. Contohnya seperti&nbsp; menjaga asupan makanan sehat dengan&nbsp;<a href=\"https://www.halodoc.com/kesehatan/diet-dan-nutrisi\" target=\"_blank\">diet dan nutrisi</a>, berolahraga, melakukan kegiatan positif untuk menghindari stres, dan masih banyak lagi. Beberapa hal tersebut tentunya dapat meningkatkan kualitas hidup sekaligus membawa pengaruh positif bagi lingkungan.&nbsp;</p>\n\n<h2><strong>Seberapa Penting Menjalankan Hidup Sehat?</strong></h2>\n\n<p>Menerapkan gaya hidup sehat juga menjadi hal yang paling penting, pasalnya menurut Organisasi Kesehatan Dunia (WHO), pola makan tidak sehat dan kurangnya aktivitas fisik merupakan faktor risiko kesehatan global yang utama. Apalagi dengan kemajuan teknologi pangan, produksi makanan olahan pun semakin meningkat. Tidak hanya itu, karena kemudahan teknologi, gaya hidup tidak sehat membuat tubuh rentan terserang berbagai jenis gangguan kesehatan, seperti diabetes, penyakit jantung, dan kanker.</p>\n\n<h2><strong>Langkah yang Dapat Dilakukan untuk Memulai Gaya Hidup Sehat</strong></h2>\n\n<p>Menerapkan gaya hidup sehat pun tidak bisa sembarangan. Ini perlu disesuaikan dengan usia, jenis kelamin, tingkat aktivitas fisik, kondisi kesehatan, bahkan kebiasaan makan. Nah, berikut adalah langkah yang bisa diterapkan sebagai upaya dalam menjalani hidup sehat:</p>\n\n<h3><strong>1. Konsumsi Makanan Sehat Bergizi Seimbang</strong></h3>\n\n<p>Ini adalah cara hidup sehat yang sayangnya cukup sulit diterapkan, padahal penting untuk menjaga asupan gizi yang masuk ke dalam tubuh. Ini termasuk protein, karbohidrat, serat, mineral dan vitamin. Hal ini sangatlah vital, supaya tubuh dapat tumbuh, berkembang, serta menjalankan fungsinya dengan maksimal. Tidak hanya itu, cara pengolahan makanan pun wajib diperhatikan agar tidak merusak zat gizi di dalamnya, sehingga makanan yang dikonsumsi tetap memberi manfaat.</p>\n\n<p>Jika kamu masih terjebak dalam kebiasaan pola makan yang tidak sehat, mulailah dengan mendata semua makanan yang dikonsumsi setiap hari. Catatan ini berguna sebagai pengingat agar kamu dapat membatasi atau menambahkan konsumsinya. Tidak hanya itu, kamu juga bisa memilih makanan yang alami, atau dalam proses pembuatannya tidak ada zat kimia yang masuk ke dalamnya.&nbsp;</p>\n\n<p>Hal ini bertujuan untuk menghindari efek negatif yang bisa dihasilkan. Untuk menjalani hidup sehat, setidaknya kamu harus mengonsumsi buah dan sayur di samping daging dan sumber karbohidrat lain.</p>\n\n<h3><strong>2. Rutin Berolahraga&nbsp;</strong></h3>\n\n<p>Setidaknya, lakukan olahraga selama 30 menit setiap hari jika kamu ingin memiliki tubuh yang sehat. Kamu juga dapat melakukan aktivitas aerobik sedang seperti jalan kaki setidaknya selama 150 menit atau aerobik kuat seperti berlari setidaknya 75 menit dalam satu minggu. Sementara itu, latihan kekuatan untuk semua kelompok otot disarankan untuk dilakukan setidaknya dua kali dalam satu minggu.&nbsp;</p>\n\n<p>Olahraga yang benar dalam waktu yang tepat juga diketahui dapat melancarkan peredaran darah serta menguatkan otot dan tulang. Jika kegiatanmu didominasi oleh aktivitas sederhana, pertimbangkanlah untuk bergerak aktif setiap hari.</p>\n\n<h3><strong>3. Mengelola Stres dengan Baik</strong></h3>\n\n<p>Tidak dapat dimungkiri, stres juga termasuk salah satu hal yang harus kamu hindari untuk memperoleh kesehatan yang maksimal. Memang beban hidup yang yang berat bisa mendatangkan stres, tetapi kamu harus pintar-pintar mengolahnya. Saat stres melanda, maka gejala fisik yang bisa kamu rasakan adalah sakit kepala, sakit perut, meningkatnya tekanan darah tinggi, dada terasa sakit, hingga sulit tidur.</p>\n\n<p>Untuk mengatasinya, kamu bisa mengambil waktu untuk bersantai dan melakukan hal yang kamu senangi. Beberapa hal, seperti yoga atau meditasi, juga bisa dilakukan agar kamu terhindar dari stres. Selain itu, penting juga untuk bersyukur agar pikiran dan hati tetap tenang. Kesehatan rohani juga akan memengaruhi kesehatan secara fisik secara keseluruhan, sehingga keduanya tidak bisa kamu abaikan.</p>\n\n<h3><strong>4. Rutin Memeriksakan Kesehatan</strong></h3>\n\n<p>Salah satu langkah untuk menerapkan pola hidup sehat adalah memeriksakan kesehatan secara rutin. Sebab, terdapat beberapa manfaat dari hal tersebut, antara lain:&nbsp;</p>\n\n<ul>\n	<li>Mendeteksi masalah medis saat ini atau yang sudah muncul tapi belum terdeteksi.&nbsp;</li>\n	<li>Menilai risiko masalah medis di masa depan.&nbsp;</li>\n	<li>Mendorong kamu untuk mempertahankan gaya hidup sehat.&nbsp;</li>\n</ul>\n\n<p>Selain itu, melakukan pemeriksaan kesehatan juga merupakan waktu yang tepat untuk memeriksa gaya hidup kamu untuk melihat perbaikan apa yang dapat dilakukan.</p>\n\n<p><strong>5. Istirahat yang Cukup</strong></p>\n\n<p>Untuk mendapatkan tubuh dan pikiran yang sehat, kamu juga bisa mendapatkannya dengan beristirahat yang cukup. Pastikan jam tidurmu selalu terpenuhi dan membiasakan tidur dan bangun di waktu yang sama. Jika merasa sulit tidur, kamu bisa mencoba mandi air hangat, membaca buku, atau mendengarkan musik untuk membuat tubuh lebih rileks dan semakin mudah terlelap.&nbsp;</p>\n\n<p>Itulah beberapa pola hidup sehat yang bisa kamu terapkan setiap hari. Penting diingat kembali bahwa alangkah lebih baik mencegah penyakit dengan menerapkan pola hidup sehat, ketimbang menunggu badan terserang penyakit.&nbsp;</p>\n\n<p>Jangan ragu untuk berbicara dengan dokter mengenai kondisi kesehatanmu. Sekarang&nbsp;<a href=\"https://halodoc.onelink.me/g7yv/diettextbot\" target=\"_blank\">berbicara dengan dokter tepercaya</a>&nbsp;✔️ dapat dengan mudah dilakukan di aplikasi&nbsp;<strong>Halodoc</strong>. Tak perlu repot, komunikasi dengan dokter dapat kamu lakukan kapan dan di mana saja melalui fitur&nbsp;<em>chat</em>&nbsp;dengan dokter.</p>\n\n<p><strong>Referensi:</strong></p>\n\n<p><em>World Health Organization. Diakses pada 2022. Healthy Diet.</em></p>\n\n<p><em>Healthline. Diakses pada 2022. The Benefits of Healthy Habits.&nbsp;</em></p>\n\n<p><em>Healthline. Diakses pada 2022. New Exercise Guidelines are Out&mdash;Here is the Mix of Aerobics and Weight Training Experts Recommend.&nbsp;</em></p>\n\n<p><em>Better Health Channel.gov. Diakses pada 2022. Regular health checks.&nbsp;</em></p>\n\n<p><em>Web MD. Diakses pada 2022. Healthy Living: 8 Steps to Take Today.</em></p>\n\n<p><strong>Diperbarui pada 28 April 2022.</strong></p>\n\n<h2><strong>Pertanyaan Seputar Hidup Sehat</strong></h2>\n\n<h3><strong>Dok, pola hidup sehat seperti apa yang paling dianjurkan untuk mencegah penyakit jantung?</strong></h3>\n\n<p>Ditanyakan oleh: Ichaansyahli</p>\n\n<p>Dijawab oleh:&nbsp;<a href=\"https://www.halodoc.com/cari-dokter/nama/dr-fadhli-rizal-makarim\" target=\"_blank\">dr. Fadhli Rizal Makarim</a></p>\n\n<p>Pola hidup sehat yang dianjurkan untuk menghindari&nbsp;<a href=\"https://www.halodoc.com/kesehatan/penyakit-jantung\" target=\"_blank\">penyakit jantung</a>&nbsp;adalah pola hidup yang seimbang. Asupan makanan yang dikonsumsi harus seimbang antara kebutuhan protein, lemak, dan karbohidrat. Dengan perhitungan 50 persen untuk karbohidrat, 15-20 persen untuk protein, dan 20-25 persen untuk lemak. Selain itu, olahraga rutin perlu dilakukan minimal 5 hari dalam seminggu selama 30 menit.&nbsp;<a href=\"https://www.halodoc.com/kesehatan/olahraga\" target=\"_blank\">Olahraga</a>&nbsp;tersebut sekurang-kurangnya melibatkan olahraga aerobik dan sesekali angkat beban.</p>\n\n<h3><strong>Bagaimana cara menjaga stamina tubuh agar tidak mudah lelah?</strong></h3>\n\n<p>Ditanyakan oleh: maulana_alief723</p>\n\n<p>Dijawab oleh:&nbsp;<a href=\"https://www.halodoc.com/cari-dokter/nama/dr-rizal-fadli\" target=\"_blank\">dr. Rizal Fadli</a></p>\n\n<p>Beberapa cara yang dapat dilakukan untuk menjaga stamina agar tidak mudah lelah antara lain:</p>\n\n<ul>\n	<li>Cukupi kebutuhan cairan sehari-hari.</li>\n	<li>Tidur dan istirahatyang cukup.</li>\n	<li>Konsumsi asupan sehat. Nutrisi yang tepat sangat penting bagi tubuh, tujuannya adalah agar sistem kekebalan tubuh tetap bekerja dengan baik. Apa yang dikonsumsi, bisa sangat memengaruhi kesehatan tubuh.</li>\n	<li>Minum suplemen makanan atau vitamin. Meski begitu, efek suplemen bagi kekebalan tubuh secara umum masih perlu diteliti lebih lanjut.</li>\n	<li>Rutin berolahraga. Orang-orang yang jarang beraktivitas dan lebih banyak menghabiskan waktu dengan duduk dan bermalas-malasan, terbukti lebih mudah terserang flu atau penyakit menular lainnya. Oleh karena itu, disarankan untuk rutin berolahraga. Olahraga dipercaya mampu meningkatkan kebugaran tubuh secara keseluruhan, dan meningkatkan sistem kekebalan tubuh, serta menghalau tubuh dari beragam penyakit dan infeksi.</li>\n	<li>Tidak merokok.</li>\n</ul>'),
(2,'<h2>1. Pastikan Selalu Sarapan</h2>\n\n<p><img alt=\"sadsfsdfdsfdsdsfsdfsdfsd\" src=\"https://d2m81cww2pimga.cloudfront.net/media/original_images/main_pg-1_copy.original-small.jpg\" style=\"border-style:solid; border-width:1px; float:right; height:67px; margin:2px 1px; width:100px\" /></p>\n\n<p>Prinsip pertama dalam menjaga pola makan adalah jangan melewatkan sarapan. Perlu dicatat bahwa sarapan merupakan waktu makan yang penting dan sebaiknya jangan diabaikan. Ketika sarapan, kamu memenuhi tubuhmu dengan energi untuk beraktivitas. Sarapan akan membuat tubuhmu sehat, berenergi, serta lebih mudah untuk fokus.</p>\n\n<p>Tapi awas, jangan sembarangan menyiapkan menu sarapan. Kamu tetap harus mengonsumsi makanan sehat di pagi hari. Awal yang baik dan sehat akan membuat tubuhmu lebih siap menghadapi hari dengan kondisi yang bugar.</p>\n\n<p>Kamu bisa memilih sarapan dengan&nbsp;<em>oatmeal</em>, sereal, buah, sayuran, sumber protein seperti kacang-kacangan, telur, juga susu. Untuk sumber lemaknya kamu bisa dapatkan dari alpukat dan kelapa.</p>\n\n<h2><a name=\"_heading=h.5dz4o3mmtsx8\"></a>2. Utamakan Bahan Makanan Alami</h2>\n\n<p>Zaman sekarang ini sebagaian besar orang suka yang praktis dan cepat. Akhirnya mereka memilih untuk membeli dan mengonsumsi makanan kemasan atau makanan siap saji. Jika ini juga merupakan kebiasaanmu maka cobalah untuk menghentikannya. Utamakan konsumsi makanan dari bahan-bahan atau sumber yang alami.</p>\n\n<p>Mengapa harus membatasi makanan kemasan? Jenis makanan ini mengandung kadar gula dan garam yang cukup tinggi. Keduanya sangat tidak bagus untuk dikonsumsi tubuh secara terus-terusan apalagi kadarnya tidak diketahui secara pasti. Jadi demi tubuh yang sehat dan ideal, upayakan untuk mengonsumsi bahan makanan alami yang segar saja.&nbsp;</p>\n\n<h2><a name=\"_heading=h.9muhx2cqv997\"></a>3. Pastikan Konsumsi Serat</h2>\n\n<p>Tubuhmu membutuhkan serat dalam kadar yang memadai. Salah satu prinsip&nbsp;<strong>pola makan sehat</strong>&nbsp;adalah mengonsumsi serat sesuai kebutuhan tubuh. Serat ini akan membantu memperlancar kerja saluran pencernaan terutama di bagian usus. Selain itu serat juga bisa membantu menurunkan risiko beberapa penyakit kronis seperti diabetes, penyakit jantung, juga&nbsp;<em>stroke</em>.</p>\n\n<p>Darimana bisa mendapatkan sumber serat yang menyehatkan? Kamu bisa mendapatkan serat lewat berbagai jenis roti, seperti roti gandum. Selain itu, kamu juga bisa mengonsumsi karbohidrat berupa beras merah dan aneka jenis buah untuk menambah serat. Sayur-sayuran juga diketahui sebagai bahan makanan kaya serat yang baik untuk dikonsumsi setiap hari.</p>\n\n<h2><a name=\"_heading=h.q4mce6d36q9c\"></a>4. Perbanyak Minum Air Putih</h2>\n\n<p>Dalam pola makan yang kamu terapkan, pastikan kamu mencukupi kebutuhan cairan tubuh dengan baik. Minumlah banyak air putih setiap hari untuk memastikan kamu tidak akan dehidrasi. Kebutuhan minum air setiap orang berbeda-beda. Kamu bisa mencari tahu berapa banyak kebutuhan air yang kamu perlukan berdasarkan bobot tubuhmu sendiri.</p>\n\n<p>Asupan air yang memadai akan membantu menjaga kelancaran fungsi semua organ tubuh. Selain itu kecukupan air ini juga bisa meningkatkan daya konsentrasi dan memberi energi bagi tubuh untuk beraktivitas. Utamakan minum air putih dan hindari minuman yang manis untuk mencegah risiko diabetes.</p>\n\n<h2><a name=\"_heading=h.up8khg5wkea\"></a>5. Perbanyak Sayur dan Buah</h2>\n\n<p>Meningkatkan konsumsi sayur dan buah juga jadi salah satu&nbsp;<strong>cara menjaga pola makan agar tubuh selalu sehat dan ideal</strong>. Selalu masukkan sayur dan buah sebagai makanan yang kamu konsumsi setiap hari. Penyajian sayur dan buah juga bisa dibuat lebih beragam sehingga kamu tidak akan merasa bosan. Pilihlah jenis sayur dan buah yang kamu sukai agar kamu lebih mudah untuk mengonsumsinya.</p>\n\n<p>Lewat asupan sayur dan buah, kamu akan mendapatkan vitamin yang mencukupi untuk tubuh. Selain itu bahan makanan ini juga bisa menjadi sumber serat yang kaya manfaat. Sayur maupun buah juga sangat baik untuk menjaga kesehatan serta kecantikan kulit tubuhmu. Jadi&nbsp; tak hanya tubuh yang sehat yang akan kamu dapatkan tetapi juga tampilan kulit yang lebih cerah dan&nbsp;<em>glowing</em>.</p>\n\n<h2><a name=\"_heading=h.zfs9787najtv\"></a>6. Makanlah di Waktu yang Tepat</h2>\n\n<p>Tak hanya mengatur jenis makanan yang akan dikonsumsi, kamu juga harus menentukan waktu makan yang tepat. Salah satu&nbsp;<strong>cara menjaga pola makan</strong>&nbsp;sehat adalah dengan memberi jeda waktu makan yang teratur agar proses metabolisme di tubuhmu bisa bekerja lancar. Selain itu usahakan untuk menghindari makan di waktu malam karena pada malam hari metabolisme dalam tubuh akan berjalan lambat.</p>\n\n<p>Kebiasaan makan teratur dan tepat waktu akan memberikan banyak manfaat bagi tubuhmu. Selain memperlancar kerja sistem metabolisme, kebiasaan ini juga akan membantu tubuh mengontrol kolesterol dengan baik. Kadar gula dalam darah pun bisa dikendalikan lewat pola makan yang teratur dan terjadwal.</p>\n\n<p>Itulah<strong>&nbsp;cara menjaga pola makan agar tubuh selalu sehat dan ideal</strong>. Tubuh yang sehat akan menjadi investasi yang bagus untuk masa depanmu. Selain itu, persiapkan juga dirimu dengan layanan asuransi dari Generali yang siap memberikan pertanggungan dan fasilitas lengkap berkaitan dengan kondisi kesehatan tubuhmu.</p>'),
(3,'<p>Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting. Tex dibagian ini sudah terhubung dengan database jadi bisa di setting di role nya admin menu setting.</p>');

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
(6,'Tomato Wrap','100','14.0','4.0','3.0','23.0','42143.png',1,5000,1,1,'2023-05-27 10:20:12'),
(7,'Spinach Wrap','100','100.0','2.0','1.0','20.0','93360.png',1,5000,1,1,'2023-05-20 09:01:17'),
(8,'Regular Wrap','100','101.0','3.0','2.0','18.0','15868.jpg',1,5000,1,1,'2023-05-27 09:12:04');

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
(1,'salads',5000,'60505.jpg',1,1,'2023-05-27 10:06:36'),
(2,'WRAPS',5000,'18446.jpg',1,1,'2023-05-12 23:20:52'),
(3,'Warm Quinoa Bowls',10000,'59407.jpg',1,1,'2023-05-27 09:09:04');

/*Table structure for table `mst_challeng` */

DROP TABLE IF EXISTS `mst_challeng`;

CREATE TABLE `mst_challeng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mst_challeng` */

insert  into `mst_challeng`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'Sudahkah anda makan sayur hari ini tess edit',2,1,'2023-05-29 21:48:55'),
(2,'Sudahkah anda minum air putih hari ini',1,1,'2023-05-29 21:31:25');

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

/*Table structure for table `mst_konsultasi` */

DROP TABLE IF EXISTS `mst_konsultasi`;

CREATE TABLE `mst_konsultasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tlp` varchar(255) DEFAULT NULL,
  `jam` varchar(255) DEFAULT NULL,
  `alamt` text DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `mst_konsultasi` */

insert  into `mst_konsultasi`(`id`,`tlp`,`jam`,`alamt`) values 
(1,'089999994','08:00 s/d 16:00','Alamat alamat alamat alamat alamat');

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
(1,1,'Hail Caesar',45000,'Enak, Nikmat, & Bergizi , poko nya enak banget dah murah pula berkualitas','57185.png','[]','[\"1\",\"2\"]','[\"3\",\"5\"]','[\"4\"]','[\"1\",\"2\",\"6\",\"3\"]',1,1,'2023-05-29 20:59:39'),
(2,2,'Tuna San',20000,'Nutritional information may vary depending on portioning.','58861.png','[\"7\"]','[\"1\"]','[\"3\"]','[\"4\"]','[]',1,1,'2023-05-20 09:54:10'),
(3,2,'Cobb',30000,'Enak pok nya enbak dah poko nya enak enak','28435.png','[\"8\"]','[\"2\"]','[\"5\"]','[\"4\"]','[]',1,1,'2023-05-27 09:14:25');

/*Table structure for table `mst_role` */

DROP TABLE IF EXISTS `mst_role`;

CREATE TABLE `mst_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `mst_role` */

insert  into `mst_role`(`id`,`name`,`is_active`,`update_by`,`last_update`) values 
(1,'ADMINISTRATOR',1,1,'2023-04-14 14:09:18'),
(2,'CUSTOMER',1,1,'2023-05-27 09:48:43'),
(3,'Tes nambah role',0,1,'2023-05-27 09:03:15'),
(4,'Sudahkah anda makan sayur hari ini',0,1,'2023-05-29 21:23:44');

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

/*Table structure for table `mst_vidios` */

DROP TABLE IF EXISTS `mst_vidios`;

CREATE TABLE `mst_vidios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `descripsi` text DEFAULT NULL,
  `vidio` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mst_vidios` */

insert  into `mst_vidios`(`id`,`name`,`descripsi`,`vidio`,`is_active`,`update_by`,`last_update`) values 
(1,'Vidio 1 sda','Text text text text tex text text.dd','vidio.mp4',2,1,'2023-05-27 17:41:57'),
(2,'tess add','dsfsdfsdfsdfsdfsdf','vidio.mp4',1,1,'2023-05-27 17:41:57'),
(3,'dfsdsfsdf','dfsdfsdfsdfsdfdssd','55662.mp4',1,1,'2023-05-27 17:31:27');

/*Table structure for table `trx_action_challeng` */

DROP TABLE IF EXISTS `trx_action_challeng`;

CREATE TABLE `trx_action_challeng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_challeng` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `trx_action_challeng` */

insert  into `trx_action_challeng`(`id`,`id_challeng`,`id_user`,`last_update`) values 
(1,1,6,'2023-05-29 21:59:18');

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
(1,'ORD.2023.05.0001',1,1,5,225000,1,NULL,NULL,6,'2023-05-14 02:31:59',6,NULL),
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`pass`,`role_id`,`name`,`email`,`foto`,`is_active`,`update_by`,`last_update`) values 
(1,'kgdr','$2y$10$XUvLMfGJPSkg5KzRGdc/t.f/Auw2xwQEPUburLlfInct9dDFCvm7q','123',1,'KANG DRU','kgd123r@gmail.com','8249.png',1,1,'2023-05-27 08:39:52'),
(2,'adm','$2y$10$XUvLMfGJPSkg5KzRGdc/t.f/Auw2xwQEPUburLlfInct9dDFCvm7q','1',1,'Admin','adm@gmail.com','default.jpg',1,1,'2023-04-15 19:37:52'),
(3,'usr','$2y$10$Kb5Cm.gR4mqcFsaKzmmWDOM0FbxIDjqCmNm4PhaQqyzUug8wLM5Va','1',2,'Tes usr','usr@gmail.com','80763.png',1,1,'2023-04-20 13:03:03'),
(4,'ts1','$2y$10$v2zW79n83Myb5b4FqnFwD.60mRvfMTkjs1NSd7BrW3dsJAjYAp0Xm','5',2,'fgfg','gfg','default.jpg',0,1,'2023-05-27 09:00:46'),
(5,'ts2','$2y$10$3LpQZJs3nxD0HOaTfSX81..lY0COorTPmQryCy25eyI2uos0mnnTO','1',2,'tes regis','dgfsdgdf','91203.png',1,1,'2023-05-27 09:37:22'),
(6,'bdr','$2y$10$5JCOUTQQ1HwJkn548ghcKOCCOB82XupAIKY40t9EhGs0EGBtHqH8C','1',2,'bdr','bgd@gmail.com','default.jpg',1,1,'2023-05-29 21:34:53'),
(7,'usr','$2y$10$5JCOUTQQ1HwJkn548ghcKOCCOB82XupAIKY40t9EhGs0EGBtHqH8C','1',2,'tes usr','@gmail','default.jpg',1,1,'2023-05-29 20:52:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

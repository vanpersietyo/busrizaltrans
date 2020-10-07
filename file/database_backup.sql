/*
SQLyog Enterprise
MySQL - 10.4.14-MariaDB-1:10.4.14+maria~bionic-log : Database - busrizal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `armada` */

DROP TABLE IF EXISTS `armada`;

CREATE TABLE `armada` (
  `id_armada` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis_armada` int(5) DEFAULT NULL,
  `kode_armada` varchar(15) NOT NULL,
  `nama_armada` varchar(25) DEFAULT NULL,
  `kapasitas_armada` varchar(10) DEFAULT NULL,
  `status_armada` int(11) DEFAULT NULL COMMENT '1 = aktif ; 0 = tidak aktif',
  `keterangan_armada` varchar(200) DEFAULT NULL,
  `foto_armada` varchar(250) DEFAULT NULL,
  `add_by` varchar(25) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `change_by` varchar(25) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_armada`),
  KEY `FK_jenis_armada_armada` (`id_jenis_armada`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `armada` */

insert  into `armada`(`id_armada`,`id_jenis_armada`,`kode_armada`,`nama_armada`,`kapasitas_armada`,`status_armada`,`keterangan_armada`,`foto_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (6,21,'ARMD0002','Bus Rizal Trans','55',1,'Arikha Bus Green','assets/images/rizaltrans/tour-3.jpg',NULL,'2018-11-06 03:54:23',NULL,'2018-11-24 10:46:42');
insert  into `armada`(`id_armada`,`id_jenis_armada`,`kode_armada`,`nama_armada`,`kapasitas_armada`,`status_armada`,`keterangan_armada`,`foto_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (5,23,'ARMD0001','Bus Hello Kitty','58',1,'hello kitty','assets/images/rizaltrans/item-5.jpg',NULL,'2018-11-06 03:54:07',NULL,'2018-11-24 10:46:38');
insert  into `armada`(`id_armada`,`id_jenis_armada`,`kode_armada`,`nama_armada`,`kapasitas_armada`,`status_armada`,`keterangan_armada`,`foto_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (18,22,'ARMD0003','asd','25',1,'Tes',NULL,NULL,'2018-11-30 02:05:41',NULL,'2018-11-30 02:05:41');

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `username` varchar(15) NOT NULL,
  `agent` varchar(50) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `data` longblob DEFAULT NULL,
  KEY `AK_CI_SESSIONS_TIMESTAMP` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `ci_sessions` */

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `kode_customer` varchar(10) DEFAULT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `alamat_customer` varchar(50) NOT NULL,
  `telepon_customer` varchar(13) NOT NULL,
  `keterangan_customer` varchar(100) DEFAULT NULL,
  `id_user` varchar(15) NOT NULL,
  `status_customer` smallint(6) DEFAULT 1,
  `entry_time` timestamp NULL DEFAULT current_timestamp(),
  `last_modified` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `old_kode` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `customer` */

insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (10,'CUST0001','Adhitya Dwi Prasetyo','Suwaluh','085852070706','tes saja saya','',1,'2018-10-11 00:49:28','2018-11-21 13:47:16',NULL);
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (11,'CUST0002','Elen Mayanti','Kemangsen','085731026080','dari adit','',1,'2018-10-18 05:20:19','2018-11-18 12:08:21',NULL);
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (12,'00000','Hafiz','tes','08585852352','tes','',0,'2018-10-18 05:22:11','2018-11-18 12:12:48','CUST0003');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (13,'00000','adhitya','suurabaya','089676342220','sj','',0,'2018-11-17 05:52:12','2018-11-18 12:10:24','CUST0004');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (21,'00000','tes','tes','1111111111','tes','',0,'2018-11-18 11:47:47','2018-11-18 12:08:54','CUST0005');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (20,'00000','tes','asd','1111111111','asd','',0,'2018-11-18 11:42:52','2018-11-18 12:13:37','CUST0006');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (30,'00000','','','','','',0,'2018-12-01 06:08:22','2018-12-01 06:47:33','CUST0030');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (23,'00000','rijal','balben','081282441972','tes','',0,'2018-11-24 05:10:56','2018-11-24 05:29:23','CUST0023');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (24,'00000','rijal','balben','081282441972','tes','',0,'2018-11-24 05:11:01','2018-11-24 05:29:26','CUST0024');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (25,'00000','rijal','balben','081282441972','tes','',0,'2018-11-24 05:11:04','2018-11-24 05:29:27','CUST0025');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (26,'00000','rijal','rijal','0000999999','tes','',0,'2018-11-24 05:23:30','2018-11-24 05:29:29','CUST0026');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (27,'00000','tes','tes','22131231231','tes121','',0,'2018-11-24 05:28:28','2018-11-24 05:29:30','CUST0027');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (28,'00000','tes','tes1212','22131231231','tes121','',0,'2018-11-24 05:28:47','2018-11-24 05:29:31','CUST0028');
insert  into `customer`(`id_customer`,`kode_customer`,`nama_customer`,`alamat_customer`,`telepon_customer`,`keterangan_customer`,`id_user`,`status_customer`,`entry_time`,`last_modified`,`old_kode`) values (29,'00000','Arizal Arif','Suwaluh RT 2','081282441974','tes','',0,'2018-11-24 05:30:00','2018-11-24 05:30:51','CUST0008');

/*Table structure for table `daftar_harga` */

DROP TABLE IF EXISTS `daftar_harga`;

CREATE TABLE `daftar_harga` (
  `id_harga` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto increment',
  `id_armada` int(11) DEFAULT NULL,
  `kode_harga` varchar(15) NOT NULL COMMENT 'diambil dari auto generate ci',
  `tipe_harga` int(11) DEFAULT NULL COMMENT '0=paket, 1=request',
  `nama_harga` varchar(50) DEFAULT NULL,
  `id_waktu` int(11) DEFAULT NULL,
  `id_kota_awal` int(11) DEFAULT NULL,
  `id_kota_tujuan` int(11) DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tambahan_harga` int(11) DEFAULT NULL,
  `potongan_harga` int(11) DEFAULT NULL,
  `status_harga` int(11) DEFAULT NULL COMMENT '0 = tidak aktif ; 1 = aktif',
  `keterangan_harga` varchar(100) DEFAULT NULL,
  `add_by` varchar(25) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `change_by` varchar(25) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_harga`),
  KEY `FK_daftar_harga_armada_id_armada_fk` (`id_armada`),
  KEY `FK_kota_awal_banyak_daftar_harga` (`id_kota_awal`),
  KEY `FK_kota_tujuan_banyak_daftar_harga` (`id_kota_tujuan`),
  KEY `FK_satu_waktu_banyak_daftar_harga` (`id_waktu`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `daftar_harga` */

insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (1,6,'HRGR0001',1,'Surabaya - Bali 2',NULL,119,133,3,7000000,10000,5000,1,'tes 2','admin','2018-11-17 02:10:23','admin','2018-12-01 05:26:15');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (2,6,'HRGR0002',1,'ets',NULL,125,143,1,0,0,0,0,'asd','admin','2018-11-17 02:13:45',NULL,'2018-11-17 02:38:59');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (3,6,'HRGR0003',1,'tes',NULL,125,143,1,0,0,1,0,'1','admin','2018-11-17 03:13:56',NULL,'2018-11-17 03:14:57');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (4,6,'HRGR0004',1,'tes',NULL,124,142,1,1000000,1000,2000,0,'2000','admin','2018-11-17 04:17:47','admin','2018-11-17 06:42:01');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (5,6,'HRGR0005',0,'tes paket',NULL,124,139,2,2000000,200000,100000,0,'tes','admin','2018-11-17 04:41:08','admin','2018-11-17 05:16:09');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (6,6,'HRGR0006',1,'tes',NULL,125,143,1,0,0,0,0,'','admin','2018-11-18 07:20:14',NULL,'2018-11-18 07:34:10');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (7,6,'HRGR0007',1,'tes',NULL,125,143,1,0,0,0,0,'1','admin','2018-11-18 07:32:32',NULL,'2018-11-18 07:33:48');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (8,6,'HRGR0008',0,'Paket Surabaya Bali 3D 2N',NULL,119,133,3,9000000,0,0,1,'','admin','2018-11-23 11:24:24',NULL,'2018-11-23 11:24:24');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (9,6,'HRGR0009',1,'Surabaya - Malang',NULL,119,147,1,1000000,0,0,1,'','admin','2018-11-23 11:56:27',NULL,'2018-11-23 11:56:27');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (10,6,'HRGR0010',0,'Surabaya Jogja 3D 2N',NULL,119,134,3,8000000,0,0,1,'','admin','2018-11-23 12:03:01',NULL,'2018-11-23 12:03:01');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (11,5,'HRGR0011',0,'Sidoarjo - Wali 5 1 Day',NULL,118,137,1,3000000,0,0,1,'','admin','2018-11-27 14:55:43',NULL,'2018-11-27 14:55:43');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (13,6,'HRGR0012',1,'Mojokerto Bali',NULL,125,133,3,9000000,NULL,0,1,NULL,'admin','2018-12-01 05:25:30',NULL,'2018-12-01 05:25:30');
insert  into `daftar_harga`(`id_harga`,`id_armada`,`kode_harga`,`tipe_harga`,`nama_harga`,`id_waktu`,`id_kota_awal`,`id_kota_tujuan`,`durasi`,`harga`,`tambahan_harga`,`potongan_harga`,`status_harga`,`keterangan_harga`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (14,6,'HRGR0013',1,'Mojokerto Malang',NULL,125,147,1,2000000,NULL,0,1,NULL,'admin','2018-12-01 05:38:08',NULL,'2018-12-01 05:38:08');

/*Table structure for table `fasilitas` */

DROP TABLE IF EXISTS `fasilitas`;

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT,
  `kode_fasilitas` varchar(15) DEFAULT NULL,
  `nama_fasilitas` varchar(255) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `add_by` varchar(25) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `changed_by` varchar(25) DEFAULT '',
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_fasilitas` int(11) DEFAULT NULL COMMENT '0 = tidak aktif ; 1 = aktif',
  PRIMARY KEY (`id_fasilitas`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `fasilitas` */

insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (9,'FSLTS0001','AC','Dingin dan Sejuk',NULL,'2018-11-02 02:41:17','','2018-11-02 02:41:17',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (10,'FSLTS0002','Karaoke','Koleksi Lengkap',NULL,'2018-11-02 02:41:34','','2018-11-02 02:41:34',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (12,'FSLTS0004','Selimut','Nyaman',NULL,'2018-11-02 02:42:07','','2018-11-02 02:42:07',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (13,'FSLTS0005','TV 43\"','Jernih',NULL,'2018-11-02 02:42:26','','2018-11-02 02:42:26',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (14,'FSLTS0006','Smooking Area','Ruangan Khusus',NULL,'2018-11-02 02:42:47','','2018-11-02 02:42:47',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (15,'FSLTS0007','Toilet Area','Bersih Dan Nyaman',NULL,'2018-11-02 02:42:56','','2018-11-02 02:42:56',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (16,'FSLTS0008','Sandaran Kaki','Nyaman',NULL,'2018-11-02 02:43:16','','2018-11-02 02:43:16',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (17,'FSLTS0009','Air Suspension','Lebih Nyaman',NULL,'2018-11-02 02:43:38','','2018-11-02 02:43:38',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (18,'FSLTS0010','Full Cool Box','Segar',NULL,'2018-11-02 02:45:21','','2018-11-02 02:45:21',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (19,'FSLTS0011','Charger','-',NULL,'2018-11-02 02:45:44','','2018-11-02 02:45:44',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (20,'FSLTS0012','Bagasi','Luas',NULL,'2018-11-02 02:45:56','','2018-11-02 02:45:56',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (21,'FSLTS0013','Seat 43','2-2 Total 43',NULL,'2018-11-02 02:49:12','','2018-11-06 03:55:17',NULL);
insert  into `fasilitas`(`id_fasilitas`,`kode_fasilitas`,`nama_fasilitas`,`keterangan`,`add_by`,`entry_time`,`changed_by`,`last_modified`,`status_fasilitas`) values (22,'FSLTS0014','Seat 58','2-3 Total 58',NULL,'2018-11-03 00:13:48','','2018-11-06 03:55:25',NULL);

/*Table structure for table `fasilitas_armada` */

DROP TABLE IF EXISTS `fasilitas_armada`;

CREATE TABLE `fasilitas_armada` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `id_armada` int(11) DEFAULT NULL,
  `id_fasilitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`int`),
  KEY `fasilitas_armada_armada_id_armada_fk` (`id_armada`),
  KEY `fasilitas_armada_fasilitas_id_fasilitas_fk` (`id_fasilitas`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

/*Data for the table `fasilitas_armada` */

insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (29,6,12);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (28,6,10);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (3,11,12);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (4,11,14);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (5,11,15);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (6,12,14);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (7,13,10);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (8,13,14);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (50,18,12);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (49,17,22);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (48,16,13);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (47,15,10);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (46,5,9);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (30,6,15);
insert  into `fasilitas_armada`(`int`,`id_armada`,`id_fasilitas`) values (45,14,13);

/*Table structure for table `jenis_armada` */

DROP TABLE IF EXISTS `jenis_armada`;

CREATE TABLE `jenis_armada` (
  `id_jenis_armada` int(5) NOT NULL AUTO_INCREMENT,
  `kode_jenis_armada` varchar(15) DEFAULT NULL,
  `nama_jenis_armada` varchar(30) DEFAULT NULL,
  `status_jenis_armada` smallint(6) DEFAULT NULL COMMENT '0=tidak aktif ; 1= aktif',
  `keterangan_jenis_armada` varchar(30) DEFAULT NULL,
  `add_by` varchar(15) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `change_by` varchar(15) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_jenis_armada`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `jenis_armada` */

insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (1,'JNS0001','Tes',0,'tes','admin','2018-11-05 07:44:11','admin','2018-11-05 08:16:06');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (2,'JNS0002','Tes',0,'','admin','2018-11-05 08:16:50','admin','2018-11-05 08:16:52');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (3,'JNS0001','Tes',0,'','admin','2018-11-05 08:19:35','admin','2018-11-05 08:19:51');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (4,'JNS0002','Tesa',0,'','admin','2018-11-05 08:19:37','admin','2018-11-05 08:19:53');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (5,'JNS0003','Tesas',0,'','admin','2018-11-05 08:19:42','admin','2018-11-05 08:19:54');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (6,'JNS0004','Teza',0,'','admin','2018-11-05 08:19:45','admin','2018-11-05 08:19:55');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (7,'JNS0005','Adsasf',0,'','admin','2018-11-05 08:19:46','admin','2018-11-05 08:19:56');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (8,'JNS0006','Asfsdfv',0,'','admin','2018-11-05 08:19:48','admin','2018-11-05 08:19:50');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (9,'JNS0001','Tes',0,'trsa','admin','2018-11-05 08:23:29','admin','2018-11-05 08:29:32');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (10,'JNS0002','Saya',0,'adalah raja','admin','2018-11-05 08:28:40','admin','2018-11-05 08:28:56');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (11,'JNS0003','Ya benar saja',0,'','admin','2018-11-05 08:28:45','admin','2018-11-05 08:28:52');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (12,'JNS0004','Aasda',0,'','admin','2018-11-05 08:28:45','admin','2018-11-05 08:28:53');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (13,'JNS0005','Sdasda',0,'','admin','2018-11-05 08:28:46','admin','2018-11-05 08:28:54');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (14,'JNS0006','Asdas',0,'','admin','2018-11-05 08:28:47','admin','2018-11-05 08:28:54');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (15,'JNS0007','Da',0,'','admin','2018-11-05 08:28:48','admin','2018-11-05 08:28:55');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (16,'JNS0008','Asdasd',0,'','admin','2018-11-05 08:28:49','admin','2018-11-05 08:28:55');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (17,'JNS0002','Cek saja',0,'saya','admin','2018-11-05 08:29:29','admin','2018-11-05 08:36:50');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (18,'JNS0001','Ekonomi',0,'-','admin','2018-11-05 08:37:14','admin','2018-11-05 08:37:56');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (19,'JNS0002','Bisnis',0,'-','admin','2018-11-05 08:37:18','admin','2018-11-05 08:37:57');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (20,'JNS0003','Eksekutif',0,'-','admin','2018-11-05 08:37:25','admin','2018-11-05 08:37:58');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (21,'JNS0001','Bus Ekonomi',1,'-','admin','2018-11-05 08:38:05','admin','2018-11-05 08:38:05');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (22,'JNS0002','Bus Bisnis',1,'','admin','2018-11-05 08:38:11','admin','2018-11-05 08:38:11');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (23,'JNS0003','Bus Eksekutif',1,'','admin','2018-11-05 08:38:22','admin','2018-11-05 08:38:22');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (24,'JNS0004','Asdasd',0,'','admin','2018-11-05 08:38:33','admin','2018-11-05 08:39:29');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (25,'JNS0005','Asd',0,'','admin','2018-11-05 08:39:22','admin','2018-11-05 08:39:26');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (26,'JNS0004','Ada',0,'','admin','2018-11-05 08:39:32','admin','2018-11-05 08:40:16');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (27,'JNS0004','Tes',0,'','admin','2018-11-05 08:40:18','admin','2018-11-05 08:40:43');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (28,'JNS0005','Ya',0,'','admin','2018-11-05 08:40:36','admin','2018-11-05 08:40:42');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (29,'JNS0004','Elf Ekonomi',1,'','admin','2018-11-05 08:41:07','admin','2018-11-05 08:41:07');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (30,'JNS0005','Elf Bisnis',1,'','admin','2018-11-05 08:41:13','admin','2018-11-05 08:41:13');
insert  into `jenis_armada`(`id_jenis_armada`,`kode_jenis_armada`,`nama_jenis_armada`,`status_jenis_armada`,`keterangan_jenis_armada`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (31,'JNS0006','Elf Eksekutif',1,'','admin','2018-11-05 08:41:17','admin','2018-11-05 08:41:17');

/*Table structure for table `kota` */

DROP TABLE IF EXISTS `kota`;

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kota` varchar(15) NOT NULL,
  `nama_kota` varchar(50) DEFAULT NULL,
  `jenis_kota` int(11) DEFAULT NULL COMMENT '0=kota awal; 1=kota tujuan',
  `status_kota` int(11) DEFAULT 1 COMMENT '0=tidak aktif; 1=aktif',
  `keterangan_kota` varchar(100) DEFAULT NULL,
  `add_by` varchar(25) DEFAULT NULL,
  `change_by` varchar(25) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_kota`)
) ENGINE=MyISAM AUTO_INCREMENT=148 DEFAULT CHARSET=latin1;

/*Data for the table `kota` */

insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (23,'KTJ0001','Sidoarjo',1,0,'','admin','admin','2018-11-03 10:42:41','2018-11-04 01:52:31');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (147,'KTJ0017','Malang',1,1,'','admin','admin','2018-11-23 11:56:05','2018-11-23 11:56:05');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (146,'KTJ0017','Tes',1,0,'tes','admin','admin','2018-11-17 02:26:24','2018-11-17 02:26:28');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (145,'KTJ0008','Tes',0,0,'tes','admin','admin','2018-11-17 02:26:12','2018-11-17 02:26:16');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (144,'KTJ0017','Asa',1,0,'','admin','admin','2018-11-05 07:36:24','2018-11-06 03:50:30');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (143,'KTJ0016','Mojokerto',1,1,'','admin','admin','2018-11-04 02:25:56','2018-11-04 02:25:56');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (140,'KTJ0013','Sarangan - Magetan',1,1,'','admin','admin','2018-11-04 02:24:48','2018-11-04 02:24:48');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (141,'KTJ0014','Gus Dur - Blitar - Turen',1,1,'','admin','admin','2018-11-04 02:25:31','2018-11-04 02:25:31');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (142,'KTJ0015','Banyuwangi',1,1,'','admin','admin','2018-11-04 02:25:50','2018-11-04 02:25:50');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (139,'KTJ0012','Wali 9',1,1,'','admin','admin','2018-11-04 02:24:33','2018-11-04 02:24:33');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (138,'KTJ0011','Wali 8',1,1,'','admin','admin','2018-11-04 02:24:30','2018-11-04 02:24:30');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (137,'KTJ0010','Wali 5',1,1,'','admin','admin','2018-11-04 02:24:22','2018-11-04 02:24:22');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (136,'KTJ0009','Bangkalan - Madura',1,1,'','admin','admin','2018-11-04 02:21:27','2018-11-04 02:21:27');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (135,'KTJ0008','WBL Lamongan',1,1,'','admin','admin','2018-11-04 02:21:20','2018-11-04 02:21:20');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (134,'KTJ0007','Yogyakarta',1,1,'','admin','admin','2018-11-04 02:19:27','2018-11-23 12:03:27');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (133,'KTJ0006','Bali',1,1,'','admin','admin','2018-11-04 02:19:24','2018-11-04 02:19:24');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (132,'KTJ0005','Semarang',1,1,'','admin','admin','2018-11-04 02:19:21','2018-11-04 02:19:21');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (131,'KTJ0004','Bandung',1,1,'','admin','admin','2018-11-04 02:19:06','2018-11-04 02:19:06');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (130,'KTJ0003','Jakarta - Bandung',1,1,'','admin','admin','2018-11-04 02:18:52','2018-11-04 02:18:52');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (129,'KTJ0002','Jakarta',1,1,'','admin','admin','2018-11-04 02:17:47','2018-11-04 02:17:47');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (128,'KTJ0001','Surabaya',1,1,'','admin','admin','2018-11-04 02:17:42','2018-11-04 02:17:42');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (127,'KTJ0001','Tes',1,0,'','admin','admin','2018-11-04 01:59:01','2018-11-04 01:59:23');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (126,'KTJ0003','Surabaya',1,0,'','admin','admin','2018-11-04 01:52:54','2018-11-04 01:53:23');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (125,'KTJ0007','Mojokerto',0,1,'','admin','admin','2018-11-04 01:50:30','2018-11-04 01:50:30');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (124,'KTJ0006','Lamongan',0,1,'','admin','admin','2018-11-04 01:49:54','2018-11-04 01:49:54');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (123,'KTJ0005','Tuban',0,1,'','admin','admin','2018-11-04 01:49:47','2018-11-04 01:49:47');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (122,'KTJ0004','Malang',0,1,'','admin','admin','2018-11-04 01:49:24','2018-11-04 01:49:24');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (121,'KTJ0003','Gresik',0,1,'','admin','admin','2018-11-04 01:49:17','2018-11-04 01:49:17');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (118,'KTJ0001','Sidoarjo',0,1,'','admin','admin','2018-11-03 13:18:28','2018-11-04 00:28:04');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (119,'KTJ0002','Surabaya',0,1,'','admin','admin','2018-11-03 13:44:15','2018-11-04 00:27:59');
insert  into `kota`(`id_kota`,`kode_kota`,`nama_kota`,`jenis_kota`,`status_kota`,`keterangan_kota`,`add_by`,`change_by`,`entry_time`,`last_modified`) values (120,'KTJ0002','Sdasd',1,0,'asdasdsd','admin','admin','2018-11-03 14:11:00','2018-11-03 14:11:04');

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(15) DEFAULT NULL,
  `status_level` int(11) DEFAULT NULL,
  `add_by` varchar(15) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `change_by` varchar(15) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_level`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`id_level`,`nama_level`,`status_level`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (1,'admin',1,'admin','2018-10-31 13:10:34','admin','0000-00-00 00:00:00');
insert  into `level`(`id_level`,`nama_level`,`status_level`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (2,'pegawai',1,'admin','2018-10-31 13:10:28','admin','0000-00-00 00:00:00');
insert  into `level`(`id_level`,`nama_level`,`status_level`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (3,'customer',1,'admin','2018-10-31 13:10:27','admin','0000-00-00 00:00:00');
insert  into `level`(`id_level`,`nama_level`,`status_level`,`add_by`,`entry_time`,`change_by`,`last_modified`) values (4,'pemilik',1,'admin','2018-10-31 13:10:25','admin','0000-00-00 00:00:00');

/*Table structure for table `newsletter` */

DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `email_sent` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `newsletter` */

insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (1,'barcelonitas.adhyt@gmail.com',1,'2018-11-01 03:50:39',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (2,'barcelonitas.adhitya@gmail.com',1,'2018-11-01 03:52:16',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (3,'barcelonitas.adhyt@gmail.com1',1,'2018-11-01 04:15:23',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (4,'barcelonitas.afufyddhyt@gmaihdydyl.com',1,'2018-11-01 04:16:53',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (5,'barcelonitas.afufyddhyt@a.c',1,'2018-11-01 04:17:10',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (6,'barcelonitas.afufyddhyt@a.chxhch',1,'2018-11-01 04:17:51',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (7,'barcelonitas.afufyddhyt@a.chxhch.ghgfy.vsrbx',1,'2018-11-01 04:18:36',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (8,'Promo@g.gix',1,'2018-11-01 04:18:54',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (9,'sobirinachmad86@gmail.com',1,'2019-01-30 14:02:55',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (10,'junaidi5511@gmail.com',1,'2019-02-13 00:06:10',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (11,'zfahmirizaldi@gmail.com',1,'2019-02-17 18:40:55',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (12,'fajarandaru11@gmail.com',1,'2019-03-31 13:19:04',NULL);
insert  into `newsletter`(`id`,`email`,`status`,`entry_time`,`email_sent`) values (13,'adiatma962@gmail.com',1,'2019-06-01 07:18:34',NULL);

/*Table structure for table `notifikasi` */

DROP TABLE IF EXISTS `notifikasi`;

CREATE TABLE `notifikasi` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `menu` varchar(25) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `tgl_notif_nav` timestamp NOT NULL DEFAULT current_timestamp(),
  `tgl_notify_js` timestamp NULL DEFAULT current_timestamp() COMMENT 'sudah di klik di notifikasi bar atau belum',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `notifikasi` */

insert  into `notifikasi`(`id`,`menu`,`user`,`tgl_notif_nav`,`tgl_notify_js`) values (2,'armada',2,'2018-11-27 17:30:24','2018-11-30 02:05:43');
insert  into `notifikasi`(`id`,`menu`,`user`,`tgl_notif_nav`,`tgl_notify_js`) values (3,'armada',5,'2018-11-28 03:22:31','2018-11-28 03:22:31');
insert  into `notifikasi`(`id`,`menu`,`user`,`tgl_notif_nav`,`tgl_notify_js`) values (4,'armada',63,'2020-05-01 08:32:06','2020-05-01 08:32:06');
insert  into `notifikasi`(`id`,`menu`,`user`,`tgl_notif_nav`,`tgl_notify_js`) values (5,'armada',0,'2020-05-01 08:32:09','2020-05-01 08:32:09');

/*Table structure for table `pembayaran` */

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pembayaran` varchar(20) DEFAULT NULL,
  `tanggal_pembayaran` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status_pembayaran` int(11) DEFAULT NULL,
  `metode_pembayaran` varchar(20) DEFAULT NULL,
  `sisa_pembayaran` decimal(12,2) DEFAULT NULL,
  `keterangan_pembayaran` varchar(50) DEFAULT NULL,
  `add_by` varchar(15) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `change_by` varchar(15) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `pembayaran` */

/*Table structure for table `pesanan` */

DROP TABLE IF EXISTS `pesanan`;

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) NOT NULL AUTO_INCREMENT,
  `kode_pesanan` varchar(20) DEFAULT NULL,
  `kode_booking` varchar(6) DEFAULT NULL,
  `id_harga` int(11) DEFAULT NULL COMMENT 'auto increment',
  `id_customer` int(11) DEFAULT NULL,
  `id_pembayaran` int(11) DEFAULT NULL,
  `tanggal_pesanan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis_pesanan` tinyint(4) DEFAULT 0 COMMENT '0=paket, 1=request',
  `id_kota_awal` int(11) DEFAULT NULL,
  `id_kota_tujuan` int(11) DEFAULT NULL,
  `tanggal_awal` date DEFAULT NULL COMMENT 'tanggal keberangkatan',
  `tanggal_akhir` date DEFAULT NULL COMMENT 'tanggal selesai',
  `id_armada` varchar(15) DEFAULT NULL,
  `harga` decimal(12,2) DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL COMMENT 'hari',
  `status_pemesanan` int(11) DEFAULT NULL COMMENT '0=belum approve, 1= approve, 2=cancel, 4=selesai',
  `keterangan` varchar(200) DEFAULT NULL,
  `subtotal` decimal(15,2) DEFAULT NULL,
  `potongan` decimal(10,2) DEFAULT NULL,
  `metode_pembayaran` varchar(25) DEFAULT NULL,
  `tambahan_biaya` decimal(10,2) DEFAULT NULL,
  `pajak` int(11) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  `nominal_pembayaran` decimal(15,2) DEFAULT NULL,
  `sisa` decimal(15,2) DEFAULT NULL,
  `no_invoice` varchar(20) DEFAULT NULL,
  `add_by` varchar(25) DEFAULT NULL,
  `entry_time` timestamp NULL DEFAULT current_timestamp(),
  `changed_by` varchar(25) DEFAULT NULL,
  `last_modified` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_pesanan`),
  KEY `FK_Relationship_6` (`id_harga`),
  KEY `FK_satu_pemesanan_bisa_banyak_pembayaran` (`id_pembayaran`),
  KEY `FK_satu_user_bisa_banyak_pesanan` (`add_by`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `pesanan` */

insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_booking`,`id_harga`,`id_customer`,`id_pembayaran`,`tanggal_pesanan`,`jenis_pesanan`,`id_kota_awal`,`id_kota_tujuan`,`tanggal_awal`,`tanggal_akhir`,`id_armada`,`harga`,`durasi`,`status_pemesanan`,`keterangan`,`subtotal`,`potongan`,`metode_pembayaran`,`tambahan_biaya`,`pajak`,`total`,`nominal_pembayaran`,`sisa`,`no_invoice`,`add_by`,`entry_time`,`changed_by`,`last_modified`) values (1,'TRVL011220180001','JX6CQN',14,10,NULL,'2018-12-01 05:46:34',1,125,147,'0000-00-00','0000-00-00','6',2000000.00,2,NULL,'',NULL,0.00,'0',NULL,400000,4400000.00,0.00,4400000.00,NULL,'admin','2018-12-01 05:46:34',NULL,'2018-12-01 05:46:34');
insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_booking`,`id_harga`,`id_customer`,`id_pembayaran`,`tanggal_pesanan`,`jenis_pesanan`,`id_kota_awal`,`id_kota_tujuan`,`tanggal_awal`,`tanggal_akhir`,`id_armada`,`harga`,`durasi`,`status_pemesanan`,`keterangan`,`subtotal`,`potongan`,`metode_pembayaran`,`tambahan_biaya`,`pajak`,`total`,`nominal_pembayaran`,`sisa`,`no_invoice`,`add_by`,`entry_time`,`changed_by`,`last_modified`) values (2,'TRVL011220180002','CTUOKA',14,10,NULL,'2018-12-01 05:57:43',1,125,147,'0000-00-00','0000-00-00','6',2000000.00,5,NULL,'',NULL,0.00,'0',NULL,1000000,11000000.00,0.00,11000000.00,NULL,'admin','2018-12-01 05:57:43',NULL,'2018-12-01 05:57:43');
insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_booking`,`id_harga`,`id_customer`,`id_pembayaran`,`tanggal_pesanan`,`jenis_pesanan`,`id_kota_awal`,`id_kota_tujuan`,`tanggal_awal`,`tanggal_akhir`,`id_armada`,`harga`,`durasi`,`status_pemesanan`,`keterangan`,`subtotal`,`potongan`,`metode_pembayaran`,`tambahan_biaya`,`pajak`,`total`,`nominal_pembayaran`,`sisa`,`no_invoice`,`add_by`,`entry_time`,`changed_by`,`last_modified`) values (3,'TRVL011220180003','ZL5PPR',14,30,NULL,'2018-11-30 18:08:22',1,125,147,'0000-00-00','0000-00-00','6',2000000.00,1,NULL,'',NULL,0.00,'0',NULL,200000,2200000.00,0.00,2200000.00,NULL,'admin','2018-12-01 06:08:22',NULL,'2018-12-01 06:08:22');
insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_booking`,`id_harga`,`id_customer`,`id_pembayaran`,`tanggal_pesanan`,`jenis_pesanan`,`id_kota_awal`,`id_kota_tujuan`,`tanggal_awal`,`tanggal_akhir`,`id_armada`,`harga`,`durasi`,`status_pemesanan`,`keterangan`,`subtotal`,`potongan`,`metode_pembayaran`,`tambahan_biaya`,`pajak`,`total`,`nominal_pembayaran`,`sisa`,`no_invoice`,`add_by`,`entry_time`,`changed_by`,`last_modified`) values (4,'TRVL011220180004','0R80JI',14,11,NULL,'2018-11-30 18:16:07',1,125,147,'0000-00-00','0000-00-00','6',2000000.00,26,NULL,'',NULL,0.00,'0',NULL,5200000,57200000.00,57200000.00,0.00,NULL,'admin','2018-12-01 06:16:07',NULL,'2018-12-01 06:16:07');
insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_booking`,`id_harga`,`id_customer`,`id_pembayaran`,`tanggal_pesanan`,`jenis_pesanan`,`id_kota_awal`,`id_kota_tujuan`,`tanggal_awal`,`tanggal_akhir`,`id_armada`,`harga`,`durasi`,`status_pemesanan`,`keterangan`,`subtotal`,`potongan`,`metode_pembayaran`,`tambahan_biaya`,`pajak`,`total`,`nominal_pembayaran`,`sisa`,`no_invoice`,`add_by`,`entry_time`,`changed_by`,`last_modified`) values (5,'TRVL011220180005','RBKGBC',14,11,NULL,'2018-11-30 18:46:24',1,125,147,'2018-01-12','2018-07-12','6',2000000.00,7,1,'',NULL,0.00,'Belum Bayar',NULL,1400000,15400000.00,0.00,15400000.00,NULL,'admin','2018-12-01 06:46:24',NULL,'2018-12-01 06:46:24');
insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_booking`,`id_harga`,`id_customer`,`id_pembayaran`,`tanggal_pesanan`,`jenis_pesanan`,`id_kota_awal`,`id_kota_tujuan`,`tanggal_awal`,`tanggal_akhir`,`id_armada`,`harga`,`durasi`,`status_pemesanan`,`keterangan`,`subtotal`,`potongan`,`metode_pembayaran`,`tambahan_biaya`,`pajak`,`total`,`nominal_pembayaran`,`sisa`,`no_invoice`,`add_by`,`entry_time`,`changed_by`,`last_modified`) values (6,'TRVL131220180006','KKABWN',14,11,NULL,'2018-12-13 03:38:23',1,125,147,'0000-00-00','0000-00-00','6',2000000.00,16,1,'',NULL,0.00,'Belum Bayar',NULL,3200000,35200000.00,0.00,35200000.00,NULL,'admin','2018-12-13 03:38:23',NULL,'2018-12-13 03:38:23');
insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_booking`,`id_harga`,`id_customer`,`id_pembayaran`,`tanggal_pesanan`,`jenis_pesanan`,`id_kota_awal`,`id_kota_tujuan`,`tanggal_awal`,`tanggal_akhir`,`id_armada`,`harga`,`durasi`,`status_pemesanan`,`keterangan`,`subtotal`,`potongan`,`metode_pembayaran`,`tambahan_biaya`,`pajak`,`total`,`nominal_pembayaran`,`sisa`,`no_invoice`,`add_by`,`entry_time`,`changed_by`,`last_modified`) values (7,'TRVL131220180007','TKJMG1',14,10,NULL,'2018-12-13 03:45:03',1,125,147,'0000-00-00','0000-00-00','6',2000000.00,12,1,'',NULL,0.00,'Belum Bayar',NULL,2400000,26400000.00,0.00,26400000.00,NULL,'admin','2018-12-13 03:45:03',NULL,'2018-12-13 03:45:03');
insert  into `pesanan`(`id_pesanan`,`kode_pesanan`,`kode_booking`,`id_harga`,`id_customer`,`id_pembayaran`,`tanggal_pesanan`,`jenis_pesanan`,`id_kota_awal`,`id_kota_tujuan`,`tanggal_awal`,`tanggal_akhir`,`id_armada`,`harga`,`durasi`,`status_pemesanan`,`keterangan`,`subtotal`,`potongan`,`metode_pembayaran`,`tambahan_biaya`,`pajak`,`total`,`nominal_pembayaran`,`sisa`,`no_invoice`,`add_by`,`entry_time`,`changed_by`,`last_modified`) values (8,'TRVL280120190008','QFKS8C',14,11,NULL,'2019-01-28 05:39:48',1,125,147,'0000-00-00','0000-00-00','6',2000000.00,3,1,'',NULL,0.00,'Belum Bayar',NULL,600000,6600000.00,0.00,6600000.00,NULL,'admin','2019-01-28 05:39:48',NULL,'2019-01-28 05:39:48');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_level` int(11) DEFAULT NULL,
  `kode_user` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `nama_lengkap` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '0=user biasa; 1=admin ',
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `kota` varchar(15) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL,
  `aktif` tinyint(4) DEFAULT NULL COMMENT '0=belum aktifasi; 1=sudah aktifasi',
  `req_token` tinyint(4) DEFAULT NULL COMMENT '0=tidak request; 1=request',
  `add_by` varchar(15) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `change_by` varchar(15) DEFAULT NULL,
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` varchar(50) DEFAULT NULL,
  `act_key` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  KEY `FK_satu_level_banyak_user` (`id_level`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`id_level`,`kode_user`,`username`,`email`,`nama_lengkap`,`password`,`status`,`alamat`,`telp`,`kota`,`keterangan`,`aktif`,`req_token`,`add_by`,`entry_time`,`change_by`,`last_modified`,`token`,`act_key`) values (2,1,'USR0001','admin','adhitya.informatics@gmail.com','admin','21232f297a57a5a743894a0e4a801fc3',1,'','','','',1,0,'','2018-07-18 08:38:25','','2018-07-25 09:26:32','','');
insert  into `user`(`id_user`,`id_level`,`kode_user`,`username`,`email`,`nama_lengkap`,`password`,`status`,`alamat`,`telp`,`kota`,`keterangan`,`aktif`,`req_token`,`add_by`,`entry_time`,`change_by`,`last_modified`,`token`,`act_key`) values (3,1,'USR0006','biyan1','biyan.vox1@gmail.com','biyan','4ffe11d722d36697c617574f0a424bd6',0,'surabaya','085755890903','','',0,1,'biyan1','2018-07-20 09:45:03','biyan1','2018-07-20 09:45:03','c2sokdtd3o9il4taftvadepe4iu72592','Yml5YW4udm94MUBnbWFpbC5jb218MTUzMjEwNTEwM3xSZWdpc3RlcnxjMnNva2R0ZDNvOWlsNHRhZnR2YWRlcGU0aXU3MjU5Mg');
insert  into `user`(`id_user`,`id_level`,`kode_user`,`username`,`email`,`nama_lengkap`,`password`,`status`,`alamat`,`telp`,`kota`,`keterangan`,`aktif`,`req_token`,`add_by`,`entry_time`,`change_by`,`last_modified`,`token`,`act_key`) values (5,2,'USR0005','biyan','biyan.vox@gmail.com','biyan','4ffe11d722d36697c617574f0a424bd6',0,'surabaya','085755890903','','',1,1,'biyan','2018-07-20 09:37:42','biyan','2018-08-18 15:18:45','ggr51me05lm4kvs534oqof4csqrv2l8n','Yml5YW4udm94QGdtYWlsLmNvbXwxNTM0NjA1NTI1fEx1cGFQYXNzd29yZHxnZ3I1MW1lMDVsbTRrdnM1MzRvcW9mNGNzcXJ2Mmw4');
insert  into `user`(`id_user`,`id_level`,`kode_user`,`username`,`email`,`nama_lengkap`,`password`,`status`,`alamat`,`telp`,`kota`,`keterangan`,`aktif`,`req_token`,`add_by`,`entry_time`,`change_by`,`last_modified`,`token`,`act_key`) values (6,3,'USR0007','biyan2','biyan.vox2@gmail.com','biyan','4ffe11d722d36697c617574f0a424bd6',0,'sidoarjo','085755890903','','',0,1,'biyan2','2018-07-20 09:46:25','biyan2','2018-07-20 09:46:25','c2sokdtd3o9il4taftvadepe4iu72592','Yml5YW4udm94MkBnbWFpbC5jb218MTUzMjEwNTE4NXxSZWdpc3RlcnxjMnNva2R0ZDNvOWlsNHRhZnR2YWRlcGU0aXU3MjU5Mg');
insert  into `user`(`id_user`,`id_level`,`kode_user`,`username`,`email`,`nama_lengkap`,`password`,`status`,`alamat`,`telp`,`kota`,`keterangan`,`aktif`,`req_token`,`add_by`,`entry_time`,`change_by`,`last_modified`,`token`,`act_key`) values (7,3,'USR0008','biyan4220','biyan4220@gmail.com','biyan','3f9741afc72f118748a38a52d186fe6e',0,'Surabaya','085755890901','','',0,0,'biyan4220','2018-07-20 19:06:32','biyan4220','2018-07-20 19:08:58','','');
insert  into `user`(`id_user`,`id_level`,`kode_user`,`username`,`email`,`nama_lengkap`,`password`,`status`,`alamat`,`telp`,`kota`,`keterangan`,`aktif`,`req_token`,`add_by`,`entry_time`,`change_by`,`last_modified`,`token`,`act_key`) values (8,3,'USR0009','Gleamland','gleamland@gmail.com','Zainal amri','39655376985a2267d9f2cf186a2f710c',0,'Surabaya','081703324122','','',1,0,'Gleamland','2018-07-20 19:25:39','Gleamland','2018-07-20 19:26:00','','');
insert  into `user`(`id_user`,`id_level`,`kode_user`,`username`,`email`,`nama_lengkap`,`password`,`status`,`alamat`,`telp`,`kota`,`keterangan`,`aktif`,`req_token`,`add_by`,`entry_time`,`change_by`,`last_modified`,`token`,`act_key`) values (12,3,'USR0011','Budi25','Rachmanbudiarto25@gmail.com','Budi Budi','0f419f41e4c00ed6ad2d0879cbbf2fd7',1,'Jl. Cemara No. 21','081234567890',NULL,NULL,1,0,'Budi25','2018-11-14 09:50:09','Budi25','2018-11-14 09:50:47',NULL,NULL);

/*Table structure for table `waktu` */

DROP TABLE IF EXISTS `waktu`;

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL AUTO_INCREMENT,
  `kode_waktu` varchar(15) DEFAULT NULL,
  `nama_waktu` varchar(255) DEFAULT NULL,
  `durasi_waktu` int(11) DEFAULT NULL COMMENT 'dalam hari',
  `status_waktu` varchar(20) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL COMMENT 'info',
  `add_by` varchar(2) DEFAULT NULL,
  `change_by` varchar(25) DEFAULT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_waktu`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `waktu` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

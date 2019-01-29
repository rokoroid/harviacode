/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - harviacode
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`harviacode` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `harviacode`;

/*Table structure for table `tb_detail` */

DROP TABLE IF EXISTS `tb_detail`;

CREATE TABLE `tb_detail` (
  `id_setting` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  KEY `id_dosen` (`id_dosen`),
  CONSTRAINT `tb_detail_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_detail` */

/*Table structure for table `tb_dosen` */

DROP TABLE IF EXISTS `tb_dosen`;

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `id_prodi` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_dosen` varchar(50) DEFAULT NULL,
  `gelar_depan` varchar(4) DEFAULT NULL,
  `gelar_belakang` varchar(20) DEFAULT NULL,
  `jabatan_akademik` enum('Tenaga Pengajar','Asisten Ahli','Lektor','Lektor Kepala','Profesor') DEFAULT NULL,
  `golongan_kepangkatan` enum('III A','III B','III C','III D','IV A','IV B','IV C','IV D','IV E') DEFAULT NULL,
  `agama` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('L','P') NOT NULL DEFAULT 'L',
  `ikatan_kerja` enum('Dosen Tetap','Dosen Tidak Tetap','Dosen Dengan Perjanjian Kerja','Dosen PNS DPK') NOT NULL DEFAULT 'Dosen Tetap',
  `status_aktif` enum('Aktif','Tidak Aktif','Cuti','Ijin Belajar','Tugas Belajar','Tugas di Instansi Lain') NOT NULL DEFAULT 'Aktif',
  `pendidikan_terakhir` enum('D3','D4','S1','S2','S3') DEFAULT NULL,
  `bidang_ilmu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_dosen`),
  KEY `id_prodi` (`id_prodi`),
  KEY `userdosen` (`id_user`),
  KEY `agamdosen` (`agama`),
  CONSTRAINT `tb_dosen_ibfk_1` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `tb_dosen` */

insert  into `tb_dosen`(`id_dosen`,`id_prodi`,`id_user`,`nidn`,`nik`,`nama_dosen`,`gelar_depan`,`gelar_belakang`,`jabatan_akademik`,`golongan_kepangkatan`,`agama`,`tempat_lahir`,`tgl_lahir`,`jk`,`ikatan_kerja`,`status_aktif`,`pendidikan_terakhir`,`bidang_ilmu`) values (1,27,1,'0217128303','022100101','Agus Mulyanto',NULL,'M.T., M.Sc.','Asisten Ahli','III B',1,'Sukadadi','1983-12-17','L','Dosen Tetap','Aktif','S2','Ilmu Komputer'),(2,27,66,'0229818210','021983137','Ade Dwi Putra',NULL,'S.Kom.','Tenaga Pengajar','III A',1,'Gedung MEneng','1983-12-17','L','Dosen Tetap','Aktif','S2','Manajemen'),(4,27,65,'0208273787','029182998','Jupriyadi',NULL,'S.Kom., M.T.','Asisten Ahli','III B',1,'Wonosobo','1983-08-07','L','Dosen Tetap','Aktif','S2','Informatika'),(11,27,64,'0218237613','027182728','Imam Ahmad',NULL,'M.Kom.','Asisten Ahli','III B',1,'Aceh','1987-06-16','L','Dosen Tetap','Aktif','S2','Ilmu Komputer'),(14,27,8,'0182378237','028918321','Agung Lesmoko',NULL,'S.Si.','Tenaga Pengajar','III B',1,'sdsd','2017-10-12','L','Dosen Dengan Perjanjian Kerja','Aktif','S3','Ilmu Komputer'),(15,27,9,'0201928291','021235832','Agus Wantoro',NULL,'M.Kom.','Tenaga Pengajar','III A',1,'Lampung','2017-10-11','L','Dosen Tetap','Aktif','S2','Ilmu Ekonomi'),(16,27,75,'1921928212','028195032','Purwono Prasetyawan',NULL,'S.T., M.T.','Asisten Ahli','III B',1,'Lamsel','1989-07-14','L','Dosen Tetap','Aktif','S2','Teknik Elektro'),(20,27,NULL,NULL,'','Agung Tri Prastowo',NULL,'S.Kom.','Tenaga Pengajar','III B',1,'Lampung','1982-03-04','L','Dosen Tetap','Aktif','S1','Teknik Komputer'),(21,27,NULL,NULL,'','Adhie Thyo P',NULL,'S.Kom.','Tenaga Pengajar','III B',1,NULL,NULL,'L','Dosen Tetap','Aktif',NULL,'Ilmu Komputer'),(22,27,NULL,NULL,'','Amarudin',NULL,'S.Kom., M.Eng.','Tenaga Pengajar','III B',1,NULL,NULL,'L','Dosen Tetap','Aktif',NULL,NULL),(24,28,NULL,NULL,'','Ari Sulistyawati',NULL,'S.Kom., M.Pd.','Tenaga Pengajar','III B',1,NULL,NULL,'P','Dosen Tetap','Aktif',NULL,NULL),(25,27,NULL,NULL,'','Dedi Darwis',NULL,'M.Kom.','Tenaga Pengajar','III B',1,NULL,NULL,'L','Dosen Tetap','Aktif',NULL,NULL),(26,28,NULL,NULL,'','Dyah Ayu Megawati',NULL,'S.Kom.','Asisten Ahli','III A',1,NULL,NULL,'P','Dosen Tetap','Aktif',NULL,NULL),(27,28,NULL,NULL,'','Fatmawati Isnaini',NULL,'SE.','Tenaga Pengajar','III A',1,NULL,NULL,'P','Dosen Tetap','Aktif',NULL,NULL),(28,29,NULL,NULL,'','Fenty Ariany',NULL,'ST.','Tenaga Pengajar','III B',1,NULL,NULL,'P','Dosen Tetap','Aktif',NULL,NULL);

/*Table structure for table `tb_fakultas` */

DROP TABLE IF EXISTS `tb_fakultas`;

CREATE TABLE `tb_fakultas` (
  `id_fakultas` int(11) NOT NULL AUTO_INCREMENT,
  `kode_fakultas` char(10) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL,
  `namafak_English` varchar(100) NOT NULL,
  `singkatan` varchar(8) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_fakultas` */

insert  into `tb_fakultas`(`id_fakultas`,`kode_fakultas`,`nama_fakultas`,`namafak_English`,`singkatan`,`keterangan`) values (1,'FTIK','Fakultas Teknik Dan Ilmu Komputer','Faculty of Engineering and Computer Sciences','FTIK','FTIK\r\n'),(3,'FEB','Fakultas Ekonomi Dan Bisnis','Faculty of Economic and Business','FEB','FEB\r\n'),(4,'FSIP','Fakultas Sastra dan Ilmu Pendidikan','Faculty of Engineering and Computer Sciences','FSIP','FSIP');

/*Table structure for table `tb_gedung` */

DROP TABLE IF EXISTS `tb_gedung`;

CREATE TABLE `tb_gedung` (
  `id_gedung` int(11) NOT NULL AUTO_INCREMENT,
  `kode_gedung` varchar(30) DEFAULT NULL,
  `nama_gedung` varchar(100) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_gedung`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tb_gedung` */

insert  into `tb_gedung`(`id_gedung`,`kode_gedung`,`nama_gedung`,`keterangan`) values (10,'GDG FSIP','Gedung B','Gedung untuk FSIP'),(13,'GDG FEB','Gedung A','Gedung untuk FEB'),(15,'GDG FTIK','Gedung GSG','Gedung untuk FTIK'),(16,'GDG ICT','Gedung ICT',NULL),(17,'GDG PU','Gedung PU',NULL),(18,'GDG D','Gedung D',NULL);

/*Table structure for table `tb_hari` */

DROP TABLE IF EXISTS `tb_hari`;

CREATE TABLE `tb_hari` (
  `id_hari` int(11) NOT NULL AUTO_INCREMENT,
  `kode_hari` int(11) DEFAULT NULL,
  `nama_hari` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_hari`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tb_hari` */

insert  into `tb_hari`(`id_hari`,`kode_hari`,`nama_hari`) values (1,1,'Senin'),(2,2,'Selasa'),(3,3,'Rabu'),(4,4,'Kamis'),(5,5,'Jumat'),(6,6,'Sabtu');

/*Table structure for table `tb_jadwal` */

DROP TABLE IF EXISTS `tb_jadwal`;

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `id_semester` int(11) DEFAULT NULL,
  `id_makul` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jadwal`),
  KEY `id_semester` (`id_semester`),
  KEY `id_makul` (`id_makul`),
  KEY `id_dosen` (`id_dosen`),
  KEY `id_kelas` (`id_kelas`),
  CONSTRAINT `tb_jadwal_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `tb_semester` (`id_semester`),
  CONSTRAINT `tb_jadwal_ibfk_2` FOREIGN KEY (`id_makul`) REFERENCES `tb_makul` (`id_makul`),
  CONSTRAINT `tb_jadwal_ibfk_3` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`),
  CONSTRAINT `tb_jadwal_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `tb_kelas` (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=238 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jadwal` */

insert  into `tb_jadwal`(`id_jadwal`,`id_semester`,`id_makul`,`id_kelas`,`id_dosen`) values (1,14,14,1,1),(2,14,14,2,1),(3,14,14,3,1),(4,14,14,4,1),(5,14,14,5,1),(6,14,14,6,1),(7,14,14,7,1),(8,14,14,8,1),(9,14,15,1,4),(10,14,15,2,4),(11,14,15,3,4),(12,14,15,4,11),(13,14,15,5,11),(14,14,15,6,11),(15,14,15,7,16),(16,14,15,8,16),(17,14,16,1,14),(18,14,16,2,14),(19,14,16,3,14),(20,14,16,4,14),(21,14,16,5,14),(22,14,16,6,14),(23,14,16,7,14),(24,14,16,8,14),(25,14,17,1,20),(26,14,17,2,20),(27,14,17,3,20),(28,14,17,4,20),(29,14,17,5,20),(30,14,17,6,20),(31,14,17,7,20),(32,14,17,8,20),(33,14,18,1,21),(34,14,18,2,21),(35,14,18,3,21),(36,14,18,4,21),(37,14,18,5,21),(38,14,18,6,22),(39,14,18,7,22),(40,14,18,8,22),(49,14,19,1,22),(50,14,19,2,24),(51,14,19,3,24),(52,14,19,4,24),(53,14,19,5,24),(54,14,19,6,24),(55,14,19,7,24),(56,14,19,8,24),(57,14,20,1,1),(58,14,20,2,1),(59,14,20,3,1),(60,14,20,4,4),(61,14,20,5,2),(62,14,20,6,25),(63,14,20,7,25),(64,14,20,8,25),(65,14,21,1,26),(66,14,21,2,26),(67,14,21,3,26),(68,14,21,4,26),(69,14,21,5,26),(70,14,21,6,26),(71,14,21,7,26),(72,14,21,8,26),(73,14,22,1,15),(74,14,22,2,15),(75,14,22,3,15),(76,14,22,4,15),(77,14,22,5,15),(78,14,22,6,15),(79,14,22,7,15),(80,14,22,8,15),(89,14,47,9,15),(90,14,47,10,15),(91,14,47,11,15),(92,14,47,12,15),(93,14,47,13,15),(94,14,47,14,15),(95,14,47,15,15),(96,14,47,16,15),(97,14,48,9,4),(98,14,48,10,4),(99,14,48,11,4),(100,14,48,12,22),(101,14,48,13,22),(102,14,48,14,22),(103,14,48,15,22),(104,14,48,16,22),(105,14,49,9,11),(106,14,49,10,11),(107,14,49,11,11),(108,14,49,12,24),(109,14,49,13,24),(110,14,49,14,24),(111,14,49,15,24),(112,14,49,16,24),(113,14,50,9,11),(114,14,50,10,11),(115,14,50,11,11),(116,14,50,12,24),(117,14,50,13,24),(118,14,50,14,24),(119,14,50,15,24),(120,14,50,16,24),(137,14,51,10,25),(138,14,51,11,25),(139,14,51,12,25),(140,14,51,13,25),(141,14,51,14,25),(142,14,51,15,25),(143,14,51,16,25),(144,14,52,10,25),(145,14,52,11,25),(146,14,52,12,25),(147,14,52,13,26),(148,14,52,14,26),(149,14,52,15,26),(150,14,52,16,26),(151,14,53,10,4),(152,14,53,11,4),(153,14,53,12,4),(154,14,53,13,4),(155,14,53,14,4),(156,14,53,15,4),(157,14,53,16,4),(158,14,54,10,27),(159,14,54,11,27),(160,14,54,12,27),(161,14,54,13,27),(162,14,54,14,27),(163,14,54,15,27),(164,14,54,16,27),(165,14,76,17,28),(166,14,76,18,28),(167,14,76,19,28),(168,14,76,20,28),(169,14,76,21,28),(170,14,76,22,28),(171,14,76,23,28),(172,14,77,17,1),(173,14,77,18,1),(174,14,77,19,1),(175,14,77,20,4),(176,14,77,21,4),(177,14,77,22,4),(178,14,77,23,4),(179,14,78,17,11),(180,14,78,18,11),(181,14,78,19,11),(182,14,78,20,11),(183,14,78,21,11),(184,14,78,22,11),(185,14,78,23,11),(186,14,79,17,14),(187,14,79,18,14),(188,14,79,19,14),(189,14,79,20,14),(190,14,79,21,14),(191,14,79,22,14),(192,14,79,23,14),(193,14,80,17,15),(194,14,80,18,15),(195,14,80,19,15),(196,14,80,20,15),(197,14,80,21,15),(198,14,80,22,15),(199,14,80,23,15),(200,14,81,17,2),(201,14,81,18,2),(202,14,81,19,2),(203,14,81,20,16),(204,14,81,21,16),(205,14,81,22,16),(206,14,81,23,16),(207,14,82,17,2),(208,14,82,18,2),(209,14,82,19,2),(210,14,82,20,2),(211,14,82,21,2),(212,14,82,22,2),(213,14,82,23,2),(214,14,83,17,21),(215,14,83,18,21),(216,14,83,19,21),(217,14,83,20,24),(218,14,83,21,24),(219,14,83,22,22),(220,14,83,23,22),(229,14,76,24,28),(230,14,77,24,1),(231,14,78,24,11),(232,14,79,24,14),(233,14,80,24,15),(234,14,81,24,2),(235,14,82,24,2),(236,14,83,24,22),(237,14,20,21,NULL);

/*Table structure for table `tb_jadwalsemester` */

DROP TABLE IF EXISTS `tb_jadwalsemester`;

CREATE TABLE `tb_jadwalsemester` (
  `id_jadwalsmt` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruang` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_jadwalsmt`),
  KEY `id_ruangan` (`id_ruang`),
  KEY `tb_jadwalsemester_ibfk_3` (`id_waktu`),
  KEY `id_jadwal` (`id_jadwal`),
  CONSTRAINT `tb_jadwalsemester_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `tb_ruangan` (`id_ruang`),
  CONSTRAINT `tb_jadwalsemester_ibfk_3` FOREIGN KEY (`id_waktu`) REFERENCES `tb_waktu` (`id_waktu`),
  CONSTRAINT `tb_jadwalsemester_ibfk_4` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=1170 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jadwalsemester` */

insert  into `tb_jadwalsemester`(`id_jadwalsmt`,`id_ruang`,`id_jadwal`,`id_waktu`,`keterangan`) values (974,9,1,17,NULL),(975,17,2,26,NULL),(976,32,3,26,NULL),(977,39,4,23,NULL),(978,20,5,26,NULL),(979,11,6,11,NULL),(980,24,7,34,NULL),(981,37,8,16,NULL),(982,16,9,38,NULL),(983,14,10,24,NULL),(984,13,11,26,NULL),(985,32,12,18,NULL),(986,21,13,39,NULL),(987,15,14,10,NULL),(988,26,15,14,NULL),(989,8,16,15,NULL),(990,36,17,28,NULL),(991,28,18,38,NULL),(992,31,19,38,NULL),(993,29,20,14,NULL),(994,31,21,22,NULL),(995,31,22,9,NULL),(996,28,23,37,NULL),(997,30,24,33,NULL),(998,29,25,3,NULL),(999,30,26,15,NULL),(1000,28,27,12,NULL),(1001,18,28,37,NULL),(1002,28,29,20,NULL),(1003,31,30,8,NULL),(1004,29,31,9,NULL),(1005,31,32,37,NULL),(1006,10,33,24,NULL),(1007,23,34,2,NULL),(1008,39,35,19,NULL),(1009,20,36,1,NULL),(1010,23,37,25,NULL),(1011,39,38,22,NULL),(1012,13,39,22,NULL),(1013,8,40,1,NULL),(1014,36,49,18,NULL),(1015,35,50,24,NULL),(1016,29,51,21,NULL),(1017,35,52,1,NULL),(1018,31,53,30,NULL),(1019,35,54,19,NULL),(1020,33,55,27,NULL),(1021,19,56,15,NULL),(1022,34,57,31,NULL),(1023,10,58,11,NULL),(1024,13,59,19,NULL),(1025,23,60,34,NULL),(1026,20,61,27,NULL),(1027,39,62,32,NULL),(1028,40,63,33,NULL),(1029,23,64,8,NULL),(1030,20,65,12,NULL),(1031,20,66,6,NULL),(1032,22,67,13,NULL),(1033,23,68,31,NULL),(1034,32,69,34,NULL),(1035,24,70,32,NULL),(1036,9,71,42,NULL),(1037,15,72,1,NULL),(1038,27,73,19,NULL),(1039,23,74,19,NULL),(1040,26,75,13,NULL),(1041,10,76,25,NULL),(1042,24,77,4,NULL),(1043,38,78,41,NULL),(1044,9,79,4,NULL),(1045,8,80,19,NULL),(1046,31,89,18,NULL),(1047,31,90,24,NULL),(1048,28,91,14,NULL),(1049,35,92,28,NULL),(1050,33,93,25,NULL),(1051,18,94,15,NULL),(1052,30,95,7,NULL),(1053,18,96,30,NULL),(1054,32,97,7,NULL),(1055,24,98,12,NULL),(1056,22,99,36,NULL),(1057,21,100,18,NULL),(1058,23,101,4,NULL),(1059,12,102,12,NULL),(1060,22,103,11,NULL),(1061,39,104,34,NULL),(1062,30,105,16,NULL),(1063,18,106,12,NULL),(1064,31,107,5,NULL),(1065,36,108,41,NULL),(1066,30,109,23,NULL),(1067,19,110,8,NULL),(1068,36,111,22,NULL),(1069,18,112,26,NULL),(1070,39,113,1,NULL),(1071,21,114,35,NULL),(1072,14,115,26,NULL),(1073,40,116,29,NULL),(1074,10,117,13,NULL),(1075,26,118,8,NULL),(1076,23,119,33,NULL),(1077,37,120,41,NULL),(1078,17,137,19,NULL),(1079,27,138,21,NULL),(1080,13,139,29,NULL),(1081,40,140,30,NULL),(1082,12,141,18,NULL),(1083,9,142,22,NULL),(1084,37,143,35,NULL),(1085,40,144,22,NULL),(1086,24,145,13,NULL),(1087,21,146,36,NULL),(1088,25,147,12,NULL),(1089,14,148,40,NULL),(1090,13,149,28,NULL),(1091,9,150,11,NULL),(1092,33,151,4,NULL),(1093,33,152,26,NULL),(1094,28,153,18,NULL),(1095,29,154,31,NULL),(1096,36,155,36,NULL),(1097,18,156,21,NULL),(1098,36,157,37,NULL),(1099,23,158,35,NULL),(1100,34,159,42,NULL),(1101,26,160,36,NULL),(1102,32,161,35,NULL),(1103,21,162,5,NULL),(1104,12,163,32,NULL),(1105,16,164,6,NULL),(1106,29,165,28,NULL),(1107,35,166,29,NULL),(1108,36,167,29,NULL),(1109,28,168,10,NULL),(1110,31,169,12,NULL),(1111,36,170,15,NULL),(1112,36,171,14,NULL),(1113,29,172,15,NULL),(1114,29,173,36,NULL),(1115,35,174,3,NULL),(1116,28,175,42,NULL),(1117,30,176,19,NULL),(1118,19,177,39,NULL),(1119,35,178,38,NULL),(1120,10,179,3,NULL),(1121,27,180,30,NULL),(1122,23,181,41,NULL),(1123,39,182,2,NULL),(1124,32,183,25,NULL),(1125,15,184,34,NULL),(1126,15,185,30,NULL),(1127,24,186,16,NULL),(1128,37,187,25,NULL),(1129,21,188,22,NULL),(1130,13,189,14,NULL),(1131,12,190,37,NULL),(1132,15,191,36,NULL),(1133,25,192,25,NULL),(1134,16,193,8,NULL),(1135,26,194,27,NULL),(1136,16,195,21,NULL),(1137,40,196,18,NULL),(1138,12,197,15,NULL),(1139,26,198,23,NULL),(1140,39,199,28,NULL),(1141,28,200,15,NULL),(1142,19,201,34,NULL),(1143,35,202,22,NULL),(1144,29,203,22,NULL),(1145,18,204,32,NULL),(1146,31,205,34,NULL),(1147,28,206,29,NULL),(1148,37,207,28,NULL),(1149,11,208,31,NULL),(1150,37,209,32,NULL),(1151,21,210,17,NULL),(1152,11,211,27,NULL),(1153,23,212,7,NULL),(1154,13,213,4,NULL),(1155,32,214,21,NULL),(1156,21,215,29,NULL),(1157,40,216,26,NULL),(1158,37,217,8,NULL),(1159,12,218,6,NULL),(1160,17,219,1,NULL),(1161,15,220,3,NULL),(1162,31,229,2,NULL),(1163,29,230,2,NULL),(1164,13,231,37,NULL),(1165,27,232,26,NULL),(1166,25,233,28,NULL),(1167,28,234,24,NULL),(1168,27,235,22,NULL),(1169,37,236,30,NULL);

/*Table structure for table `tb_jam` */

DROP TABLE IF EXISTS `tb_jam`;

CREATE TABLE `tb_jam` (
  `id_jam` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jam` int(11) DEFAULT NULL,
  `nama_jam` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id_jam`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jam` */

insert  into `tb_jam`(`id_jam`,`kode_jam`,`nama_jam`) values (1,1,'07:10:00'),(2,2,'09:00:00'),(3,3,'11:00:00'),(4,4,'13:00:00'),(5,5,'15:00:00'),(6,6,'17:00:00'),(7,7,'19:00:00');

/*Table structure for table `tb_kelas` */

DROP TABLE IF EXISTS `tb_kelas`;

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(10) DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelas` */

insert  into `tb_kelas`(`id_kelas`,`nama_kelas`,`angkatan`) values (1,'IF 17 A','2017'),(2,'IF 17 B','2017'),(3,'IF 17 C','2017'),(4,'IF 17 D','2017'),(5,'IF 17 E','2017'),(6,'IF 17 F','2017'),(7,'IF 17 G','2017'),(8,'IF 17 H','2017'),(9,'SI 17 A','2017'),(10,'SI 17 B','2017'),(11,'SI 17 C','2017'),(12,'SI 17 C','2017'),(13,'SI 17 D','2017'),(14,'SI 17 E','2017'),(15,'SI 17 F','2017'),(16,'SI 17 G','2017'),(17,'TI 17 A','2017'),(18,'TI 17 B','2017'),(19,'TI 17 C','2017'),(20,'TI 17 D','2017'),(21,'TI 17 E','2017'),(22,'TI 17 F','2017'),(23,'TI 17 G','2017'),(24,'TI 14 H','2017'),(25,'IF 14 A','2014'),(26,'IF 14 B','2014'),(27,'IF 14 C','2014'),(28,'IF 14 D','2014'),(29,'IF 14 E','2014'),(30,'IF 14 F','2014'),(31,'IF 14 G','2014'),(32,'IF 14 H','2014');

/*Table structure for table `tb_kesanggupan` */

DROP TABLE IF EXISTS `tb_kesanggupan`;

CREATE TABLE `tb_kesanggupan` (
  `id_kesanggupan` int(11) NOT NULL AUTO_INCREMENT,
  `id_semester` int(11) DEFAULT NULL,
  `id_dosen` int(11) DEFAULT NULL,
  `senin_tujuh` enum('0','1') DEFAULT NULL,
  `senin_sembilan` enum('0','1') DEFAULT NULL,
  `senin_sebelas` enum('0','1') DEFAULT NULL,
  `senin_satu` enum('0','1') DEFAULT NULL,
  `senin_tiga` enum('0','1') DEFAULT NULL,
  `senin_lima` enum('0','1') DEFAULT NULL,
  `senin_tujuh_mlm` enum('0','1') DEFAULT NULL,
  `selasa_tujuh` enum('0','1') DEFAULT NULL,
  `selasa_sembilan` enum('0','1') DEFAULT NULL,
  `selasa_sebelas` enum('0','1') DEFAULT NULL,
  `selasa_satu` enum('0','1') DEFAULT NULL,
  `selasa_tiga` enum('0','1') DEFAULT NULL,
  `selasa_lima` enum('0','1') DEFAULT NULL,
  `selasa_tujuh_mlm` enum('0','1') DEFAULT NULL,
  `rabu_tujuh` enum('0','1') DEFAULT NULL,
  `rabu_sembilan` enum('0','1') DEFAULT NULL,
  `rabu_sebelas` enum('0','1') DEFAULT NULL,
  `rabu_satu` enum('0','1') DEFAULT NULL,
  `rabu_tiga` enum('0','1') DEFAULT NULL,
  `rabu_lima` enum('0','1') DEFAULT NULL,
  `rabu_tujuh_mlm` enum('0','1') DEFAULT NULL,
  `kamis_tujuh` enum('0','1') DEFAULT NULL,
  `kamis_sembilan` enum('0','1') DEFAULT NULL,
  `kamis_sebelas` enum('0','1') DEFAULT NULL,
  `kamis_satu` enum('0','1') DEFAULT NULL,
  `kamis_tiga` enum('0','1') DEFAULT NULL,
  `kamis_lima` enum('0','1') DEFAULT NULL,
  `kamis_tujuh_mlm` enum('0','1') DEFAULT NULL,
  `jumat_tujuh` enum('0','1') DEFAULT NULL,
  `jumat_sembilan` enum('0','1') DEFAULT NULL,
  `jumat_sebelas` enum('0','1') DEFAULT NULL,
  `jumat_satu` enum('0','1') DEFAULT NULL,
  `jumat_tiga` enum('0','1') DEFAULT NULL,
  `jumat_lima` enum('0','1') DEFAULT NULL,
  `jumat_tujuh_mlm` enum('0','1') DEFAULT NULL,
  `sabtu_tujuh` enum('0','1') DEFAULT NULL,
  `sabtu_sembilan` enum('0','1') DEFAULT NULL,
  `sabtu_sebelas` enum('0','1') DEFAULT NULL,
  `sabtu_satu` enum('0','1') DEFAULT NULL,
  `sabtu_tiga` enum('0','1') DEFAULT NULL,
  `sabtu_lima` enum('0','1') DEFAULT NULL,
  `sabtu_tujuh_mlm` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_kesanggupan`),
  KEY `id_dosen` (`id_dosen`),
  KEY `id_semester` (`id_semester`),
  CONSTRAINT `tb_kesanggupan_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `tb_semester` (`id_semester`),
  CONSTRAINT `tb_kesanggupan_ibfk_2` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kesanggupan` */

insert  into `tb_kesanggupan`(`id_kesanggupan`,`id_semester`,`id_dosen`,`senin_tujuh`,`senin_sembilan`,`senin_sebelas`,`senin_satu`,`senin_tiga`,`senin_lima`,`senin_tujuh_mlm`,`selasa_tujuh`,`selasa_sembilan`,`selasa_sebelas`,`selasa_satu`,`selasa_tiga`,`selasa_lima`,`selasa_tujuh_mlm`,`rabu_tujuh`,`rabu_sembilan`,`rabu_sebelas`,`rabu_satu`,`rabu_tiga`,`rabu_lima`,`rabu_tujuh_mlm`,`kamis_tujuh`,`kamis_sembilan`,`kamis_sebelas`,`kamis_satu`,`kamis_tiga`,`kamis_lima`,`kamis_tujuh_mlm`,`jumat_tujuh`,`jumat_sembilan`,`jumat_sebelas`,`jumat_satu`,`jumat_tiga`,`jumat_lima`,`jumat_tujuh_mlm`,`sabtu_tujuh`,`sabtu_sembilan`,`sabtu_sebelas`,`sabtu_satu`,`sabtu_tiga`,`sabtu_lima`,`sabtu_tujuh_mlm`) values (1,14,1,'1','1','0','0','1','1','0','1','1','1','0','0','1','1','0','0','0','1','1','0','0','1','0','1','1','0','0','0','1','1','1','0','0','0','1','1','1','0','0','1','1','0');

/*Table structure for table `tb_makul` */

DROP TABLE IF EXISTS `tb_makul`;

CREATE TABLE `tb_makul` (
  `id_makul` int(11) NOT NULL AUTO_INCREMENT,
  `semester` enum('Semester 1','Semester 2','Semester 3','Semester 4','Semester 5','Semester 6','Semester 7','Semester 8') DEFAULT NULL,
  `id_prodi` int(11) DEFAULT NULL,
  `kode_makul` varchar(10) DEFAULT NULL,
  `nama_makul` varchar(40) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `jenis_makul` enum('Teori','Praktikum','Teori/Praktikum') DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id_makul`),
  KEY `id_semester` (`semester`),
  KEY `id_prodi` (`id_prodi`),
  CONSTRAINT `tb_makul_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `tb_prodi` (`id_prodi`)
) ENGINE=InnoDB AUTO_INCREMENT=144 DEFAULT CHARSET=latin1;

/*Data for the table `tb_makul` */

insert  into `tb_makul`(`id_makul`,`semester`,`id_prodi`,`kode_makul`,`nama_makul`,`sks`,`jenis_makul`,`angkatan`,`status`) values (14,'Semester 1',27,'UTI 102','Pancasila dan Kewarganegaraan',3,'Teori','2017','1'),(15,'Semester 1',27,'UTI 103','Matematika',2,'Teori','2017','1'),(16,'Semester 1',27,'UTI 105','Pendidikan Jasmani dan Olahrag',2,'Praktikum','2017','1'),(17,'Semester 1',27,'UTI 107','Aplikasi Komputer',2,'Praktikum','2017','1'),(18,'Semester 1',27,'INF 111','Dasar-dasar Pemrograman',2,'Teori','2017','1'),(19,'Semester 1',27,'INF 111P','Praktikum Pemrograman I',1,'Praktikum','2017','1'),(20,'Semester 1',27,'INF 112','Logika Informatika',2,'Teori','2017','1'),(21,'Semester 1',27,'TIS 111','Pengantar Teknologi Informasi',2,'Teori','2017','1'),(22,'Semester 1',27,'TK 121','Organisasi dan Arsitektur Komp',4,'Teori','2017','1'),(47,'Semester 1',28,'UTI 101','Pendidikan Agama',3,'Teori/Praktikum','2017','1'),(48,'Semester 1',28,'UTI 102','Pendidikan Pancasila dan Kewarganegaraan',3,'Teori','2017','1'),(49,'Semester 1',28,'UTI 107','Aplikasi Komputer',2,'Praktikum','2017','1'),(50,'Semester 1',28,'UTI 110','Bahasa Inggris I',2,'Teori','2017','1'),(51,'Semester 1',28,'SIS 111','Dasar-dasar Akuntansi',4,'Teori','2017','1'),(52,'Semester 1',28,'TIS 111','Pengantar Teknologi Informasi',2,'Teori','2017','1'),(53,'Semester 1',28,'INF 111','Dasar-dasar Pemrograman',3,'Teori/Praktikum','2017','1'),(54,'Semester 1',28,'INF 112','Logika Informatika',2,'Teori','2017','1'),(76,'Semester 1',29,'UTI 101','Pendidikan Agama',3,'Teori/Praktikum','2017','1'),(77,'Semester 1',29,'UTI 105','Pendidikan Olahraga',2,'Praktikum','2017','1'),(78,'Semester 1',29,'UTI 106','Kecakapan Antar Personal',2,'Teori','2017','1'),(79,'Semester 1',29,'UTI 110','English I',2,'Teori','2017','1'),(80,'Semester 1',29,'TIS 111','Pengantar Teknologi Informasi',2,'Teori','2017','1'),(81,'Semester 1',29,'INF 111','Dasar-dasar Pemrograman',3,'Teori/Praktikum','2017','1'),(82,'Semester 1',29,'INF 112','Logika Informatika',2,'Teori','2017','1'),(83,'Semester 1',29,'TK 121','Organisasi dan Arsitektur Komputer',4,'Teori','2017','1'),(87,'Semester 1',27,'PTT 101','Pendidikan Kewarganegaraan',3,'Teori','2014','1'),(88,'Semester 1',27,'PTT 102','Bahasa Inggris I',2,'Teori','2014','1'),(89,'Semester 1',27,'TIS 111','Dasar-dasar Pemrograman',2,'Teori','2014','1'),(90,'Semester 1',27,'TIS 112','Praktikum Pemrograman I',1,'Praktikum','2014','1'),(91,'Semester 1',27,'TIS 113','Logika Informatika',2,'Teori','2014','1'),(92,'Semester 1',27,'TIS 114','Matematika Diskrit',2,'Teori','2014','1'),(93,'Semester 1',27,'TIS 115','Elektronika Dasar',2,'Teori','2014','1'),(94,'Semester 1',27,'TIS 115P','Praktikum Elektronika Dasar',1,'Praktikum','2014','1'),(95,'Semester 1',27,'SIS 112','Aplikasi Komputer 1',2,'Praktikum','2014','1'),(96,'Semester 1',27,'SIS 113','Pengantar Teknologi Informasi',2,'Teori','2014','1'),(97,'Semester 1',35,'PTT 101','Pendidikan Agama',3,'Teori','2014','1'),(98,'Semester 1',35,'PTT 110','Bahasa Inggris',2,'Teori','2014','1'),(99,'Semester 1',35,'KAD 111','Dasar-dasar Akuntansi',2,'Teori','2014','1'),(100,'Semester 1',35,'KAD 112','Pengantar Ekonomi',2,'Teori','2014','1'),(101,'Semester 1',35,'KAD 113','Praktek Akuntansi I',2,'Praktikum','2014','1'),(102,'Semester 1',35,'MID 111','Pengantar Teknologi Informasi',2,'Teori','2014','1'),(103,'Semester 1',35,'MID 112','Aplikasi Komputer I',2,'Praktikum','2014','1'),(104,'Semester 1',35,'TKD 112','Algoritma dan Pemrograman',2,'Teori','2014','1'),(105,'Semester 1',35,'TKD 232','Sistem Operasi',2,'Teori','2014','1'),(106,'Semester 1',34,'PTT 101','Pendidikan Agama',3,'Teori','2014','1'),(107,'Semester 1',34,'PTT 110','Bahasa Inggris I',2,'Teori','2014','1'),(108,'Semester 1',34,'MID 111','Pengantar Teknologi Informasi',2,'Teori','2014','1'),(109,'Semester 1',34,'MID 112','Aplikasi Komputer',2,'Praktikum','2014','1'),(110,'Semester 1',34,'MID 113','Pengantar Manajemen',2,'Teori','2014','1'),(111,'Semester 1',34,'KAD 111','Dasar-dasar Akuntansi',2,'Teori','2014','1'),(112,'Semester 1',34,'KAD 113','Praktek Akuntansi',1,'Praktikum','2014','1'),(113,'Semester 1',34,'TKD 114','Kalkulus',2,'Teori','2014','1'),(114,'Semester 1',34,'TKD 112','Algoritma dan Pemrograman',2,'Teori','2014','1'),(115,'Semester 1',34,'TKD 113','Pemrograman I',1,'Teori','2014','1'),(116,'Semester 1',33,'PTT 101','Pendidikan Agama',3,'Teori','2014','1'),(117,'Semester 1',33,'PTT 110','Bahasa Inggris',2,'Teori','2014','1'),(118,'Semester 1',33,'TKD 111','Fisika Dasar',2,'Teori','2014','1'),(119,'Semester 1',33,'TKD 112','Dasar-dasar Pemrograman',2,'Teori','2014','1'),(120,'Semester 1',33,'TKD 113','Pemrograman I',1,'Teori','2014','1'),(121,'Semester 1',33,'TKD 114','Kalkulus',2,'Teori','2014','1'),(122,'Semester 1',33,'TKD 115','Elektronika Dasar',2,'Teori','2014','1'),(123,'Semester 1',33,'MID 111','Pengantar Teknologi Informasi',2,'Teori','2014','1'),(124,'Semester 1',33,'MID 112','Aplikasi Komputer',2,'Praktikum','2014','1'),(125,'Semester 1',37,'BRS 110','Structure I',2,'Teori','2014','1'),(126,'Semester 1',37,'BRS 111','Speaking I',3,'Teori','2014','1'),(127,'Semester 1',37,'BRS 112','Reading Comperhension I',2,'Teori','2014','1'),(128,'Semester 1',37,'BRS 113','Listening I',2,'Praktikum','2014','1'),(129,'Semester 1',37,'BRS 114','Writing Composition I',2,'Teori','2014','1'),(130,'Semester 1',37,'SBA 115','Indonesian Culture and Society',3,'Teori','2014','1'),(131,'Semester 1',37,'SBA 116','Bahasa Indonesia',2,'Teori','2014','1'),(132,'Semester 1',37,'PTT 110','Religion Education',3,'Praktikum','2014','1'),(133,'Semester 1',38,'BRD 110','Structure I',2,'Teori','2014','1'),(134,'Semester 1',38,'BRD 111','Speaking I',2,'Teori','2014','1'),(135,'Semester 1',38,'BRD 112','Reading Comperhention I',2,'Teori','2014','1'),(136,'Semester 1',38,'BRD 113','Listening',2,'Praktikum','2014','1'),(137,'Semester 1',38,'BRD 114','Writing Composition',2,'Teori','2014','1'),(138,'Semester 1',38,'SBA 115','Indonesian Culture and Society',2,'Teori','2014','1'),(139,'Semester 1',38,'SBA 116','Computer Aplication I',3,'Praktikum','2014','1'),(140,'Semester 1',38,'SBA 117','Bahasa Indonesia I',2,'Teori','2014','1'),(141,'Semester 1',38,'PTT 110','Religion Education',3,'Praktikum','2014','1'),(142,'Semester 1',27,'TIS 001','PBO',4,'Praktikum','2014','1'),(143,'Semester 1',30,'TIS001','PBO',4,'Praktikum','2017',NULL);

/*Table structure for table `tb_prodi` */

DROP TABLE IF EXISTS `tb_prodi`;

CREATE TABLE `tb_prodi` (
  `id_prodi` int(11) NOT NULL AUTO_INCREMENT,
  `kode_prodiDIKTI` varchar(20) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `nama_prodi_Eng` varchar(50) NOT NULL,
  `id_fakultas` int(11) NOT NULL,
  `jenjang` enum('S3','S2','S1','D3') NOT NULL,
  `keterangan` text,
  `aktif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya',
  PRIMARY KEY (`id_prodi`),
  KEY `prodifak` (`id_fakultas`),
  CONSTRAINT `tb_prodi_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `tb_fakultas` (`id_fakultas`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `tb_prodi` */

insert  into `tb_prodi`(`id_prodi`,`kode_prodiDIKTI`,`nama_prodi`,`nama_prodi_Eng`,`id_fakultas`,`jenjang`,`keterangan`,`aktif`) values (27,'','Informatika','Informatic',1,'S1',NULL,'Ya'),(28,'','Sistem Informasi','Information System',1,'S1',NULL,'Ya'),(29,'','Teknologi Informasi','Information Technology',1,'S1',NULL,'Ya'),(30,'','Teknik Komputer','Computer Engineering',1,'S1',NULL,'Ya'),(31,'','Teknik Elektro','Electrical Engineering',1,'S1',NULL,'Ya'),(32,'','Teknik Sipil','Civil Engineering',1,'S1',NULL,'Ya'),(33,'','Teknik Komputer','Computer Engineering',1,'D3',NULL,'Ya'),(34,'','Sistem Informasi','Information System',1,'D3',NULL,'Ya'),(35,'','Sistem Informasi Akuntansi','Accounting Information System',1,'D3',NULL,'Ya'),(37,'','Sastra Inggris','English Literature',4,'S1',NULL,'Ya'),(38,'','Bahasa Inggris','English',4,'D3',NULL,'Ya'),(39,'','Bahasa Jepang','Japanese',4,'D3',NULL,'Ya');

/*Table structure for table `tb_ruangan` */

DROP TABLE IF EXISTS `tb_ruangan`;

CREATE TABLE `tb_ruangan` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `id_gedung` int(11) NOT NULL,
  `nama_ruang` varchar(20) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `jenis` enum('Kelas','Lab','BAAK','Rapat','Auditorium','Presentasi','Ruang Dosen','Ruang Pimpinan','Lainnya') DEFAULT 'Kelas',
  `keterangan` text,
  PRIMARY KEY (`id_ruang`),
  KEY `ruanggedung` (`id_gedung`),
  CONSTRAINT `tb_ruangan_ibfk_2` FOREIGN KEY (`id_gedung`) REFERENCES `tb_gedung` (`id_gedung`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `tb_ruangan` */

insert  into `tb_ruangan`(`id_ruang`,`id_gedung`,`nama_ruang`,`kapasitas`,`jenis`,`keterangan`) values (8,13,'R201A',50,'Kelas',NULL),(9,13,'R202A',50,'Kelas',NULL),(10,13,'R203A',50,'Kelas',NULL),(11,13,'R204A',50,'Kelas',NULL),(12,13,'R301A',50,'Kelas',NULL),(13,13,'R302A',50,'Kelas',NULL),(14,13,'R303A',50,'Kelas',NULL),(15,13,'R304A',50,'Kelas',NULL),(16,13,'R401A',70,'Kelas',NULL),(17,13,'R402A',70,'Kelas',NULL),(18,13,'Lab1A',40,'Lab',NULL),(19,13,'Lab2A',40,'Lab',NULL),(20,10,'R201B',50,'Kelas',NULL),(21,10,'R202B',50,'Kelas',NULL),(22,10,'R203B',50,'Kelas',NULL),(23,10,'R204B',50,'Kelas',NULL),(24,10,'R301B',50,'Kelas',NULL),(25,10,'R302B',50,'Kelas',NULL),(26,10,'R303B',50,'Kelas',NULL),(27,10,'R304B',50,'Kelas',NULL),(28,15,'Lab1GSG',40,'Lab',NULL),(29,15,'Lab2GSG',40,'Lab',NULL),(30,15,'Lab3GSG',40,'Lab',NULL),(31,15,'Lab4GSG',40,'Lab',NULL),(32,16,'R201ICT',30,'Kelas',NULL),(33,16,'Lab1ICT',40,'Lab',NULL),(34,16,'R301ICT',40,'Kelas',NULL),(35,16,'Lab2ICT',40,'Lab',NULL),(36,16,'R202ICT',30,'Lab',NULL),(37,16,'R202ICT',30,'Kelas',NULL),(38,16,'R203ICT',30,'Kelas',NULL),(39,17,'PU1',30,'Kelas',NULL),(40,17,'PU2',40,'Kelas',NULL);

/*Table structure for table `tb_rule` */

DROP TABLE IF EXISTS `tb_rule`;

CREATE TABLE `tb_rule` (
  `id_rule` int(11) NOT NULL AUTO_INCREMENT,
  `id_setting` int(11) DEFAULT NULL,
  `id_semester` int(11) DEFAULT NULL,
  `jml_ajar_hr` int(11) DEFAULT NULL,
  `jml_makul_hr` int(11) DEFAULT NULL,
  `jml_kelas_hr` int(11) DEFAULT NULL,
  `jml_ajar_mg` int(11) DEFAULT NULL,
  `mk_sama` enum('Y','T') DEFAULT NULL,
  PRIMARY KEY (`id_rule`),
  KEY `id_setting` (`id_setting`),
  KEY `id_semester` (`id_semester`),
  CONSTRAINT `tb_rule_ibfk_1` FOREIGN KEY (`id_setting`) REFERENCES `tb_setting` (`id_setting`),
  CONSTRAINT `tb_rule_ibfk_2` FOREIGN KEY (`id_semester`) REFERENCES `tb_semester` (`id_semester`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_rule` */

/*Table structure for table `tb_semester` */

DROP TABLE IF EXISTS `tb_semester`;

CREATE TABLE `tb_semester` (
  `id_semester` int(11) NOT NULL AUTO_INCREMENT,
  `nama_semester` enum('Ganjil','SP Ganjil','Genap','SP Genap') NOT NULL DEFAULT 'Ganjil',
  `tahun_ajaran` varchar(9) NOT NULL,
  `waktu_kuliah` enum('Reguler','Extensi','Sabtu-Minggu') NOT NULL DEFAULT 'Reguler',
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_akhirbayar` date NOT NULL,
  `aktif` enum('Aktif','Tidak','Proses') NOT NULL DEFAULT 'Tidak',
  `lock` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_semester`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tb_semester` */

insert  into `tb_semester`(`id_semester`,`nama_semester`,`tahun_ajaran`,`waktu_kuliah`,`tgl_mulai`,`tgl_selesai`,`tgl_akhirbayar`,`aktif`,`lock`) values (14,'Ganjil','2017/2018','Reguler','2017-09-25','2018-02-10','2017-09-16','Aktif',1),(15,'Genap','2017/2018','Reguler','2018-02-26','2018-07-28','2018-02-12','Tidak',1),(16,'SP Genap','2017/2018','Reguler','2018-08-06','2018-09-29','2018-08-04','Tidak',1),(17,'Ganjil','2018/2019','Reguler','2018-10-01','2019-02-04','2018-09-24','Tidak',1);

/*Table structure for table `tb_setting` */

DROP TABLE IF EXISTS `tb_setting`;

CREATE TABLE `tb_setting` (
  `id_setting` int(11) NOT NULL AUTO_INCREMENT,
  `id_periode` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_setting` */

/*Table structure for table `tb_users` */

DROP TABLE IF EXISTS `tb_users`;

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_dosen` int(11) DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `level` enum('dosen','staff','kaprodi') CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `UsernameU` (`username`),
  KEY `id_dosen` (`id_dosen`),
  CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

/*Data for the table `tb_users` */

insert  into `tb_users`(`id_user`,`id_dosen`,`username`,`level`,`password`,`email`,`no_telp`) values (76,1,'agusmulyanto','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','agus.mulyanto@teknokrat.ac.id','085105555534'),(77,NULL,'admin','staff','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=',NULL,NULL),(78,2,'adedwi','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','angga@gmail.com','085840525195'),(79,4,'jupriyadi','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','jupriyadi@teknokrat.ac.id','081234567890'),(80,11,'imamahmad','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','imam.ahmad@teknokrat.ac.id','089876543210'),(82,16,'purwono','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','purwono@teknokrat.ac.id','081231234567'),(83,NULL,'kaprodiif','kaprodi','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=',NULL,NULL);

/*Table structure for table `tb_waktu` */

DROP TABLE IF EXISTS `tb_waktu`;

CREATE TABLE `tb_waktu` (
  `id_waktu` int(11) NOT NULL AUTO_INCREMENT,
  `id_hari` int(11) DEFAULT NULL,
  `id_jam` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_waktu`),
  KEY `id_hari` (`id_hari`),
  KEY `id_jam` (`id_jam`),
  CONSTRAINT `tb_waktu_ibfk_1` FOREIGN KEY (`id_hari`) REFERENCES `tb_hari` (`id_hari`),
  CONSTRAINT `tb_waktu_ibfk_2` FOREIGN KEY (`id_jam`) REFERENCES `tb_jam` (`id_jam`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `tb_waktu` */

insert  into `tb_waktu`(`id_waktu`,`id_hari`,`id_jam`) values (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,1,5),(6,1,6),(7,1,7),(8,2,1),(9,2,2),(10,2,3),(11,2,4),(12,2,5),(13,2,6),(14,2,7),(15,3,1),(16,3,2),(17,3,3),(18,3,4),(19,3,5),(20,3,6),(21,4,7),(22,4,1),(23,4,2),(24,4,3),(25,4,4),(26,4,5),(27,4,6),(28,4,7),(29,5,1),(30,5,2),(31,5,3),(32,5,4),(33,5,5),(34,5,6),(35,5,7),(36,6,1),(37,6,2),(38,5,3),(39,6,4),(40,6,5),(41,6,6),(42,6,7);

/*Table structure for table `v_jadwalsemester` */

DROP TABLE IF EXISTS `v_jadwalsemester`;

/*!50001 DROP VIEW IF EXISTS `v_jadwalsemester` */;
/*!50001 DROP TABLE IF EXISTS `v_jadwalsemester` */;

/*!50001 CREATE TABLE  `v_jadwalsemester`(
 `nama_semester` enum('Ganjil','SP Ganjil','Genap','SP Genap') ,
 `tahun_ajaran` varchar(9) ,
 `nama_makul` varchar(40) ,
 `sks` int(11) ,
 `jenis_makul` enum('Teori','Praktikum','Teori/Praktikum') ,
 `id_waktu` int(11) ,
 `nama_hari` varchar(10) ,
 `nama_jam` varchar(8) ,
 `id_ruang` int(11) ,
 `nama_ruang` varchar(20) ,
 `jenis` enum('Kelas','Lab','BAAK','Rapat','Auditorium','Presentasi','Ruang Dosen','Ruang Pimpinan','Lainnya') ,
 `id_dosen` int(11) ,
 `gelar_depan` varchar(4) ,
 `nama_dosen` varchar(50) ,
 `gelar_belakang` varchar(20) ,
 `id_kelas` int(11) ,
 `nama_kelas` varchar(10) 
)*/;

/*Table structure for table `v_makul_ganjil` */

DROP TABLE IF EXISTS `v_makul_ganjil`;

/*!50001 DROP VIEW IF EXISTS `v_makul_ganjil` */;
/*!50001 DROP TABLE IF EXISTS `v_makul_ganjil` */;

/*!50001 CREATE TABLE  `v_makul_ganjil`(
 `id_makul` int(11) ,
 `semester` enum('Semester 1','Semester 2','Semester 3','Semester 4','Semester 5','Semester 6','Semester 7','Semester 8') ,
 `id_prodi` int(11) ,
 `kode_makul` varchar(10) ,
 `nama_makul` varchar(40) ,
 `sks` int(11) ,
 `jenis_makul` enum('Teori','Praktikum','Teori/Praktikum') ,
 `status` enum('0','1') 
)*/;

/*Table structure for table `v_makul_genap` */

DROP TABLE IF EXISTS `v_makul_genap`;

/*!50001 DROP VIEW IF EXISTS `v_makul_genap` */;
/*!50001 DROP TABLE IF EXISTS `v_makul_genap` */;

/*!50001 CREATE TABLE  `v_makul_genap`(
 `id_makul` int(11) ,
 `semester` enum('Semester 1','Semester 2','Semester 3','Semester 4','Semester 5','Semester 6','Semester 7','Semester 8') ,
 `id_prodi` int(11) ,
 `kode_makul` varchar(10) ,
 `nama_makul` varchar(40) ,
 `sks` int(11) ,
 `jenis_makul` enum('Teori','Praktikum','Teori/Praktikum') ,
 `status` enum('0','1') 
)*/;

/*Table structure for table `v_waktu` */

DROP TABLE IF EXISTS `v_waktu`;

/*!50001 DROP VIEW IF EXISTS `v_waktu` */;
/*!50001 DROP TABLE IF EXISTS `v_waktu` */;

/*!50001 CREATE TABLE  `v_waktu`(
 `nama_hari` varchar(10) ,
 `nama_jam` varchar(8) 
)*/;

/*View structure for view v_jadwalsemester */

/*!50001 DROP TABLE IF EXISTS `v_jadwalsemester` */;
/*!50001 DROP VIEW IF EXISTS `v_jadwalsemester` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_jadwalsemester` AS select `tb_semester`.`nama_semester` AS `nama_semester`,`tb_semester`.`tahun_ajaran` AS `tahun_ajaran`,`tb_makul`.`nama_makul` AS `nama_makul`,`tb_makul`.`sks` AS `sks`,`tb_makul`.`jenis_makul` AS `jenis_makul`,`tb_jadwalsemester`.`id_waktu` AS `id_waktu`,`tb_hari`.`nama_hari` AS `nama_hari`,`tb_jam`.`nama_jam` AS `nama_jam`,`tb_jadwalsemester`.`id_ruang` AS `id_ruang`,`tb_ruangan`.`nama_ruang` AS `nama_ruang`,`tb_ruangan`.`jenis` AS `jenis`,`tb_jadwal`.`id_dosen` AS `id_dosen`,`tb_dosen`.`gelar_depan` AS `gelar_depan`,`tb_dosen`.`nama_dosen` AS `nama_dosen`,`tb_dosen`.`gelar_belakang` AS `gelar_belakang`,`tb_jadwal`.`id_kelas` AS `id_kelas`,`tb_kelas`.`nama_kelas` AS `nama_kelas` from (((((((((`tb_jadwal` left join `tb_dosen` on((`tb_jadwal`.`id_dosen` = `tb_dosen`.`id_dosen`))) join `tb_jadwalsemester` on((`tb_jadwalsemester`.`id_jadwal` = `tb_jadwal`.`id_jadwal`))) join `tb_kelas` on((`tb_jadwal`.`id_kelas` = `tb_kelas`.`id_kelas`))) join `tb_makul` on((`tb_jadwal`.`id_makul` = `tb_makul`.`id_makul`))) join `tb_ruangan` on((`tb_jadwalsemester`.`id_ruang` = `tb_ruangan`.`id_ruang`))) join `tb_semester` on((`tb_jadwal`.`id_semester` = `tb_semester`.`id_semester`))) join `tb_waktu` on((`tb_jadwalsemester`.`id_waktu` = `tb_waktu`.`id_waktu`))) join `tb_hari` on((`tb_waktu`.`id_hari` = `tb_hari`.`id_hari`))) join `tb_jam` on((`tb_waktu`.`id_jam` = `tb_jam`.`id_jam`))) */;

/*View structure for view v_makul_ganjil */

/*!50001 DROP TABLE IF EXISTS `v_makul_ganjil` */;
/*!50001 DROP VIEW IF EXISTS `v_makul_ganjil` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_makul_ganjil` AS (select `tb_makul`.`id_makul` AS `id_makul`,`tb_makul`.`semester` AS `semester`,`tb_makul`.`id_prodi` AS `id_prodi`,`tb_makul`.`kode_makul` AS `kode_makul`,`tb_makul`.`nama_makul` AS `nama_makul`,`tb_makul`.`sks` AS `sks`,`tb_makul`.`jenis_makul` AS `jenis_makul`,`tb_makul`.`status` AS `status` from `tb_makul` where ((`tb_makul`.`semester` = 'Semester 1') or (`tb_makul`.`semester` = 'Semester 3') or (`tb_makul`.`semester` = 'Semester 5') or (`tb_makul`.`semester` = 'Semester 7'))) */;

/*View structure for view v_makul_genap */

/*!50001 DROP TABLE IF EXISTS `v_makul_genap` */;
/*!50001 DROP VIEW IF EXISTS `v_makul_genap` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_makul_genap` AS (select `tb_makul`.`id_makul` AS `id_makul`,`tb_makul`.`semester` AS `semester`,`tb_makul`.`id_prodi` AS `id_prodi`,`tb_makul`.`kode_makul` AS `kode_makul`,`tb_makul`.`nama_makul` AS `nama_makul`,`tb_makul`.`sks` AS `sks`,`tb_makul`.`jenis_makul` AS `jenis_makul`,`tb_makul`.`status` AS `status` from `tb_makul` where ((`tb_makul`.`semester` = 'Semester 3') or (`tb_makul`.`semester` = 'Semester 4') or (`tb_makul`.`semester` = 'Semester 6') or (`tb_makul`.`semester` = 'Semester 8'))) */;

/*View structure for view v_waktu */

/*!50001 DROP TABLE IF EXISTS `v_waktu` */;
/*!50001 DROP VIEW IF EXISTS `v_waktu` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_waktu` AS select `tb_hari`.`nama_hari` AS `nama_hari`,`tb_jam`.`nama_jam` AS `nama_jam` from ((`tb_waktu` join `tb_hari` on((`tb_waktu`.`id_hari` = `tb_hari`.`id_hari`))) join `tb_jam` on((`tb_waktu`.`id_jam` = `tb_jam`.`id_jam`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

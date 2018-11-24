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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `tb_dosen` */

insert  into `tb_dosen`(`id_dosen`,`id_prodi`,`id_user`,`nidn`,`nik`,`nama_dosen`,`gelar_depan`,`gelar_belakang`,`jabatan_akademik`,`golongan_kepangkatan`,`agama`,`tempat_lahir`,`tgl_lahir`,`jk`,`ikatan_kerja`,`status_aktif`,`pendidikan_terakhir`,`bidang_ilmu`) values (1,27,1,'0217128303','022100101','Agus Mulyanto',NULL,'MT','Asisten Ahli','III B',1,'Sukadadi','1983-12-17','L','Dosen Dengan Perjanjian Kerja','Aktif','S2','Ilmu Komputer'),(2,27,66,'0229818210','021983137','Angga',NULL,'M.M','Tenaga Pengajar','III A',1,'Gedung MEneng','1983-12-17','L','Dosen Tetap','Aktif','S2','Manajemen'),(4,27,65,'0208273787','029182998','Jupriyadi',NULL,'MT','Asisten Ahli','III B',1,'Wonosobo','1983-08-07','L','Dosen Tetap','Aktif','S2','Informatika'),(11,27,64,'0218237613','027182728','Imam Ahmad',NULL,'M.Kom.','Asisten Ahli','III B',1,'Aceh','1987-06-16','L','Dosen Tetap','Aktif','S2','Ilmu Komputer'),(14,27,8,'0182378237','028918321','Agus Mulyanto','Dr.','M.T','Lektor','III B',1,'sdsd','2017-10-12','L','Dosen Tetap','Aktif','S3','Ilmu Komputer'),(15,27,9,'0201928291','021235832','Angga',NULL,'MM','Tenaga Pengajar','III A',1,'Lampung','2017-10-11','L','Dosen Tetap','Aktif','S2','Ilmu Ekonomi'),(16,27,75,'1921928212','028195032','Purwono Prasetyawan',NULL,'MT','Asisten Ahli','III B',1,'Lamsel','1989-07-14','L','Dosen Tetap','Aktif','S2','Teknik Elektro');

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
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jadwal` */

insert  into `tb_jadwal`(`id_jadwal`,`id_semester`,`id_makul`,`id_kelas`,`id_dosen`) values (9,14,14,1,1),(10,14,14,2,2),(11,14,14,3,1),(12,14,14,4,11),(13,14,14,5,2),(14,14,15,1,11),(16,14,15,2,2),(17,14,15,3,11),(18,14,15,4,15),(19,14,15,5,1),(20,14,16,1,2),(21,14,16,2,14),(22,14,16,3,15),(23,14,16,4,16),(24,14,16,5,15),(25,14,17,1,1),(26,14,17,2,4),(27,14,17,3,4),(28,14,17,4,4),(29,14,17,5,14),(30,14,18,1,2),(31,14,18,2,2),(32,14,18,3,14),(33,14,18,4,4),(35,14,19,1,14),(36,14,19,2,14),(37,14,19,3,14),(38,14,19,4,2),(39,14,19,5,2),(40,14,20,1,1),(41,14,20,2,16),(42,14,20,3,1),(43,14,20,4,2),(44,14,20,5,2),(45,14,21,1,1),(46,14,21,2,11),(47,14,21,3,11),(48,14,21,4,11),(49,14,21,5,11),(50,14,22,1,2),(51,14,22,2,16),(52,14,22,3,16),(53,14,22,4,16),(55,14,22,5,15),(56,14,23,1,15),(57,14,23,2,15),(58,14,23,3,16),(59,14,23,4,16),(60,14,23,5,11),(61,14,47,6,2),(62,14,47,7,2),(64,14,47,8,15),(65,14,47,9,16),(66,14,47,10,16),(67,14,48,6,2),(68,14,48,7,2),(69,14,48,8,2),(70,14,48,9,2),(71,14,48,10,2),(72,14,49,6,1),(73,14,49,7,2),(74,14,49,8,11),(75,14,49,9,11),(76,14,49,10,11),(77,14,50,6,16),(78,14,50,7,16),(79,14,50,8,16),(80,14,50,9,16),(81,14,50,10,16),(82,14,51,6,15),(83,14,51,7,15),(84,14,51,8,15),(85,14,51,9,15),(86,14,51,10,15),(87,14,52,6,2),(88,14,52,7,2),(89,14,52,8,2),(90,14,52,9,2),(91,14,52,10,2),(92,14,53,6,16),(93,14,53,7,16),(94,14,53,8,16),(95,14,53,9,16),(96,14,53,10,16),(97,14,54,6,4),(98,14,54,7,4),(99,14,54,8,4),(100,14,54,9,4),(101,14,54,10,4),(102,14,76,11,2),(103,14,76,12,1),(104,14,76,13,2),(105,14,76,14,2),(106,14,76,15,2),(107,14,77,11,4),(108,14,77,12,4),(109,14,77,13,4),(110,14,77,14,4),(111,14,77,15,4),(112,14,78,11,4),(113,14,78,12,4),(114,14,78,13,4),(115,14,78,14,4),(116,14,78,15,4),(117,14,79,11,11),(118,14,79,12,11),(119,14,79,13,11),(120,14,79,14,16),(121,14,79,15,16),(122,14,80,11,4),(123,14,80,12,4),(124,14,80,13,4),(125,14,80,14,4),(126,14,80,15,4),(127,14,81,11,1),(128,14,81,12,1),(129,14,81,13,1),(130,14,81,14,1),(131,14,81,15,1),(132,14,82,11,11),(133,14,82,12,11),(134,14,82,13,11),(135,14,82,14,11),(136,14,82,15,11),(137,14,83,11,16),(138,14,83,12,16),(139,14,83,13,16),(140,14,83,14,14),(141,14,83,15,14);

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
) ENGINE=InnoDB AUTO_INCREMENT=514 DEFAULT CHARSET=latin1;

/*Data for the table `tb_jadwalsemester` */

insert  into `tb_jadwalsemester`(`id_jadwalsmt`,`id_ruang`,`id_jadwal`,`id_waktu`,`keterangan`) values (385,20,9,29,NULL),(386,17,10,27,NULL),(387,37,11,25,NULL),(388,25,12,30,NULL),(389,9,13,24,NULL),(390,38,14,9,NULL),(391,14,16,21,NULL),(392,27,17,34,NULL),(393,15,18,22,NULL),(394,8,19,12,NULL),(395,33,20,4,NULL),(396,18,21,26,NULL),(397,35,22,12,NULL),(398,18,23,36,NULL),(399,35,24,36,NULL),(400,31,25,21,NULL),(401,33,26,11,NULL),(402,18,27,27,NULL),(403,36,28,5,NULL),(404,33,29,32,NULL),(405,17,30,21,NULL),(406,14,31,6,NULL),(407,12,32,2,NULL),(408,13,33,27,NULL),(409,35,35,40,NULL),(410,36,36,1,NULL),(411,33,37,42,NULL),(412,28,38,27,NULL),(413,30,39,16,NULL),(414,38,40,6,NULL),(415,39,41,21,NULL),(416,10,42,42,NULL),(417,23,43,13,NULL),(418,13,44,16,NULL),(419,24,45,37,NULL),(420,24,46,18,NULL),(421,9,47,26,NULL),(422,8,48,32,NULL),(423,20,49,11,NULL),(424,22,50,12,NULL),(425,12,51,40,NULL),(426,32,52,33,NULL),(427,10,53,25,NULL),(428,34,55,13,NULL),(429,33,56,12,NULL),(430,19,57,21,NULL),(431,31,58,36,NULL),(432,35,59,42,NULL),(433,31,60,31,NULL),(434,35,61,29,NULL),(435,36,62,37,NULL),(436,19,64,37,NULL),(437,30,65,14,NULL),(438,19,66,30,NULL),(439,21,67,6,NULL),(440,37,68,11,NULL),(441,16,69,26,NULL),(442,17,70,37,NULL),(443,39,71,25,NULL),(444,18,72,1,NULL),(445,29,73,11,NULL),(446,29,74,13,NULL),(447,29,75,31,NULL),(448,36,76,40,NULL),(449,37,77,33,NULL),(450,37,78,7,NULL),(451,13,79,11,NULL),(452,10,80,15,NULL),(453,27,81,41,NULL),(454,13,82,41,NULL),(455,22,83,15,NULL),(456,20,84,32,NULL),(457,16,85,39,NULL),(458,37,86,3,NULL),(459,25,87,7,NULL),(460,34,88,41,NULL),(461,23,89,36,NULL),(462,10,90,18,NULL),(463,26,91,4,NULL),(464,28,92,26,NULL),(465,29,93,32,NULL),(466,31,94,34,NULL),(467,31,95,18,NULL),(468,33,96,29,NULL),(469,34,97,20,NULL),(470,10,98,34,NULL),(471,8,99,15,NULL),(472,11,100,17,NULL),(473,12,101,39,NULL),(474,19,102,12,NULL),(475,29,103,33,NULL),(476,30,104,39,NULL),(477,30,105,36,NULL),(478,28,106,8,NULL),(479,29,107,36,NULL),(480,18,108,20,NULL),(481,19,109,32,NULL),(482,29,110,22,NULL),(483,30,111,19,NULL),(484,11,112,9,NULL),(485,9,113,31,NULL),(486,26,114,12,NULL),(487,24,115,2,NULL),(488,13,116,8,NULL),(489,9,117,37,NULL),(490,25,118,38,NULL),(491,37,119,12,NULL),(492,34,120,10,NULL),(493,17,121,13,NULL),(494,25,122,31,NULL),(495,20,123,34,NULL),(496,38,124,4,NULL),(497,15,125,20,NULL),(498,38,126,7,NULL),(499,28,127,17,NULL),(500,31,128,41,NULL),(501,36,129,34,NULL),(502,29,130,38,NULL),(503,31,131,19,NULL),(504,8,132,8,NULL),(505,22,133,36,NULL),(506,12,134,20,NULL),(507,20,135,36,NULL),(508,21,136,23,NULL),(509,34,137,29,NULL),(510,40,138,31,NULL),(511,23,139,15,NULL),(512,20,140,22,NULL),(513,17,141,24,NULL);

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
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelas` */

insert  into `tb_kelas`(`id_kelas`,`nama_kelas`) values (1,'IF 17 A'),(2,'IF 17 B'),(3,'IF 17 C'),(4,'IF 17 D'),(5,'IF 17 E'),(6,'SI 17 A'),(7,'SI 17 B'),(8,'SI 17 C'),(9,'SI 17 D'),(10,'SI 17 E'),(11,'TI 17 A'),(12,'TI 17 B'),(13,'TI 17 C'),(14,'TI 17 D'),(15,'TI 17 E'),(16,'IF 14 A'),(17,'IF 14 B'),(18,'IF 14 B'),(19,'IF 14 C'),(20,'IF 14 D'),(21,'IF 14 E');

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
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

/*Data for the table `tb_makul` */

insert  into `tb_makul`(`id_makul`,`semester`,`id_prodi`,`kode_makul`,`nama_makul`,`sks`,`jenis_makul`,`angkatan`,`status`) values (14,'Semester 1',27,'UTI 102','Pancasila dan Kewarganegaraan',3,'Teori','2017','1'),(15,'Semester 1',27,'UTI 103','Matematika',2,'Teori','2017','1'),(16,'Semester 1',27,'UTI 105','Pendidikan Jasmani dan Olahrag',2,'Praktikum','2017','1'),(17,'Semester 1',27,'UTI 107','Aplikasi Komputer',2,'Praktikum','2017','1'),(18,'Semester 1',27,'INF 111','Dasar-dasar Pemrograman',2,'Teori','2017','1'),(19,'Semester 1',27,'INF 111P','Praktikum Pemrograman I',1,'Praktikum','2017','1'),(20,'Semester 1',27,'INF 112','Logika Informatika',2,'Teori','2017','1'),(21,'Semester 1',27,'TIS 111','Pengantar Teknologi Informasi',2,'Teori','2017','1'),(22,'Semester 1',27,'TK 121','Organisasi dan Arsitektur Komp',4,'Teori','2017','1'),(23,'Semester 2',27,'UTI 101','Pendidikan Agama',3,'Teori/Praktikum','2017','0'),(24,'Semester 2',27,'UTI 106','Kecakapan Antar Personal',2,'Teori','2017','0'),(25,'Semester 2',27,'UTI 110','Bahasa Inggris I',2,'Teori','2017','0'),(26,'Semester 2',27,'INF 121','Algoritma Pemrograman',2,'Teori','2017','0'),(27,'Semester 2',27,'INF 121P','Praktikum Pemrograman II',1,'Praktikum','2017','0'),(28,'Semester 2',27,'INF 122','Struktur Data',3,'Teori/Praktikum','2017','0'),(29,'Semester 2',27,'INF 123','Matematika Diskrit',2,'Teori','2017','0'),(30,'Semester 2',27,'INF 124','Aljabar Geometri',2,'Teori','2017','0'),(31,'Semester 2',27,'SIS 225','Sistem Basis Data',3,'Teori/Praktikum','2017','0'),(32,'Semester 3',27,'UTI 111','Bahasa Inggris II',2,'Teori','2017','0'),(33,'Semester 3',27,'INF 211','Pemrograman Berorientasi Objek',3,'Teori/Praktikum','2017','0'),(34,'Semester 3',27,'INF 212','Analisis dan Strategi Algoritma',2,'Teori','2017','0'),(35,'Semester 3',27,'INF 213','Komunikasi Data',3,'Teori/Praktikum','2017','0'),(36,'Semester 3',27,'INF 214','Sistem Operasi',3,'Teori/Praktikum','2017','0'),(37,'Semester 3',27,'TIS 214','Interaksi Manusia Komputer',2,'Teori','2017','0'),(38,'Semester 3',27,'TK 212','Troubleshooting dan Administra',3,'Teori/Praktikum','2017','0'),(39,'Semester 3',27,'SIS 312','Manajemen Basis Data',2,'Teori','2017','0'),(40,'Semester 4',27,'INF 221','Pemrograman Basis Data',3,'Teori/Praktikum','2017','0'),(41,'Semester 4',27,'INF 222','Pemrograman Web',3,'Teori/Praktikum','2017','0'),(42,'Semester 4',27,'INF 223','Analisis dan Pemodelan Perangk',4,'Teori','2017','0'),(43,'Semester 4',27,'TIS 123','Desain Grafis',2,'Praktikum','2017','0'),(44,'Semester 4',27,'TIS 222','Jaringan Komputer',3,'Teori/Praktikum','2017','0'),(45,'Semester 4',27,'UTI 104','Statistika',4,'Teori','2017','0'),(46,'Semester 4',27,'UTI 108','Bahasa Indonesia',3,'Teori','2017','0'),(47,'Semester 1',28,'UTI 101','Pendidikan Agama',3,'Teori/Praktikum','2017','1'),(48,'Semester 1',28,'UTI 102','Pendidikan Pancasila dan Kewarganegaraan',3,'Teori','2017','1'),(49,'Semester 1',28,'UTI 107','Aplikasi Komputer',2,'Praktikum','2017','1'),(50,'Semester 1',28,'UTI 110','Bahasa Inggris I',2,'Teori','2017','1'),(51,'Semester 1',28,'SIS 111','Dasar-dasar Akuntansi',4,'Teori','2017','1'),(52,'Semester 1',28,'TIS 111','Pengantar Teknologi Informasi',2,'Teori','2017','1'),(53,'Semester 1',28,'INF 111','Dasar-dasar Pemrograman',3,'Teori/Praktikum','2017','1'),(54,'Semester 1',28,'INF 112','Logika Informatika',2,'Teori','2017','1'),(55,'Semester 2',28,'UTI 103','Matematika',2,'Teori','2017','0'),(56,'Semester 2',28,'UTI 105','Pendidikan Jasmani dan Olahraga',2,'Praktikum','2017','0'),(57,'Semester 2',28,'UTI 108','Bahasa Indonesia',3,'Teori','2017','0'),(58,'Semester 2',28,'UTI 106','Kecakapan Antar Personal',2,'Teori','2017','0'),(59,'Semester 2',28,'SIS 121','Manajemen Bisnis',4,'Teori','2017','0'),(60,'Semester 2',28,'SIS 122','Konsep Sistem Informasi',2,'Teori','2017','0'),(61,'Semester 2',28,'SIS 123','Aplikasi Komputer Akuntansi',2,'Praktikum','2017','0'),(62,'Semester 2',28,'TIS 123','Desain Grafis',2,'Praktikum','2017','0'),(63,'Semester 3',28,'UTI 104','Statistika',4,'Teori','2017','0'),(64,'Semester 3',28,'SIS 211','Sistem Informasi Manajemen',4,'Teori','2017','0'),(65,'Semester 3',28,'SIS 212','Sistem Informasi Akuntansi',2,'Teori','2017','0'),(66,'Semester 3',28,'INF 122','Struktur Data',3,'Teori/Praktikum','2017','0'),(67,'Semester 3',28,'INF 211','Pemrograman Berbasis Objek',3,'Teori/Praktikum','2017','0'),(68,'Semester 3',28,'TK 212','Troubleshooting dan Administrasi Sistem',3,'Teori/Praktikum','2017','0'),(69,'Semester 4',28,'SIS 221','Teknologi dan Infra-struktur E-Business',2,'Teori','2017','0'),(70,'Semester 4',28,'SIS 222','Analisis dan Perancangan Sistem Informas',4,'Teori','2017','0'),(71,'Semester 4',28,'SIS 223','Sistem Pendukung Keputusan',2,'Teori','2017','0'),(72,'Semester 4',28,'SIS 224','Sistem Basis Data',3,'Teori/Praktikum','2017','0'),(73,'Semester 4',28,'TIS 214','Interaksi Manusia dan Komputer',2,'Teori','2017','0'),(74,'Semester 4',28,'INF 218','Sistem Operasi',3,'Teori/Praktikum','2017','0'),(75,'Semester 4',28,'TIS 222','Jaringan Komputer',3,'Teori/Praktikum','2017','0'),(76,'Semester 1',29,'UTI 101','Pendidikan Agama',3,'Teori/Praktikum','2017','0'),(77,'Semester 1',29,'UTI 105','Pendidikan Olahraga',2,'Praktikum','2017','0'),(78,'Semester 1',29,'UTI 106','Kecakapan Antar Personal',2,'Teori','2017','0'),(79,'Semester 1',29,'UTI 110','English I',2,'Teori','2017','0'),(80,'Semester 1',29,'TIS 111','Pengantar Teknologi Informasi',2,'Teori','2017','0'),(81,'Semester 1',29,'INF 111','Dasar-dasar Pemrograman',3,'Teori/Praktikum','2017','0'),(82,'Semester 1',29,'INF 112','Logika Informatika',2,'Teori','2017','0'),(83,'Semester 1',29,'TK 121','Organisasi dan Arsitektur Komputer',4,'Teori','2017','0'),(84,'Semester 2',29,'UTI 102','Pancasila dan Kewarganegaraan',3,'Teori','2017','0'),(85,'Semester 2',29,'UTI 107','Aplikasi Komputer',2,'Praktikum','2017','0'),(86,'Semester 2',29,'UTI 111','English II',2,'Teori','2017','0'),(87,'Semester 1',27,'PTT 101','Pendidikan Kewarganegaraan',3,'Teori','2014','1'),(88,'Semester 1',27,'PTT 102','Bahasa Inggris I',2,'Teori','2014','1'),(89,'Semester 1',27,'TIS 111','Dasar-dasar Pemrograman',2,'Teori','2014','1'),(90,'Semester 1',27,'TIS 112','Praktikum Pemrograman I',1,'Praktikum','2014','1'),(91,'Semester 1',27,'TIS 113','Logika Informatika',2,'Teori','2014','1'),(92,'Semester 1',27,'TIS 114','Matematika Diskrit',2,'Teori','2014','1'),(93,'Semester 1',27,'TIS 115','Elektronika Dasar',2,'Teori','2014','1'),(94,'Semester 1',27,'TIS 115P','Praktikum Elektronika Dasar',1,'Praktikum','2014','1'),(95,'Semester 1',27,'SIS 112','Aplikasi Komputer 1',2,'Praktikum','2014','1'),(96,'Semester 1',27,'SIS 113','Pengantar Teknologi Informasi',2,'Teori','2014','1'),(97,'Semester 1',35,'PTT 101','Pendidikan Agama',3,'Teori','2014','1'),(98,'Semester 1',35,'PTT 110','Bahasa Inggris',2,'Teori','2014','1'),(99,'Semester 1',35,'KAD 111','Dasar-dasar Akuntansi',2,'Teori','2014','1'),(100,'Semester 1',35,'KAD 112','Pengantar Ekonomi',2,'Teori','2014','1'),(101,'Semester 1',35,'KAD 113','Praktek Akuntansi I',2,'Praktikum','2014','1'),(102,'Semester 1',35,'MID 111','Pengantar Teknologi Informasi',2,'Teori','2014','1'),(103,'Semester 1',35,'MID 112','Aplikasi Komputer I',2,'Praktikum','2014','1'),(104,'Semester 1',35,'TKD 112','Algoritma dan Pemrograman',2,'Teori','2014','1'),(105,'Semester 1',35,'TKD 232','Sistem Operasi',2,'Teori','2014','1'),(106,'Semester 1',34,'PTT 101','Pendidikan Agama',3,'Teori','2014','1'),(107,'Semester 1',34,'PTT 110','Bahasa Inggris I',2,'Teori','2014','1'),(108,'Semester 1',34,'MID 111','Pengantar Teknologi Informasi',2,'Teori','2014','1'),(109,'Semester 1',34,'MID 112','Aplikasi Komputer',2,'Praktikum','2014','1'),(110,'Semester 1',34,'MID 113','Pengantar Manajemen',2,'Teori','2014','1'),(111,'Semester 1',34,'KAD 111','Dasar-dasar Akuntansi',2,'Teori','2014','1'),(112,'Semester 1',34,'KAD 113','Praktek Akuntansi',1,'Praktikum','2014','1'),(113,'Semester 1',34,'TKD 114','Kalkulus',2,'Teori','2014','1'),(114,'Semester 1',34,'TKD 112','Algoritma dan Pemrograman',2,'Teori','2014','1'),(115,'Semester 1',34,'TKD 113','Pemrograman I',1,'Teori','2014','1'),(116,'Semester 1',33,'PTT 101','Pendidikan Agama',3,'Teori','2014','1'),(117,'Semester 1',33,'PTT 110','Bahasa Inggris',2,'Teori','2014','1'),(118,'Semester 1',33,'TKD 111','Fisika Dasar',2,'Teori','2014','1'),(119,'Semester 1',33,'TKD 112','Dasar-dasar Pemrograman',2,'Teori','2014','1'),(120,'Semester 1',33,'TKD 113','Pemrograman I',1,'Teori','2014','1'),(121,'Semester 1',33,'TKD 114','Kalkulus',2,'Teori','2014','1'),(122,'Semester 1',33,'TKD 115','Elektronika Dasar',2,'Teori','2014','1'),(123,'Semester 1',33,'MID 111','Pengantar Teknologi Informasi',2,'Teori','2014','1'),(124,'Semester 1',33,'MID 112','Aplikasi Komputer',2,'Praktikum','2014','1');

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `tb_prodi` */

insert  into `tb_prodi`(`id_prodi`,`kode_prodiDIKTI`,`nama_prodi`,`nama_prodi_Eng`,`id_fakultas`,`jenjang`,`keterangan`,`aktif`) values (27,'','Informatika','Informatic',1,'S1',NULL,'Ya'),(28,'','Sistem Informasi','Information System',1,'S1',NULL,'Ya'),(29,'','Teknologi Informasi','Information Technology',1,'S1',NULL,'Ya'),(30,'','Teknik Komputer','Computer Engineering',1,'S1',NULL,'Ya'),(31,'','Teknik Elektro','Electrical Engineering',1,'S1',NULL,'Ya'),(32,'','Teknik Sipil','Civil Engineering',1,'S1',NULL,'Ya'),(33,'','Teknik Komputer','Computer Engineering',1,'D3',NULL,'Ya'),(34,'','Sistem Informasi','Information System',1,'D3',NULL,'Ya'),(35,'','Sistem Informasi Akuntansi','Accounting Information System',1,'D3',NULL,'Ya');

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
  `level` enum('dosen','staff') CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `UsernameU` (`username`),
  KEY `id_dosen` (`id_dosen`),
  CONSTRAINT `tb_users_ibfk_1` FOREIGN KEY (`id_dosen`) REFERENCES `tb_dosen` (`id_dosen`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

/*Data for the table `tb_users` */

insert  into `tb_users`(`id_user`,`id_dosen`,`username`,`level`,`password`,`email`,`no_telp`) values (76,1,'agusmulyanto','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','agus.mulyanto@teknokrat.ac.id','085105555534'),(77,NULL,'admin','staff','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=',NULL,NULL),(78,2,'angga','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','angga@gmail.com','085840525195'),(79,4,'jupriyadi','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','jupriyadi@teknokrat.ac.id','081234567890'),(80,11,'imamahmad','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','imam.ahmad@teknokrat.ac.id','089876543210'),(82,16,'purwono','dosen','fbceddc26e0c6bfe5476b413af9d1b74bf96d1442a3715e4b76684dd633e50899ffcf870419a29158ca9a43812fa3be10d5f78af9d923e2d29b7824eb75053c05iTJ6bBlhNlwtzMmNcns0Qv9TankSmM7YByH2VJ9SsA=','purwono@teknokrat.ac.id','081231234567');

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
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

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

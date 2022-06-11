/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - ppdb-sarjo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `formulir` */

DROP TABLE IF EXISTS `formulir`;

CREATE TABLE `formulir` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki - laki','Perempuan') NOT NULL,
  `nisn` char(10) DEFAULT NULL,
  `nik` char(20) DEFAULT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama_siswa` enum('Islam','Kristen / Protestan','Katholik','Hindu','Budha','Khonghucu','Kepercayaan Kepada Tuhan YME','Lainnya') NOT NULL,
  `is_wna` tinyint(1) NOT NULL,
  `nama_negara` varchar(50) DEFAULT NULL,
  `kebutuhan_khusus` enum('Tidak','Netra (A)','Rungu (B)','Grahita Ringan (C)','Grahita Sedang (C1)','Daksa Ringan (D)','Daksa Sedang (D1)','Laras (E)','Wicara (F)','Tuna Ganda (G)','Hiper Aktif (H)','Cerdas Istimewa (I)','Bakat Istimewa (J)','Kesulitan Belajar (K)','Narkoba (N)','Indigo (O)','Down Sindrome (P)','Autis (Q)') DEFAULT NULL,
  `alamat_siswa` text NOT NULL,
  `kode_pos` char(5) DEFAULT NULL,
  `lintang` varchar(50) DEFAULT NULL,
  `bujur` varchar(50) DEFAULT NULL,
  `tempat_tinggal` enum('Bersama Orang Tua','Wali','Kos','Asrama','Panti Asuhan','Lainnya') DEFAULT NULL,
  `moda_transportasi` enum('Jalan Kaki','Kendaraan Priadi','Kendaraan Umum/Angkot/Pete-pete','Jemputan Sekolah','Kereta Api','Ojek','Andong/Bendi/Sado/Dokar/Delman/Beca','Perahu Penyebrangan/Rakit/Getek','Lainnya') DEFAULT NULL,
  `nomor_kks` varchar(8) DEFAULT NULL,
  `anak_keberapa` int(2) DEFAULT NULL,
  `nomor_kps` varchar(15) DEFAULT NULL,
  `layak_pip` enum('Ya','Tidak') DEFAULT NULL,
  `nomor_kip` varchar(6) DEFAULT NULL,
  `nama_kip` varchar(50) DEFAULT NULL,
  `terima_fisik_kip` enum('Ya','Tidak','-') DEFAULT NULL,
  `alasan_layak_pip` enum('-','Pemegang PKH/KPS/KIP','Penerima BSM 2014','Yatim Piatu/Panti Asuhan/Panti Sosial','Dampak Bencana Alam','Pernah Drop OUT','Siswa Miskin/Rentan Miskin','Daerah Konflik','Keluarga Terpidana','Kelainan Fisik') DEFAULT NULL,
  `nomor_telepon` varchar(15) DEFAULT NULL,
  `nomor_hp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nik_ayah` char(20) DEFAULT NULL,
  `tahun_lahir_ayah` year(4) DEFAULT NULL,
  `pendidikan_ayah` enum('Tidak Sekolah','Putus SD','SD Sederajat','SMP Sederajat','SMA Sederajat','D1','D2','D3','D4/S1','S2','S3') NOT NULL,
  `pekerjaan_ayah` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/POLRI','Karyawan Swasta','Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiunan','Lain-lain','Meninggal Dunia') NOT NULL,
  `penghasilan_ayah` enum('-','Kurang dari 500.000','500.000 - 999.999','1 juta - 1.999.999','2 juta - 4.999.999','5 juta - 20 juta','Lebih dari 20 juta') NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nik_ibu` char(20) NOT NULL,
  `tahun_lahir_ibu` year(4) NOT NULL,
  `pendidikan_ibu` enum('Tidak Sekolah','Putus SD','SD Sederajat','SMP Sederajat','SMA Sederajat','D1','D2','D3','D4/S1','S2','S3') NOT NULL,
  `pekerjaan_ibu` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/POLRI','Karyawan Swasta','Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiunan','Lain-lain','Meninggal Dunia') NOT NULL,
  `penghasilan_ibu` enum('-','Kurang dari 500.000','500.000 - 999.999','1 juta - 1.999.999','2 juta - 4.999.999','5 juta - 20 juta','Lebih dari 20 juta') NOT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `nik_wali` char(20) DEFAULT NULL,
  `tahun_lahir_wali` year(4) DEFAULT NULL,
  `pendidikan_wali` enum('Tidak Sekolah','Putus SD','SD Sederajat','SMP Sederajat','SMA Sederajat','D1','D2','D3','D4/S1','S2','S3') NOT NULL,
  `pekerjaan_wali` enum('Tidak Bekerja','Nelayan','Petani','Peternak','PNS/TNI/POLRI','Karyawan Swasta','Pedagang Kecil','Pedagang Besar','Wiraswasta','Wirausaha','Buruh','Pensiunan','Lain-lain','Meninggal Dunia') NOT NULL,
  `penghasilan_wali` enum('-','Kurang dari 500.000','500.000 - 999.999','1 juta - 1.999.999','2 juta - 4.999.999','5 juta - 20 juta','Lebih dari 20 juta') NOT NULL,
  `tinggi_badan` int(3) DEFAULT NULL,
  `berat_badan` int(3) DEFAULT NULL,
  `jumlah_saudara_kandung` int(2) DEFAULT NULL,
  `shun` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `kartu_keluarga` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `akta_kelahiran` varchar(255) DEFAULT NULL,
  `status_pendaftaran` enum('Belum Diverifikasi','Diterima','Tidak Diterima') NOT NULL,
  `tanggal_pendaftaran` date DEFAULT NULL,
  PRIMARY KEY (`id`,`tempat_lahir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `formulir` */

/*Table structure for table `konfigurasi` */

DROP TABLE IF EXISTS `konfigurasi`;

CREATE TABLE `konfigurasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sekolah` varchar(30) DEFAULT NULL,
  `alamat_sekolah` varchar(50) DEFAULT NULL,
  `telepon_sekolah` char(12) DEFAULT NULL,
  `setdaftar` enum('Buka','Tutup') DEFAULT NULL,
  `setpengumuman` enum('Buka','Tutup') DEFAULT NULL,
  `nama_website` varchar(50) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `nama_kepsek` varchar(100) DEFAULT NULL,
  `foto_kepsek` varchar(50) DEFAULT NULL,
  `nama_wakasek` varchar(100) DEFAULT NULL,
  `foto_wakasek` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `konfigurasi` */

insert  into `konfigurasi`(`id`,`nama_sekolah`,`alamat_sekolah`,`telepon_sekolah`,`setdaftar`,`setpengumuman`,`nama_website`,`keterangan`,`nama_kepsek`,`foto_kepsek`,`nama_wakasek`,`foto_wakasek`) values 
(1,'SMA Negeri 1 Sarjo','JL. H.Muh.Saleh, Kabupaten Mamuju Utara, Sulawesi','082187893503','Buka','Buka','PPDB Sarjo','Halaman ini merupakan resmi Pendaftaran Peserta Didik Baru SMA Negeri 1 Sarjo. Untuk melakukan pendaftaran silahkan klik menu daftar atau jika sudah mendaftar silahkan cetak bukti pendaftarannya melalui menu print. Untuk informasi lebih lanjut bisa menghubungi Panitia PPDB melalui No.Tlp/HP berikut 082187893504. ','SUDIRMAN, S.PD., M.PD.','kepsek.jpg','SUPRIADI, S.PD., M.PD.','wakasek.jpg');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `level` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`name`,`level`) values 
(1,'admin','$2y$10$f0oOk3l8Vo8e9Cxx4jmZ..cctg5dSBpEchI.vf.WGCNsEFwaPn6Fq','Masruddin, S.Kom',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

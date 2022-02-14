 

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `tbladmin` */

DROP TABLE IF EXISTS `tbladmin`;

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(100) DEFAULT NULL,
  `adminemail` varchar(100) DEFAULT NULL,
  `adminpass` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbladmin` */

insert  into `tbladmin`(`id`,`adminname`,`adminemail`,`adminpass`,`created_at`,`updated_at`) values (1,NULL,'admin','admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'sadsadsa','sadsad@dcssad.com','sdfsafdasd','2022-01-25 13:34:30','2022-01-25 13:34:30'),(3,'sadsad','kaushik_rohit05@yahoo.com','$2y$10$AYbxwgW6VN.XQ8/v8Z9y3uXF0BEKXctTTCaDdmziv5Cj69lE44GoW','2022-01-25 13:37:28','2022-01-25 13:37:28'),(4,'sadsadsa','sasssasdsa@dsfdsfdsf.com','$2y$10$X/vDT26F9POzN.TEFNWALe3WmhcP./KSFwmIIAIoOtDka.CnC7rpS','2022-01-25 13:42:21','2022-01-25 13:42:21'),(5,'sadsad','sadsasda@dsfsfsf.com','$2y$10$ilLuuXr8QejkkbOV.uzHXebwgOO/qk720/p56zJ7HAibuSUDwcCv.','2022-01-25 13:43:01','2022-01-25 13:43:01'),(6,'dsfdssdf','ddddd@dsdd.com','$2y$10$uh9Mo5qUYNzuE.Df3/aNFeIT6AotnlJyK4U3F.juEB06v52vJxcJu','2022-01-25 13:44:59','2022-01-25 13:44:59');

/*Table structure for table `tbladsgallery` */

DROP TABLE IF EXISTS `tbladsgallery`;

CREATE TABLE `tbladsgallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adid` int(11) DEFAULT NULL,
  `ad_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbladsgallery` */

insert  into `tbladsgallery`(`id`,`adid`,`ad_image`,`created_at`,`updated_at`) values (1,33,'33_ameli.JPG','2022-02-13 09:05:15','2022-02-13 09:05:15'),(2,33,'33_Anastasia.jpg','2022-02-13 09:05:15','2022-02-13 09:05:15'),(3,33,'33_Anastasia1.jpg','2022-02-13 09:05:15','2022-02-13 09:05:15'),(4,33,'33_Anastasia2.jpg','2022-02-13 09:05:15','2022-02-13 09:05:15'),(5,33,'33_Anastasia3.jpeg','2022-02-13 09:05:15','2022-02-13 09:05:15'),(6,33,'33_Andrea.jpg','2022-02-13 09:05:15','2022-02-13 09:05:15'),(7,33,'33_Andrea1.jpg','2022-02-13 09:05:15','2022-02-13 09:05:15'),(8,33,'33_ameli.JPG','2022-02-13 09:06:27','2022-02-13 09:06:27'),(9,33,'33_Anastasia.jpg','2022-02-13 09:06:27','2022-02-13 09:06:27'),(10,33,'33_Anastasia1.jpg','2022-02-13 09:06:27','2022-02-13 09:06:27'),(11,33,'33_Anastasia2.jpg','2022-02-13 09:06:27','2022-02-13 09:06:27'),(12,33,'33_Anastasia3.jpeg','2022-02-13 09:06:27','2022-02-13 09:06:27'),(13,33,'33_Andrea.jpg','2022-02-13 09:06:27','2022-02-13 09:06:27'),(14,33,'33_Andrea1.jpg','2022-02-13 09:06:27','2022-02-13 09:06:27'),(15,34,'34_Bonnie.jpg','2022-02-13 09:15:27','2022-02-13 09:15:27'),(16,34,'34_Bonnie1.jpg','2022-02-13 09:15:27','2022-02-13 09:15:27'),(17,35,'35_Dune-Ivory.png','2022-02-13 16:54:29','2022-02-13 16:54:29'),(18,35,'35_Dune-Natural.png','2022-02-13 16:54:29','2022-02-13 16:54:29'),(19,35,'35_Dune-Silver Gray.png','2022-02-13 16:54:29','2022-02-13 16:54:29'),(20,35,'35_Dune-White.png','2022-02-13 16:54:29','2022-02-13 16:54:29'),(21,35,'35_Halo-Ivory.png','2022-02-13 16:54:29','2022-02-13 16:54:29'),(22,35,'35_Halo-Natural.png','2022-02-13 16:54:29','2022-02-13 16:54:29'),(23,35,'35_Halo-Silver Gray.png','2022-02-13 16:54:29','2022-02-13 16:54:29'),(24,35,'35_Halo-White.png','2022-02-13 16:54:29','2022-02-13 16:54:29');

/*Table structure for table `tblcategory` */

DROP TABLE IF EXISTS `tblcategory`;

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) DEFAULT NULL,
  `category_slug` varchar(100) DEFAULT NULL,
  `category_image` varchar(100) DEFAULT NULL,
  `category_title` varchar(150) DEFAULT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `category_small_description` varchar(255) DEFAULT NULL,
  `sort_id` int(11) DEFAULT NULL,
  `isActive` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tblcategory` */

insert  into `tblcategory`(`id`,`category`,`category_slug`,`category_image`,`category_title`,`category_description`,`category_small_description`,`sort_id`,`isActive`,`created_at`,`updated_at`) values (10,'Male escorts','male-escorts','Male escorts.jpg','Male escorts','Male escorts','Male escorts, gay escorts, and gigolos. Dating with call boys and male escorts for erotic services. Enjoy your fantasies with male model escort',2,1,'2022-02-02 06:18:04','2022-02-04 05:17:28'),(12,'Escorts','escorts','escorts.jpg',NULL,NULL,'Hot and independent escorts ads. Sexy girls ready with their escort services to make you feel satisfied sexually.Women seeking men for a great session with their erotic services.',1,1,'2022-02-03 14:52:49','2022-02-04 05:17:27'),(13,'Massage','massage','massage.jpg',NULL,NULL,'Best sensual massage ads. Sensual services to let you feel relaxed and calm. Sexy girls give you hot massage and full body massage.',3,1,'2022-02-03 14:53:25','2022-02-04 05:17:30');

/*Table structure for table `tbllocation` */

DROP TABLE IF EXISTS `tbllocation`;

CREATE TABLE `tbllocation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) DEFAULT NULL,
  `location` varchar(150) DEFAULT NULL,
  `location_slug` varchar(150) DEFAULT NULL,
  `published` smallint(6) DEFAULT NULL,
  `featured` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbllocation` */

insert  into `tbllocation`(`id`,`parent`,`location`,`location_slug`,`published`,`featured`,`created_at`,`updated_at`) values (10,NULL,'333333333333','33333333333',NULL,NULL,'2022-02-02 07:09:43','2022-02-02 07:09:43'),(15,NULL,'dcdcxzcxzc','zxcxzcxzcxzc',NULL,NULL,'2022-02-02 10:42:02','2022-02-02 10:42:02'),(16,10,'dsfdsfdsds','dsfdsfdsf',NULL,NULL,'2022-02-02 10:42:14','2022-02-02 10:42:14'),(17,10,'ffffdfd','ffdfdff',NULL,NULL,'2022-02-02 10:52:53','2022-02-02 10:52:53'),(18,15,'sdfsdfd','sfdsfdsf',NULL,NULL,'2022-02-02 11:05:54','2022-02-02 11:05:54'),(19,NULL,'ertertre','retretre',NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `tblpages` */

DROP TABLE IF EXISTS `tblpages`;

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) DEFAULT NULL,
  `page_slug` varchar(100) DEFAULT NULL,
  `page_meta_title` varchar(150) DEFAULT NULL,
  `page_meta_description` varchar(200) DEFAULT NULL,
  `page_description` text DEFAULT NULL,
  `isActive` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tblpages` */

insert  into `tblpages`(`id`,`page_name`,`page_slug`,`page_meta_title`,`page_meta_description`,`page_description`,`isActive`,`created_at`,`updated_at`) values (2,'scdzxcz','xczxcz','cxzcxzc','zcz',NULL,1,'2022-02-02 08:24:53','2022-02-02 08:24:53');

/*Table structure for table `tbluser` */

DROP TABLE IF EXISTS `tbluser`;

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `isActive` smallint(6) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbluser` */

insert  into `tbluser`(`id`,`fname`,`lname`,`email_address`,`password`,`isActive`,`created_at`,`updated_at`) values (2,'xcvzxc','xzcxzcxz','xzcfxvbcxv@dvAAAfvsssdsfsd.com','$2y$10$k9tfcfIqR7gEB1dFkEXCFOg9DJu2Yie8btJ6z2zPXeUn.ojseRA7m',1,'2022-02-02 09:05:37','2022-02-02 09:18:11'),(3,'ROHIT','Kaushik','kaushik_rohit05@yahoo.com','$2y$10$WY4V5Jj9HhSuwboIibxa6Op3AhAJepFu8qfye602.hBSch0PMHU/y',NULL,'2022-02-05 08:29:44','2022-02-05 08:29:44'),(4,'test','test','test@test.com','$2y$10$D5ceRDsmS1pTGuwY44cM8e6ae6n5Sw.IHKkUvlh3VgcDSIq.GGWti',NULL,'2022-02-05 10:06:54','2022-02-05 10:06:54'),(5,NULL,NULL,'test@tes1t.com','$2y$10$xPTDyF1Db6lAishwJsMkCO.lvsklEfX0NDLnMA7rsAHG1iKE9Nqz2',NULL,'2022-02-12 09:10:08','2022-02-12 09:10:08'),(6,NULL,NULL,'test@tes2t.com','$2y$10$/ywHwqP5Zv64wWgvdULiWeAQ79JEakaQrYAhykKoX4ZoSGac76FIe',NULL,'2022-02-12 09:12:03','2022-02-12 09:12:03'),(7,NULL,NULL,'test@tes12t.com','$2y$10$Yz9LAP09T9//UGy8Vl16quTnAhaqLrtGNywMu2.vOF4XObko3JC0W',NULL,'2022-02-12 09:13:07','2022-02-12 09:13:07'),(8,NULL,NULL,'test@teqqqqst.com','$2y$10$1DzdW5aa7grblZaA8t.KUeyDUCsaCVsZxIWAXRWNOBS5ZMw0PRqrG',NULL,'2022-02-12 09:21:32','2022-02-12 09:21:32'),(9,NULL,NULL,'kaushik_rossshit05@yahoo.com','$2y$10$Fw2AaZb5QyePUjcwpmptDedRQ3S4SBY9NL5fce7acqX4hZiV00dMC',NULL,'2022-02-12 10:22:38','2022-02-12 10:22:38'),(10,NULL,NULL,'kaushikrsssohit05@gmail.com','$2y$10$d1nUgu8y.PxDHNq72ykaFeYnte5QuF2LwxrUKoGn1XAThZqgNHtdC',NULL,'2022-02-12 17:44:04','2022-02-12 17:44:04'),(11,NULL,NULL,'kaushik_rodddddddddhit05@yahoo.com','$2y$10$emLBhaWODYz1O9p9iiscFe7dZjPxL1yh03gUEolzccVz7NrI6U79q',NULL,'2022-02-12 18:12:36','2022-02-12 18:12:36'),(12,NULL,NULL,'kaushik_roddddsssssssdddddhit05@yahoo.com','$2y$10$iUWdLW2BeCvMaKgxGGfBlu6lj2kMXvFC9FowggLr6Uix9nymHz0XC',NULL,'2022-02-12 18:16:43','2022-02-12 18:16:43'),(13,NULL,NULL,'kausssddddhit05@yahoo.com','$2y$10$TUaGIeXWXTxMqly6MPKz5u.q9uMfR4bltt5GnCCScyiJMgXmlYkMW',NULL,'2022-02-12 18:26:52','2022-02-12 18:26:52'),(14,NULL,NULL,'cxvcxv@sfds.com','$2y$10$mcFF8Bldc29E8GjoXgiS8u9FLYnykql8eHCzGW6q/fV1rdfG.4bsS',NULL,'2022-02-12 19:05:26','2022-02-12 19:05:26'),(15,NULL,NULL,'cxvcxv@sfdss.com','$2y$10$lC9Et2c3O05DsZInXyo0r.2uyru3or/xUs3qv4asUvfRmLGrSW1gO',NULL,'2022-02-12 19:10:24','2022-02-12 19:10:24'),(16,NULL,NULL,'cxvcxv@sfdssssss.com','$2y$10$CuxGluV.fWBH1p3m.y2jcuFq3X1Wchbs/lbkUttIWrIliBhJTMxCi',NULL,'2022-02-12 19:12:39','2022-02-12 19:12:39'),(17,NULL,NULL,'cxvcxv@sfdsssssqs.com','$2y$10$kzoy0ZMQwiF9Z4sHOqU9feShhqcFhlyyHtISS6fqKyEZpHkW0L.N2',NULL,'2022-02-12 19:21:44','2022-02-12 19:21:44'),(18,NULL,NULL,'cxvcxv@sfdssqsssqs.com','$2y$10$HK1YrMqLTEaVtIJhpsTf1u5WSmad0nRfpo4Fr81rSEW5AFOzLZSci',NULL,'2022-02-12 19:23:50','2022-02-12 19:23:50'),(19,NULL,NULL,'kaushik_rohit05sss@yahoo.com','$2y$10$R2Ou0B5VgP0tzT8mZBKFh.gxpEUeMdP/5QBvPEXm1PSLZUNbBlllu',NULL,'2022-02-12 19:52:20','2022-02-12 19:52:20'),(20,NULL,NULL,'kaushik_sssssrohit05@yahoo.com','$2y$10$1FXk/WuYYRtcytpoUGvPH.Z5KxvOuSUUcouuRcu1N6VOova5JNOXG',NULL,'2022-02-13 07:37:50','2022-02-13 07:37:50'),(21,NULL,NULL,'kaushik_sssssssrohit05@yahoo.com','$2y$10$jEFilcrEWUNu7BQ3caivCuRjDeSA6p7GkNiqEzi1J8FvPKDcZNN.2',NULL,'2022-02-13 07:40:31','2022-02-13 07:40:31'),(22,NULL,NULL,'kaushik_rohqwqeitq05qsss@yahoo.com','$2y$10$qK8cLz1dGW4B2T.BlZvb8.7XfDN0wl8st0I6hhu9eTaGb9yxL6nrq',NULL,'2022-02-13 07:44:54','2022-02-13 07:44:54'),(23,NULL,NULL,'kaushik_rohqwqeitq05ssqsss@yahoo.com','$2y$10$tW7PMvtnLrbtaz051HYlUu2lqQee1EhNoovarQ1nb77D0vJnDq5X6',NULL,'2022-02-13 07:46:41','2022-02-13 07:46:41'),(24,NULL,NULL,'kaushik_rohsssqwqeitq05ssqsss@yahoo.com','$2y$10$eyA5f9VoPb108Tl7NOF54uHoUL/1HpVyE8dxyOsFHRrjQGLaIcTp2',NULL,'2022-02-13 07:48:01','2022-02-13 07:48:01'),(25,NULL,NULL,'kaushik_rohsssqwqeitq05ssqsss@yahoo.com','$2y$10$9MZKo4BJFs..P9vMKXuEB..dRnOvBUfUiZ.xzJc254mOPyY1CoEuq',NULL,'2022-02-13 07:49:32','2022-02-13 07:49:32'),(26,NULL,NULL,'kaushik_rohsssqwqeitq05ssqsss@yahoo.com','$2y$10$FDtjhu5DmuA0/XXcnfaENeO4mHPDzJ1CTIXB71VWzCR1UZmzEYFJS',NULL,'2022-02-13 07:49:35','2022-02-13 07:49:35'),(27,NULL,NULL,'kaushik_rohsssqwqeitq05ssqsss@yahoo.com','$2y$10$2Y4ohJtLMQeBVRHbfrx4juH/6lEpFU/fJOdgzxKOaJLfYajhnYhs6',NULL,'2022-02-13 07:49:41','2022-02-13 07:49:41'),(28,NULL,NULL,'kaushik_rohsssqwqeitq05ssqsss@yahoo.com','$2y$10$E3paEhaiYms98SPwV5dQoOm63mmUDjvaD.RljJTi3.hnN2P65gXwC',NULL,'2022-02-13 07:51:57','2022-02-13 07:51:57'),(29,NULL,NULL,'kaushik_rohsssqwqeitq05ssqsss@yahoo.com','$2y$10$I7J4ZRcI2Jrb.BP3WpMGj.WFP6XpFtyMR4pQpxMUYVa.gv8Qrmbp6',NULL,'2022-02-13 07:53:05','2022-02-13 07:53:05'),(30,NULL,NULL,'sadsadsa@dfsfds.com','$2y$10$.NtSth75tQMWtMeaR7Km2OL3FlITgbghjL9whqQvh7S4EVIB1hqVm',NULL,'2022-02-13 07:56:50','2022-02-13 07:56:50'),(31,NULL,NULL,'kqqqqq_sssssrohit05@yahoo.com','$2y$10$oCTBtojYSJalT7g13P8pqupAzZOJynNCY/GcIe7v98TvsMkN52Hte',NULL,'2022-02-13 07:58:03','2022-02-13 07:58:03'),(32,NULL,NULL,'kaushieeeek_rohit05@yahoo.com','$2y$10$KSCmzGbkghiIYdElsMXtu.ZYOY8GdxoeD4Cg07k9n7q03KCC1nk3K',NULL,'2022-02-13 08:00:03','2022-02-13 08:00:03'),(33,NULL,NULL,'stowissssxstore@gmail.com','$2y$10$85A7JBH1CdTEjF2z.6xZg.VLuKy3tdAKY4nT4x2.AYf7ww3BjCjje',NULL,'2022-02-13 08:00:57','2022-02-13 08:00:57'),(34,NULL,NULL,'stowissssssssxstore@gmail.com','$2y$10$VTI.1WeXc6srEDI6pVVlCOaZ.IuHj2ZRALWp2WU4.ZOpln1yj1yoS',NULL,'2022-02-13 08:02:40','2022-02-13 08:02:40'),(35,NULL,NULL,'stowisssssaaaasssxstore@gmail.com','$2y$10$fOYwbFAoFtYLvdgcMR2UkunwLT3l.Elh8rqIJcRpIkh3kjXsu6pqW',NULL,'2022-02-13 08:03:33','2022-02-13 08:03:33'),(36,NULL,NULL,'stowisaaasssssaaaasssxstore@gmail.com','$2y$10$yzTZZwd45zZ/1eedsJ33He5vrPioAKWdve/OMNDf3D.8DuXM8Jxka',NULL,'2022-02-13 08:11:12','2022-02-13 08:11:12'),(37,NULL,NULL,'ssssasdsa@sdad.com','$2y$10$3P95ge11CgJTP/544.9E/ePNrTHZvEsX5.uQibjxiPRablAm5xir.',NULL,'2022-02-13 08:14:11','2022-02-13 08:14:11'),(38,NULL,NULL,'kausddddddddhik_rohit05@yahoo.com','$2y$10$hfiaFIJgzb8.VxMKse0gXeLeUOsIitUDHGaV1iHonn5AZKUzcVmtq',NULL,'2022-02-13 08:26:23','2022-02-13 08:26:23'),(39,NULL,NULL,'kausdddqqqqqqdddddhik_rohit05@yahoo.com','$2y$10$GjocOuPd5HNRooMPWfrvCeYNkEoRixA3PX.KX6ThC1fOlLSJree22',NULL,'2022-02-13 08:27:50','2022-02-13 08:27:50'),(40,NULL,NULL,'sadasssssdsa@sddsads.com','$2y$10$I5gXHGNF5ufgAezj/dmUyuIUrmt4tk9RSXSMsnr1bBDTVSLj/1nVq',NULL,'2022-02-13 08:34:50','2022-02-13 08:34:50'),(41,NULL,NULL,'sadaaaaaasssssdsa@sddsads.com','$2y$10$0fLXZ8phS8bpQeQR57GfguU5E36BmRybtCOVYRr3U2obLRQzE4v1y',NULL,'2022-02-13 08:37:26','2022-02-13 08:37:26'),(42,NULL,NULL,'kaushikdddddddrohit05@gmail.com','$2y$10$B4XiJTgVC6lbICcR9P1MWuT5jbattHUFMPq5t0dB3fScyGeEYVjru',NULL,'2022-02-13 08:41:13','2022-02-13 08:41:13'),(43,NULL,NULL,'kau234234shikdddddddrohit05@gmail.com','$2y$10$aP4oi36n2//gg4WE537p5eKdXsyORpu89kbCHnMnjPoCta.jXHi9.',NULL,'2022-02-13 08:43:25','2022-02-13 08:43:25'),(44,NULL,NULL,'test@test121.com','$2y$10$HKvF9gwWtbt8cSKyJ.NL1.iJKQXG6yzqUkkNWSIeNlYptAX8Ri5UG',NULL,'2022-02-13 16:53:40','2022-02-13 16:53:40');

/*Table structure for table `tbluserads` */

DROP TABLE IF EXISTS `tbluserads`;

CREATE TABLE `tbluserads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `title` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `meta_title` varchar(150) DEFAULT NULL,
  `meta_description` varchar(150) DEFAULT NULL,
  `isActive` smallint(6) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbluserads` */

insert  into `tbluserads`(`id`,`userid`,`category_id`,`region_id`,`location_id`,`title`,`description`,`email`,`phone`,`zip_code`,`area`,`address`,`meta_title`,`meta_description`,`isActive`,`created_at`,`updated_at`) values (1,2,10,10,16,'sadada','Ad DescriptionAd DescriptionAd DescriptionAd DescriptionAd DescriptionAd DescriptionAd DescriptionAd Description',NULL,NULL,NULL,NULL,NULL,'Ad Description','Ad Description',1,'2022-02-03 09:21:37','2022-02-03 09:21:37'),(2,2,10,15,18,'1111111111111111','11111111111111111111111111111111',NULL,NULL,NULL,NULL,NULL,'11111111111111','11111111',1,'2022-02-03 09:44:30','2022-02-03 09:44:30'),(3,2,12,10,17,'dxsfdsfsdfsd','11/04/2018 · PHP | strtolower () Function Last Updated : 11 Apr, 2018 The strtolower () function is used to convert a string into lowercase.',NULL,NULL,NULL,NULL,NULL,'11/04/2018 · PHP | strtolower () Function Last Updated : 11 Apr, 2018 The strtolower () function is used to convert a string into lowercase.','11/04/2018 · PHP | strtolower () Function Last Updated : 11 Apr, 2018 The strtolower () function is used to convert a string into lowercase.',1,'2022-02-04 05:33:19','2022-02-04 05:33:19'),(4,2,12,10,16,'Escort meeting','Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting Escort meeting',NULL,NULL,NULL,NULL,NULL,'Escort meeting','Escort meeting',1,'2022-02-05 05:55:11','2022-02-05 05:55:11'),(5,3,10,10,17,'11111111111111111','asdsadsadsad',NULL,NULL,NULL,NULL,NULL,'sad ad sad sa','d asd sad sa',1,'2022-02-06 16:21:15','2022-02-06 16:21:15'),(6,4,10,10,16,'sadasd asd asd asd','s adasd asd asd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-10 18:19:34','2022-02-10 18:19:34'),(7,7,10,10,17,'asdasdasd','asdasd asd asasdasd asd asasdasd asd asasdasd asd asasdasd asd asasdasd asd as',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-12 09:13:07','2022-02-12 09:13:07'),(8,8,10,10,17,'sdfdsf','dsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf sdsf sdf s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2022-02-12 09:21:33','2022-02-12 09:21:33'),(9,4,10,10,17,'sadsad','sadsadsad sad assadsadsad sad assadsadsad sad assadsadsad sad assadsadsad sad assadsadsad sad assadsadsad sad assadsadsad sad assadsadsad sad assadsadsad sad assadsadsad sad as',NULL,'4354354354','sasda','dsadsad','sadsadsa',NULL,NULL,NULL,'2022-02-12 09:32:06','2022-02-12 09:32:06'),(10,4,10,10,17,'sdfdsfsd','dsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df sdsfs df s','test@test.com','43534543543','243242','34234324','sdfsdf',NULL,NULL,NULL,'2022-02-12 09:34:45','2022-02-12 09:34:45'),(11,4,13,10,17,'sdfdsf','sdfsdfdsfdsf','test@test.com','fedsfdsf','dsfsdf','sdfdsfds','sdfsdfdsf',NULL,NULL,NULL,'2022-02-12 10:12:08','2022-02-12 10:12:08'),(12,9,10,10,17,'sadsad','sadsad','kaushik_rossshit05@yahoo.com','09958592391','sdsa','sadsad','sadsad',NULL,NULL,NULL,'2022-02-12 10:22:38','2022-02-12 10:22:38'),(13,4,12,10,17,'sdfdsfdsf','sdfdsfdsf','test@test.com','sdfdsf','dsfdsfdsf','dsfdsf','sdfdsf',NULL,NULL,NULL,'2022-02-12 10:33:36','2022-02-12 10:33:36'),(14,10,10,10,16,'sadsad','sadsadsa','kaushikrsssohit05@gmail.com','0995 859 2391','sadsad','sadsad','sadsad',NULL,NULL,NULL,'2022-02-12 17:44:04','2022-02-12 17:44:04'),(15,11,10,10,16,'dsfdsf','sdfdsfdsfds','kaushik_rodddddddddhit05@yahoo.com','09958592391','ddsfdsffssd','dsfdsfsdf','sdfdsf',NULL,NULL,NULL,'2022-02-12 18:12:36','2022-02-12 18:12:36'),(16,12,10,10,16,'dsfdsf','sdfdsfdsfds','kaushik_roddddsssssssdddddhit05@yahoo.com','09958592391','ddsfdsffssd','dsfdsfsdf','sdfdsf',NULL,NULL,NULL,'2022-02-12 18:16:43','2022-02-12 18:16:43'),(17,13,10,10,17,'dsfdsf','sdfdsfdsfds','kausssddddhit05@yahoo.com','09958592391','ddsfdsffssd','dsfdsfsdf','sdfdsf',NULL,NULL,NULL,'2022-02-12 18:26:52','2022-02-12 18:26:52'),(18,16,10,10,16,'cxvcxvxcv','cxvcxv','cxvcxv@sfdssssss.com','asdsadsa','xcvcxv','xcvcxv','cxvcxv',NULL,NULL,NULL,'2022-02-12 19:12:39','2022-02-12 19:12:39'),(19,19,10,10,16,'sadsadsa','saddddddddddddd','kaushik_rohit05sss@yahoo.com','9958592391','asdad','sadddddd','sadsadsa',NULL,NULL,NULL,'2022-02-12 19:52:20','2022-02-12 19:52:20'),(20,20,10,10,16,'fsdfsd','fdsfdsfsd','kaushik_sssssrohit05@yahoo.com','9958592391','vdsfsf','dsfdsfsdf','dsdsdsfds',NULL,NULL,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,24,10,10,16,'sadsadsa','saddddddddddddd','kaushik_rohsssqwqeitq05ssqsss@yahoo.com','qw','asdad','sadddddd','sadsadsa',NULL,NULL,0,'2022-02-13 13:32:15','2022-02-13 13:32:15'),(22,24,10,10,16,'sadsadsa','saddddddddddddd','kaushik_rohsssqwqeitq05ssqsss@yahoo.com','qw','asdad','sadddddd','sadsadsa',NULL,NULL,0,'2022-02-13 13:32:15','2022-02-13 13:32:15'),(23,30,10,15,18,'sadsad','sadsad','sadsadsa@dfsfds.com','32423423423','sads','adasd','sadasd',NULL,NULL,0,'2022-02-13 13:32:15','2022-02-13 13:32:15'),(24,31,10,10,16,'sadsad','sadasdsa','kqqqqq_sssssrohit05@yahoo.com','qqqqqqqqq','sadas','dasdsad','sadsad',NULL,NULL,0,'2022-02-13 13:32:15','2022-02-13 13:32:15'),(25,32,10,15,18,'sadasdasd','sad sad asd asd','kaushieeeek_rohit05@yahoo.com','+919958592391','asdadsad','sadsad','sadsadsa',NULL,NULL,0,'2022-02-13 13:32:15','2022-02-13 13:32:15'),(26,36,10,10,16,'sadsadsad','sdsadsadas','stowisaaasssssaaaasssxstore@gmail.com','sadsad','sadasd','asdsad','sadsa',NULL,NULL,NULL,'2022-02-13 08:11:12','2022-02-13 08:11:12'),(27,37,10,10,17,'sadasd','sadsadsad','ssssasdsa@sdad.com','dfsfsd','sadsad','sadsad','sadasdsadsad',NULL,NULL,NULL,'2022-02-13 08:14:12','2022-02-13 08:14:12'),(28,38,10,10,16,'vdsvdsv','dsvdsv','kausddddddddhik_rohit05@yahoo.com','+919958592391','dvd','vdvdsvd','svdsvdsv',NULL,NULL,NULL,'2022-02-13 08:26:23','2022-02-13 08:26:23'),(29,39,10,10,16,'vdsvdsv','dsvdsv','kausdddqqqqqqdddddhik_rohit05@yahoo.com','+919958592391','dvd','vdvdsvd','svdsvdsv',NULL,NULL,NULL,'2022-02-13 08:27:50','2022-02-13 08:27:50'),(30,40,10,10,16,'sadsad','sad sad sad','sadasssssdsa@sddsads.com','324324','sdasd','sadsad','sadsadsasad',NULL,NULL,NULL,'2022-02-13 08:34:50','2022-02-13 08:34:50'),(31,41,10,10,16,'sadsad','sad sad sad','sadaaaaaasssssdsa@sddsads.com','324324','sdasd','sadsad','sadsadsasad',NULL,NULL,NULL,'2022-02-13 08:37:26','2022-02-13 08:37:26'),(32,42,10,10,16,'dsfdsf','dsfdsfds','kaushikdddddddrohit05@gmail.com','0995 859 2391','dsfdsf','dsfdsfds','dsfdsfds',NULL,NULL,NULL,'2022-02-13 08:41:13','2022-02-13 08:41:13'),(33,43,10,10,16,'dsfdsf','dsfdsfds','kau234234shikdddddddrohit05@gmail.com','0995 859 2391','dsfdsf','dsfdsfds','dsfdsfds',NULL,NULL,NULL,'2022-02-13 08:43:25','2022-02-13 08:43:25'),(34,4,10,10,16,'Add by test','Add by test','test@test.com','+919958592391','201010','sadddddd','H-271, SECTOR-23',NULL,NULL,NULL,'2022-02-13 09:15:14','2022-02-13 09:15:14'),(35,44,10,10,16,'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula, ligula a tincidunt commodo, lacus mi elementum ante, at consequat risus mauris quis dui. Integer viverra vestibulum mi. Cras vel elit id nunc vestibulum finibus sed luctus augue. In viverra, arcu quis placerat fermentum, orci elit consequat augue, in pretium urna orci at tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras congue tellus eget nulla tincidunt, non interdum nisi porttitor. In gravida commodo felis, non lacinia velit dapibus vitae. Suspendisse justo libero, sagittis eget mi sed, consequat elementum ipsum. Sed bibendum nisi molestie, vehicula lorem eget, malesuada mauris. Etiam nec diam at diam tristique volutpat non in lectus.','test@test121.com','1234567890','123456','test','test',NULL,NULL,NULL,'2022-02-13 16:53:40','2022-02-13 16:53:40');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

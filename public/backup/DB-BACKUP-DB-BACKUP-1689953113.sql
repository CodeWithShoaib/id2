DROP TABLE IF EXISTS accordian;

CREATE TABLE `accordian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO accordian VALUES('3','Donec et viverra mi. Donec finibus consectetur facilisis?','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br />industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the<br />printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever<br />since the 1500s.</p>','2023-06-27 00:07:29','2023-06-27 00:07:29');
INSERT INTO accordian VALUES('4','Donec et viverra mi. Donec finibus consectetur facilisis?','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br />industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the<br />printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever<br />since the 1500s.</p>','2023-06-27 00:08:22','2023-06-27 00:08:22');
INSERT INTO accordian VALUES('5','Donec et viverra mi. Donec finibus consectetur facilisis?','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br />industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the<br />printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever<br />since the 1500s.</p>','2023-06-27 00:08:56','2023-06-27 00:08:56');
INSERT INTO accordian VALUES('6','Donec et viverra mi. Donec finibus consectetur facilisis?','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br />industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the<br />printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever<br />since the 1500s.</p>','2023-06-27 00:08:56','2023-06-27 00:08:56');
INSERT INTO accordian VALUES('7','Donec et viverra mi. Donec finibus consectetur facilisis?','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br />industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the<br />printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever<br />since the 1500s.</p>','2023-06-27 00:08:56','2023-06-27 00:08:56');
INSERT INTO accordian VALUES('8','Donec et viverra mi. Donec finibus consectetur facilisis?','<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br />industry\'s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the<br />printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever<br />since the 1500s.</p>','2023-06-27 00:08:56','2023-06-27 00:08:56');



DROP TABLE IF EXISTS brands;

CREATE TABLE `brands` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO brands VALUES('13','image1687804894.png','title','title','<p>title</p>','2023-06-26 21:41:34','2023-06-26 21:41:34');
INSERT INTO brands VALUES('14','image1687804900.png','title','title','<p>title</p>','2023-06-26 21:41:40','2023-06-26 21:41:40');
INSERT INTO brands VALUES('15','image1687804900.png','title','title','<p>title</p>','2023-06-26 21:41:40','2023-06-26 21:41:40');
INSERT INTO brands VALUES('16','image1687804900.png','title','title','<p>title</p>','2023-06-26 21:41:40','2023-06-26 21:41:40');
INSERT INTO brands VALUES('17','image1687804900.png','title','title','<p>title</p>','2023-06-26 21:41:40','2023-06-26 21:41:40');
INSERT INTO brands VALUES('18','image1687804900.png','title','title','<p>title</p>','2023-06-26 21:41:40','2023-06-26 21:41:40');



DROP TABLE IF EXISTS brands_translation;

CREATE TABLE `brands_translation` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint(20) unsigned DEFAULT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `brands_translation_brand_id_foreign` (`brand_id`),
  CONSTRAINT `brands_translation_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO brands_translation VALUES('5','','English','title','2023-06-26 21:41:34','2023-06-26 21:41:34');
INSERT INTO brands_translation VALUES('6','','English','title','2023-06-26 21:41:40','2023-06-26 21:41:40');



DROP TABLE IF EXISTS category;

CREATE TABLE `category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO category VALUES('1','electronic-devices','','2020-11-02 16:24:37','2020-11-02 16:24:37');
INSERT INTO category VALUES('2','desktop-components','','2020-11-02 16:24:51','2020-11-02 16:27:43');
INSERT INTO category VALUES('3','health-&-beauty','','2020-11-02 16:25:14','2020-11-02 16:25:14');
INSERT INTO category VALUES('4','men\'s-fashion','','2020-11-02 16:25:30','2020-11-02 16:25:30');
INSERT INTO category VALUES('5','women\'s-fashion','','2020-11-02 16:25:47','2020-11-02 16:25:47');
INSERT INTO category VALUES('6','sports-&-outdoor','','2020-11-02 16:26:02','2020-11-02 16:26:02');
INSERT INTO category VALUES('7','mobile','1','2020-11-02 16:26:23','2020-11-02 16:26:23');
INSERT INTO category VALUES('8','laptop','1','2020-11-02 16:26:33','2020-11-02 16:26:33');
INSERT INTO category VALUES('9','cameras','1','2020-11-02 16:26:46','2020-11-02 16:26:46');
INSERT INTO category VALUES('10','tablets','1','2020-11-02 16:27:06','2020-11-02 16:27:06');
INSERT INTO category VALUES('11','hair-care','3','2020-11-02 16:28:18','2020-11-02 16:28:18');
INSERT INTO category VALUES('12','skin-care','3','2020-11-02 16:28:27','2020-11-02 16:28:27');
INSERT INTO category VALUES('13','food-supliments','3','2020-11-02 16:28:58','2020-11-02 16:28:58');
INSERT INTO category VALUES('14','t-shirts','4','2020-11-02 16:29:20','2020-11-02 16:29:20');
INSERT INTO category VALUES('15','shirts','4','2020-11-02 16:29:30','2020-11-02 16:29:30');
INSERT INTO category VALUES('16','jeans','4','2020-11-02 16:29:42','2020-11-02 16:29:42');
INSERT INTO category VALUES('17','shoes','4','2020-11-02 16:29:58','2020-11-02 16:29:58');
INSERT INTO category VALUES('18','women\'s-bags','5','2020-11-02 16:31:04','2020-11-02 16:31:04');
INSERT INTO category VALUES('19','women\'s-shoes','5','2020-11-02 16:31:18','2020-11-02 16:31:18');
INSERT INTO category VALUES('20','kurti','5','2020-11-02 16:31:56','2020-11-02 16:31:56');
INSERT INTO category VALUES('21','fitness-accessories','6','2020-11-02 16:32:35','2020-11-02 16:32:35');
INSERT INTO category VALUES('22','team-sports','6','2020-11-02 16:32:48','2020-11-02 16:32:48');
INSERT INTO category VALUES('23','treadmills','6','2020-11-02 16:33:27','2020-11-02 16:33:27');
INSERT INTO category VALUES('24','software','','2020-11-03 13:04:57','2020-11-03 13:04:57');
INSERT INTO category VALUES('25','motherboard','2','2021-03-08 07:57:19','2021-03-08 07:57:19');
INSERT INTO category VALUES('26','adobe-photoshop','24','2021-03-08 07:57:33','2021-03-08 07:57:33');
INSERT INTO category VALUES('28','watch-&-accessories','','2021-03-22 14:39:45','2021-03-22 14:39:45');
INSERT INTO category VALUES('29','tv-&-home-appliances','','2021-03-22 14:40:15','2021-03-22 14:40:15');
INSERT INTO category VALUES('30','home-&-lifestyle','','2021-03-22 14:40:35','2021-03-22 14:40:35');



DROP TABLE IF EXISTS category_translation;

CREATE TABLE `category_translation` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_translation_category_id_locale_unique` (`category_id`,`locale`),
  CONSTRAINT `category_translation_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO category_translation VALUES('1','1','English','Electronic Devices','','2020-11-02 16:24:37','2020-11-02 16:24:37');
INSERT INTO category_translation VALUES('2','2','English','Desktop Components','','2020-11-02 16:24:51','2020-11-02 16:27:43');
INSERT INTO category_translation VALUES('3','3','English','Health & Beauty','','2020-11-02 16:25:14','2020-11-02 16:25:14');
INSERT INTO category_translation VALUES('4','4','English','Men\'s Fashion','','2020-11-02 16:25:30','2020-11-02 16:25:30');
INSERT INTO category_translation VALUES('5','5','English','Women\'s Fashion','','2020-11-02 16:25:47','2020-11-02 16:25:47');
INSERT INTO category_translation VALUES('6','6','English','Sports & Outdoor','','2020-11-02 16:26:02','2020-11-02 16:26:02');
INSERT INTO category_translation VALUES('7','7','English','Mobile','','2020-11-02 16:26:23','2020-11-02 16:26:23');
INSERT INTO category_translation VALUES('8','8','English','Laptop','','2020-11-02 16:26:33','2020-11-02 16:26:33');
INSERT INTO category_translation VALUES('9','9','English','Cameras','','2020-11-02 16:26:46','2020-11-02 16:26:46');
INSERT INTO category_translation VALUES('10','10','English','Tablets','','2020-11-02 16:27:06','2020-11-02 16:27:06');
INSERT INTO category_translation VALUES('11','11','English','Hair Care','','2020-11-02 16:28:18','2020-11-02 16:28:18');
INSERT INTO category_translation VALUES('12','12','English','Skin care','','2020-11-02 16:28:27','2020-11-02 16:28:27');
INSERT INTO category_translation VALUES('13','13','English','Food Supliments','','2020-11-02 16:28:58','2020-11-02 16:28:58');
INSERT INTO category_translation VALUES('14','14','English','T-Shirts','','2020-11-02 16:29:20','2020-11-02 16:29:20');
INSERT INTO category_translation VALUES('15','15','English','Shirts','','2020-11-02 16:29:30','2020-11-02 16:29:30');
INSERT INTO category_translation VALUES('16','16','English','Jeans','','2020-11-02 16:29:42','2020-11-02 16:29:42');
INSERT INTO category_translation VALUES('17','17','English','Shoes','','2020-11-02 16:29:58','2020-11-02 16:29:58');
INSERT INTO category_translation VALUES('18','18','English','Women\'s Bags','','2020-11-02 16:31:04','2020-11-02 16:31:04');
INSERT INTO category_translation VALUES('19','19','English','Women\'s Shoes','','2020-11-02 16:31:18','2020-11-02 16:31:18');
INSERT INTO category_translation VALUES('20','20','English','Kurti','','2020-11-02 16:31:56','2020-11-02 16:31:56');
INSERT INTO category_translation VALUES('21','21','English','Fitness Accessories','','2020-11-02 16:32:35','2020-11-02 16:32:35');
INSERT INTO category_translation VALUES('22','22','English','Team Sports','','2020-11-02 16:32:48','2020-11-02 16:32:48');
INSERT INTO category_translation VALUES('23','23','English','Treadmills','','2020-11-02 16:33:27','2020-11-02 16:33:27');
INSERT INTO category_translation VALUES('24','24','English','Software','','2020-11-03 13:04:57','2020-11-03 13:04:57');
INSERT INTO category_translation VALUES('25','25','English','Motherboard','','2021-03-08 07:57:19','2021-03-08 07:57:19');
INSERT INTO category_translation VALUES('26','26','English','Adobe Photoshop','','2021-03-08 07:57:33','2021-03-08 07:57:33');
INSERT INTO category_translation VALUES('28','28','English','Watch & Accessories','','2021-03-22 14:39:45','2021-03-22 14:39:45');
INSERT INTO category_translation VALUES('29','29','English','Tv & Home Appliances','','2021-03-22 14:40:15','2021-03-22 14:40:15');
INSERT INTO category_translation VALUES('30','30','English','Home & LifeStyle','','2021-03-22 14:40:35','2021-03-22 14:40:35');



DROP TABLE IF EXISTS coupon_categories;

CREATE TABLE `coupon_categories` (
  `coupon_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `exclude` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`coupon_id`,`category_id`,`exclude`),
  KEY `coupon_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `coupon_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `coupon_categories_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS coupon_products;

CREATE TABLE `coupon_products` (
  `coupon_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `exclude` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`coupon_id`,`product_id`,`exclude`),
  KEY `coupon_products_product_id_foreign` (`product_id`),
  CONSTRAINT `coupon_products_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  CONSTRAINT `coupon_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS coupon_translations;

CREATE TABLE `coupon_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `coupon_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `coupon_translations_coupon_id_locale_unique` (`coupon_id`,`locale`),
  CONSTRAINT `coupon_translations_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO coupon_translations VALUES('3','1','English','');
INSERT INTO coupon_translations VALUES('4','4','English','');
INSERT INTO coupon_translations VALUES('5','3','English','');
INSERT INTO coupon_translations VALUES('6','2','English','');



DROP TABLE IF EXISTS currency;

CREATE TABLE `currency` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(3) NOT NULL,
  `base_currency` tinyint(4) NOT NULL,
  `exchange_rate` decimal(10,6) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO currency VALUES('1','USD','1','1.000000','1','','');
INSERT INTO currency VALUES('2','EUR','0','0.850000','1','','');
INSERT INTO currency VALUES('3','INR','0','72.450000','1','','');



DROP TABLE IF EXISTS customer_addresses;

CREATE TABLE `customer_addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(191) NOT NULL,
  `address` text NOT NULL,
  `post_code` varchar(50) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS database_backups;

CREATE TABLE `database_backups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `file` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS diameter;

CREATE TABLE `diameter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `diameter` text DEFAULT NULL,
  `models_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO diameter VALUES('1','10mm','1','2023-07-14 18:16:09','2023-07-14 18:16:09');
INSERT INTO diameter VALUES('2','15mm','1','2023-07-14 18:16:19','2023-07-14 18:16:19');
INSERT INTO diameter VALUES('3','20mm','1','2023-07-14 18:16:29','2023-07-14 18:16:29');
INSERT INTO diameter VALUES('4','30mm','1','2023-07-14 18:16:38','2023-07-14 18:16:38');
INSERT INTO diameter VALUES('5','40mm','1','2023-07-14 18:16:45','2023-07-14 18:16:45');
INSERT INTO diameter VALUES('6','50mm','1','2023-07-14 18:16:55','2023-07-14 18:16:55');
INSERT INTO diameter VALUES('7','4.2mm','2','2023-07-14 18:17:13','2023-07-14 18:17:13');
INSERT INTO diameter VALUES('8','4.1mm','3','2023-07-14 18:17:27','2023-07-14 18:17:27');
INSERT INTO diameter VALUES('9','1.5mm','4','2023-07-14 18:17:39','2023-07-14 18:17:39');



DROP TABLE IF EXISTS doctor_register_portal;

CREATE TABLE `doctor_register_portal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `streesAddress` text DEFAULT NULL,
  `city` text DEFAULT NULL,
  `State` text DEFAULT NULL,
  `zipCode` text DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `confirm_email` text DEFAULT NULL,
  `number` text DEFAULT NULL,
  `doctor_name` text DEFAULT NULL,
  `doctor_phone_number` text DEFAULT NULL,
  `images` text NOT NULL,
  `restoring_dentist_name` text DEFAULT NULL,
  `practice_name_of_restoring_dentist` text DEFAULT NULL,
  `Implant_Restoration_date` date DEFAULT NULL,
  `abutment_type` text DEFAULT NULL,
  `current_dentist` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `different_above` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `unique_id` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO doctor_register_portal VALUES('10','demo','demo','demo','demo','3','555','2023-07-19','male','abc@gmail.com','abc@gmail.com','45645486','demo','2','[\"image1689355702.png\",\"image1689355702.png\"]','demo','demo','2023-07-29','demo','demo','5','demo','doctor','65639','2023-07-14 17:28:22','2023-07-14 17:28:22');
INSERT INTO doctor_register_portal VALUES('11','Austin','Marvin','St 513 CA','Bakersfield','3','1008','2023-07-16','male','austin@thewebsitedesigns.com','austin@thewebsitedesigns.com','14695866855','Tony','1552224444','[\"image1689371305.webp\",\"image1689371305.webp\"]','Demo','demo','3122-03-12','demo','demo','5','demo','doctor','27597','2023-07-14 21:48:25','2023-07-14 21:48:25');
INSERT INTO doctor_register_portal VALUES('13','demo','demo','demo','demo','3','221','2023-07-07','male','abc@gmail.com','abc@gmail.com','54754','abc@gmail.com','473','[\"image1689614956.png\",\"image1689614956.png\"]','name','name','2023-07-19','name','name','34','name','doctor','56422','2023-07-17 17:29:16','2023-07-17 17:29:16');
INSERT INTO doctor_register_portal VALUES('14','harry','harry','harry','harry','3','5475','2023-07-22','male','harry@gmail.com','harry@gmail.com','68529686','harry@gmail.com','51','[\"image1689615426.png\",\"image1689615426.png\"]','harry@namegmail.com','dgfgdfrg','2023-07-15','harry@gmail.com','harry@gmail.com','34','harry@gmail.com','doctor','54830','2023-07-17 17:37:06','2023-07-17 17:37:06');
INSERT INTO doctor_register_portal VALUES('15','harry','harry','harry','harry','3','5475','2023-07-22','male','harry@gmail.com','harry@gmail.com','68529686','harry@gmail.com','51','[\"0image1689615814.png\",\"1image1689615814.png\"]','harry@namegmail.com','dgfgdfrg','2023-07-15','harry@gmail.com','harry@gmail.com','34','harry@gmail.com','doctor','91211','2023-07-17 17:43:34','2023-07-17 17:43:34');
INSERT INTO doctor_register_portal VALUES('20','harry','namepotter','potter','potter','4','54','2023-07-19','male','potter@gmail.com','potter@gmail.comname','5425415','potter@gmail.com','45','[\"0image1689630261.png\",\"1image1689630261.png\"]','name','name','2023-07-19','name','name','38','name','doctor','38477','2023-07-17 21:44:21','2023-07-17 21:44:21');
INSERT INTO doctor_register_portal VALUES('21','john','joe','usa','california','3','574','2023-07-13','male','abc@gmail.com','abc@gmail.com','54753','name','78','[\"0image1689632802.png\",\"1image1689632802.png\"]','name','name','2023-07-21','name','name','38','name','doctor','26249','2023-07-17 22:26:42','2023-07-17 22:26:42');
INSERT INTO doctor_register_portal VALUES('26','harry 2','potter 2','name','name','3','54','2023-07-14','male','harry@gmail.com','harry@gmail.com','545','harry','574','[\"0image1689636503.png\",\"1image1689636503.png\"]','name','name','2023-07-21','name','name','42','name','patient','62386','2023-07-17 23:28:23','2023-07-17 23:28:23');
INSERT INTO doctor_register_portal VALUES('27','joe','William','newyork','newyork','3','5474','2023-07-07','male','joe@gmail.com','joe@gmail.com','5745846','harry 3','545584757','[\"0image1689636849.png\",\"1image1689636849.png\"]','name','name','2023-07-07','name','name','5','name','patient','56963','2023-07-17 23:34:09','2023-07-17 23:34:09');
INSERT INTO doctor_register_portal VALUES('32','john','john','john','john','3','555','2023-07-13','male','newly@gmail.com','newly@gmail.com','154153','newly@gmail.com','58585','[\"0image1689689437.jpeg\",\"1image1689689437.jpeg\"]','newly@gmail.com','newly@gmail.com','2023-07-15','newly@gmail.com','newly@gmail.com','5','newly@gmail.com','patient','16938','2023-07-18 22:10:37','2023-07-18 22:10:37');
INSERT INTO doctor_register_portal VALUES('33','tony','clark','tony','tony','3','4545','2023-07-14','male','tony123@gmail.com','tony123@gmail.com','541545','tony','555','[\"0image1689689544.jpeg\",\"1image1689689544.jpeg\"]','tony','tony','2023-07-21','tony','tony','5','tony','patient','42767','2023-07-18 22:12:24','2023-07-18 22:12:24');
INSERT INTO doctor_register_portal VALUES('34','demo2','demo2','demo2','demo2','3','141','2023-07-07','male','demo2@gmail.com','demo2@gmail.com','35250','demo2','8887','[\"0image1689689844.jpeg\",\"1image1689689844.jpeg\"]','demo2','demo2','2023-07-22','demo2','demo2','5','demo2','patient','91230','2023-07-18 22:17:24','2023-07-18 22:17:24');
INSERT INTO doctor_register_portal VALUES('35','demo4','demo4','demo4','demo4','4','5554','2023-07-20','male','demo4@gmail.com','demo4@gmail.com','555554','dr ezza','889','[\"0image1689690498.jpeg\",\"1image1689690498.jpeg\"]','dr ezza','dr ezza','2023-07-06','dr ezza','dr ezza','50','dr ezza','patient','88219','2023-07-18 22:28:18','2023-07-18 22:28:18');
INSERT INTO doctor_register_portal VALUES('36','DEMO 5','DEMO 5','DEMO 5','DEMO 5','4','515','2023-07-26','male','EZZA1234@GMAIL.COM','EZZA1234@GMAIL.COM','54152','DEMO 5','1120','[\"0image1689711310.png\",\"1image1689711310.png\"]','DEMO 5','DEMO 5','2023-07-19','DEMO 5','DEMO 5','50','DEMO 5','patient','90443','2023-07-18 20:15:10','2023-07-18 20:15:10');
INSERT INTO doctor_register_portal VALUES('37','DEMO 6','DEMO 6','DEMO 6','DEMO 6','3','54154','2023-07-21','male','ABCZY@GMAIL.COM','ABCZY@GMAIL.COM','4752','DEMO 6','4541541','[\"0image1689711423.png\",\"1image1689711423.png\"]','DEMO 6','DEMO 6','2023-07-20','DEMO 6','DEMO 6','50','DEMO 6','patient','42065','2023-07-18 20:17:03','2023-07-18 20:17:03');
INSERT INTO doctor_register_portal VALUES('38','name','name','name','name','3','58485','2023-07-06','female','due@gmailc.com','due@gmailc.com','54584','name','56868484','[\"0image1689714972.png\",\"1image1689714972.png\"]','demo','demo','2023-07-20','demo','demo','55','demo','patient','24699','2023-07-18 21:16:12','2023-07-18 21:16:12');
INSERT INTO doctor_register_portal VALUES('39','demo 6','demo 6','demo 6','demo 6','3','123','2023-07-20','female','demo6@gmail.com','demo6@gmail.com','5784878','demo6','54744515','[\"0image1689717999.png\",\"1image1689717999.png\"]','demo 6','demo 6','2023-07-19','demo 6','demo 6','5','demo 6','patient','95700','2023-07-18 22:06:39','2023-07-18 22:06:39');
INSERT INTO doctor_register_portal VALUES('40','name','name','name','name','4','5654','2023-07-21','male','abc12345@gmail.com','abc12345@gmail.com','245','abc123','19853','[\"0image1689725535.png\",\"1image1689725535.png\"]','abc123','abc123','2023-07-28','abc123','abc123','34','abc123','patient','29297','2023-07-19 00:12:15','2023-07-19 00:12:15');
INSERT INTO doctor_register_portal VALUES('41','name','name','name','name','4','5654','2023-07-21','male','abc12345@gmail.com','abc12345@gmail.com','245','abc123','19853','[\"0image1689725679.png\",\"1image1689725679.png\"]','abc123','abc123','2023-07-28','abc123','abc123','34','abc123','patient','24870','2023-07-19 00:14:39','2023-07-19 00:14:39');
INSERT INTO doctor_register_portal VALUES('42','name','name','name','name','2','254144','2023-07-12','male','xyz123456@gmail.com','xyz123456@gmail.com','4545478','name','53','[\"0image1689727072.png\",\"1image1689727072.png\"]','name','name','2023-07-20','name','name','54','name','patient','36498','2023-07-19 00:37:52','2023-07-19 00:37:52');
INSERT INTO doctor_register_portal VALUES('44','name','name','name','name','3','765477','2023-07-27','male','vonolow8910@ridteam.com','vonolow8910@ridteam.com','5445','dr vinood','545','[\"0image1689772078.jpeg\",\"1image1689772078.jpeg\"]','dr vinood','dr vinood','2023-07-20','dr vinood','dr vinood','60','dr vinood','patient','19710','2023-07-19 21:07:58','2023-07-19 21:07:58');
INSERT INTO doctor_register_portal VALUES('45','harry','potter','harry','harry','2','51544','2023-07-20','male','newyork@gmail.com','newyork@gmail.com','5453','harry','51513','[\"0image1689773112.jpeg\",\"1image1689773112.jpeg\"]','httyv','httyv','2023-07-29','httyv','httyv','5','httyv','patient','45881','2023-07-19 21:25:12','2023-07-19 21:25:12');
INSERT INTO doctor_register_portal VALUES('47','demo 8','demo 8','demo 8','demo 8','3','5414','2023-07-07','male','abc123x@gmail.com','abc123x@gmail.com','5454174','dr ashok','574782','[\"0image1689784195.png\",\"1image1689784195.png\"]','name','name','2023-07-14','name','name','5','name','patient','18173','2023-07-19 16:29:55','2023-07-19 16:29:55');
INSERT INTO doctor_register_portal VALUES('48','harry','potter','demo','demo','3','5454','2023-07-22','male','demo2345@gmail.com','demo2345@gmail.com','8984','name','52','[\"0image1689815897.png\",\"1image1689815897.png\"]','8787','78','2023-07-28','789','87','65','789','patient','83614','2023-07-20 01:18:17','2023-07-20 01:18:17');
INSERT INTO doctor_register_portal VALUES('49','Joseph','Williams','demo name','demo name','2','00000','2023-06-10','male','Joseph.williams@thewebsitedesigns.com','Joseph.williams@thewebsitedesigns.com','19499817532','demo','0123456789','[\"0image1689883726.jpg\",\"1image1689883726.jpg\"]','demo','demo','2021-08-20','demo','demo','69','demo','patient','87407','2023-07-20 20:08:46','2023-07-20 20:08:46');



DROP TABLE IF EXISTS email_templates;

CREATE TABLE `email_templates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `subject` text NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO email_templates VALUES('1','welcome_email','Welcome to Ultra Store','<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Welcome to Ultra Store</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your account is now ready to use. You can now login to your portal using your email and password.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>','','');
INSERT INTO email_templates VALUES('2','order_placed','Your Order Placed Successfully','<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order Placed Successfully</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been placed sucessfully. Your order will be shipped within next 3 business days.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>','','');
INSERT INTO email_templates VALUES('3','order_processing','Your Order Marked as Processing','<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has been processed</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been processed.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>','','');
INSERT INTO email_templates VALUES('4','order_completed','Your Order Marked as Completed','<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has Completed</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has completed.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>','','');
INSERT INTO email_templates VALUES('5','order_canceled','	Your Order Marked as Canceled','<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order has been canceled</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been canceled.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>','','');
INSERT INTO email_templates VALUES('6','order_on_hold','Your Order Marked as On Hold','<table role=\"presentation\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"padding: 20px 0 30px 0;\"><table style=\"border-collapse: collapse; border: 1px solid #cccccc;\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tbody><tr><td style=\"padding: 40px 0 30px 0;\" align=\"center\" bgcolor=\"#1e1e2c\"><img style=\"display: block;\" src=\"https://ultrastore.trickycode.net/company-logo.png\" alt=\"Creating Email Magic.\" width=\"80\" height=\"80\"/></td></tr><tr><td style=\"padding: 40px 30px 40px 30px;\" bgcolor=\"#ffffff\"><table style=\"border-collapse: collapse; height: 95px; width: 100%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr style=\"height: 30px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; height: 30px;\"><h1 style=\"font-size: 24px; margin: 0;\">Your Order Marked as On Hold</h1></td></tr><tr style=\"height: 47px;\"><td style=\"color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;\"><p style=\"margin: 0;\">Hi {name},</p><p style=\"margin: 0;\">Your Order (Order ID:{order_id}) has been hold.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Order ID:{order_id}</p><p style=\"margin: 0;\">Order Status:{order_status}</p><p style=\"margin: 0;\">Payment Status:{payment_status}</p><p style=\"margin: 0;\">Payment Method:{payment_method}</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank you for shopping with us.</p><p style=\"margin: 0;\">&nbsp;</p><p style=\"margin: 0;\">Thank You</p><p style=\"margin: 0;\">Ultra Store</p></td></tr></tbody></table></td></tr><tr><td style=\"padding: 30px 30px;\" bgcolor=\"#1e1e2c\"><table style=\"border-collapse: collapse; width: 99.4769%;\" border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\"><tbody><tr><td style=\"color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;\"><p style=\"margin: 0px; text-align: center;\">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>','','');
INSERT INTO email_templates VALUES('7','order_refunded','Money Refunded','<p>Your Order Money has been refunded.</p>','','');



DROP TABLE IF EXISTS entity_files;

CREATE TABLE `entity_files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `media_id` bigint(20) unsigned NOT NULL,
  `entity_type` varchar(191) NOT NULL,
  `entity_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `entity_files_entity_type_entity_id_index` (`entity_type`,`entity_id`),
  KEY `entity_files_media_id_index` (`media_id`),
  KEY `entity_files_name_index` (`name`),
  CONSTRAINT `entity_files_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS failed_jobs;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS manufacturer;

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacturer` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=939 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO manufacturer VALUES('1','3Diemme','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('6','3I (Biomet)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('7','AB Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('8','ACE Surgical ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('9','ACH Medical /Biogenesis/ G - Diff','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('10','Adin','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('11','ADT Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('12','Advan','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('13','Advance Co.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('14','AGS Medikal / Implance','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('15','AIDI Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('16','Alfa Gate?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('17','All-Guide ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('18','Allhex Implants System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('19','Alliance Global Technology (Anker)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('20','Allmed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('21','Almitech Implant System?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('22','Alpha Bio?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('23','Alpha Dent?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('24','Altiva / Exactech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('25','Altracore','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('26','Amazing Smile Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('27','Amelotech Limited','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('28','American Dental Implant  ADI','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('29','AmerOss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('30','Anthogyr','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('31','AoN','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('32','ARDS?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('33','Argon','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('34','AS Technology?  (Titanium Fix)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('35','Astra Tech (see Dentsply Sirona)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('36','Atoll Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('37','Aurosan Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('38','Avenir','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('39','Avinent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('40','Axelmed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('41','A-Z Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('42','B&B Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('43','B&W?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('44','BASIC Dental Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('45','Baumer','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('46','BEGO Implant Systems','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('47','Bhi Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('48','Biaggini Medical Devices','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('49','Bicon','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('50','Bilimplant / Proimtech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('51','Bio3 Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('52','Bioargen','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('53','BioComp','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('54','Bioconcept','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('55','Biodenta','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('56','BioHex / Biomedical Implant Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('57','BioHorizons','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('58','Bioimplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('59','BioInfinity','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('60','BioLife','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('61','BioLine Dental Implants (Sigal Medical)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('62','Biolink','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('63','Biologitech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('64','BIO-LOK?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('65','Biomain AB','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('66','Biomate Swiss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('67','Bio Micron Transilvania','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('68','Bioner?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('69','Bionica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('70','Bionnovation','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('71','Bioservice srl','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('72','Biost','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('73','Biotec Korum','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('74','Biotech Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('75','Biotem','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('76','Biotype','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('77','Blue Sky Bio?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('78','Bone System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('79','BPI Biologisch Physikalische Implantate','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('80','BrainBase','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('81','Branemark','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('82','BRAT','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('83','Bredent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('84','BT Lock','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('85','BTI','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('86','B&W s.r.l.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('87','Calcitek?  (see Zimmer)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('88','Camlog','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('89','CEA Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('90','Ceradyne','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('91','CeraRoot ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('92','CELL Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('93','Champions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('94','Chaorum & Honorst','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('95','CLC Scientific','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('96','Coastal Implant Technologies','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('97','Condent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('98','Conexao Sistemas de Protese Ltda.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('99','Conmet Ltd.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('100','CORTEX','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('101','Cowell','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('102','Crystal Medical Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('103','CSM','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('104','C-Tech Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('105','Cumdente','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('106','Curasan AG (Riemser)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('107','Den Tack Implants Ltd. (Pyramidion)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('108','Dental Evolutions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('109','Dental Ratio Systems (DRS)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('110','Dentalis Bio Solution','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('111','Dental Tech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('112','Dentatus','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('113','Dentaurum','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('114','Dentegris Deutschland GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('115','Dentfix','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('116','DENTIN Implants Technologies','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('117','Dentis','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('118','Denti System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('119','Dentium?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('120','Dentoflex','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('121','Dentsply Sirona?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('122','Derig','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('123','Dess','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('124','Dicoa [see AmerOss]','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('125','DIF Dental Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('126','DIO?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('127','Ditron','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('128','DMI Innovative Medical Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('129','Drive Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('130','DSI   (Dental Solutions Israel)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('131','DSP Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('132','DX Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('133','DuoDent [see BioLife]','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('134','Dyna Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('135','Easy System Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('136','Eckermann','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('137','Edierre','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('138','Elite Medica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('139','Emfils/Medens','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('140','Endoimplant di Resta Gianpiero','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('141','Equinox Medical Technologies BV','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('142','ESPE (3M)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('143','ETK (Euroteknika)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('144','Evo Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('145','Eureka','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('146','FairImplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('147','FDS76','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('148','Federa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('149','FGM Arcsys','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('150','FIA','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('151','Fixum ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('152','Flotecno','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('153','FMD-Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('154','FMZ (Krugg Henry Schein)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('155','Friadent [see DENTSPLY Sirona]','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('156','Frontier Devices','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('157','FTB Implants (Ferrari Technology)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('158','Full-Tech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('159','Futura Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('160','Galimplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('161','Garbaccio /Bicortical Screw','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('162','GC Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('163','Geass','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('164','General Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('165','Generic Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('166','Ghimas','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('167','Gi Esse Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('168','Glidewell Laboratories?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('169','Global D Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('170','Globetek (See DIO)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('171','Globalwin','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('172','GMI (Global Medical Implants)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('173','Green Implant System Tec','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('174','GT Medical?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('175','Hager & Meisinger','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('176','Hahn Tapered?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('177','HAI-Implantat','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('178','Heraeus Kulzer GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('179','Hi -Tec Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('180','Hiossen?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('181','Huang Liang Biomedical Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('182','Humantech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('183','IBS Implant  (Innobiosurg)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('184','I.Dent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('185','IDI Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('186','IDI Evolution','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('187','IDL Dental Technologies Ltd.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('188','IDO Biotech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('189','IDS Reflect (See Biotech Dental)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('190','IGIMAX','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('191','Ihde Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('192','i-LinQ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('193','Imbionic AG','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('194','Imeti','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('195','IML Swiss Dental Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('196','Implac','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('197','Implacil De Bortoli','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('198','Impladent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('199','Implamed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('200','Implance (see AGS Medikal]','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('201','Implant Depot','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('202','Implanet','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('203','Implant Direct','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('204','Implants Diffusion International','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('205','Implantfort','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('206','Implant Genesis','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('207','Implant Logistics','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('208','Implant Microdent System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('209','Implant Nhakhoa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('210','Implant VEL S.R.L.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('211','Implantswiss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('212','Implantswiss (see Novodent SA)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('213','Implasa-Hochst GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('214','Implay System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('215','Importacion dental / Osteoplus','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('216','Imtec  (see 3M ESPE/IMTEC)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('217','IMZ  (see Titan Implants)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('218','Incermed SA','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('219','indi implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('220','Innova','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('221','INP Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('222','Inspiral','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('223','Intoss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('224','Intra-Lock','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('225','Intra-Lock System Europa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('226','Intraoss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('227','IQ implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('228','iRES','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('229','Ishifuku Metal Industry','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('230','Isomed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('231','ITL Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('232','ITS Italy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('233','J Dental Care','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('234','Jetimplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('235','JMP Dental ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('236','KAT Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('237','Kentec','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('238','Keystone? Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('239','Kinetical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('240','KJ Meditech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('241','Klockner?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('242','Komet Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('243','Kopp Dental Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('244','Kristal','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('245','K.S.I Bauer-Schraube','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('246','Kyocera','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('247','Lasak','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('248','Leader Italia','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('249','Leader Medica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('250','Leone','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('251','Lifecore (see Keystone Dental)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('252','The Little Implant Company?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('253','Loser & Co','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('254','Luna','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('255','Lyra ETK','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('256','MABB','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('257','MaCo International','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('258','Maxillent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('259','Maxon','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('260','Maxtrim','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('261','Maxtron','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('262','McBio','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('263','Mech @ Human','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('264','MED & PLUS','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('265','Medentika   (Rotec)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('266','Medentis','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('267','Medibrex','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('268','Medical Instinct','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('269','Medical Precision Implants (MPI)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('270','Medical Production','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('271','Medical Titanium','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('272','Medigma','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('273','Medline','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('274','MegaGen','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('275','Meisinger Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('276','Meoplant Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('277','Mete\'','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('278','Metoxit','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('279','Micerium S.P.A.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('280','Microfit','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('281','Microtech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('282','Mirell Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('283','MIS','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('284','Miter Incorporated','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('285','ML Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('286','Mode Medikal','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('287','Monoimplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('288','MSDI','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('289','MSI France','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('290','Multysystem','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('291','MyPlant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('292','Nanodent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('293','Nature Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('294','NDI Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('295','Nemris GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('296','Neobiotech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('297','Neodent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('298','NeoKings','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('299','Neoss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('300','New Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('301','Nobel Biocare? -  Branemark?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('302','Nodrill','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('303','Noris Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('304','Notch Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('305','Nova-Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('306','Novamind','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('307','NPS','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('308','Novodent SA / I-system','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('309','NTA Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('310','NTI Implantes','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('311','NucleOss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('312','Nuova GEASS S.r.l.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('313','o.m.t. GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('314','OCO Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('315','Octo Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('316','Odontit','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('317','o.m.t.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('318','Open Cell Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('319','Ora','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('320','Oralplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('321','Oral Iceberg S.L','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('322','Osifx International Ltd. Oy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('323','Ospol AB','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('324','OsseoLink','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('325','Osstem','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('326','Osteocare','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('327','Osteofix Oy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('328','Osteoplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('329','OsteoReady','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('330','OSTEO Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('331','Osteo Ti','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('332','Osteoplus','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('333','OT medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('334','Overmed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('335','Oxtein','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('336','OXY implant (Biomec)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('337','PALTOP?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('338','Paragon?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('339','Paris Implants (Peltier)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('340','Park Dental Research','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('341','Pec Lab','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('342','Pedrazzini Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('343','PerioSeal Inc.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('344','Permedica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('345','PHI (Primary Healing Implant)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('346','Phibo (Defcon Tissue Care)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('347','Phoenix','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('348','Physioplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('349','P-I Branemark Philosophy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('350','Pivot Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('351','Platon Japan','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('352','Precise Implant Systems','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('353','Pressing Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('354','ProClinic?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('355','Prodent Italia','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('356','Pross Implantes / Dabi Atlante','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('357','Prowital / Forestadent Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('358','Prytan Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('359','Q Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('360','Qualibond Implantat','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('361','Quantum BioEngineering Ltd.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('362','Quest','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('363','Radhex','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('364','RadixImplants & Biomaterials','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('365','Radix  (Proekcia Ltd.)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('366','Renew Biocare','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('367','Resista','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('368','Reuter Systems','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('369','Restore? / Sustain?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('370','Rex Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('371','Ritter Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('372','Rosterdent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('373','Rotec (see Medentika)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('374','RusImplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('375','Saddle Implant Technologies','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('376','Safe Implant Surcam','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('377','Safe & Simple','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('378','SAMO Biomedica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('379','Sanatmetal Ltd.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('380','Sargon Dental implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('381','Schutz Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('382','SDS Swiss Dental Solutions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('383','Serf Implanter Innovation','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('384','Serson Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('385','Servo-Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('386','SGS Dental?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('387','Shakleton','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('388','Shinhung','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('389','Shofu','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('390','Sialo Technology Israel','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('391','SIC Invent AG','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('392','Sigdent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('393','Sigma Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('394','Signo Vinces','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('395','Simpact','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('396','Simply Implants?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('397','Simpler Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('398','Singular Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('399','SIN Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('400','Smiletech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('401','SNUCone','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('402','Southern? Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('403','Spiral Tech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('404','Steri-Oss? (see Nobel Biocare)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('405','Sterngold?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('406','Sterngold Dental MOR','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('407','Straumann?   ITI','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('408','Sulzer Calcitek','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('409','SUNRAN','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('410','Surgikor','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('411','Sustain?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('412','Sweden & Martina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('413','Swiss Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('414','Sybron? { see Innova}','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('415','Systhex','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('416','TA-Dent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('417','TAG Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('418','TBR','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('419','Tatum Surgical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('420','TAV Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('421','TBR','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('422','Tecom Implantology (Titanmed)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('423','Tekka','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('424','Tenax Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('425','TFI System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('426','Thommen','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('427','Ticare / Mozo-Grau','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('428','Tidal Spiral','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('429','Timplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('430','Tione','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('431','Tiradix','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('432','Titanium Fix','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('433','Titantec Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('434','Tixxit Gmbh','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('435','Tizio Hybrid Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('436','Top Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('437','TQu4tro Implantes','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('438','Tramonte','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('439','Trate AG','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('440','Tree-Oss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('441','TRI Dental Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('442','Trinon Titanium','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('443','TRP Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('444','TRS Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('445','UFIT Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('446','U-Impl','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('447','Uni-Dental Direct','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('448','Unimic','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('449','Veritas Bioventions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('450','Vitaclinical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('451','Vitane','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('452','Vitzani','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('453','Vulkans','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('454','Warantec','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('455','Wieland Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('456','Winsix Biosafin','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('457','Witar','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('458','Wolf Dental GbR','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('459','Xgate Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('460','YES Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('461','Z- System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('462','Zenitoni','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('463','Zest Dental Solutions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('464','Ziacom / Osseolife','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('465','Zimmer Biomet','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('466','Ziterion Gmbh','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('467','Ziveco','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('468','ZL - Microdent - Attachment Gmbh','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('469','Zuga','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('470','ZV3 - Zircon Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('471',' manufacturer','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('472','3Diemme','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('473','3Dmedica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('474','3I (Biomet)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('475','AB Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('476','ACE Surgical ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('477','ACH Medical /Biogenesis/ G - Diff','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('478','Adin','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('479','ADT Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('480','Advan','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('481','Advance Co.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('482','AGS Medikal / Implance','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('483','AIDI Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('484','Alfa Gate?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('485','All-Guide ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('486','Allhex Implants System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('487','Alliance Global Technology (Anker)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('488','Allmed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('489','Almitech Implant System?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('490','Alpha Bio?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('491','Alpha Dent?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('492','Altiva / Exactech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('493','Altracore','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('494','Amazing Smile Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('495','Amelotech Limited','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('496','American Dental Implant  ADI','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('497','AmerOss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('498','Anthogyr','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('499','AoN','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('500','ARDS?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('501','Argon','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('502','AS Technology?  (Titanium Fix)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('503','Astra Tech (see Dentsply Sirona)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('504','Atoll Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('505','Aurosan Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('506','Avenir','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('507','Avinent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('508','Axelmed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('509','A-Z Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('510','B&B Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('511','B&W?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('512','BASIC Dental Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('513','Baumer','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('514','BEGO Implant Systems','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('515','Bhi Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('516','Biaggini Medical Devices','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('517','Bicon','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('518','Bilimplant / Proimtech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('519','Bio3 Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('520','Bioargen','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('521','BioComp','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('522','Bioconcept','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('523','Biodenta','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('524','BioHex / Biomedical Implant Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('525','BioHorizons','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('526','Bioimplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('527','BioInfinity','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('528','BioLife','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('529','BioLine Dental Implants (Sigal Medical)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('530','Biolink','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('531','Biologitech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('532','BIO-LOK?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('533','Biomain AB','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('534','Biomate Swiss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('535','Bio Micron Transilvania','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('536','Bioner?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('537','Bionica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('538','Bionnovation','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('539','Bioservice srl','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('540','Biost','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('541','Biotec Korum','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('542','Biotech Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('543','Biotem','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('544','Biotype','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('545','Blue Sky Bio?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('546','Bone System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('547','BPI Biologisch Physikalische Implantate','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('548','BrainBase','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('549','Branemark','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('550','BRAT','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('551','Bredent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('552','BT Lock','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('553','BTI','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('554','B&W s.r.l.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('555','Calcitek?  (see Zimmer)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('556','Camlog','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('557','CEA Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('558','Ceradyne','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('559','CeraRoot ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('560','CELL Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('561','Champions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('562','Chaorum & Honorst','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('563','CLC Scientific','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('564','Coastal Implant Technologies','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('565','Condent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('566','Conexao Sistemas de Protese Ltda.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('567','Conmet Ltd.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('568','CORTEX','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('569','Cowell','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('570','Crystal Medical Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('571','CSM','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('572','C-Tech Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('573','Cumdente','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('574','Curasan AG (Riemser)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('575','Den Tack Implants Ltd. (Pyramidion)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('576','Dental Evolutions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('577','Dental Ratio Systems (DRS)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('578','Dentalis Bio Solution','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('579','Dental Tech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('580','Dentatus','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('581','Dentaurum','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('582','Dentegris Deutschland GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('583','Dentfix','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('584','DENTIN Implants Technologies','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('585','Dentis','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('586','Denti System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('587','Dentium?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('588','Dentoflex','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('589','Dentsply Sirona?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('590','Derig','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('591','Dess','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('592','Dicoa [see AmerOss]','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('593','DIF Dental Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('594','DIO?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('595','Ditron','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('596','DMI Innovative Medical Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('597','Drive Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('598','DSI   (Dental Solutions Israel)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('599','DSP Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('600','DX Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('601','DuoDent [see BioLife]','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('602','Dyna Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('603','Easy System Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('604','Eckermann','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('605','Edierre','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('606','Elite Medica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('607','Emfils/Medens','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('608','Endoimplant di Resta Gianpiero','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('609','Equinox Medical Technologies BV','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('610','ESPE (3M)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('611','ETK (Euroteknika)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('612','Evo Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('613','Eureka','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('614','FairImplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('615','FDS76','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('616','Federa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('617','FGM Arcsys','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('618','FIA','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('619','Fixum ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('620','Flotecno','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('621','FMD-Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('622','FMZ (Krugg Henry Schein)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('623','Friadent [see DENTSPLY Sirona]','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('624','Frontier Devices','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('625','FTB Implants (Ferrari Technology)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('626','Full-Tech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('627','Futura Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('628','Galimplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('629','Garbaccio /Bicortical Screw','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('630','GC Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('631','Geass','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('632','General Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('633','Generic Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('634','Ghimas','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('635','Gi Esse Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('636','Glidewell Laboratories?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('637','Global D Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('638','Globetek (See DIO)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('639','Globalwin','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('640','GMI (Global Medical Implants)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('641','Green Implant System Tec','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('642','GT Medical?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('643','Hager & Meisinger','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('644','Hahn Tapered?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('645','HAI-Implantat','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('646','Heraeus Kulzer GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('647','Hi -Tec Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('648','Hiossen?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('649','Huang Liang Biomedical Technology','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('650','Humantech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('651','IBS Implant  (Innobiosurg)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('652','I.Dent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('653','IDI Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('654','IDI Evolution','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('655','IDL Dental Technologies Ltd.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('656','IDO Biotech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('657','IDS Reflect (See Biotech Dental)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('658','IGIMAX','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('659','Ihde Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('660','i-LinQ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('661','Imbionic AG','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('662','Imeti','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('663','IML Swiss Dental Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('664','Implac','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('665','Implacil De Bortoli','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('666','Impladent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('667','Implamed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('668','Implance (see AGS Medikal]','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('669','Implant Depot','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('670','Implanet','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('671','Implant Direct','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('672','Implants Diffusion International','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('673','Implantfort','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('674','Implant Genesis','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('675','Implant Logistics','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('676','Implant Microdent System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('677','Implant Nhakhoa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('678','Implant VEL S.R.L.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('679','Implantswiss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('680','Implantswiss (see Novodent SA)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('681','Implasa-Hochst GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('682','Implay System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('683','Importacion dental / Osteoplus','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('684','Imtec  (see 3M ESPE/IMTEC)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('685','IMZ  (see Titan Implants)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('686','Incermed SA','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('687','indi implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('688','Innova','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('689','INP Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('690','Inspiral','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('691','Intoss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('692','Intra-Lock','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('693','Intra-Lock System Europa','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('694','Intraoss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('695','IQ implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('696','iRES','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('697','Ishifuku Metal Industry','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('698','Isomed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('699','ITL Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('700','ITS Italy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('701','J Dental Care','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('702','Jetimplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('703','JMP Dental ','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('704','KAT Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('705','Kentec','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('706','Keystone? Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('707','Kinetical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('708','KJ Meditech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('709','Klockner?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('710','Komet Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('711','Kopp Dental Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('712','Kristal','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('713','K.S.I Bauer-Schraube','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('714','Kyocera','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('715','Lasak','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('716','Leader Italia','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('717','Leader Medica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('718','Leone','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('719','Lifecore (see Keystone Dental)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('720','The Little Implant Company?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('721','Loser & Co','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('722','Luna','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('723','Lyra ETK','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('724','MABB','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('725','MaCo International','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('726','Maxillent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('727','Maxon','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('728','Maxtrim','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('729','Maxtron','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('730','McBio','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('731','Mech @ Human','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('732','MED & PLUS','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('733','Medentika   (Rotec)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('734','Medentis','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('735','Medibrex','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('736','Medical Instinct','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('737','Medical Precision Implants (MPI)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('738','Medical Production','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('739','Medical Titanium','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('740','Medigma','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('741','Medline','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('742','MegaGen','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('743','Meisinger Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('744','Meoplant Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('745','Mete\'','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('746','Metoxit','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('747','Micerium S.P.A.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('748','Microfit','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('749','Microtech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('750','Mirell Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('751','MIS','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('752','Miter Incorporated','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('753','ML Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('754','Mode Medikal','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('755','Monoimplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('756','MSDI','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('757','MSI France','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('758','Multysystem','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('759','MyPlant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('760','Nanodent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('761','Nature Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('762','NDI Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('763','Nemris GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('764','Neobiotech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('765','Neodent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('766','NeoKings','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('767','Neoss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('768','New Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('769','Nobel Biocare? -  Branemark?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('770','Nodrill','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('771','Noris Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('772','Notch Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('773','Nova-Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('774','Novamind','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('775','NPS','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('776','Novodent SA / I-system','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('777','NTA Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('778','NTI Implantes','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('779','NucleOss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('780','Nuova GEASS S.r.l.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('781','o.m.t. GmbH','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('782','OCO Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('783','Octo Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('784','Odontit','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('785','o.m.t.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('786','Open Cell Biomedical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('787','Ora','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('788','Oralplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('789','Oral Iceberg S.L','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('790','Osifx International Ltd. Oy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('791','Ospol AB','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('792','OsseoLink','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('793','Osstem','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('794','Osteocare','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('795','Osteofix Oy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('796','Osteoplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('797','OsteoReady','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('798','OSTEO Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('799','Osteo Ti','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('800','Osteoplus','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('801','OT medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('802','Overmed','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('803','Oxtein','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('804','OXY implant (Biomec)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('805','PALTOP?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('806','Paragon?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('807','Paris Implants (Peltier)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('808','Park Dental Research','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('809','Pec Lab','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('810','Pedrazzini Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('811','PerioSeal Inc.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('812','Permedica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('813','PHI (Primary Healing Implant)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('814','Phibo (Defcon Tissue Care)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('815','Phoenix','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('816','Physioplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('817','P-I Branemark Philosophy','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('818','Pivot Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('819','Platon Japan','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('820','Precise Implant Systems','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('821','Pressing Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('822','ProClinic?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('823','Prodent Italia','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('824','Pross Implantes / Dabi Atlante','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('825','Prowital / Forestadent Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('826','Prytan Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('827','Q Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('828','Qualibond Implantat','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('829','Quantum BioEngineering Ltd.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('830','Quest','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('831','Radhex','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('832','RadixImplants & Biomaterials','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('833','Radix  (Proekcia Ltd.)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('834','Renew Biocare','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('835','Resista','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('836','Reuter Systems','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('837','Restore? / Sustain?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('838','Rex Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('839','Ritter Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('840','Rosterdent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('841','Rotec (see Medentika)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('842','RusImplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('843','Saddle Implant Technologies','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('844','Safe Implant Surcam','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('845','Safe & Simple','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('846','SAMO Biomedica','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('847','Sanatmetal Ltd.','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('848','Sargon Dental implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('849','Schutz Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('850','SDS Swiss Dental Solutions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('851','Serf Implanter Innovation','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('852','Serson Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('853','Servo-Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('854','SGS Dental?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('855','Shakleton','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('856','Shinhung','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('857','Shofu','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('858','Sialo Technology Israel','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('859','SIC Invent AG','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('860','Sigdent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('861','Sigma Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('862','Signo Vinces','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('863','Simpact','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('864','Simply Implants?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('865','Simpler Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('866','Singular Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('867','SIN Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('868','Smiletech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('869','SNUCone','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('870','Southern? Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('871','Spiral Tech','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('872','Steri-Oss? (see Nobel Biocare)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('873','Sterngold?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('874','Sterngold Dental MOR','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('875','Straumann?   ITI','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('876','Sulzer Calcitek','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('877','SUNRAN','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('878','Surgikor','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('879','Sustain?','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('880','Sweden & Martina','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('881','Swiss Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('882','Sybron? { see Innova}','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('883','Systhex','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('884','TA-Dent','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('885','TAG Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('886','TBR','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('887','Tatum Surgical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('888','TAV Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('889','TBR','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('890','Tecom Implantology (Titanmed)','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('891','Tekka','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('892','Tenax Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('893','TFI System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('894','Thommen','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('895','Ticare / Mozo-Grau','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('896','Tidal Spiral','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('897','Timplant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('898','Tione','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('899','Tiradix','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('900','Titanium Fix','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('901','Titantec Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('902','Tixxit Gmbh','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('903','Tizio Hybrid Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('904','Top Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('905','TQu4tro Implantes','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('906','Tramonte','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('907','Trate AG','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('908','Tree-Oss','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('909','TRI Dental Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('910','Trinon Titanium','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('911','TRP Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('912','TRS Implants','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('913','UFIT Implant','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('914','U-Impl','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('915','Uni-Dental Direct','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('916','Unimic','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('917','Veritas Bioventions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('918','Vitaclinical','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('919','Vitane','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('920','Vitzani','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('921','Vulkans','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('922','Warantec','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('923','Wieland Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('924','Winsix Biosafin','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('925','Witar','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('926','Wolf Dental GbR','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('927','Xgate Dental','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('928','YES Implant System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('929','Z- System','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('930','Zenitoni','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('931','Zest Dental Solutions','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('932','Ziacom / Osseolife','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('933','Zimmer Biomet','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('934','Ziterion Gmbh','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('935','Ziveco','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('936','ZL - Microdent - Attachment Gmbh','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('937','Zuga','0000-00-00 00:00:00','0000-00-00 00:00:00');
INSERT INTO manufacturer VALUES('938','ZV3 - Zircon Medical','0000-00-00 00:00:00','0000-00-00 00:00:00');



DROP TABLE IF EXISTS media;

CREATE TABLE `media` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(191) NOT NULL,
  `file_path` varchar(191) NOT NULL,
  `file_type` varchar(191) NOT NULL,
  `file_size` varchar(191) NOT NULL,
  `file_extension` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS meta_data;

CREATE TABLE `meta_data` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `entity_type` varchar(191) NOT NULL,
  `entity_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `meta_data_entity_type_entity_id_index` (`entity_type`,`entity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS meta_data_translations;

CREATE TABLE `meta_data_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `meta_data_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `meta_data_translations_meta_data_id_locale_unique` (`meta_data_id`,`locale`),
  CONSTRAINT `meta_data_translations_meta_data_id_foreign` FOREIGN KEY (`meta_data_id`) REFERENCES `meta_data` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS migrations;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO migrations VALUES('1','2014_10_12_000000_create_users_table','1');
INSERT INTO migrations VALUES('2','2014_10_12_100000_create_password_resets_table','1');
INSERT INTO migrations VALUES('3','2018_11_12_152015_create_email_templates_table','1');
INSERT INTO migrations VALUES('4','2019_08_19_000000_create_failed_jobs_table','1');
INSERT INTO migrations VALUES('5','2019_09_01_080940_create_settings_table','1');
INSERT INTO migrations VALUES('6','2020_07_02_145857_create_database_backups_table','1');
INSERT INTO migrations VALUES('7','2020_07_06_142817_create_roles_table','1');
INSERT INTO migrations VALUES('8','2020_07_06_143240_create_permissions_table','1');
INSERT INTO migrations VALUES('9','2020_07_25_061549_create_currency_table','1');
INSERT INTO migrations VALUES('10','2020_07_29_095329_create_tax_classes_table','1');
INSERT INTO migrations VALUES('11','2020_07_29_095340_create_tax_classes_translation_table','1');
INSERT INTO migrations VALUES('12','2020_07_29_095348_create_tax_rates_table','1');
INSERT INTO migrations VALUES('13','2020_07_29_095357_create_tax_rates_translation_table','1');
INSERT INTO migrations VALUES('14','2020_07_30_074942_create_media_table','1');
INSERT INTO migrations VALUES('15','2020_07_30_152834_create_tags_table','1');
INSERT INTO migrations VALUES('16','2020_07_30_153031_create_tags_translation_table','1');
INSERT INTO migrations VALUES('17','2020_07_31_135138_create_brands_table','1');
INSERT INTO migrations VALUES('18','2020_07_31_140257_create_brands_translation_table','1');
INSERT INTO migrations VALUES('19','2020_07_31_145819_create_entity_files_table','1');
INSERT INTO migrations VALUES('20','2020_08_11_135105_create_category_table','1');
INSERT INTO migrations VALUES('21','2020_08_11_135531_create_category_translation_table','1');
INSERT INTO migrations VALUES('22','2020_08_23_160650_create_products_table','1');
INSERT INTO migrations VALUES('23','2020_08_23_161219_create_product_translations_table','1');
INSERT INTO migrations VALUES('24','2020_08_23_163548_create_product_categories_table','1');
INSERT INTO migrations VALUES('25','2020_08_23_163600_create_product_tags_table','1');
INSERT INTO migrations VALUES('26','2020_08_24_152430_create_product_variations_table','1');
INSERT INTO migrations VALUES('27','2020_08_24_152831_create_product_variation_items_table','1');
INSERT INTO migrations VALUES('28','2020_08_24_171314_create_product_variation_prices_table','1');
INSERT INTO migrations VALUES('29','2020_08_24_171315_create_coupons_table','1');
INSERT INTO migrations VALUES('30','2020_08_24_171316_create_coupon_translations_table','1');
INSERT INTO migrations VALUES('31','2020_08_24_171317_create_coupon_products_table','1');
INSERT INTO migrations VALUES('32','2020_08_24_171318_create_coupon_categories_table','1');
INSERT INTO migrations VALUES('33','2020_08_24_171319_create_meta_data_table','1');
INSERT INTO migrations VALUES('34','2020_08_24_171320_create_meta_data_translations_table','1');
INSERT INTO migrations VALUES('35','2020_09_02_145504_create_pages_table','1');
INSERT INTO migrations VALUES('36','2020_09_02_145952_create_page_translations_table','1');
INSERT INTO migrations VALUES('37','2020_09_04_084255_create_navigations_table','1');
INSERT INTO migrations VALUES('38','2020_09_04_084515_create_navigation_items_table','1');
INSERT INTO migrations VALUES('39','2020_09_04_084719_create_navigation_item_translations_table','1');
INSERT INTO migrations VALUES('40','2020_11_08_153213_create_customer_addresses_table','1');
INSERT INTO migrations VALUES('41','2020_11_11_172141_create_orders_table','1');
INSERT INTO migrations VALUES('42','2020_11_11_172303_create_order_products_table','1');
INSERT INTO migrations VALUES('43','2020_11_11_172521_create_order_taxes_table','1');
INSERT INTO migrations VALUES('44','2020_11_13_142034_create_transactions_table','1');
INSERT INTO migrations VALUES('45','2021_01_22_171533_create_wish_lists_table','1');
INSERT INTO migrations VALUES('46','2021_01_24_064834_create_product_comments_table','1');
INSERT INTO migrations VALUES('47','2021_01_27_104627_create_product_reviews_table','1');
INSERT INTO migrations VALUES('48','2021_03_22_071324_create_setting_translations','1');
INSERT INTO migrations VALUES('49','2021_04_26_071834_add_city_to_customer_addresses_table','1');
INSERT INTO migrations VALUES('50','2021_04_26_074440_change_exchange_rate_length_to_currency_table','1');



DROP TABLE IF EXISTS models;

CREATE TABLE `models` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `models` text DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO models VALUES('1','Piano di Taglio','1','2023-07-14 18:14:08','2023-07-14 18:14:08');
INSERT INTO models VALUES('2','SP4','1','2023-07-14 18:14:56','2023-07-14 18:14:56');
INSERT INTO models VALUES('3','SP4R','1','2023-07-14 18:15:06','2023-07-14 18:15:06');
INSERT INTO models VALUES('4','Vite osteosintesi','1','2023-07-14 18:15:19','2023-07-14 18:15:19');



DROP TABLE IF EXISTS navigation_item_translations;

CREATE TABLE `navigation_item_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `navigation_item_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `navigation_item_translations_navigation_item_id_locale_unique` (`navigation_item_id`,`locale`),
  CONSTRAINT `navigation_item_translations_navigation_item_id_foreign` FOREIGN KEY (`navigation_item_id`) REFERENCES `navigation_items` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO navigation_item_translations VALUES('1','1','English','Home','2021-03-15 15:58:36','2021-03-15 15:58:36');
INSERT INTO navigation_item_translations VALUES('2','2','English','Shop','2021-03-15 15:59:23','2021-03-15 15:59:23');
INSERT INTO navigation_item_translations VALUES('3','3','English','Brands','2021-03-15 15:59:37','2021-03-15 15:59:37');
INSERT INTO navigation_item_translations VALUES('4','4','English','About Us','2021-03-15 15:59:59','2021-03-15 15:59:59');
INSERT INTO navigation_item_translations VALUES('5','5','English','Contact Us','2021-03-15 16:00:13','2021-03-15 16:00:13');
INSERT INTO navigation_item_translations VALUES('9','9','English','Electronic Devices','2021-03-17 09:34:06','2021-03-17 09:34:06');
INSERT INTO navigation_item_translations VALUES('10','10','English','Mobile','2021-03-17 09:37:14','2021-03-17 09:37:14');
INSERT INTO navigation_item_translations VALUES('11','11','English','Laptop','2021-03-17 09:37:30','2021-03-17 09:37:30');
INSERT INTO navigation_item_translations VALUES('12','12','English','Cameras','2021-03-17 09:37:44','2021-03-17 09:37:44');
INSERT INTO navigation_item_translations VALUES('13','13','English','Tablets','2021-03-17 09:37:58','2021-03-17 09:37:58');
INSERT INTO navigation_item_translations VALUES('14','14','English','Desktop Components','2021-03-17 09:38:48','2021-03-17 09:38:48');
INSERT INTO navigation_item_translations VALUES('15','15','English','Motherboard','2021-03-17 09:39:09','2021-03-17 09:39:09');
INSERT INTO navigation_item_translations VALUES('16','16','English','Health & Beauty','2021-03-17 09:40:01','2021-03-17 09:40:01');
INSERT INTO navigation_item_translations VALUES('17','17','English','Hair Care','2021-03-17 09:41:06','2021-03-17 09:41:06');
INSERT INTO navigation_item_translations VALUES('18','18','English','Skin Care','2021-03-17 09:47:26','2021-03-17 09:47:26');
INSERT INTO navigation_item_translations VALUES('19','19','English','Food Supplements','2021-03-17 09:47:54','2021-03-17 09:47:54');
INSERT INTO navigation_item_translations VALUES('20','20','English','Men\'s Fashion','2021-03-17 09:48:19','2021-03-17 09:48:19');
INSERT INTO navigation_item_translations VALUES('21','21','English','T-Shirts','2021-03-17 09:48:49','2021-03-17 09:48:49');
INSERT INTO navigation_item_translations VALUES('22','22','English','Shirts','2021-03-17 09:49:01','2021-03-17 09:49:01');
INSERT INTO navigation_item_translations VALUES('23','23','English','Jeans','2021-03-17 09:49:13','2021-03-17 09:49:13');
INSERT INTO navigation_item_translations VALUES('24','24','English','Women\'s Fashion','2021-03-17 10:04:48','2021-03-17 10:04:48');
INSERT INTO navigation_item_translations VALUES('25','25','English','Sports & Outdoor','2021-03-17 10:05:12','2021-03-17 10:05:12');
INSERT INTO navigation_item_translations VALUES('26','26','English','Software','2021-03-17 10:05:26','2021-03-17 10:05:26');
INSERT INTO navigation_item_translations VALUES('27','27','English','Women\'s Bags','2021-03-17 10:06:36','2021-03-17 10:06:36');
INSERT INTO navigation_item_translations VALUES('28','28','English','Women\'s Shoes','2021-03-17 10:06:57','2021-03-17 10:06:57');
INSERT INTO navigation_item_translations VALUES('29','29','English','Kurti','2021-03-17 10:07:13','2021-03-17 10:07:13');
INSERT INTO navigation_item_translations VALUES('30','30','English','About Us','2021-03-17 12:47:37','2021-03-17 12:47:37');
INSERT INTO navigation_item_translations VALUES('31','31','English','FAQ','2021-03-17 12:47:51','2021-03-17 12:47:51');
INSERT INTO navigation_item_translations VALUES('32','32','English','Terms & Conditions','2021-03-17 12:48:06','2021-03-17 12:48:06');
INSERT INTO navigation_item_translations VALUES('33','33','English','Contact Us','2021-03-17 12:53:24','2021-03-17 12:53:24');
INSERT INTO navigation_item_translations VALUES('34','34','English','Privacy Policy','2021-03-17 12:56:16','2021-03-17 12:56:16');
INSERT INTO navigation_item_translations VALUES('35','35','English','Payment Methods','2021-03-17 13:36:27','2021-03-17 13:36:27');
INSERT INTO navigation_item_translations VALUES('36','36','English','Money Back','2021-03-17 13:36:46','2021-03-17 13:36:46');
INSERT INTO navigation_item_translations VALUES('37','37','English','Return','2021-03-17 13:37:00','2021-03-17 13:37:00');
INSERT INTO navigation_item_translations VALUES('38','38','English','Shipping','2021-03-17 13:37:53','2021-03-17 13:37:53');
INSERT INTO navigation_item_translations VALUES('39','39','English','Watch & Accessories','2021-03-22 14:41:16','2021-03-22 14:41:16');
INSERT INTO navigation_item_translations VALUES('40','40','English','Tv & Home Applicances','2021-03-22 14:41:40','2021-03-22 14:41:40');
INSERT INTO navigation_item_translations VALUES('41','41','English','Home & LifeStyle','2021-03-22 14:41:59','2021-03-22 14:41:59');



DROP TABLE IF EXISTS navigation_items;

CREATE TABLE `navigation_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `navigation_id` bigint(20) unsigned NOT NULL,
  `type` varchar(20) NOT NULL,
  `page_id` bigint(20) unsigned DEFAULT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `url` varchar(191) DEFAULT NULL,
  `icon` varchar(191) DEFAULT NULL,
  `target` varchar(191) NOT NULL,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `position` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `css_class` varchar(191) DEFAULT NULL,
  `css_id` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `navigation_items_parent_id_foreign` (`parent_id`),
  KEY `navigation_items_category_id_foreign` (`category_id`),
  KEY `navigation_items_page_id_foreign` (`page_id`),
  KEY `navigation_items_navigation_id_index` (`navigation_id`),
  CONSTRAINT `navigation_items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `navigation_items_navigation_id_foreign` FOREIGN KEY (`navigation_id`) REFERENCES `navigations` (`id`) ON DELETE CASCADE,
  CONSTRAINT `navigation_items_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE,
  CONSTRAINT `navigation_items_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `navigation_items` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO navigation_items VALUES('1','1','dynamic_url','','','/','<i class=\"ti-home\"></i>','_self','','1','1','','','2021-03-15 15:58:36','2021-03-17 07:44:18');
INSERT INTO navigation_items VALUES('2','1','dynamic_url','','','/shop','<i class=\"ti-shopping-cart\"></i>','_self','','2','1','','','2021-03-15 15:59:23','2021-03-17 07:51:45');
INSERT INTO navigation_items VALUES('3','1','dynamic_url','','','/brands','<i class=\"ti-apple\"></i>','_self','','3','1','','','2021-03-15 15:59:37','2021-03-17 07:52:58');
INSERT INTO navigation_items VALUES('4','1','page','1','','','<i class=\"ti-user\"></i>','_self','','4','1','','','2021-03-15 15:59:59','2021-03-17 07:53:24');
INSERT INTO navigation_items VALUES('5','1','page','2','','','<i class=\"ti-email\"></i>','_self','','5','1','','','2021-03-15 16:00:13','2021-03-17 07:54:08');
INSERT INTO navigation_items VALUES('9','2','category','','1','','','_self','','1','1','','','2021-03-17 09:34:06','2021-03-17 09:38:56');
INSERT INTO navigation_items VALUES('10','2','category','','7','','','_self','9','2','1','','','2021-03-17 09:37:14','2021-03-17 09:38:56');
INSERT INTO navigation_items VALUES('11','2','category','','8','','','_self','9','3','1','','','2021-03-17 09:37:30','2021-03-17 09:38:56');
INSERT INTO navigation_items VALUES('12','2','category','','9','','','_self','9','4','1','','','2021-03-17 09:37:44','2021-03-17 09:38:56');
INSERT INTO navigation_items VALUES('13','2','category','','10','','','_self','9','5','1','','','2021-03-17 09:37:58','2021-03-17 09:38:56');
INSERT INTO navigation_items VALUES('14','2','category','','2','','','_self','','2','1','','','2021-03-17 09:38:48','2021-03-17 09:38:56');
INSERT INTO navigation_items VALUES('15','2','category','','25','','','_self','14','3','1','','','2021-03-17 09:39:09','2021-03-17 09:39:17');
INSERT INTO navigation_items VALUES('16','2','category','','3','','','_self','','3','1','','','2021-03-17 09:40:01','2021-03-17 09:40:13');
INSERT INTO navigation_items VALUES('17','2','category','','11','','','_self','16','4','1','','','2021-03-17 09:41:06','2021-03-17 09:47:08');
INSERT INTO navigation_items VALUES('18','2','category','','12','','','_self','16','5','1','','','2021-03-17 09:47:26','2021-03-17 09:47:34');
INSERT INTO navigation_items VALUES('19','2','category','','13','','','_self','16','6','1','','','2021-03-17 09:47:54','2021-03-17 09:48:24');
INSERT INTO navigation_items VALUES('20','2','category','','4','','','_self','','4','1','','','2021-03-17 09:48:19','2021-03-17 09:48:24');
INSERT INTO navigation_items VALUES('21','2','category','','14','','','_self','20','5','1','','','2021-03-17 09:48:49','2021-03-17 09:49:23');
INSERT INTO navigation_items VALUES('22','2','category','','15','','','_self','20','6','1','','','2021-03-17 09:49:01','2021-03-17 09:49:24');
INSERT INTO navigation_items VALUES('23','2','category','','16','','','_self','20','7','1','','','2021-03-17 09:49:13','2021-03-17 09:49:24');
INSERT INTO navigation_items VALUES('24','2','category','','5','','','_self','','5','1','','','2021-03-17 10:04:48','2021-03-17 10:06:17');
INSERT INTO navigation_items VALUES('25','2','category','','6','','','_self','','6','1','','','2021-03-17 10:05:12','2021-03-17 10:06:17');
INSERT INTO navigation_items VALUES('26','2','category','','24','','','_self','','7','1','','','2021-03-17 10:05:26','2021-03-17 10:06:17');
INSERT INTO navigation_items VALUES('27','2','category','','18','','','_self','24','6','1','','','2021-03-17 10:06:36','2021-03-17 10:07:26');
INSERT INTO navigation_items VALUES('28','2','category','','19','','','_self','24','7','1','','','2021-03-17 10:06:57','2021-03-17 10:07:26');
INSERT INTO navigation_items VALUES('29','2','category','','20','','','_self','24','8','1','','','2021-03-17 10:07:13','2021-03-17 10:07:26');
INSERT INTO navigation_items VALUES('30','3','page','1','','','','_self','','1','1','','','2021-03-17 12:47:37','2021-03-17 12:56:21');
INSERT INTO navigation_items VALUES('31','3','page','5','','','','_self','','2','1','','','2021-03-17 12:47:51','2021-03-17 12:56:21');
INSERT INTO navigation_items VALUES('32','3','page','6','','','','_self','','3','1','','','2021-03-17 12:48:06','2021-03-17 12:56:21');
INSERT INTO navigation_items VALUES('33','3','page','2','','','','_self','','5','1','','','2021-03-17 12:53:24','2021-03-17 12:56:22');
INSERT INTO navigation_items VALUES('34','3','page','10','','','','_self','','4','1','','','2021-03-17 12:56:16','2021-03-17 12:56:22');
INSERT INTO navigation_items VALUES('35','4','page','7','','','','_self','','9999','1','','','2021-03-17 13:36:27','2021-03-17 13:36:27');
INSERT INTO navigation_items VALUES('36','4','page','8','','','','_self','','9999','1','','','2021-03-17 13:36:46','2021-03-17 13:36:46');
INSERT INTO navigation_items VALUES('37','4','page','9','','','','_self','','9999','1','','','2021-03-17 13:37:00','2021-03-17 13:37:00');
INSERT INTO navigation_items VALUES('38','4','page','11','','','','_self','','9999','1','','','2021-03-17 13:37:53','2021-03-17 13:37:53');
INSERT INTO navigation_items VALUES('39','2','category','','28','','','_self','','8','1','','','2021-03-22 14:41:16','2021-03-22 14:42:04');
INSERT INTO navigation_items VALUES('40','2','category','','29','','','_self','','9','1','','','2021-03-22 14:41:40','2021-03-22 14:42:04');
INSERT INTO navigation_items VALUES('41','2','category','','30','','','_self','','10','1','','','2021-03-22 14:41:59','2021-03-22 14:42:04');



DROP TABLE IF EXISTS navigations;

CREATE TABLE `navigations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO navigations VALUES('1','Primary Menu','1','2020-11-16 12:30:14','2021-03-17 06:54:42');
INSERT INTO navigations VALUES('2','Category Menu','1','2021-03-17 06:55:09','2021-03-17 06:55:09');
INSERT INTO navigations VALUES('3','Footer Menu 1','1','2021-03-17 12:47:10','2021-03-17 12:47:10');
INSERT INTO navigations VALUES('4','Footer Menu 2','1','2021-03-17 13:34:08','2021-03-17 13:34:08');



DROP TABLE IF EXISTS order_products;

CREATE TABLE `order_products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `product_attributes` text DEFAULT NULL,
  `unit_price` decimal(10,2) unsigned NOT NULL,
  `qty` int(11) NOT NULL,
  `line_total` decimal(10,2) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_products_order_id_foreign` (`order_id`),
  CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS order_taxes;

CREATE TABLE `order_taxes` (
  `order_id` bigint(20) unsigned NOT NULL,
  `tax_rate_id` bigint(20) unsigned NOT NULL,
  `amount` decimal(15,4) unsigned NOT NULL,
  PRIMARY KEY (`order_id`,`tax_rate_id`),
  KEY `order_taxes_tax_rate_id_foreign` (`tax_rate_id`),
  CONSTRAINT `order_taxes_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  CONSTRAINT `order_taxes_tax_rate_id_foreign` FOREIGN KEY (`tax_rate_id`) REFERENCES `tax_rates` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS orders;

CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint(20) DEFAULT NULL,
  `customer_name` varchar(191) NOT NULL,
  `customer_email` varchar(191) NOT NULL,
  `customer_phone` varchar(191) NOT NULL,
  `billing_name` varchar(191) NOT NULL,
  `billing_city` varchar(191) DEFAULT NULL,
  `billing_state` varchar(191) NOT NULL,
  `billing_post_code` varchar(191) NOT NULL,
  `billing_country` varchar(191) NOT NULL,
  `billing_address` text NOT NULL,
  `shipping_name` varchar(191) NOT NULL,
  `shipping_city` varchar(191) DEFAULT NULL,
  `shipping_state` varchar(191) NOT NULL,
  `shipping_post_code` varchar(191) NOT NULL,
  `shipping_country` varchar(191) NOT NULL,
  `shipping_address` text NOT NULL,
  `sub_total` decimal(10,2) unsigned NOT NULL,
  `shipping_method` varchar(191) NOT NULL,
  `shipping_cost` decimal(10,2) unsigned NOT NULL,
  `coupon_id` bigint(20) DEFAULT NULL,
  `discount` decimal(10,2) unsigned NOT NULL,
  `total` decimal(10,2) unsigned NOT NULL,
  `payment_method` varchar(191) DEFAULT NULL,
  `currency` varchar(191) NOT NULL,
  `currency_rate` decimal(10,2) NOT NULL,
  `locale` varchar(191) NOT NULL,
  `status` varchar(30) NOT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS packages;

CREATE TABLE `packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` text DEFAULT NULL,
  `value` decimal(10,2) unsigned DEFAULT NULL,
  `fee_time` text DEFAULT NULL,
  `patience_registeration_time_limit` text DEFAULT NULL,
  `button_name` text DEFAULT NULL,
  `no_of_slots` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO packages VALUES('1','Individual','40.00','Slots','life time patient registration','buy now','1','','2023-07-11 20:52:10');
INSERT INTO packages VALUES('2','Silver','37.00','Slots','life time patient registration','buy now','30','2023-06-23 21:26:46','2023-07-11 20:51:57');
INSERT INTO packages VALUES('3','Gold','33.00','Slots','life time patient registration','buy now','70','2023-06-23 21:26:49','2023-07-11 20:51:42');
INSERT INTO packages VALUES('4','Diamond','30.00','Slots','life time patient registration','buy now','100','2023-06-23 21:26:52','2023-07-19 19:59:21');



DROP TABLE IF EXISTS page_translations;

CREATE TABLE `page_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `page_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `title` text NOT NULL,
  `body` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_translations_page_id_locale_unique` (`page_id`,`locale`),
  CONSTRAINT `page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO page_translations VALUES('1','1','English','About US','<h2>What is Lorem Ipsum?</h2>
<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>','2021-03-15 10:28:46','2021-03-15 10:28:46');
INSERT INTO page_translations VALUES('2','2','English','Contact Us','','2021-03-15 10:29:26','2021-03-15 10:29:26');
INSERT INTO page_translations VALUES('5','5','English','FAQ','<p>This is FAQ Page</p>','2021-03-17 12:43:29','2021-03-17 12:43:29');
INSERT INTO page_translations VALUES('6','6','English','Terms & Conditions','<p>This is Terms and Condition Page</p>','2021-03-17 12:45:00','2021-03-17 12:45:00');
INSERT INTO page_translations VALUES('7','7','English','Payment Methods','<p>This is payment method page</p>','2021-03-17 12:46:06','2021-03-17 12:46:06');
INSERT INTO page_translations VALUES('8','8','English','Money Back','<p>This is money back page</p>','2021-03-17 12:46:23','2021-03-17 12:46:23');
INSERT INTO page_translations VALUES('9','9','English','Returns','<p>This is return page</p>','2021-03-17 12:46:38','2021-03-17 12:46:38');
INSERT INTO page_translations VALUES('10','10','English','Privacy Policy','<p>This is privacy policy page</p>','2021-03-17 12:46:52','2021-03-17 12:46:52');
INSERT INTO page_translations VALUES('11','11','English','Shipping','<p>This is Shipping Page</p>','2021-03-17 13:37:25','2021-03-17 13:37:25');



DROP TABLE IF EXISTS pages;

CREATE TABLE `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `template` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO pages VALUES('1','about-us','1','','2021-03-15 10:28:45','2021-03-15 10:28:45');
INSERT INTO pages VALUES('2','contact-us','1','contact','2021-03-15 10:29:26','2021-03-15 10:29:26');
INSERT INTO pages VALUES('5','faq','1','','2021-03-17 12:43:29','2021-03-17 12:43:29');
INSERT INTO pages VALUES('6','terms-&-conditions','1','','2021-03-17 12:45:00','2021-03-17 12:45:00');
INSERT INTO pages VALUES('7','payment-methods','1','','2021-03-17 12:46:06','2021-03-17 12:46:06');
INSERT INTO pages VALUES('8','money-back','1','','2021-03-17 12:46:23','2021-03-17 12:46:23');
INSERT INTO pages VALUES('9','returns','1','','2021-03-17 12:46:38','2021-03-17 12:46:38');
INSERT INTO pages VALUES('10','privacy-policy','1','','2021-03-17 12:46:52','2021-03-17 12:46:52');
INSERT INTO pages VALUES('11','shipping','1','','2021-03-17 13:37:25','2021-03-17 13:37:25');



DROP TABLE IF EXISTS password_resets;

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS permissions;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) NOT NULL,
  `permission` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS product_categories;

CREATE TABLE `product_categories` (
  `product_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`),
  KEY `product_categories_category_id_foreign` (`category_id`),
  CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS product_comments;

CREATE TABLE `product_comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `parent_id` bigint(20) unsigned DEFAULT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_comments_user_id_foreign` (`user_id`),
  KEY `product_comments_product_id_foreign` (`product_id`),
  KEY `product_comments_parent_id_foreign` (`parent_id`),
  CONSTRAINT `product_comments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `product_comments` (`id`) ON DELETE CASCADE,
  CONSTRAINT `product_comments_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `product_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS product_reviews;

CREATE TABLE `product_reviews` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `rating` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_reviews_user_id_foreign` (`user_id`),
  KEY `product_reviews_product_id_foreign` (`product_id`),
  CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS product_tags;

CREATE TABLE `product_tags` (
  `product_id` bigint(20) unsigned NOT NULL,
  `tag_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`product_id`,`tag_id`),
  KEY `product_tags_tag_id_foreign` (`tag_id`),
  CONSTRAINT `product_tags_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `product_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS product_translations;

CREATE TABLE `product_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` text NOT NULL,
  `description` longtext NOT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS product_variation_items;

CREATE TABLE `product_variation_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `variation_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_variation_items_variation_id_foreign` (`variation_id`),
  CONSTRAINT `product_variation_items_variation_id_foreign` FOREIGN KEY (`variation_id`) REFERENCES `product_variations` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS product_variation_prices;

CREATE TABLE `product_variation_prices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `option` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `special_price` decimal(10,2) unsigned DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_variation_prices_product_id_foreign` (`product_id`),
  CONSTRAINT `product_variation_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS product_variations;

CREATE TABLE `product_variations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_variations_product_id_foreign` (`product_id`),
  CONSTRAINT `product_variations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS products;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint(20) unsigned DEFAULT NULL,
  `tax_class_id` bigint(20) unsigned DEFAULT NULL,
  `slug` varchar(191) NOT NULL,
  `product_type` varchar(191) NOT NULL,
  `price` decimal(10,2) unsigned NOT NULL,
  `special_price` decimal(10,2) unsigned DEFAULT NULL,
  `special_price_start` date DEFAULT NULL,
  `special_price_end` date DEFAULT NULL,
  `sku` varchar(191) DEFAULT NULL,
  `manage_stock` tinyint(1) NOT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `in_stock` tinyint(1) NOT NULL,
  `viewed` bigint(20) unsigned NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL,
  `featured_tag` varchar(30) DEFAULT NULL,
  `digital_file` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_brand_id_foreign` (`brand_id`),
  CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS register_portal;

CREATE TABLE `register_portal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` text DEFAULT NULL,
  `lname` text NOT NULL,
  `streesAddress` text NOT NULL,
  `city` text NOT NULL,
  `State` text NOT NULL,
  `zipCode` int(11) NOT NULL,
  `Birthday` text NOT NULL,
  `Gender` text NOT NULL,
  `email` text NOT NULL,
  `confirm_email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `implant_placing_doctor_name` text NOT NULL,
  `selectImage` text NOT NULL,
  `restoring_dentist` text NOT NULL,
  `practice_restoring_dentist` text NOT NULL,
  `date_of_implant_restoration` date NOT NULL,
  `type_of_abutment` text NOT NULL,
  `current_dentist` text NOT NULL,
  `different_above` int(11) NOT NULL,
  `status` text NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;




DROP TABLE IF EXISTS roles;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS setting_translations;

CREATE TABLE `setting_translations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `setting_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO setting_translations VALUES('1','95','English','NO IMPLANT RESTORATION IS COMPLETE WITHOUT REGISTERING WITH <span style=\"color:#00b0f0\">id2™</span>','2023-06-17 01:54:23','2023-07-19 19:20:24');
INSERT INTO setting_translations VALUES('2','96','English','Don’t Agonize. Recognize.','2023-06-17 01:54:23','2023-07-19 19:20:24');
INSERT INTO setting_translations VALUES('3','97','English','','2023-06-17 01:54:23','2023-07-14 22:59:21');
INSERT INTO setting_translations VALUES('4','98','English','<p>www.id2.com</p>','2023-06-17 01:54:23','2023-07-14 22:59:21');
INSERT INTO setting_translations VALUES('5','99','English','<h5 data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\">About</h5>
<div class=\"id2-text\">Us</div>','2023-06-17 01:54:23','2023-07-19 19:20:25');
INSERT INTO setting_translations VALUES('6','100','English','<h2 data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">id2&trade;: The Official Dental Implant Registry&trade;</h2>','2023-06-17 01:54:23','2023-07-19 19:20:25');
INSERT INTO setting_translations VALUES('7','101','English','<h5 data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\">Years of Experience</h5>','2023-06-17 01:54:23','2023-06-17 01:54:23');
INSERT INTO setting_translations VALUES('8','102','English','<p class=\"para-1\" data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet,</p>','2023-06-17 01:54:23','2023-06-17 01:54:23');
INSERT INTO setting_translations VALUES('9','103','English','','2023-06-17 01:54:23','2023-07-14 23:45:56');
INSERT INTO setting_translations VALUES('10','104','English','<h5 data-aos=\"slide-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\"><span class=\"id2-text\">id2</span> Dental Industry copy</h5>
<h2 data-aos=\"slide-left\" data-aos-duration=\"1000\" data-aos-delay=\"200\">Dental implant surgery</h2>
<p data-aos=\"slide-left\" data-aos-duration=\"1000\" data-aos-delay=\"200\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui dolores illo dicta obcaecati modi praesentium rerum aperiam recusandae dolore, similique sequi totam sint non beatae reprehenderit architecto accusantium et!</p>','2023-06-17 01:54:23','2023-06-17 01:56:58');
INSERT INTO setting_translations VALUES('11','105','English','<h2>Our Services</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque <br />Lorem, ipsum dolor sit amet consectetur</p>','2023-06-17 01:54:23','2023-06-17 01:56:58');
INSERT INTO setting_translations VALUES('12','106','English','<h5>Why Choose us</h5>
<h2>DENTAL IMPLANT <br />SOLUTIONS</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, iure.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui dolores illo dicta obcaecati modi praesentium rerum aperiam recusandae dolore, similique sequi totam sint non beatae reprehenderit architecto accusantium et!</p>','2023-06-17 01:54:23','2023-06-17 01:56:58');
INSERT INTO setting_translations VALUES('13','107','English','','2023-06-17 01:54:23','2023-06-17 01:54:23');
INSERT INTO setting_translations VALUES('14','108','English','<h5>get in touch</h5>','2023-06-17 01:54:23','2023-06-17 01:58:17');
INSERT INTO setting_translations VALUES('15','109','English','<h3>Contact Us</h3>','2023-06-17 01:54:23','2023-06-17 01:58:17');
INSERT INTO setting_translations VALUES('16','110','English','<h5 data-aos=\"slide-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\">Testimonials</h5>
<h2 class=\"testimonial_heading\" data-aos=\"slide-left\" data-aos-duration=\"1000\" data-aos-delay=\"200\">What</h2>
<div class=\"out_client\">our client</div>
<h2 class=\"testimonial_heading\" data-aos=\"slide-left\" data-aos-duration=\"1000\" data-aos-delay=\"200\">say&rsquo;s</h2>
<p data-aos=\"slide-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quod id, quae vero velit laborum quos praesentium ullam odit</p>','2023-06-17 01:58:17','2023-06-17 02:24:58');
INSERT INTO setting_translations VALUES('17','111','English','','2023-06-17 04:02:33','2023-06-17 04:02:33');
INSERT INTO setting_translations VALUES('18','121','English','About Us','2023-06-19 20:08:44','2023-06-19 20:08:44');
INSERT INTO setting_translations VALUES('19','122','English','<h5 data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\">welcome to</h5>
<div class=\"id2-text\">id2</div>
<h3 data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\"><strong>The Official Dental Implant Registry</strong><strong>&Ograve;</strong></h3>','2023-06-19 20:08:44','2023-07-12 03:39:42');
INSERT INTO setting_translations VALUES('20','123','English','<p>Since then, there has been a massive expansion of dental implant manufacturers that amount to over 300+ manufacturers globally across 25+ countries, well over a 2000+ Brands/Models, and 5000+ interfaces/diameters. Long-term studies indicate dental implant success rates are above 97%. However, problems do arise in 10% of the implant cases ranging from loosening or fracturing of an implant screw or abutment. The dental implant travels with the patient wherever they go; but without the dental professional. In our many decades of experience within the implant industry, we continue to witness the confusion and frustration when it comes to resolving these type of implant complications, which requires the proper identification of the implant brands in a patient&rsquo;s mouth.&nbsp;</p>','2023-06-19 20:08:44','2023-07-14 23:44:08');
INSERT INTO setting_translations VALUES('21','124','English','<p style=\"margin-top: 18%;\">Implant dentistry has come a long way since the early designs and technology of implants from the early 1980s.</p>
<p>Many people can identify the designer brand of clothing they are wearing, the make and model of their car, and what version of smartphone they carry with them at all times.&nbsp; All of those items are temporary. However, a dental implant is likely to remain in a person&rsquo;s mouth their entire life; and most patients leave a dental office with no <em>permanent</em> documentation of which brand of dental implant was placed in their mouth.</p>
<p>id2 takes a <strong>PROACTIVE</strong> approach by requiring all dental professionals, laboratories, and patients to register all pertinent implant information used that will forever be accessible on the secure id2 dental implant registry portal.</p>
<p style=\"text-align: center;\"><strong>Recognize. Don&rsquo;t Agonize</strong></p>
<p>&nbsp;</p>
<p>This information is securely stored and encrypted on a HIPAA compliant website server. If complications ever arise, the patient can easily access the information on their phone or computer to provide to the dentist to help resolve the issue.</p>','2023-06-19 20:08:44','2023-07-14 23:45:06');
INSERT INTO setting_translations VALUES('22','128','English','100','2023-06-19 21:33:40','2023-06-19 22:16:26');
INSERT INTO setting_translations VALUES('23','129','English','40','2023-06-19 22:16:38','2023-07-12 03:43:14');
INSERT INTO setting_translations VALUES('24','130','English','Patient’s Portal','2023-06-19 23:26:49','2023-06-19 23:26:49');
INSERT INTO setting_translations VALUES('25','134','English','<h2>Patient <span class=\"span\">Register</span> Portal</h2>','2023-06-19 23:38:24','2023-06-19 23:39:14');
INSERT INTO setting_translations VALUES('26','135','English','Doctor’s Portal','2023-06-19 23:42:50','2023-06-19 23:42:50');
INSERT INTO setting_translations VALUES('27','136','English','<h2>Doctor&nbsp;<span class=\"span\">Register</span> Portal</h2>','2023-06-19 23:42:50','2023-06-19 23:48:43');
INSERT INTO setting_translations VALUES('28','138','English','Addional Implant<small class=\"id2-text\">(s)</small>','2023-06-20 00:05:06','2023-06-20 00:06:57');
INSERT INTO setting_translations VALUES('29','139','English','<h2>Doctor&nbsp;<span class=\"span\">Additional</span> Implement</h2>','2023-06-20 00:05:06','2023-06-20 00:11:05');
INSERT INTO setting_translations VALUES('30','143','English','Testimonials','2023-06-26 20:12:53','2023-06-26 20:13:06');
INSERT INTO setting_translations VALUES('31','145','English','Contact Us','2023-06-27 03:31:56','2023-06-27 03:33:55');
INSERT INTO setting_translations VALUES('32','147','English','FAQs','2023-06-27 03:32:01','2023-06-27 03:32:01');
INSERT INTO setting_translations VALUES('33','151','English','<span>GET IN</span> TOUCH','2023-06-27 03:40:03','2023-06-27 03:40:21');
INSERT INTO setting_translations VALUES('34','152','English','<span>GET IN</span> TOUCH','2023-07-11 02:16:47','2023-07-11 02:16:47');



DROP TABLE IF EXISTS settings;

CREATE TABLE `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO settings VALUES('1','mail_type','smtp','','');
INSERT INTO settings VALUES('2','backend_direction','ltr','','');
INSERT INTO settings VALUES('3','language','English','','2023-07-21 18:24:51');
INSERT INTO settings VALUES('4','email_verification','disabled','','');
INSERT INTO settings VALUES('5','company_name','id2','2023-06-05 23:14:50','2023-07-21 18:24:51');
INSERT INTO settings VALUES('6','site_title','id2 - Dental Registery','2023-06-05 23:14:50','2023-07-21 18:24:51');
INSERT INTO settings VALUES('7','phone','5684785484','2023-06-05 23:14:50','2023-07-21 18:24:51');
INSERT INTO settings VALUES('8','email','admin@gmail.com','2023-06-05 23:14:50','2023-07-21 18:24:51');
INSERT INTO settings VALUES('9','timezone','Africa/Addis_Ababa','2023-06-05 23:14:50','2023-07-21 18:24:51');
INSERT INTO settings VALUES('68','primary_menu','1','2021-03-16 16:45:35','2021-03-22 07:39:21');
INSERT INTO settings VALUES('69','category_menu','2','2021-03-16 16:45:35','2021-03-22 07:39:21');
INSERT INTO settings VALUES('70','footer_menu_1_title','Information','2021-03-16 16:45:35','2021-03-22 07:52:49');
INSERT INTO settings VALUES('71','footer_menu_1','3','2021-03-16 16:45:35','2021-03-22 07:39:22');
INSERT INTO settings VALUES('72','footer_menu_2_title','Customer Service','2021-03-16 16:45:35','2021-03-22 08:00:36');
INSERT INTO settings VALUES('73','footer_menu_2','4','2021-03-16 16:45:35','2021-03-22 07:39:22');
INSERT INTO settings VALUES('74','footer_about_us','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.','2021-03-16 16:49:23','2021-03-17 11:36:51');
INSERT INTO settings VALUES('75','copyright_text','Copyright © 2020 <a href=\"#\" target=\"_blank\">Tricky Code</a>  -  All Rights Reserved.','2021-03-16 16:49:23','2021-03-17 11:36:51');
INSERT INTO settings VALUES('77','meta_keywords','shop, online store, online shop','2021-03-17 14:08:50','2021-03-17 14:08:50');
INSERT INTO settings VALUES('78','meta_description','Online Shopping','2021-03-17 14:08:50','2021-03-17 14:08:50');
INSERT INTO settings VALUES('79','service_1_title','FREE SHIPING','2021-03-18 07:33:35','2021-03-22 08:03:01');
INSERT INTO settings VALUES('80','service_1_sub_title','Free Shipping Over 100','2021-03-18 07:33:35','2021-03-27 07:53:29');
INSERT INTO settings VALUES('81','service_1_icon','<i class=\"ti-rocket\"></i>','2021-03-18 07:33:35','2021-03-22 08:03:03');
INSERT INTO settings VALUES('82','service_2_title','FREE RETURN','2021-03-18 07:33:35','2021-03-22 08:03:04');
INSERT INTO settings VALUES('83','service_2_sub_title','Within 30 days returns','2021-03-18 07:33:35','2021-03-22 08:03:04');
INSERT INTO settings VALUES('84','service_2_icon','<i class=\"ti-reload\"></i>','2021-03-18 07:33:35','2021-03-22 08:03:04');
INSERT INTO settings VALUES('85','service_3_title','SUCURE PAYMENT','2021-03-18 07:33:37','2021-03-22 08:03:04');
INSERT INTO settings VALUES('86','service_3_sub_title','100% secure payment','2021-03-18 07:33:38','2021-03-22 08:03:05');
INSERT INTO settings VALUES('87','service_3_icon','<i class=\"ti-lock\"></i>','2021-03-18 07:33:38','2021-03-22 08:03:06');
INSERT INTO settings VALUES('88','service_4_title','BEST PEICE','2021-03-18 07:33:38','2021-03-22 08:03:06');
INSERT INTO settings VALUES('89','service_4_sub_title','Guaranteed price','2021-03-18 07:33:38','2021-03-22 08:03:06');
INSERT INTO settings VALUES('90','service_4_icon','<i class=\"ti-tag\"></i>','2021-03-18 07:33:38','2021-03-22 08:03:06');
INSERT INTO settings VALUES('91','hero_title','<span>UP TO 30% OFF</span> MacBook','2021-03-30 21:41:43','2021-03-30 21:41:43');
INSERT INTO settings VALUES('92','hero_content','The Apple M1 chip gives the 13‑inch MacBook Pro speed and power beyond belief. With up to 2.8x CPU performance. Up to 5x the graphics speed. ','2021-03-30 21:41:43','2021-03-30 21:50:49');
INSERT INTO settings VALUES('93','hero_button_text','Shop Now','2021-03-30 21:41:43','2021-03-30 21:41:43');
INSERT INTO settings VALUES('94','hero_button_link','#','2021-03-30 21:41:43','2021-03-30 21:41:43');
INSERT INTO settings VALUES('95','banner_first_heading','NO IMPLANT RESTORATION IS COMPLETE WITHOUT REGISTERING WITH <span style=\"color:#00b0f0\">id2™</span>','2023-06-17 01:54:23','2023-07-19 19:20:24');
INSERT INTO settings VALUES('96','banner_second_heading','Don’t Agonize. Recognize.','2023-06-17 01:54:23','2023-07-19 19:20:24');
INSERT INTO settings VALUES('97','banner_content','','2023-06-17 01:54:23','2023-07-14 22:59:21');
INSERT INTO settings VALUES('98','side_content','<p>www.id2.com</p>','2023-06-17 01:54:23','2023-07-14 22:59:21');
INSERT INTO settings VALUES('99','welcome_heading','<h5 data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\">About</h5>
<div class=\"id2-text\">Us</div>','2023-06-17 01:54:23','2023-07-19 19:20:25');
INSERT INTO settings VALUES('100','dental_heading','<h2 data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">id2&trade;: The Official Dental Implant Registry&trade;</h2>','2023-06-17 01:54:23','2023-07-19 19:20:25');
INSERT INTO settings VALUES('101','year_of_experience','<h5 data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\">Years of Experience</h5>','2023-06-17 01:54:23','2023-06-17 01:54:23');
INSERT INTO settings VALUES('102','year_of_experience_content','<p class=\"para-1\" data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed Lorem ipsum dolor sit amet, consectetur adipisicing Lorem ipsum dolor sit amet,</p>','2023-06-17 01:54:23','2023-06-17 01:54:23');
INSERT INTO settings VALUES('103','bottom_banner_right_content','','2023-06-17 01:54:23','2023-07-14 23:45:56');
INSERT INTO settings VALUES('104','id2_dental_industry','<h5 data-aos=\"slide-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\"><span class=\"id2-text\">id2</span> Dental Industry copy</h5>
<h2 data-aos=\"slide-left\" data-aos-duration=\"1000\" data-aos-delay=\"200\">Dental implant surgery</h2>
<p data-aos=\"slide-left\" data-aos-duration=\"1000\" data-aos-delay=\"200\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui dolores illo dicta obcaecati modi praesentium rerum aperiam recusandae dolore, similique sequi totam sint non beatae reprehenderit architecto accusantium et!</p>','2023-06-17 01:54:23','2023-06-17 01:56:58');
INSERT INTO settings VALUES('105','our_services','<h2>Our Services</h2>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque <br />Lorem, ipsum dolor sit amet consectetur</p>','2023-06-17 01:54:23','2023-06-17 01:56:58');
INSERT INTO settings VALUES('106','why_choose_content_us','<h5>Why Choose us</h5>
<h2>DENTAL IMPLANT <br />SOLUTIONS</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, iure.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum qui dolores illo dicta obcaecati modi praesentium rerum aperiam recusandae dolore, similique sequi totam sint non beatae reprehenderit architecto accusantium et!</p>','2023-06-17 01:54:23','2023-06-17 01:56:58');
INSERT INTO settings VALUES('107','testimonial_heading','','2023-06-17 01:54:23','2023-06-17 01:54:23');
INSERT INTO settings VALUES('108','get_in_touch_heading','<h5>get in touch</h5>','2023-06-17 01:54:23','2023-06-17 01:58:17');
INSERT INTO settings VALUES('109','contact_heading','<h3>Contact Us</h3>','2023-06-17 01:54:23','2023-06-17 01:58:17');
INSERT INTO settings VALUES('110','testimonial_content','<h5 data-aos=\"slide-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\">Testimonials</h5>
<h2 class=\"testimonial_heading\" data-aos=\"slide-left\" data-aos-duration=\"1000\" data-aos-delay=\"200\">What</h2>
<div class=\"out_client\">our client</div>
<h2 class=\"testimonial_heading\" data-aos=\"slide-left\" data-aos-duration=\"1000\" data-aos-delay=\"200\">say&rsquo;s</h2>
<p data-aos=\"slide-right\" data-aos-duration=\"1000\" data-aos-delay=\"200\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque quod id, quae vero velit laborum quos praesentium ullam odit</p>','2023-06-17 01:58:17','2023-06-17 02:24:58');
INSERT INTO settings VALUES('111','id2_dental_industry_content','','2023-06-17 04:02:33','2023-06-17 04:02:33');
INSERT INTO settings VALUES('112','banner_home_img','file_64adca43ad735.jpg','2023-06-17 04:02:33','2023-07-12 00:31:47');
INSERT INTO settings VALUES('113','banner_img','file_648d06e3e3c71.png','2023-06-17 04:02:33','2023-06-17 04:05:39');
INSERT INTO settings VALUES('114','about_img','file_648d06e3f2169.png','2023-06-17 04:02:33','2023-06-17 04:05:39');
INSERT INTO settings VALUES('115','back_services_image','file_648d06e3f2a6b.jpg','2023-06-17 04:02:33','2023-06-17 04:05:39');
INSERT INTO settings VALUES('116','back_sergury','file_64b96c4fc3c80.jpg','2023-06-17 04:05:39','2023-07-20 20:18:07');
INSERT INTO settings VALUES('117','contact_back_img','file_648d06e400373.png','2023-06-17 04:05:40','2023-06-17 04:05:40');
INSERT INTO settings VALUES('118','back_testimonial','file_648d074f7a54f.jpg','2023-06-17 04:07:27','2023-06-17 04:07:27');
INSERT INTO settings VALUES('119','about_us_back_img','file_648d0bfaa6cf1.jpg','2023-06-17 04:27:22','2023-06-17 04:27:22');
INSERT INTO settings VALUES('120','brand_image','file_648d0cce656e3.png','2023-06-17 04:30:54','2023-06-17 04:30:54');
INSERT INTO settings VALUES('121','banner_heading','About Us','2023-06-19 20:08:44','2023-06-19 20:08:44');
INSERT INTO settings VALUES('122','bottom_banner_heading','<h5 data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\">welcome to</h5>
<div class=\"id2-text\">id2</div>
<h3 data-aos=\"slide-right\" data-aos-delay=\"50\" data-aos-duration=\"1000\"><strong>The Official Dental Implant Registry</strong><strong>&Ograve;</strong></h3>','2023-06-19 20:08:44','2023-07-12 03:39:42');
INSERT INTO settings VALUES('123','bottom_banner_left_content','<p>Since then, there has been a massive expansion of dental implant manufacturers that amount to over 300+ manufacturers globally across 25+ countries, well over a 2000+ Brands/Models, and 5000+ interfaces/diameters. Long-term studies indicate dental implant success rates are above 97%. However, problems do arise in 10% of the implant cases ranging from loosening or fracturing of an implant screw or abutment. The dental implant travels with the patient wherever they go; but without the dental professional. In our many decades of experience within the implant industry, we continue to witness the confusion and frustration when it comes to resolving these type of implant complications, which requires the proper identification of the implant brands in a patient&rsquo;s mouth.&nbsp;</p>','2023-06-19 20:08:44','2023-07-14 23:44:08');
INSERT INTO settings VALUES('124','aboutus_last_content','<p style=\"margin-top: 18%;\">Implant dentistry has come a long way since the early designs and technology of implants from the early 1980s.</p>
<p>Many people can identify the designer brand of clothing they are wearing, the make and model of their car, and what version of smartphone they carry with them at all times.&nbsp; All of those items are temporary. However, a dental implant is likely to remain in a person&rsquo;s mouth their entire life; and most patients leave a dental office with no <em>permanent</em> documentation of which brand of dental implant was placed in their mouth.</p>
<p>id2 takes a <strong>PROACTIVE</strong> approach by requiring all dental professionals, laboratories, and patients to register all pertinent implant information used that will forever be accessible on the secure id2 dental implant registry portal.</p>
<p style=\"text-align: center;\"><strong>Recognize. Don&rsquo;t Agonize</strong></p>
<p>&nbsp;</p>
<p>This information is securely stored and encrypted on a HIPAA compliant website server. If complications ever arise, the patient can easily access the information on their phone or computer to provide to the dentist to help resolve the issue.</p>','2023-06-19 20:08:44','2023-07-14 23:45:06');
INSERT INTO settings VALUES('125','about_banner_background_img','file_64add3e72b254.jpg','2023-06-19 20:11:48','2023-07-12 01:12:55');
INSERT INTO settings VALUES('126','about_banner_img','file_64908e498a367.png','2023-06-19 20:11:48','2023-06-19 20:20:09');
INSERT INTO settings VALUES('127','bottom_background_img','file_64908e498a924.jpg','2023-06-19 20:14:51','2023-06-19 20:20:09');
INSERT INTO settings VALUES('128','counter_number','100','2023-06-19 21:33:40','2023-06-19 22:16:26');
INSERT INTO settings VALUES('129','counter_number_about','40','2023-06-19 22:16:38','2023-07-12 03:43:14');
INSERT INTO settings VALUES('130','potential_register_banner_heading','Patient’s Portal','2023-06-19 23:26:49','2023-06-19 23:26:49');
INSERT INTO settings VALUES('131','patience_register_header_img','file_6490ba093f3f9.png','2023-06-19 23:26:49','2023-06-19 23:26:49');
INSERT INTO settings VALUES('132','patience_register_header_imgbanner_img','file_6490ba87b758b.png','2023-06-19 23:26:49','2023-06-19 23:28:55');
INSERT INTO settings VALUES('133','patience_register_banner_img','file_6490baaf4ec46.png','2023-06-19 23:29:35','2023-06-19 23:29:35');
INSERT INTO settings VALUES('134','patient_register_registeration_heading','<h2>Patient <span class=\"span\">Register</span> Portal</h2>','2023-06-19 23:38:24','2023-06-19 23:39:14');
INSERT INTO settings VALUES('135','doctor_register_banner_heading','Doctor’s Portal','2023-06-19 23:42:50','2023-06-19 23:42:50');
INSERT INTO settings VALUES('136','doctor_register_registeration_heading','<h2>Doctor&nbsp;<span class=\"span\">Register</span> Portal</h2>','2023-06-19 23:42:50','2023-06-19 23:48:43');
INSERT INTO settings VALUES('137','doctor_register_banner_img','file_6490bf2b0d221.png','2023-06-19 23:42:50','2023-06-19 23:48:43');
INSERT INTO settings VALUES('138','additional_implement_banner_heading','Addional Implant<small class=\"id2-text\">(s)</small>','2023-06-20 00:05:06','2023-06-20 00:06:57');
INSERT INTO settings VALUES('139','additional_implement_heading','<h2>Doctor&nbsp;<span class=\"span\">Additional</span> Implement</h2>','2023-06-20 00:05:06','2023-06-20 00:11:05');
INSERT INTO settings VALUES('140','additional_implement_banner_img','file_6490c3584b44d.png','2023-06-20 00:06:32','2023-06-20 00:06:32');
INSERT INTO settings VALUES('141','additional_implement_header_img','file_6490c57ae52f3.png','2023-06-20 00:15:38','2023-06-20 00:15:38');
INSERT INTO settings VALUES('142','doctor_register_header_img','file_6490c5ae9c89c.png','2023-06-20 00:16:30','2023-06-20 00:16:30');
INSERT INTO settings VALUES('143','testimonial_banner_heading','Testimonials','2023-06-26 20:12:53','2023-06-26 20:13:06');
INSERT INTO settings VALUES('144','testimonial_banner_img','file_64adcbddde698.jpg','2023-06-26 20:12:53','2023-07-12 00:38:37');
INSERT INTO settings VALUES('145','contact_us_banner_heading','Contact Us','2023-06-27 03:31:56','2023-06-27 03:33:55');
INSERT INTO settings VALUES('146','contact_banner_img','file_649a2e48df8fc.png','2023-06-27 03:31:56','2023-06-27 03:33:12');
INSERT INTO settings VALUES('147','faq_banner_heading','FAQs','2023-06-27 03:32:01','2023-06-27 03:32:01');
INSERT INTO settings VALUES('148','faq_banner_img','file_64ac87fc1913c.png','2023-06-27 03:32:01','2023-07-11 01:36:44');
INSERT INTO settings VALUES('149','contact_us_background_img','file_64adcbcc2738a.jpg','2023-06-27 03:33:12','2023-07-12 00:38:20');
INSERT INTO settings VALUES('150','faq_background_img','file_64adcb990c85f.jpg','2023-06-27 03:33:26','2023-07-12 00:37:29');
INSERT INTO settings VALUES('151','faq_heading','<span>GET IN</span> TOUCH','2023-06-27 03:40:03','2023-06-27 03:40:21');
INSERT INTO settings VALUES('152','after_contact_heading','<span>GET IN</span> TOUCH','2023-07-11 02:16:47','2023-07-11 02:16:47');
INSERT INTO settings VALUES('153','logo','logo.png','2023-07-14 20:02:38','2023-07-14 20:02:38');
INSERT INTO settings VALUES('154','favicon','file_64b17faf38376.png','2023-07-14 20:02:39','2023-07-14 20:02:39');
INSERT INTO settings VALUES('155','address','','2023-07-21 18:24:51','2023-07-21 18:24:51');



DROP TABLE IF EXISTS slots_data;

CREATE TABLE `slots_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `no_of_slots` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `registration_time` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO slots_data VALUES('21','35','50','25','title','life time patient registration','2023-07-14 22:00:24','2023-07-14 22:00:24');
INSERT INTO slots_data VALUES('22','35','50','25','title','life time patient registration','2023-07-14 22:00:26','2023-07-14 22:00:26');
INSERT INTO slots_data VALUES('23','35','50','25','title','life time patient registration','2023-07-14 22:00:27','2023-07-14 22:00:27');
INSERT INTO slots_data VALUES('24','35','50','25','title','life time patient registration','2023-07-14 22:00:27','2023-07-14 22:00:27');
INSERT INTO slots_data VALUES('25','35','50','25','title','life time patient registration','2023-07-14 22:00:27','2023-07-14 22:00:27');
INSERT INTO slots_data VALUES('26','35','50','25','title','life time patient registration','2023-07-14 22:00:28','2023-07-14 22:00:28');
INSERT INTO slots_data VALUES('27','35','50','25','title','life time patient registration','2023-07-14 22:00:28','2023-07-14 22:00:28');
INSERT INTO slots_data VALUES('28','35','50','25','title','life time patient registration','2023-07-14 22:00:43','2023-07-14 22:00:43');
INSERT INTO slots_data VALUES('30','37','50','25','title','life time patient registration','2023-07-14 22:13:49','2023-07-14 22:13:49');
INSERT INTO slots_data VALUES('31','38','50','25','title','life time patient registration','2023-07-14 23:49:44','2023-07-14 23:49:44');
INSERT INTO slots_data VALUES('35','5','50','4','title','life time patient registration','2023-07-15 01:05:56','2023-07-15 01:05:56');
INSERT INTO slots_data VALUES('36','39','50','25','title','life time patient registration','2023-07-15 01:15:55','2023-07-15 01:15:55');
INSERT INTO slots_data VALUES('37','38','50','25','title','1 life time patient registration','2023-07-18 01:21:13','2023-07-18 01:21:13');
INSERT INTO slots_data VALUES('38','38','50','25','title','1 life time patient registration','2023-07-18 01:21:39','2023-07-18 01:21:39');
INSERT INTO slots_data VALUES('39','38','50','25','title','1 life time patient registration','2023-07-18 01:21:58','2023-07-18 01:21:58');
INSERT INTO slots_data VALUES('40','38','50','20','title','1 life time patient registratio','2023-07-18 01:28:51','2023-07-18 01:28:51');
INSERT INTO slots_data VALUES('45','42','50','25','title','1 life time patient registration','2023-07-18 02:23:58','2023-07-18 02:23:58');
INSERT INTO slots_data VALUES('46','50','50','25','title','life time patient registration','2023-07-19 01:26:36','2023-07-19 01:26:36');
INSERT INTO slots_data VALUES('48','5','50','3','title','1 life time patient registration','2023-07-20 00:27:40','2023-07-20 00:27:40');
INSERT INTO slots_data VALUES('56','5','50','25','title','life time patient registration','2023-07-19 19:43:25','2023-07-19 19:43:25');
INSERT INTO slots_data VALUES('57','64','40','1','Individual','1 life time patient registration','2023-07-20 02:37:15','2023-07-20 02:37:15');
INSERT INTO slots_data VALUES('58','64','37','30','Silver','30 life time patient registration','2023-07-20 02:38:07','2023-07-20 02:38:07');
INSERT INTO slots_data VALUES('59','65','40','1','Individual','1 life time patient registration','2023-07-20 04:06:16','2023-07-20 04:06:16');
INSERT INTO slots_data VALUES('60','65','37','30','Silver','30 life time patient registration','2023-07-20 04:21:28','2023-07-20 04:21:28');
INSERT INTO slots_data VALUES('61','67','40','1','Individual','1 life time patient registration','2023-07-20 21:42:04','2023-07-20 21:42:04');
INSERT INTO slots_data VALUES('62','67','40','1','Individual','1 life time patient registration','2023-07-20 21:42:32','2023-07-20 21:42:32');
INSERT INTO slots_data VALUES('63','67','40','1','Individual','1 life time patient registration','2023-07-20 21:42:40','2023-07-20 21:42:40');
INSERT INTO slots_data VALUES('64','67','40','1','Individual','1 life time patient registration','2023-07-20 21:42:41','2023-07-20 21:42:41');
INSERT INTO slots_data VALUES('65','67','40','1','Individual','1 life time patient registration','2023-07-20 21:42:41','2023-07-20 21:42:41');
INSERT INTO slots_data VALUES('66','67','40','1','Individual','1 life time patient registration','2023-07-20 21:42:42','2023-07-20 21:42:42');
INSERT INTO slots_data VALUES('67','67','40','1','Individual','1 life time patient registration','2023-07-20 21:43:24','2023-07-20 21:43:24');
INSERT INTO slots_data VALUES('68','68','40','1','Individual','1 life time patient registration','2023-07-20 21:44:17','2023-07-20 21:44:17');
INSERT INTO slots_data VALUES('69','69','40','1','Individual','1 life time patient registration','2023-07-20 23:01:56','2023-07-20 23:01:56');
INSERT INTO slots_data VALUES('70','69','37','30','Silver','30 life time patient registration','2023-07-20 23:11:46','2023-07-20 23:11:46');
INSERT INTO slots_data VALUES('71','69','37','30','Silver','30 life time patient registration','2023-07-20 23:12:02','2023-07-20 23:12:02');
INSERT INTO slots_data VALUES('72','69','37','30','Silver','30 life time patient registration','2023-07-20 23:12:10','2023-07-20 23:12:10');
INSERT INTO slots_data VALUES('73','69','37','30','Silver','30 life time patient registration','2023-07-20 23:12:11','2023-07-20 23:12:11');
INSERT INTO slots_data VALUES('74','69','37','30','Silver','30 life time patient registration','2023-07-20 23:12:11','2023-07-20 23:12:11');
INSERT INTO slots_data VALUES('75','69','37','30','Silver','30 life time patient registration','2023-07-20 23:12:51','2023-07-20 23:12:51');
INSERT INTO slots_data VALUES('76','75','37','30','Silver','30 life time patient registration','2023-07-21 00:26:31','2023-07-21 00:26:31');
INSERT INTO slots_data VALUES('77','77','37','30','Silver','30 life time patient registration','2023-07-21 00:26:54','2023-07-21 00:26:54');



DROP TABLE IF EXISTS slots_price;

CREATE TABLE `slots_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `slots` int(11) NOT NULL,
  `package_name` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;




DROP TABLE IF EXISTS tags;

CREATE TABLE `tags` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS tags_translation;

CREATE TABLE `tags_translation` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_translation_tag_id_locale_unique` (`tag_id`,`locale`),
  CONSTRAINT `tags_translation_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS tax_classes;

CREATE TABLE `tax_classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `based_on` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS tax_classes_translation;

CREATE TABLE `tax_classes_translation` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tax_class_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tax_classes_translation_tax_class_id_locale_unique` (`tax_class_id`,`locale`),
  CONSTRAINT `tax_classes_translation_tax_class_id_foreign` FOREIGN KEY (`tax_class_id`) REFERENCES `tax_classes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS tax_rates;

CREATE TABLE `tax_rates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tax_class_id` bigint(20) unsigned NOT NULL,
  `country` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `rate` decimal(8,4) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tax_rates_tax_class_id_index` (`tax_class_id`),
  CONSTRAINT `tax_rates_tax_class_id_foreign` FOREIGN KEY (`tax_class_id`) REFERENCES `tax_classes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS tax_rates_translation;

CREATE TABLE `tax_rates_translation` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tax_rate_id` bigint(20) unsigned NOT NULL,
  `locale` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tax_rates_translation_tax_rate_id_locale_unique` (`tax_rate_id`,`locale`),
  CONSTRAINT `tax_rates_translation_tax_rate_id_foreign` FOREIGN KEY (`tax_rate_id`) REFERENCES `tax_rates` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS teeth_data;

CREATE TABLE `teeth_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dental_implant` text DEFAULT NULL,
  `manufactures` text DEFAULT NULL,
  `brand` text DEFAULT NULL,
  `platform` text DEFAULT NULL,
  `reference_Part` text DEFAULT NULL,
  `lot` text DEFAULT NULL,
  `unique_id` text DEFAULT NULL,
  `implant_surgery` text DEFAULT NULL,
  `patiente_id` int(11) DEFAULT NULL,
  `doctor_name` text DEFAULT NULL,
  `doctor_phone_number` text DEFAULT NULL,
  `images` text DEFAULT NULL,
  `restoring_dentist_name` text DEFAULT NULL,
  `practice_name_of_restoring_dentist` text DEFAULT NULL,
  `Implant_Restoration_date` text DEFAULT NULL,
  `abutment_type` text DEFAULT NULL,
  `current_dentist` text DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `different_above` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO teeth_data VALUES('5','[\"teeth-8\",\"teeth-13\"]','[\"option9\",\"option11\"]','[\"option1\",\"option3\"]','[\"option1\",\"option3\"]','[\"demo\",\"demo\"]','[\"demo\",\"demo\"]','51152','[\"2023-07-09\",\"2023-07-28\"]','','','','','','','','','','0','','','2023-07-14 22:39:04','2023-07-14 22:39:04');
INSERT INTO teeth_data VALUES('6','[\"teeth-1\"]','[\"option9\"]','[\"option2\"]','[\"option1\"]','[\"demo\"]','[\"demo\"]','65639','[\"2023-07-13\"]','','','','','','','','','','0','','','2023-07-14 17:28:22','2023-07-14 17:28:22');
INSERT INTO teeth_data VALUES('7','[\"teeth-1\"]','[\"option3\"]','[\"option1\"]','[\"option1\"]','[null]','[null]','27597','[\"2023-02-03\"]','','','','','','','','','','0','','','2023-07-14 21:48:25','2023-07-14 21:48:25');
INSERT INTO teeth_data VALUES('8','[\"teeth-24\"]','[\"1\"]','[\"2\"]','[\"7\"]','[\"456\"]','[\"6548\"]','59933','[\"2023-07-12\"]','','','','','','','','','','0','','','2023-07-17 17:27:00','2023-07-17 17:27:00');
INSERT INTO teeth_data VALUES('9','null','null','null','null','null','null','56422','null','','','','','','','','','','0','','','2023-07-17 17:29:16','2023-07-17 17:29:16');
INSERT INTO teeth_data VALUES('10','[\"teeth-24\"]','[\"1\"]','[\"1\"]','[\"8\"]','[\"254154\"]','[\"56458\"]','54830','[\"2023-07-21\"]','','','','','','','','','','0','','','2023-07-17 17:37:06','2023-07-17 17:37:06');
INSERT INTO teeth_data VALUES('11','[\"teeth-20\"]','[\"1\"]','[\"3\"]','[\"8\"]','[\"565446\"]','[\"545\"]','91211','[\"2023-07-14\"]','','','','','','','','','','0','','','2023-07-17 17:43:34','2023-07-17 17:43:34');
INSERT INTO teeth_data VALUES('12','null','null','null','null','null','null','33292','null','','','','','','','','','','0','','','2023-07-17 21:11:54','2023-07-17 21:11:54');
INSERT INTO teeth_data VALUES('13','[\"teeth-24\"]','[\"1\"]','[\"2\"]','[\"7\"]','[\"654\"]','[\"556\"]','38477','[\"2023-07-12\"]','','','','','','','','','','0','','','2023-07-17 21:44:21','2023-07-17 21:44:21');
INSERT INTO teeth_data VALUES('14','[\"teeth-1\"]','[\"1\"]','[\"3\"]','[\"8\"]','[\"584\"]','[\"98\"]','26249','[\"2023-07-21\"]','','','','','','','','','','0','','','2023-07-17 22:26:42','2023-07-17 22:26:42');
INSERT INTO teeth_data VALUES('15','[\"teeth-24\"]','[\"1\"]','[\"3\"]','[\"8\"]','[\"name\"]','[\"54\"]','62386','[\"2023-07-10\"]','26','','','','','','','','','0','','','2023-07-17 23:28:23','2023-07-17 23:28:23');
INSERT INTO teeth_data VALUES('16','[\"teeth-1\"]','[\"1\"]','[\"3\"]','[\"8\"]','[\"654586\"]','[\"965968\"]','56963','[\"2023-08-02\"]','27','','','','','','','','','0','','','2023-07-17 23:34:09','2023-07-17 23:34:09');
INSERT INTO teeth_data VALUES('18','[\"teeth-3\",\"teeth-5\"]','[\"Demo 2\",\"2\"]','[\"Demo 2\",\"Demo 3\"]','[\"Demo 3\",\"Demo 1\"]','[\"fffff\",\"ffff\"]','[\"fff\",\"ff\"]','83907','[\"2023-07-21\",\"2023-07-29\"]','31','65265','6550','[\"0image1689689289.jpeg\",\"1image1689689289.jpeg\"]','demo589@gmail.com','demo589@gmail.com','2023-07-15','name','name','5','name','doctor','2023-07-18 22:08:09','2023-07-18 22:08:09');
INSERT INTO teeth_data VALUES('19','[\"teeth-21\",\"teeth-32\"]','[\"Demo 3\",\"1\"]','[\"Demo 3\",\"Demo 2\"]','[\"Demo 2\",\"Demo 3\"]','[null,null]','[\"newly@gmail.com\",\"newly@gmail.com\"]','16938','[\"2023-07-22\",\"2023-07-29\"]','32','newly@gmail.com','58585','[\"0image1689689437.jpeg\",\"1image1689689437.jpeg\"]','newly@gmail.com','newly@gmail.com','2023-07-15','newly@gmail.com','newly@gmail.com','5','newly@gmail.com','doctor','2023-07-18 22:10:37','2023-07-18 22:10:37');
INSERT INTO teeth_data VALUES('20','[\"teeth-17\",\"teeth-32\"]','[\"Demo 3\",\"Demo 2\"]','[\"Demo 2\",\"Demo 3\"]','[\"Demo 2\",\"Demo 2\"]','[\"tony\",\"tony\"]','[\"tony\",\"tony\"]','42767','[\"2023-07-13\",\"2023-07-19\"]','33','tony','555','[\"0image1689689544.jpeg\",\"1image1689689544.jpeg\"]','tony','tony','2023-07-21','tony','tony','5','tony','doctor','2023-07-18 22:12:24','2023-07-18 22:12:24');
INSERT INTO teeth_data VALUES('21','[\"teeth-17\",\"teeth-32\"]','[\"Demo 2\",\"Demo 2\"]','[\"Demo 1\",\"Demo 3\"]','[\"Demo 2\",\"Demo 3\"]','[\"66\",\"66\"]','[\"66\",\"66\"]','91230','[\"2023-07-06\",\"2023-07-28\"]','34','demo2','8887','[\"0image1689689844.jpeg\",\"1image1689689844.jpeg\"]','demo2','demo2','2023-07-22','demo2','demo2','5','demo2','patient','2023-07-18 22:17:24','2023-07-18 22:17:24');
INSERT INTO teeth_data VALUES('22','[\"teeth-2\",\"teeth-13\"]','[\"Demo 3\",\"2\"]','[\"Demo 3\",\"Demo 2\"]','[\"Demo 3\",\"Demo 3\"]','[\"ddd\",\"ddd\"]','[\"ddd\",\"dd\"]','88219','[\"2023-07-14\",\"2023-07-26\"]','35','dr ezza','889','[\"0image1689690498.jpeg\",\"1image1689690498.jpeg\"]','dr ezza','dr ezza','2023-07-06','dr ezza','dr ezza','50','dr ezza','patient','2023-07-18 22:28:18','2023-07-18 22:28:18');
INSERT INTO teeth_data VALUES('23','[\"teeth-2\",\"teeth-13\"]','[\"Demo 3\",\"2\"]','[\"Demo 3\",\"Demo 2\"]','[\"Demo 3\",\"Demo 3\"]','[\"ddd\",\"ddd\"]','[\"ddd\",\"dd\"]','88219','[\"2023-07-14\",\"2023-07-26\"]','35','dr ezza','889','[\"0image1689690498.jpeg\",\"1image1689690498.jpeg\"]','dr ezza','dr ezza','2023-07-06','dr ezza','dr ezza','50','dr ezza','patient','2023-07-18 22:28:18','2023-07-18 22:28:18');
INSERT INTO teeth_data VALUES('24','[\"teeth-18\"]','[\"1\"]','[\"2\"]','[null]','[\"NAME\"]','[\"NAME\"]','90443','[\"2023-07-13\"]','36','DEMO 5','1120','[\"0image1689711310.png\",\"1image1689711310.png\"]','DEMO 5','DEMO 5','2023-07-19','DEMO 5','DEMO 5','50','DEMO 5','patient','2023-07-18 20:15:10','2023-07-18 20:15:10');
INSERT INTO teeth_data VALUES('25','[\"teeth-17\",\"teeth-25\"]','[\"1\",\"1\"]','[\"2\",\"3\"]','[null,null]','[\"DEMO 6\",\"DEMO 6\"]','[\"DEMO 6\",\"DEMO 6\"]','42065','[\"2023-07-21\",\"2023-07-21\"]','37','DEMO 6','4541541','[\"0image1689711423.png\",\"1image1689711423.png\"]','DEMO 6','DEMO 6','2023-07-20','DEMO 6','DEMO 6','50','DEMO 6','patient','2023-07-18 20:17:03','2023-07-18 20:17:03');
INSERT INTO teeth_data VALUES('26','[\"teeth-17\",\"teeth-31\"]','[\"1\",\"1\"]','[\"2\",\"2\"]','[null,null]','[\"demo\",\"demo\"]','[\"demo\",\"demo\"]','24699','[\"2023-07-13\",\"2023-07-21\"]','38','name','56868484','[\"0image1689714972.png\",\"1image1689714972.png\"]','demo','demo','2023-07-20','demo','demo','55','demo','patient','2023-07-18 21:16:12','2023-07-18 21:16:12');
INSERT INTO teeth_data VALUES('27','[\"teeth-17\",\"teeth-31\",\"teeth-15\",\"teeth-7\",\"teeth-11\",\"teeth-12\"]','[\"1\",\"1\",\"1\",\"1\",\"1\",\"2\"]','[\"2\",\"2\",\"3\",\"3\",\"1\",\"3\"]','[null,null,null,null,null,null]','[\"51541\",\"51541\",\"51541\",\"51541\",\"51541\",\"51541\"]','[\"51541\",\"51541\",\"51541\",\"51541\",\"51541\",\"51541\"]','95700','[\"2023-07-13\",\"2023-07-19\",\"2023-07-19\",\"2023-07-10\",\"2023-07-19\",\"2023-07-19\"]','39','demo6','54744515','[\"0image1689717999.png\",\"1image1689717999.png\"]','demo 6','demo 6','2023-07-19','demo 6','demo 6','5','demo 6','patient','2023-07-18 22:06:39','2023-07-18 22:06:39');
INSERT INTO teeth_data VALUES('28','[\"teeth-24\",\"teeth-26\"]','[\"1\",\"1\"]','[\"2\",\"3\"]','[null,null]','[\"54\",\"5868\"]','[\"65\",\"56\"]','24870','[\"2023-07-06\",\"2023-07-26\"]','41','abc123','19853','[\"0image1689725679.png\",\"1image1689725679.png\"]','abc123','abc123','2023-07-28','abc123','abc123','34','abc123','patient','2023-07-19 00:14:39','2023-07-19 00:14:39');
INSERT INTO teeth_data VALUES('29','[\"teeth-1\",\"teeth-14\"]','[\"1\",\"2\"]','[\"2\",\"1\"]','[null,null]','[\"name\",\"name\"]','[\"name\",\"name\"]','36498','[\"2023-07-15\",\"2023-07-04\"]','42','name','53','[\"0image1689727072.png\",\"1image1689727072.png\"]','name','name','2023-07-20','name','name','54','name','patient','2023-07-19 00:37:52','2023-07-19 00:37:52');
INSERT INTO teeth_data VALUES('32','[\"teeth-19\",\"teeth-30\"]','[\"1\",\"1\"]','[null,null]','[null,null]','[\"dr vinood\",\"dr vinood\"]','[\"dr vinood\",\"dr vinood\"]','19710','[\"2023-07-20\",\"2023-07-20\"]','44','dr vinood','545','[\"0image1689772078.jpeg\",\"1image1689772078.jpeg\"]','dr vinood','dr vinood','2023-07-20','dr vinood','dr vinood','60','dr vinood','patient','2023-07-19 21:07:58','2023-07-19 21:07:58');
INSERT INTO teeth_data VALUES('33','[\"teeth-18\",\"teeth-32\"]','[\"1\",\"1\"]','[null,null]','[null,null]','[\"httyv\",\"httyv\"]','[\"httyv\",\"httyv\"]','45881','[\"2023-07-07\",\"2023-07-21\"]','45','harry','51513','[\"0image1689773112.jpeg\",\"1image1689773112.jpeg\"]','httyv','httyv','2023-07-29','httyv','httyv','5','httyv','patient','2023-07-19 21:25:12','2023-07-19 21:25:12');
INSERT INTO teeth_data VALUES('34','[\"teeth-22\",\"teeth-30\"]','[\"15\",\"14\"]','null','[null,null]','[\"name\",\"name\"]','[\"name\",\"name\"]','18173','[\"2023-07-21\",\"2023-07-22\"]','47','dr ashok','574782','[\"0image1689784195.png\",\"1image1689784195.png\"]','name','name','2023-07-14','name','name','5','name','patient','2023-07-19 16:29:55','2023-07-19 16:29:55');
INSERT INTO teeth_data VALUES('35','','null','null','null','null','null','','null','42','name','865','[\"0image1689786290.png\",\"1image1689786290.png\"]','name','name','2023-07-20','name','name','54','name','patient','2023-07-19 17:04:50','2023-07-19 17:04:50');
INSERT INTO teeth_data VALUES('36','null','null','null','null','null','null','','null','42','demo','854','[\"0image1689787148.png\",\"1image1689787148.png\"]','name','name','2023-07-13','name','name','54','name','patient','2023-07-19 17:19:09','2023-07-19 17:19:09');
INSERT INTO teeth_data VALUES('37','[\"teeth-22\"]','[null]','[null]','[null]','[\"78\"]','[\"87\"]','83614','[\"2023-07-12\"]','48','name','52','[\"0image1689815897.png\",\"1image1689815897.png\"]','8787','78','2023-07-28','789','87','65','789','patient','2023-07-20 01:18:17','2023-07-20 01:18:17');
INSERT INTO teeth_data VALUES('38','[\"tooth-1\"]','[\"7\"]','null','[null]','[\"123\"]','[\"123\"]','87407','[\"2020-05-27\"]','49','demo','0123456789','[\"0image1689883726.jpg\",\"1image1689883726.jpg\"]','demo','demo','2021-08-20','demo','demo','69','demo','patient','2023-07-20 20:08:46','2023-07-20 20:08:46');



DROP TABLE IF EXISTS testimonial;

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO testimonial VALUES('8','image1687807183.png','Sarah M','','<p>I can\'t thank ID2 enough for their exceptional service. Their website made finding a dental implant specialist a breeze. With their comprehensive database, I quickly found a qualified dentist in my area. The whole experience was seamless, and I am beyond happy with my new dental implants. If you\'re considering dental implants, ID2 is the place to go!</p>','2023-06-26 22:19:43','2023-06-26 22:19:43');
INSERT INTO testimonial VALUES('9','image1687807183.png','Michael P','Doloremque','<p>I was skeptical about getting dental implants, but ID2 changed everything. Their user-friendly website provided me with all the information I needed to make an informed decision. The reviews and ratings of different dentists helped me choose the perfect one for my needs. Thanks to ID2, I now have a confident smile that I\'m proud to show off!</p>','2023-06-26 22:19:43','2023-06-26 22:19:43');
INSERT INTO testimonial VALUES('10','image1687807183.png','Lisa H','Doloremque','<p>ID2 made the process of finding a dental implant specialist stress-free and efficient. Their platform connected me with a skilled dentist who understood my concerns and answered all my questions. The support I received throughout the entire process was outstanding. I highly recommend ID2 to anyone looking for reliable dental implant solutions.</p>','2023-06-26 22:19:43','2023-06-26 22:19:43');
INSERT INTO testimonial VALUES('11','image1687807183.png','David L','Doloremque','<p>I am so grateful to ID2 for their excellent services. Their website is a goldmine of information on dental implants and helped me find a top-notch dentist in my area. The whole process was smooth, and I couldn\'t be happier with the results. Thank you, ID2, for giving me a reason to smile again!</p>','2023-06-26 22:19:43','2023-06-26 22:19:43');
INSERT INTO testimonial VALUES('12','image1687807183.png','Emily R','Doloremque','<p>I was overwhelmed with the number of dental implant options available, but ID2 made it easy to find the right one. Their platform is user-friendly and offers a wide range of dentists to choose from. I\'m thrilled with the outcome of my dental implants, and I owe it all to ID2 for their guidance and support.</p>','2023-06-26 22:19:43','2023-06-26 22:19:43');
INSERT INTO testimonial VALUES('13','image1687807183.png','John D','Doloremque','<p>I had a fantastic experience with ID2. Their website is a one-stop-shop for all things dental implants. It connected me with an experienced dentist who provided top-quality care. The information on their site is invaluable, and I can confidently say that ID2 played a significant role in transforming my smile. Thank you!</p>','2023-06-26 22:19:43','2023-06-26 22:19:43');



DROP TABLE IF EXISTS transactions;

CREATE TABLE `transactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) unsigned NOT NULL,
  `transaction_id` varchar(191) NOT NULL,
  `payment_method` varchar(30) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `payment_data` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_order_id_foreign` (`order_id`),
  CONSTRAINT `transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




DROP TABLE IF EXISTS users;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) NOT NULL,
  `last_name` text DEFAULT NULL,
  `title` text DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `user_type` varchar(20) NOT NULL,
  `user_status` text DEFAULT NULL,
  `role_id` bigint(20) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `profile_picture` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `provider` varchar(191) DEFAULT NULL,
  `provider_id` varchar(191) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users VALUES('5','Tony','Clark','title1','admin@gmail.com','5668548','admin','Dental_Specialist','','1','profile_1689354360.png','2023-06-16 21:02:53','$2y$10$saFlyDFpslOcqRm1VhuNL.GMP0RRrDOs95WvocR3ud74LBA/Vzt2S','','','','kqyq09sbojTP9oIOOpWojQyIAVxkGfLKVDlDykNn8ICgnTYcNn68ClunEN6Z','2023-06-16 21:02:53','2023-07-14 20:06:00');
INSERT INTO users VALUES('32','name','name','title1','admin82818@gmail.com','546546','customer','Dental_Specialist','','1','default.png','2023-07-11 20:38:51','$2y$10$uOdjhtw/hQy/5GF0AO/laO2zdBTDqcnVmo9b34bEzqZLvHfv.h8qu','','','','','2023-07-11 20:38:51','2023-07-11 20:38:51');
INSERT INTO users VALUES('33','dentist','dentist','title2','admin828187@gmail.com','546586','customer','Dental_Specialist','','1','default.png','2023-07-11 20:39:38','$2y$10$ty3TbgO5TjIDRRwH2s8Ype1LzgEsnghn2MnPrVU3oxSjUh5mOw4Ie','','','','','2023-07-11 20:39:38','2023-07-11 20:39:38');
INSERT INTO users VALUES('34','john','henry','title2','john@gmail.com','88888888','customer','patient','','1','profile_1689722336.png','2023-07-15 01:26:25','$2y$10$AfDgarLnJTHa6pM4eXF40ep9ti4Fe1t37/N.gEeWjws6xQ2yiOgLC','','','','','2023-07-15 01:26:26','2023-07-19 02:18:56');
INSERT INTO users VALUES('35','xyz','xyz','title1','xyz@gmail.com','8454711171','customer','Dental_Specialist','','1','default.png','2023-07-14 21:59:31','$2y$10$LxY9.2GvJOU/Xr3C/Lwli.fBGwkyDLByGKFBG9XjTQsyZgRP4UXm6','','','','','2023-07-14 21:59:31','2023-07-14 21:59:31');
INSERT INTO users VALUES('36','xyz','xyz','title1','abc@gmail.com','4695866855','customer','patient','','1','default.png','2023-07-14 22:09:24','$2y$10$RvQjluGhmiRh8RfJ4fq.K.MT7hWY7W8FLKOzO1c4sPPYyMoW3kZLK','','','','','2023-07-14 22:09:24','2023-07-14 22:09:24');
INSERT INTO users VALUES('37','demo name','demo name','title2','demo12345@gmail.com','5436456','customer','Dental_Specialist','','1','default.png','2023-07-14 22:13:05','$2y$10$IysMr0nB436Qa8XrXH0Sq.LuaWolrtqnRJUlIEV5tK4VfmIXHfUYC','','','','','2023-07-14 22:13:05','2023-07-14 22:13:05');
INSERT INTO users VALUES('38','johnvick','harry','title2','johnvick12356@gmnail.com','54545814','customer','Dental_Specialist','','1','profile_1689623961.png','2023-07-14 23:49:28','$2y$10$gX7ej/ljnMnZJxVcea49aOeV2DlXIhrhyoKaogKU/JnJByH1kZMDG','','','','','2023-07-14 23:49:28','2023-07-17 22:59:21');
INSERT INTO users VALUES('39','Tony','Zablit','title2','tzablit@gmail.com','11111111111','customer','Dental_Specialist','','1','default.png','2023-07-15 01:14:29','$2y$10$AHB3/olEjuXPEFVs0bP1h.EfrR/RIBnaeNxfIhll3rgXtqmMs1yN2','','','','','2023-07-15 01:14:29','2023-07-15 01:14:29');
INSERT INTO users VALUES('42','Morgan','Freeman','title2','Morgan@gmail.com','564568448','customer','Dental_Specialist','','1','default.png','2023-07-18 02:19:47','$2y$10$e6LK9Hj8YzTEp1rymTtP/eBHqH7Tx5gdiMF/l9PWpyHJMYELt61l6','','','','','2023-07-18 02:19:47','2023-07-18 02:19:47');
INSERT INTO users VALUES('43','harry 2','potter 2','','harry@gmail.com','545','','','','0','','','','','','2023-07-14','','2023-07-17 23:28:23','2023-07-17 23:28:23');
INSERT INTO users VALUES('44','joe','William','','joe@gmail.com','5745846','','','','1','','2023-07-17 23:34:09','','','','2023-07-07','','2023-07-17 23:34:09','2023-07-17 23:34:09');
INSERT INTO users VALUES('46','demo','demo','','demo589@gmail.com','5144','customer','patient','','1','','2023-07-18 22:08:09','','','','2023-07-06','','2023-07-18 22:08:09','2023-07-18 22:08:09');
INSERT INTO users VALUES('47','john','john','','newly@gmail.com','154153','customer','patient','','1','','2023-07-18 22:10:37','','','','2023-07-13','','2023-07-18 22:10:37','2023-07-18 22:10:37');
INSERT INTO users VALUES('48','tony','clark','','tony123@gmail.com','541545','customer','patient','','1','','2023-07-18 22:12:24','','','','2023-07-14','','2023-07-18 22:12:24','2023-07-18 22:12:24');
INSERT INTO users VALUES('49','demo2','demo2','','demo2@gmail.com','35250','customer','patient','','1','','2023-07-18 22:17:24','','','','2023-07-07','','2023-07-18 22:17:24','2023-07-18 22:17:24');
INSERT INTO users VALUES('50','DR EZZA','JOHN','title2','ezza@gmail12.com','0321690556812','customer','Dental_Specialist','','1','profile_1689710988.png','2023-07-19 01:25:57','$2y$10$Z/SJY9nPkPYU/eN0lYzA5uhLIiPHI6zXo1orAKYFWrHZ/bMUslU0K','','','','','2023-07-19 01:25:57','2023-07-18 23:18:14');
INSERT INTO users VALUES('51','demo4','demo4','','demo4@gmail.com','555554','customer','patient','','1','','2023-07-18 22:28:18','','','','2023-07-20','','2023-07-18 22:28:18','2023-07-18 22:28:18');
INSERT INTO users VALUES('52','DEMO 5','DEMO 5','','EZZA1234@GMAIL.COM','54152','customer','patient','','1','','2023-07-18 20:15:10','','','','2023-07-26','','2023-07-18 20:15:10','2023-07-18 20:15:10');
INSERT INTO users VALUES('53','DEMO 6','DEMO 6','','ABCZY@GMAIL.COM','4752','customer','patient','','1','','2023-07-18 20:17:03','','','','2023-07-21','','2023-07-18 20:17:03','2023-07-18 20:17:03');
INSERT INTO users VALUES('54','patient','patient','title2','patient@gmail.com','247545147','customer','patient','','1','profile_1689728205.png','2023-07-19 00:08:58','$2y$10$NOlmeSbXPFNjuNIMhtF9.uJEeZ4jKDZg7y8Rs.lMtjwfklcmCJAqK','','','','','2023-07-19 00:08:58','2023-07-19 03:56:45');
INSERT INTO users VALUES('55','nyname','nyname','title2','nyname@gmail.com','5417584','customer','patient','','1','default.png','2023-07-19 00:13:02','$2y$10$Y/Q.mnC9NtiKmzaxFp0Pd.zy46T/Op.CzI0nHYdsjI9.FnBqJQage','','','','','2023-07-19 00:13:02','2023-07-19 00:13:02');
INSERT INTO users VALUES('56','name','name','','due@gmailc.com','54584','customer','patient','','1','','2023-07-18 21:16:12','','','','2023-07-06','','2023-07-18 21:16:12','2023-07-18 21:16:12');
INSERT INTO users VALUES('57','demo 6','demo 6','','demo6@gmail.com','5784878','customer','patient','','1','','2023-07-18 22:06:39','','','','2023-07-20','','2023-07-18 22:06:39','2023-07-18 22:06:39');
INSERT INTO users VALUES('58','name','name','','abc12345@gmail.com','245','customer','patient','','1','','2023-07-19 00:14:39','','','','2023-07-21','','2023-07-19 00:14:39','2023-07-19 00:14:39');
INSERT INTO users VALUES('59','name','name','','xyz123456@gmail.com','4545478','customer','patient','','1','','2023-07-19 00:37:52','','','','2023-07-12','','2023-07-19 00:37:52','2023-07-19 00:37:52');
INSERT INTO users VALUES('60','Dr N.alex','Hales','title2','oct@gmail.com','54545454','customer','patient','','1','profile_1689771499.jpg','2023-07-19 23:44:34','$2y$10$rz3YB0fu6GDIYcdifv9UduGNF.jFuhGc5lo52gzi7Z1iumYXots5.','','','','','2023-07-19 23:44:34','2023-07-19 23:58:54');
INSERT INTO users VALUES('62','harry','potter','','newyork@gmail.com','5453','customer','patient','','1','','2023-07-19 21:25:12','','','','2023-07-20','','2023-07-19 21:25:12','2023-07-19 21:25:12');
INSERT INTO users VALUES('63','demo 8','demo 8','','abc123x@gmail.com','5454174','customer','patient','','1','','2023-07-19 16:29:55','','','','2023-07-07','','2023-07-19 16:29:55','2023-07-19 16:29:55');
INSERT INTO users VALUES('64','Joseph','Williams','title2','joseph81017@gmail.com','0001234567','customer','Dental_Specialist','','1','default.png','2023-07-20 02:35:59','$2y$10$EtPBb/94o2mO4QU4m2ctzuvscKLZPX1tY4WkOhHtx.T2KP4xrMu3y','','','','','2023-07-20 02:35:59','2023-07-20 02:35:59');
INSERT INTO users VALUES('65','johny','harry','title2','johny@gmail.com','547584874','customer','Dental_Specialist','','1','profile_1689816195.png','2023-07-20 04:05:59','$2y$10$cJmFeXLkbwLELNlaXMgUXe7CuxWUEvyjBRMxfDR8RyfderiahcjjO','','','','','2023-07-20 04:05:59','2023-07-20 04:23:15');
INSERT INTO users VALUES('66','harry','potter','','demo2345@gmail.com','8984','customer','patient','','1','','2023-07-20 01:18:17','','','','2023-07-22','','2023-07-20 01:18:17','2023-07-20 01:18:17');
INSERT INTO users VALUES('67','Jhon','David','title2','test208@gmail.com','9852978753','customer','Dental_Specialist','','1','default.png','2023-07-20 21:41:43','$2y$10$/z/7UjM/Lm.UFJDTRHTJU.alr3qS0AAokXKJGW5AVy/.68ty/phFy','','','','','2023-07-20 21:41:43','2023-07-20 21:41:43');
INSERT INTO users VALUES('68','Jhon','David','title2','test209@gmail.com','9852978753','customer','Dental_Specialist','','1','default.png','2023-07-20 21:44:05','$2y$10$zA/qkkV9.aepEwipRmdyleFTD4bRCpa51U5MgbABqouBGsRQ7j/0y','','','','','2023-07-20 21:44:05','2023-07-20 21:44:05');
INSERT INTO users VALUES('69','Jew','Lewis','title2','Jew@gmail.com','1234567891','customer','Dental_Specialist','','1','default.png','2023-07-20 23:01:02','$2y$10$p8k7I.wTpIxm1bIRL2Jr3uVc2YjK4G9x11U2oX7jINVKZmzW8F6SO','','','','','2023-07-20 23:01:02','2023-07-20 23:01:02');
INSERT INTO users VALUES('70','Joseph','Williams','','Joseph.williams@thewebsitedesigns.com','19499817532','customer','patient','','1','','2023-07-20 20:08:46','','','','2023-06-10','','2023-07-20 20:08:46','2023-07-20 20:08:46');
INSERT INTO users VALUES('71','john','john','title1','johnjohn@email.com','8885551212','customer','Dental_Specialist','','1','default.png','2023-07-20 23:35:16','$2y$10$UdsflwUuBQ4EPsS76p44mewm3HLN7h9qOpiRmiqhUm0X8D5k7IPyu','','','','','2023-07-20 23:35:16','2023-07-20 23:35:16');
INSERT INTO users VALUES('72','Tony','Zablit','title1','hasroun@gmail.com','7608033111','customer','patient','','1','default.png','2023-07-21 00:16:27','$2y$10$6Vef7c2VurrYFM7Fjf76CemHSYrHoyntJdCckJ5s1L2gXl3cmLjii','','','','','2023-07-21 00:16:27','2023-07-21 00:16:27');
INSERT INTO users VALUES('73','Joseph','Williams','title1','xyz123@gmail.com','4695866855','customer','patient','','1','default.png','2023-07-21 00:18:46','$2y$10$q.t3AdH5iFOkbAVDfInIKuwGm/8A2NS/YOS2wVl/.8cyEbw/3qSS2','','','','','2023-07-21 00:18:46','2023-07-21 00:18:46');
INSERT INTO users VALUES('74','joseph','joseph','title1','joseph@gmail.com','7608033111','customer','patient','','1','default.png','2023-07-21 00:21:10','$2y$10$BXkkWkmDDi4.VkjPwCTAyOdsuLUwyZyWKVOszQKmNmuxHwYDs3ruG','','','','','2023-07-21 00:21:10','2023-07-21 00:21:10');
INSERT INTO users VALUES('75','Jew','Lewis','title2','xyz.123@gmail.com','1234567890','customer','Dental_Specialist','','1','default.png','2023-07-21 00:21:25','$2y$10$TUY83qzP5kpTFNwBD.0Q3O26WxDGUkJLu7SJYixQK.Ha.tgdoG7Bi','','','','','2023-07-21 00:21:25','2023-07-21 00:21:25');
INSERT INTO users VALUES('76','joseph','joseph','title1','joseph123@gmail.com','7608033111','customer','patient','','1','default.png','2023-07-21 00:24:05','$2y$10$nZG3nHtrhdK6/9yDW05S8ejFnz8RypnyJieU/8m8neFioRAYSwIjO','','','','','2023-07-21 00:24:05','2023-07-21 00:24:05');
INSERT INTO users VALUES('77','tony','zablit','title1','tzhunting@gmail.com','7608033111','customer','Dental_Specialist','','1','default.png','2023-07-21 00:25:03','$2y$10$XoYS.GXaDeae0jgReBgSOegKtscMc9w5jM.vGRDxMIpWQhQjpxb2m','','','','','2023-07-21 00:25:03','2023-07-21 00:25:03');
INSERT INTO users VALUES('78','Jhon','David','title2','test@gmail.com','9852978753','customer','patient','','1','default.png','2023-07-21 17:24:41','$2y$10$gkCgFYJCSMquCSiEUhtg6.obiM0QI8M/dxt5ayXSGPJOXOPw6NuEa','','','','','2023-07-21 17:24:41','2023-07-21 17:24:41');



DROP TABLE IF EXISTS wish_lists;

CREATE TABLE `wish_lists` (
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`product_id`),
  KEY `wish_lists_product_id_foreign` (`product_id`),
  CONSTRAINT `wish_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `wish_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;





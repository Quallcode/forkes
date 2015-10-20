<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-20 04:24:53 --> 404 Page Not Found: Indexhtml/index
ERROR - 2015-10-20 06:50:10 --> 404 Page Not Found: compiler/Kekuatan/index
ERROR - 2015-10-20 06:51:21 --> 404 Page Not Found: Compiler/Kekuatan/Index
ERROR - 2015-10-20 06:52:27 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\forkes\system\database\drivers\mysqli\mysqli_driver.php 264
ERROR - 2015-10-20 06:59:50 --> Query error: Table 'fornas.kekuatan' doesn't exist - Invalid query: INSERT INTO `kekuatan` (`id_kekuatan`, `kekuatan`) VALUES ('0002', 2)
ERROR - 2015-10-20 07:17:49 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\forkes\system\database\drivers\mysqli\mysqli_driver.php 264
ERROR - 2015-10-20 07:20:16 --> Query error: Table 'kekuatan' already exists - Invalid query: CREATE TABLE `kekuatan` (
	`id` INT(9) NOT NULL AUTO_INCREMENT,
	`id_kekuatan` VARCHAR(150) NOT NULL,
	`kekuatan` INT NOT NULL,
	`date_created` DATETIME NULL,
	`date_modified` DATETIME NULL,
	CONSTRAINT `pk_kekuatan` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-10-20 07:20:34 --> 404 Page Not Found: compiler/Obat/insert
ERROR - 2015-10-20 07:20:49 --> Query error: Table 'fornas.kekuatan' doesn't exist - Invalid query: INSERT INTO `kekuatan` (`id_kekuatan`, `kekuatan`) VALUES (2, 2)
ERROR - 2015-10-20 07:21:32 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\forkes\system\database\drivers\mysqli\mysqli_driver.php 264
ERROR - 2015-10-20 07:39:24 --> Query error: Table 'kekuatan' already exists - Invalid query: CREATE TABLE `kekuatan` (
	`id` INT(9) NOT NULL AUTO_INCREMENT,
	`id_kekuatan` VARCHAR(5) NOT NULL,
	`kekuatan` INT NOT NULL,
	`date_created` DATETIME NULL,
	`date_modified` DATETIME NULL,
	CONSTRAINT `pk_kekuatan` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-10-20 07:43:55 --> Query error: Table 'fornas.kekuatan' doesn't exist - Invalid query: INSERT INTO `kekuatan` (`id_kekuatan`, `kekuatan`) VALUES ('0002', 2)
ERROR - 2015-10-20 07:47:03 --> Query error: Table 'kekuatan' already exists - Invalid query: CREATE TABLE `kekuatan` (
	`id` INT(9) NOT NULL AUTO_INCREMENT,
	`id_kekuatan` VARCHAR(5) NOT NULL,
	`kekuatan` INT NOT NULL,
	`date_created` DATETIME NULL,
	`date_modified` DATETIME NULL,
	CONSTRAINT `pk_kekuatan` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-10-20 07:47:04 --> Query error: Unknown table 'fornas.kekuatan' - Invalid query: DROP TABLE `kekuatan`
ERROR - 2015-10-20 07:47:04 --> Query error: Unknown table 'fornas.kekuatan' - Invalid query: DROP TABLE `kekuatan`
ERROR - 2015-10-20 07:47:04 --> Query error: Unknown table 'fornas.kekuatan' - Invalid query: DROP TABLE `kekuatan`
ERROR - 2015-10-20 07:47:05 --> 404 Page Not Found: compiler/Kekuatan/dropdrop
ERROR - 2015-10-20 07:47:11 --> Query error: Unknown table 'fornas.kekuatan' - Invalid query: DROP TABLE `kekuatan`
ERROR - 2015-10-20 15:04:52 --> 404 Page Not Found: compiler/Obat/insert
ERROR - 2015-10-20 15:06:27 --> Query error: Unknown table 'fornas.kekuatan' - Invalid query: DROP TABLE `kekuatan`
ERROR - 2015-10-20 15:56:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NOT NULL,
	CONSTRAINT `pk_keterangan_atc_obat` PRIMARY KEY(`id`)
) DEFAULT CHARA' at line 3 - Invalid query: CREATE TABLE `keterangan_atc_obat` (
	`id` INT(9) NOT NULL AUTO_INCREMENT,
	`keterangan` VARCHAR NOT NULL,
	CONSTRAINT `pk_keterangan_atc_obat` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-10-20 16:03:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NOT NULL,
	CONSTRAINT `pk_keterangan_atc_obat` PRIMARY KEY(`id`)
) DEFAULT CHARA' at line 3 - Invalid query: CREATE TABLE `keterangan_atc_obat` (
	`id` INT(9) NOT NULL AUTO_INCREMENT,
	`keterangan` VARCHAR NOT NULL,
	CONSTRAINT `pk_keterangan_atc_obat` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-10-20 16:19:14 --> Query error: Table 'atc_obat' already exists - Invalid query: CREATE TABLE `atc_obat` (
	`id` INT(9) NOT NULL AUTO_INCREMENT,
	`id_atc_obat` VARCHAR(10) NOT NULL,
	`nama_obat` VARCHAR(150) NOT NULL,
	`id_keterangan` INT NOT NULL,
	CONSTRAINT `pk_atc_obat` PRIMARY KEY(`id`)
) DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci

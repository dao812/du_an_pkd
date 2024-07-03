

-- DROP DATABASE `db_authentication`;

CREATE DATABASE `db_authentication` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use `db_authentication`;

CREATE TABLE IF NOT EXISTS `users` (
  `usr_id` INT NOT NULL AUTO_INCREMENT,
  `usr_fullName` VARCHAR(255),
  `usr_phone` VARCHAR(255),
  `usr_email` VARCHAR(255),
  `usr_password` VARCHAR(255),
  PRIMARY KEY `pk_user_id`(`usr_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1000;

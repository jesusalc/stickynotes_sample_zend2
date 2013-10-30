#!/bin/bash

mysql -u root -p

machoman

create database stickynotes;

use stickynotes;


-- -----------------------------------------------------
-- Table `stickynotes`.`stickynotes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `stickynotes`.`stickynotes` ;
CREATE TABLE IF NOT EXISTS `stickynotes`.`stickynotes` (
`id` INT NOT NULL AUTO_INCREMENT ,
`note` VARCHAR(255) NULL ,
`created` TIMESTAMP NOT NULL ,
PRIMARY KEY (`id`) ,
UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = MyISAM;
-- -----------------------------------------------------
-- Data for table `stickynotes`.`stickynotes`
-- -----------------------------------------------------
START TRANSACTION;
USE `stickynotes`;
INSERT INTO `stickynotes`.`stickynotes` (`id`, `note`, `created`) VALUES (NULL, 'This is a sticky note you can type and edit.', NULL);
INSERT INTO `stickynotes`.`stickynotes` (`id`, `note`, `created`) VALUES (NULL, 'See if it will work with my iPhone', NULL);
COMMIT;

exit;

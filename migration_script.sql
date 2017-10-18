-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Migrated Schemata: mystratplanner
-- Source Schemata: mystratplanner
-- Created: Sat Oct 14 08:44:23 2017
-- Workbench Version: 6.3.8
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------------
-- Schema mystratplanner
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `mystratplanner` ;
CREATE SCHEMA IF NOT EXISTS `mystratplanner` ;

-- ----------------------------------------------------------------------------
-- Table mystratplanner.migrations
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mystratplanner`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3;

-- ----------------------------------------------------------------------------
-- Table mystratplanner.password_resets
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mystratplanner`.`password_resets` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  INDEX `password_resets_email_index` (`email` ASC))
ENGINE = InnoDB;

-- ----------------------------------------------------------------------------
-- Table mystratplanner.users
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `mystratplanner`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC))
ENGINE = InnoDB;
SET FOREIGN_KEY_CHECKS = 1;

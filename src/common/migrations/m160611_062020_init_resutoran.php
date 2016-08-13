<?php

use yii\db\Migration;

class m160611_062020_init_resutoran extends Migration
{
    public function safeUp()
    {
        echo "m160611_062020_init_resutoran is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
            
            -- -----------------------------------------------------
            -- Table `resu_franchise`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_franchise` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(128) NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `idresu_franchise_UNIQUE` (`id` ASC),
              UNIQUE INDEX `name_UNIQUE` (`name` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_services_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_hours_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_hours_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_menu_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_menu_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_contact`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_contact` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `country_code` INT(2) NOT NULL,
              `phone1` INT NOT NULL,
              `phone2` INT NULL,
              `phone3` INT NULL,
              `address1` TEXT NULL,
              `address2` TEXT NULL,
              `address3` TEXT NULL,
              `country` TEXT NULL,
              `city` TEXT NULL,
              `prov` VARCHAR(2) NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_price_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_price_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` DECIMAL(6,2) NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_decor_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_decor_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_ambiance_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_ambiance_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_map`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_map` (
              `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `name` VARCHAR(64) NOT NULL,
              `resu_franchise_id` INT UNSIGNED NOT NULL,
              `resu_contact_id` INT UNSIGNED NOT NULL,
              `resu_price_option_id` INT UNSIGNED NOT NULL,
              `resu_decor_option_id` INT UNSIGNED NOT NULL,
              `resu_ambiance_option_id` INT UNSIGNED NOT NULL,
              `resu_map_id` INT(11) UNSIGNED NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC),
              INDEX `fk_resu_location_resu_franchise_idx` (`resu_franchise_id` ASC),
              INDEX `fk_resu_location_resu_contact1_idx` (`resu_contact_id` ASC),
              INDEX `fk_resu_location_resu_price_option1_idx` (`resu_price_option_id` ASC),
              INDEX `fk_resu_location_resu_decor_option1_idx` (`resu_decor_option_id` ASC),
              INDEX `fk_resu_location_resu_ambiance_option1_idx` (`resu_ambiance_option_id` ASC),
              INDEX `fk_resu_location_resu_map1_idx` (`resu_map_id` ASC),
              CONSTRAINT `fk_resu_location_resu_franchise`
                FOREIGN KEY (`resu_franchise_id`)
                REFERENCES `resu_franchise` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_resu_contact1`
                FOREIGN KEY (`resu_contact_id`)
                REFERENCES `resu_contact` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_resu_price_option1`
                FOREIGN KEY (`resu_price_option_id`)
                REFERENCES `resu_price_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_resu_decor_option1`
                FOREIGN KEY (`resu_decor_option_id`)
                REFERENCES `resu_decor_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_resu_ambiance_option1`
                FOREIGN KEY (`resu_ambiance_option_id`)
                REFERENCES `resu_ambiance_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_resu_map1`
                FOREIGN KEY (`resu_map_id`)
                REFERENCES `resu_map` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_cuisine_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_cuisine_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_boolean_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_boolean_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_dress_code_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_dress_code_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_seating_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_seating_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_payment_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_payment_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_reservation_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_reservation_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_media_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_media_option` (
              `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_menu`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_menu` (
              `resu_location_id` INT UNSIGNED NOT NULL,
              `resu_menu_option_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_menu_resu_location1_idx` (`resu_location_id` ASC),
              INDEX `fk_resu_location_menu_resu_menu_option1_idx` (`resu_menu_option_id` ASC),
              CONSTRAINT `fk_resu_location_menu_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_menu_resu_menu_option1`
                FOREIGN KEY (`resu_menu_option_id`)
                REFERENCES `resu_menu_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_service`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_service` (
              `resu_location_id` INT UNSIGNED NOT NULL,
              `resu_services_option_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_service_resu_location1_idx` (`resu_location_id` ASC),
              INDEX `fk_resu_location_service_resu_services_option1_idx` (`resu_services_option_id` ASC),
              CONSTRAINT `fk_resu_location_service_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_service_resu_services_option1`
                FOREIGN KEY (`resu_services_option_id`)
                REFERENCES `resu_services_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_cuisine`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_cuisine` (
              `resu_location_id` INT UNSIGNED NOT NULL,
              `resu_cuisine_option_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_cuisine_resu_location1_idx` (`resu_location_id` ASC),
              INDEX `fk_resu_location_cuisine_resu_cuisine_option1_idx` (`resu_cuisine_option_id` ASC),
              CONSTRAINT `fk_resu_location_cuisine_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_cuisine_resu_cuisine_option1`
                FOREIGN KEY (`resu_cuisine_option_id`)
                REFERENCES `resu_cuisine_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_dress_code`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_dress_code` (
              `resu_location_id` INT UNSIGNED NOT NULL,
              `resu_dress_code_option_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_dress_code_resu_location1_idx` (`resu_location_id` ASC),
              INDEX `fk_resu_location_dress_code_resu_dress_code_option1_idx` (`resu_dress_code_option_id` ASC),
              CONSTRAINT `fk_resu_location_dress_code_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_dress_code_resu_dress_code_option1`
                FOREIGN KEY (`resu_dress_code_option_id`)
                REFERENCES `resu_dress_code_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_reservation`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_reservation` (
              `resu_location_id` INT UNSIGNED NOT NULL,
              `resu_reservation_option_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_reservation_resu_location1_idx` (`resu_location_id` ASC),
              INDEX `fk_resu_location_reservation_resu_reservation_option1_idx` (`resu_reservation_option_id` ASC),
              CONSTRAINT `fk_resu_location_reservation_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_reservation_resu_reservation_option1`
                FOREIGN KEY (`resu_reservation_option_id`)
                REFERENCES `resu_reservation_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_hours`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_hours` (
              `resu_location_id` INT UNSIGNED NOT NULL,
              `resu_hours_option_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_hours_resu_location1_idx` (`resu_location_id` ASC),
              INDEX `fk_resu_location_hours_resu_hours_option1_idx` (`resu_hours_option_id` ASC),
              CONSTRAINT `fk_resu_location_hours_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_hours_resu_hours_option1`
                FOREIGN KEY (`resu_hours_option_id`)
                REFERENCES `resu_hours_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_seating`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_seating` (
              `resu_location_id` INT UNSIGNED NOT NULL,
              `resu_seating_option_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_seating_resu_location1_idx` (`resu_location_id` ASC),
              INDEX `fk_resu_location_seating_resu_seating_option1_idx` (`resu_seating_option_id` ASC),
              CONSTRAINT `fk_resu_location_seating_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_seating_resu_seating_option1`
                FOREIGN KEY (`resu_seating_option_id`)
                REFERENCES `resu_seating_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_payment`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_payment` (
              `resu_payment_option_id` INT UNSIGNED NOT NULL,
              `resu_location_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_payment_resu_payment_option1_idx` (`resu_payment_option_id` ASC),
              INDEX `fk_resu_location_payment_resu_location1_idx` (`resu_location_id` ASC),
              CONSTRAINT `fk_resu_location_payment_resu_payment_option1`
                FOREIGN KEY (`resu_payment_option_id`)
                REFERENCES `resu_payment_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_payment_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_media`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_media` (
              `resu_media_option_id` INT UNSIGNED NOT NULL,
              `resu_location_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_media_resu_media_option1_idx` (`resu_media_option_id` ASC),
              INDEX `fk_resu_location_media_resu_location1_idx` (`resu_location_id` ASC),
              CONSTRAINT `fk_resu_location_media_resu_media_option1`
                FOREIGN KEY (`resu_media_option_id`)
                REFERENCES `resu_media_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_media_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_boolean`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_boolean` (
              `resu_location_id` INT UNSIGNED NOT NULL,
              `resu_boolean_option_id` INT UNSIGNED NOT NULL,
              INDEX `fk_resu_location_boolean_resu_location1_idx` (`resu_location_id` ASC),
              INDEX `fk_resu_location_boolean_resu_boolean_option1_idx` (`resu_boolean_option_id` ASC),
              CONSTRAINT `fk_resu_location_boolean_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_boolean_resu_boolean_option1`
                FOREIGN KEY (`resu_boolean_option_id`)
                REFERENCES `resu_boolean_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo "m160611_062020_init_resutoran is being reverted\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            DROP TABLE IF EXISTS `resu_franchise`;
            DROP TABLE IF EXISTS `resu_services_option`;
            DROP TABLE IF EXISTS `resu_hours_option`;
            DROP TABLE IF EXISTS `resu_menu_option`;
            DROP TABLE IF EXISTS `resu_contact`;
            DROP TABLE IF EXISTS `resu_price_option`;
            DROP TABLE IF EXISTS `resu_decor_option`;
            DROP TABLE IF EXISTS `resu_ambiance_option`;
            DROP TABLE IF EXISTS `resu_map`;
            DROP TABLE IF EXISTS `resu_location`;
            DROP TABLE IF EXISTS `resu_cuisine_option`;
            DROP TABLE IF EXISTS `resu_boolean_option`;
            DROP TABLE IF EXISTS `resu_dress_code_option`;
            DROP TABLE IF EXISTS `resu_seating_option`;
            DROP TABLE IF EXISTS `resu_payment_option`;
            DROP TABLE IF EXISTS `resu_reservation_option`;
            DROP TABLE IF EXISTS `resu_media_option`;
            DROP TABLE IF EXISTS `resu_location_menu`;
            DROP TABLE IF EXISTS `resu_location_service`;
            DROP TABLE IF EXISTS `resu_location_cuisine`;
            DROP TABLE IF EXISTS `resu_location_dress_code`;
            DROP TABLE IF EXISTS `resu_location_reservation`;
            DROP TABLE IF EXISTS `resu_location_hours`;
            DROP TABLE IF EXISTS `resu_location_seating`;
            DROP TABLE IF EXISTS `resu_location_payment`;
            DROP TABLE IF EXISTS `resu_location_media`;
            DROP TABLE IF EXISTS `resu_location_boolean`;
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

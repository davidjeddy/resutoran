<?php

use yii\db\Migration;

class m161016_153923_add_alcohol_and_speciality_menu_option_tables extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_alcohol_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_alcohol_option` (
              `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              `created_at` INT(11) NULL DEFAULT NULL,
              `created_by` INT(11) NOT NULL,
              `updated_at` INT(11) NULL DEFAULT NULL,
              `updated_by` INT(11) NULL DEFAULT NULL,
              `deleted_at` INT(11) NULL DEFAULT NULL,
              PRIMARY KEY (`id`))
            ENGINE = InnoDB;
            
            CREATE UNIQUE INDEX `id_UNIQUE` ON `resu_alcohol_option` (`id` ASC);

            
            -- -----------------------------------------------------
            -- Table `resu_speciality_menu_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_speciality_menu_option` (
              `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              `created_at` INT(11) NULL DEFAULT NULL,
              `created_by` INT(11) NOT NULL,
              `updated_at` INT(11) NULL DEFAULT NULL,
              `updated_by` INT(11) NULL DEFAULT NULL,
              `deleted_at` INT(11) NULL DEFAULT NULL,
              PRIMARY KEY (`id`))
            ENGINE = InnoDB;
            
            CREATE UNIQUE INDEX `id_UNIQUE` ON `resu_speciality_menu_option` (`id` ASC);


            -- -----------------------------------------------------
            -- Table `resu_location_alcohol`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_alcohol` (
              `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `resu_location_id` INT(10) UNSIGNED NOT NULL,
              `resu_alcohol_option_id` INT(11) UNSIGNED NOT NULL,
              `created_at` INT(11) NULL DEFAULT NULL,
              `created_by` INT(11) NOT NULL,
              `updated_at` INT(11) NULL DEFAULT NULL,
              `updated_by` INT(11) NULL DEFAULT NULL,
              `deleted_at` INT(11) NULL DEFAULT NULL,
              PRIMARY KEY (`id`),
              CONSTRAINT `fk_resu_location_alcohol_resu_alcohol_option1`
                FOREIGN KEY (`resu_alcohol_option_id`)
                REFERENCES `resu_alcohol_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_alcohol_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;


            -- -----------------------------------------------------
            -- Table `resu_location_speciality`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_location_speciality` (
              `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `resu_location_id` INT(10) UNSIGNED NOT NULL,
              `resu_speciality_menu_option_id` INT(11) UNSIGNED NOT NULL,
              `created_at` INT(11) NULL DEFAULT NULL,
              `created_by` INT(11) NOT NULL,
              `updated_at` INT(11) NULL DEFAULT NULL,
              `updated_by` INT(11) NULL DEFAULT NULL,
              `deleted_at` INT(11) NULL DEFAULT NULL,
              PRIMARY KEY (`id`),
              CONSTRAINT `fk_resu_location_speciality_resu_speciality_menu_option1`
                FOREIGN KEY (`resu_speciality_option_id`)
                REFERENCES `resu_speciality_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_location_speciality_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
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
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            DROP TABLE resu_alcohol_option;
            DROP TABLE resu_speciality_menu_option;
            DROP TABLE resu_location_alcohol;
            DROP TABLE resu_location_speciality;
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
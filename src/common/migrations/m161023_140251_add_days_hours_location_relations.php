<?php

use yii\db\Migration;

class m161023_140251_add_days_hours_location_relations extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            -- -----------------------------------------------------
            -- Table `resu_days_of_week_option`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_days_of_week_option` (
            `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              `abbr` VARCHAR(3) NOT NULL,
              `created_at` INT(11) NULL DEFAULT NULL,
              `created_by` INT(11) NOT NULL,
              `updated_at` INT(11) NULL DEFAULT NULL,
              `updated_by` INT(11) NULL DEFAULT NULL,
              `deleted_at` INT(11) NULL DEFAULT NULL,
              PRIMARY KEY (`id`))
            ENGINE = InnoDB;
            
            CREATE UNIQUE INDEX `id_UNIQUE` ON `resu_days_of_week_option` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_days_location_hour`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_days_location_hour` (
            `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `resu_location_id` INT(10) UNSIGNED NOT NULL,
              `resu_days_of_week_option_id` INT(11) UNSIGNED NOT NULL,
              `open` VARCHAR(12) NOT NULL,
              `close` VARCHAR(12) NOT NULL,
              `created_at` INT(11) NULL DEFAULT NULL,
              `created_by` INT(11) NOT NULL,
              `updated_at` INT(11) NULL DEFAULT NULL,
              `updated_by` INT(11) NULL DEFAULT NULL,
              `deleted_at` INT(11) NULL DEFAULT NULL,
              PRIMARY KEY (`id`),
              CONSTRAINT `fk_resu_days_location_hour_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_days_location_hour_resu_days_of_week_option1`
                FOREIGN KEY (`resu_days_of_week_option_id`)
                REFERENCES `resu_days_of_week_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            CREATE UNIQUE INDEX `id_UNIQUE` ON `resu_days_location_hour` (`id` ASC);
            
            CREATE INDEX `fk_resu_days_location_hour_resu_location1_idx` ON `resu_days_location_hour` (`resu_location_id` ASC);
            
            CREATE INDEX `fk_resu_days_location_hour_resu_days_of_week_option1_idx` ON `resu_days_location_hour` (`resu_days_of_week_option_id` ASC);
            
            
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

            -- -----------------------------------------------------
            -- Table `resu_days_of_week_option`
            -- -----------------------------------------------------
            DROP TABLE resu_days_of_week_option;
            DROP TABLE resu_days_location_hour;
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

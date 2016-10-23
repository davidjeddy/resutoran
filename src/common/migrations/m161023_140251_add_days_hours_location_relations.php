<?php

use yii\db\Migration;

class m161023_140251_add_day_hours_location_relations extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
            
            -- -----------------------------------------------------
            -- Table `resu_day_location_hour`
            -- -----------------------------------------------------
            ALTER TABLE `resu_days_option` 
            RENAME TO  `resu_day_option` ;


            -- -----------------------------------------------------
            -- Table `resu_day_hour_location_hour`
            -- -----------------------------------------------------
            CREATE TABLE IF NOT EXISTS `resu_day_hour_location` (
            `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `resu_location_id` INT(10) UNSIGNED NOT NULL,
              `resu_day_option_id` INT(11) UNSIGNED NOT NULL,
              `value` VARCHAR(12) NOT NULL,
              `created_at` INT(11) NULL DEFAULT NULL,
              `created_by` INT(11) NOT NULL,
              `updated_at` INT(11) NULL DEFAULT NULL,
              `updated_by` INT(11) NULL DEFAULT NULL,
              `deleted_at` INT(11) NULL DEFAULT NULL,
              PRIMARY KEY (`id`),
              CONSTRAINT `fk_resu_day_option_resu_location1`
                FOREIGN KEY (`resu_location_id`)
                REFERENCES `resu_location` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
              CONSTRAINT `fk_resu_day_option1`
                FOREIGN KEY (`resu_day_option_id`)
                REFERENCES `resu_day_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;
            
            CREATE UNIQUE INDEX `id_UNIQUE` ON `resu_day_hour_location` (`id` ASC);
            
            CREATE INDEX `fk_resu_day_hour_location_resu_location1_idx` ON `resu_day_hour_location` (`resu_location_id` ASC);
            
            CREATE INDEX `fk_resu_day_hour_location_resu_day_option1_idx` ON `resu_day_hour_location` (`resu_day_of_week_option_id` ASC);
            
            
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
            -- Table `resu_day_hour_location_hour`
            -- -----------------------------------------------------
            DROP TABLE resu_day_hour_location_hour;
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

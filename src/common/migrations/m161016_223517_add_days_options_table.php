<?php

use yii\db\Migration;

class m161016_223517_add_days_options_table extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            -- -----------------------------------------------------
            -- CREATE resu_days_options table
            -- -----------------------------------------------------
            
            CREATE TABLE IF NOT EXISTS `resu_days_options` (
            `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
              `value` TEXT NOT NULL,
              `created_at` INT(11) NULL DEFAULT NULL,
              `created_by` INT(11) NOT NULL,
              `updated_at` INT(11) NULL DEFAULT NULL,
              `updated_by` INT(11) NULL DEFAULT NULL,
              `deleted_at` INT(11) NULL DEFAULT NULL,
              PRIMARY KEY (`id`),
              UNIQUE INDEX `id_UNIQUE` (`id` ASC))
            ENGINE = InnoDB;        


            -- -----------------------------------------------------
            -- ALTER resu_location_hours table
            -- -----------------------------------------------------
            
            ALTER TABLE `resu_location_hours` (
            ADD COLUMN `resu_days_options_id` INT(11) UNSIGNED NOT NULL AFTER `resu_hours_option_id`;
            ALTER TABLE `resu_location_hours`
              ADD CONSTRAINT `fk_resu_location_hours_resu_days_options1`
              FOREIGN KEY (`resu_days_options_id`)
                REFERENCES `zeroforksgiven`.`resu_days_options` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION;
              

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
            -- DROP resu_days_options table
            -- -----------------------------------------------------
            
            DROP TABLE resu_days_options;


            -- -----------------------------------------------------
            -- ALTER resu_location_hours table
            -- -----------------------------------------------------
            
            ALTER TABLE `resu_location_hours`
              DROP FOREIGN KEY `resu_days_options_id`;
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

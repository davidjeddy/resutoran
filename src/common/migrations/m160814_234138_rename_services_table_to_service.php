<?php

use yii\db\Migration;

class m160814_234138_rename_services_table_to_service extends Migration
{
    public function safeUp()
    {
        echo "m160814_234138_rename_services_table_to_service is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_services_option`
            RENAME TO  `resu_service_option`;
            ALTER TABLE `resu_service_option` 
            ADD COLUMN `value` TEXT NOT NULL AFTER `id`;


            -- -----------------------------------------------------
            -- Table `resu_location_service`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_service` 
            DROP FOREIGN KEY `fk_resu_location_service_resu_services_option1`;
            
            ALTER TABLE `resu_location_service` 
            CHANGE COLUMN `resu_services_option_id` `resu_service_option_id` INT(10) UNSIGNED NOT NULL ;
            
            ALTER TABLE `resu_location_service` 
            ADD CONSTRAINT `fk_resu_location_service_resu_services_option1`
            FOREIGN KEY (`resu_service_option_id`)
            REFERENCES `resu_service_option` (`id`)
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
        echo "m160814_234138_rename_services_table_to_service is being reverted\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_service_option`
            RENAME TO  `resu_services_option`;
            ALTER TABLE `resu_service_option` 
            DROP COLUMN `value`;

            -- -----------------------------------------------------
            -- Table `resu_location_service`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_service` 
            DROP FOREIGN KEY `fk_resu_location_service_resu_services_option1`;
            
            ALTER TABLE `resu_location_service` 
            CHANGE COLUMN `resu_service_option_id` `resu_services_option_id` INT(10) UNSIGNED NOT NULL ;
            
            ALTER TABLE `resu_location_service` 
            ADD CONSTRAINT `fk_resu_location_service_resu_services_option1`
            FOREIGN KEY (`resu_service_option_id`)
            REFERENCES `resu_service_option` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION;

            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

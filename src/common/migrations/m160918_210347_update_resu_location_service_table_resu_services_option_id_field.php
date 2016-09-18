<?php

use yii\db\Migration;

class m160918_210347_update_resu_location_service_table_resu_services_option_id_field extends Migration
{
    public function safeUp()
    {
        echo "m160918_210347_update_resu_location_service_table_resu_services_option_id_field is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


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
        echo "m160918_210347_update_resu_location_service_table_resu_services_option_id_field is being reverted\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_location_service`
            -- -----------------------------------------------------

            ALTER TABLE `resu_location_service`
            DROP FOREIGN KEY `fk_resu_location_service_resu_service_option1`;
            ALTER TABLE `resu_location_service`
            CHANGE COLUMN `resu_service_option_id` `resu_services_option_id` INT(10) UNSIGNED NOT NULL ;
            ALTER TABLE `resu_location_service`
            ADD CONSTRAINT `fk_resu_location_service_resu_services_option1`
              FOREIGN KEY (`resu_services_option_id`)
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

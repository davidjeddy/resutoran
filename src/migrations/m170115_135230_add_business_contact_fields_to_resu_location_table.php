<?php

use yii\db\Migration;

class m170115_135230_add_business_contact_fields_to_resu_location_table extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
            
            ALTER TABLE `zfg`.`resu_location` 
                CHANGE COLUMN `phone` `phone` VARCHAR(16) NULL DEFAULT NULL ,
                CHANGE COLUMN `deleted_at` `deleted_at` INT(11) UNSIGNED NULL DEFAULT NULL ,
                ADD COLUMN `business_contact_name` TEXT NULL DEFAULT NULL AFTER `resu_state_id`,
                ADD COLUMN `business_phone` VARCHAR(16) NULL DEFAULT NULL AFTER `business_contact_name`,
                ADD COLUMN `business_email` VARCHAR(64) NULL DEFAULT NULL AFTER `business_phone`;


            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo __METHOD__ . " is being reverted.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            CHANGE COLUMN `phone` `phone` VARCHAR(64) NULL DEFAULT NULL ,
                DROP COLUMN `business_contact_name`,
                DROP COLUMN `business_email`,
                DROP COLUMN `business_phone`;
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

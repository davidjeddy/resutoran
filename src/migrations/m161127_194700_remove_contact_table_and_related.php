<?php

use yii\db\Migration;

class m161127_194700_remove_contact_table_and_related extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            ALTER TABLE `resu_location` 
                ADD COLUMN `address_1` TEXT NULL AFTER `resu_map_id`,
                ADD COLUMN `address_2` TEXT NULL AFTER `address_1`,
                ADD COLUMN `resu_state_id` INT(11) NULL AFTER `address_2`,
                ADD COLUMN `resu_country_id` INT(11) NULL AFTER `resu_state_id`,
                ADD COLUMN `phone` VARCHAR(64) NULL AFTER `resu_country_id`,
                ADD COLUMN `email` VARCHAR(64) NULL AFTER `phone`;

                
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

            ALTER TABLE `resu_location` 
                DROP COLUMN `address_1` TEXT NULL AFTER `resu_map_id`,
                DROP COLUMN `address_2` TEXT NULL AFTER `address_1`,
                DROP COLUMN `resu_state_id` INT(11) NULL AFTER `address_2`,
                DROP COLUMN `resu_country_id` INT(11) NULL AFTER `resu_state_id`,
                DROP COLUMN `phone` INT(11) NULL AFTER `resu_country_id`,
                DROP COLUMN `email` VARCHAR(128) NULL AFTER `phone`;

                
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

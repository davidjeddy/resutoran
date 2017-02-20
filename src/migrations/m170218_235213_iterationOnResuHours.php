<?php

use yii\db\Migration;

class m170218_235213_iterationOnResuHours extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            ALTER TABLE `resu_hour_value`
            RENAME TO  `resu_location_hour`,
            ADD COLUMN `resu_location_id` INT(11) NULL DEFAULT NULL AFTER `id`,
            ADD COLUMN `resu_day_option_id` INT(11) NULL DEFAULT NULL AFTER `resu_location_id`,
            CHANGE COLUMN `value` `open` VARCHAR(5) NULL DEFAULT NULL AFTER `day_id`,
            ADD COLUMN `close` VARCHAR(5) NULL DEFAULT NULL AFTER `open`;
            
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
            
            ALTER TABLE `resu_location_hour` 
            RENAME TO  `resu_hour_value`,
            DROP COLUMN `resu_location_id`,
            DROP COLUMN `resu_day_option_id_id`,
            CHANGE COLUMN `open` `value` TEXT NULL DEFAULT NULL,
            DROP COLUMN `close`;
                
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

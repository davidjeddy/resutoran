<?php

use yii\db\Migration;

class m161106_135101_change_how_menu_and_pricing_work extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            ALTER TABLE `resu_menu_option`
                DROP COLUMN `high_price`,
                DROP COLUMN `low_price`;

            ALTER TABLE `resu_location_menu` 
                ADD COLUMN `high_price` DECIMAL(4,2) NULL DEFAULT NULL AFTER `resu_menu_option_id`,
                ADD COLUMN `low_price` DECIMAL(4,2) NULL DEFAULT NULL AFTER `high_price`;
                
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

            ALTER TABLE `resu_location_menu`
                DROP COLUMN `resu_menu_option`.`high_price`,
                DROP COLUMN `resu_menu_option`.`low_price`;

            ALTER TABLE `resu_menu_option` 
                ADD COLUMN `high_price` DECIMAL(4,2) NULL DEFAULT NULL AFTER `resu_menu_option_id`,
                ADD COLUMN `low_price` DECIMAL(4,2) NULL DEFAULT NULL AFTER `high_price`;

            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}



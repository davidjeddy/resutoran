<?php

use yii\db\Migration;

class m161204_131721_edit_resu_location_1st_level_relations extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        // source: http://kimbriggs.com/computer/mysql-create-us-state-table-script
        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            ALTER TABLE `zeroforksgiven`.`resu_location` 
                CHANGE COLUMN `resu_franchise_id` `resu_franchise_id` INT(10) NULL DEFAULT NULL ,
                CHANGE COLUMN `resu_decor_option_id` `resu_decor_option_id` INT(10) NULL DEFAULT NULL ,
                CHANGE COLUMN `resu_ambiance_option_id` `resu_ambiance_option_id` INT(10) NULL DEFAULT NULL ,
                CHANGE COLUMN `resu_map_id` `resu_map_id` INT(11) NULL DEFAULT NULL ;


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

            ALTER TABLE `zeroforksgiven`.`resu_location` 
                CHANGE COLUMN `resu_franchise_id` `resu_franchise_id` INT(10) NOT NULL,
                CHANGE COLUMN `resu_decor_option_id` `resu_decor_option_id` INT(10) NOT NULL,
                CHANGE COLUMN `resu_ambiance_option_id` `resu_ambiance_option_id` INT(10) NOT NULL,
                CHANGE COLUMN `resu_map_id` `resu_map_id` INT(11) NOT NULL;
                
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

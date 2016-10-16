<?php

use yii\db\Migration;

class m161016_232224_alter_hours_option_for_open_close_fields extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            -- -----------------------------------------------------
            -- INSERT resu_hours_option table default values
            -- -----------------------------------------------------
            
            ALTER TABLE `resu_hours_option` 
            CHANGE COLUMN `value` `open` VARCHAR(5) NOT NULL ,
            ADD COLUMN `close` VARCHAR(5) NOT NULL AFTER `open`;
              

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
            -- DROP resu_hours_option table
            -- -----------------------------------------------------
            
            ALTER TABLE `zeroforksgiven`.`resu_hours_option` 
            DROP COLUMN `close`,
            CHANGE COLUMN `open` `value` TEXT NOT NULL ;

            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}




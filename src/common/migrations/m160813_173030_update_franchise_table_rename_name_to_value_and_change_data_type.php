<?php

use yii\db\Migration;

class m160813_173030_update_franchise_table_rename_name_to_value_and_change_data_type extends Migration
{
    public function safeUp()
    {
        echo "m160813_173030_update_franchise_table_rename_name_to_value_and_change_data_type is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_franchise`
            -- -----------------------------------------------------
            ALTER TABLE `resu_franchise`
            CHANGE COLUMN `name` `value` TEXT NOT NULL ,
            DROP INDEX `name_UNIQUE` ;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location`
            -- -----------------------------------------------------            
            ALTER TABLE `resu_location` 
            CHANGE COLUMN `name` `value` TEXT NOT NULL ;

            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo "m160813_173030_update_franchise_table_rename_name_to_value_and_change_data_type is being reverted\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_franchise`
            -- -----------------------------------------------------
            ALTER TABLE `resu_franchise`
            CHANGE COLUMN `value` `name` VARCHAR(128) NOT NULL ,
            ADD UNIQUE INDEX `name_UNIQUE` (`name` ASC);


            -- -----------------------------------------------------
            -- Table `resu_location`
            -- -----------------------------------------------------            
            ALTER TABLE `resu_location` 
            CHANGE COLUMN `value` `name` VARCHAR(64) NOT NULL ;

            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

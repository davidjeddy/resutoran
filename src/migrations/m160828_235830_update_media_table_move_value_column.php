<?php

use yii\db\Migration;

class m160828_235830_update_media_table_move_value_column extends Migration
{
    public function safeUp()
    {
        echo "m160814_235830_update_tables_add_value_field_where_missing is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_media_option`
            -- -----------------------------------------------------

            ALTER TABLE `resu_media_option`
            CHANGE COLUMN `value` `value` VARCHAR(64) NOT NULL AFTER `id`;
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo "m160814_235830_update_tables_add_value_field_where_missing is being reverted\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_media_option`
            -- -----------------------------------------------------

            ALTER TABLE `resu_media_option`
            CHANGE COLUMN `value` `value` VARCHAR(64) NOT NULL AFTER `deleted_at`;
            

            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

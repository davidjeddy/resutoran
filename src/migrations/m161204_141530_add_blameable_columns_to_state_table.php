<?php

use yii\db\Migration;

class m161204_141530_add_blameable_columns_to_state_table extends Migration
{
    public function safeUp()
    {
        echo "m161204_141530_add_blameable_columns_to_state_table is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
            
            -- -----------------------------------------------------
            -- Table `resu_state`
            -- -----------------------------------------------------
            ALTER TABLE `resu_state`
            ADD COLUMN `created_at` INT DEFAULT NULL,
            ADD COLUMN `created_by` INT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            UPDATE `resu_state` SET created_by = 1;
            UPDATE `resu_state` SET created_at = UNIX_TIMESTAMP(NOW());
            
            ALTER TABLE `resu_state` 
                CHANGE COLUMN `created_at` `created_at` INT NOT NULL ,
                CHANGE COLUMN `created_by` `created_by` INT NOT NULL;


            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo "m161204_141530_add_blameable_columns_to_state_table is being reverted.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            -- -----------------------------------------------------
            -- Table `resu_state`
            -- -----------------------------------------------------
            ALTER TABLE `resu_state`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

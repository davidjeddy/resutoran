<?php

use yii\db\Migration;

class m160611_074706_init_data extends Migration
{
    public function safeUp()
    {
        echo "m160611_074706_init_data is being executed.\n";

        echo "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            -- -----------------------------------------------------
            -- Table `resu_media_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_media_option` 
            ADD COLUMN `value` VARCHAR(64) NOT NULL AFTER `deleted_at`;

            INSERT INTO `resu_media_option`(`id`,`created_at`,`created_by`,`value`) VALUES (1, 0, 0, 'audio');
            INSERT INTO `resu_media_option`(`id`,`created_at`,`created_by`,`value`) VALUES (2, 0, 0, 'image');
            INSERT INTO `resu_media_option`(`id`,`created_at`,`created_by`,`value`) VALUES (3, 0, 0, 'video');
            INSERT INTO `resu_media_option`(`id`,`created_at`,`created_by`,`value`) VALUES (4, 0, 0, 'panoramic');
            INSERT INTO `resu_media_option`(`id`,`created_at`,`created_by`,`value`) VALUES (5, 0, 0, 'vr');


            -- -----------------------------------------------------
            -- Table `resu_menu_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_menu_option` 
            ADD COLUMN `value` VARCHAR(64) NOT NULL AFTER `deleted_at`;
            
            INSERT INTO `resu_menu_option`(`id`,`created_at`,`created_by`,`value`) VALUES (1, 0, 0, 'child');
            INSERT INTO `resu_menu_option`(`id`,`created_at`,`created_by`,`value`) VALUES (2, 0, 0, 'vegan');
            INSERT INTO `resu_menu_option`(`id`,`created_at`,`created_by`,`value`) VALUES (3, 0, 0, 'gluten free');
            INSERT INTO `resu_menu_option`(`id`,`created_at`,`created_by`,`value`) VALUES (4, 0, 0, 'daily special');
            INSERT INTO `resu_menu_option`(`id`,`created_at`,`created_by`,`value`) VALUES (5, 0, 0, 'peanut free');


            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_services_option` 
            ADD COLUMN `value` VARCHAR(64) NOT NULL AFTER `deleted_at`;
            
            INSERT INTO `resu_services_option`(`id`,`created_at`,`created_by`,`value`) VALUES (1, 0, 0, 'alcohol');
            INSERT INTO `resu_services_option`(`id`,`created_at`,`created_by`,`value`) VALUES (2, 0, 0, 'wifi');
            INSERT INTO `resu_services_option`(`id`,`created_at`,`created_by`,`value`) VALUES (3, 0, 0, 'delivery');
            INSERT INTO `resu_services_option`(`id`,`created_at`,`created_by`,`value`) VALUES (4, 0, 0, 'take out');
            INSERT INTO `resu_services_option`(`id`,`created_at`,`created_by`,`value`) VALUES (5, 0, 0, 'curbside');
            INSERT INTO `resu_services_option`(`id`,`created_at`,`created_by`,`value`) VALUES (6, 0, 0, 'handy-capable');

            
            -- -----------------------------------------------------
            -- Table `resu_map`
            -- ----------------------------------------------------- 
            ALTER TABLE `resu_map` 
            ADD COLUMN `value` VARCHAR(64) NOT NULL AFTER `deleted_at`,
            ADD COLUMN `provider` TEXT NOT NULL AFTER `value`;

            INSERT INTO `resu_map`(`id`,`created_at`,`created_by`,`value`, `provider`) VALUES (1, 0, 0, 'qwer', 'google');
            INSERT INTO `resu_map`(`id`,`created_at`,`created_by`,`value`, `provider`) VALUES (2, 0, 0, 'asdf', 'bing');
            INSERT INTO `resu_map`(`id`,`created_at`,`created_by`,`value`, `provider`) VALUES (3, 0, 0, 'zxcv', 'other');
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return true;
    }

    public function safeDown()
    {
        echo "m160611_074706_init_data is being reverted.\n";

        echo "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            -- -----------------------------------------------------
            -- Table `resu_media_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_media_option` 
            DROP COLUMN `value`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_menu_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_menu_option` 
            DROP COLUMN `value`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_services_option` 
            DROP COLUMN `value`;


            -- -----------------------------------------------------
            -- Table `resu_map`
            -- ----------------------------------------------------- 
            ALTER TABLE `resu_map` 
            DROP COLUMN `value`,
            DROP COLUMN `url`;


            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return true;
    }
}

<?php

use yii\db\Migration;

class m160611_064319_add_blameable_columns extends Migration
{
    public function safeUp()
    {
        echo "m160611_064319_add_blameable_columns is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
            
            
            -- -----------------------------------------------------
            -- Table `resu_franchise`
            -- -----------------------------------------------------
            ALTER TABLE `resu_franchise`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_services_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_hours_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_hours_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_menu_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_menu_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_contact`
            -- -----------------------------------------------------
            ALTER TABLE `resu_contact`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_price_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_price_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_decor_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_decor_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_ambiance_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_ambiance_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_map`
            -- -----------------------------------------------------
            ALTER TABLE `resu_map`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_cuisine_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_cuisine_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_boolean_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_boolean_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_dress_code_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_dress_code_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_seating_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_seating_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_payment_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_payment_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_reservation_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_reservation_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_media_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_media_option`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_menu`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_menu`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_service`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_service`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_cuisine`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_cuisine`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_dress_code`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_dress_code`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_reservation`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_reservation`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_hours`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_hours`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_seating`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_seating`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_payment`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_payment`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_media`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_media`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_boolean`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_boolean`
            ADD COLUMN `created_at` INT,
            ADD COLUMN `created_by` INT NOT NULL AFTER `created_at`,
            ADD COLUMN `updated_at` INT NULL DEFAULT NULL AFTER `created_by`,
            ADD COLUMN `updated_by` INT NULL DEFAULT NULL AFTER `updated_at`,
            ADD COLUMN `deleted_at` INT NULL DEFAULT NULL AFTER `updated_by`;
            
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo "m160611_064319_add_blameable_columns is being reverted.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_franchise`
            -- -----------------------------------------------------
            ALTER TABLE `resu_franchise`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_services_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_hours_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_hours_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_menu_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_menu_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_contact`
            -- -----------------------------------------------------
            ALTER TABLE `resu_contact`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_price_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_price_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_decor_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_decor_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_ambiance_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_ambiance_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_map`
            -- -----------------------------------------------------
            ALTER TABLE `resu_map`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_cuisine_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_cuisine_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_boolean_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_boolean_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_dress_code_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_dress_code_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_seating_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_seating_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_payment_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_payment_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_reservation_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_reservation_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_media_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_media_option`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_menu`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_menu`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_service`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_service`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_cuisine`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_cuisine`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_dress_code`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_dress_code`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_reservation`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_reservation`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_hours`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_hours`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_seating`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_seating`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_payment`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_payment`
            -- -----------------------------------------------------
            -- Table `resu_location_media`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_media`
            DROP COLUMN `deleted_at`,
            DROP COLUMN `updated_by`,
            DROP COLUMN `updated_at`,
            DROP COLUMN `created_by`,
            DROP COLUMN `created_at`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_boolean`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_boolean`
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

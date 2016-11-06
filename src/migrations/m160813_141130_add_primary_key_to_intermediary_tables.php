<?php

use yii\db\Migration;

class m160813_141130_add_primary_key_to_intermediary_tables extends Migration
{
    public function safeUp()
    {
        echo "m160813_141130_add_primary_key_to_intermediary_tables is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_location_service`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_service`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_cuisine`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_cuisine`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_dress_code`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_dress_code`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_reservation`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_reservation`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_hours`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_hours`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_seating`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_seating`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_payment`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_payment`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_media`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_media`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_boolean`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_boolean`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_menu`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_menu`
            ADD COLUMN `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT FIRST,
            ADD PRIMARY KEY (`id`),
            ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo "m160813_141130_add_primary_key_to_intermediary_tables is being reverted\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_location_service`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_service`
            DROP COLUMN `id`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_cuisine`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_cuisine`
            DROP COLUMN `id`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_dress_code`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_dress_code`
            DROP COLUMN `id`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_reservation`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_reservation`
            DROP COLUMN `id`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_hours`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_hours`
            DROP COLUMN `id`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_seating`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_seating`
            DROP COLUMN `id`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_payment`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_payment`
            DROP COLUMN `id`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_media`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_media`
            DROP COLUMN `id`;
            
            
            -- -----------------------------------------------------
            -- Table `resu_location_boolean`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_boolean`
            DROP COLUMN `id`;


            -- -----------------------------------------------------
            -- Table `resu_location_menu`
            -- -----------------------------------------------------
            ALTER TABLE `resu_location_menu`
            DROP COLUMN `id`;
            
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

<?php

use yii\db\Migration;

class m161120_004500_remove_specialty_alcohol_service_reservations_price_tables extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        echo 'NOT REVERSIBLE!';

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            DROP TABLE IF EXISTS `resu_location_speciality_menu`;
            DROP TABLE IF EXISTS `resu_location_service`;
            DROP TABLE IF EXISTS `resu_location_reservation`;
            DROP TABLE IF EXISTS `resu_location_alcohol`;

            DROP TABLE IF EXISTS `resu_speciality_menu_option`;
            DROP TABLE IF EXISTS `resu_service_option`;
            DROP TABLE IF EXISTS `resu_reservation_option`;
            DROP TABLE IF EXISTS `resu_alcohol_option`;
            DROP TABLE IF EXISTS `resu_price_option`;
                
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo __METHOD__ . " is being executed.\n";

        echo 'NOT REVERSIBLE!';

        return true;
    }
}



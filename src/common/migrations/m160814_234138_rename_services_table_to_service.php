<?php

use yii\db\Migration;

class m160814_234138_rename_services_table_to_service extends Migration
{
    public function safeUp()
    {
        echo "m160814_234138_rename_services_table_to_service is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_services_option`
            RENAME TO  `resu_service_option`;

            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo "m160814_234138_rename_services_table_to_service is being reverted\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


            -- -----------------------------------------------------
            -- Table `resu_services_option`
            -- -----------------------------------------------------
            ALTER TABLE `resu_service_option`
            RENAME TO  `resu_services_option`;

            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

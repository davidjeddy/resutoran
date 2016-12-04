<?php

use yii\db\Migration;

class m161204_120615_add_us_province_table_and_data extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        // source: http://kimbriggs.com/computer/mysql-create-us-state-table-script
        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            drop table if exists resu_state;
              
            create table resu_state
            (
                id   smallint    unsigned not null auto_increment comment 'PK: State ID',
                name varchar(32) not null comment 'State name with first letter capital',
                abbr varchar(8)  comment 'Optional state abbreviation (US 2 cap letters)',
            
                primary key (id)
            );
              
            insert into resu_state
            values
            (NULL, 'Alabama', 'AL'),
            (NULL, 'Alaska', 'AK'),
            (NULL, 'Arizona', 'AZ'),
            (NULL, 'Arkansas', 'AR'),
            (NULL, 'California', 'CA'),
            (NULL, 'Colorado', 'CO'),
            (NULL, 'Connecticut', 'CT'),
            (NULL, 'Delaware', 'DE'),
            (NULL, 'District of Columbia', 'DC'),
            (NULL, 'Florida', 'FL'),
            (NULL, 'Georgia', 'GA'),
            (NULL, 'Hawaii', 'HI'),
            (NULL, 'Idaho', 'ID'),
            (NULL, 'Illinois', 'IL'),
            (NULL, 'Indiana', 'IN'),
            (NULL, 'Iowa', 'IA'),
            (NULL, 'Kansas', 'KS'),
            (NULL, 'Kentucky', 'KY'),
            (NULL, 'Louisiana', 'LA'),
            (NULL, 'Maine', 'ME'),
            (NULL, 'Maryland', 'MD'),
            (NULL, 'Massachusetts', 'MA'),
            (NULL, 'Michigan', 'MI'),
            (NULL, 'Minnesota', 'MN'),
            (NULL, 'Mississippi', 'MS'),
            (NULL, 'Missouri', 'MO'),
            (NULL, 'Montana', 'MT'),
            (NULL, 'Nebraska', 'NE'),
            (NULL, 'Nevada', 'NV'),
            (NULL, 'New Hampshire', 'NH'),
            (NULL, 'New Jersey', 'NJ'),
            (NULL, 'New Mexico', 'NM'),
            (NULL, 'New York', 'NY'),
            (NULL, 'North Carolina', 'NC'),
            (NULL, 'North Dakota', 'ND'),
            (NULL, 'Ohio', 'OH'),
            (NULL, 'Oklahoma', 'OK'),
            (NULL, 'Oregon', 'OR'),
            (NULL, 'Pennsylvania', 'PA'),
            (NULL, 'Rhode Island', 'RI'),
            (NULL, 'South Carolina', 'SC'),
            (NULL, 'South Dakota', 'SD'),
            (NULL, 'Tennessee', 'TN'),
            (NULL, 'Texas', 'TX'),
            (NULL, 'Utah', 'UT'),
            (NULL, 'Vermont', 'VT'),
            (NULL, 'Virginia', 'VA'),
            (NULL, 'Washington', 'WA'),
            (NULL, 'West Virginia', 'WV'),
            (NULL, 'Wisconsin', 'WI'),
            (NULL, 'Wyoming', 'WY');

                
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

            drop table if exists resu_state;

                
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

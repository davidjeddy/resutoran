<?php

use yii\db\Migration;

class m170129_182530_add_country_table_and_data extends Migration
{
    public function safeUp()
    {
        echo __METHOD__ . " is being executed.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

            CREATE TABLE `resu_country` (
                `id` int(11) NOT NULL auto_increment,
                `abbr` varchar(2) NOT NULL default '',
                `name` varchar(100) NOT NULL default '',
                `created_at` NOT NULL INT(11),
                `created_by` NOT NULL INT(11)
                `updated_at` NULL INT(11),
                `updated_by` NULL INT(11),
                `deleted_at` NULL INT(11)
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
            
            --
            -- Dumping data for table `apps_countries`
            --
            INSERT INTO `apps_countries` VALUES (null, 'AF', 'Afghanistan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AL', 'Albania', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'DZ', 'Algeria', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'DS', 'American Samoa', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AD', 'Andorra', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AO', 'Angola', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AI', 'Anguilla', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AQ', 'Antarctica', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AG', 'Antigua and Barbuda', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AR', 'Argentina', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AM', 'Armenia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AW', 'Aruba', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AU', 'Australia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AT', 'Austria', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AZ', 'Azerbaijan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BS', 'Bahamas', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BH', 'Bahrain', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BD', 'Bangladesh', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BB', 'Barbados', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BY', 'Belarus', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BE', 'Belgium', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BZ', 'Belize', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BJ', 'Benin', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BM', 'Bermuda', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BT', 'Bhutan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BO', 'Bolivia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BA', 'Bosnia and Herzegovina', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BW', 'Botswana', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BV', 'Bouvet Island', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BR', 'Brazil', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IO', 'British Indian Ocean Territory', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BN', 'Brunei Darussalam', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BG', 'Bulgaria', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BF', 'Burkina Faso', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'BI', 'Burundi', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KH', 'Cambodia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CM', 'Cameroon', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CA', 'Canada', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CV', 'Cape Verde', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KY', 'Cayman Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CF', 'Central African Republic', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TD', 'Chad', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CL', 'Chile', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CN', 'China', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CX', 'Christmas Island', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CC', 'Cocos (Keeling) Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CO', 'Colombia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KM', 'Comoros', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CG', 'Congo', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CK', 'Cook Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CR', 'Costa Rica', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'HR', 'Croatia (Hrvatska)', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CU', 'Cuba', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CY', 'Cyprus', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CZ', 'Czech Republic', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'DK', 'Denmark', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'DJ', 'Djibouti', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'DM', 'Dominica', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'DO', 'Dominican Republic', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TP', 'East Timor', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'EC', 'Ecuador', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'EG', 'Egypt', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SV', 'El Salvador', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GQ', 'Equatorial Guinea', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ER', 'Eritrea', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'EE', 'Estonia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ET', 'Ethiopia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'FK', 'Falkland Islands (Malvinas)', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'FO', 'Faroe Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'FJ', 'Fiji', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'FI', 'Finland', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'FR', 'France', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'FX', 'France, Metropolitan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GF', 'French Guiana', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PF', 'French Polynesia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TF', 'French Southern Territories', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GA', 'Gabon', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GM', 'Gambia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GE', 'Georgia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'DE', 'Germany', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GH', 'Ghana', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GI', 'Gibraltar', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GK', 'Guernsey', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GR', 'Greece', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GL', 'Greenland', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GD', 'Grenada', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GP', 'Guadeloupe', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GU', 'Guam', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GT', 'Guatemala', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GN', 'Guinea', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GW', 'Guinea-Bissau', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GY', 'Guyana', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'HT', 'Haiti', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'HM', 'Heard and Mc Donald Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'HN', 'Honduras', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'HK', 'Hong Kong', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'HU', 'Hungary', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IS', 'Iceland', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IN', 'India', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IM', 'Isle of Man', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ID', 'Indonesia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IR', 'Iran (Islamic Republic of)', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IQ', 'Iraq', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IE', 'Ireland', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IL', 'Israel', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'IT', 'Italy', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CI', 'Ivory Coast', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'JE', 'Jersey', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'JM', 'Jamaica', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'JP', 'Japan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'JO', 'Jordan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KZ', 'Kazakhstan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KE', 'Kenya', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KI', 'Kiribati', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KP', 'Korea, Democratic People''s Republic of', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KR', 'Korea, Republic of', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'XK', 'Kosovo', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KW', 'Kuwait', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KG', 'Kyrgyzstan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LA', 'Lao People''s Democratic Republic', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LV', 'Latvia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LB', 'Lebanon', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LS', 'Lesotho', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LR', 'Liberia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LY', 'Libyan Arab Jamahiriya', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LI', 'Liechtenstein', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LT', 'Lithuania', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LU', 'Luxembourg', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MO', 'Macau', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MK', 'Macedonia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MG', 'Madagascar', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MW', 'Malawi', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MY', 'Malaysia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MV', 'Maldives', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ML', 'Mali', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MT', 'Malta', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MH', 'Marshall Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MQ', 'Martinique', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MR', 'Mauritania', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MU', 'Mauritius', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TY', 'Mayotte', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MX', 'Mexico', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'FM', 'Micronesia, Federated States of', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MD', 'Moldova, Republic of', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MC', 'Monaco', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MN', 'Mongolia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ME', 'Montenegro', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MS', 'Montserrat', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MA', 'Morocco', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MZ', 'Mozambique', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MM', 'Myanmar', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NA', 'Namibia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NR', 'Nauru', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NP', 'Nepal', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NL', 'Netherlands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AN', 'Netherlands Antilles', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NC', 'New Caledonia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NZ', 'New Zealand', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NI', 'Nicaragua', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NE', 'Niger', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NG', 'Nigeria', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NU', 'Niue', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NF', 'Norfolk Island', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'MP', 'Northern Mariana Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'NO', 'Norway', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'OM', 'Oman', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PK', 'Pakistan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PW', 'Palau', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PS', 'Palestine', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PA', 'Panama', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PG', 'Papua New Guinea', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PY', 'Paraguay', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PE', 'Peru', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PH', 'Philippines', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PN', 'Pitcairn', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PL', 'Poland', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PT', 'Portugal', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PR', 'Puerto Rico', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'QA', 'Qatar', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'RE', 'Reunion', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'RO', 'Romania', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'RU', 'Russian Federation', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'RW', 'Rwanda', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'KN', 'Saint Kitts and Nevis', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LC', 'Saint Lucia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'VC', 'Saint Vincent and the Grenadines', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'WS', 'Samoa', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SM', 'San Marino', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ST', 'Sao Tome and Principe', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SA', 'Saudi Arabia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SN', 'Senegal', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'RS', 'Serbia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SC', 'Seychelles', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SL', 'Sierra Leone', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SG', 'Singapore', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SK', 'Slovakia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SI', 'Slovenia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SB', 'Solomon Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SO', 'Somalia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ZA', 'South Africa', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GS', 'South Georgia South Sandwich Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ES', 'Spain', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'LK', 'Sri Lanka', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SH', 'St. Helena', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'PM', 'St. Pierre and Miquelon', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SD', 'Sudan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SR', 'Suriname', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SJ', 'Svalbard and Jan Mayen Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SZ', 'Swaziland', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SE', 'Sweden', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'CH', 'Switzerland', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'SY', 'Syrian Arab Republic', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TW', 'Taiwan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TJ', 'Tajikistan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TZ', 'Tanzania, United Republic of', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TH', 'Thailand', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TG', 'Togo', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TK', 'Tokelau', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TO', 'Tonga', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TT', 'Trinidad and Tobago', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TN', 'Tunisia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TR', 'Turkey', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TM', 'Turkmenistan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TC', 'Turks and Caicos Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'TV', 'Tuvalu', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'UG', 'Uganda', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'UA', 'Ukraine', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'AE', 'United Arab Emirates', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'GB', 'United Kingdom', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'US', 'United States', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'UM', 'United States minor outlying islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'UY', 'Uruguay', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'UZ', 'Uzbekistan', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'VU', 'Vanuatu', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'VA', 'Vatican City State', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'VE', 'Venezuela', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'VN', 'Vietnam', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'VG', 'Virgin Islands (British)', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'VI', 'Virgin Islands (U.S.)', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'WF', 'Wallis and Futuna Islands', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'EH', 'Western Sahara', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'YE', 'Yemen', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ZR', 'Zaire', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ZM', 'Zambia', 0, 1);
            INSERT INTO `apps_countries` VALUES (null, 'ZW', 'Zimbabwe', 0, 1);

            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }

    public function safeDown()
    {
        echo __METHOD__ . " is being reverted.\n";

        $command = "
            SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
            SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
            SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
            
            DROP TABLE `resu_country`;
                
            SET SQL_MODE=@OLD_SQL_MODE;
            SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
            SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
        ";

        return $this->execute($command);
    }
}

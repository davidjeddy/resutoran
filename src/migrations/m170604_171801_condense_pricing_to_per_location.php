<?php

use yii\db\Migration;

class m170604_171801_condense_pricing_to_per_location extends Migration
{
    public function safeUp()
    {
        echo "Executing" . __METHOD__ . ".\n";

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // create new resu_location_price table
        $this->createTable('{{%resu_location_price}}', [
            'id'                => $this->primaryKey(),
            'resu_location_id'  => $this->integer(10)->notNull(),
            'low'               => $this->decimal(11)->defaultValue(null),
            'high'              => $this->decimal(11)->defaultValue(null),
            'created_at'        => $this->integer(11)->notNull(),
            'created_by'        => $this->integer(11)->notNull(),
            'updated_at'        => $this->integer(11)->defaultValue(null),
            'updated_by'        => $this->integer(11)->defaultValue(null),
            'deleted_at'        => $this->integer(11)->defaultValue(null),
        ], $tableOptions);

        // create FK to resu_location
        // TODO why does this not work?
        // $this->addForeignKey('fk_resu_location_price_resu_location1', '{{%resu_location_price}}', 'resu_location_id', '{{%resu_location}}', 'id', 'cascade', 'cascade');

        // mark resu_location_menu as deprecated in the table notes
        $this->addCommentOnTable('{{%resu_location_menu}}', '@deprecated as of 0.0.3; To be removed 0.0.4');
    }

    public function safeDown()
    {
        echo "Executing" . __METHOD__ . ".\n";

        $this->dropForeignKey('fk_price_location1', '{{%resu_location_price}}');
        $this->dropTable('{{%resu_location_price}}');
    }
}

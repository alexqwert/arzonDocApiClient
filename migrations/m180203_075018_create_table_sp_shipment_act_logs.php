<?php

use yii\db\Migration;

class m180203_075018_create_table_sp_shipment_act_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_shipment_act_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'act_id' => $this->integer(11)->notNull(),
            'storage_from' => $this->integer(11)->notNull(),
            'storage_to' => $this->integer(11)->notNull(),
            'good_id' => $this->integer(11)->notNull(),
            'good_count' => $this->double()->notNull(),
            'good_price' => $this->double()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_shipment_act_logs}}');
    }
}

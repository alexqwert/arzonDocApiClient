<?php

use yii\db\Migration;

class m180203_075018_create_table_sp_shipment_act extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_shipment_act}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'datetime' => $this->dateTime()->notNull(),
            'status' => $this->integer(11)->notNull(),
            'user_send' => $this->integer(11)->notNull(),
            'user_accept' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_shipment_act}}');
    }
}

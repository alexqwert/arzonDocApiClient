<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_inventory_act extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_inventory_act}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'filial' => $this->integer(11)->notNull(),
            'storage' => $this->integer(11)->notNull(),
            'good' => $this->integer(11)->notNull(),
            'price' => $this->double()->notNull(),
            'start' => $this->integer(11)->notNull(),
            'end' => $this->integer(11)->notNull(),
            'description' => $this->text()->notNull(),
            'date' => $this->date()->notNull(),
            'user' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_inventory_act}}');
    }
}

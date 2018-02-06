<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_arrival_act extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_arrival_act}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'storage' => $this->integer(11)->notNull(),
            'partner' => $this->integer(11)->notNull(),
            'date' => $this->date()->notNull(),
            'time' => $this->time()->notNull(),
            'status' => $this->integer(11)->notNull(),
            'user' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_arrival_act}}');
    }
}

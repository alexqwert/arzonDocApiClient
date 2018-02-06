<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_events extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_events}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'surname' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'lastname' => $this->string(255)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'mobile_phone' => $this->string(255)->notNull(),
            'color' => $this->string(7),
            'start' => $this->dateTime()->notNull(),
            'end' => $this->dateTime(),
            'doctor' => $this->integer(11)->notNull(),
            'user' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_events}}');
    }
}

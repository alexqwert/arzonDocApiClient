<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_doctors_rec extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_doctors_rec}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'doctor' => $this->integer(11)->notNull(),
            'user' => $this->integer(11)->notNull(),
            'firstname' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'lastname' => $this->string(255)->notNull(),
            'date' => $this->date()->notNull(),
            'time' => $this->time()->notNull(),
            'waiting' => $this->integer(11)->notNull(),
            'status' => $this->integer(11)->notNull(),
            'tel' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_doctors_rec}}');
    }
}

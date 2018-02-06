<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_hospital_place_records extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_hospital_place_records}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'place_id' => $this->integer(11)->notNull(),
            'client_id' => $this->integer(11)->notNull(),
            'log_id' => $this->integer(11)->notNull(),
            'date_start' => $this->dateTime()->notNull(),
            'date_stop' => $this->dateTime()->notNull(),
            'description' => $this->string(255)->notNull(),
            'status' => $this->string(255)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_hospital_place_records}}');
    }
}

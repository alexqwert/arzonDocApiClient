<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_logs_delete extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_logs_delete}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'user' => $this->integer(11)->notNull(),
            'ip' => $this->string(255)->notNull(),
            'date' => $this->dateTime()->notNull(),
            'client_id' => $this->integer(11)->notNull(),
            'type' => $this->string(255)->notNull(),
            'cat' => $this->integer(11)->notNull(),
            'sub' => $this->integer(11)->notNull(),
            'list' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_logs_delete}}');
    }
}

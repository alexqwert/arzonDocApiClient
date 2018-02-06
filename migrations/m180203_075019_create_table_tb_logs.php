<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'type' => $this->string(255)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'description' => $this->text()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'typelog' => $this->string(255)->notNull(),
            'cat' => $this->string(255)->notNull(),
            'sub' => $this->string(255)->notNull(),
            'list' => $this->string(255)->notNull(),
            'result' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_logs}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_lab_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_lab_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'log_id' => $this->integer(11)->notNull(),
            'lablist' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'status' => $this->string(255)->notNull(),
            'method' => $this->integer(11)->notNull(),
            'text' => $this->text()->notNull(),
            'datetime' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_lab_logs}}');
    }
}

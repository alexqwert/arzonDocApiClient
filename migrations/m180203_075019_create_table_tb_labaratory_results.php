<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_labaratory_results extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_labaratory_results}}', [
            'client_id' => $this->integer(11)->notNull(),
            'log_id' => $this->integer(11)->notNull()->append('PRIMARY KEY'),
            'status' => $this->integer(11)->notNull(),
            'template' => $this->integer(11)->notNull(),
            'method' => $this->integer(11)->notNull(),
            'norms' => $this->string(255)->notNull(),
            'text' => $this->text()->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'date' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_labaratory_results}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_stoma_results extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_stoma_results}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'cat' => $this->integer(11)->notNull(),
            'list' => $this->integer(11)->notNull(),
            'value' => $this->string(255)->notNull(),
            'norm' => $this->string(255)->notNull(),
            'ed' => $this->string(255)->notNull(),
            'template' => $this->integer(11)->notNull(),
            'text' => $this->text()->notNull(),
            'log_id' => $this->integer(11)->notNull(),
            'result' => $this->integer(11)->notNull(),
            'datetime' => $this->dateTime()->notNull(),
            'doctor_id' => $this->integer(11)->notNull(),
            'tooth_ids' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_stoma_results}}');
    }
}

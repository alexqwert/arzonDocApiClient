<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_filial extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_filial}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'lang' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'text' => $this->text()->notNull(),
            'logo' => $this->string(255)->notNull(),
            'color' => $this->string(255)->notNull(),
            'bgcolor' => $this->string(255)->notNull(),
            'titlecolor' => $this->string(255)->notNull(),
            'chartcolor' => $this->string(255)->notNull(),
            'bearer' => $this->string(255)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'print' => $this->smallInteger(4)->notNull(),
            'price' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_filial}}');
    }
}

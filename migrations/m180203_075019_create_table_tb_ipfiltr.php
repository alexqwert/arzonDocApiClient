<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_ipfiltr extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_ipfiltr}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'ip' => $this->string(255)->notNull(),
            'type' => $this->string(255)->notNull(),
            'name' => $this->string(255)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_ipfiltr}}');
    }
}

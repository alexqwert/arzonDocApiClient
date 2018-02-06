<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_delete extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_delete}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'user' => $this->integer(11)->notNull(),
            'client' => $this->integer(11)->notNull(),
            'date' => $this->dateTime()->notNull(),
            'ip' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_delete}}');
    }
}

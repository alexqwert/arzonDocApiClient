<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_labturn extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_labturn}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'datelog' => $this->dateTime()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_labturn}}');
    }
}

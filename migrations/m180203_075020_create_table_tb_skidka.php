<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_skidka extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_skidka}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'price_start' => $this->integer(11)->notNull(),
            'price_stop' => $this->integer(11)->notNull(),
            'protsent' => $this->integer(11)->notNull(),
            'active' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_skidka}}');
    }
}

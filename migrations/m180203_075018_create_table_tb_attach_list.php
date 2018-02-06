<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_attach_list extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_attach_list}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'method' => $this->integer(11)->notNull(),
            'goods' => $this->integer(11)->notNull(),
            'goods_count' => $this->double()->notNull(),
            'type' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_attach_list}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_living extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_living}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'product' => $this->integer(11)->notNull(),
            'quantities' => $this->double(11)->notNull(),
            'price' => $this->double()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'comment' => $this->string(255)->notNull(),
            'type' => $this->string(255)->notNull(),
            'active' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_living}}');
    }
}

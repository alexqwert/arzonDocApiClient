<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_carts extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_carts}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'account' => $this->string(255)->notNull(),
            'protsent' => $this->string(255)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'date' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_carts}}');
    }
}

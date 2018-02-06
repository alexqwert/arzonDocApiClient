<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_company extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_company}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(255)->notNull(),
            'address' => $this->text()->notNull(),
            'phone' => $this->string(255)->notNull(),
            'account' => $this->string(255)->notNull(),
            'secret' => $this->string(255)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'date' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_company}}');
    }
}

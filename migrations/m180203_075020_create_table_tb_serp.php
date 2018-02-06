<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_serp extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_serp}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'type' => $this->string(255)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'price' => $this->double()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'filds' => $this->string(255)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'skidka' => $this->double()->notNull(),
            'type2' => $this->integer(11)->notNull(),
            'days' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_serp}}');
    }
}

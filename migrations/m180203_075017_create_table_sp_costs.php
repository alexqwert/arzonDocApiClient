<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_costs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_costs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'log_id' => $this->integer(11)->notNull(),
            'type' => $this->string(255)->notNull(),
            'list' => $this->integer(11)->notNull(),
            'good' => $this->integer(11)->notNull(),
            'storage' => $this->integer(11)->notNull(),
            'count' => $this->double()->notNull(),
            'user' => $this->integer(11)->notNull(),
            'doctor' => $this->integer(11)->notNull(),
            'price' => $this->double()->notNull(),
            'comment' => $this->string(255)->notNull(),
            'datetime' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_costs}}');
    }
}

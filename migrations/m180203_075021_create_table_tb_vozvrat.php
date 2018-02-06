<?php

use yii\db\Migration;

class m180203_075021_create_table_tb_vozvrat extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_vozvrat}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'price' => $this->string(255)->notNull(),
            'date_start' => $this->dateTime()->notNull(),
            'date_stop' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_vozvrat}}');
    }
}

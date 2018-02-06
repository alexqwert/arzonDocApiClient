<?php

use yii\db\Migration;

class m180203_075021_create_table_tb_treatment extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_treatment}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'log_id' => $this->integer(11)->notNull(),
            'date_create' => $this->dateTime()->notNull(),
            'user_create' => $this->integer(11)->notNull(),
            'date_edit' => $this->dateTime()->notNull(),
            'user_edit' => $this->integer(11)->notNull(),
            'result' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_treatment}}');
    }
}

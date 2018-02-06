<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_serp_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_serp_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'pysical_id' => $this->integer(11)->notNull(),
            'serp_id' => $this->integer(11)->notNull(),
            'serp_type' => $this->string(255)->notNull(),
            'date' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_serp_logs}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075021_create_table_tb_treatment_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_treatment_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'treatment_id' => $this->integer(11)->notNull(),
            'fild_id' => $this->integer(11)->notNull(),
            'text' => $this->text()->notNull(),
            'date' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_treatment_logs}}');
    }
}

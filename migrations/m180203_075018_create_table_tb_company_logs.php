<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_company_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_company_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'company_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'client_id' => $this->integer(11)->notNull(),
            'price' => $this->integer(11)->notNull(),
            'skidka' => $this->text()->notNull(),
            'payment_type' => $this->integer(11)->notNull(),
            'description' => $this->text()->notNull(),
            'date' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_company_logs}}');
    }
}

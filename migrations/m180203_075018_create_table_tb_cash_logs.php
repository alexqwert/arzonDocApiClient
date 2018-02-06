<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_cash_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_cash_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'user_id' => $this->integer(11)->notNull(),
            'client_id' => $this->integer(11)->notNull(),
            'text' => $this->text()->notNull(),
            'description' => $this->string(500)->notNull(),
            'typeskidka' => $this->integer(11)->notNull(),
            'priceskidka' => $this->string(255)->notNull(),
            'skidka' => $this->string(255)->notNull(),
            'price' => $this->double()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'payment_method' => $this->string(255)->notNull(),
            'company' => $this->integer(11)->notNull(),
            'status' => $this->integer(11)->notNull(),
            'skidkaprice' => $this->double()->notNull(),
            'filial' => $this->integer(11)->notNull(),
            'debt_pay' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_cash_logs}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_clients_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_clients_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'type' => $this->string(255)->notNull(),
            'sub_type' => $this->string(255)->notNull(),
            'cat' => $this->integer(11)->notNull(),
            'sub' => $this->integer(11)->notNull(),
            'list' => $this->integer(11)->notNull(),
            'price' => $this->double(11)->notNull(),
            'count' => $this->integer(11)->notNull()->defaultValue('1'),
            'price_skidka' => $this->double(11)->notNull(),
            'price_org' => $this->double(11)->notNull(),
            'cart' => $this->integer(11)->notNull(),
            'cart_protsent' => $this->integer(11)->notNull(),
            'date' => $this->dateTime()->notNull(),
            'date_result' => $this->dateTime()->notNull(),
            'status' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'doctor_id' => $this->integer(11)->notNull(),
            'result' => $this->string(255)->notNull(),
            'template' => $this->integer(11)->notNull(),
            'norms' => $this->text()->notNull(),
            'method' => $this->string(255)->notNull(),
            'cash_id' => $this->integer(11)->notNull(),
            'partner_id' => $this->integer(11)->notNull(),
            'barcod' => $this->bigInteger(20)->notNull(),
            'reg_id' => $this->integer(11)->notNull(),
            'validate' => $this->integer(11)->notNull(),
            'print' => $this->integer(11)->notNull(),
            'filial' => $this->integer(11)->notNull(),
            'payment_method' => $this->string(255)->notNull(),
            'status_turn' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_clients_logs}}');
    }
}

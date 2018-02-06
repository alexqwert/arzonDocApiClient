<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_clients extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_clients}}', [
            'id' => $this->integer(6)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'surname' => $this->text()->notNull(),
            'name' => $this->text()->notNull(),
            'lastname' => $this->text()->notNull(),
            'mobile_phone' => $this->text()->notNull(),
            'home_phone' => $this->text()->notNull(),
            'sex' => $this->smallInteger(4)->notNull(),
            'date_birth' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'passport_ser' => $this->string(255)->notNull(),
            'passport_num' => $this->string(255)->notNull(),
            'passport_date' => $this->string(255)->notNull(),
            'passport_date_exp' => $this->string(255)->notNull(),
            'issued' => $this->string(255)->notNull(),
            'company' => $this->string(255)->notNull(),
            'registration_date' => $this->dateTime()->notNull(),
            'debt' => $this->double(255)->notNull(),
            'lab_status' => $this->integer(11)->notNull(),
            'cash_status' => $this->integer(4)->notNull(),
            'check_status' => $this->integer(4)->notNull(),
            'region' => $this->integer(11)->notNull(),
            'rayon' => $this->integer(11)->notNull(),
            'mfy' => $this->integer(11)->notNull(),
            'addres' => $this->text()->notNull(),
            'date' => $this->dateTime()->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'filial' => $this->integer(11)->notNull(),
            'reg_id' => $this->integer(11)->notNull(),
            'doctor' => $this->string(255)->notNull(),
            'view' => $this->integer(11)->notNull(),
            'payment' => $this->string(255)->notNull(),
            'update_id' => $this->integer(11)->notNull(),
            'telegramid' => $this->integer(11)->notNull(),
            'source' => $this->integer(11)->notNull(),
            'sms' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_clients}}');
    }
}

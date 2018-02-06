<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_partners extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_partners}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'familiya' => $this->string(255)->notNull(),
            'imya' => $this->string(255)->notNull(),
            'otchestvo' => $this->string(255)->notNull(),
            'sex' => $this->integer(11)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull()->defaultValue('1'),
            'datebirth' => $this->date()->notNull(),
            'work' => $this->text()->notNull(),
            'profession' => $this->string(255)->notNull(),
            'region' => $this->string(255)->notNull(),
            'protsent' => $this->integer(11)->notNull(),
            'user' => $this->integer(11)->notNull(),
            'filial' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_partners}}');
    }
}

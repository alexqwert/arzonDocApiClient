<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_spending extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_spending}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'date' => $this->date()->notNull(),
            'datetime' => $this->dateTime()->notNull(),
            'category' => $this->integer(11)->notNull(),
            'partner' => $this->integer(11)->notNull(),
            'user' => $this->integer(11)->notNull(),
            'description' => $this->text()->notNull(),
            'price' => $this->double()->notNull(),
            'type' => $this->integer(11)->notNull(),
            'user_add' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_spending}}');
    }
}

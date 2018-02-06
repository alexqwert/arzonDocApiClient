<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_client_values extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_client_values}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'client_id' => $this->integer(11)->notNull(),
            'type_id' => $this->integer(11)->notNull(),
            'template_id' => $this->integer(11)->notNull(),
            'fild_id' => $this->integer(11)->notNull(),
            'fild_value' => $this->text()->notNull(),
            'fild_desc' => $this->text()->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_client_values}}');
    }
}

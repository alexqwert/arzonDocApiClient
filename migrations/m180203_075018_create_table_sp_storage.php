<?php

use yii\db\Migration;

class m180203_075018_create_table_sp_storage extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_storage}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'lang' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'title' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
            'filial_id' => $this->integer(11)->notNull(),
            'type_id' => $this->string(255)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'auto' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_storage}}');
    }
}

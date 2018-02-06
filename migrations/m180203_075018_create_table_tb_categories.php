<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_categories extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_categories}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'categoryId' => $this->integer(11)->notNull(),
            'categoryLanguageId' => $this->integer(11)->notNull(),
            'categoryName' => $this->string(255)->notNull(),
            'filds' => $this->string(255)->notNull(),
            'timetable' => $this->integer(11)->notNull(),
            'turn' => $this->integer(11)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_categories}}');
    }
}

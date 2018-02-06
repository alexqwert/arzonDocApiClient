<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_contents extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_contents}}', [
            'contentId' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'contentGroupId' => $this->integer(11)->notNull(),
            'contentSectionId' => $this->integer(11)->notNull(),
            'contentLanguageId' => $this->integer(11)->notNull()->defaultValue('1'),
            'contentTitle' => $this->string(255)->notNull(),
            'contentAnons' => $this->text()->notNull(),
            'contentText' => $this->text()->notNull(),
            'contentDateAdded' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_contents}}');
    }
}

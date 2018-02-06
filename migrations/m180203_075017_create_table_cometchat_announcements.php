<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_announcements extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_announcements}}', [
            'id' => $this->integer(10)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'announcement' => $this->text()->notNull(),
            'time' => $this->integer(10)->unsigned()->notNull(),
            'to' => $this->integer(10)->notNull(),
            'recd' => $this->integer(1)->notNull()->defaultValue('0'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_announcements}}');
    }
}

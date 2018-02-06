<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_chatroommessages extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_chatroommessages}}', [
            'id' => $this->integer(10)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'userid' => $this->integer(10)->unsigned()->notNull(),
            'chatroomid' => $this->integer(10)->unsigned()->notNull(),
            'message' => $this->text()->notNull(),
            'sent' => $this->integer(10)->unsigned()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_chatroommessages}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_chatrooms_users extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_chatrooms_users}}', [
            'userid' => $this->integer(10)->unsigned()->notNull(),
            'chatroomid' => $this->integer(10)->unsigned()->notNull(),
            'isbanned' => $this->integer(1)->defaultValue('0'),
        ], $tableOptions);

        $this->addPrimaryKey('primary_key', '{{%cometchat_chatrooms_users}}', ['userid','chatroomid']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_chatrooms_users}}');
    }
}

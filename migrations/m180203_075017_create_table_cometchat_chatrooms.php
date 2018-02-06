<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_chatrooms extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_chatrooms}}', [
            'id' => $this->integer(10)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(255)->notNull(),
            'lastactivity' => $this->integer(10)->unsigned()->notNull(),
            'createdby' => $this->integer(10)->unsigned()->notNull(),
            'password' => $this->string(255)->notNull(),
            'type' => $this->smallInteger(1)->unsigned()->notNull(),
            'vidsession' => $this->string(512),
            'invitedusers' => $this->string(512),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_chatrooms}}');
    }
}

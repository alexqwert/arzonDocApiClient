<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_users extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_users}}', [
            'userid' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'username' => $this->string(100)->notNull(),
            'displayname' => $this->string(100)->notNull(),
            'password' => $this->string(100)->notNull(),
            'avatar' => $this->string(200)->notNull(),
            'link' => $this->string(200)->notNull(),
            'grp' => $this->string(25)->notNull(),
            'friends' => $this->text()->notNull(),
        ], $tableOptions);

        $this->createIndex('username', '{{%cometchat_users}}', 'username', true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_users}}');
    }
}

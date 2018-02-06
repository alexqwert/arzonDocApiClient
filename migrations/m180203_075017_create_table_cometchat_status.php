<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_status extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_status}}', [
            'userid' => $this->integer(10)->unsigned()->notNull()->append('PRIMARY KEY'),
            'message' => $this->text(),
            'status' => $this->string(),
            'typingto' => $this->integer(10)->unsigned(),
            'typingtime' => $this->integer(10)->unsigned(),
            'isdevice' => $this->integer(1)->unsigned()->notNull()->defaultValue('0'),
            'lastactivity' => $this->integer(10)->unsigned()->notNull()->defaultValue('0'),
            'lastseen' => $this->integer(10)->unsigned()->notNull()->defaultValue('0'),
            'lastseensetting' => $this->integer(1)->unsigned()->notNull()->defaultValue('0'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_status}}');
    }
}

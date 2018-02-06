<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_videochatsessions extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_videochatsessions}}', [
            'username' => $this->string(255)->notNull()->append('PRIMARY KEY'),
            'identity' => $this->string(255)->notNull(),
            'timestamp' => $this->integer(10)->unsigned()->defaultValue('0'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_videochatsessions}}');
    }
}

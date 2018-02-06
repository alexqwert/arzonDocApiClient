<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_session extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_session}}', [
            'session_id' => $this->char(32)->notNull()->append('PRIMARY KEY'),
            'session_data' => $this->text()->notNull(),
            'session_lastaccesstime' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_session}}');
    }
}

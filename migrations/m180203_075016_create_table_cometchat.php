<?php

use yii\db\Migration;

class m180203_075016_create_table_cometchat extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat}}', [
            'id' => $this->integer(10)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'from' => $this->integer(10)->unsigned()->notNull(),
            'to' => $this->integer(10)->unsigned()->notNull(),
            'message' => $this->text()->notNull(),
            'sent' => $this->integer(10)->unsigned()->notNull()->defaultValue('0'),
            'read' => $this->smallInteger(1)->unsigned()->notNull()->defaultValue('0'),
            'direction' => $this->smallInteger(1)->unsigned()->notNull()->defaultValue('0'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat}}');
    }
}

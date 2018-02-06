<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_contacts extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_contacts}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'contactId' => $this->integer(11)->notNull(),
            'contactLanguageId' => $this->integer(11)->notNull(),
            'contactSubject' => $this->string(255)->notNull(),
            'contactEmail' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_contacts}}');
    }
}

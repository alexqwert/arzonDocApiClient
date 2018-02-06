<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_languages extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_languages}}', [
            'languageId' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'languageShort' => $this->string(255)->notNull(),
            'languageName' => $this->string(255)->notNull(),
            'languageActive' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->insert('{{%sp_languages}}',['languageId'=>'2','languageShort'=>'ru','languageName'=>'Русский','languageActive'=>'1']);
        $this->insert('{{%sp_languages}}',['languageId'=>'3','languageShort'=>'en','languageName'=>'English','languageActive'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_languages}}');
    }
}

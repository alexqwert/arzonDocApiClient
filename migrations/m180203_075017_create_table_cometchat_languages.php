<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_languages extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_languages}}', [
            'lang_key' => $this->string(255)->notNull()->comment('Key of a language variable'),
            'lang_text' => $this->text()->notNull()->comment('Text/value of a language variable'),
            'code' => $this->string(20)->notNull()->comment('Language code for e.g. en for English'),
            'type' => $this->string(20)->notNull()->comment('Type of CometChat add on for e.g. module/plugin/extension/function'),
            'name' => $this->string(50)->notNull()->comment('Name of add on for e.g. announcement,smilies, etc.'),
        ], $tableOptions);

        $this->addPrimaryKey('primary_key', '{{%cometchat_languages}}', ['lang_key','code','type','name']);

        $this->createIndex('lang_index', '{{%cometchat_languages}}', ['lang_key','code','type','name'], true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_languages}}');
    }
}

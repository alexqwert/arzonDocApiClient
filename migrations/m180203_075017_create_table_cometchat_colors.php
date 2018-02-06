<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_colors extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_colors}}', [
            'color_key' => $this->string(100)->notNull(),
            'color_value' => $this->text()->notNull(),
            'color' => $this->string(50)->notNull(),
        ], $tableOptions);

        $this->addPrimaryKey('primary_key', '{{%cometchat_colors}}', ['color_key','color']);

        $this->createIndex('color_index', '{{%cometchat_colors}}', ['color_key','color'], true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_colors}}');
    }
}

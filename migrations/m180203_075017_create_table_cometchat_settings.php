<?php

use yii\db\Migration;

class m180203_075017_create_table_cometchat_settings extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%cometchat_settings}}', [
            'setting_key' => $this->string(50)->notNull()->comment('Configuration setting name. It can be PHP constant, variable or array')->append('PRIMARY KEY'),
            'value' => $this->text()->notNull()->comment('Value of the key.'),
            'key_type' => $this->smallInteger(4)->notNull()->defaultValue('1')->comment('States whether the key is: 0 = PHP constant, 1 = atomic variable or 2 = serialized associative array.'),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%cometchat_settings}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_allsettings extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_allsettings}}', [
            'setting_key' => $this->string(255)->notNull()->append('PRIMARY KEY'),
            'value' => $this->string(255)->notNull(),
            'key_type' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_allsettings}}',['setting_key'=>'mobile_phone','value'=>'required','key_type'=>'1']);
        $this->insert('{{%tb_allsettings}}',['setting_key'=>'serial','value'=>'BYU52-CVX86-08EYV-68UYB','key_type'=>'1']);
        $this->insert('{{%tb_allsettings}}',['setting_key'=>'source','value'=>'required','key_type'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_allsettings}}');
    }
}

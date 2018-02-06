<?php

use yii\db\Migration;

class m180203_075018_create_table_sp_types extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_types}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'title' => $this->text()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%sp_types}}',['id'=>'2','title'=>'гр','sort'=>'0','active'=>'1']);
        $this->insert('{{%sp_types}}',['id'=>'3','title'=>'шт','sort'=>'0','active'=>'1']);
        $this->insert('{{%sp_types}}',['id'=>'4','title'=>'см','sort'=>'0','active'=>'1']);
        $this->insert('{{%sp_types}}',['id'=>'5','title'=>'м','sort'=>'0','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_types}}');
    }
}

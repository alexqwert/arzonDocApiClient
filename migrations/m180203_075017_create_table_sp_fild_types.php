<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_fild_types extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_fild_types}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'title' => $this->text()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%sp_fild_types}}',['id'=>'1','title'=>'textarea','sort'=>'1','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_fild_types}}');
    }
}

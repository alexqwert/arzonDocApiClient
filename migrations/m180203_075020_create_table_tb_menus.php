<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_menus extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_menus}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'menuId' => $this->integer(11)->notNull(),
            'menuName' => $this->string(255)->notNull(),
            'menuActive' => $this->string(10)->notNull()->defaultValue('active'),
        ], $tableOptions);

        $this->insert('{{%tb_menus}}',['id'=>'6','menuId'=>'1308232722','menuName'=>'menu','menuActive'=>'active']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_menus}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_menu_elements extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_menu_elements}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'menuId' => $this->integer(11)->notNull(),
            'menuElementId' => $this->integer(11)->notNull(),
            'menuElementOrderNum' => $this->integer(11)->notNull()->defaultValue('999'),
        ], $tableOptions);

        $this->insert('{{%tb_menu_elements}}',['id'=>'16','menuId'=>'1307111270','menuElementId'=>'1','menuElementOrderNum'=>'1']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'17','menuId'=>'1307111270','menuElementId'=>'384','menuElementOrderNum'=>'2']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'18','menuId'=>'1307111270','menuElementId'=>'385','menuElementOrderNum'=>'3']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'19','menuId'=>'1307111270','menuElementId'=>'391','menuElementOrderNum'=>'4']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'20','menuId'=>'1307111270','menuElementId'=>'394','menuElementOrderNum'=>'5']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'24','menuId'=>'1307111309','menuElementId'=>'387','menuElementOrderNum'=>'1']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'25','menuId'=>'1307111309','menuElementId'=>'392','menuElementOrderNum'=>'2']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'26','menuId'=>'1307111309','menuElementId'=>'393','menuElementOrderNum'=>'3']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'41','menuId'=>'1308232722','menuElementId'=>'1','menuElementOrderNum'=>'1']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'42','menuId'=>'1308232722','menuElementId'=>'398','menuElementOrderNum'=>'2']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'43','menuId'=>'1308232722','menuElementId'=>'400','menuElementOrderNum'=>'999']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'44','menuId'=>'1308232722','menuElementId'=>'401','menuElementOrderNum'=>'3']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'45','menuId'=>'1308232722','menuElementId'=>'403','menuElementOrderNum'=>'5']);
        $this->insert('{{%tb_menu_elements}}',['id'=>'46','menuId'=>'1308232722','menuElementId'=>'404','menuElementOrderNum'=>'4']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_menu_elements}}');
    }
}

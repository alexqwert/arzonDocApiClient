<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_structure extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_structure}}', [
            'id' => $this->integer(10)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'parent_item' => $this->integer(10)->notNull(),
            'item' => $this->string(50)->notNull(),
            'module_id' => $this->integer(11)->notNull(),
            'photo' => $this->string(255)->notNull(),
            'lft' => $this->integer(10)->notNull(),
            'rgt' => $this->integer(10)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_structure}}',['id'=>'1','parent_item'=>'0','item'=>'main','module_id'=>'7','photo'=>'1.png','lft'=>'1','rgt'=>'12']);
        $this->insert('{{%tb_structure}}',['id'=>'398','parent_item'=>'1','item'=>'about-company','module_id'=>'2','photo'=>'398.png','lft'=>'2','rgt'=>'3']);
        $this->insert('{{%tb_structure}}',['id'=>'400','parent_item'=>'1','item'=>'contacts','module_id'=>'5','photo'=>'400.png','lft'=>'4','rgt'=>'5']);
        $this->insert('{{%tb_structure}}',['id'=>'401','parent_item'=>'1','item'=>'products','module_id'=>'5','photo'=>'401.png','lft'=>'6','rgt'=>'7']);
        $this->insert('{{%tb_structure}}',['id'=>'403','parent_item'=>'1','item'=>'news','module_id'=>'3','photo'=>'403.png','lft'=>'8','rgt'=>'9']);
        $this->insert('{{%tb_structure}}',['id'=>'404','parent_item'=>'1','item'=>'services','module_id'=>'2','photo'=>'404.png','lft'=>'10','rgt'=>'11']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_structure}}');
    }
}

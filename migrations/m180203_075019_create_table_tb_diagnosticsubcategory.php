<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_diagnosticsubcategory extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_diagnosticsubcategory}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'category_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_diagnosticsubcategory}}',['id'=>'1','group_id'=>'1513590828','category_id'=>'1513590506','lang'=>'2','title'=>'УЗД','description'=>'','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_diagnosticsubcategory}}',['id'=>'2','group_id'=>'1513590828','category_id'=>'1513590506','lang'=>'3','title'=>'УЗД','description'=>'','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_diagnosticsubcategory}}',['id'=>'3','group_id'=>'1513590858','category_id'=>'1513590506','lang'=>'2','title'=>'Доплер УЗИ','description'=>'','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_diagnosticsubcategory}}',['id'=>'4','group_id'=>'1513590858','category_id'=>'1513590506','lang'=>'3','title'=>'Доплер УЗИ','description'=>'','sort'=>'2','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_diagnosticsubcategory}}');
    }
}

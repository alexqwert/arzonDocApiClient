<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_diagnosticcategory extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_diagnosticcategory}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_diagnosticcategory}}',['id'=>'1','group_id'=>'1513590506','lang'=>'2','title'=>'УЗД','description'=>'Ультразвуковой исследование','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_diagnosticcategory}}',['id'=>'2','group_id'=>'1513590506','lang'=>'3','title'=>'УЗД','description'=>'Ультразвуковой исследование','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_diagnosticcategory}}',['id'=>'3','group_id'=>'1513590562','lang'=>'2','title'=>'МРТ','description'=>'Магнитно-резонансная томография','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_diagnosticcategory}}',['id'=>'4','group_id'=>'1513590562','lang'=>'3','title'=>'МРТ','description'=>'Магнитно-резонансная томография','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_diagnosticcategory}}',['id'=>'5','group_id'=>'1513590583','lang'=>'2','title'=>'МСКТ','description'=>'Мультиспиральная компьютерная томография','sort'=>'4','active'=>'1']);
        $this->insert('{{%tb_diagnosticcategory}}',['id'=>'6','group_id'=>'1513590583','lang'=>'3','title'=>'МСКТ','description'=>'Мультиспиральная компьютерная томография','sort'=>'4','active'=>'1']);
        $this->insert('{{%tb_diagnosticcategory}}',['id'=>'7','group_id'=>'1513590607','lang'=>'2','title'=>'Рентген','description'=>'Рентгенография','sort'=>'3','active'=>'1']);
        $this->insert('{{%tb_diagnosticcategory}}',['id'=>'8','group_id'=>'1513590607','lang'=>'3','title'=>'Рентген','description'=>'Рентгенография','sort'=>'3','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_diagnosticcategory}}');
    }
}

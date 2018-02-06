<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_client_source extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_client_source}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'bgcolor' => $this->string(255)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_client_source}}',['id'=>'1','group_id'=>'1513581944','lang'=>'2','title'=>'Рекомендация пациента','description'=>'','bgcolor'=>'#c00000','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'2','group_id'=>'1513581944','lang'=>'3','title'=>'Рекомендация пациента','description'=>'','bgcolor'=>'#c00000','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'3','group_id'=>'1513581962','lang'=>'2','title'=>'Рекомендация врача','description'=>'','bgcolor'=>'#ff0000','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'4','group_id'=>'1513581962','lang'=>'3','title'=>'Рекомендация врача','description'=>'','bgcolor'=>'#ff0000','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'5','group_id'=>'1513581983','lang'=>'2','title'=>'Реклама на ТВ','description'=>'','bgcolor'=>'#ffc000','sort'=>'3','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'6','group_id'=>'1513581983','lang'=>'3','title'=>'Реклама на ТВ','description'=>'','bgcolor'=>'#ffc000','sort'=>'3','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'7','group_id'=>'1513581994','lang'=>'2','title'=>'Реклама на радио','description'=>'','bgcolor'=>'#ffff00','sort'=>'4','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'8','group_id'=>'1513581994','lang'=>'3','title'=>'Реклама на радио','description'=>'','bgcolor'=>'#ffff00','sort'=>'4','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'9','group_id'=>'1513582007','lang'=>'2','title'=>'Наружная реклама','description'=>'','bgcolor'=>'#92d050','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'10','group_id'=>'1513582007','lang'=>'3','title'=>'Наружная реклама','description'=>'','bgcolor'=>'#92d050','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'11','group_id'=>'1513582017','lang'=>'2','title'=>'Реклама в печати','description'=>'','bgcolor'=>'#00b050','sort'=>'6','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'12','group_id'=>'1513582017','lang'=>'3','title'=>'Реклама в печати','description'=>'','bgcolor'=>'#00b050','sort'=>'6','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'13','group_id'=>'1513758910','lang'=>'2','title'=>'Проходил мимо','description'=>'','bgcolor'=>'#7030a0','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_client_source}}',['id'=>'14','group_id'=>'1513758910','lang'=>'3','title'=>'Проходил мимо','description'=>'','bgcolor'=>'#7030a0','sort'=>'7','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_client_source}}');
    }
}

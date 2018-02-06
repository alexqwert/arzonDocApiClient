<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_stoma extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_stoma}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'category_id' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'type' => $this->string(255)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'price' => $this->double()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'filds' => $this->string(255)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'skidka' => $this->double()->notNull(),
            'type2' => $this->integer(11)->notNull(),
            'days' => $this->string(255)->notNull(),
            'protsent' => $this->integer(11)->notNull()->defaultValue('15'),
            'multiple' => $this->integer(11),
        ], $tableOptions);

        $this->insert('{{%tb_stoma}}',['id'=>'1','category_id'=>'1513582162','group_id'=>'1513580719','type'=>'','lang'=>'2','title'=>'Первичный осмотр','price'=>'25000','sort'=>'1','filds'=>'','active'=>'1','skidka'=>'0','type2'=>'1','days'=>'','protsent'=>'0','multiple'=>'1']);
        $this->insert('{{%tb_stoma}}',['id'=>'2','category_id'=>'1513582162','group_id'=>'1513580719','type'=>'','lang'=>'3','title'=>'Первичный осмотр','price'=>'25000','sort'=>'1','filds'=>'','active'=>'1','skidka'=>'0','type2'=>'1','days'=>'','protsent'=>'0','multiple'=>'1']);

        $this->createIndex('idx_group_id_0722_20','tb_stoma','group_id',0);
        $this->createIndex('idx_category_id_0722_21','tb_stoma','category_id',0);
        $this->createIndex('idx_lang_0722_22','tb_stoma','lang',0);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_stoma}}');
    }
}

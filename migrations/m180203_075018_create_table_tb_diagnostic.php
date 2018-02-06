<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_diagnostic extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_diagnostic}}', [
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

        $this->insert('{{%tb_diagnostic}}',['id'=>'1','category_id'=>'1513590828','group_id'=>'1513590906','type'=>'','lang'=>'2','title'=>'Печень и желчный пузырь','price'=>'25000','sort'=>'1','filds'=>'','active'=>'1','skidka'=>'0','type2'=>'1','days'=>'','protsent'=>'50','multiple'=>'0']);
        $this->insert('{{%tb_diagnostic}}',['id'=>'2','category_id'=>'1513590828','group_id'=>'1513590906','type'=>'','lang'=>'3','title'=>'Печень и желчный пузырь','price'=>'25000','sort'=>'1','filds'=>'','active'=>'1','skidka'=>'0','type2'=>'1','days'=>'','protsent'=>'50','multiple'=>'0']);
        $this->insert('{{%tb_diagnostic}}',['id'=>'3','category_id'=>'1513590828','group_id'=>'1513590947','type'=>'','lang'=>'2','title'=>'Предстательная железа','price'=>'30000','sort'=>'2','filds'=>'','active'=>'1','skidka'=>'0','type2'=>'1','days'=>'','protsent'=>'50','multiple'=>'1']);
        $this->insert('{{%tb_diagnostic}}',['id'=>'4','category_id'=>'1513590828','group_id'=>'1513590947','type'=>'','lang'=>'3','title'=>'Предстательная железа','price'=>'30000','sort'=>'2','filds'=>'','active'=>'1','skidka'=>'0','type2'=>'1','days'=>'','protsent'=>'50','multiple'=>'1']);

        $this->createIndex('idx_group_id_4447_02','tb_diagnostic','group_id',0);
        $this->createIndex('idx_category_id_4447_03','tb_diagnostic','category_id',0);
        $this->createIndex('idx_lang_4447_04','tb_diagnostic','lang',0);
        $this->createIndex('idx_title_4447_05','tb_diagnostic','title',0);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_diagnostic}}');
    }
}

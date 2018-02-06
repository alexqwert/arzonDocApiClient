<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_goodcategories extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_goodcategories}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'lang' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'title' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%sp_goodcategories}}',['id'=>'6','lang'=>'2','group_id'=>'1507177890','title'=>'Товары','description'=>'','sort'=>'1','active'=>'1']);
        $this->insert('{{%sp_goodcategories}}',['id'=>'7','lang'=>'3','group_id'=>'1507177890','title'=>'Товары','description'=>'','sort'=>'1','active'=>'1']);
        $this->insert('{{%sp_goodcategories}}',['id'=>'8','lang'=>'2','group_id'=>'1507197742','title'=>'Расходники','description'=>'','sort'=>'2','active'=>'1']);
        $this->insert('{{%sp_goodcategories}}',['id'=>'9','lang'=>'3','group_id'=>'1507197742','title'=>'Расходники','description'=>'','sort'=>'2','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_goodcategories}}');
    }
}

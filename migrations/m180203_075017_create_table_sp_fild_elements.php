<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_fild_elements extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_fild_elements}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'fild_id' => $this->integer(11)->notNull(),
            'category_id' => $this->text()->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'type_sort' => $this->string(255)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'photo' => $this->string(255)->notNull(),
            'color' => $this->string(255)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);
        $this->insert('{{%sp_fild_elements}}',['id'=>'1','fild_id'=>'1506493819','category_id'=>'1431935025 1432731282 1505984251','group_id'=>'1506494818','lang'=>'2','title'=>'Дискомфорт','type_sort'=>'','sort'=>'1','photo'=>'','color'=>'','active'=>'1']);
        $this->insert('{{%sp_fild_elements}}',['id'=>'2','fild_id'=>'1506493819','category_id'=>'1431935025 1432731282 1505984251','group_id'=>'1506494818','lang'=>'3','title'=>'Дискомфорт','type_sort'=>'','sort'=>'1','photo'=>'','color'=>'','active'=>'1']);
        $this->insert('{{%sp_fild_elements}}',['id'=>'3','fild_id'=>'1506493819','category_id'=>'1431935025','group_id'=>'1506574995','lang'=>'2','title'=>'боль в животе','type_sort'=>'','sort'=>'2','photo'=>'','color'=>'','active'=>'1']);
        $this->insert('{{%sp_fild_elements}}',['id'=>'4','fild_id'=>'1506493819','category_id'=>'1431935025','group_id'=>'1506574995','lang'=>'3','title'=>'боль в животе','type_sort'=>'','sort'=>'2','photo'=>'','color'=>'','active'=>'1']);
        $this->insert('{{%sp_fild_elements}}',['id'=>'5','fild_id'=>'1506496211','category_id'=>'1431935025 1432731282','group_id'=>'1506581536','lang'=>'2','title'=>'Развитие настоящего заболевания','type_sort'=>'','sort'=>'1','photo'=>'','color'=>'','active'=>'1']);
        $this->insert('{{%sp_fild_elements}}',['id'=>'6','fild_id'=>'1506496211','category_id'=>'1431935025 1432731282','group_id'=>'1506581536','lang'=>'3','title'=>'Развитие настоящего заболевания','type_sort'=>'','sort'=>'1','photo'=>'','color'=>'','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_fild_elements}}');
    }
}

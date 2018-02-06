<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_ouedcategories extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_ouedcategories}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'name' => $this->string(255)->notNull(),
            'active' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_ouedcategories}}',['id'=>'1','group_id'=>'1463593385','lang'=>'2','name'=>'УЗИ','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'3','group_id'=>'1463593385','lang'=>'3','name'=>'УЗИ','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'4','group_id'=>'1490763044','lang'=>'2','name'=>'Доплер','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'5','group_id'=>'1490763044','lang'=>'3','name'=>'Доплер','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'8','group_id'=>'1497606039','lang'=>'2','name'=>'УЗИ (СКИДКА)','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'9','group_id'=>'1497606039','lang'=>'3','name'=>'УЗИ (СКИДКА)','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'10','group_id'=>'1497590105','lang'=>'2','name'=>'Доплер (Скидка)','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'11','group_id'=>'1497590105','lang'=>'3','name'=>'Доплер (Скидка)','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'12','group_id'=>'1498100325','lang'=>'2','name'=>'Рентген','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'13','group_id'=>'1498100325','lang'=>'3','name'=>'Рентген','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'14','group_id'=>'1500113971','lang'=>'2','name'=>'Узи (скидка )','active'=>'1']);
        $this->insert('{{%tb_ouedcategories}}',['id'=>'15','group_id'=>'1500113971','lang'=>'3','name'=>'Uzi ( skidka )','active'=>'1']);

        $this->createIndex('idx_group_id_9552_14','tb_ouedcategories','group_id',0);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_ouedcategories}}');
    }
}

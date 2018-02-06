<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_roles extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_roles}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'name' => $this->string(255)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_roles}}',['id'=>'1','group_id'=>'1490166087','lang'=>'2','name'=>'Supper User','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'2','group_id'=>'1490166087','lang'=>'3','name'=>'Supper User','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'3','group_id'=>'1490599994','lang'=>'2','name'=>'Регистратура','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'4','group_id'=>'1490599994','lang'=>'3','name'=>'Reception','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'5','group_id'=>'1490863789','lang'=>'2','name'=>'Касса','sort'=>'0','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'6','group_id'=>'1490863789','lang'=>'3','name'=>'Cash','sort'=>'0','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'7','group_id'=>'1490864634','lang'=>'2','name'=>'Лаборатория','sort'=>'4','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'8','group_id'=>'1490864634','lang'=>'3','name'=>'Laboratory','sort'=>'4','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'9','group_id'=>'1490864869','lang'=>'2','name'=>'УЗД','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'10','group_id'=>'1490864869','lang'=>'3','name'=>'OUED','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'11','group_id'=>'1490877307','lang'=>'2','name'=>'Медпредставитель','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'12','group_id'=>'1490877307','lang'=>'3','name'=>'Медпредставитель','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'13','group_id'=>'1492495321','lang'=>'2','name'=>'Kassa 2','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'14','group_id'=>'1492495321','lang'=>'3','name'=>'Cash 2','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'15','group_id'=>'1493099261','lang'=>'2','name'=>'Лаборатория 2','sort'=>'3','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'16','group_id'=>'1493099261','lang'=>'3','name'=>'Лаборатория 2','sort'=>'3','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'17','group_id'=>'1499166075','lang'=>'2','name'=>'Glavrach','sort'=>'21','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'18','group_id'=>'1499166075','lang'=>'3','name'=>'Glavrach','sort'=>'21','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'19','group_id'=>'1506313255','lang'=>'2','name'=>'Врач','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_roles}}',['id'=>'20','group_id'=>'1506313255','lang'=>'3','name'=>'Врач','sort'=>'1','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_roles}}');
    }
}

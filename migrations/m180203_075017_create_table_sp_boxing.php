<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_boxing extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_boxing}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'lang' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'title' => $this->text()->notNull(),
            'description' => $this->text()->notNull(),
            'type_id' => $this->integer(11)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);
        $this->insert('{{%sp_boxing}}',['id'=>'2','lang'=>'2','group_id'=>'1507116274','title'=>'Индивидуальная упаковка ','description'=>'','type_id'=>'2','sort'=>'2','active'=>'1']);
        $this->insert('{{%sp_boxing}}',['id'=>'3','lang'=>'3','group_id'=>'1507116274','title'=>'Индивидуальная упаковка ','description'=>'','type_id'=>'2','sort'=>'2','active'=>'1']);
        $this->insert('{{%sp_boxing}}',['id'=>'4','lang'=>'2','group_id'=>'1507116282','title'=>'Ампула','description'=>'','type_id'=>'1','sort'=>'1','active'=>'1']);
        $this->insert('{{%sp_boxing}}',['id'=>'5','lang'=>'3','group_id'=>'1507116282','title'=>'Ампула','description'=>'','type_id'=>'1','sort'=>'1','active'=>'1']);
        $this->insert('{{%sp_boxing}}',['id'=>'6','lang'=>'2','group_id'=>'1509861582','title'=>'Упаковка','description'=>'Упаковка','type_id'=>'3','sort'=>'3','active'=>'1']);
        $this->insert('{{%sp_boxing}}',['id'=>'7','lang'=>'3','group_id'=>'1509861582','title'=>'Упаковка','description'=>'Упаковка','type_id'=>'3','sort'=>'3','active'=>'1']);

    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_boxing}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_client_tooth_status extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_client_tooth_status}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'number' => $this->integer(11)->notNull(),
            'main' => $this->string(255)->notNull(),
            'top' => $this->string(255)->notNull(),
            'left' => $this->string(255)->notNull(),
            'right' => $this->string(255)->notNull(),
            'bottom' => $this->string(255)->notNull(),
            'center' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_client_tooth_status}}',['id'=>'1','client_id'=>'17','number'=>'17','main'=>'periodontitis','top'=>'','left'=>'','right'=>'','bottom'=>'','center'=>'temp_filling']);
        $this->insert('{{%tb_client_tooth_status}}',['id'=>'2','client_id'=>'17','number'=>'14','main'=>'absence','top'=>'','left'=>'','right'=>'','bottom'=>'','center'=>'']);
        $this->insert('{{%tb_client_tooth_status}}',['id'=>'3','client_id'=>'17','number'=>'13','main'=>'implant_with_crown','top'=>'','left'=>'','right'=>'','bottom'=>'','center'=>'']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_client_tooth_status}}');
    }
}

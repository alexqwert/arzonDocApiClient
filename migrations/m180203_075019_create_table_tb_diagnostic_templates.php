<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_diagnostic_templates extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_diagnostic_templates}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'diagnostic_id' => $this->integer(11)->notNull(),
            'template_id' => $this->integer(11)->notNull(),
        ], $tableOptions);


        $this->insert('{{%tb_diagnostic_templates}}',['id'=>'1','diagnostic_id'=>'1513590906','template_id'=>'517']);
        $this->insert('{{%tb_diagnostic_templates}}',['id'=>'3','diagnostic_id'=>'1513590947','template_id'=>'667']);
        
        $this->createIndex('idx_diagnostic_id_4867_06','tb_diagnostic_templates','diagnostic_id',0);
        $this->createIndex('idx_template_id_4867_07','tb_diagnostic_templates','template_id',0);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_diagnostic_templates}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_stoma_templates extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_stoma_templates}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'stoma_id' => $this->integer(11)->notNull(),
            'template_id' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_stoma_templates}}',['id'=>'1','stoma_id'=>'1513580719','template_id'=>'727']);

        $this->createIndex('idx_stoma_id_1002_23','tb_stoma_templates','stoma_id',0);
        $this->createIndex('idx_template_id_1002_24','tb_stoma_templates','template_id',0);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_stoma_templates}}');
    }
}

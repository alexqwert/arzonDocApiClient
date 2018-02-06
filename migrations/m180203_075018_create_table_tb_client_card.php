<?php

use yii\db\Migration;

class m180203_075018_create_table_tb_client_card extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_client_card}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'client_id' => $this->integer(11)->notNull(),
            'teeth_type' => $this->string(255)->notNull(),
            'allergy' => $this->text()->notNull(),
            'growth' => $this->text()->notNull(),
            'life_conditions' => $this->text()->notNull(),
            'profession' => $this->text()->notNull(),
            'work_conditions' => $this->text()->notNull(),
            'blood_group' => $this->string(255)->notNull(),
            'rh_factor' => $this->string(255)->notNull(),
            'smoke' => $this->string(255)->notNull(),
            'smoking_history' => $this->string(255)->notNull(),
            'cigarettes_per_day' => $this->string(255)->notNull(),
            'other_bad_habits' => $this->text()->notNull(),
            'disability' => $this->string(255)->notNull(),
            'disability_type' => $this->string(255)->notNull(),
            'disability_group' => $this->string(255)->notNull(),
            'disability_date' => $this->string(255)->notNull(),
            'note' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_client_card}}');
    }
}

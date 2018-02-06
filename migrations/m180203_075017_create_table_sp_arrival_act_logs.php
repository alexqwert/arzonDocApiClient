<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_arrival_act_logs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_arrival_act_logs}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'act_id' => $this->integer(11)->notNull(),
            'good_id' => $this->integer(11),
            'boxing' => $this->integer(11)->notNull(),
            'volume' => $this->double()->notNull(),
            'box_price' => $this->double()->notNull(),
            'price_purchuase' => $this->double()->notNull(),
            'count_box' => $this->double()->notNull(),
            'id_standard' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_arrival_act_logs}}');
    }
}

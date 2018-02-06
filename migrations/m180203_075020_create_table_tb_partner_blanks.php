<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_partner_blanks extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_partner_blanks}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'partner_id' => $this->integer(11)->notNull(),
            'barcod' => $this->bigInteger(20)->notNull(),
            'date' => $this->dateTime()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_partner_blanks}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_goods_partner extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_goods_partner}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'good_id' => $this->integer(11)->notNull(),
            'partner_id' => $this->integer(11)->notNull(),
            'boxing_id' => $this->integer(11)->notNull(),
            'volume' => $this->double()->notNull(),
            'box_price' => $this->double()->notNull(),
            'price_purchase' => $this->double()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_goods_partner}}');
    }
}

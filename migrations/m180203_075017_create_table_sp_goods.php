<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_goods extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_goods}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'lang' => $this->integer(11)->notNull(),
            'group_id' => $this->integer(11)->notNull(),
            'title' => $this->text()->notNull(),
            'shorttitle' => $this->text()->notNull(),
            'articul' => $this->string(255)->notNull(),
            'expiration_date' => $this->string(255)->notNull(),
            'cat' => $this->integer(11)->notNull(),
            'group' => $this->integer(11)->notNull(),
            'alert' => $this->integer(11)->notNull(),
            'price' => $this->double()->notNull(),
            'type' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'alert_status' => $this->integer(11)->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_goods}}');
    }
}

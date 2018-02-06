<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_currencies extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_currencies}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'currencyId' => $this->integer(11)->notNull(),
            'currencyLanguageId' => $this->smallInteger(4)->notNull(),
            'currencyShort' => $this->string(20)->notNull(),
            'currencyName' => $this->string(20)->notNull(),
        ], $tableOptions);

        $this->insert('{{%sp_currencies}}',['id'=>'4','currencyId'=>'1305033543','currencyLanguageId'=>'1','currencyShort'=>'UZS','currencyName'=>'so`m']);
        $this->insert('{{%sp_currencies}}',['id'=>'5','currencyId'=>'1305033544','currencyLanguageId'=>'1','currencyShort'=>'EUR','currencyName'=>'evro']);
        $this->insert('{{%sp_currencies}}',['id'=>'6','currencyId'=>'1305033545','currencyLanguageId'=>'1','currencyShort'=>'USD','currencyName'=>'AQSh dollari']);
        $this->insert('{{%sp_currencies}}',['id'=>'7','currencyId'=>'1305033546','currencyLanguageId'=>'1','currencyShort'=>'TRY','currencyName'=>'Yeni türk lirası']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_currencies}}');
    }
}

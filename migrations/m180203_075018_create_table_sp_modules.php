<?php

use yii\db\Migration;

class m180203_075018_create_table_sp_modules extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_modules}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'module' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'active' => $this->integer(1)->notNull(),
        ], $tableOptions);

        $this->insert('{{%sp_modules}}',['id'=>'1','module'=>'Раздел','description'=>'','active'=>'1']);
        $this->insert('{{%sp_modules}}',['id'=>'2','module'=>'Контентная страница','description'=>'','active'=>'1']);
        $this->insert('{{%sp_modules}}',['id'=>'3','module'=>'Список материалов','description'=>'','active'=>'1']);
        $this->insert('{{%sp_modules}}',['id'=>'4','module'=>'Список материалов с прикрепленными файлами','description'=>'','active'=>'0']);
        $this->insert('{{%sp_modules}}',['id'=>'5','module'=>'Другой модуль','description'=>'','active'=>'1']);
        $this->insert('{{%sp_modules}}',['id'=>'7','module'=>'Корень сайта','description'=>'','active'=>'1']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_modules}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075021_create_table_tb_users_timetable extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_users_timetable}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'user_id' => $this->integer(11)->notNull(),
            'week' => $this->integer(11)->notNull(),
            'timetable_from' => $this->string(255)->notNull(),
            'timetable_to' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_users_timetable}}',['id'=>'1','user_id'=>'1','week'=>'1','timetable_from'=>'08:30','timetable_to'=>'23:00']);
        $this->insert('{{%tb_users_timetable}}',['id'=>'2','user_id'=>'30','week'=>'1','timetable_from'=>'00:00','timetable_to'=>'23:23']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_users_timetable}}');
    }
}

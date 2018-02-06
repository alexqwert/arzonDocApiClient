<?php

use yii\db\Migration;

class m180203_075021_create_table_tb_users extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_users}}', [
            'user_id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'user_login' => $this->string(255)->notNull(),
            'user_password' => $this->string(255)->notNull(),
            'user_name' => $this->string(255)->notNull(),
            'user_photo' => $this->string(255)->notNull()->defaultValue('avatar.jpg'),
            'user_activeness' => $this->integer(11)->notNull()->defaultValue('1'),
            'user_is_online' => $this->integer(11)->notNull(),
            'user_registered_date' => $this->dateTime()->notNull(),
            'user_auth_date' => $this->dateTime()->notNull(),
            'user_last_active_time' => $this->dateTime()->notNull(),
            'user_type' => $this->string(255)->notNull(),
            'user_group' => $this->string(255)->notNull(),
            'user_type_id' => $this->integer(11)->notNull(),
            'filial' => $this->integer(11)->notNull(),
            'lastactivity' => $this->integer(11)->notNull(),
            'timeout' => $this->integer(11)->notNull(),
            'starttime' => $this->string(255)->notNull(),
            'endtime' => $this->string(255)->notNull(),
            'ip' => $this->string(255)->notNull(),
            'role' => $this->integer(11)->notNull(),
            'lastsecretkey' => $this->integer(11)->notNull(),
            'rec' => $this->smallInteger(4)->notNull(),
            'time' => $this->integer(11)->notNull(),
            'hospital_protsent' => $this->double()->notNull(),
            'hospital_sum' => $this->double()->notNull(),
            'oued_protsent' => $this->double()->notNull(),
            'cabinet' => $this->string(255)->notNull(),
            'timetable' => $this->integer(11)->notNull(),
            'category' => $this->string(255)->notNull(),
            'floor' => $this->string(255)->notNull(),
        ], $tableOptions);
        $this->insert('{{%tb_users}}',['user_id'=>'1','user_login'=>'Admin','user_password'=>'1c5e4a034b0dfe8bb88ade5aec60f1fb','user_name'=>'Administrator','user_photo'=>'avatar.jpg','user_activeness'=>'1','user_is_online'=>'0','user_registered_date'=>'2017-03-30 13:14:21','user_auth_date'=>'2017-10-17 11:06:20','user_last_active_time'=>'2017-10-17 11:16:03','user_type'=>'admin','user_group'=>'1','user_type_id'=>'1','filial'=>'1422948829','lastactivity'=>'0','timeout'=>'50','starttime'=>'00:00','endtime'=>'23:59','ip'=>'','role'=>'1490166087','lastsecretkey'=>'1508220380','rec'=>'0','time'=>'30','hospital_protsent'=>'0','hospital_sum'=>'5000','oued_protsent'=>'0','cabinet'=>'','timetable'=>'0','category'=>'','floor'=>'']);
        
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_users}}');
    }
}

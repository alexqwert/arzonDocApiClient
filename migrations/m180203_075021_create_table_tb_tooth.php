<?php

use yii\db\Migration;

class m180203_075021_create_table_tb_tooth extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_tooth}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'adult_type' => $this->string(255)->notNull(),
            'jaw' => $this->string(255)->notNull(),
            'position' => $this->string(255)->notNull(),
            'number' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_tooth}}',['id'=>'1','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'left','number'=>'18']);
        $this->insert('{{%tb_tooth}}',['id'=>'2','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'left','number'=>'17']);
        $this->insert('{{%tb_tooth}}',['id'=>'3','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'left','number'=>'16']);
        $this->insert('{{%tb_tooth}}',['id'=>'4','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'left','number'=>'15']);
        $this->insert('{{%tb_tooth}}',['id'=>'5','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'left','number'=>'14']);
        $this->insert('{{%tb_tooth}}',['id'=>'6','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'left','number'=>'13']);
        $this->insert('{{%tb_tooth}}',['id'=>'7','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'left','number'=>'12']);
        $this->insert('{{%tb_tooth}}',['id'=>'8','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'left','number'=>'11']);
        $this->insert('{{%tb_tooth}}',['id'=>'9','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'left','number'=>'55']);
        $this->insert('{{%tb_tooth}}',['id'=>'10','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'left','number'=>'54']);
        $this->insert('{{%tb_tooth}}',['id'=>'11','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'left','number'=>'53']);
        $this->insert('{{%tb_tooth}}',['id'=>'12','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'left','number'=>'52']);
        $this->insert('{{%tb_tooth}}',['id'=>'13','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'left','number'=>'51']);
        $this->insert('{{%tb_tooth}}',['id'=>'14','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'right','number'=>'21']);
        $this->insert('{{%tb_tooth}}',['id'=>'15','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'right','number'=>'22']);
        $this->insert('{{%tb_tooth}}',['id'=>'16','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'right','number'=>'23']);
        $this->insert('{{%tb_tooth}}',['id'=>'17','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'right','number'=>'24']);
        $this->insert('{{%tb_tooth}}',['id'=>'18','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'right','number'=>'25']);
        $this->insert('{{%tb_tooth}}',['id'=>'19','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'right','number'=>'26']);
        $this->insert('{{%tb_tooth}}',['id'=>'20','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'right','number'=>'27']);
        $this->insert('{{%tb_tooth}}',['id'=>'21','adult_type'=>'adult','jaw'=>'upper-jaw','position'=>'right','number'=>'28']);
        $this->insert('{{%tb_tooth}}',['id'=>'24','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'right','number'=>'61']);
        $this->insert('{{%tb_tooth}}',['id'=>'25','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'right','number'=>'62']);
        $this->insert('{{%tb_tooth}}',['id'=>'26','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'right','number'=>'63']);
        $this->insert('{{%tb_tooth}}',['id'=>'27','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'right','number'=>'64']);
        $this->insert('{{%tb_tooth}}',['id'=>'28','adult_type'=>'kid','jaw'=>'upper-jaw','position'=>'right','number'=>'65']);
        $this->insert('{{%tb_tooth}}',['id'=>'29','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'left','number'=>'48']);
        $this->insert('{{%tb_tooth}}',['id'=>'30','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'left','number'=>'47']);
        $this->insert('{{%tb_tooth}}',['id'=>'31','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'left','number'=>'46']);
        $this->insert('{{%tb_tooth}}',['id'=>'32','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'left','number'=>'45']);
        $this->insert('{{%tb_tooth}}',['id'=>'33','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'left','number'=>'44']);
        $this->insert('{{%tb_tooth}}',['id'=>'34','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'left','number'=>'43']);
        $this->insert('{{%tb_tooth}}',['id'=>'35','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'left','number'=>'42']);
        $this->insert('{{%tb_tooth}}',['id'=>'36','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'left','number'=>'41']);
        $this->insert('{{%tb_tooth}}',['id'=>'37','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'left','number'=>'85']);
        $this->insert('{{%tb_tooth}}',['id'=>'38','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'left','number'=>'84']);
        $this->insert('{{%tb_tooth}}',['id'=>'39','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'left','number'=>'83']);
        $this->insert('{{%tb_tooth}}',['id'=>'40','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'left','number'=>'82']);
        $this->insert('{{%tb_tooth}}',['id'=>'41','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'left','number'=>'81']);
        $this->insert('{{%tb_tooth}}',['id'=>'42','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'right','number'=>'31']);
        $this->insert('{{%tb_tooth}}',['id'=>'43','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'right','number'=>'32']);
        $this->insert('{{%tb_tooth}}',['id'=>'44','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'right','number'=>'33']);
        $this->insert('{{%tb_tooth}}',['id'=>'45','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'right','number'=>'34']);
        $this->insert('{{%tb_tooth}}',['id'=>'46','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'right','number'=>'35']);
        $this->insert('{{%tb_tooth}}',['id'=>'47','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'right','number'=>'36']);
        $this->insert('{{%tb_tooth}}',['id'=>'48','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'right','number'=>'37']);
        $this->insert('{{%tb_tooth}}',['id'=>'49','adult_type'=>'adult','jaw'=>'lower-jaw','position'=>'right','number'=>'38']);
        $this->insert('{{%tb_tooth}}',['id'=>'50','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'right','number'=>'71']);
        $this->insert('{{%tb_tooth}}',['id'=>'51','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'right','number'=>'72']);
        $this->insert('{{%tb_tooth}}',['id'=>'52','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'right','number'=>'73']);
        $this->insert('{{%tb_tooth}}',['id'=>'53','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'right','number'=>'74']);
        $this->insert('{{%tb_tooth}}',['id'=>'54','adult_type'=>'kid','jaw'=>'lower-jaw','position'=>'right','number'=>'75']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_tooth}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_labcat extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_labcat}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'categoryId' => $this->integer(11)->notNull(),
            'categoryLanguageId' => $this->integer(11)->notNull(),
            'categoryName' => $this->string(255)->notNull(),
            'filds' => $this->string(255)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_labcat}}',['id'=>'1','categoryId'=>'1338873901','categoryLanguageId'=>'2','categoryName'=>'Экспресс-тест','filds'=>'','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'2','categoryId'=>'1338891794','categoryLanguageId'=>'2','categoryName'=>'Торч','filds'=>'','sort'=>'4','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'3','categoryId'=>'1340426676','categoryLanguageId'=>'2','categoryName'=>'Гормоны','filds'=>'','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'4','categoryId'=>'1340426758','categoryLanguageId'=>'2','categoryName'=>'Биохимия','filds'=>'','sort'=>'4','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'5','categoryId'=>'1340426790','categoryLanguageId'=>'2','categoryName'=>'Микроскопия','filds'=>'','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'8','categoryId'=>'1382425792','categoryLanguageId'=>'2','categoryName'=>'ПЦР','filds'=>'','sort'=>'6','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'9','categoryId'=>'1383201263','categoryLanguageId'=>'2','categoryName'=>'БАК. ПОСЕВ','filds'=>'','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'15','categoryId'=>'1475907616','categoryLanguageId'=>'2','categoryName'=>'МОЧА','filds'=>'','sort'=>'8','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'16','categoryId'=>'1383201263','categoryLanguageId'=>'3','categoryName'=>'БАК. ПОСЕВ','filds'=>'','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'17','categoryId'=>'1490782207','categoryLanguageId'=>'2','categoryName'=>'Другие','filds'=>'','sort'=>'10','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'18','categoryId'=>'1490782207','categoryLanguageId'=>'3','categoryName'=>'Other','filds'=>'','sort'=>'10','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'19','categoryId'=>'1490950142','categoryLanguageId'=>'2','categoryName'=>'ОАК','filds'=>'','sort'=>'0','active'=>'0']);
        $this->insert('{{%tb_labcat}}',['id'=>'20','categoryId'=>'1490950142','categoryLanguageId'=>'3','categoryName'=>'RBC','filds'=>'','sort'=>'0','active'=>'0']);
        $this->insert('{{%tb_labcat}}',['id'=>'21','categoryId'=>'1493265124','categoryLanguageId'=>'2','categoryName'=>'АЛЛЕРГОПАНЕЛИ','filds'=>'','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'22','categoryId'=>'1493265124','categoryLanguageId'=>'3','categoryName'=>'АЛЛЕРГОПАНЕЛИ','filds'=>'','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'23','categoryId'=>'1493297508','categoryLanguageId'=>'2','categoryName'=>'ДЛИТЕЛЬНЫЕ ГОРМОНЫ','filds'=>'','sort'=>'3','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'24','categoryId'=>'1493297508','categoryLanguageId'=>'3','categoryName'=>'ДЛИТЕЛЬНЫЕ ГОРМОНЫ','filds'=>'','sort'=>'3','active'=>'1']);
        $this->insert('{{%tb_labcat}}',['id'=>'25','categoryId'=>'1338891794','categoryLanguageId'=>'3','categoryName'=>'Торч','filds'=>'','sort'=>'4','active'=>'1']);
        $this->execute('SET foreign_key_checks = 1;');

        $this->createIndex('idx_categoryId_5397_14','tb_labcat','categoryId',0);

    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_labcat}}');
    }
}

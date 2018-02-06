<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_subcategories extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_subcategories}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'category_id' => $this->integer(11)->notNull(),
            'user_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'price' => $this->double()->notNull(),
            'prime_price' => $this->double()->notNull(),
            'goods_category' => $this->integer(11)->notNull(),
            'doctor_protsent' => $this->double()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'def' => $this->smallInteger(4)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'skidka' => $this->double()->notNull(),
            'type' => $this->integer(11)->notNull(),
            'days' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_subcategories}}',['id'=>'413','group_id'=>'1431936356','category_id'=>'1431935025','user_id'=>'32','lang'=>'2','title'=>'Первичный осмотр','price'=>'25000','prime_price'=>'1','goods_category'=>'1507177890','doctor_protsent'=>'0','sort'=>'1','def'=>'1','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'422','group_id'=>'1431936356','category_id'=>'1431935025','user_id'=>'32','lang'=>'3','title'=>'Первичный осмотр','price'=>'25000','prime_price'=>'1','goods_category'=>'1507177890','doctor_protsent'=>'0','sort'=>'1','def'=>'1','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'423','group_id'=>'1506071606','category_id'=>'1431935025','user_id'=>'30','lang'=>'2','title'=>'Первичный осмотр','price'=>'30000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'10','sort'=>'1','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'424','group_id'=>'1506071606','category_id'=>'1431935025','user_id'=>'30','lang'=>'3','title'=>'Первичный осмотр','price'=>'30000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'10','sort'=>'1','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'425','group_id'=>'1506072476','category_id'=>'1431935025','user_id'=>'32','lang'=>'2','title'=>'Повторный осмотр','price'=>'25000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'0','sort'=>'2','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'426','group_id'=>'1506072476','category_id'=>'1431935025','user_id'=>'32','lang'=>'3','title'=>'Повторный осмотр','price'=>'25000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'0','sort'=>'2','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'427','group_id'=>'1506084509','category_id'=>'1505984251','user_id'=>'32','lang'=>'2','title'=>'Первичный осмотр','price'=>'47000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'0','sort'=>'1','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'428','group_id'=>'1506084509','category_id'=>'1505984251','user_id'=>'32','lang'=>'3','title'=>'Первичный осмотр','price'=>'47000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'0','sort'=>'1','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'429','group_id'=>'1506154382','category_id'=>'1432731282','user_id'=>'30','lang'=>'2','title'=>'Первичный осмотр','price'=>'25000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'0','sort'=>'0','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'430','group_id'=>'1506154382','category_id'=>'1432731282','user_id'=>'30','lang'=>'3','title'=>'Первичный осмотр','price'=>'25000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'0','sort'=>'0','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'431','group_id'=>'1508223495','category_id'=>'1432731282','user_id'=>'30','lang'=>'2','title'=>'ЭКГ','price'=>'50000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'10','sort'=>'2','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'432','group_id'=>'1508223495','category_id'=>'1432731282','user_id'=>'30','lang'=>'3','title'=>'ЭКГ','price'=>'50000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'10','sort'=>'2','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'433','group_id'=>'1508230503','category_id'=>'1508230309','user_id'=>'0','lang'=>'2','title'=>'Электрофарез','price'=>'15000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'0','sort'=>'1','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'434','group_id'=>'1508230503','category_id'=>'1508230309','user_id'=>'0','lang'=>'3','title'=>'Электрофарез','price'=>'15000','prime_price'=>'0','goods_category'=>'0','doctor_protsent'=>'0','sort'=>'1','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'435','group_id'=>'1509354910','category_id'=>'1431935025','user_id'=>'30','lang'=>'2','title'=>'Бесп','price'=>'0','prime_price'=>'0','goods_category'=>'1507177890','doctor_protsent'=>'0','sort'=>'0','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
        $this->insert('{{%tb_subcategories}}',['id'=>'436','group_id'=>'1509354910','category_id'=>'1431935025','user_id'=>'30','lang'=>'3','title'=>'Бесп','price'=>'0','prime_price'=>'0','goods_category'=>'1507177890','doctor_protsent'=>'0','sort'=>'0','def'=>'0','active'=>'1','skidka'=>'0','type'=>'1','days'=>'']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_subcategories}}');
    }
}

<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_groupanaliz extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_groupanaliz}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'price' => $this->string(255)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_groupanaliz}}',['id'=>'1','group_id'=>'1490858850','lang'=>'0','title'=>'BIOCHEMICAL ANALYSISES','price'=>'163000','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'2','group_id'=>'1490859038','lang'=>'0','title'=>'LIPIDE SPECTRUM','price'=>'68000','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'3','group_id'=>'1490859097','lang'=>'0','title'=>'ЭЛЕКТРОЛИТЫ','price'=>'109000','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'4','group_id'=>'1490859147','lang'=>'0','title'=>'LIVER TESTS','price'=>'51000','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'5','group_id'=>'1490859259','lang'=>'0','title'=>'ФЕРМЕНТЫ КРОВИ','price'=>'79000','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'6','group_id'=>'1490859433','lang'=>'0','title'=>'Диагностика анемий','price'=>'60000','sort'=>'6','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'7','group_id'=>'1490859503','lang'=>'0','title'=>'КОАГУЛОГРАММА','price'=>'55000','sort'=>'7','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'8','group_id'=>'1490859681','lang'=>'0','title'=>'Иммуноглобулин','price'=>'95000','sort'=>'9','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'9','group_id'=>'1490859717','lang'=>'0','title'=>'TORCH-ИНФЕКЦИИ IgG','price'=>'166000','sort'=>'10','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'10','group_id'=>'1490859745','lang'=>'0','title'=>'TORCH-ИНФЕКЦИИ IgM','price'=>'166000','sort'=>'12','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'11','group_id'=>'1490859869','lang'=>'0','title'=>'Checkup 1 (Стандартный) ','price'=>'284000','sort'=>'13','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'12','group_id'=>'1490859991','lang'=>'0','title'=>'Checkup 2 (Мужчина)','price'=>'495000','sort'=>'14','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'13','group_id'=>'1490860163','lang'=>'0','title'=>' Checkup 3 (Женщина)','price'=>'495000','sort'=>'14','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'14','group_id'=>'1490860315','lang'=>'0','title'=>'Гормоны отвечающие за работу щитовидной железы ','price'=>'190000','sort'=>'15','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'15','group_id'=>'1490860407','lang'=>'0','title'=>'Гормоны отвечающие за работу щитовидной железы (свободный)','price'=>'100000','sort'=>'16','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'16','group_id'=>'1490860452','lang'=>'0','title'=>'Гормоны отвечающие за работу щитовидной железы (общий)','price'=>'100000','sort'=>'16','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'17','group_id'=>'1490860530','lang'=>'0','title'=>'ПРЕНАТАЛЬНАЯ ДИАГНОСТИКА','price'=>'122000','sort'=>'18','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'18','group_id'=>'1490860720','lang'=>'0','title'=>'Диагностика Сахарного диабета ','price'=>'175000','sort'=>'20','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'19','group_id'=>'1490860749','lang'=>'0','title'=>'Диагностика гепатитов BC','price'=>'49000','sort'=>'20','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'20','group_id'=>'1490860779','lang'=>'0','title'=>'Диагностика метаболического синдрома ','price'=>'190000','sort'=>'16','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'21','group_id'=>'1490860810','lang'=>'0','title'=>'Ревматологический спектр','price'=>'80000','sort'=>'17','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'22','group_id'=>'1490860858','lang'=>'0','title'=>'Диагностика заболевание печени','price'=>'170000','sort'=>'18','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'23','group_id'=>'1490860904','lang'=>'0','title'=>'Планирование беременности','price'=>'300000','sort'=>'19','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'24','group_id'=>'1490861100','lang'=>'0','title'=>'Нефрологический спектр','price'=>'140000','sort'=>'20','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'25','group_id'=>'1492067733','lang'=>'0','title'=>'ОБЩИЙ АНАЛИЗ КРОВИ (дети) акция','price'=>'0','sort'=>'4','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'26','group_id'=>'1492067969','lang'=>'0','title'=>'ЛЕЙКОЦИТАРНАЯ ФОРМУЛА','price'=>'0','sort'=>'1','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'27','group_id'=>'1493266859','lang'=>'0','title'=>'Проба Реберга','price'=>'35000','sort'=>'5','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'28','group_id'=>'1493287184','lang'=>'0','title'=>'ПРЕНАТАЛЬНАЯ ДИАГНОСТИКА','price'=>'122000','sort'=>'18','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'29','group_id'=>'1493349956','lang'=>'0','title'=>' ОБЩИЙ АНАЛИЗ КРОВИ (дети)','price'=>'19500','sort'=>'3','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'30','group_id'=>'1493350281','lang'=>'0','title'=>'Глюкоза','price'=>'8000','sort'=>'3','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'31','group_id'=>'1493351094','lang'=>'0','title'=>'Гельменты IgG','price'=>'60000','sort'=>'6','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'32','group_id'=>'1493987387','lang'=>'0','title'=>'ОБЩИЙ АНАЛИЗ КРОВИ','price'=>'0','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'33','group_id'=>'1493988613','lang'=>'0','title'=>'ОБЩИЙ АНАЛИЗ КРОВИ акция','price'=>'0','sort'=>'2','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'34','group_id'=>'1497510188','lang'=>'0','title'=>'Bilirubin Group','price'=>'26000','sort'=>'5','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'35','group_id'=>'1497512247','lang'=>'0','title'=>'СПЕЦАНАЛИЗ 1(ГИНЕКОЛОГИЯ)','price'=>'98000','sort'=>'15','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'36','group_id'=>'1497512313','lang'=>'0','title'=>'СПЕЦАНАЛИЗ 2 (НЕФРОЛОГИЯ)','price'=>'35000','sort'=>'16','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'37','group_id'=>'1497512357','lang'=>'0','title'=>'СПЕЦАНАЛИЗ 3 (УГРОЛОГИЯ)','price'=>'35000','sort'=>'17','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'38','group_id'=>'1497532042','lang'=>'0','title'=>'Диагностика гепатитов BD','price'=>'25500','sort'=>'17','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'39','group_id'=>'1497532570','lang'=>'0','title'=>'ПТИ (Воскресенье)','price'=>'0','sort'=>'2','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'40','group_id'=>'1497532576','lang'=>'0','title'=>'ПТИ','price'=>'20000','sort'=>'2','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'41','group_id'=>'1497532885','lang'=>'0','title'=>'Онко Диагностика 1','price'=>'126500','sort'=>'10','active'=>'0']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'42','group_id'=>'1497532922','lang'=>'0','title'=>'Онко диагностика заболиваний молоч. жел.','price'=>'102000','sort'=>'11','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'43','group_id'=>'1497533005','lang'=>'0','title'=>'СПЕЦАНАЛИЗ 7 (КАРДИОЛОГИЯ)','price'=>'156000','sort'=>'21','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'44','group_id'=>'1498128872','lang'=>'0','title'=>'HСV (Количественные) + HCV (Генотип)','price'=>'342000','sort'=>'20','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'45','group_id'=>'1498129195','lang'=>'0','title'=>'Адреналин + Ноадреналин','price'=>'220000','sort'=>'30','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'46','group_id'=>'1499085005','lang'=>'0','title'=>'RHEU-Test Aso-CRP-RF','price'=>'65000','sort'=>'2','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'47','group_id'=>'1499089002','lang'=>'0','title'=>'Cпец анализ 4 (хирургия)','price'=>'88000','sort'=>'18','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'48','group_id'=>'1499089118','lang'=>'0','title'=>'Спец анализ 5 (гастроэнтерология)','price'=>'107000','sort'=>'19','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'49','group_id'=>'1499089284','lang'=>'0','title'=>'Спец анализ 6 (неврология)','price'=>'55000','sort'=>'23','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'50','group_id'=>'1499089365','lang'=>'0','title'=>'Спец анализ 8 (педиатрия)','price'=>'110000','sort'=>'24','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'51','group_id'=>'1508919769','lang'=>'0','title'=>'ччччч','price'=>'18000','sort'=>'1','active'=>'1']);
        $this->insert('{{%tb_groupanaliz}}',['id'=>'52','group_id'=>'1509956733','lang'=>'0','title'=>'Test Gruppa','price'=>'0','sort'=>'0','active'=>'1']);

        $this->createIndex('idx_group_id_4967_08','tb_groupanaliz','group_id',0);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_groupanaliz}}');
    }
}

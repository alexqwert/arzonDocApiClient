<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_labsub extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_labsub}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'category_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'price' => $this->double()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'def' => $this->smallInteger(4)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'type' => $this->integer(11)->notNull(),
            'probirka' => $this->integer(11)->notNull(),
            'roles' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_labsub}}',['id'=>'1','group_id'=>'1338883174','category_id'=>'1338873901','lang'=>'2','title'=>'ГЕМАТОЛОГИЯ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'6','group_id'=>'1340426968','category_id'=>'1340426676','lang'=>'2','title'=>'ОПУХОЛЕВЫЕ МАРКЕРЫ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'7','group_id'=>'1341311380','category_id'=>'1338873901','lang'=>'2','title'=>'ГРУППА КРОВИ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'8','group_id'=>'1341311407','category_id'=>'1340426676','lang'=>'2','title'=>'ГОРМОНЫ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'9','group_id'=>'1341311440','category_id'=>'1338891794','lang'=>'2','title'=>'ПАРАЗИТЫ','price'=>'0','sort'=>'4','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'13','group_id'=>'1341315270','category_id'=>'1338891794','lang'=>'2','title'=>'ВИРУСНЫЕ ГЕПАТИТЫ','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'1490166087']);
        $this->insert('{{%tb_labsub}}',['id'=>'14','group_id'=>'1341315325','category_id'=>'1338891794','lang'=>'2','title'=>'TORCH-ИНФЕКЦИИ IgG','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'15','group_id'=>'1341315355','category_id'=>'1338891794','lang'=>'2','title'=>'ИНФЕКЦИИ','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'16','group_id'=>'1341315417','category_id'=>'1340426676','lang'=>'2','title'=>'КАРДИОСПЕЦИФИЧЕСКИЕ МАРКЕРЫ','price'=>'0','sort'=>'5','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'17','group_id'=>'1341315438','category_id'=>'1340426758','lang'=>'2','title'=>'БИОХИМИЧЕСКИЕ АНАЛИЗЫ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'1490166087,1490599994']);
        $this->insert('{{%tb_labsub}}',['id'=>'18','group_id'=>'1341315485','category_id'=>'1340426758','lang'=>'2','title'=>'РЕВМАТОИДНЫЕ ФАКТОРЫ (Количественный)','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'19','group_id'=>'1341315745','category_id'=>'1340426758','lang'=>'2','title'=>'ЛИПИДНЫЙ СПЕКТР','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'20','group_id'=>'1341315764','category_id'=>'1340426758','lang'=>'2','title'=>'ЭЛЕКТРОЛИТЫ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'22','group_id'=>'1341315878','category_id'=>'1340426758','lang'=>'2','title'=>'ДИАГНОСТИКА АНЕМИЙ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'23','group_id'=>'1341315895','category_id'=>'1340426758','lang'=>'2','title'=>'БИОХИМИЧЕСКИЕ АНАЛИЗЫ','price'=>'0','sort'=>'2','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'24','group_id'=>'1341316038','category_id'=>'1338873901','lang'=>'2','title'=>'ГЛЮКОЗО-ТОЛЕРАНТНЫЙ ЭКСПРЕСС ТЕСТ','price'=>'0','sort'=>'4','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'26','group_id'=>'1341316211','category_id'=>'1340426790','lang'=>'2','title'=>'АНАЛИЗЫ ВЫДЕЛЕНИЙ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'27','group_id'=>'1341316336','category_id'=>'1340426790','lang'=>'2','title'=>'ОПРЕДЕЛЕНИЕ БИОЛОГИЧЕСКОЙ СОВМЕСТИМОСТИ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'28','group_id'=>'1341317350','category_id'=>'1340426790','lang'=>'2','title'=>'ДЕРМАТОЛОГИЧЕСКИЕ ИССЛЕДОВАНИЯ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'29','group_id'=>'1341317405','category_id'=>'1475907616','lang'=>'2','title'=>'АНАЛИЗ МОЧИ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'31','group_id'=>'1341317664','category_id'=>'1338873901','lang'=>'2','title'=>'ЭКСПРЕСС-ТЕСТ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'32','group_id'=>'1341383415','category_id'=>'1340426676','lang'=>'2','title'=>'ИММУНОЛОГИЧЕСКИЕ ИССЛЕДОВАНИЯ','price'=>'0','sort'=>'3','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'33','group_id'=>'1341383542','category_id'=>'1340426790','lang'=>'2','title'=>'МИКРОСКОПИЧЕСКИЕ АНАЛИЗИ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'1490166087']);
        $this->insert('{{%tb_labsub}}',['id'=>'34','group_id'=>'1341383933','category_id'=>'1383201263','lang'=>'2','title'=>'БАК. ПОСЕВ','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'35','group_id'=>'1341383950','category_id'=>'1382425792','lang'=>'2','title'=>'ПЦР КРОВЬ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'37','group_id'=>'1341384206','category_id'=>'1338873901','lang'=>'2','title'=>'КОАГУЛОГРАММА','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'38','group_id'=>'1341384301','category_id'=>'1434521584','lang'=>'2','title'=>'ОПРЕДЕЛЕНИЕ ВИЧ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'44','group_id'=>'1341645464','category_id'=>'1340426676','lang'=>'2','title'=>'АЛЛЕРГИЯ','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'45','group_id'=>'1347421145','category_id'=>'1347421024','lang'=>'2','title'=>'Общая  Биохимия','price'=>'0','sort'=>'1','def'=>'0','active'=>'0','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'46','group_id'=>'1347870563','category_id'=>'1347421024','lang'=>'2','title'=>'Липидный  спектр','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'47','group_id'=>'1347871361','category_id'=>'1347421024','lang'=>'2','title'=>'Электролиты','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'48','group_id'=>'1347871398','category_id'=>'1347421024','lang'=>'2','title'=>'Печеночные пробы','price'=>'0','sort'=>'4','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'49','group_id'=>'1347871426','category_id'=>'1347421024','lang'=>'2','title'=>'Ферменты','price'=>'0','sort'=>'5','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'51','group_id'=>'1347871850','category_id'=>'1347421024','lang'=>'2','title'=>'Диагностика анемий','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'52','group_id'=>'1347871902','category_id'=>'1347421024','lang'=>'2','title'=>'КОАГУЛОГРАММА','price'=>'0','sort'=>'7','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'53','group_id'=>'1347871959','category_id'=>'1347421024','lang'=>'2','title'=>'Гормоны щитовидной ж.(свободный)','price'=>'0','sort'=>'8','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'54','group_id'=>'1347871993','category_id'=>'1347421024','lang'=>'2','title'=>'Гормоны щитовидной ж.(общий)','price'=>'0','sort'=>'9','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'55','group_id'=>'1347872049','category_id'=>'1347421024','lang'=>'2','title'=>'Пренатальная  Диагностика ','price'=>'0','sort'=>'10','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'56','group_id'=>'1347872098','category_id'=>'1347421024','lang'=>'2','title'=>'ТORCH IgG','price'=>'0','sort'=>'11','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'57','group_id'=>'1347872131','category_id'=>'1347421024','lang'=>'2','title'=>'TORCH IgM','price'=>'0','sort'=>'12','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'66','group_id'=>'1388745093','category_id'=>'1340426790','lang'=>'2','title'=>'МИКРОСКОПИЧЕСКИЕ АНАЛИЗИ 2','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'67','group_id'=>'1430207743','category_id'=>'1430207569','lang'=>'2','title'=>'Электрокардиограмма (EKG)','price'=>'0','sort'=>'10','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'68','group_id'=>'1430216127','category_id'=>'1430216010','lang'=>'2','title'=>'Кольпоскопия (Colposcopy)','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'69','group_id'=>'1430452850','category_id'=>'1347421024','lang'=>'2','title'=>'Диагностика бесплодия у женщин','price'=>'0','sort'=>'13','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'70','group_id'=>'1430452962','category_id'=>'1430452927','lang'=>'2','title'=>'Электрокардиограмма (EKG)','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'72','group_id'=>'1430473538','category_id'=>'1347421024','lang'=>'2','title'=>'Онко Диагностика 1','price'=>'0','sort'=>'14','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'73','group_id'=>'1430474046','category_id'=>'1347421024','lang'=>'2','title'=>'Онко Диагностика 2','price'=>'0','sort'=>'15','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'74','group_id'=>'1430474211','category_id'=>'1347421024','lang'=>'2','title'=>'Диабетическая группа','price'=>'0','sort'=>'16','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'75','group_id'=>'1430475933','category_id'=>'1347421024','lang'=>'2','title'=>'Диаг. бесплодия у мужчин','price'=>'0','sort'=>'18','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'76','group_id'=>'1430476379','category_id'=>'1347421024','lang'=>'2','title'=>'Кардиологическая группа ','price'=>'0','sort'=>'19','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'77','group_id'=>'1430547197','category_id'=>'1347421024','lang'=>'2','title'=>'Гормоны щит. железы','price'=>'0','sort'=>'13','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'79','group_id'=>'1431775680','category_id'=>'1475907616','lang'=>'2','title'=>'БИОХИМИЯ МОЧИ','price'=>'0','sort'=>'6','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'80','group_id'=>'1431927005','category_id'=>'1340426758','lang'=>'2','title'=>'ГЛЮКОЗО-ТОЛЕРАНТНЫЙ ТЕСТ','price'=>'0','sort'=>'5','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'81','group_id'=>'1431927355','category_id'=>'1340426758','lang'=>'2','title'=>'МОНИТОРИНГ НАРКОТИЧЕСКИХ ВЕЩЕСТВ','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'82','group_id'=>'1431928866','category_id'=>'1340426790','lang'=>'2','title'=>'ОБЩЕКЛИНИЧЕСКОЕ ИССЛЕДОВАНИЕ МОКРОТЫ','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'83','group_id'=>'1431929765','category_id'=>'1340426758','lang'=>'2','title'=>'ПРОБА РЕБЕРГА','price'=>'0','sort'=>'7','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'84','group_id'=>'1431930967','category_id'=>'1340426676','lang'=>'2','title'=>'ПРЕНАТАЛЬНАЯ ДИАГНОСТИКА ','price'=>'0','sort'=>'6','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'85','group_id'=>'1431932999','category_id'=>'1340426676','lang'=>'2','title'=>'ДИАГНОСТИКА КОСТНОГО МЕТАБОЛИЗМА','price'=>'0','sort'=>'7','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'86','group_id'=>'1431949883','category_id'=>'1338891794','lang'=>'2','title'=>'TORCH-ИНФЕКЦИИ IgM','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'87','group_id'=>'1431949883','category_id'=>'1338891794','lang'=>'3','title'=>'TORCH infections IgM ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'88','group_id'=>'1341315325','category_id'=>'1338891794','lang'=>'3','title'=>'TORCH infections IgG','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'89','group_id'=>'1431930967','category_id'=>'1340426676','lang'=>'3','title'=>'ПРЕНАТАЛЬНАЯ ДИАГНОСТИКА ','price'=>'0','sort'=>'6','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'90','group_id'=>'1341384301','category_id'=>'1434521584','lang'=>'3','title'=>'ОПРЕДЕЛЕНИЕ ВИЧ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'91','group_id'=>'1442216485','category_id'=>'1338891794','lang'=>'2','title'=>'ИНФЕКЦИИ2','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'92','group_id'=>'1455697793','category_id'=>'1340426758','lang'=>'2','title'=>'МОНИТОРИНГ НАРКОТИЧЕСКИХ ВЕЩЕСТВ','price'=>'0','sort'=>'10','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'93','group_id'=>'1341315895','category_id'=>'1340426758','lang'=>'3','title'=>'BIOCHEMICAL ANALYSIS','price'=>'0','sort'=>'2','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'94','group_id'=>'1341317664','category_id'=>'1338873901','lang'=>'3','title'=>'RAPID TEST','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'95','group_id'=>'1341384206','category_id'=>'1338873901','lang'=>'3','title'=>'Сoagulogram','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'96','group_id'=>'1341383950','category_id'=>'1382425792','lang'=>'3','title'=>'PSR','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'97','group_id'=>'1341645464','category_id'=>'1340426676','lang'=>'3','title'=>'ALLERGY','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'98','group_id'=>'1341317405','category_id'=>'1475907616','lang'=>'3','title'=>'ANALYSIS OF URINE','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'99','group_id'=>'1341316211','category_id'=>'1340426790','lang'=>'3','title'=>'Analysis of the discharge from the genitals','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'100','group_id'=>'1341315438','category_id'=>'1340426758','lang'=>'3','title'=>'Biochemical analysis','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'1490166087,1490599994']);
        $this->insert('{{%tb_labsub}}',['id'=>'101','group_id'=>'1431775680','category_id'=>'1475907616','lang'=>'3','title'=>'Biochemical urine','price'=>'0','sort'=>'6','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'102','group_id'=>'1341315270','category_id'=>'1338891794','lang'=>'3','title'=>'Viral hepatitis','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'1490166087']);
        $this->insert('{{%tb_labsub}}',['id'=>'103','group_id'=>'1338883174','category_id'=>'1338873901','lang'=>'3','title'=>'HEMATOLOGY','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'104','group_id'=>'1431927005','category_id'=>'1340426758','lang'=>'3','title'=>'Glucose tolerance test','price'=>'0','sort'=>'5','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'105','group_id'=>'1341316038','category_id'=>'1338873901','lang'=>'3','title'=>'Glucose tolerance express test','price'=>'0','sort'=>'4','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'106','group_id'=>'1341311407','category_id'=>'1340426676','lang'=>'3','title'=>'HORMONES','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'107','group_id'=>'1341311380','category_id'=>'1338873901','lang'=>'3','title'=>'BLOOD TYPE','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'108','group_id'=>'1341317350','category_id'=>'1340426790','lang'=>'3','title'=>'Dermatologically tested','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'109','group_id'=>'1341315878','category_id'=>'1340426758','lang'=>'3','title'=>'Diagnosis of anemia','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'110','group_id'=>'1431932999','category_id'=>'1340426676','lang'=>'3','title'=>'Diagnosis of bone metabolism','price'=>'0','sort'=>'7','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'111','group_id'=>'1341383415','category_id'=>'1340426676','lang'=>'3','title'=>'Immune status','price'=>'0','sort'=>'3','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'112','group_id'=>'1341315417','category_id'=>'1340426676','lang'=>'3','title'=>'Сardiac markers','price'=>'0','sort'=>'5','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'113','group_id'=>'1341315764','category_id'=>'1340426758','lang'=>'3','title'=>'Electrolytes','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'114','group_id'=>'1341315485','category_id'=>'1340426758','lang'=>'3','title'=>'Rheumatologic tests (Количественный)','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'115','group_id'=>'1341315745','category_id'=>'1340426758','lang'=>'3','title'=>'LIPID PROFILE','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'116','group_id'=>'1431927355','category_id'=>'1340426758','lang'=>'3','title'=>'DRUG MONITORING','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'117','group_id'=>'1341315355','category_id'=>'1338891794','lang'=>'3','title'=>'INFECTION','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'118','group_id'=>'1490772883','category_id'=>'1490950142','lang'=>'2','title'=>'ОБЩИЙ АНАЛИЗ КРОВИ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'119','group_id'=>'1490772883','category_id'=>'1490950142','lang'=>'3','title'=>'ОБЩИЙ АНАЛИЗ КРОВИ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'120','group_id'=>'1490782264','category_id'=>'1490782207','lang'=>'2','title'=>'Кардиология','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'121','group_id'=>'1490782264','category_id'=>'1490782207','lang'=>'3','title'=>'Кардиология','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'122','group_id'=>'1490783129','category_id'=>'1338891794','lang'=>'2','title'=>'TORCH-ИНФЕКЦИИ IgA','price'=>'0','sort'=>'0','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'123','group_id'=>'1490783129','category_id'=>'1338891794','lang'=>'3','title'=>'TORCH-ИНФЕКЦИИ IgA','price'=>'0','sort'=>'0','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'124','group_id'=>'1490784751','category_id'=>'1340426758','lang'=>'2','title'=>'ОБЩИЙ БИЛИРУБИН','price'=>'0','sort'=>'3','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'125','group_id'=>'1490784751','category_id'=>'1340426758','lang'=>'3','title'=>'ОБЩИЙ БИЛИРУБИН','price'=>'0','sort'=>'3','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'126','group_id'=>'1490788340','category_id'=>'1382425792','lang'=>'2','title'=>'ПЦР МАЗОК','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'127','group_id'=>'1490788340','category_id'=>'1382425792','lang'=>'3','title'=>'ПЦР МАЗОК','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'128','group_id'=>'1490853321','category_id'=>'1340426758','lang'=>'2','title'=>'ГЛЮКОЗО-ТОЛЕРАНТНЫЙ ТЕСТ 2','price'=>'0','sort'=>'5','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'129','group_id'=>'1490853321','category_id'=>'1340426758','lang'=>'3','title'=>'ГЛЮКОЗО-ТОЛЕРАНТНЫЙ ТЕСТ 2','price'=>'0','sort'=>'5','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'130','group_id'=>'1341383542','category_id'=>'1340426790','lang'=>'3','title'=>'МИКРОСКОПИЧЕСКИЕ АНАЛИЗИ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'1490166087']);
        $this->insert('{{%tb_labsub}}',['id'=>'131','group_id'=>'1490856313','category_id'=>'1340426676','lang'=>'2','title'=>'ДИАГНОСТИКА АНТИФОСФОЛИПИДНОГО СИНДРОМА','price'=>'0','sort'=>'4','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'132','group_id'=>'1490856313','category_id'=>'1340426676','lang'=>'3','title'=>'ДИАГНОСТИКА АНТИФОСФОЛИПИДНОГО СИНДРОМА','price'=>'0','sort'=>'4','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'133','group_id'=>'1490858158','category_id'=>'1490782207','lang'=>'2','title'=>'ВИЧ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'134','group_id'=>'1490858158','category_id'=>'1490782207','lang'=>'3','title'=>'HIV','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'135','group_id'=>'1490858330','category_id'=>'1490782207','lang'=>'2','title'=>'Реакция Вассермана (RW)','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'136','group_id'=>'1490858330','category_id'=>'1490782207','lang'=>'3','title'=>'Реакция Вассермана (RW)','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'137','group_id'=>'1490951063','category_id'=>'1490950142','lang'=>'2','title'=>'ЛЕЙКОЦИТАРНАЯ ФОРМУЛА','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'138','group_id'=>'1490951063','category_id'=>'1490950142','lang'=>'3','title'=>'ЛЕЙКОЦИТАРНАЯ ФОРМУЛА','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'139','group_id'=>'1490953483','category_id'=>'1338873901','lang'=>'2','title'=>'Ревматоидный фактор (Качественный)','price'=>'0','sort'=>'5','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'140','group_id'=>'1490953483','category_id'=>'1338873901','lang'=>'3','title'=>'Ревматоидный фактор (Качественный)','price'=>'0','sort'=>'5','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'141','group_id'=>'1340426968','category_id'=>'1340426676','lang'=>'3','title'=>'ОПУХОЛЕВЫЕ МАРКЕРЫ','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'142','group_id'=>'1493263505','category_id'=>'1338891794','lang'=>'2','title'=>'Гельминты LgG','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'143','group_id'=>'1493263505','category_id'=>'1338891794','lang'=>'3','title'=>'ПАРАЗИТЫ','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'144','group_id'=>'1493263505','category_id'=>'1338891794','lang'=>'2','title'=>'Гельминты LgG','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'145','group_id'=>'1493263505','category_id'=>'1338891794','lang'=>'3','title'=>'ПАРАЗИТЫ','price'=>'0','sort'=>'6','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'146','group_id'=>'1493265151','category_id'=>'1493265124','lang'=>'2','title'=>'АЛЛЕРГОПАНЕЛИ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'147','group_id'=>'1493265151','category_id'=>'1493265124','lang'=>'3','title'=>'АЛЛЕРГОПАНЕЛИ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'148','group_id'=>'1493297529','category_id'=>'1493297508','lang'=>'2','title'=>'ГОРМОНЫ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'1490166087']);
        $this->insert('{{%tb_labsub}}',['id'=>'149','group_id'=>'1493297529','category_id'=>'1493297508','lang'=>'3','title'=>'ГОРМОНЫ','price'=>'0','sort'=>'1','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'1490166087']);
        $this->insert('{{%tb_labsub}}',['id'=>'150','group_id'=>'1493370837','category_id'=>'1382425792','lang'=>'2','title'=>'ПЦР','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'151','group_id'=>'1493370837','category_id'=>'1382425792','lang'=>'3','title'=>'ПЦР','price'=>'0','sort'=>'3','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'152','group_id'=>'1495514466','category_id'=>'1338873901','lang'=>'2','title'=>'Аутоиммунные заболевания','price'=>'0','sort'=>'8','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'153','group_id'=>'1495514466','category_id'=>'1338873901','lang'=>'3','title'=>'Аутоиммунные заболевания','price'=>'0','sort'=>'8','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'154','group_id'=>'1497511996','category_id'=>'1382425792','lang'=>'2','title'=>'ПЦР МОЧА','price'=>'0','sort'=>'2','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'155','group_id'=>'1497511996','category_id'=>'1382425792','lang'=>'3','title'=>'ПЦР МОЧА','price'=>'0','sort'=>'2','def'=>'0','active'=>'0','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'158','group_id'=>'1497667684','category_id'=>'1490782207','lang'=>'2','title'=>'Неврология','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'159','group_id'=>'1497667684','category_id'=>'1490782207','lang'=>'3','title'=>'Неврология','price'=>'0','sort'=>'2','def'=>'0','active'=>'1','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'160','group_id'=>'1498104433','category_id'=>'1338873901','lang'=>'2','title'=>'АНАЛИЗЫ КРОВИ','price'=>'0','sort'=>'4','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'161','group_id'=>'1498104433','category_id'=>'1338873901','lang'=>'3','title'=>'АНАЛИЗЫ КРОВИ','price'=>'0','sort'=>'4','def'=>'0','active'=>'1','type'=>'1','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'162','group_id'=>'1498209627','category_id'=>'1490782207','lang'=>'2','title'=>'Кольпоскопия','price'=>'0','sort'=>'3','def'=>'0','active'=>'0','type'=>'0','probirka'=>'0','roles'=>'0']);
        $this->insert('{{%tb_labsub}}',['id'=>'163','group_id'=>'1498209627','category_id'=>'1490782207','lang'=>'3','title'=>'Кольпоскопия','price'=>'0','sort'=>'3','def'=>'0','active'=>'0','type'=>'0','probirka'=>'0','roles'=>'0']);

        $this->createIndex('idx_group_id_8892_09','tb_labsub','group_id',0);
        $this->createIndex('idx_category_id_8892_10','tb_labsub','category_id',0);
        $this->createIndex('idx_lang_8892_11','tb_labsub','lang',0);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_labsub}}');
    }
}

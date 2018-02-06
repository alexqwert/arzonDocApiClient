<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_specialization extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_specialization}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_specialization}}',['id'=>'1','group_id'=>'1','lang'=>'2','title'=>'Акушер']);
        $this->insert('{{%tb_specialization}}',['id'=>'2','group_id'=>'2','lang'=>'2','title'=>'Аллерголог']);
        $this->insert('{{%tb_specialization}}',['id'=>'3','group_id'=>'3','lang'=>'2','title'=>'Андролог']);
        $this->insert('{{%tb_specialization}}',['id'=>'4','group_id'=>'4','lang'=>'2','title'=>'Анестезиолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'5','group_id'=>'5','lang'=>'2','title'=>'Венеролог']);
        $this->insert('{{%tb_specialization}}',['id'=>'6','group_id'=>'6','lang'=>'2','title'=>'Вертебролог']);
        $this->insert('{{%tb_specialization}}',['id'=>'7','group_id'=>'7','lang'=>'2','title'=>'Врач ЛФК']);
        $this->insert('{{%tb_specialization}}',['id'=>'8','group_id'=>'8','lang'=>'2','title'=>'Врач функциональной диагностики ']);
        $this->insert('{{%tb_specialization}}',['id'=>'9','group_id'=>'9','lang'=>'2','title'=>'Гастроэнтеролог']);
        $this->insert('{{%tb_specialization}}',['id'=>'10','group_id'=>'10','lang'=>'2','title'=>'Гематолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'11','group_id'=>'11','lang'=>'2','title'=>'Генетик']);
        $this->insert('{{%tb_specialization}}',['id'=>'12','group_id'=>'12','lang'=>'2','title'=>'Гепатолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'13','group_id'=>'13','lang'=>'2','title'=>'Гинеколог']);
        $this->insert('{{%tb_specialization}}',['id'=>'14','group_id'=>'14','lang'=>'2','title'=>'Гирудотерапевт']);
        $this->insert('{{%tb_specialization}}',['id'=>'15','group_id'=>'15','lang'=>'2','title'=>'Гомеопат']);
        $this->insert('{{%tb_specialization}}',['id'=>'16','group_id'=>'16','lang'=>'2','title'=>'Дерматолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'17','group_id'=>'17','lang'=>'2','title'=>'Диетолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'18','group_id'=>'18','lang'=>'2','title'=>'Иммунолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'19','group_id'=>'19','lang'=>'2','title'=>'Инфекционист']);
        $this->insert('{{%tb_specialization}}',['id'=>'20','group_id'=>'20','lang'=>'2','title'=>'Кардиолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'21','group_id'=>'21','lang'=>'2','title'=>'Кинезиолог ']);
        $this->insert('{{%tb_specialization}}',['id'=>'22','group_id'=>'22','lang'=>'2','title'=>'Косметолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'23','group_id'=>'23','lang'=>'2','title'=>'Логопед']);
        $this->insert('{{%tb_specialization}}',['id'=>'24','group_id'=>'24','lang'=>'2','title'=>'Лор (отоларинголог)']);
        $this->insert('{{%tb_specialization}}',['id'=>'25','group_id'=>'25','lang'=>'2','title'=>'Маммолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'26','group_id'=>'26','lang'=>'2','title'=>'Мануальный терапевт']);
        $this->insert('{{%tb_specialization}}',['id'=>'27','group_id'=>'27','lang'=>'2','title'=>'Массажист']);
        $this->insert('{{%tb_specialization}}',['id'=>'28','group_id'=>'28','lang'=>'2','title'=>'Миколог']);
        $this->insert('{{%tb_specialization}}',['id'=>'29','group_id'=>'29','lang'=>'2','title'=>'Нарколог']);
        $this->insert('{{%tb_specialization}}',['id'=>'30','group_id'=>'30','lang'=>'2','title'=>'Невролог']);
        $this->insert('{{%tb_specialization}}',['id'=>'31','group_id'=>'31','lang'=>'2','title'=>'Нейрохирург']);
        $this->insert('{{%tb_specialization}}',['id'=>'32','group_id'=>'32','lang'=>'2','title'=>'Неонатолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'33','group_id'=>'33','lang'=>'2','title'=>'Нефролог']);
        $this->insert('{{%tb_specialization}}',['id'=>'34','group_id'=>'34','lang'=>'2','title'=>'Окулист (офтальмолог)']);
        $this->insert('{{%tb_specialization}}',['id'=>'35','group_id'=>'35','lang'=>'2','title'=>'Онкодерматолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'36','group_id'=>'36','lang'=>'2','title'=>'Онколог']);
        $this->insert('{{%tb_specialization}}',['id'=>'37','group_id'=>'37','lang'=>'2','title'=>'Ортопед']);
        $this->insert('{{%tb_specialization}}',['id'=>'38','group_id'=>'38','lang'=>'2','title'=>'Остеопат']);
        $this->insert('{{%tb_specialization}}',['id'=>'39','group_id'=>'39','lang'=>'2','title'=>'Педиатр']);
        $this->insert('{{%tb_specialization}}',['id'=>'40','group_id'=>'40','lang'=>'2','title'=>'Пластический хирург']);
        $this->insert('{{%tb_specialization}}',['id'=>'41','group_id'=>'41','lang'=>'2','title'=>'Проктолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'42','group_id'=>'42','lang'=>'2','title'=>'Психиатр']);
        $this->insert('{{%tb_specialization}}',['id'=>'43','group_id'=>'43','lang'=>'2','title'=>'Психолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'44','group_id'=>'44','lang'=>'2','title'=>'Психотерапевт']);
        $this->insert('{{%tb_specialization}}',['id'=>'45','group_id'=>'45','lang'=>'2','title'=>'Пульмонолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'46','group_id'=>'46','lang'=>'2','title'=>'Реабилитолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'47','group_id'=>'47','lang'=>'2','title'=>'Ревматолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'48','group_id'=>'48','lang'=>'2','title'=>'Рентгенолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'49','group_id'=>'49','lang'=>'2','title'=>'Репродуктолог (ЭКО)']);
        $this->insert('{{%tb_specialization}}',['id'=>'50','group_id'=>'50','lang'=>'2','title'=>'Рефлексотерапевт']);
        $this->insert('{{%tb_specialization}}',['id'=>'51','group_id'=>'51','lang'=>'2','title'=>'Сексолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'52','group_id'=>'52','lang'=>'2','title'=>'Спортивный врач']);
        $this->insert('{{%tb_specialization}}',['id'=>'53','group_id'=>'53','lang'=>'2','title'=>'Стоматолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'54','group_id'=>'54','lang'=>'2','title'=>'Сурдолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'55','group_id'=>'55','lang'=>'2','title'=>'Терапевт']);
        $this->insert('{{%tb_specialization}}',['id'=>'56','group_id'=>'56','lang'=>'2','title'=>'Травматолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'57','group_id'=>'57','lang'=>'2','title'=>'Трихолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'58','group_id'=>'58','lang'=>'2','title'=>'УЗИ-специалист']);
        $this->insert('{{%tb_specialization}}',['id'=>'59','group_id'=>'59','lang'=>'2','title'=>'Уролог']);
        $this->insert('{{%tb_specialization}}',['id'=>'60','group_id'=>'60','lang'=>'2','title'=>'Физиотерапевт']);
        $this->insert('{{%tb_specialization}}',['id'=>'61','group_id'=>'61','lang'=>'2','title'=>'Флеболог']);
        $this->insert('{{%tb_specialization}}',['id'=>'62','group_id'=>'62','lang'=>'2','title'=>'Хирург']);
        $this->insert('{{%tb_specialization}}',['id'=>'63','group_id'=>'63','lang'=>'2','title'=>'Эндокринолог']);
        $this->insert('{{%tb_specialization}}',['id'=>'64','group_id'=>'64','lang'=>'2','title'=>'Эндоскопист']);
        $this->insert('{{%tb_specialization}}',['id'=>'65','group_id'=>'65','lang'=>'2','title'=>'Эпилептолог']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_specialization}}');
    }
}

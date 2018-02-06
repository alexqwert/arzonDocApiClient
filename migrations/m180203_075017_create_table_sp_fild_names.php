<?php

use yii\db\Migration;

class m180203_075017_create_table_sp_fild_names extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%sp_fild_names}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'template_id' => $this->integer(11)->notNull(),
            'category_id' => $this->text()->notNull(),
            'type_id' => $this->integer(11)->notNull(),
            'default_text' => $this->text()->notNull(),
            'description' => $this->string(255)->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'sort_elements' => $this->string(255)->notNull(),
            'active' => $this->integer(11)->notNull(),
            'required' => $this->text()->notNull(),
            'autocomplete' => $this->text()->notNull(),
            'ckeditor' => $this->text()->notNull(),
        ], $tableOptions);

        $this->insert('{{%sp_fild_names}}',['id'=>'1','group_id'=>'1506493819','lang'=>'2','title'=>'Жалобы','template_id'=>'0','category_id'=>'1431935025 1432731282 1505984251 1508230309','type_id'=>'1','default_text'=>'<p>Кожные покровы: обычные __________________ окраска _______________________<br />
<br />
влажность ________________________ отечность ______________________________<br />
<br />
Лимфатические узлы ______________________________________________________<br />
<br />
Суставы: (не) изменены _______________ (без) болезненные ___________ цвет _______________<br />
<br />
конфигурация сохранена (нет) __________________ отечность _________ контрактура,</p>
','description'=>'','sort'=>'1','sort_elements'=>'sort','active'=>'1','required'=>'required','autocomplete'=>'','ckeditor'=>'editor2']);
        $this->insert('{{%sp_fild_names}}',['id'=>'2','group_id'=>'1506493819','lang'=>'3','title'=>'Жалобы','template_id'=>'0','category_id'=>'1431935025 1432731282 1505984251 1508230309','type_id'=>'1','default_text'=>'<p>Кожные покровы: обычные __________________ окраска _______________________<br />
<br />
влажность ________________________ отечность ______________________________<br />
<br />
Лимфатические узлы ______________________________________________________<br />
<br />
Суставы: (не) изменены _______________ (без) болезненные ___________ цвет _______________<br />
<br />
конфигурация сохранена (нет) __________________ отечность _________ контрактура,</p>
','description'=>'','sort'=>'1','sort_elements'=>'sort','active'=>'1','required'=>'required','autocomplete'=>'','ckeditor'=>'editor2']);
        $this->insert('{{%sp_fild_names}}',['id'=>'3','group_id'=>'1506496211','lang'=>'2','title'=>'Развитие настоящего заболевания','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'2','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'4','group_id'=>'1506496211','lang'=>'3','title'=>'Развитие настоящего заболевания','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'2','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'5','group_id'=>'1506662150','lang'=>'2','title'=>'Анамнез жизни','template_id'=>'0','category_id'=>'1431935025 1432731282','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'3','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'6','group_id'=>'1506662150','lang'=>'3','title'=>'Анамнез жизни','template_id'=>'0','category_id'=>'1431935025 1432731282','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'3','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'7','group_id'=>'1506662174','lang'=>'2','title'=>'Внешний осмотр','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'4','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'8','group_id'=>'1506662174','lang'=>'3','title'=>'Внешний осмотр','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'4','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'9','group_id'=>'1506662192','lang'=>'2','title'=>'Состояние СОПР','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'5','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'10','group_id'=>'1506662192','lang'=>'3','title'=>'Состояние СОПР','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'5','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'11','group_id'=>'1506662212','lang'=>'2','title'=>'Объективно','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'6','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'12','group_id'=>'1506662212','lang'=>'3','title'=>'Объективно','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'6','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'13','group_id'=>'1506662265','lang'=>'2','title'=>'Онкоосмотр','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'7','sort_elements'=>'sort','active'=>'1','required'=>'required','autocomplete'=>'autocomplete','ckeditor'=>'editor2']);
        $this->insert('{{%sp_fild_names}}',['id'=>'14','group_id'=>'1506662265','lang'=>'3','title'=>'Онкоосмотр','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'7','sort_elements'=>'sort','active'=>'1','required'=>'required','autocomplete'=>'autocomplete','ckeditor'=>'editor2']);
        $this->insert('{{%sp_fild_names}}',['id'=>'15','group_id'=>'1506662325','lang'=>'2','title'=>'Рентгенологически, УЗИ, др.','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'8','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'16','group_id'=>'1506662325','lang'=>'3','title'=>'Рентгенологически, УЗИ, др.','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'8','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'17','group_id'=>'1506662336','lang'=>'2','title'=>'Диагноз','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'9','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'18','group_id'=>'1506662336','lang'=>'3','title'=>'Диагноз','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'9','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'19','group_id'=>'1506662356','lang'=>'2','title'=>'Диагноз по МКБ','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'10','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'20','group_id'=>'1506662356','lang'=>'3','title'=>'Диагноз по МКБ','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'10','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'21','group_id'=>'1506662398','lang'=>'2','title'=>'Лечение','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'11','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'22','group_id'=>'1506662398','lang'=>'3','title'=>'Лечение','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'11','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'23','group_id'=>'1506662435','lang'=>'2','title'=>'Рентгенологически в процессе лечение ','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'12','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'24','group_id'=>'1506662435','lang'=>'3','title'=>'Рентгенологически в процессе лечение ','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'12','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'25','group_id'=>'1506662459','lang'=>'2','title'=>'План обследования','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'13','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'26','group_id'=>'1506662459','lang'=>'3','title'=>'План обследования','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'13','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'27','group_id'=>'1506662486','lang'=>'2','title'=>'Прогноз','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'14','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'28','group_id'=>'1506662486','lang'=>'3','title'=>'Прогноз','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'14','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'29','group_id'=>'1506662512','lang'=>'2','title'=>'Повторный визит','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'15','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'30','group_id'=>'1506662512','lang'=>'3','title'=>'Повторный визит','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'15','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'31','group_id'=>'1506662532','lang'=>'2','title'=>'Рекомендации','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'16','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);
        $this->insert('{{%sp_fild_names}}',['id'=>'32','group_id'=>'1506662532','lang'=>'3','title'=>'Рекомендации','template_id'=>'0','category_id'=>'','type_id'=>'1','default_text'=>'','description'=>'','sort'=>'16','sort_elements'=>'sort','active'=>'1','required'=>'','autocomplete'=>'','ckeditor'=>'']);

    }

    public function safeDown()
    {
        $this->dropTable('{{%sp_fild_names}}');
    }
}

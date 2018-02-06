<?php

use yii\db\Migration;

class m180203_075020_create_table_tb_structure_names extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_structure_names}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'structure_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'name' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
        ], $tableOptions);


        $this->insert('{{%tb_structure_names}}',['id'=>'714','structure_id'=>'1','lang'=>'2','name'=>'Главная','description'=>'<h3>
        Добро пожаловать</h3>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        ']);
        $this->insert('{{%tb_structure_names}}',['id'=>'715','structure_id'=>'1','lang'=>'3','name'=>'Home','description'=>'<h3>
        Welcome</h3>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        ']);
        $this->insert('{{%tb_structure_names}}',['id'=>'726','structure_id'=>'398','lang'=>'2','name'=>'О компании','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'727','structure_id'=>'398','lang'=>'3','name'=>'About company','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'732','structure_id'=>'400','lang'=>'2','name'=>'Контакты','description'=>'<h1>
        Контакты</h1>
        <p>
        <b>Address</b></p>
        <p align=\"justify\">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        ']);
        $this->insert('{{%tb_structure_names}}',['id'=>'733','structure_id'=>'400','lang'=>'3','name'=>'Contacts','description'=>'<h1>
        Contacts</h1>
        <p>
        <b>Address</b></p>
        <p align=\"justify\">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        ']);
        $this->insert('{{%tb_structure_names}}',['id'=>'735','structure_id'=>'401','lang'=>'2','name'=>'Продукты','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'736','structure_id'=>'401','lang'=>'3','name'=>'Products','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'741','structure_id'=>'1','lang'=>'1','name'=>'Bosh sahifa','description'=>'<h3>
        Hush kelibsiz</h3>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        ']);
        $this->insert('{{%tb_structure_names}}',['id'=>'742','structure_id'=>'403','lang'=>'1','name'=>'Yangiliklar','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'743','structure_id'=>'403','lang'=>'2','name'=>'Новости','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'744','structure_id'=>'403','lang'=>'3','name'=>'News','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'745','structure_id'=>'404','lang'=>'1','name'=>'Xizmatlar','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'746','structure_id'=>'404','lang'=>'2','name'=>'Услуги','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'747','structure_id'=>'404','lang'=>'3','name'=>'Services','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'748','structure_id'=>'398','lang'=>'1','name'=>'Kompaniya','description'=>'']);
        $this->insert('{{%tb_structure_names}}',['id'=>'749','structure_id'=>'400','lang'=>'1','name'=>'Bog`lanish','description'=>'<h1>
        Bog`lanish</h1>
        <p>
        <b>Address</b></p>
        <p align=\"justify\">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        ']);
        $this->insert('{{%tb_structure_names}}',['id'=>'750','structure_id'=>'401','lang'=>'1','name'=>'Mahsulotlar','description'=>'']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_structure_names}}');
    }
}

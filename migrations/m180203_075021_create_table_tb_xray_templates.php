<?php

use yii\db\Migration;

class m180203_075021_create_table_tb_xray_templates extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_xray_templates}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'xray_id' => $this->integer(11)->notNull(),
            'template_id' => $this->integer(11)->notNull(),
        ], $tableOptions);

        $this->insert('{{%tb_xray_templates}}',['id'=>'1','xray_id'=>'1343634513','template_id'=>'71']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'2','xray_id'=>'1343634513','template_id'=>'71']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'3','xray_id'=>'1343634513','template_id'=>'71']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'4','xray_id'=>'1343634513','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'5','xray_id'=>'1343646208','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'6','xray_id'=>'1343646359','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'7','xray_id'=>'1343646415','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'8','xray_id'=>'1343646430','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'9','xray_id'=>'1343646509','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'10','xray_id'=>'1343646568','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'11','xray_id'=>'1343646589','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'12','xray_id'=>'1343646208','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'13','xray_id'=>'1343634513','template_id'=>'71']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'14','xray_id'=>'1343634513','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'15','xray_id'=>'1343646208','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'16','xray_id'=>'1343646359','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'17','xray_id'=>'1343646415','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'18','xray_id'=>'1343646430','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'19','xray_id'=>'1343646509','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'20','xray_id'=>'1343646568','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'21','xray_id'=>'1343646589','template_id'=>'89']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'263','xray_id'=>'1376478175','template_id'=>'331']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'357','xray_id'=>'1376478175','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'358','xray_id'=>'1389931531','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'359','xray_id'=>'1407907891','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'360','xray_id'=>'1422519501','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'361','xray_id'=>'1343646208','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'362','xray_id'=>'1343646359','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'363','xray_id'=>'1343646415','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'364','xray_id'=>'1343646430','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'365','xray_id'=>'1343646509','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'366','xray_id'=>'1343646568','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'367','xray_id'=>'1343646589','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'368','xray_id'=>'1355220894','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'369','xray_id'=>'1355221036','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'370','xray_id'=>'1355221106','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'371','xray_id'=>'1355221156','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'372','xray_id'=>'1355221181','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'373','xray_id'=>'1355221235','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'374','xray_id'=>'1355221278','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'375','xray_id'=>'1355221308','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'376','xray_id'=>'1355221341','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'377','xray_id'=>'1355221402','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'378','xray_id'=>'1355221516','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'379','xray_id'=>'1355221558','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'380','xray_id'=>'1355221595','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'381','xray_id'=>'1355221642','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'382','xray_id'=>'1355221673','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'383','xray_id'=>'1355221707','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'384','xray_id'=>'1355221737','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'385','xray_id'=>'1355221781','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'386','xray_id'=>'1355221807','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'387','xray_id'=>'1355221848','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'388','xray_id'=>'1355221958','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'389','xray_id'=>'1355221991','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'390','xray_id'=>'1355222027','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'391','xray_id'=>'1355222059','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'392','xray_id'=>'1355222126','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'393','xray_id'=>'1355222156','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'394','xray_id'=>'1355222188','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'395','xray_id'=>'1355222228','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'396','xray_id'=>'1355222259','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'397','xray_id'=>'1355222302','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'398','xray_id'=>'1355222327','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'399','xray_id'=>'1355222366','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'400','xray_id'=>'1355222397','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'401','xray_id'=>'1355222426','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'402','xray_id'=>'1355222461','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'403','xray_id'=>'1355222486','template_id'=>'241']);
        $this->insert('{{%tb_xray_templates}}',['id'=>'404','xray_id'=>'1356156824','template_id'=>'241']);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_xray_templates}}');
    }
}

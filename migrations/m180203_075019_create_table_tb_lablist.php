<?php

use yii\db\Migration;

class m180203_075019_create_table_tb_lablist extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tb_lablist}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'group_id' => $this->integer(11)->notNull(),
            'cat_id' => $this->integer(11)->notNull(),
            'sub_id' => $this->integer(11)->notNull(),
            'lang' => $this->integer(11)->notNull(),
            'title' => $this->string(255)->notNull(),
            'short' => $this->string(255)->notNull(),
            'price' => $this->double()->notNull(),
            'price2' => $this->double()->notNull(),
            'price3' => $this->double()->notNull(),
            'price4' => $this->double()->notNull(),
            'price5' => $this->double()->notNull(),
            'sort' => $this->integer(11)->notNull(),
            'sort2' => $this->integer(11)->notNull(),
            'def' => $this->smallInteger(4)->notNull(),
            'active' => $this->smallInteger(4)->notNull(),
            'template' => $this->integer(11)->notNull(),
            'text' => $this->text()->notNull(),
            'norm' => $this->text()->notNull(),
            'skidka' => $this->double()->notNull(),
            'type' => $this->integer(11)->notNull(),
            'days' => $this->string(255)->notNull(),
            'protsent' => $this->integer(11)->notNull()->defaultValue('30'),
            'method' => $this->integer(11)->notNull(),
            'turn' => $this->integer(11)->notNull(),
            'status' => $this->integer(11)->notNull()->defaultValue('1'),
        ], $tableOptions);


        $this->insert('{{%tb_lablist}}',['id'=>'4','group_id'=>'1340426851','cat_id'=>'1340426714','sub_id'=>'0','lang'=>'2','title'=>'Кортизол ','short'=>'KRT','price'=>'5000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1340426851','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'6','group_id'=>'1340683423','cat_id'=>'1340426714','sub_id'=>'0','lang'=>'2','title'=>'Прогестерон','short'=>'PRG','price'=>'2000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1340683423','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'8','group_id'=>'1340729493','cat_id'=>'1340426714','sub_id'=>'0','lang'=>'2','title'=>'Пролактин','short'=>'PRK','price'=>'1000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1340729493','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'9','group_id'=>'1340729767','cat_id'=>'1340426714','sub_id'=>'0','lang'=>'2','title'=>'Лютеиннизирующий гормон','short'=>'LG','price'=>'100','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1340729767','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'12','group_id'=>'1341384690','cat_id'=>'1498104433','sub_id'=>'0','lang'=>'2','title'=>'Скорость оседания эритроцитов(ESR)','short'=>'СОЭ','price'=>'8500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341384690','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'25','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'13','group_id'=>'1341384743','cat_id'=>'1341315895','sub_id'=>'0','lang'=>'2','title'=>'Гликозилированный гемоглобин','short'=>'HBA1C','price'=>'29000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'165','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'14','group_id'=>'1341385065','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'2','title'=>'Группа крови-резус фактор','short'=>'гр.крови','price'=>'19500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341385065','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'18','group_id'=>'1341385867','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Кортизол','short'=>'Cort','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'76','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'19','group_id'=>'1341385885','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Прогестерон','short'=>'Prog','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'71','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'20','group_id'=>'1341385903','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Пролактин','short'=>'PRL','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'74','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'21','group_id'=>'1341385945','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Лютеинизирующий гормон (ЛГ)','short'=>'LH','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'4','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'5','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'22','group_id'=>'1341385990','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Фолликулостимулирующий гормон ФСГ','short'=>'FSH','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'241','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'23','group_id'=>'1341386033','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Эстрадиол Е2 (Эстроген)','short'=>'Estra','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'6','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'228','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'24','group_id'=>'1341386050','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Эстриол E3 (Эстроген)','short'=>'Estri','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'7','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'80','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'25','group_id'=>'1341386079','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Соматотропный гормон  СТГ','short'=>'HGH','price'=>'186000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'8','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'78','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'26','group_id'=>'1341386175','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Инсулиноподобный фактор роста   (ИФР)','short'=>'ИФР','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'9','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'87','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'27','group_id'=>'1341386298','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Тиреотропный гормон ТТГ','short'=>'TSH','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'10','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'1','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'29','group_id'=>'1341386453','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Трийодтиронин свободный  Т3 св','short'=>'fT3','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'11','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'67','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'30','group_id'=>'1341386496','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Трийодтиронин общий  Т3','short'=>'Т3 ','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'13','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'59','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'31','group_id'=>'1341386525','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Тироксин свободный  Т4 св','short'=>'fT4','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'12','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'65','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'32','group_id'=>'1341386546','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Тироксин общий  Т4','short'=>'Т4 ','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'14','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'58','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'33','group_id'=>'1341386648','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Тестостерон','short'=>'Testo','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'15','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'229','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'34','group_id'=>'1341386706','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Свободный тестостерон','short'=>'F-TESTO','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'16','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'419','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'35','group_id'=>'1341386885','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Дегидроэпиандростерона Сульфат   (DHEA-S)','short'=>'DHEA-S','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'17','sort2'=>'17','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'77','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'36','group_id'=>'1341386903','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Инсулин','short'=>'Инс','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'18','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'221','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'37','group_id'=>'1341387295','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Хорионический гонадотропин (ХГ)','short'=>'hCG','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'19','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
         </p>
        <p>
        <strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:105px;height:20px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:220px;height:20px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:105px;height:27px;\">
        <p>
        <strong>Год рож.:</strong></p>
        </td>
        <td style=\"width:220px;height:27px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:105px;height:18px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:220px;height:18px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
         </p>
        <p align=\"center\">
        <strong>Хорионический гонадотропин (</strong><strong>HCG</strong><strong>)</strong></p>
        <p align=\"center\">
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:600px;\" width=\"600\">
        <tbody>
        <tr>
        <td rowspan=\"2\" style=\"width:115px;height:16px;\">
        <p align=\"center\">
        <strong>Исследуемая</strong></p>
        <p align=\"center\">
        <strong>Группа</strong></p>
        </td>
        <td colspan=\"3\" style=\"width:484px;height:16px;\">
        <p align=\"center\">
        <strong>Единицы,МЕ/л</strong></p>
        </td>
        </tr>
        <tr>
        <td rowspan=\"4\" style=\"width:136px;height:21px;\">
        <p>
         </p>
        <p>
         </p>
        <p align=\"center\">
        <strong>Результат</strong></p>
        </td>
        <td style=\"width:180px;height:21px;\">
        <p style=\"margin-left:6.6pt;\">
        <strong>Нижний предел</strong></p>
        </td>
        <td style=\"width:168px;height:21px;\">
        <p>
        <strong>      Верхнийпредел</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p align=\"center\">
        Мужчины</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        15</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p align=\"center\">
        Женщины</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        15</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" style=\"width:348px;\">
        <p style=\"margin-left:.6pt;\">
        <strong>Не беременные</strong><strong>                         Беременные :</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        1 неделя</p>
        </td>
        <td rowspan=\"9\" style=\"width:136px;\">
        <p align=\"center\">
         </p>
        <p align=\"center\">
         </p>
        <p align=\"center\">
         </p>
        <p align=\"center\">
         </p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        50</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        2 неделя</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        20</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        500</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        3 неделя</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        500</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        5000</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        4 неделя</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        3000</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        19000</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        5-8 недели</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        14000</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        169000</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        9-13 недели</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        16000</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        180000</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        22 неделя</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        4500</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        70000</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        24 неделя</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        3000</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        69500</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:115px;\">
        <p>
        3-й триместр</p>
        </td>
        <td style=\"width:180px;\">
        <p align=\"center\">
        2400</p>
        </td>
        <td style=\"width:168px;\">
        <p align=\"center\">
        50000</p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'62','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'38','group_id'=>'1341387459','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Тиреоглобулин','short'=>'ТГ','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'20','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'457','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'39','group_id'=>'1341387505','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Альфа-фетопротеин (АФП)','short'=>'AFP','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'31','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'103','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'40','group_id'=>'1341387540','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Раково-эмбриональный антиген (РЭА )','short'=>'СЕА','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'32','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'105','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'41','group_id'=>'1341387625','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Простатспецифический антиген общий (ПСА)','short'=>'tPSA','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'34','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'114','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'42','group_id'=>'1341387685','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Простатспецифический антиген свободный (с ПСА)','short'=>'fPSA','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'33','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'106','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'43','group_id'=>'1341387735','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Углеводный антиген CA 15-3','short'=>'CA 15-3','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'35','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'107','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'44','group_id'=>'1341387776','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Углеводный антиген CA 19-9','short'=>'CA 19-9','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'36','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'108','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'45','group_id'=>'1341387817','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Углеводный антиген CA 125','short'=>'CA 125','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'37','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'111','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'46','group_id'=>'1341388005','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Свободный хорионический гонадотропин(Free B-HCG)','short'=>'free bHCG','price'=>'48000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'40','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'112','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'47','group_id'=>'1341388277','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'В-2 Микроглобулин','short'=>'В-2 Микрогл.','price'=>'47000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'41','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'48','group_id'=>'1341388529','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Лямблии  суммарные','short'=>'Лям.сум','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'55','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'52','group_id'=>'1341388718','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Аскарида  IgG','short'=>'Аскар','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'6','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'56','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'54','group_id'=>'1341388803','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Иммуноглобулин Е    ','short'=>'IgЕ','price'=>'34500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341388803','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'120','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'55','group_id'=>'1341388899','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'HAV IgM (Гепатит А)','short'=>'HAV IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'62','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'48','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'57','group_id'=>'1341388948','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'HBsAg (Гепатит B)','short'=>'HBsAg','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'63','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'49','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'58','group_id'=>'1341389013','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>' Anti - HBs / HBs Ab','short'=>'Anti-HBs  HBsAb','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'65','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'51','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'59','group_id'=>'1341389053','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'HBc  IgM (Core)','short'=>' IgM (Core)','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'67','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'11','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'61','group_id'=>'1341389206','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'HBe Ag ','short'=>'HBeAg','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'69','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'52','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'62','group_id'=>'1341389226','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'Аnti - НCV  (Количественный)','short'=>'Аnti - НCV  ','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1341389226','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'319','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'64','group_id'=>'1341389358','cat_id'=>'1341389431','sub_id'=>'0','lang'=>'2','title'=>'Общая биохимия','short'=>'-','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341389358','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'65','group_id'=>'1341389509','cat_id'=>'1341389431','sub_id'=>'0','lang'=>'2','title'=>'Липидный спектр','short'=>'-','price'=>'22000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341389509','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'66','group_id'=>'1341389551','cat_id'=>'1341389431','sub_id'=>'0','lang'=>'2','title'=>'Электролиты','short'=>'-','price'=>'30000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341389551','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'67','group_id'=>'1341389624','cat_id'=>'1341389431','sub_id'=>'0','lang'=>'2','title'=>'Печеночные пробы','short'=>'-','price'=>'22000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341389624','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'68','group_id'=>'1341389650','cat_id'=>'1341389431','sub_id'=>'0','lang'=>'2','title'=>'Ферменты крови','short'=>'-','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341389650','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'69','group_id'=>'1341389910','cat_id'=>'1341389431','sub_id'=>'0','lang'=>'2','title'=>'Диагностика анемий','short'=>'-','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341389910','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'70','group_id'=>'1341389953','cat_id'=>'1341389431','sub_id'=>'0','lang'=>'2','title'=>'Коагулограмма','short'=>'-','price'=>'22000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341389953','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'71','group_id'=>'1341390053','cat_id'=>'1341390008','sub_id'=>'0','lang'=>'2','title'=>'Гормоны','short'=>'-','price'=>'50000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341390053','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'72','group_id'=>'1341390133','cat_id'=>'1341390008','sub_id'=>'0','lang'=>'2','title'=>'Гормоны щитов. железы своб.','short'=>'своб.','price'=>'30000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341390133','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'73','group_id'=>'1341390169','cat_id'=>'1341390008','sub_id'=>'0','lang'=>'2','title'=>'Гормоны щитов. железы общий','short'=>'общий','price'=>'30000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341390169','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'75','group_id'=>'1341390919','cat_id'=>'1341390807','sub_id'=>'0','lang'=>'2','title'=>'TORCH  IgG','short'=>'IgG','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341390919','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'76','group_id'=>'1341390966','cat_id'=>'1341390807','sub_id'=>'0','lang'=>'2','title'=>'TORCH  IgM','short'=>'IgM','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341390966','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'77','group_id'=>'1341391074','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Toxoplasma Gondii  IgG','short'=>'Tox  IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'31','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'26','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'78','group_id'=>'1341391184','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Toxoplasma Gondii  IgM','short'=>'Toxo IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'32','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'33','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'80','group_id'=>'1341391395','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Cytomegalovirus  IgM','short'=>'CMV IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'34','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'34','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'81','group_id'=>'1341391434','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Rubella  IgG','short'=>'Rub IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'35','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'468','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'82','group_id'=>'1341391528','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Rubella  IgM','short'=>'Rub IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'36','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'39','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'86','group_id'=>'1341395420','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Herpes Simplex II  IgG','short'=>'HSV II IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'39','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'467','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'88','group_id'=>'1341395833','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Herpes Simplex 1/2  IgM','short'=>'Herp.1/2  IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'42','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'35','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'89','group_id'=>'1341395856','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Herpes Simlex 1/2  IgG','short'=>'Herp. 1/2  IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'41','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'28','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'91','group_id'=>'1341395925','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Chlamydia trachomatis  IgM','short'=>'Chl  IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'45','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'38','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'92','group_id'=>'1341395944','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Chlamydia trachomatis  IgG','short'=>'Chl  IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'44','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'31','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'93','group_id'=>'1341396003','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma hominis  IgM','short'=>'Myc/hom IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'50','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'36','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'95','group_id'=>'1341396055','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma hominis  IgG','short'=>'Myc/hom IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'49','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'10','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'96','group_id'=>'1341396101','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Ureaplasma urealyticum  IgM','short'=>'Ure IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'52','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'37','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'98','group_id'=>'1341396152','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Ureaplasma urealyticum  IgG','short'=>'Ure IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'51','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'30','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'101','group_id'=>'1341396257','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Сhlamydia pneumonia IgG','short'=>'Chl.pn. IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'10','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'45','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'105','group_id'=>'1341396407','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Helicobacter pylori lgA','short'=>'HelIgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'15','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'42','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'112','group_id'=>'1341399247','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Trichomonas vaginalis IgG','short'=>'Trich IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'20','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'46','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'113','group_id'=>'1341399552','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Candida (IgA, IgG, IgM)','short'=>'Can(AGM)','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'22','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'43','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'114','group_id'=>'1341399574','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Candida  IgM','short'=>'Can IgM','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'23','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'44','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'115','group_id'=>'1341399627','cat_id'=>'1341315417','sub_id'=>'0','lang'=>'2','title'=>'Тропонин I ES','short'=>'Тропонин','price'=>'33000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341399627','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'117','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'116','group_id'=>'1341400005','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Общий белок','short'=>'TP','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'14','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'166','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'117','group_id'=>'1341400192','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Альбумин','short'=>'Alb','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'15','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'167','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'119','group_id'=>'1341400352','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Аланинаминотрансфераза (АЛТ)  ','short'=>'ALT','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'17','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'9','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'120','group_id'=>'1341400401','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Аспартатаминотрансфераза (АСТ)  ','short'=>'AST','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'18','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'150','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'121','group_id'=>'1341400474','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Креатинфосфокиназа','short'=>'CK 2','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'1341400474','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'155','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'122','group_id'=>'1341400544','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Креатинин','short'=>'Сrea','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'19','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'160','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'123','group_id'=>'1341400645','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Креатинфосфокиназа-МВ','short'=>'CK-MB 2','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'1341400645','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'156','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'124','group_id'=>'1341400681','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Мочевина','short'=>'Urea','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'20','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'159','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'126','group_id'=>'1341400751','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Мочевая  кислота','short'=>'U Asid','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'163','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'128','group_id'=>'1341401140','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Кислая фосфатаза ','short'=>'ACP','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'33','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'154','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'129','group_id'=>'1341401185','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Тимоловая проба','short'=>'Tim-Pr','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1341401185','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'176','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'130','group_id'=>'1341401614','cat_id'=>'1341315485','sub_id'=>'0','lang'=>'2','title'=>'Ревматоидный фактор  Р Ф ','short'=>'RF','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'41','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'200','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'131','group_id'=>'1341401934','cat_id'=>'1341315485','sub_id'=>'0','lang'=>'2','title'=>'С-реактивный белок','short'=>'CRP','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'42','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'201','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'132','group_id'=>'1341401981','cat_id'=>'1341315485','sub_id'=>'0','lang'=>'2','title'=>'Антистрептолизин-О','short'=>'АСЛО','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'43','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'202','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'133','group_id'=>'1341402013','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'2','title'=>'Холестерол общий','short'=>'Chol','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'194','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'134','group_id'=>'1341402054','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'2','title'=>'Холестерол-ЛПВП','short'=>'ЛПВП','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'196','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'135','group_id'=>'1341402085','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'2','title'=>'Холестерол-ЛПНП','short'=>'ЛПНП','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'197','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'136','group_id'=>'1341402124','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'2','title'=>'Триглицериды','short'=>'Trig','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'195','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'138','group_id'=>'1341402504','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'2','title'=>'Железо','short'=>'Fe','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'7','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'189','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'139','group_id'=>'1341402520','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'2','title'=>'Калий','short'=>'K','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'8','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'191','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'140','group_id'=>'1341402543','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'2','title'=>'Натрий','short'=>'Na','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'9','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'192','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'141','group_id'=>'1341402559','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'2','title'=>'Хлор','short'=>'Cl','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'10','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'193','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'142','group_id'=>'1341402584','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'2','title'=>'Кальций общий','short'=>'Ca','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'11','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'270','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'143','group_id'=>'1341402608','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'2','title'=>'Фосфор','short'=>'P','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'12','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'188','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'144','group_id'=>'1341402629','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'2','title'=>'Магний','short'=>'Mg','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'13','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'190','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'145','group_id'=>'1341402760','cat_id'=>'1341315878','sub_id'=>'0','lang'=>'2','title'=>'Железо','short'=>'Fe ','price'=>'19000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1341402760','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'185','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'146','group_id'=>'1341402784','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Ферритин','short'=>'Ferritin','price'=>'33000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'22','sort2'=>'22','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'296','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'147','group_id'=>'1341402839','cat_id'=>'1341315878','sub_id'=>'0','lang'=>'2','title'=>'Общая Железосвязывающая Способность','short'=>'TIBC','price'=>'19500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1341402839','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'186','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'148','group_id'=>'1341402874','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Альфа-Амилаза (Диастаза)','short'=>'Amy','price'=>'22000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'28','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'175','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'149','group_id'=>'1341402914','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Лактатдегидрогеназа (ЛДГ)','short'=>'LDH','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'30','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'259','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'151','group_id'=>'1341403017','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Гамма-глутамилтрансфераза (ГГТ)','short'=>'GGT','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1341403017','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'308','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'152','group_id'=>'1341403261','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Липаза','short'=>'Lipase','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1341403261','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'177','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'153','group_id'=>'1341403349','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Щелочная фосфатаза ','short'=>'ALP','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'29','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'179','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'154','group_id'=>'1341403719','cat_id'=>'1341316038','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза натощак','short'=>'Глюкоз','price'=>'31000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341403719','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'172','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'155','group_id'=>'1341403768','cat_id'=>'1341316038','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза через 1 час после нагрузки','short'=>'1 час. глюк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341403768','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'173','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'156','group_id'=>'1341403815','cat_id'=>'1341316038','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза через 2 часа после нагрузки','short'=>'2 часа. глюк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341403815','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'174','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'157','group_id'=>'1341477573','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Урогенитальный мазок','short'=>'Мазок','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341477573','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
        <strong>Микроскопия мазка урогенитальной части (жен.)</strong></p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        <strong><em>место взятия:</em></strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        <strong><em>Эпителий</em></strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        <strong><em>Лейкоциты</em></strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        <strong><em>Микрофлора, простейшие</em></strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        <strong><em>Candida </em></strong></p>
        <p style=\"text-align: center; \">
        <strong><em>spp</em></strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        <strong><em>C</em></strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        <strong><em>abs</em></strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        <strong>U</strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
        abs</p>
        </td>
        </tr>
        <tr>
        <td colspan=\"2\" style=\"width:255px;\">
        <p style=\"text-align: center; \">
        <strong><em>Trichomonas vaginalis</em></strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td colspan=\"2\" style=\"width:255px;\">
        <p style=\"text-align: center; \">
        <strong><em>Neisseria gonorrhoeae</em></strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td colspan=\"2\" style=\"width:255px;\">
        <p style=\"text-align: center; \">
        <strong><em>Gardnerella vaginalis</em></strong></p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:127px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>Микроскопия мазка урогенитальной части (муж.)</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:212px;\">
        <p>
        <strong>Показатели</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Результат</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Норма</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Флора</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Гр.+</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Пл.эпителий</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>0-7</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Лейкоциты</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>0-4</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Эритроциты</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>0-1</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Гонококки</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>abs</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Трихомонада</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>abs</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Гарднерелла</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>abs</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>Дрожжевые грибки</strong></p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        <strong>abs</strong></p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'158','group_id'=>'1341477605','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Цитология  мазка (ПАП-тест)','short'=>'Цит. мазка','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341477605','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'159','group_id'=>'1341478089','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Спермограмма по ВОЗ','short'=>'СперВОЗ','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1341478089','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'160','group_id'=>'1341478139','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Исслед. секрета предстател. железы','short'=>'Сок простаты','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1341478139','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'282','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'164','group_id'=>'1341480949','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Анализ мокроты','short'=>'Мокрота','price'=>'14000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1341480949','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p align=\"center\">
        <strong>Обший анализ мокроты</strong></p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Показатели</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Результат</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Количество</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Цвет</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Прозрачность</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Микроскопия</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Спирали  куршмана</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Кристаллы Шарко-Лайдена</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Эпителий:</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Эритроциты</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Лейкоциты</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Дрожжевые грибки</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p align=\"center\">
        Флора</p>
        </td>
        <td style=\"width:319px;\">
        <p align=\"center\">
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p align=\"center\">
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'165','group_id'=>'1341481027','cat_id'=>'1341316336','sub_id'=>'0','lang'=>'2','title'=>'Проба Шуварского','short'=>'пр.Шувар.','price'=>'30000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481027','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'166','group_id'=>'1341481470','cat_id'=>'1341316336','sub_id'=>'0','lang'=>'2','title'=>'Проба Симса-Гунера','short'=>'пр.Симса','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481470','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'положительная','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'167','group_id'=>'1341481521','cat_id'=>'1341316336','sub_id'=>'0','lang'=>'2','title'=>'Проба на антиспермальные антитела','short'=>'Антисп. ант','price'=>'37500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481521','def'=>'0','active'=>'0','template'=>'1','text'=>'<p>
         </p>
        <p align=\"center\">
        <strong>Антиспермальные антитела</strong></p>
        <table align=\"center\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:199px;\">
        <p style=\"text-align: center; \">
        <strong>Ф.И.О</strong></p>
        </td>
        <td colspan=\"2\" style=\"width:438px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:199px;\">
        <p style=\"text-align: center; \">
        <strong>Возраст</strong></p>
        </td>
        <td colspan=\"2\" style=\"width:438px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td colspan=\"3\" style=\"width:638px;\">
        <p style=\"text-align: center; \">
        <strong>Проба на Антиспермальные  антитела</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:199px;\">
        <p>
         </p>
        </td>
        <td style=\"width:252px;\">
        <p style=\"text-align: center; \">
        <strong>Результат</strong></p>
        </td>
        <td style=\"width:186px;\">
        <p style=\"text-align: center; \">
        <strong>норма  </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:199px;\">
        <p style=\"text-align: center; \">
        <strong>Проба</strong></p>
        </td>
        <td style=\"width:252px;\">
        <p>
         </p>
        </td>
        <td style=\"width:186px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <div style=\"clear:both;\">
         </div>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'238','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'168','group_id'=>'1341481558','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'2','title'=>'Анализ на грибок','short'=>'ан.на грибок','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481558','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
         </p>
        <p>
         </p>
        <p align=\"center\">
        <strong>Анализ на грибок с гладкой кожи</strong></p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:319px;\">
        <p>
        <strong>Соскоб на грибок</strong></p>
        </td>
        <td style=\"width:319px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:319px;\">
        <p>
        <strong>Результат:</strong></p>
        </td>
        <td style=\"width:319px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'169','group_id'=>'1341481580','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'2','title'=>'Демодекоз с лица','short'=>'Демодекоз с лица','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341481580','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'170','group_id'=>'1341481604','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'2','title'=>'Чесоточный клещ','short'=>'Чес.клещ','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481604','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'171','group_id'=>'1341481632','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'2','title'=>'Лейшманиоз','short'=>'лейшм.','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481632','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'172','group_id'=>'1341481711','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Общий анализ мочи','short'=>'ОАМ','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341481711','def'=>'0','active'=>'1','template'=>'1','text'=>'<p style=\"text-align: center; \">
        <strong>Общий анализ мочи </strong></p>
        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:449px;\" width=\"449\">
        <tbody>
        <tr>
        <td colspan=\"4\" nowrap=\"nowrap\" style=\"width:449px;height:17px;\">
        <p style=\"text-align: center\">
        Физико-химические свойства</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Показатели</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        Результат</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        Норма</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Количество</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        30 мл</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
         </p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Цвет</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        светло -желт.</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        солом.-желт.</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Прозрачность</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        проз</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        прозрачная</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Реакция Ph</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        6,0</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        5,5 - 6,5</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Относительная плотность</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        1025</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        1010 -1030</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Глюкоза</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Нитриты</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        abs </p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Белок</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Кетоновые тела</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Уробилиноген</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Билирубин</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:109px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:136px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td colspan=\"4\" nowrap=\"nowrap\" style=\"width:449px;height:17px;\">
        <p style=\"text-align: center\">
        Микроскопия</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Показатели</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        Результат</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        Норма</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Эпителий: плоский</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        1 - 2</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
         </p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        переходной</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
         </p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        0-3 в поле зрения</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        почечный</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
         </p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
         </p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Лейкоциты</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        0 - 1</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        муж.0-2 в поле зрения</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
         </p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
         </p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        жен.1-2 в поле зрения</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Эритроциты:неизмененные</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" rowspan=\"2\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        ед.</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        измененные</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Цилиндры: гиалиновые</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        ед.в препарате</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        зернистые</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        восковидные</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        эпителиальные</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        эритроцитарные</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        лейкоцитарные</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Неорганич.осадок:ураты</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        оксалаты</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        кристаллы мочевой кислоты</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        +</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        фморфные фосфаты</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        мочекислый аммоний</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        трипельфосфат</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Слизь</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Бактерии</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        <tr>
        <td nowrap=\"nowrap\" style=\"width:204px;height:17px;\">
        <p style=\"text-align: center\">
        Дрожжевые грибки</p>
        </td>
        <td nowrap=\"nowrap\" style=\"width:84px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        <td colspan=\"2\" nowrap=\"nowrap\" style=\"width:161px;height:17px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        </tbody>
        </table>
        <br />
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'173','group_id'=>'1341481758','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Моча по Нечипоренко','short'=>'Нечипорен','price'=>'13500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481758','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
        <strong>Форменные элементы</strong></p>
        </td>
        <td style=\"width:213px;\">
        <p align=\"center\">
        <strong>Результат</strong></p>
        </td>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
        <strong>Норма</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
        Лейкоциты</p>
        </td>
        <td style=\"width:213px;\">
        <p>
         </p>
        </td>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
        Не более 2000</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
        Эритроциты</p>
        </td>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
         </p>
        </td>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
        Не более 1000</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
        Цилиндры</p>
        </td>
        <td style=\"width:213px;\">
        <p>
         </p>
        </td>
        <td style=\"width:213px;\">
        <p style=\"text-align: center\">
        abs</p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'174','group_id'=>'1341481782','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Исслед. мочи по Зимницкому','short'=>'мочи по Зим','price'=>'13500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481782','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'175','group_id'=>'1341481826','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Моча на желчные пегменты','short'=>'желч. пегм','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341481826','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'176','group_id'=>'1341481873','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Цитология мочи','short'=>'Цитол. мочи','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1341481873','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'177','group_id'=>'1341481916','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Микроальбумин в  моче','short'=>'Микроальб','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1341481916','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'355','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'178','group_id'=>'1341481954','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Ацетон ','short'=>'Ацетон ','price'=>'13500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481954','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'182','group_id'=>'1341483615','cat_id'=>'1341317550','sub_id'=>'0','lang'=>'2','title'=>'Ureaplasma urealyticum','short'=>'Ure.Ure','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341483615','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'183','group_id'=>'1341483794','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Реакция Вассермана (RW)  ','short'=>'RW','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1341483794','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'22','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'185','group_id'=>'1341484700','cat_id'=>'1341316147','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза на тощак','short'=>'Глюк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341484700','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'взрослые 3,82-6,4 ммоль/л<br />
        дети 3,33-6,11 ммоль/л<br />
        новорожден. 2,22-3,33 ммоль/л','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'186','group_id'=>'1341484732','cat_id'=>'1341316147','sub_id'=>'0','lang'=>'2','title'=>'1 час после приёма глюкозы','short'=>'1 час глюк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341484732','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'0-7,8ммоль/л','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'187','group_id'=>'1341484769','cat_id'=>'1341316147','sub_id'=>'0','lang'=>'2','title'=>'2 часа после приёма глюкоза','short'=>'2 часа глюк','price'=>'20500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341484769','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'0-6,7ммоль/л','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'189','group_id'=>'1341484897','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Экспресс-HBsAg','short'=>'HBsAg','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341484897','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'20','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'190','group_id'=>'1341484983','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Экспресс-HCV','short'=>'HCV','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341484983','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'21','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'196','group_id'=>'1341485902','cat_id'=>'1341383415','sub_id'=>'0','lang'=>'2','title'=>'Иммуноглобулин А (lgA)','short'=>' IgA','price'=>'34500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341485902','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'99','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'197','group_id'=>'1341485961','cat_id'=>'1341383415','sub_id'=>'0','lang'=>'2','title'=>'Иммуноглобулин M (lgM)','short'=>'IgM','price'=>'34500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341485961','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'100','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'198','group_id'=>'1341486016','cat_id'=>'1341383415','sub_id'=>'0','lang'=>'2','title'=>'Иммуноглобулин G (lgG)','short'=>'IgG','price'=>'34500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341486016','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'101','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'199','group_id'=>'1341486109','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Копрология','short'=>'копр','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341486109','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
        <strong>КОПРОЛОГИЯ</strong></p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Показатели</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Результат</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Норма</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Количество</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Консистенция</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        плотный</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Форма</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        оформленный</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Цвет</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        коричневый</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Слизь</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Остатки непереваренной пищи</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        ph</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        6,8-7,6</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Микроскопия</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Мышечные волокна с исчерчен.</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Без исчерченности</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Соединительная ткань</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        нейтральный жир</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Жирные кислоты</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Мыла</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Переваренная растительная клечатка</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Непереваренная растительная клечатка</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Крахмал непереваренный</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Крахмал переваренный</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Йодофильная флора</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Кристаллы</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Дрожжевые грибки</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Эпителий</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        Лейкоциты</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
        и т.д.</p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p style=\"text-align: center; \">
         </p>
        </td>
        <td style=\"width:212px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'473','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'200','group_id'=>'1341486130','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Кал на яйца глист','short'=>'яйц.гел','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486130','def'=>'0','active'=>'1','template'=>'1','text'=>'<p style=\"text-align: center; \">
        <strong>Parasitic coprology   </strong></p>
        <p>
         </p>
        <table align=\"left\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:565px;\" width=\"565\">
        <tbody>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p align=\"center\">
        Наименования</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p>
        Результат</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Норма</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Цисты Entamoeba  (амёба кишечная)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Цисты Entamoeba histolytica (амёба  дизентерийная)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Цисты Lamblia intestinalis  (лямблия)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Enterobius  vermicularis  (острица)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Ascaris  lumbricoides  (аскарида)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Ancylostoma  duodenale  (анкилостома)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Trichocephalus  trichiurus  (власоглав)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Taenia  saginata (бычий цепень)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Hymenoiepis  nana  (карликовый  цепень)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Diphillobothrium  latum  (широкий  лентец)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Hymenoiepis diminuta (крысиный  цепень)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Fasciola  hepatica (печёночный сосальщик)</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:35px;\">
        <p>
        Taenia solium (свиной цепень)</p>
        </td>
        <td style=\"width:126px;height:35px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:35px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        <tr>
        <td style=\"width:355px;height:33px;\">
        <p>
        Schisostoma  mansoni (шистома )</p>
        </td>
        <td style=\"width:126px;height:33px;\">
        <p align=\"center\">
        -</p>
        </td>
        <td style=\"width:82px;height:33px;\">
        <p>
        Negative</p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <strong>                                                                                                                                                               </strong></p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'201','group_id'=>'1341486176','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Соскоб с анал. отверстия на определение остриц','short'=>'Соск.остриц','price'=>'13500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486176','def'=>'0','active'=>'0','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>Соскоб из анального отверстия</strong></p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:638px;\">
        <p>
        <strong>Не</strong><strong> найдены</strong><strong>: Яйца</strong><strong>  eterobius  vermicularis   (острица)</strong></p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'202','group_id'=>'1341486400','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Кал на скрытое кровотечение','short'=>'скр.кровь.кал','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486400','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'Negativ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'203','group_id'=>'1341486652','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Кал на лямблии и другие простейшие ','short'=>'Кал на лямб','price'=>'17500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486652','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'не обнаружен','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'205','group_id'=>'1341486844','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. из конъюнктивы','short'=>'конъюнктивы','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341486844','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>         </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'206','group_id'=>'1341486860','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. носа','short'=>'Носа','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341486860','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>         </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'207','group_id'=>'1341486871','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. со слизистой оболочки из зева','short'=>'Зева','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486871','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>             </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'208','group_id'=>'1341486885','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. мокроты.','short'=>'б/п мокр','price'=>'54000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1341486885','def'=>'0','active'=>'0','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>        </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'212','group_id'=>'1341487014','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. крови на стерильность','short'=>'б/п Кр','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1341487014','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>        </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'213','group_id'=>'1341487038','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. мочи.','short'=>'б/п Мочи','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1341487038','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>      </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'214','group_id'=>'1341487074','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. кала','short'=>'б/п Кал','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'1341487074','def'=>'0','active'=>'1','template'=>'0','text'=>'<p>
         </p>
        <p>
        <strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:   <u>Кала</u></strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:46px;\">
        <p>
         </p>
        <p>
        Чувствительноть к грибкам:</p>
        </td>
        </tr>
        <tr>
        <td colspan=\"2\" style=\"width:283px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td colspan=\"2\" style=\"width:264px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td colspan=\"2\" style=\"width:283px;height:24px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td colspan=\"2\" style=\"width:264px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td colspan=\"2\" style=\"width:283px;height:24px;\">
        <p>
        Клотримазол</p>
        </td>
        <td colspan=\"2\" style=\"width:264px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td colspan=\"2\" style=\"width:283px;height:24px;\">
        <p>
        Нистатин</p>
        </td>
        <td colspan=\"2\" style=\"width:264px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td colspan=\"2\" style=\"width:283px;height:24px;\">
        <p>
        Флюконазол</p>
        </td>
        <td colspan=\"2\" style=\"width:264px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'215','group_id'=>'1341487097','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед.из уха','short'=>'Уха','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1341487097','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>       </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'217','group_id'=>'1341487140','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. с участка порожения','short'=>'отд.раны','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1341487140','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>     </strong><strong>   </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'218','group_id'=>'1341487194','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед.грудного молока','short'=>'груд мол','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1341487194','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>       </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'221','group_id'=>'1341487262','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. сока простаты.','short'=>'б/п Сок пр','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'1341487262','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>    </strong><strong>             <u>Star  Med  Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
        <strong>  Материал для исследования:</strong></p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td colspan=\"4\" style=\"width:547px;height:43px;\">
        <p>
         </p>
        <p>
        <strong>В посеве обнаружено:                                                                       </strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td colspan=\"2\" rowspan=\"2\" style=\"width:264px;height:23px;\">
        <p>
         </p>
        <p>
        <strong>Фунгицидные препараты:</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:4px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:60px;height:4px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Амоксацилл./Клавулонат</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Ванкомиццин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
        - - - - - - - - - - - - - - - - - - - - -</p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:23px;\">
        <p>
        Цефоперазон/Сульбакт.</p>
        </td>
        <td style=\"width:60px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:23px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:23px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:22px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:60px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:22px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:22px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:223px;height:24px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:60px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:207px;height:24px;\">
        <p>
         </p>
        </td>
        <td style=\"width:56px;height:24px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
        <strong>0-устойчив;  1-умеренно устойчив;  2-чувствителен;  3-высокочувствителен</strong></p>
        <p>
         </p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'248','group_id'=>'1341488563','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Активное частичное тромбопластиновое время','short'=>'АЧТВ','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341488563','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'15','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'249','group_id'=>'1341488583','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Фибриноген','short'=>'Фибр','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341488583','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'16','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'252','group_id'=>'1341491003','cat_id'=>'1341490863','sub_id'=>'0','lang'=>'2','title'=>'Альфа-фетопротеин','short'=>'АФП','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341491003','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'253','group_id'=>'1341491071','cat_id'=>'1341490863','sub_id'=>'0','lang'=>'2','title'=>'Хорионический гонадотропин','short'=>'ХГ','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341491071','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'254','group_id'=>'1341491114','cat_id'=>'1341490863','sub_id'=>'0','lang'=>'2','title'=>'Эстриол','short'=>'Эстриол','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341491114','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'258','group_id'=>'1342415665','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. c 3х точек (urethra.vagina.cervical)','short'=>'б/п 3х точек','price'=>'100000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1342415665','def'=>'0','active'=>'1','template'=>'1','text'=>'<p>
         </p>
        <p>
        <strong>             <u>Star Med Service</u></strong></p>
        <p>
                           </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:120px;height:38px;\">
        <p>
        <strong>Ф.И.О:</strong></p>
        </td>
        <td style=\"width:252px;height:38px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Год рождения:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:120px;height:35px;\">
        <p>
        <strong>Дата:</strong></p>
        </td>
        <td style=\"width:252px;height:35px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
         </p>
        <p>
         </p>
        <p>
                                      <strong>Влагалища (</strong><strong>vagina, cervical, uretra)</strong></p>
        <p>
         </p>
        <p>
         </p>
        <table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">
        <tbody>
        <tr>
        <td style=\"width:228px;height:20px;\">
        <p>
        <strong>Бактериологическое исследование из:</strong></p>
        </td>
        <td style=\"width:132px;height:20px;\">
        <p>
                   <strong>U</strong></p>
        </td>
        <td style=\"width:132px;height:20px;\">
        <p>
                <strong>  V</strong></p>
        </td>
        <td style=\"width:120px;height:20px;\">
        <p>
        <strong>          C</strong></p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;height:55px;\">
        <p>
         </p>
        <p>
        <strong>Выделена культура:</strong></p>
        </td>
        <td style=\"width:132px;height:55px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;height:55px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;height:55px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Азитромицин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Амикацин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Амоксициллин/Клаволунат</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Ванкомицин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Доксициклин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Левомицетин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Метранидазол</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Пефлоксацин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Спиромицин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Цефазолин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Цефепим</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Цефаперазон/Сульбактам</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Цефтриаксон</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Цефуроксим</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Ципрофлоксацин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;height:60px;\">
        <p>
         </p>
        <p>
        <strong>Чувствительность к грибкам:</strong></p>
        </td>
        <td style=\"width:132px;height:60px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;height:60px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;height:60px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Итраконазол</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Кетоконазол</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Клотримазол</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Нистатин</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        <tr>
        <td style=\"width:228px;\">
        <p>
        Флюконазол</p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:132px;\">
        <p>
         </p>
        </td>
        <td style=\"width:120px;\">
        <p>
         </p>
        </td>
        </tr>
        </tbody>
        </table>
        <p>
                   </p>
        <p>
        <strong>0-устойчив;    1-умеренно устойчив;    2-чувствителен;    3-высокочувствителен;</strong></p>
        ','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'259','group_id'=>'1343736735','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. спермы','short'=>'б/п.спер','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1343736735','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'261','group_id'=>'1347870188','cat_id'=>'1347421145','sub_id'=>'0','lang'=>'2','title'=>'Биохимические анализы','short'=>'общ.б','price'=>'110000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1347870188','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'взрослые        6,6-8,3 г/дл<br />
        новорожден.   5,2-9,1 г/дл<br />
        беременные    6,1-6,9 г/дл<br />
        3,5-5,0 г/дл<br />
        1,7-21 мкмоль/л<br />
        0,4-5,2 мкмоль/л<br />
        1,2-15,7 мкмоль/л<br />
        4,2 - 6,4 ммоль/л<br />
        муж. 10-40 U/L<br />
        жен. 10-30 U/L<br />
        муж. 0-38 U/L<br />
        жен. 0-31 U/L<br />
        муж. 53-97 мкмоль/л<br />
        жен. 44-80 мкмоль/л<br />
        моча 1000-1500 мг/сутки<br />
        новорожден.      1,1-9 ммоль/л<br />
        дети до14 лет    1,8-6,4 ммоль/л<br />
        взрослые           1,7-8,3 ммоль/л<br />
        старше 60 лет    2,5-7,5 ммоль/л<br />
        муж. 3,6-7,7 мг/дл<br />
        жен. 2,5-6,8 мг/дл<br />
        стабильные диабетики 4,5-7,0 %<br />
        диабетики с недост. компенсац. до 8,5%<br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'262','group_id'=>'1347871239','cat_id'=>'1347870563','sub_id'=>'0','lang'=>'2','title'=>'ЛИПИДНЫЙ СПЕКТР','short'=>'липиды','price'=>'90000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1347871239','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'1- 5,7 ммоль/л<br />
        0,13-1,63 ммоль/л<br />
        2,6-3,3 ммоль/л<br />
        менее 1,03 ммоль/л повышенный<br />
        риск серд.-сосуд. заб-й<br />
        более 1,55 ммоль/л отрицательный <br />
        риск серд.-сосуд. заб-й<br />
        до 1,7 ммоль/л<br />
        до 3,5 ед., после 60 лет до 4,0 ед.<br />
        <br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'264','group_id'=>'1347873066','cat_id'=>'1347871361','sub_id'=>'0','lang'=>'2','title'=>'Электролиты','short'=>'элект.','price'=>'70500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1347873066','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'мужчины 10,6-28,3 мкмоль/л<br />
        женщины 6,6-26 мкмоль/л<br />
        4,0-4,8 ммоль/л<br />
        135-155 ммоль/л<br />
        95-115 ммоль/л<br />
        моча - 110-250 ммоль/л/ 24 часа<br />
        2,02-2,6 ммоль/л<br />
        взрослые 0,81-1,62 ммоль/л<br />
        дети 1,3-2,26 ммоль/л<br />
        0,8-1,0 ммоль/л<br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'267','group_id'=>'1347874467','cat_id'=>'1347871902','sub_id'=>'0','lang'=>'2','title'=>'КОАГУЛОГРАММА','short'=>'сверт.кр','price'=>'47000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1347874467','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>' 8-15сек.<br />
         27-36сек.<br />
         0.8-1.25 <br />
        200 - 400 мг/дл.<br />
         0.8-1.25<br />
         0.8-1.25 <br />
        <br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'269','group_id'=>'1347875407','cat_id'=>'1347871959','sub_id'=>'0','lang'=>'2','title'=>'ГОРМОН','short'=>'щит.ж (своб)','price'=>'80000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'1347875407','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'0,3-4,0 mU/L<br />
        взрослые 1,4-4,2 pg/ml<br />
        беременные 1,8-4,2 pg/m<br />
        lдо 60 лет               10,0 - 25,0 пмоль/л<br />
        старше 60 лет      10,0 - 21,0<br />
        Берееменные:<br />
        1-й триместр        9,0 - 26,0<br />
        2-й триместр        6,0 - 21,0 <br />
        3-й триместр        6,0 - 21,0<br />
        <br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'270','group_id'=>'1347875683','cat_id'=>'1347871993','sub_id'=>'0','lang'=>'2','title'=>'ГОРМОН','short'=>'щит.ж (общ)','price'=>'80000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1347875683','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'0,3-4,0 mU/L<br />
        1,2 - 3,2 нмоль/л<br />
        мужчины 4,4 - 10,6 мкг/дл<br />
        женщины 4,8 - 11,6 мкг/дл<br />
        <br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'271','group_id'=>'1347876184','cat_id'=>'1347872098','sub_id'=>'0','lang'=>'2','title'=>'TORCH IgG','short'=>'торч','price'=>'143000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'1347876184','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'0 - 1 S/co<br />
        0 - 1 S/co<br />
        0 - 1 S/co<br />
        0 - 1 S/co<br />
        0 - 1 S/co<br />
        0 - 1 S/co<br />
        0 - 1 S/co<br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'273','group_id'=>'1347876715','cat_id'=>'1347871398','sub_id'=>'0','lang'=>'2','title'=>'ПЕЧЕНОЧНЫЕ ПРОБЫ','short'=>'печ.пр.','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1347876715','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'АЛТ муж. 10-40 U/L<br />
          жен. 10-30 U/L<br />
        АСТ муж. 0-38 U/L<br />
          жен. 0-31 U/L<br />
        Щелочная фосфатаза<br />
        женщины 64 - 306 U/l<br />
        мужчины  80 - 306<br />
        дети до 15 лет до 644 <br />
        дети от 15 до 17 лет до 483 U/l<br />
          <br />
        Общий билирубин 1,7-21 мкмоль/л<br />
        Прямой билирубин 0,4-5,2 мкмоль/л<br />
        Непрямой билирубин 1,2-15,7 мкмоль/л<br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'278','group_id'=>'1351065366','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'2','title'=>'Холестерол- ЛПОНП','short'=>'ЛПОНП','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1351065366','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'198','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'281','group_id'=>'1352264258','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'2','title'=>'Индекс атерогенности','short'=>'КА ','price'=>'3500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'22','sort2'=>'6','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'199','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'285','group_id'=>'1355546853','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Анлиз мочи 3х стаканный ','short'=>'мочи 3х','price'=>'23000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1355546853','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'288','group_id'=>'1356581588','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'ПТИ','short'=>'ПТИ','price'=>'20000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1356581588','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'12','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'294','group_id'=>'1364361406','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Соскоб с анального отверстия на определение остриц ','short'=>'опр.остриц','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1364361406','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'297','group_id'=>'1366871465','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'МНО','short'=>'МНО','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1366871465','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'13','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'301','group_id'=>'1372917846','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к тиреоглобулину (АТ-ТГ)','short'=>'АТ-ТГ','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'6','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'303','group_id'=>'1374844971','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'2','title'=>'Антимюллеров гормон (АМГ)','short'=>'АМН','price'=>'250000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'28','sort2'=>'1374844971','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'96','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'304','group_id'=>'1376638551','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'2','title'=>'Адренокортикотропный гормон АКТГ','short'=>'АКТГ','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'25','sort2'=>'1376638551','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'91','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'305','group_id'=>'1376646059','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'2','title'=>'Паратиреоидный гормон (ПТГ)','short'=>'PTH','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'26','sort2'=>'1376646059','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'93','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'308','group_id'=>'1391156279','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'2','title'=>'Определие грибка с ногтя','short'=>'ногтя','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1391156279','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'310','group_id'=>'1391663083','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Тромбиновое время','short'=>'ТВ','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1391663083','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'14','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'311','group_id'=>'1404551817','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Глобулин связывающий половые гормоны','short'=>'ССГ','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'29','sort2'=>'29','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'306','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'313','group_id'=>'1415776343','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Проба Реберга','short'=>'Проб.Рей','price'=>'23000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'1415776343','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'274','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'314','group_id'=>'1341388529','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Лямблии  суммарные','short'=>'Лям.сум','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'55','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'316','group_id'=>'1342415665','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. c 3х точек (urethra.vagina.cervical)','short'=>'б/п 3х точек','price'=>'100000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1342415665','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'317','group_id'=>'1341385945','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'LH','short'=>'LH','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'4','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'5','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'320','group_id'=>'1341385065','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'3','title'=>'Blood group','short'=>'гр.крови','price'=>'19500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341385065','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'322','group_id'=>'1391663083','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Тромбиновое время','short'=>'ТВ','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1391663083','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'14','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'323','group_id'=>'1341488563','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Активное частичное тромбопластиновое время','short'=>'АЧТВ','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341488563','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'15','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'324','group_id'=>'1341488583','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Фибриноген','short'=>'Фибр','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341488583','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'16','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'325','group_id'=>'1366871465','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'INR','short'=>'МНО','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1366871465','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'13','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'326','group_id'=>'1356581588','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'ПТИ EN','short'=>'ПТИ','price'=>'20000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1356581588','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'12','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'327','group_id'=>'1341484769','cat_id'=>'1341316147','sub_id'=>'0','lang'=>'3','title'=>'2 часа после приёма глюкоза','short'=>'2 часа глюк','price'=>'20500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341484769','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'0-6,7ммоль/л','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'328','group_id'=>'1341403815','cat_id'=>'1341316038','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза через 2 часа после нагрузки','short'=>'2 часа. глюк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341403815','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'174','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'329','group_id'=>'1347875683','cat_id'=>'1347871993','sub_id'=>'0','lang'=>'3','title'=>'ГОРМОН','short'=>'щит.ж (общ)','price'=>'80000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1347875683','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'0,3-4,0 mU/L<br />
        1,2 - 3,2 нмоль/л<br />
        мужчины 4,4 - 10,6 мкг/дл<br />
        женщины 4,8 - 11,6 мкг/дл<br />
        <br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'330','group_id'=>'1347875407','cat_id'=>'1347871959','sub_id'=>'0','lang'=>'3','title'=>'ГОРМОН','short'=>'щит.ж (своб)','price'=>'80000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'1347875407','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'331','group_id'=>'1341386050','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Free Estriol','short'=>'Estri','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'7','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'80','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'332','group_id'=>'1430206456','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Тиреоглобулин ','short'=>'ТГ','price'=>'41000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'27','sort2'=>'27','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'81','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'333','group_id'=>'1430206456','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Тиреоглобулин','short'=>'ТГ','price'=>'41000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'27','sort2'=>'27','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'81','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'337','group_id'=>'1341386298','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'ТSH','short'=>'TSH','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'10','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'1','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'340','group_id'=>'1376638551','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'3','title'=>'Адренокортикотропный гормон АКТГ','short'=>'АКТГ','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'25','sort2'=>'1376638551','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'91','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'341','group_id'=>'1430207928','cat_id'=>'1430452962','sub_id'=>'0','lang'=>'2','title'=>'Электрокардиограмма (EKG)','short'=>'(EKG)','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1430207928','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'342','group_id'=>'1430207928','cat_id'=>'1430452962','sub_id'=>'0','lang'=>'3','title'=>'(EKG)','short'=>'(EKG)','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1430207928','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'343','group_id'=>'1341402839','cat_id'=>'1341315878','sub_id'=>'0','lang'=>'3','title'=>'Общая Железосвязывающая Способность','short'=>'TIBC','price'=>'19500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1341402839','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'186','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'344','group_id'=>'1341484700','cat_id'=>'1341316147','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза на тощак','short'=>'Глюк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341484700','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'взрослые 3,82-6,4 ммоль/л<br />
        дети 3,33-6,11 ммоль/л<br />
        новорожден. 2,22-3,33 ммоль/л','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'345','group_id'=>'1341388803','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Иммуноглобулин Е  ','short'=>'IgЕ','price'=>'34500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341388803','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'120','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'346','group_id'=>'1341485902','cat_id'=>'1341383415','sub_id'=>'0','lang'=>'3','title'=>'Иммуноглобулин А (lgA)','short'=>' IgA','price'=>'34500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341485902','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'99','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'347','group_id'=>'1341483794','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Syphilis (RW)  ','short'=>'RW','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1341483794','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'22','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'348','group_id'=>'1347876715','cat_id'=>'1347871398','sub_id'=>'0','lang'=>'3','title'=>'ПЕЧЕНОЧНЫЕ ПРОБЫ','short'=>'печ.пр.','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1347876715','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'АЛТ муж. 10-40 U/L<br />
          жен. 10-30 U/L<br />
        АСТ муж. 0-38 U/L<br />
          жен. 0-31 U/L<br />
        Щелочная фосфатаза<br />
        женщины 64 - 306 U/l<br />
        мужчины  80 - 306<br />
        дети до 15 лет до 644 <br />
        дети от 15 до 17 лет до 483 U/l<br />
          <br />
        Общий билирубин 1,7-21 мкмоль/л<br />
        Прямой билирубин 0,4-5,2 мкмоль/л<br />
        Непрямой билирубин 1,2-15,7 мкмоль/л<br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'349','group_id'=>'1341403349','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Alkalinephosphatase','short'=>'ALP','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'29','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'179','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'350','group_id'=>'1341401140','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Кислая фосфатаза ','short'=>'ACP','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'33','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'154','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'351','group_id'=>'1341401185','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Тимоловая проба','short'=>'Tim-Pr','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1341401185','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'176','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'352','group_id'=>'1341402784','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Ferritin','short'=>'Ferritin','price'=>'33000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'22','sort2'=>'22','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'296','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'354','group_id'=>'1341402760','cat_id'=>'1341315878','sub_id'=>'0','lang'=>'3','title'=>'Железо','short'=>'Fe ','price'=>'19000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1341402760','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'185','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'355','group_id'=>'1341402874','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Alfa - Amylase','short'=>'Amy','price'=>'22000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'28','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'175','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'356','group_id'=>'1341402914','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Lactate Dehydrogenase','short'=>'LDH','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'30','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'259','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'358','group_id'=>'1341403017','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'GGT','short'=>'GGT','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1341403017','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'308','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'359','group_id'=>'1341403261','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Lipase','short'=>'Lipase','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1341403261','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'177','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'360','group_id'=>'1341400474','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Креатинфосфокиназа','short'=>'CK 2','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'1341400474','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'155','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'361','group_id'=>'1341400645','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Креатинфосфокиназа-МВ','short'=>'CK-MB 2','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'1341400645','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'156','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'362','group_id'=>'1341399627','cat_id'=>'1341315417','sub_id'=>'0','lang'=>'3','title'=>'Тропонин I ES','short'=>'Тропонин','price'=>'33000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341399627','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'117','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'364','group_id'=>'1341484983','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'HCV-Ab','short'=>'HCV','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341484983','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'21','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'365','group_id'=>'1341484897','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'HBsAg ','short'=>'HBsAg','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341484897','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'20','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'371','group_id'=>'1341484732','cat_id'=>'1341316147','sub_id'=>'0','lang'=>'3','title'=>'1 час после приёма глюкозы','short'=>'1 час глюк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341484732','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'0-7,8ммоль/л','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'372','group_id'=>'1341403768','cat_id'=>'1341316038','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза через 1 час после нагрузки','short'=>'1 час. глюк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341403768','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'173','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'384','group_id'=>'1341486016','cat_id'=>'1341383415','sub_id'=>'0','lang'=>'3','title'=>'Иммуноглобулин G (lgG)','short'=>'IgG','price'=>'34500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341486016','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'101','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'385','group_id'=>'1341485961','cat_id'=>'1341383415','sub_id'=>'0','lang'=>'3','title'=>'Иммуноглобулин M (lgM)','short'=>'IgM','price'=>'34500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341485961','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'100','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'395','group_id'=>'1355546853','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Анлиз мочи 3х стаканный','short'=>'мочи 3х','price'=>'23000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1355546853','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'399','group_id'=>'1341487194','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед.грудного молока','short'=>'груд мол','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1341487194','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'400','group_id'=>'1341486871','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. со слизистой оболочки из зева','short'=>'Зева','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486871','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'401','group_id'=>'1341487074','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. кала','short'=>'б/п Кал','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'1341487074','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'402','group_id'=>'1341486844','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. из конъюнктивы','short'=>'конъюнктивы','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341486844','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'404','group_id'=>'1341487014','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. крови на стерильность','short'=>'б/п Кр','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1341487014','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'405','group_id'=>'1341486885','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. мокроты.','short'=>'б/п мокр','price'=>'54000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1341486885','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'406','group_id'=>'1341487038','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. мочи.','short'=>'б/п Мочи','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1341487038','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'407','group_id'=>'1341486860','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. носа','short'=>'Носа','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341486860','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'409','group_id'=>'1341487140','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. с участка порожения','short'=>'отд.раны','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1341487140','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'410','group_id'=>'1341487262','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. сока простаты.','short'=>'б/п Сок пр','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'1341487262','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'411','group_id'=>'1341481470','cat_id'=>'1341316336','sub_id'=>'0','lang'=>'3','title'=>'Проба Симса-Гунера','short'=>'пр.Симса','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481470','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'412','group_id'=>'1343736735','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. спермы','short'=>'б/п.спер','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1343736735','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'415','group_id'=>'1341487097','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед.из уха','short'=>'Уха','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1341487097','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'418','group_id'=>'1415776343','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Проба Реберга','short'=>'Проб.Рей','price'=>'23000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'1415776343','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'274','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'419','group_id'=>'1347873066','cat_id'=>'1347871361','sub_id'=>'0','lang'=>'3','title'=>'Электролиты','short'=>'элект.','price'=>'70500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1347873066','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'420','group_id'=>'1347871239','cat_id'=>'1347870563','sub_id'=>'0','lang'=>'3','title'=>'ЛИПИДНЫЙ СПЕКТР','short'=>'липиды','price'=>'90000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1347871239','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'423','group_id'=>'1347870188','cat_id'=>'1347421145','sub_id'=>'0','lang'=>'3','title'=>'Биохимические анализы','short'=>'общ.б','price'=>'110000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1347870188','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'взрослые        6,6-8,3 г/дл<br />
        новорожден.   5,2-9,1 г/дл<br />
        беременные    6,1-6,9 г/дл<br />
        3,5-5,0 г/дл<br />
        1,7-21 мкмоль/л<br />
        0,4-5,2 мкмоль/л<br />
        1,2-15,7 мкмоль/л<br />
        4,2 - 6,4 ммоль/л<br />
        муж. 10-40 U/L<br />
        жен. 10-30 U/L<br />
        муж. 0-38 U/L<br />
        жен. 0-31 U/L<br />
        муж. 53-97 мкмоль/л<br />
        жен. 44-80 мкмоль/л<br />
        моча 1000-1500 мг/сутки<br />
        новорожден.      1,1-9 ммоль/л<br />
        дети до14 лет    1,8-6,4 ммоль/л<br />
        взрослые           1,7-8,3 ммоль/л<br />
        старше 60 лет    2,5-7,5 ммоль/л<br />
        муж. 3,6-7,7 мг/дл<br />
        жен. 2,5-6,8 мг/дл<br />
        стабильные диабетики 4,5-7,0 %<br />
        диабетики с недост. компенсац. до 8,5%<br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'424','group_id'=>'1347874467','cat_id'=>'1347871902','sub_id'=>'0','lang'=>'3','title'=>'КОАГУЛОГРАММА','short'=>'сверт.кр','price'=>'47000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1347874467','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>' 8-15сек.<br />
         27-36сек.<br />
         0.8-1.25 <br />
        200 - 400 мг/дл.<br />
         0.8-1.25<br />
         0.8-1.25 <br />
        <br />
        ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'426','group_id'=>'1341399574','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Candida  IgM','short'=>'Can IgM','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'23','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'44','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'427','group_id'=>'1430395814','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза','short'=>'Glu','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'16','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'164','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'428','group_id'=>'1430395814','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Glukose','short'=>'Glu','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'16','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'164','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'435','group_id'=>'1430451712','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'НCV Ab ( Гепатит С)','short'=>'НCV Ab','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'64','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'54','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'436','group_id'=>'1430451712','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'НCV Ab ( Гепатит С)','short'=>'НCV Ab','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'64','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'54','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'439','group_id'=>'1341400352','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Alaninaminotransferase (ALT)','short'=>'ALT','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'17','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'9','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'440','group_id'=>'1341388948','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'HBsAg','short'=>'HBsAg','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'63','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'49','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'441','group_id'=>'1341387505','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Альфа-фетопротеин (АФП)','short'=>'AFP','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'31','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'103','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'442','group_id'=>'1372917846','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антитела к тиреоглобулину (АТ-ТГ)','short'=>'АТ-ТГ','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'6','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'443','group_id'=>'1374844971','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'3','title'=>'Anti-Mullerial Hormone (АМГ)','short'=>'АМН','price'=>'250000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'28','sort2'=>'1374844971','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'96','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'444','group_id'=>'1341386885','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'DHEA-S','short'=>'DHEA-S','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'17','sort2'=>'17','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'77','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'445','group_id'=>'1341386903','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Insulin','short'=>'Инс','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'18','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'221','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'446','group_id'=>'1341386175','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'IGF-I','short'=>'ИФР','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'9','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'87','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'447','group_id'=>'1341486130','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Кал на яйца глист','short'=>'яйц.гел','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486130','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'448','group_id'=>'1341486400','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Кал на скрытое кровотечение','short'=>'скр.кровь.кал','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486400','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'Negativ','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'449','group_id'=>'1341486652','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Кал на лямблии и другие простейшие ','short'=>'Кал на лямб','price'=>'17500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486652','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'не обнаружен','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'450','group_id'=>'1364361406','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Соскоб с анального отверстия на определение остриц ','short'=>'опр.остриц','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1364361406','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'452','group_id'=>'1341400192','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Albumin','short'=>'Alb','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'15','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'167','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'453','group_id'=>'1341481782','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Исслед. мочи по Зимницкому','short'=>'мочи по Зим','price'=>'13500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481782','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'454','group_id'=>'1341385867','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Cortisol','short'=>'Cort','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'76','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'458','group_id'=>'1341387459','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Тиреоглобулин','short'=>'ТГ','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'20','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'457','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'459','group_id'=>'1376646059','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'3','title'=>'PTH','short'=>'PTH','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'26','sort2'=>'1376646059','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'93','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'460','group_id'=>'1341402504','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'3','title'=>'Железо','short'=>'Fe','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'7','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'189','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'461','group_id'=>'1341385885','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Prog','short'=>'Prog','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'71','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'462','group_id'=>'1341402584','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'3','title'=>'Total calcium','short'=>'Ca','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'11','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'270','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'463','group_id'=>'1341385903','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'PROLACTIN','short'=>'PRL','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'74','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'466','group_id'=>'1341387625','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Простатспецифический антиген общий (ПСА)','short'=>'tPSA','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'34','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'114','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'467','group_id'=>'1341387685','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Простатспецифический антиген свободный (с ПСА)','short'=>'fPSA','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'33','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'106','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'468','group_id'=>'1341400544','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Сreatinine','short'=>'Сrea','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'19','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'160','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'469','group_id'=>'1341387540','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Раково-эмбриональный антиген (РЭА )','short'=>'СЕА','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'32','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'105','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'470','group_id'=>'1341400005','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Total protein','short'=>'TP','price'=>'15000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'14','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'166','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'472','group_id'=>'1341388005','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Свободный хорионический гонадотропин(Free B-HCG)','short'=>'free bHCG','price'=>'48000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'40','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'112','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'473','group_id'=>'1341386706','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Free-TESTO','short'=>'F-TESTO','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'16','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'419','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'474','group_id'=>'1341386079','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'HGH','short'=>'HGH','price'=>'186000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'8','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'78','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'475','group_id'=>'1341402013','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'3','title'=>'Total cholesterol','short'=>'Chol','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'194','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'476','group_id'=>'1341386648','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Testosteron','short'=>'Testo','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'15','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'229','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'477','group_id'=>'1341386546','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'T4','short'=>'Т4 ','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'14','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'58','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'478','group_id'=>'1341386496','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'T3','short'=>'Т3 ','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'13','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'59','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'479','group_id'=>'1341402124','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'3','title'=>'Triglycerides','short'=>'Trig','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'195','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'480','group_id'=>'1341387817','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Углеводный антиген CA 125','short'=>'CA 125','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'37','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'111','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'481','group_id'=>'1341385990','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'FSH','short'=>'FSH','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'241','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'482','group_id'=>'1341386033','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Estradiol','short'=>'Estra','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'6','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'228','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'483','group_id'=>'1341386525','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Free T4','short'=>'fT4','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'12','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'65','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'486','group_id'=>'1341387776','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Углеводный антиген CA 19-9','short'=>'CA 19-9','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'36','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'108','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'487','group_id'=>'1341387735','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Углеводный антиген CA 15-3','short'=>'CA 15-3','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'35','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'107','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'490','group_id'=>'1341391434','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Rubella  IgG','short'=>'Rub IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'35','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'468','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'491','group_id'=>'1341396055','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma hominis  IgG','short'=>'Myc/hom IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'49','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'10','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'492','group_id'=>'1341388899','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'HAV IgM','short'=>'HAV IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'62','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'48','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'493','group_id'=>'1341389053','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'HBc  IgM (Core)','short'=>' IgM (Core)','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'67','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'11','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'495','group_id'=>'1341389013','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>' Anti - HBs / HBs Ab','short'=>'Anti-HBs  HBsAb','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'65','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'51','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'496','group_id'=>'1341399552','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Candida (IgA, IgG, IgM)','short'=>'Can(AGM)','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'22','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'43','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'499','group_id'=>'1341395925','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Chlamydia trachomatis  IgM','short'=>'Chl  IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'45','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'38','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'501','group_id'=>'1341391395','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Cytomegalovirus  IgM','short'=>'CMV IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'34','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'34','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'507','group_id'=>'1341389206','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'HBe Ag ','short'=>'HBeAg','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'69','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'52','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'508','group_id'=>'1341389226','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'Аnti - НCV  (Количественный)','short'=>'Аnti - НCV  ','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1341389226','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'319','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'509','group_id'=>'1341396407','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Helicobacter pylori lgA','short'=>'HelIgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'15','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'42','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'514','group_id'=>'1341395856','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Herpes Simlex 1/2  IgG','short'=>'Herp. 1/2  IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'41','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'28','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'517','group_id'=>'1341395833','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Herpes Simplex 1/2  IgM','short'=>'Herp.1/2  IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'42','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'35','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'518','group_id'=>'1341395420','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Herpes Simlex II  IgG','short'=>'HSV II IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'39','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'467','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'520','group_id'=>'1341396003','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma hominis  IgM','short'=>'Myc/hom IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'50','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'36','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'524','group_id'=>'1430473906','cat_id'=>'1430473538','sub_id'=>'0','lang'=>'2','title'=>'(Кольпоскопия, ВПЧ, Мазок, УЗИ, СА 125)','short'=>'онко диагн','price'=>'115000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'1430473906','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'525','group_id'=>'1430473906','cat_id'=>'1430473538','sub_id'=>'0','lang'=>'3','title'=>'(Кольпоскопия, ВПЧ, Мазок, УЗИ, СА 125)','short'=>'онко диагн','price'=>'115000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'1430473906','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'527','group_id'=>'1341396152','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Ureaplasma urealyticum  IgG','short'=>'Ure IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'51','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'30','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'528','group_id'=>'1341396101','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Ureaplasma urealyticum  IgM','short'=>'Ure IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'52','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'37','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'529','group_id'=>'1341399247','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Trichomonas vaginalis IgG','short'=>'Trich IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'20','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'46','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'531','group_id'=>'1341391184','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Toxoplasma Gondii  IgM','short'=>'Toxo IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'32','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'33','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'532','group_id'=>'1430474137','cat_id'=>'1430474046','sub_id'=>'0','lang'=>'2','title'=>'(Пролактин, УЗИ молочной железы, СА 15-3)','short'=>'онко диаг 2','price'=>'72000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1430474137','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'533','group_id'=>'1430474137','cat_id'=>'1430474046','sub_id'=>'0','lang'=>'3','title'=>'(Пролактин, УЗИ молочной железы, СА 15-3)','short'=>'онко диаг 2','price'=>'72000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1430474137','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'534','group_id'=>'1341391074','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Toxoplasma Gondii  IgG','short'=>'Tox  IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'31','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'26','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'536','group_id'=>'1341391528','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Rubella  IgM','short'=>'Rub IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'36','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'39','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'537','group_id'=>'1430474529','cat_id'=>'1430474211','sub_id'=>'0','lang'=>'2','title'=>'(Глюкоза, гликол.гемоглобин, Инсулин,С-Пептид, УЗИ поджелудочной железы)','short'=>'Диаб груп','price'=>'95000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'17','sort2'=>'1430474529','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'538','group_id'=>'1430474529','cat_id'=>'1430474211','sub_id'=>'0','lang'=>'3','title'=>'(Глюкоза, гликол.гемоглобин, Инсулин,С-Пептид, УЗИ поджелудочной железы','short'=>'Диаб груп','price'=>'95000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'17','sort2'=>'1430474529','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'539','group_id'=>'1341396257','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Сhlamydia pneumonia IgG','short'=>'Chl.pn. IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'10','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'45','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'540','group_id'=>'1341395944','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Chlamydia trachomatis  IgG','short'=>'Chl  IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'44','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'31','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'541','group_id'=>'1430475355','cat_id'=>'1430452850','sub_id'=>'0','lang'=>'2','title'=>'(Прогестерон,Пролактин, ЛГ,ФСГ, Эстрадиол, Тестостерон, ТТГ,Т3,Т4)','short'=>'Диаг бес у жен','price'=>'245000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1430475355','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'542','group_id'=>'1430475355','cat_id'=>'1430452850','sub_id'=>'0','lang'=>'3','title'=>'(Прогестерон,Пролактин, ЛГ,ФСГ, Эстрадиол, Тестостерон, ТТГ,Т3,Т4)','short'=>'Диаг бес у жен','price'=>'245000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1430475355','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'543','group_id'=>'1341401614','cat_id'=>'1341315485','sub_id'=>'0','lang'=>'3','title'=>'Rheumatoid factor (RF)','short'=>'RF','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'41','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'200','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'544','group_id'=>'1341401934','cat_id'=>'1341315485','sub_id'=>'0','lang'=>'3','title'=>'C-reactive protein (CRP)','short'=>'CRP','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'42','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'201','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'545','group_id'=>'1341401981','cat_id'=>'1341315485','sub_id'=>'0','lang'=>'3','title'=>'Antistreptolisin-О (ASL-O)','short'=>'АСЛО','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'43','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'202','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'546','group_id'=>'1430476174','cat_id'=>'1430475933','sub_id'=>'0','lang'=>'2','title'=>'(Пролактин,ЛГ, ФСГ, Тестостерон, СВ Тестостерон, ТТГ, Т3, Т4, Спермограмма)','short'=>'Диаг бес у му','price'=>'240000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'1430476174','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'547','group_id'=>'1430476174','cat_id'=>'1430475933','sub_id'=>'0','lang'=>'3','title'=>'(Пролактин,ЛГ, ФСГ, Тестостерон, СВ Тестостерон, ТТГ, Т3, Т4, Спермограмма)','short'=>'Диаг бес у му','price'=>'240000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'1430476174','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'548','group_id'=>'1430476538','cat_id'=>'1430476379','sub_id'=>'0','lang'=>'2','title'=>'(Липидный спектр, Тропонин 1 , Креатинкиназа МВ, Коагулограмма, АСТ, Калий, ЭКГ)','short'=>'Карди груп','price'=>'145000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'1430476538','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'549','group_id'=>'1430476538','cat_id'=>'1430476379','sub_id'=>'0','lang'=>'3','title'=>'(Липидный спектр, Тропонин 1 , Креатинкиназа МВ, Коагулограмма, АСТ, Калий, ЭКГ)','short'=>'Карди груп','price'=>'145000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'1430476538','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'554','group_id'=>'1341387295','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Хорионический гонадотропин (ХГ)','short'=>'hCG','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'19','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'62','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'569','group_id'=>'1347876184','cat_id'=>'1347872098','sub_id'=>'0','lang'=>'3','title'=>'TORCH IgG','short'=>'торч','price'=>'143000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'1347876184','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'571','group_id'=>'1341388718','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Аскарида  IgG','short'=>'Аскар','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'6','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'56','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'573','group_id'=>'1341400401','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Aspartate aminotransferase (AST)','short'=>'AST','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'18','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'150','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'574','group_id'=>'1341402608','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'3','title'=>'Phosphorus','short'=>'P','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'12','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'188','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'575','group_id'=>'1341402629','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'3','title'=>'Магний','short'=>'Mg','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'13','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'190','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'576','group_id'=>'1341400681','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'BUN/Urea','short'=>'Urea','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'20','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'159','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'579','group_id'=>'1430547467','cat_id'=>'1430547197','sub_id'=>'0','lang'=>'2','title'=>'ТТГ, Т3, Т4, св.Т3, св.Т4','short'=>'Гормоны','price'=>'130000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1430547467','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'580','group_id'=>'1430547467','cat_id'=>'1430547197','sub_id'=>'0','lang'=>'3','title'=>'-','short'=>'Гормоны','price'=>'130000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1430547467','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'581','group_id'=>'1341384743','cat_id'=>'1341315895','sub_id'=>'0','lang'=>'3','title'=>'Гликозилированный гемоглобин','short'=>'HBA1C','price'=>'29000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'165','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'582','group_id'=>'1341400751','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Мочевая  кислота','short'=>'U Asid','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'163','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'583','group_id'=>'1430634261','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Белок в суточной моче','short'=>'Белок в суточной моче','price'=>'10000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'46','sort2'=>'1430634261','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'171','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'584','group_id'=>'1430634261','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Белок в суточной моче','short'=>'Белок в суточной моче','price'=>'10000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'46','sort2'=>'1430634261','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'171','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'585','group_id'=>'1341481826','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Моча на желчные пегменты','short'=>'желч. пегм','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341481826','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'586','group_id'=>'1341481758','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Моча по Нечипоренко','short'=>'Нечипорен','price'=>'13500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481758','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'592','group_id'=>'1430715613','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Глобулин','short'=>'Глобулин','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'32','sort2'=>'1430715613','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'8','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'593','group_id'=>'1430715613','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Глобулин','short'=>'Глобулин','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'32','sort2'=>'1430715613','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'8','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'594','group_id'=>'1341402520','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'3','title'=>'Калий','short'=>'K','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'8','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'191','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'595','group_id'=>'1341402543','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'3','title'=>'Натрий','short'=>'Na','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'9','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'192','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'596','group_id'=>'1341402559','cat_id'=>'1341315764','sub_id'=>'0','lang'=>'3','title'=>'Хлор','short'=>'Cl','price'=>'18500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'10','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'193','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'597','group_id'=>'1341386453','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Free T3','short'=>'fT3','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'11','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'67','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'598','group_id'=>'1341403719','cat_id'=>'1341316038','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза натощак','short'=>'Глюкоз','price'=>'31000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341403719','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'172','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'599','group_id'=>'1341402054','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'3','title'=>'HDL Cholesterol ','short'=>'ЛПВП','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'196','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'600','group_id'=>'1352264258','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'3','title'=>'Atherogenic index','short'=>'КА ','price'=>'3500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'22','sort2'=>'6','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'199','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'601','group_id'=>'1341402085','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'3','title'=>'LDL Cholesterol','short'=>'ЛПНП','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'197','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'602','group_id'=>'1351065366','cat_id'=>'1341315745','sub_id'=>'0','lang'=>'3','title'=>'VLDL Cholesterol','short'=>'ЛПОНП','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1351065366','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'198','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'603','group_id'=>'1404551817','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Глобулин связывающий половые гормоны','short'=>'ССГ','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'29','sort2'=>'29','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'306','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'604','group_id'=>'1341384690','cat_id'=>'1498104433','sub_id'=>'0','lang'=>'3','title'=>'Скорость оседания эритроцитов(ESR)','short'=>'СОЭ','price'=>'8500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341384690','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'25','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'605','group_id'=>'1341481711','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Общий анализ мочи','short'=>'ОАМ','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341481711','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'606','group_id'=>'1341478089','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Спермограмма по ВОЗ','short'=>'СперВОЗ','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1341478089','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'607','group_id'=>'1341481027','cat_id'=>'1341316336','sub_id'=>'0','lang'=>'3','title'=>'Проба Шуварского','short'=>'пр.Шувар.','price'=>'30000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481027','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'608','group_id'=>'1341481521','cat_id'=>'1341316336','sub_id'=>'0','lang'=>'3','title'=>'Проба на антиспермальные антитела','short'=>'Антисп. ант','price'=>'37500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481521','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'238','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'609','group_id'=>'1341486176','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Соскоб с анал. отверстия на определение остриц','short'=>'Соск.остриц','price'=>'13500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341486176','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'610','group_id'=>'1431762322','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к Тиреопироксидазе (АТ-ТПО)','short'=>'АТ-ТПО','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'22','sort2'=>'22','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'63','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'611','group_id'=>'1431762322','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антитела к Тиреопироксидазе (АТ-ТПО)','short'=>'АТ-ТПО','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'22','sort2'=>'22','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'63','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'612','group_id'=>'1431762512','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Поглощение Т3(Т3 Uptake)','short'=>'Пог.Т3','price'=>'95000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'20','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'82','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'613','group_id'=>'1431762512','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Поглощение Т3(Т3 Uptake)','short'=>'Пог.Т3','price'=>'95000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'20','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'82','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'614','group_id'=>'1431762714','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к рецепторам ТТГ','short'=>'Ат к ТТГ','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'40','sort2'=>'40','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'88','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'615','group_id'=>'1431762714','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антитела к рецепторам ТТГ','short'=>'Ат к ТТГ','price'=>'41500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'40','sort2'=>'40','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'88','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'616','group_id'=>'1431762919','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'2','title'=>'Кальцитонин','short'=>'Calcition','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'27','sort2'=>'1431762919','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'89','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'617','group_id'=>'1431762919','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'3','title'=>'Кальцитонин','short'=>'Calcition','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'27','sort2'=>'1431762919','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'89','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'618','group_id'=>'1431769903','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к микросомам печени и почек ','short'=>'Anti LKM1','price'=>'145000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'40','sort2'=>'40','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'95','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'619','group_id'=>'1431769903','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антитела к микросомам печени и почек ','short'=>'Anti LKM1','price'=>'145000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'40','sort2'=>'40','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'95','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'620','group_id'=>'1431770259','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к растворимому антигену печени/печеночно-панкреатическому антигену(Anti SLA/LP lgG)','short'=>'Anti SLA/LP lgG','price'=>'195000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'40','sort2'=>'40','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'94','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'621','group_id'=>'1431770259','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антитела к растворимому антигену печени/печеночно-панкреатическому антигену(Anti SLA/LP lgG)','short'=>'Anti SLA/LP lgG','price'=>'195000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'40','sort2'=>'40','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'94','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'622','group_id'=>'1431773465','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Соотношение СК/СК-МВ','short'=>'СК-МВ','price'=>'38000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1431773465','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'157','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'623','group_id'=>'1431773465','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Соотношение СК/СК-МВ','short'=>'СК-МВ','price'=>'38000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1431773465','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'157','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'624','group_id'=>'1431774127','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Соотношение мочевины и креатинина','short'=>'СМ/К','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'25','sort2'=>'1431774127','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'161','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'625','group_id'=>'1431774127','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Соотношение мочевины и креатинина','short'=>'СМ/К','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'25','sort2'=>'1431774127','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'161','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'626','group_id'=>'1431775302','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Гликозилированный гемоглобин','short'=>'HBA1C','price'=>'29000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'41','sort2'=>'1431775302','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'168','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'627','group_id'=>'1431775302','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Гликозилированный гемоглобин','short'=>'HBA1C','price'=>'29000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'41','sort2'=>'1431775302','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'168','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'628','group_id'=>'1431775487','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Лактат(LAC)','short'=>'LAC','price'=>'38000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'42','sort2'=>'1431775487','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'169','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'629','group_id'=>'1431775487','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Лактат(LAC)','short'=>'LAC','price'=>'38000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'42','sort2'=>'1431775487','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'169','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'630','group_id'=>'1431775603','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Литий','short'=>'Li','price'=>'30000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'44','sort2'=>'1431775603','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'170','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'631','group_id'=>'1431775603','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Литий','short'=>'Li','price'=>'30000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'44','sort2'=>'1431775603','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'170','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'632','group_id'=>'1431776298','cat_id'=>'1490784751','sub_id'=>'0','lang'=>'2','title'=>'Общий билирубин','short'=>'TB','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'26','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'151','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'633','group_id'=>'1431776298','cat_id'=>'1490784751','sub_id'=>'0','lang'=>'3','title'=>'Total bilirubin','short'=>'TB','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'26','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'151','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'634','group_id'=>'1431776432','cat_id'=>'1490784751','sub_id'=>'0','lang'=>'2','title'=>'Прямой билирубин','short'=>'DB','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'27','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'152','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'635','group_id'=>'1431776432','cat_id'=>'1490784751','sub_id'=>'0','lang'=>'3','title'=>'Bilirubin conjugated','short'=>'DB','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'27','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'152','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'636','group_id'=>'1431776480','cat_id'=>'1490784751','sub_id'=>'0','lang'=>'2','title'=>'Непрямой билирубин','short'=>'IB','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'29','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'153','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'637','group_id'=>'1431776480','cat_id'=>'1490784751','sub_id'=>'0','lang'=>'3','title'=>'Bilirubin unconjugated','short'=>'IB','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'29','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'153','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'638','group_id'=>'1431776521','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Альфа-Амилаза (Диастаза) в моче','short'=>'Амилаза','price'=>'9500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1431776521','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'288','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'639','group_id'=>'1431776521','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Альфа-Амилаза (Диастаза) в моче','short'=>'Амилаза','price'=>'9500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1431776521','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'288','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'640','group_id'=>'1431776548','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза в моче','short'=>'Глюкоза','price'=>'11500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431776548','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'208','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'641','group_id'=>'1431776548','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза в моче','short'=>'Глюкоза','price'=>'11500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431776548','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'208','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'642','group_id'=>'1431776572','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Мочевина в моче','short'=>'Мочевина','price'=>'7500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431776572','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'209','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'643','group_id'=>'1431776572','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Мочевина в моче','short'=>'Мочевина','price'=>'7500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431776572','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'209','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'644','group_id'=>'1431776600','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Креатинин в суточной моче','short'=>'Креатинин','price'=>'9500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1431776600','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'210','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'645','group_id'=>'1431776600','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Креатинин в суточной моче','short'=>'Креатинин','price'=>'9500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1431776600','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'210','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'646','group_id'=>'1431776632','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Мочевая кислота в моче','short'=>'Моч.кис','price'=>'9500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1431776632','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'211','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'647','group_id'=>'1431776632','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Мочевая кислота в моче','short'=>'Моч.кис','price'=>'9500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1431776632','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'211','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'648','group_id'=>'1431776678','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Суточная протеинурия (Белок в сут. моче)','short'=>'TP-in-urine','price'=>'10000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1431776678','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'212','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'649','group_id'=>'1431776678','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Суточная протеинурия (Белок в сут. моче)','short'=>'TP-in-urine','price'=>'10000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1431776678','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'212','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'650','group_id'=>'1431776729','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Ca(кальций) в суточной моче','short'=>'Ca','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1431776729','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'218','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'651','group_id'=>'1431776729','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Calcium (Ca) в суточной моче','short'=>'Ca','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1431776729','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'218','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'652','group_id'=>'1431776763','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Калий+ в суточной моче','short'=>'Калий+','price'=>'18000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1431776763','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'214','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'653','group_id'=>'1431776763','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Калий+ в суточной моче','short'=>'Калий+','price'=>'18000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1431776763','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'214','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'654','group_id'=>'1431776788','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Натрий+','short'=>'Натр+','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1431776788','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'215','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'655','group_id'=>'1431776788','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Натрий+','short'=>'Натр+','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1431776788','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'215','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'656','group_id'=>'1431776821','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Фосфор в суточной моче','short'=>'Фосфор','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1431776821','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'216','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'657','group_id'=>'1431776821','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Фосфор в суточной моче','short'=>'Фосфор','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1431776821','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'216','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'658','group_id'=>'1431776841','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Магний в суточной моче','short'=>'Магний','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1431776841','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'217','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'659','group_id'=>'1431776841','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Магний в суточной моче','short'=>'Магний','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1431776841','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'217','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'660','group_id'=>'1431927046','cat_id'=>'1431927005','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза натощак','short'=>'Гл.нат','price'=>'31000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'38','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'203','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'661','group_id'=>'1431927046','cat_id'=>'1431927005','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза натощак','short'=>'Гл.нат','price'=>'31000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'38','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'203','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'662','group_id'=>'1431927109','cat_id'=>'1431927005','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза через 1 час после приема пищи','short'=>'Гл,1 час после','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'39','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'204','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'663','group_id'=>'1431927109','cat_id'=>'1431927005','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза через 1 час после приема пищи','short'=>'Гл,1 час после','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'39','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'204','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'664','group_id'=>'1431927149','cat_id'=>'1431927005','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза через 2 час после приема пищи','short'=>'Гл.2 час после','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'40','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'205','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'665','group_id'=>'1431927149','cat_id'=>'1431927005','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза через 2 час после приема пищи','short'=>'Гл.2 час после','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'40','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'205','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'666','group_id'=>'1431927380','cat_id'=>'1431927355','sub_id'=>'0','lang'=>'2','title'=>'Морфин','short'=>'Морфин','price'=>'38000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431927380','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'206','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'667','group_id'=>'1431927380','cat_id'=>'1431927355','sub_id'=>'0','lang'=>'3','title'=>'Морфин','short'=>'Морфин','price'=>'38000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431927380','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'206','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'670','group_id'=>'1341486109','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Копрология','short'=>'копр','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341486109','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'473','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'671','group_id'=>'1431927840','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Комплексный анализ кала','short'=>'Комп.ан.ка','price'=>'17500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1431927840','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'672','group_id'=>'1431927840','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Комплексный анализ кала','short'=>'Комп.ан.ка','price'=>'17500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1431927840','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'673','group_id'=>'1341477573','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Урогенитальный мазок','short'=>'Мазок','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1341477573','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'674','group_id'=>'1431928319','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Анализ выделений из 3 точек','short'=>'мазок 3 точ','price'=>'23000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1431928319','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'675','group_id'=>'1431928319','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Анализ выделений из 3 точек','short'=>'мазок 3 точ','price'=>'23000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1431928319','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'676','group_id'=>'1341477605','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Цитология  мазка (ПАП-тест)','short'=>'Цит. мазка','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341477605','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'681','group_id'=>'1341480949','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Анализ мокроты','short'=>'Мокрота','price'=>'14000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1341480949','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'682','group_id'=>'1341478139','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Исслед. секрета предстател. железы','short'=>'Сок простаты','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1341478139','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'282','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'683','group_id'=>'1431929377','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Моча по Нечипоренко (в 2-х пор.)','short'=>'в 2-х пор','price'=>'20000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431929377','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'684','group_id'=>'1431929377','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Моча по Нечипоренко (в 2-х пор.)','short'=>'в 2-х пор','price'=>'20000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431929377','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'685','group_id'=>'1431931009','cat_id'=>'1431930967','sub_id'=>'0','lang'=>'2','title'=>'AFP','short'=>'AFP','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431931009','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'138','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'686','group_id'=>'1431931009','cat_id'=>'1431930967','sub_id'=>'0','lang'=>'3','title'=>'AFP','short'=>'AFP','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431931009','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'138','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'687','group_id'=>'1431931145','cat_id'=>'1431930967','sub_id'=>'0','lang'=>'2','title'=>'Свободный эстриол ','short'=>'Св.эстр','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1431931145','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'244','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'688','group_id'=>'1431931145','cat_id'=>'1431930967','sub_id'=>'0','lang'=>'3','title'=>'Свободный эстриол ','short'=>'Св.эстр','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1431931145','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'244','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'689','group_id'=>'1431931220','cat_id'=>'1431930967','sub_id'=>'0','lang'=>'2','title'=>'Хорионический гонадотропин (β-ХГЧ)','short'=>'β-ХГЧ','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431931220','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'141','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'690','group_id'=>'1431931220','cat_id'=>'1431930967','sub_id'=>'0','lang'=>'3','title'=>'Хорионический гонадотропин (β-ХГЧ)','short'=>'β-ХГЧ','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431931220','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'141','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'691','group_id'=>'1431931317','cat_id'=>'1431930967','sub_id'=>'0','lang'=>'2','title'=>'Ассоциированный с беременностью  плазменный белок - А','short'=>'ПАББ-А','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1431931317','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'142','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'692','group_id'=>'1431931317','cat_id'=>'1431930967','sub_id'=>'0','lang'=>'3','title'=>'Ассоциированный с беременностью  плазменный белок - А','short'=>'ПАББ-А','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1431931317','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'142','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'693','group_id'=>'1431932368','cat_id'=>'1341315878','sub_id'=>'0','lang'=>'2','title'=>'Витамин В 12','short'=>'В 12','price'=>'140000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1431932368','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'183','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'694','group_id'=>'1431932368','cat_id'=>'1341315878','sub_id'=>'0','lang'=>'3','title'=>'Витамин В 12','short'=>'В 12','price'=>'140000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1431932368','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'183','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'695','group_id'=>'1431932418','cat_id'=>'1341315878','sub_id'=>'0','lang'=>'2','title'=>' Фолиевая кислота ','short'=>' Фол.кис','price'=>'15500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431932418','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'184','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'696','group_id'=>'1431932418','cat_id'=>'1341315878','sub_id'=>'0','lang'=>'3','title'=>' Фолиевая кислота ','short'=>' Фол.кис','price'=>'15500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431932418','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'184','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'697','group_id'=>'1431932771','cat_id'=>'1341315417','sub_id'=>'0','lang'=>'2','title'=>'Миоглобин','short'=>'Миоглобин','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431932771','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'118','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'698','group_id'=>'1431932771','cat_id'=>'1341315417','sub_id'=>'0','lang'=>'3','title'=>'Миоглобин','short'=>'Миоглобин','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431932771','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'118','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'699','group_id'=>'1431932846','cat_id'=>'1341315417','sub_id'=>'0','lang'=>'2','title'=>'NT-PRO ВNP(N-концевой пропептид)','short'=>'NT-PRO ВNP','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1431932846','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'119','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'700','group_id'=>'1431932846','cat_id'=>'1341315417','sub_id'=>'0','lang'=>'3','title'=>'NT-PRO ВNP(N-концевой пропептид)','short'=>'NT-PRO ВNP','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1431932846','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'119','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'701','group_id'=>'1431932894','cat_id'=>'1341315417','sub_id'=>'0','lang'=>'2','title'=>'СК-МВ','short'=>'СК-МВ','price'=>'20000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431932894','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'116','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'702','group_id'=>'1431932894','cat_id'=>'1341315417','sub_id'=>'0','lang'=>'3','title'=>'СК-МВ','short'=>'СК-МВ','price'=>'20000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431932894','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'116','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'703','group_id'=>'1431933031','cat_id'=>'1431932999','sub_id'=>'0','lang'=>'2','title'=>'Кортизол в крови ','short'=>'Кортизол в крови','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431933031','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'144','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'704','group_id'=>'1431933031','cat_id'=>'1431932999','sub_id'=>'0','lang'=>'3','title'=>'Кортизол в крови','short'=>'Кортизол в крови','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431933031','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'144','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'705','group_id'=>'1431933075','cat_id'=>'1431932999','sub_id'=>'0','lang'=>'2','title'=>'NТx (N-телопептид)','short'=>'NТx','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1431933075','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'145','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'706','group_id'=>'1431933075','cat_id'=>'1431932999','sub_id'=>'0','lang'=>'3','title'=>'NТx (N-телопептид)','short'=>'NТx','price'=>'125000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1431933075','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'145','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'707','group_id'=>'1431933131','cat_id'=>'1431932999','sub_id'=>'0','lang'=>'2','title'=>'iPTH (Паратгормон)','short'=>'iPTH ','price'=>'106000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431933131','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'147','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'708','group_id'=>'1431933131','cat_id'=>'1431932999','sub_id'=>'0','lang'=>'3','title'=>'iPTH (Паратгормон)','short'=>'iPTH ','price'=>'106000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431933131','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'147','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'709','group_id'=>'1431933260','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'2','title'=>'Total Vitamin D - 25 OH (Витамин Д общий)','short'=>'Vit D','price'=>'140000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'33','sort2'=>'1431933260','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'148','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'710','group_id'=>'1431933260','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'3','title'=>'Total Vitamin D - 25 OH ','short'=>'Vit D','price'=>'140000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'33','sort2'=>'1431933260','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'148','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'747','group_id'=>'1431945668','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'Anti HBc IgG (Core)','short'=>'HBc IgG (Core)','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'66','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'50','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'748','group_id'=>'1431945668','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'Anti HBc IgG (Core)','short'=>'HBc IgG (Core)','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'66','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'50','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'749','group_id'=>'1431946539','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Бруцеллез  (Brucella abortus)','short'=>'Бруцеллез  ','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1431946539','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'40','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'750','group_id'=>'1431946539','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Бруцеллез  (Brucella abortus)','short'=>'Бруцеллез  ','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1431946539','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'40','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'751','group_id'=>'1431946660','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Туберкулёз(Hexagon TB)','short'=>'Туб','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1431946660','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'41','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'752','group_id'=>'1431946660','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Tuberculosis','short'=>'Туб','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1431946660','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'41','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'753','group_id'=>'1431947198','cat_id'=>'1442216485','sub_id'=>'0','lang'=>'2','title'=>'ЛИХОРАДОЧНЫЙ АНТИГЕН (St-H/St-O/Sp-AH/Sp-BH/Proteus OX19)','short'=>'Salmonella ','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1431947198','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'47','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'754','group_id'=>'1431947198','cat_id'=>'1442216485','sub_id'=>'0','lang'=>'3','title'=>'FIBRINE ANTIGENS (St-H/St-O/Sp-AH/Sp-BH/Proteus OX19)','short'=>'Salmonella ','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1431947198','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'47','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'755','group_id'=>'1431948998','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Протромбиновое время','short'=>'ПВ','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431948998','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'19','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'756','group_id'=>'1431948998','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Протромбиновое время','short'=>'ПВ','price'=>'13000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1431948998','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'19','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'757','group_id'=>'1431949040','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Тромбиновое время (соотношение)   ','short'=>'ТВ соот','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1431949040','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'18','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'758','group_id'=>'1431949040','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Тромбиновое время (соотношение)   ','short'=>'ТВ соот','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1431949040','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'18','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'759','group_id'=>'1431949076','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'АЧТВ (соотношение)','short'=>'АЧТВ (соот)','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1431949076','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'17','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'760','group_id'=>'1431949076','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'АЧТВ (соотношение)','short'=>'АЧТВ (соот)','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1431949076','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'17','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'761','group_id'=>'1431949678','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'2','title'=>'Ретикулоциты','short'=>'Рет','price'=>'5500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431949678','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'24','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'762','group_id'=>'1431949678','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'3','title'=>'Ретикулоциты','short'=>'Рет','price'=>'5500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431949678','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'24','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'763','group_id'=>'1431949740','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Время свертываемости по Сухареву','short'=>'ВСК','price'=>'7000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1431949740','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'23','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'764','group_id'=>'1431949740','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Время свертываемости по Сухареву','short'=>'ВСК','price'=>'7000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1431949740','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'23','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'765','group_id'=>'1431950823','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Кровь на эозинофилы','short'=>'Кр.эоз','price'=>'18000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1431950823','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'136','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'766','group_id'=>'1431950823','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Кровь на эозинофилы','short'=>'Кр.эоз','price'=>'18000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1431950823','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'136','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'767','group_id'=>'1431950872','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Анализ выделений из носа на эозинофилы','short'=>'Ан.выд.из носа','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431950872','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'768','group_id'=>'1431950872','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Анализ выделений из носа на эозинофилы','short'=>'Ан.выд.из носа','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1431950872','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'769','group_id'=>'1432012895','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антинуклеарные антитела (AHA)','short'=>'AHA','price'=>'72000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'35','sort2'=>'35','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'83','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'770','group_id'=>'1432012895','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антинуклеарные антитела (AHA)','short'=>'AHA','price'=>'72000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'35','sort2'=>'35','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'83','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'771','group_id'=>'1432013775','cat_id'=>'1490856313','sub_id'=>'0','lang'=>'2','title'=>'Антифосфолипидный скрининг (АФС) IgM','short'=>'АФС М','price'=>'90000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'37','sort2'=>'1432013775','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'84','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'772','group_id'=>'1432013775','cat_id'=>'1490856313','sub_id'=>'0','lang'=>'3','title'=>'Антифосфолипидный скрининг (АФС) IgM','short'=>'АФС М','price'=>'90000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'37','sort2'=>'1432013775','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'84','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'773','group_id'=>'1432013822','cat_id'=>'1490856313','sub_id'=>'0','lang'=>'2','title'=>'Антифосфолипидный скрининг (АФС) IgG','short'=>'АФС G','price'=>'90000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'38','sort2'=>'1432013822','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'85','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'774','group_id'=>'1432013822','cat_id'=>'1490856313','sub_id'=>'0','lang'=>'3','title'=>'Антифосфолипидный скрининг (АФС) IgG','short'=>'АФС G','price'=>'90000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'38','sort2'=>'1432013822','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'85','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'775','group_id'=>'1432016975','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Соотношение мочевины и креатинина***','short'=>'СМ/К','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'26','sort2'=>'1432016975','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'162','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'776','group_id'=>'1432016975','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Соотношение мочевины и креатинина***','short'=>'СМ/К','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'26','sort2'=>'1432016975','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'162','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'777','group_id'=>'1432017063','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Соотношение СК/СК-МВ ***','short'=>'СК/СК-МВ','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1432017063','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'158','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'778','group_id'=>'1432017063','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Соотношение СК/СК-МВ ****','short'=>'СК/СК-МВ','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1432017063','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'158','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'783','group_id'=>'1432018311','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Эпителий кошки','short'=>'Эпит/кошки','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1432018311','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'123','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'784','group_id'=>'1432018311','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Эпителий кошки','short'=>'Эпит/кошки','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1432018311','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'123','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'785','group_id'=>'1432018339','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Шерсть собаки','short'=>'Шерсть собаки','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1432018339','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'124','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'786','group_id'=>'1432018339','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Шерсть собаки','short'=>'Шерсть собаки','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1432018339','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'124','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'787','group_id'=>'1432018371','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Перо постельное (гусь оперение, курица оперение, утка оперение)','short'=>'Перо пос','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1432018371','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'125','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'788','group_id'=>'1432018371','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Перо постельное (гусь оперение, курица оперение, утка оперение)','short'=>'Перо пос','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1432018371','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'125','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'791','group_id'=>'1432018466','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Раннецветущие деревья (ольха серая, лещина обыкновенная, вяз, ива белая, тополь)','short'=>'Ран/ дер','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1432018466','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'127','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'792','group_id'=>'1432018466','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Раннецветущие деревья (ольха серая, лещина обыкновенная, вяз, ива белая, тополь)','short'=>'Ран/ дер','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1432018466','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'127','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'793','group_id'=>'1432018490','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Мучная смесь (пшеничная мука, ржаная мука, ячменная мука, овсяная мука, кукурузная мука, соевые бобы, глютен-глиадин (клейковина))','short'=>'Мучная смесь','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1432018490','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'128','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'794','group_id'=>'1432018490','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Мучная смесь (пшеничная мука, ржаная мука, ячменная мука, овсяная мука, кукурузная мука, соевые бобы, глютен-глиадин (клейковина))','short'=>'Мучная смесь','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1432018490','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'128','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'797','group_id'=>'1432018578','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Яичный желток','short'=>'Яичный желток','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1432018578','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'130','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'798','group_id'=>'1432018578','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Яичный желток','short'=>'Яичный желток','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1432018578','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'130','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'799','group_id'=>'1432018605','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Яичный белок','short'=>'Яичный белок','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1432018605','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'131','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'800','group_id'=>'1432018605','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Яичный белок','short'=>'Яичный белок','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1432018605','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'131','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'801','group_id'=>'1432018628','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Компоненты молока (альфа-лактальбумин, бета-лактоглобулин, казеин)','short'=>'Компоненты молока','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1432018628','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'132','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'802','group_id'=>'1432018628','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Компоненты молока (альфа-лактальбумин, бета-лактоглобулин, казеин)','short'=>'Компоненты молока','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1432018628','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'132','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'805','group_id'=>'1432018688','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'2','title'=>'Фрукты и ягоды (банан, груша, апельсин, клубника, яблоко, персик, авокадо)','short'=>'Фрукты и ягоды','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1432018688','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'134','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'806','group_id'=>'1432018688','cat_id'=>'1341645464','sub_id'=>'0','lang'=>'3','title'=>'Фрукты и ягоды (банан, груша, апельсин, клубника, яблоко, персик, авокадо)','short'=>'Фрукты и ягоды','price'=>'52000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1432018688','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'134','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'809','group_id'=>'1432028486','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к Кардиолипину IgG','short'=>'АнтиКарIgG','price'=>'94000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'39','sort2'=>'39','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'86','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'810','group_id'=>'1432028486','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антитела к Кардиолипину IgG','short'=>'АнтиКарIgG','price'=>'94000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'39','sort2'=>'39','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'86','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'811','group_id'=>'1432028661','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к бета 2-гликопротеину 1, суммарные','short'=>'Антитела к бета 2','price'=>'106000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'40','sort2'=>'40','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'90','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'812','group_id'=>'1432028661','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антитела к бета 2-гликопротеину 1, суммарные','short'=>'Антитела к бета 2','price'=>'106000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'40','sort2'=>'40','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'90','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'815','group_id'=>'1432354958','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'2','title'=>'Альдостерон','short'=>'Aldost.','price'=>'135000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'31','sort2'=>'1432354958','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'97','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'816','group_id'=>'1432354958','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'3','title'=>'Альдостерон','short'=>'Aldost.','price'=>'135000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'31','sort2'=>'1432354958','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'97','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'817','group_id'=>'1432356248','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'2','title'=>'Ренин','short'=>'Renin','price'=>'135000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'32','sort2'=>'1432356248','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'98','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'818','group_id'=>'1432356248','cat_id'=>'1493297529','sub_id'=>'0','lang'=>'3','title'=>'Ренин','short'=>'Renin','price'=>'135000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'32','sort2'=>'1432356248','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'98','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'819','group_id'=>'1432557422','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'С-пептид','short'=>'С-пептид','price'=>'100000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'24','sort2'=>'24','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'219','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'820','group_id'=>'1432557422','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'С-пептид','short'=>'С-пептид','price'=>'100000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'24','sort2'=>'24','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'219','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'823','group_id'=>'1433241033','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Исследование  выпотных жидкостей','short'=>'ИВЖ','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1433241033','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'824','group_id'=>'1433241033','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Исследование  выпотных жидкостей','short'=>'ИВЖ','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1433241033','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'825','group_id'=>'1433241205','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'2','title'=>'Общеклиническое исследование спинно-мозговой жидкости','short'=>'СМЖ','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1433241205','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'826','group_id'=>'1433241205','cat_id'=>'1341383542','sub_id'=>'0','lang'=>'3','title'=>'Общеклиническое исследование спинно-мозговой жидкости','short'=>'СМЖ','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1433241205','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'827','group_id'=>'1433241558','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Осмолярность мочи','short'=>'ОсМ','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1433241558','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'223','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'828','group_id'=>'1433241558','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Осмолярность мочи','short'=>'ОсМ','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1433241558','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'223','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'829','group_id'=>'1433316509','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Cytomegalovirus IgG','short'=>'CMV IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'33','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'224','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'830','group_id'=>'1433316509','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Cytomegalovirus IgG','short'=>'CMV IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'33','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'224','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'831','group_id'=>'1433487231','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Соотношение албумина и глобулина','short'=>'сотнош.','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'1433487231','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'226','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'832','group_id'=>'1433487231','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Albumin/globulin Ratio','short'=>'сотнош.','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'1433487231','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'226','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'835','group_id'=>'1435806078','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Церулоплазмин','short'=>'Церулоплазмин','price'=>'100000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'25','sort2'=>'25','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'236','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'836','group_id'=>'1435806078','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Церулоплазмин','short'=>'Церулоплазмин','price'=>'100000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'25','sort2'=>'25','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'236','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'839','group_id'=>'1435926233','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. выдел.1точ.(Vagina)','short'=>'мазок (V)','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1435926233','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'840','group_id'=>'1435926233','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. выдел.1точ.(Vagina)','short'=>'мазок (V)','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1435926233','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'841','group_id'=>'1435926904','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. выдел.1точ.(Сervical)','short'=>'мазок (С)','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1435926904','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'842','group_id'=>'1435926904','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. выдел.1точ.(Сervical)','short'=>'мазок (С)','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1435926904','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'843','group_id'=>'1435927009','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. из уретры.','short'=>'мазок (U)','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1435927009','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'844','group_id'=>'1435927009','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. из уретры.','short'=>'мазок (U)','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1435927009','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'845','group_id'=>'1436847829','cat_id'=>'1490856313','sub_id'=>'0','lang'=>'2','title'=>'Волчаночный антикоагулянт','short'=>'Волчан','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'35','sort2'=>'1436847829','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'242','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'846','group_id'=>'1436847829','cat_id'=>'1490856313','sub_id'=>'0','lang'=>'3','title'=>'Lupus anticoagulants','short'=>'Волчан','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'35','sort2'=>'1436847829','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'242','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'849','group_id'=>'1438775004','cat_id'=>'1431932999','sub_id'=>'0','lang'=>'2','title'=>'Кортизол в моче','short'=>'Кортизол в моче','price'=>'47000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1438775004','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'245','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'850','group_id'=>'1438775004','cat_id'=>'1431932999','sub_id'=>'0','lang'=>'3','title'=>'Cortizol (urine)','short'=>'Кортизол в моче','price'=>'47000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1438775004','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'245','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'859','group_id'=>'1447063333','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза-Урический Профиль','short'=>'Глюкоза-Урический Профиль','price'=>'55000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1447063333','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'295','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'860','group_id'=>'1447063333','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза-Урический Профиль','short'=>'Глюкоза-Урический Профиль','price'=>'55000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1447063333','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'295','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'861','group_id'=>'1448006529','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Эхинококкоз IgG','short'=>'Эхин IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'294','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'862','group_id'=>'1448006529','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Эхинококкоз IgG','short'=>'Эхин IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'294','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'865','group_id'=>'1448006726','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'HDV - Аb (Гепатит D)','short'=>'HDV','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'71','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'287','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'866','group_id'=>'1448006726','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'HDV (Гепатит D)','short'=>'HDV','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'71','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'287','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'867','group_id'=>'1450760727','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Опистархоз IgG','short'=>'Опист IgG','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1450760727','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'291','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'868','group_id'=>'1450760727','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Опистархоз IgG','short'=>'Опист IgG','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1450760727','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'291','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'869','group_id'=>'1450760773','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Трихинелла IgG','short'=>'Трих IgG','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1450760773','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'292','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'870','group_id'=>'1450760773','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Трихинелла IgG','short'=>'Трих IgG','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1450760773','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'292','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'871','group_id'=>'1450760807','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Токсокароз IgG','short'=>'Токс IgG','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1450760807','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'293','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'872','group_id'=>'1450760807','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Токсокароз IgG','short'=>'Токс IgG','price'=>'35000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1450760807','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'293','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'873','group_id'=>'1450760848','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Гельминты IgG (суммарные) (опистарх, трихинелла, токсокароз, эхинококк)','short'=>'Гельминты IgG','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1450760848','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'874','group_id'=>'1450760848','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Гельминты IgG (суммарные) (опистарх, трихинелла, токсокароз, эхинококк)','short'=>'Гельминты IgG','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1450760848','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'875','group_id'=>'1451289866','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак. исследование выделений из уретры','short'=>'Бак. уретры','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1451289866','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'876','group_id'=>'1451289866','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак. исследование выделений из уретры','short'=>'Бак. уретры','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1451289866','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'877','group_id'=>'1453804690','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Осмолярность крови','short'=>'Осмолярность крови','price'=>'58000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'26','sort2'=>'1453804690','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'878','group_id'=>'1453804690','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Осмолярность крови','short'=>'Осмолярность крови','price'=>'58000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'26','sort2'=>'1453804690','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'887','group_id'=>'1455697837','cat_id'=>'1455697793','sub_id'=>'0','lang'=>'2','title'=>'Наркотест','short'=>'Наркотест','price'=>'95000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1455697837','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'298','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'888','group_id'=>'1455697837','cat_id'=>'1455697793','sub_id'=>'0','lang'=>'3','title'=>'DRUG MONITORING','short'=>'Наркотест','price'=>'95000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1455697837','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'298','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'895','group_id'=>'1391156279','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'3','title'=>'Определие грибка с ногтя','short'=>'ногтя','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1391156279','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'900','group_id'=>'1462253189','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Белок-1, связывающий инсулиноподобный фактор роста (Определение околоплодных вод в вагинальных выделениях)','short'=>'околоплодные воды','price'=>'65000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1462253189','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'303','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'901','group_id'=>'1462253189','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'IGFBP-I','short'=>'околоплодные воды','price'=>'65000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1462253189','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'303','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'902','group_id'=>'1462256454','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Трипсиноген-2','short'=>'Типсиноген 2','price'=>'65000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1462256454','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'304','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'903','group_id'=>'1462256454','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Tripsinogen 2','short'=>'Типсиноген 2','price'=>'65000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1462256454','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'304','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'904','group_id'=>'1341388277','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'В-2 Микроглобулин','short'=>'В-2 Микрогл.','price'=>'47000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'41','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'909','group_id'=>'1478349723','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к митохондриям (АМА-М2)','short'=>'ама','price'=>'195000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'35','sort2'=>'35','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'910','group_id'=>'1478349723','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Mitochondrial Antibodies ( AMA-M2)','short'=>'ама','price'=>'195000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'35','sort2'=>'35','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'923','group_id'=>'1490780406','cat_id'=>'1498104433','sub_id'=>'0','lang'=>'2','title'=>'Концентрация гемоглобина','short'=>' HGB','price'=>'10000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490780406','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'348','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'924','group_id'=>'1490780406','cat_id'=>'1498104433','sub_id'=>'0','lang'=>'3','title'=>'Концентрация гемоглобина','short'=>' HGB','price'=>'10000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490780406','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'348','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'925','group_id'=>'1490780744','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'2','title'=>'Обследование на резус-антитела (RH)','short'=>'RH','price'=>'31500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490780744','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'926','group_id'=>'1490780744','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'3','title'=>'Обследование на резус-антитела (RH)','short'=>'RH','price'=>'31500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490780744','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'927','group_id'=>'1490780765','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'2','title'=>'Обследование на AB(0)-конфликт','short'=>'AB(0)','price'=>'75000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490780765','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'928','group_id'=>'1490780765','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'3','title'=>'Обследование на AB(0)-конфликт','short'=>'AB(0)','price'=>'75000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490780765','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'929','group_id'=>'1490780985','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Агрегация тромбоцитов с АДФ 0.5 мкмоль/л %','short'=>'АДФ','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1490780985','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'356','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'930','group_id'=>'1490780985','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Агрегация тромбоцитов с АДФ 0.5 мкмоль/л %','short'=>'АДФ','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1490780985','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'356','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'931','group_id'=>'1490781134','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'АФС-Волчаночный антикоагулянт','short'=>'АФС','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1490781134','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'932','group_id'=>'1490781134','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'АФС-Волчаночный антикоагулянт','short'=>'АФС','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1490781134','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'933','group_id'=>'1490782295','cat_id'=>'1490782264','sub_id'=>'0','lang'=>'2','title'=>'Электрокардиограмма (EKG)','short'=>'(EKG)','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490782295','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'934','group_id'=>'1490782295','cat_id'=>'1490782264','sub_id'=>'0','lang'=>'3','title'=>'Электрокардиограмма (EKG)','short'=>'(EKG)','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490782295','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'935','group_id'=>'1490782811','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'2','title'=>'Herpes simplex I IgG','short'=>'HSV I IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'37','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'466','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'936','group_id'=>'1490782811','cat_id'=>'1341315325','sub_id'=>'0','lang'=>'3','title'=>'Herpes simplex I IgG','short'=>'HSV I IgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'37','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'466','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'937','group_id'=>'1490783036','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Herpes simplex I lgM','short'=>'HSV 1 IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'38','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'471','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'938','group_id'=>'1490783036','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Herpes simplex I lgM','short'=>'HSV 1 IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'38','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'471','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'939','group_id'=>'1490783050','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'2','title'=>'Herpes simplex II lgM','short'=>'HSV II IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'40','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'472','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'940','group_id'=>'1490783050','cat_id'=>'1431949883','sub_id'=>'0','lang'=>'3','title'=>'Herpes simplex II lgM','short'=>'HSV II IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'40','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'472','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'943','group_id'=>'1490783176','cat_id'=>'1490783129','sub_id'=>'0','lang'=>'2','title'=>'Herpes Simplex 1/2 IgA','short'=>'Herpes 1/2 IgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'40','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'360','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'944','group_id'=>'1490783176','cat_id'=>'1490783129','sub_id'=>'0','lang'=>'3','title'=>'Herpes Simplex 1/2 IgA','short'=>'Herpes 1/2 IgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'40','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'360','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'945','group_id'=>'1490783215','cat_id'=>'1490783129','sub_id'=>'0','lang'=>'2','title'=>'Chlamydia trachomatis IgA','short'=>'Chl IgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'46','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'361','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'946','group_id'=>'1490783215','cat_id'=>'1490783129','sub_id'=>'0','lang'=>'3','title'=>'Chlamydia trachomatis IgA','short'=>'Chl IgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'46','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'361','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'947','group_id'=>'1490783850','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Сhlamydia pneumonia IgM','short'=>'Chl IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'11','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'363','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'948','group_id'=>'1490783850','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Сhlamydia pneumonia IgM','short'=>'Chl IgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'11','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'363','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'949','group_id'=>'1490783889','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma pneumonia Ig А','short'=>'MycIg А','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1490783889','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'365','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'950','group_id'=>'1490783889','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma pneumonia Ig А','short'=>'MycIg А','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1490783889','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'365','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'951','group_id'=>'1490783900','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma pneumonia Ig G','short'=>'MycIgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'12','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'366','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'952','group_id'=>'1490783900','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma pneumonia Ig G','short'=>'MycIgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'12','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'366','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'953','group_id'=>'1490783912','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma pneumonia Ig M','short'=>'MycpnM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'13','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'364','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'954','group_id'=>'1490783912','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma pneumonia Ig M','short'=>'MycpnM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'13','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'364','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'955','group_id'=>'1490783993','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Helicobakter pylori IgG','short'=>'HellG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'16','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'368','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'956','group_id'=>'1490783993','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Helicobakter pylori IgG','short'=>'HellG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'16','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'368','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'957','group_id'=>'1490784001','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Helicobakter pylori IgM','short'=>'HelgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'17','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'367','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'958','group_id'=>'1490784001','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Helicobakter pylori IgM','short'=>'HelgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'17','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'367','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'959','group_id'=>'1490784034','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Gardnerella  Vaginalis IgG','short'=>'GarIgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'18','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'469','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'960','group_id'=>'1490784034','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Gardnerella  Vaginalis IgG','short'=>'GarIgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'18','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'469','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'961','group_id'=>'1490784048','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Gardnerella  Vaginalis IgM','short'=>'GarIgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'19','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'370','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'962','group_id'=>'1490784048','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Gardnerella  Vaginalis IgM','short'=>'GarIgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'19','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'370','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'963','group_id'=>'1490784103','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Trichomonas Vaginalis IgM','short'=>'TriIgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'371','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'964','group_id'=>'1490784103','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Trichomonas Vaginalis IgM','short'=>'TriIgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'371','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'967','group_id'=>'1490785441','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Лямблии lgA','short'=>'ЛяlgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'373','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'968','group_id'=>'1490785441','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Лямблии lgA','short'=>'ЛяlgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'373','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'969','group_id'=>'1490785447','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Лямблии lgG','short'=>'ЛяlgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'372','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'970','group_id'=>'1490785447','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Лямблии lgG','short'=>'ЛяlgG','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'372','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'971','group_id'=>'1490785455','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'2','title'=>'Лямблии lgM','short'=>'ЛяlgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'4','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'374','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'972','group_id'=>'1490785455','cat_id'=>'1341311440','sub_id'=>'0','lang'=>'3','title'=>'Лямблии lgM','short'=>'ЛяlgM','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'0','sort2'=>'4','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'374','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'973','group_id'=>'1490788038','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Toxoplasma (Кровь)','short'=>'Toxop Кровь','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490788038','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'406','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'974','group_id'=>'1490788038','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Toxoplasma (Кровь)','short'=>'Toxop Кровь','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490788038','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'406','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'975','group_id'=>'1490788045','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Cytomegalovirus (Кровь)','short'=>'Cytomegalovirus(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490788045','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'402','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'976','group_id'=>'1490788045','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Cytomegalovirus (Кровь)','short'=>'Cytomegalovirus(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490788045','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'402','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'977','group_id'=>'1490788055','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Rubella (Кровь)','short'=>'Rubella(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490788055','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'396','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'978','group_id'=>'1490788055','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Rubella (Кровь)','short'=>'Rubella(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490788055','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'396','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'979','group_id'=>'1490788066','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Herpis Simplex 1 (Кровь)','short'=>'Herpis Simplex 1(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490788066','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'399','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'980','group_id'=>'1490788066','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Herpis Simplex 1 (Кровь)','short'=>'Herpis Simplex 1(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490788066','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'399','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'981','group_id'=>'1490788075','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Herpis Simplex 2 (Кровь)','short'=>'Herpis Simplex 1(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1490788075','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'398','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'982','group_id'=>'1490788075','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Herpis Simplex 2 (Кровь)','short'=>'Herpis Simplex 1(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1490788075','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'398','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'983','group_id'=>'1490788096','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Chlamydia trachomatis (Кровь)','short'=>'Chlamydia trachomatis(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1490788096','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'984','group_id'=>'1490788096','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Chlamydia trachomatis (Кровь)','short'=>'Chlamydia trachomatis(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1490788096','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'985','group_id'=>'1490788108','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma hominis (Кровь)','short'=>'Mycoplasma homins(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1490788108','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'397','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'986','group_id'=>'1490788108','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma hominis (Кровь)','short'=>'Mycoplasma homins(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1490788108','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'397','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'987','group_id'=>'1490788118','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Ureaplasma urealyticum (Кровь)','short'=>'Ureaplasma urealyticum(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1490788118','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'395','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'988','group_id'=>'1490788118','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Ureaplasma urealyticum (Кровь)','short'=>'Ureaplasma urealyticum(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1490788118','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'395','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'989','group_id'=>'1490788128','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ - HPV (Кровь)','short'=>'HPV(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1490788128','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'394','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'990','group_id'=>'1490788128','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ - HPV (Кровь)','short'=>'HPV(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1490788128','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'394','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'991','group_id'=>'1490788138','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ 16 (Кровь)','short'=>'ВПЧ 16(Кровь)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1490788138','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'393','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'992','group_id'=>'1490788138','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ 16 (Кровь)','short'=>'ВПЧ 16(Кровь)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1490788138','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'393','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'993','group_id'=>'1490788151','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ 31\\35 (Кровь)','short'=>'ВПЧ 3135(Кровь)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1490788151','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'392','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'994','group_id'=>'1490788151','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ 31\\35 (Кровь)','short'=>'ВПЧ 3135(Кровь)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1490788151','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'392','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'995','group_id'=>'1490788165','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'HBV (Качественные)  (Кровь)','short'=>'HBV (Качественные)  ','price'=>'85000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1490788165','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'401','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'996','group_id'=>'1490788165','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'HBV (Качественные)  (Кровь)','short'=>'HBV (Качественные)  ','price'=>'85000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1490788165','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'401','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'997','group_id'=>'1490788175','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'HCV (Качественные) (Кровь)','short'=>'HCV','price'=>'85000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1490788175','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'400','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'998','group_id'=>'1490788175','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'HCV (Качественные) (Кровь)','short'=>'HCV','price'=>'85000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1490788175','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'400','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'999','group_id'=>'1490788190','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'Candida (Кровь)','short'=>'CandidaКровь','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'1490788190','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'404','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1000','group_id'=>'1490788190','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'Candida (Кровь)','short'=>'CandidaКровь','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'1490788190','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'404','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1001','group_id'=>'1490788211','cat_id'=>'1493370837','sub_id'=>'0','lang'=>'2','title'=>'HBV (Количественные)  (Кровь)','short'=>'HBV Колич','price'=>'150000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1490788211','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1002','group_id'=>'1490788211','cat_id'=>'1493370837','sub_id'=>'0','lang'=>'3','title'=>'HBV (Количественные) (Кровь)','short'=>'HBV Колич','price'=>'150000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1490788211','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1003','group_id'=>'1490788225','cat_id'=>'1493370837','sub_id'=>'0','lang'=>'2','title'=>'HСV (Количественные)     (Кровь)','short'=>'HСV Колич','price'=>'190000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1490788225','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1004','group_id'=>'1490788225','cat_id'=>'1493370837','sub_id'=>'0','lang'=>'3','title'=>'HСV (Количественные)     (Кровь)','short'=>'HСV Колич','price'=>'190000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1490788225','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1005','group_id'=>'1490788360','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Toxoplasma (Мазок)','short'=>'Toxop Маз','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490788360','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'383','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1006','group_id'=>'1490788360','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Toxoplasma (Мазок)','short'=>'Toxop Маз','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490788360','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'383','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1007','group_id'=>'1490788368','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Cytomegalovirus (Мазок)','short'=>'Cytomegalovirus(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490788368','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'378','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1008','group_id'=>'1490788368','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Cytomegalovirus (Мазок)','short'=>'Cytomegalovirus(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490788368','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'378','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1009','group_id'=>'1490788377','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Rubella (Мазок)','short'=>'Rubella(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490788377','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1010','group_id'=>'1490788377','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Rubella(Мазок)','short'=>'Rubella(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490788377','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1011','group_id'=>'1490788386','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Herpis Simplex 1 (Мазок)','short'=>'Herpis Simplex 1(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490788386','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'379','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1012','group_id'=>'1490788386','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Herpis Simplex 1 (Мазок)','short'=>'Herpis Simplex 1(Кровь)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490788386','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'379','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1013','group_id'=>'1490788395','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Herpis Simplex 2 (Мазок)','short'=>'Herpis Simplex 2(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1490788395','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'380','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1014','group_id'=>'1490788395','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Herpis Simplex 2 (Мазок)','short'=>'Herpis Simplex 2(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1490788395','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'380','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1015','group_id'=>'1490788403','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Chlamydia trachomatis (Мазок)','short'=>'ChlamTrachМазок','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1490788403','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'377','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1016','group_id'=>'1490788403','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Chlamydia trachomatis (Мазок)','short'=>'ChlamTrachМазок','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1490788403','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'377','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1017','group_id'=>'1490788413','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma hominis (Мазок)','short'=>'Mycoplasma homins(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1490788413','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'381','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1018','group_id'=>'1490788413','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma hominis (Мазок)','short'=>'Mycoplasma homins(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1490788413','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'381','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1019','group_id'=>'1490788421','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Ureaplasma urealyticum (Мазок)','short'=>'Ureaplasma urealyticum(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1490788421','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'384','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1020','group_id'=>'1490788421','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Ureaplasma urealyticum (Мазок)','short'=>'Ureaplasma urealyticum(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1490788421','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'384','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1021','group_id'=>'1490788438','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'Candida (Мазок)','short'=>'CandidaМазок','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1490788438','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'376','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1022','group_id'=>'1490788438','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'Candida (Мазок)','short'=>'CandidaМазок','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'1490788438','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'376','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1023','group_id'=>'1490788461','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ - HPV (Мазок)','short'=>'HPV(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1490788461','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'385','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1024','group_id'=>'1490788461','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ - HPV (Мазок)','short'=>'HPV(Мазок)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1490788461','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'385','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1025','group_id'=>'1490788471','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ 16 (Мазок)','short'=>'ВПЧ 16(Мазок)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1490788471','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'386','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1026','group_id'=>'1490788471','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ 16 (Мазок)','short'=>'ВПЧ 16(Мазок)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1490788471','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'386','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1027','group_id'=>'1490788479','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ 31\\35 (Мазок)','short'=>'3135(Мазок)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1490788479','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'387','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1028','group_id'=>'1490788479','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ 31\\35 (Мазок)','short'=>'3135(Мазок)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1490788479','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'387','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1029','group_id'=>'1490788627','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза','short'=>'Глюкоза','price'=>'11500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490788627','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'389','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1030','group_id'=>'1490788627','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза','short'=>'Глюкоза','price'=>'11500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490788627','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'389','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1031','group_id'=>'1490788732','cat_id'=>'1490858330','sub_id'=>'0','lang'=>'2','title'=>'Реакция Вассермана (RW)','short'=>'(RW)','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'1490788732','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1032','group_id'=>'1490788732','cat_id'=>'1490858330','sub_id'=>'0','lang'=>'3','title'=>'Реакция Вассермана (RW)','short'=>'(RW)','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'1490788732','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1033','group_id'=>'1490789151','cat_id'=>'1490953483','sub_id'=>'0','lang'=>'2','title'=>'RHEU - Ревматоидный фактор (RF)','short'=>'RF ','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490789151','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'349','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1034','group_id'=>'1490789151','cat_id'=>'1490953483','sub_id'=>'0','lang'=>'3','title'=>'RHEU - Ревматоидный фактор (RF)','short'=>'RF ','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490789151','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'349','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1035','group_id'=>'1490789233','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Helicobacter pylori AB','short'=>'HelicoPyl','price'=>'31000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490789233','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'405','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1036','group_id'=>'1490789233','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Helicobacter pylori AB','short'=>'HelicoPyl','price'=>'31000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490789233','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'405','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1037','group_id'=>'1490789679','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Женский мазок на лептотрихоз ','short'=>'ЖенЛеп','price'=>'19000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490789679','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1038','group_id'=>'1490789679','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Женский мазок на лептотрихоз ','short'=>'ЖенЛеп','price'=>'19000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490789679','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1039','group_id'=>'1490789762','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Сок простаты','short'=>'Сок простаты','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1490789762','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1040','group_id'=>'1490789762','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Сок простаты','short'=>'Сок простаты','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1490789762','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1041','group_id'=>'1490853358','cat_id'=>'1490853321','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза натощак','short'=>'Глюкоза','price'=>'31000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490853358','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'358','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1042','group_id'=>'1490853358','cat_id'=>'1490853321','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза натощак','short'=>'Глюкоза','price'=>'31000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490853358','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'358','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1043','group_id'=>'1490853372','cat_id'=>'1490853321','sub_id'=>'0','lang'=>'2','title'=>'Глюкоза через 2 час после приема пищи','short'=>'Глюкоза2 час','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490853372','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'359','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1044','group_id'=>'1490853372','cat_id'=>'1490853321','sub_id'=>'0','lang'=>'3','title'=>'Глюкоза через 2 час после приема пищи','short'=>'Глюкоза2 час','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490853372','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'359','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1045','group_id'=>'1490853475','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Спермограмма','short'=>'Спер','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490853475','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1046','group_id'=>'1490853475','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Спермограмма','short'=>'Спер','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1490853475','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1047','group_id'=>'1490853579','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Цитология выделений молочной железы ','short'=>'Цитмолочной','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490853579','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1048','group_id'=>'1490853579','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Цитология выделений молочной железы ','short'=>'Цитмолочной','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490853579','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1049','group_id'=>'1490853614','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Сhlamydia trachomatis ','short'=>'Сhla','price'=>'28000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1490853614','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1050','group_id'=>'1490853614','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Сhlamydia trachomatis ','short'=>'Сhla','price'=>'28000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'1490853614','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1051','group_id'=>'1490853676','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Нативный мазок на трихомониаз ','short'=>'Сhla','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1490853676','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1052','group_id'=>'1490853676','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Нативный мазок на трихомониаз ','short'=>'Сhla','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1490853676','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1053','group_id'=>'1490853883','cat_id'=>'1341316336','sub_id'=>'0','lang'=>'2','title'=>'Проба Курцрока-Миллера','short'=>'Курц','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490853883','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1054','group_id'=>'1490853883','cat_id'=>'1341316336','sub_id'=>'0','lang'=>'3','title'=>'Проба Курцрока-Миллера','short'=>'Курц','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490853883','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1055','group_id'=>'1490854109','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Хорионический гонадотропин в моче','short'=>'ХГЧМ','price'=>'5000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1490854109','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'412','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1056','group_id'=>'1490854109','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Хорионический гонадотропин в моче','short'=>'ХГЧМ','price'=>'5000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1490854109','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'412','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1057','group_id'=>'1490854269','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'2','title'=>'Посткоитальный диурез','short'=>'ПосДиу','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1490854269','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1058','group_id'=>'1490854269','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Посткоитальный диурез','short'=>'ПосДиу','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'1490854269','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1059','group_id'=>'1490854682','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Хлор[Cl] в суточной моче','short'=>'Cl','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1490854682','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'411','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1060','group_id'=>'1490854682','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Хлор[Cl] в суточной моче','short'=>'Cl','price'=>'16000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1490854682','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'411','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1061','group_id'=>'1490854755','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'2','title'=>'Ацетон в моче','short'=>'Ацетон','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490854755','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'410','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1062','group_id'=>'1490854755','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Ацетон в моче','short'=>'Ацетон','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490854755','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'410','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1063','group_id'=>'1341481916','cat_id'=>'1431775680','sub_id'=>'0','lang'=>'3','title'=>'Микроальбумин в моче','short'=>'Микроальб','price'=>'12500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1341481916','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'355','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1064','group_id'=>'1490855478','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Тироксин связывающая способность сыворотки (Т3 Uptake)','short'=>'(T-uptake)','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'30','sort2'=>'30','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'407','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1065','group_id'=>'1490855478','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'(T-uptake)','short'=>'(T-uptake)','price'=>'45000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'30','sort2'=>'30','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'407','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1066','group_id'=>'1490855557','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Кортизол в слюне','short'=>'Cortisol in saliva','price'=>'1','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'35','sort2'=>'35','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'375','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1067','group_id'=>'1490855557','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>' (Cortisol in saliva)','short'=>'Cortisol in saliva','price'=>'1','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'35','sort2'=>'35','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'375','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1070','group_id'=>'1490856522','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Креатинкиназа','short'=>'CK','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'31','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'325','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1071','group_id'=>'1490856522','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Креатинкиназа','short'=>'CK','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'31','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'325','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1072','group_id'=>'1490856539','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Креатинкиназа MB','short'=>'CK-MB','price'=>'18000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'32','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'409','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1073','group_id'=>'1490856539','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Креатинкиназа MB','short'=>'CK-MB','price'=>'18000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'32','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'409','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1074','group_id'=>'1490856918','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Простатическая фосфатаза','short'=>'Просфос','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'34','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'424','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1075','group_id'=>'1490856918','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Простатическая фосфатаза','short'=>'Просфос','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'34','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'424','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1076','group_id'=>'1490857528','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Онкомаркёр рака яичников HE4','short'=>' HE4','price'=>'47000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'42','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'324','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1077','group_id'=>'1490857528','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Онкомаркёр рака яичников HE4','short'=>' HE4','price'=>'47000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'42','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'324','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1078','group_id'=>'1490857804','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'Anti HAV IgG (Гепатит А)','short'=>'Anti HAV IgG ','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'61','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'470','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1079','group_id'=>'1490857804','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'Anti HAV IgG (Гепатит А)','short'=>'Anti HAV IgG ','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'61','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'470','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1080','group_id'=>'1490858239','cat_id'=>'1490858158','sub_id'=>'0','lang'=>'2','title'=>'Вич','short'=>'HIV','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490858239','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1081','group_id'=>'1490858239','cat_id'=>'1490858158','sub_id'=>'0','lang'=>'3','title'=>'HIV','short'=>'HIV','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1490858239','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1082','group_id'=>'1490859308','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'2','title'=>'Церулоплазмин','short'=>'СП','price'=>'132500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'23','sort2'=>'37','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1083','group_id'=>'1490859308','cat_id'=>'1341315438','sub_id'=>'0','lang'=>'3','title'=>'Церулоплазмин','short'=>'СП','price'=>'132500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'23','sort2'=>'37','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1084','group_id'=>'1490945584','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Углеводный антиген CA 72-4','short'=>'CA 72-4','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'38','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'322','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1085','group_id'=>'1490945584','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Углеводный антиген CA 72-4','short'=>'CA 72-4','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'38','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'322','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1086','group_id'=>'1490945926','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Нейронспецифическая энолаза (NSE)','short'=>'NSE','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'39','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'323','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1087','group_id'=>'1490945926','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Нейронспецифическая энолаза (NSE)','short'=>'NSE','price'=>'60000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'39','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'323','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1130','group_id'=>'1490953657','cat_id'=>'1490953483','sub_id'=>'0','lang'=>'2','title'=>'RHEU - C-реактивный белок (CRP)','short'=>'CRP','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490953657','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'351','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1131','group_id'=>'1490953657','cat_id'=>'1490953483','sub_id'=>'0','lang'=>'3','title'=>'RHEU - C-реактивный белок (CRP)','short'=>'CRP','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1490953657','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'351','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1132','group_id'=>'1490953670','cat_id'=>'1490953483','sub_id'=>'0','lang'=>'2','title'=>'RHEU - Антистрептолизин О (ASLO)','short'=>'ASLO','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490953670','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'350','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1133','group_id'=>'1490953670','cat_id'=>'1490953483','sub_id'=>'0','lang'=>'3','title'=>'RHEU - Антистрептолизин О (ASLO)','short'=>'ASLO','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1490953670','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'350','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1134','group_id'=>'1491979118','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Агрегация тромбоцитов с АДФ 1 мкмоль/л %','short'=>'АДФ 1','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1491979118','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'357','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1135','group_id'=>'1491979118','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Агрегация тромбоцитов с АДФ 1 мкмоль/л %','short'=>'АДФ 1','price'=>'25000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1491979118','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'357','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1136','group_id'=>'1491980513','cat_id'=>'1490783129','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma hominis IgA','short'=>'Myc IgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'51','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'362','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1137','group_id'=>'1491980513','cat_id'=>'1490783129','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma hominis IgA','short'=>'Myc IgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'51','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'362','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1138','group_id'=>'1492241296','cat_id'=>'1490856313','sub_id'=>'0','lang'=>'2','title'=>'HEA4','short'=>'HEA4','price'=>'166000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1492241296','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1139','group_id'=>'1492241296','cat_id'=>'1490856313','sub_id'=>'0','lang'=>'3','title'=>'HEA4','short'=>'HEA4','price'=>'166000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1492241296','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1140','group_id'=>'1492241645','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Лямблии в кале','short'=>'Лямбл','price'=>'50000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1492241645','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'408','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1141','group_id'=>'1492241645','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Лямблии в кале','short'=>'Лямбл','price'=>'50000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1492241645','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'408','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1142','group_id'=>'1492241863','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Риноцитограмма','short'=>'Риноц','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1492241863','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1143','group_id'=>'1492241863','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Риноцитограмма','short'=>'Риноц','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'1492241863','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1154','group_id'=>'1493269447','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'B12','short'=>'B12','price'=>'140000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'31','sort2'=>'31','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'388','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1155','group_id'=>'1493269447','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'B12','short'=>'B12','price'=>'140000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'31','sort2'=>'31','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'388','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1156','group_id'=>'1493351548','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'2','title'=>'Антиген плоскоклеточной карциномы (SCC Ag) ','short'=>'SCC','price'=>'160000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1493351548','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'390','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1157','group_id'=>'1493351548','cat_id'=>'1340426968','sub_id'=>'0','lang'=>'3','title'=>'Антиген плоскоклеточной карциномы (SCC Ag) ','short'=>'SCC','price'=>'160000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1493351548','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'390','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1158','group_id'=>'1493884247','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. плевральной жидкости ','short'=>'Бакисс плевр','price'=>'50000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1493884247','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1159','group_id'=>'1493884247','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. плевральной жидкости ','short'=>'Бакисс плевр','price'=>'50000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'1493884247','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1160','group_id'=>'1493896879','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'2','title'=>'Группа крови-резус фактор( для нерезидентов РУз)','short'=>'ГрКр','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1493896879','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1161','group_id'=>'1493896879','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'3','title'=>'Группа крови-резус фактор( для нерезидентов РУз)','short'=>'ГрКр','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1493896879','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1162','group_id'=>'1493975249','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'2','title'=>'Анализ на грибок с волосистой части головы ','short'=>'волосистой части головы ','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1493975249','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1163','group_id'=>'1493975249','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'3','title'=>'Анализ на грибок с волосистой части головы ','short'=>'волосистой части головы ','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1493975249','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1164','group_id'=>'1341481580','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'3','title'=>'Демодекоз с лица','short'=>'Демодекоз с лица','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1341481580','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'1','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1165','group_id'=>'1493975368','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'2','title'=>'Демодекоз с ресниц','short'=>'Демодекоз с ресниц','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1493975368','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1166','group_id'=>'1493975368','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'3','title'=>'Демодекоз с ресниц','short'=>'Демодекоз с ресниц','price'=>'17000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1493975368','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1169','group_id'=>'1341481954','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Ацетон ','short'=>'Ацетон ','price'=>'13500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1341481954','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1170','group_id'=>'1341481873','cat_id'=>'1341317405','sub_id'=>'0','lang'=>'3','title'=>'Цитология мочи','short'=>'Цитол. мочи','price'=>'21000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1341481873','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1171','group_id'=>'1494655655','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Бак.исслед. спинномозговой жидкости','short'=>'спинном','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'17','sort2'=>'1494655655','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1172','group_id'=>'1494655655','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Бак.исслед. спинномозговой жидкости','short'=>'спинном','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'17','sort2'=>'1494655655','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1173','group_id'=>'1495514503','cat_id'=>'1495514466','sub_id'=>'0','lang'=>'2','title'=>'ANA Screen','short'=>'ANA ','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1495514503','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1174','group_id'=>'1495514503','cat_id'=>'1495514466','sub_id'=>'0','lang'=>'3','title'=>'ANA Screen','short'=>'ANA ','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1495514503','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1175','group_id'=>'1497511358','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Тропонин I','short'=>'Тропонин I','price'=>'33000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1497511358','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'416','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1176','group_id'=>'1497511358','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Тропонин I','short'=>'Тропонин I','price'=>'33000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1497511358','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'416','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1177','group_id'=>'1497511712','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Кишечная группа','short'=>'Кишеч','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'1497511712','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1178','group_id'=>'1497511712','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Кишечная группа','short'=>'Кишеч','price'=>'42000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'1497511712','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1179','group_id'=>'1497511894','cat_id'=>'1493370837','sub_id'=>'0','lang'=>'2','title'=>'HDV (Количественные)','short'=>'HDV (Кол)','price'=>'170000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1497511894','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1180','group_id'=>'1497511894','cat_id'=>'1493370837','sub_id'=>'0','lang'=>'3','title'=>'HDV (Количественные)','short'=>'HDV (Кол)','price'=>'170000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1497511894','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1181','group_id'=>'1497511915','cat_id'=>'1493370837','sub_id'=>'0','lang'=>'2','title'=>'ПЦР HCV (Генотип)','short'=>'HCV (Генотип)','price'=>'200000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1497511915','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1182','group_id'=>'1497511915','cat_id'=>'1493370837','sub_id'=>'0','lang'=>'3','title'=>'ПЦР HCV (Генотип)','short'=>'HCV (Генотип)','price'=>'200000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1497511915','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1183','group_id'=>'1497511949','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'HDV (Качественные) (Кровь)','short'=>'HDV (Кач)','price'=>'85000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1497511949','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1184','group_id'=>'1497511949','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'HDV (Качественные) (Кровь)','short'=>'HDV (Кач)','price'=>'85000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'1497511949','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1185','group_id'=>'1497512038','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'2','title'=>'Toxoplasma (Моча)','short'=>'Toxoplasma (Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1497512038','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1186','group_id'=>'1497512038','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'3','title'=>'Toxoplasma (Моча)','short'=>'Toxoplasma (Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1497512038','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1187','group_id'=>'1497512050','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'2','title'=>'Cytomegalovirus (Моча)','short'=>'Cytomegalovirus (Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1497512050','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1188','group_id'=>'1497512050','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'3','title'=>'Cytomegalovirus (Моча)','short'=>'Cytomegalovirus (Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1497512050','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1189','group_id'=>'1497512061','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'2','title'=>'Herpis Simplex 1 ( (Моча)','short'=>'Herpis Simplex 1 ( (Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1497512061','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1190','group_id'=>'1497512061','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'3','title'=>'Herpis Simplex 1 ( (Моча)','short'=>'Herpis Simplex 1 ( (Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1497512061','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1191','group_id'=>'1497512082','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'2','title'=>'Herpis Simplex 2 ( Моча)','short'=>'Herpis Simplex 2 ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1497512082','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1192','group_id'=>'1497512082','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'3','title'=>'Herpis Simplex 2 ( Моча)','short'=>'Herpis Simplex 2 ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1497512082','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1193','group_id'=>'1497512099','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'2','title'=>'Chlamydia trachomatis ( Моча)','short'=>'Chlamydia trachomatis ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1497512099','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1194','group_id'=>'1497512099','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'3','title'=>'Chlamydia trachomatis ( Моча)','short'=>'Chlamydia trachomatis ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'1497512099','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1195','group_id'=>'1497512112','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'2','title'=>'Mycoplasma hominis ( Моча)','short'=>'Mycoplasma homins ( Моча) ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1497512112','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1196','group_id'=>'1497512112','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'3','title'=>'Mycoplasma hominis ( Моча)','short'=>'Mycoplasma homins ( Моча) ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1497512112','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1197','group_id'=>'1497512123','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'2','title'=>'Ureaplasma urealyticum ( Моча)','short'=>'Ureaplasma urealyticum ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1497512123','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1198','group_id'=>'1497512123','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'3','title'=>'Ureaplasma urealyticum ( Моча)','short'=>'Ureaplasma urealyticum ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1497512123','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1199','group_id'=>'1497512135','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ 16\\18  ( Моча)','short'=>'ВПЧ 1618 ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1497512135','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1200','group_id'=>'1497512135','cat_id'=>'1497511996','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ 16\\18 ( Моча)','short'=>'ВПЧ 1618 ( Моча)','price'=>'70000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'1497512135','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'0','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1201','group_id'=>'1497515396','cat_id'=>'1497667684','sub_id'=>'0','lang'=>'2','title'=>'ЭЭГ','short'=>'ЭЭГ','price'=>'28000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1497515396','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1202','group_id'=>'1497515396','cat_id'=>'1497667684','sub_id'=>'0','lang'=>'3','title'=>'ЭЭГ','short'=>'ЭЭГ','price'=>'28000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'1497515396','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1203','group_id'=>'1497515409','cat_id'=>'1490782264','sub_id'=>'0','lang'=>'2','title'=>'ЭХО','short'=>'ЭХО','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1497515409','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1204','group_id'=>'1497515409','cat_id'=>'1490782264','sub_id'=>'0','lang'=>'3','title'=>'ЭХО','short'=>'ЭХО','price'=>'12000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'1497515409','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1205','group_id'=>'1497515697','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ 18 (Кровь)','short'=>'ВПЧ 18 (Кровь)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1497515697','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1206','group_id'=>'1497515697','cat_id'=>'1341383950','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ 18 (Кровь)','short'=>'ВПЧ 18 (Кровь)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'1497515697','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1207','group_id'=>'1497515757','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'2','title'=>'ВПЧ 18 (Мазок)','short'=>'ВПЧ 18(Мазок)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1497515757','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1208','group_id'=>'1497515757','cat_id'=>'1490788340','sub_id'=>'0','lang'=>'3','title'=>'ВПЧ 18 (Мазок)','short'=>'ВПЧ 18(Мазок)','price'=>'40000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'1497515757','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1211','group_id'=>'1497515929','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Определение LE клеток (Красная Волчанка)','short'=>'LE','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1497515929','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'415','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1212','group_id'=>'1497515929','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Определение LE клеток (Красная Волчанка)','short'=>'LE','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1497515929','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'415','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1213','group_id'=>'1497516137','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'2','title'=>'Время кровотечения по Дюке','short'=>'Дюке','price'=>'7000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1497516137','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'414','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1214','group_id'=>'1497516137','cat_id'=>'1341384206','sub_id'=>'0','lang'=>'3','title'=>'Время кровотечения по Дюке','short'=>'Дюке','price'=>'7000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'1497516137','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'414','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1215','group_id'=>'1497516327','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Гормональная кольпоцитограмма ','short'=>'ГормонКол','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1497516327','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1216','group_id'=>'1497516327','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Гормональная кольпоцитограмма ','short'=>'ГормонКол','price'=>'24000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'1497516327','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1217','group_id'=>'1497529709','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'Anti-HBe / HBe-Ab','short'=>'Anti-HBe ','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'70','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'413','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1218','group_id'=>'1497529709','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'Anti-HBe / HBe-Ab','short'=>'Anti-HBe ','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'70','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'413','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1225','group_id'=>'1497667727','cat_id'=>'1497667684','sub_id'=>'0','lang'=>'2','title'=>'консультация педиатра','short'=>'Консу','price'=>'20000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1497667727','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1226','group_id'=>'1497667727','cat_id'=>'1497667684','sub_id'=>'0','lang'=>'3','title'=>'консультация педиатра','short'=>'Консу','price'=>'20000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1497667727','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1227','group_id'=>'1498041744','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Антитела к циклическому цитруллин содержащему пептиду (АЦЦП или Anti-CCP)','short'=>'АЦЦП','price'=>'96000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'30','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1228','group_id'=>'1498041744','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Антитела к циклическому цитруллин содержащему пептиду (АЦЦП или Anti-CCP)','short'=>'АЦЦП','price'=>'96000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'30','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1229','group_id'=>'1498042255','cat_id'=>'1490783129','sub_id'=>'0','lang'=>'2','title'=>'Ureaplasma urealyticum IgA','short'=>'Ure IgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'421','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1230','group_id'=>'1498042255','cat_id'=>'1490783129','sub_id'=>'0','lang'=>'3','title'=>'Ureaplasma urealyticum IgA','short'=>'Ure IgA','price'=>'25500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'421','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1231','group_id'=>'1498042580','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'HEV - Аb (Гепатит E)','short'=>'HEV','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'422','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1232','group_id'=>'1498042580','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'HEV - Аb (Гепатит E)','short'=>'HEV','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'422','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1233','group_id'=>'1498042761','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'2','title'=>'HBsAg акция','short'=>'HBsAgАк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'65','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'423','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1234','group_id'=>'1498042761','cat_id'=>'1341315270','sub_id'=>'0','lang'=>'3','title'=>'HBsAg акция','short'=>'HBsAgАк','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'65','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'423','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1245','group_id'=>'1498053809','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'2','title'=>'Аллергическая панель 1уз','short'=>'панель 1уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1246','group_id'=>'1498053809','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'3','title'=>'Аллергическая панель 1уз','short'=>'панель 1уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1251','group_id'=>'1498053856','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'2','title'=>'Аллергическая панель 2уз','short'=>'панель 1уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1252','group_id'=>'1498053856','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'3','title'=>'Аллергическая панель 1уз','short'=>'панель 1уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1253','group_id'=>'1498053875','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'2','title'=>'Аллергическая панель 3уз','short'=>'панель 3уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1254','group_id'=>'1498053875','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'3','title'=>'Аллергическая панель 3уз','short'=>'панель 3уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1255','group_id'=>'1498053886','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'2','title'=>'Аллергическая панель 4уз','short'=>'панель 4уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'4','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1256','group_id'=>'1498053886','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'3','title'=>'Аллергическая панель 4уз','short'=>'панель 4уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'4','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1257','group_id'=>'1498053900','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'2','title'=>'Аллергическая панель 5уз','short'=>'панель 5уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1258','group_id'=>'1498053900','cat_id'=>'1493265151','sub_id'=>'0','lang'=>'3','title'=>'Аллергическая панель 5уз','short'=>'панель 5уз','price'=>'365000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1269','group_id'=>'1498100252','cat_id'=>'1498104433','sub_id'=>'0','lang'=>'2','title'=>'Количество ретикулоцитов','short'=>'КолРет','price'=>'6500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1270','group_id'=>'1498100252','cat_id'=>'1498104433','sub_id'=>'0','lang'=>'3','title'=>'Количество ретикулоцитов','short'=>'КолРет','price'=>'6500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1271','group_id'=>'1341481604','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'3','title'=>'Чесоточный клещ','short'=>'Чес.клещ','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1272','group_id'=>'1498102481','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Эритроциты (RBC)','short'=>'RBC','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'429','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1273','group_id'=>'1498102481','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Эритроциты (RBC)','short'=>'RBC','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'1','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'429','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1274','group_id'=>'1498102494','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Концентрация гемоглобина (HGB)','short'=>'HGB','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'430','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1275','group_id'=>'1498102494','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Концентрация гемоглобина (HGB)','short'=>'HGB','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'2','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'430','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1276','group_id'=>'1498102505','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Лейкоциты (WBC)','short'=>'WBC','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'431','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1277','group_id'=>'1498102505','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Лейкоциты (WBC)','short'=>'WBC','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'3','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'431','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1278','group_id'=>'1498102524','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Миелоциты %','short'=>'Мие','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'4','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'432','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1279','group_id'=>'1498102524','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Миелоциты %','short'=>'Мие','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'4','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'432','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1280','group_id'=>'1498102539','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Метамиелоциты %','short'=>'Мет','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'433','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1281','group_id'=>'1498102539','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Метамиелоциты %','short'=>'Мет','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'5','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'433','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1282','group_id'=>'1498102555','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Палочкоядерные нейтрофилы %','short'=>'ПалочНей','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'6','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'434','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1283','group_id'=>'1498102555','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Палочкоядерные нейтрофилы %','short'=>'ПалочНей','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'6','sort2'=>'6','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'434','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1284','group_id'=>'1498102571','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Сегментоядерные нейтрофилы %','short'=>'СегНей','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'7','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'435','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1285','group_id'=>'1498102571','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Сегментоядерные нейтрофилы %','short'=>'СегНей','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'7','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'435','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1286','group_id'=>'1498102581','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Эозинофилы %','short'=>'Эоз','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'8','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'436','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1287','group_id'=>'1498102581','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Эозинофилы %','short'=>'Эоз','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'8','sort2'=>'8','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'436','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1288','group_id'=>'1498102597','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Базофилы %','short'=>'Баз','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'9','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'437','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1289','group_id'=>'1498102597','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Базофилы %','short'=>'Баз','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'9','sort2'=>'9','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'437','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1290','group_id'=>'1498102607','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Лимфоциты %','short'=>'Лим','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'10','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'438','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1291','group_id'=>'1498102607','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Лимфоциты %','short'=>'Лим','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'10','sort2'=>'10','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'438','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1292','group_id'=>'1498102617','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Моноциты %','short'=>'Моноц','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'11','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'439','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1293','group_id'=>'1498102617','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Моноциты %','short'=>'Моноц','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'11','sort2'=>'11','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'439','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1294','group_id'=>'1498102628','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Плазмотические клетки %','short'=>'Плаз','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'12','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'441','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1295','group_id'=>'1498102628','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Плазмотические клетки %','short'=>'Плаз','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'12','sort2'=>'12','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'441','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1296','group_id'=>'1498102648','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Абсолютное количество эозинофилов','short'=>'АбсКол','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'13','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'442','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1297','group_id'=>'1498102648','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Абсолютное количество эозинофилов','short'=>'АбсКол','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'13','sort2'=>'13','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'442','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1298','group_id'=>'1498102657','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Тромбоциты (PLT)','short'=>'PLT','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'14','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'443','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1299','group_id'=>'1498102657','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Тромбоциты (PLT)','short'=>'PLT','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'14','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'443','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1300','group_id'=>'1498102668','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Средний объем тромбоцитов (MPV)','short'=>'MPV','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'15','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'444','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1301','group_id'=>'1498102668','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Средний объем тромбоцитов (MPV)','short'=>'MPV','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'15','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'444','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1302','group_id'=>'1498102677','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Ширина распределения тромбоцитов (PDV)','short'=>'PDV','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'16','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'445','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1303','group_id'=>'1498102677','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Ширина распределения тромбоцитов (PDV)','short'=>'PDV','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'16','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'445','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1304','group_id'=>'1498102687','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Тромбокрит ( PCT)','short'=>'PCT','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'17','sort2'=>'17','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'446','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1305','group_id'=>'1498102687','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Тромбокрит ( PCT)','short'=>'PCT','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'17','sort2'=>'17','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'446','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1306','group_id'=>'1498102698','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Гемотокрит (HCT)','short'=>'HCT','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'18','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'447','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1307','group_id'=>'1498102698','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Гемотокрит (HCT)','short'=>'HCT','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'18','sort2'=>'18','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'447','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1308','group_id'=>'1498102710','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Средний объем эритроцита (MCV)','short'=>'MCV','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'19','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'448','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1309','group_id'=>'1498102710','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Средний объем эритроцита (MCV)','short'=>'MCV','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'19','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'448','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1310','group_id'=>'1498102721','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Среднее содержание гемоглобина в эритроците (MCH)','short'=>'MCH','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'20','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'449','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1311','group_id'=>'1498102721','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Среднее содержание гемоглобина в эритроците (MCH)','short'=>'MCH','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'20','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'449','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1312','group_id'=>'1498102733','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Средняя когцентрация гемоглобина в эритроците (MCHC)','short'=>'MCHC','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'450','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1313','group_id'=>'1498102733','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Средняя когцентрация гемоглобина в эритроците (MCHC)','short'=>'MCHC','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'21','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'450','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1314','group_id'=>'1498102744','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Ширина распределения эритроцитов-коэффициент вариации (RDW-CV)','short'=>'RDW-CV','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'22','sort2'=>'22','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'451','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1315','group_id'=>'1498102744','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Ширина распределения эритроцитов-коэффициент вариации (RDW-CV)','short'=>'RDW-CV','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'22','sort2'=>'22','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'451','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1316','group_id'=>'1498102757','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Ширина распределения эритроцитов- стандарт отклонения (RDW-SD)','short'=>'RDW-SD','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'23','sort2'=>'23','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'452','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1317','group_id'=>'1498102757','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Ширина распределения эритроцитов- стандарт отклонения (RDW-SD)','short'=>'RDW-SD','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'23','sort2'=>'23','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'452','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1318','group_id'=>'1498102768','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'2','title'=>'Скорость оседания эритроцитов (ESR) по Вестергрену','short'=>'ESR','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'24','sort2'=>'24','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'453','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1319','group_id'=>'1498102768','cat_id'=>'1490772883','sub_id'=>'0','lang'=>'3','title'=>'Скорость оседания эритроцитов (ESR) по Вестергрену','short'=>'ESR','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'24','sort2'=>'24','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'453','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1320','group_id'=>'1498129128','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Адреналин','short'=>'Адреналин','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'50','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1321','group_id'=>'1498129128','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Адреналин','short'=>'Адреналин','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'50','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1322','group_id'=>'1498129152','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'2','title'=>'Ноадреналин','short'=>'Ноадреналин','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'51','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1323','group_id'=>'1498129152','cat_id'=>'1341311407','sub_id'=>'0','lang'=>'3','title'=>'Ноадреналин','short'=>'Ноадреналин','price'=>'0','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'51','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1324','group_id'=>'1498134507','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Антитела к Вирусу Эпштейна-Барра (NA) IgG ','short'=>'Барра (NA) IgG ','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1325','group_id'=>'1498134507','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Антитела к Вирусу Эпштейна-Барра (NA) IgG ','short'=>'Барра (NA) IgG ','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'14','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1326','group_id'=>'1498134526','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Антитела к Вирусу Эпштейна-Барра IgM ','short'=>'Барра IgM ','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1327','group_id'=>'1498134526','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Антитела к Вирусу Эпштейна-Барра IgM ','short'=>'Барра IgM ','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'15','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1328','group_id'=>'1498134548','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Антитела к Вирусу Эпштейна-Барра (EA) IgG ','short'=>'Барра (EA) IgG ','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1329','group_id'=>'1498134548','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Антитела к Вирусу Эпштейна-Барра (EA) IgG ','short'=>'Барра (EA) IgG ','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'16','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1330','group_id'=>'1498140258','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'2','title'=>'Кишечная группа(Дизентерия, сальмонолез, стафилокок)','short'=>'Кишечная группа2','price'=>'38500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1331','group_id'=>'1498140258','cat_id'=>'1341383933','sub_id'=>'0','lang'=>'3','title'=>'Кишечная группа(Дизентерия, сальмонолез, стафилокок)','short'=>'Кишечная группа2','price'=>'38500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1332','group_id'=>'1498154638','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Syphilis IgM','short'=>'Syphilis IgM','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1333','group_id'=>'1498154638','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Syphilis IgM','short'=>'Syphilis IgM','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'3','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1334','group_id'=>'1498154651','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Syphilis IgG','short'=>'Syphilis IgM','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1335','group_id'=>'1498154651','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Syphilis IgG','short'=>'Syphilis IgM','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1336','group_id'=>'1498155031','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Toxoplasma avidnost','short'=>'ToxoAvid','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1337','group_id'=>'1498155031','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Toxoplasma avidnost','short'=>'ToxoAvid','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'19','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1338','group_id'=>'1498155056','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Citomegalovirus avidnost','short'=>'CitoAvid','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1339','group_id'=>'1498155056','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Citomegalovirus avidnost','short'=>'CitoAvid','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'20','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1340','group_id'=>'1498155096','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Herpes simplex virus avidnost','short'=>'HerpAvid','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1341','group_id'=>'1498155096','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Herpes simplex virus avidnost','short'=>'HerpAvid','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'21','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1342','group_id'=>'1498185143','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'2','title'=>'Мазок на ВПЧ(HPV)','short'=>'ВПЧ(HPV)','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1343','group_id'=>'1498185143','cat_id'=>'1341316211','sub_id'=>'0','lang'=>'3','title'=>'Мазок на ВПЧ(HPV)','short'=>'ВПЧ(HPV)','price'=>'26000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'4','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1344','group_id'=>'1498209695','cat_id'=>'1498209627','sub_id'=>'0','lang'=>'2','title'=>'Кольпоскопия','short'=>'Кольпоскопия','price'=>'46000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1345','group_id'=>'1498209695','cat_id'=>'1498209627','sub_id'=>'0','lang'=>'3','title'=>'Кольпоскопия','short'=>'Кольпоскопия','price'=>'46000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'1','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1346','group_id'=>'1498222073','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'Гликозилированный гемоглобин','short'=>'Гл','price'=>'29000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1347','group_id'=>'1498222073','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'Гликозилированный гемоглобин','short'=>'Гл','price'=>'29000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'7','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1348','group_id'=>'1498285340','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'2','title'=>'Helicobacter pylori total','short'=>'H.pyl.total','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1349','group_id'=>'1498285340','cat_id'=>'1341315355','sub_id'=>'0','lang'=>'3','title'=>'Helicobacter pylori total','short'=>'H.pyl.total','price'=>'24500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'0','def'=>'0','active'=>'0','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1350','group_id'=>'1499087249','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'2','title'=>'HIV (Вирус иммунодефицита человека)','short'=>'HIV','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'454','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1351','group_id'=>'1499087249','cat_id'=>'1341317664','sub_id'=>'0','lang'=>'3','title'=>'HIV (Вирус иммунодефицита человека)','short'=>'HIV','price'=>'36000','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'5','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'454','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1352','group_id'=>'1341481632','cat_id'=>'1341317350','sub_id'=>'0','lang'=>'3','title'=>'Лейшманиоз','short'=>'лейшм.','price'=>'14500','price2'=>'0','price3'=>'0','price4'=>'0','price5'=>'0','sort'=>'2','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1353','group_id'=>'1513617491','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'2','title'=>'asd','short'=>'12','price'=>'123123','price2'=>'2','price3'=>'3','price4'=>'4','price5'=>'5','sort'=>'1','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);
        $this->insert('{{%tb_lablist}}',['id'=>'1354','group_id'=>'1513617491','cat_id'=>'1338883174','sub_id'=>'0','lang'=>'3','title'=>'asda','short'=>'12','price'=>'123123','price2'=>'2','price3'=>'3','price4'=>'4','price5'=>'5','sort'=>'1','sort2'=>'0','def'=>'0','active'=>'1','template'=>'0','text'=>'','norm'=>'','skidka'=>'0','type'=>'1','days'=>'','protsent'=>'30','method'=>'0','turn'=>'0','status'=>'1']);

        $this->createIndex('idx_group_id_7452_00','tb_lablist','group_id',0);
        $this->createIndex('idx_group_id_7452_01','tb_lablist','group_id',0);
        $this->createIndex('idx_short_7452_02','tb_lablist','short',0);
        $this->createIndex('idx_cat_id_7452_03','tb_lablist','cat_id',0);
        $this->createIndex('idx_title_7452_04','tb_lablist','title',0);
        $this->createIndex('idx_lang_7452_05','tb_lablist','lang',0);
    }

    public function safeDown()
    {
        $this->dropTable('{{%tb_lablist}}');
    }
}

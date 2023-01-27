<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$insertarpaginas ="INSERT INTO ugelhuacaybamba.pagina VALUES (1,'FGTRYTR YUYU YTU','<p>&nbsp;UYTUYTU&nbsp; UYTU YU</p>',1,NULL,NULL),
(2,'asdads','asdasda',1,'2023-01-11 08:26:54','2023-01-11 08:26:54'),
(3,NULL,'<p><b>esto e suna prueba </b>hjvjhvjhvhj</p>',1,'2023-01-13 10:26:53','2023-01-13 10:26:53'),
(4,'pagina 4','<p>zkjhkjdfjk <b>fsdfsfsdf</b></p>',1,'2023-01-13 10:30:44','2023-01-13 10:30:44'),
(5,'jhgjhg','<p>holaaaaa esto es una prueba de <b>ins<font color=\"#00ff00\">erccion de p</font>agina webdfbdb <span style=\"background-color: rgb(255, 255, 0);\">llll sdfsfdsf </span>fsdffs</b></p>',1,'2023-01-13 19:00:19','2023-01-14 07:29:29'),
(6,'paginaaaa','<p>asdasdads a<u>sdad</u>sd asddas ddad<b>ffd</b></p>',1,'2023-01-13 20:06:09','2023-01-15 00:08:20'),
(7,NULL,'<p>sdadsasdsadadsa asdasdas</p>',1,'2023-01-16 04:52:47','2023-01-16 04:52:47'),
(8,NULL,'<p>asdasdasd</p>',1,'2023-01-16 04:57:28','2023-01-16 04:57:28'),
(9,NULL,'<p>sdfsf</p>',1,'2023-01-16 04:58:41','2023-01-16 04:58:41'),
(10,NULL,'<p>sdfsfsd</p>',1,'2023-01-16 04:59:27','2023-01-16 04:59:27'),
(11,NULL,NULL,1,'2023-01-17 19:44:25','2023-01-17 19:44:25'),
(12,NULL,NULL,1,'2023-01-19 09:51:31','2023-01-19 09:51:31'),
(13,'CONTACTENOS','<p>INGRESE INFORMACION</p>',1,'2023-01-19 10:00:11','2023-01-19 10:00:11'),
(14,'QUIENES SOMOS','',1,'2023-01-19 10:01:40','2023-01-19 10:05:22'),
(15,'MISION Y VISION','<div class=\"row\"> \r\n             <div class=\"col-md-6\"><div class=\"card\"><div class=\"card-header bg-gray\"><h3 class=\"card-title titulonot_2\"><strong style=\"font-family: inherit; font-size: 1.53125rem;\">MISIÓN</strong><br></h3>\r\n                </div>\r\n                <!-- /.card-header -->\r\n                <div class=\"card-body titulonot_2\" style=\"padding: 25px\">\r\n\r\n                  <p>CONDUCIR Y PROMOVER EL DESARROLLO HUMANO INTEGRAL Y SOSTENIBLE DE LA POBLACION DEL DEPARTAMENTO DE HUÁNUCO, CON UNA GESTION MODERNA, TRANSPARENTE, COMPETITIVA E INCLUSIVA, BRINDANDO BIENES Y SERVICIOS DE CALIDAD, CON ÉNFASIS AMBIENTAL Y LA REDUCCION DE RIEGOS</p>\r\n                </div>\r\n                <!-- /.card-body -->\r\n              </div>\r\n            </div>\r\n\r\n            <div class=\"col-md-6\">\r\n              <div class=\"card\">\r\n                <div class=\"card-header bg-gray\">\r\n                  <h3 class=\"card-title titulonot_2\"><strong>VISIÓN</strong></h3>\r\n                </div>\r\n                <!-- /.card-header -->\r\n                <div class=\"card-body titulonot_2\" style=\"padding: 25px\">\r\n\r\n                  <p>HUÁNUCO TERRITORIO ANDINO AMAZÓNICO INTEGRADO, QUE HA IMPULSADO EL DESARROLLO HUMANO Y LA SOSTENIBILIDAD DE SU ECONOMIA, EN BASE A LA GRANDEZA DE SU BIODIVERSIDAD Y EL RESPETO POR LA INTERCULTURALIDAD</p>\r\n                </div>\r\n                <!-- /.card-body -->\r\n              </div>\r\n            </div>\r\n            \r\n          </div>',1,'2023-01-19 10:07:32','2023-01-21 08:41:47'),
(16,'NUESTRA HISTORIA','<p>Huacaybamba ocupaba el séptimo lugar entre las parroquias de Huamalíes en 1741, con dos anexos: Rundubamba y Huarigancha. Ya en 1788, El caudillaje español del XXXIII Virrey Agustín de Jáuregu y Aldecoa, en una disputa de tierras confirma la existencia de los Centros Poblados de Huacaybamba, Rondobamba y Acobamba<br></p>',1,'2023-01-19 19:05:13','2023-01-19 19:05:13'),
(17,'VALORES','<p>ESTON SON LOS VALORES</p>',1,'2023-01-19 19:30:11','2023-01-19 19:30:11'),
(18,'DIRECTORIO',NULL,1,'2023-01-19 20:11:04','2023-01-19 20:11:04'),
(19,'AREA DE DIRECCION','<p>.</p>',1,'2023-01-19 21:29:24','2023-01-19 21:29:24'),
(20,'AREA DE GESTION PEDAGOGICA',NULL,1,'2023-01-19 21:29:46','2023-01-19 21:29:46'),
(21,'AREA DE GESTION INSTITUCIONAL',NULL,1,'2023-01-19 21:30:22','2023-01-19 21:30:22'),
(22,'AREA DE GESTION ADMINISTRATIVA',NULL,1,'2023-01-19 21:30:37','2023-01-19 21:30:37'),
(23,'ASESORIA JURIDICA',NULL,1,'2023-01-19 21:30:52','2023-01-19 21:30:52'),
(24,'RESOLUCION',NULL,1,'2023-01-19 21:38:34','2023-01-19 21:38:34'),
(25,'DIRECTIVA',NULL,1,'2023-01-19 21:38:44','2023-01-19 21:38:44'),
(26,'OFICIO',NULL,1,'2023-01-19 21:38:52','2023-01-19 21:38:52'),
(27,'OFICIO MULTIPLE',NULL,1,'2023-01-19 21:39:28','2023-01-19 21:39:28'),
(28,'COMUNICADO',NULL,1,'2023-01-19 21:40:29','2023-01-19 21:40:29'),
(29,'FORMATOS',NULL,1,'2023-01-19 21:40:59','2023-01-19 21:40:59'),
(30,'INSTRUMENTOS DE GESTION',NULL,1,'2023-01-19 21:41:11','2023-01-19 21:41:11'),
(31,'EJECUCION PRESUPUESTAL',NULL,1,'2023-01-19 21:41:23','2023-01-19 21:41:23'),
(32,'CAS',NULL,1,'2023-01-19 21:41:45','2023-01-19 21:41:45'),
(33,'CAP',NULL,1,'2023-01-19 21:41:52','2023-01-19 21:41:52'),
(34,'DOCENTE',NULL,1,'2023-01-19 21:42:03','2023-01-19 21:42:03'),
(35,'DIRECTIVO',NULL,1,'2023-01-19 21:42:14','2023-01-19 21:42:14'),
(36,'REASIGNACION',NULL,1,'2023-01-19 21:42:29','2023-01-19 21:42:29');";
    
$insertarmenus = "

INSERT INTO ugelhuacaybamba.menus VALUES 
(1,'NOSOTROS','#',1, '2022-09-13 16:39:32','2023-01-19 09:46:18',NULL,NULL),
(2,'AREAS','#',1,'2022-09-13 16:40:01','2023-01-19 09:46:59',NULL,NULL),
(3,'DOCUMENTOS OFICIALES','#',1,'2022-09-13 16:40:01','2023-01-19 09:49:10',NULL,NULL),
(11,'CONVOCATORIA','http://127.0.0.1:8000/convocatoriaweb',1,'2023-01-13 10:18:07','2023-01-24 00:14:17',NULL,NULL),
(26,'CONTACTENOS','http://127.0.0.1:8000/menus/paginaweb/13',1,'2023-01-19 10:00:11','2023-01-19 10:00:11',13,NULL),
(27,'QUIENES SOMOS','http://127.0.0.1:8000/menus/paginaweb/14',1,'2023-01-19 10:01:40','2023-01-19 10:01:40',14,1),
(28,'MISION Y VISION','http://127.0.0.1:8000/menus/paginaweb/15',1,'2023-01-19 10:07:32','2023-01-19 10:07:32',15,1),
(29,'NUESTRA HISTORIA','http://127.0.0.1:8000/menus/paginaweb/16',1,'2023-01-19 19:05:13','2023-01-19 19:05:13',16,1),
(30,'VALORES','http://127.0.0.1:8000/menus/paginaweb/17',1,'2023-01-19 19:30:11','2023-01-19 19:30:11',17,1),
(32,'AREA DE DIRECCION','http://127.0.0.1:8000/menus/paginaweb/19',1,'2023-01-19 21:29:24','2023-01-19 21:29:24',19,2),
(33,'AREA DE GESTION PEDAGOGICA','http://127.0.0.1:8000/menus/paginaweb/20',1,'2023-01-19 21:29:46','2023-01-19 21:29:46',20,2),
(34,'AREA DE GESTION INSTITUCIONAL','http://127.0.0.1:8000/menus/paginaweb/21',1,'2023-01-19 21:30:22','2023-01-19 21:30:22',21,2),
(35,'AREA DE GESTION ADMINISTRATIVA','http://127.0.0.1:8000/menus/paginaweb/22',1,'2023-01-19 21:30:37','2023-01-19 21:30:37',22,2),
(36,'ASESORIA JURIDICA','http://127.0.0.1:8000/menus/paginaweb/23',1,'2023-01-19 21:30:52','2023-01-19 21:30:52',23,2),
(37,'RESOLUCION','http://127.0.0.1:8000/menus/paginaweb/24',1,'2023-01-19 21:38:34','2023-01-19 21:38:34',24,3),
(38,'DIRECTIVA','http://127.0.0.1:8000/menus/paginaweb/25',1,'2023-01-19 21:38:44','2023-01-19 21:38:44',25,3),
(39,'OFICIO','http://127.0.0.1:8000/menus/paginaweb/26',1,'2023-01-19 21:38:52','2023-01-19 21:38:52',26,3),
(40,'OFICIO MULTIPLE','http://127.0.0.1:8000/menus/paginaweb/27',1,'2023-01-19 21:39:28','2023-01-19 21:39:28',27,3),
(41,'COMUNICADO','http://127.0.0.1:8000/menus/paginaweb/28',1,'2023-01-19 21:40:29','2023-01-19 21:40:29',28,3),
(42,'FORMATOS','http://127.0.0.1:8000/menus/paginaweb/29',1,'2023-01-19 21:40:59','2023-01-19 21:40:59',29,3),
(43,'INSTRUMENTOS DE GESTION','http://127.0.0.1:8000/menus/paginaweb/30',1,'2023-01-19 21:41:11','2023-01-19 21:41:11',30,3),
(44,'EJECUCION PRESUPUESTAL','http://127.0.0.1:8000/menus/paginaweb/31',1,'2023-01-19 21:41:23','2023-01-19 21:41:23',31,3),
(50,'DIRECTORIO','http://127.0.0.1:8000/directorioweb',1,'2023-01-19 21:42:29',NULL,NULL,1);";

    }
}

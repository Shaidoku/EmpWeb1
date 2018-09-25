<?php

use App\Rol;
use App\News;
use App\User;
use App\chats;
use App\Event;
use App\Project;
use App\messages;
use App\Category;
use Carbon\Carbon;
use App\Messagesweb;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::truncate();
        News::truncate();
        User::truncate();
        Chats::truncate();
        Event::truncate();
        Project::truncate();
        Messages::truncate();
        Category::truncate();
        Messagesweb::truncate();

        //Usuarios
        $user =new User;
        $user->foto = '/img/users/a2.jpg';
        $user->names = 'Joan Manuel';
        $user->apeP = 'Ocaña';
        $user->apeM = 'Ortiz';
        $user->edad = '22';
        $user->ocup = 'Estudiante';
        $user->desc = 'Conocimientos en programación, analicis y modelado de S.I...';
        $user->premium = '1';
        $user->tel = '4444575509';
        $user->email = 'JoanOrtizITSLP@outlook.com';
        $user->password = bcrypt('1');
        $user->rol_id = '1';
        $user->save();
        //2
        $user =new User;
        $user->foto = '/img/users/a1.jpg';
        $user->names = 'Jose Alfredo';
        $user->apeP = 'Loredo';
        $user->apeM = 'Canales';
        $user->edad = '21';
        $user->ocup = 'Ensamblador';
        $user->desc = 'Conocimientos en ensamblado, control de calidad...';
        $user->premium = '0';
        $user->tel = '4444746589';
        $user->email = 'Alfredo@outlook.com';
        $user->password = bcrypt('1');
        $user->rol_id = '2';
        $user->save();
        //3
        $user =new User;
        $user->foto = '/img/users/a3.jpg';
        $user->names = 'Ana';
        $user->apeP = 'Alvarado';
        $user->apeM = 'Loera';
        $user->edad = '23';
        $user->ocup = 'Educadora';
        $user->desc = 'Psicologia, educación infantil...';
        $user->premium = '0';
        $user->tel = '4444746589';
        $user->email = 'Ana@outlook.com';
        $user->password = bcrypt('1');
        $user->rol_id = '3';
        $user->save();

        //Projects
        $proyect =new Project;
        $proyect->user_id = '1';
        $proyect->title = 'Tutorias en linea';
        $proyect->desc = 'Tutorias en linea para desempeño academico...';
        $proyect->adv = '80';
        $proyect->need = 'Mas programadores para terminar el codigo.';
        $proyect->save();
        //2
        $proyect =new Project;
        $proyect->user_id = '2';
        $proyect->title = 'Eco Bici';
        $proyect->desc = 'Bici que genera electricidad con el movimiento...';
        $proyect->adv = '65';
        $proyect->need = 'Requiero fondeo para terminar el prototipo.';
        $proyect->save();

        //Chats
        $chat =new Chats;
        $chat->user_id_rem='1';
        $chat->user_id_des='2';
        $chat->save();

        //Messages
        $message =new Messages;
        $message->chat_id='1';
        $message->message='Buen dia Alfredo';
        $message->user_id='1';
        $message->save();
        //2
        $message =new Messages;
        $message->chat_id='1';
        $message->message='Buen dia,';
        $message->user_id='2';
        $message->save();
        //3
        $message =new Messages;
        $message->chat_id='1';
        $message->message='Me interesa tu proyecto';
        $message->user_id='1';
        $message->save();

        //Roles
        $rol =new Rol;
        $rol->name = 'Administrador';
        $rol->save();
        //2
        $rol =new Rol;
        $rol->name = 'Escritor';
        $rol->save();
        //3
        $rol =new Rol;
        $rol->name = 'Contacto';
        $rol->save();
        //4
        $rol =new Rol;
        $rol->name = 'Other';
        $rol->save();
        //5
        $rol =new Rol;
        $rol->name = 'Other';
        $rol->save();
        //6
        $rol =new Rol;
        $rol->name = 'Other';
        $rol->save();
        //7
        $rol =new Rol;
        $rol->name = 'UserApp';
        $rol->save();

        //categorias
        $category = new Category;
        $category->name = "Cultura";
        $category->save();
        //2
        $category = new Category;
        $category->name = "Ciencia y Tecnología";
        $category->save();
        //3
        $category = new Category;
        $category->name = "Ecología";
        $category->save();
        //4
        $category = new Category;
        $category->name = "Economía";
        $category->save();
        //5
        $category = new Category;
        $category->name = "Política";
        $category->save();
        //6
        $category = new Category;
        $category->name = "Salud";
        $category->save();
        //7
        $category = new Category;
        $category->name = "Social";
        $category->save();

        //noticias
        $new = new News;
        $new->category_id = 2;
        $new->title = "Nuevas tecnologias";
        $new->excerpt = "Lanzan los ultimos avances tecnologicos de el 2018...";
        $new->link = "http://www.elfinanciero.com.mx/tech/las-10-nuevas-tecnologias-de-2018";
        $new->img = "/img/noticias/n1.jpg";
        $new->fecha = Carbon::now();
        $new->user_id = 3;
        $new->save();
        //2
        $new = new News;
        $new->category_id = 3;
        $new->title = "Frutos rojos ecológicos y sostenibles";
        $new->excerpt = "La PIME Flor de Doñana prevé producir durante esta campaña 2.000 toneladas de bayas...";
        $new->link = "https://elpais.com/economia/2018/05/16/actualidad/1526481593_932845.html";
        $new->img = "/img/noticias/n2.jpg";
        $new->fecha = Carbon::now();
        $new->user_id = 2;
        $new->save();
        //3
        $new = new News;
        $new->category_id = 7;
        $new->title = "Cerveceros “de olla y pala”";
        $new->excerpt = "Tres emprendedores de Castellón unidos por su pasión cervecera dan pulso a Castelló Beer Factory, un proyecto artesanal que sigue sumando litros y acumulando premios...";
        $new->link = "https://elpais.com/ccaa/2018/05/26/valencia/1527352217_397845.html";
        $new->img = "/img/noticias/n3.jpg";
        $new->fecha = Carbon::now();
        $new->user_id = 3;
        $new->save();
        //4
        $new = new News;
        $new->category_id = 2;
        $new->title = "Los desafíos de emprender en la era digital";
        $new->excerpt = "En todo el mundo, las nuevas tecnologías pueden representar amenazas y oportunidades. ¿Cuál es la mirada de los jóvenes emprendedores en América Latina?...";
        $new->link = "https://elpais.com/internacional/2018/05/03/america/1525362732_996156.html";
        $new->img = "/img/noticias/n4.jpg";
        $new->fecha = Carbon::now();
        $new->user_id = 2;
        $new->save();
        //5
        $new = new News;
        $new->category_id = 7;
        $new->title = "El rentable negocio de invertir en emprendedoras";
        $new->excerpt = "Las mujeres pueden ser cruciales en la generación de riqueza, pero para ello debemos romper el estigma de que un negocio que aporte beneficios sociales no puede ser rentable...";
        $new->link = "https://elpais.com/elpais/2018/04/18/planeta_futuro/1524056570_515846.html";
        $new->img = "/img/noticias/n5.jpg";
        $new->fecha = Carbon::now();
        $new->user_id = 3;
        $new->save();

        //eventos
        $event = new Event;
        $event->title="Financiando el Cambio: La importancia de la sustentabilidad";
        $event->url= uniqid();
        $event->excerpt="Presidente de la Fundación Liderazgo Joven y Director General de RASAVA Group, un grupo de negocios conformado por (CILFORSA, ORGANIQUO, VERDEVENTOS, GLOBAL INSTITUTE FOR STANDARDIZATION y DIVIDENDEE) En CILFORSA. Construcción Sustentable impulsa las construcciones ecológicas hechas con botellas reutilizadas de PET y vidrio.";
        $event->fecha="05/06/2018";
        $event->hora="15:30 Hr";
        $event->linkmaps="https://www.google.com.mx/maps/place/Plaza+Del+Carmen/@22.1411427,-100.957812,14z/data=!4m5!3m4!1s0x842aa2023d46c823:0xbe26fec01c497339!8m2!3d22.1512292!4d-100.9742045";
        $event->costo="0.0";
        $event->link="https://sanluispotosistartupweek2016.sched.com/event/8Dr0/financiando-el-cambio-la-importancia-de-la-sustentabilidad?iframe=no&w=100%&sidebar=yes&bg=no";
        $event->tlf="4447835462";
        $event->user_id = 2;
        $event->save();
        //2
        $event = new Event;
        $event->title="Taller ARDEX - Sesión 2";
        $event->url= uniqid();
        $event->excerpt="ARDEX AMERICAS es una empresa de origen alemán, pionera en productos derivados del cemento que han revolucionado la industria de la construcción por su extraordinaria calidad y el costo - beneficio que trae a los contratistas por la alta resistencia de sus productos, rápidos tiempos de secado, fácil preparación y aplicación y sobre todo, por la confianza que inspira la empresa al otorgar garantías sobre proyectos enteros.";
        $event->fecha="12/06/2018";
        $event->hora="12:00 Hr";
        $event->linkmaps="https://www.google.com.mx/maps/place/Centro+de+las+Artes+de+San+Lu%C3%ADs+Potos%C3%AD+Centenario/@22.1411427,-100.957812,14z/data=!4m5!3m4!1s0x842aa20fd0863099:0x5351387535ec756f!8m2!3d22.1388273!4d-100.9706211";
        $event->costo="149.99";
        $event->link="https://sanluispotosistartupweek2016.sched.com/event/8EwF/taller-ardex-sesion-2?iframe=no&w=100%&sidebar=yes&bg=no";
        $event->tlf="4447238274";
        $event->user_id = 3;
        $event->save();
        //3
        $event = new Event;
        $event->title="Emprendiendo con Innovación";
        $event->url= uniqid();
        $event->excerpt="...";
        $event->fecha="23/06/2018";
        $event->hora="17:15 Hr";
        $event->linkmaps="https://www.google.com.mx/maps/place/Universidad+Potosina/@22.1492118,-100.9598719,15z/data=!4m5!3m4!1s0x0:0xd079aa952c936f93!8m2!3d22.1486356!4d-100.9714419";
        $event->costo="0.0";
        $event->link="https://sanluispotosistartupweek2016.sched.com/event/82Ty/emprendiendo-con-innovacion?iframe=no&w=100%&sidebar=yes&bg=no";
        $event->tlf="4448902341";
        $event->user_id = 2;
        $event->save();

        //mensajes web
        $messagesweb = new Messagesweb;
        $messagesweb->name= "Alfredo Canales";
        $messagesweb->email= "Alfredo@outlook.com";
        $messagesweb->asunto= "Formar parte de la comunidad";
        $messagesweb->mensaje= "¿Como puedo formar parte de la comunidad de emprendedores S.L.P.?";
        $messagesweb->fecha= now();
        $messagesweb->save();
        //mensajes 2
        $messagesweb = new Messagesweb;
        $messagesweb->name= "Ana Lara";
        $messagesweb->email= "Ana@outlook.com";
        $messagesweb->asunto= "Buco fondeo";
        $messagesweb->mensaje= "¿Como pueden apoyarme en la difucion de mi proyecto para lograr un fondeo?";
        $messagesweb->fecha= now();
        $messagesweb->save();
        //mensajes 3
        $messagesweb = new Messagesweb;
        $messagesweb->name= "Luis Mata";
        $messagesweb->email= "Luis@outlook.com";
        $messagesweb->asunto= "Formar una alianza";
        $messagesweb->mensaje= "Me gustaria que mi micro empresa formara una alianza con emprendedores S.L.P.";
        $messagesweb->fecha= now();
        $messagesweb->save();
    }
}

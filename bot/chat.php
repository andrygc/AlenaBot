<!-- 
          ___   _       _____   __   _       ___   _____   _____   _____  
         /   | | |     | ____| |  \ | |     /   | |  _  \ /  _  \ |_   _| 
        / /| | | |     | |__   |   \| |    / /| | | |_| | | | | |   | |   
       / / | | | |     |  __|  | |\   |   / / | | |  _  { | | | |   | |   
      / /  | | | |___  | |___  | | \  |  / /  | | | |_| | | |_| |   | |   
     /_/   |_| |_____| |_____| |_|  \_| /_/   |_| |_____/ \_____/   |_|   

                    ..::AlenaBot::..  INFORMATION PANEL
.---------------------------------------------------------------------------.
|       Developer: Andry Noilien Guzmán Cardoza                             |
|       Phone: +5358511612                                                  |
|       Email: andrynoilien123@nauta.cu | andrynoilien@gmail.com            |
|       WhatsApp: +5358511612                                               |
|       Telegram: +5358511612                                               |
|       Info: http://www.facebook.com/Andry Noilien Guzmán Cardoza          | 
|             http://www.twitter.com/@AndryCardoza                          |
|       File: chat.php                                                      |
| ------------------------------------------------------------------------- |
|       Company: CommunityWeb Inc.                                          |
|       CommunityWeb (c) 2015-2016, Bad Boy. All Rights Reserved.           |
|       CommunityWeb (c) 2016-2019, Bad Boy. All Rights Reserved.           |
|       CommunityWeb (c) 2019-2021, Bad Boy. All Rights Reserved.           |
'---------------------------------------------------------------------------'

-->

<?php
include "bot.php";
$bot = new Bot;
$questions = [
    //ayuda
    '/help' =>'Para que funcione debes escribir los comandos que me programaron. Si quieres ver mis comandos ejecuta <i>/cmds</i><br><br><b>Ejemplos de comandos:</b><br>/que es alena<br>/funcionamiento de alena',
    '/cmds' =>'<b>***COMANDOS DE ALENA***</b><br><br><b>AYUDA:</b><br>/help<br><br><b>NOVEDADES:</b><br>/novedades<br><br><b>SALUDOS:</b><br>/hola<br>/bien gracias<br>/bien<br>/un saludo<br>/como estas<br><br><b>ACERCA DE ALENA:</b><br>/como te llamas<br>/cual es tu nombre<br>/tienes nombre<br>/quien eres<br>/que eres<br>/que es alena<br>/quien te creo<br>/quieres a bad boy<br>/quien es bad boy<br>/acerca de bad boy<br>/como es bad boy<br>/como estas creada<br><br><b>ACERCA DE ALACHAT:</b><br>/alachat<br>/que es alachat<br>/acerca de alachat<br><br><b>FUNCIONAMIENTO:</b><br>/funcionamiento de alena<br>/funcionamiento de alachat<br><br><b>REGISTRO:</b><br>/registro<br><br><b>ACCESO:</b><br>/acceso<br><br><b>BANEO:</b><br>/baneo<br><br><b>RANKING:</b><br>/ranking<br><br><b>TIENDA:</b><br>/tienda<br><br><b>GRUPOS:</b><br>/grupos<br>/grupos de alachat<br>/bot<br><br><b>ESTRELLAS:</b><br>/estrellas<br><br><b>CORAZONES:</b><br>/corazones<br><br><b>PRIVILEGIOS:</b><br>/privilegios<br><br><b>PREFERENCIAS:</b><br>/preferencias<br><br><b>DESCARGAS:</b><br>/descargas<br><br><b>M&Uacute;SICA:</b><br>/musica<br><br><b>VIDEOS:</b><br>/videos<br><br><b>JUEGOS:</b><br>/juegos<br><br><b>FICHEROS:</b><br>/ficheros<br><br><b>AVATARES:</b><br>/avatar<br><br><b>CLAVES:</b><br>/clave<br><br><b>DESPEDIDAS:</b><br>/adios<br>/hasta la proxima<br>/chao<br>/nos vemos<br>/bye<br>/see you<br><br><b>OTROS:</b><br>/si<br>/si, muchas gracias<br>/no<br>/no, no mucho',
    
    //novedades
    '/novedades' =>'<b>MIS NUEVAS MEJORAS Y FUNCIONES EN LA v1.4:</b><br><br><b>1. Nuevos comandos agregados:</b><br>/ficheros<br>/avatar<br>/clave<br>/privilegios<br>/preferencias<br>/baneo<br><br><b>2. Cambios en mi c&oacute;digo fuente:</b><br>• Me cambiaron algunos c&oacute;digos que estaban impidiendo mi &oacute;ptimo funcionamiento lo que me permitir&aacute; tener nuevas funciones en las versiones posteriores.<br><br><b>3. Correcciones:</b><br>• Funcionamiento interno de Alena.',
    
    //saludo
    '/hola' =>'Holaaa que tal, como estas!',
    '/bien gracias' =>'Que bien! En que t puedo ayudar.',
    '/bien' =>'Que bien! En que te puedo ayudar.',
    '/un saludo' =>'Como te va.',
    '/como estas' =>'Feliz de poder ayudarte.',
    
    //acerca de AlenaBot
    '/como te llamas' =>'Soy Alena y estoy aqu&iacute; para ayudarte en lo que necesites.',
    '/cual es tu nombre' =>'Soy Alena y estoy aqu&iacute; para ayudarte en lo que necesites.',
    '/tienes nombre' =>'Me llamo Alena y estoy para ayudarte.',
    '/quien eres' =>'Soy Alena y estoy para ayudarte.',
    '/que eres' =>'Soy un bot creado para la ayuda de los usuarios que visitan αℓα¢нαт.',
    '/que es alena' =>'Soy un bot creado para la ayuda de los usuarios que visitan αℓα¢нαт.',
    '/quien te creo' =>'Me cre&oacute; <b>Bad Boy</b> especialmente para αℓα¢нαт.',
    '/quieres a bad boy' =>'Claro que lo quiero, es mi mejor amigo y compañero, gracias a &eacute;l hoy puedo disfrutar junto a ustedes.',
    '/quien es bad boy' =>'Bad Boy es uno de los creadores del proyecto αℓα¢нαт y mi creador, es el que me est&aacute; enseñando para responder las preguntas que los usuarios me hacen, espero que lo sigan ayudando para que pueda enseñarme las respuestas correctas y poder ayudarlos a todos ustedes en la estancia en nuestro sitio.',
    '/acerca de bad boy' =>'Bad Boy es uno de los creadores del proyecto αℓα¢нαт y mi creador, es el que me est&aacute; enseñando para responder las preguntas que los usuarios me hacen, espero que lo sigan ayudando para que pueda enseñarme las respuestas correctas y poder ayudarlos a todos ustedes en la estancia en nuestro sitio.',
    '/como es bad boy' =>'Bad Boy es un chico super genial, le gusta conocer muchas personas y llevarse bien con todos, espero que lo conozcas y lo quieras tanto como yo.',
    '/como estas creada' =>'Bad Boy me cre&oacute; usando lenguaje PHP, javascript y css.',
    
    //acerca de alachat
    '/alachat' => 'Alachat es una plataforma de intercambio entre los usuarios que se suscriban con la cual podr&aacute;n hacer y conocer muchas amistades.',
    '/que es alachat' => 'Alachat es una  plataforma de intercambio entre los usuarios que se suscriban con la cual podr&aacute;n hacer y conocer muchas amistades.',
    '/acerca de alachat' => 'Alachat es una  plataforma de intercambio entre los usuarios que se suscriban con la cual podr&aacute;n hacer y conocer muchas amistades.',
    
    //funcionamiento
    '/funcionamiento de alena' =>'Bad Boy me program&oacute; con comandos que tienen informaci&oacute;n sobre αℓα¢нαт y sobre m&iacute;, para funcionar debes escribir los comandos que me programaron y yo te responder&eacute;.',
    '/funcionamiento de alachat' =>'Para utilizar alachat tienes que tener una cuenta registrada con la cual tendras acceso al sitio, una vez dentro podr&aacute;s comunicarte con todos los usuarios que esten conectados. Para conversar con un usuario debes dar clic sobre su nombre donde podr&aacute;s comunicarte con &eacute;l en privado. En la sala p&uacute;blica todos los usuarios pueden comunicarse entre ellos.<br><br> αℓα¢нαт cuenta con emojis y stickers los cuales podr&aacute;n usar a su antojo, tambi&eacute;n tiene enlaces a sitios de descargas, m&uacute;sica, videos y juegos, adem&aacute;s de la posibilidad de enviar ficheros pero solo por privado, no est&aacute; permitido enviar ficheros  en la sala p&uacute;blica. <br><br>Los mensajes enviados por los usuarios se acumular&aacute;n y servir&aacute;n como su dinero en el sitio, con el cual podr&aacute;n comprar por ahora los tipos de fuentes, as&iacute; como ser&aacute;n los determinantes en el posicionamiento en el ranking de alachat. Los mensajes pueden ser transferidos a otros usuarios mientras &eacute;stos est&eacute;n conectados.',
        
    //registro
    '/registro' => 'Si no tienes una cuenta puedes copiar y abir el siguiente enlace para registrarte:<br><b><i>https://43.34.1.17/alachat/index.php?acion=register&app_web=2.3</i></b>',

    //acceso
    '/acceso' => 'Copia y abre el siguiente enlace para acceder a alachat: <br><b><i>https://43.34.1.17/alachat/index.php?acion=login&app_web=2.3</i></b>',
    
    //baneao
    '/baneo' => 'En desarrollo...',
    
    //ranking
    '/ranking' => 'Para posicionarse en el <b>TOP10</b> de αℓα¢нαт se medir&aacute; la cantidad de mensajes que tenga cada usuario, los 10 usuarios que m&aacute;s mensajes tengan ser&aacute;n los que se muestren en el ranking del sitio.',
    
    //tienda
    '/tienda' => 'En la tienda de αℓα¢нαт por el momento solo se pueden comprar los tipos de fuentes de las letras con las que los usuarios escriben, el quipo de desarrollo est&aacute; trabajando para que los usuarios tambi&eacute;n puedan comprar los paquetes de emojis y stickers, en αℓα¢нαт tus mensajes funcionan como tu dinero por lo que cada mensaje que escribas equivale a 1$ que aumentar&aacute;s.',
    
    //grupos
    '/grupos' => 'αℓα¢нαт consta con 16 grupos y un grupo especial solo para los desarrolladores y administradores superiores.',
    '/grupos de alachat' => 'Los grupos de alachat son los siguientes:<br><b>-</b> Mindundi,<br><b>-</b> Estrella,<br><b>-</b> Super Estrella,<br><b>-</b> Estrella Permanente,<br><b>-</b> Prince,<br><b>-</b> Princess,<br><b>-</b> Destacado,<br><b>-</b> Chico VIP,<br><b>-</b> Chica VIP,<br><b>-</b> Promotor,<br><b>-</b> Reina,<br><b>-</b> Operador,<br><b>-</b> Supervisor,<br><b>-</b> STAFF,<br><b>-</b> Admin Chat,<br><b>-</b> Admin General,<br><b>-</b> Programador General',
    '/bot' => 'αℓα¢нαт tiene un bot interno que asciende autom&aacute;ticamente a los usuarios cuando llegan a cierta cantidad de mensajes, cada grupo tiene establecido una cantidad de mensajes, cuando el usuario llega a este l&iacute;mite el bot lo asciende autom&aacute;ticamente.<br><b>Mensajes por grupo:</b><br>• Mindundi: 0-250 SMS<br>• Estrella: 250-500 SMS<br>• Super Estrella: 500-750 SMS<br>• Estrella Permanente: 750-1000 SMS<br>• Prince & Princess: 1000-2000 SMS<br>• Destacado: 2000-4000 SMS<br>• Chico VIP & Chica VIP: 4000-6000 SMS<br>• Promotor: +6000 SMS<br>• Los dem&aacute;s grupos son asignados por los administradores.',

        
    //estrellas
    '/estrellas' => 'Las estrellas llegan hasta las 5 mientras vas ascendiendo en grupos, los administradores te las asignan de acuerdo al grupo al que asciendas, cuando se registra un usuario del g&eacute;nero masculino se le asigna 1 estrella autom&aacute;ticamente.',
    
    //corazones
    '/corazones' => 'Los corazones llegan hasta los 5 mientras vas ascendiendo en grupos, los administradores te los asignan de acuerdo al grupo al que asciendas, cuando se registra un usuario del g&eacute;nero femenino se le asigna 1 coraz&oacute;n autom&aacute;ticamente.',
    
    //privilegios
    '/privilegios' => 'αℓα¢нαт consta con 8 privilegios los cuales se le otorgan a los usuarios de acuerdo a su funci&oacute;n. Los privilegios de αℓα¢нαт son los siguientes:<br><b>- Ver IP:</b> <i>permite al usuario ver las direcciones IP de los dem&aacute;s usuarios.</i><br><b>- Expulsar:</b> <i>permite al usuario expulsar a los dem&aacute;s usuarios, exceptuando a los administradores.</i><br><b>- Banear:</b> <i>permite al usuario banear a los dem&aacute;s usuarios, exceptuando a los administradores.</i><br><b>- Desbanear:</b> <i>privilegio solo para los administradores principales y operadores que permite desbanear a los usuarios baneados.</i><br><b>- Mutear/Desmutear:</b> <i>permite al usuario poner mudo a otro usuario o quitarle el muteo.</i><br><b>- Compartir ficheros:</b> <i>permite al usuario compartir ficheros con los dem&aacute;s usuarios.</i><br><b>- Cambiar grupos/estrellas:</b> <i>privilegio solo para los administradores principales y operadores que permite cambiar los grupos y las estrellas/corazones de los dem&aacute;s usuarios.</i><br><b>- Cambiar privilegios:</b> <i>privilegio solo para los administradores principales que permite el control total de los privilegios y funciones del sitio.</i>',
    
    //preferencias
    '/preferencias' => 'Todos los usuarios registrados en αℓα¢нαт tienen las siguientes preferencias en la configuraci&oacute;n de su cuenta:<br><b>- No aceptar privados:</b> <i>preferencia del usuario para no recibir mensajes en su privado.</i><br><b>- Sin sonidos:</b> <i>preferencia del usuario para desactivar los sonidos de las notificaciones.</i>',

    //descargas
    '/descargas' => 'αℓα¢нαт cuenta con enlaces a sitios de descargas a trav&eacute;s de botones, cuando los botones est&eacute;n de color azul el enlace estar&aacute; disponible, si los botones est&aacute;n de color rojo el enlace no funcionar&aacute;.',
    
    ///musica
    '/musica' => 'αℓα¢нαт tiene enlaces a sitios de m&uacute;sica en l&iacute;nea donde podr&aacute;n escuchar temas variados y actualizados de m&uacute;sicos y grupos nacionales e internacionales. Cuando los botones est&eacute;n de color azul los enlaces estar&aacute;n disponibles, si est&aacute;n de color rojo los enlaces no funcionar&aacute;n.',
    
    //videos
    '/videos' => 'El equipo de desarrollo de αℓα¢нαт se encuentra trabajando en los enlaces a los videos, donde podr&aacute;n ver temas variados y actualizados de m&uacute;sicos y grupos nacionales e internacionales.<br><br><b>ESP&Eacute;RENLO MUY PRONTO...</b>',
   
    //juegos
    '/juegos' => 'El equipo de desarrollo de αℓα¢нαт se encuentra trabajando en el sitio de juegos de la plataforma, con un total aproximado de 25 juegos, el proyecto ya se encuentra en la etapa de revisi&oacute;n y dentro de poco estar&aacute; disponible para el disfrute de todos.<br><br><b>ESP&Eacute;RENLO MUY PRONTO...</b>',
    
    //ficheros
    '/ficheros' => 'En αℓα¢нαт los usuarios pueden transferir ficheros solamente por el privado, en la Sala P&uacute;blica no est&aacute; permitida la transferencia de archivos. Los ficheros permitidos son:<br>• *.jpg<br>• *.jpeg<br>• *.gif<br>• *.png',
    
    //avatares
    '/avatar' => 'Los usuarios podr&aacute;n utilizar avatares en formato <b>jpg</b>, <b>jpeg</b>, <b>gif</b> o <b>png</b> que no sean vulgares, excluyentes, que infieran de forma directa o no su preferencia sexual, propagand&iacute;sticos, pol&iacute;tico, que puedan prestarse para su interpretaci&oacute;n expl&iacute;cita o con un doble sentido.',
    
    //claves
    '/clave' => 'Se recomienda no usar como clave el mismo nombre de usuario, preferentemente elegir una clave compleja dif&iacute;cil de adivinar por otro usuario para evitar su p&eacute;rdida.',
    
    //despedida
    '/adios' =>'Cuidate, espero haberte ayudado.',
    '/hasta la proxima' =>'Nos vemos pronto.',
    '/chao' =>'Cuidate.',
    '/nos vemos' =>'Te estare esperando.',
    '/bye' =>'Good bye ♥',
    '/see you' =>'See you later ♥',
    
    //otros
    '/si' =>'Gracias!!!',
    '/si, muchas gracias' =>'De nada!!!',
    '/no' =>'Lo siento mucho!!!',
    '/no, no mucho' =>'Oh!!!, cuanto lo siento!!!',
    '/start' => 'En desarrollo...',
    
    //comandos de alachat
    '/show.alachat.cmds' => '<b>***COMANDOS DE ALACHAT***</b><br>/mudo -> desmutea la Sala P&uacute;blica.<br>/mudo # -> mutea la Sala P&uacute;blica # minutos.<br>/aviso "Hola" -> envia aviso de "Hola" a la Sala P&uacute;blica.<br>/banner nombre.ext -> env&iacute;a banner a la Sala P&uacute;blica.<br>/pw -> otorga todos los privilegios.',
    
    //comandos de alena
    '/show.alena.cmds' =>'<b>***TODOS MIS COMANDOS***</b><br><br><b>AYUDA:</b><br>/help<br>/cmds<br><br><b>NOVEDADES:</b><br>/novedades<br><br><b>SALUDOS:</b><br>/hola<br>/bien gracias<br>/bien<br>/un saludo<br>/como estas<br><br><b>ACERCA DE ALENA:</b><br>/como te llamas<br>/cual es tu nombre<br>/tienes nombre<br>/quien eres<br>/que eres<br>/que es alena<br>/quien te creo<br>/quieres a bad boy<br>/quien es bad boy<br>/acerca de bad boy<br>/como es bad boy<br>/como estas creada<br><br><b>ACERCA DE ALACHAT:</b><br>/alachat<br>/que es alachat<br>/acerca de alachat<br><br><b>FUNCIONAMIENTO:</b><br>/funcionamiento de alena<br>/funcionamiento de alachat<br><br><b>REGISTRO:</b><br>/registro<br><br><b>ACCESO:</b><br>/acceso<br><br><b>BANEO:</b><br>/baneo<br><br><b>RANKING:</b><br>/ranking<br><br><b>TIENDA:</b><br>/tienda<br><br><b>GRUPOS:</b><br>/grupos<br>/grupos de alachat<br>/bot<br><br><b>ESTRELLAS:</b><br>/estrellas<br><br><b>CORAZONES:</b><br>/corazones<br><br><b>PRIVILEGIOS:</b><br>/privilegios<br><br><b>PREFERENCIAS:</b><br>/preferencias<br><br><b>DESCARGAS:</b><br>/descargas<br><br><b>M&Uacute;SICA:</b><br>/musica<br><br><b>VIDEOS:</b><br>/videos<br><br><b>JUEGOS:</b><br>/juegos<br><br><b>FICHEROS:</b><br>/ficheros<br><br><b>AVATARES:</b><br>/avatar<br><br><b>CLAVES:</b><br>/clave<br><br><b>DESPEDIDAS:</b><br>/adios<br>/hasta la proxima<br>/chao<br>/nos vemos<br>/bye<br>/see you<br><br><b>OTROS:</b><br>/si<br>/si, muchas gracias<br>/no<br>/no, no mucho<br>/start',
        
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Opss!!, no puedo responder eso, recuerda que a&uacute;n estoy aprendiendo...");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}

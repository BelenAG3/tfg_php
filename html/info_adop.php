<?php
include '../conexion.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>bootstrap - introducción</title>
    
        <meta name="robots" content="noindex, nofollow">
        <meta name="title" content=" ">
        <meta name="description" content=" ">
        <meta name="keywords" content=" ">
        <meta name="author" content=" ">


<!-- Para utilizar la libreria de bootstrap "al vuelo"-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Para indicar que la página web tiene que adaptarse para todos los dispotivos -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- <link rel="stylesheet" href="css/home.css"> -->

        <style>
            * {
                box-sizing: border-box;
            }

            img {
                width: 100%;
            }

            .expli{               
                background-color: rgb(219, 181, 154);
                padding: 1rem 1rem 1rem 1rem;
                /*Con este estilo, indico  unas medidas fijas como margen interior del texto
                */
            }


            .carousel img {
                width: 100%;
                /*height: 40vh;*/
                object-fit: cover;
            }


            .menu1{               
                background-color: rgb(161, 55, 223);
            }
            .menu1 a{color: beige;}



            .menu2{               
                background-color: rgb(61, 223, 55);
            }
            .menu2 a{color: beige;}

            .submenu2{               
                background-color: rgb(187, 223, 55);
            }
            .submenu2 a{color: rgb(3, 3, 3);}



        </style>
    
    
    </head>
    <body >

        


        <div class="container-fluid border"></div>

            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                <!-- Se crea el boton para el colapso -->
                <a class="navbar-brand" href="../index.php" style="color: #59C3CE;">inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuppa2">
                    Menú
                </button>

                <!-- Indicamos al menu que sea "colapsable", es decir, "encogible" con las clases collapse -->
                <div class="collapse navbar-collapse" id="menuppa2">
                    <ul class="navbar-nav" >
                        <img style="width: 20%;" src="../Home/logoOf.png">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: #59C3CE;">Pawffé</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="sobre_nosotros.php" style="color: #59C3CE;">Sobre nosotros</a></li>
                                <li><a class="dropdown-item" href="socios.php" style="color: #59C3CE;">Socios</a></li>
                                <li><a class="dropdown-item" href="galeria.php" style="color: #59C3CE;">Galería</a></li>
                                <li><a class="dropdown-item" href="eventos.php" style="color: #59C3CE;">Eventos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: #59C3CE;">Perros y gatos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="perros.php" style="color: #59C3CE;">Perros</a></li>
                                <li><a class="dropdown-item" href="gatos.php" style="color: #59C3CE;">Gatos</a></li>
                                <li><a class="dropdown-item" href="adopcion.php" style="color: #59C3CE;">Adopción</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- En esta opcion no se ha añadido la nuefva propiedad -->
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  href="#" style="color: #59C3CE;">Servicios</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="menu.php" style="color: #59C3CE;">Menú</a></li>
                                <li><a class="dropdown-item" href="comida.php" style="color: #59C3CE;">Comida</a></li>
                                <li><a class="dropdown-item" href="accesorios.php" style="color: #59C3CE;">Accesorios</a></li>
                                <li><a class="dropdown-item" href="juguetes.php" style="color: #59C3CE;">Juguetes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php" style="color: #59C3CE;">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reservas.php" style="color: #59C3CE;">Reserva</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <div class= "container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <h2  id="principio"><b>Proceso de adopción</b></h2>
                    <p>Nuestro proceso de adopción es el que os definimos a continuación, con todo lujo de detalles. Tiene un coste total de 160€ (que son los conceptos que os detallamos a continuación) para cualquiera de los gatos y perros que pertenecen a los diferentes refugios con los que colaboramos, y son entregados con todo el protocolo veterinario realizado. El proceso tiene una duración variable, dependiendo de cada familia y cada gato, pudiendo ser mayor o menor en función de cada caso concreto.</p>
                    <p>Así surge este espacio innovador, en pleno corazón de Madrid, donde poder disfrutar de la compañía, el juego y el cariño de nuestros perros y gatos. Un lugar acogedor y basado en el bienestar, donde los gatos y perros pueden estar colmados de caricias y entretenimiento, y son ayudados a recuperarse de las penurias que han pasado hasta llegar a nuestro espacio. Las personas que vienen pueden interactuar con ellos y conocerlos a fondo, de cara a una posible adopción. Porque, aunque no es necesario venir con la idea de incrementar la familia, sí que se crea una atmósfera que invita a enamorarse y adoptar, de manera que encontrarnos hogares definitivos para nuestros gatos y perros, lo que nos permite seguir ayudando a muchos otros más.</p>
                    <h2 style="color: #59C3CE;"><b>El proceso de adopción</b></h2>
                    <p>Puede que estés interesado en un gato o perro en concreto, o que te gusten todos tanto, tanto, que necesites un poco de ayuda por nuestra parte para saber cuál congeniaría mejor contigo y tu ritmo de vida.</p>
                    <br>
                    <p>En cualquiera de los dos casos, nos gusta facilitarte toda la información de la que disponemos de todos nuestros perros y gatos. Te informaremos de manera completamente transparente de su edad, origen, estado de salud, personalidad, necesidades…</p>
                    <h2 style="color: #FFBD59;">Entrevista online</h2>
                    <p>Cada gato y perro es un universo en sí mismo, y cada familia (e incluso miembros de la misma), también. Intentar que encajen en su energía, vida diaria, expectativas, etc., es algo que beneficiará a todos en el proceso de introducir un nuevo miembro al hogar.</p>
                    <p>Es por ello que es tan importante para nosotros esta entrevista personal. Persigue varios objetivos. El primero, conoceros lo máximo posible, para asegurarnos de que si os ha enamorado alguno de nuestros gatos o perros, sepamos que encaja o, en caso de que no sea así o estéis abiertos a nuestro asesoramiento, hablaros de los que más adecuados para vuestras vidas.Segundo, responder todas vuestras dudas sobre la tenencia responsable de un gato o perro. Cualquier pregunta que tengas, siempre tenemos nuestro correo a vuestra disposición, durante toda la vida del animal. Pero sí es cierto que ahora se está en un punto decisivo, de si se adopta o no, y a quién de todos los perros o gatos que tenemos en adopción.Y, tercero, y muy importante, que os hablemos de nuestros gatos y perros: estado de salud, personalidad, expectativas en un hogar… Nuestro trabajo es conocer a nuestros gatos y perros e intentar transmitiros esa información a las familias.</p>
                    <h2 style="color: #59C3CE;"><b>Comprometer al perro o gato</b></h2>
                    <p>En el momento en que todos estamos seguros de seguir adelante, pedimos que se abone la Gestión de la Adopción. Es un importe de 130€ por gato o perro, que no corresponde a un pago por el animal, ni tampoco a los tratamientos veterinarios que se le hayan aplicado. Este importe corresponde a la gestión administrativa: confección de informes de salud, contratos de adopción, gestión de la titularidad visitas veterinarias extraordinarias, etc.</p>
                    <p>Realizar todas estas gestiones llevan una gran inversión de tiempo y esfuerzo por parte del equipo de la asociación. Este importe no compensa en absoluto lo que nosotros hemos podido invertir en el gato en gasto económico y tiempo, pero ayuda a que podamos seguir ayudando a más y más gatos y perros.</p>
                    <p>En añadido, en el momento en que tú adquieres la Gestión de la Adopción, el gato que hemos decidido que va a ser tu nuevo familiar, quedará bloqueado para ti. Físicamente seguirá con nosotros, hasta su recogida, pero ya no se aceptarán más solicitudes para él. El gato o perro será tuyo, siempre y cuándo cumplas con el proceso de adopción pactado.</p>
                    <h2 style="color: #FFBD59;"><b>Curso básico del gato y perro</b></h2>
                    <p>El saber no ocupa lugar, y siempre hay cosas nuevas por aprender (¡incluso nosotros seguimos aprendiendo cada día!). Para adoptar a cualquier gato o perro que haya pisado nuestras instalaciones, es imprescindible realizar esta formación.</p>
                    <br>
                    <p>Son algo más de 3 horas de duración total, donde te ofrecemos una visión general de qué es un gato y perro, sus necesidades básicas, nutrición, salud, territorio, comunicación… Una información muy valiosa que te ayudará en esta nueva etapa de vuestra vida juntos.</p>
                    <br>
                    <p>Este curso lo podrás encontrar, de forma completamente gratuita, dentro del área de eventos y al que podrás acceder desde la web. Está dividido en 10 cómodas charlas, e iremos añadiendo más contenido que te pueda ser útil.</p>
                    <p>Una vez finalices las charlas, tendrás acceso a un test para comprobar que has estado atento y la información se ha comprendido. No es un examen, pero sí se necesita un mínimo de aciertos que demuestren que has visto el curso, y que le has prestado algo de atención… Si después de realizar el curso tienes alguna duda, no te cortes en preguntar!</p>
                    <h2 style="color: #59C3CE;"><b>Adopción</b></h2>
                    <p>Una vez todo lo anterior esté realizado, nos veremos en Pawffe para efectuar la adopción en sí misma. Intentamos programar esta fecha según las necesidades de nuestra colonia de gatos y perros y la disponibilidad del adoptante, ya solo te quedará llevarte a tu nuevo compañero, conoceros, haceros amigos y disfrutar el uno del otro.</p>
                    <br>
                    <p>Te prepararemos toda la documentación que tengamos del gato o perro respecto a su salud, así como recibirás valiosos e individualizados consejos para su adaptación al nuevo hogar. Te entregaremos la cartilla sanitaria, firmaremos un contrato de adopción y realizaremos el cambio de titularidad del gato o perro. Es imprescindible que a la recogida acuda el nuevo propietario legal, puesto que no es legal entregarlo a un tercero. </p>
                    <p>Con la adopción incluimos una pipeta desparasitante, así como un suplemento para reforzar su sistema inmunitario. Además, tendrás acceso a los productos en los que nosotros confiamos, tanto alimento, transportines, arena y, por supuesto, nuestro asesoramiento.</p>
                </div>  
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <a href="#principio"><img style="width: 8%;" src="../menu/boton.png" alt=""></a>
                </div>
            </div>
        </div>

        <div class="container-sm" style="background-color: #59C3CE; padding-top: 2%; margin-top: 2%;">
            <div class="row">
                <div class="col-sm-6 horario">
                    <h2><n>Horario:</n></h2>
                    <p>Lunes: de 16 a 21h</p>
                    <p>Martes - Viernes: de 11 a 14h y de 16 a 21h</p>
                    <p>Sábado y domingo: de 11 a 21h</p>
                    <p>Consulta el sistema de reservas para comprobar disponibilidad y realizar una reserva para visitarnos</p>
                    <img class="redes" src="../Home/redes.png"  alt="">
                </div>
                
                <div class="col-sm-2" >
                    <h2><n>Pawffé</n></h2>
                    <p>C/fffffffffffff</p>
                    <p>28000 Madrid</p>
                    <p>Tel: 000 00 00 00</p>
                    <p>Email: info@pawffe.es</p>
                </div>
                <div class="col-sm-4">
                    <img src="../Home/mapa_peque.PNG"  alt="">
                </div>
            </div>
        </div>
    </body>
</html>
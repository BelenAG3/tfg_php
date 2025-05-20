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

        


        <div class="container-fluid border" ></div>

            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                <!-- Se crea el boton para el colapso -->
                <a class="navbar-brand" href="../index.php" style="color: #59C3CE;">inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuppa2">
                    Menú
                </button>

                <!-- Indicamos al menu que sea "colapsable", es decir, "encogible" con las clases collapse -->
                <div class="collapse navbar-collapse" id="menuppa2" >
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

        <div class="container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <img class="f_home" src="../reserva/banner_reserva1.PNG" alt="">
                </div>
            </div>
        </div>

        <div class="container-sm">
            <div class="row">
                <div class="col-sm-6">
                    <p><b>Nombre</b></p>
                </div>
                <div class="col-sm-6">
                    <p><b>Apellido</b></p>
                </div>
            </div>
        </div>

        <div class="container-sm">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="name" value="" required><br><br>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="surname" value="" required><br><br>
                </div>
            </div>
        </div>

        <div class="container-sm">
            <div class="row">
                <div class="col-sm-6">
                    <p><b>Fecha de reserva</b></p>
                </div>
                <div class="col-sm-6">
                    <p><b>Télefono</b></p>
                </div>
            </div>
        </div>

        <div class="container-sm">
            <div class="row">
                <div class="col-sm-6">
                    <input type="date" name="rechaReserv"><br><br>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="phone" value="" required><br><br>
                </div>
            </div>
        </div>
        
        <div class="container-sm">
            <div class="row">
                <div class="col-sm-3">
                    <p><b>Adultos</b></p>
                </div>
                <div class="col-sm-3">
                    <p><b>Niños</b></p>
                </div>
                <div class="col-sm-6">
                    <p><b>Télefono</b></p>
                </div>
            </div>
        </div>

        <div class="container-sm">
            <div class="row">
                <div class="col-sm-3">
                    <input type="text" name="adulto" value="" required><br><br>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="kids" value="" required><br><br>
                </div>
                <div class="col-sm-6">
                    <p><b>Comentario</b></p>
                    <p style="background-color: #EFEFEF;">Reserva para Pawffé para una estancia estimada de 1 hora de duración. En caso de demorarte en tu llegada, es posible que no puedas disfrutar el tiempo completo, por lo que rogamos puntualidad. Te recordamos que el precio de la experiencia por persona es de: 30min 5,00€ / 1h 8,00€, que se ajusta al tiempo de tu estancia el día que nos visites. De ese importe, descontaremos el depósito que realizas al realizar la presente resera.
                        Para cancelar o modificar la reserva llamar a nuestro número de teléfono en horario de atención al público o escribir a reservas@pawffe.es.
                        Política cancelación: para modificar fecha siempre antes de la hora de reserva. Para devolución de importe antes de las 21:00 horas del día anterior de la fecha  reserva.
                        </p>
                </div>
            </div>
        </div>
        <div class="container-sm">
            <div class="row">
                <div class="col-sm-6">
                    <img style="width: 40%; margin-left: 10%;" src="../adopcion/reserva_boton.png">
                </div>
                <div class="col-sm-6">
                    <input type="checkbox" name="minusválido" value="">Para poder continuar debes aceptar los términos y condiciones. Puedes leer la política de devolución y cancelación completa en este ENLACE<br><br>
                </div>
            </div>
        </div>


        <div class="container-sm" style="background-color: #59C3CE; padding-top: 2%;">
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
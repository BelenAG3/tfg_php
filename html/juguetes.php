<?php
include '../conexion.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pawffé</title>
    
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
                <a class="navbar-brand" href="../index.php" style="color: #59C3CE;">Inicio</a>
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
                                <li><a class="dropdown-item" href="#" style="color: #59C3CE;">Juguetes</a></li>
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
                    <img class="f_home" src="../productos/banner_productosOF.PNG" alt="">
                </div>
            </div>
        </div>

        <div class= "container-fluid">
            <div class="row" >
                <div class="col-fluid" style="margin-top: 2%;">
                    <h2 style="color: #FFBD59;"><ins><b>Juguetes</b></ins></h2>
                </div>  
            </div>
        </div>

        <div class="container-sm ">
            <div class="row">
                <div class="col-sm-4">
                    <img src="../productos/juguete_p1.png" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="../productos/juguete_p2.png" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="../productos/juguete_p.png" alt="">
                </div>
            </div>
        </div>

        <div class="container-sm " style="text-align: center;">
            <div class="row">
                <div class="col-sm-4">
                    <p><b>Flamingo Winta Pelota de Tenis para gatos</b></p>
                </div>
                <div class="col-sm-4">
                    <p><b>Kong Knots oso de peluche para perros</b></p>
                </div>
                <div class="col-sm-4">
                    <p><b>Flamingo pelota saltarina azul de peluche</b></p>
                </div>
            </div>
        </div>

        <div class="container-sm " style="text-align: center;">
            <div class="row">
                <div class="col-sm-4">
                    <p>3.39€</p>
                </div>
                <div class="col-sm-4">
                    <p>8.15€</p>
                </div>
                <div class="col-sm-4">
                    <p>16.69€</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="container-sm ">
            <div class="row">
                <div class="col-sm-4">
                    <img src="../productos/juguete_p4.png" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="../productos/juguete_p5.png" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="../productos/juguete_p6.png" alt="">
                </div>
            </div>
        </div>

        <div class="container-sm " style="text-align: center;">
            <div class="row">
                <div class="col-sm-4">
                    <p><b>Kong Shakers Honkers Pato de peluche para perros</b></p>
                </div>
                <div class="col-sm-4">
                    <p><b>Flamingo Ratón de Peluche a cuerda para gatos</b></p>
                </div>
                <div class="col-sm-4">
                    <p><b>Kong Refillables Ardilla con Catnip de peluche para gatos</b></p>
                </div>
            </div>
        </div>

        <div class="container-sm " style="text-align: center;">
            <div class="row">
                <div class="col-sm-4">
                    <p>10.15€</p>
                </div>
                <div class="col-sm-4">
                    <p>3.99€</p>
                </div>
                <div class="col-sm-4">
                    <p>5.99€</p>
                </div>
            </div>
        </div>
        <br></br>

        <div class="container-fluid" style="background-color: #59C3CE; padding-top: 2%;">
            <div class="row">
                <div class="col-12 col-sm-6 horario">
                    <h2><n>Horario:</n></h2>
                    <p>Lunes: de 16 a 21h</p>
                    <p>Martes - Viernes: de 11 a 14h y de 16 a 21h</p>
                    <p>Sábado y domingo: de 11 a 21h</p>
                    <p>Consulta el sistema de reservas para comprobar disponibilidad y realizar una reserva para visitarnos</p>
                    <img class="redes" src="../Home/redes.png"  alt="" class="img-fluid" style="width: 60%;">
                </div>
                
                <div class="col-12 col-sm-2" >
                    <h2><n>Pawffé</n></h2>
                    <p>C/fffffffffffff</p>
                    <p>28000 Madrid</p>
                    <p>Tel: 000 00 00 00</p>
                    <p>Email: info@pawffe.es</p>
                </div>
                <div class="col-12 col-sm-4">
                    <img src="../Home/mapa_peque.PNG"  alt="">
                </div>
            </div>
        </div>
    </body>
</html>
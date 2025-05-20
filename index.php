<?php
include 'conexion.php';
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
                <a class="navbar-brand" href="#" style="color: #59C3CE;">inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuppa2">
                    Menú
                </button>

                <!-- Indicamos al menu que sea "colapsable", es decir, "encogible" con las clases collapse -->
                <div class="collapse navbar-collapse" id="menuppa2">
                    <ul class="navbar-nav" >
                        <img style="width: 20%;" src="Home/logoOf.png">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: #59C3CE;">Pawffé</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="html/sobre_nosotros.html" style="color: #59C3CE;">Sobre nosotros</a></li>
                                <li><a class="dropdown-item" href="html/socios.html" style="color: #59C3CE;">Socios</a></li>
                                <li><a class="dropdown-item" href="html/galeria.html" style="color: #59C3CE;">Galería</a></li>
                                <li><a class="dropdown-item" href="html/eventos.html" style="color: #59C3CE;">Eventos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" style="color: #59C3CE;">Perros y gatos</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="html/perros.html" style="color: #59C3CE;">Perros</a></li>
                                <li><a class="dropdown-item" href="html/gatos.html" style="color: #59C3CE;">Gatos</a></li>
                                <li><a class="dropdown-item" href="html/adopcion.html" style="color: #59C3CE;">Adopción</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <!-- En esta opcion no se ha añadido la nuefva propiedad -->
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"  href="#" style="color: #59C3CE;">Servicios</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="html/menu.html" style="color: #59C3CE;">Menú</a></li>
                                <li><a class="dropdown-item" href="html/comida.html" style="color: #59C3CE;">Comida</a></li>
                                <li><a class="dropdown-item" href="html/accesorios.html" style="color: #59C3CE;">Accesorios</a></li>
                                <li><a class="dropdown-item" href="html/juguetes.html" style="color: #59C3CE;">Juguetes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="html/contacto.html" style="color: #59C3CE;">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="html/reservas.html" style="color: #59C3CE;">Reserva</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <!-- Carousel -->
        <div class="container-fluid">

            <div id="proyector" class="carousel slide" data-bs-ride="carousel" data-interval="30000">

                <!-- The slideshow/carousel  -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Home/home2.PNG" alt="" >
                    </div>
                    <div class="carousel-item">
                        <img src="Home/home5.PNG" alt="" >
                    </div>
                </div>
    
                <!-- botones de control para desplazar siguiente/anterior-->

                <button class="carousel-control-prev" type="button" data-bs-target="#proyector" data-bs-slide="prev">
                    <span style="background-color: #59C3CE;" class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#proyector" data-bs-slide="next">
                    <span style="background-color: #59C3CE;" class="carousel-control-next-icon"></span>
                </button>

            </div>
    
        </div>



        <div class= "container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <h2><b>Un verdadero club del gato y del perro</b></h2>
                    <p>Pawffé es un proyecto pionero, que toma su inspiración de las cafeterías con animales japonesas, dándole una vuelta de tuerca al concepto original, para convertirlo en una iniciativa solidaria y de ayuda para gatos y perros.</p>
                    <p>Así surge este espacio innovador, en pleno corazón de Madrid, donde poder disfrutar de la compañía, el juego y el cariño de nuestros perros y gatos. Un lugar acogedor y basado en el bienestar, donde los gatos y perros pueden estar colmados de caricias y entretenimiento, y son ayudados a recuperarse de las penurias que han pasado hasta llegar a nuestro espacio. Las personas que vienen pueden interactuar con ellos y conocerlos a fondo, de cara a una posible adopción. Porque, aunque no es necesario venir con la idea de incrementar la familia, sí que se crea una atmósfera que invita a enamorarse y adoptar, de manera que encontrarnos hogares definitivos para nuestros gatos y perros, lo que nos permite seguir ayudando a muchos otros más.</p>
                </div>  
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <img class="f_home" src="Home/collage_of.png" alt="">
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
                    <img class="redes" src="Home/redes.png"  alt="">
                </div>
                
                <div class="col-sm-2" >
                    <h2><n>Pawffé</n></h2>
                    <p>C/fffffffffffff</p>
                    <p>28000 Madrid</p>
                    <p>Tel: 000 00 00 00</p>
                    <p>Email: info@pawffe.es</p>
                </div>
                <div class="col-sm-4">
                    <img src="Home/mapa_peque.PNG"  alt="">
                </div>
            </div>
        </div>
 

    </body>
</html>
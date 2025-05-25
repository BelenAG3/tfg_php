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
                                <li><a class="dropdown-item" href="#" style="color: #59C3CE;">Galería</a></li>
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
        <br></br>
        <div class= "container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #59C3CE;"><b>Perros</b></h2>
                </div>  
            </div>
        </div>

        <!-- Carousel -->
        <div class="container-fluid">

            <div id="proyector" class="carousel slide" data-bs-ride="carousel" data-interval="30000">

                <!-- The slideshow/carousel  -->
                <div class="carousel-inner text-center">
                    <!-- Primer slide -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <img style="width: 20%; height: 20%;" src="../galeria/perro1.PNG" alt="" >
                            <img style="width: 20%; height: 20%;" src="../galeria/perro2.PNG" alt="">
                            <img style="width: 20%; height: 20%;" src="../galeria/perro3.PNG" alt="">
                            <img style="width: 20%; height: 20%;"  src="../galeria/perro4.PNG" alt="">  
                        </div>
                    </div>

                    <!-- Segundo slide -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <img style="width: 20%; height: 20%;" src="../galeria/perro5.PNG" alt="" >
                            <img style="width: 20%; height: 20%;" src="../galeria/perro6.PNG" alt="">
                            <img style="width: 20%; height: 20%;" src="../galeria/perro2.PNG" alt="">
                            <img style="width: 20%; height: 20%;"  src="../galeria/perro5.PNG" alt="">  
                        </div>
                    </div>
                </div>
    
                <!-- botones de control para desplazar siguiente/anterior -->
                <button class="carousel-control-prev" type="button" data-bs-target="#proyector" data-bs-slide="prev">
                    <span style="background-color: #59C3CE;" class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#proyector" data-bs-slide="next">
                    <span style="background-color: #59C3CE;" class="carousel-control-next-icon"></span>
                </button>

            </div>
    
        </div>
        <br></br>
        <div class= "container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #59C3CE;"><b>Gatos</b></h2>
                </div>  
            </div>
        </div>

        <!-- Carousel -->
        <div class="container-fluid">
            <div id="proyector2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="30000">

                <!-- The slideshow/carousel  -->
                <div class="carousel-inner text-center">

                    <!-- Primer slide -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <img style="width: 20%; height: auto;" src="../galeria/gato1.PNG" alt="">
                            <img style="width: 20%; height: auto;" src="../galeria/gato2.PNG" alt="">
                            <img style="width: 20%; height: auto;" src="../galeria/gato3.PNG" alt="">
                            <img style="width: 20%; height: auto;" src="../galeria/gato4.PNG" alt="">
                        </div>
                    </div>

                    <!-- Segundo slide -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <img style="width: 20%; height: auto;" src="../galeria/gato3.PNG" alt="">
                            <img style="width: 20%; height: auto;" src="../galeria/gato4.PNG" alt="">
                            <img style="width: 20%; height: auto;" src="../galeria/gato2.PNG" alt="">
                            <img style="width: 20%; height: auto;" src="../galeria/gato1.PNG" alt="">
                        </div>
                    </div>

                </div>

                <!-- botones de control para desplazar siguiente/anterior -->
                <button class="carousel-control-prev" type="button" data-bs-target="#proyector2" data-bs-slide="prev">
                    <span style="background-color: #59C3CE;" class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#proyector2" data-bs-slide="next">
                    <span style="background-color: #59C3CE;" class="carousel-control-next-icon"></span>
                </button>

            </div>
        </div>

        <br></br>
        <div class= "container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #59C3CE;"><b>Cafetería</b></h2>
                </div>  
            </div>
        </div>

        <!-- Carousel -->
        <div class="container-fluid">

            <div id="proyector3" class="carousel slide" data-bs-ride="carousel" data-interval="30000">

                <!-- The slideshow/carousel  -->
                <div class="carousel-inner text-center">
                    <!-- Primer slide -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <img style="width: 20%; height: 20%;" src="../galeria/cafeteria1.PNG" alt="" >
                            <img style="width: 20%; height: 20%;" src="../galeria/cafeteria2.PNG" alt="">
                            <img style="width: 20%; height: 20%;" src="../galeria/cafeteria3.PNG" alt="">
                            <img style="width: 20%; height: 20%;"  src="../galeria/cafeteria4.PNG" alt=""> 
                        </div>
                    </div>

                    <!-- Segundo slide -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <img style="width: 20%; height: 20%;" src="../galeria/cafeteria2.PNG" alt="" >
                            <img style="width: 20%; height: 20%;" src="../galeria/cafeteria1.PNG" alt="">
                            <img style="width: 20%; height: 20%;" src="../galeria/cafeteria4.PNG" alt="">
                            <img style="width: 20%; height: 20%;"  src="../galeria/cafeteria3.PNG" alt=""> 
                        </div>
                    </div>
                </div>
    
                <!-- botones de control para desplazar siguiente/anterior -->
                <button class="carousel-control-prev" type="button" data-bs-target="#proyector3" data-bs-slide="prev">
                    <span style="background-color: #59C3CE;" class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#proyector3" data-bs-slide="next">
                    <span style="background-color: #59C3CE;" class="carousel-control-next-icon"></span>
                </button>

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
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
                                <li><a class="dropdown-item" href="#" style="color: #59C3CE;">Menú</a></li>
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
                    <img id="principio" src="../menu/banner_cafeOF.PNG" alt="">
                </div>
            </div>
        </div>
        
        <div class="container-sm "style=" text-align: center;" >
            <div class="row" style="margin-top: 2%; color: #FFBD59;">
                <div class="col-sm-6">
                    <h3><b>Cafés especiales</b></h3>
                </div>
                <div class="col-sm-6">
                    <h3><b>Tradicionales</b></h3>
                </div>
            </div>
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>GINGER & CINNAMON CAPPUCCINO</p>
                        <p style="color: #9D9C9C;">Cappuccino tradicional, jengibre, jarabe con sabor a canela y canela</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>ESPRESSO / SOLO</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,00</p>
                    </div>
                </div>
            </div>
            
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>MATCHA LATTE</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>AMERICANO</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,00</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>PINK LATTE</p>
                        <p style="color: #9D9C9C;">Remolacha en polvo, leche de coco, vainilla y canela</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>SOMBRA</p>
                        <p>LATTE</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,50</p>
                        <p>€2,70</p>
                    </div>
                </div>
            </div>
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>CACAO LATTE</p>
                        <p style="color: #9D9C9C;">El cacao es una fuente vegetal con mayor contenido de hierro, además contiene 40 veces  más antioxidantes que los arándanos. Disfrute de nuestro cacao con la leche que prefiera</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>ESPRESSO MACCHIATO</p>
                        <p>FLAT WHITE</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,20</p>
                        <p>€3,00</p>
                    </div>
                </div>
            </div> 
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>TURMERIC LATTE</p>
                        <p style="color: #9D9C9C;">Un shot de espresso, cúrcuma, leche, canela, pimienta y miel. La cúrcuma es una especia medicinal que estimula el sistema inmunológico y también sirve como ingrediente antiinflamatorio</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>CAFÉ CON LECHE</p>
                        <p>MANCHADO</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,70</p>
                        <p>€2,70</p>
                    </div>
                </div>
            </div>
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>VANILLA FRAPUCCINO</p>
                        <p style="color: #9D9C9C;">Café frío con leche a elección, un toque de vainilla y cubierto con crema batida</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>CAPPUCCINO</p>
                        <p>CAFÉ BOMBÓN</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,70</p>
                        <p>€3,00</p>
                    </div>
                </div>
            </div>
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>PERSONALISED COFEE</p>
                        <p style="color: #9D9C9C;">Tu foto favorita ahora en tu café. Pregunta a nuestro equipo como conseguirlo</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>ICED LATTE</p>
                        <p>EXTRA SHOT</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,70</p>
                        <p>€0,50</p>
                    </div>
                </div>
            </div>
        </div>
        
        <br></br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <img class="f_home" src="../menu/banner_zumoOF.PNG" alt="">
                </div>
            </div>
        </div>

        <div class= "container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #FFBD59;"><b>Zumos naturales</b></h2>
                    
                    <div class="container-sm ">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>NARANJA</p>
                            </div>
                            <div class="col-sm-6">
                                <p>€4,60</p>
                            </div>
                        </div>
                    </div> 

                    <div class="container-sm ">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>MANZANA</p>
                            </div>
                            <div class="col-sm-6">
                                <p>€4,60</p>
                            </div>
                        </div>
                    </div> 

                    <div class="container-sm ">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>ZANAHORIA</p>
                            </div>
                            <div class="col-sm-6">
                                <p>€4,60</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container-sm ">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>GREEN CLEANSE</p>
                                <p style="color: #9D9C9C;">Desintoxicante y depurativo. Col rizada, espinaca, apio, manzana, jengibre y limón</p>
                            </div>
                            <div class="col-sm-6">
                                <p>€6,50</p>
                            </div>
                        </div>
                    </div>

                    <div class="container-sm ">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>MIRACLE</p>
                                <p style="color: #9D9C9C;">Desintoxicante, energizante y estimulante. Zanahoria, limón y jengibre</p>
                            </div>
                            <div class="col-sm-6">
                                <p>€6,50</p>
                            </div>
                        </div>
                    </div>

                    <div class="container-sm ">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>TRADICIONAL</p>
                                <p style="color: #9D9C9C;">Lleno de vitaminas. Manzana, naranja, zanahoria, jengibre y limón</p>
                            </div>
                            <div class="col-sm-6">
                                <p>€6,50</p>
                            </div>
                        </div>
                    </div>

                    <div class="container-sm ">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>MATCHA BOOST</p>
                                <p style="color: #9D9C9C;">Repleto de antioxidantes. Matcha en polvo, leche de almendras, plátano y miel</p>
                            </div>
                            <div class="col-sm-6">
                                <p>€6,50</p>
                            </div>
                        </div>
                    </div>

                    <div class="container-sm ">
                        <div class="row">
                            <div class="col-sm-6">
                                <p>CHOCO PROTEIN BOOST</p>
                                <p style="color: #9D9C9C;">Proteína vegana en polvo, cacao en polvo, plátano y leche de almendras</p>
                            </div>
                            <div class="col-sm-6">
                                <p>€6,50</p>
                            </div>
                        </div>
                    </div>

                </div>  
            </div>
        </div>
       <br></br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <img class="f_home" src="../menu/banner_otrosOF.PNG" alt="">
                </div>
            </div>
        </div>
        
        <div class="container-sm "style=" text-align: center;" >
            <div class="row" style="margin-top: 2%; color: #FFBD59;">
                <div class="col-sm-6">
                    <h3><b>Tés</b></h3>
                </div>
                <div class="col-sm-6">
                    <h3><b>Bebidas</b></h3>
                </div>
            </div>
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>LIMÓN Y JENGIBRE</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€3,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>AGUA</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€0,50</p>
                    </div>
                </div>
            </div>
            
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>TÉ DE MENTA</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€ 3,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>AGUA CON GAS</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€1,00</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>ROOIBOS</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€3,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>COCA COLA</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,50</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>TÉ VERDE</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€3,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>COCA COLA LIGHT/ ZERO</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,50</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>EARL GREY</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€3,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>FANTA DE NARANJA</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,50</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>CHAI</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€3,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>NESTEA</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,50</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>TÉ NEGRO</p>
                        <p style="color: #9D9C9C;">Chocolate y naranja</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€3,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>SPRITE</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€2,50</p>
                    </div>
                </div>
            </div>
        </div>
        <br></br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <img class="f_home" src="../menu/banner_comidaOF.PNG" alt="">
                </div>
            </div>
        </div>
        
        <div class="container-sm "style=" text-align: center;" >
            <div class="container-sm " style="margin-top: 2%;">
                <div class="row">
                    <div class="col-sm-4">
                        <p>BIZCOCHO DE LIMÓN</p>
                        <p style="color: #9D9C9C;">Esponjoso bizcocho de limón recubierto de azúcar glaseado</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€4,15</p>
                    </div>
                    <div class="col-sm-3">
                        <p>SÁNDWICH SIN GLUTEN</p>
                        <p style="color: #9D9C9C;">Sándwich multicereal con pollo, bacon, queso cheddar y salsa de mayonesa, mostaza y miel. Apto para celíacos</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€6,70</p>
                    </div>
                </div>
            </div>
            
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>BROWNIE</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>MUFFIN DE VAINILLA</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€6,70</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>ROLL CANELA</p>
                        <p style="color: #9D9C9C;">Suave masa horneada cada día con canela y una espiral de glaseado</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>SÁNDWICH BACON Y BECHAMEL</p>
                        <p style="color: #9D9C9C;">Sándwich en pan de molde tostado con queso havarti, butifarra, bacon, tomate seco, huevo y bechamel</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€6,70</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>NAPOLITANA</p>
                        <p style="color: #9D9C9C;">Napolitana con delicioso chocolate</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€3,70</p>
                    </div>
                    <div class="col-sm-3">
                        <p>CROISSANT JAMÓN Y QUESO</p>
                        <p style="color: #9D9C9C;">Croissat horneado con queso Eddam y jamón york</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€6,70</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>CROISSANT DE MANTEQUILLA</p>
                        <p style="color: #9D9C9C;">Croissants francés de mantequilla</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€5,50</p>
                    </div>
                    <div class="col-sm-3">
                        <p>BOCADILLO DE JAMÓN IBÉRICO</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€6,70</p>
                    </div>
                </div>
            </div>
    
            <div class="container-sm ">
                <div class="row">
                    <div class="col-sm-4">
                        <p>CROISSANT MULTICEREAL</p>
                        <p style="color: #9D9C9C;">Croissant elaborado siguiendo la tradicional receta francesa con cereales seleccionados</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€6,75</p>
                    </div>
                    <div class="col-sm-3">
                        <p>POLLO Y MOZZARELLA</p>
                    </div>
                    <div class="col-sm-2">
                        <p>€7,50</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p>COOKIE DE CHOCOLATE</p>
                    </div>
                    <div class="col-sm-6">
                        <p>1,75</p>
                    </div>
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
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
                            <a class="nav-link" href="#" style="color: #59C3CE;">Reserva</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-fluid">
                    <img class="f_home" src="../reserva/banner_reservaOF.PNG" alt="">
                </div>
            </div>
        </div>

        <div class="container-sm" style="text-align: center; margin-top: 2%;">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Bienvenido a nuestro sistema de reserva para Pawffé</b></h2>
                    <p>Antes de proceder a realizar tu reserva, te contamos información importante.</p>
                    <a href="reservar.html"><img style="width: 50%;" src="../adopcion/reserva_boton.png"></a>
                </div>
                <div class="col-sm-6">
                    <img style="width: 50%;" src="../reserva/foto_reserva.png">
                </div>
            </div>
        </div>

        <div class= "container-fluid" style="text-align: center; margin-top: 2%;">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #59C3CE;"><b>Reservas por 1 hora de estancia</b></h2>
                    <p><b>Tu tiempo de estancia comienza a tu hora reservada; si llegas más tarde, no podemos asegurar la hora completa.</b></p>
                    <p>Si tienes algún imprevisto y te vas a retrasar, avísanos antes de la hora de tu reserva. En caso contrario, transcurridos 30 minutos, dejaremos el espacio libre para otros visitantes.</p>
                    <p>Recuerda que es pleno centro de Madrid y es difícil aparcar y hay eventos que cortan tráfico y transportes con frecuencia.</p>
                </div>  
            </div>
        </div>
        <div class= "container-fluid" style="text-align: center; margin-top: 2%;">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #59C3CE;"><b>Pagas por el tiempo de estancia</b></h2>
                    <p><b>Nuestros precios por persona son, de forma orientativa:</b></p>
                    <p><b>30min - 5,00€ / 60min - 8,00€</b></p>
                    <p><b>Lo ajustamos al tiempo disfrutado y se paga al final de la visita.</b></p>
                    <p>El importe mínimo a abonar corresponde a 30 minutos. Peques (hasta 12 años incluidos), pensionistas y discapacitados tienen un 25% de descuento. El descuento se aplica a partir de la estancia mínima de 30minutos/5€. Máximo 2 niños por cada adulto.</p>
                </div>  
            </div>
        </div>

        <div class= "container-fluid" style="text-align: center; margin-top: 2%;">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #59C3CE;"><b>Depósito de reserva</b></h2>
                    <p><b>Al realizar tu reserva, solicitamos un depósito de 5,00€ por persona. Cuando finalices tu estancia, lo descontaremos del importa final del pago por tiempo de estancia.</b></p>
                    <p>Modificaciones y cancelaciones:</p>
                    <ul>
                        <li><p>Aviso hasta las 21:00h del día anterior al de tu reserva: posibilidad de cambio de tu reserva a otra fecha o de devolución del importe de tu reserva.</p></li>
                        <li><p>Aviso el mismo dia de tu reserva, hasta con una hora de antelación del comienzo de la misma: posibilidad de cambio de tu reserva a otra fecha.</p></li>
                        <li><p>Desde una hora antes del comienzo de tu reserva, y en adelante, se pierde todo derecho a devolución o cambio de la misma.</p></li>  
                    </ul>
                </div>  
            </div>
        </div>

        <div class= "container-fluid" style="text-align: center; margin-top: 2%;">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #59C3CE;"><b>Nuestras normas</b></h2>
                    <p><b>Queremos que disfrutes muchísimo de tu estancia, pero los gatos y perros también de tu presencia. Tenemos unas normas de obligado cumplimiento para interactuar con ellos, que aceptas al visitarnos.</b></p>
                    <p>Te las explicaremos a tu llegada, aunque te adelantamos las más importantes. Estas normas son de obligado cumplimiento para todos los visitantes. Su falta reiterada podrá ocasionar el fin de la experiencia. Al fin y al cabo, nuestra prioridad es el bienestar de nuestros gatos y perros.</p>
                </div>  
            </div>
        </div>

        <div class= "container-fluid" style="text-align: center; margin-top: 2%;">
            <div class="row">
                <div class="col-fluid">
                    <h2 style="color: #59C3CE;"><b>Queremos que surja el amor</b></h2>
                    <ul>
                        <li><p><b>Interactúa con los gatetes y perretes, pero respeta su espacio y descanso.</b></p></li>
                        <li><p><b>Mímalos y acarícialos, pero no los cojas en brazos, retengas o fuerces.</b></p></li>
                        <li><p><b>Juega siempre con juguetes, nunca con las manos.</b></p></li>
                        <li><p><b>Hazles fotos y llévate un recuerdo, pero sin flash.</b></p></li>
                    </ul>
                    <p>Siempre habrá varios trabajadores. Está ahí para comprobar que se cumplen las normas, pero también para ayudarte con la interacción con los gatos y perros, explicarte qué les gusta a cada uno, contarte sus historias y todo lo que puedas necesitar. Apóyate en esas personas siempre que lo necesites.</p>
                </div>  
            </div>
        </div>

        <div class= "container-fluid" style="text-align: center; margin-top: 2%; background-color: #59C3CE;">
            <div class="row">
                <div class="col-fluid">
                    <h2><b>Como realizar tu reserva</b></h2>
                    <ul>
                        <li><p>Seleccione el día en que quieres visitarnos</p></li>
                        <li><p>Añade tu nombre y número de teléfono</p></li>
                        <li><p>Indica cuántos adultos y peques queréis visitarnos</p></li>
                        <li><p>Acepta las políticas de reserva</p></li>
                        <li><p>Pulsa “Ver disponibilidad”</p></li>
                        <li><p>Pulsa “Pagar y reservar” y accederás a la pasarela de pago del depósito</p></li>
                        <li><p>Descarga la confirmación de tu reserva o hazle un pantallazo</p></li>
                    </ul>
                    <p style="color: white;">Cualquier duda o problema con el sistema de reservas, escríbenos a reservas@pawffe.es y explícanos qué te ocurre e intentaremos ayudare.</p>
                    <a href="reservar.html"><img style="width: 30%;" src="../adopcion/reserva_boton.png"></a>
                </div>  
            </div>
        </div>
    </body>
</html>
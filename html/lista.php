<?php

    include '../conexion.php';

//.................................................................................................................................................................1



    $con = mysqli_connect($Servidor,$Usuario,$Password,$bd);
	


    if(!$con)
	{
		echo 'No se pudo conectar con la base de datos...';
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die;
	}


		$fil_base = " select nombre, fecha, n_adultos, n_ninos, telefono, id_reserva
                        from reserva 
						order by fecha desc, nombre asc";


		if ($result = mysqli_query($con, $fil_base)) 
		{
			if(!$result)
			{
                echo 'Se ha producido un error en la obtención de los datos...';
				echo mysqli_error();
			}
			else
			{
                $total = mysqli_num_rows($result);
               // echo $total;

//.................................................................................................................................................................1
?>


                <!DOCTYPE html>
                <html lang="es" xmlns="http://www.w3.org/1999/xhtml">
                <head>
                    <meta charset="UTF-8">
                    <meta name="robots" content="noindex, nofolow">
                    <title>Pawffé</title>
                    <!--<link rel="stylesheet" type="text/css" href="css/estilos.css">-->
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
                <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

                </head>
                <body>
                    <div>						
                        <div class="container-fluid border" ></div>

                            <nav class="navbar navbar-expand-sm bg-light navbar-light">
                                <!-- Se crea el boton para el colapso -->
                                <a class="navbar-brand" href="../0_index.php" style="color: #59C3CE;">Inicio</a>
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="lista.php" style="color: #59C3CE;">Ver Reservas</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                       <div class="container-fluid">
                            <div class="row">
                                <div class="col-fluid">
                                    <img class="f_home" src="../reserva/lista_reserva.PNG" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-fluid">
                                    <img id="principio" src="../reserva/lista_reserva.PNG" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-fluid">
                                    <img id="principio" src="../menu/lista_reserva.PNG" alt="">
                                </div>
                            </div>
                        </div>
                        <div>
                        <section class="container-md">
                            <div class="row">
                                <div class="col-md-3" style="color: #59C3CE;"><b>Nombre<br></b></div>
                                <div class="col-md-3" style="color: #FFBD59;"><b>Fecha<br></b></div>
                                <div class="col-md-1" style="color: #59C3CE;"><b>Nº adultos<br></b></div>
                                <div class="col-md-1" style="color: #FFBD59;"><b>Nº ninos<br></b></div>
                                <div class="col-md-2" style="color: #59C3CE;"><b>Telefono<br></b></div>
                                <div class="col-md-1" style="color: #FFBD59;"><b>Nº reserva<br></b></div>
                            </div>
                        </section>

<?php

                                while($row = mysqli_fetch_assoc($result))
                                {
                                    echo"
                                        <section class=\"container_md\">
                                            <div class=\"row\">
                                                <div class=\"col-md-3\">".htmlspecialchars($row['nombre'])."</div>
                                                <div class=\"col-md-3\">".htmlspecialchars($row['fecha'])."</div>
                                                <div class=\"col-md-1\">".htmlspecialchars($row['n_adultos'])."</div>
                                                <div class=\"col-md-1\">".htmlspecialchars($row['n_ninos'])."</div>
                                                <div class=\"col-md-2\">".htmlspecialchars($row['telefono'])."</div>
                                                <div class=\"col-md-1\">".htmlspecialchars($row['id_reserva'])."</div>
                                            </div>
                                        </section>
                                    ";
                                }
?>
                            <!--<input type="button" value="Página anterior" onClick="history.go(-1);">-->
                        <div>
                    </div>
                </body>
                </html>

<?php
			}	
		}	
    	mysqli_close($con);

?>
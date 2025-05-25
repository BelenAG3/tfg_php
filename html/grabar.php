
<?php

	include '../conexion.php';
//.........................................................................

	$con = mysqli_connect($Servidor,$Usuario,$Password,$bd);
	echo $bd;
	if(!$con)
	{
		echo 'No se pudo conectar con la base de datos...';
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die;
	}
	else
	{

	// Capturar las variables a grabar
		
		$Nombre = $_POST['name'];
//		$apellidos = $_POST['apellidos'];
		$Telefono = $_POST['phone'];
		$Fecha = $_POST['rechaReserv'];
		$N_adultos = $_POST['adulto'];
		$N_ninos = $_POST['kids'];
		
		// Verbo para insertar
		$sql = "INSERT INTO reserva (Nombre, Telefono, Fecha, N_adultos, N_ninos) VALUES ('" .$Nombre. "', '" .$Telefono. "', '" .$Fecha. "', " .$N_adultos. ", " .$N_ninos. ")";

		$grabado = mysqli_query($con, $sql);
		if(!$grabado)
		{
			echo mysqli_error($con);
		}
		echo "Reserva guardada correctamente" .$grabado;
		if($grabado)
		{
			mysqli_close($con); //cierra la conexion
		}
		else
		{
			echo 'NO. Han habido problemas para con la base de datos y los datos';
		}
	}
	/*echo "<script type='text/javascript'>";
    echo "window.history.back(-1)";
    echo "</script>";
	*/
	
?>
<html>
	<head>
    <title>Página con fondo</title>
	</head>
	<body style="background-color: #59C3CE;"> <!-- Cambia este color a gusto -->

		<input type="button" value="Volver al inicio" onclick="window.location.href='../index.php';">

	</body>
	
</html>

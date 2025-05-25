
<?php

	include '../conexion.php';
//.........................................................................

	$con = mysqli_connect($Servidor,$Usuario,$Password,$bd);
	if(!$con)
	{
		echo 'No se pudo conectar con la base de datos...';
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die;
	}
	else
	{

	// Capturar las variables a grabar
		
		$nombre = $_POST['name'];
//		$apellidos = $_POST['apellidos'];
		$telefono = $_POST['phone'];
		$fecha = $_POST['rechaReserv'];
		$n_adultos = $_POST['adulto'];
		$n_ninos = $_POST['kids'];
		
		// Verbo para insertar
		$sql = "INSERT INTO reserva (nombre, telefono, fecha, n_adultos, n_ninos) VALUES ('" .$nombre. "', '" .$telefono. "', '" .$fecha. "', " .$n_adultos. ", " .$n_ninos. ")";

		$grabado = mysqli_query($con, $sql);
		if(!$grabado)
		{
			echo mysqli_error($con);
		}
		echo "registro grabado" .$grabado;
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
	<input type="button" value="Página anterior" onClick="history.go(-1);">
	
</html>

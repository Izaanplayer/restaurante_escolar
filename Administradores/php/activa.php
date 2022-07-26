<?php

// esta variable llega del formulario consulta.php

$codigo=$_POST["estado"];
$activacion=$_POST["activacion"];

// Se realiza la conexion con el servidor mysql

include '../includes/conexion.php';


// conecto a la tabla estudiantes y consulto por codigo

$consulta = mysqli_query($conexion, "SELECT * FROM estudiantes where codigo=$codigo")
or die("error al extraer los datos");

$row = mysqli_fetch_row($consulta);

if (mysqli_num_rows($consulta) == 0) {
	echo "Este usuario no existe, intenta nuevamente...";
}else{

	if($row[4]==0){
		echo "<script>alert('Este usuario puede recibir refrigerio');
		window.location.href='activar.php';</script>
		";
		
		$actualiza = mysqli_query($conexion, "UPDATE estudiantes SET estado=1 where codigo=$codigo") or die("error al extraer los datos");

		$actualizarfecha = mysqli_query($conexion, "UPDATE estudiantes SET fecha=$activacion where codigo=$codigo") or die("error al extraer los datos");
	}
	else{
		echo "<script>alert('Este usuario no puede recibir refrigerio');
		window.location.href='activar.php';</script>
		";
		

	}
}

mysqli_close($conexion);


?>
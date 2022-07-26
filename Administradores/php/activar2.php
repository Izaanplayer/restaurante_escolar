<?php

$nombre = $_POST["nombre"];
$codigo = $_POST["codigo"];
$especialidad = $_POST["especialidad"];
$grado = $_POST["grado"];
$fecha = $_POST["fecha"];
$activacion = $_POST["activacion"];

// Se realiza la conexion con el servidor mysql
include '../includes/conexion.php';

// conecto a la tabla estudiantes y consulto por codigo

$consulta = mysqli_query($conexion, "SELECT * FROM estudiantes where codigo=$codigo")
	or die("error al extraer los datos");

$rep = mysqli_fetch_row($consulta);

if ($rep[4] == "1") {
	echo "<script>alert('Este usuario va a repetir almuerzo');
	window.location.href='almuerzo.php';</script>";

	$insertar = "INSERT INTO repitentes(codigo, nombre, grado, especialidad) VALUES ('$codigo' ,'$nombre', '$grado', '$especialidad')";

	//ejecurtar consulta
	$resultado = mysqli_query($conexion, $insertar);
	if (!$resultado) {
		echo "<script>alert('Error al registrarse');</script>";
	} else {
		echo "<script>alert('Datos Ingresados Exitosamante!!'); 
		window.location.href='../inicio.php';</script>";
	}
} else {
	if (mysqli_num_rows($consulta) == 0) {
		echo "Este usuario no existe, intenta nuevamente...";
	} else {
		if ($rep[4] == "0") {
			echo "<script>alert('Este usuario puede almorzar'); 
			window.location.href='almuerzo.php';</script>";

			/*COMIENZO DE INSERT A ALMUERZOS 29/07/2019.*/

			$alm = "INSERT INTO almuerzos(codigo, nombre, grado, especialidad) VALUES ('$codigo' ,'$nombre', '$grado', '$especialidad')";

			$almuerzosinsert = mysqli_query($conexion, $alm);

			$actualiza = mysqli_query($conexion, "UPDATE estudiantes SET estado=1 where codigo=$codigo") or die("error al extraer los datos");

			$actualizarfecha = mysqli_query($conexion, "UPDATE estudiantes SET fecha=$activacion where codigo=$codigo") or die("error al extraer los datos");
		} else {
			echo "<script>alert('Este usuario no puede almorzar');
			window.location.href='almuerzo.php';</script>";
		}
	}
}


mysqli_close($conexion);

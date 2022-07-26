<?php

// se realiza la conexion

//$conexion = mysqli_connect("localhost", "promosena", "Pr9Neiva%X;", "promosen_restaurante") or die("error en la conexion");
$conexion = mysqli_connect('localhost', 'root', 'eRvlmV47F%SL97gW2EZ4@iJkF', 'restaurante');

mysqli_set_charset($conexion, 'utf8');

function laConsulta()
{
	global $conexion, $consulta;
	$sql = 'SELECT * FROM estudiantes';
	return $conexion->query($sql);
}

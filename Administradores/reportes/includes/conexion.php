<?php

// se realiza la conexion

$conexion = mysqli_connect("localhost", "root", "12345678", "restaurante")
	or die("error en la conexion");

mysqli_set_charset($conexion, 'utf8');

function siAlmuerzan()
{

	global $conexion, $consulta;
	$sql = 'INSERT INTO almuerzos SELECT id,
		codigo,
		nombre,
		grado,
		estado,
		especialidad,
		fecha
		FROM estudiantes WHERE estado=0';
	$insert_noalmuerzan = mysqli_query($conexion, $sql);
	return $conexion->query($sql);
}

function noAlmuerzan()
{

	global $conexion, $consulta;
	$sql = 'INSERT INTO no_almuerzan SELECT id,
		codigo,
		nombre,
		grado,
		estado,
		especialidad,
		fecha
		FROM estudiantes WHERE estado=0';
	$insert_noalmuerzan = mysqli_query($conexion, $sql);
	return $conexion->query($sql);
}

function siAlmuerzanReporte()
{
	global $conexion, $consulta;
	$sql = 'SELECT * FROM almuerzos';
	return $conexion->query($sql);
}

function noAlmuerzanReporte()
{
	global $conexion, $consulta;
	$sql = 'SELECT * FROM no_almuerzan';
	return $conexion->query($sql);
}

function RepitenReporte()
{
	global $conexion, $consulta;
	$sql = 'SELECT * FROM repitentes';
	return $conexion->query($sql);
}

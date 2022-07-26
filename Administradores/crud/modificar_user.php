<?php

ModificarUsuario($_POST['id'], $_POST['codigo'], strtoupper($_POST['nombre']), $_POST['grado'], $_POST['estado'], ucfirst($_POST['especialidad']), $_POST['fecha']);

function ModificarUsuario($id, $codigo, $nombre, $grado, $estado, $especialidad, $fecha)
{
	include 'conexion.php';
	echo $sentencia="UPDATE estudiantes SET codigo='".$codigo."', nombre='".$nombre."', grado='".$grado."', estado='".$estado."', especialidad='".$especialidad."', fecha='".$fecha."' WHERE id='".$id."' ";
	$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
}

?>

<script type="text/javascript">
	alert('Datos modificados exitosamente');
	window.location.href='../crud/index.php';
</script>
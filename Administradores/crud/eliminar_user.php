<?php
EliminarProducto($_GET['id']);

function EliminarProducto($id_user)
{
	include 'conexion.php';
	$sentencia = "DELETE FROM estudiantes WHERE id='" . $id_user . "' ";
	$conexion->query($sentencia) or die("Error al eliminar" . mysqli_error($conexion));
}
?>

<script type="text/javascript">
	alert("Usuario Eliminado!!");
	window.location.href = 'index.php';
</script>
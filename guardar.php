<?php
if( !isset($_POST["nombre"]) || !isset($_POST["descripcion"]) || !isset($_POST["codigo"])) { 
	exit(); 
}

include_once "base_de_datos.php";
$id = $_POST["codigo"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sentencia = $base_de_datos->prepare("UPDATE productos SET nombre = ?, descripcion = ? WHERE codigo = ?;");
$resultado = $sentencia->execute([$nombre, $descripcion, $id]);
if($resultado === TRUE) {
	header("location: index.php");
} else {
	echo "Algo salió mal. Por favor verifica que la tabla exista, así como el código del producto";
}
?>
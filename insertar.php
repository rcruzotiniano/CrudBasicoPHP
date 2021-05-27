<?php
if(!isset($_POST["nombre"]) || !isset($_POST["descripcion"])) {
    exit();
}

include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(nombre, descripcion) VALUES (?, ?);");
$resultado = $sentencia->execute([$nombre, $descripcion]);
if($resultado === TRUE) {
    header("location: index.php");
} else {
    echo "Algo salió mal. Por favor verifica que la tabla exista";
}
?>
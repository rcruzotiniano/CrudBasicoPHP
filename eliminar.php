<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM productos WHERE codigo = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE) {
    header("location: index.php");
} else {
    echo "Algo salió mal";
}
?>
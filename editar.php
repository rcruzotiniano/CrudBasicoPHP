<?php
if(!isset($_GET["id"])) {
	exit();
}
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE codigo = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE) {
	echo "¡No existe algun producto con ese código!";
	exit();
}
?>

<?php include_once "header.php";?>
	<h3>Editar producto: <?php echo $producto->nombre ?> </h3><br>
	<form method="post" action="guardar.php">
		<input type="hidden" name="codigo" value="<?php echo $producto->codigo; ?>">
		<label class="form-label" for="nombre">Nombre:</label>
		<br>
		<input class="form-control" value="<?php echo $producto->nombre ?>" name="nombre" required type="text" id="nombre" placeholder="Nombre del producto">
		<br>
		<label class="form-label" for="descripcion">Descripción:</label>
		<br>
		<input class="form-control" value="<?php echo $producto->descripcion ?>" name="descripcion" required type="text" id="descripcion" placeholder="Descripción del producto">
		<br><br><input class="btn btn-success" type="submit" value="Guardar cambios">
		<a class="btn btn-info" href="index.php"">Volver</a>
	</form>

<?php include_once "footer.php"; ?>
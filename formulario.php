<?php include_once "header.php";?>

	<h3>Registrar producto</h3><br>
	<form method="post" action="insertar.php">
		<label class="form-label" for="nombre">Nombre:</label>
		<br>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Nombre del producto">
		<br>
		<label class="form-label" for="descripcion">Descripción:</label>
		<br>
		<input class="form-control" name="descripcion" required type="text" id="descripcion" placeholder="Descripción del producto">
		<br><br><input class="btn btn-success" type="submit" value="Registrar">
		<a class="btn btn-info" href="index.php"">Volver</a>
	</form>

<?php include_once "footer.php"; ?>
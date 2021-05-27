<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php include_once "header.php";?>

	<a class="btn btn-primary mb-2" href="formulario.php">Nuevo</a>
	<table class="table">
		<thead>
			<tr>
				<th>Código</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($productos as $producto){ ?>
			<tr>
				<td><?php echo $producto->codigo ?></td>
				<td><?php echo $producto->nombre ?></td>
				<td><?php echo $producto->descripcion ?></td>
				<td><a class="btn btn-warning" href="<?php echo "editar.php?id=".$producto->codigo?>">Editar</a>
				<a class="btn btn-danger" href="<?php echo "eliminar.php?id=".$producto->codigo?>">Eliminar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

<?php include_once "footer.php"; ?>
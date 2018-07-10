<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Editor de Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/materialize.css" />
	
</head>
<?php

if (isset($_GET['id'])) {
	include 'conexcion.php';
	global $conex;
	$id = $_GET['id'];
	$update = true;
	$sql = mysqli_query($conex,"SELECT * FROM responsable WHERE Id=$id");


	if (count($sql) == 1 ) {
		$row = mysqli_fetch_array($sql);
		$rut = $row['Rut'];
		$name = $row['Nombre'];
		$address = $row['Apellido'];
	}
}

?>
<body>
	<h1>Editar Usuario</h1>
	<div class="row">
		<a href="views/user/user.php" title="Atras">
			<input type="button" class="btn" name="" value="Atras"></a>
		</div>

		<form action="accion_crud.php" method="post">
			<div class="row">
				<div class="row">
					<div class="input-field col s12 m6 l3">
						<input class="validate" type="hidden" id="id" name="id" value="<?php echo $id; ?>">
						<label for="Rut...">ID...</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l3">
						<input class="validate" type="text" id="rut" name="rut" value="<?php echo $rut; ?>"  required>
						<label for="Rut...">Rut...</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l3">
						<input type="text" id="nombre" name="nombre"value="<?php echo $name; ?>" required>
						<label for="Nombre...">Nombre...</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l3">
						<input type="text" id="apellido" name="apellido" value="<?php echo $address; ?>" required>
						<label for="Apellido...">Apellido...</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 13">
							<button class="btn" type="submit" name="update">update</button>
						</div>
					</div>
				</div>
			</form>
			<script src="js/materialize.min.js"></script>
		</body>
		</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Usuarios del sistema</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="../../css/materialize.min.css" />

</head>
<body>
	<h1>Usuarios del Sistema</h1>

	<div class="row">
		<div class="col s12 m12">
			<a href="new.php" "email me">
				<input type="submit" name="btn"  class="btn" value="Nuevo Usuario">
			</a>
		</div>		
	</div>

	<?php
	include '../../model/conexcion.php';
	global $conex;

	$sql = 'SELECT * FROM responsable ORDER BY Id DESC';
	?>

	<div class="row">
		<table class="striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Rut</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Accion</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($conex->query($sql) as $row) {?>
					<tr>
						<td><?php echo $row['Id']?></td>
						<td><?php echo $row['Rut']?></td>
						<td><?php echo $row['Nombre']?></td>
						<td><?php echo $row['Apellido']?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['Id'] ?>"><i class="material-icons">edit</i></a>&nbsp;&nbsp;&nbsp;<a href="model/accion_crud.php?del=<?php echo $row['Id'] ?>"><i class="material-icons">delete</i></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<script src="../../js/materialize.min.js"></script>
	</body>
	</html>
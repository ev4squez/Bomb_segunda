<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">Material Mayor</a></li>
		<li><a href="#!">Material Menor</a></li>
		<li class="divider"></li>
		<li><a href="#!">Salir</a></li>
	</ul>
	<nav>
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="views/user/user.php">Voluntarios</a></li>
				<li><a href="#!">Oficiales</a></li>
				<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Inventario<i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
		</div>
	</nav>

	

<?php include ('content.php') ?>

<?php include ('footer.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/materialize.min.css">
</head>
<body>

	<ul id="dropdown1" class="dropdown-content">
		<li><a href="#!">one</a></li>
		<li><a href="#!">two</a></li>
		<li class="divider"></li>
		<li><a href="#!">three</a></li>
	</ul>
	<nav>
		<div class="nav-wrapper">
			<a href="#!" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down">
				<li><a href="#!">Sass</a></li>
				<li><a href="#!">Components</a></li>
				<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
			</ul>
		</div>
	</nav>

	

<?php include ('content.php') ?>

<?php include ('footer.php') ?>
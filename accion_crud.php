<?php 

include("conexcion.php");
global $conex;


if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$rut = $_POST['rut'];
	$nom = $_POST['nombre'];
	$apell = $_POST['apellido'];
	mysqli_query($conex, "UPDATE responsable SET Rut='$rut', Nombre='$nom', Apellido='$apell' WHERE Id=$id");
	header('location: index.php');
}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conex, "DELETE FROM responsable WHERE Id=$id");
	header('location: index.php');
}
?>

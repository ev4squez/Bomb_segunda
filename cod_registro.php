<?php

include("conexcion.php");

$rut = $_POST['rut'];
$nom = $_POST['nombre'];
$apell = $_POST['apellido'];

insert($rut, $nom, $apell);


function insert($rut, $nom, $apell){
global $conex;

if(!mysqli_query($conex, "INSERT INTO responsable(Rut, Nombre, Apellido) VALUES ('".$rut."','".$nom."','".$apell."')"))
{
    echo "Error";
}else {
    echo "Accion exitosa";
}
}
?>
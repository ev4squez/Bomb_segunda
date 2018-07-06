<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/materialize.css" />
    
</head>
<body>
<h1>Registro</h1>

<form action="cod_registro.php" method="post">
<div class="row">
<div class="col s12 m6 l3">
<input type="text" id="rut" name="rut" require placeholder="Rut...">
</div>
<div class="col s12 m6 l3">
<input type="text" id="nombre" name="nombre" require placeholder="Nombre...">
</div>
<div class="col s12 m6 13">
<input type="text" id="apellido" name="apellido" require placeholder="Apellido...">
</div>
<div class="col s12 m6 13">
<button class="btn" type="submit"> Registrar Usuario</button>
</div>
</div>

</form>
<script src="js/materialize.js"></script> 
</body>
</html>
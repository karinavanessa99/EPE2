<!DOCTYPE html>
<html lang="en">
<?php
$nombre = $_POST["nombre"];
$libro = $_POST["libro"];
$dia= $_POST["dia"];
$genero = $_POST["genero"];
$comentario = $_POST["comentario"];
?>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Recibe</title>
</head>
<body>
<header>
<h1>Recibe datos</h1>
</header> 
<nav></nav>
<section>
<article>
<h2>Datos:</h2>
<?php
echo "Nombre: $nombre"."<br>";
echo "libro: $libro"."<br>";
print "dia: ".$dia."<br>";
echo "genero: $genero"."<br>";
#actividades
if (isset($_POST["Enviar"])) {
if(is_array($_POST["actividades"]));
$Cantidad=0;
$Contador=0;
$seleccionar="";
foreach($_POST["actividades"] as $key=>$value){
if($Cantidad !=$Contador-1)
$seleccionar .=$value.' , ';
else
$seleccionar .=$value.'.';
$Cantidad++;
}
}
echo "Haz seleccionado : ".$seleccionar."<br>";
echo 'Comentario: ' . "$comentario <br>"; 
?>
</article>
<article>
<h2>Conexión BD</h2>
<?php
$servidor = "localhost";
$usuario = "root";
$contrasenia = "root";
$nombreBD = "sitio";
//se crea la conexión.
$conexion = new mysqli($servidor, 
$usuario, $contrasenia, $nombreBD);
#comprobamos la conexión.
if($conexion -> connect_error){ #conexion.connect_error()
die("conexión fallida! ".$conexion -> connect_error);
}
echo "La conexión se ha realizado con exito!!";
?>
</article>
<article>
<h2>Ingresar datos.</h2>
<?php
$sql = "INSERT into post(nombre, correo, comentario) values(
'$nombre','$correo','$comentario');"; 
if($conexion -> query($sql) == TRUE){

echo "Datos ingresados!!";
}else{
echo "Error: ".$sql. " ".$conexion->error;
}
$conexion->close(); 
?>
</article>
</section>
</body>
</html>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$n = $_REQUEST["rut"];



$servidor="localhost";
$usuario="root";
$Contrasenia="root";
$nombreBD="biblioteca";

$conexion =new mysqli($servidor,$usuario,$Contrasenia,$nombreBD);

 if($conexion -> connect_error){#conexion.connect.error()
 die("conexion fallida".$conexion -> connect_error);
}
echo "conexion exitosa";


//Variables

$rut = $_POST["rut"];
$nombre = $_POST["nombre"];
$libro = $_POST["libro"];


//consulta sql
@mysqli_select_db($db, $_conexion);
$actualizar = "UPDATE lector set nombre='$nombre',
libro = '$libro' where rut = '$rut'";


//ejecutar consulta


$sql =  "UPDATE lector set nombre='$nombre',
libro = '$libro' where rut = '$rut'";

if($conexion -> query($sql) == TRUE){

   echo "Datos actualizados!!";
}else{
   echo "Error: ".$sql. " ".$conexion->error;
}
$conexion->close();    
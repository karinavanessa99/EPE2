<?php
error_reporting(E_ALL ^ E_NOTICE);

$id_l = $_REQUEST["id_l"];



$servidor="localhost";
$usuario="root";
$Contrasenia="root";
$nombreBD="biblioteca";

$conexion =new mysqli($servidor,$usuario,$Contrasenia,$nombreBD);

 if($conexion -> connect_error){#conexion.connect.error()
 die("conexion fallida".$conexion -> connect_error);
}
echo '<script>
alert("conexion exitosa")
</script>';


//Variables
$id_l = $_POST["id_l"];
$nombre = $_POST["nombre"];
$stock = $_POST["stock"];
$estado = $_POST["estado"];
$comentario = $_POST["comentario"];


//consulta sql
@mysqli_select_db($db, $_conexion);
$actualizar = "UPDATE libro set nombre='$nombre',
stock = '$stock', estado = '$estado', comentario ='$comentario' where id_l = '$id_l'";


//ejecutar consulta


$sql =  "UPDATE libro set nombre='$nombre',
stock = '$stock', estado = '$estado', comentario ='$comentario' where id_l = '$id_l'";

if($conexion -> query($sql) == TRUE){

   echo'<script>
   alert("Datos actualizados")
   </script>';
}else{
    echo'<script>
    alert("Error: ".$sql. " ".$conexion->error)
    </script>';
}
$conexion->close();    
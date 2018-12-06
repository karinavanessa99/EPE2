<?php
error_reporting(E_ALL ^ E_NOTICE);

$id_e = $_REQUEST["id_e"];



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
$id_e = $_POST["id_e"];
$nombre = $_POST["nombre"];
$stock = $_POST["genero"];
$estado = $_POST["cargo"];



//consulta sql
@mysqli_select_db($db, $_conexion);
$actualizar = "UPDATE empleado set nombre='$nombre',
 genero= '$genero', cargo ='$cargo' where id_e = '$id_e'";


//ejecutar consulta


$sql =  "UPDATE empleado set nombre='$nombre',
 genero = '$genero', cargo ='$cargo' where id_e = '$id_e'";

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
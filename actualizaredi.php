<?php
error_reporting(E_ALL ^ E_NOTICE);

$id_edit  = $_REQUEST["id_edit "];



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
$id_edit  d = $_POST["id_edit "];
$nombre = $_POST["nombre"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];



//consulta sql
@mysqli_select_db($db, $_conexion);
$actualizar = "UPDATE editorial set nombre='$nombre',
direccion = '$direccion', telefono = '$telefono' where id_edit  = '$id_edit '";


//ejecutar consulta


$sql =  "UPDATE editorial set nombre='$nombre',
direccion = '$direccion', telefono = '$telefono' where id_edit  = '$id_edit '";

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
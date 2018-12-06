
<?php
error_reporting(E_ALL ^ E_NOTICE);

       $servidor="localhost";
       $usuario="root";
       $Contrasenia="root";
       $nombreBD="biblioteca";
       
       $conexion =new mysqli($servidor,$usuario,$Contrasenia,$nombreBD);

        if($conexion -> connect_error){#conexion.connect.error()
        die("conexion fallida".$conexion -> connect_error);
    }
    echo'<script>
            alert("conexion exitosa")
            </script>';




?>


<?php
//variable
$rut= $_REQUEST['rut'];
//consulta
 $sql = "DELETE from lector where rut = '$rut' ";   
if($conexion -> query($sql) == TRUE){

    echo'<script>
    alert("Se elimino correctamente");

    </script>';
    header("Location: verdatos.php");
}else{
    echo "Error: ".$sql. " ".$conexion->error;
}
$conexion->close();    

?>


    <?php
             $id_l = $_POST["id_l"];
             $nombre = $_POST["nombre"];
             $direccion = $_POST["stock"];
             $telefono= $_POST["estado"];
             $telefono = $_POST["comentario"];
             
    ?>



       <?php
       $servidor="localhost";
       $usuario="root";
       $Contrasenia="root";
       $nombreBD="biblioteca";
       
       $conexion =new mysqli($servidor,$usuario,$Contrasenia,$nombreBD);

        if($conexion -> connect_error){#conexion.connect.error()
        die("conexion fallida".$conexion -> connect_error);
    }
    echo'<script>
    alert("Conexion Exitosa")
    </script>';

        ?>
      

        <?php
         $sql = "INSERT into libro(id_l, nombre, stock, estado, comentario) values(
            '$id_l', '$nombre','$stock' ,'$estado', '$comentario')";

        if($conexion -> query($sql) == TRUE){

            echo'<script>
            alert("Datos ingresados!")
            </script>';
            header("Location: index.html");

        }else{
            echo'<script>
            alert("Error")
            </script>';
            header("Location: index.html");
        
        }
        $conexion->close();    
        
        ?>
  

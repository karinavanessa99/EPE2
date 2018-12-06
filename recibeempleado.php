
    <?php
             $id_e = $_POST["id_e"];
             $nombre = $_POST["nombre"];
             $genero = $_POST["genero"];
             $comentario = $_POST["cargo"];
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
         $sql = "INSERT into empleado(id_e, nombre, genero, cargo) values(
            '$id_e', '$nombre','$genero' ,'$cargo')";

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
  

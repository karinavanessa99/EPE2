
    <?php
             $rut = $_POST["rut"];
             $nombre = $_POST["nombre"];
             $libro = $_POST["libro"];
             $dia= $_POST["dia"];
             $genero = $_POST["genero"];
             $comentario = $_POST["comentario"];
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
         $sql = "INSERT into lector(rut, nombre, libro, dia, genero, actividades, comentario) values(
            '$rut', '$nombre','$libro' ,'$dia','$genero','$actividades','$comentario')";

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
  

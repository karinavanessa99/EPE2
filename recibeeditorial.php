
    <?php
             $id_edit  = $_POST["id_edit "];
             $nombre = $_POST["nombre"];
             $direccion = $_POST["direccion"];
             $telefono= $_POST["telefono"];
             
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
         $sql = "INSERT into editorial(id_edit , nombre, direccion, telefono) values(
            '$id_edit ', '$nombre','$direccion' ,'$telefono')";

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
  

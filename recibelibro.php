<!DOCTYPE html>
<html lang="en">
    <?php
             $id = $_POST["id"];
             $nombre = $_POST["nombre"];
             $stock = $_POST["stock"];
             $estado = $_POST["estado"];
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
                      echo "id: $id"."<br>";
                      echo "Nombre: $nombre"."<br>";
                     
                      print "stock: ".$stock."<br>";
                      echo "estado: $estado"."<br>";
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
         $sql = "INSERT into post( id, nombre, stock, estado, comentario) values(
           '$id', '$nombre','$stock', '$estado','$comentario');";   
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
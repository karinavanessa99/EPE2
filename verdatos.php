<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Ver datos</title>
</head>
<body style="background-color:#CCFFFF">
<button><a href="index.html">volver</a></button>
<table border = "2">
            <thead>
        
						
					
            </thead>
            <tbody>
                <tr>
                    <td>RUT</td>
                    <td>NOMBRE</td>
                    <td>LIBRO</td>
                    <td>DIA</td>
                    <td>GENERO</td>
                    <td>ACTIVIDADES</td>
                    <td>COMENTARIO</td>
                </tr>
    <header>
        <center><h1>Lectores</h1></center>
    </header>
    <nav></nav>
<section>
    <article>
        <h2>Datos BD</h2>
        <?php
             $servidor = "localhost";
             $usuario = "root";
             $contrasenia = "root";
             $nombreBD = "biblioteca";
             //se crea la conexión.
             $conexion = new mysqli($servidor, 
             $usuario, $contrasenia, $nombreBD);
         
             #comprobamos la conexión.
             if($conexion -> connect_error){ #conexion.connect_error()
                 die("conexión fallida! ".$conexion -> connect_error);
             }

             $sql = "SELECT * FROM lector";
             $resultados = $conexion -> query($sql);

             if($resultados -> num_rows > 0){
                
                #se recuperan las filas como arrays asociativos.
                # arrays clase - valor
                while($row = $resultados -> fetch_assoc()){
                    ?>
                    <tr>
                    <td> <?php echo $row["rut"] ?> </td>
                
                     <td><?php echo $row["nombre"] ?> </td>
                     <td> <?php echo $row["libro"] ?></td>
                     <td><?php echo $row["dia"] ?></td>
                     <td> <?php echo $row["genero"]?></td>
                     <td> <?php print $row["actividades"]?></td>
                     <td><?php echo $row["comentario"]?>
                     <br>
                             
                     <td><a href="eliminar.php?rut=<?php echo $row['rut']; ?>">Eliminar</a> </td>
                     </td>
                     
                                         </tr>

                         <?php
                }
                        }else{
                 echo "No hay datos!!";
             }   
             $conexion -> close();
   
             ?>
         
    </article>
  
</section>
</body>
</html>
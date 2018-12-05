<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ver datos</title>
</head>
<body>
    <header>
        <h1>Ver datos</h1>
    </header>
    table border = "7">
            <thead>
                <tr>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NOMBRE</td>
                    <td>LIBRO</td>
                    <td>DIA</td>
                    <td>GENERO</td>
                    <td>ACTIVIDADES</td>
                    <td>COMENTARIO</td>
                    
                </tr>
    <nav></nav>
<section>
    <article>
        <h2>Datos BD</h2>
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

             $sql = "SELECT id, nombre, correo, comentario FROM post";
             $resultados = $conexion -> query($sql);

             if($resultados -> num_rows > 0){
                
                #se recuperan las filas como arrays asociativos.
                # arrays clase - valor
                while($row = $resultados -> fetch_assoc()){

                    
                    <tr>
                    <td> echo $row['nombre'] ; </td>
                    <td> echo $row['libro'] ; </td>
                    <td> echo $row['dia'] ; </td>
                    <td> echo $row['genero'] ; </td>
                    <td> echo $row['actividades'] ; </td>
                    <td> echo $row['comentario']; </td>
                    
                </tr>
        

             }else{
                 echo "No hay datos!!";
             }   
             $conexion -> close();
        ?>
    </article>
</section>
</body>
</html>
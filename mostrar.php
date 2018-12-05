<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <div id="header">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header> <h2> <center> Registros de la base de datos</center> </h2></header>
<body >
    <center>
        <table border = "7">
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
            <?php
include 'bd.php';
//consulta
$consulta = "select * from clientes";
$mostrar = $conexion -> query($consulta);

while($fila = $mostrar -> fetch_assoc()){
    //codigo para mostrar
    ?>
    <tr>
        <td><?php echo $fila['nombre'] ;?> </td>
        <td><?php echo $fila['libro'] ;?> </td>
        <td><?php echo $fila['dia'] ;?> </td>
        <td><?php echo $fila['genero'] ;?> </td>
        <td><?php echo $fila['actividades'] ;?> </td>
        <td><?php echo $fila['comentario'] ;?> </td>
        
    </tr>
   <?php
}
?>

    



            </tbody>
        </table>
    </center>
    <footer> 
    <div>
		<form action="index.html" method="post" class="form-register" onsubmit="return validar()"
		<tr>
				<td colspan="4" align="center">
					
						<a href="index.html"></a>
					
				 <center><input type="submit" value="Volver" class="submit" /></center>
			   </td>
		</tr>
		</form>
</div>   
    </footer>
</body>

</html>
    </article>
</section>
</body>
</html>
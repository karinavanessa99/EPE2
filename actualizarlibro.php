<!DOCTYPE HTML>
<html lang="es">

<meta charset="encoding">
<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

<script>
</script>

<title>Actualizar Libros</title>

<body style="background-color:#CCFFFF">

<article>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$id_l = $_REQUEST["id_l"];



$servidor="localhost";
$usuario="root";
$Contrasenia="root";
$nombreBD="biblioteca";

$conexion =new mysqli($servidor,$usuario,$Contrasenia,$nombreBD);

 if($conexion -> connect_error){#conexion.connect.error()
 die("conexion fallida".$conexion -> connect_error);
}
echo "conexion exitosa";

 ?>
</article>

<?php
         $sql =  "UPDATE libro set nombre='$nombre',
         stock = '$stock', estado = '$estado', comentario ='$comentario' where id_l = '$id_l'";

        if($conexion -> query($sql) == TRUE){
            echo'<script>
            alert("Datos actualizados")
            </script>';
        }else{
            echo "Error: ".$sql. " ".$conexion->error;
        }
        $conexion->close();    
        
		?>
   
    

<form action="actualizarli.php" method="POST" >



<div id="header">
    
<div id="top" role="navigation">
	
    <ul>
       
        <center><li><h2>Actualizacion de Libro</h2></li></center>
	</ul>
    <br class="clearfloat" />
    
</div></div>

<div id="container">
	<div id="mainContent"></div>
  <center>


<div id="actualizar" ><h1>actualizar</h1></div>

                  <article>
                   <table >
        
                        <tr>
						
                            <td>
							ID<input type="text" required name = "id_l" 
					placeholder = "ingrese id a modificar"></td>
					<td>
					Nombre libro
					<input type="text" id="nombre"  
					required name="nombre" value="
					<?php echo $row['nombre']; ?>"  />
					</td>
								
					<td>
					Stock
					<input type="text"  required name="stock"
				 id="stock" value="<?php echo $row['stock']; ?>" />
                    
                               
                    </td>
                    <td>
                    Nuevo estado    
                    <input type="text"  required name="estado"
				 id="estado" value="<?php echo $row['estado']; ?>" /></td>
                    <td>
                    Comentario    
                    <input type="text"  required name="comentario"
				 id="comentario" value="<?php echo $row['comentario']; ?>" /></td>
				

                        </tr>
        <tr>
                
                      </td>
        
        </tr>
        </table>
        
					
					


		   
		    <tr>
					<td colspan="4" align="center">
			     	<center><input type="submit" value="Actualizar" class="submit" /></center>
                   </td>
                   <td>
                   <button><a href="index.html">volver</a></button>
                   </td>
			</tr>
			</article>

</form>

<div>
		<form action="mostrar.php" method="post" 
		<tr>
				
		</tr>
		</form>
</div> 

</center>
</div>
<div id="wrap_footer">

</div>
</body>
</html>
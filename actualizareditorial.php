<!DOCTYPE HTML>
<html lang="es">

<meta charset="encoding">
<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

<script>
</script>

<title>Actualizar Editorial </title>

<body style="background-color:#CCFFFF">

<article>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$id_edit = $_REQUEST["id_edit "];



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
         $sql =  "UPDATE editorial set nombre='$nombre',
         direccion = '$direccion', telefono = '$telefono' where id_edit  = '$id_edit '";

        if($conexion -> query($sql) == TRUE){
            echo'<script>
            alert("Datos actualizados")
            </script>';
        }else{
            echo "Error: ".$sql. " ".$conexion->error;
        }
        $conexion->close();    
        
		?>
   
    

<form action="actualizaredi.php" method="POST" >



<div id="header">
    
<div id="top" role="navigation">
	
    <ul>
       
        <center><li><h2>Actualizacion de Editorial</h2></li></center>
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
					ID<input type="text" required name = "id_edit " 
					placeholder = "ingrese id a modificar"></td>
					<td>
					Nombre Editorial
					<input type="text" id="nombre"  
					required name="nombre" value="
					<?php echo $row['nombre']; ?>"  />
					</td>
								
					<td>
					direccion
					<input type="text"  required name="direccion"
				 id="direccion" value="<?php echo $row['direccion']; ?>" />
                    
                               
                    </td>
                    <td>
                    telefono 
                    <input type="text"  required name="telefono"
				 id="telefono" value="<?php echo $row['telefono']; ?>" /></td>
                
				

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
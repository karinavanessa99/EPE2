<!DOCTYPE HTML>
<html lang="es">

<meta charset="encoding">
<link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

<script>
</script>

<title>Actualizar Lectores</title>

<body style="background-color:#CCFFFF">

<article>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$n = $_REQUEST["rut"];



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
         $sql =  "UPDATE lector set nombre='$nombre',
		 libro = '$libro' where rut = '$rut'";

        if($conexion -> query($sql) == TRUE){

            echo "Datos actualizados!!";
        }else{
            echo "Error: ".$sql. " ".$conexion->error;
        }
        $conexion->close();    
        
		?>
   
    

<form action="actualizarlector.php" method="POST" >



<div id="header">
    
<div id="top" role="navigation">
	
    <ul>
       
        <center><li><h2>Actualizacion de Lector</h2></li></center>
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
							Rut<input type="text" required name = "rut" 
					placeholder = "ingrese rut a modificar"></td>
					<td>
					Nombre Lector
					<input type="text" id="nombre"  
					required name="nombre" value="
					<?php echo $fila['nombre']; ?>"  />
					</td>
								
					<td>
					Nuevo Libro
					<input type="text"  required name="libro"
				 id="libro" value="<?php echo $fila['libro']; ?>" />
                    
                               
					</td>
				

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

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

{
    header("Location: index.html");
        
}
$conexion->close();    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
   
</head>
 
<body  style="background-color:#CCFFFF">
 
   
 
    <center> <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera" >
                <img src="">
            </div>
 
            <div id="cuerpo">
                <form id="form-login" action="" method="post" autocomplete="off">
                    <!--A saber, el atributo for funciona como el id.-->
                    <!--ejemplo <label for="usuario">Usuario:</label>-->
                    <!--required es nuevo en html5, si el campo está vacío te avisa, pero cuidado, no valida la información-->
                    <p><label >Usuario:</label></p>
                        <input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>
 
                    <p><label>Contraseña:</label></p>
                        <input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
 
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                </form>
            </div><!--fin cuerpo-->
 
        </div><!-- fin contenedor -->
    </div><!--fin envoltura--></center>
</body>
 
</html>
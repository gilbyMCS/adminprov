<?php 

include("assets/conexion_log.php");
//registo usuarios 
if(isset($_POST["agregar"])){
    // evitamos que se haga inserccion sql //
    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]); 
    $password= mysqli_real_escape_string($conexion, $_POST["contrasena"]); 
    $rol= mysqli_real_escape_string($conexion, $_POST["rol"]); 
    $password_encripted = sha1($password);
    $sqluser ="SELECT id_login_rol FROM login_admin WHERE nombre = '$nombre'";
    $resultadouser=$conexion->query($sqluser);
    $filas= $resultadouser->num_rows;
    if($filas > 0){
        echo "<script>alert('El usuario ya esta conectado.');
        window.location = 'index.php';
        </script>";      
}else{
    $sqlusuario ="INSERT INTO login_admin (nombre, contra,rol_id) VALUES ('$nombre',' $password_encripted',' $rol')";
    $resultadousuario = $conexion->query($sqlusuario);
    if($resultadousuario > 0){
        echo "<script>alert('El usuario agregado.');
            window.location = 'index.php';
            </script>";
    }else{
        echo "<script>alert('El usuario no se pudo registrar');
            window.location = 'index.php';
            </script>";
    
    }
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
  require_once 'lib/librerias.php';
  ?>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <!-- <div class="wrapper fadeInDown"> LE QUITAMOS EL FADEINDOWN PARA QUE MUESTRE EL MODDAL -->
    <div class="wrapper">
        <div id="formContent">
            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/GoldenPartiesLOGO.jpg.png" id="icon" alt="User Icon" />
            </div>
            <!-- CHECAR ESTA URL -->
            <form action="controller/login.php" method="POST">
                <!-- ARRIBA LA URL -->
                <input type="text" class="form-control" id="usuario" class="fadeIn second" name="usuario"
                    placeholder="Usuario" required>
                <p></p>
                <input type="text" class="form-control" id="contraseña" class="fadeIn third" name="contraseña"
                    placeholder="Inserta tu Contraseña" required>
                <p></p>
                <input type="submit" class="fadeIn fourth" value="ingresar" name="btnlogin">
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
                            No tienes cuenta? Registrate!
                        </button>
                    </label>
                </div>
            </form>
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Registro Usuario</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>


                        <div class="modal-body">
                            <div class="container">
                                <!-- todas las acciones se ralizaran en el mismo formulario -->
                                <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>ROL</label>
                                    <input type="text" class="form-control" id="contrasena" name="rol">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="text" class="form-control" id="contrasena" name="contrasena">
                                </div>
                            </div>

                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="submit" name="agregar" class="btn btn-primary">Registrate!</button>
                            </form>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<script src="js/funciones.js"></script>
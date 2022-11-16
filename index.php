<!DOCTYPE html>
<html lang="en">
<head>
    <?php
  require_once 'lib/librerias.php';
  ?>
    <link rel="stylesheet" href="../golden01/css/estilos.css">
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
                    placeholder="Usuario">
                <p></p>
                <input type="text" class="form-control" id="contraseña" class="fadeIn third" name="contraseña"
                    placeholder="Inserta tu Contraseña">
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
                                <form id="registro">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Numero</label>

                                    <input type="text" class="form-control" id="numero" name="numero">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Correo</label>

                                    <input type="text" class="form-control" id="correo" name="correo">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="text" class="form-control" id="contrasena" name="contrasena">
                                </div>
                            </div>
                            </form>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" id="btnagregar" class="btn btn-primary">Registrate!</button>
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
<?php 

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
                <input type="submit" class="fadeIn fourth" value="ingresar">
            </form>
    </div>
</body>

</html>

<script src="js/funciones.js"></script>
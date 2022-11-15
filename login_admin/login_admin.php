<?php 
require_once '../assets/conexion.php';

session_start();
//se envia el parametro por get cerrar sesion pus para serrar sesion xd
if(isset($_GET['cerrar_sesion'])){
    session_unset();
    session_destroy();
}
//para que no se vuelva al login y los diriga al rol que pertenesca o eso creo jajaja
if (isset($_SESSION['rol'])) {
    switch ($_SESSION['rol']) {
        case 1:
            header('Location: ../admin.php');
        break;
        case 2:
            header('location: ../proveedor.php');
        break;
        
        default:
    }
}

//autenticacion de un usuario
if (isset($_POST['usuario']) && isset($_POST['contra'])) {
    $usuario=$_POST['usuario'];
    $contra=$_POST['contra'];

    $conexion=conexion();
    $sql="SELECT * FROM login_admin WHERE nombre='$usuario' AND contra='$contra'";
    $query=mysqli_query($conexion, $sql);

    $row=$query->fetch_assoc();
    if ($row==true) {
        //valida rol
        $rol=$row['rol_id'];
        $_SESSION['rol']=$rol;

        switch ($_SESSION['rol']) {
            case 1:
                header('Location: ../admin.php');
            break;
            case 2:
                header('location: ../proveedor.php');
            break;
            
            default:
        }
    }else {
        //no existe el usuario
        echo "el usuario o contraseña son incorrectas";
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  require_once '../lib/librerias.php';
  ?>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <div class="container">
          <h2>Stacked form</h2>
          <form action="#" method="POST">
            <div class="form-group">
              <label for="email">Usuario:</label>
              <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu usuario" name="usuario">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="contra" placeholder="Enter password" name="contra">
            </div>
            <button type="submit" name="btnlogin" class="btn btn-primary" value="iniciar">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-6 ">
        <div class="container-fluid">

        </div>

      </div>
    </div>
    <div>
</body>

</html>
<?php
require_once '../assets/conexion.php';
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=conexion();

$consulta="SELECT*FROM login_admin where nombre='$usuario' and contra='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['rol_id']==1){ //administrador
    header("location:../view/administrador/index.php");

}else
if($filas['rol_id']==2){ //cliente
header("location:../view/proveedor/index.php");
}
else{
    ?>
    <?php
    include("../index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

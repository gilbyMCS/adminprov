<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","goolpartie");

$consulta="SELECT*FROM login_admin where nombre='$usuario' and contra='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['rol_id']==1){ //administrador
    header("location:../view/administrador/index.php");

}else
if($filas['rol_id']==2){ //cliente
header("location:../view/proveedor/view/index.php");
}
else{
    echo "<script>alert('Usuario no existente');
            window.location = '../index.php';
            </script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);

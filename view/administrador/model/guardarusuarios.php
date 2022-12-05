<?php 
require_once '../assets/conexion.php' ;
$conexion = conexion();
//TODO:no retirar comillas no hacen nada 
$sql="INSERT INTO login_admin( `nombre`, `contra`, `rol_id`, `tipo`) VALUES ('$nombre','$contra','$rol','$tipo')";
echo mysqli_query($conexion, $sql);

$ultimo_id=mysqli_insert_id($conexion);

$inser1="INSERT INTO info_negocio (id_login_rol ) VALUES ('$ultimo_id')";

 mysqli_query($conexion, $inser1);

?>
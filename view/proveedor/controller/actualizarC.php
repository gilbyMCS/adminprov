<?php 
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descrpcion=$_POST['descripcion'];
$precio=$_POST['precio'];

require_once '../../../assets/conexion.php';

$conexion=conexion();

$sql="UPDATE info_negocio SET name_negocio='$nombre', descripcion='$descrpcion', precio='$precio' WHERE id_negocio='$id'";

echo mysqli_query($conexion, $sql);

?>
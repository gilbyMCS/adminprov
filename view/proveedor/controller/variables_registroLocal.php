<?php
$nombre=$_POST['nombre'];
$descrpcion=$_POST['descripcion'];
$precio=$_POST['precio'];


require_once '../../../assets/conexion.php';

$conexion=conexion();

$sql="INSERT INTO info_negocio(name_negocio, descripcion, precio) VALUES('$nombre', '$descrpcion', '$precio')";

echo mysqli_query($conexion, $sql);

?>
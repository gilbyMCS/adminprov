<?php 
$nombre=$_POST['nombre'];
$descrpcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$cel=$_POST['cel'];
$you=$_POST['youtube'];
$face=$_POST['face'];
$horario=$_POST['horario'];
$id=$_POST['id'];

require_once '../../../assets/conexion.php';

$conexion=conexion();

$sql="UPDATE info_negocio SET name_negocio='$nombre', descripcion='$descrpcion', precio='$precio',
correo='$correo', direccion='$direccion', cel_prov='$cel', youtube='$you', face='$face', horario='$horario' 
WHERE id_negocio='$id'";

echo mysqli_query($conexion, $sql);

?>

<?php
$nombre=$_POST['nombre'];
$descrpcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$id=$_POST['id'];

require_once '../../../assets/conexion.php';
$conexion=conexion();


$sql="UPDATE info_negocio SET name_negocio='$nombre', descripcion='$descrpcion', precio='$precio' 
WHERE id_negocio='$id'";

echo mysqli_query($conexion, $sql);

// $sql="INSERT INTO info_negocio(name_negocio, descripcion, precio,id_login_rol) VALUES('$nombre', '$descrpcion', '$precio')";



// echo mysqli_query($conexion, $sql);

?>
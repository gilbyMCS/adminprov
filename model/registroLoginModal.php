<?php 
require_once '../assets/conexion.php';
$conexion=conexion();

$sql="INSERT INTO login2 (nombre, numero, correo, contraseña) VALUES 
('$nombre', '$numero', '$correo', '$pswd')";

echo mysqli_query($conexion, $sql);

?>
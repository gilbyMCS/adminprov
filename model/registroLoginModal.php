<?php 
require_once '../assets/conexion.php';
$conexion=conexion();

$sql="INSERT INTO login (nombre, numero, correo, password) VALUES 
('$nombre', '$numero', '$correo', '$pswd')";

echo mysqli_query($conexion, $sql);

?>
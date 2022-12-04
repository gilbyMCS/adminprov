<?php 

require_once '../../../assets/conexion.php';
$conexion= conexion();

$query="UPDATE nombre_imagen SET name1='$name1', name2='$name2', name3='$name3',
 name4='$name4', name5='$name5' WHERE idName_imagen='$id'";

$resultado=mysqli_query($conexion, $query);

if ($resultado==1) {
    $sql="UPDATE descripcion_name SET descripcion1='$descri1', descripcion2='$descri2',
     descripcion3='$descri3', descripcion4='$descri4', descripcion5='$descri5' WHERE id_descripcion='$id'";
    echo mysqli_query($conexion, $sql);
}

?>
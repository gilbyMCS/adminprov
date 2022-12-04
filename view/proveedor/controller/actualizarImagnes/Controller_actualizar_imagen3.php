<?php 
require_once '../../../../assets/conexion.php';

$conexion=conexion();

$id=$_POST['id'];
$imagen=addslashes(file_get_contents($_FILES['img_V']['tmp_name']));

$sql="UPDATE imagenes SET imagen2='$imagen' WHERE id_imagen='$id'";
$resultado = mysqli_query($conexion, $sql);

if ($resultado==1) {
    header('Location: ../../view/editar_imagenes.php');

}else{
    echo "no se actualizo correctamente";
}


?>
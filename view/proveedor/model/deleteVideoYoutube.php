<?php
require_once '../../../assets/conexion.php';
$conexio=conexion();
$idVideo    	 = $_REQUEST['idVideo']; 

$sqlDeleteProd    = ("DELETE FROM video WHERE  id='" .$idVideo. "'");
$resultProd 	  = mysqli_query($conexio, $sqlDeleteProd);


header("Location:../view/editar_videos.php");
exit();

?>
  
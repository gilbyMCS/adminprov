<?php 
//imagen1

$name1=$_POST['name1'];
$descri1=$_POST['descri1'];
$img1=addslashes(file_get_contents($_FILES['img1']['tmp_name']));
//imagen2
$name2=$_POST['name2'];
$descri2=$_POST['descri2'];
$img2=addslashes(file_get_contents($_FILES['img2']['tmp_name']));
//imagen1¿3
$name3=$_POST['name3'];
$descri3=$_POST['descri3'];
$img3=addslashes(file_get_contents($_FILES['img3']['tmp_name']));
//imagen4
$name4=$_POST['name4'];
$descri4=$_POST['descri4'];
$img4=addslashes(file_get_contents($_FILES['img4']['tmp_name']));
//imagen5
$name5=$_POST['name5'];
$descri5=$_POST['descri5'];
$img5=addslashes(file_get_contents($_FILES['img5']['tmp_name']));

require_once '../model/imagen_model.php';

?>
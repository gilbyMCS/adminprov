<?php 
require_once '../../../assets/conexion.php';

$conexion=conexion();

$sql="INSERT INTO descripcion_name(descripcion1, descripcion2, descripcion3, descripcion4,descripcion5) VALUES 
('$descri1', '$descri1', '$descri1', '$descri1', '$descri1')";

$resultado= mysqli_query($conexion, $sql);
$ultimo_descri=mysqli_insert_id($conexion);

if ($resultado == 1) {
    $sql1="INSERT INTO nombre_imagen(name1, name2, name3, name4, name5, id_descripcion) VALUES 
    ('$name1', '$name2', '$name3', '$name4', '$name5', '$ultimo_descri')";
    $res=mysqli_query($conexion, $sql1);
    $ultimo_name=mysqli_insert_id($conexion);

    if ($res==1) {
        $sql2="INSERT INTO imagenes(imagen, imagen1, imagen2, imagen3, imagen4, idName_imagen) VALUES 
        ('$img1', '$img2', '$img3', '$img4', '$img5', '$ultimo_name')";
        $res2=mysqli_query($conexion, $sql2);
        $ultimo_img=mysqli_insert_id($conexion);

        if ($res2==1) {
            $sql="INSERT INTO info_negocio(id_imagen, name_negocio) VALUES ('$ultimo_img', '$name_negocio')";
            $res3=mysqli_query($conexion, $sql);

            header('Location: ../view/subirImagen.php');
        }
        
    }
    
}

<?php
date_default_timezone_set("America/Bogota");
setlocale(LC_ALL,"es_ES"); 
require_once '../../../assets/conexion.php';
$conexion=conexion();

$fecha              = date("d-m-Y g:i a");
$nombreVideo   		= $_POST['nombreVideo'];
$urlVideo   		= $_POST['urlVideo'];


$nombreVideo2  		= $_POST['nombreVideo2'];
$urlVideo2   		= $_POST['urlVideo2'];

//https://www.youtube.com/watch?v=MxhasqDtq1s
//CODIGO DE VIDEO 1
$cantidad_url_video 	= strlen($urlVideo);
if ($cantidad_url_video == '28') {
	$cortar_url 			= str_replace ('https://youtu.be/','',$urlVideo);
	$url_final_video 		= 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '41') {
	$cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '43') {
	$cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '58') {
	$cortar_url = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 

}elseif ($cantidad_url_video == '60') {
	$cortar_url = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo);
	$url_final_video = 'https://www.youtube.com/embed/' .$cortar_url; 
}else{
echo "URL INVALIDA";
}


//CODIGO DE VIDEO 2
$cantidad_url_video2 	= strlen($urlVideo2);
if ($cantidad_url_video2 == '28') {
	$cortar_url2 			= str_replace ('https://youtu.be/','',$urlVideo2);
	$url_final_video2		= 'https://www.youtube.com/embed/' .$cortar_url2; 

}elseif ($cantidad_url_video2 == '41') {
	$cortar_url2 = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo2);
	$url_final_video2 = 'https://www.youtube.com/embed/' .$cortar_url2; 

}elseif ($cantidad_url_video2 == '43') {
	$cortar_url2 = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo2);
	$url_final_video2 = 'https://www.youtube.com/embed/' .$cortar_url2; 

}elseif ($cantidad_url_video2 == '58') {
	$cortar_url2 = str_replace ('https://m.youtube.com/watch?v=','',$urlVideo2);
	$url_final_video2 = 'https://www.youtube.com/embed/' .$cortar_url2; 

}elseif ($cantidad_url_video2 == '60') {
	$cortar_url2 = str_replace ('https://www.youtube.com/watch?v=','',$urlVideo2);
	$url_final_video2 = 'https://www.youtube.com/embed/' .$cortar_url2; 
}else{
echo "URL INVALIDA";
}

//Creando mi INSERT a BD
$queryInsert = ("INSERT INTO 
videos(
	nombreVideo,
	urlVideo,
    nombreVideo2,
    urlVideo2,
	fecha
)
VALUES (
	'" .$nombreVideo. "',
	'" .$url_final_video. "',
    '" .$nombreVideo2. "',
	'" .$url_final_video2. "',
	'" .$fecha. "'
)");
$result = mysqli_query($conexion, $queryInsert);

header("Location:../view/subir_video.php");

?>
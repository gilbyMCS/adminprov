<?php
session_start();
if(isset($_SESSION['usuario'])){
    $conexion  = mysqli_connect('localhost','u837896258_golden','C2;yiicUR6','u837896258_golden');
    $user=$_SESSION['usuario'];
    $sql = "SELECT * from login_admin INNER JOIN info_negocio ON login_admin.id_login_rol = info_negocio.id_login_rol INNER JOIN imagenes ON info_negocio.id_imagen = imagenes.id_imagen INNER JOIN nombre_imagen 
    on imagenes.idName_imagen = nombre_imagen.idName_imagen 
    WHERE nombre='$user'";
    $resultado = mysqli_query($conexion, $sql);
    while($data=$resultado->fetch_assoc()){
     $nombre_1 =$data['name1'];
     $nombre_2 =$data['name2'];
     $nombre_3 =$data['name3'];
     $nombre_4 =$data['name4'];
     $nombre_5 =$data['name5'];

     $imagen_1=$data['imagen'];
     $imagen_2=$data['imagen1'];
     $imagen_3=$data['imagen2'];
     $imagen_4=$data['imagen3'];
     $imagen_5=$data['imagen4'];
     $idImagen=$data['id_imagen'];
    }


}else{
    header("location:../../../index.php");
}
?>
<!doctype html>
<html lang="en">
<?php
require_once '../assets/librerias.php';
require_once '../../../assets/conexion.php';
?>
<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <?php require_once 'siderbar.php'; ?>
        <!-- Fin sidebar -->
        <?php require_once 'navBar.php'; ?>
        <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-success">
                                    <h6 class="font-weight-bold mb-0 text-center text-white">Editar Imagenes</h6>
                                </div>
                                <div class="container my-3" style="text-align: center; display:flex; justify-content:center;">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="container-fluid">
                                                <h2><?php echo $nombre_1 ?></h2>
                                                <div class="card text-center" style="width:300px">
                                                    <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode( $imagen_1) ?>" style="width:100%">
                                                    <div class="card-body">
                                                        <a href="actualizar_imagen1.php?id=<?php echo  $idImagen;?>" class="btn btn-primary">ACTUALIZAR</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="container-fluid">
                                                <h2><?php echo  $nombre_2 ?></h2>
                                                <div class="card text-center" style="width:300px">
                                                    <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($imagen_2) ?>" style="width:100%">
                                                    <div class="card-body">
                                                    <a href="actualizar_imagen2.php?id=<?php echo  $idImagen; ?>" class="btn btn-primary">ACTUALIZAR</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h2><?php echo  $nombre_3 ?></h2>
                                            <div class="card text-center" style="width:300px">
                                                <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($imagen_3) ?>" alt="Card image" style="width:100%">
                                                <div class="card-body">
                                                <a href="actualizar_imagen3.php?id=<?php echo  $idImagen; ?>" class="btn btn-primary">ACTUALIZAR</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="container" style="text-align: center; display:flex; justify-content:center;">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2><?php echo  $nombre_4 ?></h2>
                                            <div class="card text-center" style="width:300px">
                                                <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($imagen_4) ?>" style="width:100%">
                                                <div class="card-body">
                                                <a href="actualizar_imagen4.php?id=<?php echo  $idImagen; ?>" class="btn btn-primary">ACTUALIZAR</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <h2><?php echo  $nombre_5 ?></h2>
                                            <div class="card text-center" style="width:300px">
                                                <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($imagen_5) ?>" alt="Card image" style="width:100%">
                                                <div class="card-body">
                                                <a href="actualizar_imagen5.php?id=<?php echo  $idImagen; ?>" class="btn btn-primary">ACTUALIZAR</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>

    </div>
    </div>
    </div>
</body>

</html>
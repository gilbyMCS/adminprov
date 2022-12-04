<?php
session_start();
if(isset($_SESSION['usuario'])){
}else{
    header("location:../../../index.php");
}
?>
<!doctype html>
<html lang="en">

<?php
require_once '../assets/librerias.php';
require_once '../../../assets/conexion.php';
$conexion = conexion();
$user=$_SESSION['usuario'];
$sql = "SELECT * FROM imagenes INNER JOIN nombre_imagen ON imagenes.idName_imagen=nombre_imagen.idName_imagen WHERE id_imagen=1";
$res = mysqli_query($conexion, $sql);
$row = $res->fetch_assoc();
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
                                                <h2><?php echo $row['name1']; ?></h2>
                                                <div class="card text-center" style="width:300px">
                                                    <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($row['imagen']) ?>" style="width:100%">
                                                    <div class="card-body">
                                                        <a href="actualizar_imagen1.php?id=<?php echo $row['id_imagen'];?>" class="btn btn-primary">ACTUALIZAR</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="container-fluid">
                                                <h2><?php echo $row['name2']; ?></h2>
                                                <div class="card text-center" style="width:300px">
                                                    <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($row['imagen1']) ?>" style="width:100%">
                                                    <div class="card-body">
                                                    <a href="actualizar_imagen2.php?id=<?php echo $row['id_imagen'];?>" class="btn btn-primary">ACTUALIZAR</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <h2><?php echo $row['name3']; ?></h2>
                                            <div class="card text-center" style="width:300px">
                                                <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($row['imagen2']) ?>" alt="Card image" style="width:100%">
                                                <div class="card-body">
                                                <a href="actualizar_imagen3.php?id=<?php echo $row['id_imagen'];?>" class="btn btn-primary">ACTUALIZAR</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="container" style="text-align: center; display:flex; justify-content:center;">
                                    <div class="row">
                                        <div class="col-6">
                                            <h2><?php echo $row['name4']; ?></h2>
                                            <div class="card text-center" style="width:300px">
                                                <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($row['imagen3']) ?>" style="width:100%">
                                                <div class="card-body">
                                                <a href="actualizar_imagen4.php?id=<?php echo $row['id_imagen'];?>" class="btn btn-primary">ACTUALIZAR</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-6">
                                            <h2><?php echo $row['name5']; ?></h2>
                                            <div class="card text-center" style="width:300px">
                                                <img class="card-img-top" src="data:img/jpg;base64,<?php echo base64_encode($row['imagen4']) ?>" alt="Card image" style="width:100%">
                                                <div class="card-body">
                                                <a href="actualizar_imagen5.php?id=<?php echo $row['id_imagen'];?>" class="btn btn-primary">ACTUALIZAR</a>
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
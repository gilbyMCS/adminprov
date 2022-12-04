<?php
require_once '../../../assets/conexion.php';
$conexion = conexion();
$id = $_GET['id'];
$sql = "SELECT * FROM imagenes WHERE id_imagen='$id'";
$resultado = mysqli_query($conexion, $sql);
$row = $resultado->fetch_assoc();
?>


<!Doctype html>
<html lang="en">

<?php
require_once '../assets/librerias.php';
?>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <?php require_once 'siderbar.php'; ?>
        <!-- Fin sidebar -->
        <?php require_once 'navBar.php'; ?>
        <!-- Fin Navbar -->

        <!-- Page Content -->

        <section>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 my-3">
                        <div class="card rounded-0">
                            <form action="../controller/actualizarImagnes/Controller_actualizar_imagen4.php" method="POST" enctype="multipart/form-data" id="formulario-ejemplo">
                                <div class="container text-center">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?php echo $row['id_imagen']; ?>">
                                        <div class="col-6 my-3">
                                        <img height='30%' src='data:img/jpg;base64,<?php echo base64_encode($row['imagen3']) ?>'>
                                        </div>
                                        <div class="col-6 my-3">
                                            <input type="file" class="form-control-file border" name="img_V" value="<?php echo base64_encode($row['imagen3']) ?>">
                                            <br>
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    </div>
    </div>
    <?php require_once '../assets/script.php';  ?>
</body>

</html>
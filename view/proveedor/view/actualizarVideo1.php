<?php
require_once '../../../assets/conexion.php';
$conexion = conexion();
$id = $_GET['idVideo1'];
$sql = "SELECT * FROM videos WHERE id_video='$id'";
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
                            <div class="container mt-5 pd-5">
                                <h2 class="text-center">Actualizar Video para la web</h2>
                                <hr>

                                <form action="../controller/actualizarVideoYoutube1.php" method="post">
                                    <h2>Actualizar video</h2>
                                    <input type="hidden" name="id" value="<?php echo$row['id_video']  ?>">
                                    <div class="form-group">
                                        <label for="nombreVideo">Nombre del Videos</label>
                                        <input type="text" name="nombreVideo" class="form-control"value="<?php echo$row['nombreVideo2']  ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="urlVideo">Pegar URL del Video <em>(Desde Youtube)</em></label>
                                        <input type="text" name="urlVideo" class="form-control" value="<?php echo$row['urlVideo2']  ?>">
                                    </div>
                                    <div class="form-group mb-5">
                                        <button type="submit" class="btn btn-primary  btn-lg btn-block">Actualizar Video</button>
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

</html>
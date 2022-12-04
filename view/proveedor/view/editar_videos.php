<!doctype html>
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
        <div id="content" class="bg-grey w-100">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 my-3">
                            <div class="card rounded-0">
                                <div class="container mt-5 pd-5">
                                    <?php
                                    require_once '../../../assets/conexion.php';
                                    $conexion = conexion();
                                    $sqlVideo   = ("SELECT * FROM videos ORDER BY id_video DESC ");
                                    $queryVideo = mysqli_query($conexion, $sqlVideo);
                                    $dataVideo = mysqli_fetch_array($queryVideo);

                                    ?><a></a>
                                    <h2 class="text-center mt-1 mb-3">Mis Videos de Youtube</h2>
                                    <hr>
                                    <div class="container text-center">
                                        <div class="row">
                                            <div class="col-6">
                                                <h2><?php echo $dataVideo['nombreVideo']; ?></h2>
                                                <iframe width="253" height="200" src="<?php echo $dataVideo['urlVideo']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <a href="actualizarVideo.php?idVideo=<?php echo $dataVideo['id_video']; ?>" class="btn btn-success btn-block" onclick="return confirm('Estás seguro que deseas actualizar el Video?');">Actualizar Video</a>
                                            </div>
                                            <div class="col-6">
                                                <h2><?php echo $dataVideo['nombreVideo2']; ?></h2>
                                                <iframe width="253" height="200" src="<?php echo $dataVideo['urlVideo2']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <a href="actualizarVideo1.php?idVideo1=<?php echo $dataVideo['id_video']; ?>" class="btn btn-success btn-block" onclick="return confirm('Estás seguro que deseas actualizar el Video?');">Actualizar Video</a>
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
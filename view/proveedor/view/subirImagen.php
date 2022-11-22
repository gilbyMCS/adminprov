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
                                <div class="card-header bg-success">
                                    <h6 class="font-weight-bold mb-0 text-center text-white">Subir Imagenes</h6>
                                </div>
                                <div class="card-body">
                                    <form action="../controller/imagen_controller.php" method="POST" enctype="multipart/form-data">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name1">
                                                </div>
                                                <div class="col-4">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri1">
                                                </div>
                                                <div class="col-4">
                                                    <label>Ingresa imagen:</label>
                                                    <input type="file" class="form-control-file border" name="img1">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name2">
                                                </div>
                                                <div class="col-4">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri2">
                                                </div>
                                                <div class="col-4">
                                                    <label>Ingresa imagen:</label>
                                                    <input type="file" class="form-control-file border" name="img2">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name3">
                                                </div>
                                                <div class="col-4">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri3">
                                                </div>
                                                <div class="col-4">
                                                    <label>Ingresa imagen:</label>
                                                    <input type="file" class="form-control-file border" name="img3">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name4">
                                                </div>
                                                <div class="col-4">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri4">
                                                </div>
                                                <div class="col-4">
                                                    <label>Ingresa imagen:</label>
                                                    <input type="file" class="form-control-file border" name="img4">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name5">
                                                </div>
                                                <div class="col-4">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri5">
                                                </div>
                                                <div class="col-4">
                                                    <label>Ingresa imagen:</label>
                                                    <input type="file" class="form-control-file border" name="img5">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Agregar</button>
                                        </div>
                                    </form>
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
    <?php require_once 'assets/script.php';  ?>
</body>

</html>
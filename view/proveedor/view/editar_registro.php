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
                <div class="container text-center" style="width: 80%;">
                    <div class="row">
                        <div class="col-12 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-success">
                                    <h6 class="font-weight-bold mb-0 text-center text-white">EDITAR REGISTRO NEGOCIO</h6>
                                </div>
                                <div class="card-body">
                                    <?php
                                    require_once '../../../assets/conexion.php';
                                    $conexion = conexion();
                                    $sql = "SELECT id_negocio, name_negocio, descripcion, precio, name1, name2, name3, name4, name5, descripcion1, descripcion2, descripcion3, descripcion4, descripcion5 FROM `info_negocio`
                                                INNER JOIN imagenes ON info_negocio.id_imagen=imagenes.id_imagen
                                                INNER JOIN nombre_imagen ON imagenes.idName_imagen= nombre_imagen.idName_imagen 
                                                INNER JOIN descripcion_name ON nombre_imagen.id_descripcion=descripcion_name.id_descripcion WHERE id_negocio=1";
                                    $resultado = mysqli_query($conexion, $sql);
                                    $row = $resultado->fetch_assoc();
                                    ?>
                                    <form id="registro_act">
                                        <input type="hidden" name="id" value="<?php echo $row['id_negocio']; ?>">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Nombre del negocio:</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['name_negocio'];  ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Descripcion del negocio:</label>
                                                    <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $row['descripcion'];  ?>">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label>Precio promedio:</label>
                                                <input type="number" class="form-control" id="precio" name="precio" value="<?php echo $row['precio'];  ?>">
                                            </div>
                                        </div>
                                    </form>
                                    <button type="button" id="btnaact" class="btn btn-primary">ACTUALIZAR :)</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="container text-center" style="width: 80%;">
                    <div class="row">
                        <div class="col-lg-12 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-success">
                                    <h6 class="font-weight-bold mb-0 text-center text-white">EDITAR INFORMACION IMAGENES</h6>
                                </div>
                                <div class="card-body">
                                    <form id="img_update">
                                    <input type="hidden" name="id" value="<?php echo $row['id_negocio']; ?>">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name1" value="<?php echo $row['name1'];  ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri1"value="<?php echo $row['descripcion1'];  ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name2"value="<?php echo $row['name2'];  ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri2"value="<?php echo $row['descripcion2'];  ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name3" value="<?php echo $row['name3'];  ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri3" value="<?php echo $row['descripcion3'];  ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name4" value="<?php echo $row['name4'];  ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri4" value="<?php echo $row['descripcion4'];  ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name5" value="<?php echo $row['name5'];  ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri5" value="<?php echo $row['descripcion5'];  ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" id="btnactualizar">Actualizar :)</button>
                                        </div>
                                    </form>
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
<script src="../js/funciones.js"></script>
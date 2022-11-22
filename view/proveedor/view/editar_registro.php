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
                                    <h6 class="font-weight-bold mb-0 text-center text-white">EDITAR REGISTRO</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre del negocio</th>
                                                    <th>Descripcion del negocio</th>
                                                    <th>Precio</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                <?php
                                                require_once '../../../assets/conexion.php';
                                                $conexion = conexion();
                                                $sql = "SELECT id_negocio, name_negocio, descripcion, precio, imagen, imagen1, imagen2, imagen3, imagen4, name1, name2, name3, name4, name5, descripcion1, descripcion2, descripcion3, descripcion4, descripcion5 FROM `info_negocio`
                                                INNER JOIN imagenes ON info_negocio.id_imagen=imagenes.id_imagen
                                                INNER JOIN nombre_imagen ON imagenes.idName_imagen= nombre_imagen.idName_imagen 
                                                INNER JOIN descripcion_name ON nombre_imagen.id_descripcion=descripcion_name.id_descripcion WHERE id_negocio=1";
                                                $resultado = mysqli_query($conexion, $sql);

                                                while ($row = $resultado->fetch_assoc()) {

                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['id_negocio']; ?></td>
                                                        <td><?php echo $row['name_negocio']; ?></td>
                                                        <td><?php echo $row['descripcion']; ?></td>
                                                        <td><?php echo $row['precio']; ?></td>
                                                        <td>
                                                            <a href=".php?id=<?php echo $row['id_negocio']; ?>" class="btn btn-success"><i class="fa-solid fa-trash"></i></a>
                                                            <a href="model/eliminar.php?id_eliminar=<?php echo $row['id_negocio']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></i></a>
                                                        </td>
                                                    </tr>

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>


                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-success">
                                    <h6 class="font-weight-bold mb-0 text-center text-white">EDITAR INFROMACION IMAGENES</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive text-nowrap">
                                        <table class="table table-bordered">
                                            <thead class="text-center">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nombre Imagen1</th>
                                                    <th>Nombre Imagen2</th>
                                                    <th>Nombre imagen3</th>
                                                    <th>Nombre Imagen4</th>
                                                    <th>Nombre Imagen5</th>
                                                    <th>Descripcion 1</th>
                                                    <th>Descripcion 2</th>
                                                    <th>Descripcion 3</th>
                                                    <th>Descripcion 4</th>
                                                    <th>Descripcion 5</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                    <tr>
                                                        <td><?php echo $row['id_negocio']; ?></td>
                                                        <td><?php echo $row['name1']; ?></td>
                                                        <td><?php echo $row['name2']; ?></td>
                                                        <td><?php echo $row['name3']; ?></td>
                                                        <td><?php echo $row['name4']; ?></td>
                                                        <td><?php echo $row['name5']; ?></td>
                                                        <td><?php echo $row['descripcion1']; ?></td>
                                                        <td><?php echo $row['descripcion2']; ?></td>
                                                        <td><?php echo $row['descripcion3']; ?></td>
                                                        <td><?php echo $row['descripcion4']; ?></td>
                                                        <td><?php echo $row['descripcion5']; ?></td>
                                                        <td>
                                                            <a href=".php?id=<?php echo $row['id_negocio']; ?>" class="btn btn-success"><i class="fa-solid fa-trash"></i></a>
                                                            <a href="model/eliminar.php?id_eliminar=<?php echo $row['id_negocio']; ?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                                        </td>
                                                    </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
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
<script src="../js/funciones.js"></script>



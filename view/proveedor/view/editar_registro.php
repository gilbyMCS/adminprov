<?php
session_start();
if(isset($_SESSION['usuario'])){
    $conexion  = mysqli_connect("localhost","root","","goolpartie");
    $user=$_SESSION['usuario'];
    $sqli = " SELECT * FROM login_admin  
    INNER JOIN info_negocio on login_admin.id_login_rol = info_negocio.id_login_rol INNER JOIN imagenes ON info_negocio.id_imagen=imagenes.id_imagen  INNER JOIN nombre_imagen ON imagenes.idName_imagen= nombre_imagen.idName_imagen  INNER JOIN descripcion_name 
    ON nombre_imagen.id_descripcion=descripcion_name.id_descripcion WHERE  nombre= '$user'";
     $resultado = mysqli_query($conexion, $sqli);
     while($data=$resultado->fetch_assoc()){
        $id_negocio = $data['id_negocio'];
        $negocio = $data['name_negocio'];
        $descrip = $data['descripcion'];
        $precio = $data['precio'];
        $idimg = $data['id_imagen'];

        $img =$data['imagen'];
        $imag1 =$data['imagen1'];
        $imag2 =$data['imagen2'];
        $imag3 =$data['imagen3'];
        $imag4 =$data['imagen4'];
        $idName =$data['idName_imagen'];

        $idName_img = $data['idName_imagen'];
        $name1 = $data['name1'];
        $name2 = $data['name2'];
        $name3 = $data['name3'];
        $name4 = $data['name4'];
        $name5 = $data['name5'];
        $descr = $data['id_descripcion'];

        $id_descripcion = $data['id_descripcion'];
        $ds1=$data['descripcion1'];
        $ds2=$data['descripcion2'];
        $ds3=$data['descripcion3'];
        $ds4=$data['descripcion4'];
        $ds5=$data['descripcion5'];
    }
}else{
    header("location:.php");
}
?>
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
                                    <h6 class="font-weight-bold mb-0 text-center text-white">EDITAR REGISTRO NEGOCIO
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <form id="registro_act">
                                        <input type="hidden" name="id" value="<?php echo $id_negocio ?>">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Nombre del negocio:</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                                        value="<?php echo $negocio?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Descripcion del negocio:</label>
                                                    <input type="text" class="form-control" id="descripcion"
                                                        name="descripcion" value="<?php echo  $descrip ?>">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label>Precio promedio:</label>
                                                <input type="number" class="form-control" id="precio" name="precio"
                                                    value="<?php echo $precio ?>">
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
                                    <h6 class="font-weight-bold mb-0 text-center text-white">EDITAR INFORMACION IMAGENES
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <form id="img_update">
                                        <input type="hidden" name="id" value="<?php echo $id_negocio ?>">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name1"
                                                        value="<?php echo  $name1  ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri1"
                                                        value="<?php echo  $ds1?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name2"
                                                        value="<?php echo  $name2 ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri2"
                                                        value="<?php echo  $ds2 ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name3"
                                                        value="<?php echo  $name3 ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri3"
                                                        value="<?php echo  $ds3?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name4"
                                                        value="<?php echo  $name4 ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri4"
                                                        value="<?php echo  $ds4 ?>">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-6">
                                                    <label>Nombre de la imagen:</label>
                                                    <input type="text" class="form-control" name="name5"
                                                        value="<?php echo  $name5 ?>">
                                                </div>
                                                <div class="col-6">
                                                    <label>Descripcion de la imagen:</label>
                                                    <input type="text" class="form-control" name="descri5"
                                                        value="<?php echo  $ds5 ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary btn-block"
                                                id="btnactualizar">Actualizar :)</button>
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
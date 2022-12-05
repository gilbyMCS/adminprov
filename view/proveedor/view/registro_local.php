<?php
session_start();
if(isset($_SESSION['usuario'])){
    $conexion  = mysqli_connect("localhost","root","","goolpartie");
    echo $user=$_SESSION['usuario'];
    $sqli = " SELECT * FROM login_admin INNER JOIN info_negocio ON login_admin.id_login_rol = info_negocio.id_negocio WHERE nombre ='$user'";
    $resultado = mysqli_query($conexion, $sqli);
     while($data=$resultado->fetch_assoc()){
        $id_negocio = $data['id_negocio'];
     }


}else{
    header("location:../../../index.php");
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
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 my-3">
                            <div class="card rounded-0">
                                <div class="card-header bg-success">
                                    <h6 class="font-weight-bold mb-0 text-center text-white">negocio</h6>
                                </div>
                                <div class="card-body">
                                    <form id="formulario-ejemplo">
                                    <input type="text" name="id" value="<?php echo     $id_negocio  ?>">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Nombre del negocio:</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Descripcion del negocio:</label>
                                                    <input type="text" class="form-control" id="descripcion" name="descripcion">
                                                </div>
                                                <div class="form-group">
                                                    <label>Precio promedio:</label>
                                                    <input type="number" class="form-control" id="precio" name="precio">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <button type="button" id="btn-agregar" class="btn btn-primary">Registrate :)</button>
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
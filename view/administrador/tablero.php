<?php
//gracias a nuestra variable de session podemos mostrar datos del usuario independiente de los demas
//sin mostrar otros que no pertenesca a usuario que ah iniciado sesion.
include ('assets/conexion.php');
session_start();
 $user= $_SESSION['usuario'];
$conexion=conexion();
$sql="SELECT id_login_rol, nombre, contra, tipo, rol FROM login_admin INNER JOIN roles ON login_admin.tipo = roles.rol WHERE nombre ='$user'";
// $sql="SELECT id_login_rol , nombre, contra, rol_id FROM login_admin WHERE nombre= '$user' ";
$resultado = mysqli_query($conexion, $sql);
while($data=$resultado->fetch_assoc()){
    $id_login_rol = $data['id_login_rol'];
    $nombre = $data['nombre'];
    $contra = $data['contra'];
    $rol_id = $data['rol'];
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>administrador</title>
</head>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <!-- Fin sidebar -->

        <div class="w-100">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- barra de busqueda -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline position-relative d-inline-block my-2">
                            <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn position-absolute btn-search" type="submit"><i
                                    class="icon ion-md-search"></i></button>
                        </form>
                        <!-- fin de barra de busqueda -->


                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="" class="img-fluid rounded-circle avatar mr-2"
                                        alt="https://generated.photos/" />
                                    <?php echo $rol_id;?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Mi perfil</a>
                                    <a class="dropdown-item" href="#">Suscripciones</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Cerrar sesión</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

            <!-- Pagina contenido -->

            <div id="content" class="bg-grey w-100">
                <!-- funciones para traer datos de administrador  -->


                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Personas registradas</h6>
                                            <h3 class="font-weight-bold">0</h3>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Productos ingresados</h6>
                                            <h3 class="font-weight-bold">0</h3>

                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">No. de usuarios</h6>
                                            <h3 class="font-weight-bold">0</h3>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <?php require_once 'assets/conexion.php'; 
                    $conexion = conexion();
                    $sqli ="SELECT * FROM login_admin INNER JOIN roles ON  login_admin.tipo = roles.rol ";
                    $resul = mysqli_query($conexion, $sqli);
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="font-weight-bold mb-0">Usuarios Administradores y Proveedores</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nombre</th>
                                                        <th>Rol_id</th>
                                                        <th>tipo de cuenta</th>
                                                        <th>rol</th>

                                                        <th colspan="2">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php while ($ver = mysqli_fetch_row($resul)): ?>
                                                    <tr>

                                                        <td><?php echo $ver[0] ?></td>
                                                        <td><?php echo $ver[1] ?></td>
                                                        <td><?php echo $ver[3] ?></td>
                                                        <td><?php echo $ver[4] ?></td>
                                                        <td><?php echo $ver[6] ?></td>
                                                        <td style="text-align:center" colspan="2">
                                                            <span class="btn btn-warning"
                                                                onclick="obtenerDatos('<?php echo $ver[0]; ?>')"
                                                                data-toggle="modal" data-target="#actualizar">Editar
                                                            </span>

                                                            <span class="btn btn-danger"
                                                                onclick="eliminar('<?php echo $ver[0]; ?>')">Eliminar
                                                            </span>
                                                            <?php endwhile; ?>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="font-weight-bold mb-0">Accesos</h6>
                                    </div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action">Nuevo Registro</a>
                                        <a href="#" class="list-group-item list-group-item-action">Pagina Principal</a>
                                        <a href="#" class="list-group-item list-group-item-action">Perfil</a>
                                        <a href="#" class="list-group-item list-group-item-action">Sitio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="font-weight-bold mb-0">Número de usuarios de paga</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Firstname</th>
                                                        <th>Lastname</th>
                                                        <th>Age</th>
                                                        <th>City</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Anna</td>
                                                        <td>Pitt</td>
                                                        <td>35</td>
                                                        <td>New York</td>

                                                </tbody>
                                            </table>
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

</body>

</html>
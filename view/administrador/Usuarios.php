<?php
//TODO: gracias a nuestra variable de session podemos mostrar datos del usuario independiente de los demas
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
    <script src="https://code.jquery.com/jquery-3.6.1.js"integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <!-- CSS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
  <!-- Default theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
  <!-- Semantic UI theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
  <!-- Bootstrap theme -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <!-- librerias jquery -->
    
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
                    <!-- barra de busqueda  -->
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
                                    <!-- imagen de usuario  -->
                                    <img src="#" class="img-fluid rounded-circle avatar mr-2" alt="insertar imagen" />
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
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 my-3">
                                <div class="card rounded-0">
                                    <div class="container">
                                        <form id="registro">
                                            <label for="nombre">Registro de nuevos usuarios </label>
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" placeholder="Nombre"
                                                    name="nombre" id="nombre">
                                            </div>
                                            <div class="form-group">
                                                <label>Contraseña:</label>
                                                <input type="text" class="form-control" placeholder="Contraseña"
                                                    name="contra" id="contra">
                                            </div>
                                            <div class="form-group">
                                                <label>Tipo de rol:</label>
                                                <select name="rol" id="rol" class="custom-select">
                                                    <option selected>select</option>
                                                    <option value="1">1-Administrador</option>
                                                    <option value="2">2-Proveedor</option>
                                                </select>
                                                <div class="form-group">
                                                    <label>Tipo de cuenta:</label>
                                                    <input type="text" class="form-control" placeholder="tipo de cuenta"
                                                        name="tipo" id="tipo">
                                                </div>
                                            </div>
                                            <button type="button" id="btnagregar" class="btn btn-primary">Enviar:)</button>
                                          
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Configuarion de usuario</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form >
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="rol">Rol</label>
                                                        <input type="text" class="form-control" id="rol" name="rol"
                                                            placeholder="Tipo de rol">
                                                    </div>
                                                    <div class="col">
                                                        <label for="Nombre">Nombre </label>
                                                        <input type="text" class="form-control" placeholder="Nombre"
                                                            name="nombre" di="nombre">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Cerrar</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="font-weight-bold mb-0">Ventas recientes</h6>
                                    </div>
                                    <div class="card-body pt-2">
                                        <div class="d-flex border-bottom py-2">
                                            <div class="d-flex mr-3">
                                                <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i>
                                                </h2>
                                            </div>
                                            <div class="align-self-center">
                                                <h6 class="d-inline-block mb-0">$250</h6><span
                                                    class="badge badge-success ml-2">10% descuento</span>
                                                <small class="d-block text-muted">Curso diseño web</small>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom py-2">
                                            <div class="d-flex mr-3">
                                                <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i>
                                                </h2>
                                            </div>
                                            <div class="align-self-center">
                                                <h6 class="d-inline-block mb-0">$250</h6><span
                                                    class="badge badge-success ml-2">10% descuento</span>
                                                <small class="d-block text-muted">Curso diseño web</small>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom py-2">
                                            <div class="d-flex mr-3">
                                                <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i>
                                                </h2>
                                            </div>
                                            <div class="align-self-center">
                                                <h6 class="d-inline-block mb-0">$250</h6><span
                                                    class="badge badge-success ml-2">10% descuento</span>
                                                <small class="d-block text-muted">Curso diseño web</small>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom py-2">
                                            <div class="d-flex mr-3">
                                                <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i>
                                                </h2>
                                            </div>
                                            <div class="align-self-center">
                                                <h6 class="d-inline-block mb-0">$250</h6><span
                                                    class="badge badge-success ml-2">10% descuento</span>
                                                <small class="d-block text-muted">Curso diseño web</small>
                                            </div>
                                        </div>
                                        <div class="d-flex border-bottom py-2 mb-3">
                                            <div class="d-flex mr-3">
                                                <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i>
                                                </h2>
                                            </div>
                                            <div class="align-self-center">
                                                <h6 class="d-inline-block mb-0">$250</h6><span
                                                    class="badge badge-success ml-2">10% descuento</span>
                                                <small class="d-block text-muted">Curso diseño web</small>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary w-100">Ver todas</button>
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
<!-- funciones  -->
<script
    src ="js/Funciones.js">
</script>
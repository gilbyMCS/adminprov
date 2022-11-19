
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
                <section class="bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 col-md-8">
                                <h1 class="font-weight-bold mb-0">Bienvenido: <?php echo $nombre; ?></h1>    
                                <p class="lead text-muted">Revisa la última información</p>
                            </div>
                           
                            <div class="col-lg-3 col-md-4 d-flex">
                                <button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-mix py-3">
                    <div class="container">
                        <div class="card rounded-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Ingresos mensuales</h6>
                                            <h3 class="font-weight-bold">$50000</h3>
                                            <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>
                                                50.50%</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Productos activos</h6>
                                            <h3 class="font-weight-bold">100</h3>
                                            <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>
                                                25.50%</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">No. de usuarios</h6>
                                            <h3 class="font-weight-bold">2500</h3>
                                            <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>
                                                75.50%</h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 d-flex my-3">
                                        <div class="mx-auto">
                                            <h6 class="text-muted">Usuarios nuevos</h6>
                                            <h3 class="font-weight-bold">500</h3>
                                            <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i>
                                                15.50%</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="font-weight-bold mb-0">Número de usuarios de paga</h6>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart" width="300" height="150"></canvas>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"
        integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
            datasets: [{
                label: 'Nuevos usuarios',
                data: [50, 100, 150, 200],
                backgroundColor: [
                    '#12C9E5',
                    '#12C9E5',
                    '#12C9E5',
                    '#111B54'
                ],
                maxBarThickness: 30,
                maxBarLength: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
</body>

</html>
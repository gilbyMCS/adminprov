<!doctype html>
<html lang="en">

<?php
require_once 'assets/librerias.php';
?>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <?php require_once 'assets/siderbar.php'; ?>
        <!-- Fin sidebar -->
        <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">

            <section class="bg-light py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <h1 class="font-weight-bold mb-0">Bienvenido </h1>
                            <p class="lead text-muted">Golden Parties</p>
                        </div>
                        <div class="col-lg-9 col-md-8 text-center">
                        <img src="../../img/GoldenPartiesLOGO.jpg.png" class="card-img-top" alt="..." style="width: 30%;">
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
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 50.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Productos activos</h6>
                                        <h3 class="font-weight-bold">100</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 25.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">No. de usuarios</h6>
                                        <h3 class="font-weight-bold">2500</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 75.50%</h6>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        <h6 class="text-muted">Usuarios nuevos</h6>
                                        <h3 class="font-weight-bold">500</h3>
                                        <h6 class="text-success"><i class="icon ion-md-arrow-dropup-circle"></i> 15.50%</h6>
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
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10% descuento</span>
                                            <small class="d-block text-muted">Curso diseño web</small>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom py-2 mb-3">
                                        <div class="d-flex mr-3">
                                            <h2 class="align-self-center mb-0"><i class="icon ion-md-pricetag"></i></h2>
                                        </div>
                                        <div class="align-self-center">
                                            <h6 class="d-inline-block mb-0">$250</h6><span class="badge badge-success ml-2">10% descuento</span>
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
    <?php require_once 'assets/script.php';  ?>
</body>

</html>
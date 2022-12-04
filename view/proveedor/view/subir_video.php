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
                                    <h2 class="text-center">Registrar Video para la web</h2>
                                    <hr>

                                    <form action="../controller/recibVideoYoutube.php" method="post">
                                    <h2>Subir primer video</h2>
                                        <div class="form-group">
                                            <label for="nombreVideo">Nombre del Videos</label>
                                            <input type="text" name="nombreVideo" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="urlVideo">Pegar URL del Video <em>(Desde Youtube)</em></label>
                                            <input type="text" name="urlVideo" class="form-control">
                                        </div>
                                        <h2>Subir segundo video</h2>
                                        <!-------Subir video2------------->
                                        <div class="form-group">
                                            <label for="nombreVideo">Nombre del Video</label>
                                            <input type="text" name="nombreVideo2" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="urlVideo">Pegar URL del Video <em>(Desde Youtube)</em></label>
                                            <input type="text" name="urlVideo2" class="form-control">
                                        </div>

                                        <div class="form-group mb-5">
                                            <button type="submit" class="btn btn-primary  btn-lg btn-block">Registrar Video</button>
                                        </div>

                                </div>

                                </form>
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
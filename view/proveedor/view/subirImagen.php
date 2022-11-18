<!doctype html>
<html lang="en">

<?php
require_once '../assets/librerias.php';
?>

<body>
    <div class="d-flex" id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bg-primary">
            <?php  require_once 'siderbar.php'; ?>
        </div>
        <div class="w-100">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <?php require_once 'navBar.php'; ?>
            </nav>
            <!-- Fin sidebar -->
            <!-- Fin Navbar -->

            <!-- Page Content -->
            <div id="content" class="bg-grey w-100">
                <section>
                   
                 
                </section>

            </div>

        </div>
    </div>
    <?php require_once '../assets/script.php';  ?>
</body>

</html>
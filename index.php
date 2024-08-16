<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!--Boostrap-->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container-fluid px-5 justify-content-center">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="./assets/img/Sin título-1.png" width="100" height="94">
                </a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-6 text-black" aria-current="page" href="#">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-6 text-black" href="#">CUENTAS DE PAGO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold fs-6 text-black" href="#">CONTACTO</a>
                        </li>
                    </ul>
                </div>
                <!-- Login and Register Buttons -->
                <?php
                if (!isset($_SESSION['id'])) {
                ?>
                    <div class="d-flex">
                        <a href="./servi/index.php" class="btn btn-outline-warning me-2 rounded-pill fs-6 fw-bold px-4 py-2 shadow ">LOGIN</a>
                        <a href="./servi/registerUser.php" class="btn btn-warning rounded-pill fs-6 fw-bold px-4 py-2 text-white shadow">REGISTRARSE</a>
                    </div>
                <?php
                } else { ?>
                    <a href="./servi/acciones/salir.php?id=<?php echo $_SESSION["id"]; ?>" class="btn btn-warning me-2 rounded-pill fs-6 fw-bold px-4 py-2 text-white shadow">EVENTOS</a>
                    <a href="./servi/acciones/salir.php?id=<?php echo $_SESSION["id"]; ?>" class="btn btn-outline-warning rounded-pill fs-6 fw-bold px-4 py-2 shadow ">LOGOUT</a>
                <?php
                }
                ?>
            </div>
        </nav>
        <div class="main-header">

        </div>

    </header>
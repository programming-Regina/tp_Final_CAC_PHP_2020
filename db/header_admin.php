<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width">
    <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
    <title>Regina N. Molares : Trabajo Práctico Final</title>
    <link rel="icon" type="img/png" href="../img/favicon.png">
    <base target="_self">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="../styles/admin.css">
  
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="../tp.php"><i class="fas fa-paw"></i> Refugio Patitas Solidarias </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-cat"></i> Pensionados
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index_db.php">Listado Maestro </a>
                        <a class="dropdown-item" href="ingreso_gato.php">Ingresar nuevo gatito</a>
                        <a class="dropdown-item" href="filtros.php">Listas filtradas</a>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-tools"></i> Administrar
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="voluntarios.php">Voluntarios </a>
                        <a class="dropdown-item" href="#">Novedades y difusión</a>
                        <a class="dropdown-item" href="admin_tienda.php">Tienda</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" href="#exampleModal"><i class="far fa-question-circle"></i> Acerca de...</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../sections/salir.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php if (isset($_SESSION['username'])) { ?>
                    <a class="nav-link" href="#">
                        <h3><i class="fas fa-user-circle"></i><small> <?= html_entity_decode($_SESSION['username']) ?></small></h3>
                    </a>
                <?php } else { ?>

                    <a class="nav-link" href="access.php"><i class="fas fa-tools"></i> Administración</a> <?php } ?>
            </span>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-paw"></i> REFUGIO PATITAS SOLIDARIAS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP</p>
                    <p>Diciembre 2020</p>
                    <p>por Regina Noemí Molares </p>
                    <a href="../index.html">Documentación</a>
                    <div class="text-center">
                        <span> <a class="btn btn-info" href="mailto:programming.regina@gmail.com"><i class="far fa-envelope"></i></a></span>
                        <span> <a class="btn btn-info" href="http://cursofullstackphp.foxit.com.ar/comision2014/Regina_Noemi_Molares/" target="_BLANK"><i class="fas fa-globe"></a></i></span>
                        <span> <a class="btn btn-info" href="https://www.linkedin.com/in/regina-molares/" target="_BLANK"><i class="fab fa-linkedin-in"></i></a></span>
                        <span> <a class="btn btn-info" href="https://github.com/programming-Regina" target="_BLANK"><i class="fab fa-github-alt"></i></a></span>
                    </div>
                </div>
                <div class="modal-footer bg-warning">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
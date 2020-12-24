<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
  <title>Regina N. Molares : Trabajo Práctico Final</title>
  <link rel="icon" type="img/png" href="../img/favicon.png">
  <base target="_self">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>

<body class="bg">

  <!-- NAV BAR -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="../tp.php"><i class="fas fa-paw"></i> Refugio Patitas Solidarias </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <span class="ml-auto">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="nosotros.php">Nosotros <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Adoptar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="requisitos.php" >Requisitos para adoptar</a>
              <a class="dropdown-item" href="en_adopcion.php" >Gatitos en adopción</a>
              <a class="dropdown-item" href="contacto.php" >Adoptar</a>
            </div>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Salvar Vidas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="castrar.php" >Por qué castrar</a>
              <a class="dropdown-item" href="denuncias.php" >Denunciar el maltrato</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Participar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="voluntariado.php" >Voluntariado</a>
              <a class="dropdown-item" href="transito.php">Hogares de tránsito</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php" >Contacto</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Colaborar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="donaciones.php" >Aportes económicos</a>
              <a class="dropdown-item" href="insumos.php" >Donación de insumos</a>
              <a class="dropdown-item" href="tienda.php" >Tienda</a>
              <a class="dropdown-item" href="recepcion.php" >Puntos de recepción</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="access.php">Administración</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" href="#exampleModal"><i class="far fa-question-circle"></i> Acerca de...</a>
          </li>
        </ul>
      </div>
    </span>

  </nav>
  <script src="../scripts/main.js"></script>
  <!-- Fin NAV BAR -->

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
          <a class="btn btn-info btn-block" href="../index.html">Documentación</a>
          <a class="btn btn-info btn-block" href="https://github.com/programming-Regina/tp_Final_CAC_PHP_2020/" target="_blank">Códigos</a>
          <div class="text-center mt-2">
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
  <!-- FIN Modal -->
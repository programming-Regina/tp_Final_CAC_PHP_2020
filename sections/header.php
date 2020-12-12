<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
  <title>Regina N. Molares : Trabajo Práctico Final</title>
  <link rel="icon" type="img/png" href="img/favicon.png">
  <base target="_self">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>

<body class="bg">

  <!-- NAV BAR -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
   
      <a class="navbar-brand" href="#"><i class="fas fa-paw"></i> Refugio Patitas Solidarias </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <span class="ml-auto">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="contenidos.php#nosotros"  onclick="sshow('nosotros')">Nosotros <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Adoptá
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="contenidos.php#requisitos" onclick="sshow('requisitos')">Requisitos de adopción</a>
                <a class="dropdown-item" href="contenidos.php#en_adopcion" onclick="sshow('en_adopcion')">En adopción</a>
                <a class="dropdown-item" href="contenidos.php#contacto" onclick="sshow('contacto')">Adoptá</a>
              </div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Salvá Vidas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="contenidos.php#castrar" onclick="sshow('castrar')">Castrá</a>
                <a class="dropdown-item" href="contenidos.php#denuncias" onclick="sshow('denuncias')">Denunciá el maltrato</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Participá
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="contenidos.php#voluntariado" onclick="sshow('voluntariado')">Voluntariado</a>
                <a class="dropdown-item" href="contenidos.php#transito" onclick="sshow('transito')">Hogares de tránsito</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contenidos.php#contacto" onclick="sshow('contacto')">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Donaciones
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="contenidos.php#donaciones" onclick="sshow('donaciones')">Aportes económicos</a>
                <a class="dropdown-item" href="contenidos.php#insumos" onclick="sshow('insumos')">Donación de insumos</a>
                <a class="dropdown-item" href="contenidos.php#recepcion" onclick="sshow('recepcion')">Puntos de recepción</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="access.php">Administración</a>
            </li>
          </ul>
        </div>
      </span>
   
  </nav>
  <script src="../scripts/main.js"></script>
  <!-- Fin NAV BAR -->
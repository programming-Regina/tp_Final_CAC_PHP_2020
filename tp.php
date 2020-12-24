<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/f2652a0a74.js" crossorigin="anonymous"></script>
  <title>Regina N. Molares : Trabajo Práctico Final</title>
  <link rel="icon" type="img/png" href="img/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="scripts/data_publica.js"></script>


  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="styles/index.css">
</head>

<body>
  <div class="container-fluid bg-dark">
    <nav class="navbar navbar-dark bg-dark"><span class="navbar-brand  text-light mb-0 h1"><i class="fas fa-paw"></i> <a class="text-light" href="sections/nosotros.php"> Patitas Solidarias <small>-- Conocenos</small></a> </span>
    </nav>
  </div>

  <div class="container-fluid d-flex flex-column mb-1 big-one body-container bg-info">
    <div class="msg1 p-3 d-flex flex-column ">
      <span class="msg1" id="part1">9 DE CADA 10 CACHORROS NACIDOS EN LA CALLE</span>
      <span class="msg1" id="part2">nunca encontrarán un hogar</span>
    </div>
  </div>


  <div class="container d-flex buttz justify-content-center m-auto">

    <div class="buut d-flex flex-column">
      <button class="btn btn-info  btn-block text-light">Colaborá</button>
      <img class="reactve-img" src="img/bebe1.jpg" height="200px" style="object-fit: cover;" title="Gatito" alt="Gatito">
      <div class="text">
        <ul>
          <li><a href="sections/transito.php">Transitá un gatito</a></li>
          <li><a href="sections/contacto.php">Colaborá con traslados</a></li>
          <li>Difundí nuestra obra</li>
        </ul>
      </div>
    </div>

    <div class="buut d-flex flex-column">
      <button class="btn btn-warning  btn-block text-dark">Doná</button>
      <img class="reactve-img" src="img/bebe2.jpg" height="200px" style="object-fit: cover;" title="Gatito" alt="Gatito">
      <div class="text">
        <ul>
          <li><a href="sections/insumos.php">Insumos</a></li>
          <li><a href="#" data-toggle="modal" data-target="#modalbanco">Depósito o Transferencia</a></li>
          <li><a href="#" data-toggle="modal" data-target="#modalmp">MercadoPago</a></li>
        </ul>
      </div>
    </div>


    <div class="buut d-flex flex-column">
      <button class="btn btn-success  btn-block text-light">Adoptá</button>
      <img class="reactve-img" src="img/bebe3.jpg" height="200px" style="object-fit: cover;" title="Gatito" alt="Gatito">
      <div class="text">
        <ul>
          <li><a href="sections/en_adopcion.php">Conoce los candidatos</a></li>
          <li><a href="sections/requisitos.php">Requisitos</a></li>
          <li><a href="sections/contacto.php">Contactanos</a></li>
        </ul>
      </div>
    </div>


    <div class="buut d-flex flex-column">
      <button class="btn btn-danger  btn-block text-light" onclick="location.href='sections/nosotros.php'">Conocé más</button>
      <img class="reactve-img" src="img/bebe4.jpg" height="200px" style="object-fit: cover;" title="Gatito" alt="Gatito">
      <div class="text">
        <ul>
          <li><a href="#" data-toggle="tooltip" data-placement="top" title="Próximamente">Novedades </a><span class="text-muted"><small> al 23/12/20</small></span></li>
          <li><a href="#" data-toggle="tooltip" data-placement="top" title="Próximamente">Prensa y difusión</a></li>
          <li><a href="sections/tienda.php" data-toggle="tooltip" data-placement="top" title="En mejoras!">Tienda</a></li>
        </ul>
      </div>
    </div>



  </div>

  <div class="container sponsors text-center p-4">
   
      <h3>Empresas que nos apadrinan</h3>
  
    <div class="container d-flex justify-content-around align-items-stretch flex-wrap mt-2 p-4">
      <div class="sponsor"><img src="img/sponsors/logo1.png"></div>
      <div class="sponsor"><img src="img/sponsors/logo2.png"></div>
      <div class="sponsor"><img src="img/sponsors/logo3.png"></div>
      <div class="sponsor"><img src="img/sponsors/logo4.png"></div>
      <div class="sponsor"><img src="img/sponsors/logo5.png"></div>
      <div class="sponsor"><img src="img/sponsors/logo6.png"></div>
    </div>

  </div>

  <footer class="page-footer bg-secondary">
    <div class="container text-center text-light mt-3 pt-4">
      <div class="container-fluid text-center text-md-left">
        <div class="row">
          <div class="col-md-6 mt-md-0 mt-3" id="contacto">
            <script>
              document.getElementById('contacto').innerHTML = data_contacto;
            </script>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3">
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Participá</h5>
            <ul class="list-unstyled">
              <li>
                <a href="sections/castrar.php">Castrá</a>
              </li>
              <li>
                <a href="sections/denuncias.php">Denuncia Maltratos</a>
              </li>
              <li>
                <a href="sections/en_adopcion.php">Adopta</a>
              </li>
              <li>
                <a href="sections/transito.php">Hogares de tránsito</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 mb-md-0 mb-3">
            <h5 class="text-uppercase">Colaborá</h5>
            <ul class="list-unstyled">
              <li>
                <a href="sections/voluntariado.php">Voluntariado</a>
              </li>
              <li>
                <a href="sections/donaciones.php">Donación monetaria</a>
              </li>
              <li>
                <a href="sections/insumos.php">Donación de insumos</a>
              </li>
              <li>
                <a href="sections/recepcion.php">Puntos de recepción</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 py-5">
          <div class=" flex-center">
            <a class="fb-ic">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
            <a class="pin-ic">
              <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-copyright text-center bg-dark text-light py-3">© 2020 :
      <a href="mailto:programming.regina@gmail.com"> Regina Noemí Molares,</a> para Patitas Solidarias Asociación Civil
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

<!-- MODAL BANCO -->
<div class="modal" id="modalbanco" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Donar por depósito o transferencia bancaria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p id="banco">
          <script>
            document.getElementById('banco').innerHTML = data_banco;
          </script>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL BANCO -->

<!-- MODAL MP -->
<div class="modal" id="modalmp" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><img src="img/mp.png" width="30px"> Donar con MercadoPago</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body text-center">
          <button class="btn mt-1 btn-info">Donar $100</button>
          <button class="btn mt-1 btn-info">Donar $200</button>
          <button class="btn mt-1 btn-info">Donar $500</button>
          <button class="btn mt-1 btn-info">Donar $1000</button>
          <button class="btn mt-1 btn-info">Donar $2000</button>
          <button class="btn mt-1 btn-info">Donar $5000</button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

      </div>
    </div>
  </div>
</div>
<!-- FIN MODAL MP -->

</html>
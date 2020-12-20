<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php session_start();
include('header.php'); ?>

<div class="bg-image"></div>
<div class="bg-text">
  <form action="login.php" method="POST">
    <div class="form-group mt-2">
      <div class="input-group w-100">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-user"></i>
          </div>
        </div>
        <input type="text" class="form-control" id="user" placeholder="Usuario" name="user">
      </div>
    </div>
    <div class="form-group">
      <div class="input- w-100">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-key"></i>
          </div>
          <input type="password" class="form-control " id="sent_pass" placeholder="Clave" name="sent_pass">
        </div>
      </div>

    </div>
    <button type="submit" class="btn btn-dark" name="access" id='access'>Ingresar</button>

    <!-- MENSAJE SI LOGIN INCORRECTO -->
    <?php if (isset($_SESSION['message'])) {
    ?>
      <div class="alert alert-<?= $_SESSION['message_color']; ?> alert-dismissible fade show mt-3" role="alert">
        <?= $_SESSION['message']; ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>

        </button>
      </div>
    <?php session_destroy();
    } ?>
    <!-- FIN MENSAJE SI LOGIN INCORRECTO -->
  </form>
</div>

<?php include('footer.php') ?>
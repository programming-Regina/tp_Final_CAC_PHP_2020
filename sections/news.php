<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php include_once 'header.php';
include_once '../db/conexion.php' ?>

<div class="container-fluid contenido pt-5 w-100" id="novedades">
    <div class="container">
        <div class="text-container d-flex flex-column ">
            <div class="img mt-1">
                <img src="../img/news.png" class="img-fluid rounded mx-auto d-block" alt="News" width="100%">
            </div>
            <div class="texto text-justify">
                <h4 class="bg-dark text-light p-1 text-center">Novedades</h4>

                <?php
                $query = "SELECT * FROM difusion WHERE novedad = 1 AND obsoleto = 0 ORDER BY fecha DESC;";
                $result = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
                ?>

                <div class="container">
                    <div class=" d-flex flex-wrap justify-content-center">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="card m-2" style="width: 18rem;">
                                <img src="../img/prensa/<?= $row['foto']; ?>" class="card-img-top" alt="<?= html_entity_decode($row['titulo']); ?>">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?= html_entity_decode($row['titulo']); ?></h5>
                                    <p class="card-text"><?= html_entity_decode($row['descripcion']); ?></p>
                                    <!-- <p class="card-text contacto"><b><a href="<?= html_entity_decode($row['link']); ?>" target="_blank">Leer más</a></b> </p> -->
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid contenido pt-5 w-100" id="prensa">
    <div class="container">
        <div class="text-container d-flex flex-column ">
            <div class="img mt-1">
                <img src="../img/prensa.png" class="img-fluid rounded mx-auto d-block" alt="News" width="100%">
            </div>
            <div class="texto text-justify">
                <h4 class="bg-dark text-light p-1 text-center">Prensa y Difusión</h4>


                <?php
                $query = "SELECT * FROM difusion WHERE prensa = 1 AND obsoleto = 0 ORDER BY fecha DESC;";
                $result = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
                ?>

                <div class="container">
                    <div class=" d-flex flex-wrap justify-content-center">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <div class="card m-2" style="width: 18rem;">
                                <img src="../img/prensa/<?= $row['foto']; ?>" class="card-img-top" alt="<?= html_entity_decode($row['titulo']); ?>">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?= html_entity_decode($row['titulo']); ?></h5>
                                    <p class="card-text"><?= html_entity_decode($row['descripcion']); ?></p>
                                    <p class="card-text contacto"><b><a href="<?= html_entity_decode($row['link']); ?>" target="_blank">Leer más</a></b> </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('pie.php'); ?>
<?php include('footer.php') ?>
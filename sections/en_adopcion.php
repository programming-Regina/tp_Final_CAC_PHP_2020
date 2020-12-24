<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php 
include_once 'header.php';
include_once '../db/conexion.php'; 
?>


<div class="container-fluid contenido w-100" id="en_adopcion">
    <div class="container">
        <div class="texto text-justify">
            <h4 class="bg-dark text-light p-1 text-center">Nuestros candidatos en adopción</h4>
            <div class="container-fluid">
                <div class="card-deck p-2">
                    <?php
                    #$conexion = mysqli_connect("localhost", "root", "", "campito");
                    #$conexion = mysqli_connect("localhost", "id15456491_root", "H_3zv5b9YN-wg|lM", "id15456491_campito");
                    $query = "SELECT nom_gato, sexo, raza_color, agno_nacim, vacunado, desparasitado, castrado, historia, foto FROM gatos WHERE apto_adopc = 1 ORDER BY nom_gato;";
                    $row = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
                    ?>
                    <div class="card-deck"><?php
                                            while ($gato = mysqli_fetch_assoc($row)) {
                                            ?>

                            <div class="card border-info ">
                                <img class="card-img-top" src="../img/adopcion/<?php echo $gato['foto']; ?>" alt="Card image">
                                <div class="card-body  ">
                                    <h4 class="card-title bg-dark text-light p-2 text-center"><?php echo $gato['nom_gato']; ?></h4>

                                    <div class="row card-text justify-content-center">
                                        <?php
                                                if ($gato['castrado'] == 1) {
                                                    echo '<span class="badge bdges badge-danger mt-auto mr-1 ">Castrado</span>';
                                                }
                                                if ($gato['vacunado'] == 1) {
                                                    echo '<span class="badge bdges badge-warning mt-auto mr-1">Vacunado</span>';
                                                }
                                                if ($gato['desparasitado'] == 1) {
                                                    echo '<span class="badge  bdges badge-success mt-auto mr-1">Desparasitado</span>';
                                                } ?> </div>
                                    <div class="row card-text peque mt-2">
                                        <div class="col"><b>Sexo:</b> <?php echo $gato['sexo']; ?></div>
                                        <div class="col text-right"><b>Edad:</b> <?php echo date("Y") - $gato['agno_nacim'] . ' años'; ?></div>
                                    </div>
                                    <div class="row card-text peque">
                                        <div class="col"> <b>Raza/color:</b> <?php echo $gato['raza_color']; ?></div>
                                    </div>
                                    <div class="row card-text peque ">
                                        <div class="col "><b>Historia:</b> <?php echo $gato['historia']; ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('pie.php'); ?>
<?php include('footer.php') ?>
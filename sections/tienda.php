<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com

    ESTA SECCIÓN SE DISEÑÓ DE ACUERDO A LAS NECESIDADES ACTUALES DE LA ORGANIZACIÓN A LA QUE SERÁ DONADO ESTE TRABAJO
    LA IDEA FINAL ES IMPLEMENTAR UN SISTEMA DE COMPRAS ONLINE, CON CARRITO DE COMPRAS, QUE DEPENDERÁ DE LAS
    POSIBILIDADES DE PERSONAL, LOGÍSTICAS Y DE INFRAESRUCTURA DEL REFUGIO.
-->

<?php include_once('header.php');
include_once("../db/conexion.php");

$query = "SELECT * FROM tienda WHERE en_stock = 1;";
$result = mysqli_query($conexion, $query) or die("database error:" . mysqli_error($conexion));
?>


<div class="container-fluid contenido w-100" id="tienda">
    <div class="container">
        <div class="img mt-1">
            <img src="../img/tienda.jpg" class="img-fluid rounded mx-auto d-block" alt="Denuncia" width="100%">
        </div>
        <div class="texto text-justify">
            <h4 class="bg-dark text-light p-1 text-center">Tienda</h4>
            <p>El refugio se sostiene gracias al amoroso aporte de nuestros padrinos y voluntarios. Muchos de estos aportes nos llegan en forma de artesanías para venta en nuestra tienda y objetos para organizar sorteos.</p>
            <p>Estamos trabajando para organizar un sistema de logística y compras online. Por el momento, las compras serán directas, por medio del contacto de cada voluntario que proporcionamos en la descripción de cada artículo.</p>
            <p class=" text-danger"><small>Esta sección se diseñó de acuerdo a las necesidades actuales de la organización a la que será donado este trabajo.
                    <br>La idea final es implementar un sistema de compras online con carrito de compras, que dependerá de las posibilidades de personal, logísticas y de infraestructura del refugio.</small></p>
        </div>
    </div>
    <div class="container">
        <div class=" d-flex flex-wrap justify-content-center">

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>


                <div class="card m-2" style="width: 18rem;">
                    <img src="../img/tienda/<?= $row['foto_art']; ?>" class="card-img-top" alt="<?= html_entity_decode($row['articulo']); ?>">
                    <div class="card-body">
                        <h3 class="card-text text-center precio text-success bg-warning"><?= html_entity_decode($row['articulo']); ?></h3>
                        <p class="card-text"><?= html_entity_decode($row['descripcion']); ?></p>
                        <h3 class="card-text precio text-center text-success">Precio: $ <?= $row['precio']; ?></h3>
                        <p class="card-text contacto"><b>Contacto:</b> <?= html_entity_decode($row['contacto']); ?></p>
                    </div>
                </div>

            <?php } ?>

        </div>

    </div>

</div>

<?php include('pie.php'); ?>
<?php include('footer.php') ?>
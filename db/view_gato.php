<?php
include_once("conexion.php");
include_once("header_admin.php");
include_once("action.php");


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT *, usuarios.id, usuarios.apellido, usuarios.nombre FROM gatos JOIN usuarios ON gatos.mentor = usuarios.id WHERE gatos.id_gato = $id;";
    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $id_gato = $row['id_gato'];
        $nombre = html_entity_decode($row['nom_gato']);
        $sexo = $row['sexo'];
        $color = html_entity_decode($row['raza_color']);
        $agno = date("Y") - $row['agno_nacim'] . ' años';
        $ingreso = date("d/m/Y", strtotime($row['fecha_ingreso']));
        $hist = html_entity_decode($row['historia']);
        $vac = es($row['vacunado']);
        $desp = es($row['desparasitado']);
        $cast = es($row['castrado']);
        $foto = '<img class="card-img-top" src="../img/adopcion/' . $row['foto'] . '" >';
        $mentor = html_entity_decode($row['nombre'] . " " . $row['apellido']);
        $adoptable = es($row['apto_adopc']);
        $adoptado = es($row['adoptado']);
    }
} ?>

<div class="container p-1">
    <div class="card  mx-auto" style="width: 30rem;">
        <?php echo $foto; ?>

        <div class="card-body  bg-info mukta ">
            <h5 class="card-title bg-dark text-light text-center p-2"><?php echo $nombre; ?></h5>
            <div class="container text-light">
                <div class="row">
                    <div class="col">
                        <p class="card-text"><span class="subt">Rasgos distintivos:</span> <?php echo $color; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="card-text"><span class="subt">Historia:</span> <?php echo $hist; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col card-text"><span class="subt">Sexo:</span> <?php echo $sexo; ?></div>
                    <div class="col card-text"><span class="subt">Edad:</span> <?php echo $agno; ?></div>
                </div>
                <div class="row">
                    <div class="col card-text"><span class="subt">Fecha de ingreso:</span> <?php echo $ingreso; ?></div>
                    <div class="col card-text"><span class="subt">Cuidador: </span><?php echo $mentor; ?></div>
                </div>
                <div class="row">
                    <div class="col"><span class="subt">Vacunado: </span><?php echo $vac; ?></div>
                    <div class="col"><span class="subt">Desparasitado: </span><?php echo $desp; ?></div>
                </div>
                <div class="row">
                    <div class="col"><span class="subt">Castrado: </span><?php echo $cast; ?></div>
                    <div class="col"><span class="subt" ></div>
                    
                </div>
                <div class="row">
                <div class="col"><span class="subt">Apto Adopción?: </span><?php echo $adoptable; ?></div>
                    <div class="col"><span class="subt">Adoptado: </span><?php echo $adoptado; ?></div>
                    
                </div>
                <div class="col"><span class="subt"></span><a class = "btn btn-sm btn-block bg-warning text-dark mt-3" href="index_db.php"><i class="fas fa-home"></i> Volver</a> </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once("footer_admin.php");
?>
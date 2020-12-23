<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
    <form action="subir_file.php" method="post" enctype="multipart/form-data">
-->



<form action="edit_gato.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo html_entity_decode($nombre); ?>">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Raza/Color/Señas particulares</label>
            <input type="text" class="form-control" name="color" value="<?php echo html_entity_decode($color); ?>">
        </div>
        <div class="form-row mb-2">
            <div class="col">
                <label for="formGroupExampleInput2">Sexo</label>

                <select class="custom-select mr-sm-2" name="sexo">

                    <option value="Hembra" <?php if ($sexo == 'Hembra') {
                                                echo 'selected';
                                            } ?>>Hembra</option>
                    <option value="Macho" <?php if ($sexo == 'Macho') {
                                                echo 'selected';
                                            } ?>>Macho</option>
                </select>

            </div>
            <div class="col">
                <label for="formGroupExampleInput2">Año de nacimiento</label>
                <input type="text" class="form-control" name="nacimiento" value="<?php echo $agno; ?>">
            </div>
            <div class="col">
                <label for="formGroupExampleInput2">Fecha de Ingreso</label>
                <input type="date" class="form-control" name="ingreso" value="<?php echo $ingreso; ?>">
            </div>
            <div class="col">Foto<br>
                <div class="custom-file mt-2 align-bottom">
                    <input type="file" class="custom-file-input " id="customFile" name="userfile" value="<?php echo $fotop; ?>">
                    <label class="custom-file-label" for="customFile"><?php echo $fotop; ?></label>
                </div>
            </div>
            <div class="col">
                <label for="formGroupExampleInput2">Cuidador</label>
                <select class="custom-select mr-sm-2" name="mentor">

                    <?php
                    $query1 = "SELECT id, apellido, nombre  FROM usuarios";
                    $valores = mysqli_query($conexion, $query1);

                    while ($voluntario = mysqli_fetch_array($valores)) {
                    ?>
                        <option value="<?php echo $voluntario['id']; ?>" <?php if ($voluntario['id'] == $mentor) {
                                                                                echo 'selected';
                                                                            } ?>>

                            <?php
                            echo html_entity_decode($voluntario['nombre'] . ' ' . $voluntario['apellido']);
                            ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Historia</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo html_entity_decode($hist); ?>" name="hist"><?php echo html_entity_decode($hist); ?></textarea>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="1" <?php if ($vac == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_vacunado">
            <label class="form-check-label" for="1">Vacunado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="2" <?php if ($desp == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_desparasitado">
            <label class="form-check-label" for="2">Desparasitado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="3" <?php if ($cast == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_castrado">
            <label class="form-check-label" for="3">Castrado</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="4" <?php if ($adoptable == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_adoptable">
            <label class="form-check-label" for="4">Apto para adopción</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="1" id="5" <?php if ($adoptado == 1) {
                                                                                    echo 'checked="checked"';
                                                                                } ?> name="is_adoptado">
            <label class="form-check-label" for="5">Adoptado</label>
        </div><button class="btn btn-info btn-block mt-1" name="update">Actualizar </button>
    </form>





   <!--  <b>Enviar un archivo: </b>
    <br>
    <input name="userfile" type="file">
    <br>
    <input type="submit" value="Enviar">
</form> -->
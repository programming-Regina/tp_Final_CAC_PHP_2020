<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php include('header.php') ?>

<div class="container-fluid contenido pt-5 w-100" id="castrar">
    <div class="container">
        <div class="text-container d-flex flex-column ">
            <div class="img mt-1">
                <img src="../img/castrar.jpg" class="img-fluid rounded mx-auto d-block" alt="Gatitos bebé" width="100%">
            </div>
            <div class="texto text-justify">
                <h4 class="bg-dark text-light p-1 text-center">Castración</h4>

                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                                    Por qué castrar
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2" data-parent="#accordion">
                            <div class="card-body">
                                <p>Castrar es la única opción real para evitar que sigan naciendo animales destinados a sufrir. Nuevos nacimientos significan nuevos abandonos.</p>
                                <p>Existe un gran número de animales de compañía que son abandonados por sus dueños cada año. Miles de ellos deambulan por las calles padeciendo hambre, enfermedades, accidentes y siendo víctimas de maltrato. Entonces, ¿para qué traer más perros y gatos al mundo cuando hay miles sufriendo en las calles?</p>
                                <p>La única solución ética y eficaz es la ESTERILIZACION de perros y gatos para controlar su reproducción.</p>
                                <blockquote>La castración es la única y mejor manera de mantener controlada la población animal, además de ayudar a evitar problemas de salud en tu mascota.</blockquote>
                                <p>Es responsabilidad del Estado realizar campañas de castración gratuitas, masivas, sistemáticas y extensivas en el tiempo pero también es necesaria la participación responsable de cada ciudadano</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    Ventajas en hembras
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion">
                            <div class="card-body">
                                <p>Eliminación del celo, con lo que dejan de manchar en casa y de atraer a los machos, desapareciendo además la ansiedad del animal y los maullidos y quejidos de las gatas que provoca este periodo.</p>
                                <p>Elimina los embarazos psicológicos que se presentan en algunas hembras después del celo.</p>
                                <p>Evita las infecciones uterinas (piómetras) y los quistes ováricos, además de reducir la incidencia de tumores de mama.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                    Ventajas en machos
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordion">
                            <div class="card-body">
                                <p>Elimina el deseo sexual del animal, por lo que dejará de montar a otros animales o personas y no se mostrará ansioso y frustrado cuando detecten a una hembra en celo, evitando también en muchos casos las ganas de escapar y deambular fuera de casa, mejorando en definitiva la calidad de vida de nuestro animal.</p>
                                <p>Se reduce o elimina la agresividad hacia otros machos y el marcar con orina la casa.</p>
                                <p>Influye positivamente en las afecciones de próstata y otras enfermedades (algunas afecciones de la piel, etc.)</p>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header" id="headingFour2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                                    Ventajas para usted
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour2" class="collapse" aria-labelledby="headingFour2" data-parent="#accordion">
                            <div class="card-body">
                                <p>Evitara crías no deseadas, mordeduras, peleas, fugas, maullidos nocturnos, rociado de orina, problemas con los vecinos.</p>
                                <p>Sus animales serán más sanos, vivirán más años y serán más guardianes.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingFive2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">
                                    Ventajas para la sociedad
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive2" class="collapse" aria-labelledby="headingFive2" data-parent="#accordion">
                            <div class="card-body">
                                <p>Menos cantidad de animales en la vía pública.</p>
                                <p>Menos animales abandonados por lo tanto menos maltrato y sufrimiento.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include('pie.php'); ?>
<?php include('footer.php') ?>
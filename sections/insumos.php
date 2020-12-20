<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php include('header.php') ?>

<div class="container-fluid contenido w-100" id="insumos">
    <div class="container">
        <div class="img mt-1">
            <img src="../img/donaciones.jpg" class="img-fluid rounded mx-auto d-block" alt="Denuncia" width="100%">
        </div>
        <h4 class="bg-dark text-light p-1 text-center"> Donación de insumos y alimentos</h4>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Alimentos
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Alimento balanceado grado veterinario (bolsas cerradas)</li>
                            <li>Latas de atún al natural</li>
                            <li>Latas de Royal Canin Recovery/Instinctive</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Medicamentos / Insumos médicos
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Amoxicilina Clavulánico</li>
                            <li>Cefalexina comprimidos por 250, 500 o 1 gr.</li>
                            <li>Cremas Platsul y Nitrofurazona</li>
                            <li>Vendas tipo cambridge</li>
                            <li>Telas adhesivas de al menos 2 cm. de ancho</li>
                            <li>Agujas 25/8</li>
                            <li>Vías de suero</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Otros insumos
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Piedritas sanitarias</li>
                            <li>Artículos de limpieza</li>
                            <li>Comederos</li>
                            <li>Mantas</li>
                            <li>Bandejas sanitarias</li>
                            <li>Jaulas trampa y transportadoras</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Reciclables
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Frascos de vidrio con tapa</li>
                            <li>Botellas de vidrio de salsa de tomate y Gatorade</li>
                            <li>Discos de vinilo</li>
                            <li>Pelotas de tenis</li>
                            <li>Huevitos kinder</li>
                            <li>Envases de yogurt tipo Dahi</li>
                            <li>Corchos</li>
                            <li>Tapitas de plástico</li>
                            <li>Llaves y otros de bronce</li>
                            <li>Latas de aluminio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('pie.php'); ?>
<?php include('footer.php') ?>
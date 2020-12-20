<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php include('header.php') ?>

<div class="container-fluid contenido w-100" id="nosotros">
    <div class="container">
        <div class="img mt-1">
            <img src="../img/adopta.jpg" class="img-fluid rounded mx-auto d-block" alt="Denuncia" width="100%">
        </div>
        <h4 class="bg-dark text-light p-1 text-center">Nosotros</h4>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne0" aria-expanded="false" aria-controls="collapseOne0">
                            Nuestro equipo
                        </button>
                    </h5>
                </div>

                <div id="collapseOne0" class="collapse" aria-labelledby="headingOne0" data-parent="#accordion">
                    <div class="card-body">
                        <div class="img mt-1">
                            <img src="../img/equipo.jpg" class="img-fluid rounded mx-auto d-block" alt="Equipo" width="100%">
                        </div>
                        <p>Patitas Solidarias está compuesto por voluntarios que comparten el respeto por la vida de los animales y los consideran sus iguales siendo que estos tienen capacidad para sentir placer, alegría, dolor y sufrimiento.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo0">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo0" aria-expanded="false" aria-controls="collapseTwo0">
                            Nuestra misión
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo0" class="collapse" aria-labelledby="headingTwo0" data-parent="#accordion">
                    <div class="card-body">
                        <p>Patitas Solidarias es una organización sin fines de lucro liderada por un grupo de voluntarios que buscan superar la situación de sobrepoblación, abandono, crueldad e indiferencia que viven millones de animales en nuestro país. (CABA/ Argentina). Propiciamos una actitud de respeto hacia todas las especies, entendiendo que no son "cosas" para ser utilizadas por el ser humano. Rechazamos todo tipo de explotación animal, incluyendo su uso como vestimenta, comida, entretenimiento y experimentación.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree0">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree0" aria-expanded="false" aria-controls="collapseThree0">
                            Nuestros Objetivos
                        </button>
                    </h5>
                </div>
                <div id="collapseThree0" class="collapse" aria-labelledby="headingThree0" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>Luchar contra el abandono, el maltrato y el sufrimiento animal.</li>
                            <li>Educar sobre el respeto por la vida de los animales a través de charlas y talleres educativos en lugares públicos y privados.</li>
                            <li>Organizar campañas de castración gratuitas y/o a bajo costo en las zonas vulnerables donde el Estado está ausente y los perros y gatos se reproducen sin control.</li>
                            <li>Concientizar sobre la importancia de las castraciones masivas, gratuitas, sistemáticas y extensivas como único método ético de control de la superpoblación animal y exigir al Estado que cumpla con la normativa vigente.</li>
                            <li>Asistir a animales en situación de riesgo de muerte, brindarles la atención médica necesaria para recuperarlos y encontrar familias responsables para su adopción.</li>
                            <li>Asesorar a la población respecto a cómo actuar en casos de maltrato animal.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour0">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour0" aria-expanded="false" aria-controls="collapseFour0">
                            ¿Cómo trabajamos?
                        </button>
                    </h5>
                </div>
                <div id="collapseFour0" class="collapse" aria-labelledby="headingFour0" data-parent="#accordion">
                    <div class="card-body">
                        <ul>
                            <li>La acción directa: asistir a animales abandonados en situación de riesgo, promoviendo su adopción y tenencia por parte de hogares responsables que estén en condiciones de brindarles albergue, atención y afecto</li>
                            <li>La acción preventiva: fomentar entre el público general la necesidad y la importancia de castrar machos y esterilizar las hembras antes del primer celo y exigiendo a las autoridades la aplicación de las leyes que los obligan a realizar campañas de castración masivas, gratuitas, extendidas, sistemáticas y permanentes, como único medio humanitario, sustentable y no eutanásico de control de la superpoblación animal.</li>
                            <li>Las acciones en el plano legislativo y judicial: exigir la aplicación de la ley 14.346 de protección animal y denunciar ante las autoridades todo acto de maltrato y crueldad; presentar y apoyar proyectos de ley que beneficien a los animales.</li>
                            <li>Las actividades educativas: desarrollar actividades educativas sobre trato ético hacia los animales.</li>
                            <li>Las actividades asistenciales: rescatar animales en situación de riesgo con el fin de recuperarlos y darles la posibilidad de formar parte de una familia que le brinde lo que necesita.</li>
                            <li>Actividades solidarias: crear lazos de colaboración entre entidades y empresas comprometidos en la problemática animal</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('pie.php'); ?>
<?php include('footer.php') ?>
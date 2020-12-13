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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-color: aliceblue; font-family: 'Titillium Web', sans-serif;">
    <div class="container-fluid d-flex flex-row bg-info text-left p-3 align-items-center">
        <span>
            <div style="background-image: url('../img/ops.png'); 
                        background-size: cover;
                        width:120px; 
                        height:120px; 
                        border-radius: 60px; 
                        border-style: solid; 
                        border-width: 3px; 
                        border-color: aliceblue;
                        margin-left:40px;">
            </div>
        </span>
        <span class="ml-4" style="color: aliceblue;">
            <h3>TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP</h3>
            <h5>DICIEMBRE 2020</h5>
            <h4>por <a href="mailto:programming.regina@gmail.com" style="color: white;">Regina Noemí Molares</a></h4>
        </span> 
    </div>
    <div class="container bg-light p-4">
        <div class="alert w-50 alert-danger m-auto"><h3 >ESTADO:</h3>
        <input type="checkbox"> Terminar portada. </input><br>
        <input type="checkbox"> Chequear funcionamiento de la barra de navegación.</input>
        </div>


      
<h3>Breve descripción:</h3>
<p><a href="https://regina-molares.000webhostapp.com/" target="_blank">Página web</a> de un refugio de gatos callejeros/abandonados con accesos:</p>

<p> <b>Al público en general (responsive):</b></p>
   * Secciones:<br>
       - Página principal, Institucional, Adopción, Salva Vidas, Participá, Donaciones<br>
   * Algunas características:<br>
       - Estilos CSS/Bootstrap, con algunos ajustes en Javascript. (Accordion, iframe con mapas)<br>
       - Formulario de contacto funcional con envío por email.<br>
       - Sección Adoptá/En Adopción muestra candidatos levantados de la base de datos.<br>
<p><b>Privado, pensado para trabajo de escritorio (no responsive)</b></p>
   * Login al área administrativa con sesión de usuario y clave encriptada (algoritmo CRYPT_BLOWFISH)<br>
   * Permite operaciones CRUD sobre:<br>
     - tabla de gatos pensionados (subida de fotos funcional)<br>
     - tabla de voluntarios (asigna una clave de acceso por default que debe cambiarse al primer acceso)<br>
<h3>Tecnologías:</h3>
- HTML5<br>
- CSS3<br>
- Javascript<br>
- PHP<br>
- SQL<br>
<h3>Librerías / Frameworks / Plugins / Scripts no propios:</h3>
- Boostrap 4, jQuery, Popper<br>
- bs-custom-file-: resuelve el problema del input tipo file de BS <br>
- Parte de los textos/contenidos pertenecen a la organización Proyecto 4 Patas y Miao Cats<br>
- Este proyecto será adaptado a las necesidades y ofrecido en donación a "El Campito Felino".<br>

<p>Secciones en desarrollo: Novedades, Prensa y Difusión, Tienda, todas secciones actualizables por usuarios con acceso.</p>

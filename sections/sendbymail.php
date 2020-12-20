<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php
if (isset($_POST['submit-contact'])) {

    $email_to = "programming.regina@gmail.com";
    $email_subject = "Contacto desde TP Final CAC PHP";
    $email_from = $_POST['emailcomplet'];

    if (!isset($_POST['candidate'])) {
        $adoptante = "Si";
    } else {
        $adoptante = "No";
    }

    $email_message = "Detalles del formulario de contacto:<br><br>";
    $email_message .= "Nombre: " . $_POST['nomcomplet'] . "<br>";
    $email_message .= "E-mail: " . $_POST['emailcomplet'] . "<br>";
    $email_message .= "Teléfono: " . $_POST['celcomplet'] . "<br>";
    $email_message .= "Motivo: " . $_POST['motivo'] . "<br>";
    $email_message .= "Candidato a adoptante?: " . $adoptante . "<br>";
    $email_message .= "Comentarios: " . $_POST['comments'] . "<br><br>";
    $headers = 'From: ' . $email_from . "\r\n" .
        "Content-type: text/html; charset=utf-8" .
        'Reply-To: ' . $email_from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    header("Location: gracias.php");
}
?>
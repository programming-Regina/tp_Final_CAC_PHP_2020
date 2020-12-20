<!-- 
    TRABAJO PRÁCTICO FINAL CODO A CODO - FULLSTACK PHP
    DICIEMBRE 2020
    por REGINA NOEMÍ MOLARES 
    eMail: programming.regina@gmail.com
-->

<?php 
session_start();
session_destroy();
echo "<script>location.href='access.php';</script>";
#header("location: access.php");
exit();
?>
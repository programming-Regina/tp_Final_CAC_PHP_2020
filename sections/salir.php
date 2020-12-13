<?php session_start();
session_destroy();
header("location: access.php");
exit();

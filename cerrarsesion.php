<?php
session_start();
session_destroy();
header("Location: http://localhost/practica2/login.php");
?>
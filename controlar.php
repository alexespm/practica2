<?php
include "conexion.php"; 
session_start();

$nombre = $_POST['usuario'];
$password = $_POST['password'];

$consulta = mysqli_query ($conn, "SELECT * FROM usuarios WHERE usuario = '$nombre' AND password = '$password'");  
$consulta2 = mysqli_query ($conn, "SELECT rol FROM usuarios WHERE usuario = '$nombre' AND password = '$password'");  
if($row = mysqli_fetch_array($consulta2)){
	$var1 = $row["rol"];

}
if(!$consulta){ 
    echo mysqli_error($mysqli);
    exit;
} 

if($user = mysqli_fetch_assoc($consulta)) {
	if($var1==1){
		header("Location: http://localhost/practica2/ingresoadm.php");
	}
	if($var1==2){
		header("Location: http://localhost/practica2/ingresomtro.php");
	}
	if($var1==3){
		header("Location: http://localhost/practica2/ingresoalum.php");
	}
} 
else {
    header("Location: http://localhost/practica2/login.php");
}
?>
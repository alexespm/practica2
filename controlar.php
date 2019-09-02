<?php
include "conexion.php"; 


$nombre = $_POST['usuario'];
$password = $_POST['password'];

$consulta = mysqli_query ($conn, "SELECT * FROM usuarios WHERE usuario = '$nombre' AND password = '$password'");  
$consulta2 = mysqli_query ($conn, "SELECT rol, usu_id FROM usuarios WHERE usuario = '$nombre' AND password = '$password'");  
if($row = mysqli_fetch_array($consulta2)){
	$var1 = $row["rol"];
	$var2 = $row["usu_id"];
}
if(!$consulta){ 
    echo mysqli_error($mysqli);
    exit;
} 

if($dato = mysqli_fetch_assoc($consulta)) {
	$var3 = $dato['usuario']; 
	if($var1==1){	
		session_start();
		$_SESSION['administrador']=$var2;
		$_SESSION['usuario']=$var3;
		header("Location: http://localhost/practica2/ingresoadm.php");
		exit(); 
	}
	if($var1==2){
		session_start();
		$_SESSION['maestro']=$var2;
		$_SESSION['usuario']=$var3;
		header("Location: http://localhost/practica2/ingresomtro.php");
	}
	if($var1==3){
		session_start();
		$_SESSION['alumno']=$var2;
		$_SESSION['usuario']=$var3;
		header("Location: http://localhost/practica2/ingresoalum.php");
	}
} 
else {
	echo '<script language="javascript">alert("El usuario y la contraseña son incorrectos, por favor vuelva a introducirlos.");window.location.href="login.php"</script>';
}
?>
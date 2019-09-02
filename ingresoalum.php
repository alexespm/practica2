<?php 
session_start(); 
if(isset($_SESSION['alumno'])): ?>
	<h1>Bienvenido Alumno</h1>
	<?php	echo "Inicio sesion con el id " . $_SESSION["alumno"] . ".";?>
	<br><a href="cerrarsesion.php">Cerrar Sesión</a>
<?php else: ?>
<script language="javascript">alert("Debes iniciar sesión");window.location.href="login.php"</script>
<?php endif; ?>

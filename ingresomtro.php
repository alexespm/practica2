
<?php 
session_start(); 
if(isset($_SESSION['maestro'])): ?>
	<h1>Bienvenido Maestro</h1>
	<a href="cerrarsesion.php">Cerrar Sesión</a>
<?php else: ?>
<script language="javascript">alert("Debes iniciar sesión");window.location.href="login.php"</script>
<?php endif; ?>

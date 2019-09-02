<?php 
session_start(); 
if(isset($_SESSION['administrador'])): ?>
	<h1>Bienvenido Administrador</h1>
	<a href="cerrarsesion.php">Cerrar Sesión</a>
<?php else: ?>
<script language="javascript">alert("Debes iniciar sesión");window.location.href="login.php"</script>';
<?php endif; ?>

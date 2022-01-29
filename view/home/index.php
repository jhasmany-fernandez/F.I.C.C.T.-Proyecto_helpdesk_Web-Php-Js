<?php // iniciando condicion para denegar el acceso a url
    require_once("../../config/conexion.php");
    if(isset($_SESSION["usu_id"])){ // pregunta si existe una sesion usu_id
?>
<!DOCTYPE html>
<html>
	<head lang="es">
		<?php require_once ("../MainHead/head.php"); ?>
		
		<title>HelpDesk</>::Home</title>
			
	</head>
	<body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../MainNav/nav.php"); ?>

		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">
				Blank page.
			</div><!--.container-fluid-->
		</div><!--.page-content-->
		<!-- Contenido -->

		<?php  require_once ("../MainJs/js.php")?>
		<script type="text/javascript" src="home.js"></script>
	</body>	

</html>
<?php
} else{
	header("Location:".Conectar::ruta()."index.php"); // caso contrario direcciona a index.php
}
?>
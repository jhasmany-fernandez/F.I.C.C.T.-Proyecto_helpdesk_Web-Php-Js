<?php
    require_once("../../config/conexion.php"); //llamamos a la cadena de conexion
    session_destroy(); // destruir la sesion de usuario
    header("Location:".Conectar::ruta()."index.php"); // llamamos a la ruta index.php
    exit();
?>
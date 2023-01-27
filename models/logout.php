<?php
session_start();
unset($_SESSION["s_usuario"]);
session_destroy();
header("Location:/RESTAURANTE/views/inicio_sesion/index.php");
?>
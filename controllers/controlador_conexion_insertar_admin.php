<?php
//une la capa vista con la capa modelo
require_once("../models/insertar_admin.php");
$services= new Servicio();
$datos=$services->getServicios();
require_once("../views/PAdministradores.php");
?>

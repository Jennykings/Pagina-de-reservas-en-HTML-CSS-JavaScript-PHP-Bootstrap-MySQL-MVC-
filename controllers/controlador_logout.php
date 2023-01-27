<?php
//une la capa vista con la capa modelo
require_once("../models/logout.php");
$services= new Servicio();
$datos=$services->getServicios();
require_once("../views/inicio_sesion/reserva.php");
?>

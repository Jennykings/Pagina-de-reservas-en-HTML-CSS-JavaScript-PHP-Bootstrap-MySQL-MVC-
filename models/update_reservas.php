<?php

include("conexion_v2.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$fecha=$_POST['fecha'];
$hora=$_POST['hora'];
$personas=$_POST['personas'];
$pedido=$_POST['pedido'];
$detalle=$_POST['detalle'];
$estado=$_POST['estado'];

$sql="UPDATE reservas SET  nombre='$nombre',email='$email',fecha='$fecha',hora='$hora',personas='$personas',pedido='$pedido',detalle='$detalle',estado='$estado' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../views/PReservas.php"); 
    }
?>
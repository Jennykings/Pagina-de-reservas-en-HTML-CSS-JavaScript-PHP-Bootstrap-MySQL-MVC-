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
$estado="En proceso";


$sql="INSERT INTO reservas VALUES('$id','$nombre','$email','$fecha','$hora','$personas','$pedido','$detalle','$estado')";
$query= mysqli_query($con,$sql);

if($query){
     Header("Location: ../views/PReservas.php"); 
 
}else {
}
?>
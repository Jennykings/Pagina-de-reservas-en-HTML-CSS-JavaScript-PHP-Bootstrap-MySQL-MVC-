<?php

include("conexion_v2.php");
$con=conectar();

 $id=""; 
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
    /*  Header("Location: usuarios.php"); */
    ?>
    <?php
    include("../views/inicio_sesion/reserva.php");
 
  ?> 
  <h1 class="val">SE RESERVO CORRECTAMENTE <p class="valp">(Recuerda enviar el estado de tu reserva por nuestro chatbot)</p></h1>
  
  <?php
}else {
}
?>






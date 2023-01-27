<?php

include("conexion_v2.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM users  WHERE id='$id'"; /*$cod_estudiante  */
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: /RESTAURANTE/views/index.php");
    }
?>

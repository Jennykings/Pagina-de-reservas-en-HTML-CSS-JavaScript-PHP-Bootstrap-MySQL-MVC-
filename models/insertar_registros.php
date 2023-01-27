<?php
include("conexion_v2.php");
$con=conectar();

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$password=$_POST['password'];


$sql="INSERT INTO users VALUES('$id','$usuario','$correo','$password')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: /RESTAURANTE/views/index.php");
    
}else {
}
?>
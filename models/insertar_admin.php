<?php
include("conexion_v2.php");
$con=conectar();

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$password=$_POST['password'];


$sql="INSERT INTO admin VALUES('$id','$usuario','$correo','$password')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: ../views/PAdministradores.php");
    
}else {
}
?>
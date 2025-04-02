<?php

include("conexion_v2.php");
$con=conectar();

$id=$_POST['id'];
$usuario=$_POST['usuario'];
$correo=$_POST['correo'];
$password=$_POST['password'];

$sql="UPDATE admin SET  usuario='$usuario',correo='$correo',password='$password' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: ../views/PAdministradores.php");
    }
?>
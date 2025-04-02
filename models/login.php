
 

<?php


session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST 
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';

$user = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$pass= (isset($_POST['password'])) ? $_POST['password'] : '';



$consulta = "SELECT * FROM users WHERE usuario='$usuario' AND password='$password' ";

$consul = "SELECT * FROM admin WHERE usuario='$user' AND password='$pass' ";

$resultado = $conexion->prepare($consulta);
$resultado->execute();

$resul = $conexion->prepare($consul);
$resul->execute();


if($resul->rowCount() >= 1){
  $data = $resul->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $user;

    print json_encode($data);
  $conexion=null;  

  header("location: ../views/index.php");
  

}else if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
 
    print json_encode($data);
  $conexion=null;  

  header("location: ../views/inicio_sesion/reserva.php"); 

  

}else{
    $_SESSION["s_usuario"] = null; 
    $data=null;  
    print json_encode($data);
  $conexion=null;  
    ?>
    <?php
    include("../views/inicio_sesion/index.php");
  
  ?> 
  <h1 class="bad">ERROR DE AUTENTIFICACIÓN</h1>
  <?php
}

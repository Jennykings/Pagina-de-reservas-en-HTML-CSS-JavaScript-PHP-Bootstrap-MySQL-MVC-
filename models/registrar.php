<link rel="stylesheet" href="/RESTAURANTE/views/inicio_sesion/css_register/register.css">
<?php
/* error_reporting(0); */
 $correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$password=$_POST['password']; 
 

require 'database.php';

  $message = ''; 

  if (!empty($_POST['usuario']) && !empty($_POST['correo']) && !empty($_POST['password'])  ) {
    $sql = "INSERT INTO users (usuario, correo, password) VALUES (:usuario, :correo, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':usuario', $_POST['usuario']);
    $stmt->bindParam(':correo', $_POST['correo']);
 

      $stmt->bindParam(':password', $_POST['password']);  

    if ($stmt->execute()) {
       $message = 'Successfully created new user'; 
      ?>
      <?php
      include("../views/inicio_sesion/index_register.html");
   
    ?> 
    <h1 class="bad">USUARIO SATISFACTORIAMENTE CREADO</h1>
    <?php
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta'; 
    

    ?>
    <?php
    include("../views/inicio_sesion/index_register.php");
 
  ?> 
  <h1 class="bad">USUARIO NO CREADO</h1>
  <?php
    }
  }
?>
<?php 
    include("../controllers/controlador_conexion_actualizar_registros.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM users WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../views/inicio_sesion/dashboard/css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    </body>
</html>

<?php require_once "../views/inicio_sesion/dashboard/vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Realizar actualización</h1>

    <div class="container mt-5">
                    <form action="../controllers/controlador_conexion_update_registros.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" name="password" placeholder="password" value="<?php echo $row['password']  ?>">
                                
                            <input type="submit" class="btn btn-warning btn-block" value="Actualizar">
                    </form>
                    
                </div>



</div>
<!--FIN del cont principal-->

<?php require_once "../views/inicio_sesion/dashboard/vistas/parte_inferior.php"?>
<?php 
    include("../controllers/controlador_ReservaActualizar_conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM reservas WHERE id='$id'";
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
    <form action="../controllers/controlador_conexion_update_reservas.php" method="POST">
                    
                    <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                    
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                    <input type="email" class="form-control mb-3" name="email" placeholder="email" value="<?php echo $row['email']  ?>">
                    <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
                    <input type="time" class="form-control mb-3" name="hora" placeholder="hora" value="<?php echo $row['hora']  ?>">
                    <input type="number" class="form-control mb-3" name="personas" placeholder="personas" value="<?php echo $row['personas']  ?>">
                    <input type="text" class="form-control mb-3" name="pedido" placeholder="pedido" value="<?php echo $row['pedido']  ?>">
                    <input type="text" class="form-control mb-3" name="detalle" placeholder="detalle" value="<?php echo $row['detalle']  ?>">
                     <input type="text" class="form-control mb-3" name="estado" placeholder="estado" value="<?php echo $row['estado']  ?>"> 
                    
                <input type="submit" class="btn btn-warning btn-block" value="Actualizar">
        </form>

                    
                </div>



</div>
<!--FIN del cont principal-->

<?php require_once "../views/inicio_sesion/dashboard/vistas/parte_inferior.php"?>
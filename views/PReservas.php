<?php require_once "../views/inicio_sesion/dashboard/vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
<center><img src="../views/img/pp2.jpg" alt="" class="col-md-12" ></center><br>

    <h1>Control de reservas</h1>

    
    
      
 <?php
 include_once '../controllers/controlador_PReservas_conexion.php';


$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, nombre, email, fecha, hora, personas, pedido, detalle, estado FROM reservas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC); 

include("../controllers/controlador_PReservas_conexion_v2.php");
$con=conectar();
 
 $sql="SELECT *  FROM reservas";
$query=mysqli_query($con,$sql); 
 
error_reporting(0); 
 $id=$_GET['id'];  

  $sql="SELECT * FROM reservas WHERE id='$id'"; 
$query=mysqli_query($con,$sql);

$dat=mysqli_fetch_array($query); 





?> 




<div class="container">
         <div class="row">
           <!--  <div class="col-lg-12">  --> 
            <div class="col-md-3">
                            <h3>Ingrese datos</h3>
                            <form action="../controllers/controlador_conexion_insertar_reservas.php" method="POST">

<input type="text" class="form-control mb-3" name="id" placeholder="id" required>
<input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" required>
<input type="email" class="form-control mb-3" name="email" placeholder="email" required>
<input type="date" class="form-control mb-3" name="fecha" placeholder="fecha" required>
<input type="time" class="form-control mb-3" name="hora" placeholder="hora" required>
<input type="number" class="form-control mb-3" name="personas" placeholder="personas" required>
<input type="text" class="form-control mb-3" name="pedido" placeholder="pedido" required>
<input type="text" class="form-control mb-3" name="detalle" placeholder="detalle">

<input type="submit" class="btn btn-warning">
</form>
                        </div>           
            <!-- <button id="btnNuevo" type="button" class="btn btn-warning" data-toggle="modal">Nuevo</button>  -->   
         <!--    </div>     -->
       <!--  </div>    
    </div>    --> 
    <!-- <br>  
<div class="container">
        <div class="row"> -->
        <div class="col-md-8">
               <!--  <div class="col-lg-12"> -->
                    <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Email</th>                                
                                <th>Fecha</th>
                                <th>hora</th>
                                <th>Personas</th>
                                <th>Pedido</th>   
                                <th>Detalle</th>
                                <th>Estado</th>   
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                                     
                             foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['email'] ?></td>
                                <td><?php echo $dat['fecha'] ?></td> 
                                <td><?php echo $dat['hora'] ?></td> 
                                <td><?php echo $dat['personas'] ?></td>
                                <td><?php echo $dat['pedido'] ?></td>  
                                <td><?php echo $dat['detalle'] ?></td>
                                <td><?php echo $dat['estado'] ?></td>  
                                <th><a href="ReservaActualizar.php?id=<?php echo $dat['id'] ?>" class="btn btn-info">Editar</a></th>  
                                <th><a href="../controllers/controlador_conexion_delete_reservas.php?id=<?php echo $dat['id'] ?>" class="btn btn-danger">Eliminar</a></th> 
                                <td></td>   
                                
                                </tr>
                                        <?php 
                                            }
                                        ?>
                        </tbody>        
                       </table>                    
                    </div>
                </div>
     <!--    </div>  
    </div>     -->
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas" action="update.php" method="POST">    
            <div class="modal-body">
            <!-- <div class="form-group">
                <label for="id" class="col-form-label"> id:</label> -->
                <input type="hidden" name="id" value="<?php echo $dat['id']  ?>">
                <!-- </div> -->
                <div class="form-group">
                <label for="usuario" class="col-form-label"> Usuario:</label>
                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $dat['usuario']  ?>">
               <!--  <input type="text" class="form-control" id="nombre"> -->
                </div>
                <div class="form-group">
                <label for="correo" class="col-form-label">Correo:</label>
                <input type="text" class="form-control" id="pais">
                </div>                
                <div class="form-group">
                <label for="password" class="col-form-label">Passwsssssord:</label>
                <input type="number" class="form-control" id="edad">
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>      
        </div>
    </div>
</div>  

<!-- <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $dat['usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" name="password" placeholder="password" value="<?php echo $row['password']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div> -->
      

</div>
<!--FIN del cont principal-->

<?php require_once "../views/inicio_sesion/dashboard/vistas/parte_inferior.php"?>
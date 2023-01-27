<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

<!--favicon-->
<link rel="shortcut icon" href="/RESTAURANTE/views/img/utencilios.png" type="image/x-icon">
 
    
        <!-- css-->
        <link rel="stylesheet" href="/RESTAURANTE/views/inicio_sesion/css/login.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 

    </head>
    
    <body>
     
     
            <div class="Caja">

             
            <form  action="/RESTAURANTE/controllers/controlador_login.php" method="post"> 
   <h1 class="animate__animated animate__backInLeft">Inicie sesión</h1>
   <p class="add">¿Todavia no tienes una cuenta? <a href="/RESTAURANTE/views/inicio_sesion/index_register.html" class="reg" >Registrarse</a></p>
   <p class="blanco">Usuario <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario"></p>
   <p class="blanco">Contraseña <input class="input100" type="password" id="password" name="password" placeholder="Password"></p>
   <input class="btn btn-warning" type="submit" value="Ingresar"> <br> <br>
    <a href="/RESTAURANTE/index.html" class="reg" > - Volver a la pagina principal -</a>
   </form> 
    </div> 
     
        
 
     <script src="jquery/jquery-3.3.1.min.js"></script>    
      <script src="bootstrap/js/bootstrap.min.js"></script>    
    <script src="popper/popper.min.js"></script>     
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>   
   <script src="codigo.js"></script>   
     
    </body>
</html>


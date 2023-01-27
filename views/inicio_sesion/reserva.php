<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABOR PERUANO</title>
    <!-- iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- letras -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
     <!-- este si uso la letra -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="/RESTAURANTE/views/style.css">
    <!--favicon-->
    <link rel="shortcut icon" href="/RESTAURANTE/views/img/utencilios.png" type="image/x-icon">
   <!--JS-->
    <script src="/RESTAURANTE/views/main.js"></script>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>

<body id="principio">
    

    <header>
            <a href="/RESTAURANTE/views/inicio_sesion/inicio.php" class="logo">
                <img src="/RESTAURANTE/views/img/utencilios.png" alt="logo de la compañia" class="logo-img">   
                <h2 class="logo-nombre">SABOR 
                    PERUANO</h2>
            </a>
         <nav class="opciones">   
                <a href="/RESTAURANTE/views/inicio_sesion/inicio.php" class="nav-link">INICIO</a>
                <a href="/RESTAURANTE/views/inicio_sesion/nosotros.php" class="nav-link">NOSOTROS</a>
                <a href="/RESTAURANTE/views/inicio_sesion/servicio.php" class="nav-link">SERVICIO</a>
                <a href="/RESTAURANTE/views/inicio_sesion/equipo.php" class="nav-link">EQUIPO</a>
                <a href="/RESTAURANTE/views/inicio_sesion/chef.php">CHEFS</a>
                <a href="/RESTAURANTE/views/inicio_sesion/contacto.php"class="nav-link">CONTACTOS</a>
                 <a href="/RESTAURANTE/controllers/controlador_logout.php" > 
               <?php echo $_SESSION["s_usuario"];?>
               <i class="fas fa-fw fa-door-open"></i>
               </a>  
               <a href="/RESTAURANTE/views/inicio_sesion/reserva.php" class="reservar">RESERVAR UNA MESA</a> 
               
         </nav>
    </header>
    

    <div class="contenedor">
        <figure>
            <img src="/RESTAURANTE/views/img/platillos.jpg" alt="">
            <div class="Capa">
                <h3>Reserva</h3>
                <nav>
                    <p>
                    <a href="/RESTAURANTE/views/inicio_sesion/inicio.php" class="iniciopag">INICIO </a>
                    /   <b class="espacio"></b> RESERVA
                   </p> 
               
            </nav>
            </div>
        </figure>
    </div> 
<!--RESERVA-->        

<form action="/RESTAURANTE/controllers/controlador_usuario_reservar.php" method="post">
         <div class="contenido_reserva"> 
          <br> <br>
          <div >
              <a href="/RESTAURANTE/views/inicio_sesion/reserva.php" class="cerrar">NUEVO</a>
            </div>
              <div class="texto_reserva">
                  <h1 class="section-title ff-secondary letranom">RESERVACIÒN</h1><br><br>
              </div>
              <div class="video_reserva">
                <iframe class="video" src="https://www.youtube.com/embed/6fhAchG-jcw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              
              <div class="datos_reserva_1">
                <label for="">Nombre: </label><br>
                <input type="text" name="nombre" id=""ols="25" rows="5" placeholder="Ingrese su nombre" required> 
            </div>
            <div class="datos_reserva_2">
                <label for="">Email: </label><br>
              <input type="email" name="email" id="" placeholder="Ingrese su correo" required><br><br>
          </div>
          <div class="datos_reserva_3">
             <label for="">Fecha y hora: </label><br>
             <input type="date" name="fecha" id="" required>
             <input type="time" name="hora" id="" required>
          </div>
          <div class="datos_reserva_4">
            <label for="">Número de persona: </label><br>
              <input type="number" name="personas" id="" min="0" max="99"  required> 
          </div>
          <div class="datos_reserva_5">
          <label for="">Plato Principal: </label><br>
<select name="pedido" id="" required>
    <option value="">Seleccione</option>
    <option value="Arroz Chaufa">Arroz Chaufa</option>
    <option value="Causa Rellena">Causa Rellena</option>
    <option value="Ceviche">Ceviche</option>
    <option value="Arroz con Mariscos">Arroz con Mariscos</option>
    <option value="Carapulcra con Sopa Seca">Carapulcra con Sopa Seca</option>
    <option value="Lomo Saltado">Lomo Saltado</option>
</select><br><br>

            <label for="">Detalle de solicitud: </label><br>
           
             <textarea class="textareareserva" name="detalle" ></textarea> <!-- required -->
          </div>
          <div class="datos_reserva_6">
          <br> <br><br>
          <input class="reservar" type="submit" value="RESERVAR AHORA" ></fieldset>
          </div>
          
            
      </div> 
    </form>
           <!--   <br><br>  -->
          <!-- <h2 class="val"> ss</h2>  --><!-- style="background-color: rgb(255, 145, 0); margin-top: -50px; text-align: center;" -->
        <!-- </div>  -->
<!--FIN RESERVA-->
<!--FOOTER-->

    <section class="casillas"> 
        <div class="capsula"> 
        <div class="orden pp"> 
            <div>
            <h4 class="section-title ff-secondary text-start letracompañia">Empresa</h4>
            <a class="btn btn-link" href="/RESTAURANTE/views/inicio_sesion/nosotros.php">Sobre nosotros</a>
            <a class="btn btn-link" href="/RESTAURANTE/views/inicio_sesion/contacto.php">Contactenos</a>
            <a class="btn btn-link" href="/RESTAURANTE/views/inicio_sesion/reserva.php">Reserva</a>
            <a class="btn btn-link" href="https://cartaenmovil.es/saborperuano/politica-de-privacidad/">Polica de privacidad</a>
            <a class="btn btn-link" href="https://clubelcomercio.pe/gastronomia-sabores-peruanos-sabores-peruanos-11951">Terminos y Condiciones</a>
        </div>
            </div>
            
        <div class="orden pp">
            <div>
                <h4 class="section-title ff-secondary text-start letracompañia">Contacto</h4>
                <p class="letras"><i class="fa fa-map-marker-alt me-3"></i><b class="minespacio"> </b> Calle Bolívar 164, Miraflores 15074</p>
                <p class="letras"><i class="fa fa-phone-alt me-3"></i><b class="minespacio"> </b>+012 345 67890</p>
                <p class="letrasb"><i class="fa fa-envelope me-3"></i><b class="minespacio"> </b> SaborPeruano@gmail.com</p>
                <div class="lineaobjeto">
                    <a class="btn btn-outline-light btn-social" href="https://twitter.com/Sabor__Peruano?t=JOo6TanXffz4fI0e92oRgA&s=08"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Sabor-Peruano-108879951845641/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UC2dNb7ACjBbWHu3xnqxZmpA"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/sabor-peruano-500162241"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="capsula" > 
        <div class="orden pp">
            <div class="centrado">
                <h4 class="section-title ff-secondary text-start letracompañia">Apertura</h4>
                            <h5 class="letrasM">Lunes - Sabado</h5>
                            <p class="horas">09AM - 09PM</p>
                            <h5 class="letrasM">Domingo</h5>
                            <p class="horas">10AM - 08PM</p>
            </div>
        </div>
    
        <div class="orden">
            <div>
                <h4 class="section-title ff-secondary text-start letracompañia">Boletin informativo</h4>
                            <p class="letrasb">Para más información de nuestras promociones, ofertas y descuentos.</p>
                            <form >
                            <div class="position-relative mx-auto bt"> 
                                <input class="correo" type="email" id="inscribirse" placeholder="Tu correo" required>
                                <button type="submit" onclick="suscribir();" class="btn1 btn-primary  boton">Inscribirse</button></fieldset>
                                </div></form>
            </div>
        </div>
    </div>
    </section>
    
    <center><div class="lineaH" ></div></center>
    
    <div class="espacioA">
        <section class="grupo">
       &copy; <a class="letrasb" href="/RESTAURANTE/views/inicio_sesion/inicio.php">SABOR PERUANO</a>, todos los derechos reservados.
        </section>
      
        <section class="grupo">
        Página desarrallado por<b class="espacio"> </b><a class="letrasb" href="/RESTAURANTE/views/inicio_sesion/equipo.php">El grupo 1</a>
    </section>
    </div>
    <!--FIN FOOTER-->
    <!-- chatbot -->
    <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;
        function initLandbot() {
          if (!myLandbot) {
            var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
            s.addEventListener('load', function() {
              var myLandbot = new Landbot.Livechat({
                configUrl: 'https://chats.landbot.io/v3/H-1255479-GERB8ZK6XMLNVWFU/index.json',
              });
            });
            s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
          }
        }
        </script>
    <!-- fin chatbot -->
    <!--SUBIR-->
    <a href="#principio"><img src="/RESTAURANTE/views/img/flecha.png" id="botonArriba"></a>
    <!--FIN SUBIR-->

<!--REDES SOCIALES-->
<div class="container-bar">
	<input type="checkbox" id="btn-social">
	<label for="btn-social" class="fa fa-play"></label>
		<div class="icon-social">
<div class="redes">
    <a href="https://www.facebook.com/Sabor-Peruano-108879951845641/" class="iconred icon-f"  target="_blank"><img src="/RESTAURANTE/views/img/facebook.png" alt="" height="30px" width="30px" id="#fb"></a>
    <a href="https://www.instagram.com/sabor__peruano/" class="iconred icon-i"  target="_blank"><img src="/RESTAURANTE/views/img/instagram.jpeg" alt="" height="30px" width="30px" id="#in"></a>
    <a href="https://wa.me/message/LZ7N3UWBEWMLL1" class="iconred icon-w"  target="_blank"><img src="/RESTAURANTE/views/img/whatsapp.png" alt="" height="30px" width="30px" id="#wp"></a>
    <a href="https://twitter.com/Sabor__Peruano?t=JOo6TanXffz4fI0e92oRgA&s=08" class="iconred icon-t"  target="_blank"><img src="/RESTAURANTE/views/img/twitter.png" alt="" height="30px" width="30px" id="#tw"></a>
    <a href="https://vm.tiktok.com/ZMNe4f96W/" class="iconred icon-ti"  target="_blank"><img src="/RESTAURANTE/views/img/tiktok.jpeg" alt="" height="30px" width="30px" id="#tk"></a>
    <a href="https://www.youtube.com/channel/UC2dNb7ACjBbWHu3xnqxZmpA" class="iconred icon-y"  target="_blank"><img src="/RESTAURANTE/views/img/youtube.png" alt="" height="30px" width="30px" id="#yt"></a>
</div>
</div> 
</div>
<!--FIN REDES SOCIALES-->

    </body>
    </html>
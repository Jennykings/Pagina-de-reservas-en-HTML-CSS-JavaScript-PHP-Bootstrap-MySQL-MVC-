window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("abajo",window.scrollY>0);
})

/*Boton arriba*/
function irArriba(pxPantalla){
    window.addEventListener('scroll', () => {
        var scroll = document.documentElement.scrollTop;
        var botonArriba = document.getElementById('botonArriba');
        
        if(scroll > pxPantalla){
            botonArriba.style.right = 38 + "px";
        }else{
            botonArriba.style.right = -100 + "px";
        }
    })
}

irArriba(500);
/*FIN Boton arriba */

/* suscripción */
function suscribir(){
    user=document.getElementById("inscribirse").value;

    //structura condicional
    if(user==""){
        
        alert("Es necesario ingresar el correo");
    }else{
        alert("Se suscribió correctamente");
   } 
}
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Crepas Calif</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="PRINCIPAL_3.CSS">
    <link rel="stylesheet" href="INICIO_estilos.css">
    <link rel="stylesheet" href="admin2.css">

    <link rel="shortcut icon" href="logo nuevo_preview_rev_3 (1).png" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/5b728b9248.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="slider.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<!--ESTE SIRVE CREO-->
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css
" rel="stylesheet">



<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">


<link rel="stylesheet" href="loader.css">
</head>
<body>
<!---CARGA-->
<div class="page-loading active">
		<div class="page-loading-inner">
			<div class="page-spinner"></div>
			<span>Cargando...</span>
		</div>
	</div>    





    <header class="header">

    
        <i class='bx bxs-user-circle' id="botoncito4" ></i>

        

        <a href="#" class="logo"><img src="logo nuevo_preview_rev_3 (1).png" alt="" id="login"></a>
      

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>


    <nav class="navbar" id="normal">
        <a href="INICIO_sesion2.php" style="--i:0;">Inicio</a>
        <a href="conocenos_sesion.php" style="--i:1;">Conocenos</a>
    </nav>


    <nav class="navbar" id="nuevo">
        <a href="INICIO.html" style="--i:0;">Inicio</a>
        <a href="Historia.html" style="--i:1;">Conocenos</a>
        <a href="#" style="--i:2;" id="">Menú</a>
        <a href="#" style="--i:3;" id="">Galería</a>
        <a href="form.html" style="--i:4;" id="">Contactanos</a>

    </nav>

  
    <i class='bx bxs-user-circle' id="botoncito3"></i>

    
    
    
    <div id="usuario" class="us">
        Iniciar Sesión
        </div>
     </header>


<section class="zona1">


   
<div id="cabeza">

    <div id="lema">¡Las combinaciones que endulzan tu día!</div>


        <div id="boton">
            <button id="botoncito" onclick="enviar()">
            <span>
        Información sobre nosotros
        </span>
        </button>
    
        <div id="texto1">
  <a href="menup.php">Ver nuestro menú</a>
        </div>
    
    </div>

</div>
  
        

 


</section>

<div class="titulo3_"> <span>Platillos principales</span> </div>

<article class="seccion1">
    


   <div class="contenedor">
    <figure>
        <img src="im22.jpg" alt="">
        <div class="capa">
            <div id="titulo">Alitas con papas</div>
            <div id="parrafo">Unas pequeñas alitas adobadas, acompañadas de papas a la francesa, pequeños trozos de zanahoria, y aderezo para el sabor.</div>
        </div>
    </figure>
   </div>


   <div class="contenedor">
    <figure>
        <img src="im13.jpg" alt="">
        <div class="capa">
            <div id="titulo">Crepas preparadas</div>
            <div id="parrafo">Crepas a tu gusto nosotros te las preparamos, el límite es tu imaginación y los ingredientes como frutas, y sabores que desees agregar.</div>
        </div>
    </figure>
   </div>



   <div class="contenedor">
    <figure>
        <img src="im4.jpeg" alt="">
        <div class="capa">
            <div id="titulo">Frappes</div>
            <div id="parrafo"> Café con hielo cubierto de espuma elaborado a partir de café instantáneo, la base de su sabor puede variar, segun como lo desees.</div>
        </div>
    </figure>
   </div>


</article>








<article class="seccion2">
    <div class="Carousel">
        <div class="titulo3"><span>Galería</span></div>
     
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="fuera1.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="fuera2.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="fuera3.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="fuera4.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="imagen9.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="imagen8.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="imagen4.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="imagen17.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="imagen21.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="imagen22.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="iamgen18" alt="">
                </div>
                <div class="slide">
                    <img src="imagen19.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="im3.jpeg" alt="">
                </div>
                <div class="slide">
                    <img src="im22.jpg" alt="">
                </div>
            </div>
        </div>
    






    <button  id="botoncito2" onclick="enviar2()">
    <span>Ver mas fotos</span>
    </button>
</article>



<article class="seccion3">

    <div class="titulo3"><span>Sobre nosotros</span></div>

    <div class="textonos">
        Somos un pequeño negocio, distinguido por ofrecer Crepas, Frappes al gusto del cliente, y otros deliciosos alimentos que puedes consumir dentro del establecimiento, asi como pedidos a domicilio(Solo en la comunidad donde nos encontramos).
<a href="conocenos_sesion.php">¿Quieres saber mas?</a>
    </div>

</article>






<iframe src="footer.html" frameborder="0" class="footer"></iframe>

<div class="overlay" id="overlay">
    
<div class="popup" id="popup">

        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>


 <div id="sesion_usuario">       
        <h3>INICIA SESIÓN</h3>
     
        <h4>como usuario y navega sin limites en el sitio web.</h4>
<?php
include 'conexion.php';
include 'controlador.php';
?>

        <form method="#" class="form" id="form_sesion2">
            <div class="contenedor-inputs">
               
                <div class="formulario_div" id="grupo_usuario2">
<div class="formulario_grupo-input" id="usuario2-grupo">
<input type="text" placeholder=" " name="usuario2" id="usuario2" class="formulario_input">

    <label for="usuario2" class="form_label">Usuario:</label>
    <span class="form_line"></span>
    <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
</div>

<p class="formulario_input_error">
El usuario tiene que tener de 4 a 16 digitos, solo usa letras, numeros y guien bajo
</p>


</div>



    
<div class="formulario_div" id="grupo_password21">
     
    
     <div class="formulario_grupo-input" id="contra21-grupo">
         <input type="password" class="formulario_input" name="password21" id="password21" placeholder=" ">
         <label for="password21" class="form_label">Contraseña:</label>
         <span class="form_line"></span>
         <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
     </div>
     
     <p class="formulario_input_error">La contraseña tiene que ser de 4 a 12 digitos</p>
     
     </div>
     



              
            </div>

              
    <div class="formulario_mensaje_sesion" id="formulario_mensaje_sesion">
    
    <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error: </b>Porfavor rellene el formulario de manera correcta</p>
    
    </div>


    <div id="resultado_sesion" style="" class="resultado_sesion"></div>
            
    
    <a href="form_nuevo2.php" id="Cuenta">¿No tienes cuenta? Registrate</a>
    <input type="submit" class="btn-submit" value="Iniciar Sesion" name="btn-submit" id="enviar" >
        </form>

       
<div id="nose"  style="display:none;">

<input type="button" class="btn btn-success" style="display:none;width:100%;" id="boton_sesion2" value="Limpiar">
</div>


<a href="#" id="Cuenta" class="ad_sesion">¿Eres un administrador? Inicia Sesion aqui</a>
</div>




<div id="sesion_admin">


<h3>INICIA SESIÓN</h3>
     
     <h4>como administrador y actualiza los productos.</h4>


     <form method="#" class="form" id="form_sesion3">
         <div class="contenedor-inputs">
            
             <div class="formulario_div" id="grupo_usuario3">
<div class="formulario_grupo-input" id="usuario3-grupo">
<input type="text" placeholder=" " name="usuario3" id="usuario3" class="formulario_input">

 <label for="usuario3" class="form_label">Usuario:</label>
 <span class="form_line"></span>
 <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
</div>

<p class="formulario_input_error">
El usuario tiene que tener de 4 a 30 digitos, solo usa letras, espacios y acentos
</p>


</div>



 
<div class="formulario_div" id="grupo_password31">
  
 
  <div class="formulario_grupo-input" id="contra31-grupo">
      <input type="password" class="formulario_input" name="password31" id="password31" placeholder=" ">
      <label for="password31" class="form_label">Contraseña:</label>
      <span class="form_line"></span>
      <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
  </div>
  
  <p class="formulario_input_error">La contraseña tiene que ser de 4 a 12 digitos</p>
  
  </div>
  



           
         </div>

           
 <div class="formulario_mensaje_sesion_admin" id="formulario_mensaje_sesion_admin">
 
 <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error: </b>Porfavor rellene el formulario de manera correcta</p>
 
 </div>


 <div id="resultado_sesion-admin" style="" class="resultado_sesion-admin"></div>
         
 

 <input type="submit" class="btn-submit" value="Iniciar Sesion" name="btn-submit" id="enviar" >
     </form>

    
<div id="nose"  style="display:none;">

<input type="button" class="btn btn-success" style="display:none;width:100%;" id="boton_sesion3" value="Limpiar">
</div>


<a href="#" id="Cuenta" class="us_sesion">¿Eres un usuario? Inicia Sesion aqui</a>

</div>






    </div>
</div>


<script src="popup.js"></script> 
<script src="script_principal.js"></script>

<script>
    function enviar(){
    window.location.href=("conocenos_sesion.php");
}

function enviar2(){
    window.location.href=("galeria.php");
}

</script>

<script>

</script>




<script>
const btnAbrirPopup4 = document.querySelector(".us");

btnAbrirPopup4.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="validacion_sesion.js"></script>
<script src="script_visualizar.js"></script>
<script src="script_admin.js"></script>

<script src="loader2.js"></script>

</body>
</html>
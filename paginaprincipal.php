<?php
session_start();

if(empty($_SESSION['id'])){
    echo'<script>
    window.location.href=("INICIO_sesion2.php");
    </script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Crepas Calif</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="PRINCIPAL2_2.CSS">
    <link rel="stylesheet" href="INICIO_estilos.css">
    <link rel="shortcut icon" href="logo nuevo_preview_rev_3 (1).png" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<link rel="stylesheet" href="slider.css">

<link rel="stylesheet" href="loader.css">


<!--DEL SWEAT ALERT-->





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

    <nav class="navbar" id="nuevo">
        <a href="paginaprincipal.php" style="--i:0;">Inicio</a>
        <a href="conocenos.php" style="--i:1;">Conocenos</a>
        <a href="menup.php" style="--i:2;" id="">Menú</a>
        <a href="galeria.php" style="--i:3;" id="">Galería</a>
        <a href="formulario_contacto.php" style="--i:4;" id="">Contactanos</a>

    </nav>

  
    <i class='bx bxs-user-circle' id="botoncito3"></i>

    <div id="usuario" class="us">
        <?php
        echo
$_SESSION['nombre']." ".
$_SESSION['apellidos'];
        ?>
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
<a href="conocenos.php">¿Quieres saber mas?</a>
    </div>

</article>






<iframe src="footer.html" frameborder="0" class="footer"></iframe>


<div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>¡BIENVENIDO!</h3>

        <h4>   <div id="usuario">
        <?php
echo $_SESSION['nombre']." ".
$_SESSION['apellidos'];
        ?>
    </div></h4>
    
      

            <a href="#" id="Cuenta">Cerrar Sesión</a>
         
    </div>
</div>



            
<script src="script_principal.js"></script>

<script>
    function enviar(){
    window.location.href=("Historia.html");
}
function enviar2(){
    window.location.href=("galeria.php");
}

</script>




                 




<script src="cerrar_sesion.js"></script>

<script src="popup.js"></script>

<script>
const btnAbrirPopup4 = document.querySelector(".us");

btnAbrirPopup4.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

</script>

<script src="loader2.js"></script>

</body>
</html>
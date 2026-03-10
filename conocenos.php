<?php
session_start();

if(empty($_SESSION['id'])){
    echo'<script>

    window.location.href=("INICIO_sesion2.php");
    
    
    
    </script>';
}
?>







<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="conoce.css">
    <title>Conocenos - Crepas Calif</title>
    <link rel="shortcut icon" href="logo nuevo_preview_rev_3 (1).png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>


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
 
    <div id="lema">Conocenos</div>
    </div>
  
</div>
</section>







<section>
    <img src="marco.png" id ="marc" alt="">
    <img src="imagen2.jpeg" id="marc2" alt="">
</section>




<section>
    <img src="marco.png" id ="marco1a" alt="">
    <img src="fuera2.jpeg" id="marco2a" alt="">
</section>


<section>
    <img src="marco.png" id ="marco1b" alt="">
    <img src="imagen1.jpeg" id="marco2b" alt="">
</section>


<section>
    <img src="marco.png" id ="marco1c" alt="">
    <img src="imagen18.jpeg" id="marco2c" alt="">
</section>


<section class="zonag">
<article id="nosotros">

    <div id="texto1">NOSOTROS</div>
    <div id="parrafo12">
        Somos un pequeño ubicado en San Cosme Atlamaxac Tepeyanco, que ofrece distintos alimentos para que puedas disfrutar en familia, con amigos, o en pareja, de la misma forma, realizamos envíos a domicilio (Solo en la comunidad, en la que nos ubicamos). En donde tus servidores: Sam Zanjuampa Xochihua Y Liam Zanjuampa Xochihua, estaremos a tu disposición.
</div>
</article>
    

<article id="mision">
    <div id="texto2">MISIÓN</div>
    <div id="parrafo12">
        Nuestra misión es ofrecer al cliente amplia variedad de combinaciones y sabores, al momento de pedir cualquiera de nuestros productos, así como un excelente servicio y eficiencia, en la preparación.
    </div>
</article>

<article id="vision">

    <div id="texto3">VISIÓN</div>
    <div id="parrafo12">
        Ser reconocidos como un local familiar e innovador, que siempre busca la satisfacción de sus clientes, a través de su imaginación, además, extendernos en la zona, para poder llegar a tu hogar.
    </div>
    
</article>

<article id="valores">
    <div id="texto4">VALORES</div>
    <div id="parrafo12">
      
Valoramos la integridad, lealtad, honestidad, compromiso, innovación y la excelencia. Nos esforzamos por mantener una cultura de trabajo en equipo, respeto y profesionalismo en todas nuestras relaciones, ya sea con nuestros clientes, proveedores o empleados.

    </div>

    
</article>




</section>


<iframe src="footer.html" frameborder="0" class="footer"></iframe>






<div class="overlay" id="overlay">
    <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>¡BIENVENIDO!</h3>
        <h4>   <div id="usuario" class="us2">
        <?php
echo $_SESSION['nombre']." ".
$_SESSION['apellidos'];
        ?>
    </div></h4>
    
      

            <a href="#" id="Cuenta">Cerrar Sesión</a>
         
    </div>
</div>



    <script>
window.addEventListener("scroll",function(){
var header = this.document.querySelector("header");
header.classList.toggle("abajo", window.scrollY>0);   
});0
    </script>



<script src="validacion.js"></script>
<script src="popup.js"></script>
<script src="cerrar_sesion.js"></script>

<script src="loader2.js"></script>
<script>
    const btnAbrirPopup4 = document.querySelector(".us");
    
    btnAbrirPopup4.addEventListener('click', function(){
        overlay.classList.add('active');
        popup.classList.add('active');
    });
    
    </script>

</body>
</html>
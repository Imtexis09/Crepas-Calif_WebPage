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
    <title>Galeria - Crepas Calif</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="shortcut icon" href="logo nuevo_preview_rev_3 (1).png" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="galeria2.css">


    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


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

<div id="titulo"> <span>Galería</span></div>


<div class="container">




<div class="box">

    <img src="im38.jpeg" alt="">
</div>

<div class="box">
    <img src="fuera4.jpeg" alt="">
    
</div>

<div class="box">
    <img src="fuera1.jpeg" alt="">
    
</div>

<div class="box">

    
<img src="imagen6.jpeg" alt="">
</div>

<div class="box">

    <img src="imagen7.jpeg" alt="">
</div>


<div class="box">
    <img src="imagen8.jpeg" alt="">
    
</div>
<div class="box">
    <img src="imagen9.jpeg" alt="">
    
</div>



<div class="box">

    <img src="imagen9.jpeg" alt="">
    
</div>



<div class="box">

    <img src="imagen17.jpeg" alt="">
    
</div>




<div class="box">
    <img src="imagen18.jpeg" alt="">
    
</div>



<div class="box">

    <img src="imagen20.jpeg" alt="">
</div>



<div class="box">

    <img src="imagen21.jpeg" alt="">
    
</div>


<div class="box">
    <img src="imagen13.jpeg" alt="">
</div>

<div class="box">

    <img src="imagen15.jpeg" alt="">
    
</div>




<div class="box">

    <img src="im21.jpg" alt="">
</div>



<div class="box">

    <img src="im22.jpg" alt="">
</div>

<div class="box">
    <img src="im23.jpg" alt="">

</div>

<div class="box">

    <img src="im24.jpg" alt="">
</div>

<div class="box">
    <img src="im25.jpg" alt="">
</div>


<div class="box">
    <img src="im26.jpg" alt="">
</div>


<div class="box">

    <img src="im27.jpg" alt="">
</div>

<div class="box">
   
<img src="im28.jpg" alt=""> 
</div>

<div class="box">
    <img src="im29.jpeg" alt="">
</div>

<div class="box">
    <img src="im30.jpeg" alt="">

</div>

<div class="box">
    <img src="im31.jpeg" alt="">
</div>


<div class="box">
    <img src="im32.jpeg" alt="">
</div>

<div class="box">
    <img src="im33.jpeg" alt="">
</div>

<div class="box">

    <img src="im34.jpeg" alt="">
</div>


<div class="box">
    <img src="alaspapas3.jpg" alt="">
</div>

<div class="box">
    <img src="im15.jpg" alt="">
</div>
<div class="box">
    <img src="imagen1.jpeg" alt="">
</div>






</div>




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


<script src="cerrar_sesion.js"></script>
<script src="popup.js"></script>

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
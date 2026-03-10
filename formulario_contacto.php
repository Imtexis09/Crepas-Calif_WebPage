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
    <link rel="stylesheet" href="estilosform2_2.css">
    <title>Contactanos- Crepas Calif</title>
    <link rel="shortcut icon" href="logo nuevo_preview_rev_3 (1).png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/5b728b9248.js" crossorigin="anonymous"></script>
    



    
    <script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js
"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css
" rel="stylesheet">




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


    <div id="titulo"> <span>Contactanos</span></div>

<div id="cuadro">


    <div id="persona">
        <img src="personita.jpg" alt="">
        </div>


<form action="" name="formulario" id="formulario" class="formulario">

<div id="p1">
    <div id="titulo2">Datos personales</div>
    

    <div class="formulario_div" id="grupo_nombre">
    
      
    
    <div class="formulario_grupo-input" id="nombre-grupo">
        <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder="">
       
        <label for="nombre" class="form_label">Nombre:</label>
        <span class="form_line"></span>
  
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
  
  
    </div>
    
    <p class="formulario_input_error">El nombre tiene que tener de 4 a 20 digitos, solo usa letras, espacios y acentos.</p>
    
    </div>



    
   
    
    <div class="formulario_div" id="grupo_correo">    
    <div class="formulario_grupo-input" id="correo-grupo">
        <input type="email" class="formulario_input" name="correo" id="correo" placeholder=" ">

        <label for="correo" class="form_label">Correo:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">El correo solo puede contener letras, numeros, puntos guiones y guion bajo</p>
    
    </div>
    


       
 
    <!--TELEFoNO--->
    <div class="formulario_div" id="grupo_telefono">
      
    
    <div class="formulario_grupo-input" id="telefono-grupo">
        <input type="text" class="formulario_input" name="telefono" id="telefono" placeholder=" ">

        <label for="telefono" class="form_label">Telefono:</label>
        <span class="form_line"></span>

        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">El telefono solo puede contener numeros y el maximo son 10 digitos</p>
    
    </div>


  <!--Mensaje-->
    

    
  <div class="formulario_div" id="grupo_mensaje">
    
      
    
    <div class="formulario_grupo-input" id="mensaje-grupo">
        <input type="text" class="formulario_input" name="mensaje" id="mensaje" placeholder="">
       
        <label for="mensaje" class="form_label">Mensaje:</label>
        <span class="form_line"></span>
  
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
  
  
    </div>
    
    <p class="formulario_input_error">El mensaje solo debe tener espacios, letras y numeros.</p>
    
    </div>
    

   


  



   

</div>




<div id="p2">
<!--LO DEL SELECT PARA QUE ELIJA-->
    <div id="titulo2">Información que desea obtener</div>
<select name="asunto" id="asunto" class="input49" placeholder="Selecciona un Asunto" onchange="mostrar()">
    <option value=""></option>
    <option value="dudas">Dudas sobre Pedidos o Envios a Domicilio</option>
    <option value="evento">Planeación de un evento</option>
    <option value="otro">Otro</option>
</select>

<!--primera pregunta-->
<div id="mostrar2" style="display: none;">

    <div id="texto_mostrar">¿Qué es lo que desea Preguntar?</div>
    <div class="formulario_div" id="grupo_peticion">
    
      
    
    <div class="formulario_grupo-input" id="peticion-grupo">
        <input type="text" class="formulario_input" name="peticion" id="peticion" placeholder=" ">
        <label for="peticion" class="form_label">Redacte su Peticion:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">La peticion debe tener de 8 a 40 caracteres, entre letras, espacios y numeros.</p>
    
    </div>
    
    


</div>

<!--la del otro pregunta-->
    <div id="mostrar_otro" style="display: none;">


        <div id="texto_mostrar">¿Cuál es la duda que tiene?</div>
     
        

        <div class="formulario_div" id="grupo_duda">
    
      
    
    <div class="formulario_grupo-input" id="duda-grupo">
        <input type="text" class="formulario_input" name="duda" id="duda" placeholder=" ">
        <label for="duda" class="form_label">Redacte su Duda:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">La redaccion debe tener de 8 a 40 carateres entre letras, espacios y numeros.</p>
    
    </div>  
    
    </div>


<!--datos a guardar del evento-->
        <div id="mostrar_evento">
            <div id="titulo_evento">Datos del evento</div>

            <!--ESTE ES PARA LA FECHA-->



    
            <div class="formulario_div" id="grupo_fecha_evento">
    
      
    
    <div class="formulario_grupo-input" id="fecha_evento-grupo">
    <input type="date" id="fecha_evento" name="fecha_evento" class="formulario_input">
       
        <label for="fecha_evento" class="form_label">Fecha del evento:</label>
        <span class="form_line"></span>
  
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
  
  
    </div>
    
    <p class="formulario_input_error">Ingrese una fecha valida.</p>
    
    </div>






  
    




    
   <!--TIPO EVENTO-->
 
   <div class="formulario_div" id="grupo_evento">
    
      
    
    <div class="formulario_grupo-input" id="evento-grupo">
        <input type="text" class="formulario_input" name="evento" id="evento" placeholder=" ">
        <label for="evento" class="form_label">Tipo de Evento:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">Esta redaccion debe tener de 8 a 30 caracteres entre letras, numeros y espacios.</p>
    
    </div>


 



<div id="radios2">


<div id="titulo_productos">Elija los Platillos</div>

  <input type="checkbox" name="productos" id="crepas" class="check">
  <label for="crepas">Crepas</label>

  <input type="checkbox" name="productos" id="alitas" class="check">
  <label for="alitas">Alitas</label>

  <input type="checkbox" name="productos" id="frappes" class="check">
  <label for="frappes">Frappes</label>

  <input type="checkbox" name="productos" id="papas" class="check">
  <label for="papas">Papás</label>


    <input type="text" id="junto" style="display:none" name="junto"> 

</div>

<div id="mensaje_productos" class="mensaje_productos"> 
    <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error: </b>Porfavor rellene el formulario de manera correcta</p>
       </div>


<!--AJUSTES DEL EVENTO-->

       <div id="titulo_otro">¿Desea ajustar otro detalle del evento?</div>

      
    
       <div class="formulario_div" id="grupo_ajuste">
    
      
    
    <div class="formulario_grupo-input" id="ajuste-grupo">
        <input type="text" class="formulario_input" name="ajuste" id="ajuste" placeholder=" ">
        <label for="ajuste" class="form_label">Redacte el ajuste  a realizar:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">Esta redaccion debe tener entre 8 a 30 caracteres, entre letras, numeros y espacios.</p>
    
    </div>





        </div>
</div>

<!--Como desea ser contactado-->




<div id="p3">
<div id="titulo3">¿Cómo desea ser contactado?</div>


<div id="botones">

    <div id="radios">
        <input type="radio" name="seleccion" class="radio" id="telefono_seleccion" onclick="radios()">
    <div id="telefono2">Teléfono</div>
</div>
<div id="radios">
    <input type="radio" name="seleccion" class="radio" id="email_seleccion" onclick="radios()">
    <div id="email2">Email</div>      
  </div>
   





  
  <div id="mensaje_seleccion" class="mensaje_seleccion"> 
 
    
 <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error: </b>Porfavor rellene el formulario de manera correcta</p>
 
 
    </div>



</div>


<!--FORMAS DE CONTACTO A MODIFICAR-->
<div class="seleccion1">




<div class="formulario_div" id="grupo_telefono_contacto">
    
      
    
    <div class="formulario_grupo-input" id="telefono_contacto-grupo">
        <input type="text" class="formulario_input" name="telefono_contacto" id="telefono_contacto" placeholder=" ">
        <label for="telefono_contacto" class="form_label">Telefono:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">El telefono debe tener maximo 10 digitos, utilizando solo numeros.</p>
    
    </div>



<div id="elegir">Seleccione la fecha y la hora</div>
<!--LA FECHA DE LA SELECCION DE TELEFONO -->


<div class="formulario_div" id="grupo_fecha">
    
      
    
    <div class="formulario_grupo-input" id="fecha-grupo">
    <input type="date" id="fecha" name="fecha" class="formulario_input">
       
        <label for="fecha" class="form_label">Fecha:</label>
        <span class="form_line"></span>
  
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
  
  
    </div>
    
    <p class="formulario_input_error">Ingrese una fecha valida.</p>
    
    </div>

    </div>
<!--LA SELECCION DOS-->

    <div class="seleccion2">
    
    <div class="formulario_div" id="grupo_correo_contacto">

    <div class="formulario_grupo-input" id="correo_contacto-grupo">
        <input type="email" class="formulario_input" name="correo_contacto" id="correo_contacto" placeholder=" ">

        <label for="correo_contacto" class="form_label">Correo:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">El correo solo puede contener letras, numeros, puntos guiones y guion bajo</p>
    
    </div>
    

</div>
</div>




<div class="formulario_mensaje" id="formulario_mensaje">
    
    <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error: </b>Porfavor rellene el formulario de manera correcta</p>
    
    </div>





<div class="formulario_grupo formulario_grupo-btn-enviar">
    <input type="submit" id="boton" class="boton" name="Enviar" >


    <p class="formulario_mensaje-exito" id="formulario_mensaje-exito">
    El formulario se envio exitosamente
    </p>
</div>

<div id="resultado" style="background-color:#aaa;width:100%;" class=""></div>
<div id="nose"  style="display:none;">

<input type="button" class="btn btn-success" style="display:none;width:100%;" id="boton1" value="Limpiar">
</div>




</form>






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


<script src="script_principal.js" ></script>
<script src="cerrar_sesion.js"></script>




<script>
    var getimport = document.querySelector('link[rel="import"]').import;
var getcontent = getimport.import.querySelector("#pie");
document.body.appendChild(document.importNode(getcontent,true));
</script>
<script>
function mostrar(){
    var seleccion = document.getElementById("asunto").value;
if(seleccion==""){
    document.getElementById('mostrar2').style.display='none';
    document.getElementById('mostrar_otro').style.display='none';
    document.getElementById("mostrar_evento").style.display="none";
}

    if(seleccion == "dudas"){
    document.getElementById('mostrar2').style.display='block';
    document.getElementById('mostrar_otro').style.display='none';
    document.getElementById("mostrar_evento").style.display="none";
}
if(seleccion == "evento"){
    document.getElementById('mostrar_otro').style.display='none';
    document.getElementById('mostrar2').style.display='none';
document.getElementById("mostrar_evento").style.display="block";


  
}

if(seleccion == "otro"){
    document.getElementById('mostrar_otro').style.display='block';
    document.getElementById('mostrar2').style.display='none';
    document.getElementById("mostrar_evento").style.display="none";
}





}

function radios(){
    var tel = document.querySelector("#telefono_seleccion");
    var em = document.querySelector("#email_seleccion");


    var campo1 = document.querySelector(".seleccion1");
    var campo2 = document.querySelector(".seleccion2");

    if(tel.checked){
          
            campo1.style.display = "block";
            campo2.style.display = "none";
            
    }
    if(em.checked){
       

            campo2.style.display = "block";
            campo1.style.display = "none";
    }
}
</script>



<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="popup.js"></script>

<script src="validacion_contacto.js"></script>
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
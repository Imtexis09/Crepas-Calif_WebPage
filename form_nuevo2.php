<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="form_nuevo4.css">
    <title>Registrate - Crepas Calif</title>
    <link rel="shortcut icon" href="logo nuevo_preview_rev_3 (1).png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="admin2.css">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
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

    <div  class="us">
        Iniciar Sesión
        </div>
     </header>







     <img src="login.jpg" class="imagem">

        <div id="contenedor">
            




             
<form  id="formulario" class="formulario" method="POST" action="#">


    <i class='bx bxs-user-circle' id="user"></i>
                     <h2 class="form_titulo">Crea una cuenta gratis</h2>



    <div class="formulario_div" id="grupo_usuario">
    
      
    
    <div class="formulario_grupo-input" id="usuario-grupo">
        <input type="text" class="formulario_input" name="usuario" id="usuario" placeholder="">
       
        <label for="usuario" class="form_label">Usuario:</label>
        <span class="form_line"></span>
  
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
  
  
    </div>
    
    <p class="formulario_input_error">El usuario tiene que tener de 4 a 16 digitos, solo usa letras, numeros y guion bajo</p>
    
    </div>
    
    
    <div class="formulario_div" id="grupo_nombre">
    
      
    
    <div class="formulario_grupo-input" id="nombre-grupo">
        <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder=" ">
        <label for="nombre" class="form_label">Nombre:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">El nombre tiene que tener de 4 a 20 digitos, solo usa letras, espacios y acentos</p>
    
    </div>
    
    
    <div class="formulario_div" id="grupo_apellidos">
    
      
    
        <div class="formulario_grupo-input" id="apellidos-grupo">
            <input type="text" class="formulario_input" name="apellidos" id="apellidos" placeholder=" ">
            <label for="apellidos" class="form_label">Apellidos:</label>
            <span class="form_line"></span>
            <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
        </div>
        
        <p class="formulario_input_error">El usuario tiene que tener de 4 a 30 digitos, solo usa letras, espacios y acentos</p>
        
        </div>

     




    
    <div class="formulario_div" id="grupo_password">
     
    
    <div class="formulario_grupo-input" id="contra-grupo">
        <input type="password" class="formulario_input" name="password" id="password" placeholder=" ">
        <label for="password" class="form_label">Contraseña:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">La contraseña tiene que ser de 4 a 12 digitos</p>
    
    </div>
    
    
    
    <div class="formulario_div" id="grupo_password2">
    
    <div class="formulario_grupo-input" id="reafirmo-contra-grupo">
        <input type="password" class="formulario_input" name="password2" id="password2" placeholder=" ">
        <label for="password2" class="form_label">Reafirmar Contraseña:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">Ambas contraseñas deben ser iguales</p>
    
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
    
    <div class="formulario_div" id="grupo_edad">
    
      
    
        <div class="formulario_grupo-input" id="edad-grupo">
            <input type="text" class="formulario_input" name="edad" id="edad" placeholder=" ">
            <label for="edad" class="form_label">Edad:</label>
            <span class="form_line"></span>
            <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
        </div>
        
        <p class="formulario_input_error">La edad tiene que tener de 2 digitos, ser mayor a 18 años y menor a 60, y solo usa numeros</p>
        
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
    
    <!--CAMPOS AGREGADOS-->


     <!--GENERO-->



     <div class="formulario_div" id="grupo_genero">
      
    
      <div class="formulario_grupo-input" id="genero-grupo">
          
<select name="genero" id="genero" class="formulario_input">
<option value=""></option>
  <option value="F">Femenino</option>
  <option value="M">Masculino</option>
  <option value="N/A">No quiero mencionarlo</option>
</select>
  
          <label for="genero" class="form_label">Genero:</label>
          <span class="form_line"></span>
  
          <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
      </div>
      
      <p class="formulario_input_error">Seleccione una opcion (la que desee)</p>
      
      </div>
      







       <!--DIRECCION-->

       <div class="formulario_div" id="grupo_direccion">
      
    
      <div class="formulario_grupo-input" id="direccion-grupo">
          <input type="text" class="formulario_input" name="direccion" id="direccion" placeholder=" ">
  
          <label for="direccion" class="form_label">Direccion:</label>
          <span class="form_line"></span>
  
          <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
      </div>
      
      <p class="formulario_input_error">La direccion solo puede contar con letras, numeros espacios, . o #</p>
      
      </div>




    <!---TERMINOS Y CONDICIONES-->
    
    <div class="formulario_grupo" id="grupo_terminos">
    
    <label class="formulario_label">
        <input type="checkbox" name="terminos" id="terminos" class="formulario_checkbox">
        Acepto los terminos y condiciones
    </label>
    </div>
    
    <div class="formulario_mensaje" id="formulario_mensaje">
    
    <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error: </b>Porfavor rellene el formulario de manera correcta</p>
    
    </div>
    
    
    <div class="formulario_grupo formulario_grupo-btn-enviar">
    
    
    <input type="submit" class="formulario_btn" value="Registrarse">
    

    <div class="form-link">
        ¿Ya tienes Cuenta? <div id="activar">INICIA SESION</div></div>


    <p class="formulario_mensaje-exito" id="formulario_mensaje-exito">
    El formulario se envio exitosamente
    </p>
    </div>
    
    </form>
    
    
    
    
            </div>
            
            <div id="resultado" style="background-color:#aaa;width:100%;" class=""></div>
<div id="nose"  style="display:none;">

<input type="button" class="btn btn-success" style="display:none;width:100%;" id="boton1" value="Limpiar">
</div>






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
            
    
    <a href="form_nuevo2.php" id="Cuenta">¿No tienes cuenta? Iniciar sesion</a>
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





<script src="script_principal.js" ></script>
<script>
    var getimport = document.querySelector('link[rel="import"]').import;
var getcontent = getimport.import.querySelector("#pie");
document.body.appendChild(document.importNode(getcontent,true));
</script>

<script>
    function validarInput(e) {
           var valor = e.target.value;
           var soloLetras = /^[A-Za-z\s]+$/;
           if (!soloLetras.test(valor)) {
               e.target.value = valor.slice(0, -1);
           }
       }
   
   </script>
   <script>
    document.addEventListener('DOMContentLoaded', function () {
    const passwordField = document.getElementById('clave');
    const togglePassword = document.getElementById('ojo1');

    const togglePassword2 = document.getElementById('ojo1abrir');


    var cerrarojo = document.getElementById('ojo1c');
    var abrirojo = document.getElementById('ojo1a');

    togglePassword.addEventListener('click', function () {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');

            cerrarojo.style.display = "none";
            abrirojo.style.display = "block";
        } else {
            passwordField.type = 'password';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');

            cerrarojo.style.display = "block";
            abrirojo.style.display = "none";
        }
    });


    togglePassword2.addEventListener('click', function () {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
            cerrarojo.style.display = "none";
            abrirojo.style.display = "block";
        } else {
            passwordField.type = 'password';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');

            cerrarojo.style.display = "block";
            abrirojo.style.display = "none";
        }
    });


});
   </script>
   <script>
    document.addEventListener('DOMContentLoaded', function () {
    const passwordField = document.getElementById('clave2');
    const togglePassword = document.getElementById('ojo2');

    const togglePassword2 = document.getElementById('ojo2cerrar');


var cerrarojo = document.getElementById('ojo2c');
var abrirojo = document.getElementById('ojo2a');

    togglePassword.addEventListener('click', function () {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');


            cerrarojo.style.display = "none";
            abrirojo.style.display = "block";

        } else {
            passwordField.type = 'password';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');

            cerrarojo.style.display = "block";
            abrirojo.style.display = "none";
        }
    });



    togglePassword2.addEventListener('click', function () {
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');

            cerrarojo.style.display = "none";
            abrirojo.style.display = "block";
        } else {
            passwordField.type = 'password';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');

            cerrarojo.style.display = "block";
            abrirojo.style.display = "none";
        }
    });


});
   </script>

<script>

var btnAbrirPopuplink = document.querySelector("#activar");

    btnAbrirPopuplink.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

</script>


  


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="valido2.js"></script>
<script src="validacion_sesion.js"></script>
<script src="script_admin.js"></script>
<script src="script_visualizar.js"></script>


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
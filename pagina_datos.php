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
    <title>Factura - Crepas Calif</title>
    <link rel="stylesheet" href="pagina_datos2.css">

<link rel="shortcut icon" href="logo nuevo_preview_rev_3 (1).png" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/ebae95e142.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5b728b9248.js" crossorigin="anonymous"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
   <script src="https://kit.fontawesome.com/5b728b9248.js" crossorigin="anonymous"></script>
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js
"></script>


    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
   
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>






<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>




<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css
" rel="stylesheet">



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
        
        <div  class="us">
      
    
     <?php
        echo
        $_SESSION['nombre']." ".
        $_SESSION['apellidos'];
        ?>
    
    
        </div>
        </header>
        
      
        




        
        
        <div id="contenedor">
                    
        <div id="titulo_factura">
            FACTURA
        </div>


    <div class="datos_general">

  
        <div id="datos_negocio">

<div id="logo">
    <img src="logo nuevo_preview_rev_3 (1).png" alt="" id="logo_factura">
</div>

<div id="fecha_actual">
    Fecha actual:

    <div class="insertar_fecha">

    </div>
</div>

<div id="no_factura">
    No° de Factura:
    <div class="insertar_factura">

    </div>
</div>

<div id="id_cliente">
    ID del Cliente: 
    <div class="insertar_id"><?php
        echo " ".
        $_SESSION['id']." ";
        ?>
           </div>
</div>

        </div>
        

        <div id="datos_usuario">

        <div id="nom_completo">

            Nombre del Usuario:
            <div id="nombre"> <?php
        echo
        $_SESSION['nombre']." ";
        ?>
    </div>
            <div id="apellidos">
            <?php
        echo
        $_SESSION['apellidos'];
        ?>
    
            </div>
        </div>

        <div id="Direccion">
Direccion:

<div class="insertar_direccion">
<?php
        echo " ".
        $_SESSION['direccion'];
        ?>
</div>

        </div>

        <div id="Telefono">
Telefono:
            <div class="insertar_telefono">
            <?php
        echo " ".
        $_SESSION['telefono'];
        ?>
            </div>
        </div>

        <div id="Email">
Email:
<div class="insertar_email">
<?php
        echo " ".
        $_SESSION['correo'];
        ?>
</div>
        </div>


        </div>
    </div>

        </div>
    
        
<div id="pegar_nuevo_codigo" class="" >

<?php
   
include ("conexion.php");
   
   //la consulta
   
   $resultado = mysqli_query($conexion,"SELECT ID_factura FROM factura");
   if (!$resultado) {
       echo 'No se pudo ejecutar la consulta: ' . mysql_error();
       exit;
   }
//creacion del array
   $arrayDatos = array();

   while($fila = mysqli_fetch_row($resultado)){
$arrayDatos [] = $fila;
   }
   
print_r ($arrayDatos);
echo "<br>";

   $resul = "SELECT * FROM factura";
//el contador de cuantos id hay
$result = mysqli_query($conexion,$resul);

$rowcount = mysqli_num_rows($result);
     echo $rowcount . "<br>";

//recorriendo el arreglo si es que rowcount es mayor a 0 
if($rowcount>0){
    for ($i=0; $i<($rowcount) ; $i++) { 
        print_r (  $arrayDatos[$i]   );
    
 
 $valor_maximo[$i] = $arrayDatos[$i];
 
    }
 echo "<br>";
    print_r($valor_maximo[($rowcount-1)]);
 $valor_nuevo = implode($valor_maximo[$rowcount-1]);
 echo "<br>".$valor_nuevo;
}
else{
    $valor_nuevo = "01";
}
  


?>




<input type="text" value="<?php echo $valor_nuevo?>" id="obtener_maximo">


</div>





<div id="contenedor_fechas">


    <div class="forma_pago">
        <div class="titulo_pago">Condiciones de pago</div>

        <div class="selecionar_pago">
            <select name="pago" id="pago">

                <option value="">

                </option>


                <option value="Efectivo">
                    Efectivo
                </option>
    
                <option value="Tarjeta">
            Tarjeta</option>
    
            </select>
        </div>
       
    </div>

    <div class="fecha_ven">

        <div class="titulo_fecha">
Fecha de vencimiento
        </div>
        <div id="fecha_vencido">
Seleccione una forma de pago
        </div>
    </div>

</div>



        <div class="tabla_datos" id="tabla_datos">

<div id="titulo_ticket" class="titulo_ticket">Ticket de compra</div>
        
            <table class="datos_insertados" id="datos_insertados">
                <thead>

                    <tr>
                        <th>Cantidad</th>
                        <th id="descripcion">Descripcion</th>
                        <th>Precio por unidad</th>
                        <th>Total de linea</th>
                    </tr>
    
                </thead>

                <tbody id="productosContainer">

               

                </tbody>
          


<tbody id="datos_finales">
<tr>
<td></td>
<td></td>
<td>SUBTOTAL</td>
<td id="insertar_sub"></td>
</tr>

<tr>
    <td></td>
    <td></td>
    <td>IMPUESTO SOBRE LAS VENTAS (IVA 16%)</td>
    <td id="insertar_IVA"></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td>TOTAL</td>
        <td id="insertar_total_compra"></td>
        </tr>

</tbody>


            </table>

        </div>



        <div class="formulario_mensaje" id="formulario_mensaje">
    <p><i class="fa-solid fa-triangle-exclamation"></i> <b>Error: </b>Porfavor rellene el campo de "Forma de pago"</p>
    </div>



        <div class="grupo_botones">


       

            <button id="seguir_compra">Seguir comprando</button>
            <button id="finalizar_compra">Finalizar compra</button>
        </div>

        <div id="resultado">

        </div>



        <div id="datos_enviar">

        <form action="" id="formulario">

Usuario
        <input type="text" id="nombre_usuario" value="<?php
        echo
        $_SESSION['nombre']." ".$_SESSION['apellidos'];
        ?>">
Direccion
        <input type="text" id="direccion" value="<?php
        echo
        $_SESSION['direccion']; ?> " >
    Telefono 
    <input type="text" id="telefono" value="<?php
        echo
        $_SESSION['telefono']; ?> ">
    Email
    <input type="text" id="email_usuario" value="<?php
        echo
        $_SESSION['correo']; ?> ">

    Fecha actual
    <input type="text" id="fecha_actual_usuario" 
    >
no_factura
<input type="text" id="factura">
ID 
<input type="text" id="idcliente" value="<?php
        echo
        $_SESSION['id']; ?> ">
pago_forma
<input type="text" id="condiciones_pago">
fecha vencido
<input type="text" id="fecha_vencimiento">
cantidad
<input type="text" id="cantidad" >
productos
<input type="text" id="productos">
subtotal
<input type="text" id="subtotal">
iva
<input type="text" id="IVA">
total
<input type="text" id="total_enviar">



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
        
        
        
        <script src="script_cargar.js"></script>
        
        
        
        <script src="cerrar_sesion.js"></script>
        
        <script src="popup.js"></script>
        
        <script>
        const btnAbrirPopup4 = document.querySelector(".us");
        
        btnAbrirPopup4.addEventListener('click', function(){
            overlay.classList.add('active');
            popup.classList.add('active');
        });
        
        </script>
        
        
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    


        <script src="manipular_fechas.js">
    
    </script>

    
<!-- Método 1: HTML+CDN -->
<script src="https://cdn.jsdelivr.net/npm/dayjs"></script>

<script src="cambiar_fecha.js"></script>
<script src="generar_codigo.js"></script>
<script src="enviar_comprabd.js"></script>
<script src="loader2.js"></script>
</body>
</html>
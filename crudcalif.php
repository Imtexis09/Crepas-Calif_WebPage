<?php
include("conexion_crud.php");
$con = conectar();

$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);

?>
<?php
session_start();
if(empty($_SESSION['ID']) ){
    echo'<script>
    window.location.href=("INICIO_sesion2.php");
    </script>';  
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CRUD CALIF</title>
    <script src="https://kit.fontawesome.com/bb09f1a156.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="header">
<input type="checkbox" id="check">
<label for="check" class="icons">
    <i class='bx bx-menu' id="menu-icon"></i>
    <i class='bx bx-x' id="close-icon"></i>
</label>
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
<div id="usuario" class="us">
        <?php
        echo
$_SESSION['usuario']
        ?>
        
    </div>

    <div id="salir"> 
        <a href="salir2.php">SALIR</a>
    </div>
</header>

    <div class="formulario_agregar">
        <h1>AGREGA NUEVOS PRODUCTOS</h1>
        <div class="formulario_div" id="grupo_usuario">
        <form action="registrar_crud.php" method="POST" enctype="multipart/form-data" class="formulario" id="formulario">

<!--ID  CLIENTE--->
        <div class="formulario_div" id="grupo_id_producto">
      <div class="formulario_grupo-input" id="id_producto-grupo">
          <input type="text" class="formulario_input" name="id_producto" id="id_producto" placeholder="">
  
          <label for="id_producto" class="form_label">ID del PRODUCTO:</label>
          <span class="form_line"></span>
  
          <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
      </div>
      
      <p class="formulario_input_error">El Id-Producto solo puede contener numeros,mayuscualas,(-),maximo son 11 digitos</p>
      
      </div>

      <!--NOMBRE--->
      <div class="formulario_div" id="grupo_nombre">
      <div class="formulario_grupo-input" id="nombre-grupo">
        <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder=" ">
        <label for="nombre" class="form_label">NOMBRE:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">El nombre tiene que tener de 4 a 20 digitos, solo usa letras, espacios y acentos</p>
    </div>

      <!--TIPO--->
      <div class="formulario_div" id="grupo_tipo">
      <div class="formulario_grupo-input" id="tipo-grupo">
        <input type="text" class="formulario_input" name="tipo" id="tipo" placeholder="">
        <label for="tipo" class="form_label">TIPO:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">El Tipo tiene que tener de 4 a 20 letras</p>
    </div>
    <!--PRECIO--->
    <div class="formulario_div" id="grupo_precio">
      <div class="formulario_grupo-input" id="precio-grupo">
        <input type="text" class="formulario_input" name="precio" id="precio" placeholder="">
        <label for="precio" class="form_label">PRECIO: $</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">El Precio solo puede contener numeros y el maximo son 4 dígitos.</p>
    </div>

            
 <!--SECCION--->
    <div class="formulario_div" id="grupo_seccion">
      <div class="formulario_grupo-input" id="genero-seccion">
          
<select name="seccion" id="seccion" class="formulario_input">
                <option value=""></option>
                <option value="1">SECCION 1</option>
                <option value="2">SECCION 2</option>
                <option value="3">SECCION 3</option>
</select>
  
          <label for="seccion" class="form_label">SECCION:</label>
          <span class="form_line"></span>
  
          <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
      </div>
      
      <p class="formulario_input_error">Seleccione una opcion (la que desee)</p>
      </div>




<!--SOLICITUD--->
<div class="formulario_div" id="grupo_solicitud">
      <div class="formulario_grupo-input" id="solicitud-seccion">
          
<select name="solicitud" id="solicitud" class="formulario_input">
                <option value=""></option>
                <option value="Alto+">MUY ALTO</option>
                <option value="Alto">ALTO</option>
                <option value="Medio">MEDIO</option>
                <option value="Bajo">BAJO</option>
</select>
  
          <label for="solicitud" class="form_label">SOLICITUD:</label>
          <span class="form_line"></span>
  
          <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
      </div>
      
      <p class="formulario_input_error">Seleccione una opcion (la que desee)</p>
      </div>



<!--DESCRIPCION--->
<div class="formulario_div" id="grupo_descripcion">
      <div class="formulario_grupo-input" id="descripcion-grupo">
        <input type="text" class="formulario_input" name="descripcion" id="descripcion" placeholder=" ">
        <label for="descripcion" class="form_label">DESCRIPCION:</label>
        <span class="form_line"></span>
        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
    </div>
    
    <p class="formulario_input_error">La Descripcion puede tener hasta 50 digitos</p>
    </div>
    <div class="field image">
        <label>IMAGEN:</label>
        <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
    </div>
            <div class="formulario_mensaje" id="formulario_mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>



            <div class="formulario_grupo formulario_grupo-btn-enviar">
    <input type="submit" class="formulario_btn" value="AGREGAR">
    
    <p class="formulario_mensaje-exito" id="formulario_mensaje-exito">
    El Registro se agrego exitosamente
    </p>
    </div>
		</form>
        
    </div>
    <h2>PRODUCTOS REGISTRADOS</h2>
    <div class="tabla_registros">
        <table>
            <thead>
                <tr>
                <th></th>
                    <th>ID_producto</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Precio</th>
                    <th>Seccion</th>
                    <th>Solicitado</th>
                    <th>Descripcion</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
    <tr>
    <td><img src="<?php echo $row['img']; ?>" alt="Imagen del producto"></td>
        <td><?= $row['id'] ?></td>
        <td><?= $row['nombre'] ?></td>
        <td><?= $row['tipo'] ?></td>
        <td><?= $row['precio'] ?></td>
        <td><?= $row['seccion'] ?></td>
        <td><?= $row['solicitado'] ?></td>
        <td><?= $row['descripcion'] ?></td>
        <td><a href="editar_crud.php?id=<?= $row['id'] ?>" class="editar">Editar <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
</td>
        <td><a href="eliminar_crud.php?id=<?= $row['id'] ?>" class="eliminar">Eliminar <i
                    class="fa-solid fa-trash" style="color: #ffffff;"></i></a></td>
    </tr>
<?php endwhile; ?>
            </tbody>
        </table>


        





      
         
    </div>
</div>
    </div>
    <script>
    // Esta función se ejecutará después de que la página haya cargado completamente
    window.onload = function() {
        // Obtener la posición vertical de la tabla
        var tableOffset = document.querySelector('.tabla_registros table').offsetTop;

        // Establecer la posición del scroll para que la tabla sea visible
        window.scrollTo(0, tableOffset);
    };
</script>
<script src="popup.js"></script> <script src="js_crud.js"></script> 

</body>
</html>
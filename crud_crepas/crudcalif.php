<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);

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
    <div class="formulario_agregar">
        <h1>AGREGA NUEVOS PRODUCTOS</h1>
        <div class="formulario_div" id="grupo_usuario">
        <form action="registrar.php" method="POST" enctype="multipart/form-data" class="formulario" id="formulario">

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
    </div>>
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
        <td><a href="editar.php?id=<?= $row['id'] ?>" class="editar">Editar <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
</td>
        <td><a href="eliminar.php?id=<?= $row['id'] ?>" class="eliminar">Eliminar <i
                    class="fa-solid fa-trash" style="color: #ffffff;"></i></a></td>
    </tr>
<?php endwhile; ?>
            </tbody>
        </table>
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
<script>
    const expresiones = {
        id_producto: /^[A-Z\d\-]{2,11}$/,
        nombre: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
        tipo: /^.{4,20}$/,
        precio: /^\d{2,4}$/,
        descripcion: /^.{0,50}$/,
    }

    const formulario = document.getElementById('formulario');
    const inputs = document.querySelectorAll('#formulario input');
    const selects = document.querySelectorAll("#formulario select");

    const campos = {
        id_producto: false,
        nombre: false,
        tipo: false,
        precio: false,
        seccion: false,
        solicitud: false,
        descripcion: false
    }

    const validarFormulario = (e) => {
        console.log(e.target.name);
        switch (e.target.name) {
            case "id_producto":
                validarCampo(expresiones.id_producto, e.target, 'id_producto');
                break;

            case "nombre":
                validarCampo(expresiones.nombre, e.target, 'nombre');
                break;

            case "tipo":
                validarCampo(expresiones.tipo, e.target, 'tipo');
                break;

            case "precio":
                validarCampo(expresiones.precio, e.target, 'precio');
                break;

            case "seccion":
                validar_seccion();
                break;

            case "solicitud":
                validar_solicitud();
                break;

            case "descripcion":
                validarCampo(expresiones.descripcion, e.target, 'descripcion');
                break;
        }
    }

    const validarCampo = (expresion, input, campo) => {
        if (expresion.test(input.value)) {
            document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-incorecto');
            document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-correcto');

            document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-xmark');
            document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-check');
            document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.remove('formulario_input_error-activo');

            campos[campo] = true;
        } else {
            document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-incorecto');
            document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-correcto');

            document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-xmark');
            document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-check');

            document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.add('formulario_input_error-activo');
            campos[campo] = false;
        }
    }

   
    const validar_seccion = () => {
        var seccion = document.getElementById("seccion");
        seccion.addEventListener("change", function () {
            var genero2 = seccion.value;
            console.log(genero2);

            if (genero2 === "1" || genero2 === "2" || genero2 === "3") {
                document.getElementById(`grupo_seccion`).classList.remove('formulario_grupo-incorecto');
                document.getElementById(`grupo_seccion`).classList.add('formulario_grupo-correcto');
                    

                document.querySelector(`#grupo_seccion i`).classList.remove('fa-circle-xmark');
            document.querySelector(`#grupo_seccion i`).classList.add('fa-circle-check');


                campos['seccion'] = true;
            } else {
                document.getElementById(`grupo_seccion`).classList.add('formulario_grupo-incorecto');
                document.getElementById(`grupo_seccion`).classList.remove('formulario_grupo-correcto');
                document.querySelector(`#grupo_seccion i`).classList.add('fa-circle-xmark');
            document.querySelector(`#grupo_seccion i`).classList.remove('fa-circle-check');
                campos['seccion'] = false;
            }
        });
    }

    const validar_solicitud = () => {
        var solicitud = document.getElementById("solicitud");
        solicitud.addEventListener("click", function () {
            var genero2 = solicitud.value;
            console.log(genero2);

            if (genero2 === "Alto+" || genero2 === "Alto" || genero2 === "Medio" || genero2 === "Bajo") {
                document.getElementById(`grupo_solicitud`).classList.remove('formulario_grupo-incorecto');
                document.getElementById(`grupo_solicitud`).classList.add('formulario_grupo-correcto');
                document.querySelector(`#grupo_solicitud i`).classList.remove('fa-circle-xmark');
            document.querySelector(`#grupo_solicitud i`).classList.add('fa-circle-check');
                campos['solicitud'] = true;
            } else {
                document.getElementById(`grupo_solicitud`).classList.add('formulario_grupo-incorecto');
                document.getElementById(`grupo_solicitud`).classList.remove('formulario_grupo-correcto');
                document.querySelector(`#grupo_solicitud i`).classList.add('fa-circle-xmark');
            document.querySelector(`#grupo_solicitud i`).classList.remove('fa-circle-check');
                campos['solicitud'] = false;
            }
        });
    }

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    });

    selects.forEach((select) => {
        select.addEventListener('click', validarFormulario);
    });

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        if (campos.id_producto && campos.nombre && campos.tipo && campos.precio && campos.seccion && campos.solicitud && campos.descripcion) {
            document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');
            setTimeout(() => {
                document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');
            }, 3000);
            formulario.submit();
        } else {
            document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
            setTimeout(() => {
                document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
            }, 3000);
        }
    });
</script>




</body>
</html>
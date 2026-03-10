<?php 
    include("conexion.php");
    $con = conectar();

    $id = $_GET['id'];

    $sql = "SELECT * FROM productos WHERE id='$id'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Editar PRODUCTOS</title>
    <script src="https://kit.fontawesome.com/bb09f1a156.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="formulario_agregar">
        <h1>EDITAR PRODUCTO</h1>
        <div class="formulario_div" id="grupo_id_producto">
            <form action="edit.php" method="POST" enctype="multipart/form-data" class="formulario" id="formulario">
                <input type="text" name="id" value="<?= $row['id'] ?>" readonly>

                <!-- NOMBRE -->
                <div class="formulario_div" id="grupo_nombre">
                    <div class="formulario_grupo-input" id="nombre-grupo">
                        <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder=" "
                            value="<?= $row['nombre'] ?>">
                        <label for="nombre" class="form_label">NOMBRE:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">El nombre tiene que tener de 4 a 20 dígitos, solo usa letras,
                        espacios y acentos</p>
                </div>

                <!-- TIPO -->
                <div class="formulario_div" id="grupo_tipo">
                    <div class="formulario_grupo-input" id="tipo-grupo">
                        <input type="text" class="formulario_input" name="tipo" id="tipo" placeholder=" "
                            value="<?= $row['tipo'] ?>">
                        <label for="tipo" class="form_label">TIPO:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">El Tipo tiene que tener de 4 a 20 letras</p>
                </div>

                <!-- PRECIO -->
                <div class="formulario_div" id="grupo_precio">
                    <div class="formulario_grupo-input" id="precio-grupo">
                        <input type="text" class="formulario_input" name="precio" id="precio" placeholder=" "
                            value="<?= $row['precio'] ?>">
                        <label for="precio" class="form_label">PRECIO: $</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">El Precio solo puede contener números y el máximo son 4
                        dígitos.</p>
                </div>

                <!-- SECCION -->
                <div class="formulario_div" id="grupo_seccion">
                    <div class="formulario_grupo-input" id="seccion-grupo">
                        <select name="seccion" class="formulario_input" id="seccion">
                            <option value="" selected disabled>Selecciona</option>
                            <option value="1" <?= ($row['seccion'] == '1') ? 'selected' : '' ?>>SECCION 1</option>
                            <option value="2" <?= ($row['seccion'] == '2') ? 'selected' : '' ?>>SECCION 2</option>
                            <option value="3" <?= ($row['seccion'] == '3') ? 'selected' : '' ?>>SECCION 3</option>
                        </select>
                        <label for="seccion" class="form_label">SECCION:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">Seleccione una opción (la que desee)</p>
                </div>

                <!-- SOLICITUD -->
                <div class="formulario_div" id="grupo_solicitud">
                    <div class="formulario_grupo-input" id="solicitud-grupo">
                        <select name="solicitado" class="formulario_input" id="solicitud">
                            <option value="" selected disabled>Selecciona el NIVEL DE SOLICITUD</option>
                            <option value="Alto+" <?= ($row['solicitado'] == 'Alto+') ? 'selected' : '' ?>>Muy Alto
                            </option>
                            <option value="Alto" <?= ($row['solicitado'] == 'Alto') ? 'selected' : '' ?>>Alto</option>
                            <option value="Medio" <?= ($row['solicitado'] == 'Medio') ? 'selected' : '' ?>>Medio
                            </option>
                            <option value="Bajo" <?= ($row['solicitado'] == 'Bajo') ? 'selected' : '' ?>>Bajo</option>
                        </select>
                        <label for="solicitud" class="form_label">SOLICITUD:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">Seleccione una opción (la que desee)</p>
                </div>

                <!-- DESCRIPCION -->
                <div class="formulario_div" id="grupo_descripcion">
                    <div class="formulario_grupo-input" id="descripcion-grupo">
                        <input type="text" name="desc" class="formulario_input" id="descripcion" placeholder=" "
                            value="<?= $row['descripcion'] ?>">
                        <label for="descripcion" class="form_label">DESCRIPCION:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">La Descripción puede tener hasta 50 dígitos</p>
                </div>

                <!-- Campo de carga de archivos para la imagen -->
                <div class="field image">
                    <label>Imagen actual:</label>
                    <img src="<?php echo $row['img']; ?>" alt="Imagen actual del producto">
                    <br>
                    <label>Subir nueva imagen:</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg">
                </div>

                <div class="formulario_mensaje" id="formulario_mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario
                        correctamente. </p>
                </div>

                <div class="formulario_grupo formulario_grupo-btn-enviar">
                    <input type="submit" class="formulario_btn" value="Actualizar">
                </div>
            </form>
        </div>
    </div>

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
                campos['seccion'] = true;
            } else {
                document.getElementById(`grupo_seccion`).classList.add('formulario_grupo-incorecto');
                document.getElementById(`grupo_seccion`).classList.remove('formulario_grupo-correcto');
                campos['seccion'] = false;
            }
        });
    }

    const validar_solicitud = () => {
        var solicitud = document.getElementById("solicitud");
        solicitud.addEventListener("change", function () {
            var genero2 = solicitud.value;
            console.log(genero2);

            if (genero2 === "Alto+" || genero2 === "Alto" || genero2 === "Medio" || genero2 === "Bajo") {
                document.getElementById(`grupo_solicitud`).classList.remove('formulario_grupo-incorecto');
                document.getElementById(`grupo_solicitud`).classList.add('formulario_grupo-correcto');
                campos['solicitud'] = true;
            } else {
                document.getElementById(`grupo_solicitud`).classList.add('formulario_grupo-incorecto');
                document.getElementById(`grupo_solicitud`).classList.remove('formulario_grupo-correcto');
                campos['solicitud'] = false;
            }
        });
    }

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    });

    selects.forEach((select) => {
        select.addEventListener('change', validarFormulario);
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

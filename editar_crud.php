<?php 
include("conexion_crud.php");
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
        <h1 id="editar">EDITAR PRODUCTO</h1>
        <div class="formulario_div" id="grupo_usuario">
        <form action="edit_crud.php" method="POST" enctype="multipart/form-data" class="formulario" id="formulario">
                <!-- ID PRODUCTO -->
                <div class="formulario_div" id="grupo_id_producto">
                    <div class="formulario_grupo-input" id="id_producto-grupo">
                        <input type="text" class="formulario_input" name="id_producto" id="id_producto" placeholder="" value="<?= $row['id'] ?>" readonly>
                        <label for="id_producto" class="form_label">ID del PRODUCTO:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">El Id-Producto solo puede contener números, mayúsculas, (-), máximo son 11 dígitos</p>
                </div>

                <!-- NOMBRE -->
                <div class="formulario_div" id="grupo_nombre">
                    <div class="formulario_grupo-input" id="nombre-grupo">
                        <input type="text" class="formulario_input" name="nombre" id="nombre" placeholder=" " value="<?= $row['nombre'] ?>">
                        <label for="nombre" class="form_label">NOMBRE:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">El nombre tiene que tener de 4 a 20 dígitos, solo usa letras, espacios y acentos</p>
                </div>

                <!-- TIPO -->
                <div class="formulario_div" id="grupo_tipo">
                    <div class="formulario_grupo-input" id="tipo-grupo">
                        <input type="text" class="formulario_input" name="tipo" id="tipo" placeholder=" " value="<?= $row['tipo'] ?>">
                        <label for="tipo" class="form_label">TIPO:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">El Tipo tiene que tener de 4 a 20 letras</p>
                </div>

                <!-- PRECIO -->
                <div class="formulario_div" id="grupo_precio">
                    <div class="formulario_grupo-input" id="precio-grupo">
                        <input type="text" class="formulario_input" name="precio" id="precio" placeholder=" " value="<?= $row['precio'] ?>">
                        <label for="precio" class="form_label">PRECIO: $</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">El Precio solo puede contener números y el máximo son 4 dígitos.</p>
                </div>

                <!-- SECCION -->
                <div class="formulario_div" id="grupo_seccion">
                    <div class="formulario_grupo-input" id="genero-seccion">
                        <select name="seccion" id="seccion" class="formulario_input">
                          
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
                    <div class="formulario_grupo-input" id="solicitud-seccion">
                        <select name="solicitud" id="solicitud" class="formulario_input">
                            <option value="Alto+" <?= ($row['solicitado'] == 'Alto+') ? 'selected' : '' ?>>MUY ALTO</option>
                            <option value="Alto"<?= ($row['solicitado'] == 'Alto') ? 'selected' : '' ?>>ALTO</option>
                            <option value="Medio"<?= ($row['solicitado'] == 'Medio') ? 'selected' : '' ?>>MEDIO</option>
                            <option value="Bajo" <?= ($row['solicitado'] == 'Bajo') ? 'selected' : '' ?>>BAJO</option>
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
                        <input type="text" class="formulario_input" name="descripcion" id="descripcion" placeholder=" " value="<?= $row['descripcion'] ?>">
                        <label for="descripcion" class="form_label">DESCRIPCION:</label>
                        <span class="form_line"></span>
                        <i class="formulario_validacion_estado fa-solid fa-circle-xmark"></i>
                    </div>
                    <p class="formulario_input_error">La Descripcion puede tener hasta 50 dígitos</p>
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
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                </div>

                <div class="formulario_grupo formulario_grupo-btn-enviar">
                    <input type="submit" class="formulario_btn" value="Actualizar">
                </div>
            </form>
        </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
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
    const validarCampo = (expresion, input, campo) => {
    const grupoCampo = document.getElementById(`grupo_${campo}`);
    if (grupoCampo) {
        const iconoCampo = grupoCampo.querySelector('i');
        const errorCampo = grupoCampo.querySelector('.formulario_input_error');

        if (iconoCampo && errorCampo) {
            console.log(`Campo: ${campo}, iconoCampo: ${iconoCampo}, errorCampo: ${errorCampo}`);

            if (expresion.test(input.value) || input.value.trim() === "") {
                grupoCampo.classList.remove('formulario_grupo-incorrecto');
                grupoCampo.classList.add('formulario_grupo-correcto');
                if (iconoCampo.classList) {
                    iconoCampo.classList.remove('fa-circle-xmark');
                    iconoCampo.classList.add('fa-circle-check');
                }
                if (errorCampo.classList) {
                    errorCampo.classList.remove('formulario_input_error-activo');
                    iconoCampo.classList.add('fa-circle-check');
                }
                campos[campo] = true;
            } else {
                grupoCampo.classList.add('formulario_grupo-incorrecto');
                grupoCampo.classList.remove('formulario_grupo-correcto');
                if (iconoCampo.classList) {
                    iconoCampo.classList.add('fa-circle-xmark');
                    iconoCampo.classList.remove('fa-circle-check');
                }
                if (errorCampo.classList) {
                    errorCampo.classList.add('formulario_input_error-activo');
                    iconoCampo.classList.remove('fa-circle-xmark');
                }
                campos[campo] = false;
            }
        } else {
            console.error(`Error: iconoCampo o errorCampo no definidos. Campo: ${campo}`);
        }
    } else {
        console.error(`Error: grupoCampo no definido. Campo: ${campo}`);
    }
}
    const validarFormulario = () => {
        validarCampo(expresiones.id_producto, document.getElementById('id_producto'), 'id_producto');
validarCampo(expresiones.nombre, document.getElementById('nombre'), 'nombre');
validarCampo(expresiones.tipo, document.getElementById('tipo'), 'tipo');
validarCampo(expresiones.precio, document.getElementById('precio'), 'precio');

const seccion = document.getElementById('seccion');
validarCampo(/^.{1,}$/, seccion, 'seccion');

const solicitud = document.getElementById('solicitud');
validarCampo(/^.{1,}$/, solicitud, 'solicitud');

validarCampo(expresiones.descripcion, document.getElementById('descripcion'), 'descripcion');
    }

    validarFormulario(); // Validar al cargar la página

inputs.forEach((input) => {
    input.addEventListener('keyup', (e) => {
        validarCampo(expresiones[e.target.name], e.target, e.target.name);
        validarFormulario();});
    input.addEventListener('blur', validarFormulario);
});

selects.forEach((select) => {
    select.addEventListener('change', (e) => {
        validarCampo(/^.{1,}$/, e.target, e.target.name);
        validarFormulario();
    });
});

formulario.addEventListener('submit', (e) => {
        e.preventDefault();

        const mensajeExito = document.getElementById('formulario_mensaje-exito');
        const mensajeError = document.getElementById('formulario_mensaje');

        if (campos.nombre && campos.tipo && campos.precio && campos.seccion && campos.solicitud && campos.descripcion) {
            if (mensajeExito) {
                mensajeExito.classList.add('formulario_mensaje-exito-activo');
                setTimeout(() => {
                    mensajeExito.classList.remove('formulario_mensaje-exito-activo');
                }, 3000);
            }
            formulario.submit();
        } else {
            if (mensajeError) {
                mensajeError.classList.add('formulario_mensaje-activo');
                setTimeout(() => {
                    mensajeError.classList.remove('formulario_mensaje-activo');
                }, 3000);
            }
        }
    });
});
</script>

</body>

</html>
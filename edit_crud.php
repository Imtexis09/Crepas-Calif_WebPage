<?php
include("conexion_crud.php");
$con = conectar();

$id = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$seccion = $_POST['seccion'];
$solicitado = $_POST['solicitud'];
$descip = $_POST['descripcion'];

// Manejo de la carga de archivos
if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $img_temp = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];

    // Mueve el archivo temporal al directorio del proyecto
    $img_dest = "C:/xampp/htdocs/PAGINA CREPAS2/php/images/" . $img_name;
    move_uploaded_file($img_temp, $img_dest);

    // Almacena la ruta correcta en la base de datos
    $img_dest_relative = "php/images/" . $img_name;

    // Actualiza los datos en la base de datos, incluida la ruta de la imagen
    $sql = "UPDATE productos 
            SET id='$id',nombre='$nombre', tipo='$tipo', precio='$precio', 
                seccion='$seccion', solicitado='$solicitado', descripcion='$descip', img='$img_dest_relative' 
            WHERE id='$id'";
} else {
    // Si no se proporciona una nueva imagen, actualiza los demás datos sin cambiar la imagen
    $sql = "UPDATE productos 
            SET id='$id', nombre='$nombre', tipo='$tipo', precio='$precio', 
                seccion='$seccion', solicitado='$solicitado', descripcion='$descip'
            WHERE id='$id'";
}

$query = mysqli_query($con, $sql);

if ($query) {
    // Redirige a la página principal
    header("Location: crudcalif.php");
    exit();
} else {
    // Manejar el error de la base de datos si es necesario
    echo "Error en la consulta: " . mysqli_error($con);
}
?>

<?php
include("conexion.php");
$con = conectar();

$id = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$precio = $_POST['precio'];
$seccion = $_POST['seccion'];
$solicitado = $_POST['solicitud'];
$desc = $_POST['descripcion'];

if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
    $img_temp = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];

  
    $img_dest = "C:/xampp/htdocs/crud_crepas/php/images/" . $img_name;
    move_uploaded_file($img_temp, $img_dest);

   
    $img_dest_relative = "php/images/" . $img_name;

    var_dump($_POST);
    $sql = "INSERT INTO productos (id, nombre, tipo, precio, seccion, solicitado, descripcion, img) 
            VALUES ('$id', '$nombre', '$tipo', '$precio', '$seccion', '$solicitado', '$desc', '$img_dest_relative')";

    $query = mysqli_query($con, $sql);
    
    if ($query) {
        
        header("Location: crud.php");
        exit();  
    } else {
       
    }
} else {
    
}

?>
<?php
require "conexion.php";
   
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$q = "SELECT COUNT(*) as contar from usuarios where Usuario = '$usuario' and Pasword = '$clave'";
$consulta  = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);
if($array['contar']>0){
    $_SESSION['username'] = $usuario;
    echo "<script> alert ('Hola ya pasasate') </script>";
header("Location: paginaprincipal.php");
}
else{
    echo "datos incorrectos";
}

?>




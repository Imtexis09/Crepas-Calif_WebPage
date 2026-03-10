<?php

include("conexion_crud.php");
$con = conectar();

$id=$_GET["id"];

$sql="DELETE FROM productos WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: crudcalif.php");
}else{

}

?>
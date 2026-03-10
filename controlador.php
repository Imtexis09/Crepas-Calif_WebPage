<?php
include 'conexion.php';

if(!empty($_POST['btn'])){


if((!empty($_POST['usuario'] )) and (!empty($_POST['clave']  ))){


    session_start();
$usuario = $_POST['usuario'] ;
$contra = $_POST['clave'];


$sql =$conexion -> query ("select * from usuarios where Usuario  = '$usuario' and Pasword = '$contra'");

if($datos = $sql->fetch_object()){
    $_SESSION["id"] = $datos ->ID;
    $_SESSION["nombre"] = $datos ->Nombre;
    $_SESSION["apellidos"] = $datos ->Apellidos;
    $_SESSION["direccion"]= $datos -> Direccion;
    $_SESSION["telefono"]= $datos -> Telefono;
    $_SESSION["correo"]= $datos -> Correo;
  
echo'<script>
Swal.fire({
    position: "top-center",
icon:"success",
title: "La sesion fue iniciada exitosamente",
showConfirmButton: false,
timer:3000
});

setTimeout(()=>{
    window.location.href=("paginaprincipal.php");
  },3200);


</script>';


}
else{

    echo'<script>
  
    
    document.getElementById("resultado_sesion").style.display = "block";
    setTimeout(()=>{
    
      document.getElementById("resultado_sesion").style.display = "none";
    
    },3000);

    </script>';
    


echo ("<i class='fa-solid fa-triangle-exclamation'></i><div class='alert'> Acceso denegado / Usuario no Registrado </div>");
}
}
else{
    echo 'Campos vacios';
}


}


?>
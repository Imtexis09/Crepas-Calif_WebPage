<?php
include 'conexion2.php';

if(!empty($_POST['btn'])){


if((!empty($_POST['usuario'] )) and (!empty($_POST['clave']  ))){


    session_start();
$usuario = $_POST['usuario'] ;
$contra = $_POST['clave'];

$sql =$conexion -> query ("select * from admin where Usuario  = '$usuario' and Contra = '$contra'");

if($datos = $sql->fetch_object()){
    $_SESSION["ID"] = $datos ->ID;
    $_SESSION["usuario"] = $datos ->Usuario;

    
  
echo'<script>
Swal.fire({
    position: "top-center",
icon:"success",
title: "La sesion fue iniciada exitosamente",
showConfirmButton: false,
timer:3000
});

setTimeout(()=>{
    window.location.href=("crudcalif.php");
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
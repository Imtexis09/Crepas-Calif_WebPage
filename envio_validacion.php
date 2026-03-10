<?php

include ('conexion.php');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$correo_contacto = $_POST['correo_contacto'];
$telefono_contacto = $_POST['telefono_contacto'];
$fecha_contacto = $_POST['fecha_contacto'];


$dudas_envio = $_POST['dudas_envio'];
$otra_duda = $_POST['otra_duda'];
$fecha_evento = $_POST['fecha_evento'];
$evento = $_POST['evento'];
$ajuste = $_POST['ajuste'];
$platillos = $_POST['platillo'];


$insertar = "INSERT INTO contacto(Nombre,Correo,Telefono,Mensaje,telefono_contacto,fecha_contacto,correo_contacto,dudas_envio,otra_duda,fecha_evento,evento,ajuste,platillos) VALUES ('$nombre','$correo','$telefono','$mensaje','$telefono_contacto','$fecha_contacto','$correo_contacto','$dudas_envio','$otra_duda','$fecha_evento','$evento','$ajuste','$platillos')";


$resultado=mysqli_query($conexion,$insertar);
if(!$resultado){
echo "ERROR AL REGISTRARSE";
}
else{
    echo '<script>  Swal.fire({
        position: "top-center",
    icon:"success",
    title: "Su mensaje se envio correctamente, pronto recibira respuesta",
    showConfirmButton: false,
    timer:5000
    });

   
    formulario.reset();
    
document.querySelectorAll(".formulario_grupo-correcto").forEach((icono)=> {
    icono.classList.remove("formulario_grupo-correcto");
    });


    
</script>';
   
}
mysqli_close($conexion);
?>
<?php

include ('conexion.php');

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$clave = $_POST['password'];
$telefono = $_POST['telefono'];
$edad = $_POST['edad'];
$direccion= $_POST['direccion'];
$genero = $_POST ['genero'];


$insertar = "INSERT INTO  usuarios(Nombre,Apellidos,Correo,Edad,Telefono,Usuario,Pasword,Direccion,Genero) VALUES ('$nombre','$apellidos','$correo','$edad','$telefono','$usuario','$clave','$direccion','$genero')";

$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE Usuario = '$usuario'");
$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE Correo = '$correo'");
$verificar_telefono = mysqli_query($conexion,"SELECT * FROM usuarios WHERE Telefono = '$telefono'");



if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script> Swal.fire({
        position: "top-center",
    icon:"error",
    title: "El usuario proporcionado ya existe, intenta con otro",
    showConfirmButton: false,
    timer:5000
    }); 
    </script>';
exit;
}



if(mysqli_num_rows($verificar_correo)>0){
    echo '<script> Swal.fire({
        position: "top-center",
    icon:"error",
    title: "El correo proporcionado ya existe, intenta con otro",
    showConfirmButton: false,
    timer:5000
    }); 
    </script>';
exit;
}


if(mysqli_num_rows($verificar_telefono)>0){
    echo '<script> Swal.fire({
        position: "top-center",
    icon:"error",
    title: "El telefono proporcionado ya existe,intenta con otro",
    showConfirmButton: false,
    timer:5000
    }); 
    </script>';
exit;
}

$resultado =mysqli_query($conexion,$insertar);
if(!$resultado){
echo "ERROR AL REGISTRARSE";
}
else{
    echo '<script>  Swal.fire({
        position: "top-center",
    icon:"success",
    title: "La cuenta se registro exitosamente",
    showConfirmButton: false,
    timer:5000
    });

    $("#nombre").val("");
    $("#apellidos").val("");
    $("#correo").val("");
    $("#edad").val("");
    $("#telefono").val("");
    $("#usuario").val("");
    $("#password").val("");
    $("#password2").val("");


    formulario.reset();
    
document.querySelectorAll(".formulario_grupo-correcto").forEach((icono)=> {
    icono.classList.remove("formulario_grupo-correcto");
    });


    
</script>';
   
}
mysqli_close($conexion);
?>
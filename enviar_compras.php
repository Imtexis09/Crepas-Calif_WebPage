<?php

include ('conexion.php');

$nombre_usuario = $_POST['nombre_usuario'];
$direccion= $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$fecha_actual = $_POST['fecha_actual'];
$no_factura = $_POST['no_factura'];
$idcliente = $_POST['idcliente'];
$condiciones_pago = $_POST['condiciones_pago'];
$fecha_ven = $_POST['fecha_ven'];
$cantidad = $_POST['cantidad'];
$productos = $_POST['productos'];
$subtotal = $_POST['subtotal'];
$iva = $_POST['iva'];
$total_enviar = $_POST['total_enviar'];



$insertar = "INSERT INTO factura(ID_factura,Fecha,ID_cliente,Nom_cliente,Direccion,Telefono,Correo,Cond_pago,Fecha_ven,Productos,Cant_total,Sub_total,IVA,total) VALUES ('$no_factura','$fecha_actual','$idcliente','$nombre_usuario','$direccion','$telefono','$correo','$condiciones_pago','$fecha_ven','$productos','$cantidad','$subtotal','$iva','$total_enviar')";

$verificar_factura = mysqli_query($conexion,"SELECT * FROM factura WHERE ID_factura = '$no_factura'");


if(mysqli_num_rows($verificar_factura)>0){
    echo '<script> Swal.fire({
        position: "top-center",
    icon:"error",
    title: "El codigo de factura proporcionado ya existe, intenta con otro",
    showConfirmButton: false,
    timer:5000
    }); 
    </script>';
exit;
}

$resultado =mysqli_query($conexion,$insertar);
if(!$resultado){
echo "ERROR AL ENVIAR LA COMPRA";
}
else{
    echo '<script>  
  

    

    formulario.reset();
    localStorage.removeItem("datos_cargar");
    localStorage.removeItem("productos");
    localStorage.removeItem("codigo_factura");
    localStorage.removeItem("forma_pago");
    


    
        Swal.fire({
            position: "top-center",
        icon:"success",
        title: "Compra realizada exitosamente, puedes seguir navegando en la pagina",
        showConfirmButton: false,
        timer:3000
        });
      





  setTimeout(()=>{
   window.location.href=("menup.php");
 },3400);

    
</script>';
   
}
mysqli_close($conexion);
?>
//ocupando jquery para estos datos

const boton_enviar = document.getElementById("finalizar_compra");
    const formulario = document.getElementById('formulario');

    const selector_value = document.getElementById("pago");

    boton_enviar.addEventListener("click",(e)=>{
        e.preventDefault();
    

        if(selector_value.value!=""){
            enviardatos();
        }
        else{



            
            document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
            setTimeout(()=>{
                document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
            
            
            },3000);


        }
     
    });
    
    
    function enviardatos(){
        const formulario = document.getElementById('formulario');
    
        //ENVIAR DATOS
        nombre_usuario=$('#nombre_usuario').val();
    direccion=$('#direccion').val();
        telefono=$('#telefono').val();
        correo=$('#email_usuario').val();
        fecha_actual=$('#fecha_actual_usuario').val();
        no_factura=$('#factura').val();
        idcliente=$('#idcliente').val();
    condiciones_pago=$('#condiciones_pago').val();
    fecha_ven=$('#fecha_vencimiento').val();
    cantidad=$('#cantidad').val();
    productos=$('#productos').val();
    subtotal=$('#subtotal').val();
    iva=$('#IVA').val();
    total_enviar=$('#total_enviar').val();
    
    
    $.ajax({
        url:'enviar_compras.php',
        type:'post',
        data:{nombre_usuario:nombre_usuario,direccion:direccion,telefono:telefono,correo:correo,fecha_actual:fecha_actual,no_factura:no_factura,idcliente:idcliente,condiciones_pago:condiciones_pago,fecha_ven:fecha_ven,cantidad:cantidad,productos:productos,subtotal:subtotal,iva:iva, total_enviar:total_enviar},
        success:function(respuesta){
      
            $('#resultado').html(respuesta);
            boton = document.getElementById('boton1');
                boton.style.display = '';
    
          
        }
    });}





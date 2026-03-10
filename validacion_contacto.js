const expresiones = {
	
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, //validar el correo
	telefono: /^\d{10,10}$/, // 10 numeros a fuerza
//en donde este se puede quitar xd nomas lo quitas y dejas hasta la s
mensaje:/^[A-Za-z0-9\s]{4,60}$/,
peticion: /^[A-Za-z0-9\s]{4,60}$/,
evento :  /^[A-Za-z0-9\s]{4,60}$/,
duda: /^[A-Za-z0-9\s]{4,60}$/,
ajuste: /^[A-Za-z0-9\s]{4,60}$/,
telefono_contacto: /^\d{10,10}$/,
correo_contacto:/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,


}

const formulario = document.getElementById('formulario');

const inputs= document.querySelectorAll('#formulario input');

const selects = document.querySelectorAll("#formulario select");

const platillos = document.querySelectorAll("#formulario input .check");

const campos = {
  
    nombre:false,
    correo:false,
    telefono:false,

    direccion : false,
mensaje: false,
    asunto:false,
    peticion:false,
    duda:false,
    telefono_contacto:false,
    correo_contacto:false,
    fecha_contacto:false,

    fecha_evento:false,
    evento:false,
    productos:false,
    ajuste:false,

contacto:false,




}



const validarFormulario = (e) => {
console.log(e.target.name);
switch(e.target.name){
    
    //parte de arriba del contacto
    case"nombre":
    validarCampo(expresiones.nombre,e.target,'nombre');
    break;

   case"correo":
validarCampo(expresiones.correo,e.target,'correo');
    break;
    
    case"telefono":
    validarCampo(expresiones.telefono,e.target,'telefono');
    break;

    case"mensaje":

    validarCampo(expresiones.mensaje,e.target,'mensaje');
    break;

//elegir el select del tipo de evento

case"asunto":
validar_seleccion(); //VALIDACION APARTE
    break;

    //caso numero 1 (orden del select)


    case"peticion":
    validarCampo(expresiones.peticion,e.target,'peticion');
    break;

    //caso numero 2(orden del select)


    case"fecha_evento"://VALIDACION APARTE
   validacion_fecha();
    break;


    case"evento":
    validarCampo(expresiones.evento,e.target,'evento');

    break;

    case "productos": //VALIDACION APARTE   
//productos a elegir de categoria
validar_radios_productos();
break;


case"ajuste":
validarCampo(expresiones.ajuste,e.target,'ajuste');
break;

//opcion 3 del orden del select



case"duda":
validarCampo(expresiones.duda,e.target,'duda');
break;


//como desea ser contactado

case "seleccion"://VALIDACION APARTE
    //elegir forma de contacto
        validar_radios_contacto();
    break;



//opcion del telefono

case"telefono_contacto":
    validarCampo(expresiones.telefono_contacto,e.target,'telefono_contacto');
    break;

    //opcion del correo

    case"correo_contacto":
    validarCampo(expresiones.correo_contacto,e.target,'correo_contacto');
    break;

    //fecha de este mismo
    case"fecha": //VALIDACION_APARTE
validacion_fecha2();
    break;
}
}


//validar los campos generales con input text
const validarCampo = (expresion,input,campo) => {

    if(expresion.test(input.value)){
    
        document.getElementById(`grupo_${campo}`
        ).classList.remove('formulario_grupo-incorecto');   
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-correcto');   
    
    document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-xmark');
    document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-check');
    document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.remove('formulario_input_error-activo');
    
campos[campo] = true;


    }else{
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-incorecto');  
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-correcto');   

        document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-xmark');
    document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-check');
    
    document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.add('formulario_input_error-activo');
    campos[campo] = false;    
}





}


//validar el primer select
const  validar_seleccion = () =>{
let asunto = document.getElementById("asunto").value;

if(asunto===""){



    document.querySelector(`#grupo_asunto i`).classList.add('fa-circle-xmark');
document.querySelector(`#grupo_asunto i`).classList.remove('fa-circle-check');

document.querySelector(`#grupo_asunto .formulario_input_error`).classList.add('formulario_input_error-activo');
campos["asunto"] = false; 

}
else{ 

    document.getElementById(`grupo_asunto`
    ).classList.remove('formulario_grupo-incorecto');   
    document.getElementById(`grupo_asunto`).classList.add('formulario_grupo-correcto');   

document.querySelector(`#grupo_asunto i`).classList.remove('fa-circle-xmark');
document.querySelector(`#grupo_asunto i`).classList.add('fa-circle-check');
document.querySelector(`#grupo_asunto .formulario_input_error`).classList.remove('formulario_input_error-activo');

campos["asunto"] = true;

}

}



//validacion de la fecha


const  validacion_fecha = () =>{
    let fecha = document.getElementById("fecha_evento").value;
    
    if(fecha===""){
    
    
        document.getElementById(`grupo_fecha_evento`).classList.add('formulario_grupo-incorecto');  
        document.getElementById(`grupo_fecha_evento`).classList.remove('formulario_grupo-correcto');   
    
        document.querySelector(`#grupo_fecha_evento i`).classList.add('fa-circle-xmark');
    document.querySelector(`#grupo_fecha_evento i`).classList.remove('fa-circle-check');
    
    document.querySelector(`#grupo_fecha_evento .formulario_input_error`).classList.add('formulario_input_error-activo');
    campos["fecha_evento"] = false; 
    
    }
    else{ 
    
        document.getElementById(`grupo_fecha_evento`
        ).classList.remove('formulario_grupo-incorecto');   
        document.getElementById(`grupo_fecha_evento`).classList.add('formulario_grupo-correcto');   
    
    document.querySelector(`#grupo_fecha_evento i`).classList.remove('fa-circle-xmark');
    document.querySelector(`#grupo_fecha_evento i`).classList.add('fa-circle-check');
    document.querySelector(`#grupo_fecha_evento .formulario_input_error`).classList.remove('formulario_input_error-activo');
    
    campos["fecha_evento"] = true;
    
    }
    
    }

    //validar los checkbox de los productos
    const validar_radios_productos = () =>{
let creppas = document.getElementById("crepas");
let alitas = document.getElementById("alitas");
let frappes = document.getElementById("frappes");
let papas = document.getElementById("papas");
 if(creppas.checked === true || alitas.checked === true || frappes.checked ===true|| papas.checked===true){


    document.getElementById('mensaje_productos').classList.remove('mensaje_productos-activo');campos["productos"] = true;
    

    }
    else{ 
    
        document.getElementById('mensaje_productos').classList.add('mensaje_productos-activo');
    campos["productos"] = false; 
    }




    }


    //validar el select de la forma de contacto



    const  validar_radios_contacto = () =>{
        var tel = document.querySelector("#telefono_seleccion");
        var em = document.querySelector("#email_seleccion");
        if(tel.checked || em.checked){
        
        
            document.getElementById('mensaje_seleccion').classList.remove('mensaje_seleccion-activo');


        campos["contacto"] = true;


        
          
        
        }
        else{ 
        
            document.getElementById('mensaje_seleccion').classList.add('mensaje_seleccion-activo');
        campos["contacto"] = false;
        
        }
        
        }
    



//validar la fecha de la forma de contacto


const  validacion_fecha2 = () =>{
    let fecha = document.getElementById("fecha").value;
    
    console.log(fecha);
    if(fecha===""){
    
    
        document.getElementById(`grupo_fecha`).classList.add('formulario_grupo-incorecto');  
        document.getElementById(`grupo_fecha`).classList.remove('formulario_grupo-correcto');   
    
        document.querySelector(`#grupo_fecha i`).classList.add('fa-circle-xmark');
    document.querySelector(`#grupo_fecha i`).classList.remove('fa-circle-check');
    
    document.querySelector(`#grupo_fecha .formulario_input_error`).classList.add('formulario_input_error-activo');
    campos["fecha_contacto"] = false; 
    
    }
    else{ 
    
        document.getElementById(`grupo_fecha`
        ).classList.remove('formulario_grupo-incorecto');   
        document.getElementById(`grupo_fecha`).classList.add('formulario_grupo-correcto');   
    
    document.querySelector(`#grupo_fecha i`).classList.remove('fa-circle-xmark');
    document.querySelector(`#grupo_fecha i`).classList.add('fa-circle-check');
    document.querySelector(`#grupo_fecha .formulario_input_error`).classList.remove('formulario_input_error-activo');
    
    campos["fecha_contacto"] = true;
    
    }
    
    console.log(campos["fecha_contacto"]);
    }








//para validar los input
inputs.forEach( (input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
} );
//para validar los select
selects.forEach((select)=>{
 select.addEventListener('click', validarFormulario);
    
})
platillos.forEach((platillos)=>{
platillos.addEventListener("click",validarFormulario);
});




//subir el formulario
formulario.addEventListener('submit',(e) => {
e.preventDefault();

const terminos = document.getElementById('terminos');
//verificar cual forma de contacto esta abierta para evaluarla

const seleccion1 =document.querySelector("#telefono_seleccion");

const seleccion2 =document.querySelector("#email_seleccion");
let forma_telefono = false;
let forma_correo = false

if(seleccion1.checked){
console.log("esta abierto donde el telefono");
forma_telefono=true;
forma_correo=false;
}
else if(seleccion2.checked){
    console.log("esta abierto donde el correo");
    forma_telefono=false;
    forma_correo=true;
}

const selector = document.getElementById('asunto').value;
//aqui va a ver condiciones para ver si llena los datos, necesitas, tres validaciones y formas de envio, por los diferentes tipos de solicitudes, despues, se mete lo de la validacion de las formas de contacto dentro de ese mismo if

//caso1 si es que seleccion que tiene duda sobre los envios


//CASO1
if(selector==="dudas" && campos.nombre && campos.correo && campos.telefono && campos.mensaje && campos.peticion && campos.telefono_contacto && campos.fecha_contacto && forma_telefono==true){
    console.log('entropero no jalo al selector de dudas con telefono');


    enviardatos();
document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');

setTimeout(()=>{
    document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');


},3000);




}



//caso primero con correo



else if(selector==="dudas" && campos.nombre && campos.correo && campos.telefono && campos.mensaje && campos.peticion && campos.correo_contacto && forma_correo===true){
    console.log('entropero no jalo al selector de dudas con correo');


    enviardatos();
document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');

setTimeout(()=>{
    document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');
},3000);




}

//CASO 2 EL SELECTOR SE SELECCIONO EN EVENTO

else if(selector==="evento" && campos.nombre && campos.correo && campos.telefono && campos.mensaje && campos.fecha_evento && campos.evento && campos.productos && campos.ajuste && (campos.telefono_contacto && campos.fecha_contacto) && forma_telefono==true){
    console.log('entropero no jalo al selector de evento con telefono');

    enviardatos();
document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');

setTimeout(()=>{
    document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');

},3000);
}



else if(selector==="evento" && campos.nombre && campos.correo && campos.telefono && campos.mensaje && campos.fecha_evento && campos.evento && campos.productos && campos.ajuste && (campos.correo_contacto) && forma_correo==true){
    console.log('entropero no jalo al selector de evento con correo');

    enviardatos();
document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');

setTimeout(()=>{
    document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');

},3000);
}



//CASO 3 SELECCIONA OTRO EN EL SELECT DE OPCIONES
else if(selector==="otro"&& campos.nombre && campos.correo && campos.telefono && campos.mensaje && campos.duda && (campos.telefono_contacto && campos.fecha_contacto) && forma_telefono==true){
    console.log('entropero no jalo al selector de otro con telefono');

    enviardatos();
document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');

setTimeout(()=>{
    document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');


},3000);

}


else if(selector==="otro"&& campos.nombre && campos.correo && campos.telefono && campos.mensaje && campos.duda && (campos.correo_contacto) && forma_correo==true){
    console.log('entropero no jalo al selector de otro con correo');

    enviardatos();
document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');

setTimeout(()=>{
    document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');


},3000);

}



else if(selector===""){
    document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
    setTimeout(()=>{
        document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
    },3000);


}

else{
    
    document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
    setTimeout(()=>{
        document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
    },3000);
}





});









//ocupando jquery para estos datos
//aqui va a haber 3 tipos de envio
//para que los espacios se dejen en blanco o creo que ya los agarra asi xd bueno asi lo enviamos

function enviardatos(){
    const formulario = document.getElementById('formulario');

let frappes = document.getElementById("frappes");
let alitas = document.getElementById("alitas");
let creppas = document.getElementById("crepas");
let papas = document.getElementById("papas");

let contatenacion= "";

if(frappes.checked){
contatenacion = contatenacion + "Frappes "
}
if(alitas.checked){
    contatenacion = contatenacion + "Alitas "
}
if(creppas.checked){
    contatenacion = contatenacion + "Creppas "
}
if(papas.checked){
    contatenacion = contatenacion + "Papas "
}
let juntar = document.getElementById("junto");

juntar.value = contatenacion;


    //valores de la parte principal

    nombre=$('#nombre').val();
correo=$('#correo').val();
telefono=$('#telefono').val();
mensaje=$('#mensaje').val();

//forma de contacto XD
telefono_contacto = $('#telefono_contacto').val();
fecha_contacto = $('#fecha').val();
correo_contacto = $('#correo_contacto').val();

//opcion 1 de la duda
dudas_envio = $('#peticion').val();

//opcion 3 de otro
otra_duda = $('#duda').val();

//opcion 2 del evento

fecha_evento = $('#fecha_evento').val();
evento = $('#evento').val();
ajuste = $('#ajuste').val();
platillo = contatenacion;




$.ajax({
    url:'envio_validacion.php',
    type:'post',
    data:{nombre:nombre,correo:correo,telefono:telefono,mensaje:mensaje, telefono_contacto:telefono_contacto,fecha_contacto:fecha_contacto,correo_contacto:correo_contacto,dudas_envio:dudas_envio,otra_duda:otra_duda,fecha_evento:fecha_evento,evento:evento,ajuste:ajuste,platillo:platillo},
    success:function(respuesta){
  
        $('#resultado').html(respuesta);
      

		boton = document.getElementById('boton1');
            boton.style.display = '';

		$('#boton1').click(function(){

			$('#resultado').html('');
			boton.style.display='none';
		});


    }
});


     
}
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const formulario = document.getElementById('formulario');

const inputs  = document.querySelectorAll('#formulario input');

const campos = {
    usuario:false,
    nombre:false,
    password:false,
   
correo:false,
    telefono:false
}



const validarFormulario = (e) => {

switch(e.target.name){
    case"usuario":
validarCampo(expresiones.usuario,e.target,'usuario');

    break;


    case"nombre":


    validarCampo(expresiones.nombre,e.target,'nombre');





    break;



    case"password":

    validarCampo(expresiones.password,e.target,'password');
    
validarpassword2();

    break;
    
    case"password2":


validarpassword2();

    break;


    
    case"correo":

validarCampo(expresiones.correo,e.target,'correo');


    break;


    
    case"telefono":

    validarCampo(expresiones.telefono,e.target,'telefono');

    break;


}
}

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



 const validarpassword2 = () =>{
    const inputpassword1  =document.getElementById('password');
    const inputpassword2  =document.getElementById('password2');
    if(inputpassword1.value !== inputpassword2.value){


        document.getElementById(`grupo_password2`).classList.add('formulario_grupo-incorecto');  
        document.getElementById(`grupo_password2`).classList.remove('formulario_grupo-correcto');   

        document.querySelector(`#grupo_password2 i`).classList.add('fa-circle-xmark');
    document.querySelector(`#grupo_password2 i`).classList.remove('fa-circle-check');
    
    document.querySelector(`#grupo_password2 .formulario_input_error`).classList.add('formulario_input_error-activo');

    campos['password'] = false;

    }
    else{
        document.getElementById(`grupo_password2`).classList.remove('formulario_grupo-incorecto');  
        document.getElementById(`grupo_password2`).classList.add('formulario_grupo-correcto');   

        document.querySelector(`#grupo_password2 i`).classList.remove('fa-circle-xmark');
    document.querySelector(`#grupo_password2 i`).classList.add('fa-circle-check');
    
    document.querySelector(`#grupo_password2 .formulario_input_error`).classList.remove('formulario_input_error-activo');
    campos['password'] = true;
    }
 }

inputs.forEach( (input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
} );

formulario.addEventListener('submit',(e) => {
e.preventDefault();

const terminos = document.getElementById('terminos');
if(campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono && terminos.checked){
    console.log('entropero no jalo');
formulario.reset();

document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');

setTimeout(()=>{
    document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');


},2000);


document.querySelectorAll(".formulario_grupo-correcto").forEach((icono)=> {
icono.classList.remove('formulario_grupo-correcto');
});
}

else{
    document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
    setTimeout(()=>{
        document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
    
    
    },2000);

}



});
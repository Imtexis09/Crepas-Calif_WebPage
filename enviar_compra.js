const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, //validar el correo
	telefono: /^\d{10,10}$/, // 10 numeros a fuerza
    edad: /^\d{2,2}$/, //2 numeros afuerza
    apellidos:/^[a-zA-ZÀ-ÿ\s]{4,30}$/ // de 4 a 30 igual qu el nombre
}

const formulario = document.getElementById('formulario');

const inputs= document.querySelectorAll('#formulario input');

const campos = {
    usuario:false,
    nombre:false,
    password:false,
   
correo:false,
    telefono:false,
    edad:false,
    apellidos:false
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


       
    case"edad":

    validarCampo(expresiones.edad,e.target,'edad');
validar_edad();
    break;

    case"apellidos":

    validarCampo(expresiones.apellidos,e.target,'apellidos');

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

const validar_edad = () =>{
    const edad1  = document.getElementById("edad");
    const expresion_edad = expresiones.edad;
    if((parseInt(edad1.value)>=0 && parseInt(edad1.value)<18) || parseInt(edad1.value)>60 || parseInt(edad1.value)<0 || expresion_edad.test(edad1.value) == false ){



        document.getElementById(`grupo_edad`).classList.add('formulario_grupo-incorecto');  
        document.getElementById(`grupo_edad`).classList.remove('formulario_grupo-correcto');   

        document.querySelector(`#grupo_edad i`).classList.add('fa-circle-xmark');
    document.querySelector(`#grupo_edad i`).classList.remove('fa-circle-check');
    
    document.querySelector(`#grupo_edad .formulario_input_error`).classList.add('formulario_input_error-activo');

    campos['edad'] = false;


    }
    else{
        document.getElementById(`grupo_edad`).classList.remove('formulario_grupo-incorecto');  
        document.getElementById(`grupo_edad`).classList.add('formulario_grupo-correcto');   

        document.querySelector(`#grupo_edad i`).classList.remove('fa-circle-xmark');
    document.querySelector(`#grupo_edad i`).classList.add('fa-circle-check');
    
    document.querySelector(`#grupo_edad .formulario_input_error`).classList.remove('formulario_input_error-activo');
    campos['edad'] = true;


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

    enviardatos();




document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');

setTimeout(()=>{
    document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');


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
function enviardatos(){
    const formulario = document.getElementById('formulario');
    nombre=$('#nombre').val();
apellidos=$('#apellidos').val();
    correo=$('#correo').val();
    edad=$('#edad').val();
    telefono=$('#telefono').val();
    usuario=$('#usuario').val();
    password=$('#password').val();
password2=$('#password2').val();





$.ajax({
    url:'',
    type:'post',
    data:{nombre:nombre,apellidos:apellidos,correo:correo,edad:edad,telefono:telefono,usuario:usuario,password:password},
    success:function(respuesta){
  
        $('#resultado').html(respuesta);
      

		boton = document.getElementById('boton1');
            boton.style.display = '';

		$('#boton1').click(function(){

			$('#resultado').html('');
			boton.style.display='none';
		});


    }
});}
const formulario3 = document.querySelector("#form_sesion3");

const expresiones3 = {
  usuario: /^[a-zA-ZÀ-ÿ\s]{4,30}$/,// Letras y espacios, pueden llevar acentos.
  password: /^.{4,12}$/, // 4 a 12 digitos.
}

const inputs3 = document.querySelectorAll("#form_sesion3 input")

const campos3 = {
  usuario3 : false,
  password31: false
}



const validar_formulario3 = (e) =>{
  console.log(e.target.name);
switch(e.target.name){
  case"usuario3":
  validarCampo3(expresiones3.usuario,e.target,'usuario3');
  
      break;
  
  
      case"password31":
  
  
      validarCampo3(expresiones3.password,e.target,'password31');
  
  
      break;



}


}




const validarCampo3 = (expresion,input,campo) => {

  if(expresion.test(input.value)){
  
      document.getElementById(`grupo_${campo}`
      ).classList.remove('formulario_grupo-incorecto');   
      document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-correcto');   
  
  document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-xmark');
  document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-check');
  document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.remove('formulario_input_error-activo');
  
campos3[campo] = true;


  }else{
      document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-incorecto');  
      document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-correcto');   

      document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-xmark');
  document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-check');
  
  document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.add('formulario_input_error-activo');
  campos3[campo] = false;    
}





}


inputs3.forEach( (input)=>{
  input.addEventListener('keyup', validar_formulario3);
  input.addEventListener('blur', validar_formulario3);
} );



formulario3.addEventListener("submit",(e) =>{
  e.preventDefault();

if(campos3.usuario3 && campos3.password31){


  console.log("Entro al if de ejecucion");

  enviardatos3();


}
else{ 
console.log("entro al error");
  document.getElementById('formulario_mensaje_sesion_admin').classList.add('formulario_mensaje_sesion_admin-activo');
  setTimeout(()=>{
      document.getElementById('formulario_mensaje_sesion_admin').classList.remove('formulario_mensaje_sesion_admin-activo');
    },3000);
}
 

 



    




    
});

    function enviardatos3(){
   
      usuario=$('#usuario3').val();
      clave=$('#password31').val();
      btn=$('#enviar').val();
  $.ajax({
      url:'controlador2.php',
      type:'post',
      data:{usuario:usuario,clave:clave,btn:btn},
      success:function(respuesta3){
    
          $('#resultado_sesion-admin').html(respuesta3);
        
  
      boton = document.getElementById('boton_sesion3');
              boton.style.display = '';
  
      $('#boton_sesion3').click(function(){
  
        $('#resultado_sesion-admin').html('');
        boton.style.display='none';
      });
  
  
      }
  });
  
  
       
  }

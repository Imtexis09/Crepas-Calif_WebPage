const formulario2 = document.querySelector("#form_sesion2");

const expresiones2 = {
  usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
  password: /^.{4,12}$/, // 4 a 12 digitos.
}

const inputs2 = document.querySelectorAll("#form_sesion2 input")

const campos2 = {
  usuario2 : false,
  password21: false
}



const validar_formulario2 = (e) =>{
  console.log(e.target.name);
switch(e.target.name){
  case"usuario2":
  validarCampo2(expresiones2.usuario,e.target,'usuario2');
  
      break;
  
  
      case"password21":
  
  
      validarCampo2(expresiones2.password,e.target,'password21');
  
  
      break;



}


}




const validarCampo2 = (expresion,input,campo) => {

  if(expresion.test(input.value)){
  
      document.getElementById(`grupo_${campo}`
      ).classList.remove('formulario_grupo-incorecto');   
      document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-correcto');   
  
  document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-xmark');
  document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-check');
  document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.remove('formulario_input_error-activo');
  
campos2[campo] = true;


  }else{
      document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-incorecto');  
      document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-correcto');   

      document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-xmark');
  document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-check');
  
  document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.add('formulario_input_error-activo');
  campos2[campo] = false;    
}





}


inputs2.forEach( (input)=>{
  input.addEventListener('keyup', validar_formulario2);
  input.addEventListener('blur', validar_formulario2);
} );



formulario2.addEventListener("submit",(e) =>{
  e.preventDefault();

if(campos2.usuario2 && campos2.password21){


  console.log("Entro al if de ejecucion");

  enviardatos2();


}
else{ 
console.log("entro al error");
  document.getElementById('formulario_mensaje_sesion').classList.add('formulario_mensaje_sesion-activo');
  setTimeout(()=>{
      document.getElementById('formulario_mensaje_sesion').classList.remove('formulario_mensaje_sesion-activo');
  
  
  },3000);
}
 

 



    




    
});

    function enviardatos2(){
   
      usuario=$('#usuario2').val();
      clave=$('#password21').val();
      btn=$('#enviar').val();
  $.ajax({
      url:'controlador.php',
      type:'post',
      data:{usuario:usuario,clave:clave,btn:btn},
      success:function(respuesta2){
    
          $('#resultado_sesion').html(respuesta2);
        
  
      boton = document.getElementById('boton_sesion2');
              boton.style.display = '';
  
      $('#boton_sesion2').click(function(){
  
        $('#resultado_sesion').html('');
        boton.style.display='none';
      });
  
  
      }
  });
  
  
       
  }

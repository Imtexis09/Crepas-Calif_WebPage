let date = new Date().toLocaleDateString();
    var fecha  = document.querySelector(".insertar_fecha");   
   var enviar_fecha = document.querySelector("#fecha_actual_usuario");

   enviar_fecha.value = date;

    fecha.innerHTML = date;
    



    let boton_seguir =document.getElementById("seguir_compra");

    boton_seguir.addEventListener("click",function (){


        Swal.fire({
            position: "top-center",
              icon:"info",
              title: "La compra esta en procesamiento",
              showConfirmButton: false,
              timer:3000
              });
            
              setTimeout(()=>{
               window.location.href=("menup.php");
             },3200);
            

    });
    
    //manipulacion de fechas

  let fecha_ven = document.getElementById("fecha_vencido");

    let dia =new Date().getDate();

    let mes =new Date().getMonth();

    let year = new Date().getFullYear();

    console.log(dia);
  
    console.log(mes+1);
    
    console.log(year);
   //ENVIAR LO DEL PAGO XD 
//segun la seleccion
let selector  = document.querySelector("#pago");

//inputs para enviar la informacion
let condicion_pago = document.getElementById("condiciones_pago");
let fecha_vencimiento = document.getElementById("fecha_vencimiento");





selector.addEventListener("click",
function (){
  if(selector.value===""){
    fecha_ven.innerHTML= "Seleccione una forma de pago";
  }

  else if(selector.value==="Efectivo"){
    fecha_ven.innerHTML= (dia)+ "/" + (mes+1) + "/"+ year;


    //insersion de datos al input para enviar
    condicion_pago.value="Efectivo";
  fecha_vencimiento.value=(dia)+ "/" + (mes+1) + "/"+ year;
  }
  else if(selector.value==="Tarjeta"){
    fecha_ven.innerHTML= (dia+2)+ "/" + (mes+1) + "/"+ year;

    //insersion de datos al input para enviar
    condicion_pago.value="Tarjeta";
    fecha_vencimiento.value=(dia+2)+ "/" + (mes+1) + "/"+ year;
  }

localStorage.setItem("forma_pago",selector.value);
});
if(localStorage.getItem("forma_pago")){

  if(localStorage.getItem("forma_pago")===""){
    fecha_ven.innerHTML= "Seleccione una forma de pago";

  selector.value = localStorage.getItem("forma_pago");  
  }

  else if(localStorage.getItem("forma_pago")==="Efectivo"){
    fecha_ven.innerHTML= (dia)+ "/" + (mes+1) + "/"+ year;
    selector.value = localStorage.getItem("forma_pago"); 

    //insersion de datos al input para enviar
    condicion_pago.value="Efectivo";
  fecha_vencimiento.value=(dia)+ "/" + (mes+1) + "/"+ year;

  }
  else if(localStorage.getItem("forma_pago")==="Tarjeta"){
    fecha_ven.innerHTML= (dia+2)+ "/" + (mes+1) + "/"+ year;
    selector.value = localStorage.getItem("forma_pago"); 
    //insersion de datos al input para enviar
    condicion_pago.value="Tarjeta";
    fecha_vencimiento.value=(dia+2)+ "/" + (mes+1) + "/"+ year;
  }




}
else{
console.log("no hay guardado todavia");
}




    

    




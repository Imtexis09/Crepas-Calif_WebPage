let obtener_id = document.getElementById("obtener_maximo").value;
let modificar_id= obtener_id.substring(0,2);

console.log(modificar_id);


//agregar un numero mas y guardar con el codigo generado automaticamente

let id_nuevo= (parseInt(modificar_id))+1;
console.log(id_nuevo);

let id_final;
if(id_nuevo<=9){
     id_final= "0" + id_nuevo;
}
else{
    id_final=id_nuevo;
}

console.log(id_final);



let inicio_numeracion = id_final;


//segunda parte 

let result1= '';

 result1 = inicio_numeracion+result1

const generateRandomString =
    (num) => {
      const characters =
          'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
      const charactersLength = characters.length;
      for (let i = 0; i < num; i++) {
        result1 +=
            characters.charAt(Math.floor(Math.random() * charactersLength));
      }

      return result1;
    }



//numero de factura
let valor_general;
let insertar_no_factura = document.querySelector(".insertar_factura");
let insertar_input  = document.getElementById("factura");

if(localStorage.getItem("codigo_factura")){

valor_general = localStorage.getItem("codigo_factura");
insertar_no_factura.innerHTML = valor_general;
    insertar_input.value = valor_general;
    
    console.log("SE CARGO EL DATO QUE GUARDO CON EXITO");
}
else{ 


    valor_general = generateRandomString(6) ;    insertar_no_factura.innerHTML = valor_general;
    insertar_input.value = valor_general;
        console.log(valor_general);
        //guardando
        localStorage.setItem("codigo_factura",valor_general);
}

    

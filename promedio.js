let fisica = document.querySelector("#fisica").value;
let calculo = document.querySelector("#calculo").value;
let construye = document.querySelector("#construye").value;
let ciencias = document.querySelector("#ciencias").value;
let desarrolla = document.querySelector("#desarrolla").value;
let ingles = document.querySelector("#ingles").value;
var promedio = 0;
console.log("aqui");
const mostrar = document.querySelector("#prom");

const boton = document.querySelector("#promediar");

boton.addEventListener('click',(e) => {
    e.preventDefault();
    
    if(ciencias !== "",fisica !== "",calculo !== "",ingles !== "",construye !== "",desarrolla !== "" ){
    promedio = (fisica + calculo + construye + ciencias + desarrolla + ingles) / 6;
    
    mostrar.innerHTML = promedio;
    
    
    document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');
    
    setTimeout(()=>{
        document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');
    
    
    },3000);
    
    
    document.querySelectorAll(".formulario_grupo-correcto").forEach((icono)=> {
    icono.classList.remove('formulario_grupo-correcto');
    });
    }
    
    else{
alert("Rellena todos los campos");

        document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
        setTimeout(()=>{
            document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
        
        
        },3000);
    
    }
    
    
    
    });
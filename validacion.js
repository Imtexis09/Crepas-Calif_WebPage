var boton = document.querySelector("#botoncito3");
boton.addEventListener("click",presion);
var boton2 = document.querySelector("#botoncito4");
boton2.addEventListener("click",presion2);


var s1 = document.querySelector("#normal");
var s2 = document.querySelector("#nuevo");


function presion (){
s1.style.display = "none";
s2.style.display = "block";

}


function presion2(){
    s1.style.display = "none";
    s2.style.display = "block";
    
    }

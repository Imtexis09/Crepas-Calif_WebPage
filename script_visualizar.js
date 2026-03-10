var sesion_us = document.getElementById("sesion_usuario");

var sesion_ad = document.getElementById("sesion_admin");

var cuenta1 = document.querySelector(".us_sesion");
var cuenta2 = document.querySelector(".ad_sesion");
cuenta1.addEventListener("click",function(e){
    e.preventDefault();
    sesion_us.style.display = "block";
    sesion_ad.style.display = "none";
});

cuenta2.addEventListener("click",function(e){
    e.preventDefault();
    sesion_us.style.display = "none";
    sesion_ad.style.display = "block";

});
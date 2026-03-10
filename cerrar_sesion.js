const cerrar_sesion = document.getElementById("Cuenta");


cerrar_sesion.addEventListener("click", (e) =>{
e.preventDefault();

let text = "¿Estas seguro de cerrar sesion?\n";
if (confirm(text) == true) {
    localStorage.removeItem("datos_cargar");
    localStorage.removeItem("productos");
    localStorage.removeItem("codigo_factura");
    localStorage.removeItem("forma_pago");
    window.location.href=("salir.php");
} else {

}
});




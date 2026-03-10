 const enviar_button = document.querySelector(".enviar-cart");

 enviar_button.addEventListener("click",function (){

   Swal.fire({
position: "top-center",
  icon:"info",
  title: "La compra esta en procesamiento",
  showConfirmButton: false,
  timer:3000
  });

  setTimeout(()=>{
   window.location.href=("pagina_datos.php");
 },3200);



   
 });
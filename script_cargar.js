// En la segunda página, para recuperar los datos

var productos_concatenacion = "";
let cantidad_total = 0;


if(localStorage.getItem("datos_cargar")){
console.log("SI HAY DATO PENDEJO XD");
}
else{
    localStorage.setItem("datos_cargar","carrito cargado");
}








document.addEventListener('DOMContentLoaded', function() {
    let productos = localStorage.getItem('productos');
    if (productos) {
        productos = JSON.parse(productos);

        // Ahora, puedes mostrar los productos en un div o hacer lo que necesites
        mostrarProductos(productos);
    }
});

function mostrarProductos(productos) {
    // Supongamos que tienes un div con el id "productosContainer" donde deseas mostrar los productos
    let containerBuyCart = document.getElementById('productosContainer');

    let productosLS = productos;
    totalCard = 0;
    countProduct = 0;

    // Limpiar el contenido actual del carrito antes de agregar los productos desde el almacenamiento local
    
    productosLS.forEach(function(product) {
        const {image, title, price, amount, id} = product;
        const row = document.createElement('tr');
      // row.classList.add('item');
        row.innerHTML = `
          
          
            <td> ${amount}</td>
                <td>${title}</td>
                <td> $${price}</td>
                <td> $${(amount * price).toFixed(2)}</td>
           
            
        `;
        //  <img src="${image}" alt="">


       cantidad_total  = cantidad_total + parseInt(amount);

        containerBuyCart.appendChild(row);

        totalCard += parseFloat(price) * parseFloat(amount);
        countProduct++;
        
         productos_concatenacion = productos_concatenacion + " " + title;
    });
/*datos a la pagina*/
var priceTotal = document.getElementById("insertar_sub");

var IVA = document.getElementById("insertar_IVA");


var TOTAL = document.getElementById("insertar_total_compra");
    priceTotal.innerHTML = "$"+totalCard.toFixed(2);

    IVA.innerHTML = "$"+((totalCard.toFixed(2)) * 0.16).toFixed(2);

var sub_total = parseFloat(totalCard.toFixed(2));
var iva = parseFloat(((totalCard.toFixed(2)) * 0.16).toFixed(2));

TOTAL.innerHTML  = "$"+(sub_total + iva).toFixed(2);

//cantidad productos
/*datos a la base de datos*/
let cantidad = document.getElementById("cantidad");

let productos_enviar  = document.getElementById("productos");

let subtotal = document.getElementById("subtotal");

let iva_usuario =document.getElementById("IVA");

let total_enviar = document.getElementById("total_enviar");

iva_usuario.value = iva;

subtotal.value = sub_total;

total_enviar.value = ((sub_total + iva).toFixed(2));


productos_enviar.value = productos_concatenacion;



    cantidad.value = cantidad_total;
}

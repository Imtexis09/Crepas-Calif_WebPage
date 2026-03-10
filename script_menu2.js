//variables
let allContainerCart = document.querySelector('.products');
let containerBuyCart = document.querySelector('.card-items');
let priceTotal = document.querySelector('.price-total')
let amountProduct = document.querySelector('.count-product');

let button_buy = document.getElementById("enviar-cart");
//este arreglo es para guardar el arreglo de productos
let buyThings = [];
let totalCard = 0;
let countProduct = 0;


//functions
loadEventListeners();
//para los clics del boton de agregar al carrito
function loadEventListeners(){
    leerlocalStorage();
    allContainerCart.addEventListener('click', addProduct);

    containerBuyCart.addEventListener('click', deleteProduct);

    //ver si hay algo en el localstorage

    
   

}






//para agregar un producto
// ...

function addProduct(e) {
    e.preventDefault();
    if (e.target.classList.contains('btn-add-cart')) {
        const selectProduct = (((e.target.parentElement).parentElement).parentElement).parentElement;

        // Verificar si ya hay productos en el carrito

        let productosLS = obtenerProductoslocalStorage();
        const producto_guardado = selectProduct.querySelector('a').getAttribute('data-id');
        console.log(producto_guardado);
        var existingProduct = productosLS.find(product => product.id === producto_guardado );

        console.log(existingProduct);

        if (existingProduct) {
            existingProduct.amount += 1;
            guardarProductosLocalStorage(existingProduct);
        } else {
            readTheContent(selectProduct);
        }

        // Actualiza la visualización del carrito
        loadHtml();
        // Actualiza el carrito desde el LocalStorage
        leerlocalStorage();


        
    }
}


// ...



function deleteProduct(e) {
    if (e.target.classList.contains('delete-product')) {
        const deleteId = e.target.getAttribute('data-id');
        const productoLS = obtenerProductoslocalStorage()
        const deletedProduct = productoLS.find(product => product.id === deleteId);

        if (deletedProduct) {
            // Actualiza la lista de productos eliminando el que corresponde al ID
            eliminarProductoLocalStorage(deleteId);
            // Actualiza la visualización del carrito
            loadHtml();

            leerlocalStorage();

            // Actualiza el LocalStorage con los cambios

//va a estar checcando si hay o no
          
            
        }
    }
}





// Para leer el contenido
// ...

// ...

// ...
function readTheContent(product) {
    const infoProduct = {
        image: product.querySelector('#imagen_p img').src,
        title: product.querySelector('#title h3').textContent,
        price: product.querySelector('.price span').textContent,
        id: product.querySelector('a').getAttribute('data-id'),
        amount: 1
    }

    // Verificar si ya hay productos en el carrito
    const existingProduct = buyThings.find(p => p.id === infoProduct.id);
    if (existingProduct) {
        // El producto ya está en el carrito, incrementar cantidad
        existingProduct.amount++;
    } else {
        // El producto no está en el carrito, agregarlo
        buyThings.push(infoProduct);
    }

    // Actualizar el HTML del carrito después de agregar el producto
    loadHtml();
    // Actualizar el total y la cantidad de productos
    updateTotalAndCount();
    guardarProductosLocalStorage(infoProduct);
}




function updateTotalAndCount() {
    totalCard = buyThings.reduce((total, product) => total + parseFloat(product.price) * parseFloat(product.amount), 0);
    totalCard = isNaN(totalCard) ? 0 : totalCard.toFixed(2);
    countProduct = buyThings.reduce((count, product) => count + product.amount, 0);

    priceTotal.innerHTML = totalCard;
    amountProduct.innerHTML = countProduct;
}


function loadHtml() {
    
    clearHtml();

    buyThings.forEach(product => {
        const { image, title, price, amount, id } = product;
        const row = document.createElement('div');
        row.classList.add('item');
        row.innerHTML = `
            <img src="${image}" alt="">
            <div class="item-content">
                <h5>${title}</h5>
                <h5 class="cart-price">$${price}</h5>
                <h6>Cantidad: ${amount}</h6>
                <h6>Subtotal: $${amount * price}</h6>
            </div>
            <span class="delete-product" data-id="${id}">X</span>
        `;

        containerBuyCart.appendChild(row);
    });

    // Actualiza el total y la cantidad de productos
    updateTotalAndCount();

    // Agregar eventos a los nuevos botones después de un breve tiempo para asegurarnos de que el DOM esté actualizado
    setTimeout(attachButtonEvents, 100);
    
}







 function clearHtml(){
    containerBuyCart.innerHTML = '';
 }


 function vaciar_carrito(){
    e.preventDefault();
    while(buyThings.firstChild){
        buyThings.removeChild(buyThings.firstChild);

    }
    return false;

 }


/*---------------LOCALSTORAGE*/


 //GUARDANDO EN EL LOCAL STORAGE
// ...


// ...


function eliminarProductoLocalStorage(productoID) {
    let productosLS = obtenerProductoslocalStorage();
    productosLS = productosLS.filter(producto => producto.id !== productoID);
    localStorage.setItem('productos', JSON.stringify(productosLS));
}

function guardarProductosLocalStorage(producto) {
    let productosLS = obtenerProductoslocalStorage();
console.log(productosLS);
console.log(producto);
    console.log(productosLS.find((p)=>p.id == producto.id));

    console.log(productosLS.findIndex(p => p.id === producto.id));

    const existingProductIndex = productosLS.findIndex(p => p.id === producto.id);
    console.log(existingProductIndex);
    

    if (existingProductIndex !== -1) {
        // Verificar si la propiedad 'amount' existe antes de incrementarla
        if (productosLS[existingProductIndex].amount) {
            productosLS[existingProductIndex].amount += 1;
        } else {
            // Si 'amount' no existe, establecerlo en 1
            productosLS[existingProductIndex].amount = 1;

            
        }
    } else {
        producto.amount = 1;
        productosLS.push(producto);
    }

    localStorage.setItem('productos', JSON.stringify(productosLS));
}



function leerlocalStorage() {
    let productosLS = obtenerProductoslocalStorage();
    totalCard = 0;
    countProduct = 0;

    // Limpiar el contenido actual del carrito antes de agregar los productos desde el almacenamiento local
    clearHtml();

    productosLS.forEach(function(product) {
        const { image, title, price, amount, id } = product;
        const row = document.createElement('div');
        row.classList.add('item');
        row.innerHTML = `
            <img src="${image}" alt="">
            <div class="item-content">
                <h5>${title}</h5>
                <h5 class="cart-price">$${price}</h5>
                <h6>Cantidad: ${amount}</h6>
                <h6>Subtotal: $${(amount * price).toFixed(2)}</h6>
            </div>
            <span class="delete-product" data-id="${id}">X</span>
        `;

        containerBuyCart.appendChild(row);

        totalCard += parseFloat(price) * parseFloat(amount);
        countProduct++;
    });

    priceTotal.innerHTML = totalCard.toFixed(2);
    amountProduct.innerHTML = countProduct;

    // Agregar eventos a los nuevos botones después de un breve tiempo para asegurarnos de que el DOM esté actualizado
  
    setTimeout(attachButtonEvents, 100);


    if(JSON.parse(localStorage.getItem("productos")) && (JSON.parse(localStorage.getItem("productos")).length) >0){
        button_buy.style.display = "block";
        console.log("si hay productos");
    }else{
        button_buy.style.display = "none";
        console.log("no hay productos");
    }
}

function obtenerProductoslocalStorage() {
    let productoLS;

    try {
        productoLS = JSON.parse(localStorage.getItem('productos')) || [];
    } catch (error) {
        console.error('Error al parsear el local storage', error);
        productoLS = [];
    }

    return productoLS;
}

document.addEventListener('DOMContentLoaded', function() {
    leerlocalStorage();
    attachButtonEvents();
});



function attachButtonEvents() {
    let deleteButtons = document.querySelectorAll('.delete-product');

    deleteButtons.forEach(button => {
        button.onclick = function(e) {
            deleteProduct(e);
            // También puedes agregar más eventos aquí si es necesario
        };
    });
}


const expresiones = {
    id_producto: /^[A-Z\d\-]{2,11}$/,
    nombre: /^[a-zA-ZÀ-ÿ\s]{4,20}$/, // Letras y espacios, pueden llevar acentos.
    tipo: /^.{4,20}$/,
    precio: /^\d{2,4}$/,
    descripcion: /^.{0,50}$/,
}

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const selects = document.querySelectorAll("#formulario select");

const campos = {
    id_producto: false,
    nombre: false,
    tipo: false,
    precio: false,
    seccion: false,
    solicitud: false,
    descripcion: false
}

const validarFormulario = (e) => {
    console.log(e.target.name);
    switch (e.target.name) {
        case "id_producto":
            validarCampo(expresiones.id_producto, e.target, 'id_producto');
            break;

        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;

        case "tipo":
            validarCampo(expresiones.tipo, e.target, 'tipo');
            break;

        case "precio":
            validarCampo(expresiones.precio, e.target, 'precio');
            break;

        case "seccion":
            validar_seccion();
            break;

        case "solicitud":
            validar_solicitud();
            break;

        case "descripcion":
            validarCampo(expresiones.descripcion, e.target, 'descripcion');
            break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-incorecto');
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-correcto');

        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-check');
        document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.remove('formulario_input_error-activo');

        campos[campo] = true;
    } else {
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-incorecto');
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-correcto');

        document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-check');

        document.querySelector(`#grupo_${campo} .formulario_input_error`).classList.add('formulario_input_error-activo');
        campos[campo] = false;
    }
}


const validar_seccion = () => {
    var seccion = document.getElementById("seccion");
    seccion.addEventListener("change", function () {
        var genero2 = seccion.value;
        console.log(genero2);

        if (genero2 === "1" || genero2 === "2" || genero2 === "3") {
            document.getElementById(`grupo_seccion`).classList.remove('formulario_grupo-incorecto');
            document.getElementById(`grupo_seccion`).classList.add('formulario_grupo-correcto');
                

            document.querySelector(`#grupo_seccion i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#grupo_seccion i`).classList.add('fa-circle-check');


            campos['seccion'] = true;
        } else {
            document.getElementById(`grupo_seccion`).classList.add('formulario_grupo-incorecto');
            document.getElementById(`grupo_seccion`).classList.remove('formulario_grupo-correcto');
            document.querySelector(`#grupo_seccion i`).classList.add('fa-circle-xmark');
        document.querySelector(`#grupo_seccion i`).classList.remove('fa-circle-check');
            campos['seccion'] = false;
        }
    });
}

const validar_solicitud = () => {
    var solicitud = document.getElementById("solicitud");
    solicitud.addEventListener("click", function () {
        var genero2 = solicitud.value;
        console.log(genero2);

        if (genero2 === "Alto+" || genero2 === "Alto" || genero2 === "Medio" || genero2 === "Bajo") {
            document.getElementById(`grupo_solicitud`).classList.remove('formulario_grupo-incorecto');
            document.getElementById(`grupo_solicitud`).classList.add('formulario_grupo-correcto');
            document.querySelector(`#grupo_solicitud i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#grupo_solicitud i`).classList.add('fa-circle-check');
            campos['solicitud'] = true;
        } else {
            document.getElementById(`grupo_solicitud`).classList.add('formulario_grupo-incorecto');
            document.getElementById(`grupo_solicitud`).classList.remove('formulario_grupo-correcto');
            document.querySelector(`#grupo_solicitud i`).classList.add('fa-circle-xmark');
        document.querySelector(`#grupo_solicitud i`).classList.remove('fa-circle-check');
            campos['solicitud'] = false;
        }
    });
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

selects.forEach((select) => {
    select.addEventListener('click', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    if (campos.id_producto && campos.nombre && campos.tipo && campos.precio && campos.seccion && campos.solicitud && campos.descripcion) {
        document.getElementById('formulario_mensaje-exito').classList.add('formulario_mensaje-exito-activo');
        setTimeout(() => {
            document.getElementById('formulario_mensaje-exito').classList.remove('formulario_mensaje-exito-activo');
        }, 3000);
        formulario.submit();
    } else {
        document.getElementById('formulario_mensaje').classList.add('formulario_mensaje-activo');
        setTimeout(() => {
            document.getElementById('formulario_mensaje').classList.remove('formulario_mensaje-activo');
        }, 3000);
    }
});
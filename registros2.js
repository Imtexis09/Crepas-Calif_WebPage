function validar(){

    var nombre,apellidos,correo,usuario,clave,telefono,expresion;

    nombre=document.getElementById("nombre").value;
    apellidos=document.getElementById("apellidos").value;
    correo=document.getElementById("correo").value;
    usuario=document.getElementById("usuario").value;
    clave=document.getElementById("clave").value;
    clave2=document.getElementById("clave2").value;
    telefono=document.getElementById("telefono").value;

    expresion=/\w+@\w+\.+[a-z]/;

    if (nombre==="" || apellidos==="" || correo==="" || usuario==="" || clave==="" || telefono==="" || clave2===""){
        alert("TODOS LOS CAMPOS SON OBLIGATORIOS");
        return false;
    } else if (nombre.length>=20){
      alert("El nombre es muy LARGO");
      return false;
    } else if (apellidos.length>=30){
        alert("Los APELLIDOS son muy LARGOS");
        return false;
      }else if (/^[A-Za-z\s]+$/.test(nombre)){}else{
        alert("El NOMBRE NO ES CORRECTO ");
        return false;
      } if (/^[A-Za-z\s]+$/.test(apellidos)){}else{
        alert("Los APELLIDOS NO SON LOS CORRECTOS ");
        return false;
      }if (correo.length>=50){
        alert("El CORREO es muy LARGO");
        return false;
      }
      else if (!expresion.test(correo)){
        alert("El CORREO no es VALIDO");
        return false;
      }
      else if (usuario.length>=20 || clave.length>=20 || clave2.length>=20){
        alert("El USUARIO y la CONTRASEÑA solo deben ser 25 caracteres como máximo");
        return false;
      }
      else if (telefono.length>10){
        alert("El TELEFONO es muy largo");
        return false;
      }
      else if (isNaN(telefono)){
        alert("El TELEFONO ingresado no es un NUMERO");
        return false;
      } else if(clave2!=clave){
        alert("CONTRASEÑAS Incorrectas, vuelva a confirmar");
        return false;
      }
    }
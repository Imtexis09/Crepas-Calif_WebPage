<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
       
$conexion =mysqli_connect("localhost","root","","crepas_calif","3306");
$conexion->set_charset("utf8");

if(!$conexion){
echo("Error al conectar a la base de datos");
}
else{
  
}

//la consulta

$resultado = mysqli_query($conexion,"SELECT ID_factura FROM factura ");
if (!$resultado) {
    echo 'No se pudo ejecutar la consulta: ' . mysql_error();
    exit;
}
$fila = mysqli_fetch_row($resultado);

$contador= mysqli_query($conexion,"SELECT COUNT(ID_factura) FROM factura");
//el contador de cuantos id hay
 $contador_1 = mysqli_num_rows($contador);
echo $contador_1;

for ($i=0; $i <$contador_1 ; $i++) { 
    echo $fila[$i];

    if($fila[$i]>$fila[$i]){
        echo "<script>console.log('si hay mayor') </script>";
   $valor_maximo = $fila[$i];
}
    else{
        echo "<script>console.log('no hay mayor') </script>";
        $valor_maximo = $fila[$i];
    }

}

?>



<div id="pegar_nuevo_codigo" class="" >

<input type="text" value="<?php echo $valor_maximo?>" id="obtener_maximo">


</div>





<script>
 let obtener_id = document.getElementById("obtener_maximo").value;
let modificar_id= obtener_id.substring(0,2);

console.log(modificar_id);


//agregar un numero mas y guardar con el codigo generado automaticamente

let id_nuevo= (parseInt(modificar_id))+1;
console.log(id_nuevo);

let id_final= "0" + id_nuevo;
console.log(id_final);



let inicio_numeracion = id_final;
let result1= '';

 result1 = inicio_numeracion+result1;
//generando el codigo automaticamente
//se añade el id_general

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


    //para que genere el codigo

    
    valor_general = generateRandomString(6) ;  
        console.log(valor_general);
        //guardando
       



</script>



</body>
</html>

<?php
session_start();
if(empty($_SESSION['ID']) ){
    echo'<script>
    window.location.href=("INICIO_sesion2.php");
    </script>';  
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOLA</title>
</head>
<body>
    


<div id="usuario" class="us">
        <?php
        echo
$_SESSION['usuario']
        ?>
    </div>

    <div> 
        <a href="salir2.php">Salir de la sesion</a>
    </div>




</body>
</html>
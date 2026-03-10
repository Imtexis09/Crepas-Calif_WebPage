<?php

function conectar(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "crud_calif";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>
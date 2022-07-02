<?php
    include_once("config.php");

    //criar a conexão

    $conn = mysqli_connect($host, $db_user, $db_password, $db_name);

    //checar conexão

    if(!$conn){ 
        echo("A conexão falhou!!!");
    }else{
        echo("");
    }
?>
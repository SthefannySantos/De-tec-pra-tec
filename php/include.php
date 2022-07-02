<?php
require_once 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta = "select * from login where email = '$email' and senha = '$senha';";
$retorno = mysqli_query($conn, $consulta);
$linhas = mysqli_num_rows($retorno);


if ($linhas > 0) {
    //fazer se encontrou login e senha
    header("Location: http://localhost/tcc/tcc-sitetrajano/eden-master/administrativo.html");
}else{
    //fazer se o retorno é vazio
    header("Location: http://localhost/tcc/tcc-sitetrajano/eden-master/login.html");
}

?>

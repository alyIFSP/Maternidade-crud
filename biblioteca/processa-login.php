<?php
require "connect.php";
require "autentica.php";

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $login = new autenticacao($conn);
    $usuario = $login->verificarUsuario($email, $senha);
    if ($usuario){
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: ./../crud-vendas.php");
        exit;
    }else{

        header("Location: ./../index.php?erro=1");
    }
}

?>
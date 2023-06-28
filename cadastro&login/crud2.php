<?php

    include("conecta2.php");
    // Para pegar o texto dos inputs:
    $nome        = $_POST ["nome"];
    $email             = $_POST["email"];
    $senha            = $_POST["senha"];
    if(isset($_POST["cadastrar"]))
    {
    $comando = $pdo->prepare("INSERT INTO cadastropedro(nome, email, senha) VALUES('$nome','$email','$senha')" );
    $resultado = $comando->execute();
    header("Location: autenticacao.php");

    }

?>
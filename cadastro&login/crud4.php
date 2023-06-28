<?php

    include("conecta4.php");
    // Para pegar o texto dos inputs:
    $nome        = $_POST ["nome"];
    $email             = $_POST["email"];
    $senha            = $_POST["senha"];
    $data            = $_POST["data"];
    $biografia           = $_POST["biografia"];
    if(isset($_POST["cadastrar"]))
    {

    $comando = $pdo->prepare("INSERT INTO cadastroo VALUES('$nome','$email','$senha','$data','$biografia','')");
    $resultado = $comando->execute();
    header("Location: ../itens&produtos/publicar.php");

    }
?>
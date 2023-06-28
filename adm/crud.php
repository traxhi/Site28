<?php

include("conecta.php");
// Para pegar o texto dos inputs:
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
if (isset($_POST["inserir"])) {

    $comando = $pdo->prepare("INSERT INTO cadastropedro VALUES('$nome','$email','$senha')");
    $resultado = $comando->execute();
    header("Location: adm.php");

}
if (isset($_POST["excluir"])) {

    $comando = $pdo->prepare("DELETE FROM cadastropedro WHERE email='$email'");
    $resultado = $comando->execute();
    header("Location: adm.php");

}

if (isset($_POST["alterar"])) {
    $comando = $pdo->prepare("UPDATE cadastropedro SET nome='$nome', senha='$senha' WHERE email='$email'");
    $resultado = $comando->execute();
    header("Location: adm.php");
}

if (isset($_POST["listar"])) {
    $comando = $pdo->prepare("Select * FROM cadastropedro");
    $resultado = $comando->execute();

    while ($linhas = $comando->fetch()) {
        $n = $linhas["nome"];
        $m = $linhas["email"];
        $i = $linhas["senha"];
        echo ("$m $n $i <br> <br>");
    }
}
?>
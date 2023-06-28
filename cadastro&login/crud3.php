<?php

include("conecta4.php");
session_start();
$email = $_SESSION["login"];

// Para pegar o texto dos inputs:
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$bio = $_POST["bio"];


// Verifica se uma nova foto foi enviada
if (!empty($_FILES["foto"]["tmp_name"])) {
    try {
        $foto = file_get_contents($_FILES["foto"]["tmp_name"]);
        $comando = $pdo->prepare("UPDATE cadastropedro SET nome=:nome, senha=:senha, bio=:bio, foto=:foto WHERE email=:email");
        $comando->bindParam(":foto", $foto, PDO::PARAM_LOB);
    } catch (Exception $e) {
        // Tratamento de erro ao obter a foto
        die("Erro ao obter a foto: " . $e->getMessage());
    }
} else {
    // Caso nenhuma nova foto tenha sido enviada, remove a coluna 'foto' do comando SQL
    $comando = $pdo->prepare("UPDATE cadastropedro SET nome=:nome, senha=:senha, bio=:bio WHERE email=:email");
}

// Define os parâmetros restantes e executa o comando SQL
$comando->bindParam(":nome", $nome);
$comando->bindParam(":senha", $senha);
$comando->bindParam(":email", $email);
$comando->bindParam(":bio", $bio);

try {
    $resultado = $comando->execute();
    header("Location: perfil.php"); // Redireciona para perfil.php
} catch (Exception $e) {
    // Tratamento de erro ao executar o comando SQL
    die("Erro ao atualizar o perfil: " . $e->getMessage());
}
?>